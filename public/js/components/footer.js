$(document).ready(function () {
    var url = window.document.URL;
    var urlre = window.location.href;
    var goods = url.indexOf("goods_index");
    var goods_create = url.indexOf("goods_create");
    var chat_list = url.indexOf("chat");
    var mypage = url.indexOf("mypage");
    console.log(urlre);
    if (goods!==-1) {
        $(".tab_wrap>.goodss").addClass('on').siblings().removeClass('on');
        console.log("상품리스트 입니다");
        }else if(goods_create!==-1){
            console.log("글쓰기페이지 입니다");
            $(".tab_wrap>.goods_create").addClass('on').siblings().removeClass('on');
        }else if(chat_list!==-1){
            console.log("채팅리스트 입니다");
            $(".tab_wrap>.chat_list").addClass('on').siblings().removeClass('on');
        }else if(mypage!==-1){
            console.log("마이페이지 입니다");
            $(".tab_wrap>li:last-child").addClass('on').siblings().removeClass('on');
        }

})
