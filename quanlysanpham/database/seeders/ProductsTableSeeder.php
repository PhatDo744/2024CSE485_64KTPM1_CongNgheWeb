<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo một instance của Faker để tạo dữ liệu ngẫu nhiên
        $faker = Faker::create();

        // Lặp qua một phạm vi từ 1 đến 60 để tạo 60 sản phẩm giả
        foreach (range(1, 60) as $index) {
            // Chèn dữ liệu ngẫu nhiên vào bảng 'products'
            DB::table('products')->insert([
                'name' => $faker->sentence(3), // Tên sản phẩm ngẫu nhiên
                'category' => $faker->randomElement(['Mouse', 'Keyboard', 'Headset', 'Monitor']), // Loại sản phẩm ngẫu nhiên
                'description' => $faker->sentence, // Mô tả sản phẩm ngẫu nhiên
                'price' => $faker->randomFloat(2, 10, 500), // Giá sản phẩm ngẫu nhiên từ 10 đến 500
                'stock' => $faker->numberBetween(1, 1000), // Số lượng tồn kho ngẫu nhiên từ 1 đến 1000
                'supplier_email' => $faker->unique()->safeEmail, // Email nhà cung cấp ngẫu nhiên và duy nhất
                'created_at' => now(), // Thời gian tạo hiện tại
                'updated_at' => now(), // Thời gian cập nhật hiện tại
            ]);
        }
    }
}
