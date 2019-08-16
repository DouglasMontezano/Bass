
google.charts.load('current', {'packages': ['corechart']});
google.charts.setOnLoadCallback(drawVisualization);

function drawVisualization() {
//criar uma função ajax para buscar dados no banco e carregar o charts.

    var data = google.visualization.arrayToDataTable([
        ['Month', 'Receitas', 'Despesas', 'Lucro Bruto'],
        ['Janeiro', 45, 34, 522],
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
