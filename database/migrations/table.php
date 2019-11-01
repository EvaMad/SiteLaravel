Schema::create('cars', function (Blueprint $table) {
    $table->increments('id');
    $table->string('make');
    $table->string('model');
    $table->date('produced_on');
    $table->timestamps();
  });
  