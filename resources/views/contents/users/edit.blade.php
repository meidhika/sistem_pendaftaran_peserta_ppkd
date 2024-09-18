@extends('layouts.dashboard')
@section('title', 'Edit User')
@section('content')
    <form action="{{ route('users.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="level" class="form-label">Pilih Level</label>
            <div class="col-sm-6">
                <select name="id_level" id="id_level" class="form-control">
                    <option value="">Pilih Level</option>
                    @foreach ($levels as $level)
                        <option {{ $level->id == $edit->id_level ? 'selected' : '' }} value="{{ $level->id }}">
                            {{ $level->nama_level }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row" id="jurusan-section" style="display: none">
            <label for="jurusan" class="form-label">Pilih Jurusan</label>
            <div id="jurusan-wrapper">
                @if (empty($emptyJurusan)) <!-- Jika user tidak punya jurusan -->
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
                @else
                    <div id="jurusan-ada">
                        @foreach ($selectedJurusan as $sljurusan)
                            <div class="jurusan-muncul">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <select name="id_jurusan[]" class="form-control mt-3">
                                            <option value="">Pilih Jurusan</option>
                                            @foreach ($jurusans as $jurusan)
                                                <option value="{{ $jurusan->id }}"
                                                    {{ $jurusan->id == $sljurusan->id_jurusan ? 'selected' : '' }}>
                                                    {{ $jurusan->nama_jurusan }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-1">
                                        <button type="button" class="btn btn-sm btn-danger delete-jurusan-btn">-</button>

                                    </div>
                                    <div class="col-sm-1 add-jurusan-col" style="display: none;">
                                        <button type="button" class="btn btn-sm btn-primary add-jurusan-btn">+</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                @endif
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
            <div class="col-sm-6">
                <input required id="nama_lengkap" class="form-control" name="nama_lengkap" type="text"
                    placeholder="Nama Lengkap" value="{{ $edit->nama_lengkap }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="form-label">Email *</label>
            <div class="col-sm-6">
                <input required value="{{ $edit->email }}" id="email" class="form-control" name="email"
                    type="email" placeholder="Email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="password" class="form-label">Password *</label>
            <div class="col-sm-6">
                <input id="password" class="form-control" name="password" type="password" placeholder="Password">
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
        document.addEventListener('DOMContentLoaded', function() {
            const idLevelSelect = document.getElementById('id_level');
            const jurusanSection = document.getElementById('jurusan-section');
            const jurusanWrapper = document.getElementById('jurusan-wrapper');

            function toggleJurusanSection() {
                const selectedLevel = idLevelSelect.value;
                // Tampilkan jurusan-section jika id_level adalah 10 atau 11
                if (selectedLevel == 4 || selectedLevel == 5) {
                    jurusanSection.style.display = 'block';
                } else {
                    jurusanSection.style.display = 'none';
                }
            }
            idLevelSelect.addEventListener('change', toggleJurusanSection);

            toggleJurusanSection();
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
                        '.jurusan-select');
                    jurusanSelect.remove();
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const jurusanContainer = document.getElementById('jurusan-ada');

            // Fungsi untuk mengecek jumlah elemen jurusan dan mengontrol tombol +/-
            function checkJurusanCount() {
                const jurusanItems = document.querySelectorAll('.jurusan-muncul');
                jurusanItems.forEach((item, index) => {
                    const deleteBtn = item.querySelector('.delete-jurusan-btn');
                    const addBtnCol = item.querySelector('.add-jurusan-col');

                    // Jika hanya ada satu item, tampilkan tombol +
                    if (jurusanItems.length === 1) {
                        deleteBtn.style.display = 'none'; // Sembunyikan tombol -
                        addBtnCol.style.display = 'block'; // Tampilkan tombol + di samping select
                    } else {
                        deleteBtn.style.display = 'inline-block'; // Tampilkan tombol -
                        if (index === jurusanItems.length - 1) {
                            addBtnCol.style.display = 'block'; // Tampilkan tombol + di item terakhir
                        } else {
                            addBtnCol.style.display =
                                'none'; // Sembunyikan tombol + selain di item terakhir
                        }
                    }
                });
            }

            // Fungsi untuk menambah jurusan baru
            function addJurusan() {
                const newJurusan = document.createElement('div');
                newJurusan.classList.add('jurusan-muncul');
                newJurusan.innerHTML = `
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
                    <button type="button" class="btn btn-sm btn-danger delete-jurusan-btn">-</button>
                </div>
                <div class="col-sm-1 add-jurusan-col" style="display: none;">
                    <button type="button" class="btn btn-sm btn-primary add-jurusan-btn">+</button>
                </div>
            </div>
        `;
                jurusanContainer.appendChild(newJurusan);
                checkJurusanCount(); // Update status tombol +/-
            }

            // Event listener untuk menambah jurusan
            jurusanContainer.addEventListener('click', function(e) {
                if (e.target.classList.contains('add-jurusan-btn')) {
                    addJurusan();
                }
            });

            // Event listener untuk menghapus jurusan
            jurusanContainer.addEventListener('click', function(e) {
                if (e.target.classList.contains('delete-jurusan-btn')) {
                    const jurusanItems = document.querySelectorAll('.jurusan-muncul');
                    if (jurusanItems.length > 1) {
                        e.target.closest('.jurusan-muncul').remove();
                        checkJurusanCount(); // Update status tombol +/-
                    }
                }
            });

            // Panggil fungsi pengecekan pertama kali saat halaman dimuat
            checkJurusanCount();
        });
    </script>

@endsection
