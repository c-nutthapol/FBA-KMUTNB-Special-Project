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
        Schema::create('edu_terms', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('term')->comment('ภาคเรียน');
            $table->unsignedSmallInteger('year')->comment('ปีการศึกษา');
            $table->date('start_date')->comment('วันที่เริ่มภาคเรียน');
            $table->date('end_date')->comment('วันที่จบภาคเรียน');
            $table->timestamps();

            $table->unique(['term', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('edu_terms');
        Schema::enableForeignKeyConstraints();
    }
};
