<?php $__env->startSection('content'); ?>

    <h3>Empresa &raquo; <b><i>

                <?php echo $empresa->razao_social; ?>

            </i></b>
    </h3>
    <hr>

    <form action="<?php echo e(url('/empresa/edit', ['id' => $empresa->id])); ?>" method="POST" autocomplete="off">

        <?= csrf_field(); ?>
        <?= method_field('PUT'); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Razão Social</label>
                <input type="text" name="razao_social" id="razao_social" value="<?= $empresa->razao_social;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" value="<?= $empresa->cnpj;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>Telefone</label>
                <input type="text" name="telefone" id="telefone" value="<?= $empresa->telefone;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>Endreço</label>
                <input type="text" name="endereco" id="endereco" value="<?= $empresa->endereco;?>"
                       class="form-control require"/>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

    <script src="<?php echo e(url(mix('site/js/script.js'))); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('empresas.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>