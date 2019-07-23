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
                        <h5 class="nombre_comentario"><a href="{{url('/perfil', Auth::user()->id)}}">{{$post->author->name}}</a></h5>
                        <span>hace 20 minutos</span>
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-reply"></i>
                        <form class="button-delete" action="{{url('/posts',$post->id)}}" method="POST">
                          @csrf
                          {{method_field('DELETE')}}
                          <button><i class="fas fa-trash-alt"></i></button>
                        </form>
                        <form class="button-edit" action="{{url('/posts',$post->id)}}" method="POST">
                          <button><i class="fas fa-edit"></i></button>
                        </form>
                    </div>
                    <div class="contenido_comentario">
                        {{$post->description}}
                    </div>
                </div>
            </div>

            <form action="{{url('/posts',$post->id)}}" method="POST">
              @csrf
              {{method_field('PATCH')}}
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <textarea class="form-control estilotextarea" name="description" id="description" rows="3" cols="60">{{old('description', $post ->description)}}</textarea>
                </div>
                <button class="bottoncomentario" type="submit">Enviar</button>
            </form>
            {{-- <!-- Respuestas de los comentarios -->
            <ul class="lista_comentarios lista_repuesta">
                <li>
                    <!-- Avatar -->
                    <div class="comentario_avatar"><img src="img/unicornio.jpg" alt=""></div>
                    <!-- Contenedor del Comentario -->
                    <div class="caja_comentario">
                        <div class="encabezado_comentario">
                            <h5 class="nombre_comentario"><a href="#">Unicornio Feliz</a></h5>
                            <span>hace 10 minutos</span>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-reply"></i>
                        </div>
                        <div class="contenido_comentario">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>
                <li>
                    <!-- Avatar -->
                    <div class="comentario_avatar"><img src="" alt=""></div>
                    <!-- Contenedor del Comentario -->
                    <div class="caja_comentario">
                        <div class="encabezado_comentario">
                            <h5 class="nombre_comentario"><a href="#">Hola Mundo</a></h5>
                            <span>hace 10 minutos</span>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-reply"></i>
                        </div>
                        <div class="contenido_comentario">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                        </div>
                    </div>
                </li>
            </ul> --}}
        </li>
        {{-- <li>
            <div class="comentario_principal">
                <!-- Avatar -->
                <div class="comentario_avatar"><img src="img/unicornio.jpg" alt=""></div>
                <!-- Contenedor del Comentario -->
                <div class="caja_comentario">
                    <div class="encabezado_comentario">
                        <h5 class="nombre_comentario"><a href="#">Unicornio Feliz</a></h5>
                        <span>hace 10 minutos</span>
                        <i class="fas fa-heart"></i>
                        <i class="fas fa-reply"></i>
                    </div>
                    <div class="contenido_comentario">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                    </div>
                </div>
            </div>
        </li> --}}
        @endforeach
    </ul>
</div>
@endsection
