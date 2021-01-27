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
                    <form action="{{route('kelurahan.update',$kelurahan->id)}}" method="post">
                     <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Kelurahan</label>
                            <input type="text" name="nama_kelurahan" value="{{$kelurahan->nama_kelurahan}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select name="id_kecamatan" class="form-control" id="">
                                @foreach($kecamatan as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_kecamatan == $kelurahan->kecamatan->nama_kecamatan)
                                    selected
                                @endif
                                >
                                {{$data->nama_kecamatan}}
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