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
        Schema::create('logs', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->index()->comment('ผู้ใช้ login');
            $table->string('email')->nullable()->comment('อีเมล');
            $table->string('ip')->nullable()->comment('ip คนเข้าชม');
            $table->string('browser')->nullable()->comment('เว็บบราว์เซอร์');
            $table->enum('type', ['student', 'teacher', 'admin'])->comment('ประเภทของ log');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
