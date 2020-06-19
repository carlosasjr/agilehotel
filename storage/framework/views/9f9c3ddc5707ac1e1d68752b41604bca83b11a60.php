<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title_postfix', ' - Reservas'); ?>

<?php $__env->startSection('content_header'); ?>

    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Reservas',
                                               'breadcrumbs' => [
                                               'Reservas', ]
                                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content">

        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create_origin')): ?>
            <p>
                <a href="<?php echo e(route('reservations.create')); ?>" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>
                    Adicionar
                </a>
            </p>
         <?php endif; ?>

    <!--TABELA -->
    <?php echo $__env->make('tenants.reservations.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--TABELA -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('vendor/jquery/jquery.min.js')); ?>"></script>

    <?php echo $__env->make('tenants.includes.dataTableJs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        var urlAjax = '<?php echo e(route('reservations.index')); ?>';

        var columns =  [
            {data: "id", name : 'id'},
            {data: "begin", name : 'begin'},
            {data: "end", name : 'end'},

            {data: "person.name", name : 'person.name' },
            {data: "state", name : 'state' },

            {data: 'action', name: 'action', orderable: false}
        ]
    </script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/table-default.js')); ?>></script>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Projects/Agile/resources/views/tenants/reservations/index.blade.php ENDPATH**/ ?>