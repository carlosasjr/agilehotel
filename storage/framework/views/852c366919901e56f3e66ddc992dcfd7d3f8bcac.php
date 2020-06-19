<?php if(!empty($breadcrumbs)): ?>
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"><?php echo e($title); ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('tenants')); ?>">Home</a></li>

                    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="breadcrumb-item">
                            <?php if(is_int($label) && ! is_int($link)): ?>
                                <a class="breadcrumbs-link">
                                    <span><?php echo e($link); ?></span>
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e($link); ?>" class="breadcrumbs-link">
                                    <span class="breadcrumbs-link-text"><?php echo e($label); ?></span>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
<?php endif; ?>


<?php /**PATH /var/www/projects/agile/resources/views/tenants/includes/breadcrumbs.blade.php ENDPATH**/ ?>