<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSurat extends Model
{

    protected $table = 'm_surat';

    protected $fillable = [
        'tgl_permintaanunit',
        'no_surat',
        'id_peminta',
        'nama_peminta',
        'id_inspeksi',
        'nama_inspeksi',
        'tanggal_inspeksi'
    ];

    public static function rules()
    {
        $rules = [
            'tgl_permintaanunit'    => 'required|date',
            'no_surat'              => 'required',
            'id_peminta'            => 'required',
            'nama_peminta'          => 'required',
            'id_inspeksi'           => 'required',
            'nama_inspeksi'         => 'required',
            'tanggal_inspeksi'      => 'required'
        ];

        return $rules;
    }
}
