<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MBarang extends Model
{

    protected $table = 'm_barang';

    protected $fillable = [
        'nama',
        'kode',
        'kelompok',
        'id_satuan',
        'id_gudang'
    ];

    public static function rules()
    {
        $rules = [
            'nama'          => 'required',
            'kode'          => 'required|unique:m_barang',
            'kelompok'      => 'required',
            'id_satuan'     => 'required',
            'id_gudang'     => 'required'
        ];

        return $rules;
    }
}
