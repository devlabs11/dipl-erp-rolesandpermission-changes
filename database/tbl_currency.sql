-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2023 at 09:02 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

DROP TABLE IF EXISTS `tbl_currency`;
CREATE TABLE IF NOT EXISTS `tbl_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`id`, `description`) VALUES
(1, 'AFN'),
(2, 'EUR'),
(3, 'ALL'),
(4, 'DZD'),
(5, 'USD'),
(6, 'EUR'),
(7, 'AOA'),
(8, 'XCD'),
(9, 'AAD'),
(10, 'XCD'),
(11, 'ARS'),
(12, 'AMD'),
(13, 'AWG'),
(14, 'AUD'),
(15, 'EUR'),
(16, 'AZN'),
(17, 'BSD'),
(18, 'BHD'),
(19, 'BDT'),
(20, 'BBD'),
(21, 'BYN'),
(22, 'EUR'),
(23, 'BZD'),
(24, 'XOF'),
(25, 'BMD'),
(26, 'BTN'),
(27, 'BOB'),
(28, 'USD'),
(29, 'BAM'),
(30, 'BWP'),
(31, 'NOK'),
(32, 'BRL'),
(33, 'USD'),
(34, 'BND'),
(35, 'BGN'),
(36, 'XOF'),
(37, 'BIF'),
(38, 'KHR'),
(39, 'XAF'),
(40, 'CAD'),
(41, 'CVE'),
(42, 'KYD'),
(43, 'XAF'),
(44, 'XAF'),
(45, 'CLP'),
(46, 'CNY'),
(47, 'AUD'),
(48, 'AUD'),
(49, 'COP'),
(50, 'KMF'),
(51, 'XAF'),
(52, 'CDF'),
(53, 'NZD'),
(54, 'CRC'),
(55, 'XOF'),
(56, 'HRK'),
(57, 'CUP'),
(58, 'ANG'),
(59, 'EUR'),
(60, 'CZK'),
(61, 'DKK'),
(62, 'DJF'),
(63, 'XCD'),
(64, 'DOP'),
(65, 'USD'),
(66, 'EGP'),
(67, 'USD'),
(68, 'XAF'),
(69, 'ERN'),
(70, 'EUR'),
(71, 'ETB'),
(72, 'FKP'),
(73, 'DKK'),
(74, 'FJD'),
(75, 'EUR'),
(76, 'EUR'),
(77, 'EUR'),
(78, 'XPF'),
(79, 'EUR'),
(80, 'XAF'),
(81, 'GMD'),
(82, 'GEL'),
(83, 'EUR'),
(84, 'GHS'),
(85, 'GIP'),
(86, 'EUR'),
(87, 'DKK'),
(88, 'XCD'),
(89, 'EUR'),
(90, 'USD'),
(91, 'GTQ'),
(92, 'GBP'),
(93, 'GNF'),
(94, 'XOF'),
(95, 'GYD'),
(96, 'HTG'),
(97, 'AUD'),
(98, 'EUR'),
(99, 'HNL'),
(100, 'HKD'),
(101, 'HUF'),
(102, 'ISK'),
(103, 'INR'),
(104, 'IDR'),
(105, 'IRR'),
(106, 'IQD'),
(107, 'EUR'),
(108, 'GBP'),
(109, 'ILS'),
(110, 'EUR'),
(111, 'JMD'),
(112, 'JPY'),
(113, 'GBP'),
(114, 'JOD'),
(115, 'KZT'),
(116, 'KES'),
(117, 'AUD'),
(118, 'KPW'),
(119, 'KRW'),
(120, 'EUR'),
(121, 'KWD'),
(122, 'KGS'),
(123, 'LAK'),
(124, 'EUR'),
(125, 'LBP'),
(126, 'LSL'),
(127, 'LRD'),
(128, 'LYD'),
(129, 'CHF'),
(130, 'EUR'),
(131, 'EUR'),
(132, 'MOP'),
(133, 'MKD'),
(134, 'MGA'),
(135, 'MWK'),
(136, 'MYR'),
(137, 'MVR'),
(138, 'XOF'),
(139, 'EUR'),
(140, 'USD'),
(141, 'EUR'),
(142, 'MRO'),
(143, 'MUR'),
(144, 'EUR'),
(145, 'MXN'),
(146, 'USD'),
(147, 'MDL'),
(148, 'EUR'),
(149, 'MNT'),
(150, 'EUR'),
(151, 'XCD'),
(152, 'MAD'),
(153, 'MZN'),
(154, 'MMK'),
(155, 'NAD'),
(156, 'AUD'),
(157, 'NPR'),
(158, 'EUR'),
(159, 'ANG'),
(160, 'XPF'),
(161, 'NZD'),
(162, 'NIO'),
(163, 'XOF'),
(164, 'NGN'),
(165, 'NZD'),
(166, 'AUD'),
(167, 'USD'),
(168, 'NOK'),
(169, 'OMR'),
(170, 'PKR'),
(171, 'USD'),
(172, 'ILS'),
(173, 'PAB'),
(174, 'PGK'),
(175, 'PYG'),
(176, 'PEN'),
(177, 'PHP'),
(178, 'NZD'),
(179, 'PLN'),
(180, 'EUR'),
(181, 'USD'),
(182, 'QAR'),
(183, 'EUR'),
(184, 'RON'),
(185, 'RUB'),
(186, 'RWF'),
(187, 'EUR'),
(188, 'SHP'),
(189, 'XCD'),
(190, 'XCD'),
(191, 'EUR'),
(192, 'EUR'),
(193, 'XCD'),
(194, 'WST'),
(195, 'EUR'),
(196, 'STD'),
(197, 'SAR'),
(198, 'XOF'),
(199, 'RSD'),
(200, 'RSD'),
(201, 'SCR'),
(202, 'SLL'),
(203, 'SGD'),
(204, 'ANG'),
(205, 'EUR'),
(206, 'EUR'),
(207, 'SBD'),
(208, 'SOS'),
(209, 'ZAR'),
(210, 'GBP'),
(211, 'SSP'),
(212, 'EUR'),
(213, 'LKR'),
(214, 'SDG'),
(215, 'SRD'),
(216, 'NOK'),
(217, 'SZL'),
(218, 'SEK'),
(219, 'CHF'),
(220, 'SYP'),
(221, 'TWD'),
(222, 'TJS'),
(223, 'TZS'),
(224, 'THB'),
(225, 'USD'),
(226, 'XOF'),
(227, 'NZD'),
(228, 'TOP'),
(229, 'TTD'),
(230, 'TND'),
(231, 'TRY'),
(232, 'TMT'),
(233, 'USD'),
(234, 'AUD'),
(235, 'UGX'),
(236, 'UAH'),
(237, 'AED'),
(238, 'GBP'),
(239, 'USD'),
(240, 'USD'),
(241, 'UYU'),
(242, 'UZS'),
(243, 'VUV'),
(244, 'VEF'),
(245, 'VND'),
(246, 'USD'),
(247, 'USD'),
(248, 'XPF'),
(249, 'MAD'),
(250, 'YER'),
(251, 'ZMW'),
(252, 'ZWL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
