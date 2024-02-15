<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcasController extends Controller
{
    public function getMarca(){
        $marca = Marca::All();
        return $marca;
    }
}
