<?php

use Faker\Generator as Faker;

$factory->define(App\Job::class, function (Faker $faker) {
  $job_name = ucfirst($faker->words(rand(2,5), true));
  $categories = ['hosteleria','transporte','buzoneo','alimentacion'];
  $provinces = ['alava','albacete','alicante','almeria','asturias','avila','badajoz','barcelona','burgos','caceres','cadiz','cantabria','castellon','ceuta','ciudadreal','cordoba','cuenca','girona','laspalmas','granada','guadalajara','guipuzcoa','huelva','huesca','illesbalears','jaen','acoruña','larioja','leon','lleida','lugo','madrid','malaga','melilla','murcia','navarra','ourense','palencia','pontevedra','salamanca','segovia','sevilla','soria','tarragona','santacruztenerife','teruel','toledo','valencia','valladolid','vizcaya','zamora','zaragoza']
    return [
        'job_name'        => $job_name,
        'slug'            => str_slug($job_name, "-"),
        'creator_id'      => random_int(1,10),
        'description'     => $faker->text(50),
        'payment'         => $faker->randomFloat(NULL,0,1000),
        'uuid'            => $faker->uuid(),
        'category'        => $faker->randomElement($categories),
        'province'        => $faker->randomElement($provinces),
        'expired_at'      => $faker->date()
    ];
});
