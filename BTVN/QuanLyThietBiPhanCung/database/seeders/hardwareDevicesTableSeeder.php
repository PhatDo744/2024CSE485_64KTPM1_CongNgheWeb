<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class hardwareDevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $i) {
            DB::table("hardware_devices")->insert([
                "device_name" => $faker->word . " " . $faker->randomLetter,
                "type" => $faker->randomElement(['Mouse', 'Keyboard', 'Headset']),
                'status' => $faker->boolean,
                'center_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
