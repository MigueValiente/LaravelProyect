<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
  $name = $faker->firstName." ".$faker->lastName;
  $roles = ['applicant','provider'];
    return [
        'name'                        => $name,
        'slug'                          => str_slug($name,'-'),
        'email'                         => str_slug($name).random_int(1,1000)."@example.org",
        'email_verified_at'   => now(),
        'role'                => $faker->randomElement($roles),
        'password'            => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        // 'avatar'              => $faker->imageUrl(400,400,'people'),
        'remember_token'      => str_random(10),
    ];
});
