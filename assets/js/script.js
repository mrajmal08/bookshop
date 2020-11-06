(function ($) {

    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() != $('#confirm_password').val()) {
            $('#message').html('Not Matching').css('color', 'red');
            $("#submit").attr("disabled", "disabled");
        } else {
            $('#message').html('Matching').css('color', 'green');
            $('#submit').prop('disabled', false);
        }
    });

})(jQuery);