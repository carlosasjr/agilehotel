<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_state')): ?>
    <a href="<?php echo e(route('states.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_state')): ?>
    <a href="<?php echo e(route('states.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/states/partials/acoes.blade.php ENDPATH**/ ?>