<?php 
    require_once 'database/connection.php';
?>
<?php
 if(!isset($_SESSION['user-email'])){
    header('location:'.ROOT_URL);
 }

 $carsquery="SELECT * FROM cars";
 $cars=mysqli_query($conn,$carsquery);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: rgb(104, 104, 171);
        }
     .btn.sm{
        padding: 0.3rem 0.7rem;
        font-size: 0.8rem;
    }

    td a{
        text-decoration: none;
        display: inline-block;
        background-color: #1e662b;
    }

    .btn.danger{
        background: red;
    }

    .btn:hover{
        background: #7777d9;
    }

    .dashboard{
        margin-top: 6rem;
        text-decoration: none;
        color: #fff;
    }

    .dashboard_container{
        display: grid;
        grid-template-columns: 14rem auto;
        gap: 1rem;
        background: #1e1e66;
        padding: 2rem;
        margin-bottom: 5rem;
    }

    .dashboard aside a{
        background-color: #6f6af8;
        display: flex;
        gap: 1rem;
        align-items: center;
        padding: 1.6rem;
        text-decoration: none;
        color: #fff;
    }

    .dashboard aside ul li:not(:last-child) a{
        border-bottom: 1px solid #1e1e66;
    }

    .dashboard aside a:hover{
        background: #2d2b7c;
    }

    .dashboard aside ul li{
        list-style: none;
    }

    .dashboard aside a.active{
        background-color: #1e1e66;
    }

    .dashboard main{
        margin-left: 1.5rem;
    }

    .dashboard main h2{
        margin: 0 0 2rem 0;
        line-height: 1;
    }

    .dashboard main table{
        width: 100%;
        text-align: left;
    }

    .dashboard main table th{
        background: #2d2b7c;
        padding: 0.8rem;
        color: #fff;
    }

    .dashboard main table td{
        padding: 0.8rem;
        border-bottom: 1px solid rgba(242, 242, 254, 0.7);
    }

    .dashboard main table tr:hover td{
        background-color: #0f0f3e;
        color: var(--color-white);
        cursor: default;
    }

    .sidebar_toggle{
        display: none;
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
<body>
    <section class="dashboard">
        
        <?php
            if(isset($_SESSION['deletecarsuccess'])) :?>
            <div class="successmessage">
                <p><?=$_SESSION['deletecarsuccess'];
                 unset($_SESSION['deletecarsuccess']);
                 ?></p>
            </div>
        <?php endif?>

        <?php
            if(isset($_SESSION['editcarsuccess'])) :?>
            <div class="successmessage">
                <p><?=$_SESSION['editcarsuccess'];
                 unset($_SESSION['editcarsuccess']);
                 ?></p>
            </div>
        <?php endif?>
        <div class="container dashboard_container">
            <button id="show_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-right"></i></button>
            <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="fa-solid fa-chevron-left"></i></button>
            <aside>
                <ul>
                    <li>
                        <a href="addmake.php">
                            <h5>Add Make</h5>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php" >
                            <h5>Manage Make</h5>
                        </a>
                    </li>
                    <li>
                        <a href="adduser.php">
                            <h5>Add user</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manageuser.php">
                            <h5>Manage users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="addcar.php">
                            <h5>Add Car</h5>
                        </a>
                    </li>
                    <li>
                        <a href="managecar.php" class="active">
                            <h5>Manage Car</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage cars</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>make</th>
                            <th>model</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($car=mysqli_fetch_assoc($cars)): ?>
                        <tr>
                            <td><?=$car['manufactureyear']?></td>
                            <td><?=$car['make']?></td>
                            <td><?=$car['model']?></td>
                            <td><a href="editcar.php?id=<?=$car['id'] ?>" class="btn sm">Edit</a></td>
                            <td><a href="deletecar.php?id=<?=$car['id'] ?>" class="btn sm danger">Delete</a></td>
                        </tr>
                        <?php endwhile?>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
</body>
</html>