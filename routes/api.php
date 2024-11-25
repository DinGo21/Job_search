<?php

use App\Http\Controllers\Api\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobController::class, 'index'])->name('apiindex');
Route::post('/jobs', [JobController::class, 'store'])->name('apistore');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('apishow');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('apiupdate');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('apidestroy');
