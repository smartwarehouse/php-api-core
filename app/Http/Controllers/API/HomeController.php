<?php

namespace App\Http\Controllers\API;

use App\MBarang;
use App\MPermintaanUnit;
use App\MPermintaanUnitDetail;
use App\MSuratPermintaan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function prosesSuratMasuk(){
        $result = MSuratPermintaan::where('created_at','>',Carbon::now()->subMonth())
            ->where('tanggal_max','>',Carbon::now())
            ->count();

        return response()->json($result,200);
    }

    public function totalSuratMasuk(){
        $result = MSuratPermintaan::where('created_at','>',Carbon::now()->subMonth())
            ->count();
        return response()->json($result,200);
    }

    public function prosesSuratKeluar(){
        $result  = MPermintaanUnit::where('created_at','>',Carbon::now()->subMonth())
            ->where('estimasi_pengiriman','>',Carbon::now())
            ->count();
        return response()->json($result,200);
    }

    public function totalSuratKeluar(){
        $result = MPermintaanUnit::where('created_at','>',Carbon::now()->subMonth()->count());
        return response()->json($result,200);
    }

    public function stokHabis(){
        /*
        $result = DB::table('m_barang')
            ->select('id','nama','kode', DB::raw('count(*) as total'))
            ->groupBy('id')
            ->having('total','<',getenv('ITEM_MINIMAL'))
            ->count();
        */

        $m_barang_in = DB::table('m_barang')->join('m_gudangin_detail','m_gudangin_detail.id_barang','=','m_barang.id')
            ->join('m_gudangin','m_gudangin.id','=','m_gudangin_detail.id_gudangin')
            ->select('m_barang.id as mbarangin_id','m_barang.nama as mbarang_nama','m_gudangin.id as mgudangin_id', DB::raw('sum(m_gudangin_detail.jumlah) as totalin'))
            ->groupBy('m_barang.id');


        /*
        $m_barang_out = DB::table('m_barang')->join('m_gudangout_detail','m_gudangout_detail.id_barang','=','m_barang.id')
            ->join('m_gudangout','m_gudangout.id','=','m_gudangout_detail.id_gudangout')
            ->select('m_barang.id as mbarangiout_id','m_barang.nama as mbarang_nama','m_gudangout.id as mgudangout_id', DB::raw('sum(m_gudangout_detail.jumlah) as totalout'))
            ->groupBy('m_barang.id');
        */

        $result = DB::table('m_barang')->join('m_gudangout_detail','m_gudangout_detail.id_barang','=','m_barang.id')
            ->join('m_gudangout','m_gudangout.id','=','m_gudangout_detail.id_gudangout')
            ->select('m_barang.id as mbarangout_id','m_barang.nama as mbarang_nama','m_gudangout.id as mgudangout_id', DB::raw('sum(m_gudangout_detail.jumlah) as totalout'))
            ->groupBy('m_barang.id')
            ->joinSub($m_barang_in, 'm_barangin', function ($join) {
                $join->on('mbarangin_id', '=', 'mbarangout_id');
            })
            ->select('*', '(totalin - totalout) AS total_stok')
            ->having('total_stok','<',getenv('ITEM_MINIMAL'))
            ->count();



//        $result = $m_barang_in->merge($m_barang_out);
//        $result = $result->all();
//        $result->select('(total - totalout) AS total_barang')
//            ->having('total_barang','<',getenv('ITEM_MINIMAL'))
//            ->get();

//        $m_barang_out = DB::table('m_barang')
//            ->join('m_gudangout_detail','m_gudangout_detail.id_barang','=','m_barang.id')
//            ->join('m_gudangout','m_gudangout.id','=','m_gudangout_detail.id_gudangout')
//            ->select('m_barang.id','m_barang.nama', DB::raw('count(m_gudangout_detail.id_barang) as total'))
//            ->groupBy('m_barang.id')
//            ->having('total','<',getenv('ITEM_MINIMAL'))
//            ->get();

//        $result = DB::table('m_barang')
//            ->join('m_gudangin_detail','m_gudangin_detail.id_barang','=','m_barang.id')
//            ->join('m_gudangin','m_gudangin.id','=','m_gudangin_detail.id_gudangin')
//            ->join('m_gudangin','m_gudangin.id','=','m_gudangin_detail.id_gudangin')
//            ->having('total','<',getenv('ITEM_MINIMAL'))
//            ->count();
        return response()->json($result,200);
    }

    public function stokDiproses(){

    }
}
