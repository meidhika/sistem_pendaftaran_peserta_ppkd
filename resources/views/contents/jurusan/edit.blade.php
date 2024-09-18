@extends('layouts.dashboard')
@section('title', 'Edit Jurusan')
@section('content')
    <form action="{{ route('jurusan.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="nama_jurusan" class="form-label">Nama Jurusan*</label>
            <div class="col-sm-6">

                <input required value="{{ $edit->nama_jurusan }}" id="nama_jurusan" class="form-control" name="nama_jurusan"
                    type="text" placeholder="Nama Jurusan">
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
