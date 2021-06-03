<?php

use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post', [PostController::class, 'addPost']);
Route::post('/add-post', [PostController::class, 'postCreate'])->name('post.create');
Route::get('/posts', [PostController::class, 'getPost']);
Route::get('/posts/{id}', [PostController::class, 'getPostById']);
Route::get('/delete-post/{id}', [PostController::class, 'deletePost']);
Route::get('/edit-post/{id}', [PostController::class, 'editPost']);
Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');