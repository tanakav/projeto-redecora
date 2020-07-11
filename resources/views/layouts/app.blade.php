<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titulo }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container">
        OHOHOHOHOHO
        @yield('content')
    </div>

    <button class="btn btn-primary">Teeste</button>

    @hasSection('scripts')
        @yield('scripts')
    @endif

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
