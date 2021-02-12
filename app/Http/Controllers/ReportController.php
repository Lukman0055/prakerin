<?php

namespace App\Http\Controllers;
use App\Http\Models\Provinsi;
use App\Http\Models\Kota;
use App\Http\Models\Kecamatan;
use App\Http\Models\Kelurahan;
use App\Http\Models\RW;
use App\Http\Models\Kasus;
use carbon\carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Http;


class ReportController extends Controller
{
    
    public function index()
    {

        $all = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $all->json();
        $all2 = Http::get('https://api.kawalcorona.com/indonesia');
        $data2 = $all2->json();
       
        $positif = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh', 'kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.positif'); 
        $sembuh = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.sembuh');
        $meninggal = DB::table('rws')
                ->select('kasuses.positif',
                'kasuses.sembuh','kasuses.meninggal')
                ->join('kasuses','rws.id','=','kasuses.id_rw')
                ->sum('kasuses.meninggal');

        $global = file_get_contents('https://api.kawalcorona.com/positif');
        $posglobal = json_decode($global, TRUE);

        $tanggal = Carbon::now()->format('D d-M-Y');

        return view('welcome', compact('tanggal','data','data2','positif','sembuh','meninggal','posglobal'));

    }

}
   