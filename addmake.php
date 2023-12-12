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

        .errormessage{
            background: red;
            padding: 5px;
        }
        .successmessage{
            background: green;
            padding: 5px;
}
    </style>
</head>
<body>
    <form action="<?=ROOT_URL?>addmakeback.php" method="post" enctype="multipart/form-data">
        <h1>ADD MAKE</h1>
        <hr>
        <?php if(isset($_SESSION['addmakeerror'])) :?>
            <div class="errormessage">
                <p><?=$_SESSION['addmakeerror'];
                unset($_SESSION['addmakeerror']);
                ?></p>
            </div>
        <?php endif?>

        <br>
        <br>
        Make Description
        <input placeholder="This make was invented........"  type="text" name="description"><br><br>
        Make Name
        <input placeholder="Toyota"  type="text" name="makename"><br><br>
        Insert Make Logo:
        <input type="file" name="logo"><br><br>
        
    
        <input type="submit" value="submit" name="submit">
        <input type="reset" value="cancel">
    </form>
</body>
</html>