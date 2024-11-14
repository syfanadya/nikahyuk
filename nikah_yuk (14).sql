-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 05:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikah_yuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `desain`
--

CREATE TABLE `desain` (
  `id_desain` int(11) NOT NULL,
  `nama_desain` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desain`
--

INSERT INTO `desain` (`id_desain`, `nama_desain`) VALUES
(1, 'Classic'),
(2, 'Blue Blossom'),
(3, 'Golden');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `iduser`, `nama`, `komentar`) VALUES
(7, 12, 'Syfa', 'oke');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `status_pembayaran` varchar(50) NOT NULL DEFAULT ' Belum Terverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `iduser`, `tanggal`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(28, 14, '2023-06-18 22:25:01', 'bukti_2.png', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `id_desain` int(11) NOT NULL,
  `nama_pengantin_pria` varchar(250) NOT NULL,
  `nama_pengantin_wanita` varchar(250) NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `lokasi_acara` varchar(250) NOT NULL,
  `waktu_acara` varchar(50) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `nama_ayah_pengantin_pria` varchar(250) NOT NULL,
  `nama_ibu_pengantin_pria` varchar(250) NOT NULL,
  `nama_ayah_pengantin_wanita` varchar(250) NOT NULL,
  `nama_ibu_pengantin_wanita` varchar(250) NOT NULL,
  `ayat_kitab_suci` text NOT NULL,
  `foto_pengantin_pria` varchar(100) NOT NULL,
  `foto_pengantin_wanita` varchar(100) NOT NULL,
  `foto_prewedd_satu` varchar(100) NOT NULL,
  `foto_galeri_satu` varchar(100) NOT NULL,
  `norek_pengantin_pria` varchar(250) NOT NULL,
  `norek_pengantin_wanita` varchar(250) NOT NULL,
  `lagu` text NOT NULL,
  `tanggal_pemesanan` datetime NOT NULL,
  `status_pesanan` varchar(50) NOT NULL DEFAULT 'Dalam Proses',
  `foto_prewedd_dua` varchar(100) NOT NULL,
  `foto_galeri_dua` varchar(100) NOT NULL,
  `foto_galeri_tiga` varchar(100) NOT NULL,
  `foto_galeri_empat` varchar(100) NOT NULL,
  `linkundangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `iduser`, `id_desain`, `nama_pengantin_pria`, `nama_pengantin_wanita`, `nomor_hp`, `lokasi_acara`, `waktu_acara`, `tanggal_acara`, `nama_ayah_pengantin_pria`, `nama_ibu_pengantin_pria`, `nama_ayah_pengantin_wanita`, `nama_ibu_pengantin_wanita`, `ayat_kitab_suci`, `foto_pengantin_pria`, `foto_pengantin_wanita`, `foto_prewedd_satu`, `foto_galeri_satu`, `norek_pengantin_pria`, `norek_pengantin_wanita`, `lagu`, `tanggal_pemesanan`, `status_pesanan`, `foto_prewedd_dua`, `foto_galeri_dua`, `foto_galeri_tiga`, `foto_galeri_empat`, `linkundangan`) VALUES
(67, 14, 1, 'Rey Mbayang', 'Dinda Hauw', '082345667899', 'BRP Sovereign Plaza Ballroom', '09:00 - 16:00', '2023-06-30', 'Atmaja', 'Hani', 'Kemas', 'Husna', '\"Wanita yang baik adalah untuk lelaki yang baik. Lelaki yang baik untuk wanita yang baik pula (begitu pula sebaliknya). Bagi mereka ampunan.dan reski yang melimpah (yaitu Surga).\" (QS. An Nuur(24):26)', 'rey.jpg', 'dinda.jpg', 'prewedd1.jpg', 'galeri1.jpg', '0909766557900', '999976655799', 'its you - seizari', '2023-06-18 22:24:23', 'Selesai', 'prewedd2.jpg', 'galeri2.jpg', 'galeri3.jpg', 'galeri4.jpeg', 'http://localhost/4602-tubes-nikah-yuk-2/desainundangan/desain1/editindex1.php?id=67');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`) VALUES
(10, 'admin', 'nikahyuk1603@gmail.com', '285268f19165e2be1abaf02143cc6fa8', 1),
(14, 'Nadya', 'syfanadya_wening_27tkj@student.smktelkom-mlg.sch.id', '9fce44221f810740e02b83594a660e58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desain`
--
ALTER TABLE `desain`
  ADD PRIMARY KEY (`id_desain`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desain`
--
ALTER TABLE `desain`
  MODIFY `id_desain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
