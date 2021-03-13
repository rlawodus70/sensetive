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
    <!-- 모달 박스 -->
    <div id ="modal-box">
        <div id=""></div>
    </div>
    
    <?php include "module/header.php" ?>

    <!-- 이미지 슬라이드 구역 -->
    <div id="main-imgslide">
        <div class="imgslide-box">
            <?php
            for($i=1; $i<=4; $i++){
            ?>
                <img class="imgslide-imgbox" src="image/imgslide/slide<?=$i?>.jpeg">
            <?php
            }
            ?>
        </div>
        <div class="main-imgslide">
            <ul class="imgslide-list">
                <?php
                for($i=0; $i<=3; $i++){
                ?>
                <li>
                    <div class="imgtext-fillbox"></div>
                    <div class="imgtext-front">
                        <p class="imgslide-top">브랜드명</p>
                        <p class="imgslide-bottom">브랜드 설명</p>
                    </div>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>

    <!-- 컨텐츠 구역 -->
    <div id="index-content">
        <div id="content-wrap">
            <div id="content-category">
                <ul id="menu-list">
                    <li>
                        <a href="">홈</a>
                    </li>
                    <li>
                        <img src="image/menu-icon/sofa.png">
                        <a href="">가구/수납</a>
                    </li>
                    <li><a href="">패브릭/생활</a></li>
                    <li><a href="">데코/조명</a></li>
                    <li><a href="">패션의류</a></li>
                    <li><a href="">뷰티</a></li>
                </ul>
            </div>

            <div id="best-contentBox">
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
                            for($i=1;$i<=4;$i++){
                                ?>
                                <div class="brand-Content">
                                    <a href="#">
                                        <div class="brand-imgBox">
                                            <img src="image/brand/베스트브랜드<?=$i ?>.jpg">
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

                <div id="best-product">
                    <div class="best-product">
                        <!-- 베스트 브랜드 타이틀 영역 -->
                        <div id="best_product-textbox">
                            <p class="text-top margin-left">베스트<strong>상품</strong></p>
                            <a class="text-bottom" href="#">센서티브 엠디가<br>자신있게 추천합니다.</a>
                        </div>
                        <div id="best_product-content">
                            <?php
                            for($i=1; $i<=10; $i++){
                            ?>
                            <div class="best_product-content">
                                <a href="#">
                                    <div class="product-imgBox">
                                        <img src="image/product/베스트상품<?=$i ?>.jpg">
                                    </div>
                                    <p class="product-title">상품 타이틀</p>
                                    <p class="product-price">상품 가격</p>
                                </a>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div id="mood-categorie">
            <ul class="mood-categorie">
                <li>           
                    <div class="mood-whybox">
                        <img src="image/category/상황별상품메인.jpg">
                    </div>
                </li>
                <?php
                $cate_top = array("","몸이","잠을","피부도 안 좋구?","아무것도 위로가");
                $cate_bottom = array("","간지러워요?","설쳤다구요?","","되지 않아요?");
                for($i=1; $i<=4; $i++){
                ?>
                <a href="#"><li>
                    <img src="image/category/상황별상품<?=$i?>.jpg">
                    <div class="mood-textbox">
                        <p><?=$cate_top[$i]?></p>
                        <p><?=$cate_bottom[$i]?></p>
                    </div>
                </li></a>
                <?php
                    }
                ?>
            </ul>
        </div>

        <div id="day-recommen">
            
        </div>
    </div>

    <?php include "module/footer.php" ?>
    <script src="js/common.js"></script>
    <script src="js/slide.js"></script>
</body>
</html>