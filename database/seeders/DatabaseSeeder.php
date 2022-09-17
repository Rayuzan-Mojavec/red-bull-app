<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(13)->create();

        User::create([
            'name' => 'Rayuzan Mojavec',
            'username' => 'rayuzan_m',
            'email' => 'rayuzanmojavec@gmail.com',
            'password' => bcrypt('pdpvictory01')
        ]);

        Category::create([
            'cat_name' => 'Sports',
            'slug' => 'sports',
        ]);

        Category::create([
            'cat_name' => 'Technologies',
            'slug' => 'tech',
        ]);

        Category::create([
            'cat_name' => 'Education',
            'slug' => 'edu',
        ]);

        Category::create([
            'cat_name' => 'Politics',
            'slug' => 'politics',
        ]);

        Category::create([
            'cat_name' => 'Celebrity',
            'slug' => 'celeb',
        ]);

        Category::create([
            'cat_name' => 'Fashion',
            'slug' => 'fashion',
        ]);

        News::factory(177)->create();

    }
}
