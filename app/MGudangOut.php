<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MGudangOut extends Model
{
    protected $table = 'm_gudangout';

    protected $fillable = [
        'nomor_gudang',
        'tgl',
        'id_permintaanunit'
    ];

    public static function rules()
    {
        $rules = [
            'nomor_gudang'      => 'required',
            'tgl'               => 'required',
            'id_permintaanunit' => 'required',
        ];

        return $rules;
    }
}
