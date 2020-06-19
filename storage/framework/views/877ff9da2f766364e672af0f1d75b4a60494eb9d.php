
<div class="form-group label-float">
    <?php echo Form::text('name', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'name']); ?>

    <?php echo Form::label('name', 'Nome', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('fantasy', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'fantasy']); ?>

    <?php echo Form::label('fantasy', 'Fantasia', ['class' => 'control-label']);; ?>

</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php echo Form::label('origin_id', 'Origem', ['class' => 'control-label']);; ?>

            <?php echo Form::select('origin_id', $origins ,  null, ['class' => 'form-control', 'id' => 'origin_id']); ?>

        </div>
    </div>
</div>

<div class="form-group label-float">
    <?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'email']); ?>

    <?php echo Form::label('email', 'E-mail', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::url('site', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'site']); ?>

    <?php echo Form::label('site', 'Site', ['class' => 'control-label']);; ?>

</div>

<div class="form-group">
    <?php echo Form::label('type', 'Tipo', ['class' => 'control-label']);; ?>

    <?php echo Form::select('type', ['F' => 'Física', 'J' => 'Jurídica'] ,  null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'type']); ?>

</div>

<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::text('cpf', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'cpf']); ?>

            <?php echo Form::label('cpf', 'CPF', ['class' => 'control-label']);; ?>

        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::text('cnpj', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'cnpj']); ?>

            <?php echo Form::label('cnpj', 'CNPJ', ['class' => 'control-label']);; ?>

        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::text('rg', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'rg']); ?>

            <?php echo Form::label('rg', 'RG', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            <?php echo Form::text('cellphone', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'cellphone']); ?>

            <?php echo Form::label('cellphone', 'Celular', ['class' => 'control-label']);; ?>           </div>
    </div>

    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            <?php echo Form::text('telephone', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'telephone']); ?>

            <?php echo Form::label('telephone', 'Telefone', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::date('date_birth', null, ['class' => 'form-control',  'id' => 'date_birth', 'placeholder' => '']); ?>

            <?php echo Form::label('date_birth', 'Data de Aniversário', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>


<div class="form-group label-float">
    <?php echo Form::text('office', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'office']); ?>

    <?php echo Form::label('office', 'Cargo', ['class' => 'control-label']);; ?>

</div>


<div class="form-group label-float">
    <?php echo Form::file('image',  ['class' => 'form-control', 'placeholder' => ' ']); ?>

    <?php echo Form::label('image', 'Foto', ['class' => 'control-label']);; ?>

</div>

<div class="form-group">
    <label>
        <?php echo Form::checkbox('status',null); ?>

        Inativo ?
    </label>
</div>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/people/partials/identificacaoForm.blade.php ENDPATH**/ ?>