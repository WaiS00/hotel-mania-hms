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

    }) ;
});