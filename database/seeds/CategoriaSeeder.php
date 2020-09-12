<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'descricao' => 'Móveis'
        ]);
        Categoria::create([
            'descricao' => 'Decoração'
        ]);
        Categoria::create([
            'descricao' => 'Ambientes'
        ]);
        Categoria::create([
            'descricao' => 'Novidades'
        ]);
    }
}
