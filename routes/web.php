<?php

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

    // data post blog
    $blog_posts = [
        [
            'title' => 'Blog Sekolah 1',
            'slug' => 'blog-sekolah-1',
            'author' => 'agung',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quia earum sapiente cum ducimus soluta, minima assumenda tenetur reprehenderit adipisci veniam aspernatur voluptates ratione iure, officia numquam voluptatibus autem neque.'
        ],
        [
            'title' => 'Blog Sekolah 2',
            'slug' => 'blog-sekolah-2',
            'author' => 'agung',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam voluptatibus expedita illum error magni id illo porro ex quae, cupiditate, perferendis, consequatur eveniet voluptates perspiciatis nemo ducimus minus. Nihil ad esse aliquam sint repudiandae tenetur atque aperiam placeat tempore doloremque ab labore cupiditate quisquam ea aliquid ipsa a possimus, quas laboriosam? Vero suscipit debitis quidem eius eligendi at, deleniti numquam incidunt, dicta iure a perspiciatis laboriosam tempora voluptate expedita iusto voluptates saepe reiciendis esse. Temporibus, quia esse. Fugit, temporibus. Hic.'
        ]
    ];

    return view('blog', [
        'title' => 'blog',
        'posts' => $blog_posts
    ]);
});

// halaman single post
Route::get('sekolah-blog/{slug}', function ($slug) {

    // data post blog
    $blog_posts = [
        [
            'title' => 'Blog Sekolah 1',
            'slug' => 'blog-sekolah-1',
            'author' => 'agung',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quia earum sapiente cum ducimus soluta, minima assumenda tenetur reprehenderit adipisci veniam aspernatur voluptates ratione iure, officia numquam voluptatibus autem neque.'
        ],
        [
            'title' => 'Blog Sekolah 2',
            'slug' => 'blog-sekolah-2',
            'author' => 'agung',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam voluptatibus expedita illum error magni id illo porro ex quae, cupiditate, perferendis, consequatur eveniet voluptates perspiciatis nemo ducimus minus. Nihil ad esse aliquam sint repudiandae tenetur atque aperiam placeat tempore doloremque ab labore cupiditate quisquam ea aliquid ipsa a possimus, quas laboriosam? Vero suscipit debitis quidem eius eligendi at, deleniti numquam incidunt, dicta iure a perspiciatis laboriosam tempora voluptate expedita iusto voluptates saepe reiciendis esse. Temporibus, quia esse. Fugit, temporibus. Hic.'
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $p) {
        if ($p['slug'] === $slug) {
            $new_post = $p;
        }
    }

    // $title_slug = str_replace('-', ' ', $slug);

    return view('post', [
        'title' => 'blog',
        'post' => $new_post
    ]);
});
