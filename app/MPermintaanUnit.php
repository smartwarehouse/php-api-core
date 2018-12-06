<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPermintaanUnit extends Model
{
    protected $table = 'm_permintaanunit';

    protected $fillable = [
        'tgl_permintaanunit',
        'no_surat',
        'id_peminta',
        'peminta',
    ];

    public static function rules()
    {
        $rules = [
            'tgl_permintaanunit'    => 'required',
            'no_surat'              => 'required',
            'id_peminta'            => 'required',
            'peminta'               => 'required',
        ];

        return $rules;
    }
}
