$(document).ready(function() {
    // $.noConflict();
    $('.selling_slider').slick({
        slide: 'div',
        slideToScroll: 1,
        arrows: false,
        centerMode: true,
        infinite: false,
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        if (currentSlide !== nextSlide) {
            $('.slick-center + slick-cloned').each(function(index, node) {
                var $node = $(node);
                setTimeout(function() {
                    $node.addClass('slick-current');
                    $node.addClass('slick-center');
                });
            });
        }
    });
});
