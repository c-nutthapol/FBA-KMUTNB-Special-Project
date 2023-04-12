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
        Schema::create("user_project", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id", 0, 1)->nullable();
            $table->bigInteger("project_id", 0, 1)->nullable();
            $table->enum("role", ["student", "teacher1", "teacher2", "teacher3"])->default("student");
            $table->softDeletes();
            $table
                ->foreign("user_id")
                ->references("id")
                ->on("users")
                ->onDelete("SET NULL");
            $table
                ->foreign("project_id")
                ->references("id")
                ->on("projects")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists("user_project");
        Schema::enableForeignKeyConstraints();
    }
};
