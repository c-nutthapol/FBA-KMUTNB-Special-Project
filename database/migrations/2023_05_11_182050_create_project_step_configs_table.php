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
        Schema::create('project_step_configs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('edu_term_id')->nullable();
            $table->date('phase_1_start_date')->nullable();
            $table->date('phase_1_end_date')->nullable();
            $table->tinyInteger('phase_1_status')->default(0);
            $table->date('phase_2_start_date')->nullable();
            $table->date('phase_2_end_date')->nullable();
            $table->tinyInteger('phase_2_status')->default(0);
            $table->date('phase_3_start_date')->nullable();
            $table->date('phase_3_end_date')->nullable();
            $table->tinyInteger('phase_3_status')->default(0);
            $table->date('phase_4_start_date')->nullable();
            $table->date('phase_4_end_date')->nullable();
            $table->tinyInteger('phase_4_status')->default(0);
            $table->date('phase_5_start_date')->nullable();
            $table->date('phase_5_end_date')->nullable();
            $table->tinyInteger('phase_5_status')->default(0);
            $table->timestamps();

            $table->foreign('edu_term_id')->references('id')->on('users')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('project_step_configs');
        Schema::enableForeignKeyConstraints();
    }
};
