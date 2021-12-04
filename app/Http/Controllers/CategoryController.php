<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('list', [
            'title' => 'Category',
            'categories' => Category::all()
        ]);
    }

    public function byCategory(Category $category)
    {
        return view('category', [
            'title' => 'Category',
            'name' => $category->name,
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }
}
