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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('latitude', 100, 10);
            $table->double('longitude', 100, 10);
            $table->integer('estimated_waiting_time');
            $table->integer('capacity');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->integer('min_height');
            $table->integer('max_height');
            $table->integer('min_weight');
            $table->integer('max_weight');
            $table->enum('category', ['18', 'roller_coaster', 'infantile', 'terror', 'aquatic', 'animals', 'bumper_Cars', 'dark', 'extreme', 'slide']);
            $table->string('image_path');
            $table->integer('attraction_time');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};
