<?php 
$con = mysqli_connect("localhost","root","","reg");
$name = $_POST["name"];
$login = $_POST["login"];
$pass = $_POST["pass"];
if(mb_strlen($login)<5 ||mb_strlen($login)>90){
    echo "Login length is incorrect!";
    exit();
} else if(mb_strlen($name)<3 ||mb_strlen($name)>50){
    echo "Name length is incorrect!";
    exit();
}else if(mb_strlen($pass)<2 ||mb_strlen($pass)>20){
    echo "Password length is incorrect! (2 to 20 symbols)";
    exit();
}
$pass = md5($pass . "432j54jh214");
$stmt = mysqli_prepare($con,"INSERT INTO users (name, login, pass) VALUES(?, ?, ?)" );
mysqli_stmt_bind_param($stmt,"sss", $name, $login, $pass);
if(!mysqli_stmt_execute($stmt)){
    die("Error:" . mysqli_error($con));
}
    mysqli_close($con);
    header('location:log.php');
?>