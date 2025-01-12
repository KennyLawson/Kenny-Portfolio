<?php 
    require_once "conn.php";

    if (!isAuth()) {
        header("Location: login.php");
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
            <h1>Reservation</h1>

            <form class="reservation-form" action="p_reser.php" method="POST">
            <input type="hidden" name="id_transaksi" value="<?php echo $idTransaksi; ?>">
                <label for="date">Date:</label>
                <input type="date" id="tanggal" name="tanggal" required>

                <label for="package">Package:</label>
                <select id="id_paket" name="id_paket" required style="width: 100%; padding: .5rem 1rem;">
                    <option value="">-- Pilih Paket --</option>
                    <option value="2">Wae Rebo Package</option>
                    <option value="3">Nusa Penida Package</option>
                    <option value="4">Raja Ampat Package</option>
                    <option value="6">Bromo Package</option>
                </select>

                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="right">
            <img src="assets/images/reservation.png">
        </div>
    </div>
</body>

</html>






