<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/default.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_postfix', ' - Cadastrar Nova Permissão'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => $title,
                                                   'breadcrumbs' => [
                                                'Permissões' => route('permissions.index'),
                                isset($data->id) ? 'Editar' : 'Cadastrar', ],
                                                    $permission->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Perfis
                <small>Disponíveis</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <?php echo Form::open(['route' => ['permissions.profile.add', $permission->id], 'class' => 'form form-search form-ds']); ?>


            <?php $__currentLoopData = $profiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="form-group">
                    <label>
                        <?php echo Form::checkbox('profiles[]', $profile->id); ?>

                        <?php echo e($profile->name); ?>

                    </label>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <div class="form-group">
                <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

            </div>
            <?php echo Form::close(); ?>

        </div>
        <!-- /.card-body -->
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(url('vendor/jquery/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/additional-methods.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/messages_pt_BR.min.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/jquery.mask.min.js')); ?>"></script>
    <script type="text/javascript" src=<?php echo e(asset('assets/js/permissions/validation.js')); ?>></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/permissions/profiles-add.blade.php ENDPATH**/ ?>