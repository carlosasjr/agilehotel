<?php if( isset($data) ): ?>
    <?php echo Form::model($data, ['route' => ['profiles.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister', 'files' => true ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'profiles.store', 'class' => 'form', 'id' => 'formRegister', 'files' => true]); ?>

<?php endif; ?>

<div class="form-group label-float">
    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'name']); ?>

    <?php echo Form::label('name', 'Nome', ['class' => 'control-label']);; ?>

</div>

<div class="form-group label-float">
    <?php echo Form::text('label', null, ['class' => 'form-control', 'placeholder' => ' ', 'id' => 'label']); ?>

    <?php echo Form::label('label', 'Descrição', ['class' => 'control-label']);; ?>

</div>

<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>

<?php /**PATH /var/www/projects/agile/resources/views/tenants/profiles/partials/form.blade.php ENDPATH**/ ?>