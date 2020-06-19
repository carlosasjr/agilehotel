<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/default.css')); ?>">
    <style type="text/css">
        .table td, .table th {
            padding: 0.30rem;
        }
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title_postfix', ' - Cadastrar Cidade'); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Cidades',
                               'breadcrumbs' => [
                               'Cidades' => route('cities.index'),
                                isset($data->id) ? 'Editar' : 'Cadastrar', ]
                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- /.container-fluid -->
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
            <?php echo $__env->make('tenants.cities.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('vendor/jquery/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/additional-methods.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/messages_pt_BR.min.js')); ?>"></script>

    <script type="text/javascript" src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/cities/validation.js')); ?>></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/cities/create.blade.php ENDPATH**/ ?>