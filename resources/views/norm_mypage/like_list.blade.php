@extends('layouts.footer_layout')
@section('content')
    <link rel="stylesheet" href="/css/norm_mypage/like_list.css">
    <title>찜한 상품</title>
    </head>

    <body>
        <div class="like_header">
            <a href="javascript:history.back();">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </a>
            <p>찜한 상품</p>
        </div>


        <div class="like_list">
            {{-- <p class="no_list">찜한 제품이 없어요 ! </p> --}}
            <div class="like_goods_wrap">
                <a href="#">
                    <div class="like_goods">
                        <div class="good_img">
                            <div class="like_img_wrap">
                                <img src="/images/goods/watch1.jpg" alt="상품사진" class="g_img" />
                                <img src="images/icons/heart_on.png" alt="좋아요" class="like" />
                            </div>
                        </div>
                        <div class="g_content">
                            <div class="g_title_wrap">
                                <p class="g_title">데일리로 좋은 여성용 손목 시계</p>
                                <p class="g_tag"></p>
                            </div>
                            <div class="g_state_wrap">
                                <p class="g_price">20,000</p>
                                <p class="g_state">예약중</p>
                                <p class="upload_date">1시간 전</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="like_btn_wrap">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <input type="button" value="채팅하기">
                </div>
            </div>
            <div class="like_goods_wrap">
                <a href="#">
                    <div class="like_goods">
                        <div class="good_img">
                            <div class="like_img_wrap">
                                <img src="/images/goods/watch2.jpg" alt="상품사진" class="g_img" />
                                <img src="images/icons/heart_on.png" alt="좋아요" class="like" />
                            </div>
                        </div>
                        <div class="g_content">
                            <div class="g_title_wrap">
                                <p class="g_title">남친 선물용으로 좋은 남성 손목시계 가나다라마바사아자차카타파하</p>
                                <p class="g_tag">#미개봉 #새상품 #선물용 #기념일</p>
                            </div>
                            <div class="g_state_wrap">
                                <p class="g_price">30,000</p>
                                <p class="g_state">예약중</p>
                                <p class="upload_date">어제</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="like_btn_wrap">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                    <input type="button" value="채팅하기">
                </div>
            </div>
        </div>

    @endsection
