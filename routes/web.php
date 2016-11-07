<?php
use Dojo\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/','FrontController@index');
Route::get('admin','FrontController@admin');

Route::resource('log','LogController');
Route::resource('usuario','UsuarioController');
Route::get('usuario','UsuarioController@pdf');
Route::resource('atleta','AtletaController');
Route::resource('buscara','BuscarAController');


Route::resource('pdf', 'PdfController');
/*Route::get('pdf', function () {
    $users= User::all();
  $pdf = PDF::loadView('vista',['users'=>$users]);
   return $pdf->download('pruebapdf.pdf');
});*/