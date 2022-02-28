<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $files = scandir('uploads/');
     $files = array_slice($files, 2);
    ?>
      <?php
foreach($files as $item):
        ?>
        <img src= "uploads/<?=$item ?>" alt="<?=$item ?>" width="300" height="300">
       <?php  endforeach ?>
       <br>
<a href="form.php">Загрузить новую фотографию</a>
</body>
</html>