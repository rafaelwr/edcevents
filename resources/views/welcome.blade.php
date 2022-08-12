<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Teste</h1>

        <img src="/img/banner.jpg" alt="Banner">

        <p>O nome é {{ $nome }} e a profissão é {{ $profissao }}.</p>

        <p>
            @if($idade >= 18)
                É maior de idade.
            @else
                É menor de idade.
            @endif
        </p>
    </body>
</html>
