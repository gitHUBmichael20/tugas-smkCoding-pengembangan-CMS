<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            DB::table('article')->insert([
                'image' => 'https://picsum.photos/1280/960?random=' . $i,
                'author' => 'michael',
                'created_date' => $faker->date(),
                'article_type' => $faker->randomElement(['CSS', 'Javascript', 'HTML', 'PHP', 'Github', 'Python', 'Math']),
                'title' => $faker->sentence(6),
                'content' => $faker->paragraphs(3, true),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
