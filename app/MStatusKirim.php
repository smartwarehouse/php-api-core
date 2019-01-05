<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MStatusKirim extends Model
{

    protected $table = 'm_status_kirim';

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
