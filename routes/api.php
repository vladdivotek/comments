<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('comments', [\App\Http\Controllers\Api\CommentController::class, 'index'])->name('comments.index');
Route::post('comments/store', [\App\Http\Controllers\Api\CommentController::class, 'store'])->name('comments.store');
