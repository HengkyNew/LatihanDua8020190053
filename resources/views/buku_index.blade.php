@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{ url('admin/buku/tambah', []) }}" class="btn btn-primary btn-sm">Tambah</a>
                    <h3>Halaman User</h3>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Tanggal Buat</th>
                                <th>Tanggal Ubah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($objek as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->pengarang }}</td>
                                <td>{{ $item->created_at->format('d/m/Y h:m:s') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y h:m:s') }}</td>
                                <td>
                                    <a href="{{ url('admin/buku/edit/'.$item->id, []) }}" class="btn btn-info btn-sm">
                                        Edit
                                    </a>
                                    <a href="{{ url('admin/buku/hapus/'.$item->id, []) }}" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah anda yakin mau menghapus data buku ini ?')">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection