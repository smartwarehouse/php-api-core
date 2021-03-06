<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSatuan extends Model
{
    protected $table = 'm_satuan';

    protected $fillable = [
        'kode',
        'nama',
        'deskripsi'
    ];

    public static function rules()
    {
        $rules = [
            'kode'          => 'required|unique:m_satuan',
            'nama'          => 'required',
            'deskripsi'     => 'nullable'
        ];

        return $rules;
    }

//    public static function rules($update = false, $id = null)
//    {
//        $rules = [
//            'kode'          => 'required|unique',
//            'nama'          => 'required',
//            'deskripsi'     => 'required'
//        ];
//
//        if ($update) {
//            return $rules;
//        }
//
//        return $rules;
////        return array_merge($rules, [
////            'email'         => 'required|unique:colleagues,email',
////        ]);
//    }

//    public static function rules($update = false, $id = null)
//    {
//        $rules = [
//            'kode'          => 'required|unique',
//            'nama'          => 'required',
//            'deskripsi'     => 'required'
//        ];
//
//        if ($update) {
//            return $rules;
//        }
//
//        return $rules;
////        return array_merge($rules, [
////            'email'         => 'required|unique:colleagues,email',
////        ]);
//    }
}
