<?php

namespace App\Http\Controllers\API;

use App\MJenisGudang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JenisGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'message'   => 'OK',
            'code'      => 200,
            'data'          => MJenisGudang::all(),
        ],200);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = MJenisGudang::find($id);

        if(!$result){
            return response()->json([
                'message'   => 'Data not found',
                'code'      => 400,
            ],400);
        }else{
            return response()->json([
                'message'   => 'OK',
                'code'      => 200,
                'data'      => $result,
            ]);
        }
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
        try{

            $result = MJenisGudang::findOrFail($id);

            if($result->update($request->all())){
                return response()->json([
                    'code'      => 200,
                    'status'    => true,
                    'message'   => 'Update Successfuly'
                ],201);
            }else{
                return response()->json([
                    'code'      => 400,
                    'status'    => false,
                    'message'   => 'update not success'
                ],400);
            }
        }catch (\Exception $exception){
            return response()->json([
                'code'      => 400,
                'message'   => 'Bad request',
                'eror'      => ''.$exception
            ],400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $result = MJenisGudang::find($id);

            if($result) {
                MJenisGudang::find($id)->delete();
                return response()->json([
                    'code'      => 204,
                    'status'    => true,
                    'message'   => 'Delete Successfuly'
                ],204);

            }else{
                return response()->json([
                    'code'      => 400,
                    'status'    => 'false',
                    'message'   => 'delete not success'
                ],400);
            }

        }catch (\Exception $exception){
            return response()->json([
                'code'      => 400,
                'message'   => 'Bad request',
                'eror'      => ''.$exception,
            ],400);
        }
    }
}
