<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactsController;

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('/posts/delete', [PostController::class, 'delete']);

Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');