<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    <title>FloPaTin</title>
    <!-- Styles -->
    <link rel="stylesheet" href="css/bienvenido.css">
</head>

<body>
    <video id="videoRtl" src="img/Teamwork.mp4" autoplay loop muted></video>
    <div class="header-overlay"></div>

    <div class="flex-center position-ref full-height header-content">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/posts') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Iniciar Sesión</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrarse</a>
            @endif

            <a href="/ayuda">Ayuda</a>
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                <strong>FloPaTin</strong>
            </div>
            <p><strong>Somos una comunidad donde podrás jugar,
                    un foro para socializar con otros jugadores,
                    un blog para compartir tus experiencias de juego y también para que otros, dentro de nuestra comunidad, puedan conocerte.</strong></p>
        </div>
    </div>

</body>

</html>
