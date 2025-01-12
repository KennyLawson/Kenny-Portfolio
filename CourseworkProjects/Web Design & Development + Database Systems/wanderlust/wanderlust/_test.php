<?php 
require_once "conn.php";

$query = "SELECT * FROM paket as p
JOIN keterangan_paket AS kp ON kp.id_keterangan = p.id_keterangan
JOIN penginapan AS pn ON pn.id_penginapan = kp.id_penginapan
JOIN wisata AS w ON w.id_wisata = kp.id_wisata
JOIN lokasi AS l ON l.id_lokasi = kp.id_lokasi
WHERE id_paket = 1 ;
";

$data = queryData($query);

echo isAuth() ? "Yes" : "No";


// session_destroy();
?>