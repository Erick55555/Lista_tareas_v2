<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [tareasControlador::class , "mostrar"])->name("ruta_tarea_mostrar");;



Route::post('/tarea', [tareasControlador::class , "anadir"])->name("ruta_tarea_anadir");

Route::delete('/task/{id}', [tareasControlador::class , "eliminar"]) ->name("ruta_tarea_eliminar");;