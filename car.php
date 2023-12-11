<?php
    include('database/connection.php');

    $id=$_GET['id'];
    $carquery="SELECT * FROM cars WHERE id='$id'";
    $carresult=mysqli_query($conn,$carquery);
    $car=mysqli_fetch_assoc($carresult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
    <style>
        #front{
            width: 900px;
            align-items: center;
            margin-left: 150px;
        }
        .otherimages{
            margin-top: 20px;
            max-width: 100vw;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            grid-gap: 10px;
        }

        table{
            background-color: white;
            margin: auto;
            width: 500px;
            margin-top: 50px;
            margin-bottom: 75px;
        }

        .otherimages img{
            width: 400px;
        }
    </style>
</head>
<body>
    <div class="carcontainer">
        <img src="<?=$car['frontview']?>" alt="" id="front">
        <div class="otherimages">
        <img src="<?=$car['backview']?>" alt="">
        <img src="<?=$car['sideview']?>" alt="">
        <img src="<?=$car['interior']?>" alt="">
        </div>
        <div class="details">
            <table>
                <tr>
                <td>Make:</td>
                <td><?=$car['make']?></td>
                </tr>
                <tr>
                <td>Model:</td>
                <td><?=$car['model']?></td>
                </tr>
                <tr>
                <td>Condition:</td>
                <td><?=$car['carcondition']?></td>
                </tr>
                <tr>
                <td>Price:</td>
                <td><?=$car['price']?> Ksh</td>
                </tr>
                <tr>
                <td>Mileage:</td>
                <td><?=$car['mileage']?> KMs</td>
                </tr>
                <tr>
                <td>Country of Origin:</td>
                <td><?=$car['country']?></td>
                </tr>
                <tr>
                <td>Year of manufacture:</td>
                <td><?=$car['manufactureyear']?></td>
                </tr>
                <tr>
                <td>Bodytype:</td>
                <td><?=$car['bodytype']?></td>
                </tr>
                <tr>
                <td>Engine:</td>
                <td><?=$car['engine']?></td>
                </tr>
                <tr>
                <td>Seating Capacity:</td>
                <td><?=$car['capacity']?></td>
                </tr>
                <tr>
                <td>Doors:</td>
                <td><?=$car['doors']?></td>
                </tr>
                <tr>
                <td>Drive Type:</td>
                <td><?=$car['driveType']?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>