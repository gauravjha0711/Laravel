Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained();
    $table->foreignId('schedule_id')->constrained();
    $table->integer('seat_count');
    $table->decimal('total_amount', 8, 2);
    $table->string('status')->default('confirmed');
    $table->string('pnr')->unique();
    $table->timestamps();
});