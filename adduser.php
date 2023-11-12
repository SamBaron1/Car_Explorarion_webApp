<?php 
    require_once 'database/connection.php';
?>
<?php
 if(!isset($_SESSION['user-email'])){
    header('location:'.ROOT_URL);
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: radial-gradient(circle, #d6998b, rgb(157, 133, 225));  
            
        }
        a{
            text-decoration: none;
        }
        form{
            width: 30%;
            height: fit-content;
            border: 1px solid black;
            text-align: center;
            margin: auto;
            background-color: blanchedalmond;
            position: relative;
            top: 20vh;
            padding: 30px;
           

            
            
        }
    </style>
</head>
<body>
    <form action="">
        <h1>ADD USER</h1>
        <hr>
        <br>
        <br>
        First Name
        <input placeholder="first name"  type="text"><br><br>
        Last Name
        <input placeholder="last name"  type="text"><br><br>
        Email 
        <input placeholder="email@gmail.com"  type="email"><br><br>
        Password 
        <input placeholder="password"  type="password"><br><br>
        Confirm Password 
        <input placeholder="confirm password"  type="password"><br><br>
        Insert Profile Picture:
        <input type="file"><br><br>
        Continet
        <select title="Continet">
            <option>Africa</option>
            <option>Asia</option>
            <option>American</option>
            <option>Australia</option>
            <option>Europe</option>
        </select><br><br>
        
    
        <input type="button" value="submit" onclick="signIn()">
        <input type="button" value="cancel" onclick="back()">
    </form>
</body>
</html>