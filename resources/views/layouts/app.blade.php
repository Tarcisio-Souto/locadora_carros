<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Locadora') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="../js/app.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/3d7779fa7f.js" crossorigin="anonymous"></script>


</head>
<body>
    <div class="overlay"></div>
    <div class="geral">        
        <div id="app">            
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm menu-sup">
                <div class="container">
                    <a class="navbar-brand logo-menu" href="{{ url('/inicio') }}">
                        {{ config('app.name', 'Locadora') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                <!--
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                -->

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                        </a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <button class="openbtn" onclick="openNav()">☰</button>
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                <a href="#"><i class="fas fa-home"></i>Início</a>
                <a href="#usuarioSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-tie"></i>Usuários</a>
                <ul class="collapse list-unstyled" id="usuarioSubMenu">
                    <li>
                        <a href="{{ route('user.create') }}"><i class="fas fa-user-plus"></i>Cadastrar</a>
                    </li>
                    <li>
                        <a href="{{ route('user.index') }}"><i class="fas fa-search"></i>Pesquisar</a>
                    </li>
                </ul>
                <a href="#carroSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-tie"></i>Carros</a>
                <ul class="collapse list-unstyled" id="carroSubMenu">
                    <li>
                        <a href="{{ route('car.create') }}"><i class="fas fa-user-plus"></i>Cadastrar</a>
                    </li>
                    <li>
                        <a href="{{ route('car.index') }}"><i class="fas fa-search"></i>Pesquisar</a>
                    </li>
                </ul>
                <a href="#locacoesSubMenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user-tie"></i>Locações</a>
                <ul class="collapse list-unstyled" id="locacoesSubMenu">
                    <li>
                        <a href="{{ route('rent.index') }}"><i class="fas fa-user-plus"></i>Cadastrar</a>
                    </li>
                    <li>
                        <a href="{{ route('rent.index') }}"><i class="fas fa-search"></i>Pesquisar</a>
                    </li>
                </ul>
                <a href="#">Sobre</a>
            </div>

            <main>
                @yield('content')
            </main>

            <div class="container-fluid footer">
                <div class="row">
                    <div class="col-md-2">
                        <h3>LOGO</h3>
                    </div>
                    <div class="col-md-8">
                        <p>Locadora</p>
                        <p>2021</p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            

        </div>
    </div>
</body>
</html>
