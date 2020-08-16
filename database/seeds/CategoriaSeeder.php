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
            'descricao' => 'moveis'
        ]);
        Categoria::create([
            'descricao' => 'decoracao'
        ]);
        Categoria::create([
            'descricao' => 'ambientes'
        ]);
        Categoria::create([
            'descricao' => 'novidades'
        ]);
    }
}
