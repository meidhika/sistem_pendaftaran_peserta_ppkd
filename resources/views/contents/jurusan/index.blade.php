@extends('layouts.dashboard')
@section('title', 'Jurusan')
@section('content')
    <div class="table-responsive rounded">
        <div align="left" class="mb-3">
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Create Jurusan</a>
        </div>
        <table id="myTable" class="table table-bordered text-center table-striped" id="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jurusan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $jurusan => $item)
                    <tr>
                        <td>{{ $jurusan + 1 }}</td>
                        <td>{{ $item->nama_jurusan }}</td>
                        <td><a href="{{ route('jurusan.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('jurusan.softdelete', $item->id) }}" method="POST"
                                style="display: inline" onsubmit="return confirm('Akan di delete sementara ?')">
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
    <script>
        $(document).ready(function() {
            $('#tabel-data').DataTable();
        });
    </script>


@endsection
