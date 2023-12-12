<?php
    include('database/connection.php');

    if(isset($_POST['search'])){
        $year=filter_var($_POST['year'],FILTER_VALIDATE_INT);
        $price=filter_var($_POST['price'],FILTER_VALIDATE_INT);
        $make=filter_var($_POST['make'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $model=filter_var($_POST['model'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $bodystyle=filter_var($_POST['bodystyle'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $condition=filter_var($_POST['condition'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $searchquery="SELECT * FROM cars WHERE 1=1";
        if(!empty($year) ){
            $searchquery.=" AND manufactureyear='$year'";
        } if(!empty($make)){
            $searchquery.=" AND make='$make'";
        }if(!empty($model)){
            $searchquery.=" AND model='$model'";
        }if(!empty($bodystyle)){
            $searchquery.=" AND bodytype='$bodystyle'";
        }if(!empty($condition)){
            $searchquery.=" AND carcondition='$condition'";
        }if(!empty($price)){
            $searchquery.=" AND price='$price'";
        }
       
            $searchresults=mysqli_query($conn,$searchquery);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1 class="sub-title">Searched <span>Cars.</span></h1>
    <div class="car-details" id="featured">
        <?php while($car=mysqli_fetch_assoc($searchresults)) : ?>

            <div class="car-container">
                <a href="<?=ROOT_URL?>car.php?id=<?=$car['id']?>">
                    <img src="<?=$car['frontview'] ?>" alt="Car Image1">
                </a>
                    <ul>
                        <li>Name: <?=$car['make']. " " .$car['model']?></li>
                        <li>Price: Kshs <?=$car['price']?></li>
                    </ul>
            </div>
        <?php endwhile?>
    </div>
</body>
</html>