<?php
    require('database/connection.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $carquery="SELECT * FROM cars WHERE id='$id'";
        $carresults=mysqli_query($conn,$carquery);

        $car=mysqli_fetch_assoc($carresults);
        $name=$car['make']." ".$car['model'];
        $frontview=$car['frontview'];
        $backview=$car['backview'];
        $sideview=$car['sideview'];
        $interior=$car['interior'];

        if(mysqli_num_rows($carresults)==1){
            $deletequery="DELETE FROM cars WHERE id='$id'";
            $deleteresults=mysqli_query($conn,$deletequery);
            if(!mysqli_errno($conn) &&$frontview&&$backview&&$sideview&&$interior){
                unlink($frontview);
                unlink($backview);
                unlink($sideview);
                unlink($interior);
            }

            $_SESSION['deletecarsuccess']="{$name} was successfully deleted";
            header('location:'.ROOT_URL.'managecar.php');
            die();
        }
    }else{
        header('location:'.ROOT_URL.'managecar.php');
    }