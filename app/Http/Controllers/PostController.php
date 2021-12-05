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
        return view('blog', [
            'title' => 'All Post',
            // 'posts' => Post::all()
            'posts' => Post::with(['author', 'category'])->latest()->get()

        ]);
    }
    // single post
    public function singlePost(Post $post)
    {
        return view('post', [
            'title' => 'blog',
            'posts' => $post
        ]);
    }

    // post by category

    public function allCategory()
    {
        return view('list', [
            'title' => 'All Category',
            'posts' => Category::all()
        ]);
    }

    public function byCategory(Category $category)
    {
        return view('blog', [
            'title' => "Post By Category : $category->name",
            'posts' => $category->posts->load('category', 'author')
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
            'title' => "Post Author by : $author->name",
            'posts' => $author->posts->load('category', 'author')
        ]);
    }
}
