<table class="table table-hover" id="contact_table">
    <thead>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>E-mail</th>
        <th width="50px" scope="col">Ação</th>
    </tr>
    </thead>

    <tbody class="j_list">
    <!-- /foreach contacts -->

    <?php if(old('contacts')): ?>
        <?php
            $contacts = old('contacts');
        ?>
    <?php endif; ?>

    <?php if(isset($contacts)): ?>
        <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr data-id="<?php echo e($contact['id']); ?>" id="contacts<?php echo e($contact['id']); ?>">
                <td>
                    <input type="hidden"
                           name="contacts[<?php echo e($contact['id']); ?>][id]"
                           value="<?php echo e($contact['id']); ?>">

                    <input class="form-control" readonly type="text"
                           name="contacts[<?php echo e($contact['id']); ?>][name]"
                           value="<?php echo e($contact['name']); ?>">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="contacts[<?php echo e($contact['id']); ?>][telephone]"
                           value="<?php echo e($contact['telephone']); ?>">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="contacts[<?php echo e($contact['id']); ?>][cellphone]"
                           value="<?php echo e($contact['cellphone']); ?>">
                </td>

                <td>
                    <input class="form-control" readonly type="text"
                           name="contacts[<?php echo e($contact['id']); ?>][email]"
                           value="<?php echo e($contact['email']); ?>">
                </td>


                <td>
                    <a rel="<?php echo e($contact['id']); ?>" class="badge bg-yellow" href="javascript:;"
                       onclick="editDetail(this)">Editar</a>

                    <a rel="<?php echo e($contact['id']); ?>" class="badge bg-danger" href="javascript:;"
                       onclick="removeDetail(this)">Excluir</a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="5">Nenhum Contato Adicionado</td>
            </tr>
        <?php endif; ?>
    <?php endif; ?>


    <!-- /.end foreach addresses -->

    </tbody>
</table>
<?php /**PATH /var/www/projects/agile/resources/views/tenants/all/partials/contact/table-contact.blade.php ENDPATH**/ ?>