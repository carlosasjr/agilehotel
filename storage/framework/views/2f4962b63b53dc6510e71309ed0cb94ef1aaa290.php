<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title_postfix', '- Usuários'); ?>

<?php $__env->startSection('content_header'); ?>

    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => $title,
                                               'breadcrumbs' => [
                                               'Usuários', ]
                                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_user')): ?>
            <p>
                <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>
                    Adicionar
                </a>
            </p>
         <?php endif; ?>

    <!--TABELA -->
    <?php echo $__env->make('tenants.users.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--TABELA -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('vendor/jquery/jquery.min.js')); ?>"></script>

    <?php echo $__env->make('tenants.includes.dataTableJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        var urlAjax = '<?php echo e(route('users.index')); ?>';

        var columns = [
            {data: "id"},
            {data: "name"},
            {data: "email"},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/table-default.js')); ?>></script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/users/index.blade.php ENDPATH**/ ?>