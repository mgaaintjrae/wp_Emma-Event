jQuery(document).ready(function (jQuery) {
    'use strict';

    var wind = jQuery(window);

    wind.on('load', function () {
        // Preloader
        jQuery('.loading').fadeOut(500);
    });

    // button scroll to top
    jQuery('.button-top').click(function () {
        jQuery('html,body').animate({ scrollTop: 0 }, 'slow');
    });

    jQuery(window).scroll(function () {
        // If on top fade the bouton out, else fade it in
        if (jQuery(window).scrollTop() == 0) jQuery('.button-top').fadeOut();
        else jQuery('.button-top').fadeIn();
    });


});


// Sticky menu
document.addEventListener('DOMContentLoaded',function(){
    'use strict';
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollpos = window.pageYOffset;
    if (prevScrollpos > currentScrollpos) {
        document.querySelector('.navhome').style.top = '0px';
        document.querySelector('.navhome').style.zIndex = 1;              
    } else {
        document.querySelector('.navhome').style.top = '-190px';
        document.querySelector('.navhome').classList.add('sticky');
    }

    prevScrollpos = currentScrollpos;
};

});


// Sub menu
document.addEventListener('DOMContentLoaded',function(){
document.querySelector('.sub-menu').classList.add('height');
});





