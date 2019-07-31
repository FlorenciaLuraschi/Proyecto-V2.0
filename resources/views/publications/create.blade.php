@extends('perfil')

@section('publicaciones')

<div class="container bootstrap snippet">
    <div class="row body-muro">
        <div class="profile-info">
            {{-- formulario para comentar --}}
            <form action="{{url('/perfil')}}" method="POST">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <textarea class="form-control input-lg p-text-area" name="body" id="body" rows="2" cols="100" placeholder="¿Qué estás pensando hoy..."></textarea>
                </div>
                <div class="panel-final">
                    <button type="submit" class="btn btn-info pull-right">Publicar</button>
                    <ul class="nav nav-pills">
                        <li><a href="#"><i class="fa fa-camera iprueba"></i></a></li>
                        <li><a href="#"><i class=" fa fa-film iprueba"></i></a></li>
                    </ul>
                </div>
            </form>

        </div>
    </div>
</div>

{{-- comiezo de las publicaciones --}}
<ul class="container bootstrap snippet">
    @foreach ($publications as $publication)
    @if($user->id == $publication->user_id)
        <div class="row body-muro">

            <div class="panel-body">

                <li data-publication="{{$publication->id}}">
                  <div id={{'publication_'.$publication->id}}>

                    {{-- avatar --}}
                    <div class="p-foto-user">
                        <img src="{{ Storage::url($publication->authorPublication->avatar) }}" alt="">
                    </div>
                    <div class="p-user-detalles">
                        <h3><a href="#" class="#">{{$publication->authorPublication->name}}</a></h3>
                        <p>{{$publication->updated_at->diffForHumans()}}</p>
                    </div>
                    <div class="clearfix"></div>
                    <p class="p-user-publicacion">
                        {{$publication->body}}
                    </p>
                    <div class="publicacion-border">
                        <div class="botones-publicacion">
                            {{-- <i class="fas fa-reply"></i> --}}

                            @if (Auth::user()->can('delete', $publication))
                            <form class="p-button-delete" action="{{url('/perfil',$publication->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button><i class="fas fa-trash-alt"></i></button>
                            </form>
                          @endif
                          @if (Auth::user()->can('update', $publication))
                            <!-- boton de editar-->
                            <button type="button" data-editpublication="{{$publication->id}}" class="p-button-edit"><i class="fas fa-edit ipublication"></i></button>
                          @endif
                          <i class="fas fa-heart heart-principal iprueba"></i>
                        </div>
                    </div>
                    </div>

                    <form id={{'tap_'.$publication->id}} action="{{url('/perfil',$publication->id)}}" class="ocultar" method="post">
                        @csrf
                        {{method_field('PATCH')}}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <textarea class="form-control input-lg p-text-area" name="body" id="body" rows="2" cols="100">{{old('body', $publication ->body)}}</textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary ocultar_editar">Guardar cambios</button>

                            <a href="/perfil"><button type="button" class="btn btn-secondary ocultar_editar" data-dismiss="modal">Cancelar</button></a>

                        </div>
                    </form>

                    <div class="p-status-container publicacion-border p-gray-bg">
                        <div class="fb-time-action like-info">
                            {{-- <a href="#">Ivana,</a>
                            <a href="#">Danieal</a>
                            <span>y</span>
                            <a href="#">40 más</a>
                            <span>le gusta</span> --}}
                        </div>

                    {{-- lista de comentarios. Respuestas a las publicaciones del muro --}}
                    <ul class="p-comentarios">
                        <li>
                            {{-- avatar --}}
                            <a href="#" class="cmt-thumb">
                                <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="">
                            </a>
                            {{-- textarea para comentar --}}
                            <div class="cmt-form">
                                <textarea class="form-control" placeholder="Escribe un comentario..." name=""></textarea>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </li>
            </div>

        </div>
        @endif
        @endforeach
</ul>

{{-- PUBLICACION GENERAL CON COMENTARIOS COMO EJEMPLO --}}

<div class="container bootstrap snippet">
    <div class="row body-muro">

        <ul class="panel-body">
            <div class="p-foto-user">
                <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="">
            </div>
            <div class="p-user-detalles">
                <h3><a href="#" class="#">{{Auth::user()->name}}</a></h3>
                <p>Hace 7 minutos</p>
            </div>
            <div class="clearfix"></div>
            <p class="p-user-publicacion">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <div class="p-status-container publicacion-border">
                <div class="botones-publicacion">
                    {{-- <i class="fas fa-reply iprueba"></i> --}}
                    <i class="fas fa-heart iprueba"></i>
                </div>
            </div>

            <div class="p-status-container publicacion-border p-gray-bg">
                <div class="fb-time-action like-info">
                    <a href="#">Ivana,</a>
                    <a href="#">Danieal</a>
                    <span>y</span>
                    <a href="#">40 más</a>
                    <span>le gusta</span>
                </div>

                <ul class="p-comentarios">
                    <li>
                        <a href="#" class="cmt-thumb">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </a>
                        <div class="cmt-detalle">
                            <a href="#">Ivana</a>
                            <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            <p>hace 40 minutos <a href="#" class="like-link"><i class="fas fa-heart"></i></a></p>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="cmt-thumb">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                        </a>
                        <div class="cmt-detalle">
                            <a href="#">María</a>
                            <span> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </span>
                            <p>hace 2 minutos <a href="#" class="like-link"><i class="fas fa-heart"></i></a></p>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="cmt-thumb">
                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                        </a>
                        <div class="cmt-form">
                            <textarea class="form-control" placeholder="Estribe un comentario..." name=""></textarea>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
        </ul>

    </div>
</div>

<script type="text/javascript" src="{{ asset('js/Script.js') }}"></script>
@endsection
