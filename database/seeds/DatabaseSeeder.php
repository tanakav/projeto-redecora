<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use App\Fornecedor;

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
         $this->call(CategoriaSeeder::class);
         $this->call(MaterialSeeder::class);
         $this->call(CorSeeder::class);
         $this->call(ProdutoSeeder::class);
         
    }
}
