<?php $__env->startSection('content'); ?>

    <h2 class="my-lg-3">Formulário de Cadastro :: Empresas</h2>

    <form class="form-create form-empresa" method="POST" autocomplete="off">

        <?= csrf_field(); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Razão Social &raquo; <b><i>Obs: Apenas números</i></b></label>
                <input type="text" name="razao_social" id="razao_social" placeholder="Digite a Razão Social"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite o email"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>CNPJ</b></label>
                <input type="text" id="cnpj" name="cnpj" placeholder="Digite o CNPJ de sua empresa"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Telefone <a href="" id="link-whatsApp" class="link-whats" target="_blank"> &raquo; ( Abrir
                            WhatsApp )</a>
                    </b></label>
                <input type="text" name="telefone" id="input-telefone" placeholder="Digite o telefone"
                       class="form-control phone require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Buscar pelo CEP</b></label>
                <input type="text" id="cep-buscar" placeholder="Digite o CEP"
                       class="form-control"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Endreço</b></label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite o endereço completo"
                       class="form-control"/>
            </div>

        </div>

        <button type="submit" class="btn btn-outline-primary btn-enviar">Enviar</button>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('empresas.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>