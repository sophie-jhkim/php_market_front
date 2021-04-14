{{-- @foreach ($goods as $goods)                                  ****DB사용할때
    <a href="{{ route('goods.show', $goods->g_no) }}">
        <div class="goods">
            <div class="img_wrap">
                <?php
                $path = $goods->g_img_path;
                $img = explode('|', $path);
                ?>
                <img src="{{ '/uploads/' . $img[0] }}" alt="상품사진" class="g_img" />
                {{-- <img src="images/icons/heart_off.png" alt="좋아요" class="like" />
            </div>
            <div class="g_content">
                <p class="g_title">{{ $goods->g_title }}</p>
                <p class="g_price">
                    <br>{{ $goods->g_price }}<span class="g_state">{{ $goods->g_status }}</span>
                </p>
                <script>
                    $(document).ready(function() {
                        let time = '{{ $goods->updated_at }}';
                        $('#time_id{{ $goods->g_no }}').text(timeForToday(time));
                    });
                </script>
                <p id="time_id{{ $goods->g_no }}" class="upload_date"></p>
            </div>
        </div>
    </a>
@endforeach --}}


<div class="goods" onclick="location.href='{{route('goods_show')}}'">
    <div class="good_img">
        <div class="img_wrap">
            <img src="images/goods/watch1.jpg" alt="상품사진" class="g_photo">
            <img src="images/icons/heart_off.png" alt="좋아요" class="like">
        </div>
    </div>
    <div class="g_content">
        <div class="g_title_wrap">
            <p class="g_title">데일리 예쁜 여성 손목시계 가나다라마바사아자차카타파</p>
            <p class="g_tag">#미개봉 #테스트 #예쁜시계 #데일리착용시계 #여친선물</p>
        </div>

        <div class="g_state_wrap">
            <p class="g_price">5,000</p>
            <p class="g_state">위탁중</p>
            <p class="upload_date">1시간 전</p>
        </div>
    </div>
</div>

<div class="goods">
    <div class="good_img">
        <div class="img_wrap">
            <img src="images/goods/iphone_case.jpg" alt="상품사진" class="g_photo">
            <img src="images/icons/heart_off.png" alt="좋아요" class="like">
        </div>
    </div>
    <div class="g_content">
        <div class="g_title_wrap">
            <p class="g_title">아이폰 케이스</p>
            {{-- <p class="g_tag">#미개봉 #테스트 #예쁜시계 #데일리착용시계 #여친선물</p> --}}
        </div>

        <div class="g_state_wrap">
            <p class="g_price">6,000</p>
            <p class="g_state">위탁중</p>
            <p class="upload_date">5시간 전</p>
        </div>
    </div>
</div>
