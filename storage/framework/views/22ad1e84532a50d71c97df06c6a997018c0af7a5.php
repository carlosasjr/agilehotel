<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_user')): ?>
    <a href="<?php echo e(route('users.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_user')): ?>
<a href="<?php echo e(route('users.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_user_profile')): ?>
<a href="<?php echo e(route('users.profiles', $id)); ?>" class="badge bg-blue">Perfis</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/users/partials/acoes.blade.php ENDPATH**/ ?>