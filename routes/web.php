<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;

use App\Http\Controllers\AcercadeController;

Route::get('/', function () {
    
    return view('welcome');
});


Route::get('/', [InicioController::class, 'index']);

Route::get()
