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
                                <th>Kota</th>
                                <th>Nama Kecamatan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no=1; @endphp
                                @foreach($kecamatan as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->kota->nama_kota}}</td>
                                    <td>{{$data->nama_kecamatan}}</td>
                                    <td>
                                        <form action="{{route('kecamatan.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kecamatan.show',$data->id)}}" class="btn btn-outline-dark">Lihat</a> |
                                            <a href="{{route('kecamatan.edit',$data->id)}}" class="btn btn-outline-dark">Edit</a> |
                                            <button type="submit" onclick="return confirm('Aapakah Anda Yakin?')" class="btn btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('kecamatan.create')}}" class="btn btn-outline-dark">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection