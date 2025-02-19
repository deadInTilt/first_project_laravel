<?php

use App\Http\Controllers\Admin\Post\AdminController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\DestroyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactsController;


Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Post'], function() {
    Route::get('/posts', [IndexController::class, '__invoke'])->name('post.index');
    Route::get('/posts/create', [CreateController::class, '__invoke'])->name('post.create');
    Route::post('/posts', [StoreController::class, '__invoke'])->name('post.store');
    Route::get('/posts/{post}', [ShowController::class, '__invoke'])->name('post.show');
    Route::get('/posts/{post}/edit', [EditController::class, '__invoke'])->name('post.edit');
    Route::patch('/posts/{post}', [UpdateController::class, '__invoke'])->name('post.update');
    Route::delete('/posts/{post}', [DestroyController::class, '__invoke'])->name('post.delete');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [AdminController::class, '__invoke'])->name('admin.post.index');
    });
});

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');