<?php

use Illuminate\Database\Seeder;
use App\Cor;

class CorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cor::create([
            'descricao' => 'Natural'
        ]);

        Cor::create([
            'descricao' => 'Colorido'
        ]);

        Cor::create([
            'descricao' => 'Rústico'
        ]);

        Cor::create([
            'descricao' => 'Branco'
        ]);

        Cor::create([
            'descricao' => 'Preto'
        ]);

        Cor::create([
            'descricao' => 'Verde'
        ]);

        Cor::create([
            'descricao' => 'Amarelo'
        ]);

        Cor::create([
            'descricao' => 'Vermelho'
        ]);

        Cor::create([
            'descricao' => 'Bege'
        ]);

    }
}
