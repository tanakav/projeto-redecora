@extends('layouts.app')

@section('conteudo')
    <div class="container m-3">
        <div>
            <h1>{{$produto->descricao}}</h1>
        </div>
        <div class="row">
            <div id="carrossel" class="col-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg')}}" class="d-block w-100" alt="Foto 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg')}}" class="d-block w-100" alt="Foto 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg')}}" class="d-block w-100" alt="Foto 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próxima</span>
                    </a>
                </div>
            </div>
            <div id="descricao-produto" class="col-6 text-justify">
                <p> <b>Descrição: </b>{{$produto->descricao_completa}} </p>
                <p> <b>Cor: </b> {{$cor->descricao}}</p>
                <p> <b>Material: </b>{{$material->descricao}}</p>
                <p> <b>Fornecedor: </b>{{$fornecedor->nome_fantasia}}</p>
                <div id="comprar-produto">
                    <h3 id="preco-produto" class="">R${{$produto->preco}}</h3>
                    <form action="{{route('produtos.comprar',$produto->id)}}" method="POST">
                        @csrf
                        <button id="btn-comprar" class="btn btn-success">Comprar</button>
                    </form>
                    <a id="btn-add-fav"><img class="icone" src="{{asset('imagens\Header\heart verde claro.png')}}" alt="Adicionar a favoritos"></a>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

