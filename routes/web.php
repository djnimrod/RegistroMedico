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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// sintomas
Route::get('/cancelar',function(){
    return redirect()->route('sintoma.index')->with('cancelar','accion cancelada');
})->name('cancelar');
Route::resource('sintoma','SintomaController');
Route::get('/sintoma/{id}/confirm', 'SintomaController@confirm')->name('sintoma.confirm');
//uv
Route::get('/cancelaruv',function(){
    return redirect()->route('uv.index')->with('cancelaruv','accion cancelada');
})->name('cancelaruv');
Route::resource('uv','UvController');
Route::get('/uv/{id}/confirm', 'UvController@confirm')->name('uv.confirm');
// localidades
Route::get('/cancelarlocalidad',function(){
    return redirect()->route('localidad.index')->with('cancelarlocalidad','accion cancelada');
})->name('cancelarlocalidad');
Route::resource('localidad','LocalidadController');
Route::get('/localidad/{id}/confirm', 'LocalidadController@confirm')->name('localidad.confirm');