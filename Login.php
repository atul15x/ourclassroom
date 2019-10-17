<?php
    session_start();

     $con = mysqli_connect('localhost','root','');
    if ($con) {
        echo "All Ok";
    }
    else {
        echo "Error";
    }

    mysqli_select_db($con,'ourclassroom');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $already = "select * from information where username = '$username' && password ='$password' ";

    $result = mysqli_query($con, $already);

    $num = mysqli_num_rows($result);

    if($num == 1){

        $_SESSION['username'] = $username;
        header('location:home.php');
    }
     else {

        header('location:index.html');
     }

?>