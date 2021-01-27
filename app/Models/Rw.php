<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    public function Kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }

    public function Kasus(){
        return $this->hasMany('App\\Models\Kasus', 'id_rw');
    }
}
