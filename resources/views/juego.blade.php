@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Juegos')

@section('page-class', 'body_juegos')

@section('content')

  <div class="container p-0">
    <div class="card-deck contenedor_juegos">
      <div class="card">
        <img src="img/desafio-1.jpg" class="card-img-top" alt="desafio">
        <div class="card-body">
          <a href="#">
            <button class="btn-block bottonjuego" type="submit">
              Desafio
            </button>
          </a>
          <p class="card-text">Desafia a otros para jugar.</p>
        </div>
      </div>
      <div class="card">
        <img src="img/entrenamiento-1.jpg" class="card-img-top" alt="entrenamiento">
        <div class="card-body">
          <a href="#">
            <button class="btn-block bottonjuego" type="submit">
              Entrenamiento
            </button>
          </a>
          <p class="card-text">Practica sin sumar puntos.</p>
        </div>
      </div>
    </div>
  </div>
@endsection
