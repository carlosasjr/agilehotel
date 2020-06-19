<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_person')): ?>
    <a href="<?php echo e(route('people.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_person')): ?>
<a href="<?php echo e(route('people.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>

<?php /**PATH /var/www/projects/agile/resources/views/tenants/people/partials/acoes.blade.php ENDPATH**/ ?>