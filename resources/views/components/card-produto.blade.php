<div class="card border-light mb-3 col-lg-4" style="width: 15rem;">
    <div>
        <a href="{{route('produtos.show',$produto->id)}}">
            <img class="card-img-top img-fluid mt-3" src="Imagens\Produtos\LatasBarris\berçobarril (1).jpg"
             alt="Card image cap">
        </a>
    </div>

    <div class="card-body">
        <h5 class="card-title">{{$produto->descricao}}</h5>
        <h6 class="card-text">{{$produto->preco}}</h6>
        <h6 class="card-text">Parcelamento</h6>

    </div>
    <div class="card-footer">
        <button
            class="btn btn-success btn-comprar">Comprar</button>
        <div>
            <img src="imagens/Header/heart.svg" alt="" class="icone img-fluid">
        </div>
    </div>
</div>


