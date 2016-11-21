
$(document).ready(function () {
    console.log("ready!");


    $("#signup").submit(function (event) {
       //alert("Handler for .submit() called.");
       event.preventDefault();
        $('#paypal').submit();
    });


}); // end of document ready


