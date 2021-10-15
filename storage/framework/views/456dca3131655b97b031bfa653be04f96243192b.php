<?php $__env->startSection('content'); ?>

    <h3>Colaborador(a) :: <?= $colaborador->nome; ?></h3>

    <form class="form-create" action="<?php echo e(url('/colaborador/edit', ['id' => $colaborador->id])); ?>" method="POST"
          autocomplete="off">

        <?= csrf_field(); ?>
        <?= method_field('PUT'); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" value="<?= $colaborador->nome;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input type="email" name="email" id="email" value="<?= $colaborador->email;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>Telefone <a href="" id="link-whatsApp-colaborador" class="link-whats" target="_blank">&raquo; ( Abrir WhatsApp )</a> </label>
                <input type="text" name="telefone" id="input-telefone-colaborador" placeholder="Digite o telefone"
                       class="form-control require" value="<?= $colaborador->telefone;?>">
            </div>

            <div class="form-group col-md-6">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" id="data_nascimento"
                       value="<?= date('d/m/Y', strtotime($colaborador->data_nascimento));?>"
                       class="form-control require"/>
            </div>

        </div>

            <button type="submit" class="btn btn-outline-primary btn-enviar">Enviar</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('empresas.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>