<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPermintaanUnitDetail extends Model
{
    protected $table = 'm_permintaanunit_detail';

    protected $fillable = [
        'id_permintaanunit',
        'id_barang',
        'jumlah'
    ];

    public static function rules()
    {
        $rules = [
            'id_permintaanunit'     => 'required',
            'id_barang'             => 'required',
            'jumlah'                => 'required'
        ];

        return $rules;
    }
}
