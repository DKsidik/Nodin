-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2024 pada 16.01
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
  `no_surat` varchar(50) DEFAULT NULL,
  `hal` varchar(255) DEFAULT NULL,
  `tembusan` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT current_timestamp(),
  `jenis_surat` varchar(15) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_db`
--

INSERT INTO `surat_db` (`id`, `kepada`, `pembuat`, `sifat`, `no_surat`, `hal`, `tembusan`, `lampiran`, `tanggal`, `isi`, `jenis_surat`, `status`, `catatan`) VALUES
(54, 'kepala suku dinas Komunikasi dan informasi', 'ahmad', 'diperlukan', 'R35GTR', 'surat penindakan', 'tembusan tambisan', '2', '2024-11-20', '\r\n                    ', NULL, '', NULL),
(55, 'informatika dan statistika', 'rizal', 'Penting', NULL, 'penangkapan ayam hitam', 'kepada si itu', NULL, '2024-11-20', '\r\n                    ', NULL, '', NULL),
(56, 'walikota Kota Administrasi Jakarta Selatan', 'ijal254', 'Penting', '', 'surat penindakan bandar narkoboy', 'tembusan Kepada', '', '2024-11-21', '\r\n                    ', NULL, '', NULL),
(57, 'kepala Sudin Komunikasi', 'Ahmad Zaini', 'Penting', NULL, 'surat pengaduan ayam ', 'kepada si inian', NULL, '2024-11-25', '\r\n                    ', NULL, '', NULL),
(58, '', 'rizal', 'diperlukan', '', 'surat Penangkapan Bandar Judol', 'tembusan Kepada', '', '2024-11-25', 'Berdasarkan hasil rapat koordinasi terkait tindak lanjut<span>&nbsp;</span><span lang=\"IN\" style=\"box-sizing: border-box; orphans: 2; text-align: left; text-indent: 0px; widows: 2; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18.4px;\">S</span><span lang=\"EN-US\" style=\"box-sizing: border-box; orphans: 2; text-align: left; text-indent: 0px; widows: 2; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18.4px;\">osialisasi<span>&nbsp;</span></span><span lang=\"IN\" style=\"box-sizing: border-box; orphans: 2; text-align: left; text-indent: 0px; widows: 2; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18.4px;\">A</span><span lang=\"EN-US\" style=\"box-sizing: border-box; orphans: 2; text-align: left; text-indent: 0px; widows: 2; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; line-height: 18.4px;\">plikasi “MyJaksel” KADIN Jakarta tanggal 2 Agustus 2024, maka telah dilakukan kajian menyeluruh terkait aspek UI/UX (User Interface/User Experience) dan keamanan informasi. Pengkajian pada aspek UI/UX berlandaskan prinsip Heuristic Evaluation (evaluasi&nbsp;</span>', NULL, '', NULL),
(59, 'walikota Kota Administrasi Jakarta Selatan', 'rijalpikri', 'diperlukan', NULL, 'surat perjalanan', 'tembusan Kepada', NULL, '2024-11-14', 'facsjndcbsamcnd&nbsp; as.,m ca. mscas.,knmcdsa.lkdkn/wlkd', NULL, '', NULL),
(60, 'kepala Sudin Komunikasi', 'rizal', 'diperlukan', NULL, 'surat penindakan', 'sds', NULL, '2024-11-29', 'wafdfdcadx', NULL, '', NULL),
(61, 'walikota Kota Administrasi Jakarta Selatan', 'rizal', 'diperlukan', NULL, 'surat kebobolan hacker', 'tembusan tambisan', NULL, '2024-11-29', 'demikian surat berikut di buat untuk penangkapan kasus bjorka yang mulai meresahkan di duia teknologi khususnya di bidang teknologi dan inbformatika', 'internal', '', NULL),
(62, 'kepala suku dinas Komunikasi dan informasi', 'rizal', 'diperlukan', '', 'surat penindakan', 'tembusan Kepada', '', '2024-11-29', NULL, 'external', 'ditolak', '                    \r\n                    '),
(63, 'kepala suku dinas Komunikasi dan informasi', 'rizal', 'Penting', NULL, 'surat penindakan', 'kepada si inian', NULL, '2024-11-29', 'contoh status', 'internal', '', NULL),
(64, 'kepala Sudin Komunikasi', 'rizal', 'diperlukan', '', 'surat penindakan', 'tembusan Kepada', '', '2024-11-29', NULL, 'internal', 'disetujui', 'sadxsaxas\r\n                    ');

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
(17, 'didik sidik', 'rayaraya88@gmail.com', '0823456788', '$2y$10$JSo11BpkbTyHEVj5trGAE.yvT6vOS5YjzRs8rvic6xNHb2fwSkEVe', 2, 'avatar.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
