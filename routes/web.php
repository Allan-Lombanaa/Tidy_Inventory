<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use App\Http\Controllers\HomeController;


Route::get('/', StartController::class);

Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'inicio');
    Route::get('home/ventas', 'ventas');
    Route::get('home/inventario', 'inventario');
    Route::get('home/actualizar', 'actualizar');
    Route::get('home/registros', 'registros');
    Route::post('home/actualizar', 'guardar')->name('productos.guardar');
    Route::put('home/actualizar/{producto}', 'update')->name('actualizar');
});





