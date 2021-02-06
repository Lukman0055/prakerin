@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="{{route('kota.update',$kota->id)}}" method="post">
                     <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kota</label>
                            <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kode Provinsi</label>
                            <input type="number" max="9999" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select name="id_provinsi" class="form-control" id="">
                                @foreach($provinsi as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_provinsi == $kota->provinsi->nama_provinsi)
                                    selected
                                @endif
                                >
                                {{$data->nama_provinsi}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{url()->previous()}}" class="btn btn-success">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection