<?php

namespace App\Http\Controllers;
use App\Models\Gelombang;
use App\Models\PesertaPelatihan;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Ambil data jurusan dan jumlah peserta dari gelombang aktif
    $gelombangAktif = Gelombang::where('aktif', 1)->pluck('id');

    // Ambil data jumlah peserta berdasarkan gelombang aktif
    $jurusanNames = PesertaPelatihan::whereIn('id_gelombang', $gelombangAktif)
        ->join('jurusan', 'peserta_pelatihan.id_jurusan', '=', 'jurusan.id')
        ->select('jurusan.nama_jurusan', DB::raw('count(peserta_pelatihan.id) as jumlah_peserta'))
        ->groupBy('jurusan.nama_jurusan')
        ->pluck('jurusan.nama_jurusan');

    $pesertaCounts = PesertaPelatihan::whereIn('id_gelombang', $gelombangAktif)
        ->join('jurusan', 'peserta_pelatihan.id_jurusan', '=', 'jurusan.id')
        ->select(DB::raw('count(peserta_pelatihan.id) as jumlah_peserta'))
        ->groupBy('jurusan.nama_jurusan')
        ->pluck('jumlah_peserta');

        return view('contents.report.index', compact('jurusanNames','pesertaCounts', 'gelombangAktif'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pesertaPelatihan = PesertaPelatihan::where('status', 'lolos')
        ->orWhere('status', 2)
        ->whereHas('gelombang', function ($query) {
            $query->where('aktif', 1);
        })
        ->with(['jurusan', 'gelombang'])
        ->get();

    return view('contents.report.laporan', compact('pesertaPelatihan'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
