<?php if( isset($data) ): ?>
    <?php echo Form::model($data, ['route' => ['type-address.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister' ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'type-address.store', 'class' => 'form', 'id' => 'formRegister']); ?>

<?php endif; ?>

<div class="form-group label-float">
    <?php echo Form::text('description', null, ['class' => 'form-control',  'placeholder' => ' ', 'id' => 'description']); ?>

    <?php echo Form::label('description', 'Descrição', ['class' => 'control-label']);; ?>

</div>


<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>



<?php /**PATH /var/www/projects/agile/resources/views/tenants/typeAddress/partials/form.blade.php ENDPATH**/ ?>