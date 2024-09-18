<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PesertaPelatihan;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $jumlahData = 25;
        $tempatLahirList = ['Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Medan'];

        for ($i = 0; $i < $jumlahData; $i++){
            PesertaPelatihan::create([
                'email' => $faker->unique()->safeEmail,
                'nama_lengkap' => $faker->name,
                'id_jurusan' => 17,
                'id_gelombang' => 4,
                'info_pelatihan' => '["teman","instagram"]',
                'ss_instagram'=> 'uploads/peserta1/Alibaba Account.PNG',
                'nik' => 123,
                'kartu_keluarga' => 123,
                'jenis_kelamin' => 'gender',
                'tempat_lahir' => $faker->randomElement($tempatLahirList),
                'tanggal_lahir' => $faker->date,
                'nomor_hp' => 12345,
                'disabilitas' => 'tidak',
                'pendidikan_terakhir' =>'universitas',
                'nama_sekolah'=> 'nama_sekolah',
                'kejuruan'=> 'umum',
                'aktivitas_saat_ini' => 'sekolah',
                'rumah_susun' => 'tidak',
                'alamat_rumah' => $faker->randomElement($tempatLahirList),
                'rt' =>'1',
                'rw'=> '2',
                'kelurahan'=>$faker->randomElement($tempatLahirList),
                'kecamatan'=> $faker->randomElement($tempatLahirList),
                'kota_madya' => $faker->randomElement($tempatLahirList),
                'file_ktp' => 'uploads/peserta1/Alibaba Account.PNG',
                'file_domisili'=> 'uploads/peserta1/Alibaba Account.PNG',
                'file_kk' => 'uploads/peserta1/Alibaba Account.PNG',
                'file_ijasah'=> 'uploads/peserta1/Alibaba Account.PNG',
                'photo' => 'uploads/peserta1/Alibaba Account.PNG',
                'file_vaksin' => 'uploads/peserta1/Alibaba Account.PNG',
                'alternatif_kejuruan' => '["website","bing"]',
                'persetujuan'=> 'setuju',
                'status' => null,
            ]);
        }




    }
}
