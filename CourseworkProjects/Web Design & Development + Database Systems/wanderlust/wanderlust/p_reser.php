<?php
require_once "conn.php";

if (!isAuth()) {
	header("Location: login.php");
	exit();
}

$user = $_SESSION['user'];

// Ambil data dari form
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$idPaket = isset($_POST['id_paket']) ? $_POST['id_paket'] : '';

// Ambil harga penginapan dari database
$sqlKeterangan = "SELECT (w.harga_wisata + (pn.harga * p.jumlah_hari)) AS total_harga
                  FROM paket p
                  JOIN keterangan_paket kp ON p.id_keterangan = kp.id_keterangan
                  JOIN wisata w ON kp.id_wisata = w.id_wisata
                  JOIN penginapan pn ON kp.id_penginapan = pn.id_penginapan
                  WHERE p.id_paket = '$idPaket'";
                  
$resultKeterangan = queryData($sqlKeterangan);

if (!empty($resultKeterangan)) {
    $resultKeterangan = $resultKeterangan[0];
    $totalharga = $resultKeterangan['total_harga'];
    $kodeTransaksi = randStr(50);

    // Query untuk memasukkan data transaksi
    $sqlTransaksi = "INSERT INTO transaksi (id_paket, id_user, kode_transaksi, tanggal, total_harga)
                VALUES ('$idPaket', '{$user["id_user"]}','$kodeTransaksi', '$tanggal', '$totalharga')";
    queryData($sqlTransaksi);
    echo "<script>alert('Data berhasil tersimpan.'); window.location.replace('form-pembayaran.php?k=$kodeTransaksi');</script>";
} else {
    echo "Error: Tidak dapat mengambil data paket.";
}

// Tutup koneksi ke database
?>
