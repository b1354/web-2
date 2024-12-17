-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Okt 2024 pada 08.55
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademikdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_fakultas`
--

CREATE TABLE `mst_fakultas` (
  `kode_fakultas` char(2) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL,
  `nama_dekan` varchar(50) DEFAULT NULL,
  `alamat` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_fakultas`
--

INSERT INTO `mst_fakultas` (`kode_fakultas`, `nama_fakultas`, `nama_dekan`, `alamat`) VALUES
('01', 'EKONOMI', 'BUDI PRASETYO', NULL),
('02', 'ILMU KOMPUTER', 'NUR ALAMSYAH', NULL),
('03', 'SASTRA', 'FRISTI', NULL),
('04', 'PSIKOLOGI', 'SITI SARAH', NULL),
('05', 'TEKNIK', 'SJAMSURIJAL', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_jurusan`
--

CREATE TABLE `mst_jurusan` (
  `kode_jurusan` char(2) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `nama_kajur` varchar(50) DEFAULT NULL,
  `kode_fakultas` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_jurusan`
--

INSERT INTO `mst_jurusan` (`kode_jurusan`, `nama_jurusan`, `nama_kajur`, `kode_fakultas`) VALUES
('01', 'S1 MANAJEMEN', 'Bu Desvit', '01'),
('02', 'S1 AKUNTANSI', 'kajur akuntansi', '1'),
('03', 'TEKNIK INFORMATIKA', 'Pak Soleh Sabarudin', '02'),
('04', 'MANAJAMEN INFORMATIKA', 'Bu Riska', '02'),
('05', 'S1 SASTRA JEPANG', 'Kajur Sastra', '03'),
('06', 'D3 BAHASA INGGRIS', 'Kajur sastra inggris', '03'),
('07', 'S1 PSIKOLOGI', 'Kajur Psikologi', '04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_fakultas`
--
ALTER TABLE `mst_fakultas`
  ADD PRIMARY KEY (`kode_fakultas`);

--
-- Indexes for table `mst_jurusan`
--
ALTER TABLE `mst_jurusan`
  ADD PRIMARY KEY (`kode_jurusan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
