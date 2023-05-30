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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->comment('ชื่อผู้ใช้')->unique()->nullable();
            $table->string('password')->comment('รหัสผ่าน')->nullable();
            $table->string('displayname')->comment('ชื่อนามสกุล')->nullable();
            $table->string('firstname_en')->comment('ชื่อภาษาอังกฤษ')->nullable();
            $table->string('lastname_en')->comment('นามสกุล')->nullable();
            $table->string('pid')->comment('เลขบัตรประชาชน')->nullable();
            $table->string('email')->comment('อีเมล')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('displayname');
            $table->dropColumn('firstname_en');
            $table->dropColumn('lastname_en');
            $table->dropColumn('pid');
            $table->dropColumn('email');
        });
    }
};
