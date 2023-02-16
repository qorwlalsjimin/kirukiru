<?php
    $p_id = $_GET['id'];
    include("db_conn.php");
    session_start();

//상품 상세 정보 데이터 불러오기
    $query = "select * from goods where id='$p_id'";
    $goods_arr = mysqli_query($conn, $query);
    $goods_data_row = mysqli_fetch_row($goods_arr);

    $title = $goods_data_row[1];
    $price = substr_replace($goods_data_row[2],',',strlen($goods_data_row[2])-3,0); //쉼표 넣은 값
    $ex= $goods_data_row[3];
    $benefit= $goods_data_row[4];
    $deliver = $goods_data_row[5];
    $isoption= $goods_data_row[6];
    $img_path = $goods_data_row[7];

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
                        <a class="nav-link  fw-bolder" href="#">전통</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link  fw-bolder" href="#">개량</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link  fw-bolder" href="#">스페셜</a>
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
    <div class="container mt-lg-5 mt-sm-3">
        <div class="row">
            <div class="goods_img text-center col-7 p-3 pt-0 ps-0">
                <img class="w-100 p-5 pt-0 ps-3" src="<?php echo $img_path; ?>" alt="">
            </div><!--//goods_img-->
            <div class="goods_info col-5 fs-6 pe-5">
                <div class="goods_title_info pe-5">
                    <p class="goods_price"><?php echo $title ?></p>
                </div><!--//goods_title_info-->
                <div class="goods_title_info pe-5">
                    <p class="goods_price"><?php echo $price ?>원</p>
                </div><!--//goods_title_info-->
                <hr class="me-3">
                <div class="goods_detailed_info pe-3" style="font-size: 0.7em">
                    <p class="goods_ex mb-4 text-muted" style="font-size: 1.2em"><?php echo $ex ?></p>
                    <div>
                        <span class="fw-bold">적립금</span>
                        <span class="origin"><?php echo $benefit ?>%</span>
                    </div>
                    <div>
                        <span class="fw-bold">배송비</span>
                        <span class="brand"><?php echo $deliver ?></span>
                    </div>
                </div><!--//goods_detailed_info-->
                <div class="goods_buy mt-3 pe-3">
                    <?php
                        // if($isoption){ //TODO: 옵션 있을때 클릭하면 옵션별로 나누어서 보여줘야함
                        if(0){
                    ?>
                    <div class="option" id="option">
                        <span class="fw-bold" style="font-size: 0.7em" id="option">옵션 *</span><br>
                        <select class="form-select goods_select mt-2" id="option" onchange="add_option()">
                            <option selected disabled>선택해주세요.</option>
                            <?php
                                for($i = 0; $i<sizeof($options_value); $i++)
                                    echo "<option value='$options_value[$i]'>$options_value[$i]</option>";
                            ?>
                        </select>
                    </div><!--//option-->

                    <?php
                        }else{
                            echo "
                                <div class='select_block my-3 mt-5 p-3 bg-secondary bg-opacity-10 rounded'>
                    <div class='option_title row justify-content-between'>
                        <span class='col text-muted' style='font-size: 0.9em'>수량</span>
                    </div><!--//option_title-->
                    <hr class='px-3 my-2 text-muted'>
                    <div class='option_btn'>
                        <div class='option_btn_tool row justify-content-between'>

                            <form action='shop_cart_db.php' method='get'> <!--여기서 시작한 form은-->
                                <input class='w-25' name='cnt_item' type='number' value='1' min='1' max='999'>
                                <!--TODO: 오른쪽으로 붙이기
                                <span class='col text-end text-muted' style='font-size: 0.9em'>
                                    $price 원
                                </span>
                                -->
                        </div><!--//option_btn_tool-->
                    </div><!--//option_btn-->
                </div><!--//select_block-->
                ";
                } ?>

                <input type="hidden" name="id" value="<?php echo $p_id;?>">
                <input type="hidden" name="img" value="<?php echo $img_path;?>">
                <input type="hidden" name="title" value="<?php echo $title;?>">
                <input type="hidden" name="price" value="<?php echo $price;?>">

                <div class="goods_btns row p-3 mt-3 justify-content-between">
                    <a href="notice.html" class="col h-1 py-3 btn btn-dark rounded-pill">장바구니</a>
                    <button type="submit" class="col btn btn-outline-dark rounded-pill py-3 h-1">즐겨찾기</button>
                </div><!--//goods_btns-->
                </form><!--//여기서 닫힙니다-->

            </div><!--//goods_buy-->
        </div><!--//goods_info-->
    </div><!--//row-->
    </div><!--//container-->
</main>

</body>

</html>

<script>
function logout(){
    if(confirm('로그아웃하시겠습니까?')){
        location.href='logout.php';
    }
}
</script>