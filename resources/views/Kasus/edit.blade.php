@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Data Kasus</h4>
                    </div>
                    <form action="{{ route('kasus.update', $kasus->id) }}" method="post">
                        <div class="card-body">
                            <div class="row">
                                @csrf
                                @livewireStyles
                                @method('PUT')
                                @livewireScripts
                                <div class="col">
                                    @livewire('statecity', ['idt' => $kasus->id_rw])
                                </div>

                                <div class="col">
                                    <div class=" mr-auto">
                                        <div class="form-group">
                                            <label for="">positif</label>
                                            <input type="number" max="9999" name="positif" class="form-control" required
                                                value="{{ $kasus->positif }}">
                                        </div>
                                    </div>
                                    <div class=" mr-auto">
                                        <div class="form-group">
                                            <label for="">sembuh</label>
                                            <input type="number" max="9999" name="sembuh" class="form-control" required
                                                value="{{ $kasus->sembuh }}">
                                        </div>
                                    </div>
                                    <div class=" mr-auto">
                                        <div class="form-group">
                                            <label for="">meninggal</label>
                                            <input type="number" max="9999" name="meninggal" class="form-control" required
                                                value="{{ $kasus->meninggal }}">
                                        </div>
                                    </div>
                                    <div class=" mr-auto">
                                        <div class="form-group">
                                            <label for="">tanggal</label>
                                            <input type="date" max="9999" name="tanggal" class="form-control" required
                                                value="{{ $kasus->tanggal }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-success">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </main>
@endsection
