<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 20) as $index) {
            DB::table('medicines')->insert([
                'name' => $faker->word,
                'brand' => $faker->company,
                'dosage' => $faker->randomNumber(3) . 'mg',
                'form' => $faker->randomElement(['Tablet', 'Capsule', 'Syrup']),
                'price' => $faker->randomFloat(2, 1, 100),
                'stock' => $faker->numberBetween(10, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
