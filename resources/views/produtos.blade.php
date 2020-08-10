@extends('layouts.app')

@section('conteudo')

<div class="container m-3" id="detalhe-produto">
    <div class="row">
        <div class="col-lg-4 text-left">
            <h1 class="text-left">Produtos</h1>
        </div>
        <div class="col-lg-4">
            <form action="">
                <label for="filtroFavorito">Ordenar por:</label>
                <select name="filtroFavorito" id="">
                    <option value="" disabled selected>Ordenar por...</option>
                    <option value="menorValor">Menor Valor</option>
                    <option value="maiorValor">Maior Valor</option>
                    <option value="maisPopular">Mais Popular</option>
                    <option value="melhorAvaliado">Melhor Avaliado</option>
                </select>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-lg-3">
        <form action="" method="get">
            <p><br>Categorias</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="furniture" id="furniture">
                <label class="form-check-label" for="furniture">
                    Móveis
                </label>
            </div>


            <p><br>Material</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="wood" id="wood">
                <label class="form-check-label" for="wood">
                    Madeira de demolição
                </label>
            </div>

            <p><br>Valor</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="lowestprice" id="lowestprice">
                <label class="form-check-label" for="lowestprice">
                    Até R$ 200,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="lowprice" id="lowprice">
                <label class="form-check-label" for="lowprice">
                    De R$ 200,00 até R$ 400,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="midprice" id="midprice">
                <label class="form-check-label" for="midprice">
                    De R$ 400,00 até R$ 600,00
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="highprice" id="highprice">
                <label class="form-check-label" for="highprice">
                    Acima de R$ 600,00
                </label>
            </div>

            <p><br>Cor</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="natural-color" id="natural-color">
                <label class="form-check-label" for="natural-color">
                    Natural
                </label>
            </div>
        </form>
    </div>

    <div class="col-lg-9">
        <div class="row">
            <div class="card border-light mb-3 col-lg-4" style="width: 15rem;">
                <div>
                    <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid"
                        style="position:absolute;left:70%; top:325px;">
                    <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid"
                        style="position:absolute;left:85%; top:325px;">
                    <img class="card-img-top img-fluid" src="Imagens\Produtos\LatasBarris\berçobarril (1).jpg"
                        alt="Card image cap">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Nome do produto</h5>
                    <h6 class="card-text">Valor</h6>
                    <h6 class="card-text">Parcelamento</h6>
                    <a href="detalhe_produto.html" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="card border-light mb-3 col-lg-4" style="width: 15rem;">
                <div>
                    <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid"
                        style="position:absolute;left:70%; top:325px;">
                    <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid"
                        style="position:absolute;left:85%; top:325px;">
                    <img class="card-img-top img-fluid"
                        src="Imagens/Produtos/Caixotes/abre-pallets-viram-moveis-768x661.jpeg" alt="Card image cap">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Nome do produto</h5>
                    <h6 class="card-text">Valor</h6>
                    <h6 class="card-text">Parcelamento</h6>
                    <a href="detalhe_produto.html" class="btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="card border-light mb-3 col-lg-4" style="width: 15rem;">
                <div>
                    <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid"
                        style="position:absolute;left:70%; top:325px;">
                    <img src="imagens/Header/shopping-cart.svg" alt="" class="icone img-fluid"
                        style="position:absolute;left:85%; top:325px;">
                    <img class="card-img-top img-fluid" src="Imagens\Produtos\Pneus\puff-de-pneu-floral-bau.jpg"
                        alt="Card image cap">
                </div>

                <div class="card-body">
                    <h5 class="card-title">Nome do produto</h5>
                    <h6 class="card-text">Valor</h6>
                    <h6 class="card-text">Parcelamento</h6>
                    <a href="detalhe_produto.html" class="btn btn-success">Comprar</a>
                </div>
            </div>
        </div>

    </div>

</div>



@endsection
