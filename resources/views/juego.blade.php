@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Juegos')

@section('content')

 <div class="game">  <!--reemplaza al body, para que no entre en conflicto con otras vistas -->
   <div class="score">
     <span id="tiempo"></span>
     <span id="puntaje"></span>
   </div>
   <div class="container grid">
    <h1 class="gridH1 hide">Preguntas</h1>
    <h1 class="h1">FloPaTin's Game</h1>
    <hr style="margin-top:20px">
    <div class="questionContainer">
      <p id="question">Este es un juego de preguntas. Si respondes correctamente se te suman 5 puntos.
        Tenés un minuto para hacerlos. Una vez finalizado el tiempo, te muestra el puntaje total que obtuviste.
        Si deseas, podés vuelve a jugar!!!</p>


    <div class="row buttons hide" id="answer-buttons">
      <div class="col-6"><button id="btn0" class="button">Respuesta 1 </button></div>
      <div class="col-6"><button id="btn1" class="button">Respuesta 2 </button></div>
      <div class="col-6"><button id="btn2" class="button">Respuesta 3 </button></div>
      <div class="col-6"><button id="btn3" class="button">Respuesta 4 </button></div>
    </div>
    </div>
    <hr style="margin-top:50px">
    <div class="controls">
      <button id="start-btn" class="col-4 start-btn">Comenzar</button>
      <button id="next-btn" class="col-4 next-btn hide">Siguiente</button>
    </div>
    <!-- <div>
    <p id="progress">Pregunta x de y.</p></div>
  </div> -->
  <div class="row salir hide">
    <a href="/juego"><button class="col-2 btn btn-secondary btn-lg salirBtn" name="button">Salir</button></a>
  </div>
</div>



<script src="{{ asset('js/juego.js') }}" charset="utf-8"></script>
@endsection
