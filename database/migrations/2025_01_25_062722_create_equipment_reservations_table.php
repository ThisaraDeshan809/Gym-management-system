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
        Schema::create('equipment_reservations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('equipment_id');
            $table->string('date');
            $table->string('time_in');
            $table->string('time_out');
            $table->string('status')->default('reserved');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment_reservations');
    }
};
