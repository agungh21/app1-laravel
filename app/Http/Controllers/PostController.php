<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    // post semua data blog
    public function index()
    {
        return view('blog', [
            'title' => 'blog',
            'subtitle' => 'Post All Blog',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()

        ]);
    }
    // single post
    public function singlePost(Post $post)
    {
        return view('post', [
            'title' => 'blog',
            'post' => $post
        ]);
    }
    // post by author



    public function allAuthor()
    {
        return view('list', [
            'title' => 'All Author',
            'posts' => User::all()
        ]);
    }

    public function singlePostByAuthor(User $author)
    {
        return view('blog', [
            'title' => 'Post Author',
            'subtitle' => 'List Post by Author',
            'posts' => $author->posts
        ]);
    }
}
