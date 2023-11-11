<?php 
    session_start();
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
    <form action="">
        <h1>Car Exploration</h1>
        <hr>
        <?php
        if(isset($_SESSION['signupsuccess'])): ?>
        <div class="successmessage">
            <p><?=$_SESSION['signupsuccess'];
            unset($_SESSION['signupsuccess']);
            ?></p>
        </div>
        <?php endif ?>
        <br>
        <br>
        Email <br>
        <input placeholder="email"  type="text"><br><br>
        Password <br>
        <input placeholder="password"  type="text"><br><br>
        <input type="button" value="submit"><br><br>
        <a href="reset_password.php">Forgot Password?</a>
        <p>Don't have an account?<a href="sign_up.php">create one</a></p>
    </form>
    
</body>
</html>