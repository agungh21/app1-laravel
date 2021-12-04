<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Category::create([
            'name' => 'design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'web',
            'slug' => 'web'
        ]);

        Post::factory(20)->create();
    }
}
