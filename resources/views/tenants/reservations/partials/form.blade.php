@if( isset($data) )
    {!! Form::model($data, ['route' => ['reservations.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister', 'files' => true ]) !!}
@else
    {!! Form::open(['route' => 'reservations.store', 'class' => 'form', 'id' => 'formRegister', 'files' => true]) !!}
@endif

{!! Form::label('person_id', 'Hospede', ['class' => 'control-label']); !!}
<div class="form-group">
    {!! Form::select('person_id', $people, null, ['placeholder' => 'Selecione o Hospede', 'class' => 'form-control',  'id' => 'person_id']) !!}
</div>


<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            {!! Form::text('begin', null, ['class' => 'form-control',  'id' => 'begin', 'placeholder' => '']) !!}
            {!! Form::label('begin', 'Data Início', ['class' => 'control-label']); !!}
        </div>
    </div>


    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            {!! Form::text('end', null, ['class' => 'form-control',  'id' => 'end', 'placeholder' => '']) !!}
            {!! Form::label('end', 'Data Fim', ['class' => 'control-label']); !!}
        </div>
    </div>
</div>



{!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

<br/>

