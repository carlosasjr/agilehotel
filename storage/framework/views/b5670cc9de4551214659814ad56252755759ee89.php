<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update_reservation')): ?>
    <a href="<?php echo e(route('reservations.edit', $id)); ?>" class="badge bg-yellow">Editar</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view_reservation')): ?>
    <a href="<?php echo e(route('reservations.show', $id)); ?>" class="badge bg-dark">Detalhes</a>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkin_reservation')): ?>
        <?php if(empty($checkin) && empty($checkout) && empty($canceled_at)): ?>
        <a href="<?php echo e(route('reservations.showAction', [$id, 'checkin'])); ?>" class="badge bg-cyan">Check-In</a>
    <?php endif; ?>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('checkout_reservation')): ?>
    <?php if(!empty($checkin) && empty($checkout) && empty($canceled_at)): ?>
        <a href="<?php echo e(route('reservations.showAction', [$id, 'checkout'])); ?>" class="badge bg-blue">Check-Out</a>
    <?php endif; ?>
<?php endif; ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cancel_reservation')): ?>
    <?php if(empty($canceled_at) && empty($checkout)): ?>
        <a href="<?php echo e(route('reservations.showAction', [$id, 'cancel'])); ?>" class="badge bg-danger">Cancelar</a>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/Projects/Agile/resources/views/tenants/reservations/partials/acoes.blade.php ENDPATH**/ ?>