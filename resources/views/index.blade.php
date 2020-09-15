@extends('layouts.app')

@section('styles')
    <style>
        .carousel-card-div{
            display: flex;
            justify-content: center;
        }

        .carousel-card{
            width: 20rem;
        }
    </style>
@endsection

@section('conteudo')
<div>
    <a href="{{ route('home.quemSomos') }}"></a>

    <div class="d-flex flex-wrap justify-content-around">
        <div class="py-2 mb-2 text-center ">
            <div class="categorias">
                <a class="nav-link" href="/produtos?categorias%5B1%5D=1"><img src="{{asset('Imagens/Categorias/Móveis.png')}}" alt="" class="img-fluid">uhiuhiu</a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="/produtos?categorias%5B2%5D=2"><img src="{{asset('Imagens/Categorias/Decoração.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="/produtos?categorias%5B3%5D=3"><img src="{{asset('Imagens/Categorias/Ambientes.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="/produtos?categorias%5B4%5D=4"><img src="{{asset('Imagens/Categorias/Novidades.png')}}" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4 pb-3 mb-3 carousel-card-div">
                        <div class="card carousel-card">
                            <div>
                                <img src="{{asset('imagens/Header/heart verde claro.png')}}" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="{{asset('Imagens/Produtos/Caixotes/abre-pallets-viram-moveis-768x661.jpeg')}}"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do produto</h5>
                                <p class="card-text">Valor</p>
                                <p class="card-text">Parcelamento</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-3 mb-3 carousel-card-div">
                        <div class="card carousel-card">
                            <div>
                                <img src="{{asset('imagens/Header/heart verde claro.png')}}" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="{{asset('Imagens/Produtos/Caixotes/criado-mudo-de-caixote-de-feira.jpg')}}"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do produto</h5>
                                <p class="card-text">Valor</p>
                                <p class="card-text">Parcelamento</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-3 mb-3 carousel-card-div">
                        <div class="card carousel-card">
                            <div>
                                <img src="{{asset('imagens/Header/heart verde claro.png')}}" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="{{asset('Imagens/Produtos/Caixotes/mesinha-de-canto-rústica-feita-com-caixote-de-feira.jpg')}}"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do produto</h5>
                                <p class="card-text">Valor</p>
                                <p class="card-text">Parcelamento</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<<<<<<< HEAD
=======

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>


>>>>>>> carladmoreira
</div>
@endsection


