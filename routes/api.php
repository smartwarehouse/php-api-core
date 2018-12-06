<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
| Url Endpoint http://localhost/api
*/
Route::get('',function(){
   return ['message' => 'This is endpoint for api'];
});

/*
| ROUTING GROUP API
| DENGAN NAMESPACE API
*/
Route::group(['namespace' => 'API'], function () {
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');

    Route::group(['middleware' => 'auth:api'], function(){

        Route::post('details', 'UserController@details');

        Route::apiResources([
            'barang'                    => 'BarangController',
            'gudangin'                  => 'GudangInController',
            'gudangin-detail'           => 'GudangInDetailController',
            'gudangout'                 => 'GudangOutController',
            'permintaanunit'            => 'PermintaanUnitController',
            'permintaanunit-detail'     => 'PermintaanUnitDetailController',
            'satuan'                    => 'SatuanController',
            'suratpermintaan'           => 'SuratPermintaanController',
            'suratpermintaan-detail'    => 'SuratPermintaanDetailController',
            'vendor'                    => 'VendorController',
        ]);
    });
});


//
//Route::post('login', 'API\UserController@login');
//Route::post('register', 'API\UserController@register');
//
//Route::group(['middleware' => 'auth:api'], function(){
//    Route::post('details', 'API\UserController@details');
//});
