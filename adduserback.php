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
            $_SESSION['addusererror']="First name cannot be blank";
        }elseif(!$lastname){
            $_SESSION['addusererror']="lastname cannot be blank";
        }elseif(!$email){
            $_SESSION['addusererror']="Check the email input";
        }elseif(!$password){
            $_SESSION['addusererror']="Enter users password";
        }elseif(strlen($password)< 8|| strlen($confirmpassword)<8){
            $_SESSION['addusererror']="Password should be more than 8 characters";
        }elseif(!$confirmpassword){
            $_SESSION['addusererror']="Fill the confirm password";
        }elseif(!$profilepic['name']){
            $_SESSION['addusererror']="Enter the profile picture";
        }elseif(!$continent){
            $_SESSION['addusererror']="Select your continent";
        }else{
            if($password !== $confirmpassword){
                $_SESSION['addusererror']="Passwords do not match";   
            }else{
                $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
            }


            $usercheck="SELECT * FROM users WHERE email='$email'";
            $usercheckresults=mysqli_query($conn,$usercheck);
            if(mysqli_num_rows($usercheckresults)>0){
                $_SESSION['addusererror']="User with the email provided already exists";
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
                        $_SESSION['addusererror']="File size should be less than 1mb";
                    }
                }else{
                    $_SESSION['addusererror']="Profile picture should be in png,jpg or jpeg form";
                }
            }
        }

        if(isset($_SESSION['addusererror'])){
            unlink($profilepic_path);
    
            $_SESSION['adduser-data']=$_POST;
            header('location:'.ROOT_URL.'adduser.php');
            die();
        }else{
            $insert_to_database="INSERT INTO users(firstname,lastname,email,password,profilepic,continent) VALUES('$firstname','$lastname','$email','$hashedpassword','$profilepic_path','$continent')";
            mysqli_query($conn,$insert_to_database);
    
            if(!mysqli_errno($conn)){
                $_SESSION['addusersuccess']="{$firstname} added successfully.";
                header('location:'.ROOT_URL.'dashboard.php');
                die();
            }
        }
    }else{
        header('location:'.ROOT_URL.'adduser.php');
        die();
    }

?>