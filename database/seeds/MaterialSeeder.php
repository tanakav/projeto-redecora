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
            'descricao' => 'material1'
        ]);

        Material::create([
            'descricao' => 'material2'
        ]);

        Material::create([
            'descricao' => 'material3'
        ]);
        
        Material::create([
            'descricao' => 'material4'
        ]);
    }
}
