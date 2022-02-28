<?php 
session_start();
if(!$_SESSION["logged_in"]){
    $_SESSION["error"] = "Not logged in";
    header("location: auth.php");

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <nav>
        <a href="logout.php">Logout</a>
    </nav>
    <h1>Welcome!</h1>
</body>
</html>
