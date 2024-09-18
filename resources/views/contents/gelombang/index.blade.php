@extends('layouts.dashboard')
@section('title', 'Gelombang')
@section('content')
    <div class="table-responsive rounded">
        <div align="left" class="mb-3">
            <a href="{{ route('gelombang.create') }}" class="btn btn-primary">Create Gelombang</a>
        </div>
        <table id="myTable" class="table table-bordered text-center table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Gelombang</th>
                    <th>Aktif</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gelombangs as $gelombang => $item)
                    <tr>
                        <td>{{ $gelombang + 1 }}</td>
                        <td>{{ $item->nama_gelombang }}</td>
                        <td>
                            {{-- <input type="radio" name="aktif" class="status-radio" data-id="{{ $item->id }}"
                                {{ $item->aktif == 1 ? 'checked' : '' }}> --}}
                            <form action="{{ route('updateStatusGelombang', $item->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="aktif" onchange="this.form.submit()" class="form-control">

                                    <option value="0" {{ $item->aktif == 0 ? 'selected' : '' }}>Tidak Aktif</option>
                                    <option value="1" {{ $item->aktif == 1 ? 'selected' : '' }}>Aktif</option>
                                </select>
                            </form>
                        </td>
                        <td><a href="{{ route('gelombang.edit', $item->id) }}" class="btn btn-sm btn-success">Edit</a>
                            <form action="{{ route('gelombang.softdelete', $item->id) }}" method="POST"
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
@endsection
