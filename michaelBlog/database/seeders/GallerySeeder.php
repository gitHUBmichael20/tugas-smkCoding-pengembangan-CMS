<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('gallery')->insert([
                'title' => $faker->sentence(3),
                'image' => $faker->imageUrl(640, 480, 'people', true),
                'author' => $faker->randomElement(['Budiana',  'Sandika', 'Galih', 'Michael']),
                'captions' => $faker->sentence(8),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
