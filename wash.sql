-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2019 at 01:26 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wash`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `kd_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(256) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `email_admin` varchar(50) DEFAULT NULL,
  `no_hp_admin` varchar(50) DEFAULT NULL,
  `img_admin` varchar(256) DEFAULT NULL,
  `level_admin` int(11) DEFAULT NULL,
  `create_date_admin` datetime DEFAULT NULL,
  PRIMARY KEY (`kd_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`kd_admin`, `username_admin`, `password_admin`, `nama_admin`, `email_admin`, `no_hp_admin`, `img_admin`, `level_admin`, `create_date_admin`) VALUES
('A001', 'reza', '$2y$10$/QU9h5JnAxk/KqHkXg6Q0u5LsPLu1pHHdHGnD/WtlKyGRak5amLjm', 'Reza Alvaero', 'rzalvaero@gmail.com', '089682261128', 'assets/dist/img/default.png', 1, '0000-00-00 00:00:00'),
('A004', 'admin', '$2y$10$/QU9h5JnAxk/KqHkXg6Q0u5LsPLu1pHHdHGnD/WtlKyGRak5amLjm', 'Administrator', 'iliilihhreza@gmail.com', '089682261128', 'assets/dist/img/default.png', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluar`
--

CREATE TABLE IF NOT EXISTS `tbl_keluar` (
  `kd_keluar` varchar(50) NOT NULL,
  `kd_masuk` varchar(50) DEFAULT NULL,
  `paket` varchar(50) NOT NULL,
  `tgl_jam_masuk` datetime DEFAULT NULL,
  `tgl_jam_keluar` datetime DEFAULT NULL,
  `lama_parkir_keluar` varchar(50) DEFAULT NULL,
  `tarif_keluar` int(11) DEFAULT NULL,
  `total_keluar` int(11) DEFAULT NULL,
  `status_keluar` int(11) DEFAULT NULL,
  `create_keluar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_keluar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keluar`
--

INSERT INTO `tbl_keluar` (`kd_keluar`, `kd_masuk`, `paket`, `tgl_jam_masuk`, `tgl_jam_keluar`, `lama_parkir_keluar`, `tarif_keluar`, `total_keluar`, `status_keluar`, `create_keluar`) VALUES
('K00000001', 'M00000001', 'SUV - KOLONG / BODY', '2019-05-07 17:27:06', '2019-05-07 17:29:01', '0 Jam,1 Menit', 35000, NULL, 1, 'Reza Alvaero'),
('K00000002', 'M00000002', 'SUV', '2019-05-07 17:31:19', '2019-05-07 17:32:59', '0 Jam,1 Menit', 45000, NULL, 1, 'Reza Alvaero'),
('K00000003', 'M00000003', 'SEDAN', '2019-05-07 17:31:50', '2019-05-07 17:33:34', '0 Jam,1 Menit', 40000, NULL, 1, 'Reza Alvaero'),
('K00000004', 'M00000004', 'MOTOR', '2019-05-07 17:36:23', '2019-05-07 17:37:18', '0 Jam,0 Menit', 15000, NULL, 1, 'Reza Alvaero'),
('K00000005', 'M00000005', 'SPORT', '2019-05-08 11:41:45', '2019-05-08 11:48:24', '0 Jam,6 Menit', 50000, NULL, 1, 'Administrator'),
('K00000006', 'M00000006', 'SPORT', '2019-05-08 11:51:31', '2019-05-08 15:35:11', '3 Jam,43 Menit', 50000, NULL, 1, 'Administrator'),
('K00000007', 'M00000007', 'SEDAN - BODY / KOLONG ', '2019-05-08 15:34:18', '2019-05-08 17:16:47', '1 Jam,42 Menit', 35000, NULL, 1, 'Administrator'),
('K00000008', 'M00000008', 'SPORT', '2019-05-08 21:23:58', '2019-05-08 21:24:51', '0 Jam,0 Menit', 50000, NULL, 1, 'Administrator'),
('K00000009', 'M00000009', 'SEDAN', '2019-05-08 21:25:52', '2019-05-08 21:27:23', '0 Jam,1 Menit', 40000, NULL, 1, 'Administrator'),
('K00000010', 'M00000010', 'SPORT', '2019-05-08 21:29:41', '2019-05-08 21:32:18', '0 Jam,2 Menit', 50000, NULL, 1, 'Administrator'),
('K00000011', 'M00000011', 'SPORT - KOLONG / BODY', '2019-05-08 21:34:25', '2019-05-08 21:39:06', '0 Jam,4 Menit', 40000, NULL, 1, 'Administrator'),
('K00000012', 'M00000012', 'SUV', '2019-05-09 11:46:21', '2019-05-09 11:46:49', '0 Jam,0 Menit', 45000, NULL, 1, 'Administrator'),
('K00000013', 'M00000013', 'SEDAN', '2019-05-09 11:47:30', '2019-05-09 11:48:03', '0 Jam,0 Menit', 40000, NULL, 1, 'Administrator'),
('K00000014', 'M00000014', 'SUV', '2019-05-09 13:38:42', '2019-05-09 15:56:45', '2 Jam,18 Menit', 45000, NULL, 1, 'Administrator'),
('K00000015', 'M00000015', 'SUV', '2019-05-10 11:45:38', '2019-05-10 12:27:30', '0 Jam,41 Menit', 45000, NULL, 1, 'Administrator'),
('K00000016', 'M00000016', 'SPORT', '2019-05-10 15:36:32', '2019-05-10 15:36:56', '0 Jam,0 Menit', 50000, NULL, 1, 'Administrator'),
('K00000017', 'M00000017', 'SPORT', '2019-05-10 16:23:08', '2019-05-10 16:49:59', '0 Jam,26 Menit', 50000, NULL, 1, 'Administrator'),
('K00000018', 'M00000018', 'MOTOR', '2019-05-11 12:59:31', '2019-05-11 14:00:49', '1 Jam,1 Menit', 15000, NULL, 1, 'Administrator'),
('K00000019', 'M00000019', 'SEDAN', '2019-05-11 14:01:27', '2019-05-11 14:34:03', '0 Jam,32 Menit', 40000, NULL, 1, 'Administrator'),
('K00000020', 'M00000020', 'SEDAN', '2019-05-11 15:15:43', '2019-05-11 16:06:43', '0 Jam,51 Menit', 40000, NULL, 1, 'Administrator'),
('K00000021', 'M00000021', 'SEDAN', '2019-05-12 11:36:48', '2019-05-12 11:37:08', '0 Jam,0 Menit', 40000, NULL, 1, 'Administrator'),
('K00000022', 'M00000022', 'MOTOR', '2019-05-12 12:14:00', '2019-05-12 12:14:21', '0 Jam,0 Menit', 15000, NULL, 1, 'Administrator'),
('K00000023', 'M00000023', 'MOTOR', '2019-05-12 12:54:22', '2019-05-12 12:59:18', '0 Jam,4 Menit', 15000, NULL, 1, 'Administrator'),
('K00000024', 'M00000024', 'SUV', '2019-05-12 12:56:00', '2019-05-12 16:02:09', '3 Jam,6 Menit', 45000, NULL, 1, 'Administrator'),
('K00000025', 'M00000025', 'SEDAN', '2019-05-12 15:42:14', '2019-05-12 16:04:19', '0 Jam,22 Menit', 40000, NULL, 1, 'Administrator'),
('K00000026', 'M00000026', 'SUV - KOLONG / BODY', '2019-05-12 16:04:02', '2019-05-12 16:05:48', '0 Jam,1 Menit', 35000, NULL, 1, 'Administrator'),
('K00000027', 'M00000027', 'SEDAN', '2019-05-13 10:41:28', '2019-05-13 10:42:10', '0 Jam,0 Menit', 40000, NULL, 1, 'Administrator'),
('K00000028', 'M00000028', 'SEDAN', '2019-05-13 12:59:16', '2019-05-13 13:01:34', '0 Jam,2 Menit', 40000, NULL, 1, 'Administrator'),
('K00000029', 'M00000029', 'MOTOR', '2019-05-13 12:59:58', '2019-05-13 13:01:51', '0 Jam,1 Menit', 15000, NULL, 1, 'Administrator'),
('K00000030', 'M00000030', 'SEDAN', '2019-05-14 17:34:07', '2019-05-14 17:37:10', '0 Jam,3 Menit', 40000, NULL, 1, 'Administrator'),
('K00000031', 'M00000031', 'SUV', '2019-05-14 17:38:15', '2019-05-14 17:39:13', '0 Jam,0 Menit', 45000, NULL, 1, 'Administrator'),
('K00000032', 'M00000032', 'SEDAN', '2019-05-14 17:40:10', '2019-05-14 17:43:56', '0 Jam,3 Menit', 40000, NULL, 1, 'Administrator'),
('K00000033', 'M00000033', 'SEDAN', '2019-05-14 17:40:38', '2019-05-14 17:44:39', '0 Jam,4 Menit', 40000, NULL, 1, 'Administrator'),
('K00000034', 'M00000034', 'SEDAN', '2019-05-15 08:53:04', '2019-05-15 10:21:58', '1 Jam,28 Menit', 40000, NULL, 1, 'Administrator'),
('K00000035', 'M00000035', 'SUV', '2019-05-15 10:21:35', '2019-05-15 11:43:17', '1 Jam,21 Menit', 45000, NULL, 1, 'Administrator'),
('K00000036', 'M00000037', 'SUV - KOLONG / BODY', '2019-05-15 15:15:08', '2019-05-15 15:15:29', '0 Jam,0 Menit', 35000, NULL, 1, 'Administrator'),
('K00000037', 'M00000038', 'SEDAN', '2019-05-15 15:31:02', '2019-05-15 16:26:04', '0 Jam,55 Menit', 40000, NULL, 1, 'Administrator'),
('K00000038', 'M00000039', 'SUV', '2019-05-18 10:17:22', '2019-05-18 12:05:33', '1 Jam,48 Menit', 45000, NULL, 1, 'Administrator'),
('K00000039', 'M00000040', 'MOTOR', '2019-05-18 16:35:02', '2019-05-18 16:43:40', '0 Jam,8 Menit', 15000, NULL, 1, 'Administrator'),
('K00000040', 'M00000041', 'SUV', '2019-05-20 09:42:36', '2019-05-20 09:44:18', '0 Jam,1 Menit', 45000, NULL, 1, 'Administrator'),
('K00000041', 'M00000042', 'SEDAN', '2019-05-21 13:41:43', '2019-05-21 22:17:56', '8 Jam,36 Menit', 40000, NULL, 1, 'Administrator'),
('K00000042', 'M00000043', 'MOTOR', '2019-05-21 22:19:19', '2019-05-21 22:19:37', '0 Jam,0 Menit', 15000, NULL, 1, 'Administrator'),
('K00000043', 'M00000044', 'SEDAN', '2019-05-23 11:18:29', '2019-05-23 15:01:59', '3 Jam,43 Menit', 40000, NULL, 1, 'Administrator'),
('K00000044', 'M00000045', 'SUV - KOLONG / BODY', '2019-05-23 15:05:26', '2019-05-23 15:35:19', '0 Jam,29 Menit', 35000, NULL, 1, 'Administrator'),
('K00000045', 'M00000046', 'SEDAN', '2019-05-24 09:49:35', '2019-05-24 10:34:04', '0 Jam,44 Menit', 40000, NULL, 1, 'Administrator'),
('K00000046', 'M00000047', 'SUV - KOLONG / BODY', '2019-05-24 14:32:39', '2019-05-24 14:45:06', '0 Jam,12 Menit', 35000, NULL, 1, 'Administrator'),
('K00000047', 'M00000048', 'SPORT', '2019-06-18 10:00:31', '2019-06-18 10:01:09', '0 Jam,0 Menit', 50000, NULL, 1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan`
--

CREATE TABLE IF NOT EXISTS `tbl_kendaraan` (
  `kd_kendaraan` varchar(50) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `nama_kendaraan` varchar(50) DEFAULT NULL,
  `harga_kendaraan` int(20) DEFAULT NULL,
  `create_by_kendaraan` varchar(50) DEFAULT NULL,
  `jenis_kendaraan` int(10) NOT NULL,
  PRIMARY KEY (`kd_kendaraan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`kd_kendaraan`, `nama_paket`, `nama_kendaraan`, `harga_kendaraan`, `create_by_kendaraan`, `jenis_kendaraan`) VALUES
('JK001', 'SPORT', 'PAJERO, FORTUNER, ALPHARD, BAN SEJENIS', 50000, 'reza', 1),
('JK002', 'SPORT - KOLONG / BODY', 'PAJERO, FORTUNER, ALPHARD, BAN SEJENIS', 40000, 'reza', 1),
('JK003', 'SUV', 'INOVA, DOUBLE KABIN, OUTLANDER, NISAN, DLL', 45000, 'reza', 1),
('JK004', 'SUV - KOLONG / BODY', 'INOVA, DOUBLE KABIN, OUTLANDER, NISAN, DLL', 35000, 'reza', 1),
('JK005', 'SEDAN', 'AVANZA, KIJANG PETAK, SEDAN, GRANDMAX, APV, RUSH, ', 40000, 'reza', 1),
('JK006', 'SEDAN - BODY / KOLONG ', 'AVANZA, KIJANG PETAK, SEDAN, GRANDMAX, APV, RUSH, ', 35000, 'reza', 1),
('JK007', 'MOTOR', 'ALL', 15000, 'reza', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masuk`
--

CREATE TABLE IF NOT EXISTS `tbl_masuk` (
  `kd_masuk` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(50) DEFAULT NULL,
  `kd_kendaraan` varchar(50) DEFAULT NULL,
  `plat_masuk` varchar(50) DEFAULT NULL,
  `tgl_masuk` datetime DEFAULT NULL,
  `status_masuk` int(11) DEFAULT NULL,
  `create_masuk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kd_masuk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_masuk`
--

INSERT INTO `tbl_masuk` (`kd_masuk`, `nama_pelanggan`, `kd_kendaraan`, `plat_masuk`, `tgl_masuk`, `status_masuk`, `create_masuk`) VALUES
('M00000001', 'ANDI', 'JK004', 'BA 1234 AB', '2019-05-07 17:27:06', 4, 'Reza Alvaero'),
('M00000002', 'ANDI', 'JK003', 'BE 1234 AB', '2019-05-07 17:31:19', 4, 'Reza Alvaero'),
('M00000003', 'BUDI', 'JK005', 'BE 1983 FE', '2019-05-07 17:31:50', 4, 'Reza Alvaero'),
('M00000004', 'ADI', 'JK007', 'BA 4532 FA', '2019-05-07 17:36:23', 4, 'Reza Alvaero'),
('M00000005', 'coustemer 1', 'JK001', 'BA 1158 LO', '2019-05-08 11:41:45', 4, 'Administrator'),
('M00000006', 'COUSTEMER 1', 'JK001', 'BA 1158 LO', '2019-05-08 11:51:31', 4, 'Administrator'),
('M00000007', 'DONI', 'JK006', 'BA 8212 MP', '2019-05-08 15:34:18', 4, 'Administrator'),
('M00000008', 'COUSTEMER 1', 'JK001', 'BA 1158 LO', '2019-05-08 21:23:58', 4, 'Administrator'),
('M00000009', 'DONI', 'JK005', 'BA 8212 MP', '2019-05-08 21:25:52', 4, 'Administrator'),
('M00000010', 'NDRE', 'JK001', 'BE 3001 ND', '2019-05-08 21:29:41', 4, 'Administrator'),
('M00000011', 'kolo', 'JK002', 'BE 2707 BK', '2019-05-08 21:34:25', 4, 'Administrator'),
('M00000012', 'coustemer 3', 'JK003', 'BA 1993 MO', '2019-05-09 11:46:21', 4, 'Administrator'),
('M00000013', 'coustemer 3', 'JK005', 'BA 1993 MO', '2019-05-09 11:47:30', 4, 'Administrator'),
('M00000014', 'YOS', 'JK003', 'BA 8519 EN', '2019-05-09 13:38:42', 4, 'Administrator'),
('M00000015', 'coustemer 4', 'JK003', 'BE 1858 TX', '2019-05-10 11:45:38', 4, 'Administrator'),
('M00000016', 'DODI', 'JK001', 'BA 8735 RO', '2019-05-10 15:36:32', 4, 'Administrator'),
('M00000017', 'AAN', 'JK001', 'AB 1142 UD', '2019-05-10 16:23:08', 4, 'Administrator'),
('M00000018', 'coustemer 5', 'JK007', 'BA 3225 EJ', '2019-05-11 12:59:31', 4, 'Administrator'),
('M00000019', 'coustemer 5', 'JK005', 'BA 1908 RE', '2019-05-11 14:01:27', 4, 'Administrator'),
('M00000020', 'coustemer 6', 'JK005', 'BA 1791 HB', '2019-05-11 15:15:43', 4, 'Administrator'),
('M00000021', 'rika', 'JK005', 'BA 1409 RC', '2019-05-12 11:36:48', 4, 'Administrator'),
('M00000022', 'coustemer 7', 'JK007', 'BA 3364 GB', '2019-05-12 12:14:00', 4, 'Administrator'),
('M00000023', 'coustemer 7', 'JK007', 'BA 3354 ME3', '2019-05-12 12:54:22', 4, 'Administrator'),
('M00000024', 'coustemer ', 'JK003', 'B 8120 NL', '2019-05-12 12:56:00', 4, 'Administrator'),
('M00000025', 'Ismail', 'JK005', 'BA 9892 CL', '2019-05-12 15:42:14', 4, 'Administrator'),
('M00000026', 'coustemer ', 'JK004', 'BE 8120 NL', '2019-05-12 16:04:02', 4, 'Administrator'),
('M00000027', 'coustemer ', 'JK005', 'BA 8782 MQ', '2019-05-13 10:41:28', 4, 'Administrator'),
('M00000028', 'coustemer ', 'JK005', 'BA 1858 MK', '2019-05-13 12:59:16', 4, 'Administrator'),
('M00000029', 'coustemer ', 'JK007', 'BA 2435 MU', '2019-05-13 12:59:58', 4, 'Administrator'),
('M00000030', 'riski', 'JK005', 'BM 1591 FM', '2019-05-14 17:34:07', 4, 'Administrator'),
('M00000031', 'ARIF', 'JK003', 'BA 1615 AZ', '2019-05-14 17:38:15', 4, 'Administrator'),
('M00000032', 'RAHMAD', 'JK005', 'BA 1754 TD', '2019-05-14 17:40:10', 4, 'Administrator'),
('M00000033', 'ARIF', 'JK005', 'BA 1566 AB', '2019-05-14 17:40:38', 4, 'Administrator'),
('M00000034', 'coustemer ', 'JK005', 'BA 1934 LR', '2019-05-15 08:53:04', 4, 'Administrator'),
('M00000035', 'AN', 'JK003', 'BM 1235 DS', '2019-05-15 10:21:35', 4, 'Administrator'),
('M00000037', 'coustemer ', 'JK004', 'BA 1640 DN', '2019-05-15 15:15:08', 4, 'Administrator'),
('M00000038', 'YATI', 'JK005', 'BM 1772 OH', '2019-05-15 15:31:02', 4, 'Administrator'),
('M00000039', 'COUSTEMER 1', 'JK003', 'BM 1711 RK', '2019-05-18 10:17:22', 4, 'Administrator'),
('M00000040', 'coustemer 2', 'JK007', 'BM 3206 BP', '2019-05-18 16:35:02', 4, 'Administrator'),
('M00000041', 'coustemer 1', 'JK003', 'BA 8563 EN', '2019-05-20 09:42:36', 4, 'Administrator'),
('M00000042', 'coustemer 1', 'JK005', 'BM 1779 VM', '2019-05-21 13:41:43', 4, 'Administrator'),
('M00000043', 'coustemer 2', 'JK007', 'BA 1345 AZ', '2019-05-21 22:19:19', 4, 'Administrator'),
('M00000044', 'ARIF', 'JK005', 'BA 1387 BO', '2019-05-23 11:18:29', 4, 'Administrator'),
('M00000045', 'coustemer 2', 'JK004', 'BA 1645 EN', '2019-05-23 15:05:26', 4, 'Administrator'),
('M00000046', 'coustemer ', 'JK005', 'BA 44 YU', '2019-05-24 09:49:35', 4, 'Administrator'),
('M00000047', 'coustemer ', 'JK004', 'BA 1505 RL', '2019-05-24 14:32:39', 4, 'Administrator'),
('M00000048', 'rere', 'JK001', 'BE 1231 TTT', '2019-06-18 10:00:31', 4, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE IF NOT EXISTS `tbl_member` (
  `kd_member` varchar(50) NOT NULL,
  `kd_kendaraan` varchar(50) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `plat_member` varchar(50) NOT NULL,
  PRIMARY KEY (`kd_member`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wstatus`
--

CREATE TABLE IF NOT EXISTS `wstatus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wstatus`
--

INSERT INTO `wstatus` (`id`, `description`) VALUES
(1, 'Book'),
(2, 'Waiting'),
(3, 'Process'),
(4, 'Done');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
