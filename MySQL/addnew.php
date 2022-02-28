<?php

error_reporting(1);
    if(!$_POST){
        die("Hacker go away");
    }
    include 'connection.php';


    // $name = mysqli_real_escape_string($con, $_POST["name"]);
    // $surname = mysqli_real_escape_string($con, $_POST["surname"]);

    //$sql = "INSERT INTO users (name, surname) VALUES(\"$name\", \"$surname\")";
// if(!mysqli_query($con, $sql)){
    //     die("Error:" . mysqli_error($con));
    // }

//second
$name = $_POST["name"];
$surname = $_POST["surname"];

$stmt = mysqli_prepare($con,"INSERT INTO users (name, surname) VALUES(?, ?)" );
mysqli_stmt_bind_param($stmt,"ss", $name, $surname);

if(!mysqli_stmt_execute($stmt)){
    die("Error:" . mysqli_error($con));
}

    

    mysqli_close($con);
    header('location:selectdata.php');

    ?>