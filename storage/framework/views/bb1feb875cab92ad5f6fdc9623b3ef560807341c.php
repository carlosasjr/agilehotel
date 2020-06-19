<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_country')): ?>
    <a href="<?php echo e(route('countries.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_country')): ?>
    <a href="<?php echo e(route('countries.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/countries/partials/acoes.blade.php ENDPATH**/ ?>