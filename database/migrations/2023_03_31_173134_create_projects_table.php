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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('edu_term')->nullable();
            $table->integer('edu_year')->nullable();
            $table->string('name_th')->nullable();
            $table->string('name_en')->nullable();
            $table->bigInteger('student_1', 0, 1)->nullable();
            $table->bigInteger('student_2', 0, 1)->nullable();
            $table->bigInteger('teacher_1', 0, 1)->nullable();
            $table->bigInteger('teacher_2', 0, 1)->nullable();
            $table->bigInteger('teacher_3', 0, 1)->nullable();
            $table->dateTime('approve_at')->nullable();
            $table->string('status')->nullable();
            $table->text('attach_file')->nullable();
            $table->bigInteger('created_by', 0, 1)->nullable();
            $table->bigInteger('updated_by', 0, 1)->nullable();
            $table->bigInteger('deleted_by', 0, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('SET NULL');

            $table->foreign('student_1')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('student_2')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('teacher_1')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('teacher_2')->references('id')->on('users')->onDelete('SET NULL');
            $table->foreign('teacher_3')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('projects');
        Schema::enableForeignKeyConstraints();
    }
};
