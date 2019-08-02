@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="wrapper">
            <form class="login_register login" method="POST" action="{{ route('login') }}">
                @csrf
                <h1 class="title">Iniciar Sesión</h1>

                <input id="email" placeholder="Correo Electrónico" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste la contraseña?') }}
                </a>
                @endif


                <button id="boton-entrar" type="submit" class="btn btn-primary">
                    <i class="spinner"></i>
                    <span class="state">Iniciar Sesión</span>
                </button>
                <br>

            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/Script.js') }}"></script>


@endsection
