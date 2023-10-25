<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('comment', [\App\Http\Controllers\CommentController::class, 'index'])->name('comment.index');
Route::post('comment', [\App\Http\Controllers\CommentController::class, 'store'])->name('comment.store');
