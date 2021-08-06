@extends('layouts.app_layout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/goods/hangjungdong.js"></script>
<script src="/js/goods/goods.js"></script>
{{-- <script src="/js/goods/sns_time.js"></script> --}}
<link rel="stylesheet" href="/css/goods/goods_list.css">

{{-- @section('header') @include('components.header')
@endsection --}}

@section('content')
<section class="choose" id="choose">
    <select id="sido">
        <option value="">선택</option>
    </select>
    <select id="sigugun">
        <option value="">선택</option>
    </select>
    <select id="dong">
        <option value="">선택</option>
    </select>
</section>

<section class="map_wrap">
    <div id="mapview" class="map"><img src="/images/etc/largemap.jpg" alt="지도"></div>
    <input type="button" value="지도 보기" class="btn_map" id="btn_map">
    <input type="hidden" value="상품보기" id="btn_map_hid">
</section>

<div class="ad">
    <div class="ad_img_wrap"><img src="/images/etc/covid.png" alt="광고사진"></div>
    <p>코로나19 확산 방지를 위한<br>방역수칙을 꼭 지켜주세요!</p>
    <div class="ad_mark">AD</div>
</div>


<div class="goods_container">
    <div class="goods_list">
        @include('goods.modal.goods_list_modal')
    </div>
</div>


<form method="post" action="" name="direct_frm">
    @csrf
    <input type="hidden" name="ex_addr_tr" id="ex_addr_tr">
    <input type="hidden" name="ex_lo_la_tr" id="ex_lo_la_tr">
</form>

<script type="text/javascript" src="/js/goods/goods_maps.js"></script>
@endsection
