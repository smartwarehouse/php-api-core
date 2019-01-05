<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MGudangIn extends Model
{

    protected $table = 'm_gudangin';

    protected $fillable = [
        'id_suratpermintaan',
        'tgl_masuk',
        'penerima_barang',
        'no_suratbukti',
        'kurir'
    ];

    public static function rules()
    {
        $rules = [
            'id_suratpermintaan'    => 'required',
            'tgl_masuk'             => 'required|date',
            'penerima_barang'       => 'required',
            'no_suratbukti'         => 'required',
            'kurir'                 => 'required'
        ];

        return $rules;
    }
}
