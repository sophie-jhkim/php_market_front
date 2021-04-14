$(document).ready(function() {
    // $.ajax({
    //         url: 'goods?page=' + page,
    //         type: "get",
    //     })
    //     .done(function(data) {
    //         if (data.html == "") {
    //             return false;
    //         }
    //         $(".goods_list").empty();
    //         $(".goods_list").append(data.html);
    //     })

    // $(document).on('click', '.search_icon', function() {
    //     let search = document.getElementById('search').value;

    //     var page = 1;
    //     $(window).scroll(function() {
    //         if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
    //             page++;
    //             loadMoreData(page);
    //         }
    //     });

    //     $.ajax({
    //             url: 'goods?page=' + page,
    //             type: "get",
    //             data: {
    //                 'search': search
    //             }
    //         })
    //         .done(function(data) {
    //             if (data.html == "") {
    //                 return false;
    //             }
    //             $(".goods_list").empty();
    //             $(".goods_list").append(data.html);
    //         })

    //     function loadMoreData(page) {
    //         $.ajax({
    //                 url: 'goods?page=' + page,
    //                 type: "get",
    //                 data: {
    //                     'search': search
    //                 }
    //             })
    //             .done(function(data) {
    //                 if (data.html == "") {
    //                     return false;
    //                 }
    //                 $(".goods_list").empty();
    //                 $(".goods_list").append(data.html);
    //             })
    //     }
    // });

    $(document).on("click", ".filter_icon", function() {
        window.scrollTo(0, 0);
        $(".filter_bg").stop(true).css({
            'display': 'block',
            'opacity': 0
        }).animate({
            'opacity': 1
        }, 200);
        $(".filter").show().animate({
            left: 0
        });
        $('.filter, .filter_bg').on('scroll touchmove mousewheel', function(event) {
            event.preventDefault();
            event.stopPropagation();
            return false;
        });
    })

    $(document).on("click", ".filter_close, .filter_bg", function() {
        $(".filter_bg").stop(true).animate({
            'opacity': 0
        }, 200, function() {
            $(this).css({
                'display': 'none'
            })
        });
        $(".filter").show().animate({
            left: '-70%'
        });
        $('.filter, .filter_bg').off('scroll touchmove mousewheel');
    })

    $(document).on("click", ".cate_sorting>input", function() {
        $(this).addClass('on').siblings().removeClass('on');
        if ($(".cate_sorting input").hasClass('on') === true) {
            $('#hidden_category').val($(this).val());
            filter_on();
        }
    });

    $(document).on("click", ".reset", function() {
        $(".cate_sorting>input").removeClass('on');
        if ($(".cate_sorting>input").removeClass('on')) {
            var category_sort = "";
            var list_sort = "";
            var ect_sort = "";

            var page = 1;
            $(window).scroll(function() {
                if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                    page++;
                    loadMoreData(page++);
                }
            });

            $.ajax({
                    url: 'goods?page=' + page,
                    type: "get",
                    data: {
                        'category_sort': category_sort,
                        'list_sort': list_sort,
                        'ect_sort': ect_sort,
                        'reset': "on"
                    }
                })
                .done(function(data) {
                    if (data.html != "") {
                        $(".goods_list").empty();
                        $(".goods_list").append(data.html);
                    } else {
                        return false;
                    }
                })
        };
    });

    $("input:radio[name=list_sort]").on('change', function() {
        filter_on();
    });

    $("input:radio[name=ect_sort]").on('change', function() {
        filter_on();
    });

    function filter_on() {
        var category_sort = $('#hidden_category').val();
        var list_sort = $("input:radio[name=list_sort]:checked").val();
        var ect_sort = $("input:radio[name=ect_sort]:checked").val();

        var page = 1;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreData(page);
            }
        });

        $.ajax({
                url: 'goods?page=' + page,
                type: "get",
                data: {
                    'category_sort': category_sort,
                    'list_sort': list_sort,
                    'ect_sort': ect_sort
                }
            })
            .done(function(data) {
                if (data.html != "") {
                    $(".goods_list").empty();
                    $(".goods_list").append(data.html);
                } else {
                    return false;
                }
            })

        function loadMoreData(page) {
            $.ajax({
                    url: 'goods?page=' + page,
                    type: "get",
                    data: {
                        'category_sort': category_sort,
                        'list_sort': list_sort,
                        'ect_sort': ect_sort
                    }
                })
                .done(function(data) {
                    if (data.html != "") {
                        $(".goods_list").empty();
                        $(".goods_list").append(data.html);
                    } else {
                        return false;
                    }
                })
        }
    }
});
