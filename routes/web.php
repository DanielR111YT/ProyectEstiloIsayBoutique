<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercadeController;
use App\Http\Controllers\ContactoController;

// Ruta principal que muestra la vista de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas para el controlador InicioController
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Rutas para el controlador AcercadeController
Route::get('/acercade', [AcercadeController::class, 'index'])->name('acercade');

// Rutas para el controlador ContactoController
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/guardar', [ContactoController::class, 'store'])->name('guardar_contacto');

