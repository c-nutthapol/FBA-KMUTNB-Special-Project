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
            $table->unsignedBigInteger('id')->primary(); // ใช้ id ของ edu_term relation เป็นแบบ 1 to 1
            $table->date('phase_1_start_date')->nullable();
            $table->date('phase_1_end_date')->nullable();
            $table->boolean('phase_1_status')->default(0);
            $table->date('phase_2_start_date')->nullable();
            $table->date('phase_2_end_date')->nullable();
            $table->boolean('phase_2_status')->default(0);
            $table->date('phase_3_start_date')->nullable();
            $table->date('phase_3_end_date')->nullable();
            $table->boolean('phase_3_status')->default(0);
            $table->date('phase_4_start_date')->nullable();
            $table->date('phase_4_end_date')->nullable();
            $table->boolean('phase_4_status')->default(0);
            $table->date('phase_5_start_date')->nullable();
            $table->date('phase_5_end_date')->nullable();
            $table->boolean('phase_5_status')->default(0);
            $table->timestamps();

            $table
                ->foreign("id")
                ->references("id")
                ->on("edu_terms")
                ->onDelete("cascade");
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
