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
        Schema::create('role_change_admins', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('current_role_id');
            $table->unsignedBigInteger('requested_role_id');
            $table->enum('status', ['wait', 'active', 'inactive'])->default('wait');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('current_role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreign('requested_role_id')->references('id')->on('roles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('role_change_admins');
        Schema::enableForeignKeyConstraints();
    }
};
