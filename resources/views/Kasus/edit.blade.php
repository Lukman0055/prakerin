@extends('layouts.master')
@section('content')
<div id="layoutSidenav_content">
<main>
<div class="mt-4">  </div>
<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-danger">
                    <div class="card-header bg-danger text-center">
                        <h3>Data Kasus</h3>
                    </div>
                    <form action="{{ route('kasus.update',$kasus->id)}}" method="post"> @method('PUT') @csrf
                        <div class="card-body">
                            <div class="row">
               
                                    <div class="col">
                                        @livewire('statecity', ['idt' => $kasus->id])
                                    </div>
                                    <div class="col">
                                        <div class=" mr-auto">
                                            <div class="form-group">
                                                <label for="">positif</label>
                                                <input type="number" max="9999" name="positif" class="form-control" required value="{{$kasus->positif}}">
                                            </div>
                                        </div>
                                        <div class=" mr-auto">
                                            <div class="form-group">
                                                <label for="">sembuh</label>
                                                <input type="number" max="9999" name="sembuh" class="form-control" required value="{{$kasus->sembuh}}">
                                            </div>
                                        </div>
                                        <div class=" mr-auto">
                                            <div class="form-group">
                                                <label for="">meninggal</label>
                                                <input type="number" max="9999" name="meninggal" class="form-control" required value="{{$kasus->meninggal}}">
                                            </div>
                                        </div>
                                        <div class=" mr-auto">
                                            <div class="form-group">
                                                <label for="">tanggal</label>
                                                <input type="date" max="9999" name="tanggal" class="form-control" required value="{{$kasus->tanggal}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <input type="submit" class="btn btn-lg btn-warning m-3 float-left" value="Edit">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection