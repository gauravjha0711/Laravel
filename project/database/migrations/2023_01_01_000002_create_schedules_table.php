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