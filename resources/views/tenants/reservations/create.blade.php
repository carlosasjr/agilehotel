@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
@stop

@section('title_postfix', ' - Cadastrar Nova Reserva')

@section('content_header')
    <div class="container-fluid">
        @include('tenants.includes.breadcrumbs',  ['title' => $title,
                               'breadcrumbs' => [
                               'Reservas' => route('reservations.index'),
                                isset($data->id) ? 'Editar' : 'Cadastrar', ]
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
            @include('tenants.reservations.partials.form')
        </div>
        <!-- /.card-body -->
    </div>


    <!-- /.Rooms -->
    <div class="card card-outline card-blue">
        <div class="card-header">
            <h3 class="card-title">
                Apartamentos
                <small>da Reserva</small>
            </h3>
            <!-- tools box -->
        @include('tenants.includes.toolsBox')
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <button id="btnRoom" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".modal-rooms">Adicionar
            </button>
            <br>
            <br>

            <div id="modalRooms" class="modal fade modal-rooms" tabindex="-1" role="dialog"
                 aria-labelledby="modalLarge" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalLarge">Apartamentos</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                @include('tenants.reservations.partials.formRooms')
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                            <button id="btnSaveUpdateRooms" type="button" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @include('tenants.includes.load')
                @include('tenants.reservations.partials.tableRooms')
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.Rooms -->
@stop

@section('js')
    <script src="{{ url('vendor/jquery/jquery.validate.min.js') }}"></script>
    <script src="{{ url('vendor/jquery/additional-methods.js') }}"></script>
    <script src="{{ url('vendor/jquery/messages_pt_BR.min.js') }}"></script>
    <script src="{{ url('vendor/jquery/jquery.mask.min.js') }}"></script>
    <script type="text/javascript" src={{ asset('assets/js/reservations/validation.js') }}></script>
@stop


