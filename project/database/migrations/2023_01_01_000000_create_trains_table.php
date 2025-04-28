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
            $table->id();
            $table->string('train_number')->unique();
            $table->string('name');
            $table->integer('total_seats');
            $table->string('status')->default('active');
            $table->timestamps();
        });
        

        

        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('city');
            $table->timestamps();
        });

        
        
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('train_id')->constrained();
            $table->foreignId('source_station_id')->constrained('stations');
            $table->foreignId('destination_station_id')->constrained('stations');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->integer('available_seats');
            $table->decimal('price', 8, 2);
            $table->string('status')->default('on time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
        Schema::dropIfExists('stations');
        Schema::dropIfExists('trains');
    }
};
