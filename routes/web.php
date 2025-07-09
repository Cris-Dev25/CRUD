<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




//GRUPO DE RUTAS CRUD PRODUCTOS
Route::controller(ProductoController::class)->group(function(){
    Route::get('/productos', 'index');
    Route::get('/productos/crear', 'create');
    Route::get('/productos/crear', '');
});

