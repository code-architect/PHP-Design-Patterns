<?php

require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->dropIfExists('users');
Capsule::schema()->dropIfExists('phones');

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('name', 50);
    $table->string('email')->unique();
    $table->string('phone', 15);
    $table->timestamps();
});

Capsule::schema()->create('phones', function ($table) {
    $table->increments('id');
    $table->unsignedInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users');
    $table->string('country', 50);
    $table->string('state', 50);
    $table->text('address');
    $table->timestamps();

});