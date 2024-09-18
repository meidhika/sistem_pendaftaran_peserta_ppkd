@extends('layouts.dashboard')
@section('title', 'User')
@section('content')
    <div class="table-responsive rounded">
        <div align="left" class="mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
        </div>
        <table id="myTable" class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Level</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user => $item)
                    <tr>
                        <td>{{ $user + 1 }}</td>
                        <td>{{ $item->level->nama_level ?? '' }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <a href="{{ route('users.show', $item->id) }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="{{ route('users.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('users.softdelete', $item->id) }}" method="POST" style="display: inline"
                                onsubmit="return confirm('Akan di delete sementara ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
