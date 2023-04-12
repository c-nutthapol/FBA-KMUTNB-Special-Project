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
        Schema::create("projects", function (Blueprint $table) {
            $table->id();
            $table->bigInteger("edu_term_id", 0, 1)->nullable();
            $table->string("name_th")->nullable();
            $table->string("name_en")->nullable();
            $table->dateTime("phase_1_complete")->nullable();
            $table->dateTime("phase_2_complete")->nullable();
            $table->dateTime("phase_3_complete")->nullable();
            $table->dateTime("phase_4_complete")->nullable();
            $table->string("status")->nullable();
            $table->text("phase_1_url")->nullable();
            $table->text("phase_2_url")->nullable();
            $table->text("phase_3_url")->nullable();
            $table->text("phase_4_url")->nullable();
            $table->boolean("editable")->default(false);
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
        Schema::dropIfExists("projects");
        Schema::enableForeignKeyConstraints();
    }
};
