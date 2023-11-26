<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Models\Persona;

class personacontroller extends Controller
{
    //

    //Get Listar
    public function Get(){
        try { 
            $data = Persona::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            return response()->json([ 'error' => $th->getMessage()], 500);
        }
    }


    //create //crear persona y todos los eventos de la API
}
