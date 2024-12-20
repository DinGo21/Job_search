<?php

use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\JobController;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobController::class, 'index'])->name('apiindex');
Route::post('/jobs', [JobController::class, 'store'])->name('apistore');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('apishow');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('apiupdate');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('apidestroy');

Route::get('/jobs/{jobId}/comments', [FeedbackController::class, 'index'])->name('apiindexComments');
Route::post('/jobs/{jobId}/comments', [FeedbackController::class, 'store'])->name('apistoreComments');
Route::get('/jobs/{jobId}/comments/{commentId}', [FeedbackController::class, 'show'])->name('apishowComments');
Route::put('/jobs/{jobId}/comments/{commentId}', [FeedbackController::class, 'update'])->name('apiupdateComments');
Route::delete('/jobs/{jobId}/comments/{commentId}', [FeedbackController::class, 'destroy'])->name('apidestroyComments');
