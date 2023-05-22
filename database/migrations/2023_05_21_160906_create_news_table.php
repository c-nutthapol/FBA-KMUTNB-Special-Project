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
        Schema::create('news', function (Blueprint $table) {
            $table->id()->comment('รหัสข่าว');
            $table->foreignId('masternew_id')->comment('ประเภทข่าว');
            $table->string('cover_img')->comment('ภาพปกข่าว')->nullable()->default('/storage/image/no-img.jpg');
            $table->json('slide_img')->comment('ภาพสไลด์')->nullable();
            $table->string('title')->comment('พาดหัวข่าว');
            $table->longText('detail')->comment('เนื้อหาข่าว');
            $table->longText('document')->nullable()->comment('เอกสารแนบ');
            $table->integer('view')->nullable()->default(0)->comment('จำนวนเข้าชม');
            $table->date('date')->comment('วันที่เขียนข่าว')->nullable();
            $table->enum('pin', ['active', 'inactive'])->default('inactive')->comment('ปักหมุด');
            $table->enum('status', ['active', 'inactive', 'wait'])->default('active')->comment('สถานะ');

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
        Schema::dropIfExists('news');
    }
};
