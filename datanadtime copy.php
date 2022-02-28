<?php
    //$time1 =  time(); //since 1970 seconds
    // $date = date_create(time());
    // $time3 = date_timezone_set($date,timezone_open('Europe/Riga'));



    date_default_timezone_set('Europe/Riga');
    $time3 = time();

    $time2 =  mktime(0,0,0,1,31,2020);
    $nextweek = $time2+(3600*24*7);
    //echo $time2;

    $format = "d m Y H:i:s";
    echo "Сегодня : " . date("H",$nextweek) . " часов и ". date("i",$nextweek) . " минут";




?>