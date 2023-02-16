<?php
    include("db_conn.php");

    $user_name = $_POST['user_name'];
    $user_number = $_POST['user_number'];
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_pwchk = $_POST['user_pwchk'];
    $user_email = $_POST['user_email'];

    if(!strlen($user_name)) echo "
            <script>
                alert('이름을 입력해주세요.');
                history.back();
            </script>";
    else if(!strlen($user_number)) echo "
        <script>
            alert('번호를 입력해주세요.');
            history.back();
        </script>";
    else if(!strlen($user_id)) echo "
        <script>
            alert('아이디를 입력해주세요.');
            history.back();
        </script>";
    else if(!strlen($user_pw)) echo "
        <script>
            alert('비밀번호를 입력해주세요.');
            history.back();
        </script>";
    else if(!strlen($user_pwchk)) echo "
        <script>
            alert('비밀번호 확인란을 입력해주세요.');
            history.back();
        </script>";
    else{
        $number_check = mysqli_query($conn, "select * from user_information where number='$user_number';");
        if(mysqli_fetch_row($number_check)){
            echo "<script>
                          alert('이미 있는 전화번호입니다.');
                          history.back();
                  </script>";
        }
        try{
          if($user_pw != $user_pwchk){ //비밀번호와 비밀번호 확인란이 다를때
            echo "<script>
              alert('비밀번호가 다릅니다.');
              history.back();
            </script>";
          }
          //TODO: 전화번호 중복이어도 insert됨
          else if(!mysqli_fetch_row($number_check)){ //정상적으로 입력한 상태
            mysqli_query($conn, "insert into user_information values('$user_name', '$user_number', '$user_id', '$user_pw','$user_email');");
            echo "<script>
                    alert('회원가입 성공');
                    window.location.href = 'login_form.html';
                  </script>";
          }
          //TODO: 아이디 다시 입력해야되는데 회원가입햇다함
        }catch(Exception $e){
          if(strpos($e, "PRIMARY")) echo "<script>
            alert('이미 있는 아이디입니다.');
            history.back();
          </script>";
        }

    }

?>

//MariaDB [kirukirudb]> desc user_information;
//+--------+-------------+------+-----+---------+-------+
//| Field  | Type        | Null | Key | Default | Extra |
//+--------+-------------+------+-----+---------+-------+
//| name   | varchar(10) | NO   |     | NULL    |       |
//| number | varchar(13) | NO   |     | NULL    |       |
//| id     | varchar(20) | NO   | PRI | NULL    |       |
//| pw     | varchar(20) | NO   |     | NULL    |       |
//| email  | varchar(25) | YES  |     | NULL    |       |
//+--------+-------------+------+-----+---------+-------+
//5 rows in set (0.011 sec)