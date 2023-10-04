<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
// Rutas para el CRUD de "inventario"
Route::get('/inventario/create', [InventarioController::class, 'create']);
// Almacenar datos del formulario
Route::post('/inventario', [InventarioController::class, 'store'])->name('inventario.store');

// Rutas para el CRUD de "usuarios"
Route::resource('usuarios', UsuarioController::class);