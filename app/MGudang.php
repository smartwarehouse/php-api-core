<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MGudang extends Model
{
    protected $table = 'm_gudang';

    protected $fillable = [
        'id_gudang',
        'nama',
        'alamat',
        'id_jenis_gudang'
    ];

    public static function rules()
    {
        $rules = [
            'id_gudang'         => 'required',
            'nama'              => 'required',
            'alamat'            => 'required',
            'id_jenis_gudang'   => 'required'
        ];

        return $rules;
    }
}
