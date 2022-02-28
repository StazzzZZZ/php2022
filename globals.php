<?php
$a = 10;
$b = 35;

function sum(){
    return $GLOBALS["a"]+$GLOBALS["b"];
}

echo sum();


var_dump(
    $_SERVER["DOCUMENT_ROOT"]// о сервере
)

var_dump(
    $_REQUEST //$_GET // запросы в поисковике
)

 var_dump(
    $_GET,
     $_POST
 )


?>