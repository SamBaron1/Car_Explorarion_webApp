<?php
    require('database/connection.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $userquery="SELECT * FROM users WHERE id='$id'";
        $userresults=mysqli_query($conn,$userquery);

        $user=mysqli_fetch_assoc($userresults);
        $name=$user['firstname']." ".$user['lastname'];
        $profilepic=$user['profilepic'];

        if(mysqli_num_rows($userresults)==1){
            $deletequery="DELETE FROM users WHERE id='$id'";
            $deleteresults=mysqli_query($conn,$deletequery);
            if(!mysqli_errno($conn) &&$profilepic){
                unlink($profilepic);
            }

            $_SESSION['deleteusersuccess']="{$name} was successfully deleted";
            header('location:'.ROOT_URL.'manageuser.php');
            die();
        }
    }else{
        header('location:'.ROOT_URL.'manageuser.php');
    }