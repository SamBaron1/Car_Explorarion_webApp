<?php
    require('database/connection.php');
    
    if(isset($_POST['submit'])){
        $id=filter_var($_POST['id'],FILTER_SANITIZE_NUMBER_INT);
        $manufactureyear=filter_var($_POST['manufactureyear'],FILTER_SANITIZE_NUMBER_INT);
        $make=filter_var($_POST['make'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $model=filter_var($_POST['model'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $bodytype=filter_var($_POST['bodytype'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $carcondition=filter_var($_POST['carcondition'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $country=filter_var($_POST['country'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $price=filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT);
        $mileage=filter_var($_POST['mileage'],FILTER_SANITIZE_NUMBER_INT);



        if(!$manufactureyear || !$make || !$model || !$bodytype || !$carcondition || !$price || !$country || !$mileage){
            $_SESSION['editcarerror']="INVALID INPUTS!!TRY AGAIN";
        }else{
                $updatequery="UPDATE cars SET manufactureyear='$manufactureyear',make='$make',model='$model',bodytype='$bodytype',carcondition='$carcondition',price='$price',country='$country',mileage='$mileage' WHERE id='$id'";
                $updateresults=mysqli_query($conn,$updatequery);

                if(!mysqli_errno($conn)){
                    $_SESSION['editcarsuccess']="{$make} {$model} editted successfully";
                    header('location:'.ROOT_URL.'managecar.php');
                    die();
                }
        }
            
        if(isset($_SESSION['editcarerror'])){
            header('location:'.ROOT_URL.'editcar.php'.'?id='.$id);
            die();
        }

    }else{
        header('location:'.ROOT_URL.'editcar.php');
        die();
    }