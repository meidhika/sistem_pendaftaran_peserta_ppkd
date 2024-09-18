@extends('layouts.dashboard')
@section('title', 'Data Peserta Lolos Pelatihan')
@section('content')
    <div class="table-responsive">
        @if ($pesertaPelatihans->isEmpty())
            <p>Tidak ada peserta yang ditemukan.</p>
        @else
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Status</th>
                        <th>Detail</th>
                        <th>Gelombang</th>
                        <th>Jurusan</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Nomor Hp</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesertaPelatihans as $peserta => $item)
                        <tr>
                            <td>{{ $peserta + 1 }}</td>

                            <td>
                                <form action="{{ route('updateStatus', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status" onchange="this.form.submit()" class="form-control">
                                        <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>Pilih Status
                                        </option>
                                        <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>Lolos</option>
                                        <option value="3" {{ $item->status == 3 ? 'selected' : '' }}>Tidak Lolos
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td><a href="{{ route('peserta.show', $item->id) }}" class="btn btn-sm btn-primary">Detail</a>
                            </td>
                            <td>{{ $item->gelombang->nama_gelombang }}</td>
                            <td>{{ $item->jurusan->nama_jurusan }}</td>
                            <td>{{ $item->nama_lengkap }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nomor_hp }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
