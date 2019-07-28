@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Perfil')

@section('content')

<div class="container-fluid">
    {{-- <div class="contenedor_perfil"> --}}
    <section>
        <div class="row">

            <article class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                <div class="card targeta_perfil">
                    <div class="card-body cuerpo_perfil">
                      <div class="fondo_negro_centrado row">
                        <div class="col-12">
                        {{-- avatar en perfil --}}
                        <div class="foto_usuario">
                            <img src="{{ Storage::url($user->avatar)}}" class="card-img-top" alt="imganenperfil">
                        </div>

                            <div class="editar_perfil">
                              {{-- nombre de usuario --}}
                                <h6 class="card-title">{{$user->name}}</h5>
                                  {{-- editar pefil --}}
                                @if(auth()->id()==$user->id)
                                    <a class="d-block" href="{{url('/editPerfil', $user->id)}}">Editar Perfil</a>
                                    @endif
                            </div>
                            <p class="card-text tiempoperfil">Activo hace 20 minutos</p>
                            <hr class="linea_horizontal">
                        </div>

                        <div class="fecha_miembro col-6">
                          <h5 class="card-title">Miembro desde</h5>
                          <p class="card-text dato_usuario">{{$user->created_at->format('d M Y')}}</p>

                        </div>
                        <div class="pais_miembro col-6">
                          {{-- bandera pais usuario --}}
                        <?php $bandera=Auth::user()->country_id;?>
                          <img src="{{ asset('img/'.$bandera.'.png') }}" class="bandera" alt="bandera">

                        </div>

                        <div class="puntos_miembro col-12">
                          <hr class="linea_horizontal">
                          <h5 class="card-title">Puntos totales actuales</h5>
                         <p class="card-text puntos_actuales">5000</p>
                        </div>

                      </div>
                  </div>
                </div>


                <!--tabla de posiciones-->
                <div class="card targeta_perfil">
                    <div class="card-body tablaperfil">
                        <h5 class="card-title">Tabla de Posiciones</h5>
                        <p class="card-text">En este lugar se cargará la posición actual del usuario del perfil, que puede o no estar dentro de los primeros 20 que se muestra en el inicio. Pero el usuario en este lugar puede conocer exactamente
                            su posición en la tabla general.</p>
                    </div>
                </div>

                <!--Escribe un estado-->
                {{-- <div class="card targeta_perfil">
                    <div class="card-body cuerpo_perfil estadoperfil">
                      <div class="fondo_negro_centrado">
                      <form action="" method="POST">
                            <div class="form-group">
                                <textarea class="form-control estado_textarea" id="FormControlTextarea" rows="1" placeholder="Actualiza tu estado..."></textarea>
                            </div>
                            <button class="botton_estado" type="submit">Enviar</button>
                        </form>
                        <br>
                        <p class="card-text">Los libros nunca dejan de sorprenderte.</p>
                        <p class="card-text"><small class="text-muted">Actualizado hace 1 hora</small></p>
                    </div>
                </div>
              </div> --}}


            </article>


            {{-- <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                <!--tabla de posiciones-->
                <div class="card targeta_perfil">
                    <div class="card-body tablaperfil">
                        <h5 class="card-title">Tabla de Posiciones</h5>
                        <p class="card-text">En este lugar se cargará la posición actual del usuario del perfil, que puede o no estar dentro de los primeros 20 que se muestra en el inicio. Pero el usuario en este lugar puede conocer exactamente
                            su posición en la tabla general.</p>
                    </div>
                </div>
              </article> --}}

              {{-- <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">

                <!--Registro historico de publicaciones-->
                <div class="card targeta_perfil">
                    <div class="card-body archivohistorico">
                      <div class="fondo_negro_simple">
                        <h5 class="card-title">Registro de Publicaciones</h5>
                        {{-- <p class="card-text">Listado historico de publicaciones, por año y mes, para poder buscar publicaciones viejas.</p> --}}
                      {{--  <p class="card-text">
                            <ul>
                                <li>
                                    <a href="#">2019(1)</a>
                                    <ul type="triangle">
                                        <li>
                                            <a href="#">Abril</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </p>
                    </div>
                  </div>
                </div>

            </article> --}}

            <article class="ml-md-auto col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <!--Publicaciones generales-->
                <div class="card targeta_perfil">
                    <div class="card-body publicaciones_perfil">
                        <h5 class="card-title">Publicaciones</h5>
                        @yield('publicaciones')
                    </div>

                </div>
            </article>
        </div>
        {{-- </div> --}}

    </section>
</div>
</div>


<script src="{{ asset('js/estado.js') }}" charset="utf-8"></script>
@endsection
