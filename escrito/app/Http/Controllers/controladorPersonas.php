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
    public function guardar(Request $request){
        Validator::make($request->all(),[
            'nombre'=>'required',
            'apellido'=>'required',
            'telefono'=>'required'
        ]);
        if ($validator->fails()){
            $data = [
                'mensaje' =>   'Error validando datos',
                'error' =>   $validator->errors(),
                'status' =>   '400'
            ];
            return response()->json($data, 400); 
        } 
        $persona = Persona::crear([
            'nombre' => $request->name,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
        ]);
        if(!$persona){
            $data =[
                'mensaje'=> 'Error en la creacion',
                'status'=> 500
            ];
            return response()->json($data, 500);
        }
        $data =[
            'persona'=> $persona,
            'status'=>201
        ];
        return response()->json($data, 201);
    }
    public function baja($id){
    $persona = Persona::find($id);
    if(!$persona){
        $data = [
            'mensaje' => 'No se encontro a la persona',
            'status' => 404
        ];
        return response()->json($data, 404);
    }
    $persona->delete();
    $data =[
        'mensaje'=> 'Persona dada de baja con exito',
        'status'=>200   
    ];
    return response()->json($data, 200);
    }
}
