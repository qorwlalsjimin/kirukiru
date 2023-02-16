<?php
    session_start();
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
                    <ul class="col-lg-4 navbar-nav">
                        <li class="nav-item me-3 ms-3">
                            <a class="nav-link  fw-bolder" href="#">기모노</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link  fw-bolder" href="#">유카타</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  fw-bolder">ACC</a>
                        </li>
                    </ul>

                    <a class="col-lg-4 navbar-brand m-0 text-center" href="main_hanbok.php"><img src="./img/logo.png" alt="로고"></a>

                    <div class="col-lg-4 p-0 ps-5">
                        <ul class="navbar-nav ps-3">
                            <li class="nav-item ps-5 ms-5 pe-2">
                                <a class="nav-link " aria-current="page" href="#">
                                    <img src="./img/nav_search.png" alt="검색"
                                         onmouseover="this.src=`./img/nav_search.png`"
                                         onmouseout="this.src=`./img/nav_search.png`"
                                    >
                                </a>
                            </li>
                            <li class="nav-item pe-2">
                                <a class="nav-link " href="#">
                                    <img src="./img/nav_heart.png" alt="즐겨찾기"
                                         onmouseover="this.src=`./img/nav_heart.png`"
                                         onmouseout="this.src=`./img/nav_heart.png`"
                                    >
                                </a>
                            </li>
                            <li class="nav-item pe-2">
                                <a class="nav-link " href="#">
                                    <img src="./img/nav_cart.png" alt="장바구니"
                                         onmouseover="this.src=`./img/nav_cart.png`"
                                         onmouseout="this.src=`./img/nav_cart.png`"
                                    >
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="login_form.html" class="nav-link">
                                    <img src="./img/nav_user.png" alt="마이페이지"
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
        <!--슬라이딩 배너-->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://ifh.cc/g/WjdQrD.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/carousel_1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./img/carousel_1.png" class="d-block w-100" alt="...">
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

        <!--item 1-->
        <div class="item_1 my-5">
            <h5 class="text-center fw-bold">Dress best 6</h5>
            <img src="./img/item1.png" alt="item1" class="mx-auto mt-5 my-2 d-block">
            <h6 class="text-center fw-semibold" style="font-size: 14px">카테고리(필터)<br>10,000원</h6>
        </div>

        <!--item 2-->
        <div class="item_2 mt-5">
            <h4 class="fw-bolder text-center">악세사리</h4>
        </div>
    </main>

    <footer>
    </footer>


    <div style="position: fixed; bottom: 40px; right: 120px">
        <a href="main_hanbok.php"><img src="./img/sw_hanbok.png"></a>
    </div>

</body>

</html>