<?php $__env->startSection('content'); ?>

    <h2>Formulário de Cadastro :: Colaborador</h2>
    <hr>

    <form id='form-colaborador' action="<?php echo e(url('/colaborador/novo', ['id' => $empresa_id])); ?>" method="POST" autocomplete="off">

        <?= csrf_field(); ?>

        <div class="row">

            <div class="form-group col-md-12">
                <label>Nome</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-12">
                <label>E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite o e-mail"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-12">
                <label>Telefone <a href="" id="link-whatsApp-colaborador" target="_blank">WhatsApp</a> </label>
                <input type="text" name="telefone" id="input-telefone-colaborador" placeholder="Digite o telefone"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-12">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" id="data_nascimento" placeholder="Digite a Data de Nascimento"
                       class="form-control require"/>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('empresas.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>