

$(document).ready(function () {
    console.log("ready!");
    $("#signup").submit(function (event) {
        var names = $('#name').val();
        var names_arr = names.split(' ');
        if (names_arr.length < 2) {
            alert('Names err!');
            event.preventDefault();
        } // end if
    });


}); // end of document ready




