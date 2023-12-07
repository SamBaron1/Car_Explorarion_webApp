<?php 
    require_once 'database/constants.php';

    $firstname=$_SESSION['adduser-data']['firstname'] ?? null;
    $lastname=$_SESSION['adduser-data']['lastname'] ?? null;
    $email=$_SESSION['adduser-data']['email'] ?? null;
    $password=$_SESSION['adduser-data']['password'] ?? null;
    $confirmpassword=$_SESSION['adduser-data']['confirmpassword'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
    <style>
      
    </style>
</head>
<body>
    <form action="adduserback.php" enctype="multipart/form-data" method="post" >
        <h1>Add User</h1>
        <hr>
        <?php
        if(isset($_SESSION['addusererror'])): ?>
        <div class="errormessage">
            <p><?=$_SESSION['addusererror'];
            unset($_SESSION['addusererror']);
            ?></p>
        </div>
        <?php endif ?>
        <br>
        <br>
        First Name
        <input placeholder="first name"  type="text" name="firstname" value="<?=$firstname?>"><br><br>
        Last Name
        <input placeholder="last name"  type="text" name="lastname" value="<?=$lastname ?>"><br><br>
        Email 
        <input placeholder="email@gmail.com"  type="email" name="email" value="<?=$email ?>"><br><br>
        Password 
        <input placeholder="password"  type="password" name="password" value="<?= $password?>"><br><br>
        Confirm Password 
        <input placeholder="confirm password"  type="password" name="confirmpassword" value="<?=$confirmpassword?>"><br><br>
        Insert Profile Picture:
        <input type="file" name="profilepic" id="profilepic"><br><br>
        Continent
        <select title="Continent" name="continent">
            <option>Africa</option>
            <option>Asia</option>
            <option>American</option>
            <option>Australia</option>
            <option>Europe</option>
        </select><br><br>
        
    
        <input type="submit" name="submit" onclick="signIn()">
        <input type="button" value="cancel" onclick="back()">
        <p>Already have an account?<a href="login.php">login</a></p>
    </form>
    <script src="script.js" >
     
function back(){
  window.location.href = "index.php"
};
    </script>
</body>
</html>