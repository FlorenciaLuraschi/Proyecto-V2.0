@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-ListadoUsuario')

@section('content')
  <div class="container">
    <div class="">
      <h1>Listado de Usuarios</h1>
    </div>
    <div class="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Usuarios</th>
            <th scope="col">Mostrar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
              <tr>

                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td><a href="{{url('/showUsuario', $user->id)}}">
                      <i class="far fa-eye"></i>
                    </a>
                </td>

              </tr>
            @endforeach
        </tbody>
      </table>
    </div>
</div>

@endsection
