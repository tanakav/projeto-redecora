<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagens/Logo/favicon.png') }}" />
    <title>Redecora</title>
</head>

<body>
    <div class="container-fluid row" style="padding: 0; margin: 0;">
        <div class="col-4 brand text-center">
            <a class="navbar-brand mr-auto" href="index.php"><img src="imagens/Header/LogoUmaLinhaColorVerdeB.jpeg"
                    alt="" class="img-fluid"></a>
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
                        <form class="form-inline" action="search.php" method="get">
                            <input class="form-control form-control-sm mr-sm-1" type="search" placeholder="Pesquisar..."
                                name="pesquisar">
                            <button class="btn btn-outline-light btn-sm mr-sm-4" type="submit"><img
                                    src="imagens/Header/search.png" alt="" class="icone"></button>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">Quem Somos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="search.php">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="wishlist.php"><img src="imagens/Header/heart.png" alt=""
                                        class="icone"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><img src="imagens/Header/shopping-cart.png" alt=""
                                        class="icone"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="add-user-form.php"><img src="imagens/Header/user.png" alt=""
                                        class="icone"></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

    </div>

    @yield('conteudo')

    <div id="footer-verde" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-4 text-center">
                    <h6>Fale Conosco</h6>
                    <div class="row justify-content-center">
                        <div><a href="tel:+55051997578128"><img class="icone mx-2" src="imagens/Footer/phone.png"
                                    alt=""></a></div>
                        <div><a href="https://wa.me/5551997578128"><img class="icone mx-2"
                                    src="imagens/Footer/whatsapp.png" alt=""></a></div>
                        <div><a href="mailto:contato@redecora.com.br"><img class="icone mx-2"
                                    src="imagens/Footer/email.png" alt=""></a></div>
                        <div><a href="contact-form.php"><img class="icone mx-2" src="imagens/Footer/support.png"
                                    alt=""></a></div>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <h6>Redes Sociais</h6>
                    <div class="row justify-content-center">
                        <div><a href="https://pt-br.facebook.com/"><img class="icone mx-2"
                                    src="imagens/Footer/facebook.png" alt=""></a></div>
                        <div><a href="https://www.instagram.com/accounts/login/?hl=pt-br"><img class="icone mx-2"
                                    src="imagens/Footer/instagram.png" alt=""></a></div>
                        <div><a href="https://twitter.com/login?lang=pt"><img class="icone mx-2"
                                    src="imagens/Footer/twitter.png" alt=""></a></div>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <h6>Formas de Pagamento</h6>
                    <div class="row justify-content-center">
                        <div><a href="#"><img class="icone mx-2" src="imagens/Footer/mastercard.png" alt=""></a></div>
                        <div><a href="#"><img class="icone mx-2" src="imagens/Footer/visa.png" alt=""></a></div>
                        <div><a href="#"><img class="icone mx-2" src="imagens/Footer/paypal.png" alt=""></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="footer-azul">

        <div class="container text-center py-3">
            <h6>&copy 2020 - REDECORA - Todos os direitos reservados.</h6>
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>



</body>

</html>
