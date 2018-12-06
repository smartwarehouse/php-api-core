<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MGudangOutDetail extends Model
{
    protected $table = 'm_gudangout_detail';

    protected $fillable = [
        'id_barang',
        'id_gudangout',
        'jumlah'
    ];

    public static function rules()
    {
        $rules = [
            'id_barang'     => 'required',
            'id_gudangout'  => 'required',
            'jumlah'        => 'required',
        ];

        return $rules;
    }
}
