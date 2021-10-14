$(document).ready(function () {

    $('#link-whatsApp-empresa').hide();
    $('#link-whatsApp-colaborador').hide();

    $('#input-telefone-colaborador').blur(function () {

        var link_whatsApp = $('#input-telefone-colaborador').val();

        $('#link-whatsApp-colaborador').attr('href', `https://api.whatsapp.com/send?phone=${link_whatsApp}&text=Olá, gostaria de conversar.`).show();
    });

    $('#input-telefone-empresa').blur(function () {

        var link_whatsApp = $('#input-telefone-empresa').val();

        $('#link-whatsApp-empresa').attr('href', `https://api.whatsapp.com/send?phone=${link_whatsApp}&text=Olá, gostaria de conversar sobre nossa empresa.`).show();
    });

    $('#cep-buscar').blur(async function () {

        var cep = $(this).val();

        $('#endereco').val('Buscando...');
        await buscarEndereco(cep)
    })

    $('cnpj').blur(async function () {

        var result = await isCNPJValid((this).val())

        console.log(result)
    })
});

async function buscarEndereco(cep) {

    await $.getJSON("https://viacep.com.br/ws/" + cep + "/json?callback=?", function (dados) {

        if (!("erro" in dados)) {

            $('#endereco').val(`${dados.logradouro}, ${dados.bairro}, ${dados.localidade}, ${dados.uf}`);

        } else {

            $('#endereco').val('');
        }
    }, 'json');
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
