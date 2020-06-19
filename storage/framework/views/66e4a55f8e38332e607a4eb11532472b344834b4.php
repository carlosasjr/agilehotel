<?php if((isset($item['topnav_user']) && $item['topnav_user'])): ?>
  <?php echo $__env->make('adminlte::partials.menu-item-top-nav', $item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/vendor/jeroennoten/laravel-adminlte/resources/views/partials/menu-item-top-nav-user.blade.php ENDPATH**/ ?>