<?php $__env->startSection('title_postfix', ' - Detalhes do Usuário'); ?>

<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Usuários',
                               'breadcrumbs' => [
                               'Usuários' => route('users.index'),
                               'Detalhes', ]
                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Identificação
                <small>Dados pessoais</small>
            </h3>
            <!-- tools box -->
                <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <p><strong>ID: </strong><?php echo e($data->id); ?></p>
            <p><strong>Nome: </strong><?php echo e($data->name); ?></p>
            <p><strong>E-mail: </strong><?php echo e($data->email); ?></p>
            <p><strong>CPF: </strong><?php echo e($data->cpf); ?></p>
            <p><strong>OAB: </strong><?php echo e($data->oab); ?></p>
            <p><strong>Celular: </strong><?php echo e($data->cellphone); ?></p>
            <p><strong>Telefone: </strong><?php echo e($data->telephone); ?></p>
        </div>
        <!-- /.card-body -->
    </div>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete_user')): ?>
        <?php echo Form::model($data, ['route' => ['users.destroy', $data->id], 'class' => 'form', 'method' => 'delete', 'id' => 'formDelete' ]); ?>

        <?php echo Form::submit('Deletar', ['class' => 'btn btn-danger j_delete']); ?>

        <?php echo Form::close(); ?>

    <?php endif; ?>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script type="text/javascript" src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/all/confirmations.js')); ?>></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/users/show.blade.php ENDPATH**/ ?>