<?php
    include("db_conn.php");

    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];

    $arr = mysqli_query($conn, "select * from user_information where id='$user_id';");
    $user_row = mysqli_fetch_row($arr);

    if(!$user_row){
        echo "<script>
                alert('가입이 안 되어있는 아이디입니다');
                history.back();
              </script>";
    }
    else{
        if($user_row[3] == $user_pw){
            // id 세션에 추가
            session_start();
            $_SESSION['user_id'] = $user_id;
            $check = isset($_SESSION['user_id']);

            echo "<script>
                    window.location.href = 'main_hanbok.php';
                    alert('".$_SESSION['user_id']."님 환영합니다');
                  </script>";
                
        }
        else if($user_row[3] != $user_pw && strlen($user_pw)!=0){
            echo "<script>
                    alert(`비밀번호를 다시 확인하세요`);
                    history.back();
                  </script>";
        }
        else{
            echo "<script>
                    alert(`빈칸을 입력해주세요`);
                    history.back();
                  </script>";
        }
    }

?>