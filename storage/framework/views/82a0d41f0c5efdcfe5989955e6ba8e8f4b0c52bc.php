<?php if( $errors->any() ): ?>
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-exclamation"></i> Atenção!</h4>

        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible hide-msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>


<?php if(session('error')): ?>
    <div class="alert alert-danger alert-dismissible hide-msg">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Erro!</h4>
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>



<?php if(session('alert')): ?>
    <div class="alert alert-info alert-dismissible hide-msg ">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-check"></i> Alerta!</h4>
        <?php echo e(session('alert')); ?>

    </div>
<?php endif; ?>

<?php /**PATH /var/www/projects/agile/resources/views/tenants/includes/alerts.blade.php ENDPATH**/ ?>