<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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
        return view('dashboard.jenisgudang.list',['data'=>$result]);
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
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }

        try{
            MJenisGudang::create($request->all());
            $message = 'Data Berhasil di tambahkan';
        }catch (\Exception $exception){
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }

        return redirect()->route('jenisgudang')->with('notification',$message);
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
