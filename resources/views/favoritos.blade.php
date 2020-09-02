@extends('layouts.app')

@section('conteudo')

<!-- início conteúdo -->
<h1 class="text-center">Lista de Desejos</h1>

<div>

    <form action="">
        <label for="filtroFavorito">Ordenar por:</label>
        <select name="filtroFavorito" id="">
            <option value="" disabled selected>Selecionar...</option>
            <option value="menorValor">Menor Valor</option>
            <option value="maiorValor">Maior Valor</option>
            <option value="maisPopular">Mais Popular</option>
            <option value="melhorAvaliado">Melhor Avaliado</option>
        </select>
    </form>
</div>
<hr>
<div class="row my-2 mx-auto">
    <div class="col-lg-4">
        <div class="card mx-auto my-2" style="width: 18rem;">
            <div>
                <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid wishlist-icon">
                <img class="card-img-top img-fluid"
                    src="Imagens/Produtos/Caixotes/abre-pallets-viram-moveis-768x661.jpeg" alt="Card image cap">
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

<!-- fim conteúdo -->

@endsection
