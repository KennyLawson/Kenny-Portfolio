<?php 
require_once "conn.php";

$id = $_GET["id"];

if (!isset($id)) {
	header("Location: package.php");
	exit();
}


$query = "SELECT * FROM paket as p
JOIN keterangan_paket AS kp ON kp.id_keterangan = p.id_keterangan
JOIN penginapan AS pn ON pn.id_penginapan = kp.id_penginapan
JOIN wisata AS w ON w.id_wisata = kp.id_wisata
JOIN lokasi AS l ON l.id_lokasi = kp.id_lokasi
WHERE id_paket = $id;
";

$data = queryData($query);

if (empty($data)) {
	header("Location: package.php");
	exit();
}

$data = $data[0];
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style4.css">
  <title>Tour Detail</title>
</head>
<body>
  <header>
    <h1>Tour Detail</h1>
  </header>

  <main class="container">
    <section class="tour-detail">
      <h2 class="tour-title"><?= $data["nama_wisata"] ?></h2>
      <div class="tour-image">
      <img src="./assets/images/<?= $data["img_wisata"] ?>" alt="Gambar <?= $data["img_wisata"] ?>" loading="lazy">
      </div>
      <div class="tour-description">
        <h3>Description</h3>
        <p>
          <?= $data["deskripsi_wisata"] ?>
        </p>
      </div>
      <div class="tour-details">
        <h3>Details</h3>
        <ul>
          <li><strong>Duration:</strong> <?= $data["keterangan_paket"] ?></li>
          <li><strong>Group Size:</strong> 6 people</li>
          <li><strong>Location:</strong> <?= $data["keterangan"] ?> </li>
          <li><strong>Included:</strong> <?= $data["nama_penginapan"]?> </li>
        </ul>
      </div>
      <div class="btn-container">
         <a href="booking.php" class="btn btn-secondary">Book Now</a>
         </div>
      </div>
    </section>
    <footer>
    <div class="container">
      <div class="footer-text">
        <p>&copy; 2023 Wanderlust. All rights reserved.</p>
      </div>
    </div>
  </footer>
  </main>
</body>
</html>
