<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CholloController;

Route::get('/', [CholloController::class, 'index']);
Route::get('/chollos', [CholloController::class, 'index'])->name('chollos.index');
Route::get('/chollos/create', [CholloController::class, 'create'])->name('chollos.create');
Route::post('/chollos', [CholloController::class, 'store'])->name('chollos.store');
Route::get('/chollos/{chollo}', [CholloController::class, 'show'])->name('chollos.show');
Route::get('/chollos/{chollo}/edit', [CholloController::class, 'edit'])->name('chollos.edit');
Route::put('/chollos/{chollo}', [CholloController::class, 'update'])->name('chollos.update');
Route::delete('/chollos/{chollo}', [CholloController::class, 'destroy'])->name('chollos.destroy');
