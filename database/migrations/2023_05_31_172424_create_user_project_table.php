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
        Schema::create("user_project", function (Blueprint $table) {
            $table->foreignId("project_id")
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId("user_id")
                ->constrained()
                ->cascadeOnDelete();
            $table->enum("role", ["student1", "student2", "teacher1", "teacher2", "teacher3"]);
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
