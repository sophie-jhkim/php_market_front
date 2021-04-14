<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/goods/goods_show.css">
    <script type="text/javascript" src="js/goods/slick.min.js"></script>
    <script type="text/javascript" src="js/goods/goods_show.js"></script>
    <title>상세페이지</title>
</head>

<body>


    <div class="detail_header">
        <ul class="detail_header_wrap">
            <li class="back"><a href="javascript:history.back();">
                    <ion-icon name="arrow-back-outline"></ion-icon>
                </a></li>
            <li class="g_category">
                <div>반려용품</div>
            </li>
            <li class="share"><a href="#">
                    <ion-icon name="share-social-outline"></ion-icon>
                </a></li>
        </ul>
    </div>

    <div class="visual_wrap">
        <div class="visual">
            <div class="visual1"><img src="images/goods/watch1.jpg" alt=""></div>
            <div class="visual1"><img src="images/goods/necklace3.jpg" alt=""></div>
            <div class="visual2"><img src="images/goods/rings2.jpg" alt=""></div>
            <div class="visual3"><img src="images/goods/rings.jpg" alt=""></div>
        </div>

    </div>
    <div class="detail_con_wrap">
        <div class="con_wrap_top">
            <div class="u_profile_img"><img src="images/client/accessory.jpg" alt=""></div>
            <p class="u_nick">또또</p>
            <div class="ellipsis">
                <ion-icon name="ellipsis-vertical"></ion-icon>
            </div>
        </div>
        <div v class="con_wrap">
            <div class="g_title">
            데일리 예쁜 여성 손목시계
            </div>
            <div class="state_wrap">
                <p class="upload_date">3일 전</p>
                {{-- <span class="g_state">위탁중</span> --}}
            </div>
            <div class="g_content">
                개봉은 했지만 사용은 안했어요
                제조사는 버니입니다
                구매일은 기억이 안나요
                크기는 가로 20cm, 세로 10.5cm 높이 30cm 입니다
                흑미는 비타폴을 좋아하는데 실수로 버니 샀어용
                상태만 확인하려고 개봉했습니다. 가나다라마바사아자차카타파하
            </div>
        </div>
        <div class="loca_wrap">
            <div>
                <p class="loca">위치</p>
                <p class="route">길 찾기</p>
                <ion-icon name="chevron-forward"></ion-icon>
            </div>
            <div class="mapView">
                지도 여기용
            </div>
        </div>
        <div class="scroller">
            <div class="u_scroll">
                <div>또또님의 다른 상품</div>
                <ul class="item_scroller">
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/watch1.jpg" alt="">
                            <div class="scroll_title"><p>심바 키우는 박서준입니당</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/rings.jpg" alt="">
                            <div class="scroll_title"><p>귀여운 심바</p></div>
                        </div>
                    </li>
                    <li>
                        {{-- <div class="scroll_state"></div> --}}
                        <div class="items">
                            <img src="images/goods/necklace3.jpg" alt="">
                            <div class="scroll_title"><p>하얀색 강아지</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/iphone_case.jpg" alt="">
                            <div class="scroll_title"><p>하얀색 강아지</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/clothes.jpg" alt="">
                            <div class="scroll_title"><p>귀여운 심바</p></div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="ex_scroll">
                <div>같은 거래소 상품</div>
                <ul class="ex_scroller">
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/rings.jpg" alt="">
                            <div class="scroll_title"><p>귀여운 심바</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/watch1.jpg" alt="">
                            <div class="scroll_title"><p>심바 키우는 박서준입니당</p></div>
                        </div>
                    </li>

                    <li>
                        {{-- <div class="scroll_state"></div> --}}
                        <div class="items">
                            <img src="images/goods/clothes.jpg" alt="">
                            <div class="scroll_title"><p>하얀색 강아지</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/watch2.jpg" alt="">
                            <div class="scroll_title"><p>하얀색 강아지</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="scroll_state">위탁중</div>
                        <div class="items">
                            <img src="images/goods/iphone_case.jpg" alt="">
                            <div class="scroll_title"><p>귀여운 심바</p></div>
                        </div>
                    </li>

                </ul>
            </div>



        </div>


    </div>
    <div class="btn_wrap">
        <div class="g_price">3,333</div>
        <div class="chatting"><ion-icon name="chatbubbles"></ion-icon> 채팅하기</div>
    </div>


</body>

</html>
