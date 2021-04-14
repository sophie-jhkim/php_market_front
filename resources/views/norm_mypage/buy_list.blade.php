@extends('layouts.footer_layout')
@section('content')
    <link rel="stylesheet" href="/css/norm_mypage/buy_list.css">
    <title>구매 상품</title>
    </head>

    <body>
        <div class="buy_header">
            <a href="javascript:history.back();">
                <ion-icon name="arrow-back-outline" class="back"></ion-icon>
            </a>
            <p>구매 상품</p>
        </div>


        <div class="buy_list">
            {{-- <p class="no_list">아직 구입한 제품이 없어요 ! </p> --}}
            <div class="buy_goods_wrap">
                <a href="#">
                    <div class="buy_goods">
                        <div class="buy_img_wrap">
                            <img src="/images/goods/watch1.jpg" alt="상품사진" class="g_img" />
                            <img src="images/icons/heart_on.png" alt="좋아요" class="like" />
                            <div class="soldout">판매완료</div>
                        </div>
                        <div class="g_content">
                            <div class="g_title_wrap">
                                <p class="g_title">데일리로 좋은 여성용 손목 시계</p>
                                <p class="g_tag"></p>
                            </div>

                            <div class="g_state_wrap">
                                <p class="g_price">20,000</p>
                                <p class="g_state">판매완료</p>
                                <p class="upload_date">어제</p>
                            </div>


                        </div>
                    </div>
                </a>
                <div class="buy_btn_wrap">
                    <input type="button" value="리뷰쓰기" onclick="location.href='{{route('review')}}'">
                </div>
            </div>
            <div class="buy_goods_wrap">
                <a href="#">
                    <div class="buy_goods">
                        <div class="buy_img_wrap">
                            <img src="/images/goods/watch2.jpg" alt="상품사진" class="g_img" />
                            <img src="images/icons/heart_on.png" alt="좋아요" class="like" />
                            <div class="soldout">판매완료</div>
                        </div>
                        <div class="g_content">
                            <div class="g_title_wrap">
                            <p class="g_title">남친 선물용으로 좋은 남성 손목시계</p>
                            <p class="g_tag"></p>
                            </div>

                            <div class="g_state_wrap">
                                <p class="g_price">30,000</p>
                                <p class="g_state">판매완료</p>
                                <p class="upload_date">3시간 전</p>
                            </div>


                        </div>
                    </div>
                </a>
                <div class="buy_btn_wrap">
                    <input type="button" value="리뷰쓰기">
                </div>
            </div>

            <div class="buy_goods_wrap">
                <a href="#">
                    <div class="buy_goods">
                        <div class="buy_img_wrap">
                            <img src="/images/goods/iphone_case.jpg" alt="상품사진" class="g_img" />
                            <img src="images/icons/heart_on.png" alt="좋아요" class="like" />
                            <div class="soldout">판매완료</div>
                        </div>
                        <div class="g_content">
                            <div class="g_title_wrap">
                            <p class="g_title">아이폰 케이스, 봄맞이 찰떡 케이스 추천!</p>
                            <p class="g_tag">#미개봉</p>
                            </div>
                            <div class="g_state_wrap">
                                <p class="g_price">30,000</p>
                                <p class="g_state">판매완료</p>
                                <p class="upload_date">3개월 전</p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="buy_btn_wrap reviewY">
                    <input type="button" value="리뷰 쓰기 완료">
                </div>
            </div>
        </div>

    @endsection
