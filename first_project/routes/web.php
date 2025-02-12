<?php

use App\Http\Controllers\AllCategories;
use App\Http\Controllers\AllProducts;
use App\Http\Controllers\AllSubscribes;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my_page', [MyPageController::class, 'index']);

Route::get('/products', [AllProducts::class, 'index']);

Route::get('/categories', [AllCategories::class, 'index']);

Route::get('/offers', function() {
    return "List of offers";
});

Route::get('/subscribes', [AllSubscribes::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/update', [PostController::class, 'update']);

Route::get('/posts/delete', [PostController::class, 'delete']);

Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate']);

Route::get('/about', [PostController::class, 'about'])->name('post.about');

Route::get('/main', [PostController::class, 'main'])->name('post.main');

Route::get('/contacts', [PostController::class, 'contacts'])->name('post.contacts');