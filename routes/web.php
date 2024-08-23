
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');


});


use App\Http\Controllers\CalificacionesController;

Route::get('/calificaciones', [CalificacionesController::class, 'index'])->name('calificaciones.index');
Route::post('/calificaciones', [CalificacionesController::class, 'calcular'])->name('calificaciones.calcular');


use App\Http\Controllers\ContactosController;

Route::get('/contactos', [ContactosController::class, 'index'])->name('contactos.index');
Route::post('/contactos', [ContactosController::class, 'guardar'])->name('contactos.guardar');
Route::get('/contactos/lista', [ContactosController::class, 'lista'])->name('contactos.lista');
