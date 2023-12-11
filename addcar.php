<?php 
    require_once 'database/connection.php';

    $manufactureyear=$_SESSION['addcardata']['manufactureyear'] ?? null;
    $make=$_SESSION['addcardata']['make'] ?? null;
    $model=$_SESSION['addcardata']['model'] ?? null;
    $bodytype=$_SESSION['addcardata']['bodytype'] ?? null;
    $carcondition=$_SESSION['addcardata']['carcondition'] ?? null;
    $price=$_SESSION['addcardata']['price'] ?? null;
    $country=$_SESSION['addcardata']['country'] ?? null;
    $mileage=$_SESSION['addcardata']['mileage'] ?? null;
    $engine=$_SESSION['addcardata']['engine'] ?? null;
    $capacity=$_SESSION['addcardata']['capacity'] ?? null;
    $doors=$_SESSION['addcardata']['doors'] ?? null;
    $driveType=$_SESSION['addcardata']['driveType'] ?? null;
    // unset($_SESSION['addcardata']);
    
?>
<?php
 if(!isset($_SESSION['user-email'])){
    header('location:'.ROOT_URL);
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
    border-radius: 8px;
}

    </style>
</head>
<body class="dashboardbody">
    <form action="<?=ROOT_URL?>addcarback.php" method="post" enctype="multipart/form-data">
        <table class="dashboard">
            <th>ADD CAR</th>
            <?php
        if(isset($_SESSION['addcar'])): ?>
        <div class="errormessage">
            <p><?=$_SESSION['addcar'];
            unset($_SESSION['addcar']);
            ?></p>
        </div>
        <?php endif ?>
            <tr>
                <td>Input year:</td>
                <td><input type="text" placeholder="2023" name="manufactureyear" value="<?=$manufactureyear?>"></td>
            </tr>
            <tr>
                <td>Input make:</td>
                <td><input type="text" placeholder="eg Makedez benz" name="make" value="<?=$make?>"></td>
            </tr>
            <tr>
                <td>Input model:</td>
                <td><input type="text" placeholder="eg Subaru" name="model" value="<?=$model?>"></td>
            </tr>
            <tr>
                <td>Input bodystyle:</td>
                <td><input type="text" placeholder="Sedan" name="bodytype" value="<?=$bodytype?>"></td>
            </tr>
            <tr>
                <td>Input Car condition:</td>
                <td><input type="text" placeholder="brand new" name="carcondition" value="<?=$carcondition?>"></td>
            </tr>
            <tr>
                <td>Input Price:</td>
                <td><input type="text" placeholder="20000" name="price" value="<?=$price?>"></td>
            </tr>
            <tr>
                <td>Country of origin:</td>
                <td><input type="text" placeholder="Kenya" name="country" value="<?=$country?>"></td>
            </tr>
            <tr>
                <td>Mileage:</td>
                <td><input type="text" placeholder="20000" name="mileage" value="<?=$mileage?>"></td>
            </tr>
            <tr>
                <td>Engine:</td>
                <td><input type="text" placeholder="20000" name="engine" value="<?=$engine?>"></td>
            </tr>
            <tr>
                <td>Capacity:</td>
                <td><input type="text" placeholder="4" name="capacity" value="<?=$capacity?>"></td>
            </tr>
            <tr>
                <td>Doors:</td>
                <td><input type="text" placeholder="4" name="doors" value="<?=$doors?>"></td>
            </tr>
            <tr>
                <td>Drive Type:</td>
                <td><input type="text" placeholder="4WD" name="driveType" value="<?=$driveType?>"></td>
            </tr>
            <tr>
                <td>Front view:</td>
                <td><input type="file" name="front"></td>
            </tr>
            <tr>
                <td>Back view:</td>
                <td><input type="file" name="back"></td>
            </tr>
            <tr>
                <td>Sideview:</td>
                <td><input type="file" name="side"></td>
            </tr>
            <tr>
                <td>Interior:</td>
                <td><input type="file" name="interior"></td>
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