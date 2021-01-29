<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Kasus;

class Statecity extends Component
{
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $kelurahan;
    public $rw;

    public $idT;
    public $idRw;
    public $cek1 = NULL;

    public $selectedState = NULL;
    public $selectedState2 = NULL;
    public $selectedState3 = NULL;
    public $selectedState4 = NULL;
    public $selectedState5 = NULL;

    public function mount($idt = NULL,$id_rw = NULL,$cek = NULL)
    {
        $this->provinsi = Provinsi::all();
        $this->kota = collect();
        $this->kecamatan = collect();
        $this->kelurahan = collect();
        $this->rw = collect();

        if (!is_null($idt)) {
            $kasus = Kasus::findOrFail($idt);
        }
        if (!is_null($id_rw)) {
            $rw = Rw::with('kelurahan.kecamatan.kota.provinsi')->find($id_rw);

            if ($rw) {
                $this->rw = Rw::where('id_kelurahan', $rw->id_kelurahan)->get();
                $this->kelurahan = Kelurahan::where('id_kecamatan', $rw->kelurahan->id_kecamatan)->get();
                $this->kecamatan = Kecamatan::where('id_kota', $rw->kelurahan->kecamatan->id_kota)->get();
                $this->kota = Kota::where('id_provinsi', $rw->kelurahan->kecamatan->kota->id_provinsi)->get();

                $this->provinsi = $rw->kelurahan->kecamatan->kota->id_provinsi;
                $this->kota = $rw->kelurahan->kecamatan->id_kota;
                $this->kecamatan = $rw->kelurahan->id_kecamatan;
                $this->kelurahan = $rw->id_kelurahan;
                $this->rw = $rw->id_rw;
                
            }
        }
    }

    public function render()
    {
        return view('livewire.statecity');
    }

    public function updatedSelectedState($provinsi)
    {
        $this->kota = kota::where('id_provinsi', $provinsi)->get();
        $this->selectedState2 = NULL;
        $this->selectedState3 = NULL;
        $this->selectedState4 = NULL;
        $this->selectedState5 = NULL;

    }
    public function updatedSelectedState2($kota)
    {
        $this->kecamatan = Kecamatan::where('id_kota', $kota)->get();
        $this->selectedState3 = NULL;
        $this->selectedState4 = NULL;
        $this->selectedState5 = NULL;

    }
    public function updatedSelectedState3($kecamatan)
    {
        $this->kelurahan = Kelurahan::where('id_kelurahan', $kecamatan)->get();
        $this->selectedState4 = NULL;
        $this->selectedState5 = NULL;
    }
    public function updatedSelectedState4($kelurahan)
    {
        $this->rw = Rw::where('id_kelurahan', $kelurahan)->get();
        $this->selectedState5 = NULL;
    }
}