<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;

class Statecity extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;

    public $selectedState = NULL;
    public $selectedState2 = NULL;
    public $selectedState3 = NULL;

    public function mount()
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();
        $this->kecamatan = collect();

    }

    public function render()
    {
        return view('livewire.statecity');
    }

    public function updatedSelectedState($provinsi)
    {
        if (!is_null($provinsi)) {
            $this->kota = Kota::where('id_provinsi', $provinsi)->get();
        }
    }
    public function updatedSelectedState2($kota)
    {
        if (!is_null($kota)) {
            $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        }
    }
    public function updatedSelectedState3($kecamatan)
    {
        if (!is_null($kecamatan)) {
            $this->kelurahan = Kelurahan::where('id_kecamatan', $kecamatan)->get();
        }
    }
}