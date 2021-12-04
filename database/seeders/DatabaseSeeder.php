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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'agung',
            'email' => 'agung@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'design',
            'slug' => 'design'
        ]);

        Category::create([
            'name' => 'web',
            'slug' => 'web'
        ]);

        Post::create([
            'title' => 'Sekolah Blog 1',
            'category_id' => 1,
            'user_id' => 1,
            'slug' => 'sekolah-blog-1',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, asperiores! At voluptas fugiat cumque dignissimos eligendi! Doloremque, quia soluta hic quos incidunt error accusantium perspiciatis, itaque vel, minima nisi minus.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, asperiores! At voluptas fugiat cumque dignissimos eligendi! Doloremque, quia soluta hic quos incidunt error accusantium perspiciatis, itaque vel, minima nisi minus.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis tempora deserunt vitae assumenda. Dignissimos illo eum praesentium consequatur sint assumenda dolor nulla, culpa unde! Illo excepturi, obcaecati laboriosam laborum provident velit dolor nam sit doloribus alias nostrum, sequi sed modi, iusto quaerat perspiciatis ipsum architecto. Aperiam eveniet, dolore exercitationem dignissimos dicta numquam, pariatur, temporibus corporis tempore necessitatibus ipsum eaque quod reprehenderit officia rem vero ea. Debitis atque quisquam modi nesciunt eaque nemo hic obcaecati accusamus optio illo vel natus eum delectus eius id doloribus, ducimus a deleniti blanditiis, est ipsa placeat autem consequuntur? A minima dolore magni modi! Sed, nam!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque voluptates alias quae error quis autem modi vel ex nemo reprehenderit? Enim architecto qui a exercitationem saepe possimus corrupti, laboriosam ab hic soluta harum quisquam. Officia quidem alias expedita hic quod recusandae aut illo corrupti obcaecati vitae, saepe nemo cumque qui eos dolorem distinctio rerum earum, quis provident? Eos voluptatem iste consequatur modi nisi adipisci tempora cum impedit ratione! Natus ipsum, repellendus vitae, voluptate aliquam maxime ipsa quibusdam eos consequatur sunt totam, neque culpa? Dolorem labore optio placeat, velit corporis aspernatur quos quam earum. Ipsam praesentium eum accusantium obcaecati provident commodi ab eveniet reprehenderit iusto exercitationem neque earum enim culpa magnam, quibusdam veritatis accusamus quos corporis voluptas! Aspernatur odio dicta quod?</p>'
        ]);

        Post::create([
            'title' => 'Sekolah Blog 2',
            'category_id' => 2,
            'user_id' => 1,
            'slug' => 'sekolah-blog-2',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, asperiores! At voluptas fugiat cumque dignissimos eligendi! Doloremque, quia soluta hic quos incidunt error accusantium perspiciatis, itaque vel, minima nisi minus.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, asperiores! At voluptas fugiat cumque dignissimos eligendi! Doloremque, quia soluta hic quos incidunt error accusantium perspiciatis, itaque vel, minima nisi minus.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis tempora deserunt vitae assumenda. Dignissimos illo eum praesentium consequatur sint assumenda dolor nulla, culpa unde! Illo excepturi, obcaecati laboriosam laborum provident velit dolor nam sit doloribus alias nostrum, sequi sed modi, iusto quaerat perspiciatis ipsum architecto. Aperiam eveniet, dolore exercitationem dignissimos dicta numquam, pariatur, temporibus corporis tempore necessitatibus ipsum eaque quod reprehenderit officia rem vero ea. Debitis atque quisquam modi nesciunt eaque nemo hic obcaecati accusamus optio illo vel natus eum delectus eius id doloribus, ducimus a deleniti blanditiis, est ipsa placeat autem consequuntur? A minima dolore magni modi! Sed, nam!</p><p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque voluptates alias quae error quis autem modi vel ex nemo reprehenderit? Enim architecto qui a exercitationem saepe possimus corrupti, laboriosam ab hic soluta harum quisquam. Officia quidem alias expedita hic quod recusandae aut illo corrupti obcaecati vitae, saepe nemo cumque qui eos dolorem distinctio rerum earum, quis provident? Eos voluptatem iste consequatur modi nisi adipisci tempora cum impedit ratione! Natus ipsum, repellendus vitae, voluptate aliquam maxime ipsa quibusdam eos consequatur sunt totam, neque culpa? Dolorem labore optio placeat, velit corporis aspernatur quos quam earum. Ipsam praesentium eum accusantium obcaecati provident commodi ab eveniet reprehenderit iusto exercitationem neque earum enim culpa magnam, quibusdam veritatis accusamus quos corporis voluptas! Aspernatur odio dicta quod?</p>'
        ]);
    }
}
