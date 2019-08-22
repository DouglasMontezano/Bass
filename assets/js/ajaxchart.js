
function chartdataload() {
    var base_url = "http://localhost/Bass/";
    $.ajax({
        type: 'POST',
        url: base_url + "Charts/" + "Get_Rec_Desp",
        dataType: 'json',
        success: function (data) {
           console.log(data);

        }
    });
}
