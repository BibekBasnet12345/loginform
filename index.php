<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
         <?php } ?>
        
        <label>username</label>
        <input type="text" name="username" placeholder="User name">
        <label>password</label><br>
        <input type="text" name="password" placeholder="password ">
        <button type="submit">Login</button><br>
    </form>
</body>
</html>