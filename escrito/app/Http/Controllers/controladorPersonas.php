<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Personas;
use Illuminate\Support\Facades\Validator;

class controladorPersonas extends Controller
{
    public function listar(){
        return 'obteniendo lista de estudiantes';
        $personas = Personas::all();
        $datos = [
            'personas' => $personas,
            'status' =>200
        ];
     
        return response()->json($personas, 200);
    }
    public function buscar($id){
        $persona = Persona::find($id);
        if(!$persona){
            $data = [
                'mensaje' => 'No se encontro a la persona',
                'status' => 404
            ];
            return response()->json($data, 404);
        }
        $data = [
            'persona' => $persona,
            'status' => 200
        ];
        return response()->json($data, 200);
    }
}
