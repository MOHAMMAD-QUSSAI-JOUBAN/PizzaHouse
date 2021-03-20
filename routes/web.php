<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/About', 'App\Http\Controllers\PizzaController@index');
Route::get('/About/{id}','App\Http\Controllers\PizzaController@show');