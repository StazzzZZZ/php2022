<?php 
  var_dump($_FILES);
    $dir = 'uploads/';
    $file = $_FILES["file"]["tmp_name"];
    echo move_uploaded_file($file, $dir . $_FILES["file"]["name"]);

    ?>