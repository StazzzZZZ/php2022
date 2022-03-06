<?php
$login = $_POST["login"];
$pass = $_POST["pass"];

$pass = md5($pass . "432j54jh214");
$con = mysqli_connect("localhost","root","","reg");
$result = $con->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' ");

$user = $result->fetch_assoc();
 if(is_countable($user) && count($user) > 0) {
    mysqli_close($con);
    header('location:log.php');

 }else {
    echo "This user was not found";
    exit();
 }
 setcookie('user',$user['name'], time() + 3600, "/");

    
?>