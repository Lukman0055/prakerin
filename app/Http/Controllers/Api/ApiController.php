<?php

namespace App\Http\Controllers\Api;
use App\Models\Kasus;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Http;


class ApiController extends Controller
{

    public $data = [];
    public function global(){

        $url = Http::get('https://api.kawalcorona.com/')->json();
        foreach ($url as $data => $value) {
            $raw = $value['attributes'];
            $res = [
                'Negara' => $raw['Country_Region'],
                'Positif' => $raw['Confirmed'],
                'Sembuh' => $raw['Recovered'],
                'Meninggal' => $raw['Deaths']
            ];
            array_push($this->data, $res);
        }
        $data = [
            'success' => true,
            'data' => $this->data,
            'message' => 'berhasil'
        ];
        return response()->json($data,200);
    }
    
    public function index()
    {
        $positif1 = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh', 'kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.positif'); 
        $sembuh = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.sembuh');
        $meinggal = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.meninggal');

        $res = [
            'success' => true,
            'Data'    => 'Data Kasus Indonesia',
            'Jumlah Positif'    => $positif1,
            'Jumlah Sembuh'     => $sembuh,
            'Jumlah Meninggal'  => $meinggal,
            'message'   => "Data Kasus Ditampilkan"  
        ];
          return response()->json($res,200); 
    }
        

    public function provinsi()
    {
        $provinsi = DB::table('kasuses')
                    ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                    ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                    ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                    ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                    ->join('provinsis', 'provinsis.id', '=', 'kotas.id_provinsi')
                    ->groupBy('provinsis.nama_provinsi')
                    ->select(DB::raw('provinsis.nama_provinsi as provinsi'), 
                            DB::raw('SUM(kasuses.positif) as positif'), 
                            DB::raw('SUM(kasuses.meninggal) as meninggal'),
                            DB::raw('SUM(kasuses.sembuh) as sembuh')) 
                    ->get();
        $res = [
                    'success' => true,
                    'data' => $provinsi,
                    'message' => 'Data berhasil Ditampilkan'
        ];
        return response()->json($res, 200);  
    }

    public function kota()
    {
        $kota = DB::table('kasuses')
                    ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                    ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                    ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                    ->join('kotas', 'kotas.id', '=', 'kecamatans.id_kota')
                    ->groupBy('kotas.nama_kota')
                    ->select(DB::raw('kotas.nama_kota as kota'), 
                            DB::raw('SUM(kasuses.positif) as positif'), 
                            DB::raw('SUM(kasuses.meninggal) as meninggal'),
                            DB::raw('SUM(kasuses.sembuh) as sembuh')) 
                    ->get();
        $res = [
                    'success' => true,
                    'data' => $kota,
                    'message' => 'Data berhasil Ditampilkan'
        ];
        return response()->json($res, 200);  
    }

    public function kecamatan()
    {
        $kecamatan = DB::table('kasuses')
                    ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                    ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                    ->join('kecamatans', 'kecamatans.id', '=', 'kelurahans.id_kecamatan')
                    ->groupBy('kecamatans.nama_kecamatan')
                    ->select(DB::raw('kecamatans.nama_kecamatan as kecamatan'), 
                            DB::raw('SUM(kasuses.positif) as positif'), 
                            DB::raw('SUM(kasuses.meninggal) as meninggal'),
                            DB::raw('SUM(kasuses.sembuh) as sembuh')) 
                    ->get();
        $res = [
                    'success' => true,
                    'data' => $kecamatan,
                    'message' => 'Data berhasil Ditampilkan'
        ];
        return response()->json($res, 200);  
    }

    public function kelurahan()
    {
        $kelurahan = DB::table('kasuses')
                    ->join('rws', 'rws.id', '=', 'kasuses.id_rw')
                    ->join('kelurahans', 'kelurahans.id', '=', 'rws.id_kelurahan')
                    ->groupBy('kelurahans.nama_kelurahan')
                    ->select(DB::raw('kelurahans.nama_kelurahan as kelurahan'), 
                            DB::raw('SUM(kasuses.positif) as positif'), 
                            DB::raw('SUM(kasuses.meninggal) as meninggal'),
                            DB::raw('SUM(kasuses.sembuh) as sembuh')) 
                    ->get();
        $res = [
                    'success' => true,
                    'data' => $kelurahan,
                    'message' => 'Data berhasil Ditampilkan'
        ];
        return response()->json($res, 200);  
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
        $positif = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans', 'kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('provinsis.id',$id)
                ->sum('kasuses.positif');
        $sembuh = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans', 'kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('provinsis.id',$id)
                ->sum('kasuses.sembuh');
        $meinggal = DB::table('provinsis')
                ->join('kotas','kotas.id_provinsi','=','provinsis.id')
                ->join('kecamatans','kecamatans.id_kota','=','kotas.id')
                ->join('kelurahans', 'kelurahans.id_kecamatan','=','kecamatans.id')
                ->join('rws','rws.id_kelurahan','=','kelurahans.id')
                ->join('kasuses','kasuses.id_rw','=','rws.id')
                ->select('kasuses.positif')
                ->where('provinsis.id',$id)
                ->sum('kasuses.meninggal');

$provinsi = Provinsi::whereId($id)->first();

$res = [
    'success' => true,
    'Kode Provinsi' => $provinsi['kode_provinsi'],
    'Nama Provinsi' => $provinsi['nama_provinsi'],
    'Jumlah Positif' => $positif,
    'Jumlah Sembuh'  => $sembuh,
    'Jumlah Meninggal' => $meinggal,
    'message'   => 'Data Berhasil Ditampil'
];
return response()->json($res,200);
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
