<form action="/posts" method="POST">
  @csrf
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group">
        <textarea class="form-control estilotextarea" name="description" id="description" rows="3" cols="60" placeholder="Agrega un comentario..."></textarea>
    </div>
    <button type = "submit" class = "btn btn-primary bottoncomentario">Enviar</button>

</form>
