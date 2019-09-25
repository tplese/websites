// When Window Loaded.
$(window).on('load', function() {

    'use strict';

    $(function() {
        function ratingEnable() {
            
            var timer;
            $('.example-pill').barrating('show', {
                theme: 'bars-pill',
                initialRating: 'A',
                showValues: true,
                showSelectedRating: false,
                allowEmpty: true,
                emptyValue: '-- no rating selected --',
                onSelect: function(value, text) {

                    clearTimeout(timer);
                    $('#pill-message').fadeOut(0).stop().clearQueue();
                    setTimeout( function(){$('#pill-message').html('Selected rating: ' + value).fadeIn(300)},1);
                    timer = setTimeout( function(){$('#pill-message').fadeOut(300);},3000);
                }
            });

        }

        function ratingDisable() {
            $('select').barrating('destroy');
        }

        $('.rating-enable').click(function(event) {
            event.preventDefault();

            ratingEnable();

            $(this).addClass('deactivated');
            $('.rating-disable').removeClass('deactivated');
        });

        $('.rating-disable').click(function(event) {
            event.preventDefault();

            ratingDisable();

            $(this).addClass('deactivated');
            $('.rating-enable').removeClass('deactivated');
        });

        ratingEnable();
    });

});