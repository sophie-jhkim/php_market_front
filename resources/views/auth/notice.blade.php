@extends('layouts.footer_layout')
@section('content')
    <link rel="stylesheet" href="/css/auth/notice.css">

    <div class="notice_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        <p>공지사항</p>
    </div>
    <div class="body_wrap">

        <div class="notice_wrap">

            <div class="title_wrap">
                <div class="n_title">아이유마켓 오픈기념 이벤트</div>
                <div><img src="../images/icons/pin2.png" alt=""></div>
            </div>
            <div class="con_wrap">안녕하세요. 아이유마켓입니다.
오픈기념으로 2021년 4월 1일 가입자부터 선착순 1000분께 마우스패드를 드립니다.
많이 참여해주세요.</div>
            <div class="n_info_wrap">
                <p class="uploader">아이유마켓 관리자</p>
                <p class="upload_d">2020-03-20</p>
            </div>
        </div>

        <div class="notice_wrap">
            <div class="title_wrap">
                <div class="n_title">중고 거래 사기 예방법</div>
            </div>
            <div class="con_wrap"><img src="../images/etc/notice1.jpg" alt="중고거래 사기 예방법">
            </div>


        </div>
    </div>

@endsection
