<?php
$fname = 'reviews.data';
   $file = fopen($fname,'r');
    $data = explode(";",fread($file,filesize($fname)));
    fclose($file);
    //test changegi
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
   TABLE {
    background: green; 
    color: white; 
   }
   TD {
    background: black; 
   }
  </style>
</head>
<body>
    <form action="addReviews.php" method = "POST">
   <p>Write your name please</p>
        <input type="text" name="name">
        <p>Write your review please</p>
        <input type="text" name="review">
        <p>Write your view please(/all, /time, /name, /review)</p>
        <input type="text" name="func">
        <br>
        <br>
        <input type="submit" name="Add review">
        <br>
        <br>
    </form>
    <div class="container">
        <?php 
        if(sizeof($data)==0){
            return "No reviews";
        }
        ?>
        <table>
<?php foreach($data as $item) : ?>
<tr>
<td><?php echo $item; ?></td>
</tr>
<?php endforeach; ?>
</table>

       
        
    </div>
</body>
</html>