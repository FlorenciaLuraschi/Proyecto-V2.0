/** ====================
 * Funciones para
 * ~login
 * ~register
 * ~editar comentarios/publicaciones
 * ~contar hearts o broken heart
 =======================*/
window.onload = function() {
  /** ====================
   * LOGIN
   =======================*/

   let working = false;

   $('.login_register').on('submit', function(evento) {
     evento.preventDefault();
     //if (working) return;
     //working = true;
     let $this = $(this);
       $state = $this.find('button > .state');
     $this.addClass('loading');
     $state.html('Autenticando');
     setTimeout(function() {
       $this.addClass('ok');
       $state.html('¡Bienvenido!');
       $this.unbind('submit').submit();
     }, 3000);

   });


  //Seleccionas todos los botones de editar para post de la sala
  let botonesDeEditar = document.querySelectorAll('.fas.fa-edit');
  console.log(botonesDeEditar);
  for(let i = 0; i < botonesDeEditar.length; i++) {
    botonesDeEditar[i].addEventListener('click', function() {
      // Para crear unicidad, le puse un atributo "data-edit" a todos los botoncitos de borrar.
      //El valor de ese atributo debería el ID del post.
      let postId = this.parentElement.getAttribute('data-edit');
      console.log(postId);
      let thePost = document.querySelector('#post_' + postId);
      console.log(thePost);
      let theTextArea = document.querySelector('#ta_' + postId);
      // En el CSS deberías poner que las clases "comentario_principal" y
      //"unaClaseCualquiera" sean display:none.
      //Lo que les va a dar la visibilidad va a ser que esten en
      //conjunto con la clase "show". La cual solo debería tener "display: block"
      //y las vas a ir toggleando en el evento de click como aramos arriba
      thePost.classList.toggle('mostrar');
      theTextArea.classList.toggle('mostrar');
    });
  };

  //Seleccionas todos los botones de editar para publicaciones de perfil
  let botonesDeEditarPublication = document.querySelectorAll('.fa-edit.ipublication');
  console.log(botonesDeEditarPublication);
  for(let i = 0; i < botonesDeEditarPublication.length; i++) {
    botonesDeEditarPublication[i].addEventListener('click', function() {
      let publicactionId = this.parentElement.getAttribute('data-editpublication');
      console.log(publicactionId);
      let thePublication = document.querySelector('#publication_' + publicactionId);
      console.log(thePublication);
      let theTextAreap = document.querySelector('#tap_' + publicactionId);
      thePublication.classList.toggle('mostrar');
      theTextAreap.classList.toggle('mostrar');
    });
  };


}
