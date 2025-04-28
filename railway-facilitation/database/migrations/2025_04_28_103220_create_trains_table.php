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

        Schema::create('trains', function (Blueprint $table) {
            $table->id(); // creates an auto-increment 'id' column
            $table->string('name'); // train name
            $table->string('number')->unique(); // train number, must be unique
            $table->string('start_station'); // starting station
            $table->string('end_station'); // ending station
            $table->time('departure_time'); // time type for departure
            $table->time('arrival_time'); // time type for arrival
            $table->integer('total_seats'); // total seats available
            $table->integer('available_seats'); // seats still available for booking
            $table->timestamps(); // creates 'created_at' and 'updated_at' columns
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
