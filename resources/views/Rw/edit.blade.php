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
                    <form action="{{route('rw.update',$rw->id)}}" method="post">
                     <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="">Rw</label>
                            <input type="number" max="9999" name="nama_rw" value="{{$rw->nama_rw}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <select name="id_kelurahan" class="form-control" id="">
                                @foreach($kelurahan as $data)
                                <option value="{{$data->id}}"
                                @if($data->nama_kelurahan == $rw->kelurahan->nama_kelurahan)
                                    selected
                                @endif
                                >
                                {{$data->nama_kelurahan}}
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