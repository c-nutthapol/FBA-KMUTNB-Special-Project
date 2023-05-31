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
        Schema::create('student_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId("title")
                ->comment("id ของ master_request")
                ->constrained("master_requests")
                ->cascadeOnDelete();
            $table->foreignId("project_id")
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->text('description')->nullable();
            $table->text('teacher_remark')->nullable();
            $table->text('admin_remark')->nullable();
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
        Schema::dropIfExists('student_requests');
        Schema::enableForeignKeyConstraints();
    }
};
