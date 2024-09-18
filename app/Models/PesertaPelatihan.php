<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaPelatihan extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id_jurusan',
        'id_gelombang',
        'info_pelatihan',
        'ss_instagram',
        'email',
        'nama_lengkap',
        'nik',
        'kartu_keluarga',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'nomor_hp',
        'disabilitas',
        'pendidikan_terakhir',
        'nama_sekolah',
        'kejuruan',
        'aktivitas_saat_ini',
        'rumah_susun',
        'alamat_rumah',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kota_madya',
        'file_ktp',
        'file_domisili',
        'file_kk',
        'file_ijasah',
        'photo',
        'file_vaksin',
        'alternatif_kejuruan',
        'persetujuan',
        'status',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }
    public function gelombang()
    {
        return $this->belongsTo(Gelombang::class, 'id_gelombang', 'id');
    }
    protected $table = 'peserta_pelatihan';
}
