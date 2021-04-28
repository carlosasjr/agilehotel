@extends('adminlte::page')

@include('tenants.includes.dataTableCss')

@section('title_postfix', ' - Quartos')

@section('content_header')
    @include('tenants.includes.breadcrumbs',  ['title' => 'Quartos',
                                               'breadcrumbs' => [
                                               'Quartos', ]
                                              ])
@stop

@section('content')

    @include('tenants.includes.alerts')

    <div class="content">
        <p>
            <a href="{{route('rooms.create')}}" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus"></span>
                Adicionar
            </a>
        </p>

        <!--TABELA -->
            @include('tenants.rooms.partials.table')
        <!--TABELA -->
    </div>
@stop


@section('js')
    @include('tenants.includes.dataTableJs')

    <script>
        var urlAjax = '{{ route('rooms.index') }}';

        var columns =  [
            {data: "id", name : 'rooms.id'},
            {data: "category.description", name : 'category.description' },
            {data: "floor.number", name : 'floor.number'},
            {data: "number", name : 'number'},
            {data: "description", name : 'description'},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src={{ asset('assets/js/all/table-default.js') }}></script>
@stop






