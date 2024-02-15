<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\ModelosController;
use App\Http\Controllers\DispositivosController;
use App\Http\Controllers\BodegasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix("marca")->group(function(){
    Route::get("/obtenermarca", [MarcasController::class, "getMarca"]);
});

Route::prefix("modelo")->group(function(){
    Route::get("/obtenermodelo", [ModelosController::class, "getModelo"]);
});

Route::prefix("bodega")->group(function(){
    Route::get("/obtenerbodega", [BodegasController::class, "getBodega"]);
});

Route::prefix("dispositivo")->group(function(){
    Route::get("/obtenerdispositivo", [DispositivosController::class, "getDispositivo"]);
});