<?php
    require_once 'constants.php';

    try{
        $conn= mysqli_connect(dbhost,dbuser,dbpassword,dbname);
    }catch(Exception $e){
        echo "This exception was encountered->" .$e->getMessage();
    }catch(Error $e){
        echo "This error was encountered->" .$e->getMessage();
    }

    // if($conn){
    //     echo "Connection Successful";
    // }