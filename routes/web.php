<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController;


Route::get('/', [App\Http\Controllers\CurriculumController::class, 'index']);


// Ruta para mostrar todos los currículums
Route::get('/curricula', [CurriculumController::class, 'index'])->name('curricula.index');

// Ruta para mostrar el formulario de creación
Route::get('/curricula/create', [CurriculumController::class, 'create'])->name('curricula.create');

// Ruta para guardar un currículum
Route::post('/curricula', [CurriculumController::class, 'store'])->name('curricula.store');

// Ruta para mostrar un currículum específico
Route::get('/curricula/{id}', [CurriculumController::class, 'show'])->name('curricula.show');

// Ruta para eliminar un currículum
Route::delete('/curricula/{id}', [CurriculumController::class, 'destroy'])->name('curricula.destroy');
