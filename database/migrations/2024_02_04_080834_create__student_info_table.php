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
        Schema::create('_student_info', function (Blueprint $table) {
            $table->id();
            $table->string('Name',55);
            $table->string('Father Name',55);
            $table->string('City',55);
            $table->string('Email')->unique();
            $table->string('phone',11)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_student_info');
    }
};
