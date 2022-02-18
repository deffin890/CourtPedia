-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 10:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lapangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id` int(11) NOT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `id_lapangan` varchar(11) DEFAULT NULL,
  `status_lapangan` int(2) DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_jadwal`
--

INSERT INTO `tabel_jadwal` (`id`, `hari`, `id_lapangan`, `status_lapangan`, `jam`, `harga`) VALUES
(1, 'Senin', 'LBDMNT', 0, '8.00 - 9.00', 100000),
(2, 'Senin', 'LBDMNT', 0, '9.00 - 10.00', 100000),
(3, 'Senin', 'LBDMNT', 0, '10.00 - 11.00', 100000),
(4, 'Senin', 'LBDMNT', 0, '11.00 - 12.00', 100000),
(5, 'Senin', 'LBDMNT', 0, '13.00 - 14.00', 100000),
(6, 'Senin', 'LBDMNT', 0, '14.00 - 15.00', 100000),
(7, 'Senin', 'LBDMNT', 0, '15.00 - 16.00', 100000),
(8, 'Senin', 'LBDMNT', 0, '16.00 - 17.00', 100000),
(9, 'Selasa', 'LBDMNT', 0, '8.00 - 9.00', 100000),
(10, 'Selasa', 'LBDMNT', 0, '9.00 - 10.00', 100000),
(11, 'Selasa', 'LBDMNT', 0, '10.00 - 11.00', 100000),
(12, 'Selasa', 'LBDMNT', 0, '11.00 - 12.00', 100000),
(13, 'Selasa', 'LBDMNT', 0, '13.00 - 14.00', 100000),
(14, 'Selasa', 'LBDMNT', 0, '14.00 - 15.00', 100000),
(15, 'Selasa', 'LBDMNT', 0, '15.00 - 16.00', 100000),
(16, 'Selasa', 'LBDMNT', 0, '16.00 - 17.00', 100000),
(17, 'Rabu', 'LBDMNT', 0, '8.00 - 9.00', 100000),
(18, 'Rabu', 'LBDMNT', 0, '9.00 - 10.00', 100000),
(19, 'Rabu', 'LBDMNT', 0, '10.00 - 11.00', 100000),
(20, 'Rabu', 'LBDMNT', 0, '11.00 - 12.00', 100000),
(21, 'Rabu', 'LBDMNT', 0, '13.00 - 14.00', 100000),
(22, 'Rabu', 'LBDMNT', 0, '14.00 - 15.00', 100000),
(23, 'Rabu', 'LBDMNT', 0, '15.00 - 16.00', 100000),
(24, 'Rabu', 'LBDMNT', 0, '16.00 - 17.00', 100000),
(25, 'Kamis', 'LBDMNT', 0, '8.00 - 9.00', 100000),
(26, 'Kamis', 'LBDMNT', 0, '9.00 - 10.00', 100000),
(27, 'Kamis', 'LBDMNT', 0, '10.00 - 11.00', 100000),
(28, 'Kamis', 'LBDMNT', 0, '11.00 - 12.00', 100000),
(29, 'Kamis', 'LBDMNT', 0, '13.00 - 14.00', 100000),
(30, 'Kamis', 'LBDMNT', 0, '14.00 - 15.00', 100000),
(31, 'Kamis', 'LBDMNT', 0, '15.00 - 16.00', 100000),
(32, 'Kamis', 'LBDMNT', 0, '16.00 - 17.00', 100000),
(33, 'Jumat', 'LBDMNT', 0, '8.00 - 9.00', 100000),
(34, 'Jumat', 'LBDMNT', 0, '9.00 - 10.00', 100000),
(35, 'Jumat', 'LBDMNT', 0, '10.00 - 11.00', 100000),
(36, 'Jumat', 'LBDMNT', 0, '11.00 - 12.00', 100000),
(37, 'Jumat', 'LBDMNT', 0, '13.00 - 14.00', 100000),
(38, 'Jumat', 'LBDMNT', 0, '14.00 - 15.00', 100000),
(39, 'Jumat', 'LBDMNT', 0, '15.00 - 16.00', 100000),
(40, 'Jumat', 'LBDMNT', 0, '16.00 - 17.00', 100000),
(41, 'Sabtu', 'LBDMNT', 0, '8.00 - 9.00', 120000),
(42, 'Sabtu', 'LBDMNT', 0, '9.00 - 10.00', 120000),
(43, 'Sabtu', 'LBDMNT', 0, '10.00 - 11.00', 120000),
(44, 'Sabtu', 'LBDMNT', 0, '11.00 - 12.00', 120000),
(45, 'Sabtu', 'LBDMNT', 0, '13.00 - 14.00', 120000),
(46, 'Sabtu', 'LBDMNT', 0, '14.00 - 15.00', 120000),
(47, 'Sabtu', 'LBDMNT', 0, '15.00 - 16.00', 120000),
(48, 'Sabtu', 'LBDMNT', 0, '16.00 - 17.00', 120000),
(49, 'Minggu', 'LBDMNT', 0, '8.00 - 9.00', 120000),
(50, 'Minggu', 'LBDMNT', 0, '9.00 - 10.00', 120000),
(51, 'Minggu', 'LBDMNT', 0, '10.00 - 11.00', 120000),
(52, 'Minggu', 'LBDMNT', 0, '11.00 - 12.00', 120000),
(53, 'Minggu', 'LBDMNT', 0, '13.00 - 14.00', 120000),
(54, 'Minggu', 'LBDMNT', 0, '14.00 - 15.00', 120000),
(55, 'Minggu', 'LBDMNT', 0, '15.00 - 16.00', 120000),
(56, 'Minggu', 'LBDMNT', 0, '16.00 - 17.00', 120000),
(57, 'Senin', 'LBSKT', 0, '8.00 - 9.00', 120000),
(58, 'Senin', 'LBSKT', 0, '9.00 - 10.00', 120000),
(59, 'Senin', 'LBSKT', 0, '10.00 - 11.00', 120000),
(60, 'Senin', 'LBSKT', 0, '11.00 - 12.00', 120000),
(61, 'Senin', 'LBSKT', 0, '13.00 - 14.00', 120000),
(62, 'Senin', 'LBSKT', 0, '14.00 - 15.00', 120000),
(63, 'Senin', 'LBSKT', 0, '15.00 - 16.00', 120000),
(64, 'Senin', 'LBSKT', 0, '16.00 - 17.00', 120000),
(65, 'Selasa', 'LBSKT', 0, '8.00 - 9.00', 120000),
(66, 'Selasa', 'LBSKT', 0, '9.00 - 10.00', 120000),
(67, 'Selasa', 'LBSKT', 0, '10.00 - 11.00', 120000),
(68, 'Selasa', 'LBSKT', 0, '11.00 - 12.00', 120000),
(69, 'Selasa', 'LBSKT', 0, '13.00 - 14.00', 120000),
(70, 'Selasa', 'LBSKT', 0, '14.00 - 15.00', 120000),
(71, 'Selasa', 'LBSKT', 0, '15.00 - 16.00', 120000),
(72, 'Selasa', 'LBSKT', 0, '16.00 - 17.00', 120000),
(73, 'Rabu', 'LBSKT', 0, '8.00 - 9.00', 120000),
(74, 'Rabu', 'LBSKT', 0, '9.00 - 10.00', 120000),
(75, 'Rabu', 'LBSKT', 0, '10.00 - 11.00', 120000),
(76, 'Rabu', 'LBSKT', 0, '11.00 - 12.00', 120000),
(77, 'Rabu', 'LBSKT', 0, '13.00 - 14.00', 120000),
(78, 'Rabu', 'LBSKT', 0, '14.00 - 15.00', 120000),
(79, 'Rabu', 'LBSKT', 0, '15.00 - 16.00', 120000),
(80, 'Rabu', 'LBSKT', 0, '16.00 - 17.00', 120000),
(81, 'Kamis', 'LBSKT', 0, '8.00 - 9.00', 120000),
(82, 'Kamis', 'LBSKT', 0, '9.00 - 10.00', 120000),
(83, 'Kamis', 'LBSKT', 0, '10.00 - 11.00', 120000),
(84, 'Kamis', 'LBSKT', 0, '11.00 - 12.00', 120000),
(85, 'Kamis', 'LBSKT', 0, '13.00 - 14.00', 120000),
(86, 'Kamis', 'LBSKT', 0, '14.00 - 15.00', 120000),
(87, 'Kamis', 'LBSKT', 0, '15.00 - 16.00', 120000),
(88, 'Kamis', 'LBSKT', 0, '16.00 - 17.00', 120000),
(89, 'Jumat', 'LBSKT', 0, '8.00 - 9.00', 120000),
(90, 'Jumat', 'LBSKT', 0, '9.00 - 10.00', 120000),
(91, 'Jumat', 'LBSKT', 0, '10.00 - 11.00', 120000),
(92, 'Jumat', 'LBSKT', 0, '11.00 - 12.00', 120000),
(93, 'Jumat', 'LBSKT', 0, '13.00 - 14.00', 120000),
(94, 'Jumat', 'LBSKT', 0, '14.00 - 15.00', 120000),
(95, 'Jumat', 'LBSKT', 0, '15.00 - 16.00', 120000),
(96, 'Jumat', 'LBSKT', 0, '16.00 - 17.00', 120000),
(97, 'Sabtu', 'LBSKT', 0, '8.00 - 9.00', 140000),
(98, 'Sabtu', 'LBSKT', 0, '9.00 - 10.00', 140000),
(99, 'Sabtu', 'LBSKT', 0, '10.00 - 11.00', 140000),
(100, 'Sabtu', 'LBSKT', 0, '11.00 - 12.00', 140000),
(101, 'Sabtu', 'LBSKT', 0, '13.00 - 14.00', 140000),
(102, 'Sabtu', 'LBSKT', 0, '14.00 - 15.00', 140000),
(103, 'Sabtu', 'LBSKT', 0, '15.00 - 16.00', 140000),
(104, 'Sabtu', 'LBSKT', 0, '16.00 - 17.00', 140000),
(105, 'Minggu', 'LBSKT', 0, '8.00 - 9.00', 140000),
(106, 'Minggu', 'LBSKT', 0, '9.00 - 10.00', 140000),
(107, 'Minggu', 'LBSKT', 0, '10.00 - 11.00', 140000),
(108, 'Minggu', 'LBSKT', 0, '11.00 - 12.00', 140000),
(109, 'Minggu', 'LBSKT', 0, '13.00 - 14.00', 140000),
(110, 'Minggu', 'LBSKT', 0, '14.00 - 15.00', 140000),
(111, 'Minggu', 'LBSKT', 0, '15.00 - 16.00', 140000),
(112, 'Minggu', 'LBSKT', 0, '16.00 - 17.00', 140000),
(113, 'Senin', 'LFTSL', 0, '8.00 - 9.00', 80000),
(114, 'Senin', 'LFTSL', 0, '9.00 - 10.00', 80000),
(115, 'Senin', 'LFTSL', 0, '10.00 - 11.00', 80000),
(116, 'Senin', 'LFTSL', 0, '11.00 - 12.00', 80000),
(117, 'Senin', 'LFTSL', 0, '13.00 - 14.00', 80000),
(118, 'Senin', 'LFTSL', 0, '14.00 - 15.00', 80000),
(119, 'Senin', 'LFTSL', 0, '15.00 - 16.00', 80000),
(120, 'Senin', 'LFTSL', 0, '16.00 - 17.00', 80000),
(121, 'Selasa', 'LFTSL', 0, '8.00 - 9.00', 80000),
(122, 'Selasa', 'LFTSL', 0, '9.00 - 10.00', 80000),
(123, 'Selasa', 'LFTSL', 0, '10.00 - 11.00', 80000),
(124, 'Selasa', 'LFTSL', 0, '11.00 - 12.00', 80000),
(125, 'Selasa', 'LFTSL', 0, '13.00 - 14.00', 80000),
(126, 'Selasa', 'LFTSL', 0, '14.00 - 15.00', 80000),
(127, 'Selasa', 'LFTSL', 0, '15.00 - 16.00', 80000),
(128, 'Selasa', 'LFTSL', 0, '16.00 - 17.00', 80000),
(129, 'Rabu', 'LFTSL', 0, '8.00 - 9.00', 800000),
(130, 'Rabu', 'LFTSL', 0, '9.00 - 10.00', 800000),
(131, 'Rabu', 'LFTSL', 0, '10.00 - 11.00', 800000),
(132, 'Rabu', 'LFTSL', 0, '11.00 - 12.00', 800000),
(133, 'Rabu', 'LFTSL', 0, '13.00 - 14.00', 800000),
(134, 'Rabu', 'LFTSL', 0, '14.00 - 15.00', 800000),
(135, 'Rabu', 'LFTSL', 0, '15.00 - 16.00', 800000),
(136, 'Rabu', 'LFTSL', 0, '16.00 - 17.00', 800000),
(137, 'Kamis', 'LFTSL', 0, '8.00 - 9.00', 80000),
(138, 'Kamis', 'LFTSL', 0, '9.00 - 10.00', 80000),
(139, 'Kamis', 'LFTSL', 0, '10.00 - 11.00', 80000),
(140, 'Kamis', 'LFTSL', 0, '11.00 - 12.00', 80000),
(141, 'Kamis', 'LFTSL', 0, '13.00 - 14.00', 80000),
(142, 'Kamis', 'LFTSL', 0, '14.00 - 15.00', 80000),
(143, 'Kamis', 'LFTSL', 0, '15.00 - 16.00', 80000),
(144, 'Kamis', 'LFTSL', 0, '16.00 - 17.00', 80000),
(145, 'Jumat', 'LFTSL', 0, '8.00 - 9.00', 80000),
(146, 'Jumat', 'LFTSL', 0, '9.00 - 10.00', 80000),
(147, 'Jumat', 'LFTSL', 0, '10.00 - 11.00', 80000),
(148, 'Jumat', 'LFTSL', 0, '11.00 - 12.00', 80000),
(149, 'Jumat', 'LFTSL', 0, '13.00 - 14.00', 80000),
(150, 'Jumat', 'LFTSL', 0, '14.00 - 15.00', 80000),
(151, 'Jumat', 'LFTSL', 0, '15.00 - 16.00', 80000),
(152, 'Jumat', 'LFTSL', 0, '16.00 - 17.00', 80000),
(153, 'Sabtu', 'LFTSL', 0, '8.00 - 9.00', 100000),
(154, 'Sabtu', 'LFTSL', 0, '9.00 - 10.00', 100000),
(155, 'Sabtu', 'LFTSL', 0, '10.00 - 11.00', 100000),
(156, 'Sabtu', 'LFTSL', 0, '11.00 - 12.00', 100000),
(157, 'Sabtu', 'LFTSL', 0, '13.00 - 14.00', 100000),
(158, 'Sabtu', 'LFTSL', 0, '14.00 - 15.00', 100000),
(159, 'Sabtu', 'LFTSL', 0, '15.00 - 16.00', 100000),
(160, 'Sabtu', 'LFTSL', 0, '16.00 - 17.00', 100000),
(161, 'Minggu', 'LFTSL', 0, '8.00 - 9.00', 100000),
(162, 'Minggu', 'LFTSL', 0, '9.00 - 10.00', 100000),
(163, 'Minggu', 'LFTSL', 0, '10.00 - 11.00', 100000),
(164, 'Minggu', 'LFTSL', 0, '11.00 - 12.00', 100000),
(165, 'Minggu', 'LFTSL', 0, '13.00 - 14.00', 100000),
(166, 'Minggu', 'LFTSL', 0, '14.00 - 15.00', 100000),
(167, 'Minggu', 'LFTSL', 0, '15.00 - 16.00', 100000),
(168, 'Minggu', 'LFTSL', 0, '16.00 - 17.00', 100000),
(169, 'Senin', 'LTNS', 0, '8.00 - 9.00', 140000),
(170, 'Senin', 'LTNS', 0, '9.00 - 10.00', 140000),
(171, 'Senin', 'LTNS', 0, '10.00 - 11.00', 140000),
(172, 'Senin', 'LTNS', 0, '11.00 - 12.00', 140000),
(173, 'Senin', 'LTNS', 0, '13.00 - 14.00', 140000),
(174, 'Senin', 'LTNS', 0, '14.00 - 15.00', 140000),
(175, 'Senin', 'LTNS', 0, '15.00 - 16.00', 140000),
(176, 'Senin', 'LTNS', 0, '16.00 - 17.00', 140000),
(177, 'Selasa', 'LTNS', 0, '8.00 - 9.00', 140000),
(178, 'Selasa', 'LTNS', 0, '9.00 - 10.00', 140000),
(179, 'Selasa', 'LTNS', 0, '10.00 - 11.00', 140000),
(180, 'Selasa', 'LTNS', 0, '11.00 - 12.00', 140000),
(181, 'Selasa', 'LTNS', 0, '13.00 - 14.00', 140000),
(182, 'Selasa', 'LTNS', 0, '14.00 - 15.00', 140000),
(183, 'Selasa', 'LTNS', 0, '15.00 - 16.00', 140000),
(184, 'Selasa', 'LTNS', 0, '16.00 - 17.00', 140000),
(185, 'Rabu', 'LTNS', 0, '8.00 - 9.00', 140000),
(186, 'Rabu', 'LTNS', 0, '9.00 - 10.00', 140000),
(187, 'Rabu', 'LTNS', 0, '10.00 - 11.00', 140000),
(188, 'Rabu', 'LTNS', 0, '11.00 - 12.00', 140000),
(189, 'Rabu', 'LTNS', 0, '13.00 - 14.00', 140000),
(190, 'Rabu', 'LTNS', 0, '14.00 - 15.00', 140000),
(191, 'Rabu', 'LTNS', 0, '15.00 - 16.00', 140000),
(192, 'Rabu', 'LTNS', 0, '16.00 - 17.00', 140000),
(193, 'Kamis', 'LTNS', 0, '8.00 - 9.00', 140000),
(194, 'Kamis', 'LTNS', 0, '9.00 - 10.00', 140000),
(195, 'Kamis', 'LTNS', 0, '10.00 - 11.00', 140000),
(196, 'Kamis', 'LTNS', 0, '11.00 - 12.00', 140000),
(197, 'Kamis', 'LTNS', 0, '13.00 - 14.00', 140000),
(198, 'Kamis', 'LTNS', 0, '14.00 - 15.00', 140000),
(199, 'Kamis', 'LTNS', 0, '15.00 - 16.00', 140000),
(200, 'Kamis', 'LTNS', 0, '16.00 - 17.00', 140000),
(201, 'Jumat', 'LTNS', 0, '8.00 - 9.00', 140000),
(202, 'Jumat', 'LTNS', 0, '9.00 - 10.00', 140000),
(203, 'Jumat', 'LTNS', 0, '10.00 - 11.00', 140000),
(204, 'Jumat', 'LTNS', 0, '11.00 - 12.00', 140000),
(205, 'Jumat', 'LTNS', 0, '13.00 - 14.00', 140000),
(206, 'Jumat', 'LTNS', 0, '14.00 - 15.00', 140000),
(207, 'Jumat', 'LTNS', 0, '15.00 - 16.00', 140000),
(208, 'Jumat', 'LTNS', 0, '16.00 - 17.00', 140000),
(209, 'Sabtu', 'LTNS', 0, '8.00 - 9.00', 160000),
(210, 'Sabtu', 'LTNS', 0, '9.00 - 10.00', 160000),
(211, 'Sabtu', 'LTNS', 0, '10.00 - 11.00', 160000),
(212, 'Sabtu', 'LTNS', 0, '11.00 - 12.00', 160000),
(213, 'Sabtu', 'LTNS', 0, '13.00 - 14.00', 160000),
(214, 'Sabtu', 'LTNS', 0, '14.00 - 15.00', 160000),
(215, 'Sabtu', 'LTNS', 0, '15.00 - 16.00', 160000),
(216, 'Sabtu', 'LTNS', 0, '16.00 - 17.00', 160000),
(217, 'Minggu', 'LTNS', 0, '8.00 - 9.00', 160000),
(218, 'Minggu', 'LTNS', 0, '9.00 - 10.00', 160000),
(219, 'Minggu', 'LTNS', 0, '10.00 - 11.00', 160000),
(220, 'Minggu', 'LTNS', 0, '11.00 - 12.00', 160000),
(221, 'Minggu', 'LTNS', 0, '13.00 - 14.00', 160000),
(222, 'Minggu', 'LTNS', 0, '14.00 - 15.00', 160000),
(223, 'Minggu', 'LTNS', 0, '15.00 - 16.00', 160000),
(224, 'Minggu', 'LTNS', 0, '16.00 - 17.00', 160000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_lapang`
--

CREATE TABLE `tabel_lapang` (
  `id` varchar(11) NOT NULL,
  `nama_lapang` varchar(255) DEFAULT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_lapang`
--

INSERT INTO `tabel_lapang` (`id`, `nama_lapang`, `foto1`, `foto2`, `foto3`) VALUES
('LBDMNT', 'Badminton', 'bd1.jpg', 'bd2.jpg', 'bd3.jpg'),
('LBSKT', 'Basket', 'basket1.jpg', 'basket2.jpg', 'basket3.jpg'),
('LFTSL', 'Futsal', 'futsal1.jpg', 'futsal2.jpg', 'futsal3.jpg'),
('LTNS', 'Tennis', 'tennis1.jpg', 'tennis2.jpg', 'tennis3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembayaran`
--

CREATE TABLE `tabel_pembayaran` (
  `id` int(11) NOT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `id_sewa` int(11) DEFAULT NULL,
  `status_bayar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_pembayaran`
--

INSERT INTO `tabel_pembayaran` (`id`, `jumlah_bayar`, `id_sewa`, `status_bayar`) VALUES
(19, 100000, 54, 1),
(20, 140000, 55, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_sewa`
--

CREATE TABLE `tabel_sewa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_lapang` varchar(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `tgl_booking` varchar(255) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_sewa`
--

INSERT INTO `tabel_sewa` (`id`, `id_user`, `id_lapang`, `id_jadwal`, `tgl_booking`, `invoice`) VALUES
(54, 1, 'LBDMNT', 1, '2020-05-13', '5ebaeded4b1d3'),
(55, 1, 'LTNS', 206, '2020-05-13', '5ebaedfd15033');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `nama`, `username`, `password`, `no_telp`, `email`) VALUES
(1, 'deffin', 'deffinad', 'e68e4af7e5180f7ec99116d6709e5e16d7fd304c', '085794132624', 'deffinjr890@gmail.com'),
(2, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '085794132624', 'courtpedia@upi.edu'),
(5, 'irenanda', 'irenandargt', 'd8f000846847423e176ed38a50c31528fbdfd2c8', '085794132624', 'irenandargt@gmail.com'),
(6, 'argi', 'margi', 'ea9011a84b5a7fd70ae0d02005207c04bdd367b8', '085794132624', 'argi@upi.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_lapangan` (`id_lapangan`) USING BTREE;

--
-- Indexes for table `tabel_lapang`
--
ALTER TABLE `tabel_lapang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_Sewa` (`id_sewa`) USING BTREE;

--
-- Indexes for table `tabel_sewa`
--
ALTER TABLE `tabel_sewa`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_User` (`id_user`) USING BTREE,
  ADD KEY `FK_Lapang` (`id_lapang`) USING BTREE,
  ADD KEY `fk_jadwal` (`id_jadwal`) USING BTREE;

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
--
-- AUTO_INCREMENT for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tabel_sewa`
--
ALTER TABLE `tabel_sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD CONSTRAINT `tabel_jadwal_ibfk_1` FOREIGN KEY (`id_lapangan`) REFERENCES `tabel_lapang` (`id`);

--
-- Constraints for table `tabel_pembayaran`
--
ALTER TABLE `tabel_pembayaran`
  ADD CONSTRAINT `tabel_pembayaran_ibfk_1` FOREIGN KEY (`id_sewa`) REFERENCES `tabel_sewa` (`id`);

--
-- Constraints for table `tabel_sewa`
--
ALTER TABLE `tabel_sewa`
  ADD CONSTRAINT `tabel_sewa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id`),
  ADD CONSTRAINT `tabel_sewa_ibfk_2` FOREIGN KEY (`id_lapang`) REFERENCES `tabel_lapang` (`id`),
  ADD CONSTRAINT `tabel_sewa_ibfk_3` FOREIGN KEY (`id_jadwal`) REFERENCES `tabel_jadwal` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
