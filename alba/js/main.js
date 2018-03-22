(function() {
    'use strict';


    // Avoid `console` errors in browsers that lack a console.
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any code in here.
jQuery(function() {
    'use strict';

    /**
     * STICKY MENU
     **/
    var jQuerynavbar = jQuery(".navigation"),
        stickyPoint = 90;

    function navbarSticky() {
        if (jQuery(window).scrollTop() >= stickyPoint) {
            jQuerynavbar.addClass("navbar-sticky");
        } else {
            jQuerynavbar.removeClass("navbar-sticky");
        }
    }

    jQuery(window).scroll(function () {
        navbarSticky();
    });

    navbarSticky();

    /**
     *  NAVBAR SIDE COLLAPSIBLE
     **/
    jQuery(".navbar-toggler").on("click", function() {
        jQuerynavbar.toggleClass("navbar-expanded");
    });

   /**
    * AOS Initialization
    **/
    AOS.init({
        offset: 200,
        duration: 1500,
        disable: "mobile"
    });

    /**
     * Swiper Initialization
     **/
    jQuery('.swiper-container').each(function() {
        var jQuerythis = jQuery(this);

        var autoplay = jQuerythis.data('swiper-autoplay') || 3000;
        var speed = jQuerythis.data('swiper-speed') || 1100;

        var options = {
            pagination: jQuery('.swiper-pagination', this),
            nextButton: jQuery('.swiper-button-next', this),
            prevButton: jQuery('.swiper-button-prev', this)
        };

        var swiper = new Swiper (this, jQuery.extend({
            loop: true,
            autoplay: autoplay,
            speed: speed,
            paginationClickable: true,
            autoplayDisableOnInteraction: false
        }, options));
    });

    /**
     * Values Slider on Pricing Plans
     **/
    jQuery('.pricing [data-toggle="slider"]').each(function() {
        var jQueryelement = jQuery(this);
        var currentValue = jQueryelement.data("slider-value");

        //TODO: data-rel, if exists take it
        var jQueryprice = jQuery('.price', jQueryelement.parent().siblings('.pricing-value'));
        var jQueryvalue = jQuery('.value', jQueryelement.prev()).text(currentValue);

        function calculatePrice (val) {
            // Implement your own price calculation function here
            return (val * 29.99).toFixed(2);
        }

        // function calculatePrice (val) {
        //     // Implement your own price calculation function here
        //     if val = 1..20
        //     return (val * 9.99).toFixed(2);
        // }

        function renderValues(newValue) {
            var price = calculatePrice(newValue);

            jQueryprice.text(price);
            jQueryvalue.text(newValue);
        }

        jQueryelement.slider();
        jQueryelement.on('change', function(data) {
            renderValues(data.value.newValue);
        });

        renderValues(currentValue);
    });

    /**
     * Popover
     **/
    jQuery('[data-toggle="popover"]').popover();
});
