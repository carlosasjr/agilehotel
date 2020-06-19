<?php $__env->startSection('title_postfix', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Home</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p><?php echo e(session('company')['name'] ?? ''); ?> Você está logado!</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/home/index.blade.php ENDPATH**/ ?>