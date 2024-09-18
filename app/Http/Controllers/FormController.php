<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\PesertaPelatihan;
use App\Models\Gelombang;
use App\Models\Jurusan;
use RealRashid\SweetAlert\Facades\Alert;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $pesertas = PesertaPelatihan::latest()->first();
        return view('form.index', compact('pesertas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = Jurusan::all();
        $jurusan1 = $jurusans->slice(0,8);
        $jurusan2 = $jurusans->slice(8,8);
        $gelombangs = Gelombang::where('aktif', 1)->get();
        return view('form.create', compact('gelombangs', 'jurusan1','jurusan2'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info_pelatihan = json_encode($request->info_pelatihan);
        $alt_kejuruan = json_encode($request->alternatif_kejuruan);


        $lastPeserta = PesertaPelatihan::latest('id')->first();
        $count = $lastPeserta ? $lastPeserta->id + 1 : 1;

        $folderName = 'peserta' . $count;
        $publicPath = public_path('uploads/' . $folderName);

        // Ensure the 'uploads' directory exists
        if (!File::exists(public_path('uploads'))) {
            File::makeDirectory(public_path('uploads'), 0755, true);
        }
        // Ensure the specific participant's folder exists
        if (!File::exists($publicPath)) {
            File::makeDirectory($publicPath, 0755, true);
        }

        // Save the file in the new folder
        // ss_instagram
        $file = $request->file('ss_instagram');
        $ss_instagram = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $ss_instagram);

        // file_ktp
        $file = $request->file('file_ktp');
        $file_ktp = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $file_ktp);

        // file_domisili
        $file = $request->file('file_domisili');
        $file_domisili = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $file_domisili);

        // file_kk
        $file = $request->file('file_kk');
        $file_kk = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $file_kk);

        // file_ijasah
        $file = $request->file('file_ijasah');
        $file_ijasah = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $file_ijasah);

        // file_vaksin
        $file = $request->file('file_vaksin');
        $file_vaksin = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $file_vaksin);

        // photo
        $file = $request->file('photo');
        $photo = $file->getClientOriginalName(); // Or use a unique name
        $file->move($publicPath, $photo);

        // Define the path to save in the database
        $photo = 'uploads/' . $folderName . '/' . $photo;
        $ss_instagram = 'uploads/' . $folderName . '/' . $ss_instagram;
        $file_ktp = 'uploads/' . $folderName . '/' . $file_ktp;
        $file_domisili = 'uploads/' . $folderName . '/' . $file_domisili;
        $file_kk = 'uploads/' . $folderName . '/' . $file_kk;
        $file_ijasah = 'uploads/' . $folderName . '/' . $file_ijasah;
        $file_vaksin = 'uploads/' . $folderName . '/' . $file_vaksin;

        PesertaPelatihan::create([
            'id_jurusan' => $request->id_jurusan,
            'id_gelombang' => $request->id_gelombang,
            'info_pelatihan' => $info_pelatihan,
            'ss_instagram' => $ss_instagram,
            'email' => $request->email,
            'nama_lengkap' => $request->nama_lengkap,
            'nik' => $request->nik,
            'kartu_keluarga' => $request->kartu_keluarga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nomor_hp' => $request->nomor_hp,
            'disabilitas' => $request->disabilitas,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'nama_sekolah' => $request->nama_sekolah,
            'kejuruan' => $request->kejuruan,
            'aktivitas_saat_ini' => $request->aktivitas_saat_ini,
            'rumah_susun' => $request->rumah_susun,
            'alamat_rumah' => $request->alamat_rumah,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota_madya' => $request->kota_madya,
            'file_ktp' =>  $file_ktp,
            'file_domisili' =>  $file_domisili,
            'file_kk' =>  $file_kk,
            'file_ijasah' =>  $file_ijasah,
            'photo' =>  $photo,
            'file_vaksin' =>  $file_vaksin,
            'alternatif_kejuruan' => $alt_kejuruan,
            'persetujuan' => $request->persetujuan,
            'status' => $request->status
        ]);
        Alert::success('Thanks For Register', 'Terimakasih Anda Telah Mendaftar, Tunggu Jawabannya Ya...!');
        return redirect()->to('formulir')->with('message', 'Data Berhasil di simpan');
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


        $jurusans = Jurusan::all();
        $jurusan1 = $jurusans->slice(0,8);
        $jurusan2 = $jurusans->slice(8,8);
        $gelombangs = Gelombang::where('aktif', 1)->get();
        $pesertas = PesertaPelatihan::latest()->first();
        $infos_pelatihan = json_decode($pesertas->info_pelatihan);
        $alt_kejuruan = json_decode($pesertas->alternatif_kejuruan);
        return view('form.edit', compact('pesertas','gelombangs', 'jurusan1','jurusan2','infos_pelatihan','alt_kejuruan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $peserta = PesertaPelatihan::latest('id')->first();
        $folderPath = public_path('uploads/peserta' . $peserta->id);



        if ($request->hasFile('ss_instagram')) {
            // Hapus file KTP lama jika ada
            if ($peserta->ss_instagram && file_exists($folderPath . '/' . $peserta->ss_instagram)) {
                unlink($folderPath . '/' . $peserta->ss_instagram);
            }
            // Simpan file KTP baru
            $ss_instagram = $request->file('ss_instagram')->getClientOriginalName();
            $request->file('ss_instagram')->move($folderPath, $ss_instagram);
            $peserta->ss_instagram = 'uploads/peserta' . $peserta->id . '/' . $ss_instagram;
            }

        if ($request->hasFile('file_ktp')) {
            // Hapus file KTP lama jika ada
            if ($peserta->file_ktp && file_exists($folderPath . '/' . $peserta->file_ktp)) {
                unlink($folderPath . '/' . $peserta->file_ktp);
            }
            // Simpan file KTP baru
            $file_ktp = $request->file('file_ktp')->getClientOriginalName();
            $request->file('file_ktp')->move($folderPath, $file_ktp);
            $peserta->file_ktp = 'uploads/peserta' . $peserta->id . '/' . $file_ktp;
            }

        if ($request->hasFile('file_domisili')) {
            // Hapus file KTP lama jika ada
            if ($peserta->file_domisili && file_exists($folderPath . '/' . $peserta->file_domisili)) {
                unlink($folderPath . '/' . $peserta->file_domisili);
            }
            // Simpan file KTP baru
            $file_domisili = $request->file('file_domisili')->getClientOriginalName();
            $request->file('file_domisili')->move($folderPath, $file_domisili);
            $peserta->file_domisili = 'uploads/peserta' . $peserta->id . '/' . $file_domisili;
            }

        if ($request->hasFile('file_kk')) {
            // Hapus file KTP lama jika ada
            if ($peserta->file_kk && file_exists($folderPath . '/' . $peserta->file_kk)) {
                unlink($folderPath . '/' . $peserta->file_kk);
            }
            // Simpan file KTP baru
            $file_kk = $request->file('file_kk')->getClientOriginalName();
            $request->file('file_kk')->move($folderPath, $file_kk);
            $peserta->file_kk = 'uploads/peserta' . $peserta->id . '/' . $file_kk;
            }

        if ($request->hasFile('photo')) {
            // Hapus file KTP lama jika ada
            if ($peserta->photo && file_exists($folderPath . '/' . $peserta->photo)) {
                unlink($folderPath . '/' . $peserta->photo);
            }
            // Simpan file KTP baru
            $photo = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($folderPath, $photo);
            $peserta->photo = 'uploads/peserta' . $peserta->id . '/' . $photo;
            }

        if ($request->hasFile('file_ijasah')) {
            // Hapus file KTP lama jika ada
            if ($peserta->file_ijasah && file_exists($folderPath . '/' . $peserta->file_ijasah)) {
                unlink($folderPath . '/' . $peserta->file_ijasah);
            }
            // Simpan file KTP baru
            $file_ijasah = $request->file('file_ijasah')->getClientOriginalName();
            $request->file('file_ijasah')->move($folderPath, $file_ijasah);
            $peserta->file_ijasah = 'uploads/peserta' . $peserta->id . '/' . $file_ijasah;
            }

        if ($request->hasFile('file_vaksin')) {
            // Hapus file KTP lama jika ada
            if ($peserta->file_vaksin && file_exists($folderPath . '/' . $peserta->file_vaksin)) {
                unlink($folderPath . '/' . $peserta->file_vaksin);
            }
            // Simpan file KTP baru
            $file_vaksin = $request->file('file_vaksin')->getClientOriginalName();
            $request->file('file_vaksin')->move($folderPath, $file_vaksin);
            $peserta->file_vaksin = 'uploads/peserta' . $peserta->id . '/' . $file_vaksin;
            }






        $peserta->email = $request->email;
        $peserta->id_jurusan = $request->id_jurusan;
        $peserta->id_gelombang = $request->id_gelombang;
        $peserta->nama_lengkap = $request->nama_lengkap;
        $peserta->nik = $request->nik;
        $peserta->kartu_keluarga = $request->kartu_keluarga;
        $peserta->jenis_kelamin = $request->jenis_kelamin;
        $peserta->tempat_lahir = $request->tempat_lahir;
        $peserta->tanggal_lahir = $request->tanggal_lahir;
        $peserta->nomor_hp = $request->nomor_hp;
        $peserta->disabilitas = $request->disabilitas;
        $peserta->pendidikan_terakhir = $request->pendidikan_terakhir;
        $peserta->nama_sekolah = $request->nama_sekolah;
        $peserta->kejuruan = $request->kejuruan;
        $peserta->aktivitas_saat_ini = $request->aktivitas_saat_ini;
        $peserta->rumah_susun = $request->rumah_susun;
        $peserta->alamat_rumah = $request->alamat_rumah;
        $peserta->rt = $request->rt;
        $peserta->rw = $request->rw;
        $peserta->kelurahan = $request->kelurahan;
        $peserta->kecamatan = $request->kecamatan;
        $peserta->kota_madya = $request->kota_madya;
        $peserta->persetujuan = $request->persetujuan;
        $peserta->save();
        Alert::success('Data Edited', 'Data Anda Berhasil di Edit');
        return redirect()->to('formulir')->with('message', 'Data Berhasil di simpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
