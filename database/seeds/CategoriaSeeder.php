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
            'descricao' => 'teste1'
        ]);
        Categoria::create([
            'descricao' => 'teste2'
        ]);
        Categoria::create([
            'descricao' => 'teste3'
        ]);
        Categoria::create([
            'descricao' => 'teste4'
        ]);
        Categoria::create([
            'descricao' => 'teste5'
        ]);
    }
}
