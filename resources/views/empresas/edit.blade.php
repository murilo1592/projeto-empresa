@extends('empresas.master')

@section('content')

    <h3 class="my-lg-3"><b><?php echo $empresa->razao_social; ?></b></h3>

    <form class="form-create form-edit" action="{{url('/empresa/edit', ['id' => $empresa->id])}}" method="POST"
          autocomplete="off">

        <?= csrf_field(); ?>
        <?= method_field('PUT'); ?>

        <div class="row">

            <div class="form-group col-md-6">
                <label>Razão Social</label>
                <input type="text" name="razao_social" id="razao_social" value="<?= $empresa->razao_social;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label>E-mail</label>
                <input type="email" name="email" id="email" placeholder="Digite o email"
                       class="form-control require" value="<?= $empresa->email;?>"/>
            </div>

            <div class="form-group col-md-6">
                <label>CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" value="<?= $empresa->cnpj;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Telefone <a href="" id="link-whatsApp" class="link-whats" target="_blank"> &raquo; (
                            Abrir WhatsApp )</a>
                    </b></label>
                <input type="text" name="telefone" id="input-telefone" value="<?= $empresa->telefone;?>"
                       class="form-control require"/>
            </div>

            <div class="form-group col-md-6">
                <label><b>Buscar pelo CEP</b></label>
                <input type="text" id="cep-buscar" placeholder="Digite o CEP"
                       class="form-control"/>
            </div>

            <div class="form-group col-md-6">
                <label>Endreço</label>
                <input type="text" name="endereco" id="endereco" value="<?= $empresa->endereco;?>"
                       class="form-control require"/>
            </div>

        </div>

        <button type="submit" class="btn btn-outline-primary btn-enviar">Enviar</button>

    </form>

    <script src="{{url(mix('site/js/script.js'))}}"></script>

@endsection
