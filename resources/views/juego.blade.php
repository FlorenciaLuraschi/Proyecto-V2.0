@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Juegos')

@section('content')

 <div class="game">  <!--reemplaza al body, para que no entre en conflicto con otras vistas -->
   <div class="score">
     <span id="tiempo"></span>
     <span id="puntaje"></span>
   </div>
   <div class="container grid">
    <h1 class="gridH1">Preguntas</h1>
    <hr style="margin-top:20px">
    <div class="questionContainer">
      <p id="question">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>


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




@endsection
