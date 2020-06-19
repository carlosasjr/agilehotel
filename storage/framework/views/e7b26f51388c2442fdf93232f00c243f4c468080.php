<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_postfix', ' - Permissões / Perfil'); ?>

<?php $__env->startSection('content_header'); ?>

    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => $title,
                                               'breadcrumbs' => [
                                               'Usuários' => route('users.index'),
                                                $user->name]
                                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">
        <p>
            <a href="<?php echo e(route('users.profiles.list', $user->id)); ?>" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus"></span>
                Adicionar
            </a>
        </p>

        <!--TABELA -->
    <?php echo $__env->make('tenants.users.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--TABELA -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('vendor/jquery/jquery.min.js')); ?>"></script>

    <?php echo $__env->make('tenants.includes.dataTableJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        var urlAjax = '/users/' + <?php echo e($user->id); ?> +'/profile';

        var columns = [
            {data: "id"},
            {data: "name"},
            {data: "label"},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>

    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/table-default.js')); ?>></script>

    <script type="text/javascript" src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/confirmations.js')); ?>></script>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/users/profiles.blade.php ENDPATH**/ ?>