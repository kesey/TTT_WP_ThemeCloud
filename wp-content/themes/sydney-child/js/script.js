
;(function($) {

    'use strict';

    var zoomImage = function() {
        $('.single_image').click(function() {
            $(this).toggleClass("zoom_in");
        });
    };

    var previewHover = function() {
        $('.link_cover').hover(function() {
            $(this).next('img').css('transform', 'scale(1.1)');
        });
        $('.link_cover').mouseleave(function() {
            $(this).next('img').css('transform', 'scale(1)');
        });
    };

    // Dom Ready
    $(function() {
        zoomImage();
        previewHover();
    });
})(jQuery);

