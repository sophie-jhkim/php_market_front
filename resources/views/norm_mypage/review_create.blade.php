<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/css/norm_mypage/review.css">
    <script>
        $(document).ready(function() {
            $('.profile_wrap>button').on("click", function() {
                $(this).addClass('on').siblings().removeClass('on');
                console.log($(this).val());
            });

            $('.review_wrap>input').click(function(){
                $(this).toggleClass('on');
                console.log($(this).val());
            })
        })

    </script>

    <title>리뷰 쓰기</title>
</head>

<body>
    <div class="review_header">
        <a href="javascript:history.back();">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        <p>리뷰 쓰기</p>
    </div>

    <form action="" method="">

        <section class="profile_wrap">
            <button type="button" value="판매자">
                <div class="profile_img_wrap"><img src="/images/client/june.jpg" alt="판매자 프로필"></div>
                <div>
                    <p>또또</p>
                </div>
            </button>
            <button type="button" value="거래소">
                <div class="profile_img_wrap"><img src="/images/client/accessory.jpg" alt="거래소 프로필"></div>
                <div>
                    <p>IYOU</p>
                </div>
            </button>
        </section>
        <section>
            <div class="review_wrap">
                <input type="button" value="소통이 잘 돼요" class="re1">
                <input type="button" value="친절해요" class="re2">
                <input type="button" value="답장이 빨라요" class="re3">
                <input type="button" value="신뢰도가 높아요" class="re4">
            </div>
        </section>
        <section>
            <div class="con_wrap">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
        </section>

        <section>
            <input type="submit" value="리뷰 보내기">
        </section>


    </form>



</body>

</html>
