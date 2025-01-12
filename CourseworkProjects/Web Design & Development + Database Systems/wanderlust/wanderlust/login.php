<?php 
require_once "conn.php";

if (isAuth()) {
    header("Location: index.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Wanderlust</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
    <div class="container" style="height: auto; border-radius: 15px; overflow: hidden;">
        <div class="login">
            <form action="proses_login.php" method="POST">
                <h1>Login</h1>
                <hr>
            </br>
            <br>
                <label>Email</label>
                <input name="email" type="email" placeholder="example@gmail.com">
                <label>Password</label>
                <input name="password" type="password" placeholder="Password">

                <button type="submit">Login</button>
                <p>
                    <a href="register.php">Not register yet?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/login.png" alt="">
        </div>
    </div>
</body>

</html>
