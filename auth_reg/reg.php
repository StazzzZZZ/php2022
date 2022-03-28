

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <div class="container mt-4">
       

<div class="col">
        <h1>Regestration form</h1>
        <form action="check.php" method="POST">
            <input type="text" class="form-control" 
            placeholder="Write your login" name="login"id="login"><br>
            <input type="text" class="form-control" 
            placeholder="Write your name" name="name"id="name"><br>
            <input type="password" class="form-control" 
            placeholder="Write your pass" name="pass"id="pass"><br>
            <button class="btn btn-success" type="submit">Register</button><br>
            <a href="log.php">Authorization page</a><br>

        </form>
    </div>
    

</div>
    </div>
    </center>
</body>
</html>