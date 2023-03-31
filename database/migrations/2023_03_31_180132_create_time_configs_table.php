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
        Schema::create('time_configs', function (Blueprint $table) {
            $table->id();
            $table->integer('edu_term')->nullable();
            $table->integer('edu_year')->nullable();
            $table->dateTime('phase_1_start')->nullable();
            $table->dateTime('phase_1_end')->nullable();
            $table->enum('phase_1_status', ['active', 'inactive'])->default('inactive');
            $table->dateTime('phase_2_start')->nullable();
            $table->dateTime('phase_2_end')->nullable();
            $table->enum('phase_2_status', ['active', 'inactive'])->default('inactive');
            $table->dateTime('phase_3_start')->nullable();
            $table->dateTime('phase_3_end')->nullable();
            $table->enum('phase_3_status', ['active', 'inactive'])->default('inactive');
            $table->dateTime('phase_4_start')->nullable();
            $table->dateTime('phase_4_end')->nullable();
            $table->enum('phase_4_status', ['active', 'inactive'])->default('inactive');


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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('time_configs');
        Schema::enableForeignKeyConstraints();
    }
};
