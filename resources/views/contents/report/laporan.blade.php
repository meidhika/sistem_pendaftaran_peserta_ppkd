@extends('layouts.dashboard')

@section('content')
    <h3>Laporan Peserta Yang Lolos</h3>
    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gelombang</th>
                    <th>Jurusan</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pesertaPelatihan as $peserta => $item)
                    <tr>
                        <td>{{ $peserta + 1 }}</td>
                        <td>{{ $item->gelombang->nama_gelombang }}</td>
                        <td>{{ $item->jurusan->nama_jurusan }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->jenis_kelamin }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
