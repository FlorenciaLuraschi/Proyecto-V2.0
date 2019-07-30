@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Editar Perfil')

@section('content')

  <div class="container-fluid">
    <div class="contenedor_perfil">
      <section>
        <div class="maxwidth_configuracion">

            <!--foto de perfil-->
            <div class="card targeta_perfil">
              <div class="foto_usuario">
                <img class="card-img-top" src="{{ Storage::url($user->avatar)}}" alt="">
              </div>

                  <form class="" action="{{url('/editPerfil', $user->id)}}" method="post" enctype="multipart/form-data">
                   @csrf
                   {{ method_field('PATCH') }}
                      <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto:') }}</label>

                        <div class="col-md-6">
                          <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="" autofocus>

                          @error('avatar')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                        </div>
                      </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre:') }}</label>

                      <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Mail:') }}</label>

                    <div class="col-md-6">
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div>
                  {{--<div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                    <div class="col-md-6">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}" required autocomplete="new-password">

                      @error('password')
                      <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                  </div> --}}


                  <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                        {{ __('Actualizar') }}
                      </button>
                      </div>
                  </div>

                  </form>


                </div>
            </div>
      </section>
    </div>
  </div>

@endsection
