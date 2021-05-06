@extends('adminlte::page')

@section('title', 'Agille - Hotel')

@section('content_header')
    <h1>Mapa Diário de Reservas</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ isset($reservation_total) ? $reservation_total : 0  }}</h3>

                    <p>Reservas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ isset($reservation_ocupation) ? $reservation_ocupation : 0  }}<sup style="font-size: 20px">%</sup></h3>

                    <p>Ocupação</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ isset($people_total) ? $people_total : 0  }}</h3>

                    <p>Hospedes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ isset($reservation_canceled) ? $reservation_canceled : 0  }}</h3>

                    <p>Cancelamentos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>


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
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body d-flex row" style="display: block;">

                        @foreach($floor->rooms as $room)
                            <div class="col-md-3">
                                <div
                                    class="card {{ $room->color }}">
                                    <div class="card-header">
                                        <h3 class="card-title">Apto. <strong>{{ $room->number }}</strong></h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
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



