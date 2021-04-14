$(document).ready(function () {

    var d = new Date();
    var curTime = "";
    var curHour = d.getHours();
    if (curHour > 12) {
        curHour = curHour - 12;
        curTime = "오후 " + curHour + "시 " + d.getMinutes() + "분";
    } else {
        curTime = "오전 " + curHour + "시 " + d.getMinutes() + "분";
    }

    $('.chat_text').keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            $('.send').trigger('click');
        }
    })

    $('.send').on("click", function () {
        // alert(curTime);
        var chatcontent = $('.chat_text').val();
        if (chatcontent == "") {
            return false;
        }
        $('.chat ul').append(
            $('<li>').append(chatcontent,
                $('<p>').append(curTime).css({
                    "color": "#A09E9E",
                    "font-size": "2.5vmin"
                }),
                $('<div>').append().css({
                    "width": "0",
                    "height": "0",
                    "position" : "absolute",
                    "right" : "0",
                    "top" : "2vmin",
                    "border-radius" : "0 2vmin 0 0",
                    "transform" : "translateX(80%)",
                    "border-top": "2vmin solid #6c80f1",
                    "border-right": "3vmin solid transparent"

                })

            )

        );
        console.log($('.chat')[0].scrollHeight);
        $(window).scrollTop($('.chat')[0].scrollHeight+20);
        $('.chat_text').val("").focus();


    });

    $('.ellipsis').on('click', function(){
        $('.util_wrap').css({'display':'block'})
    })
    $('.util_close').on('click', function(){
        $('.util_wrap').css({'display':'none'})
    })


});
