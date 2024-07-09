<?php

use App\Http\Controllers\Pipeline\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// using pipeline to filter data
Route::get('/pipeline/posts', [PostController::class, 'index'])->name('pipeline.posts.index');
