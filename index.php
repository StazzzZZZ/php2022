<?php  
$dir    = './';
$files1 = array_slice(scandir($dir),3);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Мои проекты</h1>
    <div class="container d-flex flex-wrap">
        <?php
            foreach($files1 as $item): ?>
                <div class="item m-3 p-5 bg-light">
                    <a href="<?=$item?>"><?=$item?></a>
                </div>
            <?php endforeach ?>    
    </div>
</body>
</html>