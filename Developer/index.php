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
        <p class="scroll-text"><i></i>TOP</p>
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
        <div class="imgslide-box">
            <img class="imgslide-imgbox" src="image/imgslide/slide1.gif">
            <img class="imgslide-imgbox" src="image/imgslide/slide2.jpeg">
            <img class="imgslide-imgbox" src="image/imgslide/slide3.jpeg">
            <img class="imgslide-imgbox" src="image/imgslide/slide4.jpeg">
        </div>
        <div class="main-imgslide">
            <ul class="imgslide-list">
                <li>
                    <p class="imgslide-top">브랜드명<p>
                    <p class="imgslide-bottom">브랜드 설명<p>
                </li>
                <li>
                    <p class="imgslide-top">브랜드명<p>
                    <p class="imgslide-bottom">브랜드 설명<p>
                </li>
                <li>
                    <p class="imgslide-top">브랜드명<p>
                    <p class="imgslide-bottom">브랜드 설명브랜드 설명브랜드 설명브랜드 설명브랜드 설명브랜드 설명브랜드 설명브랜드 설명<p>
                </li>
                <li>
                    <p class="imgslide-top">브랜드명<p>
                    <p class="imgslide-bottom">브랜드 설명<p>
                </li>
            </ul>
        </div>
    </div>

    <!-- 컨텐츠 구역 -->
    <div id="index-content">
        <div id="best-brandbox">
            <div class="best-brandbox">

                <!-- 베스트 브랜드 타이틀 영역 -->
                <div class="best-textbox">
                    <p class="text-top">Best<strong>Brand</strong></p>
                    <a class="text-bottom" href="#">브랜드 더 보기 ></a>
                </div>

                <!-- 베스트 브랜드 컨텐츠 영역 -->
                <div id="brand-Content">
                    <?php
                    for($i=0;$i<=2;$i++){
                        ?>
                        <div class="brand-Content">
                            <a href="#">
                                <div class="brand-imgBox">
                                    <img src="image/brand/test.jpg">
                                </div>
                                <p class="brand-title">브랜드 타이틀</p>
                                <p class="brand-explan">브랜드 설명</p>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

        <div id="brand-pick">
            <img src="image/brand/test1.png">
        </div>

        <div id="best-product">
            <div class="best-product">
                <!-- 베스트 브랜드 타이틀 영역 -->
                <div id="best_product-textbox">
                    <p class="text-top margin-left">베스트<strong>상품</strong></p>
                    <a class="text-bottom" href="#">센서티브 엠디가<br>자신있게 추천합니다.</a>
                </div>
                <div id="best_product-content">
                    <div class="best_product-content">
                        <a href="#">
                            <div class="product-imgBox">
                                <img src="#">
                            </div>
                            <p class="product-title">상품 타이틀</p>
                            <p class="product-price">상품 가격</p>
                        </a>
                    </div>
                    <div class="best_product-content">
                        <a href="#">
                            <div class="product-imgBox">
                                <img src="#">
                            </div>
                            <p class="product-title">상품 타이틀</p>
                            <p class="product-price">상품 가격</p>
                        </a>
                    </div>
                    <div class="best_product-content">
                        <a href="#">
                            <div class="product-imgBox">
                                <img src="#">
                            </div>
                            <p class="product-title">상품 타이틀</p>
                            <p class="product-price">상품 가격</p>
                        </a>                            
                    </div>
                    <div class="best_product-content">
                        <a href="#">
                            <div class="product-imgBox">
                                <img src="#">
                            </div>
                            <p class="product-title">상품 타이틀</p>
                            <p class="product-price">상품 가격</p>
                        </a>                            
                    </div>
                    <div class="best_product-content">
                        <a href="#">
                            <div class="product-imgBox">
                                <img src="#">
                            </div>
                            <p class="product-title">상품 타이틀</p>
                            <p class="product-price">상품 가격</p>
                        </a>
                    </div>
                    <div class="best_product-content">
                        <a href="#">
                            <div class="product-imgBox">
                                <img src="#">
                            </div>
                            <p class="product-title">상품 타이틀</p>
                            <p class="product-price">상품 가격</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        
        <div id="mood-categorie">
            <ul class="mood-categorie">
                <li>           
                    <div class="mood-whybox">
                        <span>왜그렇게</span>
                        <span>짜쯩이</span>
                        <span>나있어요</span>
                    </div>
                </li>
                <a href="#"><li>
                    <img src="image/brand/test.jpg">
                    <div class="mood-textbox">
                        <p>옷이 너무</p>
                        <p>꺼끌꺼끌해요?</p>
                    </div>
                </li></a>
                <a href="#"><li>
                    <img src="#">
                    <div class="mood-textbox">
                        <p>잠을</p>
                        <p>설쳤다구요?</p>
                    </div>
                </li></a>
                <a href="#"><li>
                    <img src="#">
                    <div class="mood-textbox">
                        <p>몸도 안 좋구?</p>
                    </div>
                </li></a>
                <a href="#"><li>
                    <img src="#">
                    <div class="mood-textbox">
                        <p>아무것도 위로가</p>
                        <p>되지 않아요?</p>
                    </div>
                </li></a>
            </ul>
        </div>

        <div id="day-recommen">

        </div>
    </div>

    <!-- 푸터 영역 -->
    <footer>
        <div class="footer-top">
            <ul class="company-list">
                <li><a href="#">회사 소개</a></li>
                <li><a href="#">이용약관</a></li>
                <li><a href="#">개인정보 처리방침</a></li>
            </ul>
        </div>
    </footer>
    <script>
        const windowTop = document.querySelector("#scroll-top");

        windowTop.addEventListener("click",function(){
            window.scrollTo(0,0);
        })
    </script>
    <script>
        slideAnimation();
        function slideAnimation(){
            const slideBox = document.querySelector(".imgslide-box");
            const slideTextBox =document.querySelectorAll(".imgslide-list li");
            
            let now = 0; // 첫번째 값
            var imgcount = slideTextBox.length-1; // 마지막 값

            slideTextBox.forEach((el,index)=>{
                 el.addEventListener("click",function(){  
                    clickAnimate(index);
                 })  
            })
            function clickAnimate(index){
                now = index;
                startAnimate();
            }
            setInterval(() => {
                now = now > 2 ? 0 : now+1;
                startAnimate();
            }, 5000);

            function startAnimate(){
                slideBox.style.transform=`translateX(-${25*now}%)`;
            }
        }
    </script>
</body>
</html>