<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fornecedor;
use Faker\Generator as Faker;

$factory->define(Fornecedor::class, function (Faker $faker) {
    return [
        'razao_social' => $faker->company,
        'nome_fantasia' => $faker->company,
        'cnpj' => $faker->cnpj(false),
        'email' => $faker->unique->safeEmail,
        'senha' => $faker->password
    ];
});
