<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
</body>
</html>
<?php


class Site{
    function __construct($nameSite){
        $this->nameSite = $nameSite; 
      
    }


    function setFeatures(){
        include 'features.html';
    }
    function setCover(){
        include 'cover.html';
    } 
    function setDB(){
        include 'db.html';
    }
    function setName($nameSite){
        $this->nameSite = $nameSite; 

    }

}

$site1 = new Site("features.php");

$site1->setFeatures();
//$site1->setCover();
//$site1->setDB();



?>