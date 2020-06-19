<?php $__env->startSection('title_postfix', ' - Detalhes da Empresa'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Empresas</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('tenants')); ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('companies.index')); ?>">Empresas</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('companies.show', $company->id)); ?>" class="active">Detalhes</a>
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
            <p><strong>ID: </strong><?php echo e($company->id); ?></p>
            <p><strong>Nome: </strong><?php echo e($company->name); ?></p>
            <p><strong>SubDominio: </strong><?php echo e($company->subdomain); ?></p>
            <p><strong>Host: </strong><?php echo e($company->db_host); ?></p>
            <p><strong>User: </strong><?php echo e($company->db_username); ?></p>
        </div>
        <!-- /.card-body -->
    </div>

    <?php echo Form::model($company, ['route' => ['companies.destroy', $company->id], 'class' => 'form', 'method' => 'delete' ]); ?>

    <?php echo Form::submit('Deletar', ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/companies/show.blade.php ENDPATH**/ ?>