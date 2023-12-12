<?php
    include('database/connection.php');

    if(isset($_POST['submit'])){
        $description=filter_var($_POST['description'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $makename=filter_var($_POST['makename'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $logo=$_FILES['logo'];

        if(!$description){
            $_SESSION['addmakeerror']="Description cannot be blank";
        }elseif(!$makename){
            $_SESSION['addmakeerror']="Make cannot be blank";
        }elseif(!$logo){
            $_SESSION['addmakeerror']="Logo cannot be ommited";
        }else{
            // check if make exists 
            $checkquery="SELECT * FROM carmakes WHERE makename='$makename'";
            $checkresults=mysqli_query($conn,$checkquery);

            if(mysqli_num_rows($checkresults)>0){
                $_SESSION['addmakeerror']="Make already exists";
            }else{
                $time=time();
                $logoname=$time.$logo['name'];
                $logo_temp_name=$logo['tmp_name'];
                $logo_path='images2/'. $logoname;

                $allowed_files=['png','jpg','jpeg'];
                $extension=explode('.',$logoname);
                $extension=end($extension);
                if(in_array($extension,$allowed_files)){
                    if($logo['size']<1100000){
                        move_uploaded_file($logo_temp_name,$logo_path);
                    }else{
                        $_SESSION['addmakeerror']="File size should be less than 1mb";
                    }
                }else{
                    $_SESSION['addmakeerror']="Profile picture should be in png,jpg or jpeg form";
                }
            }
        }
        if(isset($_SESSION['addmakeerror'])){
            unlink($logo_path);

            header('location:'.ROOT_URL.'addmake.php');
            die();
        }else{
            $addquery="INSERT INTO carmakes(makename,description,logo) VALUES('$makename','$description','$logo_path')";
            $addresults=mysqli_query($conn,$addquery);

            if(!mysqli_errno($conn)){
                $_SESSION['addmakesuccess']="Make was successfully added";

                header('location:'.ROOT_URL.'dashboard.php');
                die();
            }
        }
    }
?>