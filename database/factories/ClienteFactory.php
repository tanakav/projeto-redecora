<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Ramsey\Uuid\Type\Integer;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function ($faker) {
    $name = $faker->firstName." ".$faker->lastName;
    return [
        'nome'      => $name,
        'email'     => $faker->email,
        'senha'     => $faker->password,
        'telefone'  => $faker->phoneNumber,
        'cpf'       => $faker->cpf(false)
    ];
});
