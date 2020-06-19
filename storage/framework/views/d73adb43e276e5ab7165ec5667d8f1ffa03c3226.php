<?php if(is_array($item)): ?>
    <li <?php if(isset($item['id'])): ?> id="<?php echo e($item['id']); ?>" <?php endif; ?> class="<?php if(isset($item['submenu'])): ?>dropdown-submenu <?php endif; ?>">
        <a class="dropdown-item <?php if(isset($item['submenu'])): ?>dropdown-toggle <?php endif; ?>" href="<?php echo e($item['href']); ?>"
           <?php if(isset($item['submenu'])): ?> data-toggle="dropdown" <?php endif; ?>
           <?php if(isset($item['target'])): ?> target="<?php echo e($item['target']); ?>" <?php endif; ?>
        >
            <i class="<?php echo e($item['icon'] ?? 'far fa-fw fa-circle'); ?> <?php echo e(isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''); ?>"></i>
            <?php echo e($item['text']); ?>


            <?php if(isset($item['label'])): ?>
                <span class="badge badge-<?php echo e($item['label_color'] ?? 'primary'); ?>"><?php echo e($item['label']); ?></span>
            <?php endif; ?>
        </a>
        <?php if(isset($item['submenu'])): ?>
            <ul class="dropdown-menu border-0 shadow">
                <?php echo $__env->renderEach('adminlte::partials.menu-item-sub-top-nav', $item['submenu'], 'item'); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/vendor/jeroennoten/laravel-adminlte/resources/views/partials/menu-item-sub-top-nav.blade.php ENDPATH**/ ?>