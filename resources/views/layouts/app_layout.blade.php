<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="IyouMarket">
    <meta property="og:url" content="https://iyoumarket.tk">
    <meta property="og:image:width" content="800" />
    <meta property="og:image:height" content="400" />
    <meta property="og:image" content="/images/logo/og_marketLogo.jpg">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    {{-- <script src="https://js.pusher.com/7.0/pusher.min.js"></script>  채팅푸셔--}}
    <script type="text/javascript" src="https://dapi.kakao.com/v2/maps/sdk.js?appkey=8fc7c4118b19f9beb62f4c16c595a5c6&libraries=services"></script>
</head>

<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')

</body>

</html>
