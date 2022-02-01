jQuery(function ($) {

    // -------------------------------------------------------------
    //   Searchbar
    // -------------------------------------------------------------
    $('#search-link').click(function () {
        $('.indblog-searchbar').toggleClass('indblog-searchbar-active');
    });

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

    // -------------------------------------------------------------
    //   Email subscription input handler on input change
    // -------------------------------------------------------------
    $('input[name="subscribe_email"]').on('input', function (e) {
        $('input[name="subscribe_email"]').val(e.target.value);
    });

    // -------------------------------------------------------------
    //   Category Filter
    // -------------------------------------------------------------

    /**
     * Get category posts
     */
    function getCategoryPosts( category_id = 'all', append_data = false, offset = 0 ) {
        // Add loading spinner initially before loading...
        $('#category-filter-articles').html( '<div class="text-center p-5 fs-1"><i class="fa fa-spinner fa-spin"></i></div>' );

        $.ajax({
            type: 'POST',
            url: indblog_data.ajaxurl,
            data: {
                action     : 'indblog_category_filter',
                category_id: category_id,
                offset     : offset,
                is_append  : append_data,
                nonce      : indblog_data.nonce
            },
            success: function (response) {
                if (response.success) {
                    // Replace the category-filter-articles with response HTML data.
                    $('#category-filter-articles').html( response.data );
                } else {
                    $('#category-filter-articles').html( response.data );
                }
            }
        });
    }

    $('.category-filter-link').on('click', function (e) {
        e.preventDefault();

        // Get category id
        const category_id = $(this).data('category_id');

        // Get category name
        const category_name = $(this).data('category_name');
        $(".category-active-filter").html( category_name );

        // Get category posts
        getCategoryPosts( category_id );
    });

    // -------------------------------------------------------------
    //   Infinite Load
    // -------------------------------------------------------------
    getCategoryPosts();

});