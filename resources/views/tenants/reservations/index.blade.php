@extends('adminlte::page')

@include('tenants.includes.dataTableCss')

@section('css')
    <link rel="stylesheet" href={{ asset('vendor/alertify/css/alertify.core.css') }} />
    <link rel="stylesheet" href={{ asset('vendor/alertify/css/alertify.default.css') }} />
@stop

@section('title_postfix', ' - Reservas')

@section('content_header')

    @include('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Reservas',
                                               'breadcrumbs' => [
                                               'Reservas', ]
                                              ])
@stop

@section('content')

    @include('tenants.includes.alerts')

    <div class="content">

        @can('create_origin')
            <p>
                <a href="{{route('reservations.create')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>
                    Adicionar
                </a>
            </p>
         @endcan

    <!--TABELA -->
    @include('tenants.reservations.partials.table')
    <!--TABELA -->
    </div>
@stop

@section('js')
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>

    @include('tenants.includes.dataTableJs')

    <script type="text/javascript" src={{ asset('vendor/alertify/js/alertify.min.js') }}></script>
    <script type="text/javascript" src={{ asset('assets/js/reservations/reservation.js') }}></script>

    <script>
        var urlAjax = '{{ route('reservations.index') }}';

        var columns =  [
            {data: "id", name : 'id'},
            {data: "begin", name : 'begin'},
            {data: "end", name : 'end'},

            {data: "person.name", name : 'person.name' },
            {data: "state", name : 'state' },

            {data: 'action', name: 'action', orderable: false}
        ]
    </script>
    <script type="text/javascript" src={{ asset('assets/js/all/table-default.js') }}></script>
@stop




