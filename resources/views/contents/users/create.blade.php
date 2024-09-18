@extends('layouts.dashboard')
@section('title', 'Create User')
@section('content')
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="level" class="form-label">Pilih Level</label>
            <div class="col-sm-6">
                <select name="id_level" id="id_level" class="form-control" required>
                    <option value="">Pilih Level</option>
                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->nama_level }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row" id="jurusan-section" style="display: none">
            <label for="jurusan" class="form-label">Pilih Jurusan</label>
            <div id="jurusan-wrapper">
                <div class="jurusan-select">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <select name="id_jurusan[]" class="form-control">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-1">
                            <button type="button" class="btn btn-sm btn-success add-jurusan-btn">+</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
            <div class="col-sm-6">
                <input required id="nama_lengkap" class="form-control" name="nama_lengkap" type="text"
                    placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="form-label">Email *</label>
            <div class="col-sm-6">
                <input required id="email" class="form-control" name="email" type="email" placeholder="Email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="form-label">Password *</label>
            <div class="col-sm-6">
                <input required id="password" class="form-control" name="password" type="password" placeholder="Password">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-12">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
    <script>
        document.getElementById('id_level').addEventListener('change', function() {
            const selectedLevel = this.value;
            const jurusanSection = document.getElementById('jurusan-section');
            // Assuming id 3 and 4 are for 'pic' and 'instruktur'
            if (selectedLevel == 4 || selectedLevel == 5) {
                jurusanSection.style.display = 'block';
            } else {
                jurusanSection.style.display = 'none';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jurusanWrapper = document.getElementById('jurusan-wrapper');
            document.querySelector('.add-jurusan-btn').addEventListener('click', function() {
                const newJurusanSelect = document.createElement('div');
                newJurusanSelect.classList.add('jurusan-select');
                newJurusanSelect.innerHTML = `
                <div class="row align-items-center">
                    <div class="col-sm-6">
                    <select name="id_jurusan[]" class="form-control mt-3">
                        <option value="">Pilih Jurusan</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="col-sm-1">
                    <button type="button" class="btn btn-sm btn-danger remove-jurusan-btn">-</button>
                    </div>
                </div>
                `;
                jurusanWrapper.appendChild(newJurusanSelect);
            });

            jurusanWrapper.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-jurusan-btn')) {
                    const jurusanSelect = e.target.closest(
                        '.jurusan-select'); // Mengambil elemen jurusan-select terdekat
                    jurusanSelect.remove(); // Menghapus elemen jurusan-select
                }
            });
        });
    </script>
@endsection
