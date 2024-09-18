@extends('layouts.dashboard')
@section('title', 'Your Profile')
@section('content')

    <div class="row my-5">

        <div class="col-sm-6">
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" readonly id="nama_lengkap" class="form-control"
                    value="{{ auth()->user()->nama_lengkap ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="level" class="form-label">Level</label>
                <input type="text" readonly id="level" class="form-control"
                    value="{{ auth()->user()->level->nama_level ?? '' }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" readonly id="email" class="form-control"
                    value="{{ auth()->user()->email ?? '' }}">
            </div>
            <a href="{{ route('dashboard.edit', $users->id) }}" class="btn btn-success">Edit Profile</a>
        </div>


    </div>



@endsection
