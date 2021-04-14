$(document).ready(function () {
    $('.visual').slick({
        autoplay: false,
        // autoplaySpeed: 2000,
        dots: true,
        pauseOnHover: false,

    });


    $('.item_scroller').slick({
        slidesToShow:2.5,
        arrows:false,
        infinite:false,
    });

    $('.ex_scroller').slick({
        slidesToShow:2.5,
        arrows:false,
        infinite:false,
    });

    var picNum = $('.slick-dots li').length;
    // console.log("사진 갯수 : "+picNum);
    if(picNum>4){
        var dots = $('.slick-dots li button');
        dots.css('width', 'calc(30vw/'+picNum+')');
    }


});
