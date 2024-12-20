<?php

use App\Http\Controllers\DocsController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('show');
Route::get('/docs', [DocsController::class, 'index'])->name('docs');
