<?php 

//$data = readfile('text.txt');

$file = fopen('data','a+');
$text = "Writing to file \n";
echo fwrite($file,$text);

//close file

fclose($file);



?>