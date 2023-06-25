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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->foreignId("project_id")
                ->nullable()
                ->constrained()
                ->nullOnDelete();
            $table->string("path")->comment("ที่อยู่ไฟล์");
            $table->boolean("is_link")->default(0)->comment("กรณีแนบลิงค์");
            $table->timestamp("created_at")->nullable();
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
        Schema::dropIfExists("files");
        Schema::enableForeignKeyConstraints();
    }
};
