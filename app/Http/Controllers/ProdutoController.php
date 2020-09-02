<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cor;
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

    //https://webmobtuts.com/backend-development/creating-a-shopping-cart-with-laravel/
    public function addToCard(Request $request){
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
