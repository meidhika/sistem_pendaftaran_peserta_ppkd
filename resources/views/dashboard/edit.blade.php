@extends('layouts.dashboard')
@section('title', 'Edit Profile')
@section('content')
    <form action="{{ route('dashboard.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <label for="level" class="form-label">Level Anda</label>
            <small class="mt-0 mb-3" style="color: red">*Anda Tidak Diizinkan Mengedit Level, Hanya Administrator Saja Yang
                Dapat
                Mengubahnya</small>
            <div class="col-sm-6">

                <input type="hidden" name="id_level" id="" value="{{ auth()->user()->level->id ?? '' }}">
                <input {{ auth()->user()->level->id == auth()->user()->id_level ? 'readonly' : '' }}
                    value="{{ auth()->user()->level->nama_level ?? '' }}" class="form-control">


            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
            <div class="col-sm-6">
                <input required id="nama_lengkap" class="form-control" name="nama_lengkap" type="text"
                    placeholder="Nama Lengkap" value="{{ auth()->user()->nama_lengkap ?? '' }}">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="form-label">Email *</label>
            <div class="col-sm-6">
                <input required value="{{ auth()->user()->email ?? '' }}" id="email" class="form-control" name="email"
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
            </div>
        </div>
    </form>
@endsection
