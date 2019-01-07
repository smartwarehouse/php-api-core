<?php

namespace App\Http\Controllers;

use App\MJenisGudang;
use Illuminate\Http\Request;

class JenisGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = MJenisGudang::all();
        return view('dashboard.jenisgudang.list',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.jenisgudang.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),MJenisGudang::rules());

        if ($validator->fails()) {
            return response()->json([
                'message'   => 'Validation Eror',
                'code'      => 400,
                'error'     => $validator->errors()
            ], 400);
        }

        try{
            MJenisGudang::create($request->all());
            return response()->json([
                'message'   => 'OK',
                'code'      => 200,
            ],200);
        }catch (\Exception $exception){
            return response()->json([
                'message'   => 'Bad Request',
                'code'      => 400,
                'error'     => $exception,
            ],400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MJenisGudang  $mJenisGudang
     * @return \Illuminate\Http\Response
     */
    public function show(MJenisGudang $mJenisGudang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MJenisGudang  $mJenisGudang
     * @return \Illuminate\Http\Response
     */
    public function edit(MJenisGudang $mJenisGudang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MJenisGudang  $mJenisGudang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MJenisGudang $mJenisGudang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MJenisGudang  $mJenisGudang
     * @return \Illuminate\Http\Response
     */
    public function destroy(MJenisGudang $mJenisGudang)
    {
        //
    }
}
