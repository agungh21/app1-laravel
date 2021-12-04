<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['$id'];

    // foreign key ke table
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // foreign key ke table
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
