<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MGudangInDetail extends Model
{
    protected $table = 'm_gudangin_detail';

    protected $fillable = [
        'id_barang',
        'id_gudangin',
        'jumlah'
    ];

    public static function rules()
    {
        $rules = [
            'id_barang'     => 'required',
            'id_gudangin'   => 'required',
            'jumlah'        => 'required'
        ];

        return $rules;
    }
}
