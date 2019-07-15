
@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Editar Usuario')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Actualización de datos del usuario') }}</h2></div>
 <!-- {{ $errors }} -->
<div class="card-body">
  <form class="" action="{{url('/editUsuario', $user->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}

    <div class="form-group row">
        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('Foto:') }}</label>
           <img width="100px" height="100px" src="{{ Storage::url($user->avatar)}}" alt="">
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
        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Id:') }}</label>

        <div class="col-md-6">
            <input id="id" type="text" class="form-control" disabled name="id" value="{{ $user->id }}" autofocus>

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
   <div class="form-group row">
       <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

       <div class="col-md-6">
           <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}" required autocomplete="new-password">

           @error('password')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
       </div>
   </div>

   <div class="form-group row">
       <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de creación:') }}</label>

       <div class="col-md-6">
           <input id="created_at" type="text" class="form-control"  name="created_at" value="{{ $user->created_at }}" autofocus>

       </div>
   </div>

   <div class="form-group row">
       <label for="updated_at" class="col-md-4 col-form-label text-md-right">{{ __(' Fecha de actualización:') }}</label>

       <div class="col-md-6">
           <input id="updated_at" type="text" class="form-control" name="updated_at" value="{{ $user->updated_at }}" autofocus>
      </div>
  </div>
  <div class="form-group row">
      <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __(' Rol:') }}</label>

      <div class="col-md-6">
          <input id="role_id" type="text" class="form-control" name="role_id" value="{{ $user->role_id }}" autofocus>
     </div>
 </div>
   <div class="form-group row">
       <label for="country_id" class="col-md-4 col-form-label text-md-right">{{ __('IdPaís:') }}</label>

       <div class="col-md-6">
          <input id="country_id"  class="form-control @error('country_id') is-invalid @enderror" name="country_id" value="{{ $user->country_id }}">

        @error('country_id') <!--ESTO NO ESTA VALIDANDO -->
           <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
           </span>
       @enderror
       </div>
   </div>

   <div class="form-group row mb-0">
       <div class="col-md-6 offset-md-4">
           <button type="submit" class="btn btn-primary">
               {{ __('Actualizar') }}
           </button> 
           <a href="{{url('/showUsuario', $user->id)}}">{{ __('Volver atrás') }}</a>
       </div>
   </div>

  </form>
</div>
</div>
</div>
</div>
</div>
 @endsection
