Schema::create('stations', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('code')->unique();
    $table->string('city');
    $table->timestamps();
});