<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotController;

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/pilot', [pilotController::class,'index']); //lista pilot
Route::get ('/pilot/create', [pilotController::class,'create']); //cria pilot
Route::post ('/pilot', [pilotController::class,'store']);// guarda os dados (store)

//edit
Route::get ('/pilot/edit/{pilot}', [pilotController::class,'edit']); //chama a função edit para editar piloto
Route::post ('/pilot/update/{pilot}', [pilotController::class,'update']);// guarda os dados (store) após atualizar

//apagar
Route::get ('/pilot/destroy/{pilot}', [pilotController::class,'destroy']);