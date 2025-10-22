<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'mostrarLogin']);
Route::post('/login', [LoginController::class, 'entrar']);
Route::get('/salir', [LoginController::class, 'salir']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

