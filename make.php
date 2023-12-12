<?php
    include('database/connection.php');

    $id=filter_var($_GET['id'],FILTER_VALIDATE_INT);
    $getmakequery="SELECT * FROM carmakes WHERE id='$id'";
    $makeresults=mysqli_query($conn,$getmakequery);
    $make=mysqli_fetch_assoc($makeresults);

    $makename=$make['makename'];
    $carsquery="SELECT * FROM cars WHERE make='$makename'";
    $carsresults=mysqli_query($conn,$carsquery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="other.css">
</head>
<body>
    <div class="makecontainer">
        <div class="makecontent">
            <img src="<?=$make['logo']?>" alt="">
            <h1><?=$make['makename']?></h1>
            <p><?=$make['description']?></p>
            <div class="makecars">
                <hr><h1><?=$make['makename']?> cars</h1>
                <div class="makecarsimages">
                    <?php while($car=mysqli_fetch_assoc($carsresults)) :?>
                        <a href="<?=ROOT_URL?>car.php?id=<?=$car['id']?>"><img src="<?=$car['frontview']?>" alt=""></a>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>