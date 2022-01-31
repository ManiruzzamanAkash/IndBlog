jQuery(function ($) {

    // -------------------------------------------------------------
    //   Email Subscription
    // -------------------------------------------------------------
    $('.send-email-button').on('click', function (e) {
        e.preventDefault();

        // find email input by name subscribe_email
        const email = $('input[name="subscribe_email"]').val();

        // Validate empty email field
        if (email == '') {
            $('.subscribe-message').addClass('alert-danger');
            $('.subscribe-message').html( indblog_data.i18n.subscribe_email_required );
            return false;
        }

        // Add processing mode.
        $('.subscribe-input').addClass('subscribe-processing');

        // Disable input.
        $('.subscribe-input').prop('disabled', true);

        // Add a loading spinner.
        $('.send-email-button').html('<i class="fa fa-spinner fa-spin"></i>');

        // ajax request to send email.
        $.ajax({
            type: 'POST',
            url: indblog_data.ajaxurl,
            data: {
                email: email,
                action: 'indblog_subscribe_email',
                nonce: indblog_data.nonce
            },
            success: function (response) {
                if (response.success) {
                    $('.subscribe-message').addClass('alert-success');
                    $('.subscribe-message').removeClass('alert-danger');
                } else {
                    $('.subscribe-message').addClass('alert-danger');
                    $('.subscribe-message').removeClass('alert-success');
                }

                $('.subscribe-input').val('');
                $('.subscribe-input').prop('disabled', false);
                $('.subscribe-message').html(response.data);
                $('.subscribe-input').removeClass('subscribe-processing');
                $('.send-email-button').html('<i class="fa fa-envelope"></i>');
            }
        });
    });

});