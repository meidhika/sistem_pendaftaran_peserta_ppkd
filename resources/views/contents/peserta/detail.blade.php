@extends('layouts.dashboard')
@section('title', 'Detail Pendaftar')
@section('content')
    <div class="mb-3" align="right">
        <button onclick="window.history.back()" class="btn btn-secondary">Kembali</button>
    </div>
    <div class="row justify-content-around">
        <div class="col-sm-6">
            <div class="card p-2">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>Foto</h6>
                            <a href="{{ asset($pesertas->photo) }}"><img src="{{ asset($pesertas->photo) }}" alt="Photo"
                                    class="rounded" width="200px"></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>Screenshot Instagram</h6>
                            <a href="{{ asset($pesertas->ss_instagram) }}"><img src="{{ asset($pesertas->ss_instagram) }}"
                                    alt="ss_instagram" class="rounded" width="200px"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>KTP</h6>
                            <a href="{{ asset($pesertas->file_ktp) }}"><img src="{{ asset($pesertas->file_ktp) }}"
                                    alt="KTP" class="rounded" width="200px"></a>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>Surat Keterangan Domisili</h6>
                            <a href="{{ asset($pesertas->file_domisili) }}">
                                <img src="{{ asset($pesertas->file_domisili) }}" alt="domisili" class="rounded"
                                    width="200px">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>Kartu Keluarga</h6>
                            <a href="{{ asset($pesertas->file_kk) }}">
                                <img src="{{ asset($pesertas->file_kk) }}" alt="kartu_keluarga" class="rounded"
                                    width="200px">
                            </a>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>Ijasah</h6>
                            <a href="{{ asset($pesertas->file_ijasah) }}"><img src="{{ asset($pesertas->file_ijasah) }}"
                                    alt="ijasah" class="rounded" width="200px"></a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="my-3">
                            <h6>Vaksin</h6>
                            <a href="{{ asset($pesertas->file_vaksin) }}">
                                <img src="{{ asset($pesertas->file_vaksin) }}" alt="vaksin" class="rounded"
                                    width="200px">
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card p-3 mb-3">
                <div>
                    <h6 class="my-0">Status</h6>
                    <p>{!! getStatusLabel($pesertas->status) !!}</p>
                </div>
                <div>
                    <h6 class="my-0">Email</h6>
                    <p>{{ $pesertas->email }}</p>
                </div>
                <div>
                    <h6 class="my-0">Nama Lengkap</h6>
                    <p>{{ $pesertas->nama_lengkap }}</p>
                </div>
                <div>
                    <h6 class="my-0">Tempat Lahir</h6>
                    <p>{{ $pesertas->tempat_lahir }}</p>
                </div>
                <div>
                    <h6 class="my-0">Tanggal Lahir</h6>
                    <p>{{ $pesertas->tanggal_lahir }}</p>
                </div>
                <div>
                    <h6 class="my-0">Nomor HP</h6>
                    <p>{{ $pesertas->nomor_hp }}</p>
                </div>
                <div>
                    <h6 class="my-0">Jenis kelamin</h6>
                    <p>{{ $pesertas->jenis_kelamin }}</p>
                </div>
            </div>

            <div class="card p-3 mb-3">
                <div>
                    <h6 class="my-0">NIK</h6>
                    <p>{{ $pesertas->nik }}</p>
                </div>
                <div>
                    <h6 class="my-0">No KK</h6>
                    <p>{{ $pesertas->kartu_keluarga }}</p>
                </div>
                <div>
                    <h6 class="my-0">Pendidikan terakhir</h6>
                    <p>{{ $pesertas->pendidikan_terakhir }}</p>
                </div>
                <div>
                    <h6 class="my-0">Nama Sekolah</h6>
                    <p>{{ $pesertas->nama_sekolah }}</p>
                </div>
                <div>
                    <h6 class="my-0">Kejuruan</h6>
                    <p>{{ $pesertas->kejuruan }}</p>
                </div>
                <div>
                    <h6 class="my-0">Aktivitas Saat Ini</h6>
                    <p>{{ $pesertas->aktivitas_saat_ini }}</p>
                </div>
            </div>
            <div class="card p-3 mb-3">
                <div>
                    <h6 class="my-0">Gelombang</h6>
                    <p>{{ $pesertas->gelombang->nama_gelombang }}</p>
                </div>
                <div>
                    <h6 class="my-0">Jurusan</h6>
                    <p>{{ $pesertas->jurusan->nama_jurusan }}</p>
                </div>
                <div>
                    <h6 class="my-0">Disabilitas</h6>
                    <p>{{ $pesertas->disabilitas }}</p>
                </div>
                <div>
                    <h6 class="my-0">Info Pelatihan</h6>
                    <ol class="m-0">
                        @foreach ($infos_pelatihan as $info)
                            <li>{{ $info }}</p>
                        @endforeach
                    </ol>
                </div>
                <div>
                    <h6 class="my-0">Persetujuan</h6>
                    <p>{{ $pesertas->persetujuan }}</p>
                </div>

            </div>
            <div class="card p-3 mb-3">
                <div>
                    <h6 class="my-0">Rumah Susun</h6>
                    <p>{{ $pesertas->rumah_susun }}</p>
                </div>
                <div>
                    <h6 class="my-0">Alamat Rumah</h6>
                    <p>{{ $pesertas->alamat_rumah }}</p>
                </div>
                <div>
                    <h6 class="my-0">RT / RW</h6>
                    <p>{{ $pesertas->rt }}/{{ $pesertas->rw }}</p>
                </div>
                <div>
                    <h6 class="my-0">Kelurahan</h6>
                    <p>{{ $pesertas->kelurahan }}</p>
                </div>
                <div>
                    <h6 class="my-0">Kecamatan</h6>
                    <p>{{ $pesertas->kecamatan }}</p>
                </div>
                <div>
                    <h6 class="my-0">Kota Madya</h6>
                    <p>{{ $pesertas->kota_madya }}</p>
                </div>
            </div>
        </div>

    </div>
    <div class="mb-3" align="right">
        <button onclick="window.history.back()" class="btn btn-secondary">Kembali</button>
    </div>
@endsection
