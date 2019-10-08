<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'content' => $faker->text($maxNbChars = 200),
                'category_id' => rand(1, 3)
            ]);
        }
    }
}