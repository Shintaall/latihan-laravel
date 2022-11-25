<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

    //    User::create([
    //        'name' => 'Synta Ramadhani',
    //        'email' => 'Sntaarmadhnii03@gmail.com',
    //        'password' => bcrypt('12345')
    //    ]);

      //  User::create([
        //    'name' => 'Canva Narendra',
      //      'email' => 'cnvaanrndra@gmail.com',
     //       'password' => bcrypt('12345')
    //    ]);

   User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
           'slug' => 'web-programming'
        ]);

        Category::create([
          'name' => 'Web Design',
         'slug' => 'web-design'
      ]);

        Category::create([
           'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

     //   Post::create([
       //     'title' => 'Judul Pertama',
         //   'slug' => 'judul-pertama',
          //  'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Accusantium quasi consectetur labore reprehenderit dignissimos placeat',
       //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum maxime porro blanditiis ipsum, repudiandae magnam numquam. Aspernatur eligendi ea illum hic eum voluptatibus nobis nulla nam natus facere rem provident quia est asperiores officia inventore sint commodi, vitae cum fuga, rerum modi architecto? Rem dolore hic deserunt id consequuntur beatae, soluta aut voluptatem ex doloribus labore obcaecati. Quasi quas quod repellat voluptatum quia ipsum fuga unde, dolorem vel quaerat dolorum incidunt laudantium odit quibusdam quis at vitae! Harum, ipsam. Saepe delectus unde distinctio, quas perspiciatis animi asperiores est sequi nihil quisquam, dignissimos voluptatibus quasi perferendis numquam. Expedita velit ipsa aspernatur.',
    //        'category_id' => 1,
    //        'user_id' => 1
    //    ]);

    //    Post::create([
    //        'title' => 'Judul Ke Dua',
    //        'slug' => 'judul-ke-dua',
     //       'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Accusantium quasi consectetur labore reprehenderit dignissimos placeat',
     //       'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum maxime porro blanditiis ipsum, repudiandae magnam numquam. Aspernatur eligendi ea illum hic eum voluptatibus nobis nulla nam natus facere rem provident quia est asperiores officia inventore sint commodi, vitae cum fuga, rerum modi architecto? Rem dolore hic deserunt id consequuntur beatae, soluta aut voluptatem ex doloribus labore obcaecati. Quasi quas quod repellat voluptatum quia ipsum fuga unde, dolorem vel quaerat dolorum incidunt laudantium odit quibusdam quis at vitae! Harum, ipsam. Saepe delectus unde distinctio, quas perspiciatis animi asperiores est sequi nihil quisquam, dignissimos voluptatibus quasi perferendis numquam. Expedita velit ipsa aspernatur.',
    //        'category_id' => 1,
    //        'user_id' => 1
    //    ]);

      //  Post::create([
    //        'title' => 'Judul Ke Tiga',
    //        'slug' => 'judul-ke-tiga',
    //        'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Accusantium quasi consectetur labore reprehenderit dignissimos placeat',
    //        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum maxime porro blanditiis ipsum, repudiandae magnam numquam. Aspernatur eligendi ea illum hic eum voluptatibus nobis nulla nam natus facere rem provident quia est asperiores officia inventore sint commodi, vitae cum fuga, rerum modi architecto? Rem dolore hic deserunt id consequuntur beatae, soluta aut voluptatem ex doloribus labore obcaecati. Quasi quas quod repellat voluptatum quia ipsum fuga unde, dolorem vel quaerat dolorum incidunt laudantium odit quibusdam quis at vitae! Harum, ipsam. Saepe delectus unde distinctio, quas perspiciatis animi asperiores est sequi nihil quisquam, dignissimos voluptatibus quasi perferendis numquam. Expedita velit ipsa aspernatur.',
     //       'category_id' => 2,
     //       'user_id' => 1
    //    ]);

       // Post::create([
         //   'title' => 'Judul Ke Empat',
           // 'slug' => 'judul-ke-empat',
           // 'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit Accusantium quasi consectetur labore reprehenderit dignissimos placeat',
      //      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum maxime porro blanditiis ipsum, repudiandae magnam numquam. Aspernatur eligendi ea illum hic eum voluptatibus nobis nulla nam natus facere rem provident quia est asperiores officia inventore sint commodi, vitae cum fuga, rerum modi architecto? Rem dolore hic deserunt id consequuntur beatae, soluta aut voluptatem ex doloribus labore obcaecati. Quasi quas quod repellat voluptatum quia ipsum fuga unde, dolorem vel quaerat dolorum incidunt laudantium odit quibusdam quis at vitae! Harum, ipsam. Saepe delectus unde distinctio, quas perspiciatis animi asperiores est sequi nihil quisquam, dignissimos voluptatibus quasi perferendis numquam. Expedita velit ipsa aspernatur.',
    //        'category_id' => 2,
  //          'user_id' => 2
 //       ]);
    }
}
