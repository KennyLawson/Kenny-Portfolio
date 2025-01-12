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
    <title>Sign Up Wanderlust</title>
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
    <div class="container" style="height: auto; border-radius: 15px; overflow: hidden;">
        <div class="login">
            <form action="proses_register.php" method="POST">
                <h1>Sign Up</h1>
                <hr>
                <br>
                <br>
                <label for="username">Username</label>
                    <input required type="text" name="username" id="username" placeholder="Username">
                <label for="email">Email</label>
                    <input required type="text" name="email" id="email" placeholder="example@gmail.com">
                <label for="number">NIK</label>
                    <input required type="number" name="nik" id="number" placeholder="NIK">
                <label for="kontak">No. HP</label>
                    <input required type="number" name="contact" id="number" placeholder="08xxxxxx">
                <label for="password">Password</label>
                    <input required type="password" name="password" id="password" placeholder="Password">
                <button type="submit">Sign Up</button>
                <p>
                    <a href="login.php">Already have account? Login</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/register.png" alt="">
        </div>
    </div>
</body>

</html>