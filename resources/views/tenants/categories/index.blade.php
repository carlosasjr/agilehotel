@extends('adminlte::page')

@include('tenants.includes.dataTableCss')

@section('title_postfix', ' - Categorias')

@section('content_header')

    @include('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Categorias',
                                               'breadcrumbs' => [
                                               'Categorias', ]
                                              ])
@stop

@section('content')

    @include('tenants.includes.alerts')

    <div class="content">

            <p>
                <a href="{{route('categories.create')}}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>
                    Adicionar
                </a>
            </p>


    <!--TABELA -->
    @include('tenants.categories.partials.table')
    <!--TABELA -->
    </div>
@stop

@section('js')
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>

    @include('tenants.includes.dataTableJs')

    <script>
        var urlAjax = '{{ route('categories.index') }}';

        var columns = [
            {data: "id"},
            {data: "description"},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src={{ asset('assets/js/all/table-default.js') }}></script>
@stop




