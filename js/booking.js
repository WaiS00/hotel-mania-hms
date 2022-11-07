// get data from the selection input
$(function() {
    $ ( '#ddlselect' ).change(function()  {
        var displaycourse= $("#ddlselect option:selected").text();
        document.getElementById("txtresults").innerHTML = displaycourse;
    } ) 
});

// get data from the selection input
$(function() {
    $ ( '#ddlselect1' ).change(function()  {
        var displaycourse= $("#ddlselect1 option:selected").text();
        document.getElementById("txtresults").innerHTML = displaycourse;
    } ) 
});

// get data from the selection input
$(function() {
    $ ( '#ddlselect2' ).change(function()  {
        var displaycourse= $("#ddlselect2 option:selected").text();
        document.getElementById("txtresults").innerHTML = displaycourse;
    } ) 
});

// get data from the selection input
$(function() {
    $ ( '#workPosition' ).change(function()  {
        var displaycourse= $("#workPosition option:selected").text();
        document.getElementById("txtresults").innerHTML = displaycourse;
    } ) 
});

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



