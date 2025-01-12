<?php 
require_once "conn.php";

if (!isAuth()) {
	header("Location: login.php");
	exit();
}

$kode = $_GET['k'];
if (empty($kode)) {
    header('Location: booking.php');
    exit();
}

$query = "SELECT * FROM transaksi AS t
JOIN paket AS p ON p.id_paket = t.id_paket
JOIN keterangan_paket AS kp ON kp.id_keterangan = p.id_keterangan
JOIN wisata AS w ON w.id_wisata = kp.id_wisata
JOIN lokasi AS l ON l.id_lokasi = kp.id_lokasi
JOIN user AS u ON t.id_user = u.id_user
WHERE t.kode_transaksi = '$kode';
";
$transaksi = queryData($query);

$data = $transaksi[0];
$_telp = (string)$data["telp"];
$telp = substr($_telp, 0, 3) . "-" . substr($_telp, 3, 3) . "-" . substr($_telp, 6);

if (empty($transaksi) || $transaksi[0]["status_transaksi"] == "LUNAS") {
    header('Location: booking.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment |  Wanderlust</title>
    <link rel="stylesheet" href="assets/css/invoice.css">
    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>
    <div class="outer-container">
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
                </tfoot>
            </table>
            <div class="footer">
                <p>Thank you for your business.</p>
            </div>
        </div>
        <div class="container">
            <div class="login">
                <h1>Payment</h1>

                <form class="reservation-form" action="paymentprocess.php" method="POST">
                    <input type="text" value="<?= $transaksi[0]["kode_transaksi"] ?>" name="kode" hidden>
                    <label for="metode">Payment Method:</label>
                    <select id="metode" name="metode" required style="width: 100%; padding: .5rem 1rem;">
                        <option value="">-- Pilih Metode Pembayaran --</option>
                        <option value="Bank Transfer">Bank Transfer</option>
                        <option value="Credit Card">Credit Card</option>
                    </select>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="assets/images/cardd.png" alt="">
                    </div>

                    <button type="submit">Bayar</button>
                </form>
            </div>
            <div class="right">
                <img src="assets/images/login.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>






