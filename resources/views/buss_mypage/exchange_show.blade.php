@extends('layouts.footer_layout')
@section('content')
    <script type="text/javascript" src="/js/buss_mypage/exchange_profile_chart.js"></script>
    <script src='/js/goods/sns_time.js'></script>
    <link rel="stylesheet" href="/css/buss_mypage/market_show.css">
    <div class="market_profile_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline" class="back"></ion-icon>
        </a>
        <p>프로필</p>
        <ion-icon name="ellipsis-vertical" class="ellipsis"></ion-icon>
    </div>

    <div class="profile_wrap">
        <div id="chart" class="noselect">
            <div class="img_wrap">
                <img src="/images/client/accessory.jpg" alt="프로필사진">
            </div>
            <canvas id="myChart"></canvas>
        </div>
        <div id="chartjs-legend" class="noselect">
            <ul>
                <li>
                    <div class="pink"></div>
                    <p>소통</p>
                </li>
                <li>
                    <div class="yellow"></div>
                    <p>친절</p>
                </li>
                <li>
                    <div class="green"></div>
                    <p>빠름</p>
                </li>
                <li>
                    <div class="orange"></div>
                    <p>신뢰</p>
                </li>
                <li>
                    <div class="purple"></div>
                    <p>최악</p>
                </li>

            </ul>
        </div>

        <div class="b_info_wrap">
            <div class="ex_b_name">아이유마켓</div>
            <div class="like_wrap">
                <ul>
                    <li>
                        <div><img src="/images/icons/heart.png" alt="좋아요"></div>
                        <p>4.0</p>
                    </li>
                    <li>
                        <div><img src="/images/icons/heart_on.png" alt="팔로워"></div>
                        <p>3600</p>
                    </li>
                </ul>
            </div>
            <div>
                <button class="follow"><ion-icon name="person-add-outline"></ion-icon>친구추가하기</button>
            </div>
        </div>

        {{-- $hour = $exchange->ex_b_hour;
        $b_hour = substr($hour, 0, 11);
        $off = substr($hour, 12);
         --}}
        <div class="time_wrap">
            <p>영업 시간</p>
            <div class="time_box">
                <p> 평일 9:00 ~ 18:00, 주말, 및 공휴일 휴무</p>
            </div>
        </div>

        <div class="price_wrap">
            <p>가격표</p>
            <div>
                <ul>
                    {{-- @foreach ($ex_goods as $ex_goods_title) --}}
                    <li>건전지 교체</li>
                    <li>소가죽</li>
                    <li>우레탄밴드고리</li>
                    {{-- @endforeach --}}
                </ul>
                <ul>
                    {{-- @foreach ($ex_goods as $ex_goods_price) --}}
                    <li>10,000 ~ 40,000</li>
                    <li>30,000</li>
                    <li>5,000</li>
                    {{-- @endforeach --}}
                </ul>
            </div>

        </div>
        <div class="chat_btn_wrap">
            <input type="button" value="채팅하기" class="chat_btn">
        </div>

        <div class="holding_goods_wrap">
            <p>아이유마켓에서 위탁중인 상품</p>
            {{-- @foreach ($goods as $good) --}}
            <a href="#">
                <div class="goods reserved">
                    <div class="goods_img_wrap">
                        <div class="reserved_mark">
                            <p>판매중</p>
                        </div>
{{--
                        $path = $good->g_img_path;
                        $img = explode('|', $path);
                        --}}
                        <img src="images/goods/watch1.jpg" alt="상품사진" class="g_photo">
                    </div>
                    <div class="g_content">
                        <p class="g_title">시계 팔아요</p>
                        <span class="g_tag">#새상품</span>
                        <div class="g_state_wrap">
                            <p class="upload_date">2주 전</p>
                            {{-- <script>
                                $(document).ready(function() {
                                    let time = '{{ $good->updated_at }}';
                                    $('.upload_date{{ $good->g_no }}').text(timeForToday(time));
                                });
                            </script> --}}
                            <p class="g_price">20,000</p>
                        </div>
                    </div>
                </div>
            </a>
            {{-- @endforeach --}}
        </div>
    </div>
@endsection
