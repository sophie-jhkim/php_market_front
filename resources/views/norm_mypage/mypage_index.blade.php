@extends('layouts.footer_layout')
@section('content')
    <script src="/js/norm_mypage/mypage_index.js"></script>
    <link rel="stylesheet" href="/css/norm_mypage/mypage_index.css">
    {{-- <script src="/js/goods/sns_time.js"></script> --}}
    {{-- <div class="modal"></div> --}}
    <div class="info_wrap">
        <div class="left_wrap">
            <div class="profile_img">
                <img src="/images/client/accessory.jpg" alt="프로필사진">
            </div>
            <input type="button" value="프로필 수정" class="profile_btn" onclick="location.href='{{route('profile_update')}}'">
        </div>
        <div class="right_wrap">
            <div>
                <ul class="user_info">
                    <li>
                        <p class="u_nick">아이유마켓</p>
                    </li>
                    <li>
                        <a href="#">
                            <ion-icon name="settings"></ion-icon>
                        </a>
                    </li>
                </ul>
                <ul class="mileage_wrap">
                    <li><img src="/images/icons/mileage.png" alt="마일리지">
                        <p>10,000</p>
                    </li>
                    <li><a href="{{route('point_show')}}">더보기 +</a></li>
                </ul>
                <ul class="review_wrap">
                    {{-- <li>리뷰</li> --}}
                    <li><img src="/images/icons/heart.png" alt="리뷰">
                        <p>4.0</p>
                    </li>
                    <li><a href="#">더보기 +</a></li>
                </ul>
                <ul class="penalty_wrap">
                    {{-- <li>패널티</li> --}}
                    <li><img src="/images/icons/warning.png" alt="패널티">
                        <p>1/5</p>
                    </li>
                    <li><a href="#">더보기 +</a></li>
                </ul>
            </div>
            <div class="info_btn_wrap">
                <input type="button" value="찜한상품" onclick="location.href='{{route('like_list')}}'">
                <input type="button" value="구매상품" onclick="location.href='{{route('buy_list')}}'">
            </div>
        </div>
        <div class="bg"></div>
    </div>
    {{-- @if ($goods == '1')
        <script>
            $('.bg').remove();

        </script>
    @else --}}
    <div class="selling_wrap">
        <div>
            <ul class="selling_title">
                <li>판매상품</li>
                <li>더보기 +</li>
            </ul>
            <div class="selling_slider">
                <div class="g_wrap">
                    {{-- <div class="no_selling">게시글을 올려주세요!</div> --}}
                    <div class="g_img_wrap"><img src="/images/goods/clothes.jpg" alt="대표이미지"></div>
                    <div class="g_right_wrap">
                        <div>
                            <p class="g_title">민소매 화이트 미니 원피스 제목이 길어지면 어떻게 될까요????</p>
                        </div>
                        <p class="upload_date">3일 전</p>
                        <div class="bottom_wrap">
                            <ul class="view_wrap">
                                <li><img src="/images/icons/heart_on.png" alt="좋아요 수">
                                    <p>5</p>
                                </li>
                                <li><img src="/images/icons/chat_orange.png" alt="채팅">
                                    {{-- <ion-icon name="chatbubble-outline"></ion-icon> --}}
                                    <p>2</p>
                                </li>
                                <li>
                                    <img src="/images/icons/hit.png" alt="조회수">
                                    {{-- <ion-icon name="eye-outline"></ion-icon> --}}
                                    <p>333</p>
                                </li>
                            </ul>
                            <div class="selling_btn_wrap">
                                <input type="button" value="거래소" onclick="location.href='{{route('market_show')}}'">
                                <input type="button" value="끌올">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g_wrap">
                    {{-- <div class="no_selling">게시글을 올려주세요!</div> --}}
                    <div class="g_img_wrap"><img src="/images/goods/clothes.jpg" alt="대표이미지"></div>
                    <div class="g_right_wrap">
                        <div>
                            <p class="g_title">민소매 화이트 미니 원피스</p>
                        </div>
                        <p class="upload_date">3일 전</p>
                        <div class="bottom_wrap">
                            <ul class="view_wrap">
                                <li><img src="/images/icons/heart_on.png" alt="좋아요 수">
                                    <p>5</p>
                                </li>
                                <li><img src="/images/icons/chat_orange.png" alt="채팅">
                                    {{-- <ion-icon name="chatbubble-outline"></ion-icon> --}}
                                    <p>2</p>
                                </li>
                                <li>
                                    <img src="/images/icons/hit.png" alt="조회수">
                                    {{-- <ion-icon name="eye-outline"></ion-icon> --}}
                                    <p>333</p>
                                </li>
                            </ul>
                            <div class="selling_btn_wrap">
                                <input type="button" value="거래소" onclick="location.href='{{route('market_show')}}'">
                                <input type="button" value="끌올">
                            </div>

                        </div>
                    </div>
                </div>



                {{-- @foreach ($goods as $goods)

                        <div class="g_wrap">
                            <?php
                            $path = $goods->g_img_path;
                            $img = explode('|', $path);
                            ?>
                            <div class="g_img_wrap"><img src="{{ '/uploads/' . $img[0] }}" alt="대표이미지"></div>
                            <div class="g_right_wrap">
                                <div>
                                    <p class="g_title">{{ $goods->g_title }}</p>
                                </div>
                                <p class="upload_date" id="upload_date{{ $goods->g_no }}"></p>
                                <ul class="view_wrap">
                                    <li><img src="/images/icons/heart_on.png" alt="좋아요 수">
                                        <p>5</p>
                                    </li>
                                    <li><img src="/images/icons/chat_orange.png" alt="채팅">
                                        {{-- <ion-icon name="chatbubble-outline"></ion-icon>
                                        <p>2</p>
                                    </li>
                                    <li>
                                        <img src="/images/icons/hit.png" alt="조회수">
                                        {{-- <ion-icon name="eye-outline"></ion-icon>
                                        <p>333</p>
                                    </li>
                                </ul>
                                <div class="selling_btn_wrap">
                                    <input type="button" value="거래소" id="exchange_info{{ $goods->g_exchange }}">
                                    <script>
                                        $(document).on('click', '#exchange_info{{ $goods->g_exchange }}', function() {
                                            location.href = "{{ route('exchange_show', ['ex_no' => $goods->g_exchange]) }}";
                                        });
                                    </script>
                                    <input type="button" value="끌올" id="up_goods{{ $goods->g_no }}">
                                    <script>
                                        $(document).ready(function() {
                                            let time = '{{ $goods->updated_at }}';
                                            $('#upload_date{{ $goods->g_no }}').text(timeForToday(time));
                                        });
                                        var create_up_goods_id = '{{ $goods->g_no }}';
                                        $(document).on('click', 'input[id="up_goods' + create_up_goods_id + '"]',
                                            function() {
                                                $.ajax({
                                                    headers: {
                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                                            'content')
                                                    },
                                                    url: "/goods/goods_up",
                                                    type: 'post',
                                                    dataType: "text",
                                                    data: {
                                                        'up_goods': '{{ $goods->g_no }}',
                                                    },
                                                    success: function(data) {
                                                        location.href = '/goods';
                                                    },
                                                    error: function(request, status, error) {
                                                        console.log("code:" + request.status + "\n" +
                                                            "message:" + request.responseText + "\n" +
                                                            "error:" + error);
                                                    }
                                                });
                                            });
                                    </script>
                                </div>
                            </div>
                        </div>
                    @endforeach --}}


            </div>
        </div>
    </div>
    {{-- @endif --}}
    <div class="friends_wrap">
        <ul>
            <li>
                <a href="#">
                    <ion-icon name="person-add-outline"></ion-icon>
                    <p>친구 관리</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <ion-icon name="person-remove-outline"></ion-icon>
                    <p>차단 친구 관리</p>
                </a>
            </li>
        </ul>
    </div>

    <div class="util_wrap">
        <ul>
            <li><a href="#">
                    <ion-icon name="file-tray-full-outline"></ion-icon>
                    <p>카테고리 즐겨찾기</p>
                </a></li>
            <li><a href="#">
                    <ion-icon name="pricetag-outline"></ion-icon>
                    <p>키워드 알림</p>
                </a></li>
            <li><a href="#">
                    <ion-icon name="time-outline"></ion-icon>
                    <p>최근 본 상품</p>
                </a></li>
            <li><a href="{{route('mypage_info_update')}}">
                    <ion-icon name="id-card-outline"></ion-icon>
                    <p>개인 정보 수정</p>
                </a></li>
            <li><a href="{{route('market_mypage')}}">
                    <ion-icon name="storefront-outline"></ion-icon>
                    <p>거래소 신청하기</p>
                </a></li>
        </ul>
    </div>
    <div class="as_wrap">
        <ul>
            <li><a href="#">
                    <ion-icon name="share-social-outline"></ion-icon>
                    <p>공유</p>
                </a></li>
            <li><a href="{{route('notice')}}">
                    <ion-icon name="mic-outline"></ion-icon>
                    <p>공지사항</p>
                </a></li>
            <li><a href="{{route('cs')}}">
                    <ion-icon name="information-circle-outline"></ion-icon>
                    <p>고객센터</p>
                </a></li>
            <li><a href="{{route('signUp')}}">
                    <ion-icon name="settings-outline"></ion-icon>
                    <p>설정(회원가입폼)</p>
                </a></li>
            <li><a href="#">
                    <ion-icon name="log-out-outline"></ion-icon>
                    <p>로그아웃</p>
                </a></li>
                <li><a href="{{route('signIn')}}">
                    <ion-icon name="log-in-outline"></ion-icon>
                    <p>로그인</p>
                </a></li>
        </ul>
    </div>
@endsection
