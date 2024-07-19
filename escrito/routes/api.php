<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/personas', function(){
    return 'listando personas';
});
Route::get('/personas/{id}', function(){
    return 'actualizando persona';
});
Route::post('/personas', function(){
    return 'creando personas';
});
Route::put('/personas/{id}', function(){
    return 'actualizando persona';
});
Route::delete('/personas/{id}', function(){
    return 'eliminando persona';
});