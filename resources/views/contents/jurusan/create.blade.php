@extends('layouts.dashboard')
@section('title', 'Create Jurusan')
@section('content')
    <form action="{{ route('jurusan.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="nama_jurusan" class="form-label">Nama Jurusan*</label>
            <div class="col-sm-6">

                <input required id="nama_jurusan" class="form-control" name="nama_jurusan" type="text"
                    placeholder="Nama Jurusan">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-12">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="{{ route('jurusan.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
@endsection
