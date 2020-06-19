<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_origin')): ?>
    <a href="<?php echo e(route('origins.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_origin')): ?>
    <a href="<?php echo e(route('origins.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/origins/partials/acoes.blade.php ENDPATH**/ ?>