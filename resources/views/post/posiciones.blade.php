{{-- tabla de posiciones generales --}}
    <table id="flopationes">
        <thead>
            <tr id="columna_flopationes">
                <th  class="th_flopationes">FloPaTiones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
            <tr class="tr_flopationes">

                <td class="td_flopationes">
                  <div class="avatar-position">
                    <img src="{{ Storage::url($game->player->avatar) }}" alt="">
                  </div>
                  {{ $game->player->name }}
                  <br>
                    {{ $game->score }}

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
