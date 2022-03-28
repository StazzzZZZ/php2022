<?php
    include 'connection.php';


    //var_dump($con);

    $sql = "SELECT * FROM users";

    $result = mysqli_query($con,$sql);

    // if(mysqli_num_rows($result)>0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo $row["name"] . " " . $row["surname"] . "<br>";
    //     }
    // }


    // mysqli_close($con);
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
    <style>
  
 body {
  background: url(https://html5book.ru/wp-content/uploads/2015/07/background39.png);
}
.floating-button {
  text-decoration: none;
  display: inline-block;
  width: 140px;
  height: 45px;
  line-height: 45px;
  border-radius: 45px;
  margin: 10px 20px;
  font-family: 'Montserrat', sans-serif;
  font-size: 11px;
  text-transform: uppercase;
  text-align: center;
  letter-spacing: 3px;
  font-weight: 600;
  color: #AEA6A5;
  background: white;
  box-shadow: 0 8px 15px rgba(0, 0, 0, .1);
  transition: .3s;
}
.floating-button:hover {
  background: #AEA6A5;
  box-shadow: 0 15px 20px rgba(46, 229, 157, .4);
  color: white;
  transform: translateY(-7px);
}
.rounded-input {
  padding:10px;
  border-radius:10px;
}
table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
text-align: center;
border-collapse: collapse;
border-spacing: 5px;
background: #E1E3E0;
border-radius: 20px;
}
th {
font-size: 22px;
font-weight: 300;
padding: 12px 10px;
border-bottom: 2px solid #F56433;
color: #F56433;
}
tbody tr:nth-child(2) {
border-bottom: 2px solid #F56433;
}
td {
padding: 10px;
color: #8D8173;
}
a {
   display: inline-block;
   text-decoration: none;
   text-transform: uppercase;
   letter-spacing: 1px;
   margin: 1px 4px;
   padding: 10px 20px;
   font-size: 10px;
   font-weight: bold;
   font-family: 'Montserrat', sans-serif;
   transition: 0.4s ease-in-out;
}
</style>
    <center>
        <table border="1" width="50%">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
             if(mysqli_num_rows($result)>0):?>
              <?php  while($row = mysqli_fetch_assoc($result)):?>
<tr>
    <td><?=$row["name"]?> </td>
    <td><?=$row["surname"]?> </td>
    <td><a href="edit.php?id=<?=$row["id"]?>">Edit</a></td>
    <td><a href="delete.php?id=<?=$row["id"]?>">Delete</a></td>
</tr>                  
<?php 
endwhile;
      endif
?>    
        </table>

<h2>ADD NEW USER</h2>
<form action="addnew.php" method="POST">
<h3>Your name</h3>
<input type="text" name="name"class="rounded-input ">
<h3>Your surname</h3>    
<input type="text" name="surname"class="rounded-input ">
<br>
<input type="submit" value="add"class="floating-button">
</form>
<form action="comments.php" method="POST">
<input type="submit" class="floating-button" value="Add comments">
</form>
</center>
</body>
</html>

<?php
mysqli_close($con);
?>