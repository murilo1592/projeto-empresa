<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{url('/empresas')}}">Lara<b><i>Work</i></b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="{{url('/empresas')}}" class="nav-link">Empresas</a>
            </li>
            <li class="nav-item">
                <a href="{{url('/colaboradores')}}" class="nav-link">Colaboradores</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container my-4">

    @yield('content')

</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{url(mix('site/js/script.js'))}}"></script>
<script src="{{url(mix('site/js/mask.js'))}}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>--}}
</html>
