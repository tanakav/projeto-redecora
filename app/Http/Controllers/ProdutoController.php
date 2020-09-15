<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Cor;
use App\Fornecedor;
use App\Material;
use App\Produto;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class ProdutoController extends Controller
{
    public function index(Request $request){

        if(empty($request->all())){
            $produtos = Produto::all();
        }else{
            $produtos = Produto::filtro()->get();
        }

        $request->flash();

        return view('produtos')->with([
            'produtos'      => $produtos,
            'categorias'    => Categoria::all(),
            'materiais'     => Material::all(),
            'cores'         => Cor::all()
        ]);
    }

    public function carrinho(){
        return view('carrinho');
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

        $produto = Produto::find($request->id);
        $id = $request->id;
        $cart = session()->get('cart');
        $total = session()->get('total');

        if(!$cart || !isset($cart[$id])){

            $cart[$id] =[

                    'produto' => $produto,
                    'quantidade' => 1

            ];
            session()->put('cart',$cart);
        }else{
            $cart[$id]['quantidade']++;
            session()->put('cart', $cart);
        }

        session()->put('total',$this->calcularTotal($cart));

        return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');
    }

    public function removeFromCart(Request $request){
        $produto = Produto::find($request->id);

        $id = $request->id;

        $cart = session()->get('cart');

        $cart[$id]['quantidade']--;
        session()->put('cart', $cart);
        dd(session('cart'));

        return redirect()->back()->with('success', 'Produto removido do carrinho!');
    }

    private function calcularTotal($cart){
        $total = 0;
        foreach($cart as $id=>$detalhes){
            $total += $detalhes['quantidade'] * $detalhes['produto']->preco;
        }

        return $total;
    }
}
