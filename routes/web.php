<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/book', [bookController::class,'index']); //lista book
Route::get ('/book/create', [bookController::class,'create']); //cria book
Route::post ('/book', [bookController::class,'store']);// guarda os dados (store)

//edit
Route::get ('/book/{produto}/edit', [bookController::class,'edit']); //cria book
Route::post ('/book/{produto}', [bookController::class,'update']);// guarda os dados (store)

//apagar
Route::get ('/book/{produto}/destroy', [bookController::class,'destroy']);