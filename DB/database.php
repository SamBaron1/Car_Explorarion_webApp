<?php
    require_once 'constants.php';

    try{
        $conn=mysqli_connect(dbhost,dbuser,dbpassword,dbname);
        if(!$conn){
            throw new Exception($mysqli->error);
        }
    }
    catch(Exception $e){
        echo "Couldnt connect due to error____". $e->getMessage();
        die();
    }catch(Error $e){
        echo "Hutoboi kijana";
        die();
    }

    echo "Connection Successful";
