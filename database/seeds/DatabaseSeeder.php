<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\Fornecedor;
use App\Endereco;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(Cliente::class,10)->create();
         factory(Fornecedor::class,10)->create();
         factory(Endereco::class,10)->create();

         $this->call([
            CategoriaSeeder::class,
            MaterialSeeder::class,
            CorSeeder::class,
            ProdutoSeeder::class
         ]);
         
    }
}
