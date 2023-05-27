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
            // $table->string('step')->comment('ขั้นตอน');
            $table->string('name')->comment('คำอธิบาย');
            $table->foreignId('role_id')->comment('ประเภทบุคลากร');
            $table->string('status')->comment('ประเภทบุคลากร');
            // $table->enum('status', ['active', 'inactive'])->default('active')->comment('สถานะ');
            $table->bigInteger('created_by', 0, 1)->nullable();
            $table->bigInteger('updated_by', 0, 1)->nullable();
            $table->bigInteger('deleted_by', 0, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('SET NULL');
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
