<?php 
    require_once 'database/constants.php';

    $firstname=$_SESSION['signup-data']['firstname'] ?? null;
    $lastname=$_SESSION['signup-data']['lastname'] ?? null;
    $email=$_SESSION['signup-data']['email'] ?? null;
    $password=$_SESSION['signup-data']['password'] ?? null;
    $confirmpassword=$_SESSION['signup-data']['confirmpassword'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
    <style>
       form{
        display: flex;
        flex-direction: column;
        background-color: white;
        min-height: 50vh;
        
       }
       form h1{
        font-family: monospace;
        border-bottom: 3px solid black;
        padding-bottom: 5px;
       }
       form input{
        border: 0;
        outline: none;
        border-bottom: 2px solid black;
        text-align: center;
        padding: 10px 0 5px 0;
        margin-bottom: 5px;
       }
       #profilepic{
        border: 0;
       }
       .buttons input {
        width: 100%;
        background-color:blue;
        border-radius: 10px;
        border: 0;
       }
       
    </style>
</head>
<body>
    <form action="signupback.php" enctype="multipart/form-data" method="post" >
        <h1>Car Exploration</h1>
        <hr>
        <?php
        if(isset($_SESSION['signuperror'])): ?>
        <div class="errormessage">
            <p><?=$_SESSION['signuperror'];
            unset($_SESSION['signuperror']);
            ?></p>
        </div>
        <?php endif ?>
        <table>
            <tbody>
                
                <tr>
                    <td>First Name</td>
                    <td><input placeholder="first name"  type="text" name="firstname" value="<?=$firstname?>"></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input placeholder="last name"  type="text" name="lastname" value="<?=$lastname ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input placeholder="email@gmail.com"  type="email" name="email" value="<?=$email ?>"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input placeholder="password"  type="password" name="password" value="<?= $password?>"></td>
                </tr>
                <tr>
                    <td>Confirm Password </td>
                    <td><input placeholder="confirm password"  type="password" name="confirmpassword" value="<?=$confirmpassword?>"></td>
                </tr>
                <tr>
                    <td>Insert Profile Picture:</td>
                    <td><input type="file" name="profilepic" id="profilepic"></td>
                </tr>
                <tr>
                    <td>Continent</td>
                    <td> <select title="Continent" name="continent">
                            <option>Africa</option>
                            <option>Asia</option>
                            <option>American</option>
                            <option>Australia</option>
                            <option>Europe</option>
                        </select>
                    </td>
                </tr>
                <tr class="buttons">
                    <td><input type="submit" name="submit" class="submit" onclick="signIn()"></td>
                    <td><input type="button" value="cancel" class="cancel" onclick="back()"></td>
                </tr>
            </tbody>
        </table>
  
        
        <p>Already have an account?<a href="login.php">login</a></p>
    </form>
    <script src="script.js" >
     
function back(){
  window.location.href = "index.php"
};
    </script>
</body>
</html>