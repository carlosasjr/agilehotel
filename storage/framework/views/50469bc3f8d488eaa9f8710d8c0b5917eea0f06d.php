<?php if( isset($plan) ): ?>
    <?php echo Form::model($plan, ['route' => ['plans.update', $plan->id], 'class' => 'form', 'method' => 'put' ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'plans.store', 'class' => 'form']); ?>

<?php endif; ?>

<div class="form-group">
    <?php echo Form::label('description', 'Descrição', ['class' => 'control-label']);; ?>

    <?php echo Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição']); ?>

</div>


<div class="form-group">
    <?php echo Form::label('price', 'Preço', ['class' => 'control-label']);; ?>

    <?php echo Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Preço']); ?>

</div>


<div class="row">
    <div class="col-md-4 form-group">
        <?php echo Form::label('frequency', 'Frequência', ['class' => 'control-label']);; ?>

        <?php echo Form::select('frequency', [
            'day' => 'Por Dia',
            'week' => 'Por Semana',
            'month' => 'Por Mês',
            'year' => 'Por Ano'
        ], null, ['class' => 'form-control']); ?>

    </div>


    <div class="col-md-4 form-group">
        <?php echo Form::label('frequency_interval', 'Intervalo', ['class' => 'control-label']);; ?>

        <?php echo Form::text('frequency_interval', null, ['class' => 'form-control', 'placeholder' => 'Intervalo']); ?>

    </div>

    <div class="col-md-4 form-group">
        <?php echo Form::label('cycles', 'Ciclos', ['class' => 'control-label']);; ?>

        <?php echo Form::text('cycles', null, ['class' => 'form-control', 'placeholder' => 'Ciclos']); ?>

    </div>
</div>

<?php if(isset($plan)): ?>
    <div class="row col-md-12">
        <?php echo Form::label('key_paypal', 'PayPal Key', ['class' => 'control-label']);; ?>


        <div class="input-group">
            <?php echo Form::text('key_paypal', null, ['class' => 'form-control', 'placeholder' => 'PayPal Key', 'id' => 'key_paypal',
            'aria-label' =>"Key PayPal", 'aria-describedby' => "basic-addon2"]); ?>


            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="btnKeyPayPal" data-id="<?php echo e($plan->id); ?>">Gerar Key-PayPal</button>
            </div>
            <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <input type="hidden" name="state_paypal" id="state_paypal" value="<?php echo e($plan->state_paypal); ?>">
<?php endif; ?>

<br>


<div class="card card-danger">
    <div class="card-header">
        <h3 class="card-title">Adicionar detalhes</h3>
    </div>
    <div class="card-body">
        <div class="row form-group">
            <div class="d-flex d-inline-block col-md-6">
                <input id="detail" type="text" class="form-control" placeholder="Detalhe">
                <button type="button" id="add_details" class="btn btn-primary">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>

        <div class="row">
            <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <table class="table table-striped" id="details_table">
                <thead>
                <tr>
                    <th>Detalhe</th>
                    <th>Ação</th>
                </tr>
                </thead>

                <tbody>
                <?php if(isset($plan)): ?>
                    <?php $__empty_1 = true; $__currentLoopData = $plan->plan_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr data-plan="<?php echo e($plan->id); ?>" data-id="<?php echo e($details->id); ?>">
                            <td>
                                <input type="hidden" name="details[<?php echo e($details->id); ?>][id]" value="<?php echo e($details->id); ?>">
                                <input class="form-control" type="text" name="details[<?php echo e($details->id); ?>][description]"
                                       value="<?php echo e($details->description); ?>">
                            </td>
                            <td><a class="btn btn-danger" href="javascript:;" onclick="removeDetail(this)">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td>Nenhum detalhe adicionado</td>
                        </tr>
                    <?php endif; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>


<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>



<?php /**PATH /var/www/projects/agile/resources/views/tenants/plans/partials/form.blade.php ENDPATH**/ ?>