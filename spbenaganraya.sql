-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 04:51 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbenaganraya`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakec`
--

CREATE TABLE `datakec` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(225) NOT NULL,
  `link_web` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakec`
--

INSERT INTO `datakec` (`id`, `nama_kecamatan`, `link_web`) VALUES
(19, 'Beutong', 'https://kecbeutongateuhbanggalang.sigapaceh.id/'),
(20, 'Beuntong Ateuh Manggalang', 'https://kecbeutongateuhbanggalang.sigapaceh.id/'),
(21, 'Darul Makmur', 'https://id.wikipedia.org/wiki/Darul_Makmur,_Nagan_Raya'),
(22, 'Kuala', 'https://id.wikipedia.org/wiki/Kuala,_Nagan_Raya'),
(23, 'Kuala Pesisir', 'https://id.wikipedia.org/wiki/Kuala_Pesisir,_Nagan_Raya'),
(24, 'Seunagan Timur', 'https://kecseunagantimur.sigapaceh.id/'),
(25, 'Seunagan', 'https://kecseunagan.sigapaceh.id/'),
(26, 'Suka Makmue', 'https://id.wikipedia.org/wiki/Suka_Makmue,_Nagan_Raya'),
(27, 'Tadu Raya', 'https://kectaduraya.sigapaceh.id/'),
(28, 'Tripa Makmur', 'https://kectripamakmur.sigapaceh.id/');

-- --------------------------------------------------------

--
-- Table structure for table `dataweb`
--

CREATE TABLE `dataweb` (
  `id` int(11) NOT NULL,
  `Nama` varchar(225) NOT NULL,
  `Deskripsi` varchar(225) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Link` varchar(225) NOT NULL,
  `Gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataweb`
--

INSERT INTO `dataweb` (`id`, `Nama`, `Deskripsi`, `Status`, `Link`, `Gambar`) VALUES
(38, 'LPSE', 'layanan pengadaan secara elektronik', 'Online', 'https://lpse.naganrayakab.go.id/eproc4', 'lpse.png'),
(39, 'E-KINERJA ', 'Sistem penilaian kerja ASN', 'Online', 'http://kinerja.naganrayakab.go.id/', 'ekinerja (2).png'),
(40, 'DISKOMINFOTIK', 'Dinas Komunikasi informasi dan statistik', 'Online', 'https://diskominfotik.naganrayakab.go.id/', 'diskominfotik.png'),
(41, 'DISDIK NAGAN RAYA', 'Dinas Pendidikan', 'Maintenance', 'https://disdik.naganrayakab.go.id/agenda/february/2057', 'disdik.png'),
(42, 'LAPOR', 'Layanan Aspirasi Pengaduan Online Rakyat', 'Online', 'https://www.lapor.go.id/instansi/pemerintah-kabupaten-nagan-raya/', 'lapor.png'),
(43, 'DINAS PERPUSTAKAAN  &amp; KEARSIPAN', 'Dinas Perpustakaan dan Kearsipan Kab. Nagan Raya', 'Online', 'http://acehprov.sikn.go.id/index.php/dinas-perpustakaan-dan-kearsipan-kab-nagan-raya', 'naganraya.png'),
(44, 'BKPSDM', 'BADAN KEPEGAWAIAN &amp; PENGEMBANGAN SDM', 'Online', 'https://bkpsdm.naganrayakab.go.id/kategori/pengumuman', 'diskominfotik.png'),
(45, 'ABSENSI NAGAN RAYA', 'Sistem Absensi ASN', 'Online', 'https://absensi.naganrayakab.go.id/', 'naganraya.png'),
(46, 'KEMENAG', 'Kantor Wilayah Kementrian Agama', 'Online', 'https://aceh.kemenag.go.id/daerah/18/NaganRaya', 'agama.png'),
(47, 'MAHKAMAH SYAR&#039;IYAH', 'Mahkamah Syar&#039;iyah suka makmue.', 'Online', 'https://www.ms-sukamakmue.go.id/', 'mahkamah.png'),
(48, 'JDIH', 'Jaringan Dokumentasi Informasi Hukum.', 'Online', 'https://jdih.naganrayakab.go.id/', 'jdih.png'),
(49, 'E-SAPA', ' Sistem Akuntabilitas Nagan Raya.', 'Online', 'https://e-sapa.naganrayakab.go.id/', 'sapa.png'),
(50, 'BPS', 'Badan Pusat Statistik', 'Online', 'https://naganrayakab.bps.go.id/kategoriLink.html', 'bps.png'),
(51, 'KPU', 'Komisi Pemilihan Umum Nagan Raya.', 'Online', 'https://kip-naganraya.kpu.go.id/berita/baca/7771/-', 'kpu.png'),
(52, 'SPBE', 'Sistem Pemerintahan Berbasis Elektronik', 'Online', 'http://localhost/SEBELUM%20FIX/spbenaganraya/addweb.php', 'naganraya.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(10, 'pak samsul', '$2y$10$erNQ5puamH6Gb2pJ.UTCtuPwmm1OEvQEYPNsUeJWa/0wJEgx5Jccy'),
(11, 'pak dika', '$2y$10$3.DA9AnsWws7yw3It0KR3eWU1/AjxEIUA0KkShsp1R3opIBOfsfRC'),
(12, 'buk neni', '$2y$10$ud.jCgLM5sdGQX.bYo64geC39UhOFgl86CfkaQXaTbRd.plPkybDS'),
(13, 'rika', '$2y$10$MhAyq2D1bRYwyfQgwrCRwu9ZmSRFXUdDD7NhFL0yxGwRR0hjUe.Bi'),
(14, 'nurbah  ', '$2y$10$CbiDJVgQWbKFOtD5uXmiT.gpFOTKOaUunZl0YKxZyBCzAsy870XFO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakec`
--
ALTER TABLE `datakec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataweb`
--
ALTER TABLE `dataweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakec`
--
ALTER TABLE `datakec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `dataweb`
--
ALTER TABLE `dataweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
