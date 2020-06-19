
<div class="form-group label-float">
    <?php echo Form::text('name', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'name']); ?>

    <?php echo Form::label('name', 'Nome', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('fantasy', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'fantasy']); ?>

    <?php echo Form::label('fantasy', 'Fantasia', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::email('email', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'email']); ?>

    <?php echo Form::label('email', 'E-mail', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::url('site', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'site']); ?>

    <?php echo Form::label('site', 'Site', ['class' => 'control-label']);; ?>

</div>

<?php if(!isset($data) ): ?>
    <div class="form-group label-float">
        <?php echo Form::password('password',  ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'password']); ?>

        <?php echo Form::label('password', 'Senha', ['class' => 'control-label']);; ?>

    </div>
    <div class="form-group label-float">
        <?php echo Form::password('password_confirmation',  ['class' => 'form-control', 'placeholder' => ' ',  'id' => 'password_confirmation']); ?>

        <?php echo Form::label('password_confirmation', 'Confirmar Senha', ['class' => 'control-label']);; ?>

    </div>
<?php endif; ?>


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

    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::date('date_admission', null, ['class' => 'form-control', 'id' => 'date_admission', 'placeholder' => ' ']); ?>

            <?php echo Form::label('date_admission', 'Data de Admissão', ['class' => 'control-label']);; ?>

        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::date('date_resignation', null, ['class' => 'form-control', 'id' => 'date_resignation', 'placeholder' => ' ']); ?>

            <?php echo Form::label('date_resignation', 'Data do desligamento', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>


<div class="form-group label-float">
    <?php echo Form::text('office', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'office']); ?>

    <?php echo Form::label('office', 'Cargo', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('salary', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'salary']); ?>

    <?php echo Form::label('salary', 'Salário', ['class' => 'control-label']);; ?>

</div>

<label for="journey">Jornada de Trabalho</label>
<div class="row" id="journey">
    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::time('journey_start', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'journey_start']); ?>

            <?php echo Form::label('journey_start', 'Início', ['class' => 'control-label']);; ?>

        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::time('journey_pause', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'journey_pause']); ?>

            <?php echo Form::label('journey_pause', 'Intervalo', ['class' => 'control-label']);; ?>

        </div>
    </div>

    <div class="col-12 col-sm-4">
        <div class="form-group label-float">
            <?php echo Form::time('journey_end', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'journey_end']); ?>

            <?php echo Form::label('journey_end', 'Término', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>

<div class="form-group label-float">
    <?php echo Form::file('image',  ['class' => 'form-control', 'placeholder' => ' ']); ?>

    <?php echo Form::label('image', 'Foto', ['class' => 'control-label']);; ?>

</div>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/users/partials/identificacaoForm.blade.php ENDPATH**/ ?>