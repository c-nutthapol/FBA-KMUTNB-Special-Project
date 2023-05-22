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
        Schema::create('master_statuses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ประเภท');
            $table->enum('status', ['active', 'inactive'])->default('active')->comment('สถานะ');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('created_by')->comment('สร้างโดย user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('updated_by')->comment('แก้ไขโดย user_id')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('deleted_by')->comment('ลบโดย user_id')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_statuses');
    }
};
