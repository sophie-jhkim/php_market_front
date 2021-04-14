<script src="/js/components/footer.js"></script>
<link rel="stylesheet" href="/css/components/footer.css">
<footer>
    <div class="addEvent"></div>
    <ul class="tab_wrap">
        <li class="goodss on"><a href="{{route('index')}}"><ion-icon name="home"></ion-icon>
                <p>홈</p>
            </a></li>
        <li class="goods_create"><a href="{{route('goods_create')}}"><ion-icon name="receipt"></ion-icon>
                <p>글쓰기</p>
            </a></li>
        <li class="chat_list"><a href="{{route('chat_index')}}"><ion-icon name="chatbubbles"></ion-icon>
                <p>채팅</p>
            </a></li>
        <li class="mypage"><a href="{{route('mypage_index')}}"><ion-icon name="person"></ion-icon>
                <p>마이페이지</p>
            </a></li>
    </ul>
</footer>
