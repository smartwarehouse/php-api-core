<?php

namespace App\Http\Controllers;

use App\MVendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendorController extends Controller
{
    public function index(){
        $result = MVendor::all();
        return view('dashboard.vendor.list',['data' => $result]);

    }

    public function create()
    {
        return view('dashboard.vendor.add');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),MVendor::rules());

        if ($validator->fails()) {
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }

        try{
            MVendor::create($request->all());
            $message = 'Data Berhasil di tambahkan';
        }catch (\Exception $exception){
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }

        return redirect()->route('vendor')->with('notification',$message);
    }
}
