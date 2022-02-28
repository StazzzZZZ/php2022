<?php
$str = "Hi! My name is Stas!";

$result = mb_strlen($str);// кол-во символов
$result = str_word_count($str); // кол-во слов
$result = strrev($str); // разворачивает строку
$result = trim($str); // убирает пробелы
$result = addslashes($str); // добавляет дополнительные символы
$result = htmlentities($str); // выводить как текст
$result = md5($str); //сделать хеш мд5 из строки
$result = strtolower($str); // все написать маленькими буквами
$result = strtoupper($str); // все написать большими буквами
$result = ucfirst($str); // первая буква будем с большой
$result = substr($str,-4); //какие символы выписать, от и до или только определенные

var_dump($result);

?>