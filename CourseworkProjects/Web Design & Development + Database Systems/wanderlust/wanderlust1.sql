-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 02:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wanderlust`
--

-- --------------------------------------------------------

--
-- Table structure for table `keterangan_paket`
--

CREATE TABLE `keterangan_paket` (
  `id_keterangan` int(11) NOT NULL,
  `id_penginapan` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keterangan_paket`
--

INSERT INTO `keterangan_paket` (`id_keterangan`, `id_penginapan`, `id_wisata`, `id_lokasi`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 2, 2),
(4, 3, 3, 3),
(5, 4, 3, 3),
(6, 2, 4, 4),
(7, 4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama`, `keterangan`) VALUES
(1, 'Waerebo', 'Nusa Tenggara Timur\r\n'),
(2, 'Nusa Penida', 'Bali'),
(3, 'Raja Ampat', 'Papua'),
(4, 'Gunung Bromo', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `id_keterangan` int(11) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `keterangan_paket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_keterangan`, `jumlah_hari`, `keterangan_paket`) VALUES
(1, 1, 4, '5 Days / 4 Night'),
(2, 2, 4, '5 Days / 4 Night'),
(3, 3, 2, '3 Days / 2 Night'),
(4, 4, 6, '7 Days / 6 Night'),
(5, 5, 6, '7 Days / 6 Night'),
(6, 6, 3, '4 Days / 3 Night'),
(7, 7, 3, '4 Days / 3 Night');

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `nama_penginapan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nama_penginapan`, `harga`) VALUES
(1, 'Homestay ', 350000),
(2, 'Camping : Include Perlengkapan', 500000),
(3, 'Resort', 3500000),
(4, 'Kapal Pinisi', 3000000),
(5, 'Gesthouse', 800000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `tanggal` date NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_user` int(255) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `tgl_transaksi` date NOT NULL DEFAULT current_timestamp(),
  `status_transaksi` varchar(10) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`tanggal`, `id_transaksi`, `id_paket`, `id_user`, `kode_transaksi`, `total_harga`, `metode`, `tgl_transaksi`, `status_transaksi`) VALUES
('2023-06-28', 68, 3, 49, 'cOykG2KtU2Poy0NdHycFeBSLoWpIGHOGA7PLUK8HPDLQfFToEQ', 7750000, 'Bank Transfer', '2023-06-13', 'LUNAS'),
('2023-06-13', 69, 3, 48, 'i9xG3TPKPDmiR2YZiuCeBXlzbtrIRDA3lZ3BfjPLzOJ5mijJ7N', 7750000, 'Bank Transfer', '2023-06-13', 'LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `NIK` int(16) NOT NULL,
  `telp` int(20) NOT NULL,
  `auth` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `NIK`, `telp`, `auth`) VALUES
(48, 'makanudang01', 'wkomangadi44@gmail.com', '$2y$10$rgShouC3aUKNjW0VWBW9GuNETz9SVUsm6HEETLDuHvlQhEHEEV.Lu', 123123, 123123123, 'DYF1fIIhokTtqpzMqfIkXfrxh53qfVKw5zwFAK9hzdlxxwIPRt'),
(49, 'totallynotisla01', 'adi@gmail.com', '$2y$10$kKmepVPd9dJ1qXHu6TRyeeNJF6OTD3WwHfS2UE9rH7ffUG1SNbS1u', 123123, 123123123, 'nd44pc9VuopfQspvR5u9uP5OsTAlsPSDbaZBHwqrzvMfNTd9CR');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(250) NOT NULL,
  `deskripsi_wisata` text NOT NULL,
  `harga_wisata` int(11) NOT NULL,
  `img_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `deskripsi_wisata`, `harga_wisata`, `img_wisata`) VALUES
(1, 'WAE REBO VILLAGE', 'Experience the enchanting beauty of Wae Rebo, where traditional cone-shaped houses, captivating rituals, and breathtaking landscapes converge, offering a truly immersive cultural and natural journey like no other.', 1500000, 'desWae.png'),
(2, 'DIVING IN NUSA PENIDA', 'Explore the stunning beaches of Nusa Penida and immerse yourself in the beauty of crystal-clear waters and white sandy shores. Relax and unwind in luxurious beachfront resorts, indulge in delicious local cuisine, and experience thrilling water activities. Discover the perfect beach getaway in Nusa Penida!', 750000, 'desNusa.png'),
(3, 'RAJA AMPAT', 'Experience the mesmerizing beauty of Raja Ampat, a paradise of turquoise waters, pristine coral reefs, and lush tropical islands, making it a must-visit destination for nature enthusiasts and underwater adventurers alike.', 2500000, 'desRaja.png'),
(4, 'MOUNT BROMO', 'Mount Bromo, with its mesmerizing sunrise and breathtaking panoramic views, is a must-visit destination that will leave you in awe of its majestic beauty and provide an unforgettable adventure in the heart of East Java, Indonesia.', 500000, 'desBromo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keterangan_paket`
--
ALTER TABLE `keterangan_paket`
  ADD PRIMARY KEY (`id_keterangan`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_penginapan` (`id_penginapan`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_keterangan` (`id_keterangan`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keterangan_paket`
--
ALTER TABLE `keterangan_paket`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keterangan_paket`
--
ALTER TABLE `keterangan_paket`
  ADD CONSTRAINT `keterangan_paket_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keterangan_paket_ibfk_2` FOREIGN KEY (`id_penginapan`) REFERENCES `penginapan` (`id_penginapan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keterangan_paket_ibfk_3` FOREIGN KEY (`id_wisata`) REFERENCES `wisata` (`id_wisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan_paket` (`id_keterangan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
