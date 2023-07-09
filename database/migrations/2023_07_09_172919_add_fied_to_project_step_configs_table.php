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
        Schema::table('project_step_configs', function (Blueprint $table) {
            $table->date('book_approval_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('project_step_configs', function (Blueprint $table) {
            $table->dropColumn([
                'book_approval_end'
            ]);
        });
    }
};
