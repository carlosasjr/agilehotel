@extends('adminlte::page')

@section('title_postfix', ' - Detalhes da Reserva')

@section('adminlte_css')
    <link rel="stylesheet" href={{ asset('vendor/alertify/css/alertify.core.css') }} />
    <link rel="stylesheet" href={{ asset('vendor/alertify/css/alertify.default.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/reservation/style.css')}} />
@stop

@section('content_header')
    <div class="container-fluid">
        @include('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Reservas',
                               'breadcrumbs' => [
                               'Reservas' => route('reservations.index'),
                               'Detalhes', ]
                              ])
    </div><!-- /.container-fluid -->
@stop


@section('content')
    @include('tenants.includes.alerts')

    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Identificação
                <small>Reserva</small>
            </h3>
            <!-- tools box -->
        @include('tenants.includes.toolsBox')
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <p><strong>ID: </strong>{{  $data->id }}</p>
            <p><strong>Hospede: </strong>{{  $data->person->name }}</p>
            <hr>

            <div class="datas">
                <div>
                    <p><strong>Data Início: </strong>{{  $data->begin }}</p>
                    <p><strong>Data Fim: </strong>{{  $data->end }}</p>
                    <p><strong>Cancelamento: </strong>{{  $data->canceled_at }}</p>
                </div>
                <div>
                    <p><strong>Check-in: </strong>{{  $data->checkin }}</p>
                    <p><strong>Check-Out: </strong>{{  $data->checkout }}</p>
                </div>
            </div>
            <hr>

            @include('tenants.reservations.partials.tableRoomsReservation')

        </div>
        <!-- /.card-body -->
    </div>


    @if( isset($action) && $action == 'checkin')
        {!! Form::model($data, ['route' => ['reservations.checkin', $data->id], 'class' => 'form', 'method' => 'post', 'id' => 'formCheckin']) !!}
        {!! Form::submit('Check-In', ['class' => 'btn btn-primary j_checkin']) !!}
        {!! Form::close() !!}

    @elseif(isset($action) && $action == 'checkout')
        {!! Form::model($data, ['route' => ['reservations.checkout', $data->id], 'class' => 'form', 'method' => 'post', 'id' => 'formCheckOut']) !!}
        {!! Form::submit('Check-Out', ['class' => 'btn btn-primary j_checkout']) !!}
        {!! Form::close() !!}

    @elseif (isset($action) && $action =='cancel')
        {!! Form::model($data, ['route' => ['reservations.cancel', $data->id], 'class' => 'form', 'method' => 'post', 'id' => 'formCancelar']) !!}
        {!! Form::submit('Cancelar', ['class' => 'btn btn-primary j_cancelar']) !!}
        {!! Form::close() !!}
    @else
        @can('delete_origin')
            {!! Form::model($data, ['route' => ['reservations.destroy', $data->id], 'class' => 'form', 'method' => 'delete', 'id' => 'formDelete']) !!}
            {!! Form::submit('Deletar', ['class' => 'btn btn-danger j_delete']) !!}
            {!! Form::close() !!}
        @endcan
    @endif
@stop

@section('js')
    <script type="text/javascript" src={{ asset('vendor/alertify/js/alertify.min.js') }}></script>
    <script type="text/javascript" src={{ asset('assets/js/all/confirmations.js') }}></script>
@stop

