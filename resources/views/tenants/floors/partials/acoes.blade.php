@can('update_floor')
    <a href="{{route('floors.edit', $id)}}" class="badge bg-yellow">Editar</a>
@endcan

@can('view_floor')
    <a href="{{route('floors.show', $id)}}" class="badge bg-dark">Detalhes</a>
@endcan
