<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="/css/norm_mypage/prof_update.css">
    <title>프로필 수정</title>
</head>

<body>
    <div class="mypage_update_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline" class="back"></ion-icon>
        </a>
        <p>프로필 수정</p>
    </div>
    <form action="" method="POST">
        <div class="update_container">
            <div class="img_update_wrap">
                <div class="img_wrap">
                    <img src="/images/client/accessory.jpg" alt="프로필 사진">
                </div>
                <label for="input-file" class="btn_file">
                    <input type="file" name="" id="input-file" style="display: none">
                    <ion-icon name="camera-outline"></ion-icon>
                </label>

            </div>
            <div class="nick_wrap">
                <input type="text" value="아이유마켓">
                <p>닉네임 10자 이하</p>
            </div>
        </div>


    </form>

</body>

</html>
