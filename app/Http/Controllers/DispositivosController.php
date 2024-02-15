<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;

class DispositivosController extends Controller
{
    public function getDispositivo(Request $request){
        \Log::info($request);
        $bodega = Dispositivo::with('bodega','modelo.marca')
        ->where(function ($query) use($request){
            if($request->id_bodega)
            return $query->where('id_bodega',$request->id_bodega);
        })->where(function ($query) use($request){
            if($request->id_modelo)
            return $query->where('id_modelo',$request->id_modelo);
        })->whereHas("modelo", function ($query) use($request){
            if($request->id_marca)
            return $query->where('id_marca',$request->id_marca);
        })->get();
        return $bodega;
    }
}
