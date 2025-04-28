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
       

        Schema::create('bookings', function (Blueprint $table) {
            $table->id(); // auto-increment primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // link to users table
            $table->foreignId('train_id')->constrained('trains')->onDelete('cascade'); // link to trains table
            $table->integer('seat_number'); // the seat number booked
            $table->date('booking_date'); // the date of booking
            $table->enum('status', ['booked', 'cancelled'])->default('booked'); // booking status
            $table->timestamps(); // created_at and updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
