<div class="container-fluid row" style="padding: 0; margin: 0;">
    <div class="col-4 brand text-center">
        <a class="navbar-brand mr-auto" href="{{ route('home.index') }}"><img
                src="imagens/Header/LogoUmaLinhaColorVerdeB.jpeg" alt="" class="img-fluid"></a>
    </div>

    <div class="col-8 d-flex" id="header">
        <div class="container d-flex justify-content-center my-auto">
            <nav class="navbar navbar-expand-lg navbar-light">

                <button class="navbar-toggler m-auto" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <form class="form-inline" action="{{ route('produtos.index') }}" method="get">
                        <input class="form-control form-control-sm mr-sm-1" type="search" placeholder="Pesquisar..."
                            name="pesquisar">
                        <button class="btn btn-outline-light btn-sm mr-sm-4" type="submit"><img
                                src="imagens/Header/search.png" alt="" class="icone"></button>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home.index') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.quemSomos') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('produtos.favoritos') }}"><img
                                    src="imagens/Header/heart.png" alt="" class="icone"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="imagens/Header/shopping-cart.png" alt=""
                                    class="icone"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="imagens/Header/user.png" alt="" class="icone"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</div>
