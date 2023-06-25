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
        Schema::create("comments", function (Blueprint $table) {
            $table->id();
            $table->text("title")->comment("array ของ master_suggestion");
            $table->text("detail")->nullable();
            $table->timestamp("created_at")->nullable();
            $table->foreignId("project_id")
                ->constrained("projects")
                ->cascadeOnDelete();
            $table->foreignId("created_by")
                ->nullable()
                ->constrained("users")
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists("comments");
        Schema::enableForeignKeyConstraints();
    }
};
