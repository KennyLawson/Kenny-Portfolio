
<?php
require_once "conn.php";

if (!isAuth()) {
	header("Location: login.php");
	exit();
}
// Koneksi ke database

$kode = $_GET["k"];
if (empty($kode)) {
    header("Location: booking.php");
    exit();
}



// Mendapatkan data dari database
$query = "SELECT * FROM transaksi AS t
JOIN paket AS p ON p.id_paket = t.id_paket
JOIN keterangan_paket AS kp ON kp.id_keterangan = p.id_keterangan
JOIN wisata AS w ON w.id_wisata = kp.id_wisata
JOIN lokasi AS l ON l.id_lokasi = kp.id_lokasi
JOIN user AS u ON t.id_user = u.id_user
WHERE t.kode_transaksi = '$kode';
";
$result = queryData($query);

if (empty($result)) {
    header("Location: booking.php");
    exit();
}

$data = $result[0];
if ($data["status_transaksi"] != "LUNAS") {
    header("Location: form-pembayaran.php?k={$data["kode_transaksi"]}");
    exit();
}

$_telp = (string)$data["telp"];
$telp = substr($_telp, 0, 3) . "-" . substr($_telp, 3, 3) . "-" . substr($_telp, 6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wanderluts | Invoice</title>
    <link rel="stylesheet" href="assets/css/invoice.css">
</head>

<body>
    <div class="invoice">
        <div class="header">
            <div class="company-details">
                <h2> <span><img src="assets/images/wanderlust1.png" style="width: 2rem; height: auto;" alt=""></span> Wanderlust</h2>
                <p>Jalan Scientia Boulevard Gading, Serpong, 15810</p>
                <p>021-333-981</p>
                <p>wanderlustid@gmail.com</p>
            </div>
        </div>
        <div class="invoice-details">
            <div class="left">
                <h3>Invoice To:</h3>
                <p>Name: <?= $data["nama_user"] ?></p>
                <p>Phone: <?= $telp ?></p>
                <p>Email: <?= $data["email"] ?></p>
            </div>
            <div class="right">
                <h3>Invoice Details:</h3>
                <p><strong>Invoice Number:</strong> <?= $data["id_transaksi"] ?></p>
                <p><strong>Transaction Date:</strong> <?= $data["tgl_transaksi"] ?> </p>
            </div>
        </div>
        <table class="invoice-items">
            <thead>
                <tr>
                    <th>Package</th>
                    <th>Lokasi</th>
                    <th>Unit Price</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data["nama_wisata"] ?></td>
                    <td><?= $data["nama"] ?></td>
                    <td>RP. <?= number_format($data["total_harga"], 2) ?></td>
                    <td>1</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Subtotal:</td>
                    <td>RP. <?= number_format($data["total_harga"], 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Total:</td>
                    <td>RP. <?= number_format($data["total_harga"], 2) ?></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Metode Pembayaran:</td>
                    <td><span style="padding: .5rem 1rem; background-color: #2c3e50; font-weight: 600; color: white; border-radius: .25rem;"><?= strtoupper($data["metode"]) ?></span></td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Status:</td>
                    <td><span style="padding: .5rem 1rem; background-color: #2c3e50; font-weight: 600; color: white; border-radius: .25rem;"><?= strtoupper($data["status_transaksi"]) ?></span></td>
                </tr>
            </tfoot>
        </table>
        <div class="footer">
            <p>Thank you for your business.</p>
        </div>
    </div>
</body>

</html>
