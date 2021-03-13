<<<<<<< HEAD
<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sensetive</title>
    
    <link rel="icon" type="image/png" sizes="48x48" href="image/icon/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- 헤더 영역 -->
    <?php include "module/header.php" ?>

    <!-- 메인 이미지 영역 -->
    <div id="main__imgbox">
        <div class="imgbox__textbox layout--width">
            <p class="imgbox__textleft"><strong>DISCOVER & SHOP</strong><br>THE SENSETIVE</p>
        </div>
    </div>

    <div id="main__pick">
        <div class="main__pick layout--width row-box">
            <div class="pick__product--text"><strong class="title--color--first">TODAY'S PICK</strong><br><a href="#">브랜드 더보기 ></a></div>
            <ul class="pick__product--box row-box">
                <?php
                for($i=1; $i<=3; $i++){
                ?>
                <li class="pick__product--list">
                    <a href="#" class="col-box">
                        <div class="pick__productlist--img">
                            <img src="image/product/today_pick<?=$i ?>.jpg">
                        </div>
                        <div class="pick__productlist--text col-box">
                            <strong class="title--color--two">상품 타이틀</strong>
                            <p>상품 가격</p>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <div id="main__content--box" class="col-box">
        <div id="main__content--first" class="row-box">
            <div id="main--first__leftbox" class="half--width">
                <a href="#"><img src="image/brand/main_brand1.jpg" class="img--fill pist-absolute"></a>
                <div id="main__firstleft--text" class="pist-absolute col-box">
                    <span>
                        <strong class="title--color--three">DEEP SLEEP</strong>
                        <p class="title--color--fourth">브랜드 설명글</p>
                    </span>
                </div>
            </div>
            <div id="main--first__right" class="half--width">
                <ul id="main__firstright--box" class="row-box width--height">
                    <li class="brand--list half--width row-box">
                        <span class="half--width">
                            <strong class="title--color--three">LAMP</strong>
                            <p class="title--color--fourth">브랜드 설명글</p>
                        </span>  
                    </li>
                    <li class="brand--list half--width">
                        <div class="brand--list__imgbox">
                            <a href="#"><img src="image/brand/main_brand2.jpg" class="img--fill"></a>
                        </div>
                    </li>
                    <li class="brand--list half--width">
                        <div class="brand--list__imgbox">
                            <a href="#"><img src="image/brand/main_brand3.jpg" class="img--fill"></a>
                        </div>
                    </li>
                    <li class="brand--list half--width row-box">
                        <span class="half--width">
                            <strong class="title--color--three">AROMA</strong>
                            <p class="title--color--fourth">브랜드 설명글</p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main__content--two">
            <div id="main__second--box" class="row-box">
                <div id="main--second__left" class="product--width">
                    <ul id="main__secondleft--box" class="row-box width--height">
                        <li class="product--list row-box">
                            <div id="product--listtext--title" class="width--height">
                                <h1>
                                    <p>센세티브 MD가<br>추천합니다</p>
                                    <span class="title--color--first">베스트 <strong>상품</strong></span>
                                </h1>
                            </div>
                        </li>
                        <?php
                        for($i=1; $i<=3;$i++){
                        ?>
                        <li class="product--list row-box">
                            <a href="#" class="col-box">
                                <div class="product__imgbox">
                                    <img src="image/product/best_product<?=$i ?>.jpg">
                                </div>
                                <div class="product__list--text col-box">
                                    <strong class="title--color--two">상품 타이틀</strong>
                                    <p>상품 가격</p>
                                </div>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
    
                </div>
                <div id="main--second__right" class="product--width">
                    <a href="#"><img src="image/product/best_product4.jpg" class="img--fill pist-absolute"></a>
                    <div id="main__secondright--text" class="pist-absolute col-box">
                        <div class="product__right--text col-box">
                            <strong class="title--color--two">상품 타이틀</strong>
                            <p>상품 가격</p>
                        </div>
                    </div>
                </div> 
                               
            </div>
        </div>

        <div id="main__content--three">
            <div id="main--three__box" class="layout--width row-box">
                <div id="main--three__productview--left">
                    <div id="main__threeview--title">
                        <p>다른 사람들은</p>
                        <strong>지금 이 상품을<br>보고 있어요</strong>
                    </div>
                </div>
                <ul id="main--three__productview--right" class="row-box">
                    <?php
                    for($i=1; $i<=3; $i++){
                    ?>
                    <li class="view__product--list">
                        <a href="#" class="col-box">
                            <div class="view__productlist--img">
                                <img src="image/product/customer<?=$i ?>.jpg">
                            </div>
                            <div class="view__productlist--text col-box">
                                <strong class="title--color--two">상품 타이틀</strong>
                            </div>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include "module/footer.php" ?>

    <script src="js/common.js"></script>
    <script>
    
    </script>
</body>
=======
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
    <!-- 헤더 영역 -->
    <?php include "module/header.php" ?>

    <!-- 메인 이미지 영역 -->
    <div id="main__imgbox">
        <div class="imgbox__textbox layout--width">
            <p class="imgbox__textleft"><strong>DISCOVER & SHOP</strong><br>THE SENSETIVE</p>
        </div>
    </div>

    <div id="main__pick">
        <div class="main__pick layout--width row-box">
            <div class="pick__product--text"><strong class="title--color--first">TODAY'S PICK</strong><br><a href="#">브랜드 더보기 ></a></div>
            <ul class="pick__product--box row-box">
                <?php
                for($i=1; $i<=3; $i++){
                ?>
                <li class="pick__product--list">
                    <a href="#" class="col-box">
                        <div class="pick__productlist--img">
                            <img src="image/product/today_pick<?=$i ?>.jpg">
                        </div>
                        <div class="pick__productlist--text col-box">
                            <strong class="title--color--two">상품 타이틀</strong>
                            <p>상품 가격</p>
                        </div>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <div id="main__content--box" class="col-box">
        <div id="main__content--first" class="row-box">
            <div id="main--first__leftbox" class="half--width">
                <a href="#"><img src="image/brand/main_brand1.jpg" class="img--fill pist-absolute"></a>
                <div id="main__firstleft--text" class="pist-absolute col-box">
                    <span>
                        <strong class="title--color--three">DEEP SLEEP</strong>
                        <p class="title--color--fourth">브랜드 설명글</p>
                    </span>
                </div>
            </div>
            <div id="main--first__right" class="half--width">
                <ul id="main__firstright--box" class="row-box width--height">
                    <li class="brand--list half--width row-box">
                        <span class="half--width">
                            <strong class="title--color--three">LAMP</strong>
                            <p class="title--color--fourth">브랜드 설명글</p>
                        </span>  
                    </li>
                    <li class="brand--list half--width">
                        <div class="brand--list__imgbox">
                            <a href="#"><img src="image/brand/main_brand2.jpg" class="img--fill"></a>
                        </div>
                    </li>
                    <li class="brand--list half--width">
                        <div class="brand--list__imgbox">
                            <a href="#"><img src="image/brand/main_brand3.jpg" class="img--fill"></a>
                        </div>
                    </li>
                    <li class="brand--list half--width row-box">
                        <span class="half--width">
                            <strong class="title--color--three">AROMA</strong>
                            <p class="title--color--fourth">브랜드 설명글</p>
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div id="main__content--two">
            <div id="main__second--box" class="row-box">
                <div id="main--second__left" class="product--width">
                    <ul id="main__secondleft--box" class="row-box width--height">
                        <li class="product--list row-box">
                            <div id="product--listtext--title" class="width--height">
                                <h1>
                                    <p>센세티브 MD가<br>추천합니다</p>
                                    <span class="title--color--first">베스트 <strong>상품</strong></span>
                                </h1>
                            </div>
                        </li>
                        <?php
                        for($i=1; $i<=3;$i++){
                        ?>
                        <li class="product--list row-box">
                            <a href="#" class="col-box">
                                <div class="product__imgbox">
                                    <img src="image/product/best_product<?=$i ?>.jpg">
                                </div>
                                <div class="product__list--text col-box">
                                    <strong class="title--color--two">상품 타이틀</strong>
                                    <p>상품 가격</p>
                                </div>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
    
                </div>
                <div id="main--second__right" class="product--width">
                    <a href="#"><img src="image/product/best_product4.jpg" class="img--fill pist-absolute"></a>
                    <div id="main__secondright--text" class="pist-absolute col-box">
                        <div class="product__right--text col-box">
                            <strong class="title--color--two">상품 타이틀</strong>
                            <p>상품 가격</p>
                        </div>
                    </div>
                </div> 
                               
            </div>
        </div>

        <div id="main__content--three">
            <div id="main--three__box" class="layout--width row-box">
                <div id="main--three__productview--left">
                    <div id="main__threeview--title">
                        <p>다른 사람들은</p>
                        <strong>지금 이 상품을<br>보고 있어요</strong>
                    </div>
                </div>
                <ul id="main--three__productview--right" class="row-box">
                    <?php
                    for($i=1; $i<=3; $i++){
                    ?>
                    <li class="view__product--list">
                        <a href="#" class="col-box">
                            <div class="view__productlist--img">
                                <img src="image/product/customer<?=$i ?>.jpg">
                            </div>
                            <div class="view__productlist--text col-box">
                                <strong class="title--color--two">상품 타이틀</strong>
                            </div>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

    <?php include "module/footer.php" ?>

    <script src="js/common.js"></script>
    <script>
    
    </script>
</body>
>>>>>>> c4d13d66de3039cc1063b5d65cba8106a8fcb8ca
</html>