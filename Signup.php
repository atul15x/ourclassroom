<?php
    session_start();

    $con = mysqli_connect('localhost','root','');

    mysqli_select_db($con,'ourclassroom');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $mobile   = $_POST['mobile'];
    $gender = $_POST['gender'];
    $college = $_POST['college'];
    $department = $_POST['department'];

    $already = "select * from information where username = '$username' ";

    $result = mysqli_query($con, $already);

    $num = mysqli_num_rows($result);

    if($num == 1){

        echo "<script> alert('This Username has already taken.');window.location='index.html'</script>";
    }
     else {

        $in = "insert into information(username , password , name , mobile , gender, college, department ) values ('$username','$password','$name' , '$mobile' , '$gender' , '$college' , '$department' )";
        mysqli_query($con, $in);
        echo " <script> alert('Done Signup..Please Login Now.');window.location='index.html'</script> ";
        

     }

?>

