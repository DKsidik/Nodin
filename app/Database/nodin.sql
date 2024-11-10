-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2024 at 01:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nodin`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_db`
--

CREATE TABLE `surat_db` (
  `id` int(11) NOT NULL,
  `kepada` varchar(255) DEFAULT NULL,
  `pembuat` varchar(255) DEFAULT NULL,
  `sifat` varchar(50) DEFAULT NULL,
  `hal` varchar(255) DEFAULT NULL,
  `tembusan` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat_db`
--

INSERT INTO `surat_db` (`id`, `kepada`, `pembuat`, `sifat`, `hal`, `tembusan`, `lampiran`, `tanggal`, `isi`) VALUES
(1, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'Pemohon2', 'diperlukan', 'surat perjalanan', 'i halaman', NULL, '0000-00-00', 'qwdqdqdw'),
(2, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'Pemohon2', 'Penting', 'surat perjalanan', 'i halaman', NULL, '0000-00-00', 'sadfgdfgaagad'),
(3, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'Pemohon2', 'diperlukan', 'wdsfdsdc', 'i halaman', NULL, '0000-00-00', 'DAd'),
(4, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'Pemohon2', 'diperlukan', 'surat perjalanan', 'i halaman', NULL, '0000-00-00', 'axcc'),
(5, NULL, 'Pemohon', NULL, '', '', NULL, '0000-00-00', '\r\n                    '),
(6, NULL, 'Pemohon', NULL, '', '', NULL, '0000-00-00', '\r\n                    '),
(7, NULL, 'Pemohon', NULL, '', '', NULL, '0000-00-00', '\r\n                    '),
(8, NULL, 'Pemohon', NULL, '', '', NULL, '0000-00-00', '\r\n                    '),
(9, NULL, 'Pemohon', NULL, '', '', NULL, '0000-00-00', '\r\n                    '),
(10, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'pemohon3', 'diperlukan', '', 'i halaman', NULL, '0000-00-00', '\r\n                    '),
(11, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'pemohon3', 'diperlukan', 'surat perjalanan', 'i halaman', NULL, '2024-11-05', 'saDSAFDSA A'),
(12, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'didik sidik', 'Penting', 'surat perjalanan', 'i halaman', NULL, '2024-11-05', 'coba surat'),
(13, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'didik sidik', 'Penting', 'surat perjalanan', 'i halaman', NULL, '2024-11-05', 'coba surat'),
(14, 'Kepala Suku Dinas Komunikasi, Informatika dan Statistik Kota Administrasi Jakarta Selatan', 'malik', 'diperlukan', 'surat perjalanan', 'i halaman', NULL, '2024-11-06', 'dxfghtgyhyhyh'),
(15, NULL, 'akhmal', NULL, '', '', NULL, '0000-00-00', '\r\n                    ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `level`, `image`) VALUES
(5, 'mall', 'mall@gmail.com', '5677888800', '$2y$10$oTVS1hATxJ5fmV2y.n', 1, 'avatar.png'),
(6, 'malik', 'bgsidik99@gmail.com', '0232323232323', '$2y$10$17JNOFZLcmd67jbylAhjM.hnxMocDm1iO6vXlE3X8GZ7tm4yl7d7u', 3, 'avatar.png'),
(7, 'rijalpikri', 'rijal@gmail.com', '8888', '$2y$10$qlOGFKnX5LeMJHSrW/vg/OwizkPldHEPqBCm7fySS/a5fyMLSRGv.', 3, 'avatar.png'),
(8, 'rizal', 'jal@gmail.com', '123456789', '$2y$10$hxw8m7IoLrxIjofvw50bCe5ONjtIvOXVbowwQINVRBbshBP2Igjai', 3, 'avatar.png'),
(9, 'Ahmad Zaini', 'jay@gmail.com', '987654321', '$2y$10$5Jquv6Ql2OmpMnHSDViCzuv4gPO0RY3SRvMy6Tg10tSh2xTUrbmm.', 3, 'avatar.png'),
(10, 'eko', 'eko@gmail.com', '56789', '$2y$10$wDZ/gjhCEuMFn.KNlgQ/OehaI7VqAoZKnti2RIPa49vJYE7TURIKS', 3, 'avatar.png'),
(11, 'ahmad', 'ahmad@gmail.com', '5678', '$2y$10$b25p4PEPcQ7SErLRZuVqs.xPw2oLYSLe4E9rcJh3ptuxkDSL0Vzru', 3, 'avatar.png'),
(12, 'akmal', 'akmal@gmail.com', '678890', '$2y$10$lEyjdTjTcUKQ4P9jD7CEJOU4m2GOYqPomD06Zy/uvEEb3KdZgJR3O', 2, 'avatar.png'),
(13, 'bujang', 'bujang@gmail.com', '45678', '$2y$10$tt81RhczRwQj.VcOdW69k.u//plRkJhQPhqOhHTTy01b.Vn76oBEm', 1, 'avatar.png'),
(14, 'young', 'young@gmail.com', '456789', '$2y$10$cljLC0GjkHstgrO7LkV/seZQCgljYmZiMYtSmzqFP8la.7GOoMnRO', 3, 'avatar.png'),
(15, 'young', 'young@gmail.com', '456789', '$2y$10$xNdVovYYB97lNvG57GcogeKNZGvqycHxBs1f.Bz41I5vQrqDPwV92', 3, 'avatar.png'),
(16, 'zen', 'zen@gmail.com', '998786', '$2y$10$Ky8yy2raA5zD23CNjBJHIe9U4s2TryOphAXjquplBlqw61us6Dh8a', 2, 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
