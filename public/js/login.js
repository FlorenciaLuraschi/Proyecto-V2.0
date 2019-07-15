let working = false;
$('.form-login').on('submit', function(evento) {
  evento.preventDefault();
  if (working) return;
  working = true;
  let $this = $(this);
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Authenticating');
  setTimeout(function() {
    $this.addClass('ok');
    $state.html('¡Has iniciado sesión!');
    setTimeout(function() {
      $state.html('Iniciar Sesión');
      $this.removeClass('ok loading');
      working = false;
    }, 4000);
  }, 3000);
});
