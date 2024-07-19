<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorPersonas;


Route::get('/personas', [controladorPersonas::class, 'listar']);

Route::get('/personas/{id}',  [controladorPersonas::class, 'buscar']);

Route::post('/personas', function(){
    return 'creando personas';
});

Route::put('/personas/{id}', [controladorPersonas::class, 'modificacion']);
   


Route::delete('/personas/{id}',[controladorPersonas::class, 'baja']);