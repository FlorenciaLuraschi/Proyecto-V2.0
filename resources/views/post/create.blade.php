@extends('layouts.app')
@section('title', 'Proyecto FloPaTin-Inicio')
@section('content')
<div class="header-overlay"></div>
<section class="secciongral">
    <div class="row contenedorprincipal p-0">
        <article class="tablaposiciones col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
          {{-- @yield("flopationes")   --}}
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">FloPaTiones</th>
                </tr>
            </thead>
            <tbody>
              <tr>

                @foreach ($games as $game)

                <td>
                  {{ $game->score }}
                  {{ $game->player->name }}
                </td>
                @endforeach
              </tr>

            </tbody>
          </table>
        </article>
        <article class="chatgeneral col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
            <form action="/posts" method="POST">
              @csrf
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <textarea class="form-control estilotextarea" name="description" id="description" rows="3" cols="60" placeholder="Agrega un comentario..."></textarea>
                </div>
                <button class="bottoncomentario" type="submit">Enviar</button>
            </form>
            <!-- Contenedor Principal -->
            @yield("listadoPost")
            <!-- Contenedor Principal -->
            <div class="container_comentarios">
                <ul class="lista_comentarios">
                    <li>
                        <div class="comentario_principal">
                            <!-- Avatar -->
                            <div class="comentario_avatar">
                                <img src="{{ Storage::url(auth()->user()->avatar) }}" alt="">
                            </div>
                            <!-- Contenedor del Comentario -->
                            <div class="caja_comentario">
                                <div class="encabezado_comentario">
                                    <h5 class="nombre_comentario"><a href="#">{{ Auth::user()->name }}</a></h5>
                                    <span>hace 20 minutos</span>
                                    <i class="fas fa-heart"></i>
                                    <i class="fas fa-reply"></i>
                                </div>
                                <div class="contenido_comentario">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                </div>
                            </div>
                        </div>
                        <!-- Respuestas de los comentarios -->
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
                                <div class="comentario_avatar"><img src="{{ Storage::url(auth()->user()->avatar) }}" alt=""></div>
                                <!-- Contenedor del Comentario -->
                                <div class="caja_comentario">
                                    <div class="encabezado_comentario">
                                        <h5 class="nombre_comentario"><a href="#">{{ Auth::user()->name }}</a></h5>
                                        <span>hace 10 minutos</span>
                                        <i class="fas fa-heart"></i>
                                        <i class="fas fa-reply"></i>
                                    </div>
                                    <div class="contenido_comentario">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
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
                    </li>
                </ul>
            </div>
        </article>
        <article class="miembrosvisibles col-md-2 col-lg-2 col-xl-2 d-none d-md-block">
            <p class="ayudas">A modo de ayuda para la visualización del sitio. En esta sección va la tabla que muestra usuarios conetactados</p>
        </article>
    </div>
</section>
@endsection
