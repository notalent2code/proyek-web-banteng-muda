-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 08:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksp`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `no_anggota` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no_anggota`, `nama`, `no_ktp`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `no_hp`, `email`) VALUES
('140810200013', 'Rihlan Lumenda Suherman', '3272010203042001', 'Laki-Laki', '2001-08-24', 'Sukabumi', '085799881234', 'rihlanrihlan24@gmail.com'),
('140810200025', 'Raihan Fadhlal Aziz', '3272010203042002', 'Laki-Laki', '2001-10-10', 'Bogor', '085799881235', 'raihanfadhlal@gmail.com'),
('140810200039', 'Rifqy Kurnia Sudarman', '3272010203042003', 'Laki-Laki', '2001-11-11', 'Cirebon', '085799881236', 'rifqykurnia@gmail.com'),
('140810200398', 'Coba', '32720302010027', 'Laki-Laki', '2021-12-07', 'Bandung', '085793831342', 'coba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `angsuran`
--

CREATE TABLE `angsuran` (
  `no_angsuran` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_pinjaman` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `cicilan` double NOT NULL,
  `angsuran_ke` int(2) NOT NULL,
  `status_angsuran` enum('Belum Bayar','Sudah Bayar','Sedang Diverifikasi','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `angsuran`
--

INSERT INTO `angsuran` (`no_angsuran`, `no_pinjaman`, `tanggal_bayar`, `cicilan`, `angsuran_ke`, `status_angsuran`) VALUES
('A0405002', 'P0405', '2021-12-07', 120000, 2, 'Sedang Diverifikasi'),
('A200013001', 'P200013001', '2021-11-18', 4200000, 1, 'Belum Bayar'),
('A200039001', 'P200039001', '2021-11-18', 5000000, 1, 'Belum Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `no_iuran` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_anggota` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iuran_pokok` double NOT NULL,
  `iuran_wajib` double NOT NULL,
  `tanggal_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`no_iuran`, `no_anggota`, `iuran_pokok`, `iuran_wajib`, `tanggal_bayar`) VALUES
('I200013001', '140810200013', 150000, 100000, '2021-10-18'),
('I200025001', '140810200025', 150000, 100000, '2021-10-18'),
('I200039001', '140810200039', 150000, 100000, '2021-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `pinjaman`
--

CREATE TABLE `pinjaman` (
  `no_pinjaman` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_anggota` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pencairan` date NOT NULL,
  `lama_pinjaman` int(2) NOT NULL,
  `besar_pinjaman` double NOT NULL,
  `status_pinjaman` enum('Diterima','Ditolak','Sedang Diverifikasi','Lunas') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sedang Diverifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinjaman`
--

INSERT INTO `pinjaman` (`no_pinjaman`, `no_anggota`, `tanggal_pencairan`, `lama_pinjaman`, `besar_pinjaman`, `status_pinjaman`) VALUES
('P0405', '140810200398', '2021-12-07', 24, 1000000, 'Diterima'),
('P200013001', '140810200013', '2021-10-18', 12, 50000000, 'Diterima'),
('P200025001', '140810200025', '2021-12-06', 6, 15000000, 'Sedang Diverifikasi'),
('P200039001', '140810200039', '2021-10-18', 12, 60000000, 'Sedang Diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `no_simpanan` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_anggota` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `besar_simpanan` double NOT NULL,
  `profit` double NOT NULL,
  `tanggal_setor` date DEFAULT NULL,
  `jangka_waktu` int(2) NOT NULL,
  `status_simpanan` enum('Belum Ditarik','Sudah Ditarik','Sedang Diverifikasi','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum Ditarik'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`no_simpanan`, `no_anggota`, `besar_simpanan`, `profit`, `tanggal_setor`, `jangka_waktu`, `status_simpanan`) VALUES
('S0699', '140810200398', 5000000, 500000, '2021-12-07', 12, 'Sudah Ditarik'),
('S200013001', '140810200013', 100000000, 10000000, NULL, 12, 'Belum Ditarik'),
('S200025001', '140810200025', 45000000, 4500000, NULL, 6, 'Belum Ditarik');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 1,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `level`, `foto_profil`) VALUES
('admin@gmail.com', '$2y$10$aHYlj4/l2EShb968XH.BcuLXk22cfJ7oXmU9yr7wCWJWlGm.B2WPi', 2, ''),
('coba@gmail.com', '', 1, '61af8df2e1896.png'),
('raihanfadhlal@gmail.com', '$2y$10$2tfA5K3BZSQv8Ih/aldhKuWHKhqodmP.piCl5nCo713MOTiJMpe5y', 1, ''),
('rifqykurnia@gmail.com', '$2y$10$nn/vFyafuDMy8P2q0HQZRuHekxR3aiHWqdN4xhDDN2aqEQTftUUBG', 1, ''),
('rihlanrihlan24@gmail.com', '$2y$10$xwgsktSOjVz8LurYIfa6M.5rrM99oFU12j.aixO2S9Zip5neidAPK', 1, '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_besarpinjamangt`
-- (See below for the actual view)
--
CREATE TABLE `v_besarpinjamangt` (
`no_anggota` char(12)
,`nama` varchar(50)
,`no_simpanan` char(10)
,`besar_simpanan` double
,`status_simpanan` enum('Belum Ditarik','Sudah Ditarik','Sedang Diverifikasi','')
);

-- --------------------------------------------------------

--
-- Structure for view `v_besarpinjamangt`
--
DROP TABLE IF EXISTS `v_besarpinjamangt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_besarpinjamangt`  AS SELECT `a`.`no_anggota` AS `no_anggota`, `a`.`nama` AS `nama`, `s`.`no_simpanan` AS `no_simpanan`, `s`.`besar_simpanan` AS `besar_simpanan`, `s`.`status_simpanan` AS `status_simpanan` FROM (`anggota` `a` join `simpanan` `s` on(`a`.`no_anggota` = `s`.`no_anggota`)) WHERE `s`.`besar_simpanan` > 25000000 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`no_anggota`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `index_alamat` (`alamat`);

--
-- Indexes for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`no_angsuran`),
  ADD KEY `no_pinjaman` (`no_pinjaman`);

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`no_iuran`),
  ADD KEY `no_anggota` (`no_anggota`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`no_pinjaman`),
  ADD KEY `no_anggota` (`no_anggota`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`no_simpanan`),
  ADD KEY `no_anggota` (`no_anggota`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `angsuran`
--
ALTER TABLE `angsuran`
  ADD CONSTRAINT `angsuran_ibfk_1` FOREIGN KEY (`no_pinjaman`) REFERENCES `pinjaman` (`no_pinjaman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iuran`
--
ALTER TABLE `iuran`
  ADD CONSTRAINT `iuran_ibfk_1` FOREIGN KEY (`no_anggota`) REFERENCES `anggota` (`no_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD CONSTRAINT `pinjaman_ibfk_1` FOREIGN KEY (`no_anggota`) REFERENCES `anggota` (`no_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`no_anggota`) REFERENCES `anggota` (`no_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
