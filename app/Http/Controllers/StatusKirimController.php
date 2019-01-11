<?php

namespace App\Http\Controllers;

use App\MStatusKirim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StatusKirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = MStatusKirim::all();
        return view('dashboard.statuskirim.list',['data' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.statuskirim.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),MStatusKirim::rules());

        if ($validator->fails()) {
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }

        try{
            MStatusKirim::create($request->all());
            $message = 'Data Berhasil di tambahkan';
        }catch (\Exception $exception){
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }

        return redirect()->route('statuskirim')->with('notification',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
