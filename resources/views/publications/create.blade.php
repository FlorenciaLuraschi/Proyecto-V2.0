@extends('perfil')
@section('publicaciones')
<form action="{{url('/perfil')}}" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
        <textarea class="form-control estilotextarea" name="body" id="body" rows="6" cols="60" placeholder="Agrega un comentario..."></textarea>
    </div>
    <button class="bottoncomentario" type="submit">Enviar</button>
</form>
<br>
<div class="container_comentarios">

  <ul class="lista_comentarios">
    @foreach ($publications as $publication)
      @if($user->id == $publication->user_id)
       <li>
            <div class="comentario_principal">
                <!-- Contenedor del Comentario -->
                <div class="caja_comentario">
                    <div class="encabezado_comentario">

                        <h5 class="nombre_comentario"><a href="#">{{$publication->authorPublication->name}}</a></h5>

                        <span>hace 20 minutos</span>
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-reply"></i>


                        <form class="button-delete" action="{{url('/perfil',$publication->id)}}" method="post">

                          @csrf
                          {{method_field('DELETE')}}
                          <button><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <form class="button-edit" action="{{url('/perfil',$publication->id)}}" method="post">
                          <button><i class="fas fa-edit"></i></button>
                        </form>
                    </div>

                    <div class="contenido_comentario">
                        {{$publication->body}}
                    </div>
                </div>
            </div>

            <form action="{{url('/perfil',$publication->id)}}" method="post">
              @csrf
              {{method_field('PATCH')}}
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <textarea class="form-control estilotextarea" name="body" id="body" rows="3" cols="60">{{old('body', $publication ->body)}}</textarea>
                </div>
                <button class="bottoncomentario" type="submit">Enviar</button>
            </form>

            </li>
            @endif
            @endforeach
        </ul>

    </div>

@endsection
