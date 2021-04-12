@if( isset($data) )
    {!! Form::model($data, ['route' => ['floors.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister', 'files' => true ]) !!}
@else
    {!! Form::open(['route' => 'floors.store', 'class' => 'form', 'id' => 'formRegister', 'files' => true]) !!}
@endif

<div class="form-group label-float">
    {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'number']) !!}
    {!! Form::label('number', 'Andar', ['class' => 'control-label']); !!}
</div>


{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<br/>

