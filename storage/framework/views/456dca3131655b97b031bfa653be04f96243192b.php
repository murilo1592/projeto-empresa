<?php $__env->startSection('content'); ?>

    <h3>Colaborador:: <i><?= $colaborador->nome; ?></i></h3>

    <form action="<?php echo e(url('/colaborador/edit', ['id' => $colaborador->id])); ?>" method="POST" autocomplete="off">

        <?= csrf_field(); ?>
        <?= method_field('PUT'); ?>

        <div class="row">

            <div class="form-group col-md-12">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" value="<?= $colaborador->nome;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-12">
                <label>E-mail</label>
                <input type="email" name="email" id="email" value="<?= $colaborador->email;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-12">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" id="data_nascimento"
                       value="<?= date('d/m/Y', strtotime($colaborador->data_nascimento));?>"
                       class="form-control require"/>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('empresas.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>