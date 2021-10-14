<?php $__env->startSection('content'); ?>

    <a class="btn btn-primary ml-auto" href="<?php echo e(url('/empresas/nova')); ?>">Nova Empresa</a>
    <hr>

    <p><b>Última Atualização: &raquo;</b> <?= date('d/m/Y H:m'); ?></p>

    <?php

    echo "<table class='table table-striped table-hover'>";

    echo "<thead class='bg-primary text-white'>
                <td><b>Razão Social</b></td>
                <td><b>CNPJ</b></td>
                <td><b>Telefone</b></td>
                <td><b>E-mail</b></td>
                <td><b>Endereço</b></td>
                <td><b>Gerenciar</b></td>
            </thead>";

    if (count($empresas) == 0) {

        echo "<tr><td colspan='6' class='text-center'>Nenhuma Empresa Cadastrada</td></tr>";
    }

    foreach ($empresas as $empresa) {

        $linkEdit = url("/empresa/show/{$empresa->id}");
        $linkCreateColab = url("/colaborador/novo/{$empresa->id}");

        echo "<tr>
                        <td>{$empresa->razao_social}</td>
                        <td>{$empresa->cnpj}</td>
                        <td>{$empresa->telefone}</td>
                        <td>{$empresa->email}</td>
                        <td>{$empresa->endereco}</td>
                        <td>
                            <a class='btn btn-sm btn-primary' href={$linkEdit}>Editar/Abrir Empresa</a>
                            <a class='btn btn-sm btn-success' href={$linkCreateColab}>Cadastrar Colaborador</a>
                        </td>
                    </tr>";
    }

    echo "</table>";

    ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('empresas.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>