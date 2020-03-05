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
Route::get('/coba', 'Test@coba');
Route::get('/helo', function(){
	return "hello world";
});


Route::get('/pegawai', 'PegawaiController@index');
Route::post('/pegawai/create','PegawaiController@create');
Route::get('/pegawai/{id}/edit', 'PegawaiController@edit');