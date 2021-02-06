<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Provinsi;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi',[ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/show/{id}', [ProvinsiController::class, 'show']);
Route::post('provinsi/update/{id}', [ProvinsiController::class, 'update']);
Route::delete('provinsi/delete/{id}', [ProvinsiController::class, 'destroy']);

//kasus
Route::get('indonesia',[ApiController::class, 'index']);
Route::get('provinsi',[ApiController::class, 'provinsi']);
Route::get('indonesia/kota',[ApiController::class, 'kota']);
Route::get('indonesia/kecamatan',[ApiController::class, 'kecamatan']);
Route::get('indonesia/kelurahan',[ApiController::class, 'kelurahan']);
Route::get('provinsi/{id}',[ApiController::class, 'show']);
//country
Route::get('global',[ApiController::class, 'global']);


