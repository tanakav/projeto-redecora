<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'descricao' => 'Caixote'
        ]);

        Material::create([
            'descricao' => 'Lata'
        ]);

        Material::create([
            'descricao' => 'Barril'
        ]);
        
        Material::create([
            'descricao' => 'Pallet'
        ]);

        Material::create([
            'descricao' => 'Pneu'
        ]);

        Material::create([
            'descricao' => 'Madeira'
        ]);

        Material::create([
            'descricao' => 'Ferro'
        ]);

        Material::create([
            'descricao' => 'Outros'
        ]);

    }
}
