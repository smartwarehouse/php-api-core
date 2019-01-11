<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcomezoo');
});


Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::group(['prefix' => 'jenis-gudang'], function () {
        Route::get('/','JenisGudangController@index')->name('jenisgudang');
        Route::get('/add','JenisGudangController@create')->name('jenisgudangform');
        Route::post('/','JenisGudangController@store')->name('jenisgudangadd');
    });

    Route::group(['prefix' => 'gudang'], function () {
        Route::get('/','GudangController@index')->name('gudang');
        Route::get('/add','GudangController@create')->name('gudangform');
        Route::post('/','GudangController@store')->name('gudangadd');
    });

    Route::group(['prefix' => 'satuan'], function () {
        Route::get('/','SatuanController@index')->name('satuan');
        Route::get('/add','SatuanController@create')->name('satuanform');
        Route::post('/','SatuanController@store')->name('satuanadd');
    });

    Route::group(['prefix' => 'pengguna'], function () {
        Route::get('/','UserController@index')->name('pengguna');
        Route::get('/add','UserController@create')->name('penggunaform');
        Route::post('/','UserController@store')->name('penggunaadd');
    });

    Route::group(['prefix' => 'vendor'], function () {
        Route::get('/','VendorController@index')->name('vendor');
        Route::get('/add','VendorController@create')->name('vendorform');
        Route::post('/','VendorController@store')->name('vendoradd');
    });

    Route::group(['prefix' => 'status-kirim'], function () {
        Route::get('/','StatusKirimController@index')->name('statuskirim');
        Route::get('/add','StatusKirimController@create')->name('statuskirimform');
        Route::post('/','StatusKirimController@store')->name('statuskirimadd');
    });
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
