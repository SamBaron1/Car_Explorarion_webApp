<?php
    session_start();
    require_once 'database/connection.php';

    if(isset($_POST['submit'])){
        $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $password=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        if(!$email){
            $_SESSION['loginerror']="Email cannot be blank";
        }elseif(!$password){
            $_SESSION['loginerror']="Input password";
        }else{
            $search_email_from_db="SELECT * FROM users WHERE email='$email'";
            $search_email_results=mysqli_query($conn,$search_email_from_db);
            if(mysqli_num_rows($search_email_results)>0){
               $db_details=mysqli_fetch_assoc($search_email_results);
    //            echo "<pre>";
    //            print_r($db_details);
    //            echo "</pre>";
    //         }
    //     }
    // }
               $db_password=$db_details['PASSWORD'];
               
               if(password_verify($password,$db_password)){
                $_SESSION['user-email']=$db_details['email'];
                header('location:'.ROOT_URL.'dashboard.php');
               }else{
                $_SESSION['loginerror']="Wrong Password!!!!!!";
               }
            }else{
                $_SESSION['loginerror']="No account registered with the email provided";
            }
        }
        if(isset($_SESSION['loginerror'])){
            $_SESSION['login-data']=$_POST;
            header('location:'.ROOT_URL.'login.php');
        }
    }else{
        header('location:'.ROOT_URL.'login.php');
        die();
    }