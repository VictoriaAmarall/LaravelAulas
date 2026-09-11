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
Route::get ('/book/edit/{book}', [bookController::class,'edit']); //cria book
Route::post ('/book/{book}', [bookController::class,'update']);// guarda os dados (store)

//apagar
Route::get ('/book/destroy/{book}', [bookController::class,'destroy']);