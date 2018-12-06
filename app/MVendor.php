<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MVendor extends Model
{
    protected $table = 'm_vendor';

    protected $fillable = [
        'nama',
        'alamat',
        'telp'
    ];

    public static function rules()
    {
        $rules = [
            'nama'      => 'required',
            'alamat'    => 'required',
            'telp'      => 'required',
        ];

        return $rules;
    }
}
