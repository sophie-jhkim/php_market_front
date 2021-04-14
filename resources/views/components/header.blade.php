<link rel="stylesheet" href="css/components/header.css">
<link rel="stylesheet" href="css/components/nav_filter.css">
<script src="/js/components/header.js"></script>
<header>
    <form action="" method="">
        <ul class="util">
            <li class="filter_icon">
                <ion-icon name="grid"></ion-icon>
                {{-- <img src="images/icons/filter.png" alt="필터"> --}}
            </li>
            <li class="middle">
                <input type="text" class="search" name="search" id="search">
                <ion-icon name="search" class="search_icon"></ion-icon>
                {{-- <img src="images/icons/search_2.png" alt="찾기" class="search_icon"> --}}
            </li>
            <li class="alarm"><a href="#">
                <ion-icon name="notifications"></ion-icon>
                {{-- <img src="images/icons/alarm.png" alt="알람"> --}}
            </a></li>
        </ul>
    </form>
</header>

<div class="filter_bg"></div>

<aside class="filter">

    <div class="filter_header">
        <p><img src="/images/icons/logo_1.png" alt="로고"></p>
          <ion-icon name="chevron-forward-outline" class="filter_close"></ion-icon>
    </div>
    <form action="" method="POST" name="filterForm" class="filterForm">
    <div class="category_wrap">
        <div class="cate_subt"><p>카테고리</p><button type="reset" class="reset"><ion-icon name="refresh-circle-outline"></ion-icon></button></div>

        <div class="cate_sorting">
            <input type="button" value="가전">
            <input type="button" value="게임, 취미">
            <input type="button" value="굿즈">
            <input type="button" value="금/귀금속">
            <input type="button" value="도서, 음반">
            <input type="button" value="디지털">
            <input type="button" value="레저">
            <input type="button" value="반려용품">
            <input type="button" value="식물">
            <input type="button" value="유아용품">
            <input type="button" value="의류">
            <input type="button" value="잡화">
            <input type="button" value="삽니다">
            <input type="hidden" value="" id="hidden_category">
        </div>
    </div>

    <div class="list_sorting">
        <p>정렬</p>
        <label><input type="radio" name="list_sort" value="updated_at|desc">최신순</label>
        <label><input type="radio" name="list_sort" value="g_brand|desc">판매중</label><br>
        <label><input type="radio" name="list_sort" value="g_price|asc">낮은 가격순</label>
        <label><input type="radio" name="list_sort" value="g_price|desc">높은 가격순</label>
    </div>

    <div class="ect_sorting">
        <p>기타</p>
        <label><input type="radio" name="ect_sort" value="g_release|개봉">개봉</label>
        <label><input type="radio" name="ect_sort" value="g_release|미개봉">미개봉</label>
        <label><input type="radio" name="ect_sort" value="g_brand|undefined">제조사</label>
    </div>
</form>
</aside>

