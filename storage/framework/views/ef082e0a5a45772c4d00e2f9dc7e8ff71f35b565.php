<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title_postfix', ' - Cidades'); ?>

<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Cidades',
                                               'breadcrumbs' => [
                                               'Cidades', ]
                                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_city')): ?>
            <p>
                <a href="<?php echo e(route('cities.create')); ?>" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>
                    Adicionar
                </a>
            </p>
        <?php endif; ?>

    <!--TABELA -->
    <?php echo $__env->make('tenants.cities.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--TABELA -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <?php echo $__env->make('tenants.includes.dataTableJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        var urlAjax = '<?php echo e(route('cities.index')); ?>';

        var columns = [
            {data: "id", name: 'id'},
            {data: "name", name: 'name'},
            {data: "state.initials", name: 'state.initials'},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/table-default.js')); ?>></script>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/cities/index.blade.php ENDPATH**/ ?>