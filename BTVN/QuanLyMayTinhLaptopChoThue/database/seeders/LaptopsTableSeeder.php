<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('laptops')->insert([
                'brand' => $faker->company(),
                'model' => $faker->word . ' ' . $faker->randomNumber(3),
                'specifications' => $faker->sentence,
                'rental_status' => $faker->boolean,
                'renter_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
