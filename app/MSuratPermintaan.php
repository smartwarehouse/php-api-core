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
            'nomor_surat'           => 'required',
            'tanggal_surat'         => 'required|date',
            'penanggung_jawab'      => 'required',
            'id_vendor'             => 'required',
            'tanggal_max'           => 'required|date',
            'nama_vendor'           => 'required'
        ];

        return $rules;
    }
}
