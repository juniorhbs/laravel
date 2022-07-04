<?php

use Illuminate\Support\Facades\Route;

//possível correção.
//use App\Http\Controllers\PostController;


//O caminho precisa ser exato.
Route::get('/', 'App\Http\Controllers\PostController@showForm');
Route::post('/debug', 'App\Http\Controllers\PostController@debug')->name('debug');

//Possível solução
//Route::get('/', function (){
//    return view('form');
//});


