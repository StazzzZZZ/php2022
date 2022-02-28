<?php
session_start();
if(!$_SESSION["logged_in"]){
    $_SESSION["error"] = "Not logged in";
    header("location: auth.php");
// не понятно как работают сессии, тоесть logged in и error это встроенные значения? или мы их сами создаем
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
}
.header {
    padding: 80px;
    text-align: center; 
    background: #1abc9c; 
    color: white; 
}


.header h1 {
    font-size: 40px;
}

.navbar {
    overflow: hidden; 
    background-color: #333; 
}


.navbar a {
    float: left; 
    display: block; 
    color: white; 
    text-align: center; 
    padding: 14px 20px; 
    text-decoration: none; 
}


.navbar a.right {
    float: right; 
}


.navbar a:hover {
    background-color: #ddd; 
    color: black; 
}

.row {
    display: -ms-flexbox; 
    display: flex;
    -ms-flex-wrap: wrap; 
    flex-wrap: wrap;
}



</style>
</head>
<body>

<div class="header">
  <h1>Admin site</h1>
  <p>admin your site with delight</p>
</div>
<div class="navbar">
  <a href="#">1 Link</a>
  <a href="#">2 Link</a>
  <a href="#">3 Link</a>
  <a href="#" class="right">L4 ink</a>
</div>

</body>
</html>