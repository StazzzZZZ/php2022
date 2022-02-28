<?php 
    $arr = ["Moscow","Riga","Berlin"]; // array() start from 0

    $arr2 = [
        "username" => "Vitaly",
        "age" => 35,
        "height"=>172
    ];

    $table = [ // 3x3
        ["Jony","Boris","CJ"],
        ["Sasha","Masha","Kasha"],
        ["Robert","Sergey",56]
    ];
   // var_dump($arr);
   // var_dump($arr2);

   
    array_push($arr, "Tallin");
    array_push($arr2, ["width"=>72]);

    $arr[] = "Piter";

    echo $arr[0];
    echo $arr2["username"];
    

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
    <h1> 
        <?php if($arr2):?>
            html
            <?php  endif?>
                <?php 
            // foreach($arr as $item){
            //     echo "<a href=\"\">{$item}</a>>";
            // }

            foreach($arr as $item):
        ?>
        <a href="<?=$item ?>"><?=$item?></a>
        <?php endforeach ?>
        <?php
        foreach($arr2 as $value=>$key):
        ?>
        <h3><?=$value?>: <?=$key?></h3>
        <?php endforeach ?>
<!-- for-->

        <?php 
        // for($i=0;$i<sizeof($table);$i++){
        //     echo "<tr>";
        //     for($j=0;$j<sizeof($table[$i]);$j++){
        //             echo "<td>". $table[$i][$j]. "</td>";
        //     };
        //     echo "</tr>";

        // }
        ?>

        <?php 
        foreach($table as $row){
            echo "<tr>";
            foreach($row as $item){
                    echo "<td>$item</td>";
            }
            echo "</tr>";
        }
        
        // Sizeof($arr)
        // is_aray($arr) true false

        // sort($arr,SORT_STRING)
        // shuffle($arr)
        // explode(",",$arr)

        $str = "Name,Surname,Lastname";
        $result = explode(",",$str);
        $data["users"] = "Other";
        $data["other"] = false;
        
        extract($data, EXTR_OVERWRITE);
        echo "<p>" . $users . "</p>";

        $username = "Alex";
        $passwd = "123";
        $mail = "test@gmail.com";

        $data2 = compact('username','passwd','mail');
        var_dump($data2);
        
        ?>
    </h1>
</body>
</html>