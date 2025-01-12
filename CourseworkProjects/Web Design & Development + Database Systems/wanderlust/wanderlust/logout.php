<?php
require_once "conn.php";

if (!isAuth()) {
    header("Location: index.php");
    exit();
}

session_destroy();

header("Location: index.php");

?>