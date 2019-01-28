<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
  $job_name = ucfirst($faker->words(rand(2,5), true));
    return [
        'job_name'        => $job_name,
        'slug'            => str_slug($job_name, "-"),
        'creator'         => $faker->firstName()." ".$faker->lastName(),
        'description'     => $faker->text(50),
        'payment'         => $faker->randomFloat(NULL,0,1000),
        'uuid'            => $faker->uuid(),
        'email_creator'   => $faker->email(),
        'expired_at'      => $faker->date()
    ];
});
