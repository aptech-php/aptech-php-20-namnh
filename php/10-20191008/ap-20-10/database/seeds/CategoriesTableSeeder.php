<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 3; $i++) {
            DB::table('categories')->insert(
                ["name" => $faker->sentence($nbWords = 2, $variableNbWords = true)]
            );
        }
    }
}