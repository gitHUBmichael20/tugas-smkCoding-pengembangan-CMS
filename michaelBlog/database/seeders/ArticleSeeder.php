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
        // Initialize Faker
        $faker = Faker::create();

        // Loop to create 100 article
        for ($i = 0; $i < 100; $i++) {
            DB::table('article')->insert([
                'image' => $faker->imageUrl(640, 480, 'abstract', true), // Random image URL
                'author' => $faker->randomElement(['Budiana',  'Sandika', 'Galih', 'Michael']), // Random author name
                'created_date' => $faker->date(), // Random date
                'article_type' => $faker->randomElement(['CSS', 'Javascript', 'HTML', 'PHP', 'Github']), // Random article type
                'title' => $faker->sentence(6), // Random title
                'content' => $faker->paragraphs(3, true), // Random content
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}