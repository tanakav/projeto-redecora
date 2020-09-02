@extends('layouts.app')

@section('conteudo')

<div>
    <h1>Nome do Produto</h1>
</div>
<div id="caminho_produto" class="caminho">
    <ul class="list-inline">
        <li class="list-inline-item"><a href="{{route('home.index')}}">Home</a> /</li>
        <li class="list-inline-item"><a href="#">Categorias</a> /</li>
        <li class="list-inline-item"><a href="#">Categoria_Produto</a> /</li>
        <li class="list-inline-item">{{$produto->descricao}}</li>
    </ul>
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
                    <img src="Imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg" class="d-block w-100" alt="Foto 1">
                </div>
                <div class="carousel-item">
                    <img src="Imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg" class="d-block w-100" alt="Foto 2">
                </div>
                <div class="carousel-item">
                    <img src="Imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg" class="d-block w-100" alt="Foto 3">
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
        <p> <b>Descrição: </b>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis, magni
            delectus? </p>
        <p> <b>Dimensões: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non earum veniam ad
            harum omnis</p>
        <p> <b>Material / Cor: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non earum veniam
            ad harum omnis</p>
        <p> <b>Transporte / Montagem: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non earum
            veniam ad harum omnis</p>
        <p> <b>Recomendações Importantes: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non
            earum veniam ad harum omnis</p>
        <div id="comprar-produto">
            <h1 id="preco-produto" class="">R$ X,xx</h1>
           <button id="btn-comprar" class="btn btn-success"><img class="icone"
                        src="imagens header\shopping-cart.svg" alt="Adicionar ao Carrinho">
                    Comprar</button></a>
                <a id="btn-add-fav"><img class="icone" src="Imagens\Header\heart verde claro.png"
                        alt="Adicionar a favoritos"> Adicionar aos
                    Favoritos</a>
        </div>
    </div>
</div>
</div>
@endsection

@section('scripts')
    <script>
        let btn_comprar = document.getElementById('btn-comprar');

        btn_comprar.addEventListener('click', (e)=>{
            e.preventDefault();
            addToCart();
        });

        function addToCart(){
            let route = '{{route('produtos.comprar')}}';
            let CSRF_TOKEN = '{{csrf_token}}';

            $.ajax({
                type: 'POST',
                url: route,
                data: {
                    id: '{{$produto->id}}',
                    _token: CSRF_TOKEN
                },
                dataType: 'json',
                beforeSend: function(){

                },
                success: function(){

                },
                error: function(){

                },
                complete: function(){

                }
            });
        }

    </script>
@endsection
