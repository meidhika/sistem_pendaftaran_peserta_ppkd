@extends('layouts.dashboard')
@section('title', 'Detail User')
@section('content')

    <div class="mb-3 row">
        <label for="level" class="form-label">Level Anda</label>
        <div class="col-sm-6">
            <input name="id_level" id="id_level" type="text" readonly class="form-control rounded"
                value="{{ $users->level->nama_level }}">
        </div>
    </div>

    <div class="mb-3 row" id="jurusan-section">
        <label for="jurusan" class="form-label">Jurusan Anda</label>
        <div class="col-sm-6">
            @foreach ($users->jurusans as $jurusan)
                <input name="id_level" id="id_level" type="text" readonly class="form-control mb-3 rounded"
                    value=" {{ $jurusan->nama_jurusan }}">
            @endforeach
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
        <div class="col-sm-6">
            <input readonly id="nama_lengkap" class="form-control rounded" name="nama_lengkap" type="text"
                placeholder="Nama Lengkap" value="{{ $users->nama_lengkap }}">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="form-label">Email *</label>
        <div class="col-sm-6">
            <input readonly value="{{ $users->email }}" id="email" class="form-control rounded" name="email"
                type="email" placeholder="Email">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-12">
            <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    {{-- <script>
        let id_level = document.getElementById('id_level');
        let value = id_level.value;
        const jurusanSection = document.getElementById('jurusan-section');

        if (value == 4 || value == 5) {
            jurusanSection.style.display = 'block';
        } else {
            jurusanSection.style.display = 'none';

        }
    </script> --}}
@endsection
