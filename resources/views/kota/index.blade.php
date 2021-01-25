@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kota</th>
                                <th>Kode Kota</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no=1; @endphp
                                @foreach($kota as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_kota}}</td>
                                    <td>{{$data->kode_kota}}</td>
                                    <td>{{$data->id_provinsi}}</td>
                                    <td>
                                        <form action="{{route('kota.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kota.show',$data->id)}}" class="btn btn-outline-dark">Lihat</a> |
                                            <a href="{{route('kota.edit',$data->id)}}" class="btn btn-outline-dark">Edit</a> |
                                            <button type="submit" onclick="return confirm('Aapakah Anda Yakin?')" class="btn btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('kota.create')}}" class="btn btn-outline-dark">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection