<?php $__env->startSection('title_postfix', ' - Detalhes do Tipo de Endereço'); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Tipos de Endereços',
                       'breadcrumbs' => [
                       'Tipos de Endereços' => route('type-address.index'),
                       'Detalhes', ]
                      ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Identificação
                <small>Plano</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <p><strong>ID: </strong><?php echo e($data->id); ?></p>
            <p><strong>Descrição: </strong><?php echo e($data->description); ?></p>
        </div>
        <!-- /.card-body -->
    </div>

    <?php echo Form::model($data, ['route' => ['type-address.destroy', $data->id], 'class' => 'form', 'method' => 'delete', 'id' => 'formDelete']); ?>

    <?php echo Form::submit('Deletar', ['class' => 'btn btn-danger j_delete', 'rel' => $data->id ]); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/confirmations.js')); ?>></script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/typeAddress/show.blade.php ENDPATH**/ ?>