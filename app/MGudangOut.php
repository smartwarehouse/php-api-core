<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MGudangOut extends Model
{
    protected $table = 'm_gudangout';

    protected $fillable = [
        'nomor_gudang',
        'tgl',
        'estimasi_pengiriman',
        'id_permintaanunit',
        'id_jeniskeluar',
        'id_statuskirim'
    ];

    public static function rules()
    {
        $rules = [
            'nomor_gudang'          => 'required',
            'tgl'                   => 'required|date',
            'estimasi_pengiriman'   => 'required',
            'id_permintaanunit'     => 'required',
            'id_jeniskeluar'        => 'required',
            'id_statuskirim'        => 'required'
        ];

        return $rules;
    }
}
