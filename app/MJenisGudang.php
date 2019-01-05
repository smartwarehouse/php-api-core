<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MJenisGudang extends Model
{

    protected $table = 'm_jenis_gudang';

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public static function rules()
    {
        $rules = [
            'nama'            => 'required',
            'deskripsi'       => 'nullable'
        ];

        return $rules;
    }
}
