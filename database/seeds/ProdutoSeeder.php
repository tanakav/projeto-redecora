<?php

use Illuminate\Database\Seeder;
use App\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'descricao' => 'Nicho de parede',
            'descricao_completa' => 'Nicho de parede feito de caixotes',
            'preco' => 100.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);

        Produto::create([
            'descricao' => 'Criado mudo',
            'descricao_completa' => 'Criado mudo feito de caixotes',
            'preco' => 200.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);   
        
        Produto::create([
            'descricao' => 'Nicho de parede (pintado)',
            'descricao_completa' => 'Nicho de parede feito de caixotes e pintado',
            'preco' => 150.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Mesa decorativa com 4 pés',
            'descricao_completa' => 'Mesa decorativa feita com caixote e 4 pés de aço',
            'preco' => 250.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Estante com 6 nichos',
            'descricao_completa' => 'Estante com 6 nichos feito de caixotes e pés suspensos',
            'preco' => 500.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Estante com 12 nichos',
            'descricao_completa' => 'Estante com 12 nichos feito de caixotes',
            'preco' => 650.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Berço barril',
            'descricao_completa' => 'Berço em formato de barril',
            'preco' => 400.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);

        Produto::create([
            'descricao' => 'Conjunto de mesa + banquetas + poltrona',
            'descricao_completa' => 'Conjunto de mesa + banquetas + poltrona feitos com latões.',
            'preco' => 1000.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);   
        
        Produto::create([
            'descricao' => 'Mesa bistrô',
            'descricao_completa' => 'Mesa bistrô feita com latão.',
            'preco' => 300.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Mesa bistrô com vidro',
            'descricao_completa' => 'Mesa bistrô feita com barril e tampão de vidro',
            'preco' => 450.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Mesa decorativa',
            'descricao_completa' => 'Mesa decorativa (estilo bistrô) feita de latão.',
            'preco' => 300.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 
        
        Produto::create([
            'descricao' => 'Conjunto mesa + banquetas de madeira',
            'descricao_completa' => 'Conjunto mesa + banquetas feitas com madeira de demolição e barril',
            'preco' => 1050.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]); 

        Produto::create([
            'descricao' => 'Sofá de palet com rodinhas',
            'descricao_completa' => 'Sofá de palet com rodinhas',
            'preco' => 900.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);         

        Produto::create([
            'descricao' => 'Sofá de palet fixo',
            'descricao_completa' => 'Sofá de palet fixo, sem rodinhas',
            'preco' => 800.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);         

        Produto::create([
            'descricao' => 'Sofá de palet duplo',
            'descricao_completa' => 'Sofá de palet duplo, sem rodinhas',
            'preco' => 750.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);         

        Produto::create([
            'descricao' => 'Sofá de palet com rodinhas e encosto lateral',
            'descricao_completa' => 'Sofá de palet com rodinhas e encosto lateral',
            'preco' => 1300.00,
            'valor_desconto' => 0.00,
            'fornecedores_id' => 1,
            'cores_id' => 1,
            'materials_id' => 1
        ]);         
    }
}
