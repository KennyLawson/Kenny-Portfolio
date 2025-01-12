<?php
$servername = "localhost";
$username = "root";
$password_db = ""; // Password untuk akses database
$database = "wanderlust";

$conn = new mysqli($servername, $username, $password_db, $database);

session_start();

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

function queryData(string $query): array {
    global $conn;
    $data = [];

    $result = $conn->query($query);
    if ($conn->error) throw new Exception($conn->error);
    if (!isset($result->num_rows) || $result->num_rows == 0) return [];

    while($row = $result->fetch_assoc()) {
        array_push($data, $row);
    }

    $result->free();
    return $data;
}

function randStr($length = 10) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $randomString;
}

function isAuth(): bool {
    if (!isset($_SESSION["authToken"])) return false;
    $sql = "SELECT * FROM user WHERE auth = '{$_SESSION["authToken"]}'";
    
    return !empty(queryData($sql));
}

?>
