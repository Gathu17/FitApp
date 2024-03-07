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
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exercise_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('bodyPart');
            $table->string('equipment');
            $table->string('target');
            $table->json('secondaryMuscles')->nullable();
            $table->string('gifurl');
            $table->json('instructions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercises');
    }
};
