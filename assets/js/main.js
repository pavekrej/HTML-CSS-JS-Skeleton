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
        }
    };
}(jQuery));

jQuery(document).ready(function () {
    'use strict';
    PROJECT.default.init();
});