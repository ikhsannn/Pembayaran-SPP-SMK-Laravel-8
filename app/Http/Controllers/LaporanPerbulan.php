<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class LaporanPerbulan extends Controller
{
    public function index()
    {
        $month = DB::table('bulan')->get();
        $array1 = json_decode(json_encode($month), true);
        // dd($array1);
        return view('admin.laporan_perbulan.index', ["bulan"=>$array1]);
    }

    public function data_laporan_perbulan($bulan)
    {
        $month = DB::select('call laporan_perbulan(?,?)',array("utama",$bulan));
        $array1 = json_decode(json_encode($month), true);

        // dd($array1);
        return view('admin.laporan_perbulan.data', ["datas"=>$array1, "bulan"=>$bulan]);
    }

    public function pdf_laporan_perbulan(Request $request, $bulan)
    {
        $month = DB::select('call laporan_perbulan(?,?)',array("utama",$bulan));
        $array1 = json_decode(json_encode($month), true);

        foreach ($array1 as $data) {
            $tahun = $data['school_year'];
        }
        
        $month = DB::table('bulan')->where('id', $bulan)->first();
        $nama_bulan = $month->name;
        $pdf = PDF::loadView('admin.laporan_perbulan.laporan-spp-perbulan', ["datas"=>$array1, 
        "bulan"=>$nama_bulan,"tahun"=>$tahun]);
        return $pdf->download('laporan-spp-'.$nama_bulan.'.pdf');

        // return view('admin.laporan_perbulan.laporan-spp-perbulan', ["datas"=>$array1, 
        // "bulan"=>$nama_bulan,"tahun"=>$tahun]);
    }
}
