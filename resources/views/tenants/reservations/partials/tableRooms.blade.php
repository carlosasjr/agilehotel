<table class="table table-hover" id="rooms_table">
    <thead>
    <tr>
        <th scope="col">Apartamento</th>
        <th scope="col">Descrição</th>
        <th scope="col">Categoria</th>
        <th width="50px" scope="col">Ação</th>
    </tr>
    </thead>

    <tbody class="j_list">
    <!-- /foreach rooms -->
    @if(isset($rooms))
        @forelse($rooms as $room)
            <tr data-id="{{ $room['id']  }}" id="rooms{{ $room['id'] }}">
                <td>
                    <input type="hidden"
                           name="rooms[{{ $room['id']  }}][room_id]"
                           value="{{ $room['id'] }}">

                    <input class="form-control" readonly type="text"
                           name="rooms[{{ $room['id']  }}][number]"
                           value="{{ $room['number']  }}">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="rooms[{{ $room['id']  }}][description]"
                           value="{{ $room['description'] }}">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="rooms[{{ $room['id'] }}][category]"
                           value="{{ $room['category']['description'] }}">
                </td>


                <td>
                    <a rel="{{$room['id'] }}" class="btn btn-danger" href="javascript:;"
                       onclick="removeRoom(this)">Excluir</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum Apartamento Adicionado</td>
            </tr>
        @endforelse
    @endif
    <!-- /.end foreach rooms -->

    </tbody>
</table>



