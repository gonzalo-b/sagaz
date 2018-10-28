(function ($) {
	"use strict";
   /* Sticky header */
    $window.scroll(function () {
        if ($window.scrollTop() > 200) {
            $('.navbar').addClass('sticky-header');
        } else {
            $('.navbar').removeClass('sticky-header');
        }
    });




})(jQuery);
