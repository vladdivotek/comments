<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\CommentController::class, 'index'])->name('index');
