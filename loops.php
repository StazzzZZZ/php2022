<?php

$x = 0;
while($x<10){
   echo "<img src=\"img$x.jpg\">"; // \ значит экранирование символов, потому что тут код из php и html код
   $x++;
}
переводим картинки, например из галереи

do{
   echo "<img src=\"img$x.jpg\">"; 
   $x++;
}
while($x<10);
делает один раз при ложном условии
   
for($x=0;$x<=20;$x++){
  echo "<img src=\"img$x.jpg\">"; 
  $x++;
}




for($y =100;$y>0;$y--){
    if($y%5==0){
        //echo $y . "<br>";
        
    }
    else{
        //break; сразу отключен
       // continue;
    }
}

$month = 1;
switch ($month){
    case 1:echo "January"; break;//важно писать брейк
    case 2:echo "February"; break;
    case 3:echo "March"; break;
    case 4:echo "April"; break;
    default: echo "Not correct";break;
}



exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <?php 
            $menu = [ 
                "Main",
                "About",
                "Contacts"
            ];
            
            
            $files = [
                "File1" => "document1.docx",
                "File2" => "document1.docx",
                "File3" => "document1.docx"
            ];
                foreach($menu as $menuItem){ // каждый элемент меню будет меню айтем
                    echo "<li><a href=\"" .strtolower($menuItem).".php \">$menuItem</a></li>";
                }
            ?>
        </ul>
    </nav>


    <ul>
       <?php  foreach($files as $key=>$value){// ассоциативные массивы
        echo "<li><a href=\" " . strtolower($value)."\">$key</a></li>";
       }
       ?>
    </ul>
</body>
</html>