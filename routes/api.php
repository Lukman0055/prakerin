<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Provinsi;
use App\Http\Controllers\Api\ProvinsiController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('provinsi',[ProvinsiController::class, 'index']);
