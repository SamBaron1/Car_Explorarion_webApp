<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: radial-gradient(circle, #d6998b, rgb(157, 133, 225));  
            
        }
        a{
            text-decoration: none;
        }
        form{
            width: 30%;
            height: 60vh;
            border: 1px solid black;
            text-align: center;
            margin: auto;
            background-color: blanchedalmond;
            position: relative;
            top: 20vh;
           

            
            
        }
    </style>
</head>
<body>
    <form action="">
        <h1>Car Exploration</h1>
        <hr>
        <br>
        <br>
        Email <br>
        <input placeholder="email"  type="text"><br><br>
        New Password <br>
        <input placeholder="New Password"  type="text"><br><br>
        Confirm Password <br>
        <input placeholder="New Password"  type="text"><br><br>
        <input type="button" value="Confirm" onclick="setvalue()"><br><br>
    </form>
    <script>
        function setvalue(){
            alert("password changed");
            window.location.href = "login.php"
        }
    </script>
</body>
</html>