<?php 
    session_start();
    if(isset($_GET["lang"])){
        if($_GET["lang"]=="en"){
            $_SESSION["lang"] = "en";
            header('location:main.php');
        }
        if($_GET["lang"]=="rus"){
            $_SESSION["lang"] = "rus";
            header('location:main.php');

        }
    }
?>