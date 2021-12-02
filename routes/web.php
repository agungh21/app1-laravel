<?php

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

Route::get('/', function () {
    return view('home', [
        'title' => 'home',
        'nama' => 'agung'
    ]);
});

Route::get('/sekolah-about', function () {
    return view('about', [
        'title' => 'about'
    ]);
});

Route::get('/sekolah-blog', function () {

    return view('blog', [
        'title' => 'blog',
        'posts' => Post::all()
    ]);
});

// halaman single post
Route::get('sekolah-blog/{slug}', function ($slug) {
    return view('post', [
        'title' => 'blog',
        'post' => Post::singleFind($slug)
    ]);
});
