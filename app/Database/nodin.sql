-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2024 pada 07.46
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
  `kepada` varchar(150) DEFAULT NULL,
  `pembuat` varchar(255) DEFAULT NULL,
  `sifat` varchar(50) DEFAULT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `hal` varchar(255) DEFAULT NULL,
  `tembusan` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT current_timestamp(),
  `jenis_surat` varchar(15) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `catatan` text DEFAULT NULL,
  `pengaju` varchar(100) NOT NULL,
  `tgl_buat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_db`
--

INSERT INTO `surat_db` (`id`, `kepada`, `pembuat`, `sifat`, `no_surat`, `hal`, `tembusan`, `lampiran`, `tanggal`, `isi`, `jenis_surat`, `status`, `catatan`, `pengaju`, `tgl_buat`) VALUES
(62, 'kepala suku dinas Komunikasi dan informasi', 'rizal', 'diperlukan', '', 'surat penindakan', 'tembusan Kepada', '', '2024-11-29', NULL, 'external', 'ditolak', '                    \r\n                    ', '', NULL),
(74, 'walikota Kota Administrasi Jakarta Selatan', 'Ahmad Zaini', 'diperlukan', 'NTR-348', 'haleluya', 'Komdigi', NULL, '2024-12-26', 'ASCACASASASS', 'external', 'disposisi', '                    ', 'walikota administrasi jakarta selatan', '0000-00-00'),
(76, 'fufufafa', 'Ahmad Zaini', 'Penting', '', 'samlekom', 'Komdigi', '', '2024-12-11', 'Dengan mengucapkan puji syukur kehadirat Allah SWT, yang telah melimpahkan rahmat, hidayat serta nikmat –Nya sehingga penyusunan masalah mata kuliah E-Business ini dapat di selesaikan dengan baik dan tetap waktu. Penulisan makalah ini mengambil tema dengan judul “ ANALISA SWOT PADA USAHA KAMI” Makalah ini disusun sebagai salah satu syarat untuk memenuhi Tugas Akhir Ujian Semester 5 di Universitas Bina Sarana Informatika Margonda (BSI). </span><br>\">\r\n\r\n                    ', 'external', 'disposisi', '                    ', 'walikota administrasi jakarta selatan', '2024-12-11'),
(78, 'walikota Kota Administrasi Jakarta Selatan', 'Ahmad Zaini', 'Segera', '', 'surat Penangkapan Bandar Judol', 'tambisan', '', '2024-12-16', '<p><span style=\"font-size: 12pt;\">Bisnis yang sudah\r\nmaju sebelum era teknologi sudah mulai menggunakan internet yang merupakan\r\njaringan global yang menghubungkan satu komputer dengan komputer lainnya dan\r\nbersaing dengan pemiliki bisnis lainnya.</span></p>', 'external', 'disposisi', 'isi tidak rapih', 'walikota administrasi jakarta selatan', '2024-12-16'),
(80, '', 'Ahmad Zaini', NULL, NULL, '', '', NULL, '0000-00-00', '\r\n                    ', 'internal', 'disposisi', NULL, '', '2024-12-23'),
(81, '', 'Ahmad Zaini', NULL, NULL, '', '', NULL, '0000-00-00', '\r\n                    ', 'external', 'disposisi', NULL, '', '2024-12-23'),
(82, 'walikota Kota Administrasi Jakarta Selatan', 'Ahmad Zaini', 'Rahasia', NULL, 'surat rekomendasi', '\"Lorem ipsum ', NULL, '2024-12-23', '<p class=\"MsoNormal\">\"Lorem ipsum dolor sit amet, consectetur adipiscing\r\nelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\nex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\ncupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est\r\nlaborum.\"<o:p></o:p></p>\r\n                    ', 'internal', 'disposisi', NULL, 'walikota administrasi jakarta selatan', '2024-12-23'),
(84, 'Kepala Suku Dinas Komunikasi', 'Ahmad Zaini', 'biasa', NULL, 'surat rekomendasi', '\"Lorem ipsum ', NULL, '2024-12-23', '<p class=\"MsoNormal\">\"Lorem ipsum dolor sit amet, consectetur adipiscing\r\nelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\nex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\ncupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est\r\nlaborum.\"<o:p></o:p></p>\r\n                    ', 'internal', 'disetujui', '                    ', 'Didik Sidik', '2024-12-23'),
(85, 'kepala Sudin Komunikasi', 'Ahmad Zaini', 'Segera', NULL, 'surat rekomendasi', '\"Lorem ipsum ', NULL, '2024-12-23', '<p class=\"MsoNormal\">\"Lorem ipsum dolor sit amet, consectetur adipiscing\r\nelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\nex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\ncupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est\r\nlaborum.\"<o:p></o:p></p>\r\n                    ', 'internal', 'disposisi', NULL, 'walikota administrasi jakarta selatan', '2024-12-23'),
(86, 'Kepala BUMN', 'Ahmad Zaini', 'Penting', NULL, 'surat rekomendasi', '\"Lorem ipsum ', NULL, '2024-12-23', '<p class=\"MsoNormal\">\"Lorem ipsum dolor sit amet, consectetur adipiscing\r\nelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\nex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\ncupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est\r\nlaborum.\"<o:p></o:p></p>\r\n                    ', 'external', 'disposisi', NULL, 'walikota administrasi jakarta selatan', '2024-12-23'),
(87, 'Kepala BUMN', 'Ahmad Zaini', 'Rahasia', 'R35GTR', 'surat rekomendasi', '\"Lorem ipsum ', NULL, '2024-12-18', '<p class=\"MsoNormal\">\"Lorem ipsum dolor sit amet, consectetur adipiscing\r\nelit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut\r\nenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip\r\nex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat\r\ncupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est\r\nlaborum.\"<o:p></o:p></p>\r\n                    ', 'external', 'ditolak', '                   scsjsjn ', 'walikota administrasi jakarta Utara', '2024-12-23'),
(88, 'Kepala BUMN', 'Ahmad Zaini', 'Rahasia', NULL, 'surat rekomendasi', '\"Lorem ipsum ', NULL, '2024-12-23', 'zaini', 'internal', 'disposisi', NULL, 'Didik Sidik', '2024-12-23');

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
  `level` int(1) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `no_hp`, `password`, `level`, `image`) VALUES
(5, 'likk', 'malee@gmail.com', '098765', '$2y$10$oTVS1hATxJ5fmV2y.n', 3, 'avatar.png'),
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
(16, 'zen', 'zen@gmail.com', '998786', '$2y$10$Ky8yy2raA5zD23CNjBJHIe9U4s2TryOphAXjquplBlqw61us6Dh8a', 2, 'avatar.png'),
(17, 'didik sidik', 'rayaraya88@gmail.com', '0823456788', '$2y$10$JSo11BpkbTyHEVj5trGAE.yvT6vOS5YjzRs8rvic6xNHb2fwSkEVe', 2, 'avatar.png'),
(18, 'DIdik Sidik', 'didiksidik95@gmail.com', '0888838883', '$2y$10$VHGOugLJAADJK6j5YTJXhuijpa19e75R4DEYu6cHBmugB5ei5VeAa', 3, 'avatar.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
