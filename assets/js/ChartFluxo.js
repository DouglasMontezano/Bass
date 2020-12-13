//Função de busca de Receitas, Despesas e Lucro Bruto

function datagrafic(id_prod_serv) {
    var base_url = "http://localhost/bass/";
    $.ajax({
        type: 'POST',
        url: base_url + "Charts/"+"Get_Rec_Desp",
        //data:{"id_prod_serv": id_prod_serv},
    })
        .done(function() {
            //var obj = jQuery.parseJSON(data);
            var obj;
            //$('#valorunit').val(obj[0].valor_venda_prod_serv);
            console.log(obj[0].valor_lancamento);

        });
}

google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Receitas', 'Despesas', 'Lucro Bruto'],
        ['Janeiro', 225, 220, 522],
        ['Fevereiro', 1350, 1120, 599],
        ['Março', 1570, 1167, 587],
        ['Abril', 1390, 1110, 615],
        ['Maio', 1360, 258, 629],
        ['Junho', 1360, 322, 629],
        ['Julho', 1360, 154, 629],
        ['Agosto', 1360, 691, 629],
        ['Setembro', 1360, 691, 629],
        ['Outubro', 1360, 691, 629],
        ['Novembro', 1360, 691, 629],
        ['Dezembro', 1360, 691, 629],
    ]);

    var options = {
        title: 'Gráficos de Fluxo de caixa',
        vAxis: {title: 'R$ Reais'},
        hAxis: {title: 'período'},
        seriesType: 'bars',
        series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
