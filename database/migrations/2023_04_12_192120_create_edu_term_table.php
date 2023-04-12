<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("edu_term", function (Blueprint $table) {
            $table->id();
            $table->string("term")->nullable();
            $table->string("year")->nullable();
            $table->dateTime("start_date")->nullable();
            $table->dateTime("end_date")->nullable();
            $table->datetime("phase_1_start_date")->nullable();
            $table->datetime("phase_1_end_date")->nullable();
            $table->boolean("phase_1_status")->default(false);
            $table->datetime("phase_2_start_date")->nullable();
            $table->datetime("phase_2_end_date")->nullable();
            $table->boolean("phase_2_status")->default(false);
            $table->datetime("phase_3_start_date")->nullable();
            $table->datetime("phase_3_end_date")->nullable();
            $table->boolean("phase_3_status")->default(false);
            $table->datetime("phase_4_start_date")->nullable();
            $table->datetime("phase_4_end_date")->nullable();
            $table->boolean("phase_4_status")->default(false);
            $table->bigInteger("created_by", 0, 1)->nullable();
            $table->bigInteger("updated_by", 0, 1)->nullable();
            $table->bigInteger("deleted_by", 0, 1)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table
                ->foreign("created_by")
                ->references("id")
                ->on("users")
                ->onDelete("SET NULL");
            $table
                ->foreign("updated_by")
                ->references("id")
                ->on("users")
                ->onDelete("SET NULL");
            $table
                ->foreign("deleted_by")
                ->references("id")
                ->on("users")
                ->onDelete("SET NULL");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists("edu_term");
        Schema::enableForeignKeyConstraints();
    }
};
