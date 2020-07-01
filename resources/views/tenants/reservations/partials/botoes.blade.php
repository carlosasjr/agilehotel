@can('update_reservation')
    @if(empty($reservation->canceled_at) && empty($reservation->checkout))
        <a href="{{route('reservations.edit', $reservation->id)}}" class="badge bg-yellow">Editar</a>
    @endif
@endcan

@can('checkin_reservation')
    @if(empty($reservation->checkin) && empty($reservation->checkout) && empty($reservation->canceled_at))
        <a href="{{route('reservations.showAction', [$reservation->id, 'checkin'])}}" class="badge bg-cyan">Check-In</a>
    @endif
@endcan

@can('checkout_reservation')
    @if(!empty($reservation->checkin) && empty($reservation->checkout) && empty($reservation->canceled_at))
        <a href="{{route('reservations.showAction', [$reservation->id, 'checkout'])}}" class="badge bg-blue">Check-Out</a>
    @endif
@endcan


@can('cancel_reservation')
    @if(empty($reservation->canceled_at) && empty($reservation->checkout))
        <a href="{{route('reservations.showAction', [$reservation->id, 'cancel'])}}" class="badge bg-danger">Cancelar</a>
    @endif
@endcan



