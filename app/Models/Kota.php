<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['kode_kota','nama_kota'];
    public $timestamps = true;

    public function Provinsi(){
        return $this->belongsTo('App\Provinsi','id_provinsi');
    }
    
    public function Kecamatan(){
        return $this->hasMany('App\Kecamatan', 'id_kota');
    }
}
