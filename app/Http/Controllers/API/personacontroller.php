<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Models\Persona;
use PhpParser\Node\Expr\Yield_;
use PhpParser\Node\Stmt\TryCatch;
use Route;

class personacontroller extends Controller
{
    // Listar todo de la api
    //Get Listar
    public function Get(){
        try { 
            $data = Persona::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }

    //Listar por un registro
    public function getById($id){
        try {
            $data = Persona::find($id);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            return response()->json(["error"=>$th->getMessage()],500);
        }
    }

    //create //crear persona y todos los eventos de la API
    public function create(Request $request)
    {
        try {
            $data['nombre'] = $request['nombre'];
            $data['direccion'] = $request['direccion'];
            $data['telefono'] = $request['telefono'];

            $res = Persona::create($data);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }



    //Route::get('/',[ personacontroller::class, 'get']);
    //Route::get('/',[ personacontroller::class, 'create']);

}
