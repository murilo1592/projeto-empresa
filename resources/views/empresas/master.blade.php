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
{{--<script src="{{url(mix('js/scripts.js'))}}"></script>--}}

</body>
</html>
