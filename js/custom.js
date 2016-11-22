
$(document).ready(function () {
    console.log("ready!");
    $("#signup").submit(function (event) {

        event.preventDefault();
        $('#paypal').submit();
    });

}); // end of document ready


