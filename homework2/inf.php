<?php
    include 'connect.php';




    $sql = "SELECT * FROM sections";

    $result = mysqli_query($con,$sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    
        <table border="1" width="50%">
            <tr>
                <th>Name</th>
                <th>Content</th>
                <th>Delete</th>
            </tr>
            <?php
             if(mysqli_num_rows($result)>0):?>
              <?php  while($row = mysqli_fetch_assoc($result)):?>
<tr>
    <td><?=$row["name"]?> </td>
    <td><?=$row["content"]?> </td>
    <td><a href="delete.php?id=<?=$row["id"]?>">Delete</a></td>
</tr>                  
<?php 
endwhile;
      endif
?>    
        </table>


    
</body>
</html>

<?php
mysqli_close($con);
?>