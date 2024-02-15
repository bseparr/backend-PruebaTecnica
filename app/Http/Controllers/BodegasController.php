<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodega;

class BodegasController extends Controller
{
    public function getBodega(){
        $bodega = Bodega::All();
        return $bodega;
    }
}
