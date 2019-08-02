@extends('layouts.app')
@section('content')
<h1 class="passwordTitulo">Cambio de contraseña</h1>

 @if(session('message'))
<div class="alert alert-danger">
  {{session('message')}}
</div>
@endif
<div class="container_passChange">
  <form  action="{{url('/changePassword', auth()->user()->id)}}" method="post">
    @csrf
     {{ method_field('PATCH') }}
  <div class="current-password-contener">
    <div class="form-group row">
      <label for="current-password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña actual:') }}</label>

      <div class="col-md-6">
        <input id="current-password" type="password" class="form-control" name="current-password" value="" required autocomplete="off">
        <span class="text-danger">
     <strong>{{ $errors->first('current-password')}}</strong>
   </span>

      </div>
    </div>
  </div>

  <div class="new-password-contener">
    <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva contraseña:') }}</label>

      <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" value="" required autocomplete="password">
        <span class="text-danger">
     <strong>{{ $errors->first('password')}}</strong>
        </span>

      </div>
    </div>
  </div>

   <div class="verify-newPassword-contener">
    <div class="form-group row">
      <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar nueva contraseña:') }}</label>

      <div class="col-md-6">
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" value="" required autocomplete="new-password">
        <span class="text-danger">
     <strong>{{ $errors->first('password_confirmation')}}</strong>
        </span>
      </div>
    </div>
  </div>

  <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
      <button type="submit" class="btn btn-primary">
        {{ __('Cambiar contraseña') }}
      </button>
    </div>
  </div>
  </form>
</div>

@endsection
