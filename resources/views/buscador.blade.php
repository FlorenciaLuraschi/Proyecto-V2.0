@extends('layouts.app')
@section('title', 'Proyecto FloPaTin-Buscar')
@section('content')
<div class="container medidas_buscador">
    <div class="row justify-content-center">
        <div class="col-md-8 cuerpo_buscador">
            <div class="card">
                <div class="card-header">Resultados de la busqueda</div>

                <div class="card-body">
                  <ul>
                    @forelse($nombres as $nombre)
                    <!-- el id debe ser el de cada uno de los usuarios y no el usuario registrado -->
                    <li> <a href="{{url('/perfil', $nombre->id)}}">{{$nombre->name}}</a>
                    </li>
                  @empty
                    <em>¡Usuario no encontrado!</em>
                  @endforelse
                  </ul>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
