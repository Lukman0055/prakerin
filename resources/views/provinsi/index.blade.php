@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-15">
                            <table class="table" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Provinsi</th>
                                        <th>Kode Provinsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($provinsi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_provinsi }}</td>
                                            <td>{{ $data->kode_provinsi }}</td>
                                            <td>
                                                <form action="{{ route('provinsi.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('provinsi.show', $data->id) }}"
                                                        class="btn btn-outline-dark">Lihat</a> |
                                                    <a href="{{ route('provinsi.edit', $data->id) }}"
                                                        class="btn btn-outline-dark">Edit</a> |
                                                    <button type="submit" onclick="return confirm('Aapakah Anda Yakin?')"
                                                        class="btn btn-outline-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <a href="{{ route('provinsi.create') }}" class="btn btn-outline-dark">Tambah</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
