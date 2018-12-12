<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('static/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/fontawesome-5.5/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('static/images/bootstrap-solid.svg') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        RACIONAMIENTO
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-tree"></i> Atención</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-file"></i> Reportes</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-align-justify"></i> Modulos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="far fa-arrow-alt-circle-right"></i> Beneficiados</a>
                    <a class="dropdown-item" href="{{ route('dependencias.index') }}"><i class="far fa-arrow-alt-circle-right"></i> Dependencias</a>
                    <a class="dropdown-item" href="{{ route('tipos.index') }}"><i class="far fa-arrow-alt-circle-right"></i> Tipos Beneficiados</a>
                    <a class="dropdown-item" href="{{ route('raciones.index') }}"><i class="far fa-arrow-alt-circle-right"></i> Raciones</a>
                    <a class="dropdown-item" href="{{ route('ingredientes.index') }}"><i class="far fa-arrow-alt-circle-right"></i> Ingredientes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('grupos.index') }}"><i class="far fa-arrow-alt-circle-right"></i> Grupos</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#"><i class="fas fa-database"></i> Backup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Salir
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Ingrese busqueda">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('static/jquery-3.3.1.min.js') }}" defer></script>
<script src="{{ asset('static/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>

</body>
</html>
