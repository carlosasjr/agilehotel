<?php if( isset($data) ): ?>
    <?php echo Form::model($data, ['route' => ['cities.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister' ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'cities.store', 'class' => 'form', 'id' => 'formRegister']); ?>

<?php endif; ?>

<div class="form-group">
    Selecione o Estado
    <?php echo Form::select('state_id', $states, null, ['class' => 'form-control', 'id' => 'state_id']); ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('id', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'id']); ?>

    <?php echo Form::label('id', 'IBGE', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('name', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'name']); ?>

    <?php echo Form::label('name', 'Nome', ['class' => 'control-label']);; ?>

</div>


<div class="form-group label-float">
    <?php echo Form::text('siafi', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'siafi']); ?>

    <?php echo Form::label('siafi', 'Siafi', ['class' => 'control-label']);; ?>

</div>


<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>



<?php /**PATH /var/www/projects/agile/resources/views/tenants/cities/partials/form.blade.php ENDPATH**/ ?>