<?php if( isset($company) ): ?>
    <?php echo Form::model($company, ['route' => ['companies.update', $company->id], 'class' => 'form', 'method' => 'put' ]); ?>

<?php else: ?>
    <?php echo Form::open(['route' => 'companies.store', 'class' => 'form']); ?>

<?php endif; ?>

<div class="form-group">
    <?php echo Form::label('name', 'Nome', ['class' => 'control-label']);; ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']); ?>

</div>


<div class="form-group">
    <?php echo Form::label('email', 'E-mail', ['class' => 'control-label']);; ?>

    <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']); ?>

</div>


<div class="form-group">
    <?php echo Form::label('cellphone', 'Celular', ['class' => 'control-label']);; ?>

    <?php echo Form::text('cellphone', null, ['class' => 'form-control', 'placeholder' => '(DDD) Celular']); ?>

</div>


<div class="form-group">
    <?php echo Form::label('cpf', 'CPF', ['class' => 'control-label']);; ?>

    <?php echo Form::text('cpf', null, ['class' => 'form-control', 'placeholder' => 'CPF']); ?>

</div>


<div class="form-group">
    <?php echo Form::label('subdomain', 'SubDomínio', ['class' => 'control-label']);; ?>

    <div class="input-group mb-3">
        <?php echo Form::text('subdomain', null, ['class' => 'form-control', 'placeholder' => 'SubDomínio']); ?>


        <div class="input-group-append">
            <span class="input-group-text"><?php echo e(env('APP_SUBDOMAIN')); ?></span>
        </div>
    </div>
</div>

<div class="form-group">
    <?php echo Form::label('db_database', 'DataBase', ['class' => 'control-label']);; ?>

    <?php echo Form::text('db_database', null, ['class' => 'form-control', 'placeholder' => 'DataBase']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('db_host', 'Host', ['class' => 'control-label']);; ?>

    <?php echo Form::text('db_host', null, ['class' => 'form-control', 'placeholder' => 'Host']); ?>

</div>


<div class="form-group">
    <?php echo Form::label('db_username', 'User Name', ['class' => 'control-label']);; ?>

    <?php echo Form::text('db_username', null, ['class' => 'form-control', 'placeholder' => 'User Name']); ?>

</div>

<div class="form-group">
    <label for="db_password" class="control-label">Password</label>
    <input name="db_password" class="form-control" type="password"
           value="<?php echo e($company->db_password ?? old('db_password')); ?>" id="db_password">
</div>

<?php if(!isset($company)): ?>
    <div class="form-group">
        <?php echo Form::checkbox('create_database', null, true); ?>

        <?php echo Form::label('create_database', 'Criar bando de dados?');; ?>

    </div>
<?php endif; ?>


<?php echo Form::submit('Salvar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<br/>

<?php /**PATH /var/www/projects/agile/resources/views/tenants/companies/partials/form.blade.php ENDPATH**/ ?>