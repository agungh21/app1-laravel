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
            'name' => 'agung',
            'username' => 'agung',
            'email' => 'agung@gmail.com',
            'password' => bcrypt('12345')
        ]);

        \App\Models\User::factory(5)->create();

        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'Programmer',
            'slug' => 'programmer'
        ]);

        Category::create([
            'name' => 'Web',
            'slug' => 'web'
        ]);

        Post::factory(20)->create();
    }
}
