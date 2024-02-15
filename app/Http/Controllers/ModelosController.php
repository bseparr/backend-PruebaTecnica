<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;

class ModelosController extends Controller
{
    public function getModelo(Request $request){
        $modelo = Modelo::where("id_marca", $request->id_marca)->get();
        return $modelo;
    }
    
}
