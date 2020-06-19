<div class="row">
    <div class="col-12 col-sm-3">
        <div class="form-group">
            <?php echo Form::select('marital_status', ['Solteiro' => 'Solteiro', 'Casado' => 'Casado', 'Separado' => 'Separado', 'Divorciado' => 'Divorciado', 'Viúvo' => 'Viúvo'] ,  null, ['class' => 'form-control', 'id' => 'marital_status']); ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group label-float">
            <?php echo Form::text('partner', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'partner']); ?>

            <?php echo Form::label('partner', 'Conjuge', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group label-float">
            <?php echo Form::text('father', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'father']); ?>

            <?php echo Form::label('father', 'Pai', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group label-float">
            <?php echo Form::text('mother', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'mother']); ?>

            <?php echo Form::label('mother', 'Mãe', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            <?php echo Form::text('naturalness', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'naturalness']); ?>

            <?php echo Form::label('naturalness', 'Natural', ['class' => 'control-label']);; ?>

        </div>
    </div>

    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            <?php echo Form::text('nationality', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'nationality']); ?>

            <?php echo Form::label('nationality', 'Nacionalidade', ['class' => 'control-label']);; ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php echo Form::textarea('observation', null, ['class' => 'form-control', 'placeholder' => 'Observação', 'id' => 'observation']); ?>

        </div>
    </div>
</div>



<?php /**PATH /var/www/projects/agile/resources/views/tenants/users/partials/outrosDadosForm.blade.php ENDPATH**/ ?>