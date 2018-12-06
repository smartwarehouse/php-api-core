<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSuratPermintaanDetail extends Model
{
    protected $table = 'm_suratpermintaan_detail';

    protected $fillable = [
        'id_suratpermintaan',
        'id_barang',
        'jumlah'
    ];

    public static function rules()
    {
        $rules = [
            'id_suratpermintaan'    => 'required',
            'id_barang'             => 'required',
            'jumlah'                => 'required',
        ];

        return $rules;
    }
}
