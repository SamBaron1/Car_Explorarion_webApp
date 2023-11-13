<?php
    require_once 'database/connection.php';

    if(isset($_POST['submit'])){
        $firstname=filter_var($_POST['firstname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lastname=filter_var($_POST['lastname'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
        $password=filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $confirmpassword=filter_var($_POST['confirmpassword'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $profilepic=$_FILES['profilepic'];
        $continent=$_POST['continent'];
    // }

    //     echo "<pre>";
    //     print_r($profilepic);
    //     echo "</pre>";

        if(!$firstname){
            $_SESSION['signuperror']="First name cannot be blank";
        }elseif(!$lastname){
            $_SESSION['signuperror']="lastname cannot be blank";
        }elseif(!$email){
            $_SESSION['signuperror']="Check the email input";
        }elseif(!$password){
            $_SESSION['signuperror']="Enter your password";
        }elseif(strlen($password)< 8|| strlen($confirmpassword)<8){
            $_SESSION['signuperror']="Password should be more than 8 characters";
        }elseif(!$confirmpassword){
            $_SESSION['signuperror']="Fill the confirm password";
        }elseif(!$profilepic['name']){
            $_SESSION['signuperror']="Enter the profile picture";
        }elseif(!$continent){
            $_SESSION['signuperror']="Select your continent";
        }else{
            if($password !== $confirmpassword){
                $_SESSION['signuperror']="Passwords do not match";   
            }else{
                $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
            }


            $usercheck="SELECT * FROM users WHERE email='$email'";
            $usercheckresults=mysqli_query($conn,$usercheck);
            if(mysqli_num_rows($usercheckresults)>0){
                $_SESSION['signuperror']="User with the email provided already exists";
            }else{
                $time=time();
                $profilepic_name=$time.$profilepic['name'];
                $profilepic_temp_name=$profilepic['tmp_name'];
                $profilepic_path='images2/'. $profilepic_name;

                $allowed_files=['png','jpg','jpeg'];
                $extension=explode('.',$profilepic_name);
                $extension=end($extension);
                if(in_array($extension,$allowed_files)){
                    if($profilepic['size']<1100000){
                        move_uploaded_file($profilepic_temp_name,$profilepic_path);
                    }else{
                        $_SESSION['signuperror']="File size should be less than 1mb";
                    }
                }else{
                    $_SESSION['signuperror']="Profile picture should be in png,jpg or jpeg form";
                }
            }
        }

        if(isset($_SESSION['signuperror'])){
            unlink($profilepic_path);
    
            $_SESSION['signup-data']=$_POST;
            header('location:'.ROOT_URL.'sign_up.php');
            die();
        }else{
            $insert_to_database="INSERT INTO users(firstname,lastname,email,password,profilepic,continent) VALUES('$firstname','$lastname','$email','$hashedpassword','$profilepic_path','$continent')";
            mysqli_query($conn,$insert_to_database);
    
            if(!mysqli_errno($conn)){
                $_SESSION['signupsuccess']="Account created successfully.log in";
                header('location:'.ROOT_URL.'login.php');
                die();
            }
        }
    }else{
        header('location:'.ROOT_URL.'sign_up.php');
        die();
    }

?>