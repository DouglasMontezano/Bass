
//Função de busca do valor de cada prod/serv para cadastro de itens da OS
function busca_valor(id_prod_serv) {
    var base_url = "http://localhost/bass/";
    $.ajax({
        type: 'POST',
        url: base_url + "Os/"+"RetornaValorUnitario",
        data:{"id_prod_serv": id_prod_serv},
    })
        .done(function(data) {
            var obj = jQuery.parseJSON(data);
            $('#valorunit').val(obj[0].valor_venda_prod_serv);
        });
}
//soma automática dos campos de itens da OS
$(document).ready(function () {
    $(".soma").blur(function () {
        var totalunit = 0;
        var quant = $('#qtd').val();
        var valorunit = $('#valorunit').val();
        var desc = $('#desc').val();
        var totalunit = valorunit * quant - desc;
        $('#valortot').val(totalunit);
    });
});