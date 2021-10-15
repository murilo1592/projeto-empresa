@extends('empresas.master')

@section('content')

    <h2>Formulário de Cadastro :: Colaborador</h2>
    <hr>

    <form class="form-create form-colaborador" id='form-colaborador'
          action="{{url('/colaborador/novo', ['id' => $empresa_id])}}"
          method="POST" autocomplete="off">

        <?= csrf_field(); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label><b>Nome</b></label>
                <input type="text" name="nome" id="nome" placeholder="Digite o nome"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>E-mail</b></label>
                <input type="email" name="email" id="email" placeholder="Digite o e-mail"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Telefone <a href="" id="link-whatsApp" class="link-whats" target="_blank">&raquo; ( Abrir
                            WhatsApp )</a></b></label>
                <input type="text" name="telefone" id="input-telefone" placeholder="Digite o telefone"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Data de Nascimento</b></label>
                <input type="text" name="data_nascimento" id="data_nascimento" placeholder="Digite a Data de Nascimento"
                       class="form-control require"/>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-primary btn-enviar">Enviar</button>

    </form>

@endsection
