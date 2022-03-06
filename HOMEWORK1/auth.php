<?php
session_start();

//var_dump($_SESSION);


$user = "stas";
$pass = md5("skola");

if($_POST && $_POST["username"]!="" && $_POST["password"]!=""){
    if($_POST["username"]==$user && md5($_POST["password"])==$pass){
        //echo "Success";
        $_SESSION["user"] = $_POST["username"];
        $_SESSION["logged_in"] = true; 
        header("Location:page_auth");
    }else{
        //exit("Password is incorrect");
        $_SESSION["user"] ="";
        $_SESSION["logged_in"] = false;
        $_SESSION["error"] = "Wrong username or password";
        header("page_don't_auth");
        //session_destroy();

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <div>
        <?php 
        if($_SESSION && $_SESSION["error"]){
            echo $_SESSION["error"];
        }
        ?>
    </div>
    
</body>
</html>