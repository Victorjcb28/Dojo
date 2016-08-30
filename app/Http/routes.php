<?php

Route::get('/','FrontController@index');
Route::get('admin','FrontController@admin');

Route::resource('log','logcontroller');
Route::resource('usuario','UsuarioController');
Route::resource('atleta','atletacontroller');