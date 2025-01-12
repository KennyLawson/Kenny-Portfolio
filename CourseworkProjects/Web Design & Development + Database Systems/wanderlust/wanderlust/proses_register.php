<?php
require_once "conn.php";

if (isAuth()) {
    header("Location: index.php");
    exit();
}

$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
$kontak = $_POST['contact'];
$nik = $_POST['nik'];

// Mengecek keberadaan pengguna dengan email yang sesuai
$sql = "SELECT * FROM user WHERE email = '$email'";
$user = queryData($sql);

if (!empty($user)) {
    echo "<script>alert('Email sudah terdaftar'); window.location.replace('register.php');</script>";
    exit();
} else {
    $hashedPw = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO user VALUE(NULL, '$username', '$email', '$hashedPw', $nik, $kontak, NULL)";

    queryData($query);
    echo "<script>alert('Registerasi berhasil'); window.location.replace('login.php');</script>";
}
?>
