@extends('layouts.app')
@section('title', 'Proyecto FloPaTin-Inicio')
@section('content')
<div class="header-overlay"></div>
<section class="secciongral">
    <div class="row contenedorprincipal p-0">
        <article class="tablaposiciones col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
          <!-- tabla general de posiciones -->
          @include("post.posiciones")
        </article>
        <article class="chatgeneral col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
          <!-- Formulario para enviar comentarios a la sala -->
            @include("post.form")

            <!-- Contenedor Principal -->
            <div class="container_comentarios">
                <ul class="lista_comentarios">
                    @foreach ($posts as $post)
                    <li data-post="{{$post->id}}">
                        {{-- id={{'post_'.$post->id}} --}}
                        <div id={{'post_'.$post->id}} class="comentario_principal">

                            <!-- Avatar -->
                            <div class="comentario_avatar">
                                <img src="{{ Storage::url($post->author->avatar) }}" />
                            </div>
                            <!-- Contenedor del Comentario -->
                            <div class="caja_comentario">
                                <div class="encabezado_comentario">
                                    <h5 class="nombre_comentario"><a href="#">{{$post->author->name}}</a></h5>
                                    <span>{{$post->updated_at->diffForHumans()}}</span>
                                    <!-- icono me encanta proximo boton-->
                                    <button type="button" class="button-hearts"><i class="fas fa-heart"></i></button>
                                    {{-- <i class="fas fa-heart iprueba"></i> --}}
                                    <!-- icono de respuesta proximo boton-->
                                    <i class="fas fa-reply iprueba"></i>
                                    <!-- boton de borrar-->
                                    @if (Auth::user()->can('delete', $post))
                                    <form class="button-delete" action="{{url('/posts',$post->id)}}" method="post">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                  @endif
                                  @if (Auth::user()->can('update', $post))
                                    <!-- boton de editar-->
                                    <button type="button" data-edit="{{$post->id}}" class="button-edit"><i class="fas fa-edit"></i></button>
                                  @endif

                                </div>
                                <div class="contenido_comentario">
                                  <p> {{$post->description}} </p>
                                </div>
                            </div>
                        </div>
                        <!-- formulario que deberia desaparecer con java-->
                        {{-- id={{'ta_'.$post->id}} --}}
                        <form id={{'ta_'.$post->id}} action="{{url('/posts',$post->id)}}" class="ocultar" method="POST">
                            @csrf
                            {{method_field('PATCH')}}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <textarea class="form-control estilotextarea" name="description" id="description" rows="3" cols="60">{{old('description', $post ->description)}}</textarea>
                            </div>
                            <br><br><br><br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary ocultar_editar">Guardar cambios</button>

                                <a href="/posts"><button type="button" class="btn btn-secondary ocultar_editar" data-dismiss="modal">Cancelar</button></a>

                            </div>
                            {{-- <button class="bottoncomentario" type="submit">Enviar</button>

                            <button class="btn btn-warning" type="button" style="vertical-align: inherit;">Cancelar</button> --}}
                        </form>

                    </li>

                    @endforeach
                </ul>
            </div>

            <!-- Contenedor Principal -->
            @include("post.all")
        </article>
        <article class="miembrosvisibles col-md-1 col-lg-1 col-xl-1 d-none d-md-block">
          <!-- tabla de miembros conectados -->
            <p class="ayudas">A modo de ayuda para la visualización del sitio. En esta sección va la tabla que muestra usuarios conetactados</p>
        </article>
    </div>
</section>
@endsection
