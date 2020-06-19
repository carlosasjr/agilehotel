<?php $__env->startSection('title_postfix', ' - Cidades'); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Cidades',
                       'breadcrumbs' => [
                       'Cidades' => route('cities.index'),
                       'Detalhes', ]
                      ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Identificação
                <small>Cidades</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <p><strong>IBGE: </strong><?php echo e($data->id); ?></p>
            <p><strong>Estado: </strong><?php echo e($data->state->name); ?></p>
            <p><strong>Nome: </strong><?php echo e($data->name); ?></p>
        </div>
        <!-- /.card-body -->
    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_city')): ?>
        <?php echo Form::model($data, ['route' => ['cities.destroy', $data->id], 'class' => 'form', 'method' => 'delete', 'id' => 'formDelete']); ?>

        <?php echo Form::submit('Deletar', ['class' => 'btn btn-danger j_delete', 'rel' => $data->id ]); ?>

        <?php echo Form::close(); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/confirmations.js')); ?>></script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/cities/show.blade.php ENDPATH**/ ?>