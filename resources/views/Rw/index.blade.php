@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelurahan</th>
                                    <th>Nama Rw</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                                @foreach ($rw as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->kelurahan->nama_kelurahan }}</td>
                                        <td>{{ $data->nama_rw }}</td>
                                        <td>
                                            <form action="{{ route('rw.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('rw.show', $data->id) }}"
                                                    class="btn btn-outline-dark">Lihat</a> |
                                                <a href="{{ route('rw.edit', $data->id) }}"
                                                    class="btn btn-outline-dark">Edit</a> |
                                                <button type="submit" onclick="return confirm('Aapakah Anda Yakin?')"
                                                    class="btn btn-outline-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('rw.create') }}" class="btn btn-outline-dark">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
