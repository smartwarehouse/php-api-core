<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MStatusKirim extends Model
{

    protected $table = 'm_statuskirim';

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi'
    ];

    public static function rules()
    {
        $rules = [
            'kode'            => 'required',
            'nama'            => 'required',
            'deskripsi'       => 'nullable'
        ];

        return $rules;
    }
}
