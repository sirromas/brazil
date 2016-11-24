

$(document).ready(function () {
    console.log("ready!");
    $("#signup").submit(function (event) {
        var names = $('#name').val().trim();
        var names_arr = names.split(' ');
        console.log(JSON.stringify(names_arr));
        console.log('Array length: ' + names_arr.length < 2);
        if (names_arr.length < 2) {
            $('#form_err').html('Please provide firstname and lastname separated by space');
            event.preventDefault();
        } // end if
        else {
            ('#form_err').html('');
        }
    });


}); // end of document ready




