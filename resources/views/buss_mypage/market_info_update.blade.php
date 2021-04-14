@extends('layouts.footer_layout')
@section('content')
    <link rel="stylesheet" href="/css/buss_mypage/market_info_update.css">
    <div class="market_update_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        <p>프로필 수정</p>
    </div>
    <form action="" method="POST">
        <div class="update_container">
            <div class="img_update_wrap">
                <div class="img_wrap">
                    <img src="/images/client/accessory.jpg" alt="프로필 사진">
                </div>
                <label for="input-file" class="btn_file">
                    <input type="file" name="" id="input-file" style="display: none"accept=".jpg, .gif, .png, .jpeg"
                    onchange="setThumbnail(event);" >
                    <ion-icon name="camera-outline"></ion-icon>
                </label>

            </div>
            <div class="nick_wrap">
                <input type="text" value="아이유마켓">
                <p>샵 이름 10자 이하</p>
            </div>

            <div class="b_hour_wrap">
                <div class="hour_title">
                    <p>운영시간</p>
                </div>
                <div>
                    <ul>
                        <li>평일</li>
                        <li>주말 및 공휴일</li>
                    </ul>
{{--
                    $hour = $user->ex_b_hour;
                    $b_hour = substr($hour, 0, 11);
                    $off = substr($hour, 12); --}}


                    <ul>
                        <li><input type="text" value="9:00 ~ 18:00" class="index"> <label for=""><input type="checkbox" name=""
                                    id="">휴무</label></li>
                        <li><input type="text" placeholder="숫자만 입력해 주세요" value="휴무" class="index"> <label for=""><input type="checkbox" name=""
                                    id="">휴무</label></li>
                    </ul>
                </div>
            </div>
            <div class="max_num">
                <div class="num_title">위탁 가능 수</div>
                <div>
                    <input type="text" name="" id="" value="20">
                </div>
            </div>
            <div class="fee">
                <div class="fee_title">위탁 수수료</div>
                <div>
                    <input type="text" name="" id="" value="5,000원">
                </div>
            </div>

            <div class="goods_info_wrap">
                <div class="p_title">가격표 <a href="#"><ion-icon name="trash-outline"></ion-icon></a></div>
                <div class="p_wrap">
                    <ul>
                        <li><input type="text" value="건전지 교체"></li>
                        <li><input type="text" placeholder="이름"></li>
                    </ul>
                    <ul>
                        <li><input type="text" value="10,000 ~ 40,000"></li>
                        <li><input type="text" placeholder="가격"></li>
                    </ul>
                </div>
            </div>

            <div>
                <input type="submit" value="수정">
            </div>
        </div>
    </form>
</body>
@endsection

<script>
    function setThumbnail(event) {
        for (var image of event.target.files) {
            var reader = new FileReader();
            reader.onload = function(event) {
                $('.img_wrap img').attr("src", event.target.result);
            };
            reader.readAsDataURL(image);
        }
    }

</script>
