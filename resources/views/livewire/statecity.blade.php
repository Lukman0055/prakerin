<div>
    <div class="form-group row">
        <label for="provinsi" class="col-md-4 col-form-label text-md-right">Provinsi</label>

        <div class="col-md-6">
            <select wire:model="selectedState" class="form-control">
                <option value="" selected>Pilih Provinsi</option>
                @foreach($provinsi as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_provinsi }}</option>
                @endforeach
            </select>
        </div>
    </div>

    @if (!is_null($selectedState))
        <div class="form-group row">
            <label for="kota" class="col-md-4 col-form-label text-md-right">Kota</label>

            <div class="col-md-6">
                <select wire:model="selectedState2" class="form-control" name="id_kota">
                    <option value="" selected>Pilih Kota</option>
                    @foreach($kota as $data2)
                        <option value="{{ $data2->id }}">{{ $data2->nama_kota }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
    @if (!is_null($selectedState2))
        <div class="form-group row">
            <label for="kecamatan" class="col-md-4 col-form-label text-md-right">Kecamatan</label>

            <div class="col-md-6">
                <select wire:model="selectedState3" class="form-control" name="id_kecamatan">
                    <option value="" selected>Pilih Kecamatan</option>
                    @foreach($kecamatan as $data3)
                        <option value="{{ $data3->id }}">{{ $data3->nama_kecamatan }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    @endif
</div>