<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // post semua data blog
    public function index()
    {
        return view('blog', [
            'title' => 'blog',
            'posts' => Post::all()
        ]);
    }
    // single post
    public function singlePost($slug)
    {
        return view('post', [
            'title' => 'blog',
            'post' => Post::singleFind($slug)
        ]);
    }
}
