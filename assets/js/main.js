/*
[Main Javascript File]

Project:	  JS functions
Version:	  1.1
Last change:  9. 11. 2015
Creator:	  Pavel Krejčí

*/

var PROJECT = {};

PROJECT.default = (function ($) {
    'use strict';

    return {
        init: function () {
            console.log(lang.VERSION);

            PROJECT.default.scrollTop();
            PROJECT.default.lightboxInit();
            return true;
        },

        /* Init Fancybox */
        lightboxInit: function () {
            if($('.lightbox').length > 0) {
                $('.lightbox').fancybox({
                    'titleShow': false
                });
            }
        },

        /* Scroll to top */
        scrollTop: function () {
            $('#link-top').on('click', function() {
                $('html, body').animate({scrollTop: 0}, 800, 'swing');
                return false;
            });
            return true;
        }
    };
}(jQuery));

jQuery(document).ready(function () {
    'use strict';
    PROJECT.default.init();
});


