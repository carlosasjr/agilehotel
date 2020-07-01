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
    @if(isset($room))
        @include('tenants.reservations.partials.room')
    @endif


    @if(isset($rooms))
        @forelse($rooms as $room)
            @include('tenants.reservations.partials.room')
        @empty
            <tr>
                <td colspan="5">Nenhum Apartamento Adicionado</td>
            </tr>
        @endforelse
    @endif
    <!-- /.end foreach rooms -->

    </tbody>
</table>



