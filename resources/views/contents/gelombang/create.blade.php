@extends('layouts.dashboard')
@section('title', 'Create Gelombang')
@section('content')
    <form action="{{ route('gelombang.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="nama_gelombang" class="form-label">Nama Gelombang*</label>
            <div class="col-sm-6">

                <input required id="nama_gelombang" class="form-control" name="nama_gelombang" type="text"
                    placeholder="Nama Gelombang">
            </div>
        </div>
        <div class="mb-3 row">
            <input id="aktif" class="form-control" name="aktif" type="hidden">
        </div>
        <div class="mb-3 row">
            <div class="col-sm-12">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="{{ route('gelombang.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
@endsection
