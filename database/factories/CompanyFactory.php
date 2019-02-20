<?php

use Faker\Generator as Faker;
use App\Company;

$factory->define(Company::class, function (Faker $faker) {
  $companyName = $faker->company;
  return [
    'name'      => $companyName,
    'slug'      => str_slug($companyName,'-'),
    'address'   => $faker->address,
    'web'       => $faker->domainName,
    'email'     => $faker->companyEmail,
    ];
});
