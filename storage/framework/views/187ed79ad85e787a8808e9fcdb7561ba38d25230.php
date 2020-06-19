<?php $__env->startSection('title_postfix', ' - Cadastrar Novo Plano'); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Planos',
                               'breadcrumbs' => [
                               'Planos' => route('plans.index'),
                                isset($plan->id) ? 'Editar' : 'Cadastrar', ]
                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- /.container-fluid -->
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
            <?php echo $__env->make('tenants.plans.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/plans/script.js')); ?>></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/plans/create.blade.php ENDPATH**/ ?>