<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user1s', function (Blueprint $table) {
            $table->id()->primary(); // Mã người dùng, primary key, tự tăng
            $table->string('username'); // Tên tài khoản
            $table->string('email'); // Email
            $table->string('hashed_password'); // Mật khẩu mã hóa
            $table->enum('role', ['admin', 'user', 'moderator']); // Vai trò
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user1s');
    }
};
