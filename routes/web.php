<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Verificar autenticação antes de qualquer rota
Route::middleware('auth')->group(function () {
    // Rotas de grupos
    Route::prefix('grupos')->group(function () {
        Route::get('/', [App\Http\Controllers\GruposController::class, 'index'])->name('grupos');
        Route::get('/create', [App\Http\Controllers\GruposController::class, 'create'])->name('grupos.create');
        Route::post('/', [App\Http\Controllers\GruposController::class, 'store'])->name('grupos.store');
        Route::post('/crop', [App\Http\Controllers\GruposController::class, 'crop'])->name('grupos.crop');
        Route::get('/show/{id}', [App\Http\Controllers\GruposController::class, 'show'])->name('grupos.show');
        Route::get('/edit/{id}', [App\Http\Controllers\GruposController::class, 'edit'])->name('grupos.edit');
        Route::get('/update/{id}', [App\Http\Controllers\GruposController::class, 'update'])->name('grupos.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\GruposController::class, 'destroy'])->name('grupos.destroy');
    });

    // Rotas de simulação
    Route::prefix('simular')->group(function () {
        Route::get('/', [App\Http\Controllers\SimularController::class, 'index'])->name('simular');
        Route::get('/create', [App\Http\Controllers\SimularController::class, 'create'])->name('simular.create');
        Route::post('/', [App\Http\Controllers\SimularController::class, 'store'])->name('simular.store');
        Route::get('/show/{id}', [App\Http\Controllers\SimularController::class, 'show'])->name('simular.show');
        Route::get('/edit/{id}', [App\Http\Controllers\SimularController::class, 'edit'])->name('simular.edit');
        Route::get('/update/{id}', [App\Http\Controllers\SimularController::class, 'update'])->name('simular.update');
        Route::get('/destroy/{id}', [App\Http\Controllers\SimularController::class, 'destroy'])->name('simular.destroy');
    });

});
