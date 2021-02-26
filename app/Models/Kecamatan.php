<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['id_kota','nama_kecamatan'];
    public $timestamps = true;

    public function kota(){
        return $this->belongsTo('App\Models\Kota','id_kota');
    }

    public function Kelurahan(){
        return $this->hasMany('App\Models\Kelurahan','id_kecamatan');
    }
}
