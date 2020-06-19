<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title_postfix', ' - Empresas'); ?>

<?php $__env->startSection('content_header'); ?>

    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Empresas',
                                               'breadcrumbs' => [
                                               'Empresas', ]
                                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">
        <p>
            <a href="<?php echo e(route('companies.create')); ?>" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus"></span>
                Adicionar
            </a>
        </p>

        <!--TABELA -->
    <?php echo $__env->make('tenants.companies.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--TABELA -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <?php echo $__env->make('tenants.includes.dataTableJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        var urlAjax = '/tenants/companies';

        var columns =   [
            {data: "id"},
            {data: "name"},
            {data: "subdomain"},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/table-default.js')); ?>></script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/companies/index.blade.php ENDPATH**/ ?>