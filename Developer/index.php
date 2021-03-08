<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>Sensetive</title>
    <link rel="icon" type="image/png" sizes="48x48" href="image/icon/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- Top(탑) 기능 -->
    <div id="scroll-top">
        <p class="scroll-text">TOP</p>
    </div>

    <!-- 모달 박스 -->
    <div id ="modal-box">
        <div id=""></div>
    </div>

    <!-- 메뉴바 및 로고  -->
    <header>
        <ul id="user-list">
            <li><a href="">로그인/회원가입</a></li>
            <li><a href="">주문/배송</a></li>
            <li><a href="">장바구니</a></li>
        </ul>
        <nav>
            <a class="logobox" href="#"><img src="image/sensitive_logo.png"></a>
            <ul id="menu-list">
                <li><a href="">디자인가전</a></li>
                <li><a href="">가구/수납</a></li>
                <li><a href="">패브릭/생활</a></li>
                <li><a href="">데코/조명</a></li>
                <li><a href="">패션의류</a></li>                                                                                                                          </li>
                <li><a href="">뷰티</a></li>
            </ul>
            <form class="search-box">
                <input type="text" placeholder="검색창" class="search-text">
            </form>
        </nav>
    </header>
    
    <!-- 이미지 슬라이드 구역 -->
    <div id="main-imgslide">
    </div>

    <!-- 컨텐츠 구역 -->
    <div id="index-content">
        <div id="best-brandbox">
            <p>Best Brand</p>
            <a href="#">브랜드 더보기 ></a>
            <div class="brand-Content">
                <div class="brand-imgBox">
                    <img src="#">
                </div>
                <p>브랜드 타이틀</p>
                <p>브랜드 설명</p>
            </div>
        </div>
    </div>

    <!-- 푸터 영역 -->
    <footer></footer>
    <script>
        const windowTop = document.querySelector("#scroll-top");

        windowTop.addEventListener("click",function(){
            window.scrollTo(0,0);
        })
    </script>
</body>
</html>