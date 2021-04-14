@extends('layouts.footer_layout')
@section('content')
<link rel="stylesheet" href="/css/auth/cs.css">
<script>
    $(document).ready(function(){
        $('.fa_btn_wrap>input').on("click", function(){
            $(this).addClass('on').siblings().removeClass('on');
        });

        $('.fa_qna_wrap .question').on("click", function(){
            $(this).toggleClass('on').siblings().removeClass('on');
        });
    })
</script>

<div class="cs_header">
    <a href="javascript:history.back();">
        <ion-icon name="arrow-back-outline"></ion-icon>
    </a>
    <p>고객센터</p>
</div>

<div class="cs_wrap">
    <div class="notice_wrap">
        <p class="cs_num">5251-9632</p>
        <p class="cs_time">MON - FRI / PM 13:00 ~ PM 18:00<br>
            SAT, SUN, HOLIDAY CLOSED</p>
    </div>
    <div class="fa_wrap">
        <p>자주 묻는 질문</p>
        <div class="fa_btn_wrap">

            <input type="button" value="상점/상품" class="on">
            <input type="button" value="거래">
            <input type="button" value="포인트">

            <input type="button" value="회원정보(계정)">
            <input type="button" value="택배서비스">
            <input type="button" value="제재정책">

            <input type="button" value="광고서비스">
            <input type="button" value="판매팁">
            <input type="button" value="구매팁">

        </div>
        <div class="fa_qna_wrap">
            <div class="question">
                <div class="q_wrap">
                    <p>Q. 위탁은 어떻게 하나요?</p>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="a_wrap">
                    <p class="answer">판매글을 게시 후 구매자가 나타나면 마이페이지·판매 상품·거래소 버튼을 통해 거래소 지정 후 위탁하시면 됩니다.</p>
                </div>
            </div>
            <div class="question">
                <div class="q_wrap">
                    <p>Q. 상품판매는 어떻게 하나요?</p>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="a_wrap">
                    <p class="answer">판매글을 게시 후 구매자가 나타나면 마이페이지·판매 상품·거래소 버튼을 통해 거래소 지정 후 위탁하시면 됩니다.</p>
                </div>
            </div>
            <div class="question">
                <div class="q_wrap">
                    <p>Q. 상품 수정/삭제는 어떻게 하나요?</p>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="a_wrap">
                    <p class="answer">판매글을 게시 후 구매자가 나타나면 마이페이지·판매 상품·거래소 버튼을 통해 거래소 지정 후 위탁하시면 됩니다.</p>
                </div>
            </div>
            <div class="question">
                <div class="q_wrap">
                    <p>Q. 내 글이 삭제처리 됐어요</p>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="a_wrap">
                    <p class="answer">판매글을 게시 후 구매자가 나타나면 마이페이지·판매 상품·거래소 버튼을 통해 거래소 지정 후 위탁하시면 됩니다.</p>
                </div>
            </div>
            <div class="question">
                <div class="q_wrap">
                    <p>Q. 거래소 수정은 어떻게 하나요?</p>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="a_wrap">
                    <p class="answer">판매글을 게시 후 구매자가 나타나면 마이페이지·판매 상품·거래소 버튼을 통해 거래소 지정 후 위탁하시면 됩니다.</p>
                </div>
            </div>
            <div class="question">
                <div class="q_wrap">
                    <p>Q. 찜은 무엇이고 어떻게 하나요?</p>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </div>
                <div class="a_wrap">
                    <p class="answer">판매글을 게시 후 구매자가 나타나면 마이페이지·판매 상품·거래소 버튼을 통해 거래소 지정 후 위탁하시면 됩니다.</p>
                </div>
            </div>


        </div>


    </div>

</div>


@endsection
