<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_profile')): ?>
    <a href="<?php echo e(route('profiles.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_profile')): ?>
    <a href="<?php echo e(route('profiles.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_profile_users')): ?>
    <a href="<?php echo e(route('profiles.users', $id)); ?>" class="badge bg-blue">Usuários</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_profile_permissions')): ?>
    <a href="<?php echo e(route('profiles.permissions', $id)); ?>" class="badge bg-black">Permissões</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/profiles/partials/acoes.blade.php ENDPATH**/ ?>