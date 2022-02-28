<?php
//$result = is_int($x); проверка какой тип переменной 
$x = 250;
$y = 2.45;

$result = is_int($x); //is_float() is_bool()
$result = pi(); // число пи
$result = max(0, 20, 40, 30);// выводит наибольшое число из этих min(...)

var_dump($result);

?>