<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('imagens/Logo/favicon.png') }}" />
    <title>Redecora</title>
    @yield('styles')
</head>

<body>
    @include('layouts.navbar')

    <div class="container" id='content'>
        @yield('conteudo')
    </div>

    @include('layouts.footer')

    @yield('scripts')

</body>

</html>
