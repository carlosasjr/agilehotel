@extends('adminlte::page')

@include('tenants.includes.dataTableCss')

@section('title_postfix', ' - Andares')

@section('content_header')

    @include('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Andares',
                                               'breadcrumbs' => [
                                               'Andares', ]
                                              ])
@stop

@section('content')

    @include('tenants.includes.alerts')

    <div class="content">

        @can('create_floor')
            <p>
                <a href="{{route('floors.create')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>
                    Adicionar
                </a>
            </p>
         @endcan

    <!--TABELA -->
    @include('tenants.floors.partials.table')
    <!--TABELA -->
    </div>
@stop

@section('js')
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>

    @include('tenants.includes.dataTableJs')

    <script>
        var urlAjax = '{{ route('floors.index') }}';

        var columns = [
            {data: "id"},
            {data: "number"},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src={{ asset('assets/js/all/table-default.js') }}></script>
@stop




