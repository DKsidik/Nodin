-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2024 pada 08.59
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
-- Struktur dari tabel `surat_db`
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
-- Dumping data untuk tabel `surat_db`
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
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `level`) VALUES
(7, 'rijalpikri', 'rijal@gmail.com', '8888', '$2y$10$qlOGFKnX5LeMJHSrW/vg/OwizkPldHEPqBCm7fySS/a5fyMLSRGv.', 3),
(9, 'Ahmad Zaini', 'jay@gmail.com', '987654321', '$2y$10$5Jquv6Ql2OmpMnHSDViCzuv4gPO0RY3SRvMy6Tg10tSh2xTUrbmm.', 3),
(10, 'didik sidik', 'bintangraya88@gmail.com', '08213409', '$2y$10$HFhQJfgpu9X2mz1FAvSOwu/Td.L77ts9ThsUPlAmUbv20RhmefeOa', 1),
(11, 'bintangraya', 'rayaraya88@gmail.com', '08213478', '$2y$10$0xZ1Y7avNgc02fCep55GFOjInoy0QRyDln1zxRwmsC.2301DTzR9a', 2),
(16, 'Acil', 'acil@gmail.com', '098663476', '$2y$10$JnsnxK5ogK/oNYLGeKg.hexrbvSwbL6v2waRNkISbHtO7N3aI9Rcu', 2),
(17, 'farid', 'farid@gmail.com', '0876346534', '$2y$10$h14SahPYGgQqmIiM6nbVDOhYjS8eSQzHrr5oIk1llli9VV9K/M8gq', 1),
(18, 'jay', 'jay@gmail.com', '0885686', '$2y$10$HghxCStgEEa/oegdkX44zuDNzathLaia1ze4E46oJoW4UUVtjCgrK', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `surat_db`
--
ALTER TABLE `surat_db`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `surat_db`
--
ALTER TABLE `surat_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
