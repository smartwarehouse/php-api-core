<?php

namespace App\Http\Controllers\API;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public $successStatus = 200;

    public function login(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('nApp')->accessToken;
            return response()->json(['success' => $success], $this->successStatus);
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email',
            'role'          => 'required',
            'password'      => 'required',
            'c_password'    => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error'     => $validator->errors()
                ], 401);
        }

        $input              = $request->all();
        $input['password']  = Hash::make($input['password']);

        try{
            User::create($input);
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

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }


    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }
}