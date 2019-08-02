
window.onload = function () {
  let Form = document.forms[0]
  console.log(Form)
  if (document.querySelector('.login')) {
    let formularioLogin = document.querySelector('.login');
    formularioLogin.elements.email.focus();
    console.log(formularioLogin.elements.email.value);
  }else if (document.querySelector('.register')) {
    let formularioRegister = document.querySelector('.register');
    formularioRegister.elements.name.focus();
    console.log(formularioRegister.elements.name.value);
  } else if (document.querySelector('.post-form')) {
    let formularioPost = document.querySelector('.post-form');
    formularioPost.elements.description.focus();
    console.log(formularioPost.elements.description.value);
  }

}


//   $(document).ready(function(){
//      //aquí meteremos las instrucciones que modifiquen el DOM
// $("#button-edit").click(function(event){
//   $("#post_id").css("display","block");
// });
// $("#editar-ocultar").click(function(event){
//   $("#post_id").css("display","none");
// });
// }


// if ($("#button-edit").attr("button")){
//    $("#post_id").css("display", "block");
// }
// if($("#editar-ocultar").attr("button")){
//    $("#post_id").css("display", "none");
// }
   // let working = false;
   // $('.form-login').on('submit', function(evento) {
   //   evento.preventDefault();
   //   if (working) return;
   //   working = true;
   //   let $this = $(this);
   //     $state = $this.find('button > .state');
   //   $this.addClass('loading');
   //   $state.html('Authenticating');
   //   setTimeout(function() {
   //     $this.addClass('ok');
   //     $state.html('¡Has iniciado sesión!');
   //     setTimeout(function() {
   //       $state.html('Iniciar Sesión');
   //       $this.removeClass('ok loading');
   //       working = false;
   //     }, 4000);
   //   }, 3000);
   // });
