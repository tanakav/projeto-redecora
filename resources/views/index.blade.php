@extends('layouts.app')

@section('conteudo')
<div>
    <a href="{{ route('home.quemSomos') }}"></a>

    <div class="d-flex flex-wrap justify-content-around">
        <div class="py-2 mb-2 text-center ">
            <div class="categorias">
                <a class="nav-link" href="#"><img src="Imagens/Categorias/Móveis.png" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="#"><img src="Imagens/Categorias/Decoração.png" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="#"><img src="Imagens/Categorias/Ambientes.png" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="#"><img src="Imagens/Categorias/Promoção.png" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="#"><img src="Imagens/Categorias/Novidades.png" alt="" class="img-fluid"></a>
            </div>
        </div>
        <div class="py-2 mb-2 text-center">
            <div class="categorias">
                <a class="nav-link" href="#}"><img src="Imagens/Categorias/Inspire-se - Sustentabilidade.png" alt=""
                        class="img-fluid"></a>
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Caixotes/abre-pallets-viram-moveis-768x661.jpeg"
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Caixotes/criado-mudo-de-caixote-de-feira.jpg"
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Caixotes/mesinha-de-canto-rústica-feita-com-caixote-de-feira.jpg"
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
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/LatasBarris/berçobarril (1).jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do produto</h5>
                                <p class="card-text">Valor</p>
                                <p class="card-text">Parcelamento</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/LatasBarris/color-reclicle.jpg" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Nome do produto</h5>
                                <p class="card-text">Valor</p>
                                <p class="card-text">Parcelamento</p>
                                <a href="#" class="btn btn-success">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/LatasBarris/decoração-bares.jpg" alt="Card image cap">
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
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Palets/decoração-para-varanda-com-sofá-de-pallets.jpg"
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Palets/modelo-de-sofá-de-pallets-com-futon.jpg"
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Palets/sala-de-estar-rústica-com-sofá-de-pallets.jpg"
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
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Pneus/06-Revisteiro-vermelho-feito-com-pneu-672x483.jpeg"
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Pneus/decoração-com-puff-feito-de-pneu-revestido-com-corda-de-sisal-e-pés-palito.jpg"
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
                    <div class="col-md-4 pb-3 mb-3">
                        <div class="card" style="width: 18rem col-md-4 text-center card;">
                            <div>
                                <img src="imagens/Header/heart verde claro.png" alt=""
                                    class="icone img-fluid wishlist-icon">
                                <img class="card-img-top img-fluid"
                                    src="Imagens/Produtos/Pneus/moveis-reciclados-confira-ideias-originais-e-criativas-8.jpg"
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
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>


</div>
@endsection
