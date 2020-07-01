@extends('adminlte::master')

@section('title_postfix', ' - Confirmação da Reserva')

@section('content_header')
    <div class="container-fluid">
        @include('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Reservas',
                               'breadcrumbs' => [
                               'Reservas' => route('reservations.index'),
                               'Detalhes', ]
                              ])
    </div><!-- /.container-fluid -->
@stop

@section('body')
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
                </div>
            </div>
            <hr>
            @include('tenants.reservations.partials.tableRoomsReservation')

        </div>
        <!-- /.card-body -->
    </div>
@stop



