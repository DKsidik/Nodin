-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2024 pada 13.39
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `no_hp` int(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `level`) VALUES
(5, 'akhmal', 'imam.imw@gmail.com', 8213409, '$2y$10$oTVS1hATxJ5fmV2y.n', 3),
(6, 'malik', 'bgsidik99@gmail.com', 0, '$2y$10$17JNOFZLcmd67jbylAhjM.hnxMocDm1iO6vXlE3X8GZ7tm4yl7d7u', 3),
(7, 'rijalpikri', 'rijal@gmail.com', 8888, '$2y$10$qlOGFKnX5LeMJHSrW/vg/OwizkPldHEPqBCm7fySS/a5fyMLSRGv.', 3),
(8, 'rizal', 'jal@gmail.com', 123456789, '$2y$10$hxw8m7IoLrxIjofvw50bCe5ONjtIvOXVbowwQINVRBbshBP2Igjai', 3),
(9, 'Ahmad Zaini', 'jay@gmail.com', 987654321, '$2y$10$5Jquv6Ql2OmpMnHSDViCzuv4gPO0RY3SRvMy6Tg10tSh2xTUrbmm.', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
