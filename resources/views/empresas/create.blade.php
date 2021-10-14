@extends('empresas.master')

@section('content')

    <h2>Formulário de Cadastro :: Empresas</h2>
    <hr>

    <form action="{{'/empresas/nova'}}" method="POST" autocomplete="off">

        <?= csrf_field(); ?>

        <div class="row">

            <div class="form-group col-md-12">
                <label>Razão Social &raquo; <b><i>Obs: Apenas números</i></b></label>
                <input type="text" name="razao_social" id="razao_social" placeholder="Digite a Razão Social"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" placeholder="Digite o CNPJ de sua empresa"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>Telefone <a href="" id="link-whatsApp-empresa" target="_blank">WhatsApp</a> </label>
                <input type="text" name="telefone" id="input-telefone-empresa" placeholder="Digite o telefone"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>CEP</label>
                <input type="text" id="cep-buscar" placeholder="Digite o CEP"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>Endreço</label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite o endereço completo"
                       class="form-control require"/>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

    </form>

    <script src="{{url(mix('site/js/script.js'))}}"></script>

@endsection
