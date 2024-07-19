<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPersonas;


Route::get('/personas', [controladorPersonas::class, 'listar']);

Route::get('/personas/{id}',  [controladorPersonas::class, 'buscar']);

Route::post('/personas', [controladorPersonas::class, 'guardar']);



Route::put('/personas/{id}', function(){
    return 'actualizando persona';
});

Route::delete('/personas/{id}', function(){
    return 'eliminando persona';
});