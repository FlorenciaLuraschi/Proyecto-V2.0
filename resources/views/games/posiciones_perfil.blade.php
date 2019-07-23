{{-- tabla de posiciones generales --}}
@extends('perfil')
@section('tabla_posiciones_perfil')
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
@endsection
