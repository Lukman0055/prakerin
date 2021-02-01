<?php

namespace App\Http\Controllers\Api;
use App\Models\Provinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::latest()->get();
        $res = [
            'success' => true,
            'data' => $provinsi,
            'massage' => 'data berhasil'
        ];
        return response()->json($res,200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
