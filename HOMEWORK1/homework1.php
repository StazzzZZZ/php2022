<?php
    function getRes($char,$x1,$x2){
        $result="";

        switch($char){
            case '+':$result = $x1 + $x2 ;break;
            case '-':$result = $x1 - $x2 ;break;
            case '*':$result = $x1 * $x2 ;break;
            case '/':
                if($x2==0){
                    echo "It can not divide by zero";
                    exit;
                }
                $result = $x1 / $x2 ;break;
            case '^':$result = $x1 ^ $x2 ;break;
           }
           echo $result;
    }



    if($_POST['submit']){
       $firstint = (int) $_POST['first'];
       $secondint = (int) $_POST['second'];
       $char = $_POST['operation'];
       
       
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: inline-block;
        }
    </style>
</head>
<body>
<h1>
    Калькулятор
</h1>
<form action="" method="post">
<input type="textbox" name="first" required>

<select name="operation" required>
<option value= "+">+</option>
<option value= "-">-</option>
<option value= "*">*</option>
<option value= "/">/</option>
<option value= "^">^</option>
</select>

<input type="textbox" name="second" required>
<input type="submit" name="submit" required>
</form>
<h2>Результат : <?php getRes($char,$firstint,$secondint);?> </h2>

</body>
</html>