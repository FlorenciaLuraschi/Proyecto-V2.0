@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="wrapper">
            <form class="login_register" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <h1 class="title">Registrarse</h1>

                <input placeholder="Nombre de Usuario" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input placeholder="Correo Electrónico" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input placeholder="Contraseña" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <input placeholder="Confirmar contraseña" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                <div class="paises_register">
                    <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>
                    <select name="country_id">
                        <option hidden value="">Seleccione su país</option>
                        @foreach ($paises as $pais)
                        <option value="{{$pais->id}}">{{$pais->name}}</option>
                        @endforeach
                    </select>
                    @error('country_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                {{-- <div class="form-group row">
                            <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('Pais') }}</label>

                <div class="col-md-6">
                    <select name="country_id">
                        <option hidden value="">Seleccione su país</option>
                        @foreach ($paises as $pais)
                        <option value="{{$pais->id}}" @if ($pais==old('country_id', $model->option))
                        selected='selected'
                        @endif
                        {{$pais->name}}</option>
                        @endforeach
                        @error('country_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        </section>
                </div>
        </div> --}}

        <div class="avatar_register">
            <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Sube una foto') }}</label>
            <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar" autofocus>
            @error('avatar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">
            <i class="spinner"></i>
            <span class="state">Registrarse</span>
        </button>
        </form>
    </div>
</div>
</div>
@endsection
