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
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('passWORD'),
            'is_admin' => 1
        ]);

        // \App\Models\User::factory(5)->create();

        Category::create([
            'name' => 'News',
            'slug' => 'news'
        ]);

        // Category::create([
        //     'name' => 'Programmer',
        //     'slug' => 'programmer'
        // ]);

        // Category::create([
        //     'name' => 'Web',
        //     'slug' => 'web'
        // ]);

        // Post::factory(20)->create();
    }
}
