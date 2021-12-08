<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('categories', [PostController::class, 'allCategory']);

// halaman autor post
Route::get('/authors', [PostController::class, 'allAuthor']);

// halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// halaman register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
