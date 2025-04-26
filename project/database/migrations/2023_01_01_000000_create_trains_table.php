Schema::create('trains', function (Blueprint $table) {
    $table->id();
    $table->string('train_number')->unique();
    $table->string('name');
    $table->integer('total_seats');
    $table->string('status')->default('active');
    $table->timestamps();
});