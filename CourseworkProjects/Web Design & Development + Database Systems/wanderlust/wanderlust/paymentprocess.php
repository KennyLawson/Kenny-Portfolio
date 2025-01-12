<?php
require_once "conn.php";

if (!isAuth()) {
	header("Location: login.php");
	exit();
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("booking.php");
    exit();
}

// Mengambil data dari form pembayaran
$metode = $_POST['metode'];
$kode = $_POST['kode'];

if(empty($kode)) {
    header("booking.php");
    exit();
}

// Menyimpan data ke dalam tabel transaksi
$sql = "UPDATE transaksi 
SET metode = '$metode',
status_transaksi = 'LUNAS'
WHERE kode_transaksi = '$kode'";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Pembayaran berhasil!'); window.location.replace('receipt.php?k=$kode');</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
