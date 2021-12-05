<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    // post semua data blog
    public function index()
    {

        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('blog', [
            'title' => 'All Post' . $title,
            'subtitle' => 'All Post',
            // 'posts' => Post::all()
            'posts' =>  Post::latest()->filter(request(['search', 'category', 'author']))->get()

        ]);
    }
    // single post
    public function singlePost(Post $post)
    {
        return view('post', [
            'title' => 'blog',
            'subtitle' => 'All Post',
            'posts' => $post
        ]);
    }

    // post by category
    public function allCategory()
    {
        return view('list', [
            'title' => 'All Category',
            'subtitle' => 'All Category',
            'posts' => Category::all()
        ]);
    }

    // post by author
    public function allAuthor()
    {
        return view('list', [
            'title' => 'All Author',
            'subtitle' => 'All Author',
            'posts' => User::all()
        ]);
    }
}
