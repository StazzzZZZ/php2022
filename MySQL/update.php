<?php

if(!$_POST){
    die("Hacker go away");
}
include 'connection.php';

$name = $_POST["name"];
$surname = $_POST["surname"];
$id = $_POST["id"];

$stmt = mysqli_prepare($con,"UPDATE users SET name = ?, surname=? WHERE id = $id");
mysqli_stmt_bind_param($stmt,"ss", $name, $surname);

if(!mysqli_stmt_execute($stmt)){
    die("Error:" . mysqli_error($con));
}

    

    mysqli_close($con);
    header('location:selectdata.php');

?>