$(document).ready(function () {

    $('#link-whatsApp').hide();
    $('#input-telefone').mask('(00) 0000-00000');
    $('#cnpj').mask('00.000.000/0000-00');
    $('#cep-buscar').mask('00000-000');
    $('#data_nascimento').mask("00/00/0000", {placeholder: "__/__/____"});

    var telefone = $('#input-telefone').val()

    if (telefone !== '') {

        carregarLinkWhatsApp(telefone)

    } else {

        $('#link-whatsApp').hide();
    }

    $('#input-telefone').blur(function () {

        var telefone = $('#input-telefone').val()

        if (telefone === '') {

            $('#link-whatsApp').hide();

        } else {

            carregarLinkWhatsApp(telefone)
        }
    });

    $('#cep-buscar').change(async function () {

        var cep = $(this).val();

        $('#endereco').val('Buscando...').attr('disabled', true);

        await buscarEndereco(cep)
    })

    /* ENVIO DO FORMULÁRIO EMPRESA */

    $(".form-empresa").submit(function (e) {

        e.preventDefault()

        var campo = null;

        $(".require").each(function () {

            if ($.trim($(this).val()) === '') {

                $(this).parent('div').addClass('erro-validacao');

                $(this).addClass('erro-validacao');

                campo = $(this).attr('placeholder')
            }
        });

        if ($('.erro-validacao').length > 0 && campo !== null) {

            alert(`${campo}`);

            return;
        }

        const base_url = window.location.protocol + "//" + window.location.host

        $.ajax({
            url: base_url + '/empresas/nova',
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            dataType: "Json",
            processData: false,
            success: function (data) {

                if (data.error == false) {

                    window.location.href = base_url + "/empresas"

                } else {
                    alert('Falha ao salvar dados da empresa');
                }
            }
        });
    });
});

async function buscarEndereco(cep) {

    await $.getJSON("https://viacep.com.br/ws/" + cep + "/json?callback=?", function (dados) {

        if (!("erro" in dados)) {

            $('#endereco').val(`${dados.logradouro}, ${dados.bairro}, ${dados.localidade} - ${dados.uf}`).attr('disabled', false);

            return;
        }

    }, 'json').catch(function () {

        $('#endereco').val('').attr('disabled', false);
    })
}

function isCNPJValid(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');
    if (cnpj == '') return false;
    if (cnpj.length != 14)
        return false;
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0, tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;
}

function carregarLinkWhatsApp(telefone) {

    $('#link-whatsApp').attr('href', `https://api.whatsapp.com/send?phone=${telefone}&text=Olá, gostaria de conversar sobre nossa empresa.`).show();
}
