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
                                <th>Rw</th>
                                <th>Positif</th>
                                <th>Sembuh</th>
                                <th>Meninggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php $no=1; @endphp
                                @foreach($kasus as $data)
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <form action="{{route('kasus.destroy',$data->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('kasus.show',$data->id)}}" class="btn btn-outline-dark">Lihat</a> |
                                            <a href="{{route('kasus.edit',$data->id)}}" class="btn btn-outline-dark">Edit</a> |
                                            <button type="submit" onclick="return confirm('Aapakah Anda Yakin?')" class="btn btn-outline-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('kasus.create')}}" class="btn btn-outline-dark">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection