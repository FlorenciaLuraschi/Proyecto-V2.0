@extends('layouts.app')

@section('titulo', 'Proyecto FloPaTin-Perfil')

@section('content')
  <div class="container-fluid">
      <div class="contenedor_perfil">
          <section>
              <div class="row maxwidth_perfil">
                  <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                      <div class="card targeta_perfil">
                          <div class="card-body cuadroperfil1">
                              <h5 class="card-title">Miembro desde</h5>
                              <p class="card-text dato_usuario">fecharegistro</p>
                              <h5 class="card-title">País</h5>
                              <?php $bandera=Auth::user()->country_id;?>
                              <img src="{{ asset('img/'.$bandera.'.png') }}" class="bandera" alt="bandera">
                              {{-- <p class="card-text dato_usuario"></p> --}}
                              <h5 class="card-title">Puntos totales actuales</h5>
                              <p class="card-text puntos_actuales">25000</p>
                          </div>
                      </div>
                      <!--Registro historico de publicaciones-->
                      <div class="card targeta_perfil">
                          <div class="card-body archivohistorico">
                              <h5 class="card-title">Registro de Publicaciones</h5>
                              <p class="card-text">Listado historico de publicaciones, por año y mes, para poder buscar publicaciones viejas.</p>
                              <p class="card-text">
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
                  </article>
                  <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                      <!--foto de perfil-->
                      <div class="card targeta_perfil">
                          <div class="foto_usuario">
                              <img src="" class="card-img-top" alt="imganenperfil">
                          </div>
                          <div class="card-body cuadroperfil1">
                              <div class="editar_perfil">
                                  <h5 class="card-title">nombreUsuario</h5>
                                  <a class="d-block" href="configuraciones.php">Editar Perfil</a>
                              </div>
                              <p class="card-text tiempoperfil">Activo hace 20 minutos</p>
                          </div>
                      </div>
                  </article>
                  <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
                      <!--Escribe un estado-->
                      <div class="card targeta_perfil">
                          <div class="card-body estadoperfil">
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
                      <!--tabla de posiciones-->
                      <div class="card targeta_perfil">
                          <div class="card-body tablaperfil">
                              {{-- <h5 class="card-title">Tabla de Posiciones</h5>
                              <p class="card-text">En este lugar se cargará la posición actual del usuario del perfil, que puede o no estar dentro de los primeros 20 que se muestra en el inicio. Pero el usuario en este lugar puede conocer exactamente
                                  su posición en la tabla general.</p> --}}
                                  {{-- @yield('tabla_posiciones_perfil') --}}
                          </div>
                      </div>
                  </article>
                  <article class="ml-md-auto col-xs-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">
                      <!--Publicaciones generales-->
                      <div class="card targeta_perfil">
                          <div class="card-body publicaciones_perfil">
                              <h5 class="card-title">Publicaciones</h5>
                              <p class="card-text">Aquí el usuario podrá publicar, comentar y subir material de interes personal.</p>
                          </div>
                      </div>
                  </article>
              </div>
            </div>
            <!--Registro historico de publicaciones-->
            <div class="card targeta_perfil">
              <div class="card-body archivohistorico">
                <h5 class="card-title">Registro de Publicaciones</h5>
                <p class="card-text">Listado historico de publicaciones, por año y mes, para poder buscar publicaciones viejas.</p>
                <p class="card-text">
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
          </article>
          <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <!--foto de perfil-->
            <div class="card targeta_perfil">
              <div class="foto_usuario">
                <img src="{{ Storage::url($user->avatar)}}" class="card-img-top" alt="imganenperfil">
              </div>
              <div class="card-body cuadroperfil1">
                <div class="editar_perfil">
                  <h5 class="card-title">{{$user->name}}</h5>
                  @if(auth()->id()==$user->id)
                  <a class="d-block" href="{{url('/editPerfil', $user->id)}}">Editar Perfil</a>
                  @endif
                </div>
                  <p class="card-text tiempoperfil">Activo hace 20 minutos</p>
              </div>
            </div>
          </article>
          <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <!--Escribe un estado-->
            <div class="card targeta_perfil">
              <div class="card-body estadoperfil">
                <form  action="" method="POST">

                  <div class="form-group">
                    <textarea class="form-control estado_textarea" id="FormControlTextarea" rows="1" placeholder="Actualiza tu estado...">

                    </textarea>
                  </div>
                  <button class="botton_estado" type="submit">Enviar</button>
                </form>
                <br>
                <p class="card-text">Los libros nunca dejan de sorprenderte.</p>
                <p class="card-text"><small class="text-muted">Actualizado hace 1 hora</small></p>
              </div>
            </div>
            <!--tabla de posiciones-->
            <div class="card targeta_perfil">
              <div class="card-body tablaperfil">
                <h5 class="card-title">Tabla de Posiciones</h5>
                <p class="card-text">En este lugar se cargará la posición actual del usuario del perfil, que puede o no estar dentro de los primeros 20 que se muestra en el inicio. Pero el usuario en este lugar puede conocer exactamente su posición en la tabla general.</p>
              </div>
            </div>
          </article>
          <article class="ml-md-auto col-xs-12 col-sm-6 col-md-8 col-lg-8 col-xl-8">
            <!--Publicaciones generales-->
            <div class="card targeta_perfil">
              <div class="card-body publicaciones_perfil">
                <h5 class="card-title">Publicaciones</h5>
                  @yield('publicaciones')
              </div>
            </div>
          </article>
        </div>
      </section>
    </div>
  </div>


<script src="{{ asset('js/estado.js') }}" charset="utf-8"></script>
@endsection
