<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/buss_mypage/market_mypage.css">
    <script src="/js/goods/sns_time.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        $(document).ready(function() {
            $(".market_btn_wrap li").on("click", function() {
                $(this).addClass('on').siblings().removeClass('on');

                if ($(".market_btn_wrap li:first-child").hasClass('on')) {
                    $(".selling_request_list").addClass('hidden');
                    $(".on_selling_list").removeClass('hidden')
                } else {
                    $(".on_selling_list").addClass('hidden');
                    $(".selling_request_list").removeClass('hidden')
                }
            });

            $("#market_config").on("click", function() {
                location.href = "/market/config";
            });
        })

    </script>

    <title>사장님 마이페이지</title>
</head>

<body>
    <div class="market_info_wrap">
        <div class="profile_img">
            <img src="images/client/accessory.jpg" alt="프로필사진">
        </div>
        <div class="market_right_wrap">
            <div>
                <ul class="market_info">
                    <li>
                        <p class="u_nick">아이유마켓</p>
                    </li>
                    <li><input type="button" value="프로필 수정" onclick="location.href='{{ route('market_info_update') }}'">
                    </li>
                </ul>
                <ul class="mileage_wrap">
                    <li><img src="/images/icons/mileage.png" alt="마일리지"></li>
                    <li>
                        <p>50,000</p>
                    </li>
                    <li><a href="{{ route('point_show') }}">더보기 +</a></li>
                </ul>
                <ul class="grade_wrap">
                    <li><img src="/images/icons/heart.png" alt="평점"></li>
                    <li>
                        <p>4.0</p>
                    </li>
                    <li><a href="#">더보기 +</a></li>
                </ul>
            </div>
            <div class="info_btn_wrap">
                <input type="button" value="거래완료">
                <input type="button" value="설정" id="market_config">
            </div>
        </div>
        <div class="bg"></div>
    </div>

    <ul class="market_btn_wrap">
        <li class="on">
            <a href="#">
                거래중
            </a>
        </li>
        <li>
            <a href="#" class="">
                <div class="request_wrap">
                    <div class="request">
                        거래요청
                    </div>
                    <div class="notice_wrap">
                        {{-- <p class="notice">1</p> --}}
                    </div>
                </div>
            </a>
        </li>
    </ul>

    {{-- 거래중 목록 --}}
    <div class="on_selling_list">
        {{-- <p class="no_list">거래중인 제품이 없어요 ! </p> --}}
        <form action="" method="POST">
            {{-- @foreach ($goods as $goods) --}}
            <div class="selling_goods_wrap">
                <a href="#">
                    <div class="selling_goods">
                        <div class="selling_img_wrap">
                            {{-- php
                                $path = $goods->g_img_path;
                                $img = explode('|', $path); --}}

                            {{-- <img src="{{ '/uploads/' . $img[0] }}" alt="상품사진" class="g_img" /> --}}
                            <img src="images/goods/watch1.jpg" alt="상품사진" class="g_img" />
                            <img src="images/icons/heart_off.png" alt="좋아요" class="like" />
                        </div>
                        <div class="g_content">
                            <p class="g_title">손목시계 팔아요</p>
                            <p class="g_tag">#새상품</p>
                            <p class="g_price">20,000</p>
                            <span class="g_state">판매중</span>
                            <p class="upload_date" id=""></p>
                            <script>
                                $(document).ready(function() {
                                    let time = '';
                                    $('').text(timeForToday(time));
                                });

                            </script>
                        </div>
                    </div>
                </a>
                <div class="selling_btn_wrap">
                    <input type="button" value="진행사항">
                    <input type="button" value="QR코드">
                </div>
            </div>
            {{-- @endforeach --}}
        </form>
    </div>

    {{-- 거래요청 목록 --}}
    <div class="selling_request_list hidden">
        {{-- @if ($goods != '') --}}
        <form action="" method="POST">
            {{-- @foreach ($accept_goods as $accept_goods) --}}
            <div class="request_goods_wrap">
                <a href="#">
                    <div class="request_goods">
                        <div class="selling_img_wrap">

                            {{-- $path = $accept_goods->g_img_path;
                                    $img = explode('|', $path); --}}

                            <img src="images/goods/watch1.jpg" alt="상품사진" class="g_img" />
                            <img src="images/icons/heart_off.png" alt="좋아요" class="like" />
                        </div>
                        <div class="g_content">
                            <p class="g_title">손목시계 팔아요</p>
                            <p class="g_tag">#새상품</p>
                            <p class="g_price">20,000</p>
                            <span class="g_state">판매중</span>
                            <p class="upload_date" id=""></p>
                            <p class="upload_date" id="upload_date_acc"></p>
                            <script>
                                $(document).ready(function() {
                                    let time = '';
                                    $('#upload_date_acc').text(timeForToday(
                                        time));
                                });

                            </script>
                        </div>
                    </div>
                </a>
                <div class="request_btn_wrap">
                    <input type="button" value="확인" id="g_status_acc">
                    <input type="button" value="거절">
                    {{-- <script>
                        $(document).on('click', 'input[id="g_status_acc{{ $accept_goods->g_no }}"]', function() {
                            $.ajax({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                        'content')
                                },
                                url: "/goods/accept_goods",
                                type: 'post',
                                dataType: "text",
                                data: {
                                    'accept_goods': '{{ $accept_goods->g_no }}',
                                },
                                success: function(data) {
                                    location.href = '/mypage';
                                },
                                error: function(request, status, error) {
                                    console.log("code:" + request.status + "\n" +
                                        "message:" + request.responseText + "\n" +
                                        "error:" + error);
                                }
                            });
                        });

                    </script> --}}
                </div>
            </div>
            {{-- @endforeach --}}
        </form>
    {{-- @else --}}
        {{-- <p class="no_list">거래요청이 없어요 ! </p> --}}
        {{-- @endif --}}
    </div>
    @include('components.footer')

</body>

</html>
