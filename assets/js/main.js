/*
[Main Javascript File]

Project:	  JS functions
Version:	  1.1
Last change:  4. 12. 2015
Creator:	  Pavel Krejci DELAMWEBY.cz © 2015

*/

var PROJECT = {};

PROJECT.default = (function ($) {
    'use strict';

    return {
        init: function () {
            if(DEBUG) {
                console.log(lang.VERSION);
            }
            PROJECT.default.scrollTop();
            return true;
        },

        /* Show Main.js version */
        showMainJsVersion: function () {
            console.log(lang.VERSION);
        },

        /* Scroll to top */
        scrollTop: function () {
            $('#link-top').on('click', function() {
                $('html, body').animate({scrollTop: 0}, 800, 'swing');
                return false;
            });
            return true;
        },

        /* Init Fancybox */
        initLightbox: function () {
            if($('.lightbox').length > 0) {
                $('a[data-fancybox-group]').each(function() {
                    $(this).attr('rel', $(this).data('fancybox-group'));
                });

                $('.lightbox').fancybox({
                    'titleShow': false,
                    'padding': 0
                });
            }
        },

        /* Init tooltips */
        initTooltips: function () {
            $('[data-toggle="tooltip"]').tooltip();
        },

        /* Init carousel */
        initCarousel: function (element) {
            if($(element).length > 0) {
                $(element).owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 0,
                    nav: true,
                    navSpeed: 1200,
                    navText: ["<span class='glyphicon glyphicon-menu-left'></span>", "<span class='glyphicon glyphicon-menu-right'></span>"],
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplayHoverPause: true
                });
            }
        }
    };
}(jQuery));

jQuery(document).ready(function () {
    'use strict';
    PROJECT.default.init();
});