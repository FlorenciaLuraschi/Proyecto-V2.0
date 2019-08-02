<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.head')
    <title>@yield("title")</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js" integrity="sha256-S1J4GVHHDMiirir9qsXWc8ZWw74PHHafpsHp5PXtjTs=" crossorigin="anonymous"></script>
</head>

<body id="top" style="background-image: url('{{ asset('img/prueba_perfil1.jpg')}}')">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbarra shadow-sm" id="navbar">
            <div class="container">
                <img class="logo" src="{{ asset('img/logo1.png') }}" alt="logo_proyecto">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2>FloPaTin</h2>
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                        @endif
                        @else
                        <form class="form-inline my-2 my-lg-0" action="{{url('/search')}}">
                            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Buscar personas ..." value="">
                            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/perfil">Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/editPerfil', Auth::user()->id)}}">Editar Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/changePassword')}}">Cambiar contraseña</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/juego">Jugar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/posts">Sala</a>
                        </li>

                        @endguest
                        <li class="nav-item">
                            <a class="nav-link" href="/ayuda">Ayuda</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
</body>

</html>
