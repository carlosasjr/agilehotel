<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title_postfix', ' - Planos'); ?>

<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Tipos de Endereço',
                                               'breadcrumbs' => [
                                               'Tipos de Endereço', ]
                                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">
        <p>
            <a href="<?php echo e(route('type-address.create')); ?>" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus"></span>
                Adicionar
            </a>
        </p>

        <!--TABELA -->
            <?php echo $__env->make('tenants.typeAddress.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--TABELA -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <?php echo $__env->make('tenants.includes.dataTableJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        var urlAjax = '<?php echo e(route('type-address.index')); ?>';

        var columns =  [
            {data: "id"},
            {data: "description"},
            {
                data: 'action',
                orderable: false
            }
        ]
    </script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/table-default.js')); ?>></script>
<?php $__env->stopSection(); ?>







<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/typeAddress/index.blade.php ENDPATH**/ ?>