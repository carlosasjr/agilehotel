<?php $__env->startSection('adminlte_css'); ?>
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.core.css')); ?> />
    <link rel="stylesheet" href=<?php echo e(asset('vendor/alertify/css/alertify.default.css')); ?> />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/default.css')); ?>">
    <style type="text/css">
        .table td, .table th {
            padding: 0.30rem;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title_postfix', ' - Cadastrar Novo Usuário'); ?>

<?php $__env->startSection('content_header'); ?>
    <div class="container-fluid">
        <?php echo $__env->make('tenants.includes.breadcrumbs',  ['title' => 'Gestão de Usuários',
                               'breadcrumbs' => [
                               'Usuários' => route('users.index'),
                                isset($data->id) ? 'Editar' : 'Cadastrar', ]
                              ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('tenants.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if( isset($data) ): ?>
        <?php echo Form::model($data, ['route' => ['users.update', $data->id], 'class' => 'form', 'method' => 'put', 'id' => 'formRegister', 'files' => true ]); ?>

    <?php else: ?>
        <?php echo Form::open(['route' => 'users.store', 'class' => 'form', 'id' => 'formRegister', 'files' => true]); ?>

    <?php endif; ?>

    <!-- /.Identificação -->
    <div class="card card-outline card-info">
        <div class="card-header">
            <h3 class="card-title">
                Identificação
                <small>Dados pessoais</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <?php echo $__env->make('tenants.users.partials.identificacaoForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.Identificação -->

    <!-- /.Endereços -->
    <div class="card card-outline card-blue">
        <div class="card-header">
            <h3 class="card-title">
                Endereços
                <small>Adicionar</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <button id="btnEndereco" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".modal-address">Adicionar
            </button>
            <br>
            <br>

            <div id="modalAddress" class="modal fade modal-address" tabindex="-1" role="dialog"
                 aria-labelledby="modalLarge" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalLarge">Endereço</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <?php echo $__env->make('tenants.all.partials.address.addressForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                            <button id="btnSaveUpdateAddress" type="button" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('tenants.all.partials.address.table-address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.Endereços -->


    <!-- /.Contatos -->
    <div class="card card-outline card-blue">
        <div class="card-header">
            <h3 class="card-title">
                Contatos
                <small>Outros Contatos</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <button id="btnContact" type="button" class="btn btn-primary" data-toggle="modal"
                    data-target=".modal-contact">Adicionar
            </button>
            <br>
            <br>

            <div id="modalContact" class="modal fade modal-contact" tabindex="-1" role="dialog"
                 aria-labelledby="modalLarge" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalLarge">Contato</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <?php echo $__env->make('tenants.all.partials.contact.contactForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                            <button id="btnSaveUpdateContact" type="button" class="btn btn-primary">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->make('tenants.all.partials.contact.table-contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.Contatos -->

    <!-- /.Outros Dados -->
    <div class="card card-outline card-gray">
        <div class="card-header">
            <h3 class="card-title">
                Outros Dados
                <small>Informações adicionais</small>
            </h3>
            <!-- tools box -->
        <?php echo $__env->make('tenants.includes.toolsBox', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
            <?php echo $__env->make('tenants.users.partials.outrosDadosForm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.Outros Dados -->


    <?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

    <?php echo Form::close(); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
       var deleteAddressAjax = "<?php echo e(route('delete_address')); ?>";
       var deleteContactAjax = "<?php echo e(route('delete_contact')); ?>";
    </script>

    <script src="<?php echo e(url('vendor/jquery/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/additional-methods.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/messages_pt_BR.min.js')); ?>"></script>
    <script src="<?php echo e(url('vendor/jquery/jquery.mask.min.js')); ?>"></script>
    <script src=<?php echo e(asset('vendor/alertify/js/alertify.min.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/users/validation.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/all/address.js')); ?>></script>
    <script src=<?php echo e(asset('assets/js/all/contact.js')); ?>></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/projects/agile/resources/views/tenants/users/create.blade.php ENDPATH**/ ?>