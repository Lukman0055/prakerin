@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Menampilkan Data
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kota</label>
                        <input type="text" name="nama_kota" value="{{$kota->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Kota</label>
                        <input type="text" name="kode_kota" value="{{$kota->kode_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Provinsi</label>
                        <input type="text" name="nama_provinsi" value="{{$kota->provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url()->previous()}}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection