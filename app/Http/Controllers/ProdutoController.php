<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cor;
use App\Fornecedor;
use App\Material;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return view('produtos')->with([
            'produtos'      => Produto::all(),
            'categorias'    => Categoria::all(),
            'materiais'     => Material::all(),
            'cores'         => Cor::all()
        ]);
    }

    public function favoritos(){
        return view('favoritos');
    }

    public function show($id){
        $produto = Produto::find($id);

        return view('produto')->with([
            'produto' => $produto,
            'material' => Material::find($produto->materials_id),
            'cor' => Cor::find($produto->cores_id),
            'fornecedor' => Fornecedor::find($produto->fornecedores_id)
        ]);
    }

    //https://webmobtuts.com/backend-development/creating-a-shopping-cart-with-laravel/
    //Tentar colocar no Model
    public function addToCart(Request $request){

        dd($request->all());

        $produto = Product::find($request->id);
        $id = $request->id;

        $cart = session()->get('cart');

        if(!$cart || !isset($cart[$id])){
            $cart =[
                $id =>[
                    'quantidade' => 1
                ]
            ];
            session()->put('cart',$cart);
        }

        if(isset($cart[$id])){
            $cart[$id]['quantidade']++;

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');

    }
}
