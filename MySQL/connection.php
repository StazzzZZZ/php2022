<?php

error_reporting(0);

$con = mysqli_connect("localhost","root","","php2022");

if(!$con){
    die("Not connected to DB" . mysqli_connect_error());
}


?>