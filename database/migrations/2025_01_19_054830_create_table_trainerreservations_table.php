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
        Schema::create('trainerreservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('trainer_id');
            $table->string('date');
            $table->string('time_in');
            $table->string('time_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainerreservations');
    }
};
