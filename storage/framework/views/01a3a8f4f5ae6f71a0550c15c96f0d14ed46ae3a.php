<?php $__env->startSection('adminlte_css'); ?>
    <?php echo $__env->yieldPushContent('css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('classes_body', 'login-page'); ?>

<?php ( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') ); ?>

<?php if(config('adminlte.use_route_url', false)): ?>
    <?php ( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' ); ?>
<?php else: ?>
    <?php ( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' ); ?>
<?php endif; ?>

<?php $__env->startSection('body'); ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo e($dashboard_url); ?>"><?php echo config('adminlte.logo', '<b>Admin</b>LTE'); ?></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?php echo e(__('adminlte::adminlte.verify_message')); ?></p>
                <?php if(session('resent')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(__('adminlte::adminlte.verify_email_sent')); ?>

                    </div>
                <?php endif; ?>

                <?php echo e(__('adminlte::adminlte.verify_check_your_email')); ?>

                <?php echo e(__('adminlte::adminlte.verify_if_not_recieved')); ?>,

                <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline"><?php echo e(__('adminlte::adminlte.verify_request_another')); ?></button>.
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('adminlte_js'); ?>
    <script src="<?php echo e(asset('vendor/adminlte/dist/js/adminlte.min.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/vendor/jeroennoten/laravel-adminlte/resources/views/verify.blade.php ENDPATH**/ ?>