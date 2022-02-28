<?php
include 'connect.php';

if($_GET["id"]){
    $userid = $_GET["id"];
    $sql = "DELETE FROM sections WHERE id = $userid";
    if(!mysqli_query($con,$sql)){
            die("Error:" . mysqli_error($con));
        }
        mysqli_close($con);
    header('location:inf.php');
    
}

?>