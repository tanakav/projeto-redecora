@extends('layouts.app')

@section('styles')
    <style>
    </style>
@endsection

@section('conteudo')

    <!-- início conteúdo -->
    <h1 class="text-center">Carrinho</h1>

    <div class="my-2 mx-auto">
        @if(session('cart'))
            <table style="width: 100%">
                <tr>
                    <th id="foto-produto"></th>
                    <th style="width: 50%">Produto</th>
                    <th style="width: 20%">Preco</th>
                    <th style="width: 20%">Quantidade</th>
                    <th></th>
                </tr>
                @foreach(session('cart') as $id=> $detalhes)

                    <tr>
                        <td></td>
                        <td>{{$detalhes['produto']->descricao}}</td>
                        <td>{{$detalhes['produto']->preco}}</td>
                        <td>{{$detalhes['quantidade']}}</td>
                        <td></td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Total: {{session('total')}}</td>
                </tr>
            </table>
        @else
            <h4>Carrinho vazio</h4>
        @endif



    </div>

    <!-- fim conteúdo -->

@endsection
