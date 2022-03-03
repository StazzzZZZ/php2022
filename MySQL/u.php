<?php

if(!$_POST){
    die("Hacker go away");
}
include 'connection.php';

$name = $_POST["name"];
$comm = $_POST["comm"];
$id = $_POST["id"];

$stmt = mysqli_prepare($con,"UPDATE coment SET name = ?, comm=? WHERE id = $id");
mysqli_stmt_bind_param($stmt,"ss", $name, $comm);
if(!mysqli_stmt_execute($stmt)){
    die("Error:" . mysqli_error($con));
}

    

    mysqli_close($con);
    header('location:comments.php');

?>