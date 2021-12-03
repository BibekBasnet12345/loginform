<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css\style.css">
</head>
<body>
    <h1 id="h1">HELLO,<?php echo $_SESSION['username'];?></h1><br>
    <a class="logout" href="LogOut.php">LogOut</a>
</body>
</html>
    <?php
    }
    else {
         header("location:index.php");
    exit();
    }
    ?>