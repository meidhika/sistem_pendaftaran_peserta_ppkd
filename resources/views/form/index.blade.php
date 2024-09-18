@extends('layouts.form')
@section('content')
    <div class="row jutify-content-start" style="width:90vw; margin-left:20px; position:absolute; top:100; left:0;">
        <div class="col-sm-12">
            <section>
                <div class="href-target" id="intro"></div>
                <h1 class="package-name">Hello {{ $pesertas->nama_lengkap }}, You've already responded</h1>
                <p>
                    Terima kasih sudah mendaftar pelatihan di Pusat Pelatihan Kerja Daerah (PPKD) Jakarta Pusat.
                    Hasil tes seleksi administrasi calon peserta pelatihan akan diinformasikan melalui Instagram @ppkdjp.
                </p>
                <p>
                    Jangan lupa follow dan aktifkan notifikasi Instagram untuk info-info pembukaan pelatihan, lowongan
                    pekerjaan
                    dan
                    info terbaru lainnya.
                    Terima kasih
                </p>
                <p>Apabila anda ingin mengedit jawaban anda, bisa masukkan email yang sesuai atau tekan tombol edit
                    dibawah</p>

                <a href="{{ route('formulir.edit', $pesertas->id) }}" class="btn btn-primary my-3">Edit Response</a>

            </section>
        </div>
    </div>
@endsection
