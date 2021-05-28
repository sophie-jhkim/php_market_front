<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/636dff72e8.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script>
        document.documentElement.className = document.documentElement.className.replace("no-js", "js");

    </script>
    <script src="/js/auth/login.js"></script>
    <link href="/css/auth/join.css" rel="stylesheet" />
    <title>회원가입</title>
    <auth-session-status class="mb-4" :status="session('status')" />
</head>

<body>
{{-- <div class="register_header">
    <a href="#"><i class="fas fa-chevron-left"></i></a>
    <h2>회원가입</h2>
</div> --}}
{{-- <ul id="progressbar">
        <li class="active">약관 동의</li>
        <li>개인 정보</li>
        <li>관심 카테고리</li>
    </ul> --}}
<div class="register_header">
    <a href="javascript:history.back();"><i class="fas fa-chevron-left"></i></a>
    <h2>회원가입</h2>
</div>
<form action="#" name="joinForm" method="POST" id="joinForm">
    @csrf
    <fieldset>
        <div class="checkBox">
            <h3>이용약관</h3>
            <label class="chkAll"><input type="checkbox" id="chkAll">iyoumarket의 모든 약관을 확인하고
                동의합니다.</label> <br>
            <label><input type="checkbox" value="terms" name="terms" class="policy"> <span>(필수)</span> 이용약관
                <a href="#">전체보기
                    ＞</a></label>
            <div>
                <span>제1조(목적)</span><br><br>
                표준약관 제 10023호<br><br>
                본 약관은 iyoumarket회사(이하 "회사"라 합니다)가 운영하는 iyoumarket 사이버앱(이하 "앱"이라 합니다)에서 제공하는
                인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 회사와 그 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.<br><br>
                <span>제2조(약관의 게시와 개정)</span><br><br>
                회사는 본 약관의 내용을 회원이 쉽게 확인할 수 있도록 기술적 조치를 취합니다.
                회사는 콘텐츠산업진흥법, 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제에 관한 법률, 소비자기본법 등 관련 법령을 위반하지 않는 범위 내에서 본 약관을 개정할 수
                있습니다.<br>
                회사가 약관을 개정할 경우 기존 약관과 개정 약관 및 개정 약관 적용 일자와 개정 사유를 명시하고 기존 약관과 함께 개정 약관 적용 일자 7일 전부터 적용 일자 이후 상당한 기간
                동안, 개정 약관의 내용이 회원에게 불리한 경우 개정 약관 적용 일자 30일 전부터 적용 일 이후 상당한 기간 동안, 이를 서비스 웹페이지 및 어플리케이션 화면에 게시하거나 기타
                방법으로 회원에게 통지합니다.<br>
                회사가 ‘전항에 따라 회원에게 통지한 후 개정 약관 고지일로부터 개정 약관 시행일 이후 7일이 지나는 날까지 회원이 거부 의사를 표시하지 아니할 경우 회원이 개정 약관에 동의한
                것으로 본다는 뜻’을 고지하였음에도 회원의 거부 의사표시가 없는 경우 개정 약관에 동의한 것으로 간주합니다. 회원이 개정 약관에 동의하지 않을 경우 해당 회원은 서비스 이용 계약을
                해지할 수 있습니다.<br>
                회원은 회사가 제공하는 서비스를 이용함에 있어서 전자상거래 등에서의 소비자보호에 관한 법률, 전자금융거래법, 소비자기본법, 표시∙광고의 공정화에 관한 법률, 정보통신망 이용촉진 및
                정보보호 등에 관한 법률 등 관련 법령을 준수하여야 하며, 본 약관의 규정을 들어 관련법령 위반에 대한 면책을 주장할 수 없습니다.
            </div>
            <label> <input type="checkbox" value="privacy" name="privacy" class="policy"><span>(필수)</span>
                개인정보 취급방침 <a href="#">전체보기
                    ＞</a></label>
            <div>회사는 회원가입, 민원 등 고객상담 처리, 본인확인(14세 미만 아동확인)등 의사소통을 위한 정보 활용 및 이벤트 등과 같은 마케팅용도 활용,
                회원의 서비스 이용에 대한 통계, 이용자들의 개인정보를 통한 서비스 개발을 위해 아래와 같은 개인정보를 수입하고 있습니다
            </div>
            <label class="marketing"><input type="checkbox" value="marketing" id="marketing" class="policy">
                <span>(선택)</span> 마케팅 수신 동의 <a href="#">＞</a></label>
        </div>

        <input type="button" name="next" class="next action-button" value="다음" />

    </fieldset>

    <fieldset>
        <div class="join_table">
            <h3>개인정보</h3>
            <div class="form_title">
                <ul>
                    <li>이름</li>
                    <li>핸드폰번호</li>
                    <li>e-mail</li>
                    <li>닉네임</li>
                </ul>
            </div>
            <div class="form_insert">
                <ul>
                    <li><input type="text" class="u_name" name="u_name" id="u_name"></li>
                    <li><input type="text" id="u_phone" class="u_phone" name="u_phone" readonly></li>
                    <li class="email">
                        <input type="text" class="u_email1" id="u_email1"> @
                        <select id="u_email2" class="u_email2">
                            <option value="naver.com">naver.com</option>
                            <option value="hanmail.net">hanmail.net</option>
                            <option value="gmail.com">gmail.com</option>
                            <option value="daum.net">daum.net</option>
                            <option value="nate.com">nate.com</option>
                        </select>
                        <input type="button" value="중복확인" class="email_chk">
                    </li>
                    <li class="nickname">
                        <input type="text" class="u_nick" name="u_nick" placeholder="6자" id="u_nick">
                        <input type="button" value="중복확인" class="nick_chk">

                    </li>
                </ul>
            </div>
        </div>
        <div class="radio_wrap">
            <h3>관심 카테고리(선택)</h3>
            <div class="r_wrap">
                <div class="interest">
                    <input type="checkbox" name="u_interest" value="의류">의류<br>
                    <input type="checkbox" name="u_interest" value="잡화">잡화<br>
                    <input type="checkbox" name="u_interest" value="취미">취미<br>
                    <input type="checkbox" name="u_interest" value="게임">게임
                </div>
                <div class="interest">
                    <input type="checkbox" name="u_interest" value="디지털">디지털<br>
                    <input type="checkbox" name="u_interest" value="가전">가전<br>
                    <input type="checkbox" name="u_interest" value="레저">레저<br>
                    <input type="checkbox" name="u_interest" value="식물">식물
                </div>
                <div class="interest inter3">
                    <input type="checkbox" name="u_interest" value="반려용품">반려용품<br>
                    <input type="checkbox" name="u_interest" value="도서, 음반">도서, 음반<br>
                    <input type="checkbox" name="u_interest" value="금, 귀금속">금, 귀금속<br>
                    <input type="checkbox" name="u_interest" value="유아용품">유아용품
                </div>
            </div>
        </div>

        <input type="button" value="회원가입" class="submit">
    </fieldset>
</form>

<script src="/js/auth/join.js"></script>


</body>

</html>




