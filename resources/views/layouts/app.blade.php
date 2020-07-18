<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('imagens/Logo/favicon.png') }}" />
    <title>Redecora</title>
</head>

<body>
    @include('layouts.navbar')

    @yield('conteudo')

    @include('layouts.footer')

    @yield('scripts')

</body>

</html>
