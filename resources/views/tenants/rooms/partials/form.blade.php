@if( isset($data) )
    {!! Form::model($data, ['route' => ['rooms.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister' ]) !!}
@else
    {!! Form::open(['route' => 'rooms.store', 'class' => 'form', 'id' => 'formRegister']) !!}
@endif

<div class="form-group">
    Selecione a Categoria
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'id' => 'category_id']) !!}
</div>

<div class="form-group">
    Selecione o andar
    {!! Form::select('floor_id', $floors, null, ['class' => 'form-control', 'id' => 'floor_id']) !!}
</div>


<div class="form-group label-float">
    {!! Form::text('number', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'number']) !!}
    {!! Form::label('number', 'Número', ['class' => 'control-label']); !!}
</div>

<div class="form-group label-float">
    {!! Form::text('description', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'description']) !!}
    {!! Form::label('description', 'Descrição', ['class' => 'control-label']); !!}
</div>


{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<br/>



