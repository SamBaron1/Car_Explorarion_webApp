<?php 
    require_once 'database/connection.php';
?>
<?php
 if(!isset($_SESSION['user-email'])){
    header('location:'.ROOT_URL);
 }

 if(!isset($_GET['id'])){
     header('location:'.ROOT_URL.'managecar.php');
     die();
 }else{
     $id=$_GET['id'];
     $carquery="SELECT * FROM cars WHERE id='$id'";
     $carresult=mysqli_query($conn,$carquery);

     $car=mysqli_fetch_assoc($carresult);

     $manufactureyear=$car['manufactureyear'];
     $make=$car['make'];
     $model=$car['model'];
     $bodytype=$car['bodytype'];
     $carcondition=$car['carcondition'];
     $price=$car['price'];
     $country=$car['country'];
     $mileage=$car['mileage'];
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        .dashboardbody{
            all: unset;
            background: url(Images/fc4.png);
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
            height: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .dashboard{
            background-color: rgba(0, 0, 255,0.7);
            font-weight: 600;
            align-items: center;
            height: 80vh;
            width: 80vw;
            border-radius: 5%;
        }

        th{
            font-weight: bolder;
            font-size: 60px;
            width: 100%;
            padding: 5px;
        }

        td{
            display: inline-block;
            background: blanchedalmond;
            padding: 10px;
            margin-left: 40px;
            margin-top: 20px;
            border-radius: 5px;
        }

        #submit{
            background-color: brown;
        }

        #submit:hover{
            background-color: red;
        }

        .errormessage{
            background: red;
            padding: 5px;
        }
        .successmessage{
            background: green;
            padding: 5px;
        }

    </style>
</head>
<body class="dashboardbody">
    <form action="editcarback.php" method="post">
        <table class="dashboard">
        <input type="hidden" value="<?=$id?>" name="id">
            <th>MODIFY CAR</th>    
        <?php
            if(isset($_SESSION['editcarerror'])) :?>
            <div class="errormessage">
                <p><?=$_SESSION['editcarerror'];
                 unset($_SESSION['editcarerror']);
                 ?></p>
            </div>
        <?php endif?>
            <tr>
                <td>Input year:</td>
                <td><input type="text" value="<?=$manufactureyear?>" name="manufactureyear"></td>
            </tr>
            <tr>
                <td>Input make:</td>
                <td><input type="text" placeholder="eg Makedez benz" value="<?=$make?>" name="make"></td>
            </tr>
            <tr>
                <td>Input model:</td>
                <td><input type="text" placeholder="eg Subaru" value="<?=$model?>" name="model"></td>
            </tr>
            <tr>
                <td>Input bodystyle:</td>
                <td><input type="text" placeholder="Sedan" value="<?=$bodytype?>" name="bodytype"></td>
            </tr>
            <tr>
                <td>Input Car condition:</td>
                <td><input type="text" placeholder="brand new" value="<?=$carcondition?>" name="carcondition"></td>
            </tr>
            <tr>
                <td>Input Price:</td>
                <td><input type="text" placeholder="20000" value="<?=$price?>" name="price"></td>
            </tr>
            
            <tr>
                <td>Country of origin:</td>
                <td><input type="text" placeholder="Kenya" value="<?=$country?>" name="country"></td>
            </tr>
            <tr>
                <td>Mileage:</td>
                <td><input type="text" placeholder="20000" value="<?=$mileage?>" name="mileage"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" id="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>