<?php
require_once('database/connection.php');

    if(isset($_POST['submit'])){
        $manufactureyear=filter_var($_POST['manufactureyear'],FILTER_VALIDATE_INT);
        $make=filter_var($_POST['make'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $model=filter_var($_POST['model'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $bodytype=filter_var($_POST['bodytype'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $carcondition=filter_var($_POST['carcondition'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $price=filter_var($_POST['price'],FILTER_VALIDATE_INT);
        $country=filter_var($_POST['country'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $mileage=filter_var($_POST['mileage'],FILTER_VALIDATE_INT);
        $engine=filter_var($_POST['engine'],FILTER_VALIDATE_INT);
        $capacity=filter_var($_POST['capacity'],FILTER_VALIDATE_INT);
        $doors=filter_var($_POST['doors'],FILTER_VALIDATE_INT);
        $driveType=filter_var($_POST['driveType'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $front=$_FILES['front'];
        $back=$_FILES['back'];
        $side=$_FILES['side'];
        $interior=$_FILES['interior'];

        if(!$manufactureyear){
            $_SESSION['addcar']="Year cannot be blank";
        }elseif(!$make){
            $_SESSION['addcar']="Make cannot be blank";
        }elseif(!$model){
            $_SESSION['addcar']="Model cannot be blank";
        }elseif(!$bodytype){
            $_SESSION['addcar']="bodytype cannot be blank";
        }elseif(!$carcondition){
            $_SESSION['addcar']="Condition cannot be blank";
        }elseif(!$price){
            $_SESSION['addcar']="Price cannot be blank";
        }elseif(!$country){
            $_SESSION['addcar']="country cannot be blank";
        }elseif(!$mileage){
            $_SESSION['addcar']="Mileage cannot be blank";
        }elseif(!$engine){
            $_SESSION['addcar']="Engine capacity cannot be blank";
        }elseif(!$doors){
            $_SESSION['addcar']="No of doors cannot be blank";
        }elseif(!$capacity){
            $_SESSION['addcar']="Car capacity cannot be blank";
        }elseif(!$driveType){
            $_SESSION['addcar']="Drive type cannot be blank";
        }elseif(!$front){
            $_SESSION['addcar']="Insert front view image";
        }elseif(!$back){
            $_SESSION['addcar']="Insert back view image";
        }elseif(!$side){
            $_SESSION['addcar']="Insert side view image";
        }elseif(!$interior){
            $_SESSION['addcar']="Insert interior image";
        }else{
            
            // Check if car exists in the database 
            $checkquery="SELECT * FROM cars where manufactureyear='$manufactureyear' AND make='$make' AND model='$model'";
            $checkresult=mysqli_query($conn,$checkquery);
            if(mysqli_num_rows($checkresult)>0){
                $_SESSION['addcar']="Car already exists";
            }else{
                $imageextension=['png','jpg','jpeg'];
                $time=time();
                $front_name=$time.$front['name'];
                $front_temp_name=$front['tmp_name'];
                $frontextension=explode('.',$front_name);
                $frontextension=end($frontextension);
                $front_path='images2/'.$front_name;
                $back_name=$time.$back['name'];
                $back_temp_name=$back['tmp_name'];
                $backextension=explode('.',$back_name);
                $backextension=end($backextension);
                $back_path='images2/'.$back_name;
                $side_name=$time.$side['name'];
                $side_temp_name=$side['tmp_name'];
                $sideextension=explode('.',$side_name);
                $sideextension=end($sideextension);
                $side_path='images2/'.$side_name;
                $interior_name=$time.$interior['name'];
                $interior_temp_name=$interior['tmp_name'];
                $interiorextension=explode('.',$interior_name);
                $interiorextension=end($interiorextension);
                $interior_path='images2/'.$interior_name;

                if(!in_array($frontextension,$imageextension)){
                    $_SESSION['addcar']="Front view image should be in png,jpg or jpeg form";
                }elseif(!in_array($backextension,$imageextension)){
                    $_SESSION['addcar']="Back view image should be in png,jpg or jpeg form";
                }elseif(!in_array($sideextension,$imageextension)){
                    $_SESSION['addcar']="Side view image should be in png,jpg or jpeg form";
                }elseif(!in_array($interiorextension,$imageextension)){
                    $_SESSION['addcar']="Interior image should be in png,jpg or jpeg form";
                }else{
                    if($front['size']>1100000 || $back['size']>1100000 || $side['size']>1100000 || $interior['size']>1100000){
                        $_SESSION['addcar']="Images should not exceed 1mb";
                    }else{
                        move_uploaded_file($front_temp_name,$front_path);
                        move_uploaded_file($back_temp_name,$back_path);
                        move_uploaded_file($side_temp_name,$side_path);
                        move_uploaded_file($interior_temp_name,$interior_path);
                    }
                }
            }
        }
        if(isset($_SESSION['addcar'])){
            unlink($side_path);
            $_SESSION['addcardata']=$_POST;
            header('location:'.ROOT_URL.'addcar.php');
            die();
        }else{
            // Insert data to database 
            $addquery="INSERT INTO cars(manufactureyear, make, model, bodytype, carcondition, price, country, mileage, engine, capacity, doors, driveType, frontview, backview, sideview ,interior) VALUES('$manufactureyear','$make','$model','$bodytype','$carcondition','$price','$country','$mileage','$engine','$capacity','$doors','$driveType','$front_path','$back_path','$side_path','$interior_path')";
            mysqli_query($conn,$addquery);
            if(!mysqli_errno($conn)){
                $_SESSION['addcarsuccess']="Car was successfully addded";
                header('location:'.ROOT_URL.'dashboard.php');
            }
        }
    }else{
        header('location:'.ROOT_URL.'addcar.php');
        die();
    }