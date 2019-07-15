@extends('layouts.app')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/login.css">
<div class="login_contenedor">
    <div class='login py-4'>
        <h2>Iniciar Sesión</h2>
        <form class="form-login" method="POST" action="{{ route('login') }}">
            @csrf

            <input placeholder="Correo Electrónico" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class='agree'>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Recordarme') }}
                </label>
            </div>

            <button type="submit" class='animated'>
              <i class="spinner"></i>
              <span class="state">{{ __('Iniciar Sesión') }}</span>

            </button>
            <br>

            @if (Route::has('password.request'))
            <a class='forgot' href="{{ route('password.request') }}">
                {{ __('¿Olvidaste la contraseña?') }}
            </a>
            @endif
    </div>
    </form>
</div>
<script type="text/javascript" src="js/login.js"></script>
@endsection
