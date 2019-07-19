<!-- Contenedor Principal -->
@extends('post.create')

@section('listadoPost')
<div class="container_comentarios">
    <ul class="lista_comentarios">
      @foreach ($posts as $post)
        <li>
            <div class="comentario_principal">
                <!-- Avatar -->
                <div class="comentario_avatar">
                    <img src="{{ Storage::url($post->author->avatar) }}" />
                </div>
                <!-- Contenedor del Comentario -->
                <div class="caja_comentario">
                    <div class="encabezado_comentario">
                        <h5 class="nombre_comentario"><a href="#">{{$post->author->name}}</a></h5>
                        <span>hace 20 minutos</span>
                        <!-- icono me encanta proximo boton-->
                        <button type="button" class="button-hearts"><i class="fas fa-heart"></i></button>
                        {{-- <i class="fas fa-heart iprueba"></i> --}}
                        <!-- icono de respuesta proximo boton-->
                        <i class="fas fa-reply iprueba"></i>
                        <!-- boton de borrar-->
                        <form class="button-delete" action="{{url('/posts',$post->id)}}" method="post">
                          @csrf
                          {{method_field('DELETE')}}
                          <button><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <!-- boton de editar-->
                          <button type="button" class="button-edit"><i class="fas fa-edit"></i></button>

                    </div>
                    <div class="contenido_comentario">
                        {{$post->description}}
                    </div>
                </div>
            </div>
            <!-- formulario que deberia desaparecer con java-->
            <form action="{{url('/posts',$post->id)}}" method="POST">
              @csrf
              {{method_field('PATCH')}}
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <textarea class="form-control estilotextarea" name="description" id="description" rows="3" cols="60">{{old('description', $post ->description)}}</textarea>
                </div>
                <button class="bottoncomentario" type="submit">Enviar</button>

                <button class="btn btn-warning" type="button" style = "vertical-align: inherit;">Cancelar</button>
            </form>

        </li>

        @endforeach
    </ul>
</div>

@endsection
