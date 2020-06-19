<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <select id="type_address_id"  class="js-example-responsive" style="width:100%">
                <option value="">Escolha um tipo de endereço</option>
                <?php $__currentLoopData = $type_addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($type->id); ?>"><?php echo e($type->description); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>

<div class="row">
<div class="col-12 col-sm-4">
    <div class="form-group">
        <div class="input-group">
            <input id="cep" class="form-control" type="text" class="form-control" placeholder="Cep">
            <span class="input-group-btn">
                      <button id="search_cep" type="button" class="btn btn-info btn-flat"><i class="fa fa-address-card"
                                                                                             aria-hidden="true"></i></button>
                    </span>
        </div>
    </div>
    <div class="jloadCep">
        <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
</div>

<div class="row">
    <div class="col-12 col-sm-9">
        <div class="form-group label-float">
            <input id="street" name="street" class="form-control" type="text" class="form-control" placeholder=" ">
            <label for="street">Rua</label>
        </div>
    </div>

    <div class="col-12 col-sm-2">
        <div class="form-group label-float">
            <input id="number" class="form-control" type="text" class="form-control" placeholder=" ">
            <label for="number">Número</label>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            <input id="district" class="form-control" type="text" class="form-control" placeholder=" ">
            <label for="district">Bairro</label>
        </div>
    </div>

    <div class="col-12 col-sm-6">
        <div class="form-group label-float">
            <input id="complement" class="form-control" type="text" class="form-control" placeholder=" ">
            <label for="complement">Complemento</label>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 col-sm-4">
        <div class="form-group">
            <select id="country_id" class="js-example-responsive" style="width:100%">
                <option value="">Selecione um país</option>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $county): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($county->id); ?>"><?php echo e($county->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>

    <div class="col-12 col-sm-2">
        <div class="form-group">
            <select id="state_id" style="width:100%"></select>
        </div>
        <div class="jloadState">
            <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>


    <div class="col-12 col-sm-6">
        <div class="form-group">
            <select id="city_id"  style="width:100%"></select>
        </div>
        <div class="jloadCity">
            <?php echo $__env->make('tenants.includes.load', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>


<?php /**PATH /var/www/projects/agile/resources/views/tenants/all/partials/address/addressForm.blade.php ENDPATH**/ ?>