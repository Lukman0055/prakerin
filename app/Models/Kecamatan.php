<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['id_kota','nama_kecamatan'];
    public $timestamps = true;

    public function Kelurahan(){
        return $this->hasMany(Kelurahan::class);
    }
}
