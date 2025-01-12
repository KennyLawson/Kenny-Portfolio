<?php
require_once "conn.php";

if (isAuth()) {
    header("Location: index.php");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];

// Mengecek keberadaan pengguna dengan email yang sesuai
$sql = "SELECT * FROM user WHERE email = '$email'";
$user = queryData($sql);

if (!empty($user)) {
    global $user;
    global $password;

    // Memverifikasi password
    if (password_verify($password, $user[0]['password'])) {
        $token = randStr(50);
        $_SESSION["user"] = $user[0];
        $_SESSION["authToken"] = $token;

        $sql = "UPDATE user SET auth = '$token' WHERE id_user = '{$user[0]['id_user']}'";
        queryData($sql);

        echo "<script>alert('Login Berhasil.'); window.location.replace('index2.php');</script>";
    } else {
        echo "<script>alert('Password salah. Silakan coba lagi.'); window.location.replace('login.php');</script>";
    }
} else {
    echo "<script>alert('Email tidak terdaftar. Silakan coba lagi.'); window.location.replace('login.php');</script>";
}
?>
