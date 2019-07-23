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
