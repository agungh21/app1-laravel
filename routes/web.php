<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// halaman home
Route::get('/', [HomeController::class, 'index']);

// halaman about
Route::get('/sekolah-about', [AboutController::class, 'index']);

// halaman blog
Route::get('/sekolah-blog', [PostController::class, 'index']);
Route::get('sekolah-blog/{post:slug}', [PostController::class, 'singlePost']);

// halaman category
Route::get('/categories/{category:slug}', [PostController::class, 'byCategory']);
Route::get('categories', [PostController::class, 'allCategory']);

// halaman autor post
Route::get('/authors', [PostController::class, 'allAuthor']);
Route::get('/authors/{author:username}', [PostController::class, 'singlePostByAuthor']);
