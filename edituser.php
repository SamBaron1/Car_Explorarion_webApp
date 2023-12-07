<?php 
    require_once 'database/connection.php';
?>
<?php
 if(!isset($_SESSION['user-email'])){
    header('location:'.ROOT_URL);
 }

    if(!isset($_GET['id'])){
        header('location:'.ROOT_URL.'manageuser.php');
        die();
    }else{
        $id=$_GET['id'];
        $userquery="SELECT * FROM users WHERE id='$id'";
        $userresult=mysqli_query($conn,$userquery);

        $user=mysqli_fetch_assoc($userresult);

        $firstname=$user['firstname'];
        $lastname=$user['lastname'];
        $email=$user['email'];
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
    <form action="<?=ROOT_URL?>edituserback.php" method="post">
        <h1>EDIT USER</h1>
        <hr>
        <?php
            if(isset($_SESSION['editusererror'])) :?>
            <div class="errormessage">
                <p><?=$_SESSION['editusererror'];
                 unset($_SESSION['editusererror']);
                 ?></p>
            </div>
        <?php endif?>
        <br>
        <br>
        First Name
        <input placeholder="first name"  type="text" value="<?=$firstname?>" name="firstname"><br><br>
        Last Name
        <input placeholder="last name"  type="text" value="<?=$lastname?>" name="lastname"><br><br>
        Email 
        <input placeholder="email@gmail.com"  type="email" value="<?=$email?>" name="email"><br><br>
        
        <input type="hidden" value="<?=$id ?>" name="id">
    
        <input type="submit" name="submit" >
        <input type="reset" value="cancel" >
    </form>
</body>
</html>