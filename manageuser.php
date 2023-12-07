<?php 
    require_once 'database/connection.php';
?>
<?php
 if(!isset($_SESSION['user-email'])){
    header('location:'.ROOT_URL);
 }

 $loggedinadmin=$_SESSION['user-email'];
 $usersquery="SELECT * FROM users WHERE NOT email='$loggedinadmin'";
 $users=mysqli_query($conn,$usersquery);
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


    
    </style>
</head>
<body>
    <section class="dashboard">
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
                        <a href="manageuser.php" class="active">
                            <h5>Manage Users</h5>
                        </a>
                    </li>
                    <li>
                        <a href="addcar.php">
                            <h5>Add Car</h5>
                        </a>
                    </li>
                    <li>
                        <a href="managecar.php">
                            <h5>Manage Car</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Users</h2>
                <table>
                    <thead>
                        <tr>
                            <th>First name</th>
                            <th>Email</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($user=mysqli_fetch_assoc($users)): ?>
                        <tr>
                            <td><?=$user['firstname']?></td>
                            <td><?=$user['email']?></td>
                            <td><a href="edituser.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-zip.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <?php endwhile?>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
</body>
</html>