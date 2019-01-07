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
    return view('welcome');
});


Route::group(['prefix' => 'dashboard'], function () {

    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::group(['prefix' => 'jenis-gudang'], function () {
        Route::get('/','JenisGudangController@index')->name('jenisgudang');
        Route::get('/add','JenisGudangController@create');
        Route::post('/','JenisGudangController@store')->name('jenisgudangadd');
    });
});
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
