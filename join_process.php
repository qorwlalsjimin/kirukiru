<?php
    include("db_conn.php");

    $user_name = $_POST['user_name'];
    $user_number = $_POST['user_number'];
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];
    $user_pwchk = $_POST['user_pwchk'];
    $user_email = $_POST['user_email'];

    if(!strlen($user_id)) echo "
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
    else if($user_pw != $user_pwchk) echo "
        <script>
            alert('비밀번호 확인란을 입력해주세요.');
            history.back();
        </script>";
    else if(!strlen($user_name)) echo "
        <script>
            alert('이름을 입력해주세요.');
            history.back();
        </script>";
    else if(!strlen($user_email)) echo "
    <script>
        alert('이메일을 입력해주세요.');
        history.back();
    </script>";
    else{
        try{
          mysqli_query($conn, "insert into user_information values('$user_id', '$user_pw','$user_name','$user_email','$user_gender','$user_number');");
          if($user_pw != $user_pwchk){
            echo "<script>
              alert('비밀번호가 다릅니다.');
              history.back();
            </script>";
          }
          else{
            echo "<script>
                    alert('회원가입 성공');
                    window.location.href = 'login.php';
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