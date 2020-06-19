@can('update_reservation')
    <a href="{{route('reservations.edit', $id)}}" class="badge bg-yellow">Editar</a>
@endcan

@can('view_reservation')
    <a href="{{route('reservations.show', $id)}}" class="badge bg-dark">Detalhes</a>
@endcan

@can('checkin_reservation')
        @if(empty($checkin) && empty($checkout) && empty($canceled_at))
        <a href="{{route('reservations.showAction', [$id, 'checkin'])}}" class="badge bg-cyan">Check-In</a>
    @endif
@endcan

@can('checkout_reservation')
    @if(!empty($checkin) && empty($checkout) && empty($canceled_at))
        <a href="{{route('reservations.showAction', [$id, 'checkout'])}}" class="badge bg-blue">Check-Out</a>
    @endif
@endcan

@can('cancel_reservation')
    @if(empty($canceled_at) && empty($checkout))
        <a href="{{route('reservations.showAction', [$id, 'cancel'])}}" class="badge bg-danger">Cancelar</a>
    @endif
@endcan
