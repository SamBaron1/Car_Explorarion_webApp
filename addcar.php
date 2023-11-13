<?php 
    require_once 'database/connection.php';
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
            height: 100vh;
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

    </style>
</head>
<body class="dashboardbody">
    <form action="">
        <table class="dashboard">
            <th>ADD CAR</th>
            <tr>
                <td>Input year:</td>
                <td><input type="text" value="2023"></td>
            </tr>
            <tr>
                <td>Input make:</td>
                <td><input type="text" placeholder="eg Makedez benz"></td>
            </tr>
            <tr>
                <td>Input model:</td>
                <td><input type="text" placeholder="eg Subaru"></td>
            </tr>
            <tr>
                <td>Input bodystyle:</td>
                <td><input type="text" placeholder="Sedan"></td>
            </tr>
            <tr>
                <td>Input Car condition:</td>
                <td><input type="text" placeholder="brand new"></td>
            </tr>
            <tr>
                <td>Input Price:</td>
                <td><input type="text" placeholder="20000"></td>
            </tr>
            <tr>
                <td>Country of origin:</td>
                <td><input type="text" placeholder="Kenya"></td>
            </tr>
            <tr>
                <td>Mileage:</td>
                <td><input type="text" placeholder="20000"></td>
            </tr>
            <tr>
                <td>Images:</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" id="submit">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>