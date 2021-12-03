<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
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
// all post
Route::get('/sekolah-blog', [PostController::class, 'index']);

// single post
Route::get('sekolah-blog/{slug}', [PostController::class, 'singlePost']);
