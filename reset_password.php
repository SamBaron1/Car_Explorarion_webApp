<!--<!DOCTYPE html>
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

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: radial-gradient(circle, #d6998b, rgb(157, 133, 225));;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100vh;
    background: url(Documents/login.jpg);
    background-size: cover;
    background-position: center;
    animation: animateBg 5s infinite;
}
@keyframes animateBg{
    100%{
        filter: hue-rotate(360deg);
    }

}
.login-box{
    position: relative;
    width: 400px;
    height: 450px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .5);
    border-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    backdrop-filter: blur(15px);
}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.input-box{
    position: relative;
    width: 310px;
    margin: 30px 0;
    border-bottom: 2px solid #fff;
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: #fff;
    pointer-events: none;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
    transition: -5s;
}
.input-box input{
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    line-height: 57px;
}
.remember-forgot{
    margin: -15px 0 15px;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input{
    margin-right: 3px;
}
.remember-forgot a{
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
button{
    width: 100%;
    height: 40px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #000;
    font-weight: 500;
}
.register-link{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
@media(max-width:350px){
    .login-box{
        width: 100%;
        height: 100vh;
        border: none;
        border-radius: 0;
    }
    .input-box{
        width: 290px;
    }
}
    </style>
    <section>
    <div class="login-box">
        <form action="">
            <h2>Car Exploration</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name = "mail">
                </ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name = "lock-closed">
                </ion-icon></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="reset_password.html">Forgot password?</a>
            </div>
            <button type="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="sign_up.html">Register</a></p>
            </div>
        </form>
    </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script module src="https://unpkg.comionicons@5.5.7/dist/ionicons/ionicons.js"></script>
</body>
</html>
