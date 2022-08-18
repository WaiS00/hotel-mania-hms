$(function() {
    $ ( '#ddlselect' ).change(function()  {
        var displaycourse= $("#ddlselect option:selected").text();
        document.getElementById("txtresults").innerHTML = displaycourse;
    } ) 
});

$(function() {
    $ ( '#datepicker' ) . datepicker ( {
        format: 'yyyy-mm-dd'
    } ) ;
});

$(function() {
    $ ( '#datepicker2' ) . datepicker ( {
        format: 'yyyy-mm-dd',
    } ).on("changeDate", function (e){
        var start= $("#datepicker").datepicker("getDate");
        var end= $("#datepicker2").datepicker("getDate");
        days = (end- start) / (1000 * 60 * 60 * 24);
        document.getElementById("ans").innerHTML = days;
    }) ;
});

