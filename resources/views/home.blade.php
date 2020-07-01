@extends('adminlte::page')

@section('title', 'Agille - Hotel')

@section('content_header')
    <h1>Mapa Diário de Reservas</h1>
@stop

@section('content')
    @foreach($floors as $floor)
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"><strong>{{ $floor->number}}</strong>º Andar</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                    class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-plus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body d-flex" style="display: block;">

                        @foreach($floor->rooms as $room)
                            <div class="col-md-3">
                                <div
                                    class="card  {{ (count($room->reservations) > 0)  ? 'card-danger'  : 'card-success' }} ">
                                    <div class="card-header">
                                        <h3 class="card-title">Apto. <strong>{{ $room->number }}</strong></h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-minus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        @forelse($room->reservations as $reservation)
                                           <p>Hospede: {{ $reservation->person->name }}</p>
                                           <p>Data Início: {{ $reservation->begin }}</p>
                                           <p>Data Fim: {{ $reservation->end }}</p>
                                            <hr>
                                            @include('tenants.reservations.partials.botoes')

                                        @empty
                                            <p>Disponível</p>
                                            <a href="{{route('reservations.room', $room->id)}}" class="badge bg-primary">Reservar</a>
                                        @endforelse

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        @endforeach

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    @endforeach

@stop



