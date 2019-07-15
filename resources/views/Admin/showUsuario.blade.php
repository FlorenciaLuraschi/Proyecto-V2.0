
@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{$user->name}}</h2></div>

<div class="">
  <a href="{{url('/editUsuario', $user->id)}}">
        <i class="far fa-edit"></i>
  </a>

  <form class="" action="{{url('/borrarUsuario',$user->id)}}" method="post">
    @csrf
    {{method_field('DELETE')}}
    <a href="{{url('/borrarUsuario', $user->id)}}">
             <i class="far fa-trash-alt"></i>
    </a>
  </form>
 <a href="/listadoUsuario">Volver al listado de Usuarios</a>
</div>



<ul>
  <li>Foto: <img width="100px" height="100px" src="{{ Storage::url($user->avatar)}}" alt=""></li>
  <li>Id: {{$user->id}}</li>
  <li>Nombre: {{$user->name}}</li>
  <li>Mail: {{$user->email}}</li>
  <li>Fecha de creación: {{$user->created_at}}</li>
  <li>Fecha de actualización: {{$user->updated_at}}</li>
  <li>IdPaís: {{$user->country_id}}</li>
  <li>Rol: {{$user->role_id}} </li>
</ul>
</div>
</div>
</div>
</div>

@endsection
