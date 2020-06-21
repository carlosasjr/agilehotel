

{!! Form::label('person_id', 'Hospede', ['class' => 'control-label']); !!}
<div class="form-group">
    {!! Form::select('person_id', $people, null, ['placeholder' => 'Selecione o Hospede', 'class' => 'form-control',  'id' => 'person_id']) !!}
</div>


<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group">
            {!! Form::label('begin', 'Data Início', ['class' => 'control-label']); !!}
            <input type="datetime-local" class="form-control" name="begin" id="begin"  value="{{ old('begin', \App\Helpers\Helper::formatDateTime(strtotime(@$data->begin), 'Y-m-d\TH:i:s')) }}" >
        </div>

    </div>


    <div class="col-12 col-sm-6">
        <div class="form-group">
            {!! Form::label('end', 'Data Fim', ['class' => 'control-label']); !!}
            <input type="datetime-local" class="form-control" name="end" id="end"  value="{{ old('end', \App\Helpers\Helper::formatDateTime(strtotime(@$data->end), 'Y-m-d\TH:i:s')) }}" >
        </div>
    </div>
</div>
<br/>

