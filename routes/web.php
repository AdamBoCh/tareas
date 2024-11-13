<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\TareaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/trabajadores', [TrabajadorController::class, 'index'])->name('trabajadores.index');
Route::get('/trabajadores/create', [TrabajadorController::class, 'create'])->name('trabajadores.create');
Route::post('/trabajadores/store', [TrabajadorController::class, 'store'])->name('trabajadores.store');
Route::get('/trabajadores/{id}', [TrabajadorController::class, 'show'])->name('trabajadores.show');

Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');
Route::get('/tareas/create', [TareaController::class, 'create'])->name('tareas.create');
Route::post('/tareas/store', [TareaController::class, 'store'])->name('tareas.store');
Route::get('/tareas/{id}/edit', [TareaController::class, 'edit'])->name('tareas.edit');
Route::put('/tareas/{id}', [TareaController::class, 'update'])->name('tareas.update');
Route::delete('/tareas/{id}', [TareaController::class, 'destroy'])->name('tareas.destroy');