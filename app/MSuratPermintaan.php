<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSuratPermintaan extends Model
{
    protected $table = 'm_suratpermintaan';

    protected $fillable = [
        'nomor_surat',
        'tanggal_surat',
        'penanggung_jawab',
        'id_vendor',
        'tanggal_max',
        'nama_vendor'
    ];

    public static function rules()
    {
        $rules = [
            '' => 'required',
        ];

        return $rules;
    }
}
