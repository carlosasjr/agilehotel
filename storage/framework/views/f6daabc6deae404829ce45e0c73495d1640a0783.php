<?php $__env->startSection('title_postfix', ' - Cadastrar Nova Empresa'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Gestão de Empresas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('tenants')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="<?php echo e(route('companies.index')); ?>">Empresas</a>
                    </li>

                    <?php if(isset($company)): ?>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('companies.edit' , $company->id)); ?>"
                                                       class="active">Editar</a></li>
                    <?php else: ?>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('companies.create' )); ?>"
                                                       class="active">Cadastrar</a></li>
                    <?php endif; ?>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Identificação
                <small>Empresa</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <?php echo $__env->make('tenants.companies.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/companies/create.blade.php ENDPATH**/ ?>