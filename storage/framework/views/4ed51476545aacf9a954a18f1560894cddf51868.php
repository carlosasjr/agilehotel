<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_permission')): ?>
    <a href="<?php echo e(route('permissions.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_permission')): ?>
    <a href="<?php echo e(route('permissions.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_permission_profile')): ?>
    <a href="<?php echo e(route('permissions.profiles', $id)); ?>" class="badge bg-blue">Perfis</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/permissions/partials/acoes.blade.php ENDPATH**/ ?>