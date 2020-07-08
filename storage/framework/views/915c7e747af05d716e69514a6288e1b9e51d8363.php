<?php $__env->startSection('title', 'Agille - Hotel'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Mapa Diário de Reservas</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo e(isset($reservation_total) ? $reservation_total : 0); ?></h3>

                    <p>Reservas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo e(isset($reservation_ocupation) ? $reservation_ocupation : 0); ?><sup style="font-size: 20px">%</sup></h3>

                    <p>Ocupação</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?php echo e(isset($people_total) ? $people_total : 0); ?></h3>

                    <p>Hospedes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo e(isset($reservation_canceled) ? $reservation_canceled : 0); ?></h3>

                    <p>Cancelamentos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>


    <?php $__currentLoopData = $floors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $floor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title"><strong><?php echo e($floor->number); ?></strong>º Andar</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                    class="fas fa-expand"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-plus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i></button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body d-flex" style="display: block;">

                        <?php $__currentLoopData = $floor->rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3">
                                <div
                                    class="card  <?php echo e((count($room->reservations) > 0)  ? 'card-danger'  : 'card-success'); ?> ">
                                    <div class="card-header">
                                        <h3 class="card-title">Apto. <strong><?php echo e($room->number); ?></strong></h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                    class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <?php $__empty_1 = true; $__currentLoopData = $room->reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                           <p>Hospede: <?php echo e($reservation->person->name); ?></p>
                                           <p>Data Início: <?php echo e($reservation->begin); ?></p>
                                           <p>Data Fim: <?php echo e($reservation->end); ?></p>
                                            <hr>
                                            <?php echo $__env->make('tenants.reservations.partials.botoes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <p>Disponível</p>
                                            <a href="<?php echo e(route('reservations.room', $room->id)); ?>" class="badge bg-primary">Reservar</a>
                                        <?php endif; ?>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/home.blade.php ENDPATH**/ ?>