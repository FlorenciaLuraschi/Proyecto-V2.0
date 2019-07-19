{{-- tabla de posiciones generales --}}
@extends('post.create')
@section('flopationes')
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
