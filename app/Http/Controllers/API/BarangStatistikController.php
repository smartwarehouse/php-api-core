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

class BarangStatistikController extends Controller
{
    public function barangStok(){
        $m_barang_in = DB::table('m_barang')
            ->join('m_gudangin_detail','m_gudangin_detail.id_barang','=','m_barang.id')
            ->join('m_gudangin','m_gudangin.id','=','m_gudangin_detail.id_gudangin')
            ->select('m_barang.id as mbarangin_id','m_barang.nama as mbarang_nama','m_gudangin.id as mgudangin_id', DB::raw('sum(m_gudangin_detail.jumlah) as totalin'))
            ->groupBy('m_barang.id');

        $result = DB::table('m_barang')
            ->join('m_gudangout_detail','m_gudangout_detail.id_barang','=','m_barang.id')
            ->join('m_gudangout','m_gudangout.id','=','m_gudangout_detail.id_gudangout')
            ->select('m_barang.id as mbarangout_id','m_barang.nama as mbarang_nama','m_gudangout.id as mgudangout_id', DB::raw('sum(m_gudangout_detail.jumlah) as totalout'))
            ->groupBy('m_barang.id')
            ->joinSub($m_barang_in, 'm_barangin', function ($join) {
                $join->on('mbarangin_id', '=', 'mbarangout_id');
            })
            ->select('*', '(totalin - totalout) AS total_stok')
            ->get();

        return response()->json($result,200);
    }
}
