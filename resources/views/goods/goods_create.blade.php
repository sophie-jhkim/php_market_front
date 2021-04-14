@extends('layouts.footer_layout')
@section('content')
    <script src="/js/goods/goods_create.js"></script>
    <link rel="stylesheet" href="/css/goods/goods_create.css">
    {{-- <div class="map_wrap">
        <div id="mapview" class="map"></div>
    </div> --}}

    <div class="write_header">
        <div id="title_back">
            <a href="javascript:void(0)" onclick="create_close()" id="original_close" class="write_back">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </a>
        </div>
        <div id="title_text">글쓰기</div>
        <div id="blank"></div>
    </div>

    <form action="" method="POST" id="writeForm" name="writeForm">
        <div class="write_wrap">
            <div class="write_img_wrap">
                <div class="img_upload">
                    <label for="image" class="btn_file">
                        <input type="file" name="image[]" id="image" class="form-control" onchange="setThumbnail(event);"
                            accept=".jpg, .gif, .png, .jpeg" multiple />
                        <img src="/images/icons/default_img.png" alt="미리보기">
                    </label>
                </div>
                <ul id="photo_slider" class="photo_slider"></ul>
            </div>
            <input type="text" placeholder="제목" name="g_title" id="g_title" class="g_title">
            <div class="cate_wrap">
                <select name="g_category" id="g_category" class="g_category">
                    <option value="">카테고리</option>
                    <option value="의류">의류</option>
                    <option value="잡화">잡화</option>
                    <option value="가전">가전</option>
                    <option value="디지털">디지털</option>
                    <option value="반려용품">반려용품</option>
                    <option value="도서, 음반">도서, 음반</option>
                    <option value="게임">게임</option>
                    <option value="취미">취미</option>
                    <option value="레저">레저</option>
                    <option value="유아용품">유아용품</option>
                    <option value="금, 귀금속">금, 귀금속</option>
                    <option value="식물">식물</option>
                    <option value="삽니다">삽니다</option>
                </select>
            </div>
            <div class="filter_wrap">
                <input type="text" placeholder="필터(선택)" name="g_filter" id="filter">
            </div>
            <div class="g_release">
                <input type="button" value="개봉">
                <input type="button" value="개봉 후 미사용">
            </div>
            <input type="text" placeholder="제조사" name="g_brand" class="g_brand" id="g_brand">

            <div class="buy_day_wrap">
                <div>구매일</div>
                <div class="jquery-datepicker">
                    <input type="text" placeholder="날짜를 선택해주세요" class="jquery-datepicker__input" id="datePicker"
                        name="g_buy_day" onchange="chk()" readonly="readonly">
                    <label for=""><input type="checkbox" value="idk" id="idk">기억안남</label>
                </div>
            </div>
            <div class="g_size_wrap">
                <div>크기</div>
                <div class="g_size">
                    <input type="text" placeholder="가로 cm" id="width"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    <input type="text" placeholder="세로 cm" id="height"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                    <input type="text" placeholder="높이 cm" id="depth"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
            </div>
            <div class="g_price_wrap">
                <input type="text" placeholder="가격" name="g_price" class="g_price" id="g_price"
                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                {{-- <?php if ($ex_addr_tr == null && $ex_lo_la_tr == null) { ?>
                <input type="button" id="g_trade1" value="네고 가능해요!" class="btn_nego">
                <input type="hidden" id="trade1" value="네고불가">
                <?php } else { ?> --}}
                <input type="button" id="g_trade1" value="네고 가능해요!" class="btn_nego">
                <input type="hidden" id="trade1" value="네고불가">
                {{-- <?php } ?> --}}
            </div>
            <div class="g_location_wrap">
                {{-- <?php if ($ex_addr_tr != null || $ex_addr_tr != '') { ?>
                <input type="text" placeholder="거래소 위치 지정" id="ex" class="ex_lo_la" value="{{ $ex_addr_tr }}"
                    readonly="readonly">
                <img src="/images/transaction.png" alt="" onclick="maps()">
                <?php } else { ?> --}}
                <input type="text" placeholder="거래소 위치 지정" id="ex" class="ex_lo_la" readonly="readonly">
                <img src="/images/icons/transaction.png" alt="" onclick="maps()">
                {{-- <?php } ?> --}}

                <input type="button" id="g_trade2" value="직거래 가능해요!" class="btn_direct">
                <input type="hidden" id="trade2" value="직거래불가">
            </div>

            <textarea name="g_content" id="g_content" cols="30" rows="10" placeholder="자세한 설명을 적어주세요!"
                class="g_content"></textarea>
            <label for="" class="chk_agree"><input type="checkbox" value="agree" id="chk_agree">위 내용이 사실과 다를 경우, 그에 따른 책임은
                판매자에게 있습니다</label>

        </div>
        <div class="write_footer">
            <input type="button" id="sub" class="submit" value="글 올리기" onclick="writeNullChk()">
        </div>
    </form>
@endsection
