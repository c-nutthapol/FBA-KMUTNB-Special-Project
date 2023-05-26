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
        Schema::create("projects", function (Blueprint $table) {
            $table->id();
            $table->string("name_th");
            $table->string("name_en");

            $table->foreignId("edu_term_id")
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->foreignId("status")
                ->nullable()
                ->constrained("master_statuses")
                ->nullOnDelete();

            $table->foreignId("created_by")
                ->nullable()
                ->constrained("users")
                ->nullOnDelete();

            $table->foreignId("updated_by")
                ->nullable()
                ->constrained("users")
                ->nullOnDelete();

            $table->foreignId("deleted_by")
                ->nullable()
                ->constrained("users")
                ->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists("projects");
        Schema::enableForeignKeyConstraints();
    }
};
