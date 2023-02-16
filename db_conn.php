<?php
    $conn = mysqli_connect('localhost', 'kirukiru', '111111', 'kirukirudb', '3307');
    if($conn){
        echo "<script>console.log('DB connect success');</script>";
    }
    else{
        echo "<script>console.log('DB connect fail');</script>";
    }
?>