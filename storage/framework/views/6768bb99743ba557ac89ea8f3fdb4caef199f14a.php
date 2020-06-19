<table class="table table-hover" id="address_table">
    <thead>
    <tr>
        <th width="12%">Tipo</th>
        <th width="24%">Rua</th>
        <th width="5%">Número</th>
        <th width="16%">Bairro</th>
        <th width="20%">Cidade</th>
        <th width="8%">UF</th>
        <th width="20%" scope="col">Cep</th>
        <th>Ação</th>
    </tr>
    </thead>

    <tbody class="j_list">
    <!-- /foreach addresses -->
    <?php if(isset($addresses)): ?>
        <?php $__empty_1 = true; $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr data-id="<?php echo e($address['id']); ?>" id="addresses<?php echo e($address['id']); ?>">
                <td>
                    <input type="hidden"
                           name="addresses[<?php echo e($address['id']); ?>][id]"
                           value="<?php echo e($address['id']); ?>">

                    <input type="hidden"
                           name="addresses[<?php echo e($address['id']); ?>][complement]"
                           value="<?php echo e($address['complement']); ?>">

                    <input type="hidden"
                           name="addresses[<?php echo e($address['id']); ?>][country_id]"
                           value="<?php echo e($address['country_id']); ?>">


                    <select class="form-control"
                            readonly
                            name="addresses[<?php echo e($address['id']); ?>][type_address_id]">
                        <option
                            value="<?php echo e($address['type_address_id']); ?>"> <?php echo e($address['type_address']['description']); ?></option>
                    </select>

                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="addresses[<?php echo e($address['id']); ?>][street]"
                           value="<?php echo e($address['street']); ?>">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="addresses[<?php echo e($address['id']); ?>][number]"
                           value="<?php echo e($address['number']); ?>">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="addresses[<?php echo e($address['id']); ?>][district]"
                           value="<?php echo e($address['district']); ?>">
                </td>



                <td>
                    <select class="form-control"
                            readonly
                            name="addresses[<?php echo e($address['id']); ?>][city_id]">
                        <option
                            value="<?php echo e($address['city_id']); ?>"> <?php echo e($address['city']['name']); ?></option>
                    </select>
                </td>

                <td>
                    <select class="form-control"
                            readonly
                            name="addresses[<?php echo e($address['id']); ?>][state_id]">
                        <option
                            value="<?php echo e($address['state_id']); ?>"> <?php echo e($address['state']['initials']); ?></option>
                    </select>
                </td>


                <td>
                    <input class="form-control" readonly type="text"
                           name="addresses[<?php echo e($address['id']); ?>][cep]"
                           value="<?php echo e($address['cep']); ?>">
                </td>



                <td>
                    <a rel="<?php echo e($address['id']); ?>" class="badge bg-yellow" href="javascript:;"
                       onclick="editAddress(this)">Editar</a>

                    <a rel="<?php echo e($address['id']); ?>" class="badge bg-danger" href="javascript:;"
                       onclick="removeAddress(this)">Excluir</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
               <td colspan="8">Nenhum Endereço Adicionado</td>
            </tr>
        <?php endif; ?>
    <?php endif; ?>
    <!-- /.end foreach addresses -->

    </tbody>
</table>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/all/partials/address/table-address.blade.php ENDPATH**/ ?>