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

        if(days > 0){
            if (days >29) {
                alert('Days selected more than 29 days, please select duration that are less than 29 days.');
                document.getElementById("Button").disabled = true;
            }else{
                document.getElementById("Button").disabled = false;
    
            }
        }else{
            alert('Days selected less than 1 day, please select duration that are more than 1 day.');
            document.getElementById("Button").disabled = true;
        }
    }) ;
});




