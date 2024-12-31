<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 60) as $index) {
            DB::table('courses')->insert([
                'name' => $faker->sentence(3), // Tên khóa học ngẫu nhiên
                'description' => $faker->paragraph, // Mô tả khóa học ngẫu nhiên
                'difficulty' => $faker->randomElement(['beginner', 'intermediate', 'advanced']), // Độ khó ngẫu nhiên
                'price' => $faker->randomFloat(2, 50, 200), // Giá tiền ngẫu nhiên
                'start_date' => $faker->date(), // Ngày bắt đầu ngẫu nhiên
                'created_at' => now(), // Ngày giờ tạo hiện tại
                'updated_at' => now(), // Ngày giờ cập nhật hiện tại
            ]);
        }
    }
}
