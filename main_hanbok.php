<?php
    session_start();
    setcookie("h_or_k", "hanbok", time()+86400); //한복인지 기모노인지 구분하기 위함
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KiruKiru</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script type="text/javascript" src="intro.js"></script>  -->
    <script src="https://kit.fontawesome.com/fea8b3eafd.js" crossorigin="anonymous"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary my-2">
            <div class="container text-center">
                <div class="row collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="col-lg-4">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#">伝統</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="#">改良</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="#">スペシャル</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link fw-bold" href="#">靴</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#" >ACC</a>
                        </li>
                        <!--  fw-bolder -->
                    </ul>

                    <a class="col-lg-4 navbar-brand m-0 text-center" href="main_hanbok.php"><img src="./img/logo.png" alt="로고"></a>

                    <div class="col-lg-4 p-0 ps-5">
                        <ul class="navbar-nav ps-3">
                            <li class="nav-item ps-5 ms-5 pe-2">
                                <a class="nav-link " aria-current="page" href="#">
                                    <img src="./img/4.png" alt="검색"
                                         onmouseover="this.src=`./img/nav_search.png`"
                                         onmouseout="this.src=`./img/nav_search.png`"
                                    >
                                </a>
                            </li>
                            <li class="nav-item pe-2">
                                <a class="nav-link " href="#">
                                    <img src="./img/3.png" alt="즐겨찾기"
                                         onmouseover="this.src=`./img/nav_heart.png`"
                                         onmouseout="this.src=`./img/nav_heart.png`"
                                    >
                                </a>
                            </li>
                            <li class="nav-item pe-2">
                                <a class="nav-link " href="#">
                                    <img src="./img/2.png" alt="장바구니"
                                         onmouseover="this.src=`./img/nav_cart.png`"
                                         onmouseout="this.src=`./img/nav_cart.png`"
                                    >
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login_form.html" class="nav-link">
                                    <img src="./img/1.png" alt="마이페이지"
                                         onmouseover="this.src=`./img/nav_user.png`"
                                         onmouseout="this.src=`./img/nav_user.png`"
                                    >
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--main-->
    <main>
        <!-- 메인 화면 -->
           <div class="main_img2">
               <img src="img/Group 27.png" class="main_img d-block w-100" alt="...">
               <img src="img/Rectangle 121.png" class="Rectangle d-block w-100" alt="...">
               <h1 class="title">韓服</h1>

            </div>
            <button class="carousel-control-prev mt-5" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next mt-5" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




    <!--
        <div class="item_2 my-5">

            <img src="./img/item3.png" alt="item1" class="mx-auto mt-5 my-2 d-block">
            <h6 class="text-center fw-semibold" style="font-size: 14px">카테고리(필터)</h6>
        </div>-->




        <div class="item_1 my-5">
            <h5 class="text-center fw-bold pt-5">改良韓服 best 6</h5>
            <img src="./img/item1.png" alt="item1" class="mx-auto mt-5 my-2 d-block">
            <h6 class="text-center fw-semibold mb-5 pb-5" style="font-size: 14px">카테고리(필터)<br>10,000원</h6>
        </div>


        <div class="item_3 mt-5 pt-5">
            <img src="./img/item3.png" class="d-block w-100">
            <button>개량 한복 보러가기</button>
        </div>


        <!--item 4-->
        <div class="item_3 py-5 my-5 text-center container">
            <h4 class="fw-bolder text-center mb-5 mt-5">アクセサリー</h4>
            <div class="row justify-content-center px-5 mt-5">
                <a href="goods_detail.php?id=1" class="col-lg-2 p-0" ><img src="./img/product1.png" alt="상품1"><h2>弓道ポーチ</h2></a>
                <a href="goods_detail.php?id=2" class="col-lg-2 p-0"><img src="./img/product2.png" alt="상품2"><h2>怪仏ノリ作りキット</h2></a>
                <a href="goods_detail.php?id=3" class="col-lg-2 p-0"><img src="./img/product3.png" alt="상품3"><h2>鳳凰文人文譜 伝統 小遣い袋 </h2></a>
                <a href="goods_detail.php?id=4" class="col-lg-2 p-0"><img src="./img/product4.png" alt="상품4"><h2>花紋ツイリー</h2></a>
                <a href="goods_detail.php?id=5" class="col-lg-2 p-0"><img src="./img/product5.png" alt="상품5"><h2>同心結世祖隊</h2></a>
                <a href="goods_detail.php?id=6" class="col-lg-2 p-0"><img src="./img/product6.png" alt="상품6"><h2>アップサイクリング 石金箔ノリ </h2></a>
            </div>
        </div>


        <!--item 2-->



        <!-- item 4 Kiruの伝統韓服をご覧ください-->
        <div class="item_4 mt-5">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/benner.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/benner.png" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
        </div>

        <div class="item_5">
            <img src="./img/group 30.png" class="d-block w-50 h-70">
        </div>


    </main>



    <footer>
    </footer>


    <div style="position: fixed; bottom: 40px; right: 120px">
        <a href="main_kimono.php"><img src="./img/sw_kimono.png"></a>
    </div>

</body>

</html>