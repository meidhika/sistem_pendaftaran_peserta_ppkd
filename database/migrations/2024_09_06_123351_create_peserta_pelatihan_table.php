<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peserta_pelatihan', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->unsignedBigInteger('id_jurusan');
            $table->unsignedBigInteger('id_gelombang');
            $table->text('info_pelatihan')->nullable();
            $table->string('ss_instagram')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('nik')->nullable();
            $table->string('kartu_keluarga')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('disabilitas')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('nama_sekolah')->nullable();
            $table->string('kejuruan')->nullable();
            $table->string('aktivitas_saat_ini')->nullable();
            $table->string('rumah_susun')->nullable();
            $table->text('alamat_rumah')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kota_madya')->nullable();
            $table->string('file_ktp')->nullable();
            $table->string('file_domisili')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_ijasah')->nullable();
            $table->string('photo')->nullable();
            $table->string('file_vaksin')->nullable();
            $table->string('alternatif_kejuruan')->nullable();
            $table->string('persetujuan')->nullable();
            $table->unsignedTinyInteger('status')->nullable();
            $table->timestamps();

            $table->foreign('id_jurusan')->references('id')->on('jurusan')->onDelete('cascade');
            $table->foreign('id_gelombang')->references('id')->on('gelombang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_pelatihan');
    }
};
