// datepicker format on their input
$(function() {
    $ ( '#datepicker' ) . datepicker ( {
        format: 'yyyy-mm-dd'
    } ) ;
});


$(function() {
// datepicker format on their input
$ ( '#datepicker2' ) . datepicker ( {
        format: 'yyyy-mm-dd',
    } ).on("changeDate", function (e){
        // https://stackoverflow.com/questions/4919873/how-to-get-the-date-from-jquery-ui-datepicker
        // get the variable from the date picker input 
        var start= $("#datepicker").datepicker("getDate");
        var end= $("#datepicker2").datepicker("getDate");

        // calculate days differences based on the end and start date
        days = (end- start) / (1000 * 60 * 60 * 24);
        document.getElementById("ans").innerHTML = days;

        if(days > 0){
            // if days more than 29 days (a month)
            if (days >29) {
                alert('Days selected more than 29 days, please select duration that are less than 29 days.');
                document.getElementById("Button").disabled = true;
            }else{
                // allow user submit
                document.getElementById("Button").disabled = false;
    
            }
        }else{
            // if days less than 1 day, disable user submit
            alert('Days selected less than 1 day, please select duration that are more than 1 day.');
            document.getElementById("Button").disabled = true;
        }
    }) ;
});

$(document).ready(function(){
// enable only one check for the room (cant select multiple rooms)
    $('.checkoption').click(function() {
       $('.checkoption').not(this).prop('checked', false);
    });

 });