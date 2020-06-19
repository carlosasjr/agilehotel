<div class="card car-danger">
    <div class="card-body">
        <table id="tabela" class="table table-hover  table-responsive-sm" style="width:100%">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Apartamento</th>
                <th scope="col">Descrição</th>
                <th scope="col">Categoria</th>
            </tr>
            </thead>

            <tbody>
            @foreach($data->rooms as $room)
                <tr>
                    <td>{{ $room->number }}</td>
                    <td>{{ $room->description }}</td>
                    <td>{{ $room->category->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


