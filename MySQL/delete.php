<?php
include 'connection.php';

if($_GET["id"]){
    $userid = $_GET["id"];
    $sql = "DELETE FROM users WHERE id = $userid";
    if(!mysqli_query($con,$sql)){
            die("Error:" . mysqli_error($con));
        }
        mysqli_close($con);
    header('location:selectdata.php');
    
}

?>