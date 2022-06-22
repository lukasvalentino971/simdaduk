-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 08:43 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_kk` int(11) NOT NULL,
  `id_pend` int(11) NOT NULL,
  `hubungan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `datang`
--

CREATE TABLE `datang` (
  `id_datang` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_datang` varchar(20) NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `tgl_datang` date NOT NULL,
  `pelapor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datang`
--

INSERT INTO `datang` (`id_datang`, `nik`, `nama_datang`, `jekel`, `tgl_datang`, `pelapor`) VALUES
(3, '3517025689763407', 'Marissa Claudia', 'PR', '2022-04-02', 18);

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id_kk` int(11) NOT NULL,
  `no_kk` varchar(30) NOT NULL,
  `kepala` varchar(20) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kec` varchar(20) NOT NULL,
  `kab` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `no_kk`, `kepala`, `desa`, `rt`, `rw`, `kec`, `kab`, `prov`) VALUES
(6, '3517150278120001', 'Irmansyah', 'Klampisan', '01', '04', 'Plandaan', 'Jombang', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `lahir`
--

CREATE TABLE `lahir` (
  `id_lahir` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `id_kk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lahir`
--

INSERT INTO `lahir` (`id_lahir`, `nama`, `tgl_lh`, `jekel`, `id_kk`) VALUES
(3, 'Abida Anradella', '2021-09-11', 'PR', 6);

-- --------------------------------------------------------

--
-- Table structure for table `meninggal_dunia`
--

CREATE TABLE `meninggal_dunia` (
  `id_mendu` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_mendu` date NOT NULL,
  `sebab` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meninggal_dunia`
--

INSERT INTO `meninggal_dunia` (`id_mendu`, `id_pdd`, `tgl_mendu`, `sebab`) VALUES
(3, 17, '2022-06-01', 'Kecelakaan');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_pend` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lh` varchar(15) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('LK','PR') NOT NULL,
  `desa` varchar(15) NOT NULL,
  `rt` varchar(4) NOT NULL,
  `rw` varchar(4) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kawin` varchar(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `status` enum('Ada','Meninggal','Pindah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_pend`, `nik`, `nama`, `tempat_lh`, `tgl_lh`, `jekel`, `desa`, `rt`, `rw`, `agama`, `kawin`, `pekerjaan`, `status`) VALUES
(14, '3517456830971701', 'Siti Sulastri', 'Jombang', '2000-03-17', 'PR', 'Klitih', '03', '03', 'Islam', 'Belum', 'Mahasiswa', 'Ada'),
(15, '3517075429186237', 'Abdullah ', 'Jombang', '1960-05-07', 'LK', 'Klagen', '05', '02', 'Islam', 'Sudah', 'Pensiunan Pns', 'Ada'),
(16, '3517097643200003', 'Ricky Gunawan', 'Jombang', '2000-01-11', 'LK', 'Klagen', '04', '02', 'Islam', 'Belum', 'Pelajar', 'Ada'),
(17, '3517030932100002', 'Subandi', 'Jombang', '1968-05-25', 'LK', 'Tempel', '01', '01', 'Islam', 'Sudah', 'Petani', 'Meninggal'),
(18, '3517150220170001', 'Saiti', 'Jombang', '1966-04-12', 'PR', 'Tempel', '01', '01', 'Islam', 'Sudah', 'Petani', 'Ada'),
(19, '3517025689763407', 'Marissa Claudia', 'Jombang', '1999-12-12', 'PR', 'Klampisan', '01', '04', 'Kristen', 'Belum', 'Perawat', 'Ada'),
(20, '3517238917650005', 'Abida Anradella', 'Jombang', '2021-09-11', 'PR', 'Klampisan', '01', '04', 'Islam', 'Belum', 'Belum Bekerja', 'Ada'),
(21, '3517215171010002', 'Irmansyah', 'Jombang', '1985-11-17', 'LK', 'Klampisan', '01', '04', 'Islam', 'Sudah', 'Swasta', 'Ada'),
(22, '3517645167100002', 'Rizki Ridwan', 'Jombang', '1997-11-20', 'LK', 'Klagen', '09', '02', 'Islam', 'Sudah', 'Swasta', 'Pindah'),
(23, '3517555201680001', 'Naura Putri', 'Jombang', '1996-07-15', 'PR', 'Klagen', '04', '02', 'Islam', 'Sudah', 'IT engineer', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Kaur Pemerintah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Ifa Indrian Ningsih', 'ifaindria', 'admin', 'Administrator'),
(3, 'Irma Maulidia', 'irmaulidia', 'admin2', 'Kaur Pemerintah');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `id_pindah` int(11) NOT NULL,
  `id_pdd` int(11) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`id_pindah`, `id_pdd`, `tgl_pindah`, `alasan`) VALUES
(3, 22, '2022-04-10', 'Pekerjaan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `tb_anggota_ibfk_1` (`id_pend`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `datang`
--
ALTER TABLE `datang`
  ADD PRIMARY KEY (`id_datang`),
  ADD KEY `pelapor` (`pelapor`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `lahir`
--
ALTER TABLE `lahir`
  ADD PRIMARY KEY (`id_lahir`),
  ADD KEY `id_kk` (`id_kk`);

--
-- Indexes for table `meninggal_dunia`
--
ALTER TABLE `meninggal_dunia`
  ADD PRIMARY KEY (`id_mendu`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_pend`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id_pindah`),
  ADD KEY `id_pdd` (`id_pdd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `datang`
--
ALTER TABLE `datang`
  MODIFY `id_datang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lahir`
--
ALTER TABLE `lahir`
  MODIFY `id_lahir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meninggal_dunia`
--
ALTER TABLE `meninggal_dunia`
  MODIFY `id_mendu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_pend` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_pend`) REFERENCES `penduduk` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_ibfk_2` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `datang`
--
ALTER TABLE `datang`
  ADD CONSTRAINT `datang_ibfk_1` FOREIGN KEY (`pelapor`) REFERENCES `penduduk` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lahir`
--
ALTER TABLE `lahir`
  ADD CONSTRAINT `lahir_ibfk_1` FOREIGN KEY (`id_kk`) REFERENCES `kk` (`id_kk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meninggal_dunia`
--
ALTER TABLE `meninggal_dunia`
  ADD CONSTRAINT `meninggal_dunia_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `penduduk` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pindah`
--
ALTER TABLE `pindah`
  ADD CONSTRAINT `pindah_ibfk_1` FOREIGN KEY (`id_pdd`) REFERENCES `penduduk` (`id_pend`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
