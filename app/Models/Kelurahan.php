<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $fillable = ['id_kecamatan','nama_kelurahan'];
    public $timestamps = true;

    public function Rw(){
        return $this->hasMany(Rw::class);
    }
}
