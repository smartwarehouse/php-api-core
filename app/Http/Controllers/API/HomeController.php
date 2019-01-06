<?php

namespace App\Http\Controllers\API;

use App\MBarang;
use App\MPermintaanUnit;
use App\MPermintaanUnitDetail;
use App\MSuratPermintaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function prosesSuratMasuk(){
        $result = MSuratPermintaan::where('created_at','>',Carbon::now()->subMonth());
        return response()->json($result,200);
    }

    public function totalSuratMasuk(){
        $result = MSuratPermintaan::where('created_at','>',Carbon::now()->subMonth());
        return response()->json($result,200);
    }

    public function prosesSuratKeluar(){
        $result = MPermintaanUnit::where('created_at','>',Carbon::now()->subMonth());
        return response()->json($result,200);
    }

    public function totalSuratKeluar(){
        $result = MPermintaanUnit::where('created_at','>',Carbon::now()->subMonth());
        return response()->json($result,200);
    }

    public function stokHabis(){
//        $result = MBarang::;
//        return response()->json($result,200);
    }

    public function stokDiproses(){

    }
}
