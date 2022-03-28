<?php
error_reporting(1);
    if(!$_POST){
        die("Hacker go away");
    }
    include 'connection.php';
$name = $_POST["name"];
$comm = $_POST["comm"];
if($_POST["name"]!="" && $_POST["comm"]!=""){
$stmt = mysqli_prepare($con,"INSERT INTO coment (name, comm) VALUES(?, ?)" );
mysqli_stmt_bind_param($stmt,"ss", $name, $comm);

if(!mysqli_stmt_execute($stmt)){
    die("Error:" . mysqli_error($con));
}

    

    mysqli_close($con);
    header('location:comments.php');
}else{
    header('location:comments.php');

}
?>