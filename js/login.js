$(document).ready(function () {
    $('form').submit(function () {

        // Get the Login Name value and trim it
        var name = $.trim($('#USERNAME').val());
        var pass = $.trim($('#PASSWORD').val());

        // Check if empty of not
        if (name === '' || pass === '') {
            $('.info-login').text("*Bro kayanya ada yang belum ke isi deh");
            return false;
        }else {
            $('.info-login').text("");
        }
    });
});