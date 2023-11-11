<?php 
    require_once 'database/connection.php';

    $email=$_SESSION['login-data']['email'] ?? null;
    $password=$_SESSION['login-data']['password'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
    
</head>
<body>
    <form action="<?=ROOT_URL.'loginback.php' ?>" method="post">
        <h1>Car Exploration</h1>
        <hr>
        <?php
        if(isset($_SESSION['signupsuccess'])): ?>
        <div class="successmessage">
            <p><?=$_SESSION['signupsuccess'];
            // unset($_SESSION['signupsuccess']);
            ?></p>
        </div>
        <?php endif ?>

        <?php
            if(isset($_SESSION['loginerror'])) :?>
            <div class="errormessage">
                <p><?=$_SESSION['loginerror'];
                 unset($_SESSION['loginerror']);
                 ?></p>
            </div>
        <?php endif?>
        <br>
        <br>
        Email <br>
        <input placeholder="email"  type="text" name="email" value="<?=$email ?>"><br><br>
        Password <br>
        <input placeholder="password"  type="password" name="password" value="<?=$password ?>"><br><br>
        <input type="submit" name="submit"><br><br>
        <a href="reset_password.php">Forgot Password?</a>
        <?php
        if(!isset($_SESSION['signupsuccess'])): ?>
        <p>Don't have an account?<a href="sign_up.php">create one</a></p>
        <?php else:
            unset($_SESSION['signupsuccess']);
        ?>
        <?php endif?>
    </form>
    
</body>
</html>