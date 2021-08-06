@extends('layouts.footer_layout')
@section('content')
<link rel="stylesheet" href="/css/norm_mypage/info_update.css">
<div class="info_update_header">
    <a href="javascript:history.back();">
        <ion-icon name="arrow-back-outline"></ion-icon>
    </a>
    <p>개인정보 수정</p>
</div>

<div class="info_update_wrap">
    <form action="" method="POST">
        <ul>
            <li>이름</li>
            <li>전화번호</li>
            <li>이메일</li>
            <li>닉네임</li>
        </ul>
{{--
        $email = $user->u_email;
        $emailcut = explode('@', $email); --}}


        <ul>
            <li><input type="text" name="" id="u_name" value="홍길동"></li>
            <li><input type="text" name="" id="u_phone" readonly value="010-1234-5678"></li>
            <li class="email_wrap">
                <input type="text" class="u_email1" id="u_email1" value="youwillstay">@
                <select id="u_email2" name="u_email2" class="u_email2">
                    <option value="naver.com" >naver.com</option>
                    <option value="hanmail.net">hanmail.net</option>
                    <option value="google.com">google.com</option>
                    <option value="daum.net" >daum.net</option>
                    <option value="nate.com">nate.com</option>
                </select>
                <input type="button" value="중복확인" class="email_chk">
            </li>
            <li class="nick_wrap">
                <input type="text" class="u_nick" id="u_nick" value="서윗심바">
                <input type="button" value="중복확인" class="nick_chk">
            </li>
        </ul>
    </form>

</div>
@endsection
