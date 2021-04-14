<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="/css/info_update.css">

    <title>개인정보 수정</title>
</head>

<body>
    <div class="info_update_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline" class="back"></ion-icon>
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
            <ul>
                <li><input type="text" name="" id="u_name"></li>
                <li><input type="text" name="" id="u_phone" readonly></li>
                <li class="email_wrap">
                    <input type="text" class="u_email1" id="u_email1">@
                    <select id="u_email2" name="u_email2" class="u_email2">
                        <option value="naver.com">naver.com</option>
                        <option value="hanmail.net">hanmail.net</option>
                        <option value="google.com">google.com</option>
                        <option value="daum.net">daum.net</option>
                        <option value="nate.com">nate.com</option>
                    </select>
                    <input type="button" value="중복확인" class="email_chk">
                </li>
                <li class="nick_wrap">
                    <input type="text" class="u_nick" id="u_nick">
                    <input type="button" value="중복확인" class="nick_chk">
                </li>
            </ul>
        </form>

    </div>



</body>

</html>
