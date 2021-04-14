<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/css/chat/chat_show.css">
    <script src="/js/chat/chatting.js"></script>
    <title>채팅</title>
</head>

<body>
    <div class="chat_header">
        <a href="javascript:history.back();">
        <ion-icon name="arrow-back-outline" class="back"></ion-icon>
    </a>
        <div class="chatter">
            <div class="chatter_img_wrap"><img src="/images/client/accessory.jpg" alt="프로필 사진"></div>
            <div class="chatter_info_wrap">
                <p class="u_nick">연경잉</p>
                <div class="panalty_wrap">
                    <div class="panalty_img_wrap"><img src="/images/icons/warning.png" alt="패널티"></div>
                    <p>0</p>
                </div>
            </div>
        </div>
        <ion-icon name="ellipsis-vertical" class="ellipsis"></ion-icon>
        <div class="util_wrap">
            <ion-icon name="close-outline" class="util_close"></ion-icon>
            <ul>
                <li><a href="#">채팅방 나가기</a></li>
                <li><a href="#">신고하기</a></li>
                <li><a href="#">차단하기</a></li>
            </ul>
        </div>
    </div>

    <div class="chat_content_wrap">
        {{-- <form action=""> --}}
        <div class="chat">
            <ul>
                <li class="sender">
                    <div class="sender_img_wrap">
                        <img src="/images/client/accessory.jpg" alt="프로필 사진">
                    </div>
                    <div class="goods_wrap">
                        <div class="img_wrap">
                            <img src="/images/client/simba2.jpg" alt="상품사진" class="g_photo">
                        </div>
                        <div class="g_content">
                            <div class="g_title">귀여운 밥풀이 줄려고 세계에서 제일 맛있는 사료 구매했는데 편식때문에 안먹어서
                            </div>
                            <div class="g_tag">#직거래 #미개봉 #로얄캐닌 #2020_10</div>

                            <div class="g_state_wrap">
                                <div class="upload_date">2주 전</div>
                                <div class="g_price">10,000</div>
                            </div>
                        </div>
                    </div>
                    <div class=bg></div>
                </li>
                <li class="sender">
                    <div class="sender_img_wrap">
                        <img src="/images/client/accessory.jpg" alt="프로필 사진">
                    </div>
                    쿨거래 하겠습니다
                    <div class=bg></div>
                </li>
                <li>
                    감사합니다.
                </li>

            </ul>

        </div>
        {{-- <div class="chat format">
                <ul>
                    <li>
                        <div class="sender"></div>
                        <div class="msg"></div>
                    </li>
                </ul>
            </div> --}}



        <div class="chat_input">
            <ion-icon name="add-outline" class="add_icon"></ion-icon>
            <ion-icon name="happy-outline" class="emoji"></ion-icon>
            <input type="text" name="" id="" class="chat_text">
            <input type="button" value="전송" class="send">

        </div>

        {{-- </form> --}}


    </div>




</body>

</html>
