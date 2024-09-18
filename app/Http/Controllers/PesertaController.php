<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesertaPelatihan;
use App\Services\WhatsAppService;
use App\Models\Jurusan;
use App\Models\UserJurusan;
use App\Models\Gelombang;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Twilio\Rest\Client;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gelombangs = Gelombang::where('aktif', 1)->get();

        // Ambil ID gelombang yang aktif
        $activeGelombangIds = $gelombangs->pluck('id');

        // Ambil peserta pelatihan yang mendaftar di gelombang aktif
        $pesertas = PesertaPelatihan::whereIn('id_gelombang', $activeGelombangIds)->get();

        // $pesertas = PesertaPelatihan::with(['jurusan', 'gelombang'])->orderBy('id', 'asc')->get();
        return view('contents.peserta.index', compact('pesertas','gelombangs'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $pesertas = PesertaPelatihan::find($id);

        $infos_pelatihan = json_decode($pesertas->info_pelatihan);
        $alt_kejuruan = json_decode($pesertas->alternatif_kejuruan);
        // $pesertas = PesertaPelatihan::findOrFail($id)->with(['jurusan', 'gelombang'])->orderBy('id', 'asc');
        // dd($pesertas);
        return view('contents.peserta.detail', compact('pesertas', 'infos_pelatihan','alt_kejuruan'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {
        $peserta = PesertaPelatihan::find($id);
        $peserta->status = $request->input('status');
        $peserta->save();
        Alert::success('Status Edited', 'Status Peserta Berhasil Diedit');
        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }
    public function filter()
    {
        // Ambil user yang sedang login
        $user = auth()->user();
         // Ambil id_jurusan user dari relasi many-to-many
        $jurusanIds = $user->jurusans->pluck('id');

        // Query peserta pelatihan berdasarkan jurusan user dan gelombang aktif
        $pesertaPelatihans = PesertaPelatihan::whereIn('id_jurusan', $jurusanIds)
            ->whereHas('gelombang', function ($query) {
                $query->where('aktif', 1);
            })
            ->get();
        return view('contents.peserta.filter', compact('pesertaPelatihans'));
    }
    public function wawancara()
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Ambil id_jurusan user dari relasi many-to-many
        $jurusanIds = $user->jurusans->pluck('id');

        // Query peserta pelatihan berdasarkan jurusan user, gelombang aktif, dan status = 1
        $pesertaPelatihans = PesertaPelatihan::whereIn('id_jurusan', $jurusanIds)
            ->whereHas('gelombang', function ($query) {
                $query->where('aktif', 1);
            })
            ->where('status', 1) // Kondisi untuk status = 1
            ->get();

        // Return ke view dashboard dengan data peserta
        return view('contents.peserta.wawancara', compact('pesertaPelatihans'));
    }
    public function lolos()
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Ambil id_jurusan user dari relasi many-to-many
        $jurusanIds = $user->jurusans->pluck('id');

        // Query peserta pelatihan berdasarkan jurusan user, gelombang aktif, dan status = 1
        $pesertaPelatihans = PesertaPelatihan::whereIn('id_jurusan', $jurusanIds)
            ->whereHas('gelombang', function ($query) {
                $query->where('aktif', 1);
            })
            ->where('status', 2) // Kondisi untuk status
            ->get();

        // Return ke view dashboard dengan data peserta
        return view('contents.peserta.lolos', compact('pesertaPelatihans'));
    }
    public function gagal()
    {
        // Ambil user yang sedang login
        $user = auth()->user();

        // Ambil id_jurusan user dari relasi many-to-many
        $jurusanIds = $user->jurusans->pluck('id');

        // Query peserta pelatihan berdasarkan jurusan user, gelombang aktif, dan status = 1
        $pesertaPelatihans = PesertaPelatihan::whereIn('id_jurusan', $jurusanIds)
            ->whereHas('gelombang', function ($query) {
                $query->where('aktif', 1);
            })
            ->where('status', 3) // Kondisi untuk status
            ->get();

        // Return ke view dashboard dengan data peserta
        return view('contents.peserta.gagal', compact('pesertaPelatihans'));
    }

    public function updateAllStatus()
    {
        // Update kolom status menjadi 1 untuk semua data di tabel peserta_pelatihan
        PesertaPelatihan::query()->update(['status' => 0]);

        // Redirect atau kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Status untuk semua peserta berhasil diperbarui.');
    }




    protected $whatsAppService;

    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }

    public function sendWhatsAppMessage($id)
    {
        // Ambil data peserta pelatihan berdasarkan ID
        $peserta = PesertaPelatihan::findOrFail($id);

        // Pesan yang akan dikirim
        $message = "Halo {$peserta->nama_lengkap}, Anda terdaftar untuk pelatihan di jurusan {$peserta->jurusan->nama_jurusan}.
        Silahkan Datang Ke PPKD Jakarta Pusat Pada Hari Selasa 17 September 2024";

        // Kirim pesan WhatsApp ke nomor peserta
        $this->whatsAppService->sendMessage((string)$peserta->nomor_hp, $message);

        // Redirect dengan pesan sukses
        Alert::success('Whatsapp Sent', 'Pesan Anda Berhasil Terkirim');
        return redirect()->back()->with('success', 'Pesan WhatsApp berhasil dikirim.');
    }

}
