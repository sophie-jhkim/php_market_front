@extends('layouts.footer_layout')
@section('content')
    <link rel="stylesheet" href="/css/norm_mypage/point_show.css">
    <link rel="stylesheet" href="/css/goods/datepicker.css">
    <script src="/js/norm_mypage/point_show.js"></script>
    <title>포인트 내역</title>
</head>

<body>
    <div class="point_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        <p>포인트</p>
    </div>
    <div class="point_content_wrap">
        <div class="point_info_wrap">
            <div class="icon_wrap"><img src="/images/icons/mileage.png" alt="아이콘"></div>
            <div class="total_point">
                <div>10,000</div>
                <div>출금가능 포인트 <p>10,000</p>
                </div>
            </div>
            <div>
                <input type="button" value="출금하기">
            </div>
        </div>

        <section>
            <div class="period_btn_wrap">
                <input type="button" value="7일">
                <input type="button" value="1개월" class="on">
                <input type="button" value="3개월">
                <input type="button" value="6개월">
                <input type="button" value="1년">
            </div>
            <div class="period_wrap">
                <div class="date_from">
                    <input type="text"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        id="datePick_from" readonly>
                    {{-- <ion-icon name="calendar-outline" id="from_icon"></ion-icon> --}}
                </div>
                ~<div class="date_to">
                    <input type="text"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        id="datePick_to" readonly>
                    {{-- <ion-icon name="calendar-outline" id="to_icon"></ion-icon> --}}
                </div>
            </div>


        </section>
        <section class="point_detail_wrap">
            <ul>
                <li>
                    <div>02-27</div>
                    <div><div><img src="/images/icons/mileage.png" alt="아이콘"></div><p>수수료 5,000p</p></div>
                    <div class="io">입금</div>
                </li>
                <li>
                    <div></div>
                    <div><div><img src="/images/icons/mileage.png" alt="아이콘"></div><p>수수료 3,000p</p></div>
                    <div class="io">입금</div>
                </li>
                <li>
                    <div></div>
                    <div><div><img src="/images/icons/mileage.png" alt="아이콘"></div><p>수수료 2,000p</p></div>
                    <div class="io">입금</div>
                </li>
                <li>
                    <div>02-26</div>
                    <div><div><img src="/images/icons/mileage.png" alt="아이콘"></div><p>3,000p</p></div>
                    <div class="io on">출금</div>
                </li>
            </ul>
        </section>
    </div>


@endsection
