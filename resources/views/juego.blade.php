@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Juegos')

@section('content')

<div class="game">
  <div class="grid">
    <h1>Preguntas</h1>
    <hr style="margin-top:20px">
    <div class="questionContainer">
      <p id="question">Aqui van las preguntas</p>
    </div>
    <div class="buttons" id="answer-buttons">
      <button id="btn0" class="button"><span id="choice0">Answer 1</span>  </button>
      <button id="btn1" class="button"><span id="choice1">Answer 2</span>  </button>
      <button id="btn2" class="button"><span id="choice2">Answer 3</span>  </button>
      <button id="btn3" class="button"><span id="choice3">Answer 4</span>  </button>
    </div>
    <hr style="margin-top:50px">
    <div class="controls">
      <button id="start-btn" class="start-btn btn">Start</button>
      <button id="next-btn" class="next-btn btn hide">Next</button>

    </div>
    <div>
    <p id="progress">Question x of y.</p></div>
  </div>
</div>




@endsection
