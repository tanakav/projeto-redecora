<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Endereco;
use Faker\Generator as Faker;

$factory->define(Endereco::class, function (Faker $faker) {
    $randomLetter = chr(rand(65,90));
    return [
        'endereco'  => $faker->streetAddress,
        'bairro'    => 'Bairro'.' '. $randomLetter,
        'cep'       => rand(11111111,99999999),
        'cidade'    => $faker->city,
        'estado'    => $faker->stateAbbr
    ];
});
