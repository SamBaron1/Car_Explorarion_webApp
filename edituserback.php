<?php
    require('database/connection.php');
    
    if(isset($_POST['submit'])){
        $id=filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
        $firstname=filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);

        if(!$firstname || !$lastname || !$email){
            $_SESSION['editusererror']="INVALID INPUTS!!TRY AGAIN";
        }else{
                $updatequery="UPDATE users SET firstname='$firstname',lastname='$lastname',email='$email' WHERE id='$id'";
                $updateresults=mysqli_query($conn,$updatequery);

                if(!mysqli_errno($conn)){
                    $_SESSION['editusersuccess']="{$firstname} editted successfully";
                    header('location:'.ROOT_URL.'manageuser.php');
                    die();
                }
        }
            
        if(isset($_SESSION['editusererror'])){
            header('location:'.ROOT_URL.'edituser.php'.'?id='.$id);
            die();
        }
    }else{
        header('location:'.ROOT_URL.'edituser.php');
        die();
    }