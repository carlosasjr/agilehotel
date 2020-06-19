<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_city')): ?>
    <a href="<?php echo e(route('cities.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_city')): ?>
    <a href="<?php echo e(route('cities.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/cities/partials/acoes.blade.php ENDPATH**/ ?>