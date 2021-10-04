<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;


Route::get('/libro', [LibroController::class,"Listar"]);
Route::post('/agregar', [LibroController::class,"Agregar"]);
Route::post('/modificar', [LibroController::class,"Modificar"]);
Route::post('/eliminar', [LibroController::class,"Eliminar"]);
