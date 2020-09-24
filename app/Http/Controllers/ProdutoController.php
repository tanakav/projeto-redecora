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
            'fornecedor' => Fornecedor::find($produto->fornecedores_id),
            'categorias' => $produto->categorias()
        ]);
    }

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

        return redirect()->route('produtos.carrinho');
    }

    public function removeFromCart(Request $request){

        $cart = session()->get('cart');

        try{
            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->put('total',$this->calcularTotal($cart));

            return response()->json([
                'msg' => 'Item removido com sucesso'
            ], 200);
        }catch (\Exception $e){
            return response($e, 500);
        }
    }

    public function updateCart(Request $request){

            $cart = session()->get('cart');

            if($request->quantidade > 0){
                $cart[$request->id]["quantidade"] = $request->quantidade;
            }

            try{
                session()->put('cart', $cart);

                session()->put('total',$this->calcularTotal($cart));

                return response()->json([
                    'msg' => 'Item atualizado com sucesso'
                ], 200);

            }catch(\Exception $e){
                return response($e, 500);
            }

    }

    private function calcularTotal($cart){
        $total = 0;
        foreach($cart as $id=>$detalhes){
            $total += $detalhes['quantidade'] * $detalhes['produto']->preco;
        }

        return $total;
    }
}
