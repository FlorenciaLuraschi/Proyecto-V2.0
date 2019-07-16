@extends('layouts.app')
@section('title', 'Proyecto FloPaTin-Buscar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Resultados de la busqueda</div>

                <div class="card-body">
                  <ul>
                    @forelse($nombres as $nombre)
                    <li>{{$nombre->name}}</li>
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
