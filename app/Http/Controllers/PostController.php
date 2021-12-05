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
            'subtitle' => 'All Post',
            // 'posts' => Post::all()
            'posts' => Post::latest()->get()

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

    public function byCategory(Category $category)
    {
        return view('blog', [
            'title' => "Post By Category : $category->name",
            'subtitle' => 'All Category',
            'posts' => $category->posts->load('category', 'author')
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

    public function singlePostByAuthor(User $author)
    {
        return view('blog', [
            'title' => "Post Author by : $author->name",
            'subtitle' => 'All Author',
            'posts' => $author->posts->load('category', 'author')
        ]);
    }
}
