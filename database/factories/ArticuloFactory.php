<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articulo;
use App\Rubro;
use Faker\Generator as Faker;

$factory->define(Articulo::class, function (Faker $faker) {
    $rubro = Rubro::all()->random()->id;
    return [
        
        'nombre'=> $faker->name,
        'precio'=> $faker->numberBetween($min = 1, $max = 9000),
        'id_rubro' => $rubro,
    ];
    
  
});
