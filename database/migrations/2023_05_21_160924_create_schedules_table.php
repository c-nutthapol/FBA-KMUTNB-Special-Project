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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id()->comment('รหัสตารางเวลา');
            $table->string('name')->comment("ชื่อ");
            $table->longText('file')->comment('ไฟล์')->nullable();
            $table->date('date')->comment('วันที่เผยแพร่')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active')->comment('สถานะ');
            $table->bigInteger('created_by', 0, 1)->comment('สร้างโดย user_id')->nullable();
            $table->bigInteger('updated_by', 0, 1)->comment('แก้ไขโดย user_id')->nullable();
            $table->bigInteger('deleted_by', 0, 1)->comment('ลบโดย user_id')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
