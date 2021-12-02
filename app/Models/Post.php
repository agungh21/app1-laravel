<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function singleFind($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
            if ($p['slug'] === $slug) {
                $post = $p;
            }
        }

        return $post;
    }
}
