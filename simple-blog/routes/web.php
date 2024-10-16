<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;


Route::resource('posts', PostController::class);
Route::post('posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/', [PostController::class, 'welcome'])->name('welcome');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/Posts/create', [PostController::class, 'create'])->name('posts.create'); // Show create post form
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Handle post creation
Route::get('/Posts', [PostController::class, 'PostsList'])->name('posts.PostsList');