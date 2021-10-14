@extends('empresas.master')
@section('content')

    <h1>Lista Colaboradores</h1>

    <hr>
    <p><b>Última Atualização: &raquo;</b> <?= date('d/m/Y H:m'); ?></p>

    <?php

    echo "<table class='table table-striped table-hover'>";

    echo "<thead class='bg-primary text-white'>
                <td><b>Nome</b></td>
                <td><b>E-mail</b></td>
                <td><b>Data de Nascimento</b></td>
                <td><b>Empresa</b></td>
                <td><b>Gerenciar</b></td>
            </thead>";

    if (count($colaboradores) == 0) {

        echo "<tr><td colspan='6' class='text-center'>Nenhum Colaborador Cadastrado</td></tr>";
    }

    foreach ($colaboradores as $colaborador) {

        $linkEdit = url("/colaborador/show/{$colaborador->id}");

        echo "<tr>
                        <td>{$colaborador->nome}</td>
                        <td>{$colaborador->email}</td>
                        <td>" . date('d/m/Y', strtotime($colaborador->data_nascimento)) . "</td>
                        <td>{$colaborador->empresa}</td>
                        <td>
                            <a class='btn btn-sm btn-primary' href={$linkEdit}>Editar/Abrir Colaborador</a>
                        </td>
                    </tr>";
    }

    echo "</table>";

    ?>
@endsection
