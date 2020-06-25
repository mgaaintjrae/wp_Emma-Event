jQuery(document).ready(function ($) {
    "use strict";

    var wind = $(window);

    wind.on('load', function () {
        // Preloader
        $('.loading').fadeOut(500);
    });

    // button scroll to top   
    $('.button-top').click( function() {
        $('html,body').animate({scrollTop: 0}, 'slow');
    });


$(window).scroll(function() {
    // If on top fade the bouton out, else fade it in
    if ( $(window).scrollTop() == 0 )
        $('.button-top').fadeOut();
    else
        $('.button-top').fadeIn();
});
});
