<?php if( isset($data) ): ?>
    <?php echo Form::model($data, ['route' => ['states.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister' ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'states.store', 'class' => 'form', 'id' => 'formRegister']); ?>

<?php endif; ?>

<div class="form-group">
    Selecione o Pais
    <?php echo Form::select('country_id', $countries, null, ['class' => 'form-control', 'id' => 'country_id']); ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('initials', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'initials']); ?>

    <?php echo Form::label('initials', 'Inicial', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('name', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'name']); ?>

    <?php echo Form::label('name', 'Nome', ['class' => 'control-label']);; ?>

</div>


<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>



<?php /**PATH /var/www/projects/agile/resources/views/tenants/states/partials/form.blade.php ENDPATH**/ ?>