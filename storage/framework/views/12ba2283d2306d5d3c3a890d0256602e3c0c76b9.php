<?php echo $__env->make('tenants.includes.dataTableCss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title_postfix', ' - 404 - Page not found'); ?>

<?php $__env->startSection('content_header'); ?>
    <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => '404 - Error Page',
                       'breadcrumbs' => [
                       'Home' => route('home'),
                       '404 - Error Page', ]
                      ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="error-page">
            <h2 class="headline text-warning"> 404</h2>

            <div class="error-content">
                <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

                <p>
                    We could not find the page you were looking for.
                 </p>


            </div>
            <!-- /.error-content -->
        </div>

    </div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Projects/Agile/resources/views/erros/404-tenant.blade.php ENDPATH**/ ?>