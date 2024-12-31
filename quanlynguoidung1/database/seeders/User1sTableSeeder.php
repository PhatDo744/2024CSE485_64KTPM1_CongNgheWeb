<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class User1sTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo một instance Faker để sinh dữ liệu giả
        $faker = Faker::create();

        // Lặp 10 lần, mỗi lần insert một người dùng giả
        for ($i = 0; $i < 50; $i++) {
            DB::table('user1s')->insert([
                'username' => $faker->userName,           // Faker tự sinh tên tài khoản
                'email' => $faker->unique()->safeEmail,   // Faker tự sinh email (duy nhất)
                'hashed_password' => Hash::make('password'),     // Mật khẩu gốc “password” được băm
                'role' => $faker->randomElement(['admin', 'user', 'moderator']), // Chọn ngẫu nhiên vai trò
                'created_at' => now(), // Set the current timestamp for created_at
                'updated_at' => now(), // Set the current timestamp for updated_at
            ]);
        }
    }
}
