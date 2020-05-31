
function chartdataload() {
    var base_url = "http://localhost/Bass/";
    $.ajax({
        type: 'POST',
        url: base_url + "Charts/" + "Get_Rec_Desp",
        dataType: 'json',
       // data:{"valor_lancamento": valor_lancamento},         
    })
    .done(function(data) {
        console.log(data);
    });
}
