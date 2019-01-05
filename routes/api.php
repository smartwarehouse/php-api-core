<?php

use Illuminate\Http\Request;


/*
| Url Endpoint --> http://localhost/api
| Semua request harus memakai header body untuk mendapatkan return json
| 'Accept': 'application/json',
| 'Content-Type': 'application/json',
*/

Route::get('',function(){
   return [
       'status'     => 'ok',
       'code'       => 200,
       'message'    => 'This is endpoint for api (*_*)',
       'date_time'  => date('c')
   ];
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