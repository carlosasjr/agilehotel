<?php if( isset($data) ): ?>
    <?php echo Form::model($data, ['route' => ['permissions.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister', 'files' => true ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'permissions.store', 'class' => 'form', 'id' => 'formRegister', 'files' => true]); ?>

<?php endif; ?>

<div class="form-group">
    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome:', 'id' => 'name']); ?>

</div>

<div class="form-group">
    <?php echo Form::text('label', null, ['class' => 'form-control', 'placeholder' => 'Descrição:', 'id' => 'label']); ?>

</div>


<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>

<?php /**PATH /var/www/projects/agile/resources/views/tenants/permissions/partials/form.blade.php ENDPATH**/ ?>