<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/posts', [BlogPostController::class, 'index']);
Route::get('/posts/{id}', [BlogPostController::class, 'show']);
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');