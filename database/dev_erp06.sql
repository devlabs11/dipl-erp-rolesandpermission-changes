-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 06, 2023 at 05:58 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `access_modules`
--

CREATE TABLE `access_modules` (
  `id` int(11) NOT NULL,
  `modulegroup` text NOT NULL,
  `modulelabel` text NOT NULL,
  `modulename` varchar(80) NOT NULL,
  `module_sort` mediumint(9) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `menu_icon` varchar(40) DEFAULT NULL,
  `sub_icon` varchar(30) DEFAULT NULL,
  `is_sub_menu` tinyint(1) NOT NULL DEFAULT '0',
  `main_module` varchar(55) DEFAULT NULL,
  `sub_module` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_modules`
--

INSERT INTO `access_modules` (`id`, `modulegroup`, `modulelabel`, `modulename`, `module_sort`, `status`, `menu_icon`, `sub_icon`, `is_sub_menu`, `main_module`, `sub_module`) VALUES
(6, 'user', 'User', 'Users', 1, 1, NULL, NULL, 0, 'Master', 'User Setup'),
(7, 'role', 'Role', 'Role', 1, 1, NULL, NULL, 0, 'Master', 'User Setup'),
(15, 'country', 'country', 'Country', 1, 1, NULL, NULL, 0, 'Master', 'General Setup'),
(16, 'state', 'state', 'State', 1, 1, NULL, NULL, 0, 'Master', 'General Setup'),
(17, 'city', 'city', 'City', 1, 1, NULL, NULL, 0, 'Master', 'General Setup'),
(18, 'site', 'site', 'Site', 1, 1, NULL, NULL, 0, 'Master', 'Company Setup'),
(19, 'designation', 'designation', 'Designation', 1, 1, NULL, NULL, 0, 'Master', 'User Setup'),
(20, 'position', 'position', 'Position', 1, 1, NULL, NULL, 0, 'Master', 'User Setup'),
(21, 'quotation_type', 'quotation_type', 'Quotation Type', 1, 1, NULL, NULL, 0, NULL, NULL),
(22, 'quotation', 'quotation', 'Quotation', 1, 1, NULL, NULL, 0, 'Sales', NULL),
(24, 'ink_make', 'ink_make', 'Ink Make', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(25, 'paper_make', 'paper_make', 'Paper Make', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(26, 'color_shade', 'color_shade', 'Color Shade', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(27, 'gum_make', 'gum_make', 'Gum Make', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(28, 'color_master', 'color_master', 'Color Master', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(29, 'paper_color_shade', 'paper_color_shade', 'Paper Color Shade', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(30, 'excise', 'excise', 'Excise', 1, 1, NULL, NULL, 0, 'Master', 'Accounts Setup'),
(31, 'product_category', 'product_category', 'Product Category', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(32, 'process', 'process', 'Process', 1, 1, NULL, NULL, 0, 'Master', 'Production Process Setup'),
(33, 'company', 'company', 'Company', 1, 1, NULL, NULL, 0, 'Master', 'Company Setup'),
(34, 'machine', 'machine', 'Machine', 1, 1, NULL, NULL, 0, 'Master', 'Machine Setup'),
(35, 'unit', 'unit', 'Unit', 1, 1, NULL, NULL, 0, 'Master', 'Material Setup'),
(36, 'rm_category', 'rm_category', 'Rm Category', 1, 1, NULL, NULL, 0, 'Master', 'Material Setup'),
(37, 'rm_product_category', 'rm_product_category', 'Rm Product Category', 1, 1, NULL, NULL, 0, 'Master', 'Material Setup'),
(38, 'qcmaster', 'qcmaster', 'Qc Master', 1, 1, NULL, NULL, 0, 'Master', 'Production Process Setup'),
(39, 'material', 'material', 'Material', 1, 1, NULL, NULL, 0, 'Master', 'Material Setup'),
(40, 'product', 'product', 'Product', 1, 1, NULL, NULL, 0, 'Master', 'Job Order Setup'),
(41, 'spare', 'spare', 'Spare', 1, 1, NULL, NULL, 0, 'Master', 'Material Setup'),
(43, 'Manage Job Cards', 'manage_job_cards', 'Manage Job Cards', 1, 1, NULL, NULL, 0, 'Jobs', ''),
(44, 'customer', 'customer', 'Customer', 1, 1, NULL, NULL, 0, 'Master', 'Party Setup'),
(45, 'tax', 'tax', 'Tax', 1, 1, NULL, NULL, 0, 'Master', 'Accounts Setup'),
(46, 'transport', 'Transport', 'Transport', 1, 1, NULL, NULL, 0, 'Master', 'Party Setup'),
(47, 'Manage Sales Work Order', 'manage_sales_work_order', 'Manage Sales Work Order', 1, 1, NULL, NULL, 0, 'Jobs', ''),
(48, 'prospect-master', 'Prospect Master', 'prospect-master', 1, 1, NULL, NULL, 0, 'Master', 'Party Setup');

-- --------------------------------------------------------

--
-- Table structure for table `access_roles`
--

CREATE TABLE `access_roles` (
  `arid` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `addedby` int(11) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `rolename` varchar(40) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `staff` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_roles`
--

INSERT INTO `access_roles` (`arid`, `unique_id`, `addeddate`, `addedby`, `modifieddate`, `modifiedby`, `rolename`, `description`, `status`, `staff`, `deleted`) VALUES
(25, NULL, '2022-04-28 04:04:23', 0, '2022-12-05 09:12:04', 0, 'Admin', 'Admin', 1, NULL, NULL),
(30, NULL, '2022-04-30 03:04:40', 0, '2022-12-02 09:12:47', 0, 'test', 'test', 1, NULL, NULL),
(34, NULL, '2022-06-13 10:06:13', 0, '2022-12-05 09:12:43', 0, 'BackOffice-Quotation', 'BackOffice-Quotation', 1, NULL, NULL),
(35, NULL, '2022-06-20 09:06:38', 0, '2022-07-06 10:07:42', 0, 'Sales', 'Sale role', 1, NULL, NULL),
(37, 'RO/37', '2022-08-08 07:08:15', 0, '2022-10-11 05:10:35', 0, 'Admin123', 'Admin Description', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `access_role_modules`
--

CREATE TABLE `access_role_modules` (
  `rid` int(11) NOT NULL,
  `roleid` int(11) NOT NULL DEFAULT '0',
  `moduleid` int(11) NOT NULL DEFAULT '0',
  `allow_access` tinyint(1) NOT NULL DEFAULT '0',
  `allow_add` tinyint(1) NOT NULL DEFAULT '0',
  `allow_view` tinyint(1) NOT NULL DEFAULT '0',
  `allow_edit` tinyint(1) NOT NULL DEFAULT '0',
  `allow_delete` tinyint(1) NOT NULL DEFAULT '0',
  `allow_print` tinyint(1) NOT NULL DEFAULT '0',
  `allow_import` tinyint(1) NOT NULL DEFAULT '0',
  `allow_export` tinyint(1) NOT NULL DEFAULT '0',
  `allow_viewall` tinyint(1) NOT NULL DEFAULT '0',
  `allow_viewgroups` text,
  `allow_viewusers` text,
  `addeddate` datetime DEFAULT NULL,
  `addedby` int(11) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `allow_duplicate` tinyint(4) DEFAULT '0',
  `allow_print_with_hf` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `access_role_modules`
--

INSERT INTO `access_role_modules` (`rid`, `roleid`, `moduleid`, `allow_access`, `allow_add`, `allow_view`, `allow_edit`, `allow_delete`, `allow_print`, `allow_import`, `allow_export`, `allow_viewall`, `allow_viewgroups`, `allow_viewusers`, `addeddate`, `addedby`, `modifieddate`, `modifiedby`, `allow_duplicate`, `allow_print_with_hf`) VALUES
(144, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(145, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(146, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(147, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(148, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(149, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(150, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(151, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(152, 27, 6, 1, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-04-29 12:04:38', 1, NULL, NULL, NULL, 0),
(297, 32, 6, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(298, 32, 7, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(299, 32, 15, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(300, 32, 16, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(301, 32, 17, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(302, 32, 18, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(303, 32, 19, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(304, 32, 20, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(305, 32, 21, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0),
(364, 31, 6, 1, 1, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(365, 31, 7, 1, 1, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(366, 31, 15, 1, 1, 1, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(367, 31, 16, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(368, 31, 17, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(369, 31, 18, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(370, 31, 19, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(371, 31, 20, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(372, 31, 21, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(373, 31, 22, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-10 07:05:47', 1, NULL, NULL, NULL, 0),
(425, 26, 6, 0, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(426, 26, 7, 0, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(427, 26, 15, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(428, 26, 16, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(429, 26, 17, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(430, 26, 18, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(431, 26, 19, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(432, 26, 20, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(433, 26, 21, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(434, 26, 22, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(435, 26, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(436, 26, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(437, 26, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(438, 26, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(439, 26, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(440, 26, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(441, 26, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-05-16 06:05:37', 1, NULL, NULL, NULL, 0),
(442, 33, 6, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(443, 33, 7, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(444, 33, 15, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(445, 33, 16, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(446, 33, 17, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(447, 33, 18, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(448, 33, 19, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(449, 33, 20, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(450, 33, 21, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(451, 33, 22, 1, 1, 1, 1, 1, 1, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(452, 33, 24, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(453, 33, 25, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(454, 33, 26, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(455, 33, 27, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(456, 33, 28, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(457, 33, 29, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(458, 33, 30, 1, 1, 1, 1, 1, 0, 0, 0, 0, NULL, NULL, '2022-05-16 07:05:15', 1, NULL, NULL, NULL, 0),
(1028, 35, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1029, 35, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1030, 35, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1031, 35, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1032, 35, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1033, 35, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1034, 35, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1035, 35, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1036, 35, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1037, 35, 22, 1, 1, 1, 1, 0, 1, 1, 1, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 1, 1),
(1038, 35, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1039, 35, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1040, 35, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1041, 35, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1042, 35, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1043, 35, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1044, 35, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1045, 35, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1046, 35, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1047, 35, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1048, 35, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1049, 35, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1050, 35, 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1051, 35, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1052, 35, 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1053, 35, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1054, 35, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1055, 35, 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1056, 35, 42, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-07-06 10:07:42', 1, NULL, NULL, 0, 0),
(1116, 36, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1117, 36, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1118, 36, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1119, 36, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1120, 36, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1121, 36, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1122, 36, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1123, 36, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1124, 36, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1125, 36, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1126, 36, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1127, 36, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1128, 36, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1129, 36, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1130, 36, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1131, 36, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1132, 36, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1133, 36, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1134, 36, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1135, 36, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1136, 36, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1137, 36, 35, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1138, 36, 36, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1139, 36, 37, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1140, 36, 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1141, 36, 39, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1142, 36, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1143, 36, 41, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1144, 36, 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-08-06 11:08:43', 1, NULL, NULL, 0, 0),
(1324, 37, 6, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1325, 37, 7, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1326, 37, 15, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1327, 37, 16, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1328, 37, 17, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1329, 37, 18, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1330, 37, 19, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1331, 37, 20, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1332, 37, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1333, 37, 22, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 1, 1),
(1334, 37, 24, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1335, 37, 25, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1336, 37, 26, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1337, 37, 27, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1338, 37, 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1339, 37, 29, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1340, 37, 30, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1341, 37, 31, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1342, 37, 32, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1343, 37, 33, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1344, 37, 34, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1345, 37, 35, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1346, 37, 36, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1347, 37, 37, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1348, 37, 38, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1349, 37, 39, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1350, 37, 40, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1351, 37, 41, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1352, 37, 43, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 1, 1),
(1353, 37, 44, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1354, 37, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1355, 37, 46, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-10-11 05:10:35', 1, NULL, NULL, 0, 0),
(1487, 30, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1488, 30, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1489, 30, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1490, 30, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1491, 30, 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1492, 30, 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1493, 30, 19, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1494, 30, 20, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1495, 30, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1496, 30, 22, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1497, 30, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1498, 30, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1499, 30, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1500, 30, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1501, 30, 28, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1502, 30, 29, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1503, 30, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1504, 30, 31, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1505, 30, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1506, 30, 33, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1507, 30, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1508, 30, 35, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1509, 30, 36, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1510, 30, 37, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1511, 30, 38, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1512, 30, 39, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1513, 30, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1514, 30, 41, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1515, 30, 43, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 1, 1),
(1516, 30, 44, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1517, 30, 45, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1518, 30, 46, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 0, 0),
(1519, 30, 47, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-02 09:12:47', 1, NULL, NULL, 1, 1),
(1586, 34, 6, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1587, 34, 7, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1588, 34, 15, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1589, 34, 16, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1590, 34, 17, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1591, 34, 18, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1592, 34, 19, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1593, 34, 20, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1594, 34, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1595, 34, 22, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 1, 1),
(1596, 34, 24, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1597, 34, 25, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1598, 34, 26, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1599, 34, 27, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1600, 34, 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1601, 34, 29, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1602, 34, 30, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1603, 34, 31, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1604, 34, 32, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1605, 34, 33, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1606, 34, 34, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1607, 34, 35, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1608, 34, 36, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1609, 34, 37, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1610, 34, 38, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1611, 34, 39, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1612, 34, 40, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1613, 34, 41, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1614, 34, 43, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1615, 34, 44, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1616, 34, 45, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1617, 34, 46, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1618, 34, 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-05 09:12:43', 1, NULL, NULL, 0, 0),
(1652, 25, 6, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1653, 25, 7, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1654, 25, 15, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1655, 25, 16, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1656, 25, 17, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1657, 25, 18, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1658, 25, 19, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1659, 25, 20, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1660, 25, 21, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1661, 25, 22, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 1, 1),
(1662, 25, 24, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1663, 25, 25, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1664, 25, 26, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1665, 25, 27, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1666, 25, 28, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1667, 25, 29, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1668, 25, 30, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1669, 25, 31, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1670, 25, 32, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1671, 25, 33, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1672, 25, 34, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1673, 25, 35, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1674, 25, 36, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1675, 25, 37, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1676, 25, 38, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1677, 25, 39, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1678, 25, 40, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1679, 25, 41, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1680, 25, 43, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 1, 1),
(1681, 25, 44, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1682, 25, 45, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1683, 25, 46, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 0, 0),
(1684, 25, 47, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-12-05 09:12:04', 1, NULL, NULL, 1, 1),
(1685, 25, 48, 1, 1, 1, 1, 1, 1, 1, 1, 0, NULL, NULL, '2022-05-06 12:05:05', 1, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `advance_feature_masters`
--

CREATE TABLE `advance_feature_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_id` bigint(20) DEFAULT NULL COMMENT 'tbl_currency Table id',
  `price` decimal(8,2) DEFAULT '0.00',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `description_masters`
--

CREATE TABLE `description_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `description_masters`
--

INSERT INTO `description_masters` (`id`, `text`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Basic Description', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Size', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Paper Weight/GSM', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Paper Type', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Front Printing', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Back Printing', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Design Features', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Security Ink Features', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Variable Features', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'SeQR Doc Features', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Additional Security Features', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Core Type', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Core ID', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Core Color', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Finishing', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Packing', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Front Cover Page', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Back Cover Page', NULL, NULL, NULL, NULL, NULL, NULL),
(19, '1st Part', NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2nd Part', NULL, NULL, NULL, NULL, NULL, NULL),
(21, '3rd Part', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'SeQR Doc Software Security Features', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Base Printing Security Paper Features', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Advanced Printing Security Features', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fg_entries`
--

CREATE TABLE `fg_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entry_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `user_operator_id` bigint(20) DEFAULT NULL COMMENT 'user_operators Table id',
  `job_card_id` bigint(20) DEFAULT NULL COMMENT 'tbl_job_cart Table id',
  `work_order_id` bigint(20) DEFAULT NULL COMMENT 'tbl_salesworkorder Table id',
  `location` bigint(20) DEFAULT NULL COMMENT 'mst_site Table id',
  `process_category_id` bigint(20) DEFAULT NULL COMMENT 'process_categories Table id',
  `process_id` bigint(20) DEFAULT NULL COMMENT 'tbl_process_master Table id',
  `fg_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_boxes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_kg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answers` text COLLATE utf8mb4_unicode_ci COMMENT '1 - Ok,2 - Not Okay, 3 - Not Applicable',
  `qc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complains` text COLLATE utf8mb4_unicode_ci,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fg_entries`
--

INSERT INTO `fg_entries` (`id`, `entry_no`, `date`, `user_operator_id`, `job_card_id`, `work_order_id`, `location`, `process_category_id`, `process_id`, `fg_qty`, `no_boxes`, `qty_kg`, `answers`, `qc`, `complains`, `comments`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'FG/2023-2024/01', '2023-05-01', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(2, 'FG/2023-2024/02', '2023-05-02', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(3, 'FG/2023-2024/03', '2023-05-03', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(4, 'FG/2023-2024/04', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(5, 'FG/2023-2024/05', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(6, 'FG/2023-2024/06', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(7, 'FG/2023-2024/07', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(8, 'FG/2023-2024/08', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(9, 'FG/2023-2024/09', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(10, 'FG/2023-2024/10', '2020-05-20', 1, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(11, 'FG/2023-2024/11', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(12, 'FG/2023-2024/12', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(13, 'FG/2023-2024/13', '2002-05-07', 4, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(14, 'FG/2023-2024/14', '2020-05-20', 5, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(15, 'FG/2023-2024/15', '2002-05-07', 6, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(16, 'FG/2023-2024/16', '2020-05-20', 7, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(17, 'FG/2023-2024/17', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(18, 'FG/2023-2024/18', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(19, 'FG/2023-2024/19', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(20, 'FG/2023-2024/20', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(21, 'FG/2023-2024/21', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(22, 'FG/2023-2024/22', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(23, 'FG/2023-2024/23', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(24, 'FG/2023-2024/24', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(25, 'FG/2023-2024/25', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(26, 'FG/2023-2024/26', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(27, 'FG/2023-2024/27', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(28, 'FG/2023-2024/28', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(29, 'FG/2023-2024/29', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(30, 'FG/2023-2024/30', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(31, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(32, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(33, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(34, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(35, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(36, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(37, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(38, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(39, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(40, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(41, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(42, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(43, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(44, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(45, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(46, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(47, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(48, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(49, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(50, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(51, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(52, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(53, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(54, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(55, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(56, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(57, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(58, 'FG/2023-2024/02', '2020-05-20', 5, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(59, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(60, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(61, 'FG/2023-2024/01', '2002-05-07', 6, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(62, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(63, 'FG/2023-2024/01', '2002-05-07', 4, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(64, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(65, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(66, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(67, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(68, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(69, 'FG/2023-2024/01', '2002-05-07', 1, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(70, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(71, 'FG/2023-2024/01', '2002-05-07', 3, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(72, 'FG/2023-2024/02', '2020-05-20', 4, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(73, 'FG/2023-2024/01', '2002-05-07', 5, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(74, 'FG/2023-2024/02', '2020-05-20', 6, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(75, 'FG/2023-2024/01', '2002-05-07', 7, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(76, 'FG/2023-2024/02', '2020-05-20', 1, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(77, 'FG/2023-2024/01', '2002-05-07', 2, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(78, 'FG/2023-2024/02', '2020-05-20', 3, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(79, 'FG/2023-2024/01', '2002-05-07', 4, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(80, 'FG/2023-2024/02', '2020-05-20', 5, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38'),
(81, 'FG/2023-2024/01', '2002-05-07', 6, 112, 234, 54, 1, 24, '22', '222', '22', '1,2,2,1', 'ss2', 'ww2', 'ww2', 9, 9, NULL, NULL, '2023-05-08 01:57:20', '2023-05-08 03:32:00'),
(82, 'FG/2023-2024/02', '2020-05-20', 7, 112, 234, 54, 1, 24, '2w', '22w', '2w', '1,2,1,3', 'ssw', 'www2', 'www', 9, 9, NULL, NULL, '2023-05-08 03:28:50', '2023-05-08 03:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `hash`
--

CREATE TABLE `hash` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hash`
--

INSERT INTO `hash` (`username`, `password`, `email`) VALUES
('mw123@gmail.com', 'mw123@gmail.com', 'mw123@gmail.com'),
('mw123@gmail.com', 'mw123@gmail.com', 'mw123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_card_types`
--

CREATE TABLE `job_card_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `tbl_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id`, `unique_id`, `title`, `tbl_name`, `status`) VALUES
(1, NULL, 'Country', 'mst_country', 1),
(2, NULL, 'Site', 'mst_site', 1),
(3, NULL, 'Designation', 'mst_designation', 1),
(4, NULL, 'Position', 'mst_position', 1),
(5, NULL, 'Quote Type', 'mst_quote_type', 1),
(6, NULL, 'Ink Make', 'mst_ink_make', 1),
(7, NULL, 'Paper Make', 'mst_paper_make', 1),
(8, NULL, 'Color Shade', 'mst_color_shade', 1),
(9, NULL, 'Gum Make', 'mst_gum_make', 1),
(10, NULL, 'Color Master', 'mst_color_master', 1),
(11, NULL, 'Paper Color Shade', 'mst_paper_color_shade', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_menu_id` bigint(20) NOT NULL DEFAULT '0' COMMENT 'sub_menus id',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `sub_menu_id`, `text`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 16, '161+161 LPI', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 16, '75+75 LPI', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 16, '75+100 LPI', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 16, '75 LPI', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 17, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 17, 'Yellow', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 17, 'Green', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 17, 'Red', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 18, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 18, 'Yellow', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 18, 'Green', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 18, 'Red', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 19, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 19, 'Yellow', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 19, 'Green', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 19, 'Red', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 33, 'Normal Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 33, 'Penetrating Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 33, 'Invisible Fluorescent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 42, 'Invisible Data', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 42, 'Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 42, 'Sign', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 42, 'Photo', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 42, 'Variable Text', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 43, 'Wallpaper', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 43, 'Registered', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 43, '2D', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 43, '3D', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 43, 'Hot-stamping', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 43, 'Label/Sticker', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 45, 'Gold', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 45, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 45, 'Red', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 45, 'Green', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 45, 'Silver', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 45, 'Holographic Color', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 46, 'Gold', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 46, 'Blue', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 46, 'Red', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 46, 'Green', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 46, 'Silver', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 46, 'Holographic Color', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_01_101936_create_countries_table', 2),
(6, '2022_04_01_102228_create_mst_countries_table', 2),
(7, '2023_02_08_102908_create_prospect_masters_table', 3),
(8, '2023_02_13_063555_create_taxes_table', 4),
(9, '2023_02_17_081149_create_terms_conditions_table', 5),
(10, '2023_02_17_095102_create_terms_condition_categories_table', 6),
(11, '2023_02_17_095733_create_terms_titles_table', 6),
(12, '2023_02_13_114858_create_quotation_masters_table', 7),
(13, '2023_02_17_065812_create_quotation_products_table', 7),
(14, '2023_02_21_093841_create_quotation_product_items_table', 7),
(15, '2023_03_01_100931_add_unique_id_quotation_masters_table', 8),
(17, '2023_03_03_042757_create_sales_masters_table', 9),
(18, '2023_03_06_125506_add_term_value_quotation_masters_table', 10),
(19, '2023_03_08_104040_create_description_masters_table', 11),
(20, '2023_03_08_112840_create_sub_menus_table', 11),
(21, '2023_03_08_112916_create_menu_items_table', 11),
(22, '2023_03_10_052217_add_company_and_desc_id_tbl_product_table', 12),
(23, '2023_03_20_051500_add_sign_to_users_table', 13),
(24, '2023_04_07_123724_create_product_size_masters_table', 14),
(25, '2023_04_10_100133_create_tax_structure_masters_table', 14),
(26, '2023_04_12_062645_add_discount_column_to_tbl_salesworkorder', 14),
(27, '2023_04_12_112354_create_proforma_invoices_table', 14),
(28, '2023_04_13_063009_create_job_card_types_table', 14),
(29, '2023_04_19_111123_create_proforma_overses_table', 14),
(30, '2023_04_19_111218_create_proforma_locals_table', 14),
(31, '2023_04_19_111241_create_proforma_products_table', 14),
(32, '2023_04_27_102919_create_user_operators_table', 15),
(33, '2023_05_03_060114_create_process_categories_table', 16),
(34, '2023_05_04_011132_add_email_to_user_operators_table', 17),
(35, '2023_04_27_065134_create_fg_entries_table', 18),
(36, '2023_05_17_111412_add_currency_feature_to_quotation_masters_table', 19),
(37, '2023_05_23_044601_create_printer_feature_masters_table', 19),
(38, '2023_05_23_044859_create_advance_feature_masters_table', 19),
(39, '2023_05_23_044915_create_printer_masters_table', 19),
(40, '2023_05_25_124020_create_quotation_advace_features_table', 19),
(41, '2023_06_01_054020_create_quotation_product_item_multipe_qty_rates_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `mst_color_master`
--

CREATE TABLE `mst_color_master` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_color_master`
--

INSERT INTO `mst_color_master` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(3, NULL, 'null', 'Color Master', NULL, 1, 0, '2022-05-09 11:05:53', NULL, NULL, 0),
(4, NULL, 'null', 'DARK RED', NULL, 1, 0, '2022-05-16 09:05:48', NULL, NULL, 0),
(8, NULL, 'null', 'RED', NULL, 1, 0, '2022-05-18 04:05:42', NULL, NULL, 0),
(9, NULL, 'null', 'LIGHT RED', NULL, 1, 0, '2022-05-18 04:05:04', NULL, NULL, 0),
(10, NULL, 'val', 'YELLOW', NULL, 1, 29, '2022-08-02 07:08:06', NULL, NULL, 0),
(11, NULL, 'val', 'CYAN', NULL, 1, 29, '2022-08-02 07:08:11', NULL, NULL, 0),
(12, NULL, 'val', 'BLACK', NULL, 1, 29, '2022-08-02 07:08:28', NULL, NULL, 0),
(13, 'CL/13', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:28', NULL, NULL, 0),
(14, 'CL/14', 'val', 'Pink', NULL, 1, 9, '2022-08-05 12:08:02', NULL, NULL, 0),
(15, 'CL/15', 'val', 'dasd', NULL, 1, 999999999, '2022-08-06 11:08:20', NULL, NULL, 0),
(16, 'CL/16', 'val', 'BLACK HOT SPOT', NULL, 1, 29, '2022-08-23 05:08:06', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_color_shade`
--

CREATE TABLE `mst_color_shade` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_color_shade`
--

INSERT INTO `mst_color_shade` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(6, NULL, 'null', 'Color Shade', NULL, 1, 0, '2022-05-09 11:05:51', NULL, NULL, 0),
(7, NULL, 'null', 'Light Yellow', NULL, 1, 0, '2022-05-16 09:05:49', NULL, NULL, 0),
(8, NULL, 'null', 'GRASS GREEN', NULL, 1, 0, '2022-05-18 04:05:10', NULL, NULL, 0),
(9, NULL, 'null', 'BLOOD RED', NULL, 1, 0, '2022-05-18 04:05:27', NULL, NULL, 0),
(10, 'CS/10', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:15', NULL, NULL, 0),
(11, 'CS/11', 'val', 'Light Pink', NULL, 1, 9, '2022-08-05 12:08:18', NULL, NULL, 0),
(12, 'CS/12', 'val', 'cv', NULL, 1, 999999999, '2022-08-06 11:08:37', NULL, NULL, 0),
(13, 'CS/13', 'val', 'YELLOW', NULL, 1, 25, '2022-08-29 11:08:43', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_countries`
--

CREATE TABLE `mst_countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_country`
--

CREATE TABLE `mst_country` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_country`
--

INSERT INTO `mst_country` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(54, NULL, 'India', 'India', NULL, 1, 0, '2022-05-04 12:05:21', NULL, NULL, 0),
(55, NULL, 'China', 'China', NULL, 1, 0, '2022-05-04 12:05:58', NULL, NULL, 0),
(56, 'CN/56', '408 code', '408 name', NULL, 1, 999999999, '2022-08-05 06:08:59', NULL, NULL, 0),
(57, 'CN/57', 'ND', 'Noida', NULL, 1, 9, '2022-08-05 12:08:03', NULL, NULL, 0),
(58, 'CN/58', 'dsf', 'sdf', NULL, 1, 999999999, '2022-08-06 11:08:51', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_designation`
--

CREATE TABLE `mst_designation` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_designation`
--

INSERT INTO `mst_designation` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(53, NULL, 'val', 'Sales', NULL, 1, 9, '2022-06-20 09:06:17', NULL, NULL, 0),
(54, NULL, 'val', 'Admin', NULL, 1, 9, '2022-06-20 10:06:45', NULL, NULL, 0),
(55, NULL, 'val', 'Backoffice', NULL, 1, 9, '2022-06-20 10:06:55', NULL, NULL, 0),
(56, 'DS/56', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:47', NULL, NULL, 0),
(57, 'DS/57', 'val', 'Emp', NULL, 1, 9, '2022-08-05 12:08:13', NULL, NULL, 0),
(58, 'DS/58', 'val', 'Tester', NULL, 1, 999999999, '2022-08-06 11:08:03', 9, '2022-12-02 09:12:10', 0),
(59, 'DS/59', 'val', 'CEO', NULL, 1, 9, '2022-09-09 07:09:29', NULL, NULL, 0),
(60, 'DS/60', 'val', 'Assistant', NULL, 1, 9, '2022-09-09 07:09:59', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_gum_make`
--

CREATE TABLE `mst_gum_make` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_gum_make`
--

INSERT INTO `mst_gum_make` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(3, NULL, 'null', 'Gum Make  Name', NULL, 1, 0, '2022-05-09 11:05:06', NULL, NULL, 0),
(4, NULL, 'null', 'Forbo Gum', NULL, 1, 0, '2022-05-16 09:05:43', NULL, NULL, 0),
(5, NULL, 'null', 'GUM Make1', NULL, 1, 0, '2022-05-18 04:05:17', NULL, NULL, 0),
(6, NULL, 'null', 'GUM MAKE2', NULL, 1, 0, '2022-05-18 04:05:43', NULL, NULL, 0),
(7, 'GM/7', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:50', NULL, NULL, 0),
(8, 'GM/8', 'val', 'Sand Gum', NULL, 1, 9, '2022-08-05 12:08:33', NULL, NULL, 0),
(9, 'GM/9', 'val', 'fds', NULL, 1, 999999999, '2022-08-06 11:08:05', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_ink_make`
--

CREATE TABLE `mst_ink_make` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_ink_make`
--

INSERT INTO `mst_ink_make` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(56, NULL, 'null', 'ink make 1', NULL, 1, 0, '2022-05-09 10:05:50', NULL, NULL, 0),
(57, NULL, 'null', 'OCI Ink', NULL, 1, 0, '2022-05-16 07:05:47', NULL, NULL, 0),
(58, NULL, 'null', 'Sea Green', NULL, 1, 0, '2022-05-16 07:05:43', NULL, NULL, 0),
(60, NULL, 'null', 'BURGUNDY', NULL, 1, 0, '2022-05-18 04:05:14', NULL, NULL, 0),
(61, NULL, 'null', 'PANTONE RED 032 C', NULL, 1, 0, '2022-05-18 04:05:32', 0, '2022-05-18 04:05:57', 0),
(65, 'IM/62', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:44', NULL, NULL, 0),
(66, 'IM/66', 'val', 'Crystal', NULL, 1, 9, '2022-08-05 12:08:21', NULL, NULL, 0),
(67, 'IM/67', 'val', 'sfdsf', NULL, 1, 999999999, '2022-08-06 11:08:13', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_paper_color_shade`
--

CREATE TABLE `mst_paper_color_shade` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_paper_color_shade`
--

INSERT INTO `mst_paper_color_shade` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(3, NULL, 'null', 'Paper Color Shade Name', NULL, 1, 0, '2022-05-09 11:05:52', NULL, NULL, 0),
(4, NULL, 'null', 'BLUE CFB', NULL, 1, 0, '2022-05-16 10:05:20', NULL, NULL, 0),
(8, NULL, 'null', 'BLUE CF', NULL, 1, 0, '2022-05-18 04:05:29', NULL, NULL, 0),
(9, NULL, 'null', 'BLUE CB', NULL, 1, 0, '2022-05-18 04:05:48', NULL, NULL, 0),
(10, NULL, 'val', 'WHITE', NULL, 1, 29, '2022-08-02 07:08:01', NULL, NULL, 0),
(11, 'PS/11', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:43', NULL, NULL, 0),
(12, 'PS/12', 'val', 'Sea Blue', NULL, 1, 9, '2022-08-05 12:08:40', NULL, NULL, 0),
(13, 'PS/13', 'val', 'bvc', NULL, 1, 999999999, '2022-08-06 11:08:53', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_paper_make`
--

CREATE TABLE `mst_paper_make` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_paper_make`
--

INSERT INTO `mst_paper_make` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(4, NULL, 'null', 'COSMO PAPER', NULL, 1, 0, '2022-05-16 09:05:30', NULL, NULL, 0),
(5, NULL, 'null', 'KHANNA PAPER1', NULL, 1, 0, '2022-05-16 09:05:09', 0, '2022-05-16 09:05:33', 0),
(6, NULL, 'null', 'BOND PAPER', NULL, 1, 0, '2022-05-18 04:05:00', NULL, NULL, 0),
(7, NULL, 'null', 'ASM PAPER', NULL, 1, 0, '2022-05-18 04:05:19', NULL, NULL, 0),
(8, NULL, 'val', 'KOEHLER PAPER', NULL, 1, 29, '2022-08-02 07:08:02', NULL, NULL, 0),
(9, 'PP/9', 'val', '408', NULL, 1, 999999999, '2022-08-05 06:08:22', NULL, NULL, 0),
(10, 'PP/10', 'val', 'Sand Paper', NULL, 1, 9, '2022-08-05 12:08:12', NULL, NULL, 0),
(12, 'PP/12', 'val', 'vcbc', NULL, 1, 999999999, '2022-08-06 11:08:47', NULL, NULL, 0),
(13, 'PP/13', 'val', 'STICKER PAPER', NULL, 1, 25, '2022-08-29 11:08:21', NULL, NULL, 0),
(14, 'PP/14', 'val', 'Paper1', NULL, 1, 9, '2022-12-05 09:12:40', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_position`
--

CREATE TABLE `mst_position` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_position`
--

INSERT INTO `mst_position` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`) VALUES
(53, NULL, 'val', 'Sales', NULL, 1, 9, '2022-06-20 09:06:42', NULL, NULL, 0),
(54, NULL, 'val', 'Admin', NULL, 1, 9, '2022-06-20 10:06:43', NULL, NULL, 0),
(55, NULL, 'val', 'Backoffice', NULL, 1, 9, '2022-06-20 10:06:15', NULL, NULL, 0),
(57, 'PM/57', 'val', 'executive', NULL, 1, 9, '2022-08-05 12:08:44', NULL, NULL, 0),
(58, 'PM/58', 'val', 'gdf', NULL, 1, 999999999, '2022-08-06 11:08:23', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_qc`
--

CREATE TABLE `mst_qc` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `process` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addeddby` int(20) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(20) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_qc`
--

INSERT INTO `mst_qc` (`id`, `unique_id`, `process`, `name`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(1, 'QC/1', '24', 'How?', 9, '2023-05-09 04:05:19', NULL, NULL),
(2, 'QC/2', '24', 'Hq', 9, '2023-05-09 04:05:57', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_quote_type`
--

CREATE TABLE `mst_quote_type` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_quote_type`
--

INSERT INTO `mst_quote_type` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(48, NULL, NULL, 'Quote 1', NULL, 1, 0, '2022-04-07 09:04:20', 0, '2022-04-13 07:04:15'),
(51, NULL, NULL, 'Quote 2', NULL, 1, 0, '2022-04-13 07:04:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_site`
--

CREATE TABLE `mst_site` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT '0',
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_site`
--

INSERT INTO `mst_site` (`id`, `unique_id`, `code`, `description`, `remark`, `status`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `company`, `address`) VALUES
(48, NULL, 'null', 'Site 1', NULL, 1, 0, '2022-04-07 09:04:20', 9, '2022-06-10 12:06:05', 37, 'Address 3'),
(49, NULL, 'null', 'Site 2', NULL, 1, 0, '2022-04-07 10:04:11', 9, '2022-06-10 12:06:54', 38, 'Address 2'),
(50, NULL, 'null', 'Site 3', NULL, 1, 0, '2022-04-07 10:04:04', 9, '2022-06-10 12:06:45', 38, 'Address 1'),
(51, NULL, 'null', 'Site4', NULL, 1, 0, '2022-05-03 07:05:49', 9, '2022-06-10 12:06:32', 38, 'Address'),
(53, NULL, 'null', 'aaaa', NULL, 1, 999999999, '2022-06-20 10:06:37', NULL, NULL, 43, 'aaaa'),
(54, NULL, 'null', 'Vikhroli - Back Office', NULL, 1, 9, '2022-06-21 03:06:32', NULL, NULL, 47, '16, Samrat Compound LBS Marg Vikhroli (West) MUMBAI'),
(55, NULL, 'null', 'Bhiwandi', NULL, 1, 9, '2022-06-21 03:06:16', NULL, NULL, 47, 'BHUMI WORLD INDUSTRIAL ESTATE PIMPLAS VILLAGE MUMBAI NASHIK HW BHIWANDI'),
(56, NULL, 'null', 'Vikhroli - Security Section', NULL, 1, 9, '2022-06-21 03:06:52', NULL, NULL, 47, '16, Samrat Compound LBS Marg Vikhroli west MUMBAI'),
(60, NULL, 'null', 'Test', NULL, 1, 999999999, '2022-06-21 05:06:00', NULL, NULL, 36, 'Test Address'),
(61, NULL, 'null', 'Test Location 1', NULL, 1, 999999999, '2022-06-21 05:06:23', NULL, NULL, 37, 'Test Address 1'),
(62, 'SI/62', 'null', 'Test LOcation', NULL, 1, 999999999, '2022-08-05 06:08:38', 999999999, '2022-08-05 06:08:36', 43, 'Test'),
(63, NULL, 'null', 'lll', NULL, 1, 999999999, '2022-08-06 10:08:30', NULL, NULL, 38, 'lll'),
(64, NULL, 'null', 'lll', NULL, 1, 999999999, '2022-08-06 10:08:45', NULL, NULL, 38, 'lll'),
(65, NULL, 'null', 'Thane', NULL, 1, 999999999, '2022-08-06 10:08:00', 9, '2022-12-05 08:12:24', 49, 'C-611, ABC Building, Near PQR'),
(66, 'SI/66', 'null', 'lll', NULL, 1, 999999999, '2022-08-06 10:08:31', NULL, NULL, 38, 'lll'),
(67, 'SI/67', 'null', 'Ghatkopar', NULL, 1, 9, '2022-08-08 05:08:37', NULL, NULL, 44, 'Ghatkopar'),
(68, 'SI/68', 'null', 'Panvel', NULL, 1, 9, '2022-12-05 08:12:58', NULL, NULL, 49, 'test- address');

-- --------------------------------------------------------

--
-- Table structure for table `mst_unit`
--

CREATE TABLE `mst_unit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mst_unit`
--

INSERT INTO `mst_unit` (`id`, `unique_id`, `description`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(17, NULL, 'SETS', 0, '2022-06-02 03:06:40', 0, '2022-08-11 07:08:09'),
(18, NULL, 'PACKETS', 0, '2022-06-02 03:06:52', 0, '2022-08-11 07:08:53'),
(19, NULL, 'TICKETS', 0, '2022-06-02 03:06:18', 0, '2022-08-11 07:08:41'),
(20, NULL, 'ROLLS', 0, '2022-06-02 03:06:34', 0, '2022-08-11 07:08:27'),
(24, NULL, 'NUMBER', 0, '2022-06-03 10:06:13', 0, '2022-08-11 07:08:17'),
(27, NULL, 'SHEET', 0, '2022-06-06 07:06:25', 0, '2022-08-11 07:08:05'),
(28, NULL, 'MM', 0, '2022-08-02 06:08:20', 0, '2022-08-11 07:08:56'),
(29, 'UN/29', 'INCH', 0, '2022-08-06 11:08:46', 0, '2022-08-11 07:08:19'),
(30, 'UN/30', 'BOXES', 0, '2022-08-08 06:08:50', 0, '2022-08-11 07:08:58'),
(31, 'UN/31', 'FORMS', 0, '2022-08-11 06:08:49', 0, '2022-08-11 07:08:44'),
(33, 'UN/33', 'MTRS', 0, '2022-08-11 07:08:21', 0, '2022-08-11 07:08:33'),
(34, 'UN/34', 'BOTTLES', 0, '2022-08-11 07:08:19', NULL, NULL),
(35, 'UN/35', 'BAGS', 0, '2022-08-11 07:08:26', NULL, NULL),
(36, 'UN/36', 'LABLES', 0, '2022-08-11 07:08:46', NULL, NULL),
(37, 'UN/37', 'REAM', 0, '2022-08-11 07:08:00', NULL, NULL),
(38, 'UN/38', 'LBS', 0, '2022-08-11 07:08:09', NULL, NULL),
(39, 'UN/39', 'CM', 0, '2022-08-11 07:08:29', NULL, NULL),
(41, 'UN/41', 'THOUSAND', 0, '2022-08-11 07:08:56', NULL, NULL),
(42, 'UN/42', 'HUNDRED', 0, '2022-08-11 07:08:05', NULL, NULL),
(43, 'UN/43', 'KGS', 0, '2022-08-20 10:08:35', NULL, NULL),
(44, 'UN/44', 'KGS', 0, '2022-08-20 10:08:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printer_feature_masters`
--

CREATE TABLE `printer_feature_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `printer_masters`
--

CREATE TABLE `printer_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `process_categories`
--

CREATE TABLE `process_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_categories`
--

INSERT INTO `process_categories` (`id`, `name`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Post-Press', 9, 9, NULL, NULL, '2023-05-03 04:05:45', '2023-05-03 04:08:35'),
(2, 'Started', 9, 9, NULL, NULL, '2023-05-03 04:12:42', '2023-05-03 04:12:50');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_masters`
--

CREATE TABLE `product_size_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `product_category_id` bigint(20) DEFAULT '0' COMMENT 'tbl_product_category id',
  `product_id` bigint(20) DEFAULT '0' COMMENT 'tbl_product id',
  `item_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proforma_invoices`
--

CREATE TABLE `proforma_invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotation_id` bigint(20) DEFAULT NULL COMMENT 'quotation_masters Table id',
  `type` tinyint(4) DEFAULT NULL COMMENT '1 - Oversis, 2 - Local',
  `sales_person_id` bigint(20) DEFAULT NULL COMMENT 'tbl_user Table id',
  `consigner_id` bigint(20) DEFAULT NULL COMMENT 'tbl_company Table id',
  `consignee_id` bigint(20) DEFAULT NULL COMMENT 'tbl_customer_general Table id',
  `delivery_address_id` bigint(20) DEFAULT NULL COMMENT 'tbl_customer_delivery_location Table id',
  `date` date DEFAULT NULL,
  `po_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po_date` date DEFAULT NULL,
  `mode_of_dispatch` tinyint(4) DEFAULT NULL COMMENT '1 - Road, 2 - Air, 3- Sea',
  `product_count` int(11) DEFAULT '0',
  `total` decimal(8,2) DEFAULT '0.00',
  `currency_id` bigint(20) DEFAULT NULL COMMENT 'tbl_currency Table id',
  `total_amount` decimal(8,2) DEFAULT '0.00',
  `rounded_total_amount` decimal(8,2) DEFAULT '0.00',
  `term_payments` text COLLATE utf8mb4_unicode_ci COMMENT 'terms_conditions Table id',
  `term_delivey` text COLLATE utf8mb4_unicode_ci COMMENT 'terms_conditions Table id',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proforma_invoices`
--

INSERT INTO `proforma_invoices` (`id`, `invoice_no`, `quotation_id`, `type`, `sales_person_id`, `consigner_id`, `consignee_id`, `delivery_address_id`, `date`, `po_no`, `po_date`, `mode_of_dispatch`, `product_count`, `total`, `currency_id`, `total_amount`, `rounded_total_amount`, `term_payments`, `term_delivey`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'PI/2023-2024/01', 1, 1, 22, 52, 233, 199, '2023-04-22', '123', '2023-04-22', 3, 1, '11.00', 2, '2.00', '2.00', '1,2,50', '18,46,71', 9, NULL, 9, '2023-04-23 06:13:12', '2023-04-22 05:52:51', '2023-04-23 06:13:12'),
(3, 'PI/2023-2024/02', 6, 2, 23, 50, 232, 198, '2023-04-22', '123', '2023-04-22', 2, 1, '1.00', 2, '1.00', '1.00', '2,3,4,50', '18,46,71,90', 9, NULL, NULL, NULL, '2023-04-22 06:16:11', '2023-04-22 06:16:11'),
(4, 'PI/2023-2024/03', 2, 1, 21, 50, 233, 199, '2023-04-23', '123', '2023-04-23', 1, 2, '6.00', 1, '6.00', '6.00', '1,2,3', '18,46,71', 9, NULL, NULL, NULL, '2023-04-23 06:07:34', '2023-04-23 06:07:34'),
(5, 'PI/2023-2024/04', 2, 2, 21, 49, 233, 199, '2023-04-23', '123', '2023-04-23', 1, 2, '22.00', NULL, '78.00', '78.00', '4,50,79', '18,46,71', 9, NULL, NULL, NULL, '2023-04-23 06:11:59', '2023-04-23 06:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `proforma_locals`
--

CREATE TABLE `proforma_locals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proforma_invoices_id` bigint(20) DEFAULT NULL COMMENT 'proforma_invoices Table id',
  `buyer` bigint(20) DEFAULT NULL COMMENT 'tbl_customer_general Table id',
  `is_paid` tinyint(4) DEFAULT NULL COMMENT '1 - paid, 2 - To Pay',
  `paid_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_id` bigint(20) DEFAULT NULL COMMENT 'tbl_tax Table id',
  `tax_amount` decimal(8,2) DEFAULT '0.00',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proforma_locals`
--

INSERT INTO `proforma_locals` (`id`, `proforma_invoices_id`, `buyer`, `is_paid`, `paid_text`, `tax_id`, `tax_amount`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 3, 232, 1, '1', 243, '20.00', 9, NULL, NULL, NULL, '2023-04-22 06:16:11', '2023-04-22 06:16:11'),
(2, 5, 234, 1, '22', 241, '34.00', 9, NULL, NULL, NULL, '2023-04-23 06:11:59', '2023-04-23 06:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `proforma_overses`
--

CREATE TABLE `proforma_overses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proforma_invoices_id` bigint(20) DEFAULT NULL COMMENT 'proforma_invoices Table id',
  `notify_party` bigint(20) DEFAULT NULL COMMENT 'tbl_customer_general Table id',
  `country_origin` bigint(20) DEFAULT NULL COMMENT 'mst_country Table id',
  `country_destination` bigint(20) DEFAULT NULL COMMENT 'mst_country Table id',
  `precarriage` tinyint(4) DEFAULT NULL COMMENT '1 - Road, 2 - Air, 3- Sea',
  `place_of_receipt` bigint(20) DEFAULT NULL COMMENT 'tbl_city Table id',
  `vessel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Vessel/FI No. Field value',
  `port_loading` bigint(20) DEFAULT NULL COMMENT 'tbl_city Table id',
  `port_discharge` bigint(20) DEFAULT NULL COMMENT 'tbl_city Table id',
  `final_destination` bigint(20) DEFAULT NULL COMMENT 'tbl_city Table id',
  `air_freight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sea_freight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_charges` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correspondent_bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'SWIFT/BIC CODE field value',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proforma_overses`
--

INSERT INTO `proforma_overses` (`id`, `proforma_invoices_id`, `notify_party`, `country_origin`, `country_destination`, `precarriage`, `place_of_receipt`, `vessel`, `port_loading`, `port_discharge`, `final_destination`, `air_freight`, `sea_freight`, `admin_cost`, `bank_charges`, `correspondent_bank`, `account_no`, `location`, `swift`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 2, 234, 55, 56, 3, 16, NULL, 16, 17, 16, '22', '22', '22', '22', '22', '22', '22', '2', 9, NULL, 9, '2023-04-23 06:13:12', '2023-04-22 05:52:51', '2023-04-23 06:13:12'),
(3, 4, 232, 54, 54, 1, 15, '123', 15, 15, 15, '1', '1', '1', '1', '1', '1', '1', '1', 9, NULL, NULL, NULL, '2023-04-23 06:07:34', '2023-04-23 06:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `proforma_products`
--

CREATE TABLE `proforma_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proforma_invoices_id` bigint(20) DEFAULT NULL COMMENT 'proforma_invoices Table id',
  `category_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `size_id` bigint(20) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `hsn_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` decimal(8,2) DEFAULT '0.00',
  `rate` decimal(8,2) DEFAULT '0.00',
  `unit_id` bigint(20) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT '0.00',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proforma_products`
--

INSERT INTO `proforma_products` (`id`, `proforma_invoices_id`, `category_id`, `product_id`, `size_id`, `description`, `hsn_code`, `qty`, `rate`, `unit_id`, `amount`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 30, 3, NULL, '11', '48119099', '11.00', '11.00', NULL, '0.00', 9, NULL, 9, '2023-04-23 06:13:12', '2023-04-22 05:52:51', '2023-04-23 06:13:12'),
(2, 3, 30, 3, NULL, '1', '48119099', '1.00', '1.00', NULL, '0.00', 9, NULL, NULL, NULL, '2023-04-22 06:16:11', '2023-04-22 06:16:11'),
(3, 4, 26, 2, NULL, '1', '5', '1.00', '2.00', 17, '2.00', 9, NULL, NULL, NULL, '2023-04-23 06:07:34', '2023-04-23 06:07:34'),
(4, 4, 26, 6, NULL, NULL, '5', '2.00', '2.00', 17, '4.00', 9, NULL, NULL, NULL, '2023-04-23 06:07:34', '2023-04-23 06:07:34'),
(5, 5, 26, 2, NULL, '12', '5', '11.00', '1.00', 18, '11.00', 9, NULL, NULL, NULL, '2023-04-23 06:11:59', '2023-04-23 06:11:59'),
(6, 5, 26, 6, NULL, NULL, '5', '11.00', '1.00', 18, '11.00', 9, NULL, NULL, NULL, '2023-04-23 06:11:59', '2023-04-23 06:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `prospect_masters`
--

CREATE TABLE `prospect_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotation_attention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prospect_masters`
--

INSERT INTO `prospect_masters` (`id`, `company`, `contact_person`, `phone`, `email`, `department`, `designation`, `quotation_attention`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Deepali1', 'deepali', '123456789', 'chandrakant4it@gmail.com', 'dd', 'xxx', 'A', NULL, NULL, NULL, NULL, '2023-02-10 00:30:49', '2023-02-10 04:55:42'),
(2, 'Deepali', 'ss', 'sasa', 'sasa', 'asas', 'asas', 'asas', NULL, NULL, NULL, NULL, '2023-02-10 02:44:13', '2023-02-10 04:55:40'),
(3, 'qqw', 'asas', 'sasa', 'asa', 'sas', 'sasas', 'asas', NULL, NULL, NULL, NULL, '2023-02-10 02:44:23', '2023-02-10 05:01:17'),
(4, 'Johns and Crane Co', 'Error expedita in do', '+1 (103) 941-5235', 'jegajomuqe@mailinator.com', 'Nulla animi odio si', 'Irure eveniet dolor', 'Atque facilis rerum', NULL, NULL, NULL, NULL, '2023-02-10 05:02:22', '2023-03-13 04:30:32'),
(5, 'Flynn and Kaufman Trading', 'Similique mollit est', '+1 (428) 964-5106', 'buzah@mailinator.com', 'Non rerum sit est m', 'Libero maxime est no', 'Voluptatibus nulla e', NULL, NULL, NULL, NULL, '2023-02-10 05:44:35', '2023-03-13 04:30:26'),
(6, 'Guzman Dyer Associates', 'Pariatur Omnis sit', '+1 (444) 467-6005', 'jezagidipu@mailinator.com', 'Pariatur Dignissimo', 'Cupiditate quasi dol', 'Id ab doloremque ut', NULL, NULL, NULL, NULL, '2023-02-10 05:44:42', '2023-03-13 04:30:18'),
(7, 'Wiley Fischer Traders', 'Soluta quia officia', '+1 (576) 412-3413', 'gywavuqave@mailinator.com', 'Optio quas lorem ex', 'Voluptas ducimus do', 'Minus mollitia incid', '2023-03-17 00:33:50', NULL, NULL, NULL, '2023-03-13 04:30:11', '2023-03-17 00:33:50'),
(8, 'Gould Schultz LLC', 'Tempore amet molli', '+1 (961) 314-1505', 'fujuhezy@mailinator.com', 'Et placeat et elige', 'Aliquid eiusmod ut a', 'Sed Nam modi laborio', NULL, NULL, NULL, NULL, '2023-03-17 00:34:07', '2023-03-17 00:34:07'),
(9, 'Murphy and Clayton Inc', 'Inga Kidd', '1234567890', 'jonenim@mailinator.com', 'Facere recusandae S', 'Accusantium laborios', 'Rem omnis quas et re', NULL, NULL, NULL, NULL, '2023-03-17 01:12:20', '2023-03-17 01:12:20'),
(10, 'Summers and Howe LLC', 'Natus at sit necessi', '13271235525', 'muhe@mailinator.com', 'In praesentium qui a', 'Velit qui eiusmod a', 'Veniam minim volupt', NULL, NULL, NULL, NULL, '2023-03-17 01:17:46', '2023-03-17 01:17:46'),
(11, 'Mathews and Campos Inc', 'Dolores hic aliqua', '123654822', 'tukih@mailinator.com', 'Non alias eius conse', 'Ipsa tenetur placea', 'Anim eum non ut aut', NULL, NULL, NULL, NULL, '2023-03-17 01:18:47', '2023-03-17 01:18:47'),
(12, 'Leonard Woodard LLC', 'deepali', '90112356879', 'lowu@mailinator.com', 'Mollitia nostrud ist', 'Nostrud ipsam minus', 'Dolor quas sunt mol', NULL, NULL, NULL, NULL, '2023-03-17 01:21:14', '2023-03-17 02:55:19'),
(13, 'David Holt Plc', 'Odio ratione volupta', '1352434484', 'jafyquty@mailinator.com', 'In ea consequuntur o', 'Dolores perspiciatis', 'Mollit dolor omnis o', NULL, NULL, NULL, NULL, '2023-03-17 03:51:33', '2023-03-17 03:51:33'),
(14, 'Holloway and Reese Plc', 'Est quia Nam eos a', '8498775864', 'cunylika@mailinator.com', 'Iusto dolorem occaec', 'Qui sunt consequatur', 'Aperiam sint rerum d', NULL, NULL, NULL, NULL, '2023-03-17 03:51:47', '2023-03-17 03:51:47'),
(15, 'Henson Burks Plc', 'Illo elit ut necess', '2773545713', 'mygopyv@mailinator.com', 'Recusandae Aliquid', 'Molestiae magna non', 'Autem aute quam sunt', NULL, NULL, NULL, NULL, '2023-03-17 03:53:23', '2023-03-17 03:53:23'),
(16, 'Clay and Freeman Co', 'Non ut aliquip hic f', '884946319', 'kaco@mailinator.com', 'Laboriosam exercita', 'Commodo voluptas vol', 'Numquam dolor nobis', NULL, NULL, NULL, NULL, '2023-03-17 03:54:27', '2023-03-17 03:54:27'),
(17, 'Deepali', 'deepali', '1065177445', 'vexox@mailinator.com', 'Cumque dolor aliqua', 'Sit velit quis irur', 'Rerum aliquid sed am', NULL, NULL, NULL, NULL, '2023-03-17 04:13:21', '2023-03-17 04:13:21'),
(18, 'Byers Noel Traders', 'Amet et illum temp', '7015266808', 'visunoqabu@mailinator.com', 'Sit voluptatem deser', 'Et cillum id molliti', 'Nam sint vel ullam a', NULL, NULL, NULL, NULL, '2023-03-17 04:42:47', '2023-03-17 04:42:47'),
(19, 'Munoz Valentine Co', 'Officia totam nulla', '18827225425', 'gagyb@mailinator.com', 'Et et in aut hic lab', 'Rerum aut consequunt', 'Ullam culpa esse o', NULL, NULL, NULL, NULL, '2023-03-17 04:49:50', '2023-03-17 04:49:50'),
(20, 'Munoz Valentine Co', 'Officia totam nulla', '18827225425', 'gagyb@mailinator.com', 'Et et in aut hic lab', 'Rerum aut consequunt', 'Ullam culpa esse o', NULL, NULL, NULL, NULL, '2023-03-17 04:50:05', '2023-03-17 04:50:05'),
(21, 'Rivers and Bullock Co', 'Repudiandae qui accu', '11222016456', 'rukut@mailinator.com', 'Aliqua Et modi porr', 'Amet enim quis iste', 'Molestiae qui nulla', NULL, NULL, NULL, NULL, '2023-03-17 04:50:32', '2023-03-17 04:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_advace_features`
--

CREATE TABLE `quotation_advace_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) DEFAULT NULL COMMENT 'quotation_master Table id',
  `advance_feature_id` bigint(20) DEFAULT NULL COMMENT 'advance_feature_masters Table id',
  `price` decimal(8,2) DEFAULT '0.00',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_invoice_details`
--

CREATE TABLE `quotation_invoice_details` (
  `quotation_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `column_id` varchar(11) NOT NULL,
  `row_id` varchar(11) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation_invoice_details`
--

INSERT INTO `quotation_invoice_details` (`quotation_id`, `id`, `column_id`, `row_id`, `description`) VALUES
(1, 1, '0', '0', ' SR.NO '),
(1, 2, '1', '0', '  ITEM'),
(1, 3, '2', '0', ' QUANTITY '),
(1, 4, '3', '0', ' RATE Per Roll'),
(1, 5, '0', '1', '      1.'),
(1, 6, '1', '1', 'NCR JP ROLL,\r\nSIZE : 80 MM X 80 MTRS,\r\nPAPER : 55 GSM THERMAL,\r\nCORE SIZE : 13 MM \r\n\r\n'),
(1, 7, '2', '1', ' 50 ROLLS'),
(1, 8, '3', '1', 'Rs.95/- Per Roll'),
(1, 9, '0', '2', '     2.'),
(1, 10, '1', '2', 'NCR RP ROLL,\r\nSIZE : 79 MM X 375 MTRS\r\nPAPAR : 55 GSM THERMAL\r\nCORE SIDE : 18 MM,\r\nPRINTING : BLACK SENSOR,\r\nCOATING SIDE INSIDE,\r\n'),
(1, 11, '2', '2', '50 ROLLS'),
(1, 12, '3', '2', 'Rs.410/- Per Roll'),
(3, 13, '0', '0', ' SR.NO  '),
(3, 14, '1', '0', '  ITEM '),
(3, 15, '2', '0', ' QUANTITY  '),
(3, 16, '3', '0', ' RATE Per Pcs'),
(3, 17, '0', '1', '      1. '),
(3, 18, '1', '1', 'Axis Bank Dividend Warrant-ITC LTD,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting : Black,Burgundy,Invisible,Fugitive Red'),
(3, 19, '2', '1', '48552 Pcs'),
(3, 20, '3', '1', 'Rs.1.10/- Per Pcs'),
(4, 21, '0', '0', ' Sr.No.'),
(4, 22, '1', '0', ' Item '),
(4, 23, '2', '0', ' Quantity '),
(4, 24, '3', '0', ' Rate Per Pcs'),
(4, 25, '0', '1', ' 1.'),
(4, 26, '1', '1', 'Hasti Bank Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Black+ Orange + Black Hotspot'),
(4, 27, '2', '1', '10000 Pcs'),
(4, 28, '3', '1', ' Rs.2.00/- Per Pcs'),
(5, 29, '0', '0', ' SR.NO'),
(5, 30, '1', '0', ' ITEM'),
(5, 31, '2', '0', ' QUANTITY'),
(5, 32, '3', '0', ' RATE'),
(5, 33, '0', '1', ' 1.'),
(5, 34, '1', '1', 'FINO Insta Plus Pin Mailer,\r\nSize : 10 inch x 3 inch x 3 ply,\r\nPaper : 60+60+70 GSM Normal,\r\nPrinting : 1 Color Printing'),
(5, 35, '2', '1', ' 250000 Pcs'),
(5, 36, '3', '1', ' 1.20/- Per Pcs'),
(6, 37, '0', '0', ' SR.NO '),
(6, 38, '1', '0', ' ITEM '),
(6, 39, '2', '0', ' QUANTITY '),
(6, 40, '3', '0', ' RATE '),
(6, 41, '0', '1', ' 1. '),
(6, 42, '1', '1', '  Cheque Book\r\nSize: 9 Inch X 3.67 Inch\r\nPaper : 95 GSM MICR CTS Paper\r\n4 Color Printing with UV,Numbering & Barcode \r\n25 Lvs Per Book'),
(6, 43, '2', '1', '10000 Books\r\n'),
(6, 44, '3', '1', 'Rs.22.50/- Per Book\r\n'),
(6, 45, '0', '2', ' 2.'),
(6, 46, '1', '2', ' Cheque Book\r\nSize: 9 Inch X 3.67 Inch\r\nPaper : 95 GSM MICR CTS Paper\r\n4 Color Printing with UV,Numbering & Barcode \r\n10 Lvs Per Book'),
(6, 47, '2', '2', '10000 Books'),
(6, 48, '3', '2', 'Rs.11.00/- Per Book\r\n '),
(7, 49, '0', '0', ' Sr.No.'),
(7, 50, '1', '0', ' Item'),
(7, 51, '2', '0', 'Quantity '),
(7, 52, '3', '0', ' Rate'),
(7, 53, '0', '1', ' 1.'),
(7, 54, '1', '1', 'Share Certificate - RC Bank\r\nSize : 9.5 Inch x 11 Inch,\r\nPaper : 105 GSM Parchment,\r\nFront Colours : Pantone 300C- Blue , PANTONE 465 C (GOLDEN), Magenta, Cyan , Black,\r\nBack side No Printing'),
(7, 55, '2', '1', '2510 Pcs'),
(7, 56, '3', '1', ' Rs.12,500/- Lot Charges'),
(8, 57, '0', '0', ' SR.NO.'),
(8, 58, '1', '0', ' ITEM'),
(8, 59, '2', '0', ' QUANTITY '),
(8, 60, '3', '0', ' RATE'),
(8, 61, '0', '1', ' 1'),
(8, 62, '1', '1', 'AFGHAN UNITED BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : 4 COLOUR PRINTING,\r\nWithout Data Printing'),
(8, 63, '2', '1', ' 13000 Pcs'),
(8, 64, '3', '1', 'Rs.2.20/- Per Pcs'),
(9, 65, '0', '0', ' SR.NO.'),
(9, 66, '1', '0', 'ITEM '),
(9, 67, '2', '0', ' QUANTITY'),
(9, 68, '3', '0', ' RATE'),
(9, 69, '0', '1', ' 1.'),
(9, 70, '1', '1', 'Size - 9” x 4” x 3 part,\r\nPaper - 60+60+70 GSM Normal Paper,\r\nPrinting - 1st part Single colour on front side & spot carbon on backside\r\n2nd part Four color printing on front & Single color on back\r\n3rd Part Single colour on back side\r\n'),
(9, 71, '2', '1', '3000 Pcs\r\n\r\n5000 Pcs\r\n\r\n7000 Pcs'),
(9, 72, '3', '1', 'Rs.4.50/- Per Pcs\r\n\r\nRs.3.50/- Per Pcs\r\n\r\nRs.2.90/- Per Pcs '),
(10, 73, '0', '0', ' SR. NO.'),
(10, 74, '1', '0', ' ITEM'),
(10, 75, '2', '0', ' QUANTITY'),
(10, 76, '3', '0', ' RATE'),
(10, 77, '0', '1', '1.'),
(10, 78, '1', '1', ' HP GAS RECEIPT\r\nSize : 15 inch x 12 inch\r\nPaper : 70 GSM \r\nPrinting :Red + Blue'),
(10, 79, '2', '1', '10000 Sheets'),
(10, 80, '3', '1', ' Rs.1.80/- Per Sheet'),
(11, 81, '0', '0', ' SR.NO.'),
(11, 82, '1', '0', ' Item'),
(11, 83, '2', '0', ' Quantity'),
(11, 84, '3', '0', ' Rate'),
(11, 85, '0', '1', ' 1.'),
(11, 86, '1', '1', 'Fixed Deposit Advice - Continuous Stationery\r\nSize :9.5 inch x 6 inch\r\nPaper :105 GSM Parchment,\r\nPrinting : Black,Yellow,Brown'),
(11, 87, '2', '1', ' 1 Lacs'),
(11, 88, '3', '1', 'Rs.1.65/- Per Pcs (with freight charges)\r\n\r\nRs.1.15/- Per Pcs (without freight charges)\r\n'),
(11, 89, '0', '2', ' 2.'),
(11, 90, '1', '2', 'Fixed Deposit Advice - Cutsheet Stationery\r\nSize : A5,\r\nPaper :100 GSM Sunshine,\r\nPrinting : Black,Yellow,Brown'),
(11, 91, '2', '2', ' 1 Lacs'),
(11, 92, '3', '2', 'Rs.1.65/- Per Pcs (with freight charges)\r\n\r\nRs.1.15/- Per Pcs (without freight charges)\r\n'),
(12, 93, '0', '0', ' SR. NO.'),
(12, 94, '1', '0', 'ITEM'),
(12, 95, '2', '0', 'QUANTITY'),
(12, 96, '3', '0', 'RATE'),
(12, 97, '0', '1', '1.'),
(12, 98, '1', '1', 'BANK OF INDIA TRAVEL CARD PIN MAILER,\r\nSIZE : 9 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : ONE COLOUR PRINTING '),
(12, 99, '2', '1', '1000 Pcs'),
(12, 100, '3', '1', 'Rs.5500/- Lot Charges'),
(13, 101, '0', '0', ' SR. NO.'),
(13, 102, '1', '0', ' ITEM'),
(13, 103, '2', '0', 'QUANTITY'),
(13, 104, '3', '0', ' RATE'),
(13, 105, '0', '1', '1.'),
(13, 106, '1', '1', 'HITACHI BNA THERMAL RECEIPT ROLL WITH BLACK SENSOR ONLY,\r\nSIZE : 79 MM X 540 MTRS,\r\nPAPER : 55 GSM THERMAL'),
(13, 107, '2', '1', '28 ROLLS'),
(13, 108, '3', '1', 'Rs.590/- PER ROLL'),
(14, 109, '0', '0', 'SR.NO.'),
(14, 110, '1', '0', ' ITEM'),
(14, 111, '2', '0', ' QUANTITY '),
(14, 112, '3', '0', ' RATE'),
(14, 113, '0', '1', '1.'),
(14, 114, '1', '1', ' SBI FINAL DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : BLACK,BRONZE BLUE,INVISIBLE INK'),
(14, 115, '2', '1', '2500 PCS \r\n(INCLUDING 500 NPCI)'),
(15, 116, '0', '0', 'SR.NO.'),
(14, 117, '3', '1', 'Rs.4.30/- PER PCS'),
(15, 118, '1', '0', ' ITEM'),
(15, 119, '2', '0', ' QUANTITY '),
(15, 120, '3', '0', ' RATE'),
(16, 121, '0', '0', 'SR.NO.'),
(15, 122, '0', '1', '1.'),
(16, 123, '1', '0', ' ITEM'),
(15, 124, '1', '1', ' SBI FINAL DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : BLACK,BRONZE BLUE,INVISIBLE INK'),
(16, 125, '2', '0', ' QUANTITY '),
(15, 126, '2', '1', '2500 PCS \r\n(INCLUDING 500 NPCI)'),
(16, 127, '3', '0', ' RATE'),
(15, 128, '3', '1', 'Rs.4.30/- PER PCS'),
(16, 129, '0', '1', '1.'),
(16, 130, '1', '1', ' SBI FINAL DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : BLACK,BRONZE BLUE,INVISIBLE INK'),
(16, 131, '2', '1', '2500 PCS \r\n(INCLUDING 500 NPCI)'),
(16, 132, '3', '1', 'Rs.4.30/- PER PCS'),
(17, 133, '0', '0', 'SR. NO. '),
(17, 134, '1', '0', 'ITEM '),
(17, 135, '2', '0', 'QUANTITY '),
(17, 136, '3', '0', 'RATE '),
(17, 137, '0', '1', '1. '),
(17, 138, '1', '1', 'Thermal POS Roll,\r\nSize: 79mm X 60mtrs,\r\nPaper: 50 GSM Thermal,\r\n2 colour Printing'),
(17, 139, '2', '1', '4000 ROLLS'),
(17, 140, '3', '1', ' Rs.55/- PER ROLL'),
(17, 141, '0', '2', '2'),
(17, 142, '1', '2', 'Thermal POS Roll,\r\nSize: 79mm X 40mtrs,\r\nPaper: 50 GSM Thermal,\r\n2 colour Printing'),
(17, 143, '2', '2', '4000 ROLLS'),
(17, 144, '3', '2', ' Rs.40/- PER ROLL'),
(18, 145, '0', '0', 'Sr. No.'),
(18, 146, '1', '0', 'Item Code'),
(18, 147, '2', '0', 'Item Description'),
(18, 148, '3', '0', 'Quantity'),
(18, 149, '4', '0', 'Price'),
(18, 150, '5', '0', 'Remark'),
(18, 151, '0', '2', '1'),
(18, 152, '1', '2', ''),
(18, 153, '2', '2', 'Thermal Roll\r\nClinic Cards \r\nSize: 821m m X 255mm\r\nCol: Blue 180 Microns ( Non Fading ink- Blue Gloss)\r\nPaper type: Non Tearable\r\n'),
(18, 154, '3', '2', '53,192 pcs'),
(18, 155, '4', '2', '325,275,600 USD'),
(18, 156, '5', '2', 'Prices as per FOB, Air Freight, CFR'),
(18, 157, '0', '-2', '2'),
(18, 158, '1', '-2', ''),
(18, 159, '2', '-2', 'Clinic Cards \r\nSize: 821m m X 255mm\r\nCol: Pink 180 Microns ( Non Fading ink- Pink Gloss)\r\nPaper type: Non Tearable\r\n'),
(18, 160, '3', '-2', '53,192 pcs'),
(18, 161, '4', '-2', '325,275,600 USD'),
(18, 162, '5', '-2', 'Prices as per FOB, Air Freight, CFR'),
(19, 163, '0', '0', ' SR.NO.'),
(19, 164, '1', '0', '   Item'),
(19, 165, '2', '0', '   Quantity'),
(19, 166, '3', '0', ' Rate  '),
(19, 167, '0', '1', ' 1.'),
(19, 168, '1', '1', ' Fixed Deposit Advice - Continuous Stationery\r\nSize :9.5 inch x 6 inch\r\nPaper :105 GSM Parchment,\r\nPrinting : Black,Yellow,Brown'),
(19, 169, '2', '1', ' 1 Lacs'),
(19, 170, '3', '1', 'Rs.1.45/- Per Pcs (Inclusive freight charges)\r\n  '),
(19, 171, '0', '2', '2.'),
(19, 172, '1', '2', 'Fixed Deposit Advice - Cutsheet Stationery\r\nSize : A5,\r\nPaper :100 GSM Sunshine,\r\nPrinting : Black,Yellow,Brown'),
(19, 173, '2', '2', '1 Lacs'),
(19, 174, '3', '2', ' Rs.1.45/- Per Pcs (Inclusive freight charges)\r\n'),
(20, 175, '0', '0', 'Sr. No.'),
(20, 176, '1', '0', ' Item '),
(20, 177, '2', '0', 'Quantity'),
(20, 178, '3', '0', 'Rate'),
(20, 179, '0', '1', '1.'),
(20, 180, '1', '1', ' Cheque Lvs,\r\nSize : 9 inch x 3.67 inch,\r\nPaper : 95 GSM MICR,\r\nSECURITY FEATURES : 1.INVISIBLE LOGO,\r\n2.VOID,\r\n3.MICRO LINE,\r\n4.CTS2010 MICR PAPER '),
(20, 181, '2', '1', '1000 Books'),
(20, 182, '3', '1', 'Rs.0.53/- Per Leave'),
(21, 183, '0', '0', '   Sr No '),
(21, 184, '1', '0', 'Product Description   '),
(21, 185, '2', '0', '  Quantity In Nos'),
(21, 186, '3', '0', '  Rate Per Pc'),
(21, 187, '4', '0', '  Total in INR'),
(21, 188, '0', '1', '   1'),
(21, 189, '1', '1', '   OMR Sheets (100 Questions)\r\nSize: A4\r\nPaper: 80 GSM\r\n'),
(21, 190, '2', '1', '  1000 nos'),
(21, 191, '3', '1', '  9.5/- per pc'),
(21, 192, '4', '1', '  9500/-'),
(21, 193, '0', '2', ' 2'),
(21, 194, '1', '2', ' Evaluation of Results & reports'),
(21, 195, '2', '2', ' -'),
(21, 196, '3', '2', '- '),
(21, 197, '4', '2', ' 36000/-'),
(22, 198, '0', '0', '  SR.NO.'),
(22, 199, '1', '0', 'ITEM'),
(22, 200, '2', '0', 'QUANTITY'),
(22, 201, '3', '0', 'RATE'),
(22, 202, '0', '1', '1. '),
(22, 203, '1', '1', 'Fixed Deposit Advice - Continuous Stationery \r\nSize :9.5 inch x 6 inch\r\nPaper :105 GSM Parchment,\r\nPrinting : Black,Yellow,Brown'),
(22, 204, '2', '1', ' 1 LACS PCS'),
(22, 205, '3', '1', 'Rs.1.40/- Per Pcs (Inclusive freight charges)\r\n  '),
(23, 206, '0', '0', 'SR.NO.'),
(23, 207, '1', '0', 'ITEM'),
(23, 208, '2', '0', 'QUANTITY'),
(23, 209, '3', '0', 'RATE'),
(23, 210, '0', '1', '1.'),
(23, 211, '1', '1', 'Fixed Deposit Advice - Cutsheet Stationery\r\nSize : A5,\r\nPaper :100 GSM Sunshine,\r\nPrinting : Black,Yellow,Brown'),
(23, 212, '2', '1', '1 LACS PCS'),
(23, 213, '3', '1', 'RS.1.15/-'),
(24, 214, '0', '0', ' Sr.No. '),
(24, 215, '1', '0', 'Item '),
(24, 216, '2', '0', ' Quantity'),
(24, 217, '3', '0', ' Rate'),
(24, 218, '0', '1', '1.  '),
(24, 219, '1', '1', 'Welcome Letter,\r\nPaper - 80 GSM Maplitho\r\nSize : A4'),
(24, 220, '2', '1', ' 20000 Pcs'),
(24, 221, '3', '1', ' Rs.1.30/- Per Pcs'),
(24, 222, '0', '2', '2.'),
(24, 223, '1', '2', 'Card Pouch,\r\nPaper - 157 GSM Art Paper\r\nSize : 90 mm x 64 mm'),
(24, 224, '2', '2', ' 20000 Pcs'),
(24, 225, '3', '2', 'Rs.2.40/- Per Pcs'),
(24, 226, '0', '3', '3.'),
(24, 227, '1', '3', 'Card Envelope,\r\nPaper - 157 GSM Art Paper\r\nSize : 233 mm x 162 mm'),
(24, 228, '2', '3', ' 20000 Pcs'),
(24, 229, '3', '3', 'Rs.3.40/- Per Pcs'),
(25, 230, '0', '0', ' Sr No'),
(25, 231, '1', '0', 'Product Description '),
(25, 232, '2', '0', ' MOQ Quantity '),
(25, 233, '3', '0', ' Rate Per 1000 Pc'),
(25, 234, '4', '0', ' Total in INR'),
(25, 235, '0', '1', ' 1'),
(25, 236, '1', '1', ' Printer Stationery\r\nSize: 9 X 12 X 1 Ply\r\nPaper: 80 GSM\r\n'),
(25, 237, '2', '1', ' 10000 Pcs'),
(25, 238, '3', '1', ' 700/'),
(25, 239, '4', '1', ' 7,000/-'),
(25, 240, '0', '2', ' 2'),
(25, 241, '1', '2', ' Printer Stationery\r\nSize: A4\r\nPaper:80 GSM\r\n'),
(25, 242, '2', '2', ' 10000 Pcs'),
(25, 243, '3', '2', ' 750/'),
(25, 244, '4', '2', ' 7,500/-'),
(26, 245, '0', '0', 'Sr No'),
(26, 246, '1', '0', 'Quotation for  Printer Stationery '),
(26, 247, '2', '0', '  MOQ Quantity '),
(26, 248, '3', '0', ' Rate Per 1000 Pc'),
(26, 249, '4', '0', ' Total in INR'),
(26, 250, '0', '1', ' 1'),
(26, 251, '1', '1', ' Line Printer'),
(26, 252, '2', '1', ' 10000 Pcs'),
(26, 253, '3', '1', ' 0.90/- '),
(26, 254, '4', '1', ' 9,000/-'),
(26, 255, '0', '2', ' 2'),
(26, 256, '1', '2', ' Printer Stationery'),
(26, 257, '2', '2', ' 10000 Pcs'),
(26, 258, '3', '2', ' 1.00/- '),
(26, 259, '4', '2', ' 10,000/-'),
(27, 260, '0', '0', 'SR.NO.'),
(27, 261, '1', '0', 'DESCRIPTION'),
(27, 262, '2', '0', 'QUANTITY  '),
(27, 263, '3', '0', ' RATE  '),
(27, 264, '0', '1', '1. '),
(27, 265, '1', '1', 'GP Parsik Sahakari Bank- Computer Stationary Blank with Logo.\r\nSize: 15X12X1\r\nPrinting :Name Logo & Numbering '),
(27, 266, '2', '1', '100 Box of 3000 Sheet '),
(27, 267, '3', '1', 'A Grade Paper - Rs.2475/- Per Box\r\n\r\nB Grade Paper - Rs.2295/- Per Box '),
(27, 268, '0', '2', '2.'),
(27, 269, '1', '2', ' GP Parsik Sahakari Bank- Computer Stationary Blank with Logo.\r\nSize: 10X12X1\r\nPrinting :Name Logo & Numbering'),
(27, 270, '2', '2', '100 Box of 3000 Sheet '),
(27, 271, '3', '2', 'A Grade Paper - Rs.1715/- Per Box\r\n\r\nB Grade Paper - Rs.1635/- Per Box'),
(28, 272, '0', '0', '  Sr No'),
(28, 273, '1', '0', '  Product Description'),
(28, 274, '2', '0', '  Quantity of Box'),
(28, 275, '3', '0', ' A Grade Paper Rate Per Box'),
(28, 276, '4', '0', ' B Grade Paper Rate Per Box'),
(28, 277, '5', '0', 'Total in INR Grade A '),
(28, 278, '6', '0', ' Total in INR Grade B'),
(28, 279, '0', '1', '  1'),
(28, 280, '1', '1', '  Cheque Stationery \r\nSize: 10 X 12 X 1\r\nBlank with Logo & No\r\n'),
(28, 281, '2', '1', '  100 Box\r\nPer Box 3000 Pcs\r\n'),
(28, 282, '3', '1', ' 1715/-'),
(28, 283, '4', '1', ' 1635/-'),
(28, 284, '5', '1', ' 1,71,500/-'),
(28, 285, '6', '1', ' 1,63,500/-'),
(28, 286, '0', '2', '  2'),
(28, 287, '1', '2', '  Cheque Stationery \r\nSize: 15 X 12 X 2\r\nBlank with Logo & No\r\n'),
(28, 288, '2', '2', '  100 Box\r\nPer Box 3000 Pcs\r\n'),
(28, 289, '3', '2', ' 2475/-'),
(28, 290, '4', '2', ' 2295/-'),
(28, 291, '5', '2', ' 2,47,500/-'),
(28, 292, '6', '2', ' 2,29,500/-'),
(29, 293, '0', '0', 'Sr.No.'),
(29, 294, '1', '0', 'Item '),
(29, 295, '2', '0', 'Quantity'),
(29, 296, '3', '0', 'Rate'),
(29, 297, '0', '1', '1.'),
(29, 298, '1', '1', 'Degree Certificate\r\nSize : 9 inch x 12 inch,\r\nPaper : 200 Micron Non tearable Paper,\r\nPrinting : 4 colours on front side and 1 colour on back side,\r\nSecurity Features :\r\n1.MICRO TEXT,\r\n2.GUILLOCHE BOARDER, 3.BARCODE,\r\n4.GHOST IMAGE,\r\n5.INVISIBLE LOGO,\r\n6.VOID COPY\r\n'),
(29, 299, '2', '1', '10000 Pcs'),
(29, 300, '3', '1', 'Rs.19/- Per Pcs'),
(30, 301, '0', '0', 'Sr. No.'),
(30, 302, '1', '0', 'Item '),
(30, 303, '2', '0', 'Quantity'),
(30, 304, '3', '0', 'Rate'),
(30, 305, '0', '1', '1.'),
(30, 306, '1', '1', ' Outsource Challan\r\nSize: 10 Inch X 12 Inch X 3 Part\r\nPaper : 70gsm + 70gsm + 70gsm with 2 carbon paper in each set\r\nColor: 4 Color Front + 1 Color Back\r\nPacking : 500 Sets per box'),
(30, 307, '2', '1', '50000 Sets (100 Box) \r\n\r\n\r\n20000 Sets (40 Box) '),
(30, 308, '3', '1', 'Rs.2650/- Per 1000 sets\r\n\r\nRs.2850/- Per 1000 sets'),
(31, 309, '0', '0', 'Sr.No. '),
(31, 310, '1', '0', ' Description '),
(31, 311, '2', '0', ' Minimum Order Quantity '),
(31, 312, '3', '0', ' Quantity '),
(31, 313, '0', '1', '  1.'),
(31, 314, '1', '1', '  PRINTED THERMAL ROLL\r\nAND BILLING ROLL\r\nSIZE : 79 MM X 60 MTRS'),
(31, 315, '2', '1', '  500 ROLLS\r\n'),
(31, 316, '3', '1', '  Rs.54/- PER ROLL'),
(31, 317, '0', '2', ' 2.'),
(31, 318, '1', '2', 'PRINTED THERMAL ROLL\r\nGLOBAL DESI BILLING ROLL\r\nSIZE : 79 MM X 60 MTRS\r\n '),
(31, 319, '2', '2', '   500 ROLLS\r\n'),
(31, 320, '3', '2', '   Rs.54/- PER ROLL'),
(31, 321, '0', '3', ' 3.'),
(31, 322, '1', '3', ' PRINTED THERMAL ROLL\r\nAND & GLOBAL BILLING ROLL\r\nSIZE : 79 MM X 60 MTRS'),
(31, 323, '2', '3', '   500 ROLLS\r\n'),
(31, 324, '3', '3', '   Rs.54/- PER ROLL'),
(43, 325, '0', '0', 'Sr. No.'),
(43, 326, '1', '0', ' Item'),
(43, 327, '2', '0', ' Quantity '),
(43, 328, '3', '0', 'Rate'),
(43, 329, '0', '1', '1. '),
(43, 330, '1', '1', 'HDFC Bank Ltd. - Dividend Warrant,\r\nSize : 15 Inch x 3.67 Inch,\r\nPrinting : 2 Colour '),
(43, 331, '2', '1', '2550 Pcs \r\n(Including 550 Pcs Of NPCI)'),
(43, 332, '3', '1', 'Rs.8,250/- Lot Charges'),
(44, 333, '0', '0', 'Sr.No'),
(44, 334, '1', '0', ' Item'),
(44, 335, '2', '0', 'Quantity '),
(44, 336, '3', '0', 'Rate'),
(44, 337, '0', '1', '1.'),
(44, 338, '1', '1', 'Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM  Normal Paper,\r\nPrinting : Single Colour'),
(44, 339, '2', '1', '5000 Pcs'),
(44, 340, '3', '1', ' Rs.2.70/- Per Pin Mailer'),
(45, 341, '0', '0', 'Sr.No.'),
(45, 342, '1', '0', ' Item '),
(45, 343, '2', '0', ' Quantity'),
(45, 344, '3', '0', ' Rate'),
(45, 345, '0', '1', ' 1.'),
(45, 346, '1', '1', 'Dividend Warrant,\r\nSize : 15 inch x 3.67 inch,\r\nPaper : MICR Paper,\r\nPrinting : 2 colours with invisible ink'),
(45, 347, '2', '1', '2200 Pcs'),
(45, 348, '3', '1', ' Rs.4.15/- Per Pcs'),
(46, 349, '0', '0', ' Sr.No.'),
(46, 350, '1', '0', ' Item'),
(46, 351, '2', '0', ' Quantity'),
(46, 352, '3', '0', ' Rate'),
(46, 353, '0', '1', ' 1.'),
(46, 354, '1', '1', 'PIN MAILER FOR SHRI MAHALAKSHMI CO-OPERATIVE BANK LTD, KOLHAPUR,\r\nSIZE : 10 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR'),
(46, 355, '2', '1', '5000 PCS'),
(46, 356, '3', '1', ' Rs.3.25/- PER PCS'),
(47, 357, '0', '0', 'SR. NO.  '),
(47, 358, '1', '0', ' ITEM  '),
(47, 359, '2', '0', 'SIZE'),
(47, 360, '3', '0', ' QUANTITY'),
(47, 361, '4', '0', ' RATE PER PCS'),
(47, 362, '0', '1', '1.   '),
(47, 363, '1', '1', '  Welcome Letter (Colour 4+4), 120 GSM, SS Maplitho	'),
(47, 364, '2', '1', '   W. 8.5 x  H. 11  inch	'),
(47, 365, '3', '1', ' 40000 PCS\r\n'),
(47, 366, '4', '1', 'Rs.2.09/-'),
(47, 367, '0', '2', ' 2.'),
(47, 368, '1', '2', ' User Manual (Booklet)  (Colour 4+4), 130 GSM,SAC paper	'),
(47, 369, '2', '2', '  W. 11.693  x H. 8.268  inch	'),
(47, 370, '3', '2', '  40000 PCS'),
(47, 371, '4', '2', 'Rs.2.99/-'),
(47, 372, '0', '3', ' 3.'),
(47, 373, '1', '3', ' Pouches (150 GSM Art Paper- 4 color printing )	'),
(47, 374, '2', '3', '  89MM X 58MM	'),
(47, 375, '3', '3', '  40000 PCS'),
(47, 376, '4', '3', 'Rs.1.80/-'),
(47, 377, '0', '4', ' 4.'),
(47, 378, '1', '4', ' Envelopes (130 GSM Art Paper - 4 color printing)'),
(47, 379, '2', '4', '  8.5 Inch X 6 Inch	'),
(47, 380, '3', '4', '  40000 PCS'),
(47, 381, '4', '4', 'Rs.4.18/-'),
(48, 382, '0', '0', ' SR.NO.'),
(48, 383, '1', '0', ' ITEM '),
(48, 384, '2', '0', 'QUANTITY'),
(48, 385, '3', '0', ' RATE'),
(48, 386, '0', '1', ' 1.'),
(48, 387, '1', '1', ' AXIS BANK DIVIDEND WARRANT - DEEPAK NITRITE LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : 4 COLOUR '),
(48, 388, '2', '1', '3550 PCS'),
(48, 389, '3', '1', 'Rs.9500/- LOT CHARGES'),
(49, 390, '0', '0', 'SR.NO.'),
(49, 391, '1', '0', 'ITEM'),
(49, 392, '2', '0', ' QUANTITY '),
(49, 393, '3', '0', ' RATE'),
(49, 394, '0', '1', '1.'),
(49, 395, '1', '1', ' Indian Bank Pin Mailer\r\nSize : 9 inch x 4 inch x 3 ply & 9 inch x 3.67 inch x 3 Ply,\r\nPrinting : 4 colour\r\nPaper : 60+60+70 GSM Normal Paper \r\n'),
(49, 396, '2', '1', ' For 1 Lacs Pin Mailers\r\n\r\nFor 5 Lacs Pin Mailers '),
(49, 397, '3', '1', ' Rs.0.98/- Per Pcs\r\n\r\nRs.0.96/- Per Pcs'),
(50, 398, '0', '0', '   SR.NO.'),
(50, 399, '1', '0', '    ITEM'),
(50, 400, '2', '0', '   QUANTITY'),
(50, 401, '3', '0', '   RATE PER PCS'),
(50, 402, '0', '1', '    1.'),
(50, 403, '1', '1', '    Letterhead\r\nSize : A4\r\nPaper : 80 GSM Maplitho\r\n'),
(50, 404, '2', '1', '   1 LACS'),
(50, 405, '3', '1', '    Rs.1.48/-'),
(50, 406, '0', '2', '  2.'),
(50, 407, '1', '2', '  User Guide \r\nSize : A4\r\nPaper : 90 GSM Art Paper\r\n'),
(50, 408, '2', '2', '   1 LACS'),
(50, 409, '3', '2', '  Rs.1.87/-'),
(50, 410, '0', '3', '  3.'),
(50, 411, '1', '3', '  Card Pouch \r\nSize : 50 mm x 90 mm\r\nPaper : 130 GSM Art Paper'),
(50, 412, '2', '3', '   1 LACS'),
(50, 413, '3', '3', '  Rs.1.12/-'),
(50, 414, '0', '4', '  4.'),
(50, 415, '1', '4', '  Envelope\r\nSize : 8.40 inch x 4.25 inch\r\nPaper : 90 GSM Maplitho'),
(50, 416, '2', '4', '   1 LACS'),
(50, 417, '3', '4', '  Rs.2.10/-'),
(50, 418, '0', '5', ' 5.'),
(50, 419, '1', '5', ' Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM\r\n'),
(50, 420, '2', '5', '  1 LACS'),
(50, 421, '3', '5', 'One Colour Printing -  Rs.1.60/- \r\nFour Colour Printing - Rs.2.25/-'),
(51, 422, '0', '0', ' SR. NO.'),
(51, 423, '1', '0', ' ITEM '),
(51, 424, '2', '0', ' QUANTITY'),
(51, 425, '3', '0', ' RATE'),
(51, 426, '0', '1', ' 1.'),
(51, 427, '1', '1', 'Inland Letters,\r\nSize 15x12x1 - 2 Ups,\r\nPaper : 70 GSM paper,\r\nPrinting : single color printing on both sides, '),
(51, 428, '2', '1', ' 1,00,000 Nos'),
(51, 429, '3', '1', ' 0.73/- Per Pcs  '),
(52, 430, '0', '0', ' SR. NO.'),
(52, 431, '1', '0', ' ITEM'),
(52, 432, '2', '0', ' QUANTITY '),
(52, 433, '3', '0', ' RATE'),
(52, 434, '0', '1', ' 1.'),
(52, 435, '1', '1', 'Dividend Warrant - Ajmera Realty & Infra Ltd.,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting : Royal Blue + Invisible,\r\nPaper : 96 GSM MICR '),
(52, 436, '2', '1', ' 7550 Pcs (Including NPCI testing)'),
(52, 437, '3', '1', ' Rs.2.30/- Per Pcs'),
(52, 438, '0', '2', '2.'),
(52, 439, '1', '2', 'Dividend Warrant - 3I Infotech,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting :  Black + Invisible,\r\nPaper : 96 GSM MICR '),
(52, 440, '2', '2', '2500 Pcs (Including NPCI testing)'),
(52, 441, '3', '2', 'Rs.8250/- Lot Charges'),
(52, 442, '0', '3', '3.'),
(52, 443, '1', '3', 'Dividend Warrant - GE Shipping,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting :  Royal blue + Invisible,\r\nPaper : 96 GSM MICR '),
(52, 444, '2', '3', '11000 Pcs (Including NPCI testing)'),
(52, 445, '3', '3', 'Rs.1.40/- Per Pcs'),
(53, 446, '0', '0', ' Sr No'),
(53, 447, '1', '0', ' Product Description'),
(53, 448, '2', '0', ' Quantity In Nos'),
(53, 449, '3', '0', ' Rate Per Pc'),
(53, 450, '4', '0', ' Total in INR'),
(53, 451, '0', '1', ' 1'),
(53, 452, '1', '1', ' NFSU Grade Card\r\nSize: A4\r\nPaper: 120 GSM\r\nCol: 4 Col Front & 1 Col Back\r\nSecurity Features: UV Thread, UV Emblem, Micro Text, Numbering Guilloche, Signature in UV & Flip Character\r\n'),
(53, 453, '2', '1', ' 5000 nos'),
(53, 454, '3', '1', ' 8.50/-'),
(53, 455, '4', '1', ' 42500/-'),
(53, 456, '0', '2', ' 2'),
(53, 457, '1', '2', ' Customized 3D hologram Master'),
(53, 458, '2', '2', ' -'),
(53, 459, '3', '2', ' -'),
(53, 460, '4', '2', ' 50000/-'),
(53, 461, '0', '3', ' 3'),
(53, 462, '1', '3', ' Hot Foil'),
(53, 463, '2', '3', ' -'),
(53, 464, '3', '3', ' -'),
(53, 465, '4', '3', ' 15000/-'),
(53, 466, '0', '4', ' 4'),
(53, 467, '1', '4', ' Foil Stamping '),
(53, 468, '2', '4', ' 5000 nos'),
(53, 469, '3', '4', ' 0.60/-'),
(53, 470, '4', '4', ' 3000/-'),
(54, 471, '0', '0', ' SR.NO.'),
(54, 472, '1', '0', ' ITEM'),
(54, 473, '2', '0', ' QUANTITY'),
(54, 474, '3', '0', ' RATE'),
(54, 475, '0', '1', ' 1.'),
(54, 476, '1', '1', 'WINCOR RP ROLL-KALUPUR CO.OP BANK LTD.,\r\nSIZE : 79 MM X 350 MTRS,'),
(54, 477, '2', '1', ' 100 ROLLS'),
(54, 478, '3', '1', '60 GSM - 390/- PER ROLL\r\n55 GSM - 370/- PER ROLL'),
(54, 479, '0', '2', ' 2.'),
(54, 480, '1', '2', ' WINCOR RP ROLL- THE AHMEDABAD DIST.CO-OP BANK LTD.,\r\nSIZE : 79 MM X 350 MTRS,'),
(54, 481, '2', '2', '  100 ROLLS'),
(54, 482, '3', '2', '60 GSM - 390/- PER ROLL\r\n55 GSM - 370/- PER ROLL'),
(55, 483, '0', '0', 'Sr. No.'),
(55, 484, '1', '0', 'Item Code'),
(55, 485, '2', '0', 'Item Description'),
(55, 486, '3', '0', 'Quantity'),
(55, 487, '4', '0', 'Price'),
(55, 488, '5', '0', 'Remark'),
(55, 489, '0', '1', 'sfd'),
(55, 490, '1', '1', 'dsfds'),
(55, 491, '2', '1', 'dsff'),
(55, 492, '3', '1', 'dsdf'),
(55, 493, '4', '1', 'dsfdsfdsf'),
(55, 494, '5', '1', 'sdf'),
(56, 495, '0', '0', 'SR.NO. '),
(56, 496, '1', '0', ' ITEM'),
(56, 497, '2', '0', ' QUANITY'),
(56, 498, '3', '0', ' RATE'),
(56, 499, '0', '1', ' 1.'),
(56, 500, '1', '1', 'Pin Mailer,\r\nSize : 9.25\" x 4\" x 3 Ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\n'),
(56, 501, '2', '1', ' 50000 Pcs'),
(56, 502, '3', '1', ' One Colour Printing - 1.40/- Per Pcs\r\n\r\nMulticolor Printing - Rs.1.80/- Per Pcs'),
(57, 503, '0', '0', ' SR. NO.'),
(57, 504, '1', '0', 'ITEM'),
(57, 505, '2', '0', ' QUANTITY'),
(57, 506, '3', '0', ' RATE'),
(57, 507, '0', '1', '1.'),
(57, 508, '1', '1', ' AXIS BANK DIVIDEND WARRANT-ION EXCHANGE LTD.,\r\nPAPER - 95 GSM MICR,\r\nPRINTING - BLACK,INVISIBLE,RAINBOW BACKGROUND '),
(57, 509, '2', '1', '3550 PCS (INCLUDING NPCI)'),
(57, 510, '3', '1', ' 10500/- LOT CHARGES '),
(58, 511, '0', '0', ' SR. NO. '),
(58, 512, '1', '0', '  ITEM '),
(58, 513, '2', '0', '  QUANTITY '),
(58, 514, '3', '0', '  RATE '),
(58, 515, '0', '1', ' 1. '),
(58, 516, '1', '1', 'Welcome letter,100 gsm maplitho, 4 colour printing, cutting & packing (500 each)\r\nWith variable data printing'),
(58, 517, '2', '1', '10 LACS'),
(58, 518, '3', '1', ' RS.1.12/- PER PCS'),
(58, 519, '0', '2', '2. '),
(58, 520, '1', '2', 'Envelope,Size : 9 inch x 4 1/4 inch, 130 gsm art paper, 4 colour printing, punch, punching& making\r\n'),
(58, 521, '2', '2', '10 LACS'),
(58, 522, '3', '2', ' RS.1.70/- PER PCS'),
(58, 523, '0', '3', '3. '),
(58, 524, '1', '3', 'Card pouch,2 1/4 inch x 3.5\" inch,130 gsm art paper, 4 colour printing, lamination, punch, punching,making & packing\r\n'),
(58, 525, '2', '3', '10 LACS'),
(58, 526, '3', '3', ' RS.0.69/- PER PCS'),
(58, 527, '0', '4', '4.'),
(58, 528, '1', '4', 'Leaflet,90 gsm art paper, 4 colour printing, cutting & packing\r\n'),
(58, 529, '2', '4', '10 LACS'),
(58, 530, '3', '4', '4 COLOUR PRINTING BOTH SIDE - RS.0.60/- PER PCS\r\n4 COLOUR PRINTING ONE SIDE - RS.0.55/- PER PCS'),
(59, 531, '0', '0', ' SR.NO.'),
(59, 532, '1', '0', ' ITEM'),
(59, 533, '2', '0', ' QUANTITY'),
(59, 534, '3', '0', ' RATE'),
(59, 535, '0', '1', ' 1.'),
(59, 536, '1', '1', 'HDFC BANK DIVIDEND WARRANT-PANAMA LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR PAPER,\r\nPRINTING : BLUE,INVISIBLE INK'),
(59, 537, '2', '1', ' 1550 PCS'),
(59, 538, '3', '1', ' 7750/- LOT CHARGES'),
(60, 539, '0', '0', ' Sr. No.'),
(60, 540, '1', '0', ' Item'),
(60, 541, '2', '0', ' Quantity'),
(60, 542, '3', '0', ' Rate'),
(60, 543, '0', '1', ' 1.'),
(60, 544, '1', '1', 'Indian Bank Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : 4 colour printing'),
(60, 545, '2', '1', '2 Lacs'),
(60, 546, '3', '1', ' Rs.1.20/- Per Pin Mailer'),
(61, 547, '0', '0', ' SR. NO.'),
(61, 548, '1', '0', 'ITEM '),
(61, 549, '2', '0', 'QUANTITY '),
(61, 550, '3', '0', ' RATE'),
(61, 551, '0', '1', ' 1.'),
(61, 552, '1', '1', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(61, 553, '2', '1', '             10000 Tickets '),
(61, 554, '3', '1', '      Rs.5.00/- Per Ticket'),
(64, 555, '0', '0', ' SR. NO. '),
(64, 556, '1', '0', 'ITEM  '),
(64, 557, '2', '0', 'QUANTITY  '),
(64, 558, '3', '0', ' RATE '),
(64, 559, '0', '1', ' 1. '),
(64, 560, '1', '1', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering  '),
(64, 561, '2', '1', '             10000 Tickets  '),
(64, 562, '3', '1', '      Rs.5.00/- Per Ticket '),
(64, 563, '0', '2', ' 2'),
(64, 564, '1', '2', ' test'),
(64, 565, '2', '2', ' test'),
(64, 566, '3', '2', ' test'),
(65, 567, '0', '0', ' Sr.No.'),
(65, 568, '1', '0', ' Item'),
(65, 569, '2', '0', ' Quantity'),
(65, 570, '3', '0', 'Rate'),
(65, 571, '0', '1', '1.'),
(65, 572, '1', '1', 'C NOTE - IP EXPRESS CARGO,\r\nSIZE : 10 INCH X 6 INCH,\r\nPRINTING : ALL 4 COPIES FRONT SIDE GREY & 1ST,2ND & 3RD COPY BACKSIDE GREY\r\n'),
(65, 573, '2', '1', ' 30000 SETS'),
(65, 574, '3', '1', ' 4.75/- PER SET'),
(77, 575, '\'0\'', '\'0\'', ' SR. NO.'),
(77, 576, '\'1\'', '\'0\'', 'ITEM '),
(77, 577, '\'2\'', '\'0\'', 'QUANTITY '),
(77, 578, '\'3\'', '\'0\'', ' RATE'),
(77, 579, '\'0\'', '\'1\'', ' 1.'),
(77, 580, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(77, 581, '\'2\'', '\'1\'', '             10000 Tickets '),
(77, 582, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(78, 583, '\'0\'', '\'0\'', ' SR. NO.'),
(78, 584, '\'1\'', '\'0\'', 'ITEM '),
(78, 585, '\'2\'', '\'0\'', 'QUANTITY '),
(78, 586, '\'3\'', '\'0\'', ' RATE'),
(78, 587, '\'0\'', '\'1\'', ' 1.'),
(78, 588, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(78, 589, '\'2\'', '\'1\'', '             10000 Tickets '),
(78, 590, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(79, 591, '\'0\'', '\'0\'', ' SR. NO.'),
(79, 592, '\'1\'', '\'0\'', 'ITEM '),
(79, 593, '\'2\'', '\'0\'', 'QUANTITY '),
(79, 594, '\'3\'', '\'0\'', ' RATE'),
(79, 595, '\'0\'', '\'1\'', ' 1.'),
(79, 596, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(79, 597, '\'2\'', '\'1\'', '             10000 Tickets '),
(79, 598, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(80, 599, '\'0\'', '\'0\'', ' SR. NO.'),
(80, 600, '\'1\'', '\'0\'', 'ITEM '),
(80, 601, '\'2\'', '\'0\'', 'QUANTITY '),
(80, 602, '\'3\'', '\'0\'', ' RATE'),
(80, 603, '\'0\'', '\'1\'', ' 1.'),
(80, 604, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(80, 605, '\'2\'', '\'1\'', '             10000 Tickets '),
(80, 606, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(81, 607, '\'0\'', '\'0\'', ' SR. NO.'),
(81, 608, '\'1\'', '\'0\'', 'ITEM '),
(81, 609, '\'2\'', '\'0\'', 'QUANTITY '),
(81, 610, '\'3\'', '\'0\'', ' RATE'),
(81, 611, '\'0\'', '\'1\'', ' 1.'),
(81, 612, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(81, 613, '\'2\'', '\'1\'', '             10000 Tickets '),
(81, 614, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(82, 615, '\'0\'', '\'0\'', ' SR. NO.'),
(82, 616, '\'1\'', '\'0\'', 'ITEM '),
(82, 617, '\'2\'', '\'0\'', 'QUANTITY '),
(82, 618, '\'3\'', '\'0\'', ' RATE'),
(82, 619, '\'0\'', '\'1\'', ' 1.'),
(82, 620, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(82, 621, '\'2\'', '\'1\'', '             10000 Tickets '),
(82, 622, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(86, 623, '\'0\'', '\'0\'', ' SR. NO.'),
(86, 624, '\'1\'', '\'0\'', 'ITEM '),
(86, 625, '\'2\'', '\'0\'', 'QUANTITY '),
(86, 626, '\'3\'', '\'0\'', ' RATE'),
(86, 627, '\'0\'', '\'1\'', ' 1.'),
(86, 628, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(86, 629, '\'2\'', '\'1\'', '             10000 Tickets '),
(86, 630, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(87, 631, '\'0\'', '\'0\'', ' SR. NO.'),
(87, 632, '\'1\'', '\'0\'', 'ITEM '),
(87, 633, '\'2\'', '\'0\'', 'QUANTITY '),
(87, 634, '\'3\'', '\'0\'', ' RATE'),
(87, 635, '\'0\'', '\'1\'', ' 1.'),
(87, 636, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(87, 637, '\'2\'', '\'1\'', '             10000 Tickets '),
(87, 638, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(88, 639, '\'0\'', '\'0\'', ' SR. NO.'),
(88, 640, '\'1\'', '\'0\'', 'ITEM '),
(88, 641, '\'2\'', '\'0\'', 'QUANTITY '),
(88, 642, '\'3\'', '\'0\'', ' RATE'),
(88, 643, '\'0\'', '\'1\'', ' 1.'),
(88, 644, '\'1\'', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(88, 645, '\'2\'', '\'1\'', '             10000 Tickets '),
(88, 646, '\'3\'', '\'1\'', '      Rs.5.00/- Per Ticket'),
(95, 647, '0', '\'0\'', ' SR. NO.'),
(95, 648, '1', '\'0\'', 'ITEM '),
(95, 649, '2', '\'0\'', 'QUANTITY '),
(95, 650, '3', '\'0\'', ' RATE'),
(95, 651, '0', '\'1\'', ' 1.'),
(95, 652, '1', '\'1\'', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(95, 653, '2', '\'1\'', '             10000 Tickets '),
(95, 654, '3', '\'1\'', '      Rs.5.00/- Per Ticket'),
(96, 655, '0', '0', ' SR. NO.'),
(96, 656, '1', '0', 'ITEM '),
(96, 657, '2', '0', 'QUANTITY '),
(96, 658, '3', '0', ' RATE'),
(96, 659, '0', '1', ' 1.'),
(96, 660, '1', '1', 'Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),
(96, 661, '2', '1', '             10000 Tickets '),
(96, 662, '3', '1', '      Rs.5.00/- Per Ticket'),
(97, 663, '0', '0', ' 1.'),
(97, 664, '1', '0', 'ICICI BANK DIVIDEND WARRANT - HAWKINS COOKERS LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : DARK BROWN,INVISIBLE INK	'),
(97, 665, '2', '0', '5550 PCS (INCLUDING NPCI)'),
(97, 666, '3', '0', 'RS.2.50/- PER PCS'),
(97, 667, '0', '1', ' 2.'),
(97, 668, '1', '1', 'HDFC BANK DIVIDEND WARRANT - ADF FOODS LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : DARK GREEN,INVISIBLE INK	\r\n'),
(97, 669, '2', '1', ' 5050 PCS(INCLUDING NPCI)'),
(97, 670, '3', '1', ' RS.2.50/- PER PCS'),
(98, 671, '0', '0', 'SR.NO.'),
(98, 672, '1', '0', ' ITEM'),
(98, 673, '2', '0', 'QUANTITY'),
(98, 674, '3', '0', ' RATE'),
(98, 675, '0', '1', '1.'),
(98, 676, '1', '1', 'DIEBOLD D429 RP ROLL,\r\nSIZE : 79 MM X 200 MTRS,\r\nPAPER : 58 GSM THERMAL PAPER,\r\n'),
(98, 677, '2', '1', '100 ROLLS'),
(98, 678, '3', '1', 'Rs.280/- PER ROLL'),
(99, 679, '0', '0', 'SR.NO.'),
(99, 680, '1', '0', ' ITEM'),
(99, 681, '2', '0', 'QUANTITY'),
(99, 682, '3', '0', ' RATE'),
(99, 683, '0', '1', '1.'),
(99, 684, '1', '1', 'DIEBOLD D429 RP ROLL,\r\nSIZE : 79 MM X 200 MTRS,\r\nPAPER : 58 GSM THERMAL PAPER,\r\n'),
(99, 685, '2', '1', '100 ROLLS'),
(99, 686, '3', '1', 'Rs.280/- PER ROLL'),
(100, 687, '0', '0', 'SR.NO.I '),
(100, 688, '1', '0', ' ITEM '),
(100, 689, '2', '0', '  QUANTITY'),
(100, 690, '3', '0', '  RATE'),
(100, 691, '0', '1', ' 1.'),
(100, 692, '1', '1', 'DIVIDEND WARRANTS,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : SINGLE COLOUR '),
(100, 693, '2', '1', ' 8000 PCS'),
(100, 694, '3', '1', 'Rs.1.90/- PER PCS\r\n\r\nRs.3000/- Extra for 4 colour printing'),
(100, 695, '0', '2', '2.'),
(100, 696, '1', '2', 'INTIMATION LETTER,\r\nSIZE : 15 INCH X 12 INCH,\r\nPAPER : 70 GSM MAPLITHO,\r\nPRINTING : SINGLE COLOUR'),
(100, 697, '2', '2', ' 3500 SHEETS (7000 PCS)'),
(100, 698, '3', '2', 'Rs.9500/- LOT CHARGES'),
(101, 699, '0', '0', ' SR.NO.'),
(101, 700, '1', '0', 'ITEM'),
(101, 701, '2', '0', 'QUANTITY '),
(101, 702, '3', '0', 'RATE'),
(101, 703, '0', '1', '1.'),
(101, 704, '1', '1', 'CHEQUE SHEET - SUCO SOUHARDA SAHAKARI BANK LTD.,\r\nSize : 214 mm X 279.4 mm,\r\nPAPER : 95 GSM MICR PAPER,\r\nFRONT SIDE : BLACK,YELLOW,INDIA RED,INVISIBLE INK,BLUE'),
(101, 705, '2', '1', '35000 SHEETS (105000 LVS)'),
(101, 706, '3', '1', ' Rs.1.50/- PER SHEET'),
(102, 707, '0', '0', ' SR.NO.'),
(102, 708, '1', '0', ' ITEM'),
(102, 709, '2', '0', ' QUANTITY'),
(102, 710, '3', '0', ' RATE'),
(102, 711, '0', '1', ' 1.'),
(102, 712, '1', '1', 'OMR Sheet - Odisha Nurses & Midwives Examination,\r\nSize : 9 inch x 12 inch x 2 ply,\r\n1st part - 105 GSM,\r\n2nd part - 68 GSM,\r\n'),
(102, 713, '2', '1', ' 10000 Sheets '),
(102, 714, '3', '1', 'Rs.3.80/- Per Sheet'),
(103, 715, '0', '0', 'Sr. No.'),
(103, 716, '1', '0', 'Item Code'),
(103, 717, '2', '0', 'Item Description'),
(103, 718, '3', '0', 'Quantity'),
(103, 719, '4', '0', 'Price'),
(103, 720, '5', '0', 'Remark'),
(103, 721, '0', '1', 'qq'),
(103, 722, '1', '1', 'qq'),
(103, 723, '2', '1', 'qq'),
(103, 724, '3', '1', 'qq'),
(103, 725, '4', '1', 'qq'),
(103, 726, '5', '1', 'qq'),
(104, 727, '0', '0', ' SR.NO.'),
(104, 728, '1', '0', ' ITEM'),
(104, 729, '2', '0', ' QUANTITY'),
(104, 730, '3', '0', ' RATE'),
(104, 731, '0', '1', ' 1.'),
(104, 732, '1', '1', 'RSWS S2 2022 TICKETS,\r\nSize : 3 inch x 6 inch,\r\nPaper : 197 GSM Colour center paper\r\nPrinting : Front side CMYK + Back side Black + BIV Black'),
(104, 733, '2', '1', '8 LACS'),
(104, 734, '3', '1', ' Rs.5.50/- Per Ticket'),
(105, 735, '0', '0', ' SR.NO.'),
(105, 736, '1', '0', ' ITEM'),
(105, 737, '2', '0', ' QUANTITY'),
(105, 738, '3', '0', ' RATE'),
(105, 739, '0', '1', '1.'),
(105, 740, '1', '1', 'FIFA U17 WWC INDIA 2022,\r\nSize : 3 inch x 8 inch,\r\nPaper : 150 GSM Non Infused Paper,\r\nPrinting : Front side CMYK + Back side Black + BIV Black'),
(105, 741, '2', '1', '1 LACS'),
(105, 742, '3', '1', ' Rs.5.00/- Per Ticket'),
(106, 743, '0', '0', 'Sr. No.'),
(106, 744, '1', '0', 'Item Code'),
(106, 745, '2', '0', 'Item Description'),
(106, 746, '3', '0', 'Quantity'),
(106, 747, '4', '0', 'Price'),
(106, 748, '5', '0', 'Remark'),
(106, 749, '0', '1', '1'),
(106, 750, '1', '1', 'code 1'),
(106, 751, '2', '1', 'desc 1'),
(106, 752, '3', '1', '20'),
(106, 753, '4', '1', '3000'),
(106, 754, '5', '1', 'remark 1'),
(107, 755, '0', '0', 'Sr. No.'),
(107, 756, '1', '0', 'Item Code'),
(107, 757, '2', '0', 'Item Description'),
(107, 758, '3', '0', 'Quantity'),
(107, 759, '4', '0', 'Price'),
(107, 760, '5', '0', 'Remark'),
(107, 761, '0', '1', '1'),
(107, 762, '1', '1', 'code 1'),
(107, 763, '2', '1', 'desc 2'),
(107, 764, '3', '1', '20'),
(107, 765, '4', '1', '20000'),
(107, 766, '5', '1', 'remark 1'),
(108, 767, '0', '0', 'Sr. No.'),
(108, 768, '1', '0', 'Item Code'),
(108, 769, '2', '0', 'Item Description'),
(108, 770, '3', '0', 'Quantity'),
(108, 771, '4', '0', 'Price'),
(108, 772, '5', '0', 'Remark'),
(108, 773, '0', '1', '1'),
(108, 774, '1', '1', 'code 1'),
(108, 775, '2', '1', 'desc 1'),
(108, 776, '3', '1', '1'),
(108, 777, '4', '1', '300'),
(108, 778, '5', '1', 'Remark 1'),
(109, 779, '0', '0', 'Sr. No.'),
(109, 780, '1', '0', 'Item Code'),
(109, 781, '2', '0', 'Item Description'),
(109, 782, '3', '0', 'Quantity'),
(109, 783, '4', '0', 'Price'),
(109, 784, '5', '0', 'Remark'),
(109, 785, '0', '1', '1'),
(109, 786, '1', '1', 'code 1'),
(109, 787, '2', '1', 'desc 1'),
(109, 788, '3', '1', '20'),
(109, 789, '4', '1', '200000'),
(109, 790, '5', '1', 'Remark 1'),
(109, 791, '0', '2', '2'),
(109, 792, '1', '2', 'code 2'),
(109, 793, '2', '2', 'desc 2'),
(109, 794, '3', '2', '30'),
(109, 795, '4', '2', '3000'),
(109, 796, '5', '2', 'remark 2'),
(110, 797, '0', '0', ' SR.NO.'),
(110, 798, '1', '0', 'ITEM'),
(110, 799, '2', '0', 'QUANTITY'),
(110, 800, '3', '0', 'RATE'),
(110, 801, '0', '1', '1.\r\n'),
(110, 802, '1', '1', '1. ENTERTAINMENT TICKET,\r\nSIZE : 3 INCH X 8 INCH,\r\nSecurity Features - \r\n1-Copy Void\r\n2-UVI Invisible Ink \r\n3-BIV Sensor\r\n4-Micro Line \r\n'),
(110, 803, '2', '1', ' 47000 TICKETS'),
(110, 804, '3', '1', 'INFUSED COLOUR CENTER PAPER - Rs.8.00/- PER TICKET\r\n\r\nNON-INFUSED PAPER - Rs.6.00/- PER TICKET'),
(111, 805, '0', '0', '  Sr No    '),
(111, 806, '1', '0', 'Product Description      '),
(111, 807, '2', '0', ' Rate'),
(111, 808, '0', '1', '1.      '),
(111, 809, '1', '1', ' Diebold Atm Roll\r\nSize:80mm X 400 Mtrs\r\nPaper: 58 GSM\r\ndiebold Sensor  '),
(111, 810, '2', '1', '      425/- Per Roll'),
(111, 811, '0', '2', '2.    '),
(111, 812, '1', '2', 'Diebold Atm Roll\r\nSize:56mm X 65 Mtrs\r\nPaper: 55 GSM'),
(111, 813, '2', '2', '      47/- Per Roll'),
(111, 814, '0', '3', ' 3.  '),
(111, 815, '1', '3', 'LIPI Atm Roll\r\nSize:80mmX200 Mtrs\r\nPaper:58 GSM'),
(111, 816, '2', '3', '   240/- Per Roll'),
(111, 817, '0', '4', ' 4.  '),
(111, 818, '1', '4', ' LIPI Atm Roll\r\nSize:79mm X 80 Mtrs\r\nPaper:58 GSM'),
(111, 819, '2', '4', '75/- Per Roll   '),
(111, 820, '0', '5', ' 5.  '),
(111, 821, '1', '5', '   LIPI Atm (New Recycler)\r\nSize:80mm X 360 Mtrs\r\nPaper:58 GSM'),
(111, 822, '2', '5', '400/- Per Roll   '),
(111, 823, '0', '6', ' 6.  '),
(111, 824, '1', '6', '   LIPI Atm (New Recycler)\r\nSize:56mm X 65 Mtrs\r\nPaper: 58 GSM'),
(111, 825, '2', '6', '47/- Per Roll   '),
(111, 826, '0', '7', ' 7.  '),
(111, 827, '1', '7', 'LIPI Cash Deposit Machine Roll\r\nSize:80mm X 225 Mtrs\r\nPaper:64 GSM'),
(111, 828, '2', '7', '260/- Per Roll   '),
(111, 829, '0', '8', ' 8.  '),
(111, 830, '1', '8', '   Kioshk/CDM Machine\r\nSize: 80 mm X 70 Mtrs\r\nPaper:75 GSM'),
(111, 831, '2', '8', '   72/- Per Roll'),
(112, 832, '0', '0', ' SR.NO.'),
(112, 833, '1', '0', ' ITEM'),
(112, 834, '2', '0', ' QUANTITY'),
(112, 835, '3', '0', ' RATE'),
(112, 836, '0', '1', '1.'),
(112, 837, '1', '1', ' Internet Banking Pin Mailer\r\nSize : 6.5 Inch x 4 Inch x 3 Ply\r\nPaper : 58 GSM + 58 GSM + 68 GSM'),
(112, 838, '2', '1', '25000 PCS'),
(112, 839, '3', '1', 'Rs.1.85/- (GST & Freight charges included )'),
(113, 840, '0', '0', ' SR.NO.'),
(113, 841, '1', '0', ' ITEM '),
(113, 842, '2', '0', ' QUANTITY '),
(113, 843, '3', '0', ' RATE'),
(113, 844, '0', '1', ' 1.'),
(113, 845, '1', '1', 'BLANK STATIONERY - GREEN PAPER,\r\nSIZE : 7 INCH X 8 INCH,\r\nPAPER : 50 GSM,\r\nPACKING : 6000 SHEETS PER BOX'),
(113, 846, '2', '1', ' 6000 SHEETS'),
(113, 847, '3', '1', ' 0.75/- PER SHEET'),
(114, 848, '0', '0', 'Sr.No. '),
(114, 849, '1', '0', ' Item '),
(114, 850, '2', '0', 'Quantity  '),
(114, 851, '3', '0', 'Rate '),
(114, 852, '0', '1', '1. '),
(114, 853, '1', '1', 'ENTERTAINMENT TICKET,\r\nSIZE : 3 INCH X 8 INCH,\r\n170 GSM Non Infused Paper,\r\nPrinting : 4 Colour front side & 1 colour back side\r\n\r\n '),
(114, 854, '2', '1', '15000 Pcs '),
(114, 855, '3', '1', 'Rs.6.50/- Per Ticket '),
(114, 856, '0', '2', '2.'),
(114, 857, '1', '2', 'ENTERTAINMENT TICKET,\r\nSIZE : 3 INCH X 6 INCH,\r\n170 GSM Non Infused Paper,\r\nPrinting : 4 Colour front side & 1 colour back side\r\n'),
(114, 858, '2', '2', ' 15000 Pcs'),
(114, 859, '3', '2', 'Rs.4.50/- Per Ticket '),
(115, 860, '0', '0', 'SR.NO.'),
(115, 861, '1', '0', 'ITEM'),
(115, 862, '2', '0', 'QUANTITY '),
(115, 863, '3', '0', 'RATE'),
(115, 864, '0', '1', '1.'),
(115, 865, '1', '1', 'ENTERTAINMENT TICKET -LEGENDS LEAGUE CRICKET MARKET - 2022,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : FRONT SIDE CMYK & BACK SIDE BLACK + BIV BLACK'),
(115, 866, '2', '1', '1 LACS TICKETS'),
(115, 867, '3', '1', 'Rs.5.00/- PER TICKET'),
(116, 868, '0', '0', '   Sr No'),
(116, 869, '1', '0', 'Description   '),
(116, 870, '2', '0', 'Quantity  in pcs'),
(116, 871, '3', '0', 'Rate Per Pc '),
(116, 872, '4', '0', 'Total '),
(116, 873, '0', '1', '   1.'),
(116, 874, '1', '1', 'printing of forms on carbonless paper\r\nSingle Side Single Color Paper Change\r\n1st Copy Blue color 2nd Copy Red Color\r\nSize: 9\'\' X 12\'\'   '),
(116, 875, '2', '1', '   10000 pcs'),
(116, 876, '3', '1', '2.2 /-'),
(116, 877, '4', '1', '22000 /-'),
(117, 878, '0', '0', ' SR.NO.'),
(117, 879, '1', '0', 'ITEM '),
(117, 880, '2', '0', 'QUANTITY'),
(117, 881, '3', '0', ' RATE'),
(117, 882, '0', '1', '1.'),
(117, 883, '1', '1', 'J & K BANK PIN MAILER (CARBONLESS),\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPRINTING : ONE COLOUR'),
(117, 884, '2', '1', '65000 PCS'),
(117, 885, '3', '1', 'Rs.1.92/- Per Pin Mailer '),
(118, 886, '0', '0', 'SR.NO.'),
(118, 887, '1', '0', 'ITEM'),
(118, 888, '2', '0', ' QUANTITY'),
(118, 889, '3', '0', 'RATE'),
(118, 890, '0', '1', '1.'),
(118, 891, '1', '1', 'JASMINE POS ROLLS,\r\nSIZE : 79 MM X 30 MTRS,\r\nPRINTING : FRONT SIDE RED & BACK SIDE BLACK'),
(118, 892, '2', '1', ' 250 ROLLS'),
(118, 893, '3', '1', '60 GSM - 40/- PER ROLL\r\n\r\n80 GSM - 59/- PER ROLL'),
(119, 894, '0', '0', '  SR.NO.'),
(119, 895, '1', '0', '  ITEM '),
(119, 896, '2', '0', '  QUANTITY '),
(119, 897, '3', '0', '  RATE'),
(119, 898, '0', '1', ' 1.'),
(119, 899, '1', '1', 'ZENPAY PIN MAILER - RBL BANK,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPRINTING : BLACK COLOUR'),
(119, 900, '2', '1', ' 10000 PCS'),
(119, 901, '3', '1', ' Rs.2.30/- PER PIN MAILER'),
(120, 902, '0', '0', ' Sr No'),
(120, 903, '1', '0', 'Description '),
(120, 904, '2', '0', ' Quantity in Weight'),
(120, 905, '3', '0', ' Rate per USD'),
(120, 906, '0', '1', ' 1'),
(120, 907, '1', '1', ' Watermark Cheque Paper In Reels With Invisible UV Fibers\r\nGrammage : CBSI 95GSM\r\nSize:242mm X 6000m\r\n'),
(120, 908, '2', '1', ' 3864 KGS'),
(120, 909, '3', '1', ' $ 2550 per ton'),
(120, 910, '0', '2', ' 2'),
(120, 911, '1', '2', ' Watermark Cheque Paper In Reels With Invisible UV Fibers\r\nGrammage: CBSI 95GSM\r\nSize:300mm X 6000m\r\n'),
(120, 912, '2', '2', ' 12654 KGS'),
(120, 913, '3', '2', ' $ 2550 per ton'),
(120, 914, '0', '3', ' 3'),
(120, 915, '1', '3', ' Watermark Cheque Paper In Reels With Invisible UV Fibers\r\nGrammage: CBSI 95GSM\r\nSize:70cm X 100cm\r\n'),
(120, 916, '2', '3', ' 8044 KGS'),
(120, 917, '3', '3', ' $ 2600 per ton'),
(120, 918, '0', '4', ' 4'),
(120, 919, '1', '4', ' Watermark Dandy Roll'),
(120, 920, '2', '4', ' -'),
(120, 921, '3', '4', ' $ 5000  Per Dandy'),
(121, 922, '0', '0', ' Security Paper Features Both\r\nSide Mark sheet'),
(121, 923, '1', '0', ' Quantity'),
(121, 924, '2', '0', ' Paper GSM'),
(121, 925, '3', '0', 'Security Paper Features Both Side of\r\n1000 Degree Certificate '),
(121, 926, '4', '0', ' Paper with GSM for 1000 Quantity'),
(121, 927, '0', '1', ' 1. High Resolution Border'),
(121, 928, '1', '1', ' For 5,000 Nos.\r\nof Marksheets / Gradesheets\r\n(Single order single design)'),
(121, 929, '2', '1', ' 150 GSM Tear Resistant\r\nPaper @ Rs. 21.0/-\r\nper Document\r\n(18% GST Extra)'),
(121, 930, '3', '1', ' Basic Static Designing Security Features:\r\n1. High Resolution Border'),
(121, 931, '4', '1', ' 250 GSM Tear Resistant Paper\r\n@ Rs. 55.0/- per Document\r\n(18% GST Extra)'),
(121, 932, '0', '2', ' 2. Guilloche Pattern Design'),
(121, 933, '1', '2', ' '),
(121, 934, '2', '2', ' '),
(121, 935, '3', '2', ' 2. Guilloche Pattern Design'),
(121, 936, '4', '2', ' '),
(121, 937, '0', '3', ' 3. Micro Text Line'),
(121, 938, '1', '3', ' '),
(121, 939, '2', '3', ' '),
(121, 940, '3', '3', ' 3. Anti-Copy Void Pantograph Patch'),
(121, 941, '4', '3', ' '),
(121, 942, '0', '4', ' 4. Copy Void Pantograph Patch'),
(121, 943, '1', '4', ' '),
(121, 944, '2', '4', ' '),
(121, 945, '3', '4', ' 4. Micro Text Line'),
(121, 946, '4', '4', ' '),
(121, 947, '0', '5', ' 5. Dual Hidden Image'),
(121, 948, '1', '5', ' '),
(121, 949, '2', '5', ' '),
(121, 950, '3', '5', ' 5. Latent Image'),
(121, 951, '4', '5', ' '),
(121, 952, '0', '6', ' 6. Dual Ghost Image'),
(121, 953, '1', '6', ' '),
(121, 954, '2', '6', ' '),
(121, 955, '3', '6', ' 6. Dual Hidden Image'),
(121, 956, '4', '6', ' '),
(121, 957, '0', '7', ' 7. Latent Image'),
(121, 958, '1', '7', ' '),
(121, 959, '2', '7', ' '),
(121, 960, '3', '7', ' 7. Relief Design / Text'),
(121, 961, '4', '7', ' '),
(121, 962, '0', '8', '8. Relief Design'),
(121, 963, '1', '8', ' '),
(121, 964, '2', '8', ' '),
(121, 965, '3', '8', ' 8. Watermark Logo front & back'),
(121, 966, '4', '8', ' '),
(121, 967, '0', '9', ' 9.Watermark Logo/ Text'),
(121, 968, '1', '9', ' '),
(121, 969, '2', '9', ' '),
(121, 970, '3', '9', ' 9. Micro Text in Logo'),
(121, 971, '4', '9', ' '),
(121, 972, '0', '10', ' 10. Serial Numbering'),
(121, 973, '1', '10', ' '),
(121, 974, '2', '10', ' '),
(121, 975, '3', '10', ' Advance Static Security Features:\r\n10. Invisible UV Ink – Logo'),
(121, 976, '4', '10', ' '),
(121, 977, '0', '11', ' 11. Invisible UV Ink – Logo'),
(121, 978, '1', '11', ' '),
(121, 979, '2', '11', ' '),
(121, 980, '3', '11', ' 11. Hot Foil Stamping – Gold'),
(121, 981, '4', '11', ' '),
(122, 982, '0', '0', ' SR.NO. '),
(122, 983, '1', '0', ' ITEM '),
(122, 984, '2', '0', ' QUANTITY '),
(122, 985, '0', '1', ' 1. '),
(122, 986, '1', '1', 'WELCOME LETTER,\r\nSIZE : A4,\r\nPAPER : 100 GSM MAPLITHO,\r\nPRINTING : 4+0 COLOUR'),
(122, 987, '2', '1', '3000 PCS  - Rs.2.40/-\r\n5000 PCS  - Rs.2.30/- '),
(122, 988, '0', '2', ' 2. '),
(122, 989, '1', '2', ' USER MANUAL,\r\nSIZE : AS PER PDF GIVEN,\r\nPAPER : 130 GSM ART PAPER,\r\nPRINTING : 4+4 COLOUR'),
(122, 990, '2', '2', '3000 PCS - Rs.2.10/-\r\n5000 PCS - Rs.2.20/-'),
(122, 991, '0', '3', ' 3. '),
(122, 992, '1', '3', ' POUCHES,\r\nSIZE : AS PER PDF GIVEN,\r\nPAPER : 130 GSM ART PAPER,\r\nPRINTING : 4 COLOUR + LAMINATION+PUNCHING+PASTING'),
(122, 993, '2', '3', '3000 PCS - Rs.3.20/-\r\n5000 PCS - Rs.3.05/-'),
(122, 994, '0', '4', ' 4. '),
(122, 995, '1', '4', 'ENVELOPES,\r\nSIZE : 9.5 INCH X 4.25 INCH,\r\nPAPER : 170 GSM ART PAPER,\r\nPRINTING : 4 COLOUR '),
(122, 996, '2', '4', '3000 PCS - Rs.5.40/-\r\n5000 PCS - Rs.5.15/-'),
(123, 997, '0', '0', ' SR.NO.'),
(123, 998, '1', '0', ' ITEM '),
(123, 999, '2', '0', ' QUANTITY'),
(123, 1000, '3', '0', ' RATE'),
(123, 1001, '0', '1', '1.'),
(123, 1002, '1', '1', 'AFGHAN UNITED BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPRINTING : CMYK'),
(123, 1003, '2', '1', '2 LACS '),
(123, 1004, '3', '1', 'Rs.1.80/- Per Pin Mailer'),
(124, 1005, '0', '0', 'SR.NO.'),
(124, 1006, '1', '0', 'ITEM'),
(124, 1007, '2', '0', 'QUANTITY'),
(124, 1008, '3', '0', ' RATE'),
(124, 1009, '0', '1', '1.'),
(124, 1010, '1', '1', 'PIN MAILER,\r\nSIZE : 7 INCH X 4 INCH,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK'),
(124, 1011, '2', '1', '10000 PCS'),
(124, 1012, '3', '1', 'Rs.2.25/- '),
(125, 1013, '0', '0', 'SR.NO.'),
(125, 1014, '1', '0', 'ITEM'),
(125, 1015, '2', '0', 'QUANTITY'),
(125, 1016, '3', '0', ' RATE'),
(125, 1017, '0', '1', '1.'),
(125, 1018, '1', '1', 'BLANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),
(125, 1019, '2', '1', '130000 PCS'),
(125, 1020, '3', '1', '0.98/- PER PIN MAILER'),
(126, 1021, '0', '0', ' SR.NO.'),
(126, 1022, '1', '0', 'ITEM'),
(126, 1023, '2', '0', ' QUANTITY'),
(126, 1024, '3', '0', ' RATE'),
(126, 1025, '0', '1', '1.'),
(126, 1026, '1', '1', ' POS ROLL - ROKEL COMMERCIAL BANK,\r\nSIZE : 56 mm x 15 mtrs x 48 GSM,\r\nPRINTING : CMYK ON FRONT SIDE'),
(126, 1027, '2', '1', '5000 ROLLS'),
(126, 1028, '3', '1', 'Rs.22/- Per Roll'),
(127, 1029, '0', '0', ' SR.NO.'),
(127, 1030, '1', '0', 'ITEM'),
(127, 1031, '2', '0', ' QUANTITY'),
(127, 1032, '3', '0', 'RATE'),
(127, 1033, '0', '1', ' 1.'),
(127, 1034, '1', '1', ' WELCOME LETTER,\r\nA5,90GSM MAPLITHO PAPER,\r\n4 COLOUR ON FRONT & BLACK BACK SIDE'),
(127, 1035, '2', '1', '5000 PCS\r\n10000 PCS\r\n20000 PCS'),
(127, 1036, '3', '1', 'Rs.2.30/- PER PCS\r\nRs.1.92/- PER PCS\r\nRs.1.54/- PER PCS'),
(127, 1037, '0', '2', ' 2.'),
(127, 1038, '1', '2', 'PIN MAILER,\r\n9 INCH X 4 INCH X 3 PLY,\r\n60+60+70 GSM NORMAL PAPER'),
(127, 1039, '2', '2', '5000 PCS\r\n10000 PCS\r\n20000 PCS'),
(127, 1040, '3', '2', 'Rs.2.77/- PER PCS\r\nRs.2.31/- PER PCS\r\nRs.1.76/- PER PCS'),
(127, 1041, '0', '3', ' 3.'),
(127, 1042, '1', '3', ' ENVELOPE,\r\nA5,130 GSM ART PAPER,DYE CUTTING,PASTING AND STRIP CUMMING,WITHOUT LAMINATION'),
(127, 1043, '2', '3', '5000 PCS\r\n10000 PCS\r\n20000 PCS'),
(127, 1044, '3', '3', 'Rs.4.28/- PER PCS\r\nRs.3.57/- PER PCS\r\nRs.3.19/- PER PCS\r\n'),
(128, 1045, '0', '0', '  SR.NO'),
(128, 1046, '1', '0', '  Description'),
(128, 1047, '2', '0', '  Quantity in Pcs'),
(128, 1048, '3', '0', ' Rate Per Pc'),
(128, 1049, '0', '1', '  1'),
(128, 1050, '1', '1', '  Blank Thermal Paper Rolls\r\nSize: 79mm X 40 Mtrs\r\nPaper : 48 GSM\r\nBlack Image\r\n'),
(128, 1051, '2', '1', '  3,00,000 pcs'),
(128, 1052, '3', '1', ' 32/- Per Pc'),
(128, 1053, '0', '2', '  2'),
(128, 1054, '1', '2', '  Blank Thermal Paper Rolls\r\nSize: 79mm X 40 Mtrs\r\nPaper : 70 GSM\r\nBlack Image\r\n');
INSERT INTO `quotation_invoice_details` (`quotation_id`, `id`, `column_id`, `row_id`, `description`) VALUES
(128, 1055, '2', '2', '  3,00,000 pcs'),
(128, 1056, '3', '2', ' 42/- Per Pc'),
(129, 1057, '0', '0', 'SR.NO.'),
(129, 1058, '1', '0', 'ITEM '),
(129, 1059, '2', '0', ' QUANTITY'),
(129, 1060, '3', '0', 'RATE'),
(129, 1061, '0', '1', '1.'),
(129, 1062, '1', '1', 'DIRECT THERMAL PLAIN BARCODE LABELS,\r\nSIZE : 4 INCH X 6 INCH,\r\n250 LABELS IN EACH ROLLS,\r\nCORE ID : 1 INCH '),
(129, 1063, '2', '1', '400 ROLLS\r\n(100000 PCS)'),
(129, 1064, '3', '1', '196/- PER ROLL'),
(130, 1065, '0', '0', 'SR.NO. '),
(130, 1066, '1', '0', ' ITEM '),
(130, 1067, '2', '0', ' QUANTITY '),
(130, 1068, '3', '0', ' RATE '),
(130, 1069, '0', '1', '1. '),
(130, 1070, '1', '1', 'Window Envelope,\r\nNon-Laminated,\r\nOpen Size - 285 * 232MM 90GSM Maplitho paper with Strip Gumming'),
(130, 1071, '2', '1', '10000 PCS\r\n20000 PCS\r\n50000 PCS'),
(130, 1072, '3', '1', 'Rs.1.89/- PER PCS\r\nRs.1.65/- PER PCS\r\nRs.1.29/- PER PCS'),
(130, 1073, '0', '2', ' 2.'),
(130, 1074, '1', '2', 'Welcome Letter,\r\nSize : A4, 4 Colour Printing,80 GSM Maplitho'),
(130, 1075, '2', '2', ' 10000 PCS\r\n20000 PCS\r\n50000 PCS'),
(130, 1076, '3', '2', 'Rs.2.71/- PER PCS\r\nRs.2.30/- PER PCS\r\nRs.1.65/- PER PCS'),
(130, 1077, '0', '3', ' 3.'),
(130, 1078, '1', '3', 'Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 ply,\r\nPaper : 60+60+70 GSM Normal Paper,Single colour printing '),
(130, 1079, '2', '3', ' 10000 PCS\r\n20000 PCS\r\n50000 PCS'),
(130, 1080, '3', '3', 'Rs.2.31/- PER PCS\r\nRs.1.76/- PER PCS\r\nRs.1.65/- PER PCS'),
(131, 1081, '0', '0', 'SR. NO.'),
(131, 1082, '1', '0', ' ITEM'),
(131, 1083, '2', '0', ' QUANTITY'),
(131, 1084, '3', '0', ' RATE'),
(131, 1085, '0', '1', ' 1.'),
(131, 1086, '1', '1', ' WELCOME LETTER,\r\nSIZE : A4,\r\n120 GSM SS MAPLITHO PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & BACK SIDE NO PRINTING'),
(131, 1087, '2', '1', '1500 PCS'),
(131, 1088, '3', '1', 'Rs.3.95/- PER PCS'),
(131, 1089, '0', '2', ' 2.'),
(131, 1090, '1', '2', 'USE MANUAL,\r\nSIZE : A4,\r\n100 GSM ART PAPER,\r\nPRINTING : 4 COLOUR PRINTING ON FRONT AND BACK SIDE,FOLDING'),
(131, 1091, '2', '2', ' 1500 PCS'),
(131, 1092, '3', '2', 'Rs.3.92/- PER PCS'),
(131, 1093, '0', '3', '3.'),
(131, 1094, '1', '3', 'ENVELOPES,\r\nSIZE : 9.25 INCH X 4.25 INCH,\r\n170 GSM ART PAPER,4 COLOUR PRINTING'),
(131, 1095, '2', '3', '1500 PCS'),
(131, 1096, '3', '3', 'Rs.7.40/- PER PCS'),
(132, 1101, '0', '0', ' SR. NO.'),
(132, 1102, '1', '0', '  ITEM '),
(132, 1103, '2', '0', '  QUANTITY'),
(132, 1104, '3', '0', '  RATE'),
(132, 1105, '0', '1', ' 1.'),
(132, 1106, '1', '1', 'ENTERTAINMENT TICKET,\r\n170 GSM NON INFUSED PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & 1 COLOUR BACK SIDE\r\n'),
(132, 1107, '2', '1', ' 8,50,000 PCS'),
(132, 1108, '3', '1', '3 INCH X 8 INCH - Rs.4.00/-\r\n\r\n3 INCH X 6 INCH - Rs.3.00/-'),
(132, 1109, '0', '2', '2.'),
(132, 1110, '1', '2', 'ENTERTAINMENT TICKET,\r\n197 GSM COLOUR CENTRE INFUSED PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & 1 COLOUR BACK SIDE'),
(132, 1111, '2', '2', '  8,50,000 PCS'),
(132, 1112, '3', '2', '3 INCH X 8 INCH - Rs.6.75/-\r\n\r\n3 INCH X 6 INCH - Rs.5.30/-'),
(133, 1113, '0', '0', 'SR.NO. '),
(133, 1114, '1', '0', ' ITEM'),
(133, 1115, '2', '0', ' QUANTITY'),
(133, 1116, '3', '0', ' RATE'),
(133, 1117, '0', '1', '1.'),
(133, 1118, '1', '1', 'SARASWATH GIFT PIN MAILER CARBONLESS,\r\nSIZE : 8.5 INCH X 4 INCH X 3 PLY,\r\nPAPER : 55CB + 55CFB + 55CF GSM,\r\nPRINTING : SINGLE COLOUR'),
(133, 1119, '2', '1', '50000 PCS'),
(133, 1120, '3', '1', 'Rs.1.90/- PER PCS'),
(134, 1121, '0', '0', ' SR. NO. '),
(134, 1122, '1', '0', ' ITEM '),
(134, 1123, '2', '0', ' QUANTITY '),
(134, 1124, '3', '0', ' RATE '),
(134, 1125, '0', '1', ' 1. '),
(134, 1126, '1', '1', '  Sarex Overseas     \r\nTax Invoice,\r\nSize : 10 inch x 12 inch x 4 Ply\r\n'),
(134, 1127, '2', '1', '  2500 PCS'),
(134, 1128, '3', '1', ' Rs.9.00/- PER SET'),
(134, 1129, '0', '2', ' 2.'),
(134, 1130, '1', '2', ' Sarex Overseas    \r\nDelivery Challan,\r\nSize : 10 inch x 12 inch x 4 Ply\r\n'),
(134, 1131, '2', '2', ' 2500 PCS'),
(134, 1132, '3', '2', ' Rs..7.85/- PER SET'),
(135, 1133, '0', '0', 'SR. NO.'),
(135, 1134, '1', '0', 'ITEM'),
(135, 1135, '2', '0', ' QUANTITY '),
(135, 1136, '3', '0', ' RATE'),
(135, 1137, '0', '1', '1.'),
(135, 1138, '1', '1', 'DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : SINGLE COLOUR'),
(135, 1139, '2', '1', '10000 PCS\r\n\r\n\r\n5000 PCS'),
(135, 1140, '3', '1', ' Rs. 2.10/- PER PCS\r\n\r\n\r\nRs. 3.25/- PER PCS'),
(136, 1141, '0', '0', 'SR. NO.'),
(136, 1142, '1', '0', 'ITEM '),
(136, 1143, '2', '0', ' QUANTITY'),
(136, 1144, '3', '0', 'RATE'),
(136, 1145, '0', '1', '1.'),
(136, 1146, '1', '1', ' PAY ORDER - SAMATA SAHAKARI BANK LTD.,\r\nSIZE : 9 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR PAPER,\r\nPRINTING : T.GREEN,BLACK,INVISIBLE INK'),
(136, 1147, '2', '1', '5000 PCS'),
(136, 1148, '3', '1', 'Rs. 1.95/- PER PCS'),
(137, 1149, '0', '0', 'SR.NO.'),
(137, 1150, '1', '0', ' ITEM'),
(137, 1151, '2', '0', 'QUANTITY'),
(137, 1152, '3', '0', ' RATE'),
(137, 1153, '0', '1', ' 1.'),
(137, 1154, '1', '1', 'BLANK THERMAL POS ROLLS,\r\nSIZE : 79 MM X 50 MTRS,\r\nPAPER : 48 GSM THERMAL,\r\nCORE : 13 MM PLASTIC '),
(137, 1155, '2', '1', '200 ROLLS\r\n\r\n\r\n500 ROLLS'),
(137, 1156, '3', '1', 'Rs.45/- PER ROLL\r\n\r\n\r\nRs.44/- PER ROLL'),
(138, 1157, '0', '0', ' SR.NO.'),
(138, 1158, '1', '0', 'ITEM'),
(138, 1159, '2', '0', ' QUANTITY'),
(138, 1160, '3', '0', ' RATE'),
(138, 1161, '0', '1', ' 1.'),
(138, 1162, '1', '1', 'WEBTRADE BARCODED PIN MAILER-ICICI SECURITES LTD.,\r\nSIZE : 8 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR\r\n	'),
(138, 1163, '2', '1', '10000 PCS\r\n\r\n\r\n20000 PCS'),
(138, 1164, '3', '1', 'Rs.2.10/- PER PIN MAILER\r\n\r\n\r\nRs.1.80/- PER PIN MAILER'),
(139, 1165, '0', '0', ' SR.NO. '),
(139, 1166, '1', '0', 'ITEM '),
(139, 1167, '2', '0', ' QUANTITY '),
(139, 1168, '0', '1', ' 1. '),
(139, 1169, '1', '1', ' Pin Mailer \r\nSize : 9 inch x 4 inch x 3 Ply\r\nPaper : 60+60+70 GSM\r\nPrinting : One colour printing\r\n '),
(139, 1170, '2', '1', '5000 Pcs - 3.00/- \r\n\r\n10000 Pcs - 2.47/-\r\n\r\n15000 Pcs - 2.30/-\r\n\r\n25000 Pcs - 1.98/-\r\n\r\n50000 Pcs - 1.76/-\r\n\r\nFor 2 colour printing 0.20/- extra per pin mailer '),
(141, 1179, '0', '0', ' SR. NO.'),
(141, 1180, '1', '0', ' ITEM'),
(141, 1181, '2', '0', ' QUANTITY'),
(141, 1182, '3', '0', ' RATE'),
(141, 1183, '0', '1', ' 1.'),
(141, 1184, '1', '1', 'BLANK PIN MAILER / TM KEY PIN MAILER OF ICICI BANK LTD.,\r\nSIZE : 10 INCH X 6 INCH X 2 PLY,\r\nPAPER :  60 GSM + 70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),
(141, 1185, '2', '1', ' 10000 PCS'),
(141, 1186, '3', '1', ' Rs.2.75/- PER PIN MAILER'),
(142, 1187, '0', '0', ' SR.NO.'),
(142, 1188, '1', '0', ' ITEM'),
(142, 1189, '2', '0', ' QUANTITY'),
(142, 1190, '3', '0', ' RATE'),
(142, 1191, '0', '1', ' 1.'),
(142, 1192, '1', '1', ' Pin Mailer \r\nSize : 9 inch x 4 inch x 3 Ply\r\nPaper : 60+60+70 GSM\r\nPrinting : Multicolour printing'),
(142, 1193, '2', '1', ' 15000 PCS'),
(142, 1194, '3', '1', ' Rs.2.30/- PER PIN MAILER'),
(135, 1195, '0', '2', '2.'),
(135, 1196, '1', '2', 'DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : 4 COLOUR PRINTING'),
(135, 1197, '2', '2', '10000 PCS\r\n\r\n\r\n5000 PCS'),
(135, 1198, '3', '2', ' Rs. 2.40/- PER PCS\r\n\r\n\r\nRs. 3.50/- PER PCS'),
(143, 1199, '0', '0', ' SR.NO.'),
(143, 1200, '1', '0', ' ITEM'),
(143, 1201, '2', '0', ' QUANTITY'),
(143, 1202, '3', '0', ' RATE'),
(143, 1203, '0', '1', ' 1.'),
(143, 1204, '1', '1', 'BLANK PIN MAILER,\r\nSIZE : 9 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),
(143, 1205, '2', '1', ' 500 PCS\r\n\r\n1000 PCS\r\n\r\n5000 PCS'),
(143, 1206, '3', '1', 'Rs. 9.00/- PER PCS\r\n\r\nRs. 5.50/- PER PCS\r\n\r\nRs. 1.85/- PER PCS'),
(144, 1207, '0', '0', '  SR.NO.'),
(144, 1208, '1', '0', '  ITEM'),
(144, 1209, '2', '0', '  QUANTITY'),
(144, 1210, '3', '0', '  RATE'),
(144, 1211, '0', '1', '  1.'),
(144, 1212, '1', '1', '  ENTERTAINMENT TICKET - ISL CFC 2022-23,\r\nSIZE : 3 INCHX  4 INCH,\r\nPAPER : COLOUR CENTER INFUSE PAPER,\r\nPRINTING : FRONT SIDE CMYK & BACK SIDE BLACK + BIV BLACK\r\n'),
(144, 1213, '2', '1', '  50000 PCS'),
(144, 1214, '3', '1', ' Rs. 4.25/- PER TICKET'),
(145, 1215, '0', '0', '  SR. NO.'),
(145, 1216, '1', '0', '  ITEM'),
(145, 1217, '2', '0', '  QUANTITY'),
(145, 1218, '3', '0', '  RATE'),
(145, 1219, '0', '1', '  1.'),
(145, 1220, '1', '1', ' PIN MAILER FOR TDCC,\r\nSPECIFICATIONS AS PER SAMPLE RECEIVED'),
(145, 1221, '2', '1', ' 50000 PCS'),
(145, 1222, '3', '1', ' Rs.1.15/- PER PIN MAILER'),
(145, 1223, '0', '2', ' 2.'),
(145, 1224, '1', '2', 'ENVELOPE FOR TDCC,\r\nSPECIFICATIONS AS PER SAMPLE RECEIVED'),
(145, 1225, '2', '2', '50000 PCS'),
(145, 1226, '3', '2', ' Rs.1.10/- PER PIN MAILER'),
(146, 1227, '0', '0', ' SR.NO.'),
(146, 1228, '1', '0', ' ITEM'),
(146, 1229, '2', '0', ' QUANTITY'),
(146, 1230, '3', '0', ' RATE'),
(146, 1231, '0', '1', ' 1.'),
(146, 1232, '1', '1', 'ENTERTAINMENT TICKET,\r\n170 GSM NON INFUSED PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & 1\r\nCOLOUR BACK SIDE'),
(146, 1233, '2', '1', ' 38000 TKTS'),
(146, 1234, '3', '1', ' Rs.4.50/- PER TICKET'),
(147, 1235, '0', '0', ' SR. NO.'),
(147, 1236, '1', '0', 'ITEM'),
(147, 1237, '2', '0', ' QUANTITY'),
(147, 1238, '3', '0', ' RATE'),
(147, 1239, '0', '1', ' 1.'),
(147, 1240, '1', '1', 'BLANK STATIONERY WITHOUT DP,\r\nSIZE : 7 INCH X 8 INCH X 1,\r\nPAPER : 60 GSM '),
(147, 1241, '2', '1', '10000 PCS'),
(147, 1242, '3', '1', '0.58/- PER PCS'),
(148, 1243, '0', '0', ' SR. NO.'),
(148, 1244, '1', '0', ' ITEM'),
(148, 1245, '2', '0', ' QUANTITY'),
(148, 1246, '3', '0', ' RATE'),
(148, 1247, '0', '1', ' 1.'),
(148, 1248, '1', '1', ' NCR JP Thermal Rolls,\r\nSize : 80 mm x 80 mtrs,\r\nPaper : 55 GSM Thermal,\r\nCore Size : 13 MM'),
(148, 1249, '2', '1', ' 20 Rolls'),
(148, 1250, '3', '1', ' Rs. 120/- Per Roll '),
(149, 1251, '0', '0', 'SR. NO.'),
(149, 1252, '1', '0', ' ITEM'),
(149, 1253, '2', '0', ' QUANTITY'),
(149, 1254, '3', '0', ' RATE'),
(149, 1255, '0', '1', ' 1.'),
(149, 1256, '1', '1', 'PIN MAILER,\r\nSIZE : 8 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Single Colour'),
(149, 1257, '2', '1', '3000 PCS'),
(149, 1258, '3', '1', ' Rs. 2.80/- Per Pin Mailer'),
(150, 1259, '0', '0', ' SR. NO.'),
(150, 1260, '1', '0', ' ITEM'),
(150, 1261, '2', '0', ' QUANTITY'),
(150, 1262, '3', '0', ' RATE'),
(150, 1263, '0', '1', ' 1.'),
(150, 1264, '1', '1', 'NCR RP ROLLS,\r\nSIZE : 80 MM X 160 MTRS,\r\n\r\n'),
(150, 1265, '2', '1', ' 100 ROLLS'),
(150, 1266, '3', '1', ' WITH BLACK SENSOR - Rs. 275/- PER ROLL \r\n\r\n\r\nPRINTED ROLL - Rs.295/- PER ROLL'),
(151, 1267, '0', '0', ' SR. NO.'),
(151, 1268, '1', '0', ' ITEM'),
(151, 1269, '2', '0', ' QUANTITY'),
(151, 1270, '3', '0', ' RATE'),
(151, 1271, '0', '1', '1.'),
(151, 1272, '1', '1', 'BLANK STATIONERY WITH PERFORATION,\r\nSIZE : 15 INCH X 12 INCH X 1,\r\nPAPER : 80 GSM '),
(151, 1273, '2', '1', '10000 SHEETS'),
(151, 1274, '3', '1', 'Rs.1.75/- PER SHEET'),
(152, 1275, '0', '0', ' SR. NO. '),
(152, 1276, '1', '0', ' ITEM '),
(152, 1277, '2', '0', ' QUANTITY '),
(152, 1278, '3', '0', ' RATE '),
(152, 1279, '0', '1', ' 1. '),
(152, 1280, '1', '1', 'Currency Kidzos 5 Leaflet, 80 GSM Maplito Paper, Size:- 135mm X 60mm  front & back 4 Color Print without UV\r\n '),
(152, 1281, '2', '1', '1,50,000\r\n\r\n'),
(152, 1282, '3', '1', '  Rs.0.20/- per pcs '),
(152, 1283, '0', '2', ' 2.'),
(152, 1284, '1', '2', ' Currency Kidzos 10 Leaflet, 80 GSM Maplito Paper, Size:- 140mm X 60mm  front & back 4 Color Print without UV'),
(152, 1285, '2', '2', '1,50,000\r\n\r\n'),
(152, 1286, '3', '2', '   Rs.0.20/- per pcs '),
(152, 1287, '0', '3', ' 3.'),
(152, 1288, '1', '3', ' Currency Kidzos 1 Leaflet, 80 GSM Maplitho Paper, Size:- 130mm X 60mm  Front & Back 4 Color Print Without UV'),
(152, 1289, '2', '3', '3,00,000\r\n\r\n'),
(152, 1290, '3', '3', '   Rs.0.20/- per pcs '),
(152, 1291, '0', '4', ' 4.'),
(152, 1292, '1', '4', ' Currency Kidzos 20 Leaflet, 80 GSM Maplito Paper, Size:- 145mm X 60mm  front & back 4 Color Print without UV'),
(152, 1293, '2', '4', '50,000'),
(152, 1294, '3', '4', '   Rs.0.20/- per pcs '),
(153, 1295, '0', '0', '  SR.NO. '),
(153, 1296, '1', '0', '  ITEM '),
(153, 1297, '2', '0', '  QUANTITY '),
(153, 1298, '3', '0', '  RATE '),
(153, 1299, '0', '1', '  1. '),
(153, 1300, '1', '1', 'RDCC POUCH,\r\n170 GSM ART PAPER,\r\nSIZE : AS PER SAMPLE,\r\nPRINTING : AS PER SAMPLE '),
(153, 1301, '2', '1', '5000 PCS   '),
(153, 1302, '3', '1', ' Rs.2.50/- PER POUCH '),
(153, 1303, '0', '2', ' 2. '),
(153, 1304, '1', '2', 'RDCC COVER PAGE,\r\n130 GSM ART PAPER,\r\nSIZE : AS PER SAMPLE,\r\nPRINTING : AS PER SAMPLE '),
(153, 1305, '2', '2', ' 10000 SETS'),
(153, 1306, '3', '2', ' Rs.2.30/- PER SET '),
(153, 1307, '0', '3', ' 3.'),
(153, 1308, '1', '3', 'RDCC RECORD SLIP,\r\n70 GSM PLAIN PAPER,\r\nSIZE : AS PER SAMPLE,\r\nPRINTING : BLACK'),
(153, 1309, '2', '3', ' 10000 PCS'),
(153, 1310, '3', '3', 'Rs. 0.35/- PER PCS'),
(154, 1323, '0', '0', 'Sr. No.  '),
(154, 1324, '1', '0', 'Item Code  '),
(154, 1325, '2', '0', 'Item Description  '),
(154, 1326, '0', '1', '1  '),
(154, 1327, '1', '1', 'code  '),
(154, 1328, '2', '1', 'desc  '),
(154, 1329, '0', '2', ' 2'),
(154, 1330, '1', '2', ' code 1'),
(154, 1331, '2', '2', ' desc 1'),
(155, 1342, '0', '0', ' ID  '),
(155, 1343, '1', '0', 'NAME   '),
(155, 1344, '2', '0', ' DESC '),
(155, 1345, '0', '2', ' 2'),
(155, 1346, '1', '2', ' NAME 2'),
(155, 1347, '2', '2', 'DESC 2 '),
(156, 1348, '0', '0', ' SR. NO.'),
(156, 1349, '1', '0', ' ITEM'),
(156, 1350, '2', '0', ' QUANTITY'),
(156, 1351, '3', '0', ' RATE'),
(156, 1352, '0', '1', '1.'),
(156, 1353, '1', '1', 'Entertainment Tickets - NEUFC 2022-23 Guwahati,\r\nSize : 3 inch x 4 inch,\r\nPaper : Non-infused Paper,\r\nPRINTING : FRONT SIDE CMYK & BACK\r\nSIDE BLACK + BIV BLACK'),
(156, 1354, '2', '1', '30000 Tickets'),
(156, 1355, '3', '1', ' Rs.4.00/- Per Ticket'),
(157, 1372, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO.'),
(157, 1373, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(157, 1374, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY'),
(157, 1375, '\'\'3\'\'', '\'\'0\'\'', ' RATE'),
(157, 1376, '\'\'0\'\'', '\'\'1\'\'', '1.'),
(157, 1377, '\'\'1\'\'', '\'\'1\'\'', 'DEBIT CARD PIN MAILER FOR CANARA BANK,\r\nSIZE : 7 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 gsm normal,\r\nPrinting : Cyan, Black, Yellow '),
(157, 1378, '\'\'2\'\'', '\'\'1\'\'', ' 100000 PCS'),
(157, 1379, '\'\'3\'\'', '\'\'1\'\'', ' Rs.1.20/- Per Pin Mailer'),
(158, 1380, '0', '0', ' SR. NO.'),
(158, 1381, '1', '0', ' ITEM '),
(158, 1382, '2', '0', ' QUANTITY'),
(158, 1383, '3', '0', ' RATE'),
(158, 1384, '0', '1', ' 1.'),
(158, 1385, '1', '1', 'Entertainment Tickets : Hero ISL 2022/23 Mumbai City FC -  \r\nOne Principle sponsor logo,\r\nSize : 3 inch x 4 inch,\r\nPaper : Infused Paper,\r\nPrinting : Front side CMYK & Back side Black + BIV Black\r\n'),
(158, 1386, '2', '1', ' 4600 Tickets'),
(158, 1387, '3', '1', ' Rs.5.50/- Per Ticket'),
(158, 1388, '0', '2', ' 2.'),
(158, 1389, '1', '2', 'Entertainment Tickets : Hero ISL 2022/23 Mumbai City FC -  \r\nTwo Principle Sponsor logo,\r\nSize : 3 inch x 4 inch,\r\nPaper : Infused Paper,\r\nPrinting : Front side CMYK & Back side Black + BIV Black'),
(158, 1390, '2', '2', ' 41400 Tickets '),
(158, 1391, '3', '2', ' Rs.4.25/- Per Ticket'),
(159, 1392, '0', '0', ' SR. NO.'),
(159, 1393, '1', '0', ' ITEM'),
(159, 1394, '2', '0', ' QUANTITY'),
(159, 1395, '3', '0', ' RATE'),
(159, 1396, '0', '1', ' 1.'),
(159, 1397, '1', '1', 'MARATHA MANDIR CINEMA ROLL,\r\nSIZE : 4 INCH X 4 INCH,\r\nPAPER : 58 GSM THERMAL,\r\nPRINTING : BLACK,RED,BLACK SENSOR'),
(159, 1398, '2', '1', ' 250 ROLLS'),
(159, 1399, '3', '1', ' Rs.140/- PER ROLL'),
(160, 1408, '\'0\'', '\'0\'', ' SR. NO.'),
(160, 1409, '\'1\'', '\'0\'', ' ITEM'),
(160, 1410, '\'2\'', '\'0\'', ' QUANTITY'),
(160, 1411, '\'3\'', '\'0\'', ' RATE'),
(160, 1412, '\'0\'', '\'1\'', ' 1.'),
(160, 1413, '\'1\'', '\'1\'', 'GRADE CARD,\r\nSize : A4\r\nPaper: 105 GSM Paper\r\nSecurity Features:\r\n1.Micro text\r\n2.Relief Background\r\n3.Copy\r\n4.Invisible logo\r\n5.Ghost Image\r\n6.Penatrating Numbering\r\n'),
(160, 1414, '\'2\'', '\'1\'', ' 10000 PCS'),
(160, 1415, '\'3\'', '\'1\'', ' Rs.3.70/- PER PCS'),
(161, 1416, '0', '0', ' SR. NO.'),
(161, 1417, '1', '0', ' ITEM'),
(161, 1418, '2', '0', ' QUANTITY'),
(161, 1419, '3', '0', ' RATE'),
(161, 1420, '0', '1', ' 1.'),
(161, 1421, '1', '1', 'KARAD URBAN BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK.GREEN,YELLOW,BLACK HOTSPOT\r\n'),
(161, 1422, '2', '1', ' 10000 PCS'),
(161, 1423, '3', '1', ' Rs.1.75/- PER PIN MAILER'),
(162, 1432, '0', '0', ' SR. NO.'),
(162, 1433, '1', '0', ' ITEM'),
(162, 1434, '2', '0', ' QUANTITY'),
(162, 1435, '3', '0', ' RATE'),
(162, 1436, '0', '1', ' 1.'),
(162, 1437, '1', '1', 'DIVIDEND WARRANT - DCW LIMITED,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : BURGUNDY,BLACK,INVISIBLE'),
(162, 1438, '2', '1', ' 4500 PCS'),
(162, 1439, '3', '1', ' Rs.2.50/- PER PCS'),
(163, 1464, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', ' SR.NO.'),
(163, 1465, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', ' ITEM'),
(163, 1466, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', ' QUANTITY'),
(163, 1467, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', ' RATE'),
(163, 1468, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', ' 1.'),
(163, 1469, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'PIN MAILER - CHAITANYA GODAVARI GRAMEENA BANK,\r\nSIZE : 6.5 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL,\r\n'),
(163, 1470, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', ' 117000 PIN MAILERS'),
(163, 1471, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', ' Rs. 0.91/- PER PIN MAILER FOR SINGLE COLOUR\r\n\r\nRs.1.30/- PER PIN MAILER FOR 4 COLOUR PRINTING'),
(164, 1472, '0', '0', 'SR.NO.'),
(164, 1473, '1', '0', 'ITEM'),
(164, 1474, '2', '0', ' QUANTITY'),
(164, 1475, '3', '0', 'RATE'),
(164, 1476, '0', '1', '1.'),
(164, 1477, '1', '1', 'BLANK THERMAL POS ROLLS,\r\nSIZE : 79 MM X 30 MTRS,\r\n'),
(164, 1478, '2', '1', '1000 ROLLS'),
(164, 1479, '3', '1', 'Rs.31.00/- PER ROLL'),
(165, 1480, '0', '0', ' SR. NO.'),
(165, 1481, '1', '0', ' ITEM'),
(165, 1482, '2', '0', ' QUANTITY'),
(165, 1483, '3', '0', ' RATE'),
(165, 1484, '0', '1', ' 01'),
(165, 1485, '1', '1', ' PIN MAILER - BASSEIN CATHOLIC BANK,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL,\r\nSINGLE COLOUR PRINTING'),
(165, 1486, '2', '1', '12000 PCS'),
(165, 1487, '3', '1', ' Rs.1.60/- PER PIN MAILER'),
(140, 1496, '\'\'0\'\'', '\'\'0\'\'', ' SR.NO.'),
(140, 1497, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(140, 1498, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY'),
(140, 1499, '\'\'3\'\'', '\'\'0\'\'', ' RATE'),
(140, 1500, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(140, 1501, '\'\'1\'\'', '\'\'1\'\'', 'Junior College Leaving Certificate,\r\nSize: A4                        \r\nPaper: 105 GSM Parchment\r\nNatural Shade,\r\nSingle side colour printing\r\n5 Security Features:\r\n1.Micro text\r\n2.Relief Background \r\n3.Invisible Logo\r\n4.Copy  \r\n5.Ghost Image\r\n\r\nHSN CODE - 49070090'),
(140, 1502, '\'\'2\'\'', '\'\'1\'\'', ' 3000 PCS'),
(140, 1503, '\'\'3\'\'', '\'\'1\'\'', ' Rs.3.00/- PER PCS'),
(167, 1672, '\'\'\'\'0\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' Sr.No'),
(167, 1673, '\'\'\'\'1\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Product '),
(167, 1674, '\'\'\'\'2\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'HSN Code '),
(167, 1675, '\'\'\'\'3\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Quantity \r\nin Rolls'),
(167, 1676, '\'\'\'\'4\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Rate\r\nIn INR '),
(167, 1677, '\'\'\'\'5\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Amount\r\nIn INR '),
(167, 1678, '\'\'\'\'0\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 1'),
(167, 1679, '\'\'\'\'1\'\'\'\'', '\'\'\'\'1\'\'\'\'', 'Imported Thermal POS rolls'),
(167, 1680, '\'\'\'\'2\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 4811'),
(167, 1681, '\'\'\'\'3\'\'\'\'', '\'\'\'\'1\'\'\'\'', '1000'),
(167, 1682, '\'\'\'\'4\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 47'),
(167, 1683, '\'\'\'\'5\'\'\'\'', '\'\'\'\'1\'\'\'\'', '47,000 '),
(167, 1684, '\'\'\'\'0\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' '),
(167, 1685, '\'\'\'\'1\'\'\'\'', '\'\'\'\'2\'\'\'\'', 'Description:79mm x 50mtrs, 48gsm, with single - color \"Clarks\" logo on the frontside and single-color text printing on the backside of the roll '),
(167, 1686, '\'\'\'\'2\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' '),
(167, 1687, '\'\'\'\'3\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' '),
(167, 1688, '\'\'\'\'4\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' '),
(167, 1689, '\'\'\'\'5\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' '),
(167, 1690, '\'\'\'\'0\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' '),
(167, 1691, '\'\'\'\'1\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' '),
(167, 1692, '\'\'\'\'2\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' '),
(167, 1693, '\'\'\'\'3\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' '),
(167, 1694, '\'\'\'\'4\'\'\'\'', '\'\'\'\'3\'\'\'\'', 'Gross '),
(167, 1695, '\'\'\'\'5\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' 47,000'),
(167, 1696, '\'\'\'\'0\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(167, 1697, '\'\'\'\'1\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(167, 1698, '\'\'\'\'2\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(167, 1699, '\'\'\'\'3\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(167, 1700, '\'\'\'\'4\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' SGST 9%'),
(167, 1701, '\'\'\'\'5\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' 4,230'),
(167, 1702, '\'\'\'\'0\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' '),
(167, 1703, '\'\'\'\'1\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' '),
(167, 1704, '\'\'\'\'2\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' '),
(167, 1705, '\'\'\'\'3\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' '),
(167, 1706, '\'\'\'\'4\'\'\'\'', '\'\'\'\'5\'\'\'\'', '  CGST 9%'),
(167, 1707, '\'\'\'\'5\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' 4,230'),
(167, 1708, '\'\'\'\'0\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' Amount In Words'),
(167, 1709, '\'\'\'\'1\'\'\'\'', '\'\'\'\'6\'\'\'\'', 'Rs: Fifty Five Thousand Four Hundred Sixty Only '),
(167, 1710, '\'\'\'\'2\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' '),
(167, 1711, '\'\'\'\'3\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' '),
(167, 1712, '\'\'\'\'4\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' Total'),
(167, 1713, '\'\'\'\'5\'\'\'\'', '\'\'\'\'6\'\'\'\'', '55,460'),
(168, 1738, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO.'),
(168, 1739, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(168, 1740, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY'),
(168, 1741, '\'\'3\'\'', '\'\'0\'\'', ' RATE'),
(168, 1742, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(168, 1743, '\'\'1\'\'', '\'\'1\'\'', 'ENTRY TICKET - BLANK THERMAL POS ROLL,\r\nSIZE : 56 MM X 37 MTRS X 150 GSM THERMAL\r\n'),
(168, 1744, '\'\'2\'\'', '\'\'1\'\'', ' 200 ROLLS'),
(168, 1745, '\'\'3\'\'', '\'\'1\'\'', 'Rs. 110/- PER ROLL '),
(168, 1746, '\'\'0\'\'', '\'\'2\'\'', ' 2.'),
(168, 1747, '\'\'1\'\'', '\'\'2\'\'', ' EXIT TICKET - BLANK THERMAL POS ROLL,\r\nSIZE : 79 MM X 50 MTRS X 75 GSM THERMAL'),
(168, 1748, '\'\'2\'\'', '\'\'2\'\'', ' 100 ROLLS'),
(168, 1749, '\'\'3\'\'', '\'\'2\'\'', ' Rs.70/- PER ROLL'),
(169, 1750, '0', '0', ' SR. NO.'),
(169, 1751, '1', '0', ' ITEM'),
(169, 1752, '2', '0', ' QUANTITY'),
(169, 1753, '3', '0', ' RATE'),
(169, 1754, '0', '1', ' 1.'),
(169, 1755, '1', '1', 'Welcome Letter,\r\nA4 - Size : W. 8.5 x H. 11 inch, 100 GMS  Maplitho paper,\r\n2 Colour printing'),
(169, 1756, '2', '1', ' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),
(169, 1757, '3', '1', 'Rs.2.73/-\r\nRs.2.20/-\r\nRs.1.82/-\r\nRs.1.56/-'),
(169, 1758, '0', '2', ' 2.'),
(169, 1759, '1', '2', 'Card Pouch,                      \r\nSize : 89MM X 58MM, 100 GMS & Art\r\npaper with Lamination'),
(169, 1760, '2', '2', ' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),
(169, 1761, '3', '2', 'Rs.1.95/-\r\nRs.1.17/-\r\nRs.0.94/-\r\nRs.0.84/-'),
(169, 1762, '0', '3', ' 3.'),
(169, 1763, '1', '3', 'Booklet (20 Pages),\r\nSize: 20cms X 11cms, 100 GMS Maplitho paper,\r\nSingle colour printing'),
(169, 1764, '2', '3', ' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),
(169, 1765, '3', '3', 'Rs.11.42/-\r\nRs.9.34/-\r\nRs.8.82/-\r\nRs.8.56/-'),
(169, 1766, '0', '4', ' 4.'),
(169, 1767, '1', '4', 'Big envelope(Window),\r\n4 colour printing,                  Size: 8.5 Inch X 6 Inch,\r\n100 GMS & Maplitho paper'),
(169, 1768, '2', '4', ' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),
(169, 1769, '3', '4', 'Rs.3.63/-\r\nRs.2.73/-\r\nRs.2.43/-\r\nRs.2.07/-'),
(170, 1770, '0', '0', ' SR. NO.'),
(170, 1771, '1', '0', ' ITEM '),
(170, 1772, '2', '0', ' QUANTITY'),
(170, 1773, '3', '0', ' RATE'),
(170, 1774, '0', '1', ' 1.'),
(170, 1775, '1', '1', ' ICICI BANK BOND DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : SINGLE COLOUR'),
(170, 1776, '2', '1', ' 2000 PCS'),
(170, 1777, '3', '1', ' Rs. 3.95/- PER PCS'),
(166, 1778, '\'0\'', '\'0\'', ' SR. NO.'),
(166, 1779, '\'1\'', '\'0\'', ' ITEM'),
(166, 1780, '\'2\'', '\'0\'', ' QUANTITY'),
(166, 1781, '\'3\'', '\'0\'', ' RATE'),
(166, 1782, '\'0\'', '\'1\'', ' 1.'),
(166, 1783, '\'1\'', '\'1\'', 'BLANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),
(166, 1784, '\'2\'', '\'1\'', ' 2000 PCS'),
(166, 1785, '\'3\'', '\'1\'', ' Rs.3.65/- PER PIN MAILER'),
(171, 1798, '\'0\'', '\'0\'', ' SR. NO.'),
(171, 1799, '\'1\'', '\'0\'', 'ITEM '),
(171, 1800, '\'2\'', '\'0\'', ' QUANTITY'),
(171, 1801, '\'3\'', '\'0\'', ' RATE'),
(171, 1802, '\'0\'', '\'1\'', ' 1.'),
(171, 1803, '\'1\'', '\'1\'', ' Union Bank of India Green Cloth Envelope 12 x 16\r\n\r\n'),
(171, 1804, '\'2\'', '\'1\'', ' 50,085 PCS'),
(171, 1805, '\'3\'', '\'1\'', ' 9.35/- PER PCS'),
(171, 1806, '\'0\'', '\'2\'', ' 2.'),
(171, 1807, '\'1\'', '\'2\'', 'Union Bank of India Green Cloth Envelope 6 x 12\r\n\r\n '),
(171, 1808, '\'2\'', '\'2\'', ' 5,000 PCS'),
(171, 1809, '\'3\'', '\'2\'', ' 5.22/- PER PCS'),
(172, 1810, '0', '0', 'Sr. No.'),
(172, 1811, '1', '0', 'Item Code'),
(172, 1812, '2', '0', 'Item Description'),
(172, 1813, '3', '0', 'Quantity'),
(172, 1814, '4', '0', 'Price'),
(172, 1815, '5', '0', 'Remark'),
(172, 1816, '0', '1', '1'),
(172, 1817, '1', '1', 'latest'),
(172, 1818, '2', '1', 'latest'),
(172, 1819, '3', '1', '43'),
(172, 1820, '4', '1', '4555'),
(172, 1821, '5', '1', 'latest'),
(173, 1822, '0', '0', 'Sr. No.'),
(173, 1823, '1', '0', 'Item Code'),
(173, 1824, '2', '0', 'Item Description'),
(173, 1825, '3', '0', 'Quantity'),
(173, 1826, '4', '0', 'Price'),
(173, 1827, '5', '0', 'Remark'),
(173, 1828, '0', '1', '1'),
(173, 1829, '1', '1', 'latest'),
(173, 1830, '2', '1', 'latest'),
(173, 1831, '3', '1', '43'),
(173, 1832, '4', '1', '4555'),
(173, 1833, '5', '1', 'latest'),
(174, 1834, '0', '0', ' test1'),
(174, 1835, '1', '0', 'test2 '),
(174, 1836, '0', '1', 'test3 '),
(174, 1837, '1', '1', 'tes4 '),
(175, 1838, '0', '0', ' SR. NO.'),
(175, 1839, '1', '0', ' ITEM'),
(175, 1840, '2', '0', ' QUANTITY'),
(175, 1841, '3', '0', ' RATE'),
(175, 1842, '0', '1', ' 1.'),
(175, 1843, '1', '1', ' HDFC BANK DIVIDEND WARRANT - HINDUSTAN UNILEVER LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : ROYAL BLUE+INVISIBLE INK,\r\n'),
(175, 1844, '2', '1', ' 55000 PCS'),
(175, 1845, '3', '1', ' Rs.0.98/- PER PCS'),
(176, 1854, '\'0\'', '\'0\'', ' SR. NO.'),
(176, 1855, '\'1\'', '\'0\'', ' ITEM'),
(176, 1856, '\'2\'', '\'0\'', ' QUANTITY'),
(176, 1857, '\'3\'', '\'0\'', ' RATE'),
(176, 1858, '\'0\'', '\'1\'', ' 1.'),
(176, 1859, '\'1\'', '\'1\'', ' AADI ANANT TICKET,\r\nSIZE : 3 INCH X 8 INCH,\r\nPRINTING : BLUE,RED,ORANGE,BLACK'),
(176, 1860, '\'2\'', '\'1\'', ' 4200 TICKETS'),
(176, 1861, '\'3\'', '\'1\'', ' Rs.8.00/- PER TICKET'),
(177, 1862, '0', '0', ' Sr No'),
(177, 1863, '1', '0', 'Description '),
(177, 1864, '2', '0', 'MOQ '),
(177, 1865, '3', '0', 'Rate '),
(177, 1866, '0', '1', '1. '),
(177, 1867, '1', '1', 'Certificates\r\nPaper: 90 GSM\r\nSize: A4\r\nWith Security Features  '),
(177, 1868, '2', '1', '10,000 pcs'),
(177, 1869, '3', '1', ' USD 1.75 Per Pc'),
(177, 1870, '0', '2', ' 2.'),
(177, 1871, '1', '2', ' Envelopes\r\nSize: 356mmX555mm\r\nwith Security Features'),
(177, 1872, '2', '2', '20,000 pcs '),
(177, 1873, '3', '2', 'USD 0.19 Per Pc'),
(178, 1874, '0', '0', 'Sr. No.'),
(178, 1875, '1', '0', 'Item Code'),
(178, 1876, '2', '0', 'Item Description'),
(178, 1877, '3', '0', 'Quantity'),
(178, 1878, '4', '0', 'Price'),
(178, 1879, '5', '0', 'Remark'),
(178, 1880, '0', '1', ''),
(178, 1881, '1', '1', ''),
(178, 1882, '2', '1', ''),
(178, 1883, '3', '1', ''),
(178, 1884, '4', '1', ''),
(178, 1885, '5', '1', ''),
(179, 1886, '0', '0', 'Sr. No.'),
(179, 1887, '1', '0', 'Item Code'),
(179, 1888, '2', '0', 'Item Description'),
(179, 1889, '3', '0', 'Quantity'),
(179, 1890, '4', '0', 'Price'),
(179, 1891, '5', '0', 'Remark'),
(179, 1892, '0', '1', ''),
(179, 1893, '1', '1', ''),
(179, 1894, '2', '1', ''),
(179, 1895, '3', '1', ''),
(179, 1896, '4', '1', ''),
(179, 1897, '5', '1', ''),
(180, 1930, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO.'),
(180, 1931, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(180, 1932, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY IN PCS'),
(180, 1933, '\'\'3\'\'', '\'\'0\'\'', ' RATE PER PCS'),
(180, 1934, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(180, 1935, '\'\'1\'\'', '\'\'1\'\'', 'Welcome Letter,\r\nSize - A4, Paper - 110 Gsm, 4+0 (One side printing)'),
(180, 1936, '\'\'2\'\'', '\'\'1\'\'', ' 5000\r\n10000\r\n25000\r\n50000'),
(180, 1937, '\'\'3\'\'', '\'\'1\'\'', 'Rs. 2.42/- \r\nRs. 2.07/-\r\nRs. 1.73/-\r\nRs. 1.61/-'),
(180, 1938, '\'\'0\'\'', '\'\'2\'\'', ' 2.'),
(180, 1939, '\'\'1\'\'', '\'\'2\'\'', ' Envelope,\r\nSize - 9.25\" x 4.25\", \r\nPaper - 130 Gsm, 4+0, matt lamination (One side printing)'),
(180, 1940, '\'\'2\'\'', '\'\'2\'\'', '  5000\r\n10000\r\n25000\r\n50000'),
(180, 1941, '\'\'3\'\'', '\'\'2\'\'', 'Rs. 3.68/- \r\nRs. 2.99/-\r\nRs. 2.42/-\r\nRs. 2.18/-'),
(180, 1942, '\'\'0\'\'', '\'\'3\'\'', ' 3.'),
(180, 1943, '\'\'1\'\'', '\'\'3\'\'', ' User Guide,\r\nSize - A5, Paper - 70 Gsm, 1+0 (One side printing)\r\n'),
(180, 1944, '\'\'2\'\'', '\'\'3\'\'', '  5000\r\n10000\r\n25000\r\n50000'),
(180, 1945, '\'\'3\'\'', '\'\'3\'\'', 'Rs. 0.92/- \r\nRs. 0.86/-\r\nRs. 0.80/-\r\nRs. 0.75/-'),
(182, 1954, '0', '0', ' SR. NO.'),
(182, 1955, '1', '0', ' ITEM'),
(182, 1956, '2', '0', ' QUANTITY'),
(182, 1957, '3', '0', ' RATE'),
(182, 1958, '0', '1', ' 1.'),
(182, 1959, '1', '1', 'Internet Banking Pin Mailer,\r\nSize : 6.5 inch x 4 inch x 3 ply\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Black'),
(182, 1960, '2', '1', ' 25000 PCS'),
(182, 1961, '3', '1', ' Rs.1.91/- (Freight + 18% GST Inclusive)'),
(181, 1978, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', ' SR. NO.'),
(181, 1979, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', ' ITEM'),
(181, 1980, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', ' QUANTITY'),
(181, 1981, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', ' RATE'),
(181, 1982, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', ' 1.'),
(181, 1983, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'Internet Banking Pin Mailer,\r\nSize : 6.5 inch x 4 inch x 3 ply\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Black'),
(181, 1984, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', ' 25000 PCS'),
(181, 1985, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', ' Rs.1.85/- (Freight + 18% GST Inclusive)'),
(183, 1986, '0', '0', ' SR. NO.'),
(183, 1987, '1', '0', ' ITEM'),
(183, 1988, '2', '0', ' QUANTITY'),
(183, 1989, '3', '0', 'RATE '),
(183, 1990, '0', '1', ' 1.'),
(183, 1991, '1', '1', ' HDFC BANK DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR PAPER,\r\nPRINTING : BROWN+INVISIBLE'),
(183, 1992, '2', '1', ' 11000 PCS'),
(183, 1993, '3', '1', 'Rs.1.50/- PER WARRANT'),
(184, 2002, '\'0\'', '\'0\'', ' SR.NO.'),
(184, 2003, '\'1\'', '\'0\'', ' ITEM'),
(184, 2004, '\'2\'', '\'0\'', ' QUANTITY'),
(184, 2005, '\'3\'', '\'0\'', ' RATE'),
(184, 2006, '\'0\'', '\'1\'', ' 1.'),
(184, 2007, '\'1\'', '\'1\'', 'PLAIN ENVELOPE,\r\nSIZE : 5 INCH X 11 INCH,\r\nPAPER : 80 GSM NORMAL PAPER'),
(184, 2008, '\'2\'', '\'1\'', ' 25000 PCS'),
(184, 2009, '\'3\'', '\'1\'', ' Rs. 1.70/- PER ENVELOPE'),
(185, 2010, '0', '0', ' SR. NO.'),
(185, 2011, '1', '0', ' ITEM'),
(185, 2012, '2', '0', ' QUANTITY'),
(185, 2013, '3', '0', ' RATE'),
(185, 2014, '0', '1', ' 1.'),
(185, 2015, '1', '1', 'THERMAL POS ROLL - KUMAR DRESSES,\r\nSIZE : 79 MM X 30 MTRS X 80 GSM THERMAL PAPER,\r\nPRINTING : RED'),
(185, 2016, '2', '1', ' 500 ROLLS'),
(185, 2017, '3', '1', ' Rs. 47/- PER ROLL '),
(187, 2055, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO.'),
(187, 2056, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(187, 2057, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY & RATE'),
(187, 2058, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(187, 2059, '\'\'1\'\'', '\'\'1\'\'', 'GRADE CARD - VES INSTITUTE OF TECHNOLOGY,\r\nPAPER : 150 GSM NON TEARABLE,\r\nPRINTING : FRONT SIDE CMYK + BACK SIDE RED,\r\n'),
(187, 2060, '\'\'2\'\'', '\'\'1\'\'', ' 5000 PCS  - Rs.12/- PER PCS\r\n\r\n10000 PCS  - Rs.10/- PER PCS'),
(186, 2226, '\'\'\'\'4\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(186, 2227, '\'\'\'\'0\'\'\'\'', '\'\'\'\'4\'\'\'\'', '   Security Features for all types :\r\n1. Thread(UV)\r\n2. UV Emblem in center (UV)\r\n3. University Name, Address etc. matter\r\n4. Microtext Border\r\n5. High Density Boarder\r\n6. Secured Numbering\r\n7. Sur Code (Special Machine Readable Code)8. GOLD foil stamping\r\n9. Flip Character in Design\r\n10. Unique Guilloche Pattern\r\n11. Signature in UV\r\n12. Thermochromic Ink  '),
(186, 2228, '\'\'\'\'1\'\'\'\'', '\'\'\'\'4\'\'\'\'', ''),
(186, 2229, '\'\'\'\'2\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(186, 2230, '\'\'\'\'3\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' '),
(186, 2231, '\'\'\'\'0\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Product '),
(186, 2232, '\'\'\'\'1\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Quantity'),
(186, 2233, '\'\'\'\'2\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'Rate Per PC '),
(186, 2234, '\'\'\'\'3\'\'\'\'', '\'\'\'\'0\'\'\'\'', ''),
(186, 2235, '\'\'\'\'4\'\'\'\'', '\'\'\'\'0\'\'\'\'', '1'),
(186, 2236, '\'\'\'\'0\'\'\'\'', '\'\'\'\'1\'\'\'\'', 'Degree certificates\r\nSize: A4, Paper: 300 GSM Texture Paper\r\n'),
(186, 2237, '\'\'\'\'1\'\'\'\'', '\'\'\'\'1\'\'\'\'', '  400 nos'),
(186, 2238, '\'\'\'\'2\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 75 /-'),
(186, 2239, '\'\'\'\'3\'\'\'\'', '\'\'\'\'1\'\'\'\'', '30000/-'),
(186, 2240, '\'\'\'\'4\'\'\'\'', '\'\'\'\'1\'\'\'\'', '2'),
(186, 2241, '\'\'\'\'0\'\'\'\'', '\'\'\'\'2\'\'\'\'', 'Degree certificates\r\nSize: A4 , Paper: 250 micron Teslin'),
(186, 2242, '\'\'\'\'1\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 400 nos'),
(186, 2243, '\'\'\'\'2\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 95 /-'),
(186, 2244, '\'\'\'\'3\'\'\'\'', '\'\'\'\'2\'\'\'\'', '38000/-'),
(186, 2245, '\'\'\'\'4\'\'\'\'', '\'\'\'\'2\'\'\'\'', '3'),
(186, 2246, '\'\'\'\'0\'\'\'\'', '\'\'\'\'3\'\'\'\'', 'Degree certificates\r\nSize: A4 , Paper: 200 GSM non terrible\r\n'),
(186, 2247, '\'\'\'\'1\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' 400 nos'),
(186, 2248, '\'\'\'\'2\'\'\'\'', '\'\'\'\'3\'\'\'\'', '70 /-'),
(186, 2249, '\'\'\'\'3\'\'\'\'', '\'\'\'\'3\'\'\'\'', '28000/-'),
(186, 2250, '\'\'\'\'4\'\'\'\'', '\'\'\'\'3\'\'\'\'', '4'),
(188, 2251, '0', '0', ' SR. NO.'),
(188, 2252, '1', '0', ' ITEM'),
(188, 2253, '2', '0', ' QUANTITY'),
(188, 2254, '3', '0', ' RATE'),
(188, 2255, '0', '1', ' 1.'),
(188, 2256, '1', '1', 'DIVIDEND WARRANT - BHILWARA URBAN CO-OP BANK LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER\r\nPRINTING : BLACK,YELLOW,ROYAL BLUE,INVISIBLE INK,\r\n'),
(188, 2257, '2', '1', ' 16000 PCS'),
(188, 2258, '3', '1', ' Rs.1.40/- PER PCS'),
(189, 2259, '0', '0', 'Sr. No.'),
(189, 2260, '1', '0', 'Item Code'),
(189, 2261, '2', '0', 'Item Description'),
(189, 2262, '3', '0', 'Quantity'),
(189, 2263, '4', '0', 'Rate'),
(189, 2264, '5', '0', 'Total'),
(189, 2265, '0', '1', '1'),
(189, 2266, '1', '1', ''),
(189, 2267, '2', '1', 'Thermal Paper Roll'),
(189, 2268, '3', '1', '1000'),
(189, 2269, '4', '1', '463'),
(189, 2270, '5', '1', '463,000'),
(190, 2271, '0', '0', 'Sr. No.'),
(190, 2272, '1', '0', 'Item Code'),
(190, 2273, '2', '0', 'Item Description'),
(190, 2274, '3', '0', 'Quantity'),
(190, 2275, '4', '0', 'Rate'),
(190, 2276, '5', '0', 'Total'),
(190, 2277, '0', '1', '1'),
(190, 2278, '1', '1', ''),
(190, 2279, '2', '1', 'Thermal Paper Roll'),
(190, 2280, '3', '1', '1000'),
(190, 2281, '4', '1', '463'),
(190, 2282, '5', '1', '463,000'),
(191, 2291, '\'0\'', '\'0\'', ' SR.NO.'),
(191, 2292, '\'1\'', '\'0\'', 'ITEM'),
(191, 2293, '\'2\'', '\'0\'', ' QUANATITY '),
(191, 2294, '\'3\'', '\'0\'', ' RATE'),
(191, 2295, '\'0\'', '\'1\'', ' 1.'),
(191, 2296, '\'1\'', '\'1\'', 'ENTRY TICKET - NITA MUKESH AMBANI CULTURAL CENTRE,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : 190 GSM COLOUR CENTRE PAPER,\r\nPRINTING : FRONT SIDE - CMYK & BACK SIDE -BLACK \r\n'),
(191, 2297, '\'2\'', '\'1\'', ' 3000 TICKETS'),
(191, 2298, '\'3\'', '\'1\'', ' Rs. 12.50/- PER TICKET'),
(193, 2307, '0', '0', ' SR.NO.'),
(193, 2308, '1', '0', ' ITEM'),
(193, 2309, '2', '0', 'QUANTITY '),
(193, 2310, '3', '0', ' RATE'),
(193, 2311, '0', '1', ' 1.'),
(193, 2312, '1', '1', 'BASSEIN CATHOLIC CO-OP BANK TERM DEPOSIT RECEIPT	,\r\nSIZE : 9.5 INCH X 6 INCH,\r\nPAPER : 105 GSM PARCHMENT,\r\nPRINTING : Magenta, Cyan , Black, Yellow	ON FRONT SIDE & BACK SIDE BLACK'),
(193, 2313, '2', '1', '20000'),
(193, 2314, '3', '1', ' Rs.1.00/-PER PCS'),
(192, 2315, '\'0\'', '\'0\'', ' SR.NO.'),
(192, 2316, '\'1\'', '\'0\'', ' ITEM '),
(192, 2317, '\'2\'', '\'0\'', ' QUANTITY '),
(192, 2318, '\'3\'', '\'0\'', ' RATE'),
(192, 2319, '\'0\'', '\'1\'', ' 1.'),
(192, 2320, '\'1\'', '\'1\'', 'MICR toner cartridge M402 - \r\n15000 sheets per toner print'),
(192, 2321, '\'2\'', '\'1\'', '60 PCS '),
(192, 2322, '\'3\'', '\'1\'', 'Rs.5100/- PER PCS'),
(194, 2323, '0', '0', ' SR. NO.'),
(194, 2324, '1', '0', ' ITEM'),
(194, 2325, '2', '0', ' QUANTITY'),
(194, 2326, '3', '0', ' RATE'),
(194, 2327, '0', '1', ' 1.'),
(194, 2328, '1', '1', ' ENTERTAINMENT TICKET - KOCHI BIENNALE 2022-2023,\r\nSIZE :  3 INCH X 8 INCH,\r\nPAPER : NON-INFUSED PAPER,\r\nPRINTING : BLACK ON FRONT & BACK SIDE,\r\n'),
(194, 2329, '2', '1', '50000 TICKETS '),
(194, 2330, '3', '1', ' Rs.5.25/- PER TICKET'),
(195, 2343, '\'0\'', '\'0\'', ' SR. NO.'),
(195, 2344, '\'1\'', '\'0\'', ' ITEM'),
(195, 2345, '\'2\'', '\'0\'', ' QUANTITY'),
(195, 2346, '\'3\'', '\'0\'', ' RATE'),
(195, 2347, '\'0\'', '\'1\'', ' 1.'),
(195, 2348, '\'1\'', '\'1\'', 'SAREX CHEMICALS TAX INVOICE,\r\nSIZE : 10 inch X 12 inch X 4 PLY,\r\nPAPER : WHITE+PINK+GREEN+YELLOW,\r\nPRINTING : BLACK,GREEN,INDIA RED	'),
(195, 2349, '\'2\'', '\'1\'', ' 5000 SETS'),
(195, 2350, '\'3\'', '\'1\'', ' Rs.6.50/- PER SET'),
(195, 2351, '\'0\'', '\'2\'', ' 2.'),
(195, 2352, '\'1\'', '\'2\'', 'DELIVERY CHALLAN FOR SAREX CHEMICALS,\r\nSIZE : 10 inch X 12 inch X 4 PLY,\r\nPAPER : WHITE,\r\nPRINTING : GREEN'),
(195, 2353, '\'2\'', '\'2\'', ' 5000 SETS'),
(195, 2354, '\'3\'', '\'2\'', ' Rs.6.50/- PER SET'),
(196, 2355, '0', '0', ' SR. NO.'),
(196, 2356, '1', '0', ' ITEM '),
(196, 2357, '2', '0', ' QUANTITY'),
(196, 2358, '3', '0', ' RATE'),
(196, 2359, '0', '1', ' 1.'),
(196, 2360, '1', '1', 'PIN MAILER WITH DATA PRINTING,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),
(196, 2361, '2', '1', '1 LACS - 2 LACS'),
(196, 2362, '3', '1', ' Rs.1.95/- PER PIN MAILER'),
(196, 2363, '0', '2', ' 2.'),
(196, 2364, '1', '2', 'PIN MAILER WITH DATA PRINTING,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : FOUR COLOUR'),
(196, 2365, '2', '2', ' 1 LACS - 2 LACS'),
(196, 2366, '3', '2', ' Rs.2.40/- PER PIN MAILER'),
(197, 2427, '\'\'\'\'\'0\'\'\'\'\'', '\'\'\'\'\'0\'\'\'\'\'', ' Sr. No'),
(197, 2428, '\'\'\'\'\'1\'\'\'\'\'', '\'\'\'\'\'0\'\'\'\'\'', 'Description '),
(197, 2429, '\'\'\'\'\'2\'\'\'\'\'', '\'\'\'\'\'0\'\'\'\'\'', 'Pages '),
(197, 2430, '\'\'\'\'\'3\'\'\'\'\'', '\'\'\'\'\'0\'\'\'\'\'', 'Qty '),
(197, 2431, '\'\'\'\'\'4\'\'\'\'\'', '\'\'\'\'\'0\'\'\'\'\'', 'Price Per Qty '),
(197, 2432, '\'\'\'\'\'5\'\'\'\'\'', '\'\'\'\'\'0\'\'\'\'\'', 'Total Value '),
(197, 2433, '\'\'\'\'\'0\'\'\'\'\'', '\'\'\'\'\'1\'\'\'\'\'', ' 1'),
(197, 2434, '\'\'\'\'\'1\'\'\'\'\'', '\'\'\'\'\'1\'\'\'\'\'', 'Answer Sheet \r\n1.	1. Size: Legal, \r\n2.	2. Paper: 70GSM, White Paper\r\n3.	3. Color- Black \r\n4.	4. Pinning with punch hole\r\n5.	5. Answer book Sr. No. and Page No. printed\r\n6.	6. Remaining design as per images forwarded\r\n '),
(197, 2435, '\'\'\'\'\'2\'\'\'\'\'', '\'\'\'\'\'1\'\'\'\'\'', ' 24 Pages'),
(197, 2436, '\'\'\'\'\'3\'\'\'\'\'', '\'\'\'\'\'1\'\'\'\'\'', '25000 '),
(197, 2437, '\'\'\'\'\'4\'\'\'\'\'', '\'\'\'\'\'1\'\'\'\'\'', ' '),
(197, 2438, '\'\'\'\'\'5\'\'\'\'\'', '\'\'\'\'\'1\'\'\'\'\'', ' '),
(198, 2439, '0', '0', 'Sr. No.'),
(198, 2440, '1', '0', 'Item Code'),
(198, 2441, '2', '0', 'Item Description'),
(198, 2442, '3', '0', 'Quantity'),
(198, 2443, '4', '0', 'Price'),
(198, 2444, '5', '0', 'Remark'),
(198, 2445, '0', '1', '1.'),
(198, 2446, '1', '1', ''),
(198, 2447, '2', '1', 'Thermal POS Roll\r\n13.	Size : 3 1/8” x 230’ (80mm x 70mtrs)\r\n14.	Paper : 48 GSM, \r\n15.	Core: 13 mm\r\n'),
(198, 2448, '3', '1', '50\'s'),
(198, 2449, '4', '1', '33.2 in USD'),
(198, 2450, '5', '1', ''),
(198, 2451, '0', '2', '2.'),
(198, 2452, '1', '2', ''),
(198, 2453, '2', '2', '16.	Thermal POS Rolls\r\n17.	Size : 3 1/8” x 220’ (80mm x 67mtrs)\r\n18.	Paper : 48 GSM, \r\n19.	Core: 13 mm\r\n'),
(198, 2454, '3', '2', '50\'s'),
(198, 2455, '4', '2', '32.0 in USD\r\n'),
(198, 2456, '5', '2', ''),
(198, 2473, '0', '3', '3.'),
(198, 2474, '1', '3', ''),
(198, 2475, '2', '3', '20.	Thermal POS Rolls\r\n21.	Size : 2 1/4” x 50’ (57mm x 15mtrs)\r\n22.	Paper : 48 GSM, \r\n23.	Core: 13 mm\r\n'),
(198, 2476, '3', '3', '50\'s'),
(198, 2477, '4', '3', '6.75 in USD'),
(198, 2478, '5', '3', ''),
(198, 2479, '0', '4', '4.'),
(198, 2480, '1', '4', ''),
(198, 2481, '2', '4', '24.	Thermal POS Rolls\r\n25.	Size : 2 1/4” x 85’ (57mm x 26mtrs)\r\n26.	Paper : 48 GSM, \r\n27.	Core: 13 mm\r\n'),
(198, 2482, '3', '4', '50\'s`'),
(198, 2483, '4', '4', '10.2 in USD'),
(198, 2484, '5', '4', ''),
(199, 2493, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', 'SR. NO.'),
(199, 2494, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', ' ITEM'),
(199, 2495, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', ' QUANTITY'),
(199, 2496, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', ' RATE'),
(199, 2497, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', ' 1.'),
(199, 2498, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'PASCHIM BANGA BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : CYAN,BLACK,YELLOW'),
(199, 2499, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', ' 70000 PCS'),
(199, 2500, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', 'Rs.1.20/- PER PIN MAILER (INCLUSIVE OF 18% GST AND FREIGHT CHARGES )'),
(200, 2525, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO. '),
(200, 2526, '\'\'1\'\'', '\'\'0\'\'', ' ITEM '),
(200, 2527, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY '),
(200, 2528, '\'\'3\'\'', '\'\'0\'\'', ' RATE '),
(200, 2529, '\'\'0\'\'', '\'\'1\'\'', ' 1. '),
(200, 2530, '\'\'1\'\'', '\'\'1\'\'', 'NCR JP Thermal Rolls,\r\nSize : 80 mm x 80 mtrs,\r\nPaper : 55 GSM Thermal,\r\nCore Size : 13 MM '),
(200, 2531, '\'\'2\'\'', '\'\'1\'\'', '50 Rolls '),
(200, 2532, '\'\'3\'\'', '\'\'1\'\'', ' Rs. 95/- Per Roll  '),
(200, 2533, '\'\'0\'\'', '\'\'2\'\'', ' 2.'),
(200, 2534, '\'\'1\'\'', '\'\'2\'\'', ' NCR RP Thermal Rolls,\r\nSize : 79 mm x 375 mtrs,\r\nPaper : 55 GSM Thermal,\r\nCore Size : 18 MM,\r\nPrinting : Black sensor,\r\nCoating side inside '),
(200, 2535, '\'\'2\'\'', '\'\'2\'\'', '25 Rolls'),
(200, 2536, '\'\'3\'\'', '\'\'2\'\'', 'Rs. 475/- Per Roll '),
(201, 2587, '\'\'0\'\'', '\'\'0\'\'', 'SR. NO.  '),
(201, 2588, '\'\'1\'\'', '\'\'0\'\'', ' ITEM  '),
(201, 2589, '\'\'2\'\'', '\'\'0\'\'', 'SIZE'),
(201, 2590, '\'\'3\'\'', '\'\'0\'\'', ' QUANTITY'),
(201, 2591, '\'\'4\'\'', '\'\'0\'\'', ' RATE PER PCS'),
(201, 2592, '\'\'0\'\'', '\'\'1\'\'', '1.   '),
(201, 2593, '\'\'1\'\'', '\'\'1\'\'', '  Welcome Letter (Colour 4+4), 120 GSM, SS Maplitho	'),
(201, 2594, '\'\'2\'\'', '\'\'1\'\'', '   W. 8.5 x  H. 11  inch	'),
(201, 2595, '\'\'3\'\'', '\'\'1\'\'', '1 LACS \r\n1.5 LACS'),
(201, 2596, '\'\'4\'\'', '\'\'1\'\'', 'Rs.1.70/- PER PCS'),
(201, 2597, '\'\'0\'\'', '\'\'2\'\'', ' 2.'),
(201, 2598, '\'\'1\'\'', '\'\'2\'\'', ' User Manual (Booklet)  (Colour 4+4), 130 GSM,SAC paper	'),
(201, 2599, '\'\'2\'\'', '\'\'2\'\'', '  W. 11.693  x H. 8.268  inch	'),
(201, 2600, '\'\'3\'\'', '\'\'2\'\'', '1 LACS \r\n1.5 LACS'),
(201, 2601, '\'\'4\'\'', '\'\'2\'\'', 'Rs.2.65/- PER PCS'),
(201, 2602, '\'\'0\'\'', '\'\'3\'\'', ' 3.'),
(201, 2603, '\'\'1\'\'', '\'\'3\'\'', ' Pouches (150 GSM Art Paper- 4 color printing )	'),
(201, 2604, '\'\'2\'\'', '\'\'3\'\'', '  89MM X 58MM	'),
(201, 2605, '\'\'3\'\'', '\'\'3\'\'', '1 LACS \r\n1.5 LACS'),
(201, 2606, '\'\'4\'\'', '\'\'3\'\'', 'Rs.1.40/- PER PCS'),
(201, 2607, '\'\'0\'\'', '\'\'4\'\'', ' 4.'),
(201, 2608, '\'\'1\'\'', '\'\'4\'\'', ' Envelopes (130 GSM Art Paper - 4 color printing)'),
(201, 2609, '\'\'2\'\'', '\'\'4\'\'', '  8.5 Inch X 6 Inch	'),
(201, 2610, '\'\'3\'\'', '\'\'4\'\'', '1 LACS \r\n1.5 LACS'),
(201, 2611, '\'\'4\'\'', '\'\'4\'\'', 'Rs.3.40/- PER PCS'),
(202, 2612, '0', '0', ' SR. NO.'),
(202, 2613, '1', '0', ' ITEM'),
(202, 2614, '2', '0', ' QUANTITY'),
(202, 2615, '3', '0', ' RATE'),
(202, 2616, '0', '1', ' 1.'),
(202, 2617, '1', '1', ' Ind vs SL 1st T20 Trophy 2022,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : 180 GSM NON INFUSED THERMAL PAPER,\r\nPRINTING : CMYK,\r\nSecurity Features : VOID, Micro Text, UV logo on the back, Serial number on tickets'),
(202, 2618, '2', '1', ' 34650 TICKETS'),
(202, 2619, '3', '1', ' Rs.3.50/- PER TICKET '),
(203, 2620, '0', '0', ' SR. NO.'),
(203, 2621, '1', '0', ' ITEM '),
(203, 2622, '2', '0', ' QUANTITY'),
(203, 2623, '3', '0', ' RATE'),
(203, 2624, '0', '1', ' 1.'),
(203, 2625, '1', '1', ' Grade Card - Dr.Bhanuben nanavati College,\r\nSize : 210 mm x 297 mm,\r\nPaper : 105 GSM Parchment Paper,\r\nPrinting : CMYK + Invisible Ink'),
(203, 2626, '2', '1', ' 2500 Pcs'),
(203, 2627, '3', '1', ' Rs.6.50/- Per Pcs'),
(204, 2648, '\'0\'', '\'0\'', 'SR. NO.'),
(204, 2649, '\'1\'', '\'0\'', ' ITEM'),
(204, 2650, '\'2\'', '\'0\'', ' QUANTITY'),
(204, 2651, '\'3\'', '\'0\'', ' RATE'),
(204, 2652, '\'0\'', '\'1\'', ' 1.'),
(204, 2653, '\'1\'', '\'1\'', ' IDBI VISA ASPIRE DI CARD ENVELOPE'),
(204, 2654, '\'2\'', '\'1\'', ' 5000 PCS'),
(204, 2655, '\'3\'', '\'1\'', ' Rs.4.60/- PER PCS'),
(204, 2656, '\'0\'', '\'2\'', ' 2.'),
(204, 2657, '\'1\'', '\'2\'', ' IDBI VISA IMPERIUM DI CARD ENVELOPE'),
(204, 2658, '\'2\'', '\'2\'', ' 5000 PCS'),
(204, 2659, '\'3\'', '\'2\'', ' Rs.4.60/- PER PCS'),
(206, 2668, '0', '0', 'Sr. No.'),
(206, 2669, '1', '0', 'Item Code'),
(206, 2670, '2', '0', 'Item Description'),
(206, 2671, '3', '0', 'Quantity'),
(206, 2672, '4', '0', 'Price'),
(206, 2673, '5', '0', 'Remark'),
(206, 2674, '0', '1', '1.'),
(206, 2675, '1', '1', ''),
(206, 2676, '2', '1', 'paper 70 GSM\r\nsize: 1020 x 720 MM'),
(206, 2677, '3', '1', '100'),
(206, 2678, '4', '1', '164000'),
(206, 2679, '5', '1', ''),
(206, 2680, '0', '2', '2.'),
(206, 2681, '1', '2', ''),
(206, 2682, '2', '2', 'Paper 80 GSM\r\nSize: 1020 x 720 MM'),
(206, 2683, '3', '2', '100'),
(206, 2684, '4', '2', '164000'),
(206, 2685, '5', '2', ''),
(206, 2686, '0', '3', '3.'),
(206, 2687, '1', '3', ''),
(206, 2688, '2', '3', 'Paper 115 GSM\r\nSize 1020 x 720 MM'),
(206, 2689, '3', '3', '50'),
(206, 2690, '4', '3', '80500'),
(206, 2691, '5', '3', ''),
(206, 2692, '0', '4', '4.'),
(206, 2693, '1', '4', ''),
(206, 2694, '2', '4', 'Paper 130 GSM\r\nSize: 1020 x 720 MM'),
(206, 2695, '3', '4', '50'),
(206, 2696, '4', '4', '80500'),
(206, 2697, '5', '4', ''),
(206, 2698, '0', '5', '5.'),
(206, 2699, '1', '5', ''),
(206, 2700, '2', '5', 'Paper 250 GSM \r\nSize: 1020 x 720 MM'),
(206, 2701, '3', '5', '50'),
(206, 2702, '4', '5', '80500'),
(206, 2703, '5', '5', ''),
(206, 2704, '0', '6', '6.'),
(206, 2705, '1', '6', ''),
(206, 2706, '2', '6', 'Paper 170 GSM\r\nSize: 1020 x 720 MM'),
(206, 2707, '3', '6', '50'),
(206, 2708, '4', '6', '80500'),
(206, 2709, '5', '6', ''),
(207, 2718, '0', '0', ' SR. NO.'),
(207, 2719, '1', '0', ' ITEM '),
(207, 2720, '2', '0', ' QUANTITY '),
(207, 2721, '3', '0', ' RATE'),
(207, 2722, '0', '1', ' 1.'),
(207, 2723, '1', '1', 'IND VS SL 2ND T20I TICKETS,\r\nSIZE : 3 INCH X 8 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : CMYK + BIV SENSOR'),
(207, 2724, '2', '1', ' 37600 TICKETS '),
(207, 2725, '3', '1', ' Rs.7.00/- PER TICKET'),
(208, 2726, '0', '0', ' Sr.      No'),
(208, 2727, '1', '0', ' Item Description'),
(208, 2728, '2', '0', ' Quantity'),
(208, 2729, '3', '0', ' Price      '),
(208, 2730, '4', '0', ' Total Price'),
(208, 2731, '0', '1', ' 1'),
(208, 2732, '1', '1', 'Booklet Printing with Security Features '),
(208, 2733, '2', '1', ' 40,000 Pcs'),
(208, 2734, '3', '1', ' Rs. 58.37'),
(208, 2735, '4', '1', ' Rs. 23,34,800'),
(209, 2736, '0', '0', ' SR. NO.'),
(209, 2737, '1', '0', ' ITEM'),
(209, 2738, '2', '0', ' QUANTITY'),
(209, 2739, '3', '0', ' RATE'),
(209, 2740, '0', '1', ' 1.'),
(209, 2741, '1', '1', ' INDIA VS SRI LANKA 3RD T20 TICKET,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : CMYK ON FRONT SIDE + BLACK & BIV SENSOR ON BACK SIDE'),
(209, 2742, '2', '1', ' 28500 TICKETS'),
(209, 2743, '3', '1', 'Rs.5.50/- PER TICKET'),
(205, 2744, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', ' SR. NO.'),
(205, 2745, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', ' ITEM '),
(205, 2746, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', ' QUANTITY'),
(205, 2747, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', ' RATE'),
(205, 2748, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', '1. '),
(205, 2749, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'FD RECEIPT FOR UDYAM BANK,\r\nSIZE : 9 INCH X 8 INCH,\r\nPAPER : 105 GSM PARCHMENT PAPER,\r\nPRINTING : MAGENTA,CYAN,BLACK,YELLOW	'),
(205, 2750, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', '5000 PCS\r\n\r\n10000 PCS'),
(205, 2751, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', ' Rs.3.80/- PER SET\r\n\r\nRs.3.50/- PER SET'),
(210, 2768, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO.'),
(210, 2769, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(210, 2770, '\'\'2\'\'', '\'\'0\'\'', ' QUANTITY'),
(210, 2771, '\'\'3\'\'', '\'\'0\'\'', ' RATE'),
(210, 2772, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(210, 2773, '\'\'1\'\'', '\'\'1\'\'', 'INDIA VS SRI LANKA 1ST ODI TICKET,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : CMYK ON FRONT SIDE + BLACK & BIV SENSOR ON BACK SIDE'),
(210, 2774, '\'\'2\'\'', '\'\'1\'\'', '39000 TICKETS'),
(210, 2775, '\'\'3\'\'', '\'\'1\'\'', 'Rs.5.50/- PER TICKET'),
(211, 2776, '0', '0', ' SR. NO.'),
(211, 2777, '1', '0', ' ITEM'),
(211, 2778, '2', '0', ' QUANTITY'),
(211, 2779, '3', '0', ' RATE'),
(211, 2780, '0', '1', ' 1.'),
(211, 2781, '1', '1', 'DIVIDEND WARRANT - BHILWARA URBAN CO-OP BANK LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : ROYAL BLUE,GREEN, INVISIBLE'),
(211, 2782, '2', '1', ' 16000 PCS'),
(211, 2783, '3', '1', ' Rs.1.50/- PER PCS'),
(212, 2784, '0', '0', ' SR.NO.'),
(212, 2785, '1', '0', ' ITEM'),
(212, 2786, '2', '0', 'QUANTITY'),
(212, 2787, '3', '0', ' RATE'),
(212, 2788, '0', '1', ' 1.'),
(212, 2789, '1', '1', 'PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR'),
(212, 2790, '2', '1', '1000 PCS'),
(212, 2791, '3', '1', ' Rs.7000/- LOT CHARGES'),
(213, 2802, '\'0\'', '\'0\'', ' Sr. No'),
(213, 2803, '\'1\'', '\'0\'', 'Description '),
(213, 2804, '\'2\'', '\'0\'', 'Quantity '),
(213, 2805, '\'3\'', '\'0\'', 'Rate '),
(213, 2806, '\'4\'', '\'0\'', 'Total '),
(213, 2807, '\'0\'', '\'1\'', '1 '),
(213, 2808, '\'1\'', '\'1\'', 'Pin Mailer '),
(213, 2809, '\'2\'', '\'1\'', '6000 '),
(213, 2810, '\'3\'', '\'1\'', '4.10 '),
(213, 2811, '\'4\'', '\'1\'', '24600 '),
(214, 2836, '\'\'0\'\'', '\'\'0\'\'', 'Sr.No'),
(214, 2837, '\'\'1\'\'', '\'\'0\'\'', 'Item Description ');
INSERT INTO `quotation_invoice_details` (`quotation_id`, `id`, `column_id`, `row_id`, `description`) VALUES
(214, 2838, '\'\'2\'\'', '\'\'0\'\'', ' Time Period'),
(214, 2839, '\'\'3\'\'', '\'\'0\'\'', ' Rate'),
(214, 2840, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(214, 2841, '\'\'1\'\'', '\'\'1\'\'', '2 CPS Software AMC Charges'),
(214, 2842, '\'\'2\'\'', '\'\'1\'\'', 'From 01-01-2023 to 31-12-2023'),
(214, 2843, '\'\'3\'\'', '\'\'1\'\'', ' Rs.18000/-'),
(214, 2844, '\'\'0\'\'', '\'\'2\'\'', ' 2.'),
(214, 2845, '\'\'1\'\'', '\'\'2\'\'', '2 Printer AMC \r\nNon-compressive charges\r\n'),
(214, 2846, '\'\'2\'\'', '\'\'2\'\'', 'From 01-01-2023 to 31-12-2023'),
(214, 2847, '\'\'3\'\'', '\'\'2\'\'', 'Rs.12000/- Per Pcs x 2 Printer = Rs.24,000/-'),
(215, 2884, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', ' SR. NO.  '),
(215, 2885, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', ' ITEM   '),
(215, 2886, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', ' QUANTITY  '),
(215, 2887, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', ' RATE  '),
(215, 2888, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', ' 1.  '),
(215, 2889, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'ICICI BANK BOND DIVIDEND WARRANT DJC015752,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : BLACK + INVISIBLE INK, '),
(215, 2890, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', '2200 PCS'),
(215, 2891, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', ' Rs. 3.95/- PER PCS  '),
(215, 2892, '\'\'\'0\'\'\'', '\'\'\'2\'\'\'', ' 2.'),
(215, 2893, '\'\'\'1\'\'\'', '\'\'\'2\'\'\'', 'ICICI BANK BOND DIVIDEND WARRANT DJC015365,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : BLACK + INVISIBLE INK, '),
(215, 2894, '\'\'\'2\'\'\'', '\'\'\'2\'\'\'', ' 2500 PCS'),
(215, 2895, '\'\'\'3\'\'\'', '\'\'\'2\'\'\'', '  Rs. 3.95/- PER PCS  '),
(216, 3008, '\'\'\'\'0\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' SR.NO.'),
(216, 3009, '\'\'\'\'1\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' ITEM'),
(216, 3010, '\'\'\'\'2\'\'\'\'', '\'\'\'\'0\'\'\'\'', 'QUANTITY'),
(216, 3011, '\'\'\'\'3\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' RATE'),
(216, 3012, '\'\'\'\'0\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 1.'),
(216, 3013, '\'\'\'\'1\'\'\'\'', '\'\'\'\'1\'\'\'\'', 'Main Plain Envelope,\r\nWindow envelope, Open Size - 285 * 232MM ,  Paper 100 - GSM  Glossy , Printing Color - 4 + 0 , & Window Pasting without Lamination with Strip Gumming'),
(216, 3014, '\'\'\'\'2\'\'\'\'', '\'\'\'\'1\'\'\'\'', '30000 PCS\r\n\r\n50000 PCS'),
(216, 3015, '\'\'\'\'3\'\'\'\'', '\'\'\'\'1\'\'\'\'', 'Rs.1.95/- PER PCS\r\n\r\nRs.1.82/- PER PCS'),
(216, 3016, '\'\'\'\'0\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 2.'),
(216, 3017, '\'\'\'\'1\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' Pin Mailer Envelope,\r\n80 gsm, Single Window, without lamination (leaflet),One colour printing'),
(216, 3018, '\'\'\'\'2\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 30000 PCS\r\n\r\n50000 PCS'),
(216, 3019, '\'\'\'\'3\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' Rs.1.23/- PER PCS\r\n\r\nRs.1.18/- PER PCS'),
(216, 3020, '\'\'\'\'0\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' 3.'),
(216, 3021, '\'\'\'\'1\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' Pin Mailer,\r\nSize - 8\" x4\"x3 Ply, Printing 1 \r\n colour, Paper : 60+60+70 GSM Normal Paper'),
(216, 3022, '\'\'\'\'2\'\'\'\'', '\'\'\'\'3\'\'\'\'', ' 30000 PCS\r\n\r\n50000 PCS'),
(216, 3023, '\'\'\'\'3\'\'\'\'', '\'\'\'\'3\'\'\'\'', 'Rs.1.70/- PER PCS\r\n\r\nRs.1.60/- PER PCS'),
(216, 3024, '\'\'\'\'0\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' 4.'),
(216, 3025, '\'\'\'\'1\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' Welcome Letter,\r\n210mm x 297mm (A4), 80 gsm, Printing 4+4 VDP on front'),
(216, 3026, '\'\'\'\'2\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' 30000 PCS\r\n\r\n50000 PCS'),
(216, 3027, '\'\'\'\'3\'\'\'\'', '\'\'\'\'4\'\'\'\'', ' Rs.1.77/- PER PCS\r\n\r\nRs.1.65/- PER PCS'),
(216, 3028, '\'\'\'\'0\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' 5.'),
(216, 3029, '\'\'\'\'1\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' Card Pouch,\r\n3.54\" x 2.36\", 130 GSM Paper'),
(216, 3030, '\'\'\'\'2\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' 30000 PCS\r\n\r\n50000 PCS'),
(216, 3031, '\'\'\'\'3\'\'\'\'', '\'\'\'\'5\'\'\'\'', ' Rs.1.29/- PER PCS\r\n\r\nRs.1.15/- PER PCS'),
(216, 3032, '\'\'\'\'0\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' 6.'),
(216, 3033, '\'\'\'\'1\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' User Guide/ Terms & Condition,\r\nSize - 210 * 297MM ,  Paper 80 - GSM  Maplitho , Printing Color – 4+4'),
(216, 3034, '\'\'\'\'2\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' 30000 PCS\r\n\r\n50000 PCS'),
(216, 3035, '\'\'\'\'3\'\'\'\'', '\'\'\'\'6\'\'\'\'', ' Rs.1.29/- PER PCS\r\n\r\nRs.1.18/- PER PCS'),
(217, 3044, '\'0\'', '\'0\'', ' SR. NO.'),
(217, 3045, '\'1\'', '\'0\'', ' ITEM'),
(217, 3046, '\'2\'', '\'0\'', ' QUANTITY'),
(217, 3047, '\'3\'', '\'0\'', ' RATE'),
(217, 3048, '\'0\'', '\'1\'', ' 1.'),
(217, 3049, '\'1\'', '\'1\'', 'NCPA TICKETS-SYMPHONY,\r\nSIZE : 3 INCH X 8 INCH,\r\nPAPER : 170 GSM ART PAPER,\r\nPRINTING : BROWN+BLACK+BLACK SENSOR'),
(217, 3050, '\'2\'', '\'1\'', ' 5000 PCS'),
(217, 3051, '\'3\'', '\'1\'', ' Rs.8.00/- PER TICKET '),
(218, 3052, '0', '0', ' SR.NO.'),
(218, 3053, '1', '0', ' ITEM'),
(218, 3054, '2', '0', ' QUANTITY'),
(218, 3055, '3', '0', ' RATE'),
(218, 3056, '0', '1', ' 1.'),
(218, 3057, '1', '1', 'PIN MAILER,\r\nSIZE : 6.5 INCH X 3.67 INCH X 2 PLY,\r\nPAPER : 60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR '),
(218, 3058, '2', '1', ' 200000 PCS'),
(218, 3059, '3', '1', 'Rs. 0.77/- PER PCS'),
(218, 3060, '0', '2', ' 2.'),
(218, 3061, '1', '2', 'PIN MAILER,\r\nSIZE : 6.5 INCH X 3.67 INCH X 2 PLY,\r\nPAPER : 60 GSM CARBONLESS PAPER,\r\nPRINTING : BLACK COLOUR'),
(218, 3062, '2', '2', '  200000 PCS'),
(218, 3063, '3', '2', 'Rs. 1.20/- PER PCS'),
(219, 3096, '\'\'0\'\'', '\'\'0\'\'', ' SR. NO.'),
(219, 3097, '\'\'1\'\'', '\'\'0\'\'', ' ITEM'),
(219, 3098, '\'\'2\'\'', '\'\'0\'\'', ' '),
(219, 3099, '\'\'3\'\'', '\'\'0\'\'', ' '),
(219, 3100, '\'\'0\'\'', '\'\'1\'\'', ' 1.'),
(219, 3101, '\'\'1\'\'', '\'\'1\'\'', 'YES BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR '),
(219, 3102, '\'\'2\'\'', '\'\'1\'\'', ' 40000 PCS'),
(219, 3103, '\'\'3\'\'', '\'\'1\'\'', 'Rs. 1.40/- PER PCS'),
(219, 3104, '\'\'0\'\'', '\'\'2\'\'', ' 2.'),
(219, 3105, '\'\'1\'\'', '\'\'2\'\'', 'STATNDARD BANK PIN MAILER,\r\nSIZE : 9 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : 4 COLOUR '),
(219, 3106, '\'\'2\'\'', '\'\'2\'\'', ' 20000 PCS'),
(219, 3107, '\'\'3\'\'', '\'\'2\'\'', ' Rs. 1.70/- PER PCS'),
(219, 3108, '\'\'0\'\'', '\'\'3\'\'', ' 3.'),
(219, 3109, '\'\'1\'\'', '\'\'3\'\'', ' EQUITAS BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR '),
(219, 3110, '\'\'2\'\'', '\'\'3\'\'', '  20000 PCS'),
(219, 3111, '\'\'3\'\'', '\'\'3\'\'', ' Rs. 1.50/- PER PCS'),
(220, 3120, '\'0\'', '\'0\'', ' SR. NO.'),
(220, 3121, '\'1\'', '\'0\'', ' ITEM'),
(220, 3122, '\'2\'', '\'0\'', ' QUANTITY'),
(220, 3123, '\'3\'', '\'0\'', ' RATE'),
(220, 3124, '\'0\'', '\'1\'', ' 1.'),
(220, 3125, '\'1\'', '\'1\'', ' ENTERTAINMENT TICKET - NITA MUKESH AMBANI CULTURAL CENTRE,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : 190 GSM THERMAL,\r\nPRINTING : CMYK ON FRONT SIDE & BACK SIDE BLACK,\r\n250 TICKETS IN EACH ROLL'),
(220, 3126, '\'2\'', '\'1\'', ' 10000 TICKETS'),
(220, 3127, '\'3\'', '\'1\'', ' Rs.9.50/- PER TICKET'),
(221, 3128, '0', '0', 'Sr. No.'),
(221, 3129, '1', '0', 'Item Code'),
(221, 3130, '2', '0', 'Item Description'),
(221, 3131, '3', '0', 'Quantity'),
(221, 3132, '4', '0', 'Price'),
(221, 3133, '5', '0', 'Remark'),
(221, 3134, '0', '1', '1'),
(221, 3135, '1', '1', ''),
(221, 3136, '2', '1', 'Answer sheets\r\n120 GSM , UV Thermal paper'),
(221, 3137, '3', '1', '4000'),
(221, 3138, '4', '1', '10/- per pcs'),
(221, 3139, '5', '1', ''),
(221, 3140, '0', '2', ''),
(221, 3141, '1', '2', ''),
(221, 3142, '2', '2', ''),
(221, 3143, '3', '2', ''),
(221, 3144, '4', '2', ''),
(221, 3145, '5', '2', ''),
(221, 3146, '0', '3', ''),
(221, 3147, '1', '3', ''),
(221, 3148, '2', '3', ''),
(221, 3149, '3', '3', ''),
(221, 3150, '4', '3', ''),
(221, 3151, '5', '3', ''),
(222, 3152, '0', '0', 'Sr. No.'),
(222, 3153, '1', '0', 'Item Code'),
(222, 3154, '2', '0', 'Item Description'),
(222, 3155, '3', '0', 'Case Pack'),
(222, 3156, '4', '0', '40\' Qty 24500 Kg'),
(222, 3157, '5', '0', 'Case Wt Ib'),
(222, 3158, '0', '1', '1'),
(222, 3159, '1', '1', 'Thermal Paper Roll'),
(222, 3160, '2', '1', '3 1/8 x 230\' \r\n48 GSM'),
(222, 3161, '3', '1', '50'),
(222, 3162, '4', '1', '1850'),
(222, 3163, '5', '1', '28.75'),
(222, 3164, '0', '2', '2'),
(222, 3165, '1', '2', 'Thermal Paper Roll'),
(222, 3166, '2', '2', '2 1/4 x 150\'\r\n48 GSM'),
(222, 3167, '3', '2', '50'),
(222, 3168, '4', '2', ''),
(222, 3169, '5', '2', ''),
(222, 3170, '0', '3', '3'),
(222, 3171, '1', '3', 'Thermal Paper Roll'),
(222, 3172, '2', '3', '2 1/4 x 50\'\r\n48 GSM'),
(222, 3173, '3', '3', '50'),
(222, 3174, '4', '3', ''),
(222, 3175, '5', '3', ''),
(222, 3176, '0', '4', '4'),
(222, 3177, '1', '4', 'Thermal Paper Roll'),
(222, 3178, '2', '4', '2 1/4 x 85\'\r\n48 GSM'),
(222, 3179, '3', '4', '50'),
(222, 3180, '4', '4', ''),
(222, 3181, '5', '4', ''),
(222, 3182, '0', '5', ''),
(222, 3183, '1', '5', ''),
(222, 3184, '2', '5', ''),
(222, 3185, '3', '5', ''),
(222, 3186, '4', '5', ''),
(222, 3187, '5', '5', ''),
(223, 3188, '0', '0', 'Sr. No.'),
(223, 3189, '1', '0', 'Item Code'),
(223, 3190, '2', '0', 'Item Description'),
(223, 3191, '3', '0', 'Case Pack'),
(223, 3192, '4', '0', '40\' Qty 24500 Kg'),
(223, 3193, '5', '0', 'Case Wt Ib'),
(223, 3194, '0', '1', '1'),
(223, 3195, '1', '1', 'Thermal Paper Roll'),
(223, 3196, '2', '1', '3 1/8 x 230\' \r\n48 GSM'),
(223, 3197, '3', '1', '50'),
(223, 3198, '4', '1', '1850'),
(223, 3199, '5', '1', '28.75'),
(223, 3200, '0', '2', '2'),
(223, 3201, '1', '2', 'Thermal Paper Roll'),
(223, 3202, '2', '2', '2 1/4 x 150\'\r\n48 GSM'),
(223, 3203, '3', '2', '50'),
(223, 3204, '4', '2', ''),
(223, 3205, '5', '2', ''),
(223, 3206, '0', '3', '3'),
(223, 3207, '1', '3', 'Thermal Paper Roll'),
(223, 3208, '2', '3', '2 1/4 x 50\'\r\n48 GSM'),
(223, 3209, '3', '3', '50'),
(223, 3210, '4', '3', ''),
(223, 3211, '5', '3', ''),
(223, 3212, '0', '4', '4'),
(223, 3213, '1', '4', 'Thermal Paper Roll'),
(223, 3214, '2', '4', '2 1/4 x 85\'\r\n48 GSM'),
(223, 3215, '3', '4', '50'),
(223, 3216, '4', '4', ''),
(223, 3217, '5', '4', ''),
(223, 3218, '0', '5', ''),
(223, 3219, '1', '5', ''),
(223, 3220, '2', '5', ''),
(223, 3221, '3', '5', ''),
(223, 3222, '4', '5', ''),
(223, 3223, '5', '5', ''),
(224, 3224, '0', '0', 'Sr. No.'),
(224, 3225, '1', '0', 'Item Code'),
(224, 3226, '2', '0', 'Item Description'),
(224, 3227, '3', '0', 'Case Pack'),
(224, 3228, '4', '0', '40\' Qty 24500 Kg'),
(224, 3229, '5', '0', 'Case Wt Ib'),
(224, 3230, '0', '1', '1'),
(224, 3231, '1', '1', 'Thermal Paper Roll'),
(224, 3232, '2', '1', '3 1/8 x 230\' \r\n48 GSM'),
(224, 3233, '3', '1', '50'),
(224, 3234, '4', '1', '1850'),
(224, 3235, '5', '1', '28.75'),
(224, 3236, '0', '2', '2'),
(224, 3237, '1', '2', 'Thermal Paper Roll'),
(224, 3238, '2', '2', '2 1/4 x 150\'\r\n48 GSM'),
(224, 3239, '3', '2', '50'),
(224, 3240, '4', '2', ''),
(224, 3241, '5', '2', ''),
(224, 3242, '0', '3', '3'),
(224, 3243, '1', '3', 'Thermal Paper Roll'),
(224, 3244, '2', '3', '2 1/4 x 50\'\r\n48 GSM'),
(224, 3245, '3', '3', '50'),
(224, 3246, '4', '3', ''),
(224, 3247, '5', '3', ''),
(224, 3248, '0', '4', '4'),
(224, 3249, '1', '4', 'Thermal Paper Roll'),
(224, 3250, '2', '4', '2 1/4 x 85\'\r\n48 GSM'),
(224, 3251, '3', '4', '50'),
(224, 3252, '4', '4', ''),
(224, 3253, '5', '4', ''),
(224, 3254, '0', '5', ''),
(224, 3255, '1', '5', ''),
(224, 3256, '2', '5', ''),
(224, 3257, '3', '5', ''),
(224, 3258, '4', '5', ''),
(224, 3259, '5', '5', ''),
(225, 3260, '0', '0', 'Sr. No.'),
(225, 3261, '1', '0', 'Item Code'),
(225, 3262, '2', '0', 'Item Description'),
(225, 3263, '3', '0', 'Quantity'),
(225, 3264, '4', '0', 'Price'),
(225, 3265, '5', '0', 'Remark'),
(225, 3266, '0', '1', ''),
(225, 3267, '1', '1', ''),
(225, 3268, '2', '1', ''),
(225, 3269, '3', '1', ''),
(225, 3270, '4', '1', ''),
(225, 3271, '5', '1', ''),
(225, 3272, '0', '2', ''),
(225, 3273, '1', '2', ''),
(225, 3274, '2', '2', ''),
(225, 3275, '3', '2', ''),
(225, 3276, '4', '2', ''),
(225, 3277, '5', '2', ''),
(226, 3278, '0', '0', ' Sr No'),
(226, 3279, '1', '0', 'Description '),
(226, 3280, '2', '0', 'Qty '),
(226, 3281, '3', '0', 'Rate '),
(226, 3282, '0', '1', ' 1.'),
(226, 3283, '1', '1', 'Customized Hologram Master  \r\nSize:- 21mm X 21mm'),
(226, 3284, '2', '1', ' 1'),
(226, 3285, '3', '1', ' 22750/-'),
(228, 3310, '0', '0', 'Sr. No.'),
(228, 3311, '1', '0', 'Item Code'),
(228, 3312, '2', '0', 'Item Description'),
(228, 3313, '3', '0', 'Quantity'),
(228, 3314, '4', '0', 'Price'),
(228, 3315, '5', '0', 'Remark'),
(228, 3316, '0', '1', '1'),
(228, 3317, '1', '1', ''),
(228, 3318, '2', '1', 'RPT Roll\r\n80 mm x 400 mtrs'),
(228, 3319, '3', '1', '500 pc'),
(228, 3320, '4', '1', '445/- + GST'),
(228, 3321, '5', '1', ''),
(228, 3322, '0', '2', ''),
(228, 3323, '1', '2', ''),
(228, 3324, '2', '2', ''),
(228, 3325, '3', '2', ''),
(228, 3326, '4', '2', ''),
(228, 3327, '5', '2', ''),
(227, 3328, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', ' Sr No'),
(227, 3329, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', 'Desciption '),
(227, 3330, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', 'Quantity'),
(227, 3331, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', 'Rate per lot'),
(227, 3332, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', ' 1.'),
(227, 3333, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'NECS Forms\r\nSize:8.5\'\' x 11\'\' x 1\r\nPaper: MICR 95 GSM\r\nFront & Back Black  Col '),
(227, 3334, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', ' 1000 Sheets'),
(227, 3335, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', '7500/- per lot '),
(229, 3336, '0', '0', ' Sr No'),
(229, 3337, '1', '0', 'Description '),
(229, 3338, '2', '0', 'Quantity '),
(229, 3339, '3', '0', 'Rate '),
(229, 3340, '0', '1', ' 1.'),
(229, 3341, '1', '1', 'Record Slips\r\nSize: 9 x 3.67\r\n '),
(229, 3342, '2', '1', '15000 pcs '),
(229, 3343, '3', '1', '0.35/- per pc '),
(230, 3344, '0', '0', ' Sr No'),
(230, 3345, '1', '0', 'Description '),
(230, 3346, '2', '0', 'Quantity '),
(230, 3347, '3', '0', 'Rate '),
(230, 3348, '0', '1', ' 1.'),
(230, 3349, '1', '1', 'Record Slips\r\nSize: 9 x 3.67\r\n '),
(230, 3350, '2', '1', '15000 pcs '),
(230, 3351, '3', '1', '0.35/- per pc '),
(231, 3352, '0', '0', ' Sr No'),
(231, 3353, '1', '0', 'Description '),
(231, 3354, '2', '0', 'Quantity '),
(231, 3355, '3', '0', 'Rate '),
(231, 3356, '0', '1', ' 1.'),
(231, 3357, '1', '1', ' Answer Book -40 pages\r\nSize:210 mm X 325 mm\r\nPaper:70 GSM\r\nPrint: 2 Col, Thread Stitching'),
(231, 3358, '2', '1', ' 10000 pcs'),
(231, 3359, '3', '1', ' 14.75/- per pc'),
(231, 3360, '0', '2', ' 2.'),
(231, 3361, '1', '2', ' Answer Book -12 pages\r\nSize:210 mm X 340 mm\r\nPaper:70 GSM\r\nPrint: 2 Col, Thread Stitching\r\n'),
(231, 3362, '2', '2', ' 10000 pcs'),
(231, 3363, '3', '2', ' 5.25/- per pc'),
(232, 3364, '0', '0', 'Sr. No.'),
(232, 3365, '1', '0', 'Item Code'),
(232, 3366, '2', '0', 'Item Description'),
(232, 3367, '3', '0', 'Quantity'),
(232, 3368, '4', '0', 'Price'),
(232, 3369, '5', '0', 'Remark'),
(232, 3370, '0', '1', '1'),
(232, 3371, '1', '1', ''),
(232, 3372, '2', '1', 'Examination Poly Bags\r\nLength 18.2” x width 14”\r\n-	Have seal on top to allow sealing after packing \r\n-	Any Color \r\n'),
(232, 3373, '3', '1', '2000'),
(232, 3374, '4', '1', '2000 USD Lot'),
(232, 3375, '5', '1', ''),
(232, 3376, '0', '2', ''),
(232, 3377, '1', '2', ''),
(232, 3378, '2', '2', ''),
(232, 3379, '3', '2', ''),
(232, 3380, '4', '2', ''),
(232, 3381, '5', '2', ''),
(233, 3398, '\'0\'', '\'0\'', ' Sr No'),
(233, 3399, '\'1\'', '\'0\'', 'Description '),
(233, 3400, '\'2\'', '\'0\'', ' Quantity'),
(233, 3401, '\'3\'', '\'0\'', 'Rate '),
(233, 3402, '\'0\'', '\'1\'', ' 1'),
(233, 3403, '\'1\'', '\'1\'', ' Pre Printed FD Receipt\r\nSize: 8.5\'\' X 11\'\'\r\nPaper: 105 GSM \r\nparchment paper\r\nFront side Multi Col\r\nBack Side Single col\r\nPrinting with Foil & numbering'),
(233, 3404, '\'2\'', '\'1\'', ' 100000 pcs'),
(233, 3405, '\'3\'', '\'1\'', ' 1.80/- per pc'),
(234, 3454, '\'\'\'\'0\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' Sr.no'),
(234, 3455, '\'\'\'\'1\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' Description'),
(234, 3456, '\'\'\'\'2\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' Quantity'),
(234, 3457, '\'\'\'\'3\'\'\'\'', '\'\'\'\'0\'\'\'\'', ' Rate'),
(234, 3458, '\'\'\'\'0\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 1'),
(234, 3459, '\'\'\'\'1\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' Thermal Roll\r\nsize – 79mm x 50 mtrs\r\npaper: 50GSM\r\nsingle col printing'),
(234, 3460, '\'\'\'\'2\'\'\'\'', '\'\'\'\'1\'\'\'\'', ' 500 Rolls'),
(234, 3461, '\'\'\'\'3\'\'\'\'', '\'\'\'\'1\'\'\'\'', '48/- per roll'),
(234, 3462, '\'\'\'\'0\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 2'),
(234, 3463, '\'\'\'\'1\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' Thermal Roll\r\nsize – 79mm x 65 mtrs\r\npaper: 50GSM\r\nsingle col printing'),
(234, 3464, '\'\'\'\'2\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 500 Rolls'),
(234, 3465, '\'\'\'\'3\'\'\'\'', '\'\'\'\'2\'\'\'\'', ' 58/-per roll'),
(236, 3594, '0', '0', ' SR.NO'),
(236, 3595, '1', '0', ' ITEM'),
(236, 3596, '2', '0', ' QUANTITY'),
(236, 3597, '3', '0', ' RATE'),
(236, 3598, '0', '1', ' 1.'),
(236, 3599, '1', '1', 'Internet Banking Pin Mailer\r\nSize : 6.5 inch x 4 inch x 3 ply'),
(236, 3600, '2', '1', ' 25,000/'),
(236, 3601, '3', '1', ' Rs.1.85/- (Freight + 18%\r\nGST Inclusive)'),
(237, 3602, '0', '0', 'Sr. No.'),
(237, 3603, '1', '0', 'Item Code'),
(237, 3604, '2', '0', 'Item Description'),
(237, 3605, '3', '0', 'Quantity'),
(237, 3606, '4', '0', 'Price'),
(237, 3607, '5', '0', 'Remark'),
(237, 3608, '0', '1', '1'),
(237, 3609, '1', '1', 'Retail Paper\r\n2.	Width:- 80.0 +0/-0.5mm\r\n3.	Roll Diameter: 83mm max (80 mtrs)\r\n          Thickness : 0.05-0.1mm\r\nWeight:- 52g/m² (KT 55 PF)\r\nCore: 12mm\r\nsmoothness (Bekk): min 400 sec. for thermal sensitive side\r\nCoating: Outside of paper roll\r\n'),
(237, 3610, '2', '1', ''),
(237, 3611, '3', '1', '         150 Rolls'),
(237, 3612, '4', '1', '95/-'),
(237, 3613, '5', '1', ''),
(237, 3614, '0', '2', '2.'),
(237, 3615, '1', '2', 'Retail Paper\r\n5.	Width:- 80.0 +0/-0.5mm\r\n6.	Roll Diameter: 80mm max (80 mtrs)\r\n          Thickness : 0.05-0.1mm\r\nWeight:- 52g/m² (KT 55 FA)\r\nCore: 12mm\r\nsmoothness (Bekk): min 400 sec. for thermal sensitive side\r\nCoating: Outside of paper roll\r\n'),
(237, 3616, '2', '2', ''),
(237, 3617, '3', '2', '150 Rolls'),
(237, 3618, '4', '2', '94/-'),
(237, 3619, '5', '2', ''),
(237, 3620, '0', '3', '3'),
(237, 3621, '1', '3', '7.	Retail Blue4rest Paper\r\n8.	Width:- 80.0 +0/-0.5mm\r\n9.	Roll Diameter: 83mm max\r\n          Thickness : 0.05-0.1mm\r\nWeight:- 52g/m² (KT 55 FA)\r\nCore: 12mm\r\nsmoothness (Bekk): min 400 sec. for thermal sensitive side\r\nCoating: Outside of paper rolls\r\n'),
(237, 3622, '2', '3', ''),
(237, 3623, '3', '3', '50 Rolls'),
(237, 3624, '4', '3', '140/-'),
(237, 3625, '5', '3', ''),
(237, 3626, '0', '4', '4'),
(237, 3627, '1', '4', '10.	Banking  Paper\r\n11.	Paper Width:- 80,0 mm / -0.5 mm (594 mtrs)\r\n12.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 203mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),
(237, 3628, '2', '4', ''),
(237, 3629, '3', '4', '250 Rolls'),
(237, 3630, '4', '4', '755/- per pc + GST + Transport'),
(237, 3631, '5', '4', ''),
(237, 3632, '0', '5', '5'),
(237, 3633, '1', '5', 'Banking  Paper\r\n1.	Paper Width:- 80,0 mm / -0.5 mm, 1000 mtres\r\n2.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 260mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),
(237, 3634, '2', '5', ''),
(237, 3635, '3', '5', '10 Rolls'),
(237, 3636, '4', '5', '1468/- per pc + GST'),
(237, 3637, '5', '5', ''),
(237, 3638, '0', '5', '5'),
(237, 3639, '1', '5', 'Banking  Paper\r\n1.	Paper Width:- 80,0 mm / -0.5 mm, 1000 mtres\r\n2.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 260mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),
(237, 3640, '2', '5', ''),
(237, 3641, '3', '5', '10 Rolls'),
(237, 3642, '4', '5', '1468/- per pc + GST'),
(237, 3643, '5', '5', ''),
(237, 3644, '0', '5', '5'),
(237, 3645, '1', '5', 'Banking  Paper\r\n1.	Paper Width:- 80,0 mm / -0.5 mm, 1000 mtres\r\n2.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 260mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),
(237, 3646, '2', '5', ''),
(237, 3647, '3', '5', '10 Rolls'),
(237, 3648, '4', '5', '1468/- per pc + GST'),
(237, 3649, '5', '5', ''),
(238, 3650, '0', '0', 'Sr. No.'),
(238, 3651, '1', '0', 'Item Code'),
(238, 3652, '2', '0', 'Item Description'),
(238, 3653, '3', '0', 'Quantity'),
(238, 3654, '4', '0', 'Price'),
(238, 3655, '5', '0', 'Remark'),
(238, 3656, '0', '1', '1'),
(238, 3657, '1', '1', 'Grade Cards (Mark Sheets) in A4 size on 130gsm non-tearable white paper, printing on both sides – front 4 color and back 1 color\r\nSecurity Features:\r\n1. Serial No\r\n2. Invisible UV\r\n3. Copy void pantograph\r\n4. Gold foil\r\n5. Micro line\r\n6. Guilloche Design   \r\n'),
(238, 3658, '2', '1', ''),
(238, 3659, '3', '1', '30,000'),
(238, 3660, '4', '1', '11.50 per Marksheet Ex. Factory'),
(238, 3661, '5', '1', ''),
(239, 3662, '0', '0', 'Sr. No.'),
(239, 3663, '1', '0', 'Item Code'),
(239, 3664, '2', '0', 'Item Description'),
(239, 3665, '3', '0', 'Quantity'),
(239, 3666, '4', '0', 'Price'),
(239, 3667, '5', '0', 'Remark'),
(239, 3668, '0', '1', '1'),
(239, 3669, '1', '1', ''),
(239, 3670, '2', '1', '1.	Degree Certificate- A4 size\r\n2.	120 GSM UV Thread, 4 color Front/ 1 back\r\n-	Inv. UV\r\n-	Anti Copy\r\n-	MICR Ṇo. + Pantitrating No. \r\n-	QR Code\r\n-	Microline\r\n-	Gullish\r\n-	Thermo chronic ink\r\n-	Foil stamping\r\n-	Florosent Ink\r\n'),
(239, 3671, '3', '1', '100\r\n650\r\n750'),
(239, 3672, '4', '1', '295/-PER PC\r\n70/- PER PC\r\n68/-PER PC'),
(239, 3673, '5', '1', ''),
(239, 3674, '0', '2', '2'),
(239, 3675, '1', '2', ''),
(239, 3676, '2', '2', 'Degree Certificate\r\n3.	160 GSM with currency strip + UV Thread\r\n4.	4 color front/ 1 back\r\n-	Inv. UV\r\n-	Anti Copy\r\n-	MICR Ṇo. + Pantitrating No. \r\n-	QR Code\r\n-	Microline\r\n-	Gullish\r\n-	Thermo chronic ink\r\n-	Foil stamping\r\n-	Florosent Ink\r\n'),
(239, 3677, '3', '2', '100\r\n650\r\n750'),
(239, 3678, '4', '2', '325/- PER PC\r\n78/- PER PC\r\n76/- PER PC'),
(239, 3679, '5', '2', ''),
(235, 3680, '\'\'\'0\'\'\'', '\'\'\'0\'\'\'', ' Sr.no'),
(235, 3681, '\'\'\'1\'\'\'', '\'\'\'0\'\'\'', ' Description'),
(235, 3682, '\'\'\'2\'\'\'', '\'\'\'0\'\'\'', ' Quantity'),
(235, 3683, '\'\'\'3\'\'\'', '\'\'\'0\'\'\'', ' Rate'),
(235, 3684, '\'\'\'0\'\'\'', '\'\'\'1\'\'\'', ' 1'),
(235, 3685, '\'\'\'1\'\'\'', '\'\'\'1\'\'\'', 'Thermal Roll\r\nSize: 79mm x 50mtrs \r\npaper:55 GSM\r\nPACKING 50 ROLLS PER BOX\r\n'),
(235, 3686, '\'\'\'2\'\'\'', '\'\'\'1\'\'\'', ' 500 Rolls'),
(235, 3687, '\'\'\'3\'\'\'', '\'\'\'1\'\'\'', '43/-  PER ROLL'),
(235, 3688, '\'\'\'0\'\'\'', '\'\'\'2\'\'\'', '2 '),
(235, 3689, '\'\'\'1\'\'\'', '\'\'\'2\'\'\'', 'Thermal Roll\r\nSize: 79mm x 30mtrs \r\npaper:55 GSM\r\nPACKING 50 ROLLS PER BOX\r\n'),
(235, 3690, '\'\'\'2\'\'\'', '\'\'\'2\'\'\'', '  500 Rolls'),
(235, 3691, '\'\'\'3\'\'\'', '\'\'\'2\'\'\'', ' 28/-  PER ROLL'),
(235, 3692, '\'\'\'0\'\'\'', '\'\'\'3\'\'\'', ' 3'),
(235, 3693, '\'\'\'1\'\'\'', '\'\'\'3\'\'\'', 'Thermal Roll\r\nSize: 57mm x 30mtrs \r\npaper:55 GSM\r\nPACKING 100 ROLLS PER BOX\r\n'),
(235, 3694, '\'\'\'2\'\'\'', '\'\'\'3\'\'\'', '  500 Rolls'),
(235, 3695, '\'\'\'3\'\'\'', '\'\'\'3\'\'\'', ' 21/- PER ROLL'),
(240, 3696, '0', '0', ' sr.no'),
(240, 3697, '1', '0', ' Item'),
(240, 3698, '2', '0', ' quantity '),
(240, 3699, '3', '0', ' rate'),
(240, 3700, '0', '1', ' 1'),
(240, 3701, '1', '1', ' blank pinmailer  '),
(240, 3702, '2', '1', ' 2000 pin'),
(240, 3703, '3', '1', ' 2.50/- per pc');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_masters`
--

CREATE TABLE `quotation_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `company_id` bigint(20) DEFAULT NULL,
  `sales_person_id` bigint(20) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `prospect_id` bigint(20) DEFAULT NULL,
  `customer_is` tinyint(4) DEFAULT NULL COMMENT '0-Existing,1-New',
  `date` date DEFAULT NULL,
  `attention_of` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_count` int(11) DEFAULT '0',
  `currency_id` bigint(20) DEFAULT NULL COMMENT 'tbl_currency Table id',
  `features_is` tinyint(4) DEFAULT '0' COMMENT '0-No,1-Yes',
  `quotation_category` bigint(20) DEFAULT NULL,
  `term_title` text COLLATE utf8mb4_unicode_ci,
  `term_value` text COLLATE utf8mb4_unicode_ci,
  `email_to` tinyint(4) DEFAULT '0' COMMENT '0-No,1-Yes',
  `email_ids` text COLLATE utf8mb4_unicode_ci,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotation_masters`
--

INSERT INTO `quotation_masters` (`id`, `unique_id`, `company_id`, `sales_person_id`, `customer_id`, `prospect_id`, `customer_is`, `date`, `attention_of`, `subject`, `reference`, `product_count`, `currency_id`, `features_is`, `quotation_category`, `term_title`, `term_value`, `email_to`, `email_ids`, `pdf`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'QU/2023-2024/SSSL/01', 49, 41, 233, 4, 0, '2023-04-04', 'Mr Swapnil', 'Quotation for SeQR Loyalty', 'SS/001', 1, NULL, 0, 4, '42', '96', 1, 'bdm@scube.net.in', 'No PDF', NULL, 41, NULL, NULL, '2023-04-03 23:38:19', '2023-04-03 23:38:19'),
(2, 'QU/2023-2024/DIPL/01', 47, 20, 15, 0, 0, '2023-04-13', 'ARJUN PADIYAR', 'Quotation for Pin Mailer', 'Mail', 1, NULL, 0, 1, '2,5', '5', 0, '', 'asb', NULL, 25, 9, NULL, '2023-04-04 03:46:04', '2023-04-13 05:06:21'),
(3, 'QU/2023-2024/DIPL/02', 47, 20, 245, 0, 0, '2023-04-04', 'VISHAL MAHESHWARI', 'Quotation for Pin Mailer', 'Mail', 1, NULL, 0, 1, '2,5', '5', 0, '', 'No PDF', '2023-04-04 03:47:36', 25, NULL, 25, '2023-04-04 03:46:40', '2023-04-04 03:47:36'),
(4, 'QU/2023-2024/SSSL/02', 49, 39, 0, 0, 1, '2023-04-12', 'Mr. Shende', 'Quatation', 'G. H. Raisoni College of Engineering & Technology', 1, NULL, 0, 1, '1', '1', 0, 'makrand.pendse@scube.net.in', 'No PDF', NULL, 39, NULL, NULL, '2023-04-12 09:12:14', '2023-04-12 09:12:14'),
(5, 'QU/2023-2024/SSSL/03', 49, 39, 0, 0, 1, '2023-04-12', 'Mr. Shende', 'Quatation', 'G. H. Raisoni College of Engineering & Technology', 1, NULL, 0, 1, '1', '1', 0, 'makrand.pendse@scube.net.in', 'No PDF', '2023-04-12 09:15:00', 39, NULL, 39, '2023-04-12 09:12:18', '2023-04-12 09:15:00'),
(6, 'QU/2023-2024/SSSL/03', 49, 39, 0, 0, 1, '2023-04-12', 'Mr. Mandavgade', 'Quatation', 'As per enquiry', 1, NULL, 0, 1, '1', '3', 0, 'makrand.pendse@scube.net.in', 'No PDF', NULL, 39, NULL, NULL, '2023-04-12 09:18:59', '2023-04-12 09:18:59'),
(7, 'QU/2023-2024/DIPL/02', 47, 20, 15, 0, 0, '2023-04-13', 'ARJUN PADIYAR', 'Quotation for Pin Mailer', 'Mail', 1, NULL, 0, 1, '1,2,4,5,6', '114', 0, '', 'asb', '2023-04-13 05:24:06', 25, 9, 9, '2023-04-13 04:52:41', '2023-04-13 05:24:06'),
(8, 'QU/2033-2034/DIPL/03', 47, 20, 15, 0, 0, '2023-04-13', 'ARJUN PADIYAR', 'Quotation for Pin Mailer', 'Mail', 1, NULL, 0, 1, '1,2,4,5,6', '114', 0, '', 'asb', '2023-04-13 05:24:02', 25, 9, 9, '2023-04-13 05:21:10', '2023-04-13 05:24:02'),
(9, 'QU/2023-2024/DIPL/02', 47, 23, 10, 0, 0, '2023-04-15', 'Sheela Gautam', 'quotation for Registration and Enrolment Form', 'email dated 11.04.23', 1, NULL, 0, 1, '1,2,4,5,6', '114', 0, '', 'asb', NULL, 35, 35, NULL, '2023-04-15 03:03:22', '2023-04-15 04:04:14'),
(10, 'QU/2033-2034/DIPL/03', 47, 23, 10, 0, 0, '2023-04-15', 'Sheela Gautam', 'quotation for Registration and Enrolment Form', 'email dated 11.04.23', 1, NULL, 0, 1, '1,2,4,5,6', '114', 0, '', 'asb', '2023-04-15 04:05:49', 35, 35, 35, '2023-04-15 04:05:39', '2023-04-15 04:05:49'),
(11, 'QU/2023-2024/DIPL/03', 47, 20, 9, 0, 0, '2023-04-15', 'nisha.khandibharad', 'QUATATION FOR UBI Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '2,5,7', '114', 0, '', 'asb', NULL, 25, 25, NULL, '2023-04-15 04:46:01', '2023-04-15 04:50:18'),
(12, 'QU/2043-2044/DIPL/04', 47, 23, 10, 0, 0, '2023-04-17', 'Sheela Gautam', 'quotation for Registration and Enrolment Form', 'email dated 11.04.23', 1, NULL, 0, 1, '1,2,4,5,6', '1,5,12,15,114', 0, '', 'asb', NULL, 35, 35, NULL, '2023-04-15 04:48:26', '2023-04-17 00:11:21'),
(13, 'QU/2023-2024/DIPL/05', 47, 20, 9, 0, 0, '2023-04-15', 'nisha.khandibharad', 'QUATATION FOR UBI Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '2,5,7', '5', 0, '', 'No PDF', NULL, 25, NULL, NULL, '2023-04-15 04:48:28', '2023-04-15 04:48:28'),
(14, 'QU/2023-2024/DIPL/06', 47, 20, 9, 0, 0, '2023-04-18', 'Gaurav Tawade', 'Quotation For Stationery LOLC Bank PIN Mailer', 'Mail', 1, NULL, 0, 1, '1,2,4,5', '3,5,12,114', 0, '', 'asb', NULL, 25, 9, NULL, '2023-04-18 00:42:12', '2023-04-18 00:51:54'),
(15, 'QU/2023-2024/DIPL/07', 47, 23, 16, 0, 0, '2023-04-18', 'Babu Kuttapan', 'Quotation for continuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5,6', '4,5,12,15,114', 0, '', 'No PDF', NULL, 35, NULL, NULL, '2023-04-18 03:01:38', '2023-04-18 03:01:38'),
(16, 'QU/2023-2024/DIPL/08', 47, 23, 16, 0, 0, '2023-04-18', 'Babu Kuttapan', 'Quotation for continuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5,6', '4,5,12,15,114', 0, '', 'No PDF', '2023-04-18 03:05:29', 35, NULL, 35, '2023-04-18 03:01:43', '2023-04-18 03:05:29'),
(17, 'QU/2023-2024/DIPL/09', 47, 23, 16, 0, 0, '2023-04-18', 'Babu Kuttapan', 'Quotation for continuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5,6', '4,5,12,15,114', 0, '', 'No PDF', '2023-04-18 03:05:39', 35, NULL, 35, '2023-04-18 03:02:06', '2023-04-18 03:05:39'),
(18, 'QU/2023-2024/DIPL/10', 47, 23, 16, 0, 0, '2023-04-18', 'Babu Kuttapan', 'Quotation for continuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5,6', '4,5,12,15,114', 0, '', 'No PDF', '2023-04-18 03:05:42', 35, NULL, 35, '2023-04-18 03:02:07', '2023-04-18 03:05:42'),
(19, 'QU/2023-2024/DIPL/11', 47, 23, 16, 0, 0, '2023-04-18', 'Babu Kuttapan', 'Quotation for continuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5,6', '4,5,12,15,114', 0, '', 'No PDF', '2023-04-18 03:05:32', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:32'),
(20, 'QU/2023-2024/DIPL/12', 47, 23, 16, 0, 0, '2023-04-18', 'Babu Kuttapan', 'Quotation for continuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5,6', '4,5,12,15,114', 0, '', 'No PDF', '2023-04-18 03:05:23', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:23'),
(21, 'QU/2023-2024/DIPL/08', 47, 23, 17, 0, 0, '2023-04-18', 'rakesh shah', 'Quotation for Contuous stationary', 'Verbal', 1, NULL, 0, 1, '1,2,4,5', '114', 0, '', 'No PDF', NULL, 35, NULL, NULL, '2023-04-18 04:48:23', '2023-04-18 04:48:23'),
(22, 'QU/2023-2024/DIPL/09', 47, 20, 21, 0, 0, '2023-04-19', 'Arati Gavade', 'QUATATION FOR EBIX DEBIT PINMAILER Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '1,5', '3,114', 0, '', 'No PDF', '2023-04-19 05:53:23', 25, NULL, 25, '2023-04-19 00:10:04', '2023-04-19 05:53:23'),
(23, 'QU/2023-2024/DIPL/10', 47, 20, 21, 0, 0, '2023-04-19', 'Arati Gavade', 'QUATATION FOR EBIX DEBIT PINMAILER Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '1,5', '3,114', 0, '', 'No PDF', '2023-04-19 05:53:43', 25, NULL, 25, '2023-04-19 00:10:07', '2023-04-19 05:53:43'),
(24, 'QU/2023-2024/DIPL/11', 47, 20, 21, 0, 0, '2023-04-19', 'Arati Gavade', 'QUATATION FOR EBIX DEBIT PINMAILER Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '1,5', '3,114', 0, '', 'No PDF', '2023-04-19 05:53:39', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:39'),
(25, 'QU/2023-2024/DIPL/12', 47, 20, 21, 0, 0, '2023-04-19', 'Arati Gavade', 'QUATATION FOR EBIX DEBIT PINMAILER Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '1,5', '3,114', 0, '', 'No PDF', '2023-04-19 05:53:29', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:29'),
(26, 'QU/2023-2024/DIPL/13', 47, 20, 21, 0, 0, '2023-04-19', 'Arati Gavade', 'QUATATION FOR EBIX DEBIT PINMAILER Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '1,5', '3,114', 0, '', 'No PDF', '2023-04-19 05:53:34', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:34'),
(27, 'QU/2023-2024/DIPL/14', 47, 20, 21, 0, 0, '2023-04-19', 'Arati Gavade', 'QUATATION FOR EBIX DEBIT PINMAILER Welcome Letter & Envelope', 'Mail', 1, NULL, 0, 1, '1,5', '3,114', 0, '', 'No PDF', NULL, 25, NULL, NULL, '2023-04-19 00:10:10', '2023-04-19 00:10:10'),
(28, 'QU/2023-2024/DIPL/15', 47, 23, 0, 0, 0, '2023-04-19', 'Felix Mutinda', 'Quotation for MICR Paper', 'email dated 18.04.23', 1, NULL, 0, 2, '17,18,19,20,22,51,53,54', '51,119,121,122,124,125', 0, '', 'No PDF', NULL, 35, NULL, NULL, '2023-04-19 03:09:05', '2023-04-19 03:09:05'),
(29, 'QU/2023-2024/DIPL/11', 47, 20, 21, 0, 0, '2023-04-22', 'Arati Gavade', 'QUOTATION FOR COMMERCIALS KIT', 'Mail', 1, NULL, 0, 1, '2,4,5', '5,113,114', 0, '', 'No PDF', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(30, 'QU/2023-2024/DIPL/12', 47, 23, 0, 0, 0, '2023-04-19', 'Felix Mutinda', 'Quotation for MICR Paper', 'email dated 18.04.23', 1, NULL, 0, 2, '17,18,19,20,22,51,53,54', '51,119,121,122,124,125', 0, '', 'No PDF', NULL, 35, NULL, NULL, '2023-04-22 01:34:11', '2023-04-22 01:34:11'),
(31, 'QU/2023-2024/DIPL/13', 47, 20, 24, 0, 0, '2023-04-27', 'Anant Surde (Asst.Manager)', 'Quotation for Pin Mailer', 'Mail', 1, NULL, 0, 1, '1,2,5,7', '3,5,114', 0, '', 'No PDF', NULL, 25, NULL, NULL, '2023-04-27 05:42:57', '2023-04-27 05:42:57'),
(32, 'QU/2023-2024/SSSL/04', 49, 23, 25, 0, 0, '2023-04-27', 'MR. PRAVIN', 'QUOTATION FOR SEQR DOC', 'Verbal', 2, NULL, 0, 1, '1,2,4,5,7', '1,3,8,12,114', 0, '', 'No PDF', NULL, 35, NULL, NULL, '2023-04-27 06:11:30', '2023-04-27 06:11:30'),
(33, 'QU/2023-2024/SSSL/05', 49, 23, 25, 0, 0, '2023-04-27', 'abc', 'Quotation for Challan', 'Verbal', 2, NULL, 0, 1, '1,5,7', '1,3,114', 0, '', 'No PDF', NULL, 35, NULL, NULL, '2023-04-27 06:19:10', '2023-04-27 06:19:10'),
(34, 'QU/2023-2024/DIPL/14', 47, 20, 15, 0, 0, '2023-04-13', 'ARJUN PADIYAR', 'Quotation for Pin Mailer', 'Mail', 1, NULL, 0, 1, '2,5', '5', 0, '', 'asb', NULL, 25, 9, NULL, '2023-04-27 06:57:13', '2023-04-27 06:57:13'),
(35, 'QU/2023-2024/DIPL/15', 47, 20, 27, 0, 0, '2023-05-02', 'SANDEEP ROYCHOWDHURY', 'Quotation for Pin Mailer', 'Mail 02.05.2023', 1, NULL, 0, 1, '5,2', '5,114', 1, 'rakesh@devharshinfotech.com', 'asb', NULL, 25, 25, NULL, '2023-05-02 04:26:44', '2023-05-02 04:48:24'),
(36, 'QU/2023-2024/DIPL/16', 47, 20, 27, 0, 0, '2023-05-02', 'SANDEEP ROYCHOWDHURY', 'Quotation for Pin Mailer', 'Mail 02.05.2023', 1, NULL, 0, 1, '5,2', '5,114', 1, 'rakesh@devharshinfotech.com', 'asb', NULL, 25, 25, NULL, '2023-05-02 05:13:29', '2023-05-02 05:13:29'),
(37, 'QU/2023-2024/DIPL/17', 47, 20, 4, 0, 0, '2023-05-02', 'SANNAM SHIRISHA', 'Test', 'test', 1, NULL, 0, 1, '5', '114', 0, '', 'No PDF', NULL, 9, NULL, NULL, '2023-05-02 05:26:16', '2023-05-02 05:26:16'),
(38, 'QU/2023-2024/DIPL/18', 47, 20, 5, 0, 0, '2023-05-02', 'deepali', 'test', 'test', 1, NULL, 0, 1, '5', '114', 0, '', 'asb', NULL, 9, 9, NULL, '2023-05-02 05:29:33', '2023-05-02 05:31:05'),
(39, 'QU/2023-2024/DIPL/19', 47, 20, 28, 0, 0, '2023-05-03', 'NITESH JAIN', 'Quotation for Entertainment Tickets', 'Mail', 1, NULL, 0, 1, '2,5,6', '5,114,115', 0, '', 'No PDF', NULL, 25, NULL, NULL, '2023-05-03 07:12:53', '2023-05-03 07:12:53'),
(40, 'QU/2023-2024/DIPL/20', 47, 20, 28, 0, 0, '2023-05-03', 'NITESH JAIN', 'Quotation for Entertainment Tickets', 'Mail', 1, NULL, 0, 1, '2,5,6', '5,114,115', 0, '', 'No PDF', '2023-05-03 23:37:03', 25, NULL, 9, '2023-05-03 23:36:31', '2023-05-03 23:37:03'),
(41, 'QU/2023-2024/DIPL/20', 47, 43, 242, 21, 0, '2023-05-04', '1', 'Quotation for SeQR Doc1', 'Verbal1', 1, NULL, 0, 1, '4,6,7,8,9', '12,14,15,16,17', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 06:06:37', '2023-05-04 06:06:37'),
(42, 'QU/2023-2024/DIPL/21', 47, 43, 242, 21, 0, '2023-05-04', '1', 'Quotation for SeQR Doc1', 'Verbal1', 1, NULL, 0, 4, '41,43,44,45', '95,97,98,99', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 06:53:04', '2023-05-04 06:53:04'),
(43, 'QU/2023-2024/SSSL/06', 49, 20, 237, 6, 0, '2023-05-04', 'Deepali', 'Quotation for SeQR Doc', 'Verbal1', 1, NULL, 0, 2, '14,15,16', '43,44', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 07:23:13', '2023-05-04 07:23:13'),
(44, 'QU/2023-2024/DIPL/22', 47, 41, 242, 19, 0, '2023-05-04', '1', 'Quotation for SeQR Doc', 'Voluptate ipsam dolo', 1, NULL, 0, 4, '41,42,43,44,45', '95,96,97,98,99', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 07:32:13', '2023-05-04 07:32:13'),
(45, 'QU/2023-2024/SSSL/07', 49, 43, 242, NULL, 0, '2023-05-04', '1', 'Quotation for SeQR Doc', 'Verbal1', 1, NULL, 0, 4, '45,46,48', '101,102,103,105', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 07:34:55', '2023-05-04 07:34:55'),
(46, 'QU/2023-2024/DIPL/23', 47, 42, 241, NULL, 0, '2023-05-05', 'vvcv', 'Quotation for SeQR Doc', '123', 1, NULL, 0, 2, '10,11,12,13', '20,21,22,23', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 23:49:14', '2023-05-04 23:49:14'),
(47, 'QU/2023-2024/SSSL/08', 49, 20, 242, 2, 0, '2023-05-05', '1', 'Quotation for SeQR Doc', 'Verbal1', 1, NULL, 0, 3, '29', '77', NULL, NULL, 'No PDF', NULL, 9, NULL, NULL, '2023-05-04 23:50:02', '2023-05-04 23:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_products`
--

CREATE TABLE `quotation_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `itmes_count` int(11) DEFAULT '0',
  `display_total` tinyint(4) DEFAULT '0' COMMENT '0-No,1-Yes',
  `sub_total` decimal(10,2) DEFAULT '0.00',
  `discount` decimal(10,2) DEFAULT '0.00',
  `cgst_id` bigint(20) DEFAULT NULL,
  `cgst` decimal(10,2) DEFAULT '0.00',
  `sgst_id` bigint(20) DEFAULT NULL,
  `sgst` decimal(10,2) DEFAULT '0.00',
  `igst_id` bigint(20) DEFAULT NULL,
  `igst` decimal(10,2) DEFAULT '0.00',
  `grand_total` decimal(10,2) DEFAULT '0.00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotation_products`
--

INSERT INTO `quotation_products` (`id`, `quotation_id`, `product_id`, `itmes_count`, `display_total`, `sub_total`, `discount`, `cgst_id`, `cgst`, `sgst_id`, `sgst`, `igst_id`, `igst`, `grand_total`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 1, 79, 1, NULL, '0.00', '0.00', NULL, '0.00', NULL, '0.00', NULL, '0.00', '0.00', NULL, 41, NULL, NULL, '2023-04-03 23:38:19', '2023-04-03 23:38:19'),
(9, 2, 1, 1, NULL, '733000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '733000.00', NULL, NULL, 9, NULL, '2023-04-13 05:12:31', '2023-04-13 05:12:31'),
(3, 3, 83, 4, NULL, '733000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '733000.00', '2023-04-04 03:47:36', 25, NULL, 25, '2023-04-04 03:46:40', '2023-04-04 03:47:36'),
(4, 4, NULL, 1, NULL, '0.00', '0.00', 1, '0.00', 1, '0.00', NULL, '0.00', '0.00', NULL, 39, NULL, NULL, '2023-04-12 09:12:14', '2023-04-12 09:12:14'),
(5, 5, NULL, 1, NULL, '0.00', '0.00', 1, '0.00', 1, '0.00', NULL, '0.00', '0.00', '2023-04-12 09:15:00', 39, NULL, 39, '2023-04-12 09:12:18', '2023-04-12 09:15:00'),
(6, 6, NULL, 1, NULL, '125000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '125000.00', NULL, 39, NULL, NULL, '2023-04-12 09:18:59', '2023-04-12 09:18:59'),
(10, 7, 2, 1, NULL, '160000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160000.00', '2023-04-13 05:24:06', NULL, 9, 9, '2023-04-13 05:20:05', '2023-04-13 05:24:06'),
(11, 8, 2, 1, NULL, '160000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160000.00', '2023-04-13 05:24:02', NULL, 9, 9, '2023-04-13 05:21:10', '2023-04-13 05:24:02'),
(15, 9, 2, 2, NULL, '1638000.00', '0.00', NULL, '0.00', NULL, '0.00', 1, '0.00', '1638000.00', NULL, NULL, 35, NULL, '2023-04-15 04:05:33', '2023-04-15 04:05:33'),
(16, 10, 2, 2, NULL, '1638000.00', '0.00', NULL, '0.00', NULL, '0.00', 1, '0.00', '1638000.00', '2023-04-15 04:05:49', NULL, 35, 35, '2023-04-15 04:05:39', '2023-04-15 04:05:49'),
(20, 11, 2, 1, NULL, '102600.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102600.00', NULL, NULL, 25, NULL, '2023-04-15 04:50:18', '2023-04-15 04:50:18'),
(21, 12, 2, 2, NULL, '1620000.00', '0.00', NULL, '0.00', NULL, '0.00', 1, '0.00', '1620000.00', NULL, NULL, 35, NULL, '2023-04-17 00:11:21', '2023-04-17 00:11:21'),
(19, 13, 2, 4, NULL, '102600.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102600.00', NULL, 25, NULL, NULL, '2023-04-15 04:48:28', '2023-04-15 04:48:28'),
(23, 14, 2, 1, NULL, '23000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23000.00', NULL, NULL, 9, NULL, '2023-04-18 00:51:54', '2023-04-18 00:51:54'),
(24, 15, 2, 2, NULL, '61180000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61180000.00', NULL, 35, NULL, NULL, '2023-04-18 03:01:38', '2023-04-18 03:01:38'),
(25, 16, 2, 2, NULL, '61180000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61180000.00', '2023-04-18 03:05:29', 35, NULL, 35, '2023-04-18 03:01:43', '2023-04-18 03:05:29'),
(26, 17, 2, 2, NULL, '61180000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61180000.00', '2023-04-18 03:05:39', 35, NULL, 35, '2023-04-18 03:02:06', '2023-04-18 03:05:39'),
(27, 18, 2, 2, NULL, '61180000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61180000.00', '2023-04-18 03:05:42', 35, NULL, 35, '2023-04-18 03:02:07', '2023-04-18 03:05:42'),
(28, 19, 2, 2, NULL, '61180000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61180000.00', '2023-04-18 03:05:32', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:32'),
(29, 20, 2, 2, NULL, '61180000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '61180000.00', '2023-04-18 03:05:23', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:23'),
(30, 21, 2, 1, NULL, '93750000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '93750000.00', NULL, 35, NULL, NULL, '2023-04-18 04:48:23', '2023-04-18 04:48:23'),
(31, 22, NULL, 3, NULL, '665000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '665000.00', '2023-04-19 05:53:23', 25, NULL, 25, '2023-04-19 00:10:04', '2023-04-19 05:53:23'),
(32, 23, NULL, 3, NULL, '665000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '665000.00', '2023-04-19 05:53:43', 25, NULL, 25, '2023-04-19 00:10:07', '2023-04-19 05:53:43'),
(33, 24, NULL, 3, NULL, '665000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '665000.00', '2023-04-19 05:53:39', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:39'),
(34, 25, NULL, 3, NULL, '665000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '665000.00', '2023-04-19 05:53:29', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:29'),
(35, 26, NULL, 3, NULL, '665000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '665000.00', '2023-04-19 05:53:34', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:34'),
(36, 27, NULL, 3, NULL, '665000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '665000.00', NULL, 25, NULL, NULL, '2023-04-19 00:10:10', '2023-04-19 00:10:10'),
(37, 28, 4, 1, NULL, '65800.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65800.00', NULL, 35, NULL, NULL, '2023-04-19 03:09:05', '2023-04-19 03:09:05'),
(38, 29, 2, 6, NULL, '1337000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1337000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(39, 30, 4, 1, NULL, '65800.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '65800.00', NULL, 35, NULL, NULL, '2023-04-22 01:34:11', '2023-04-22 01:34:11'),
(40, NULL, NULL, 1, 0, '42000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '42000.00', NULL, 25, NULL, NULL, '2023-04-27 05:42:57', '2023-04-27 05:42:57'),
(41, NULL, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, NULL, NULL, '2023-04-27 06:11:30', '2023-04-27 06:11:30'),
(42, NULL, 6, 1, 0, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', NULL, 35, NULL, NULL, '2023-04-27 06:19:10', '2023-04-27 06:19:10'),
(43, 34, 1, 1, NULL, '733000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '733000.00', NULL, NULL, 9, NULL, '2023-04-27 06:57:13', '2023-04-27 06:57:13'),
(44, NULL, NULL, 1, 0, '20000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20000.00', NULL, 25, NULL, NULL, '2023-05-02 04:26:44', '2023-05-02 04:26:44'),
(45, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, '2023-05-02 05:26:16', '2023-05-02 05:26:16'),
(46, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, '2023-05-02 05:29:33', '2023-05-02 05:29:33'),
(47, NULL, 1, 1, 0, '15000.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15000.00', NULL, 25, NULL, NULL, '2023-05-03 07:12:53', '2023-05-03 07:12:53'),
(48, NULL, 83, 1, 0, '1089.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1089.00', NULL, 9, NULL, NULL, '2023-05-04 06:06:37', '2023-05-04 06:06:37'),
(49, NULL, 84, 1, 0, '484.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '484.00', NULL, 9, NULL, NULL, '2023-05-04 06:53:04', '2023-05-04 06:53:04'),
(50, NULL, 79, 1, 0, '483.78', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '483.78', NULL, 9, NULL, NULL, '2023-05-04 07:23:13', '2023-05-04 07:23:13'),
(51, 44, 82, 1, 0, '484.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '484.00', NULL, 9, NULL, NULL, '2023-05-04 07:32:13', '2023-05-04 07:32:13'),
(52, 45, 83, 1, 0, '782.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '782.00', NULL, 9, NULL, NULL, '2023-05-04 07:34:55', '2023-05-04 07:34:55'),
(53, 46, 83, 2, 0, '968.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '968.00', NULL, 9, NULL, NULL, '2023-05-04 23:49:14', '2023-05-04 23:49:14'),
(54, 47, 78, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, '2023-05-04 23:50:02', '2023-05-04 23:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_product_items`
--

CREATE TABLE `quotation_product_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_product_id` bigint(20) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `ppu` int(11) NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(8,2) NOT NULL DEFAULT '0.00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotation_product_items`
--

INSERT INTO `quotation_product_items` (`id`, `quotation_product_id`, `description`, `qty`, `ppu`, `unit`, `total`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 1, '1. Basic Description: <br>\r\n2. Size: <br>\r\n3. Paper Weight/GSM: <br>\r\n4. Paper Type: <br>\r\n 4.1. Bond: <br>\r\n 4.2. Color Center: <br>\r\n 4.3. MICR: <br>\r\n 4.4. CB: <br>\r\n 4.5. CFB: <br>\r\n 4.6. CF: <br>\r\n 4.7. SC: <br>\r\n 4.8. SCCB: <br>\r\n 4.9. Thermal: <br>\r\n 4.10. Parchment: <br>\r\n 4.11. Tear Resistant: <br>\r\n 4.12. Non-Tearable: <br>\r\n5. Front Printing: <br>\r\n6. Back Printing: <br>\r\n', 1, 1000, '1', '1000.00', NULL, 41, NULL, NULL, '2023-04-03 23:38:19', '2023-04-03 23:38:19'),
(23, 16, '1. Size: A4<br>\r\n2. Paper Weight/GSM:  80 Maplitho< br>\r\n4. Front Printing: 1 color<br>\r\n5. Back Printing: 1 color<br>\r\nPerforation: on 1 page\r\n2 leaves (4 pages)', 300000, 3, 'pcs', '750000.00', '2023-04-15 04:05:49', NULL, 35, 35, '2023-04-15 04:05:39', '2023-04-15 04:05:49'),
(17, 11, 'TRAVEL CARD SBI BANK PIN MAILER\r\nSIZE:7\'\'X4\'\'\r\n\r\n', 100000, 2, 'pcs', '160000.00', '2023-04-13 05:24:02', NULL, 9, 9, '2023-04-13 05:21:10', '2023-04-13 05:24:02'),
(15, 9, 'RUPAY PINMAILER', 250000, 1, 'pcs', '300000.00', NULL, NULL, 9, NULL, '2023-04-13 05:12:31', '2023-04-13 05:12:31'),
(6, 3, 'RUPAY PINMAILER', 250000, 1, 'pcs', '300000.00', '2023-04-04 03:47:36', 25, NULL, 25, '2023-04-04 03:46:40', '2023-04-04 03:47:36'),
(7, 3, 'YES BANK PIN MAILER', 40000, 1, 'pcs', '58000.00', '2023-04-04 03:47:36', 25, NULL, 25, '2023-04-04 03:46:40', '2023-04-04 03:47:36'),
(8, 3, 'SODEXO PIN MAILER', 200000, 1, 'pcs', '240000.00', '2023-04-04 03:47:36', 25, NULL, 25, '2023-04-04 03:46:40', '2023-04-04 03:47:36'),
(9, 3, 'NIYO PIN MAILER', 100000, 1, 'pcs', '135000.00', '2023-04-04 03:47:36', 25, NULL, 25, '2023-04-04 03:46:40', '2023-04-04 03:47:36'),
(10, 4, 'Grade Card', 5000, 16, '5000', '80000.00', NULL, 39, NULL, NULL, '2023-04-12 09:12:14', '2023-04-12 09:12:14'),
(11, 5, 'Grade Card', 5000, 16, '5000', '80000.00', '2023-04-12 09:15:00', 39, NULL, 39, '2023-04-12 09:12:18', '2023-04-12 09:15:00'),
(12, 6, 'Grade Cards', 5000, 25, '5000', '125000.00', NULL, 39, NULL, NULL, '2023-04-12 09:18:59', '2023-04-12 09:18:59'),
(16, 10, 'TRAVEL CARD SBI BANK PIN MAILER\r\nSIZE:7\'\'X4\'\'\r\n\r\n', 100000, 2, 'pcs', '160000.00', '2023-04-13 05:24:06', NULL, 9, 9, '2023-04-13 05:20:05', '2023-04-13 05:24:06'),
(21, 15, '1. Size: A4<br>\r\n2. Paper Weight/GSM:  80 Maplitho< br>\r\n4. Front Printing: 1 color<br>\r\n5. Back Printing: 1 color<br>\r\nPerforation: on 1 page\r\n2 leaves (4 pages)', 300000, 3, 'pcs', '750000.00', NULL, NULL, 35, NULL, '2023-04-15 04:05:33', '2023-04-15 04:05:33'),
(22, 15, '1. Size: A4<br>\r\n2. Paper Weight/GSM:  80 Maplitho< br>\r\n4. Front Printing: 4 color<br>\r\n5. Back Printing: 4 color<br>\r\nPerforation: on 1 page\r\n2 leaves (4 pages)', 300000, 3, 'pcs', '888000.00', NULL, NULL, 35, NULL, '2023-04-15 04:05:33', '2023-04-15 04:05:33'),
(24, 16, '1. Size: A4<br>\r\n2. Paper Weight/GSM:  80 Maplitho< br>\r\n4. Front Printing: 4 color<br>\r\n5. Back Printing: 4 color<br>\r\nPerforation: on 1 page\r\n2 leaves (4 pages)', 300000, 3, 'pcs', '888000.00', '2023-04-15 04:05:49', NULL, 35, 35, '2023-04-15 04:05:39', '2023-04-15 04:05:49'),
(42, 25, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n', 30000, 796, 'sheet', '999999.99', '2023-04-18 03:05:29', 35, NULL, 35, '2023-04-18 03:01:43', '2023-04-18 03:05:29'),
(40, 24, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n', 30000, 796, 'sheet', '999999.99', NULL, 35, NULL, NULL, '2023-04-18 03:01:38', '2023-04-18 03:01:38'),
(41, 24, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n ', 50000, 746, 'sheet', '999999.99', NULL, 35, NULL, NULL, '2023-04-18 03:01:38', '2023-04-18 03:01:38'),
(35, 20, 'Welcome Letter<br>\r\n\r\nPaper size:- A4<br>\r\nPaper GSM:- 90 GSM,<br>\r\nPaper:- Art Paper<br>\r\nPrinting:-  -4+4', 10000, 2, 'pcs', '16800.00', NULL, NULL, 25, NULL, '2023-04-15 04:50:18', '2023-04-15 04:50:18'),
(39, 23, 'LOLC PIN MAILER\r\n1. Size: 220 X 91 mm <br>\r\n2. Paper Weight/GSM: 70 gsm <br>\r\n\r\n', 10000, 2, 'pcs', '23000.00', NULL, NULL, 9, NULL, '2023-04-18 00:51:54', '2023-04-18 00:51:54'),
(37, 21, '1. Size: A4<br>\r\n2. Paper Weight/GSM:  80 Maplitho< br>\r\n4. Front Printing: 1 color<br>\r\n5. Back Printing: 1 color<br>\r\nPerforation: on 1 page\r\n2 leaves (4 pages)', 300000, 3, 'pcs', '870000.00', NULL, NULL, 35, NULL, '2023-04-17 00:11:21', '2023-04-17 00:11:21'),
(36, 21, '1. Size: A4<br>\r\n2. Paper Weight/GSM:  80 Maplitho< br>\r\n4. Front Printing: 1 color<br>\r\n5. Back Printing: 1 color<br>\r\nPerforation: on 1 page\r\n2 leaves (4 pages)', 300000, 3, 'pcs', '750000.00', NULL, NULL, 35, NULL, '2023-04-17 00:11:21', '2023-04-17 00:11:21'),
(31, 19, 'Welcome Letter\r\n\r\nPaper size:- A4\r\nPaper GSM:- 90 GSM,\r\nPaper:- Art Paper\r\nPrinting:-  -4+4', 10000, 2, 'pcs', '16800.00', NULL, 25, NULL, NULL, '2023-04-15 04:48:28', '2023-04-15 04:48:28'),
(32, 19, 'Welcome Letter\r\n\r\nPaper size:- A4\r\nPaper GSM:- 90 GSM,\r\nPaper:- Art Paper\r\nPrinting:-  -4+4\r\n ', 20000, 2, 'pcs', '30000.00', NULL, 25, NULL, NULL, '2023-04-15 04:48:28', '2023-04-15 04:48:28'),
(33, 19, 'Envelopes\r\n\r\nEnvelope Dimensions:-\r\nClosed Size: 24.6 cm (w) x 11 cm (h)\r\nOpen Size: 27.2 cm (w) x 24 cm (h)\r\nPaper GSM: 130 GSM (Without window)\r\nPaper: Art Paper\r\nColour: Multi Colour Printing\r\nGumming Strip: 1\" pre gummed strip (with security cuts provision) on the flap', 10000, 3, 'pcs', '28800.00', NULL, 25, NULL, NULL, '2023-04-15 04:48:28', '2023-04-15 04:48:28'),
(34, 19, 'Envelopes\r\n\r\nEnvelope Dimensions:-\r\nClosed Size: 24.6 cm (w) x 11 cm (h)\r\nOpen Size: 27.2 cm (w) x 24 cm (h)\r\nPaper GSM: 130 GSM (Without window)\r\nPaper: Art Paper\r\nColour: Multi Colour Printing\r\nGumming Strip: 1\" pre gummed strip (with security cuts provision) on the flap\r\n', 10000, 3, 'pcs', '27000.00', NULL, 25, NULL, NULL, '2023-04-15 04:48:28', '2023-04-15 04:48:28'),
(43, 25, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n ', 50000, 746, 'sheet', '999999.99', '2023-04-18 03:05:29', 35, NULL, 35, '2023-04-18 03:01:43', '2023-04-18 03:05:29'),
(44, 26, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n', 30000, 796, 'sheet', '999999.99', '2023-04-18 03:05:39', 35, NULL, 35, '2023-04-18 03:02:06', '2023-04-18 03:05:39'),
(45, 26, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n ', 50000, 746, 'sheet', '999999.99', '2023-04-18 03:05:39', 35, NULL, 35, '2023-04-18 03:02:06', '2023-04-18 03:05:39'),
(46, 27, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n', 30000, 796, 'sheet', '999999.99', '2023-04-18 03:05:42', 35, NULL, 35, '2023-04-18 03:02:07', '2023-04-18 03:05:42'),
(47, 27, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n ', 50000, 746, 'sheet', '999999.99', '2023-04-18 03:05:42', 35, NULL, 35, '2023-04-18 03:02:07', '2023-04-18 03:05:42'),
(48, 28, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n', 30000, 796, 'sheet', '999999.99', '2023-04-18 03:05:32', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:32'),
(49, 28, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n ', 50000, 746, 'sheet', '999999.99', '2023-04-18 03:05:32', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:32'),
(50, 29, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n', 30000, 796, 'sheet', '999999.99', '2023-04-18 03:05:23', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:23'),
(51, 29, '1. Size: 9\" x 12\"<br>\r\n2. Paper Weight/GSM: 70<br>\r\n3. Front Printing: 1<br>\r\n4. Back Printing: 1<br>\r\n5. Perporation: center / horizontal & Vertical\r\n ', 50000, 746, 'sheet', '999999.99', '2023-04-18 03:05:23', 35, NULL, 35, '2023-04-18 03:02:08', '2023-04-18 03:05:23'),
(52, 30, '1. Size: 9\" x 6\"<br>\r\n2. Paper Weight/GSM: <br>\r\n3. Color Center: NCR<br>\r\nPLY: 5\r\n1st copy : Back print\r\n2nd/3rd/4th & 5th- front print\r\n \r\n', 50000, 1875, 'sheet', '999999.99', NULL, 35, NULL, NULL, '2023-04-18 04:48:23', '2023-04-18 04:48:23'),
(53, 31, 'ENVELOPE', 100000, 3, 'pcs', '335000.00', '2023-04-19 05:53:23', 25, NULL, 25, '2023-04-19 00:10:04', '2023-04-19 05:53:23'),
(54, 31, 'LETTER', 100000, 2, 'pcs', '180000.00', '2023-04-19 05:53:23', 25, NULL, 25, '2023-04-19 00:10:04', '2023-04-19 05:53:23'),
(55, 31, 'PINMAILER', 100000, 2, 'pcs', '150000.00', '2023-04-19 05:53:23', 25, NULL, 25, '2023-04-19 00:10:04', '2023-04-19 05:53:23'),
(56, 32, 'ENVELOPE', 100000, 3, 'pcs', '335000.00', '2023-04-19 05:53:43', 25, NULL, 25, '2023-04-19 00:10:07', '2023-04-19 05:53:43'),
(57, 32, 'LETTER', 100000, 2, 'pcs', '180000.00', '2023-04-19 05:53:43', 25, NULL, 25, '2023-04-19 00:10:07', '2023-04-19 05:53:43'),
(58, 32, 'PINMAILER', 100000, 2, 'pcs', '150000.00', '2023-04-19 05:53:43', 25, NULL, 25, '2023-04-19 00:10:07', '2023-04-19 05:53:43'),
(59, 33, 'ENVELOPE', 100000, 3, 'pcs', '335000.00', '2023-04-19 05:53:39', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:39'),
(60, 33, 'LETTER', 100000, 2, 'pcs', '180000.00', '2023-04-19 05:53:39', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:39'),
(61, 33, 'PINMAILER', 100000, 2, 'pcs', '150000.00', '2023-04-19 05:53:39', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:39'),
(62, 34, 'ENVELOPE', 100000, 3, 'pcs', '335000.00', '2023-04-19 05:53:29', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:29'),
(63, 34, 'LETTER', 100000, 2, 'pcs', '180000.00', '2023-04-19 05:53:29', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:29'),
(64, 34, 'PINMAILER', 100000, 2, 'pcs', '150000.00', '2023-04-19 05:53:29', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:29'),
(65, 35, 'ENVELOPE', 100000, 3, 'pcs', '335000.00', '2023-04-19 05:53:34', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:34'),
(66, 35, 'LETTER', 100000, 2, 'pcs', '180000.00', '2023-04-19 05:53:34', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:34'),
(67, 35, 'PINMAILER', 100000, 2, 'pcs', '150000.00', '2023-04-19 05:53:34', 25, NULL, 25, '2023-04-19 00:10:10', '2023-04-19 05:53:34'),
(68, 36, 'ENVELOPE', 100000, 3, 'pcs', '335000.00', NULL, 25, NULL, NULL, '2023-04-19 00:10:10', '2023-04-19 00:10:10'),
(69, 36, 'LETTER', 100000, 2, 'pcs', '180000.00', NULL, 25, NULL, NULL, '2023-04-19 00:10:10', '2023-04-19 00:10:10'),
(70, 36, 'PINMAILER', 100000, 2, 'pcs', '150000.00', NULL, 25, NULL, NULL, '2023-04-19 00:10:10', '2023-04-19 00:10:10'),
(71, 37, '1. Basic Description: MICR Paper<br>\r\n2. Size: 10.5\" Reels<br>\r\n3. Paper Weight/GSM: 95 GSM <br>\r\n', 28, 2350, 'MT', '65800.00', NULL, 35, NULL, NULL, '2023-04-19 03:09:05', '2023-04-19 03:09:05'),
(72, 38, 'Main Plain Envelope.<br>\r\n9.14\" x 4.25\".<br>\r\n80 gsm, Maplitho\r\nSingle/Double Window,\r\n1 clear printing, Tamper Flap\r\n', 100000, 1, 'pcs', '138000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(73, 38, 'Pin Mailer Plain Envelope.<br>\r\n9.14\" x 4.25\".<br>\r\n80 gsm Maplitho, Single Window, Tamper Flap.', 100000, 1, 'pcs', '138000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(74, 38, 'Pin Mailer, Carbonless Paper.<br>\r\n9\" x 4\" x 3 parts without Pin Printing', 100000, 2, 'pcs', '160000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(75, 38, 'Welcome Letter<br> 210mm x 297mm (A4)<br> 80 gsm Maplitho Paper, Printing 4+4 VDP on front  \r\n', 100000, 2, 'pcs', '155000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(76, 38, 'Card Pouch <br>\r\n 3.54\" x 2.36\" <br>\r\n130 gsm Art Paper , BOPP lamination & Pouch Making', 100000, 2, 'pcs', '189000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(77, 38, 'User guide Booklet<br> 3.54\" x 8.26\"<br>\r\n32 pages, 80 gsm Maplitho Paper, Printing 1+1, Finishing: Saddle Stitched', 100000, 6, 'pcs', '557000.00', NULL, 25, NULL, NULL, '2023-04-22 00:36:39', '2023-04-22 00:36:39'),
(78, 39, '1. Basic Description: MICR Paper<br>\r\n2. Size: 10.5\" Reels<br>\r\n3. Paper Weight/GSM: 95 GSM <br>\r\n', 28, 2350, 'MT', '65800.00', NULL, 35, NULL, NULL, '2023-04-22 01:34:11', '2023-04-22 01:34:11'),
(79, 0, 'Internet Banking Pin Mailer (6.5” X 4” X 3)', 25000, 2, 'pcs', '42000.00', NULL, 25, NULL, NULL, '2023-04-27 05:42:57', '2023-04-27 05:42:57'),
(80, 0, '1. Basic Description: <br>\r\n', 0, 0, 'pcs', '0.00', NULL, 35, NULL, NULL, '2023-04-27 06:19:10', '2023-04-27 06:19:10'),
(81, 43, 'RUPAY PINMAILER', 250000, 1, 'pcs', '300000.00', NULL, NULL, 9, NULL, '2023-04-27 06:57:13', '2023-04-27 06:57:13'),
(82, 0, 'CITIZEN CREDIT CO-OP BANK LTD- PIN MAILER\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR\r\n', 5000, 4, 'pcs', '20000.00', NULL, 25, NULL, NULL, '2023-05-02 04:26:44', '2023-05-02 04:26:44'),
(83, 0, 'ENTERTAINMENT CINEMA TICKET\r\n4INCH*4INCH\r\n\r\n', 100, 150, 'ROLL', '15000.00', NULL, 25, NULL, NULL, '2023-05-03 07:12:53', '2023-05-03 07:12:53'),
(84, 50, '1. Basic Description: jj<br>\r\n2. Size: kk<br>', 22, 22, '22', '483.78', NULL, 9, NULL, NULL, '2023-05-04 07:23:13', '2023-05-04 07:23:13'),
(85, 51, '1. Basic Description: 22<br>\r\n2. Size: 22<br>', 22, 22, '22', '484.00', NULL, 9, NULL, NULL, '2023-05-04 07:32:13', '2023-05-04 07:32:13'),
(86, 52, '1. Basic Description: 11<br>\r\n2. Size: 11<br>\r\n3. Paper W 1', 34, 23, '23', '782.00', NULL, 9, NULL, NULL, '2023-05-04 07:34:55', '2023-05-04 07:34:55'),
(87, 53, '1. Basic Description: 22<br>\r\n2. Size: 22<br>', 22, 22, '22', '484.00', NULL, 9, NULL, NULL, '2023-05-04 23:49:14', '2023-05-04 23:49:14'),
(88, 53, '1. Basic Description: 22<br>\r\n2. Size: 22<br>', 22, 22, '22', '484.00', NULL, 9, NULL, NULL, '2023-05-04 23:49:14', '2023-05-04 23:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_product_item_multipe_qty_rates`
--

CREATE TABLE `quotation_product_item_multipe_qty_rates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quotation_id` bigint(20) DEFAULT NULL COMMENT 'quotation_master Table id',
  `quotation_product_item_id` bigint(20) DEFAULT NULL COMMENT 'quotation_product_items Table id',
  `qty` decimal(8,2) DEFAULT NULL,
  `ppu` decimal(8,2) DEFAULT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_width_mapping`
--

CREATE TABLE `quotation_width_mapping` (
  `id` int(11) NOT NULL,
  `quotation_id` int(11) NOT NULL,
  `column_id` int(11) NOT NULL,
  `width` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation_width_mapping`
--

INSERT INTO `quotation_width_mapping` (`id`, `quotation_id`, `column_id`, `width`) VALUES
(17, 1, 0, 10),
(18, 1, 1, 25),
(19, 1, 2, 20),
(20, 1, 3, 25),
(21, 2, 0, 10),
(22, 2, 1, 25),
(23, 2, 2, 20),
(24, 2, 3, 25),
(25, 3, 0, 10),
(26, 3, 1, 30),
(27, 3, 2, 20),
(28, 3, 3, 20),
(29, 4, 0, 10),
(30, 4, 1, 30),
(31, 4, 2, 20),
(32, 4, 3, 20),
(33, 5, 0, 5),
(34, 5, 1, 25),
(35, 5, 2, 25),
(36, 5, 3, 25),
(37, 6, 0, 5),
(38, 6, 1, 30),
(39, 6, 2, 25),
(40, 6, 3, 25),
(41, 7, 0, 10),
(42, 7, 1, 25),
(43, 7, 2, 20),
(44, 7, 3, 25),
(45, 8, 0, 10),
(46, 8, 1, 25),
(47, 8, 2, 25),
(48, 8, 3, 25),
(49, 9, 0, 10),
(50, 9, 1, 40),
(51, 9, 2, 20),
(52, 9, 3, 20),
(53, 10, 0, 10),
(54, 10, 1, 25),
(55, 10, 2, 25),
(56, 10, 3, 25),
(57, 11, 0, 5),
(58, 11, 1, 40),
(59, 11, 2, 10),
(60, 11, 3, 30),
(61, 12, 0, 5),
(62, 12, 1, 40),
(63, 12, 2, 20),
(64, 12, 3, 20),
(65, 13, 0, 5),
(66, 13, 1, 25),
(67, 13, 2, 25),
(68, 13, 3, 25),
(69, 14, 0, 5),
(70, 14, 1, 40),
(71, 14, 2, 20),
(72, 14, 3, 20),
(73, 15, 0, 5),
(74, 15, 1, 40),
(75, 15, 2, 20),
(76, 15, 3, 20),
(77, 16, 0, 5),
(78, 16, 1, 40),
(79, 16, 2, 20),
(80, 16, 3, 20),
(81, 17, 0, 5),
(82, 17, 1, 30),
(83, 17, 2, 25),
(84, 17, 3, 25),
(85, 18, 0, 5),
(86, 18, 1, 15),
(87, 18, 2, 30),
(88, 18, 3, 15),
(89, 18, 4, 15),
(90, 18, 5, 20),
(91, 19, 0, 10),
(92, 19, 1, 40),
(93, 19, 2, 20),
(94, 19, 3, 25),
(95, 20, 0, 10),
(96, 20, 1, 25),
(97, 20, 2, 25),
(98, 20, 3, 25),
(99, 21, 0, 20),
(100, 21, 1, 20),
(101, 21, 2, 20),
(102, 21, 3, 20),
(103, 21, 4, 20),
(104, 22, 0, 10),
(105, 22, 1, 40),
(106, 22, 2, 25),
(107, 22, 3, 25),
(108, 23, 0, 10),
(109, 23, 1, 40),
(110, 23, 2, 25),
(111, 23, 3, 25),
(112, 24, 0, 10),
(113, 24, 1, 40),
(114, 24, 2, 25),
(115, 24, 3, 25),
(116, 25, 0, 20),
(117, 25, 1, 20),
(118, 25, 2, 20),
(119, 25, 3, 20),
(120, 25, 4, 20),
(121, 26, 0, 20),
(122, 26, 1, 20),
(123, 26, 2, 20),
(124, 26, 3, 20),
(125, 26, 4, 20),
(126, 27, 0, 10),
(127, 27, 1, 30),
(128, 27, 2, 30),
(129, 27, 3, 30),
(130, 28, 0, 14),
(131, 28, 1, 14),
(132, 28, 2, 14),
(133, 28, 3, 14),
(134, 28, 4, 14),
(135, 28, 5, 14),
(136, 28, 6, 14),
(137, 29, 0, 10),
(138, 29, 1, 40),
(139, 29, 2, 20),
(140, 29, 3, 20),
(141, 30, 0, 10),
(142, 30, 1, 40),
(143, 30, 2, 25),
(144, 30, 3, 25),
(145, 31, 0, 10),
(146, 31, 1, 35),
(147, 31, 2, 20),
(148, 31, 3, 25),
(149, 32, 0, 10),
(150, 32, 1, 30),
(151, 32, 2, 20),
(152, 32, 3, 20),
(153, 33, 0, 10),
(154, 33, 1, 30),
(155, 33, 2, 20),
(156, 33, 3, 20),
(157, 34, 0, 10),
(158, 34, 1, 30),
(159, 34, 2, 20),
(160, 34, 3, 20),
(161, 35, 0, 10),
(162, 35, 1, 30),
(163, 35, 2, 20),
(164, 35, 3, 20),
(165, 36, 0, 10),
(166, 36, 1, 30),
(167, 36, 2, 20),
(168, 36, 3, 20),
(169, 37, 0, 10),
(170, 37, 1, 30),
(171, 37, 2, 20),
(172, 37, 3, 20),
(173, 38, 0, 10),
(174, 38, 1, 30),
(175, 38, 2, 30),
(176, 38, 3, 30),
(177, 39, 0, 10),
(178, 39, 1, 30),
(179, 39, 2, 30),
(180, 39, 3, 30),
(181, 40, 0, 10),
(182, 40, 1, 30),
(183, 40, 2, 30),
(184, 40, 3, 30),
(185, 41, 0, 10),
(186, 41, 1, 30),
(187, 41, 2, 30),
(188, 41, 3, 30),
(189, 42, 0, 10),
(190, 42, 1, 30),
(191, 42, 2, 30),
(192, 42, 3, 30),
(193, 43, 0, 10),
(194, 43, 1, 30),
(195, 43, 2, 30),
(196, 43, 3, 30),
(197, 44, 0, 10),
(198, 44, 1, 40),
(199, 44, 2, 20),
(200, 44, 3, 30),
(201, 45, 0, 10),
(202, 45, 1, 30),
(203, 45, 2, 20),
(204, 45, 3, 20),
(205, 46, 0, 10),
(206, 46, 1, 40),
(207, 46, 2, 20),
(208, 46, 3, 20),
(209, 47, 0, 10),
(210, 47, 1, 30),
(211, 47, 2, 30),
(212, 47, 3, 15),
(213, 47, 4, 15),
(214, 48, 0, 10),
(215, 48, 1, 40),
(216, 48, 2, 20),
(217, 48, 3, 20),
(218, 49, 0, 10),
(219, 49, 1, 40),
(220, 49, 2, 25),
(221, 49, 3, 25),
(222, 50, 0, 10),
(223, 50, 1, 25),
(224, 50, 2, 25),
(225, 50, 3, 25),
(226, 51, 0, 10),
(227, 51, 1, 40),
(228, 51, 2, 20),
(229, 51, 3, 20),
(230, 52, 0, 10),
(231, 52, 1, 40),
(232, 52, 2, 20),
(233, 52, 3, 20),
(234, 53, 0, 20),
(235, 53, 1, 20),
(236, 53, 2, 20),
(237, 53, 3, 20),
(238, 53, 4, 20),
(239, 54, 0, 10),
(240, 54, 1, 30),
(241, 54, 2, 20),
(242, 54, 3, 30),
(243, 55, 0, 5),
(244, 55, 1, 15),
(245, 55, 2, 30),
(246, 55, 3, 15),
(247, 55, 4, 15),
(248, 55, 5, 20),
(249, 56, 0, 5),
(250, 56, 1, 30),
(251, 56, 2, 15),
(252, 56, 3, 30),
(253, 57, 0, 10),
(254, 57, 1, 40),
(255, 57, 2, 20),
(256, 57, 3, 20),
(257, 58, 0, 5),
(258, 58, 1, 40),
(259, 58, 2, 10),
(260, 58, 3, 30),
(261, 59, 0, 10),
(262, 59, 1, 40),
(263, 59, 2, 25),
(264, 59, 3, 25),
(265, 60, 0, 10),
(266, 60, 1, 40),
(267, 60, 2, 20),
(268, 60, 3, 20),
(269, 61, 0, 10),
(270, 61, 1, 40),
(271, 61, 2, 20),
(272, 61, 3, 20),
(273, 62, 0, 10),
(274, 62, 1, 40),
(275, 62, 2, 20),
(276, 62, 3, 20),
(277, 63, 0, 10),
(278, 63, 1, 40),
(279, 63, 2, 20),
(280, 63, 3, 20),
(281, 64, 0, 25),
(282, 64, 1, 25),
(283, 64, 2, 25),
(284, 64, 3, 25),
(285, 65, 0, 10),
(286, 65, 1, 40),
(287, 65, 2, 20),
(288, 65, 3, 20),
(289, 66, 0, 10),
(290, 66, 1, 40),
(291, 66, 2, 20),
(292, 66, 3, 20),
(293, 67, 0, 10),
(294, 67, 1, 40),
(295, 67, 2, 20),
(296, 67, 3, 20),
(297, 68, 0, 10),
(298, 68, 1, 40),
(299, 68, 2, 20),
(300, 68, 3, 20),
(301, 69, 0, 10),
(302, 69, 1, 40),
(303, 69, 2, 20),
(304, 69, 3, 20),
(305, 70, 0, 10),
(306, 70, 1, 40),
(307, 70, 2, 20),
(308, 70, 3, 20),
(309, 71, 0, 10),
(310, 71, 1, 40),
(311, 71, 2, 20),
(312, 71, 3, 20),
(313, 72, 0, 10),
(314, 72, 1, 40),
(315, 72, 2, 20),
(316, 72, 3, 20),
(317, 73, 0, 10),
(318, 73, 1, 40),
(319, 73, 2, 20),
(320, 73, 3, 20),
(321, 74, 0, 10),
(322, 74, 1, 40),
(323, 74, 2, 20),
(324, 74, 3, 20),
(325, 75, 0, 10),
(326, 75, 1, 40),
(327, 75, 2, 20),
(328, 75, 3, 20),
(329, 76, 0, 10),
(330, 76, 1, 40),
(331, 76, 2, 20),
(332, 76, 3, 20),
(333, 77, 0, 10),
(334, 77, 1, 40),
(335, 77, 2, 20),
(336, 77, 3, 20),
(337, 78, 0, 10),
(338, 78, 1, 40),
(339, 78, 2, 20),
(340, 78, 3, 20),
(341, 79, 0, 10),
(342, 79, 1, 40),
(343, 79, 2, 20),
(344, 79, 3, 20),
(345, 80, 0, 10),
(346, 80, 1, 40),
(347, 80, 2, 20),
(348, 80, 3, 20),
(349, 81, 0, 10),
(350, 81, 1, 40),
(351, 81, 2, 20),
(352, 81, 3, 20),
(353, 82, 0, 10),
(354, 82, 1, 40),
(355, 82, 2, 20),
(356, 82, 3, 20),
(357, 83, 0, 10),
(358, 83, 1, 40),
(359, 83, 2, 20),
(360, 83, 3, 20),
(361, 84, 0, 10),
(362, 84, 1, 40),
(363, 84, 2, 20),
(364, 84, 3, 20),
(365, 85, 0, 10),
(366, 85, 1, 40),
(367, 85, 2, 20),
(368, 85, 3, 20),
(369, 86, 0, 10),
(370, 86, 1, 40),
(371, 86, 2, 20),
(372, 86, 3, 20),
(373, 87, 0, 10),
(374, 87, 1, 40),
(375, 87, 2, 20),
(376, 87, 3, 20),
(377, 88, 0, 10),
(378, 88, 1, 40),
(379, 88, 2, 20),
(380, 88, 3, 20),
(381, 89, 0, 10),
(382, 89, 1, 40),
(383, 89, 2, 20),
(384, 89, 3, 20),
(385, 90, 0, 10),
(386, 90, 1, 40),
(387, 90, 2, 20),
(388, 90, 3, 20),
(389, 91, 0, 10),
(390, 91, 1, 40),
(391, 91, 2, 20),
(392, 91, 3, 20),
(393, 92, 0, 10),
(394, 92, 1, 40),
(395, 92, 2, 20),
(396, 92, 3, 20),
(397, 93, 0, 10),
(398, 93, 1, 40),
(399, 93, 2, 20),
(400, 93, 3, 20),
(401, 94, 0, 10),
(402, 94, 1, 40),
(403, 94, 2, 20),
(404, 94, 3, 20),
(405, 95, 0, 10),
(406, 95, 1, 40),
(407, 95, 2, 20),
(408, 95, 3, 20),
(409, 96, 0, 10),
(410, 96, 1, 40),
(411, 96, 2, 20),
(412, 96, 3, 20),
(413, 97, 0, 10),
(414, 97, 1, 40),
(415, 97, 2, 20),
(416, 97, 3, 20),
(417, 98, 0, 10),
(418, 98, 1, 40),
(419, 98, 2, 20),
(420, 98, 3, 20),
(421, 99, 0, 10),
(422, 99, 1, 40),
(423, 99, 2, 20),
(424, 99, 3, 20),
(425, 100, 0, 10),
(426, 100, 1, 40),
(427, 100, 2, 20),
(428, 100, 3, 20),
(429, 101, 0, 10),
(430, 101, 1, 40),
(431, 101, 2, 20),
(432, 101, 3, 20),
(433, 102, 0, 10),
(434, 102, 1, 40),
(435, 102, 2, 20),
(436, 102, 3, 20),
(437, 103, 0, 5),
(438, 103, 1, 15),
(439, 103, 2, 30),
(440, 103, 3, 15),
(441, 103, 4, 15),
(442, 103, 5, 20),
(443, 104, 0, 10),
(444, 104, 1, 40),
(445, 104, 2, 20),
(446, 104, 3, 20),
(447, 105, 0, 10),
(448, 105, 1, 40),
(449, 105, 2, 20),
(450, 105, 3, 20),
(451, 106, 0, 5),
(452, 106, 1, 15),
(453, 106, 2, 30),
(454, 106, 3, 15),
(455, 106, 4, 15),
(456, 106, 5, 20),
(457, 107, 0, 5),
(458, 107, 1, 15),
(459, 107, 2, 30),
(460, 107, 3, 15),
(461, 107, 4, 15),
(462, 107, 5, 20),
(463, 108, 0, 5),
(464, 108, 1, 15),
(465, 108, 2, 30),
(466, 108, 3, 15),
(467, 108, 4, 15),
(468, 108, 5, 20),
(469, 109, 0, 5),
(470, 109, 1, 15),
(471, 109, 2, 30),
(472, 109, 3, 15),
(473, 109, 4, 15),
(474, 109, 5, 20),
(475, 110, 0, 10),
(476, 110, 1, 30),
(477, 110, 2, 20),
(478, 110, 3, 30),
(479, 111, 0, 33),
(480, 111, 1, 33),
(481, 111, 2, 33),
(482, 112, 0, 10),
(483, 112, 1, 30),
(484, 112, 2, 15),
(485, 112, 3, 30),
(486, 113, 0, 10),
(487, 113, 1, 40),
(488, 113, 2, 20),
(489, 113, 3, 20),
(490, 114, 0, 10),
(491, 114, 1, 40),
(492, 114, 2, 20),
(493, 114, 3, 20),
(494, 115, 0, 10),
(495, 115, 1, 40),
(496, 115, 2, 20),
(497, 115, 3, 20),
(498, 116, 0, 20),
(499, 116, 1, 20),
(500, 116, 2, 20),
(501, 116, 3, 20),
(502, 116, 4, 20),
(503, 117, 0, 10),
(504, 117, 1, 40),
(505, 117, 2, 20),
(506, 117, 3, 20),
(507, 118, 0, 10),
(508, 118, 1, 25),
(509, 118, 2, 25),
(510, 118, 3, 25),
(511, 119, 0, 10),
(512, 119, 1, 40),
(513, 119, 2, 20),
(514, 119, 3, 20),
(515, 120, 0, 25),
(516, 120, 1, 25),
(517, 120, 2, 25),
(518, 120, 3, 25),
(519, 121, 0, 20),
(520, 121, 1, 20),
(521, 121, 2, 20),
(522, 121, 3, 20),
(523, 121, 4, 20),
(524, 122, 0, 10),
(525, 122, 1, 50),
(526, 122, 2, 40),
(527, 123, 0, 10),
(528, 123, 1, 40),
(529, 123, 2, 20),
(530, 123, 3, 20),
(531, 124, 0, 10),
(532, 124, 1, 40),
(533, 124, 2, 20),
(534, 124, 3, 20),
(535, 125, 0, 10),
(536, 125, 1, 40),
(537, 125, 2, 20),
(538, 125, 3, 20),
(539, 126, 0, 10),
(540, 126, 1, 40),
(541, 126, 2, 20),
(542, 126, 3, 20),
(543, 127, 0, 10),
(544, 127, 1, 40),
(545, 127, 2, 20),
(546, 127, 3, 20),
(547, 128, 0, 25),
(548, 128, 1, 25),
(549, 128, 2, 25),
(550, 128, 3, 25),
(551, 129, 0, 10),
(552, 129, 1, 40),
(553, 129, 2, 20),
(554, 129, 3, 20),
(555, 130, 0, 10),
(556, 130, 1, 40),
(557, 130, 2, 20),
(558, 130, 3, 20),
(559, 131, 0, 10),
(560, 131, 1, 40),
(561, 131, 2, 20),
(562, 131, 3, 20),
(563, 132, 0, 10),
(564, 132, 1, 40),
(565, 132, 2, 20),
(566, 132, 3, 20),
(567, 133, 0, 10),
(568, 133, 1, 40),
(569, 133, 2, 20),
(570, 133, 3, 20),
(571, 134, 0, 10),
(572, 134, 1, 40),
(573, 134, 2, 20),
(574, 134, 3, 20),
(575, 135, 0, 10),
(576, 135, 1, 40),
(577, 135, 2, 20),
(578, 135, 3, 20),
(579, 136, 0, 10),
(580, 136, 1, 40),
(581, 136, 2, 20),
(582, 136, 3, 20),
(583, 137, 0, 10),
(584, 137, 1, 40),
(585, 137, 2, 20),
(586, 137, 3, 20),
(587, 138, 0, 10),
(588, 138, 1, 30),
(589, 138, 2, 15),
(590, 138, 3, 30),
(591, 139, 0, 10),
(592, 139, 1, 40),
(593, 139, 2, 40),
(598, 141, 0, 10),
(599, 141, 1, 40),
(600, 141, 2, 20),
(601, 141, 3, 20),
(602, 142, 0, 10),
(603, 142, 1, 40),
(604, 142, 2, 20),
(605, 142, 3, 20),
(606, 143, 0, 10),
(607, 143, 1, 40),
(608, 143, 2, 20),
(609, 143, 3, 20),
(610, 144, 0, 10),
(611, 144, 1, 40),
(612, 144, 2, 20),
(613, 144, 3, 20),
(614, 145, 0, 10),
(615, 145, 1, 40),
(616, 145, 2, 20),
(617, 145, 3, 20),
(618, 146, 0, 10),
(619, 146, 1, 40),
(620, 146, 2, 20),
(621, 146, 3, 20),
(622, 147, 0, 10),
(623, 147, 1, 40),
(624, 147, 2, 20),
(625, 147, 3, 20),
(626, 148, 0, 10),
(627, 148, 1, 40),
(628, 148, 2, 20),
(629, 148, 3, 20),
(630, 149, 0, 10),
(631, 149, 1, 40),
(632, 149, 2, 20),
(633, 149, 3, 20),
(634, 150, 0, 10),
(635, 150, 1, 30),
(636, 150, 2, 15),
(637, 150, 3, 35),
(638, 151, 0, 10),
(639, 151, 1, 40),
(640, 151, 2, 20),
(641, 151, 3, 20),
(642, 152, 0, 10),
(643, 152, 1, 40),
(644, 152, 2, 20),
(645, 152, 3, 20),
(646, 153, 0, 10),
(647, 153, 1, 30),
(648, 153, 2, 20),
(649, 153, 3, 30),
(656, 154, 0, 33),
(657, 154, 1, 33),
(658, 154, 2, 33),
(664, 155, 0, 33),
(665, 155, 1, 33),
(666, 155, 2, 33),
(667, 156, 0, 10),
(668, 156, 1, 40),
(669, 156, 2, 20),
(670, 156, 3, 20),
(679, 157, 0, 10),
(680, 157, 1, 40),
(681, 157, 2, 20),
(682, 157, 3, 20),
(683, 158, 0, 10),
(684, 158, 1, 40),
(685, 158, 2, 20),
(686, 158, 3, 20),
(687, 159, 0, 10),
(688, 159, 1, 40),
(689, 159, 2, 20),
(690, 159, 3, 20),
(695, 160, 0, 10),
(696, 160, 1, 40),
(697, 160, 2, 20),
(698, 160, 3, 20),
(699, 161, 0, 10),
(700, 161, 1, 40),
(701, 161, 2, 20),
(702, 161, 3, 20),
(707, 162, 0, 10),
(708, 162, 1, 40),
(709, 162, 2, 20),
(710, 162, 3, 20),
(723, 163, 0, 10),
(724, 163, 1, 40),
(725, 163, 2, 20),
(726, 163, 3, 20),
(727, 164, 0, 10),
(728, 164, 1, 25),
(729, 164, 2, 25),
(730, 164, 3, 25),
(731, 165, 0, 10),
(732, 165, 1, 40),
(733, 165, 2, 20),
(734, 165, 3, 20),
(739, 140, 0, 10),
(740, 140, 1, 40),
(741, 140, 2, 20),
(742, 140, 3, 20),
(767, 167, 0, 16),
(768, 167, 1, 16),
(769, 167, 2, 16),
(770, 167, 3, 16),
(771, 167, 4, 16),
(772, 167, 5, 16),
(781, 168, 0, 10),
(782, 168, 1, 40),
(783, 168, 2, 20),
(784, 168, 3, 20),
(785, 169, 0, 10),
(786, 169, 1, 40),
(787, 169, 2, 20),
(788, 169, 3, 20),
(789, 170, 0, 10),
(790, 170, 1, 40),
(791, 170, 2, 20),
(792, 170, 3, 20),
(793, 166, 0, 10),
(794, 166, 1, 40),
(795, 166, 2, 20),
(796, 166, 3, 20),
(801, 171, 0, 10),
(802, 171, 1, 40),
(803, 171, 2, 20),
(804, 171, 3, 20),
(805, 172, 0, 5),
(806, 172, 1, 15),
(807, 172, 2, 30),
(808, 172, 3, 15),
(809, 172, 4, 15),
(810, 172, 5, 20),
(811, 173, 0, 5),
(812, 173, 1, 15),
(813, 173, 2, 30),
(814, 173, 3, 15),
(815, 173, 4, 15),
(816, 173, 5, 20),
(817, 174, 0, 50),
(818, 174, 1, 50),
(819, 175, 0, 10),
(820, 175, 1, 40),
(821, 175, 2, 20),
(822, 175, 3, 20),
(827, 176, 0, 10),
(828, 176, 1, 40),
(829, 176, 2, 20),
(830, 176, 3, 20),
(831, 177, 0, 25),
(832, 177, 1, 25),
(833, 177, 2, 25),
(834, 177, 3, 25),
(835, 178, 0, 5),
(836, 178, 1, 15),
(837, 178, 2, 30),
(838, 178, 3, 15),
(839, 178, 4, 15),
(840, 178, 5, 20),
(841, 179, 0, 5),
(842, 179, 1, 15),
(843, 179, 2, 30),
(844, 179, 3, 15),
(845, 179, 4, 15),
(846, 179, 5, 20),
(855, 180, 0, 10),
(856, 180, 1, 40),
(857, 180, 2, 20),
(858, 180, 3, 20),
(863, 182, 0, 25),
(864, 182, 1, 25),
(865, 182, 2, 25),
(866, 182, 3, 25),
(875, 181, 0, 10),
(876, 181, 1, 40),
(877, 181, 2, 25),
(878, 181, 3, 25),
(879, 183, 0, 25),
(880, 183, 1, 25),
(881, 183, 2, 25),
(882, 183, 3, 25),
(887, 184, 0, 10),
(888, 184, 1, 40),
(889, 184, 2, 20),
(890, 184, 3, 20),
(891, 185, 0, 10),
(892, 185, 1, 40),
(893, 185, 2, 20),
(894, 185, 3, 20),
(906, 187, 0, 10),
(907, 187, 1, 40),
(908, 187, 2, 40),
(944, 186, 0, 20),
(945, 186, 1, 20),
(946, 186, 2, 20),
(947, 186, 3, 20),
(948, 186, 4, 20),
(949, 188, 0, 10),
(950, 188, 1, 40),
(951, 188, 2, 20),
(952, 188, 3, 20),
(953, 189, 0, 5),
(954, 189, 1, 15),
(955, 189, 2, 30),
(956, 189, 3, 15),
(957, 189, 4, 15),
(958, 189, 5, 20),
(959, 190, 0, 5),
(960, 190, 1, 15),
(961, 190, 2, 30),
(962, 190, 3, 15),
(963, 190, 4, 15),
(964, 190, 5, 20),
(969, 191, 0, 10),
(970, 191, 1, 40),
(971, 191, 2, 20),
(972, 191, 3, 20),
(977, 193, 0, 10),
(978, 193, 1, 40),
(979, 193, 2, 20),
(980, 193, 3, 20),
(981, 192, 0, 10),
(982, 192, 1, 40),
(983, 192, 2, 20),
(984, 192, 3, 20),
(985, 194, 0, 10),
(986, 194, 1, 40),
(987, 194, 2, 20),
(988, 194, 3, 20),
(993, 195, 0, 10),
(994, 195, 1, 40),
(995, 195, 2, 20),
(996, 195, 3, 20),
(997, 196, 0, 10),
(998, 196, 1, 40),
(999, 196, 2, 20),
(1000, 196, 3, 20),
(1031, 197, 0, 16),
(1032, 197, 1, 16),
(1033, 197, 2, 16),
(1034, 197, 3, 16),
(1035, 197, 4, 16),
(1036, 197, 5, 16),
(1037, 198, 0, 5),
(1038, 198, 1, 15),
(1039, 198, 2, 30),
(1040, 198, 3, 15),
(1041, 198, 4, 15),
(1042, 198, 5, 20),
(1055, 199, 0, 10),
(1056, 199, 1, 30),
(1057, 199, 2, 20),
(1058, 199, 3, 30),
(1067, 200, 0, 10),
(1068, 200, 1, 40),
(1069, 200, 2, 20),
(1070, 200, 3, 30),
(1081, 201, 0, 10),
(1082, 201, 1, 30),
(1083, 201, 2, 20),
(1084, 201, 3, 10),
(1085, 201, 4, 20),
(1086, 202, 0, 10),
(1087, 202, 1, 40),
(1088, 202, 2, 20),
(1089, 202, 3, 20),
(1090, 203, 0, 10),
(1091, 203, 1, 40),
(1092, 203, 2, 20),
(1093, 203, 3, 20),
(1102, 204, 0, 10),
(1103, 204, 1, 40),
(1104, 204, 2, 20),
(1105, 204, 3, 20),
(1110, 206, 0, 5),
(1111, 206, 1, 15),
(1112, 206, 2, 30),
(1113, 206, 3, 15),
(1114, 206, 4, 15),
(1115, 206, 5, 20),
(1120, 207, 0, 10),
(1121, 207, 1, 40),
(1122, 207, 2, 20),
(1123, 207, 3, 20),
(1124, 208, 0, 20),
(1125, 208, 1, 20),
(1126, 208, 2, 20),
(1127, 208, 3, 20),
(1128, 208, 4, 20),
(1129, 209, 0, 10),
(1130, 209, 1, 40),
(1131, 209, 2, 20),
(1132, 209, 3, 20),
(1133, 205, 0, 10),
(1134, 205, 1, 40),
(1135, 205, 2, 20),
(1136, 205, 3, 20),
(1145, 210, 0, 10),
(1146, 210, 1, 40),
(1147, 210, 2, 20),
(1148, 210, 3, 20),
(1149, 211, 0, 10),
(1150, 211, 1, 40),
(1151, 211, 2, 20),
(1152, 211, 3, 20),
(1153, 212, 0, 10),
(1154, 212, 1, 40),
(1155, 212, 2, 20),
(1156, 212, 3, 20),
(1162, 213, 0, 20),
(1163, 213, 1, 20),
(1164, 213, 2, 20),
(1165, 213, 3, 20),
(1166, 213, 4, 20),
(1175, 214, 0, 10),
(1176, 214, 1, 30),
(1177, 214, 2, 30),
(1178, 214, 3, 30),
(1191, 215, 0, 10),
(1192, 215, 1, 40),
(1193, 215, 2, 20),
(1194, 215, 3, 20),
(1211, 216, 0, 10),
(1212, 216, 1, 40),
(1213, 216, 2, 20),
(1214, 216, 3, 25),
(1219, 217, 0, 10),
(1220, 217, 1, 40),
(1221, 217, 2, 20),
(1222, 217, 3, 20),
(1223, 218, 0, 10),
(1224, 218, 1, 40),
(1225, 218, 2, 20),
(1226, 218, 3, 20),
(1235, 219, 0, 10),
(1236, 219, 1, 40),
(1237, 219, 2, 20),
(1238, 219, 3, 20),
(1243, 220, 0, 10),
(1244, 220, 1, 40),
(1245, 220, 2, 20),
(1246, 220, 3, 20),
(1247, 221, 0, 5),
(1248, 221, 1, 15),
(1249, 221, 2, 30),
(1250, 221, 3, 15),
(1251, 221, 4, 15),
(1252, 221, 5, 20),
(1253, 222, 0, 5),
(1254, 222, 1, 15),
(1255, 222, 2, 30),
(1256, 222, 3, 15),
(1257, 222, 4, 15),
(1258, 222, 5, 20),
(1259, 223, 0, 5),
(1260, 223, 1, 15),
(1261, 223, 2, 30),
(1262, 223, 3, 15),
(1263, 223, 4, 15),
(1264, 223, 5, 20),
(1265, 224, 0, 5),
(1266, 224, 1, 15),
(1267, 224, 2, 30),
(1268, 224, 3, 15),
(1269, 224, 4, 15),
(1270, 224, 5, 20),
(1271, 225, 0, 5),
(1272, 225, 1, 15),
(1273, 225, 2, 30),
(1274, 225, 3, 15),
(1275, 225, 4, 15),
(1276, 225, 5, 20),
(1277, 226, 0, 25),
(1278, 226, 1, 25),
(1279, 226, 2, 25),
(1280, 226, 3, 25),
(1293, 228, 0, 5),
(1294, 228, 1, 15),
(1295, 228, 2, 30),
(1296, 228, 3, 15),
(1297, 228, 4, 15),
(1298, 228, 5, 20),
(1299, 227, 0, 25),
(1300, 227, 1, 25),
(1301, 227, 2, 25),
(1302, 227, 3, 25),
(1303, 229, 0, 25),
(1304, 229, 1, 25),
(1305, 229, 2, 25),
(1306, 229, 3, 25),
(1307, 230, 0, 25),
(1308, 230, 1, 25),
(1309, 230, 2, 25),
(1310, 230, 3, 25),
(1311, 231, 0, 25),
(1312, 231, 1, 25),
(1313, 231, 2, 25),
(1314, 231, 3, 25),
(1315, 232, 0, 5),
(1316, 232, 1, 15),
(1317, 232, 2, 30),
(1318, 232, 3, 15),
(1319, 232, 4, 15),
(1320, 232, 5, 20),
(1329, 233, 0, 25),
(1330, 233, 1, 25),
(1331, 233, 2, 25),
(1332, 233, 3, 25),
(1349, 234, 0, 25),
(1350, 234, 1, 25),
(1351, 234, 2, 25),
(1352, 234, 3, 25),
(1385, 236, 0, 25),
(1386, 236, 1, 25),
(1387, 236, 2, 25),
(1388, 236, 3, 25),
(1389, 237, 0, 5),
(1390, 237, 1, 15),
(1391, 237, 2, 30),
(1392, 237, 3, 15),
(1393, 237, 4, 15),
(1394, 237, 5, 20),
(1395, 238, 0, 5),
(1396, 238, 1, 15),
(1397, 238, 2, 30),
(1398, 238, 3, 15),
(1399, 238, 4, 15),
(1400, 238, 5, 20),
(1401, 239, 0, 5),
(1402, 239, 1, 15),
(1403, 239, 2, 30),
(1404, 239, 3, 15),
(1405, 239, 4, 15),
(1406, 239, 5, 20),
(1407, 235, 0, 25),
(1408, 235, 1, 25),
(1409, 235, 2, 25),
(1410, 235, 3, 25),
(1411, 240, 0, 25),
(1412, 240, 1, 25),
(1413, 240, 2, 25),
(1414, 240, 3, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sales_masters`
--

CREATE TABLE `sales_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `sign_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_masters`
--

INSERT INTO `sales_masters` (`id`, `user_id`, `sign_name`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 22, '22.png', NULL, 36, NULL, NULL, '2023-03-03 00:34:35', '2023-03-03 00:34:35'),
(2, 21, '21.png', NULL, 36, NULL, NULL, '2023-03-03 00:34:53', '2023-03-03 00:34:53'),
(3, 22, '22.png', NULL, 36, NULL, NULL, '2023-03-03 00:36:52', '2023-03-03 00:36:52'),
(4, 27, '27.png', NULL, 36, NULL, NULL, '2023-03-03 01:13:23', '2023-03-03 01:13:23'),
(5, 27, '27.jpg', NULL, 36, NULL, NULL, '2023-03-03 01:13:41', '2023-03-03 01:13:41'),
(6, 26, '26.jpg', NULL, 36, NULL, NULL, '2023-03-03 01:34:33', '2023-03-03 01:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `sub_menus`
--

CREATE TABLE `sub_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) NOT NULL DEFAULT '0' COMMENT 'description_masters id',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_menus`
--

INSERT INTO `sub_menus` (`id`, `menu_id`, `text`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 7, 'High Resolution Border', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 7, 'Guilloche Pattern', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 7, 'Rainbow Color', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 7, 'Void Pantograph / Anticopy', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 7, 'Latent Image', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 7, 'Watermark Logo / Image', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 'See Through Image', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 7, 'Relief Design', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 7, 'Micro Text/Line', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 7, 'Micro Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 7, 'Inverse Micro Text', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 7, 'Spelling Mistake', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 7, 'Latent Text', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 7, 'Mirror Text', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 7, 'Micro Text Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 7, 'Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 8, 'Invisible Fluorescent Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 8, 'Invisible Fluorescent Sign', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 8, 'Invisible Fluorescent Text', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 8, 'Thermochromik Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 8, 'Conductive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 8, 'Visible Fluorescent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 8, 'Photochromic Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 8, 'Watermark Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, 'Fugitive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 8, 'Holographic Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 8, 'InfraRed Invisible Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 8, 'Taggent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 8, 'Coin Reactive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 8, 'Solvent Sensitive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 9, 'Barcode', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 9, 'QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 9, 'Serial Number', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 9, 'Variable Data', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 9, 'Variable Micro Text', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 9, 'Variable Watermark Text', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 10, 'Encrypted QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 10, 'Dynamic Microline', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 10, 'Dynamic Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 10, 'Track and Trace Barcode', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 10, 'Watermark', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 10, 'Dynamic Invisible', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 11, 'Hologram', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 11, 'Blind Embossing', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 11, 'Foil Stamping', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 11, 'Foil Stamping + Blind Embossing', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 11, 'Lamination', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 4, 'Bond', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 4, 'Color Center', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 4, 'MICR', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 4, 'CB', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 4, 'CFB', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 4, 'CF', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 4, 'SC', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 4, 'SCCB', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 4, 'Thermal', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 4, 'Parchment', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 4, 'Tear Resistant', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 4, 'Non-Tearable', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 12, 'Paper', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 12, 'Plastic', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 14, 'Black', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 14, 'White', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 14, 'Gray', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 14, 'Other', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 15, 'Fanfold', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 15, 'Cut-sheet', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 15, 'Roll', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 15, 'Saddle Sticthing', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 15, 'Side Stitching', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 15, 'Pinning', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 22, 'Encrypted QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 22, 'Open QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 22, 'Track n Trace Barcode', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 22, 'Variable Invisible Text', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 22, 'Variable Invisible Image', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 22, 'Variable Watermark Security Line', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 22, 'Variable Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 22, 'Variable Micro Text', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 22, 'Mobile &amp; Web App for Verification', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 22, 'Secured Depository', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 23, 'High Resolution Border', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 23, 'Guilloche Pattern Design', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 23, 'Micro Text / Micro Line', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 23, 'Anti-Copy / Void Pantograph', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 23, 'Ghost / Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 23, 'Latent Image', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 23, 'Relief Design', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 23, 'Reverse text', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 23, 'Intentional Wrong Spelling', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 23, 'Watermark Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 23, 'Prismatic Printing', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 24, 'Invisible UV Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 24, 'Thermochromic Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 24, 'Fluorescent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 24, 'Conductive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 24, 'Hot Foil Stamping – Gold / Silver', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 24, 'Original/Genuine Hologram', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 24, 'Serial Numbering', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 24, 'See Through Image', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sgst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `igst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `sgst`, `cgst`, `igst`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', NULL, 36, NULL, NULL, '2023-02-13 04:50:23', '2023-02-13 05:19:02'),
(2, '2', '2', '2', NULL, 36, NULL, NULL, '2023-02-13 04:50:51', '2023-02-13 05:19:05'),
(3, '3', '3', '3', NULL, 36, NULL, NULL, '2023-02-13 04:57:36', '2023-02-13 05:19:09'),
(4, '4', '4', '4', '2023-03-17 06:19:36', 36, NULL, NULL, '2023-02-14 01:13:53', '2023-03-17 06:19:36'),
(5, '1', '2', '2', '2023-03-17 06:19:32', 36, NULL, NULL, '2023-03-17 06:10:04', '2023-03-17 06:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `tax_structure_masters`
--

CREATE TABLE `tax_structure_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `tax_id` bigint(20) DEFAULT '0' COMMENT 'tbl_tax id',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0' COMMENT '0 = inactive, 1 = active',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ac_type`
--

CREATE TABLE `tbl_ac_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ac_type`
--

INSERT INTO `tbl_ac_type` (`id`, `description`) VALUES
(62, 'SB'),
(63, 'CA'),
(64, 'OD'),
(65, 'CC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baby_roll_making_coating_side`
--

CREATE TABLE `tbl_baby_roll_making_coating_side` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_baby_roll_making_coating_side`
--

INSERT INTO `tbl_baby_roll_making_coating_side` (`id`, `description`) VALUES
(1, 'Inner'),
(2, 'Outer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_back_side_color_coating`
--

CREATE TABLE `tbl_back_side_color_coating` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_back_side_color_coating`
--

INSERT INTO `tbl_back_side_color_coating` (`id`, `description`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barcode_human_readable_text_to_show`
--

CREATE TABLE `tbl_barcode_human_readable_text_to_show` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barcode_human_readable_text_to_show`
--

INSERT INTO `tbl_barcode_human_readable_text_to_show` (`id`, `description`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barcode_orientation`
--

CREATE TABLE `tbl_barcode_orientation` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barcode_orientation`
--

INSERT INTO `tbl_barcode_orientation` (`id`, `description`) VALUES
(1, 'Standing'),
(2, 'Sleeping');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carbon_option`
--

CREATE TABLE `tbl_carbon_option` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_carbon_option`
--

INSERT INTO `tbl_carbon_option` (`id`, `description`) VALUES
(1, 'Without Carbon'),
(2, 'With Carbon');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(1, 'Pre-Press', NULL, '2022-05-20 12:03:49', NULL, '2022-05-20 12:03:49'),
(2, 'Post-Press', NULL, '2022-05-20 12:04:42', NULL, '2022-05-20 12:04:42'),
(3, 'Press', NULL, '2022-05-20 12:04:51', NULL, '2022-05-20 12:04:51'),
(4, 'Other', NULL, '2022-05-20 12:05:00', NULL, '2022-05-20 12:05:00'),
(5, 'FABRIC', NULL, '2022-05-20 12:05:08', NULL, '2022-05-20 12:05:08'),
(6, 'WATER MARK PROSS', NULL, '2022-05-20 12:05:17', NULL, '2022-05-20 12:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `unique_id`, `code`, `description`, `country`, `state`, `remark`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(15, NULL, 'Ahmedabad', 'Ahmedabad', 54, 17, NULL, 0, '2022-05-04 12:05:42', NULL, NULL),
(16, NULL, 'Surat', 'Surat', 54, 17, NULL, 0, '2022-05-04 12:05:55', NULL, NULL),
(17, NULL, 'Patna', 'Patna', 54, 16, NULL, 0, '2022-05-04 12:05:45', NULL, NULL),
(18, 'CI/18', 'gf', 'hfg', 54, 16, NULL, 999999999, '2022-08-06 11:08:52', NULL, NULL),
(19, 'CI/19', 'CA', 'parel', 54, 17, NULL, 9, '2022-08-08 07:08:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coating`
--

CREATE TABLE `tbl_coating` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_coating`
--

INSERT INTO `tbl_coating` (`id`, `description`) VALUES
(1, 'First Side'),
(2, 'Second Side'),
(3, 'Both Side');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_coating_thermal`
--

CREATE TABLE `tbl_coating_thermal` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_coating_thermal`
--

INSERT INTO `tbl_coating_thermal` (`id`, `description`) VALUES
(1, 'Inside'),
(2, 'Outside');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_collating_type`
--

CREATE TABLE `tbl_collating_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_collating_type`
--

INSERT INTO `tbl_collating_type` (`id`, `description`) VALUES
(1, 'One Side'),
(2, 'Two Side');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `company_id` varchar(30) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `registered_address` text NOT NULL,
  `corresponding_address` text,
  `phone_number` varchar(15) DEFAULT NULL,
  `fax_no` varchar(25) DEFAULT NULL,
  `vat_regs_no` varchar(55) DEFAULT NULL,
  `grio_no` varchar(55) DEFAULT NULL,
  `bank` varchar(55) DEFAULT NULL,
  `branch` varchar(55) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `sales_tax_declaration` varchar(255) DEFAULT NULL,
  `terms_condition` text,
  `company_prefix` varchar(30) NOT NULL,
  `service_reg_no` varchar(30) DEFAULT NULL,
  `service_reg_no_dated` date DEFAULT NULL,
  `tin_no` varchar(30) DEFAULT NULL,
  `pan_no` varchar(30) DEFAULT NULL,
  `ecc_no` varchar(30) DEFAULT NULL,
  `ecc_dated` date DEFAULT NULL,
  `excise_rabge` varchar(30) DEFAULT NULL,
  `excise_division` varchar(30) DEFAULT NULL,
  `commissioner_rate` varchar(30) DEFAULT NULL,
  `gst_no` varchar(30) DEFAULT NULL,
  `arn_no` varchar(30) DEFAULT NULL,
  `it_tds` varchar(30) DEFAULT NULL,
  `cin_no` varchar(30) DEFAULT NULL,
  `correspondant_bank` varchar(30) DEFAULT NULL,
  `correspondant_account_no` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `swift_bic_code` varchar(30) DEFAULT NULL,
  `header_image` varchar(255) NOT NULL,
  `footer_image` varchar(255) NOT NULL,
  `stamp_image` varchar(255) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `unique_id`, `company_id`, `name`, `registered_address`, `corresponding_address`, `phone_number`, `fax_no`, `vat_regs_no`, `grio_no`, `bank`, `branch`, `account_no`, `sales_tax_declaration`, `terms_condition`, `company_prefix`, `service_reg_no`, `service_reg_no_dated`, `tin_no`, `pan_no`, `ecc_no`, `ecc_dated`, `excise_rabge`, `excise_division`, `commissioner_rate`, `gst_no`, `arn_no`, `it_tds`, `cin_no`, `correspondant_bank`, `correspondant_account_no`, `location`, `swift_bic_code`, `header_image`, `footer_image`, `stamp_image`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(47, NULL, NULL, 'Devharsh Infotech Pvt Ltd', 'Bhumi Industrial Park, Bhumi World, \r\nBldg.No.D-5, Gala No.24,25, \r\nPimplas Village, Mumbai Nasik Highway (NH-3)\r\nBhiwandi, Dist-Thane 421 302', 'Bhumi Industrial Park, Bhumi World, \r\nBldg.No.1, Gala No.24,25, \r\nPimplas Village, Mumbai Nasik Highway (NH-3)\r\nBhiwandi, Dist-Thane 421 302', '7718867479', NULL, '27150372103V', NULL, 'IDBI BANK', 'MARI GOLD HOUSE ANDHERI WEST', '0039651100003186', '055100101003261', 'Please check the material on receipt. Any complaint about short quantity or of any other nature will be accepted within 3 days from the date of receipt of material. Our responsibility casses once the material has been received and acknowledged by your office/ store/ Dept./ User.', 'DI', 'AACCD1967ASD001', '2015-01-20', '27150372103V', 'AACCD1967A', 'AACCD1967AEM002', '2022-06-20', 'I', 'KALYAN-I', 'THANE -I', '27AACCD1967A1ZZ', 'AA270217027216F', NULL, 'U30007MH2004PTC146993', NULL, NULL, NULL, NULL, 'Devharsh_Infotech_Pvt_Ltd_header.png', 'Devharsh_Infotech_Pvt_Ltd_footer.png', 'Devarsh_Stamp.png', 9, '2022-06-20 12:06:09', 9, '2022-11-01 09:11:21'),
(49, 'CO/49', NULL, 'Scube', 'Ghatkopar', 'Kurla', '8850292852', 'No12345', 'Vat12346', '12345', 'Sarswat Bank', 'Pune', '012345678', '012345678', NULL, 'Com', NULL, '2022-10-28', NULL, NULL, NULL, '2022-10-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Scube_header.jpg', 'Scube_footer.jpg', 'SSSL_Stamp.png', 9, '2022-10-28 05:10:50', 9, '2022-11-03 06:11:05'),
(50, 'CO/50', NULL, 'gfgf', 'fgf', 'gfg', '1234567890', 'gfgf', 'gfg', 'gfgf', 'gfg', 'ghg', 'hhghg', 'hhghg', 'hghgh', 'ewe', 'hghg', '2023-02-13', 'hghg', 'hgh', 'ghgh', '2023-02-13', 'hghg', 'hgh', 'ghgh', 'hghg', 'hgh', 'hghg', 'ghgh', 'hghg', 'hghgh', 'hghg', 'hghgh', 'gfgf_header.png', 'gfgf_footer.png', 'gfgf_stamp.png', 36, '2023-02-13 06:02:25', NULL, NULL),
(51, 'CO/51', NULL, 'Valentine Chandler Co', 'Rerum nemo rerum sae', 'In doloremque ipsum', '12089878342', '+1 (719) 313-7928', 'Ex molestiae id und', 'Officia non molestia', 'Excepteur eum ut dol', 'Sed voluptatem est e', 'Explicabo Mollit re', 'Explicabo Mollit re', 'Ad cum quas adipisic', 'Doy', 'Porro impedit deser', '2023-03-20', 'Repellendus Quo Nam', 'Proident quia fugit', 'Suscipit praesentium', '2023-03-20', 'Ducimus assumenda q', 'Aliquip ex asperiore', 'Id labore dignissimo', 'Rem dolores cillum e', 'Natus officia est t', 'Earum autem lorem es', 'Dolorum dolores veli', 'Sed tempora dolorum', 'Aliquam nobis archit', 'Velit ex voluptates', 'Sed ut aspernatur na', 'Valentine Chandler Co_header.png', 'Valentine Chandler Co_footer.png', 'Valentine Chandler Co_stamp.png', 36, '2023-03-20 09:03:52', NULL, NULL),
(52, 'CO/52', NULL, 'Valentine Chandler Co', 'Rerum nemo rerum sae', 'In doloremque ipsum', '12089878342', '+1 (719) 313-7928', 'Ex molestiae id und', 'Officia non molestia', 'Excepteur eum ut dol', 'Sed voluptatem est e', 'Explicabo Mollit re', 'Explicabo Mollit re', 'Ad cum quas adipisic', 'Doy', 'Porro impedit deser', '2023-03-20', 'Repellendus Quo Nam', 'Proident quia fugit', 'Suscipit praesentium', '2023-03-20', 'Ducimus assumenda q', 'Aliquip ex asperiore', 'Id labore dignissimo', 'Rem dolores cillum e', 'Natus officia est t', 'Earum autem lorem es', 'Dolorum dolores veli', 'Sed tempora dolorum', 'Aliquam nobis archit', 'Velit ex voluptates', 'Sed ut aspernatur na', 'Valentine Chandler Co_header.png', 'Valentine Chandler Co_footer.png', 'Valentine Chandler Co_stamp.png', 36, '2023-03-20 09:03:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cost_center`
--

CREATE TABLE `tbl_cost_center` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cost_center`
--

INSERT INTO `tbl_cost_center` (`id`, `description`) VALUES
(62, 'Rakesh Shah'),
(63, 'Dilip Shah'),
(64, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currency`
--

CREATE TABLE `tbl_currency` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_currency`
--

INSERT INTO `tbl_currency` (`id`, `description`) VALUES
(1, 'Currency 1'),
(2, 'Currency 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `product_category` tinyint(2) NOT NULL,
  `product_type` tinyint(2) DEFAULT NULL,
  `job_card_no` varchar(55) NOT NULL,
  `job_card_title` varchar(55) NOT NULL,
  `company_product_no` varchar(55) DEFAULT NULL,
  `product_name_by_customer` varchar(55) DEFAULT NULL,
  `width` varchar(55) DEFAULT NULL,
  `width_unit` tinyint(2) DEFAULT NULL,
  `height` varchar(55) DEFAULT NULL,
  `height_unit` tinyint(2) DEFAULT NULL,
  `part_ply` int(10) DEFAULT NULL,
  `item_type` tinyint(2) DEFAULT NULL,
  `special_instructions` varchar(300) DEFAULT NULL,
  `perforation` tinyint(2) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `unique_id`, `type`, `product_category`, `product_type`, `job_card_no`, `job_card_title`, `company_product_no`, `product_name_by_customer`, `width`, `width_unit`, `height`, `height_unit`, `part_ply`, `item_type`, `special_instructions`, `perforation`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(85, NULL, NULL, 45, NULL, 'job card no', 'job card title', 'company product no', 'product name by company', '30', 18, '50', 19, 1, 3, 'special instruction', 2, 999999999, '2022-06-17 11:06:21', 999999999, '2022-06-18 07:06:05'),
(86, NULL, NULL, 47, 75, 'card no', 'card title', NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 999999999, '2022-06-18 07:06:31', 999999999, '2022-06-18 08:06:02'),
(87, NULL, NULL, 47, 75, 'asndj', 'djcasndj', NULL, 'ksdfnkds', NULL, NULL, NULL, NULL, 2, NULL, 'sad', NULL, 999999999, '2022-06-21 12:06:05', NULL, NULL),
(88, NULL, NULL, 47, 75, 'asndj', 'djcasndj', NULL, 'ksdfnkds', NULL, NULL, NULL, NULL, 3, NULL, 'sad', NULL, 999999999, '2022-06-21 12:06:14', NULL, NULL),
(89, NULL, NULL, 46, NULL, 'fsdfd', 'sdfds', NULL, 'sdfds', 'asdsa', 18, 'asdas', 20, 2, 3, 'sdfsd', 2, 999999999, '2022-06-21 12:06:22', NULL, NULL),
(90, NULL, NULL, 46, NULL, 'fsdfd', 'sdfds', NULL, 'sdfds', 'asdsa', 18, 'asdas', 20, 3, 3, 'sdfsd', 2, 999999999, '2022-06-21 12:06:33', NULL, NULL),
(91, NULL, NULL, 46, NULL, 'cvcx', 'fddxfs', NULL, 'czxc', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 999999999, '2022-06-21 12:06:17', NULL, NULL),
(92, NULL, NULL, 47, NULL, 'ddfds', 'dffds', NULL, 'dfds', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 999999999, '2022-06-21 12:06:43', NULL, NULL),
(93, NULL, NULL, 48, NULL, 'sadsa', 'sadsa', NULL, 'sadsa', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 999999999, '2022-06-21 12:06:52', NULL, NULL),
(94, NULL, NULL, 48, NULL, 'vxcv', 'xcvcx', NULL, 'xcvc', NULL, NULL, NULL, NULL, 2, NULL, 'dadsd', NULL, 999999999, '2022-06-21 12:06:56', NULL, NULL),
(95, NULL, NULL, 46, NULL, 'das', 'assad', NULL, 'asdsaas', NULL, NULL, NULL, NULL, 2, NULL, 'cxcz', NULL, 999999999, '2022-06-22 06:06:31', NULL, NULL),
(96, NULL, NULL, 47, 75, 'xcxzc', 'xzcxzc', NULL, 'xcz', NULL, NULL, NULL, NULL, 2, NULL, 'cxzc', NULL, 999999999, '2022-06-22 07:06:36', NULL, NULL),
(97, NULL, NULL, 47, NULL, 'sadsa', 'sdsa', NULL, 'asdsa', NULL, NULL, NULL, NULL, 2, NULL, 'asdas', NULL, 999999999, '2022-06-22 07:06:16', NULL, NULL),
(98, NULL, NULL, 47, NULL, 'sadas', 'saadsa', NULL, 'das', NULL, NULL, NULL, NULL, 2, NULL, 'dsa', NULL, 999999999, '2022-06-22 09:06:35', NULL, NULL),
(99, NULL, NULL, 46, NULL, 'dsada', 'dsa', NULL, 'sada', NULL, NULL, NULL, NULL, 2, NULL, 'zdsf', NULL, 999999999, '2022-06-22 09:06:40', NULL, NULL),
(100, NULL, NULL, 47, NULL, 'asdfsf', 'fsdf', NULL, 'ds', NULL, NULL, NULL, NULL, 2, NULL, 'sdsa', NULL, 999999999, '2022-06-22 11:06:15', NULL, NULL),
(101, NULL, NULL, 47, 75, 'asdfsd', 'ddsafd', NULL, 'asd', NULL, NULL, NULL, NULL, 2, NULL, 'asdas', NULL, 999999999, '2022-06-22 11:06:24', NULL, NULL),
(102, NULL, NULL, 47, 75, 'wdasd', 'sddas', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 'sdas', NULL, 999999999, '2022-06-22 11:06:41', NULL, NULL),
(103, NULL, NULL, 48, NULL, 'csdfds', 'sfsd', NULL, 'sdfsd', NULL, NULL, NULL, NULL, 2, NULL, 'dff', NULL, 999999999, '2022-06-22 12:06:01', NULL, NULL),
(104, NULL, NULL, 47, NULL, 'dfds', 'sdfsd', NULL, 'dvfds', NULL, NULL, NULL, NULL, 2, NULL, 'dfsd', NULL, 999999999, '2022-06-22 12:06:58', NULL, NULL),
(105, NULL, NULL, 48, NULL, 'aaaaa', 'aaaaa', NULL, 'aaaaa', NULL, NULL, NULL, NULL, 2, NULL, 'aaaaa', NULL, 999999999, '2022-06-23 11:06:29', NULL, NULL),
(106, NULL, NULL, 47, 75, 'ttt', 'ttt', NULL, 'ttt', NULL, NULL, NULL, NULL, 2, NULL, 'ttt', NULL, 999999999, '2022-06-24 12:06:08', NULL, NULL),
(107, NULL, NULL, 47, 75, 'sdasdsa', 'dassadsa', NULL, 'asdsa', NULL, NULL, NULL, NULL, 2, NULL, 'sadad', NULL, 999999999, '2022-06-24 12:06:36', NULL, NULL),
(108, NULL, NULL, 46, NULL, 'sadsaas', 'dsa', NULL, 'sadsa', NULL, NULL, NULL, NULL, 2, NULL, 'dadas', NULL, 999999999, '2022-06-24 12:06:06', NULL, NULL),
(109, NULL, NULL, 46, NULL, 'zzzz', 'zzzz', NULL, 'zzzz', NULL, NULL, NULL, NULL, 2, NULL, 'zzzz', NULL, 999999999, '2022-06-24 12:06:29', NULL, NULL),
(110, NULL, NULL, 46, NULL, 'asasa', 'asasa', NULL, 'asasa', NULL, NULL, NULL, NULL, 2, NULL, 'asasa', NULL, 999999999, '2022-06-24 12:06:26', NULL, NULL),
(111, NULL, NULL, 46, NULL, 'dasdas', 'sdasa', NULL, 'assdsa', NULL, NULL, NULL, NULL, 2, NULL, 'sdsa', NULL, 999999999, '2022-06-24 12:06:29', NULL, NULL),
(112, NULL, NULL, 46, NULL, 'aabb', 'aabb', NULL, 'aabb', NULL, NULL, NULL, NULL, 2, NULL, 'aabb', 1, 999999999, '2022-06-28 11:06:40', NULL, NULL),
(113, NULL, NULL, 46, NULL, 'dddd', 'dddd', 'dddd', 'ddd', NULL, NULL, NULL, NULL, 3, NULL, 'sda', NULL, 999999999, '2022-06-29 10:06:12', NULL, NULL),
(114, NULL, NULL, 47, 75, 'asda', 'assdas', NULL, 'sd', NULL, NULL, NULL, NULL, 3, NULL, 'asdas', NULL, 999999999, '2022-06-29 10:06:11', NULL, NULL),
(115, NULL, NULL, 47, 75, 'masdjba', 'bjfbsd', NULL, 'fbsdjb', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 999999999, '2022-06-29 10:06:39', 999999999, '2022-06-29 10:06:26'),
(116, NULL, NULL, 47, NULL, 'bjb', ',,nkn', NULL, 'mbbj', NULL, NULL, NULL, NULL, 4, NULL, 'nbnb', NULL, 999999999, '2022-06-29 10:06:21', NULL, NULL),
(117, NULL, NULL, 48, NULL, 'fds', 'fds', NULL, 'ds', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 999999999, '2022-06-29 11:06:28', NULL, NULL),
(118, NULL, NULL, 46, NULL, 'asdsa', 'asdsaa', NULL, 'sdasd', NULL, NULL, NULL, NULL, 5, NULL, 'asda', NULL, 999999999, '2022-06-29 11:06:20', 999999999, '2022-06-29 11:06:42'),
(119, NULL, NULL, 47, NULL, 'nfksn', 'aknfk', NULL, 'kfdnkd', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-02 10:07:20', NULL, NULL),
(120, NULL, NULL, 46, NULL, 'dsfk', 'kfbak', NULL, 'kddnfkds', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-02 10:07:52', NULL, NULL),
(121, NULL, NULL, 47, NULL, 'nfsdkn', 'knfksn', NULL, 'knfksndf', 'lsmksdam', 18, 'fsd', NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-02 10:07:07', NULL, NULL),
(122, NULL, NULL, 45, NULL, 'nsdjnsna', 'kndfkasn', NULL, 'ndsakdn', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-02 11:07:41', NULL, NULL),
(123, NULL, NULL, 47, NULL, 'nckns', 'kncknd', NULL, 'knsfskdn', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-02 12:07:54', NULL, NULL),
(124, NULL, NULL, 47, 75, 'sdkfnkn', 'nafkan', NULL, 'sfnksdn', NULL, NULL, NULL, NULL, 1, NULL, 'sdfds', NULL, 999999999, '2022-07-05 10:07:42', NULL, NULL),
(125, NULL, NULL, 47, NULL, 'bbb', 'bbb', NULL, 'bbb', 'bbb', NULL, 'bbb', NULL, 1, NULL, 'bbb', NULL, 999999999, '2022-07-05 10:07:45', NULL, NULL),
(126, NULL, NULL, 46, NULL, 'no 1', 'title 1', 'no 1', 'cust 1', '100', 18, '200', 20, 1, 4, 'instruction 1', 2, 999999999, '2022-07-05 12:07:59', NULL, NULL),
(127, NULL, NULL, 47, 75, 'dakdn', 'knkfsdn', NULL, 'kndkfs', NULL, NULL, NULL, NULL, 1, NULL, 'asasd', NULL, 999999999, '2022-07-06 11:07:23', NULL, NULL),
(128, NULL, NULL, 47, NULL, 'sss', 'sss', NULL, 'sss', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-11 07:07:02', NULL, NULL),
(129, NULL, NULL, 47, NULL, 'fdsf', 'dsfds', NULL, 'dsfds', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-11 12:07:26', NULL, NULL),
(130, NULL, NULL, 46, NULL, 'czxcz', 'cxzcz', NULL, 'xzczx', NULL, NULL, NULL, NULL, 1, NULL, 'czc', NULL, 999999999, '2022-07-12 10:07:24', NULL, NULL),
(131, NULL, NULL, 46, NULL, 'Test', 'Test', NULL, 'Test', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 999999999, '2022-07-12 11:07:34', 999999999, '2022-07-12 11:07:35'),
(132, NULL, NULL, 47, NULL, 'sss', 'sss', NULL, 'ss', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-12 12:07:14', NULL, NULL),
(133, NULL, NULL, 47, NULL, 'zfs', 'sfdfs', NULL, 'sdfds', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-12 12:07:15', NULL, NULL),
(134, NULL, NULL, 46, NULL, 'za', 'za', NULL, 'za', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-13 07:07:31', NULL, NULL),
(135, NULL, NULL, 46, NULL, 'asa', 'sas', NULL, 'sS', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 09:07:50', NULL, NULL),
(136, NULL, NULL, 46, NULL, 'FFFF', 'FFFF', NULL, 'FFFF', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 09:07:16', NULL, NULL),
(137, NULL, NULL, 47, NULL, 'hhh', 'hhh', NULL, 'hhh', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 09:07:09', NULL, NULL),
(138, NULL, NULL, 47, 75, 'cc', 'cc', NULL, 'cc', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 10:07:00', NULL, NULL),
(139, NULL, NULL, 46, NULL, 'zczc', 'zczdcz', NULL, 'zczx', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 11:07:41', NULL, NULL),
(140, NULL, NULL, 47, NULL, 'hhh', 'hhh', NULL, 'hhh', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 11:07:03', NULL, NULL),
(141, NULL, NULL, 46, NULL, 'asda', 'sad', NULL, 'sadsa', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-14 12:07:58', NULL, NULL),
(142, NULL, NULL, 47, 75, 'vcvc', 'vcvc', NULL, 'vcvc', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-15 12:07:00', NULL, NULL),
(143, NULL, NULL, 45, NULL, 'efdsf', 'dsfds', NULL, 'dfds', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-18 06:07:42', NULL, NULL),
(144, NULL, NULL, 47, NULL, 'hhh', 'hhh', NULL, 'hhh', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-18 10:07:53', NULL, NULL),
(145, NULL, NULL, 47, 75, 'sss', 'sss', 'sss', 'sss', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-18 10:07:33', NULL, NULL),
(146, NULL, NULL, 45, NULL, 'ttt', 'ttt', NULL, 'ttt', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-18 10:07:05', NULL, NULL),
(147, NULL, NULL, 47, 75, 'yyy', 'yyy', NULL, 'yyy', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-18 10:07:38', NULL, NULL),
(148, NULL, NULL, 46, NULL, 'czczx', 'czxc', NULL, 'zxcz', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-07-19 11:07:21', NULL, NULL),
(149, NULL, NULL, 46, NULL, 'fdsfsdfds', 'xdfdfd', NULL, 'dsfsdf', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-07-19 11:07:08', NULL, NULL),
(150, NULL, NULL, 45, NULL, 'czxc', 'czxc', NULL, 'czx', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-07-19 12:07:38', NULL, NULL),
(151, NULL, NULL, 45, NULL, 'jjjjj', 'jjjj', NULL, 'jjjj', NULL, NULL, NULL, NULL, 2, NULL, 'zxvxzv', 1, 9, '2022-07-19 01:07:32', 9, '2022-07-19 01:07:46'),
(152, NULL, NULL, 47, 75, 'dada', 'asdas', NULL, 'sadsa', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-19 05:07:35', NULL, NULL),
(153, NULL, NULL, 48, NULL, 'fdsf', 'dsf', NULL, 'sfds', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 999999999, '2022-07-20 01:07:01', NULL, NULL),
(154, NULL, NULL, 47, NULL, 'dfsdfdsf', 'dsfdsfsdfsd', NULL, 'fdsfdsf', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-07-20 05:07:07', NULL, NULL),
(155, NULL, NULL, 47, NULL, 'fgd', 'gffd', NULL, 'gfd', 'dfgfd', 18, 'gfd', 20, 3, 3, 'vcbc', 1, 999999999, '2022-07-20 05:07:53', 999999999, '2022-07-20 07:07:55'),
(156, NULL, NULL, 47, NULL, 'hhhh', 'hhhh', NULL, 'hhhh', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 999999999, '2022-07-20 08:07:27', NULL, NULL),
(157, NULL, NULL, 46, NULL, 'dasd', 'dsad', NULL, NULL, 'sadsa', NULL, NULL, NULL, 3, NULL, NULL, NULL, 999999999, '2022-07-21 07:07:36', NULL, NULL),
(158, NULL, NULL, 47, NULL, 'kkk', 'kkk', NULL, 'kkkk', NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, 999999999, '2022-07-21 07:07:59', NULL, NULL),
(159, NULL, NULL, 46, NULL, 'sadas', 'sdsad', NULL, 'sad', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, 999999999, '2022-07-21 07:07:28', 999999999, '2022-07-21 08:07:35'),
(160, NULL, NULL, 47, NULL, 'sdsa', 'sdasd', NULL, 'dsadas', 'sdfds', 18, 'dsfd', 20, 4, 1, 'ddadasd', 1, 999999999, '2022-07-21 08:07:07', 999999999, '2022-07-21 07:07:22'),
(161, NULL, NULL, 46, NULL, 'vxcvx', 'cxvxc', NULL, 'vxcv', NULL, NULL, 'cxvxcv', 19, 2, 1, 'cvcx', 2, 999999999, '2022-07-25 06:07:43', NULL, NULL),
(162, NULL, NULL, 47, 75, 'ffgg', 'ffgg', 'ffgg', 'ffgg', 'ffgg', 18, 'ffgg', 20, 2, 3, 'ffgg', 1, 999999999, '2022-07-25 12:07:22', NULL, NULL),
(163, NULL, NULL, 46, NULL, 'rt', 'rt', 'rt', 'rt', 'rt', 18, 'rt', 24, 2, 4, 'rt', 1, 999999999, '2022-07-25 12:07:57', NULL, NULL),
(164, NULL, NULL, 47, NULL, 'fsfs', 'fsfs', 'fsdfsd', 'fdsf', 'fdds', 18, 'fsdf', 24, 1, 2, 'sdgs', 1, 999999999, '2022-07-25 12:07:17', NULL, NULL),
(165, NULL, NULL, 47, 75, 'fdsfdsfds', 'fdsfsd', 'sdfdsf', 'dsfdsf', 'sfsf', 18, 'fdsfs', 20, 1, 1, 'dsfds', 1, 999999999, '2022-07-25 01:07:27', NULL, NULL),
(166, NULL, NULL, 46, NULL, 'dasd', 'sadsad', 'sadsad', 'sadasd', 'dsadsa', 18, 'sadsad', 20, 2, 4, 'sdasd', 2, 999999999, '2022-07-25 11:07:36', 999999999, '2022-07-26 03:07:10'),
(167, NULL, NULL, 49, 75, 'dsad', 'dasd', 'dasd', 'sad', 'asdas', 18, 'dasd', 20, 2, 3, 'sadsad', 1, 999999999, '2022-07-27 06:07:40', 999999999, '2022-07-27 06:07:15'),
(168, NULL, NULL, 46, NULL, 'fdsf', 'fsdf', 'fsdf', 'sdf', 'dsfds', 17, 'fsdf', 24, 3, 2, 'dfds', 2, 999999999, '2022-07-27 09:07:10', 999999999, '2022-07-27 09:07:01'),
(169, NULL, NULL, 46, NULL, '423423', '243423', '432', '32432', '23432', 18, '23432', 20, 2, 2, 'dfgdf', 1, 999999999, '2022-07-27 12:07:11', NULL, NULL),
(170, NULL, NULL, 47, NULL, 'dwewer', 'ewrwe', 'ewrwerwrwer', 'erewrw', 'erewr', 18, 'rwer', 19, 3, 2, 'rwer', 1, 999999999, '2022-07-27 07:07:00', 999999999, '2022-07-27 10:07:18'),
(171, NULL, NULL, 47, 75, 'sadsa', 'sad', 'dsadas', 'sada', 'asdsa', 18, 'sadsa', 20, 2, 2, 'sadsa', 2, 999999999, '2022-07-27 10:07:55', 999999999, '2022-07-27 10:07:24'),
(172, NULL, NULL, 46, NULL, 'dsfds', 'dsfds', 'dsfsd', 'dsf', 'fdsf', 18, 'dsfs', 19, 3, 2, 'fsd', 2, 999999999, '2022-07-27 10:07:19', 999999999, '2022-07-27 10:07:56'),
(173, NULL, NULL, 46, NULL, 'sAS', 'AS', 'asa', 'As', 'asdsa', 18, 'asa', 20, 1, 3, NULL, NULL, 999999999, '2022-07-27 11:07:19', NULL, NULL),
(174, NULL, NULL, 47, 75, 'AS', 'asaS', 'asAS', 'SAa', 'sAS', 18, 'Asa', 24, 2, 4, 'AS', 1, 999999999, '2022-07-27 11:07:37', 999999999, '2022-07-27 11:07:18'),
(175, NULL, NULL, 47, 75, 'sdasd', 'das', 'das', 'sad', 'asd', 18, 'da', 20, 4, 3, 'das', 1, 999999999, '2022-07-27 11:07:09', 999999999, '2022-07-29 01:07:33'),
(176, NULL, NULL, 48, NULL, '307', '307', '307', '307', '307', 18, '307', 19, 1, 1, '307', 2, 999999999, '2022-07-29 08:07:52', NULL, NULL),
(177, NULL, NULL, 47, 75, 'test 1', 'test 1', 'test 1', 'test 1', 'test 1', 18, 'test 1', 20, 1, 3, 'test 1', 1, 999999999, '2022-07-29 10:07:31', NULL, NULL),
(178, NULL, NULL, 47, 75, 'mnmn', 'mnmn', 'mnmn', 'mnmn', '55', 19, '34', 24, 2, 3, 'mnmn', 2, 999999999, '2022-07-29 10:07:11', NULL, NULL),
(179, NULL, NULL, 47, 75, 'ccc', 'ccc', 'ccc', 'ccc', 'ccc', 17, 'ccc', 20, 1, 2, 'ccc', 1, 999999999, '2022-07-30 10:07:01', NULL, NULL),
(180, NULL, NULL, 45, NULL, 'dasdsa', 'dasdsd', 'dsad', 'asda', 'asda', 17, 'dsad', NULL, 2, 2, 'sdsad', 1, 999999999, '2022-07-30 10:07:14', NULL, NULL),
(181, NULL, NULL, 46, NULL, 'sada', 'sad', 'dssa', 'asd', 'sad', 17, 'asdasd', 19, 1, 4, 'sad', 2, 999999999, '2022-07-30 10:07:21', NULL, NULL),
(182, NULL, NULL, 46, NULL, 'eqeqw', 'wqewq', 'wewq', 'ewqeqwe', 'wqeqwe', 17, 'eqweweq', 20, 2, 2, 'eqwe', 2, 999999999, '2022-07-30 11:07:19', NULL, NULL),
(183, NULL, NULL, 47, NULL, 'gdfg', 'dfgfd', 'gdfg', 'dfg', 'dfgd', 18, 'dfgfd', 20, 1, 4, 'rw', 1, 999999999, '2022-07-31 04:07:43', NULL, NULL),
(184, NULL, NULL, 46, NULL, 'xcvxc', 'cxvx', 'vxcv', 'xcvxc', 'xvcxv', 18, 'xcvxc', 24, 2, 4, 'zxc', 1, 999999999, '2022-07-31 05:07:07', NULL, NULL),
(185, NULL, NULL, 46, NULL, 'xcvxc', 'cxvx', 'vxcv', 'xcvxc', 'xvcxv', 18, 'xcvxc', 24, 2, 4, 'zxc', 1, 999999999, '2022-07-31 05:07:22', NULL, NULL),
(186, NULL, NULL, 21, 75, 'card no', 'card title', 'product no', 'name by customer', '35', 18, '65', 24, 2, 4, 'specla instruction', 1, 999999999, '2022-07-31 05:07:50', 999999999, '2022-08-02 11:08:28'),
(187, NULL, NULL, 21, 76, 'sadas', 'sad', 'sadsa', 'sad', 'sad', 24, 'dsas', 17, 1, 1, 'dsas', 2, 999999999, '2022-08-03 10:08:31', NULL, NULL),
(188, NULL, NULL, 21, 76, 'gsdfsd', 'fsdf', 'sdfsd', 'sdfs', 'sdfds', 18, 'fdsf', 24, 1, 2, 'dsfs', 2, 999999999, '2022-08-03 10:08:27', NULL, NULL),
(189, NULL, NULL, 21, 76, 'gsdfsd', 'fsdf', 'sdfsd', 'sdfs', 'sdfds', 18, 'fdsf', 24, 1, 2, 'dsfs', 2, 999999999, '2022-08-03 10:08:30', NULL, NULL),
(190, NULL, NULL, 21, 76, 'gsdfsd', 'fsdf', 'sdfsd', 'sdfs', 'sdfds', 18, 'fdsf', 24, 1, 2, 'dsfs', 2, 999999999, '2022-08-03 10:08:37', NULL, NULL),
(191, NULL, NULL, 21, 76, 'gsdfsd', 'fsdf', 'sdfsd', 'sdfs', 'sdfds', 18, 'fdsf', 24, 1, 2, 'dsfs', 2, 999999999, '2022-08-03 10:08:53', NULL, NULL),
(192, NULL, NULL, 21, 76, 'gsdfsd', 'fsdf', 'sdfsd', 'sdfs', 'sdfds', 18, 'fdsf', 24, 1, 2, 'dsfs', 2, 999999999, '2022-08-03 10:08:25', NULL, NULL),
(193, NULL, NULL, 21, NULL, 'asd', 'sada', 'sdas', 'dsad', 'sada', 18, 'asdsa', 20, 1, 2, 'das', 2, 999999999, '2022-08-03 10:08:33', NULL, NULL),
(194, NULL, NULL, 21, 76, 'sdsad', 'sdas', 'asdas', 'sdas', 'asda', 20, 'sdsa', 20, 1, 2, 'sada', 1, 999999999, '2022-08-03 11:08:38', NULL, NULL),
(195, NULL, NULL, 21, NULL, 'www', 'www', 'www', 'www', 'www', 19, 'www', 18, 3, 2, 'www', 2, 999999999, '2022-08-03 11:08:00', 999999999, '2022-08-04 12:08:00'),
(196, NULL, NULL, 21, 80, 'dsa', 'sdsa', NULL, 'sadas', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 999999999, '2022-08-08 08:08:56', NULL, NULL),
(197, NULL, NULL, 21, 80, 'dsa', 'sdsa', NULL, 'sadas', NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, 999999999, '2022-08-08 08:08:59', 999999999, '2022-08-08 08:08:14'),
(198, NULL, NULL, 22, 77, 'gsg', 'fgdf', 'fdds', 'sdfsd', 'dsf', 17, 'fdds', NULL, 11, NULL, 'xcz', 1, 999999999, '2022-08-12 03:08:56', 999999999, '2022-08-12 06:08:28'),
(199, NULL, NULL, 21, 77, 'xzc', 'xzc', 'cxz', 'zxc', 'xzcz', 18, 'zxcz', 19, 2, 2, 'xzcz', 2, 999999999, '2022-08-12 07:08:11', NULL, NULL),
(200, NULL, NULL, 21, 77, 'xzc', 'xzc', 'cxz', 'zxc', 'xzcz', 18, 'zxcz', 19, 2, 2, 'xzcz', 2, 999999999, '2022-08-12 07:08:27', NULL, NULL),
(201, NULL, NULL, 21, 77, 'xzc', 'xzc', 'cxz', 'zxc', 'xzcz', 18, 'zxcz', 19, 2, 2, 'xzcz', 2, 999999999, '2022-08-12 07:08:13', 999999999, '2022-08-12 07:08:32'),
(202, NULL, 'Thermal', 21, 77, 'asdsa', 'asd', NULL, 'asd', NULL, NULL, NULL, NULL, 1, NULL, 'sad', 1, 999999999, '2022-08-12 07:08:57', NULL, NULL),
(203, NULL, 'Thermal', 21, NULL, 'Thermal job 1', 'Thermal job 1', 'Thermal job 1', 'Thermal job 1', '2', 18, '3', 24, 5, 3, 'Thermal job 1', 2, 999999999, '2022-08-12 11:08:07', 999999999, '2022-08-12 11:08:20'),
(204, NULL, NULL, 21, 78, 'job card 1 todays', 'job card 1 todays', 'job card 1 todays', 'job card 1 todays', 'job card 1 todays', 17, 'job card 1 todays', 26, 2, 2, 'job card 1 todays', 2, 999999999, '2022-08-12 11:08:31', NULL, NULL),
(205, NULL, 'Thermal', 21, 76, 'xzcz', 'xzc', 'xzcxzxzc', 'xzc', 'xzc', 24, NULL, 19, 1, 3, 'gdf', 1, 999999999, '2022-08-16 06:08:21', NULL, NULL),
(206, NULL, 'Computer Stationary', 22, NULL, 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aa', 24, 'aa', 17, 1, 1, 'aaa', 1, 999999999, '2022-08-16 06:08:12', 999999999, '2022-08-16 06:08:00'),
(207, NULL, NULL, 21, 78, 'fsdf', 'fdsf', NULL, NULL, 'fdssd', 20, 'sdfdsf', 19, 1, 3, 'fdsf', 2, 999999999, '2022-08-16 10:08:50', 999999999, '2022-08-16 10:08:05'),
(208, NULL, 'Check', 22, NULL, 'fsdf', 'fsdf', NULL, NULL, 'sf', 17, 'sdfs', 18, 1, 1, 'dsf', 2, 999999999, '2022-08-16 10:08:15', 999999999, '2022-08-16 10:08:59'),
(209, NULL, NULL, 21, 78, 'cxv', 'cxvx', 'vcxvx', 'vxcv', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:15', NULL, NULL),
(210, NULL, NULL, 21, 78, 'cxv', 'cxvx', 'vcxvx', 'vxcv', NULL, NULL, NULL, NULL, 1, NULL, 'cv', 1, 999999999, '2022-08-22 06:08:36', NULL, NULL),
(211, NULL, NULL, 21, 78, 'cxv', 'cxvx', 'vcxvx', 'vxcv', NULL, NULL, NULL, NULL, 1, NULL, 'cv', 1, 999999999, '2022-08-22 06:08:47', NULL, NULL),
(212, 'JC/22-23/212', NULL, 21, 78, 'cxv', 'cxvx', 'vcxvx', 'vxcv', NULL, NULL, NULL, NULL, 1, NULL, 'cv', 1, 999999999, '2022-08-22 06:08:35', NULL, NULL),
(213, 'JC/22-23/213', 'Thermal', 21, 77, 'ds', 'dsd', NULL, 'da', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:13', NULL, NULL),
(214, 'JC/22-23/214', 'Thermal', 21, 77, 'ds', 'dsd', NULL, 'da', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:27', NULL, NULL),
(215, 'JC/22-23/215', 'Thermal', 21, 77, 'ds', 'dsd', NULL, 'da', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:35', NULL, NULL),
(216, 'JC/22-23/216', 'Computer Stationary', 21, NULL, 'sfzx', 'sad', NULL, 'zc', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:05', NULL, NULL),
(217, 'JC/22-23/217', 'Computer Stationary', 21, NULL, 'sfzx', 'sad', NULL, 'zc', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:16', NULL, NULL),
(218, 'JC/22-23/218', 'Computer Stationary', 21, NULL, 'sfzx', 'sad', NULL, 'zc', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:49', NULL, NULL),
(219, 'JC/22-23/219', 'Check', 21, NULL, 'czc', 'zcxzx', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-22 06:08:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_communication`
--

CREATE TABLE `tbl_customer_communication` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `customer_id` varchar(30) DEFAULT NULL,
  `communication_name` varchar(55) DEFAULT NULL,
  `communication_phone_no` varchar(55) DEFAULT NULL,
  `communication_email` varchar(55) DEFAULT NULL,
  `communication_fax_no` varchar(55) DEFAULT NULL,
  `communication_set_as_default` tinyint(2) DEFAULT NULL,
  `communication_designation` varchar(55) DEFAULT NULL,
  `communication_department` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_communication`
--

INSERT INTO `tbl_customer_communication` (`id`, `unique_id`, `customer_id`, `communication_name`, `communication_phone_no`, `communication_email`, `communication_fax_no`, `communication_set_as_default`, `communication_designation`, `communication_department`) VALUES
(110, NULL, '232', 'namw 1', '9345676769', '', '', 1, '', '2'),
(111, NULL, '233', 'siddhi', '885092852', 'abc@gmail.com', 'F00112', 1, 'Quality', '1'),
(112, NULL, '234', 'Sania', '8850292852', 'tester2@scube.net.in', 'F00113', 1, 'Quality', '1'),
(113, NULL, '237', 'test', '', '', '', 1, '', ''),
(114, NULL, '239', 'MR. A', '1234567890', 'ABC@GMAIL.COM', '', 1, 'MANAGER', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_delivery_location`
--

CREATE TABLE `tbl_customer_delivery_location` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `delivery_location` varchar(55) DEFAULT NULL,
  `delivery_location_gst_no` varchar(55) DEFAULT NULL,
  `delivery_location_status` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_delivery_location`
--

INSERT INTO `tbl_customer_delivery_location` (`id`, `customer_id`, `delivery_location`, `delivery_location_gst_no`, `delivery_location_status`) VALUES
(197, 232, 'Location 1', 'GST01', 1),
(198, 232, 'Location 2', 'GST02', 1),
(199, 233, 'Ghatkopar', 'DLGN001', 1),
(200, 234, 'Kurla', 'DLGN1234', 1),
(201, 234, 'Ghatkopar', 'DLGN001', 1),
(202, 237, 'thane', '1023', 1),
(203, 239, 'GUJRAT', '123654', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_excise_bus_posting_group`
--

CREATE TABLE `tbl_customer_excise_bus_posting_group` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_excise_bus_posting_group`
--

INSERT INTO `tbl_customer_excise_bus_posting_group` (`id`, `description`) VALUES
(1, 'General'),
(2, 'Exempt'),
(3, 'Export'),
(4, 'Goverment'),
(5, 'import'),
(6, 'small scale industry');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_export_trade`
--

CREATE TABLE `tbl_customer_export_trade` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `currency_code` varchar(55) DEFAULT NULL,
  `vat_registration_no` varchar(55) DEFAULT NULL,
  `company_name` varchar(55) DEFAULT NULL,
  `name_of_party` varchar(55) DEFAULT NULL,
  `product` varchar(55) DEFAULT NULL,
  `box_no` varchar(55) DEFAULT NULL,
  `size` varchar(55) DEFAULT NULL,
  `country` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_export_trade`
--

INSERT INTO `tbl_customer_export_trade` (`id`, `customer_id`, `currency_code`, `vat_registration_no`, `company_name`, `name_of_party`, `product`, `box_no`, `size`, `country`) VALUES
(199, 232, '1', NULL, NULL, 'party name', NULL, NULL, '3', '57'),
(200, 234, '1', 'VAT12345', 'Sai', 'Party', 'Pc00123', 'BN1234', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_general`
--

CREATE TABLE `tbl_customer_general` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `customer_name` varchar(55) NOT NULL,
  `customer_no` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `vender_code` varchar(55) DEFAULT NULL,
  `customer_address` varchar(55) DEFAULT NULL,
  `city` varchar(55) DEFAULT NULL,
  `post_box_no` varchar(55) DEFAULT NULL,
  `state_code` varchar(55) DEFAULT NULL,
  `country_code` varchar(55) DEFAULT NULL,
  `sales_person` varchar(55) DEFAULT NULL,
  `office_assistant` varchar(55) DEFAULT NULL,
  `co_ordinator` varchar(55) DEFAULT NULL,
  `attention` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_general`
--

INSERT INTO `tbl_customer_general` (`id`, `unique_id`, `customer_name`, `customer_no`, `company`, `vender_code`, `customer_address`, `city`, `post_box_no`, `state_code`, `country_code`, `sales_person`, `office_assistant`, `co_ordinator`, `attention`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(232, NULL, 'cust 1', 'c001', '47', NULL, NULL, NULL, 'PB01', NULL, '55', '20', NULL, NULL, NULL, 9, '2022-09-27 10:09:35', 9, '2022-09-27 10:09:22'),
(233, NULL, 'Siddhi', 'cust0998', '47', 'ven009', 'Ghatkopar', '16', 'PBN0987', '16', '55', '9', NULL, NULL, NULL, 9, '2022-09-28 11:09:43', NULL, NULL),
(234, 'CU/234', 'Samruddhi', 'Sam00123', '47', 'ven001', 'Kurla', '15', 'PB123', '17', '54', '25', 'Siddhi', 'Siddhi', NULL, 9, '2022-10-03 04:10:02', 9, '2022-10-03 05:10:50'),
(235, 'CU/235', 'test', 'test', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-10-03 12:10:16', NULL, NULL),
(236, 'CU/236', 'Test-customer', 'cust1123', '43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-10-06 08:10:33', NULL, NULL),
(237, 'CU/237', 'Sneha', '00987', '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-10-07 05:10:11', NULL, NULL),
(238, 'CU/238', 'test1', '1234', '38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 999999999, '2022-10-07 05:10:29', NULL, NULL),
(239, 'CU/239', 'ABC LTD', '01', '47', '01', 'GUJRAT', '15', '123456', '17', '54', '20', 'KISHORI', NULL, NULL, 25, '2022-10-07 11:10:25', NULL, NULL),
(240, 'CU/240', '63', '623', '47', '52', '542', '19', 'jn', '19', '55', '20', 'dsdsd', 'dsd', 'sssdada1', 36, '2023-02-13 05:02:30', 36, '2023-02-13 05:02:16'),
(241, 'CU/241', 'dsds', 'dsds', '47', 'dsds', 'dsds', '17', 'sdsd', '17', '56', '24', 'dsds', 'sdsd', 'vvcv', 36, '2023-02-13 05:02:41', 36, '2023-02-13 05:02:01'),
(242, 'CU/242', 'sdsd', 'dsds', '47', 'dsds', 'dsd', '18', 'dsd', '17', '56', '23', 'sdsd', 'dsd', '1', 36, '2023-02-13 05:02:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_gen_bus_posting_group`
--

CREATE TABLE `tbl_customer_gen_bus_posting_group` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_gen_bus_posting_group`
--

INSERT INTO `tbl_customer_gen_bus_posting_group` (`id`, `description`) VALUES
(1, 'LOCAL'),
(2, 'Export/Import'),
(3, 'inter company'),
(4, 'inter state');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_invoicing`
--

CREATE TABLE `tbl_customer_invoicing` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `bill_to_customer_no` varchar(55) DEFAULT NULL,
  `gen_bus_posting_group` varchar(55) DEFAULT NULL,
  `vat_bus_posting_group` varchar(55) DEFAULT NULL,
  `excise_bus_posting_group` varchar(55) DEFAULT NULL,
  `customer_posting_group` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_invoicing`
--

INSERT INTO `tbl_customer_invoicing` (`id`, `customer_id`, `bill_to_customer_no`, `gen_bus_posting_group`, `vat_bus_posting_group`, `excise_bus_posting_group`, `customer_posting_group`) VALUES
(196, 232, '39', NULL, NULL, '5', NULL),
(197, 233, '43', '4', '1', '6', '3'),
(198, 234, '234', '2', '1', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_nature_of_service`
--

CREATE TABLE `tbl_customer_nature_of_service` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_nature_of_service`
--

INSERT INTO `tbl_customer_nature_of_service` (`id`, `description`) VALUES
(1, 'Nature Of Service 1'),
(2, 'Nature Of Service 2'),
(3, 'Nature Of Service 3'),
(4, 'Nature Of Service 4'),
(5, 'Nature Of Service 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_pan_status`
--

CREATE TABLE `tbl_customer_pan_status` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_pan_status`
--

INSERT INTO `tbl_customer_pan_status` (`id`, `description`) VALUES
(1, 'Status 1'),
(2, 'Status 2'),
(3, 'Status 3'),
(4, 'Status 4'),
(5, 'Status 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_payment`
--

CREATE TABLE `tbl_customer_payment` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_term_code` varchar(25) DEFAULT NULL,
  `payment_method_code` tinyint(2) DEFAULT NULL,
  `credit_limit` varchar(25) DEFAULT NULL,
  `bank_name` varchar(25) DEFAULT NULL,
  `bank_branch` varchar(25) DEFAULT NULL,
  `bank_acc_no` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_payment`
--

INSERT INTO `tbl_customer_payment` (`id`, `customer_id`, `payment_term_code`, `payment_method_code`, `credit_limit`, `bank_name`, `bank_branch`, `bank_acc_no`) VALUES
(197, 232, 'PTC01', NULL, '500', 'Bank Name', NULL, NULL),
(198, 233, 'code123', 3, '23', 'Siddhi', 'branch', '123456789'),
(199, 234, 'code123', 1, '23', 'Sarsawat Bank', 'Ghatkopar', 'A098761234'),
(200, 239, '30 DAYS', 4, '1 LACS', 'ABC BANK LTD', 'AHMEDABAD', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_payment_method`
--

CREATE TABLE `tbl_customer_payment_method` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_payment_method`
--

INSERT INTO `tbl_customer_payment_method` (`id`, `description`) VALUES
(1, 'CHEQUE'),
(2, 'NEFT'),
(3, 'CASH'),
(4, 'RTGS'),
(5, 'CNF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_posting_group`
--

CREATE TABLE `tbl_customer_posting_group` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_posting_group`
--

INSERT INTO `tbl_customer_posting_group` (`id`, `description`) VALUES
(1, 'LOCAL'),
(2, 'Export/Import'),
(3, 'inter company'),
(4, 'inter state');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_shipping`
--

CREATE TABLE `tbl_customer_shipping` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_method_code` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_shipping`
--

INSERT INTO `tbl_customer_shipping` (`id`, `customer_id`, `shipping_method_code`) VALUES
(198, 232, '1'),
(199, 233, '2'),
(200, 233, '2'),
(201, 234, '1'),
(202, 239, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_shipping_agent`
--

CREATE TABLE `tbl_customer_shipping_agent` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_agent_name` varchar(55) DEFAULT NULL,
  `shipping_agent_address` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_shipping_agent`
--

INSERT INTO `tbl_customer_shipping_agent` (`id`, `customer_id`, `shipping_agent_name`, `shipping_agent_address`) VALUES
(201, 232, NULL, NULL),
(202, 233, 'Siddhi', 'Ghatkopar'),
(203, 234, 'Agnihotri', 'Diva');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_shipping_agent_contact`
--

CREATE TABLE `tbl_customer_shipping_agent_contact` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `contact_person_name` varchar(55) DEFAULT NULL,
  `contact_position` varchar(55) DEFAULT NULL,
  `contact_email` varchar(55) DEFAULT NULL,
  `contact_mobile` varchar(55) DEFAULT NULL,
  `contact_is_default` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_shipping_agent_contact`
--

INSERT INTO `tbl_customer_shipping_agent_contact` (`id`, `customer_id`, `contact_person_name`, `contact_position`, `contact_email`, `contact_mobile`, `contact_is_default`) VALUES
(194, 221, 'aa', 'aa', 'aaa', 'aa', 1),
(195, 221, 'ffff', 'ffff', 'ffff', 'ffff', 1),
(198, 228, 'aaa', 'aaa', 'aaa', 'aaa', 1),
(202, 221, 'hhhh', 'hhhh', 'hhhh', 'hhhh', 0),
(204, 221, 'kkk', 'kkk', 'kkk', 'kkk', 1),
(205, 229, 'tt', 'tt', 'tt', 'tt', 1),
(206, 230, 'test', 'test', 'test', 'test', 1),
(207, 233, 'Simit', 'designa', 'test@scube.net.in', '7666231633', 1),
(208, 233, 'Siddhi', 'admin', 'teste2@scubw.net.in', '4567951984', 1),
(209, 233, 'Simit', 'designa', 'test@scube.net.in', '7666231633', 1),
(210, 233, 'Siddhi', 'admin', 'teste2@scubw.net.in', '4567951984', 1),
(211, 233, 'Simit', 'designa', 'test@scube.net.in', '7666231633', 1),
(212, 233, 'Siddhi', 'admin', 'teste2@scubw.net.in', '4567951984', 1),
(213, 233, 'Simit', 'designa', 'test@scube.net.in', '7666231633', 1),
(214, 233, 'Siddhi', 'admin', 'teste2@scubw.net.in', '4567951984', 1),
(215, 234, 'Sayli', 'CEO', 'sayli@scube.net.in', '12345678', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_shipping_method`
--

CREATE TABLE `tbl_customer_shipping_method` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_shipping_method`
--

INSERT INTO `tbl_customer_shipping_method` (`id`, `description`) VALUES
(1, 'Road'),
(2, 'Rail'),
(3, 'Air');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_tax_information`
--

CREATE TABLE `tbl_customer_tax_information` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `gst_no` varchar(55) DEFAULT NULL,
  `arn_no` varchar(55) DEFAULT NULL,
  `lst_no` varchar(55) DEFAULT NULL,
  `lst_no_dated` varchar(55) DEFAULT NULL,
  `cst_no` varchar(55) DEFAULT NULL,
  `cst_no_dated` varchar(55) DEFAULT NULL,
  `lbt_no` varchar(55) DEFAULT NULL,
  `lbt_no_dated` varchar(55) DEFAULT NULL,
  `ecc_no` varchar(55) DEFAULT NULL,
  `range` varchar(55) DEFAULT NULL,
  `collectorate` varchar(55) DEFAULT NULL,
  `pan_no` varchar(55) DEFAULT NULL,
  `pan_status` varchar(55) DEFAULT NULL,
  `pan_references_no` varchar(55) DEFAULT NULL,
  `vat_no` varchar(55) DEFAULT NULL,
  `vat_no_dated` varchar(55) DEFAULT NULL,
  `tin_no` varchar(55) DEFAULT NULL,
  `export_or_deemed_export` varchar(55) DEFAULT NULL,
  `vat_exempted` varchar(55) DEFAULT NULL,
  `nature_of_service` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_tax_information`
--

INSERT INTO `tbl_customer_tax_information` (`id`, `customer_id`, `gst_no`, `arn_no`, `lst_no`, `lst_no_dated`, `cst_no`, `cst_no_dated`, `lbt_no`, `lbt_no_dated`, `ecc_no`, `range`, `collectorate`, `pan_no`, `pan_status`, `pan_references_no`, `vat_no`, `vat_no_dated`, `tin_no`, `export_or_deemed_export`, `vat_exempted`, `nature_of_service`) VALUES
(197, 232, 'GST0002', NULL, NULL, '2022-09-06', NULL, '2022-09-21', NULL, '2022-09-27', 'eccno01', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-27', NULL, NULL, NULL, '4'),
(198, 234, 'test', 'ARN123', 'LST0817', '2022-10-03', 'CST0986', '2022-10-03', 'LBT9754', '2022-10-03', 'ECCN09764', '566', 'TESRR', 'ACTN08326578', '2', 'TEST', '5ES4', '2022-10-03', 'TIN234', '1', '1', '3'),
(199, 239, '123456987', '1239632587', NULL, '2022-10-07', NULL, '2022-10-07', NULL, '2022-10-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-07', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_vat_bus_posting_group`
--

CREATE TABLE `tbl_customer_vat_bus_posting_group` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer_vat_bus_posting_group`
--

INSERT INTO `tbl_customer_vat_bus_posting_group` (`id`, `description`) VALUES
(1, 'VAT'),
(2, 'CST');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cutting`
--

CREATE TABLE `tbl_cutting` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cutting`
--

INSERT INTO `tbl_cutting` (`id`, `description`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `description`) VALUES
(1, 'Dept 1'),
(2, 'Dept 2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_direction`
--

CREATE TABLE `tbl_direction` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_direction`
--

INSERT INTO `tbl_direction` (`id`, `description`) VALUES
(1, 'Vertical'),
(2, 'Horizontal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_excise`
--

CREATE TABLE `tbl_excise` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `excise_code` varchar(255) DEFAULT NULL,
  `excise_description` text NOT NULL,
  `duty_per` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_excise`
--

INSERT INTO `tbl_excise` (`id`, `unique_id`, `excise_code`, `excise_description`, `duty_per`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(20, NULL, 'Excise 2', 'Excise Description 2', '30', 0, '2022-05-10 11:05:14', 0, '2022-05-11 11:05:01'),
(22, NULL, '49019900', 'STICKER PAPER-123', '12', 0, '2022-05-16 10:05:03', 0, '2022-05-16 10:05:33'),
(23, NULL, '49019901', 'EXEMPTED', '12.6', 0, '2022-05-16 10:05:57', NULL, NULL),
(24, NULL, '48119099', 'TOLL TKT', '14.6', 0, '2022-05-16 10:05:44', 0, '2022-05-16 10:05:03'),
(26, NULL, '49019902', 'ENT.TKT', '56', 0, '2022-05-18 04:05:01', NULL, NULL),
(27, 'EX/27', 'xgfdg', 'dfgdf', '44', 999999999, '2022-08-06 11:08:13', NULL, NULL),
(28, 'EX/28', 'test11234', 'Test Excise code', '34 %', 9, '2022-08-08 07:08:06', NULL, NULL),
(29, 'EX/29', '48204000', 'MANIFOLD BUSINESS FORMS', '18', 29, '2022-08-16 09:08:15', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_film_type`
--

CREATE TABLE `tbl_film_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_film_type`
--

INSERT INTO `tbl_film_type` (`id`, `description`) VALUES
(1, 'Positive'),
(2, 'Negative');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fron_side_color_coating`
--

CREATE TABLE `tbl_fron_side_color_coating` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fron_side_color_coating`
--

INSERT INTO `tbl_fron_side_color_coating` (`id`, `description`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`id`, `description`) VALUES
(1, 'Plastic Bags'),
(2, 'Inner Box'),
(3, 'Outer Box');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_type`
--

CREATE TABLE `tbl_item_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_item_type`
--

INSERT INTO `tbl_item_type` (`id`, `description`) VALUES
(1, 'Carbon Less'),
(2, 'Plain Paper'),
(3, 'OTC'),
(4, 'Thermal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_material_requirement`
--

CREATE TABLE `tbl_job_card_material_requirement` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `rm_category` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `rm_item` varchar(30) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `units` varchar(30) DEFAULT NULL,
  `wastage_allowed` varchar(30) DEFAULT NULL,
  `pcs` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_material_requirement`
--

INSERT INTO `tbl_job_card_material_requirement` (`id`, `job_card_id`, `rm_category`, `type`, `rm_item`, `quantity`, `units`, `wastage_allowed`, `pcs`) VALUES
(1, 113, '21', '56', '14', '287', '24', '287', '287'),
(2, 115, '16', '55', '14', '15', '18', '10', '2'),
(4, 115, '18', '53', '11', '12', '18', '10', '2'),
(5, 127, '17', '52', '11', '12', '18', 'no', '12'),
(6, 127, '22', '55', '13', '12', '18', 'yes', '14'),
(7, 140, '17', '53', '13', '15', '18', '10', '2'),
(8, 140, '20', '53', '13', '15', '18', '10', '1'),
(9, 141, '19', '54', '13', '12', '18', 'no', '2'),
(10, 150, '17', '52', '11', '12', '20', '10', '2'),
(11, 151, '16', '52', '11', '3', '27', '3', '3'),
(12, 152, '16', '52', '11', '2', '24', '2', '2'),
(13, 158, '25', '59', '', '', '', '', ''),
(14, 158, '26', '52', '', '0.20', '', '0', ''),
(15, 160, '18', '54', '11', '15', '24', '10', '2'),
(16, 162, '25', '62', '18', '0.939', '43', '1%', '1000'),
(17, 162, '25', '62', '18', '0.939', '44', '1%', '1000'),
(18, 162, '25', '62', '18', '1.140', '44', '1%', '1000'),
(19, 162, '26', '62', '', '', '', '', ''),
(20, 159, '25', '61', '', '1.59', '43', '0', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_paper`
--

CREATE TABLE `tbl_job_card_paper` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `paper_thick` varchar(55) DEFAULT NULL,
  `paper_make` varchar(25) DEFAULT NULL,
  `color_shade` varchar(25) DEFAULT NULL,
  `front_side_color` varchar(25) DEFAULT NULL,
  `back_side_color` varchar(25) DEFAULT NULL,
  `front_side_coating` varchar(25) DEFAULT NULL,
  `back_side_coating` varchar(25) DEFAULT NULL,
  `copy_mark` varchar(55) DEFAULT NULL,
  `remark` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_paper`
--

INSERT INTO `tbl_job_card_paper` (`id`, `job_card_id`, `paper_thick`, `paper_make`, `color_shade`, `front_side_color`, `back_side_color`, `front_side_coating`, `back_side_coating`, `copy_mark`, `remark`) VALUES
(103, 85, '20', '6', '3', '3', '3', '2', '2', 'copy mark', 'remark'),
(104, 85, '30', '3', '3', '3', '3', '1', '4', 'copy mark', 'remark'),
(105, 86, '20', '5', '8', '4', '3', '1', '1', 'copy mark', 'remark'),
(106, 87, '20', '6', '8', '8', '8', '3', '1', 'mark 1', 'remark '),
(107, 87, 'test', '5', '4', '8', '4', '3', '2', 'test', 'test'),
(110, 87, '', '', '', '', '', '', '', '', ''),
(112, 89, '', '', '', '', '', '', '', '', ''),
(113, 90, '', '', '', '', '', '', '', '', ''),
(114, 91, '', '', '', '', '', '', '', '', ''),
(115, 92, '58', '5', '4', '4', '4', '1', '1', 'test', 'test001'),
(116, 92, '68', '4', '3', '3', '3', '2', '2', 'test', 'test'),
(117, 92, '78', '6', '8', '9', '8', '4', '2', 'test', 'test001'),
(118, 93, '', '', '', '', '4', '', '', '', ''),
(119, 93, '', '', '', '', '', '', '', '', ''),
(120, 93, '', '', '', '', '', '', '', '', ''),
(121, 94, '58', '4', '4', '4', '4', '1', '1', 'test', 'test001'),
(122, 94, '68', '4', '8', '3', '9', '2', '1', 'test', 'test0011'),
(123, 95, '', '', '', '', '', '', '', '', ''),
(124, 96, '', '', '', '', '', '', '', '', ''),
(125, 97, '24', '4', '4', '4', '4', '1', '2', 'yes', 'no'),
(126, 97, '26', '5', '4', '8', '8', '1', '1', 'yes', 'No'),
(127, 97, '34', '6', '9', '9', '8', '2', '2', 'Yes', 'No'),
(128, 98, '', '', '', '', '', '', '', '', ''),
(129, 99, '', '', '', '', '', '', '', '', ''),
(130, 100, '', '', '', '', '', '', '', '', ''),
(131, 101, '25', '6', '8', '4', '8', '', '1', '', ''),
(132, 101, '26', '7', '9', '9', '9', '2', '', '', ''),
(139, 105, '24', '6', '4', '4', '8', '', '', '', ''),
(140, 105, '32', '', '', '', '', '', '', '', ''),
(141, 105, '12', '', '', '9', '8', '', '', '', ''),
(143, 106, '24', '', '', '', '', '', '', '', ''),
(144, 106, '', '', '', '', '', '', '', '', ''),
(145, 106, '26', '', '', '', '', '', '', '', ''),
(146, 107, '14', '4', '4', '4', '8', '2', '', '', ''),
(147, 107, '32', '6', '9', '', '', '', '', '', ''),
(148, 108, '2507', '4', '4', '8', '8', '1', '1', '2507', '2507'),
(149, 108, '2507', '6', '8', '4', '3', '1', '1', '2507', '2507'),
(150, 109, '', '', '', '', '', '', '', '', ''),
(151, 110, 'fsefsfdsf', '5', '3', '3', '3', '1', '1', 'sdfdsfdsf', 'dsfsdf'),
(152, 110, 'dfds', '6', '8', '3', '3', '1', '1', 'fdsf', 'dfdsds'),
(153, 111, '267', '5', '3', '3', '3', '1', '', '267', '267'),
(154, 112, '12', '4', '4', '4', '4', '1', '2', 'yes', 'no'),
(155, 113, '287', '5', '4', '9', '8', '1', '2', '287', '287'),
(157, 113, '', '', '', '', '', '', '', '', ''),
(158, 114, 'test111', '4', '3', '9', '9', '1', '1', 'test111', 'test111'),
(159, 114, 'sdsaddsa', '', '', '', '', '', '', '', ''),
(160, 115, '12', '6', '8', '8', '9', '1', '2', 'yes', 'test001'),
(161, 115, '12', '4', '4', '4', '4', '1', '1', 'test', 'test001'),
(162, 116, '297', '4', '4', '9', '8', '1', '2', '297', '297'),
(163, 117, '297 test', '5', '4', '4,9', '4,8', '2', '1', '297 test', '297 test'),
(164, 125, '297 test 1', '', '', '4,9', '8', '', '', '297 test 1', ''),
(165, 125, '', '', '', '4', '3', '', '', '', ''),
(166, 126, 'sdf', '4', '4', '', '9', '2', '', 'dgdf', 'gdfgfd'),
(167, 127, '14', '6', '8', '8,9', '4,8', '1', '1', 'yes', 'Yes'),
(168, 127, '14', '5', '4', '9', '8', '2', '1', 'test', 'Yes'),
(169, 127, '14', '6', '8', '8', '4', '1', '1', 'ys', 'no'),
(170, 127, '14', '5', '9', '', '', '', '', '', ''),
(171, 128, '55', '8', '10', '10,11', '12', '1', '2', '', 'COATING INSIDE'),
(183, 140, '12', '4', '4', '10,11', '8,12', '1', '1', 'test', 'test001'),
(184, 140, '14', '7', '9', '4,8', '10,12', '1', '2', 'yes', 'test0011'),
(185, 141, '13', '4', '4', '9,10', '8,9', '1', '1', 'yes', 'yes'),
(186, 141, '12', '4', '8', '4', '9', '2', '2', 'test', 'test'),
(187, 149, 'fddf', '5', '8', '10', '9', '1', '1', NULL, 'df'),
(188, 149, 'gdf', '5', '8', '8', '8', '1', '1', NULL, 'dfg'),
(189, 150, '12', '5', '4', '4', '9', '2', '1', NULL, 'Yes'),
(190, 151, 'ewqe', '4', '', '', '', '', '', NULL, ''),
(191, 152, 'adas', '', '', '', '9', '', '', '', ''),
(192, 153, '56', '', '10', '12', '16', '', '', '', ''),
(193, 153, '56', '', '10', '12', '16', '', '', '', ''),
(194, 153, '68', '', '10', '12', '12', '', '', '', ''),
(195, 158, '96', '', '10', '12', '', '', '', '', ''),
(197, 159, '180', '13', '10', '10', '12', '2', '2', '', ''),
(198, 160, '12', '5', '4', '4', '9', '1', '1', 'yes', 'Yes'),
(199, 161, '12', '8', '10', '8', '9', '1', '1', NULL, 'test001'),
(200, 162, '56', '', '10', '12', '16', '2', '2', NULL, '1ST PLY'),
(201, 162, '56', '', '10', '11,12', '12,16', '2', '2', NULL, '2ND PLY'),
(202, 162, '68', '', '10', '12', '16', '2', '2', NULL, '3RD PLY'),
(203, 163, '48', '8', '10', '12', '12', '1', '2', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_position`
--

CREATE TABLE `tbl_job_card_position` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `position` varchar(55) DEFAULT NULL,
  `direction` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_position`
--

INSERT INTO `tbl_job_card_position` (`id`, `job_card_id`, `position`, `direction`) VALUES
(104, 85, 'position 1', '2'),
(106, 86, 'position 1', '2'),
(107, 86, 'position 2', '1'),
(108, 85, 'posirion 2', '1'),
(109, 87, '11', '2'),
(110, 87, '12', '1'),
(112, 89, '', ''),
(113, 90, '', ''),
(114, 91, '', ''),
(115, 92, 'test', '1'),
(116, 93, '', ''),
(117, 94, 'test', '1'),
(118, 95, '', ''),
(119, 96, '', ''),
(120, 97, 'Center', '1'),
(121, 97, 'Left side', '2'),
(122, 97, 'Right Side', '1'),
(123, 98, '', ''),
(124, 99, '', ''),
(125, 100, '', ''),
(126, 101, 'Center', '2'),
(127, 101, 'Left side', '1'),
(129, 103, '', ''),
(131, 105, 'Center', '1'),
(132, 105, 'Left side', '2'),
(133, 106, '', ''),
(134, 107, 'Center', '1'),
(135, 108, '2507', '1'),
(136, 108, '2507', '1'),
(137, 109, '', ''),
(138, 110, 'dsfs', '2'),
(139, 110, 'fsdfdsf', '2'),
(140, 111, '267', '1'),
(141, 112, 'Center', '1'),
(142, 113, '287', '1'),
(143, 113, '287', '1'),
(144, 114, 'test111', '1'),
(145, 115, 'Center', '1'),
(146, 116, '297', '1'),
(147, 117, '297 test', '1'),
(148, 118, '297 test 1', '1'),
(149, 119, '297 test 1', '1'),
(150, 120, '297 test 1', '1'),
(151, 121, '297 test 1', '1'),
(152, 122, '297 test 1', '1'),
(153, 123, '297 test 1', '1'),
(154, 124, '297 test 1', '1'),
(155, 125, '297 test 1', '1'),
(156, 126, 'dfgd', '1'),
(157, 127, 'Center', '1'),
(158, 128, '', ''),
(181, 140, 'Center', '1'),
(182, 140, 'Left side', '2'),
(183, 141, 'Center', '1'),
(184, 141, 'Left side', '2'),
(185, 141, 'Right Side', '2'),
(186, 142, '', ''),
(187, 143, '', ''),
(188, 144, '', ''),
(189, 145, '', ''),
(190, 146, '', ''),
(191, 147, '', ''),
(192, 148, '', ''),
(193, 149, 'fgd', '1'),
(194, 150, 'Center', '1'),
(195, 151, 'ewq', '1'),
(196, 152, 'sa', '1'),
(197, 153, 'AS PER SAMPLE', '1'),
(202, 153, 'AS PER SAMPLE', '2'),
(203, 158, 'AS PER ARTWORK', '2'),
(204, 158, 'AS PER ARTWORK', '1'),
(205, 159, 'AS PER ARTWORK', '1'),
(206, 160, 'test', '1'),
(207, 161, 'Center', '1'),
(208, 162, 'AS PER SAMPLE', '2'),
(209, 162, '', '1'),
(210, 163, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_post_press`
--

CREATE TABLE `tbl_job_card_post_press` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `collating_width` varchar(55) DEFAULT NULL,
  `collating_type` varchar(55) DEFAULT NULL,
  `collating_between_ply` varchar(55) DEFAULT NULL,
  `collating_carbon_option` varchar(55) DEFAULT NULL,
  `numbering_position` varchar(55) DEFAULT NULL,
  `numbering_style` varchar(55) DEFAULT NULL,
  `numbering_skip` varchar(55) DEFAULT NULL,
  `numbering_sequence` varchar(55) DEFAULT NULL,
  `numbering_orientation` varchar(55) DEFAULT NULL,
  `gumming_position` varchar(55) DEFAULT NULL,
  `gumming_gum_make` varchar(55) DEFAULT NULL,
  `gumming_between` varchar(55) DEFAULT NULL,
  `gumming_quantity` varchar(55) DEFAULT NULL,
  `hotspot_carbon_width` varchar(55) DEFAULT NULL,
  `hotspot_carbon_height` varchar(55) DEFAULT NULL,
  `hotspot_carbon_behind_ply_no` varchar(55) DEFAULT NULL,
  `cutting_width` varchar(55) DEFAULT NULL,
  `cutting_width_unit` varchar(55) DEFAULT NULL,
  `cutting_length` varchar(55) DEFAULT NULL,
  `cutting_length_unit` varchar(55) DEFAULT NULL,
  `cutting_core_size` varchar(55) DEFAULT NULL,
  `barcode_type` varchar(55) DEFAULT NULL,
  `barcode_height` varchar(55) DEFAULT NULL,
  `barcode_width` varchar(55) DEFAULT NULL,
  `barcode_orientation` varchar(55) DEFAULT NULL,
  `barcode_human_readable_text_to_show` varchar(55) DEFAULT NULL,
  `baby_roll_making_coating_side` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_post_press`
--

INSERT INTO `tbl_job_card_post_press` (`id`, `job_card_id`, `collating_width`, `collating_type`, `collating_between_ply`, `collating_carbon_option`, `numbering_position`, `numbering_style`, `numbering_skip`, `numbering_sequence`, `numbering_orientation`, `gumming_position`, `gumming_gum_make`, `gumming_between`, `gumming_quantity`, `hotspot_carbon_width`, `hotspot_carbon_height`, `hotspot_carbon_behind_ply_no`, `cutting_width`, `cutting_width_unit`, `cutting_length`, `cutting_length_unit`, `cutting_core_size`, `barcode_type`, `barcode_height`, `barcode_width`, `barcode_orientation`, `barcode_human_readable_text_to_show`, `baby_roll_making_coating_side`) VALUES
(1, 113, '287', '1', '1', '2', '287', '2', '287', '1', '1', '287', '4', '1', '287', '287', '287', '1', '287', '18', '287', '18', '287', '287', '287', '287', '1', '2', '1'),
(2, 115, '14', '2', '', '1', '12', '2', '12', '1', '1', '12', '4', '', '12', '12', '14', '', '21', '18', '14', '18', '15', 'Box', '12', '14', '1', '2', '1'),
(3, 127, '14', '1', '', '2', '12', '2', '12', '1', '1', 'Left', '4', '', '12', '12', '14', '', '12', '18', '14', '18', '15', 'Box', '12', '14', '1', '1', '1'),
(4, 127, '14', '1', '', '2', '12', '2', '12', '1', '1', 'Left', '4', '', '12', '12', '14', '', '12', '18', '14', '18', '15', 'Box', '12', '14', '1', '1', '1'),
(5, 140, '14', '1', '', '2', 'Right', '1', '12', '1', '1', 'Left', '4', '', '12', '12', '14', '', '12', '18', '14', '18', '15', 'Box', '12', '14', '1', '1', '1'),
(6, 140, '14', '1', '1,2', '2', 'Right', '1', '12', '1', '1', 'Left', '4', '1,2', '12', '12', '14', '2', '12', '18', '14', '18', '15', 'Box', '12', '14', '1', '1', '1'),
(7, 141, '14', '1', '', '1', 'Right', '2', '12', '1', '1', 'Left', '4', '', '12', '12', '14', '', '12', '18', '14', '18', '15', 'Box', '12', '14', '2', '1', '1'),
(8, 149, NULL, NULL, '', NULL, 's', '2', 'f', '1', '2', NULL, NULL, '', NULL, NULL, NULL, '', '2', '24', '2', '24', '2', '4', '3', '4', '2', '1', NULL),
(9, 150, NULL, NULL, '', NULL, '12', '4', '12', '2', '2', NULL, NULL, '', NULL, NULL, NULL, '', '12', '17', '14', '28', '12', 'Box', '12', '14', '2', '1', NULL),
(10, 151, '3', '1', '', '1', '4', '2', '5', '1', '1', '6', '4', '', '5', '4', '5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 151, '3', '1', '', '1', '4', '2', '5', '1', '1', '6', '4', '', '5', '4', '5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 152, NULL, NULL, NULL, NULL, 'dsfs', '3', '3', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 152, NULL, NULL, NULL, NULL, 'dsfs', '3', '3', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 160, NULL, NULL, NULL, NULL, '12', '3', '12', '2', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 161, '14', '1', '1', '2', '12', '2', '12', '1', '1', '12', '4', '', '12', '15', '14', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_post_press_packaging_details`
--

CREATE TABLE `tbl_job_card_post_press_packaging_details` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `pcs` varchar(55) DEFAULT NULL,
  `item` varchar(25) DEFAULT NULL,
  `length` varchar(25) DEFAULT NULL,
  `width` varchar(25) DEFAULT NULL,
  `height` varchar(25) DEFAULT NULL,
  `units` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_post_press_packaging_details`
--

INSERT INTO `tbl_job_card_post_press_packaging_details` (`id`, `job_card_id`, `pcs`, `item`, `length`, `width`, `height`, `units`) VALUES
(1, 113, '287', '2', '287', '287', '287', '18'),
(2, 115, '12', '2', '15', '12', '2', '17'),
(3, 127, '12', '2', '15', '12', '10', '18'),
(4, 127, '', '', '', '', '', ''),
(5, 140, '12', '1', '15', '12', '2', '18'),
(6, 140, '', '', '', '', '', ''),
(7, 141, '12', '2', '15', '4', '10', '18'),
(8, 149, '1', '3', '1', '1', '1', '24'),
(9, 150, '12', '1', '15', '4', '2', '24'),
(10, 151, '3', '1', '3', '3', '3', '24'),
(11, 151, '', '', '', '', '', ''),
(12, 152, '3', '1', '3', '33', '3', '24'),
(13, 152, '', '', '', '', '', ''),
(14, 160, '12', '2', '15', '4', '2', '20'),
(15, 161, '6', '2', '15', '12', '2', '28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press`
--

CREATE TABLE `tbl_job_card_press` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `printing` varchar(30) DEFAULT NULL,
  `coating` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_press`
--

INSERT INTO `tbl_job_card_press` (`id`, `job_card_id`, `printing`, `coating`) VALUES
(156, 113, '3', '3'),
(157, 115, '2', '2'),
(158, 127, '2', '2'),
(159, 127, '2', '2'),
(160, 127, '2', '2'),
(161, 128, '3', '2'),
(162, 140, '2', '2'),
(163, 141, '2', '2'),
(164, 141, '2', '2'),
(165, 128, '3', '2'),
(166, 149, '1', '1'),
(167, 150, '2', '2'),
(168, 151, '3', '2'),
(169, 151, '3', '2'),
(170, 152, NULL, NULL),
(171, 152, NULL, NULL),
(172, 153, NULL, NULL),
(173, 153, NULL, NULL),
(174, 153, NULL, NULL),
(175, 158, NULL, NULL),
(176, 160, NULL, NULL),
(177, 161, '2', '2'),
(178, 162, NULL, NULL),
(179, 162, NULL, NULL),
(180, 162, NULL, NULL),
(181, 162, NULL, NULL),
(182, 162, NULL, NULL),
(183, 162, NULL, NULL),
(184, 162, NULL, NULL),
(185, 163, '1', '1'),
(186, 163, '1', '1'),
(187, 163, '1', '1'),
(188, 163, '1', '1'),
(189, 163, '1', '1'),
(190, 163, '1', '1'),
(191, 163, '1', '1'),
(192, 163, '1', '1'),
(193, 163, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press_28_7`
--

CREATE TABLE `tbl_job_card_press_28_7` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `paper_thickness_proposed` varchar(55) DEFAULT NULL,
  `gsm_make` varchar(30) DEFAULT NULL,
  `paper_thickness_used` varchar(55) DEFAULT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `gsm_make_1` varchar(30) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `papers` varchar(30) DEFAULT NULL,
  `ink_color` varchar(55) DEFAULT NULL,
  `ink_shade` varchar(30) DEFAULT NULL,
  `ink_company` varchar(30) DEFAULT NULL,
  `ink_quantity` varchar(55) DEFAULT NULL,
  `ink_units` varchar(30) DEFAULT NULL,
  `printing` varchar(30) DEFAULT NULL,
  `coating` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press_coating`
--

CREATE TABLE `tbl_job_card_press_coating` (
  `id` int(11) NOT NULL,
  `coating` varchar(55) DEFAULT NULL,
  `printing` varchar(55) DEFAULT NULL,
  `press_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press_ink_details`
--

CREATE TABLE `tbl_job_card_press_ink_details` (
  `id` int(11) NOT NULL,
  `press_id` int(11) NOT NULL,
  `pre_press_color_id` varchar(30) DEFAULT NULL,
  `main_color_id` varchar(55) DEFAULT NULL,
  `ink_color` varchar(55) DEFAULT NULL,
  `ink_shade` varchar(55) DEFAULT NULL,
  `ink_company` varchar(55) DEFAULT NULL,
  `ink_quantity` varchar(55) DEFAULT NULL,
  `ink_units` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_press_ink_details`
--

INSERT INTO `tbl_job_card_press_ink_details` (`id`, `press_id`, `pre_press_color_id`, `main_color_id`, `ink_color`, `ink_shade`, `ink_company`, `ink_quantity`, `ink_units`) VALUES
(240, 156, '1', NULL, 'LIGHT RED', '8', '58', '287', '24'),
(241, 157, '3', NULL, 'LIGHT RED', '7', '60', 'test', '18'),
(242, 157, '4', NULL, 'RED', '7', '58', 'test', '27'),
(243, 158, '6', NULL, 'DARK RED', '7', '60', 'test', '24'),
(244, 159, '6', NULL, 'DARK RED', '7', '60', 'test', '24'),
(245, 160, '6', NULL, 'DARK RED', '7', '60', 'test', '24'),
(246, 160, '7', NULL, 'LIGHT RED', '', '', '', ''),
(247, 161, '8', NULL, 'CYAN', '', '', '', ''),
(248, 161, '9', NULL, 'BLACK', '', '', '', ''),
(249, 161, '10', NULL, 'YELLOW', '', '', '', ''),
(250, 162, '11', NULL, 'DARK RED', '6', '61', '12', '24'),
(251, 162, '12', NULL, 'YELLOW', '7', '60', 'test', '20'),
(252, 163, '13', NULL, 'RED', '7', '58', '12', '17'),
(253, 163, '14', NULL, 'YELLOW', '7', '60', '12', '18'),
(254, 164, '13', '9', 'RED,LIGHT RED', '7', '58', '12', '17'),
(255, 164, '14', '11', 'YELLOW,CYAN', '7', '60', '12', '18'),
(256, 165, '8', '11', 'CYAN', '', '', '', ''),
(257, 165, '9', '12', 'BLACK', '', '', '', ''),
(258, 165, '10', '10', 'YELLOW', '', '', '', ''),
(259, 166, '15', '11', 'LIGHT RED,CYAN', '10', '60', '3', '24'),
(260, 167, '16', '8', 'RED', '7', '57', 'test', '28'),
(261, 168, '17', '10', 'YELLOW', '8', '61', 'w', '20'),
(262, 169, '17', '10', 'YELLOW', '8', '61', 'w', '20'),
(263, 170, '18', '10', 'YELLOW', '11', '61', '3', '27'),
(264, 171, '18', '10', 'YELLOW', '11', '61', '3', '27'),
(265, 175, '19', '12', 'BLACK', '', '', '', ''),
(266, 176, '22', '16', 'BLACK HOT SPOT', '7', '60', '12', '24'),
(267, 177, '23', '4', 'DARK RED', '9', '60', '12', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press_old`
--

CREATE TABLE `tbl_job_card_press_old` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `paper_thickness_proposed` varchar(55) DEFAULT NULL,
  `gsm_make` varchar(30) DEFAULT NULL,
  `paper_thickness_used` varchar(55) DEFAULT NULL,
  `unit` varchar(30) DEFAULT NULL,
  `gsm_make_1` varchar(30) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `papers` varchar(30) DEFAULT NULL,
  `ink_color` varchar(55) DEFAULT NULL,
  `ink_shade` varchar(30) DEFAULT NULL,
  `ink_company` varchar(30) DEFAULT NULL,
  `ink_quantity` varchar(55) DEFAULT NULL,
  `ink_units` varchar(30) DEFAULT NULL,
  `spare` varchar(30) DEFAULT NULL,
  `spare_quantity` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press_paper`
--

CREATE TABLE `tbl_job_card_press_paper` (
  `id` int(11) NOT NULL,
  `press_id` int(11) NOT NULL,
  `general_paper_id` varchar(30) DEFAULT NULL,
  `paper_thickness_proposed` varchar(55) DEFAULT NULL,
  `gsm_make` varchar(55) DEFAULT NULL,
  `paper_thickness_used` varchar(55) DEFAULT NULL,
  `unit` varchar(55) DEFAULT NULL,
  `gsm_make_1` varchar(55) DEFAULT NULL,
  `quantity` varchar(55) DEFAULT NULL,
  `papers` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_press_paper`
--

INSERT INTO `tbl_job_card_press_paper` (`id`, `press_id`, `general_paper_id`, `paper_thickness_proposed`, `gsm_make`, `paper_thickness_used`, `unit`, `gsm_make_1`, `quantity`, `papers`) VALUES
(246, 156, '155', '287', '5', '287', 'GSM', '6', '287', '14'),
(248, 157, '160', '12', '6', 'test', 'GSM', '7', '10', '13'),
(249, 157, '161', '12', '4', 'test', 'GSM', '7', '10', '15'),
(250, 158, '167', '14', '6', 'test', 'GSM', '7', '11', '11'),
(251, 159, '167', '14', '6', 'test', 'GSM', '7', '11', '11'),
(252, 159, '168', '14', '5', 'test', 'GSM', '6', '10', '13'),
(253, 159, '169', '14', '6', '4', 'GSM', '4', '4', '11'),
(254, 160, '167', '14', '6', 'test', 'GSM', '7', '11', '11'),
(255, 160, '168', '14', '5', 'test', 'GSM', '6', '10', '13'),
(256, 160, '169', '14', '6', '4', 'GSM', '4', '4', '11'),
(257, 160, '170', '14', '5', '', 'GSM', '', '', ''),
(258, 161, '171', '55', '8', '', 'GSM', '8', '', ''),
(259, 162, '183', '12', '4', 'test', 'GSM', '7', '10', '11'),
(260, 162, '184', '14', '7', 'test', 'GSM', '8', '10', '13'),
(261, 163, '185', '13', '4', 'test', 'GSM', '7', '4', '13'),
(262, 163, '186', '12', '4', 'test', 'GSM', '6', '5', '11'),
(263, 164, '185', '13', '4', 'test', 'GSM', '7', '4', '13'),
(264, 164, '186', '12', '4', 'test', 'GSM', '6', '5', '11'),
(265, 165, '171', '55', '8', '', 'GSM', '8', '1.738', ''),
(266, 166, '187', 'fddf', '5', 'dfgfd', 'GSM', '7', 'gdf', '11'),
(267, 166, '188', 'gdf', '5', 'dfgd', 'GSM', '8', 'd', '14'),
(268, 167, '189', '12', '5', 'test', 'GSM', '5', '11', '12'),
(269, 168, '190', 'ewqe', '4', '3', 'GSM', '8', '3', '11'),
(270, 169, '190', 'ewqe', '4', '3', 'GSM', '8', '3', '11'),
(271, 170, '191', 'adas', '6', 'dsf', 'GSM', '8', '3', '14'),
(272, 171, '191', 'adas', '', 'dsf', 'GSM', '8', '3', '14'),
(273, 172, '192', '56', '', '', 'GSM', '', '', ''),
(274, 172, '193', '56', '', '', 'GSM', '', '', ''),
(275, 172, '194', '68', '', '', 'GSM', '', '', ''),
(276, 173, '192', '56', '', '', 'GSM', '', '', ''),
(277, 173, '193', '56', '', '', 'GSM', '', '', ''),
(278, 173, '194', '68', '', '', 'GSM', '', '', ''),
(279, 174, '192', '56', '', '', 'GSM', '', '', ''),
(280, 174, '193', '56', '', '', 'GSM', '', '', ''),
(281, 174, '194', '68', '', '', 'GSM', '', '', ''),
(282, 175, '195', '96', '', '96', 'GSM', '', '', ''),
(284, 176, '198', '12', '5', 'test', 'GSM', '7', '10', '11'),
(285, 177, '199', '12', '8', 'test', 'GSM', '7', '10', '13'),
(286, 178, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(287, 178, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(288, 178, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(289, 179, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(290, 179, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(291, 179, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(292, 180, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(293, 180, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(294, 180, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(295, 181, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(296, 181, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(297, 181, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(298, 182, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(299, 182, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(300, 182, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(301, 183, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(302, 183, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(303, 183, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(304, 184, '200', '56', '', '56', 'GSM', '', '0.939', '18'),
(305, 184, '201', '56', '', '56', 'GSM', '', '0.939', '18'),
(306, 184, '202', '68', '', '68', 'GSM', '', '1.140', '18'),
(307, 185, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(308, 186, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(309, 187, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(310, 188, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(311, 189, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(312, 190, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(313, 191, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(314, 192, '203', '48', '8', '48', 'GSM', '8', '', '18'),
(315, 193, '203', '48', '8', '48', 'GSM', '8', '', '18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_press_spare_to_use`
--

CREATE TABLE `tbl_job_card_press_spare_to_use` (
  `id` int(11) NOT NULL,
  `spare` varchar(55) DEFAULT NULL,
  `spare_quantity` varchar(55) DEFAULT NULL,
  `press_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_press_spare_to_use`
--

INSERT INTO `tbl_job_card_press_spare_to_use` (`id`, `spare`, `spare_quantity`, `press_id`) VALUES
(1, '59', '287', '156'),
(2, '60', 'test', '157'),
(3, '60', 'test', '158'),
(4, '60', 'test', '159'),
(5, '60', 'test', '160'),
(6, '', '', '161'),
(7, '60', 'test', '162'),
(8, '59', '215', '162'),
(9, '60', 'test', '163'),
(10, '59', '215', '163'),
(11, '60', 'test', '164'),
(12, '59', '215', '164'),
(13, '', '', '165'),
(14, '60', '3', '166'),
(15, '60', '24', '167'),
(16, '60', '3', '168'),
(17, '60', '3', '169'),
(18, '61', '', '170'),
(19, '61', '', '171'),
(20, '', '', '172'),
(21, '', '', '173'),
(22, '', '', '174'),
(23, '', '', '175'),
(24, '62', '213', '176'),
(25, '62', '213', '177'),
(26, '', '', '178'),
(27, '', '', '179'),
(28, '', '', '180'),
(29, '', '', '181'),
(30, '', '', '182'),
(31, '', '', '183'),
(32, '', '', '184'),
(33, '', '', '185'),
(34, '', '', '186'),
(35, '', '', '187'),
(36, '', '', '188'),
(37, '', '', '189'),
(38, '', '', '190'),
(39, '', '', '191'),
(40, '', '', '192'),
(41, '', '', '193');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_pre_press`
--

CREATE TABLE `tbl_job_card_pre_press` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `columns` varchar(25) NOT NULL,
  `rows` varchar(25) DEFAULT NULL,
  `length` varchar(25) DEFAULT NULL,
  `length_unit` tinyint(4) NOT NULL,
  `width` varchar(25) NOT NULL,
  `width_unit` tinyint(4) NOT NULL,
  `thickness` varchar(25) NOT NULL,
  `thickness_unit` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_pre_press`
--

INSERT INTO `tbl_job_card_pre_press` (`id`, `job_card_id`, `columns`, `rows`, `length`, `length_unit`, `width`, `width_unit`, `thickness`, `thickness_unit`) VALUES
(1, 113, '287', '287', '287', 20, '287', 27, '287', 24),
(2, 115, '3', '2', '12', 18, '8', 18, '05', 18),
(3, 117, '4', '5', '4', 20, '4', 18, '5', 27),
(4, 127, '4', '3', '12', 18, '8', 18, '12', 18),
(5, 128, '0', '5', '455', 17, '415', 17, '0.20', 17),
(6, 140, '4', '5', '14', 18, '5', 18, '5', 18),
(7, 141, '4', '5', '12', 18, '12', 18, '12', 18),
(8, 149, '2', '3', 'sda', 19, 'asd', 17, 'dassa', 27),
(9, 150, '2', '2', '12', 28, '5', 20, '12', 28),
(10, 151, '2', '2', '2', 18, '4', 20, '4', 20),
(11, 152, 'das', 'dsa', 'adsas', 24, 'dasd', 24, 'dasd', 20),
(12, 153, '3', '2', '455', 28, '430', 28, '0.20', 28),
(13, 158, '1', '3', '520', 28, '415', 28, '0.20', 28),
(14, 159, '7', '1', '520', 28, '415', 28, '0.20', 28),
(15, 160, '2', '3', '14', 39, '12', 39, '5', 28),
(16, 161, '4', '3', '14', 28, '12', 39, '5', 28),
(17, 162, '2', '3', '300', 28, '330', 28, '0.20', 28),
(18, 163, '1', '1', '0', 28, '79', 28, '0.20', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_pre_press_color`
--

CREATE TABLE `tbl_job_card_pre_press_color` (
  `id` int(11) NOT NULL,
  `color` varchar(55) DEFAULT NULL,
  `film_type` varchar(55) DEFAULT NULL,
  `ply` varchar(25) DEFAULT NULL,
  `plate_type` varchar(55) DEFAULT NULL,
  `pre_press_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_pre_press_color`
--

INSERT INTO `tbl_job_card_pre_press_color` (`id`, `color`, `film_type`, `ply`, `plate_type`, `pre_press_id`) VALUES
(1, '9', '2', '287', '1', '1'),
(2, '4', '1', '287', '2', '1'),
(3, '9', '2', '3', '1', '2'),
(4, '8', '1', '2', '2', '2'),
(5, '3,4', '2', '3', '3', '3'),
(6, '4', '2', '2', '1', '4'),
(7, '9', '2', '7', '2', '4'),
(8, '11', '1', '', '3', '5'),
(9, '12', '1', '', '3', '5'),
(10, '10', '1', '', '3', '5'),
(11, '4,8', '1', '6', '2', '6'),
(12, '10,11', '2', '4', '3', '6'),
(13, '8,9', '1', '2', '3', '7'),
(14, '10,11', '2', '2', '2', '7'),
(15, '9,11', '1', '1', '1', '8'),
(16, '8', '1', '1', '2', '9'),
(17, '10', '1', '3', '2', '10'),
(18, '10', '1', '3', '', '11'),
(19, '12', '', 'FRONT SIDE', '3', '13'),
(20, '10', '', 'FRONT SIDE', '3', '14'),
(21, '12', '', 'BACK SIDE', '3', '14'),
(22, '16', '2', '1', '2', '15'),
(23, '4', '1', '1', '2', '16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_process_selection_post_press`
--

CREATE TABLE `tbl_job_card_process_selection_post_press` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_process_selection_post_press`
--

INSERT INTO `tbl_job_card_process_selection_post_press` (`id`, `job_card_id`, `process`, `basicmachine`, `alternativemachine`, `qc`) VALUES
(1, 113, '4', '35', '31', '6'),
(2, 115, '4', '35', '35', '6'),
(3, 127, '4', '35', '35', '9'),
(4, 140, '4', '35', '31', '9'),
(5, 140, '4', '31', '35', '9'),
(6, 141, '', '', '', ''),
(7, 128, '15', '48', '', ''),
(8, 128, '16', '47', '', ''),
(9, 150, '15', '47', '35', '9'),
(10, 151, '15', '38', '47', '6'),
(11, 152, '15', '38', '47', '6'),
(12, 158, '', '', '', ''),
(13, 160, '15', '47', '48', '6'),
(14, 160, '15', '47', '48', '6'),
(15, 161, '', '', '', ''),
(16, 162, '17', '49', '', ''),
(17, 162, '18', '50', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_process_selection_press`
--

CREATE TABLE `tbl_job_card_process_selection_press` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_process_selection_press`
--

INSERT INTO `tbl_job_card_process_selection_press` (`id`, `job_card_id`, `process`, `basicmachine`, `alternativemachine`, `qc`) VALUES
(1, 113, '2', '33', '33', '7'),
(2, 115, '2', '33', '33', '7'),
(3, 127, '2', '33', '33', '7'),
(4, 140, '2', '33', '33', '7'),
(5, 141, '2', '33', '33', '7'),
(6, 128, '13', '46', '', ''),
(7, 150, '13', '44', '46', '10'),
(8, 151, '13', '45', '45', '10'),
(9, 152, '13', '45', '45', '10'),
(10, 158, '13', '33', '', ''),
(11, 160, '13', '45', '45', '10'),
(12, 160, '13', '45', '45', '10'),
(13, 161, '', '', '', ''),
(14, 162, '13', '44', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_process_selection_pre_press`
--

CREATE TABLE `tbl_job_card_process_selection_pre_press` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_process_selection_pre_press`
--

INSERT INTO `tbl_job_card_process_selection_pre_press` (`id`, `job_card_id`, `process`, `basicmachine`, `alternativemachine`, `qc`) VALUES
(1, 113, '3', '34', '32', '8'),
(2, 115, '3', '32', '34', '8'),
(3, 127, '3', '32', '32', '8'),
(4, 140, '5', '34', '32', '8'),
(5, 140, '3', '34', '32', '8'),
(6, 141, '5', '34', '32', '8'),
(7, 128, '8', '39', '', ''),
(8, 128, '10', '40', '', ''),
(9, 128, '11', '41', '', ''),
(10, 128, '12', '42', '', ''),
(11, 150, '9', '39', '40', '8'),
(12, 151, '8', '39', '39', '8'),
(13, 152, '8', '39', '34', '8'),
(14, 158, '9', '39', '39', ''),
(15, 158, '11', '34', '34', ''),
(16, 158, '12', '42', '42', ''),
(17, 160, '12', '42', '40', '8'),
(18, 160, '12', '42', '40', '8'),
(19, 161, '', '', '', ''),
(20, 162, '11', '39', '', ''),
(21, 162, '12', '42', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_specific_details`
--

CREATE TABLE `tbl_job_card_specific_details` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `file_title` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_specific_details`
--

INSERT INTO `tbl_job_card_specific_details` (`id`, `job_card_id`, `img`, `file_title`) VALUES
(1, 115, 'test.pdf', 'test'),
(5, 127, 'MMK pdf.pdf', 'MMK pdf'),
(6, 127, 'JC1.pdf', 'JC1'),
(7, 140, 'cedp.pdf', 'cedp'),
(8, 140, 'jc.pdf', 'jc'),
(9, 141, 'JC1.pdf', 'JC1'),
(10, 152, '1660712631_Job_Card_141.pdf', '1660712631_Job_Card_141'),
(11, 158, '1661426370_15652 The Chikhli Urban Bank Cheque Sheet.pdf', '1661426370_15652 The Chikhli Urban Bank Cheque Sheet'),
(14, 159, '1661771527_wristband (2).pdf', '1661771527_wristband (2)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_card_specific_details_check`
--

CREATE TABLE `tbl_job_card_specific_details_check` (
  `id` int(11) NOT NULL,
  `job_card_id` int(11) NOT NULL,
  `tearing` varchar(500) DEFAULT NULL,
  `cutting` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_card_specific_details_check`
--

INSERT INTO `tbl_job_card_specific_details_check` (`id`, `job_card_id`, `tearing`, `cutting`) VALUES
(157, 152, '2', '1'),
(158, 158, '2', '2'),
(159, 160, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_cart`
--

CREATE TABLE `tbl_job_cart` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `product_category` tinyint(2) NOT NULL,
  `product_type` tinyint(2) DEFAULT NULL,
  `job_card_no` varchar(55) NOT NULL,
  `job_card_title` varchar(55) NOT NULL,
  `company_product_no` varchar(55) DEFAULT NULL,
  `product_name_by_customer` varchar(55) DEFAULT NULL,
  `width` varchar(55) DEFAULT NULL,
  `width_unit` tinyint(2) DEFAULT NULL,
  `height` varchar(55) DEFAULT NULL,
  `height_unit` tinyint(2) DEFAULT NULL,
  `part_ply` int(10) DEFAULT NULL,
  `item_type` tinyint(2) DEFAULT NULL,
  `special_instructions` varchar(300) DEFAULT NULL,
  `perforation` tinyint(2) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_job_cart`
--

INSERT INTO `tbl_job_cart` (`id`, `unique_id`, `type`, `product_category`, `product_type`, `job_card_no`, `job_card_title`, `company_product_no`, `product_name_by_customer`, `width`, `width_unit`, `height`, `height_unit`, `part_ply`, `item_type`, `special_instructions`, `perforation`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(111, NULL, NULL, 53, NULL, '267', '267', '267', '267', '267', 24, '267', 24, 1, 3, '267', 1, 9, '2022-07-26 08:07:54', NULL, NULL),
(112, NULL, NULL, 51, 77, 'MJC/001/entry5', 'Product type - OTC', 'SCUBE001', 'Siddhi', '12', 18, '12', 18, 1, 2, 'yes', 1, 9, '2022-07-27 05:07:06', NULL, NULL),
(113, NULL, NULL, 52, 76, '287', '287', '287', '287', '287', 27, '287', 20, 2, 3, '287', 1, 999999999, '2022-07-28 09:07:45', 999999999, '2022-07-28 09:07:10'),
(114, NULL, NULL, 52, 76, 'test111', 'test111', 'test111', 'test111', 'test111', 18, 'test111', 24, 2, 3, 'test111', 1, 999999999, '2022-07-28 10:07:21', 999999999, '2022-07-28 10:07:09'),
(115, NULL, NULL, 51, 77, 'MJC/001/entry1', 'Product type - Box', 'SCUBE001', 'Siddhi', '12', 18, '12', 18, 2, 2, 'Test', 1, 9, '2022-07-28 11:07:16', 9, '2022-07-28 11:07:01'),
(116, NULL, NULL, 52, NULL, '297', '297', '297', '297', '297', 17, '297', 24, 1, 3, '297', 2, 999999999, '2022-07-29 05:07:36', NULL, NULL),
(117, NULL, NULL, 53, NULL, '297 test', '297 test', '297 test', '297 test', '297 test', 24, '297 test', 24, 1, 3, '297 test', 2, 999999999, '2022-07-29 12:07:09', 999999999, '2022-07-29 12:07:49'),
(118, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:18', NULL, NULL),
(119, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:33', NULL, NULL),
(120, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:37', NULL, NULL),
(121, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:39', NULL, NULL),
(122, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:39', NULL, NULL),
(123, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:39', NULL, NULL),
(124, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 1, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:39', NULL, NULL),
(125, NULL, NULL, 53, NULL, '297 test 1', '297 test 1', '297 test 1', '297 test 1', '297 test 1', 20, '297 test 1', 20, 9, 3, '297 test 1', 2, 999999999, '2022-07-29 12:07:59', 999999999, '2022-08-01 04:08:44'),
(126, NULL, NULL, 51, NULL, 'fsdf', 'fsdf', 'fsdf', 'fsd', 'dsfs', 24, 'fsd', 20, 1, 2, 'fgd', 2, 999999999, '2022-08-01 04:08:08', 999999999, '2022-08-01 04:08:57'),
(127, NULL, NULL, 29, 79, 'MJC/006/entry6', 'Wrist band', 'SCUBE001', 'Saransh Gupta', '12', 18, '24', 18, 4, 2, 'test', 1, 9, '2022-08-01 07:08:07', 9, '2022-08-01 09:08:41'),
(128, NULL, NULL, 30, 80, 'DJC015629', 'NCR RP ROLL - CANARA BANK', NULL, 'NCR RP ROLL - CANARA BANK', '79', 17, '400', 28, 1, 4, 'NEW JOB, FOLLOW ARTWORK', 2, 29, '2022-08-02 07:08:15', NULL, NULL),
(140, NULL, NULL, 29, 79, 'MJC/001/entry9', 'Wrist band - paper', 'SCUBE002', 'Siddhi', '13', 18, '13', 18, 2, 2, 'Testing job card pdf generation functionality', 1, 9, '2022-08-03 08:08:07', NULL, NULL),
(141, NULL, NULL, 26, NULL, 'MJC/001/entry10', 'Product type - Pen', 'SCUBE002', 'Siddhi', '13', 18, '13', 18, 2, 2, 'test instruction', 1, 9, '2022-08-04 04:08:33', 9, '2022-08-09 10:08:43'),
(142, NULL, NULL, 29, NULL, 'MJC/001/entry2', 'Product type - Box11234', NULL, 'Saransh Gupta', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-08-09 10:08:26', NULL, NULL),
(143, NULL, NULL, 29, NULL, 'MJC/001/entry2', 'Product type - Box11234', NULL, 'Saransh Gupta', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-08-09 10:08:38', NULL, NULL),
(144, NULL, NULL, 29, NULL, 'MJC/001/entry2', 'Product type - Box11234', NULL, 'Saransh Gupta', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-08-09 10:08:38', NULL, NULL),
(145, NULL, NULL, 29, NULL, 'MJC/001/entry2', 'Product type - Box11234', NULL, 'Saransh Gupta', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-08-09 10:08:39', NULL, NULL),
(146, NULL, NULL, 29, NULL, 'MJC/001/entry2', 'Product type - Box11234', NULL, 'Saransh Gupta', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-08-09 10:08:40', NULL, NULL),
(147, NULL, NULL, 29, NULL, 'MJC/001/entry2', 'Product type - Box11234', NULL, 'Saransh Gupta', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 9, '2022-08-09 10:08:40', NULL, NULL),
(148, NULL, NULL, 26, NULL, 'Test', 'Test', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, 999999999, '2022-08-09 11:08:51', NULL, NULL),
(149, NULL, 'Thermal', 26, NULL, 'sdf', 'dfs', NULL, 'dsfs', NULL, NULL, NULL, NULL, 2, NULL, 'fdg', 1, 999999999, '2022-08-12 08:08:45', NULL, NULL),
(150, NULL, 'Thermal', 26, 78, 'MJtC/001/entry1', 'Product type - OTC', 'SCUBE002', 'Siddhi', '24', 28, '31', 28, 1, 2, 'Test', 1, 9, '2022-08-12 11:08:06', NULL, NULL),
(151, NULL, 'Computer Stationary', 26, 78, 'weq', 'wqe', 'ewqe', 'qweq', 'qwewq', 24, 'weq', 20, 1, 3, NULL, NULL, 999999999, '2022-08-17 04:08:46', 999999999, '2022-08-17 04:08:59'),
(152, NULL, 'Check', 27, 81, 'weq', 'weq', NULL, NULL, 'asd', 18, 'asdsad', 24, 1, 2, 'dsa', 2, 999999999, '2022-08-17 04:08:22', 999999999, '2022-08-17 05:08:10'),
(153, NULL, NULL, 33, 83, 'DJC011205', 'RIB INFINITY/INTERNET BANKING PIN MAILER', NULL, 'RIB INFINITY/INTERNET BANKING PIN MAILER', '8', 29, '4', 29, 3, 2, 'EXACT REPAT JOB, NUMBERING CONTINUE FROM LAST,', 1, 29, '2022-08-20 10:08:29', 29, '2022-08-23 05:08:38'),
(158, 'JC/22-23/158', 'Check', 36, NULL, 'DJC015652', 'MICR CHEQUE SHEETS - CHIKHLI URBAN CO-OP BANK LTD', NULL, NULL, '214', 28, '279', 28, 2, 2, 'NEW JOB,FOLLOW ARTWORK', 1, 25, '2022-08-25 11:08:41', 25, '2022-08-25 11:08:38'),
(159, 'JC/22-23/159', NULL, 29, 79, 'DJC011071', 'WRIST BAND - IMAGICA (YELLOW)', NULL, 'WRIST BAND - IMAGICA (YELLOW)', '1.25', 29, '11', 29, 1, NULL, 'EXACT REPEAT JOB,FOLLOW SAMPLE', 1, 25, '2022-08-29 11:08:36', 25, '2022-08-29 11:08:19'),
(160, 'JC/22-23/160', 'Check', 36, NULL, 'Jc/C/001', 'Product type - Box', NULL, NULL, '12', 19, '12', 20, 1, 2, 'test', 1, 9, '2022-09-02 09:09:00', NULL, NULL),
(161, 'JC/22-23/161', 'Computer Stationary', 33, NULL, 'jbc/002/com', 'Product type - Box11234', 'test001', 'Saransh', '12', 34, '12', 20, 1, 4, 'test', 1, 9, '2022-09-02 10:09:33', NULL, NULL),
(162, 'JC/22-23/162', 'Computer Stationary', 33, 83, 'DJC013335', 'INTERNET BANKING PIN MAILER - COSMOS BANK', NULL, 'INTERNET BANKING PIN MAILER - COSMOS BANK', '6.5', 29, '4', 29, 6, 2, 'EXACT REPEAT JOB, FOLLOW SAMPLE.', 1, 29, '2022-09-09 07:09:56', 29, '2022-09-09 08:09:47'),
(163, 'JC/23-24/163', 'Thermal', 30, 80, 'DJC01234', 'thermal ncr roll', NULL, 'Siddhi', '79', 28, '70', 33, 1, NULL, 'new job .follow artwork.', 2, 9, '2023-01-16 11:01:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_machine_master`
--

CREATE TABLE `tbl_machine_master` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `my_unique_id` varchar(55) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `spec` varchar(255) DEFAULT NULL,
  `category` tinyint(1) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_machine_master`
--

INSERT INTO `tbl_machine_master` (`id`, `unique_id`, `my_unique_id`, `name`, `spec`, `category`, `location`, `capacity`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(31, 'Cutting', NULL, 'Cutting', 'Cutting', 2, '49', '100.22', 9, '2022-05-24 09:05:56', NULL, NULL),
(32, 'mac/001', NULL, 'Pritonix 1000 Secound', 'Pritonix 1000 Secound', 1, '50', '1001', 9, '2022-06-06 09:06:53', NULL, NULL),
(33, 'Press Machine', NULL, 'Press Machine', 'Press Machine', 3, '48', '30', 9, '2022-06-10 10:06:32', NULL, NULL),
(34, 'Pre Press Machine', NULL, 'Pre Press Machine', 'Pre Press Machine', 1, '50', '20', 9, '2022-06-10 10:06:55', NULL, NULL),
(35, 'Post Press Machine', NULL, 'Post Press Machine', 'Post Press Machine', 2, '50', '10', 9, '2022-06-10 10:06:18', NULL, NULL),
(36, 'sdfds', 'MA/36', 'sdf', 'dsfs', 3, '53', '4', 999999999, '2022-08-06 11:08:01', NULL, NULL),
(37, 'mac/002', 'MA/37', 'Pritonix 1000 Second', 'Test001234', 2, '54', '1001', 9, '2022-08-08 08:08:01', NULL, NULL),
(38, 'fsdf', 'MA/38', 'fsdfds', NULL, 2, '56', '4', 999999999, '2022-08-09 06:08:34', NULL, NULL),
(39, 'DTP', 'MA/39', 'DTP-Amit', NULL, 1, '55', '0', 29, '2022-08-11 07:08:56', NULL, NULL),
(40, 'Printer', 'MA/40', 'HP Laserjet M706 Pro', NULL, 1, '55', '0', 29, '2022-08-11 07:08:24', NULL, NULL),
(41, 'Plate Maker', 'MA/41', 'Varna Graphics', NULL, 1, '55', '0', 29, '2022-08-11 07:08:14', NULL, NULL),
(42, 'Plate Baker', 'MA/42', 'Oven 1', NULL, 1, '55', '0', 29, '2022-08-11 07:08:38', NULL, NULL),
(44, 'T-D-421', 'MA/44', 'T-D-421', 'D5-121', 3, '55', '0', 29, '2022-08-11 07:08:15', NULL, NULL),
(45, 'T-D-400', 'MA/45', 'T-D-400', 'D5-123', 3, '55', '0', 29, '2022-08-11 07:08:48', NULL, NULL),
(46, 'T-B-600', 'MA/46', 'T-B-600', 'D5-123', 3, '55', '0', 29, '2022-08-11 07:08:31', NULL, NULL),
(47, 'Manual', 'MA/47', 'Manual', NULL, 2, '55', '0', 29, '2022-08-11 08:08:44', NULL, NULL),
(48, 'SJ-1', 'MA/48', 'Roll Cutting', NULL, 2, '55', '0', 29, '2022-08-11 08:08:36', NULL, NULL),
(49, 'DPA 4', 'MA/49', 'DPA 4', 'DPA 4', 2, '55', '1000', 29, '2022-09-09 08:09:41', NULL, NULL),
(50, 'COL - S1', 'MA/50', 'COL - S1', 'COL - S1', 2, '55', '1000', 29, '2022-09-09 08:09:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE `tbl_material` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `rm_category` tinyint(4) DEFAULT NULL,
  `rm_product_category` tinyint(4) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `unit` tinyint(4) DEFAULT NULL,
  `opening_balance` varchar(55) DEFAULT NULL,
  `hs_code` varchar(55) DEFAULT NULL,
  `box_height` varchar(86) DEFAULT NULL,
  `box_height_unit` varchar(86) DEFAULT NULL,
  `box_width` varchar(86) DEFAULT NULL,
  `box_width_unit` varchar(86) DEFAULT NULL,
  `box_length` varchar(86) DEFAULT NULL,
  `box_length_unit` varchar(86) DEFAULT NULL,
  `box_color` varchar(86) DEFAULT NULL,
  `box_special` varchar(86) DEFAULT NULL,
  `bag_height` varchar(86) DEFAULT NULL,
  `bag_height_unit` varchar(86) DEFAULT NULL,
  `bag_width` varchar(86) DEFAULT NULL,
  `bag_width_unit` varchar(86) DEFAULT NULL,
  `bag_color` varchar(86) DEFAULT NULL,
  `bag_special` varchar(86) DEFAULT NULL,
  `paper_width` varchar(86) DEFAULT NULL,
  `paper_width_unit` varchar(86) DEFAULT NULL,
  `paper_diameter` varchar(86) DEFAULT NULL,
  `paper_diameter_unit` varchar(86) DEFAULT NULL,
  `paper_special` varchar(86) DEFAULT NULL,
  `core_width` varchar(86) DEFAULT NULL,
  `core_width_unit` varchar(86) DEFAULT NULL,
  `core_daimeter` varchar(86) DEFAULT NULL,
  `core_daimeter_unit` varchar(86) DEFAULT NULL,
  `core_special` varchar(86) DEFAULT NULL,
  `chemical_make` varchar(86) DEFAULT NULL,
  `chemical_type` varchar(86) DEFAULT NULL,
  `chemical_special` varchar(86) DEFAULT NULL,
  `paper2_papermake` varchar(86) DEFAULT NULL,
  `paper2_width` varchar(86) DEFAULT NULL,
  `paper2_width_unit` varchar(86) DEFAULT NULL,
  `paper2_colour` varchar(86) DEFAULT NULL,
  `paper2_gsm` varchar(86) DEFAULT NULL,
  `paper2_carbonslide` varchar(86) DEFAULT NULL,
  `paper2_special` varchar(86) DEFAULT NULL,
  `paper2_hs_code` varchar(86) DEFAULT NULL,
  `paper2_formate` varchar(86) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` date DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` date DEFAULT NULL,
  `ink_make` varchar(86) DEFAULT NULL,
  `ink_type` varchar(86) DEFAULT NULL,
  `ink_color` varchar(86) DEFAULT NULL,
  `ink_special` varchar(86) DEFAULT NULL,
  `printed_product_height` varchar(86) DEFAULT NULL,
  `printed_product_height_unit` varchar(86) DEFAULT NULL,
  `printed_product_width` varchar(86) DEFAULT NULL,
  `printed_product_width_unit` varchar(86) DEFAULT NULL,
  `printed_product_part_no` varchar(86) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id`, `unique_id`, `rm_category`, `rm_product_category`, `name`, `description`, `unit`, `opening_balance`, `hs_code`, `box_height`, `box_height_unit`, `box_width`, `box_width_unit`, `box_length`, `box_length_unit`, `box_color`, `box_special`, `bag_height`, `bag_height_unit`, `bag_width`, `bag_width_unit`, `bag_color`, `bag_special`, `paper_width`, `paper_width_unit`, `paper_diameter`, `paper_diameter_unit`, `paper_special`, `core_width`, `core_width_unit`, `core_daimeter`, `core_daimeter_unit`, `core_special`, `chemical_make`, `chemical_type`, `chemical_special`, `paper2_papermake`, `paper2_width`, `paper2_width_unit`, `paper2_colour`, `paper2_gsm`, `paper2_carbonslide`, `paper2_special`, `paper2_hs_code`, `paper2_formate`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `ink_make`, `ink_type`, `ink_color`, `ink_special`, `printed_product_height`, `printed_product_height_unit`, `printed_product_width`, `printed_product_width_unit`, `printed_product_part_no`) VALUES
(10, NULL, 16, 51, 'Core Boxes Material', 'Core Boxes Material Description', 24, '500', 'Hs Code', '10', '24', '20', '19', '30', '27', 'Red, Yellow', 'Special', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 999999999, '2022-06-09', 999999999, '2022-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 17, 52, 'Name', 'Description', 24, '500', 'Hs Code', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '24', '20', '20', 'Red', 'Special', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 999999999, '2022-06-09', 999999999, '2022-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 17, 52, 'test', 'test', 17, '200', 'code', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', '24', '20', '20', 'black', 'special', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 999999999, '2022-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 16, 51, 'Boxes', 'Test Material Functionality', 17, '5.36', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 17, 52, 'Test', 'Test', 27, '1234', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 21, 56, 'Test - Material Master', 'Test - Material Master', 20, '1234', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-06-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'RM/16', 17, 52, 'gfdg', 'f', 19, 'fg', 'gfdgfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '5', '20', '4', '27', '6', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 999999999, '2022-08-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'RM/17', 17, 52, 'Test - Material Master1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', '18', '14', '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, '2022-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'RM/18', 25, 62, 'NR AGARWAL PAPER', 'NR AGARWAL PAPER', 44, '0', '48204000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NR AGARWAL', '13', '29', 'WHITE', '56', NULL, NULL, '48204000', NULL, 29, '2022-08-20', 29, '2022-09-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'RM/19', 26, 63, 'BLACK', 'BLACK', 43, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29, '2022-09-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orientation`
--

CREATE TABLE `tbl_orientation` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orientation`
--

INSERT INTO `tbl_orientation` (`id`, `description`) VALUES
(1, 'Portrait'),
(2, 'Landscape');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perforation`
--

CREATE TABLE `tbl_perforation` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_perforation`
--

INSERT INTO `tbl_perforation` (`id`, `description`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plants`
--

CREATE TABLE `tbl_plants` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `ecc_no` varchar(55) DEFAULT NULL,
  `sales_tax_regs_no` varchar(55) DEFAULT NULL,
  `ecc_no_dated` date DEFAULT NULL,
  `sales_tax_regs_no_dated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plants`
--

INSERT INTO `tbl_plants` (`id`, `company_id`, `ecc_no`, `sales_tax_regs_no`, `ecc_no_dated`, `sales_tax_regs_no_dated`) VALUES
(45, 36, '1', 'no 1', '2022-05-24', '2022-05-24'),
(48, 36, '2', 'no 2', '2022-05-24', '2022-05-24'),
(49, 36, '3', 'no 3', '2022-05-24', '2022-05-24'),
(50, 39, 'test1234', 'test1234', '2022-05-24', '2025-05-28'),
(51, 39, 'test1235', 'test1236', '2022-09-08', '2022-05-17'),
(54, 42, '1', 'no 1', '2022-05-26', '2022-05-26'),
(55, 42, '2', 'no 2', '2022-05-26', '2022-05-26'),
(56, 43, 'Esc123', 'Reg123', '2022-05-27', '2022-06-01'),
(59, 45, 'ECC_1223', 'Reg0011', '2022-06-03', '2022-06-24'),
(60, 45, 'ECC_1224', 'Reg0012', '2022-06-04', '2022-06-30'),
(62, 47, '1', '1', '2015-01-20', '2015-01-14'),
(64, 49, 'dgdf', 'gfgd', '2022-08-06', '2022-08-06'),
(65, 50, 'test', 'test1', '2022-08-04', '2022-08-08'),
(66, 51, 'cxv', 'vccx', '2022-08-09', '2022-08-09'),
(67, 52, 'asdasd', 'sdad', '2022-08-09', '2022-08-09'),
(68, 53, 'fsdf', 'fsd', '2022-08-09', '2022-08-09'),
(70, 49, 'ECC-0112', 'Sales234', '2022-10-27', '2022-10-29'),
(71, 50, 'hgh', 'ghgh', '2023-02-13', '2023-02-14'),
(72, 52, 'Cum dolor aut duis a', 'Sit incididunt odit ', '2019-01-18', '2022-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_plate_type`
--

CREATE TABLE `tbl_plate_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_plate_type`
--

INSERT INTO `tbl_plate_type` (`id`, `description`) VALUES
(1, 'PS'),
(2, 'Polymer'),
(3, 'CTP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_printing`
--

CREATE TABLE `tbl_printing` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_printing`
--

INSERT INTO `tbl_printing` (`id`, `description`) VALUES
(1, 'Coating Side'),
(2, 'Non- Coating Side'),
(3, 'Both');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_process_master`
--

CREATE TABLE `tbl_process_master` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `process_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `is_fixed_process` tinyint(1) NOT NULL,
  `process_avg_completion_time` varchar(55) DEFAULT NULL,
  `fixed_cost` varchar(55) DEFAULT NULL,
  `running_cost` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_process_master`
--

INSERT INTO `tbl_process_master` (`id`, `unique_id`, `process_id`, `name`, `category`, `image`, `image1`, `image2`, `is_fixed_process`, `process_avg_completion_time`, `fixed_cost`, `running_cost`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(1, 'PR/1', '01', 'DESIGNER', '1', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:05', NULL, NULL),
(2, 'PR/2', '02', 'ARTWORK', '1', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:34', NULL, NULL),
(3, 'PR/3', '03', 'PLATE MAKING', '1', '', '', '', 0, NULL, NULL, NULL, 28, '2023-04-10 08:04:05', NULL, NULL),
(4, 'PR/4', '04', 'PLATE BAKING', '1', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:25', NULL, NULL),
(5, 'PR/5', '05', 'POSITIVE/TRACING', '1', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:00', NULL, NULL),
(6, 'PR/6', '06', 'PRINTING', '3', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:48', NULL, NULL),
(7, 'PR/7', '07', 'ON LINE NUMBERING', '3', '', '', '', 0, NULL, NULL, NULL, 28, '2023-04-10 08:04:09', NULL, NULL),
(8, 'PR/8', '08', 'GUMMING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:33', NULL, NULL),
(9, 'PR/9', '09', 'COLLATE', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:15', NULL, NULL),
(10, 'PR/10', '10', 'EMBOSS', '2', '', '', '', 0, NULL, NULL, NULL, 28, '2023-04-10 08:04:32', NULL, NULL),
(11, 'PR/11', '11', 'BABY ROLL MAKING', '2', '', '', '', 0, NULL, NULL, NULL, 28, '2023-04-10 08:04:52', NULL, NULL),
(12, 'PR/12', '12', 'SHEET CUTTING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:24', NULL, NULL),
(13, 'PR/13', '13', 'SHEET SCAN', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:48', NULL, NULL),
(14, 'PR/14', '14', 'PURIFICATION', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:17', NULL, NULL),
(15, 'PR/15', '15', 'FIRST CUT', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:48', NULL, NULL),
(16, 'PR/16', '16', 'CHECKING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:06', NULL, NULL),
(17, 'PR/17', '17', 'GATHERING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:35', NULL, NULL),
(18, 'PR/18', '18', 'PINING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:57', NULL, NULL),
(19, 'PR/19', '19', 'BINDING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:18', NULL, NULL),
(20, 'PR/20', '20', 'RAILWAY ROLL MAKING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:49', NULL, NULL),
(21, 'PR/21', '21', 'THERMAL THEATRE TICKET ROLL MAKING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:15', NULL, NULL),
(22, 'PR/22', '22', 'FINAL CUTTING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:46', NULL, NULL),
(23, 'PR/23', '23', 'FINAL CHECKING & PACKING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:09', NULL, NULL),
(24, 'PR/24', '24', 'FINISH GOODS', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:35', NULL, NULL),
(25, 'PR/25', '25', 'PIN MAILER PRESSING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:14', NULL, NULL),
(26, 'PR/26', '26', 'CRASH NUMBERING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:37', NULL, NULL),
(27, 'PR/27', '27', 'BOOK MAKING', '2', '', '', '', 1, NULL, NULL, NULL, 28, '2023-04-10 08:04:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `company_id` bigint(20) NOT NULL DEFAULT '0',
  `description_id` text,
  `product_category` varchar(30) DEFAULT NULL,
  `product_type` varchar(30) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `unique_id`, `company_id`, `description_id`, `product_category`, `product_type`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(76, NULL, 49, '1,2,3,4,5,6', '52', 'Product type 1', 9, '2022-06-10 10:06:40', 9, '2022-06-10 10:06:42'),
(77, NULL, 0, '1,2,3,4,5,6', '51', 'box', 9, '2022-06-10 12:06:15', NULL, NULL),
(78, NULL, 0, '1,2,3,4,5,6', '26', 'trre', 999999999, '2022-07-29 12:07:01', NULL, NULL),
(79, NULL, 0, '1,2,3,4,5,6', '29', 'Paper', 9, '2022-08-01 07:08:59', NULL, NULL),
(80, NULL, 0, '1,2,3,4,5,6', '30', 'ATM ROLL', 29, '2022-08-02 06:08:29', NULL, NULL),
(81, 'FPM/81', 0, '1,2,3,4,5,6', '27', 'aDA', 999999999, '2022-08-06 11:08:10', NULL, NULL),
(82, 'FPM/82', 0, '1,2,3,4,5,6', '27', 'box', 9, '2022-08-08 06:08:02', NULL, NULL),
(83, 'FPM/83', 0, '1,2,3,4,5,6', '33', 'PIN MAILER', 29, '2022-08-16 09:08:31', NULL, NULL),
(84, 'FPM/84', 49, '1,2,3,4,5,6', '26', 'w', 36, '2023-03-10 05:03:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

CREATE TABLE `tbl_product_category` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `hs_code` varchar(255) NOT NULL,
  `excise_code` int(11) NOT NULL,
  `excise_description` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id`, `unique_id`, `product_category`, `hs_code`, `excise_code`, `excise_description`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(25, NULL, 'Rottering pen', 'HS-pen', 24, 'TOLL TKT', 9, '2022-05-19 11:05:05', 9, '2022-05-19 11:05:28'),
(26, NULL, 'STICKER PAPER', '5', 24, 'TOLL TKT', 9, '2022-05-19 11:05:08', NULL, NULL),
(27, NULL, 'OVER DRAFT', '123', 23, 'EXEMPTED', 9, '2022-07-28 10:07:12', NULL, NULL),
(28, NULL, 'test product category', '123', 23, 'EXEMPTED', 9, '2022-07-28 10:07:21', NULL, NULL),
(29, NULL, 'WRIST BAND', 'test', 22, 'STICKER PAPER-123', 9, '2022-08-01 07:08:02', NULL, NULL),
(30, 'FPC/30', 'THERMAL ROLL', '48119099', 24, 'THERMAL ROLL', 29, '2022-08-02 06:08:43', NULL, NULL),
(31, 'FPC/31', 'd', 'AD', 24, 'TOLL TKT', 999999999, '2022-08-06 11:08:46', NULL, NULL),
(32, 'FPC/32', 'Product category', '124', 23, 'EXEMPTED', 9, '2022-08-08 06:08:53', NULL, NULL),
(33, 'FPC/33', 'COMPUTER STATIONERY', '48204000', 29, 'MANIFOLD BUSINESS FORMS', 29, '2022-08-16 09:08:45', NULL, NULL),
(34, 'FPC/34', 'Entertainment KIt', 'Entertainment KIt', 20, 'Excise Description 2', 999999999, '2022-08-23 11:08:30', NULL, NULL),
(35, 'FPC/35', 'Railway Roll', 'Railway Roll', 26, 'ENT.TKT', 999999999, '2022-08-23 11:08:05', NULL, NULL),
(36, 'FPC/36', 'Cheque', 'Cheque', 24, 'TOLL TKT', 999999999, '2022-08-23 11:08:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_post_press`
--

CREATE TABLE `tbl_product_post_press` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_post_press`
--

INSERT INTO `tbl_product_post_press` (`id`, `product_id`, `process`, `basicmachine`, `alternativemachine`, `qc`) VALUES
(102, 76, '4', '35', '35', '6'),
(105, 76, '4', '35', '35', '6'),
(106, 77, '4', '35', '31', '6'),
(107, 78, '4', '35', '35', '8'),
(108, 79, '', '', '', ''),
(109, 80, '', '', '', ''),
(110, 81, '', '', '', ''),
(111, 82, '4', '31', '35', '8'),
(112, 83, '', '', '', ''),
(113, 84, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_press`
--

CREATE TABLE `tbl_product_press` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_press`
--

INSERT INTO `tbl_product_press` (`id`, `product_id`, `process`, `basicmachine`, `alternativemachine`, `qc`) VALUES
(104, 76, '2', '33', '33', '6'),
(106, 76, '2', '33', '33', '6'),
(107, 77, '2', '33', '33', '6'),
(108, 78, '2', '33', '33', '8'),
(109, 79, '', '', '', ''),
(110, 80, '', '', '', ''),
(111, 81, '', '', '', ''),
(112, 82, '2', '36', '33', '8'),
(113, 83, '', '', '', ''),
(114, 84, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_pre_press`
--

CREATE TABLE `tbl_product_pre_press` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_pre_press`
--

INSERT INTO `tbl_product_pre_press` (`id`, `product_id`, `process`, `basicmachine`, `alternativemachine`, `qc`) VALUES
(107, 76, '3', '34', '34', '6'),
(109, 76, '3', '34', '34', '6'),
(110, 77, '3', '32', '32', '6'),
(111, 78, '3', '32', '32', '7'),
(112, 79, '3', '34', '34', '8'),
(113, 80, '', '', '', ''),
(114, 81, '', '', '', ''),
(115, 82, '5', '34', '32', '8'),
(116, 83, '', '', '', ''),
(117, 84, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation`
--

CREATE TABLE `tbl_quotation` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `sales_person` int(11) NOT NULL,
  `company` varchar(55) NOT NULL,
  `unique_reference` varchar(55) DEFAULT NULL,
  `comp_name_add` varchar(255) NOT NULL,
  `attention_of` varchar(255) DEFAULT NULL,
  `quotation_date` date DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `discharge_point_term` varchar(255) DEFAULT NULL,
  `installation_charge` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL,
  `training` varchar(255) DEFAULT NULL,
  `bank_charges` varchar(255) DEFAULT NULL,
  `sampling_charges` varchar(255) DEFAULT NULL,
  `lchandling_charges` varchar(255) DEFAULT NULL,
  `cancellation_of_order_charge` varchar(255) DEFAULT NULL,
  `delivery_point` varchar(255) DEFAULT NULL,
  `packing` varchar(255) DEFAULT NULL,
  `payment_term` varchar(255) DEFAULT NULL,
  `validity_of_quotation` varchar(255) DEFAULT NULL,
  `documents` varchar(255) DEFAULT NULL,
  `jurisdiction` varchar(255) DEFAULT NULL,
  `statutory_clause` varchar(255) DEFAULT NULL,
  `tax` varchar(255) DEFAULT NULL,
  `excise` varchar(255) DEFAULT NULL,
  `lbt` varchar(255) DEFAULT NULL,
  `freight` varchar(255) DEFAULT NULL,
  `delivery` varchar(255) DEFAULT NULL,
  `prices` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `quote_type` int(11) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `rows` int(11) NOT NULL,
  `columns` int(11) NOT NULL,
  `discharge_point_term_checkbox` tinyint(1) DEFAULT NULL,
  `installation_charge_checkbox` tinyint(1) DEFAULT NULL,
  `warranty_checkbox` tinyint(1) DEFAULT NULL,
  `training_checkbox` tinyint(1) DEFAULT NULL,
  `bank_charges_checkbox` tinyint(11) DEFAULT NULL,
  `sampling_charges_checkbox` tinyint(1) DEFAULT NULL,
  `lchandling_charges_checkbox` tinyint(1) DEFAULT NULL,
  `cancellation_of_order_charge_checkbox` tinyint(1) DEFAULT NULL,
  `delivery_point_checkbox` tinyint(1) DEFAULT NULL,
  `packing_checkbox` tinyint(1) DEFAULT NULL,
  `payment_term_checkbox` tinyint(1) DEFAULT NULL,
  `validity_of_quotation_checkbox` tinyint(1) DEFAULT NULL,
  `documents_checkbox` tinyint(1) DEFAULT NULL,
  `jurisdiction_checkbox` tinyint(1) DEFAULT NULL,
  `statutory_clause_checkbox` tinyint(1) DEFAULT NULL,
  `tax_checkbox` tinyint(1) DEFAULT NULL,
  `excise_checkbox` tinyint(1) DEFAULT NULL,
  `lbt_checkbox` tinyint(1) DEFAULT NULL,
  `freight_checkbox` tinyint(1) DEFAULT NULL,
  `delivery_checkbox` tinyint(1) DEFAULT NULL,
  `prices_checkbox` tinyint(1) DEFAULT NULL,
  `othercharges` varchar(255) DEFAULT NULL,
  `tds` varchar(255) DEFAULT NULL,
  `othercharges_checkbox` tinyint(1) DEFAULT NULL,
  `tds_checkbox` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quotation`
--

INSERT INTO `tbl_quotation` (`id`, `unique_id`, `sales_person`, `company`, `unique_reference`, `comp_name_add`, `attention_of`, `quotation_date`, `subject`, `discharge_point_term`, `installation_charge`, `warranty`, `training`, `bank_charges`, `sampling_charges`, `lchandling_charges`, `cancellation_of_order_charge`, `delivery_point`, `packing`, `payment_term`, `validity_of_quotation`, `documents`, `jurisdiction`, `statutory_clause`, `tax`, `excise`, `lbt`, `freight`, `delivery`, `prices`, `note`, `reference`, `quote_type`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `rows`, `columns`, `discharge_point_term_checkbox`, `installation_charge_checkbox`, `warranty_checkbox`, `training_checkbox`, `bank_charges_checkbox`, `sampling_charges_checkbox`, `lchandling_charges_checkbox`, `cancellation_of_order_charge_checkbox`, `delivery_point_checkbox`, `packing_checkbox`, `payment_term_checkbox`, `validity_of_quotation_checkbox`, `documents_checkbox`, `jurisdiction_checkbox`, `statutory_clause_checkbox`, `tax_checkbox`, `excise_checkbox`, `lbt_checkbox`, `freight_checkbox`, `delivery_checkbox`, `prices_checkbox`, `othercharges`, `tds`, `othercharges_checkbox`, `tds_checkbox`) VALUES
(1, 'QU/22-23/1', 20, '', 'CUS/RS/1/PR', 'GUARDIAN SOUHARDA SAHAKARI BANK,\r\n139,INFINITY ROAD,SHIVAJI NAGAR,\r\nBANGALORE -560001', 'S.Charles Nickson Raj', '2022-07-09', 'Quotation for JP & RP Thermal Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 7 days from the date of PO', NULL, NULL, 'Mail Dt.09-07-2022', 5, 25, '2022-07-09 07:07:02', 25, '2022-07-09 09:07:23', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(3, 'QU/22-23/3', 20, '', 'CUS/RS/3/PR', 'DJ Mediaprint And Logistics Ltd.\r\nVashi,Navi Mumbai-400703', 'Ms.Diksha / Ms.Anjali', '2022-07-11', 'Quotation for Dividend Warrant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Immediate', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 7 days from the date of PO', NULL, NULL, 'Mail Dt.09-07-2022', 5, 25, '2022-07-11 06:07:57', 25, '2022-07-11 06:07:32', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(4, 'QU/22-23/4', 20, '', 'CUS/RS/4/PR', 'THE HASTI CO-OP BANK LTD,\r\nHasti Sahakar Deep Station, Dondaicha', 'Kishor Sonawane', '2022-07-11', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 10-12 Days from the date of PO', NULL, NULL, 'MAIL 11-07-2022', 5, 25, '2022-07-11 06:07:28', 25, '2022-07-11 09:07:36', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(5, 'QU/22-23/5', 20, '', 'CUS/RS/5/PR', 'SARVATRA TECHNOLOGIES PVT. LTD.', 'Sachin Potdar', '2022-07-11', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At Actual outside Mumbai', 'Within 10-12 Days from the date of PO', NULL, NULL, 'MAIL 11-07-2022', 5, 25, '2022-07-11 09:07:06', 25, '2022-07-11 09:07:42', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(6, 'QU/22-23/6', 20, '', 'CUS/RS/6/PR', 'To,\r\nBULDANA URBAN CO-OP CREDIT SOCIETY\r\nLTD.', 'Sunil Jadhav', '2022-07-11', 'Revised Quotation for Cheque Book', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At Actual outside Mumbai', 'Within 10-12 Days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-07-11 11:07:55', 25, '2022-07-11 11:07:45', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(7, 'QU/22-23/7', 20, '', 'CUS/RS/7/PR', 'Wonder Formulations,\r\nGr.Floor, Heena Building,\r\nPlot No.28,1st Road,C.D.Marg,\r\nNear Madhu Park,Khar(W),Mumbai - 400052', 'Shailesh Sir', '2022-07-13', 'Quotation for Share Certificate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 7 days from the date of PO', NULL, NULL, 'MAIL 12/07/2022', 5, 25, '2022-07-13 05:07:41', 25, '2022-07-13 05:07:57', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(8, 'QU/22-23/8', 20, '', 'CUS/RS/8/PR', 'COLORPLAST SYSTEMS PVT. LTD.,\r\nC-8,SEC-65,NOIDA (UP),-201301', 'TARESH GARG', '2022-07-13', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 7 days from the date of PO', NULL, NULL, 'MAIL-12/07/2022', 5, 25, '2022-07-13 06:07:21', 25, '2022-07-13 06:07:52', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(9, 'QU/22-23/9', 20, '', 'CUS/RS/9/PR', 'MCT Cards & Technology Pvt. Ltd.\r\nPlastic Cards Trading Manipal Plot No. 22\r\nA,Shivalli Industrial Area Manipal Udupi 576104\r\nKarnataka India', 'ARJUN PADIYAR', '2022-07-14', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Immediate', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL 14-07-2022', 5, 25, '2022-07-14 06:07:37', 25, '2022-07-14 06:07:48', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(10, 'QU/22-23/10', 20, '', 'CUS/RS/10/PR', 'Design World', 'Faisal Narvel', '2022-07-14', 'Quotation For HP Gas Cash Memo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL 14-07-2022', 5, 25, '2022-07-14 07:07:03', 25, '2022-07-14 07:07:40', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(11, 'QU/22-23/11', 20, '', 'CUS/RS/11/PR', 'Indusind Bank Ltd.', 'SACHIN SOLANKE / GAURANG PATEL', '2022-07-14', 'QUOTATION FOR FIXED DEPOSIT ADVICE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8 days from the date of PO', NULL, NULL, 'MAIL 14-07-2022', 5, 25, '2022-07-14 08:07:51', 25, '2022-07-14 09:07:06', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(12, 'QU/22-23/12', 20, '', 'CUS/RS/12/PR', 'Worldline India Pvt. Ltd.,\r\nRaiaskaran Tech Park, 2nd floor of Tower I, Phase II,\r\nSakinaka, M.V. Road, Andheri (East), Mumbai - 400 072', 'Raghawendra Pratap Shahi', '2022-07-15', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail 15-07-2022', 5, 25, '2022-07-15 05:07:52', 25, '2022-07-15 05:07:54', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(13, 'QU/22-23/13', 20, '', 'CUS/RS/13/PR', 'GP PARSIK SAHAKARI BANK LTD.\r\nHEAD OFFICE, SAHAKARMURTI \r\nGOPINATH SHIVRAM PATIL BHAVAN,\r\nPARSIK NAGAR, KALWA,\r\nTHANE 400605.', 'Palve Sir', '2022-07-15', 'Quotation for Hitachi RP Roll', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-07-15 06:07:00', 25, '2022-07-15 09:07:48', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(14, 'QU/22-23/14', 20, '', 'CUS/RS/14/PR', 'ALKYL AMINES CHEMICALS LTD.,\r\n401/407,NIRMAN VYAPAR KENDRA,\r\nPLOT NO.10, SECTOR-17, VASHI, NAVI MUMBAI-400703.', 'NANDKUMAR SIR', '2022-07-16', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'MAIL 15-07-2022', 5, 25, '2022-07-16 05:07:52', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(15, 'QU/22-23/15', 20, '', 'CUS/RS/15/PR', 'ALKYL AMINES CHEMICALS LTD.,\r\n401/407,NIRMAN VYAPAR KENDRA,\r\nPLOT NO.10, SECTOR-17, VASHI, NAVI MUMBAI-400703.', 'NANDKUMAR SIR', '2022-07-16', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'MAIL 15-07-2022', 5, 25, '2022-07-16 05:07:52', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(16, 'QU/22-23/16', 20, '', 'CUS/RS/16/PR', 'ALKYL AMINES CHEMICALS LTD.,\r\n401/407,NIRMAN VYAPAR KENDRA,\r\nPLOT NO.10, SECTOR-17, VASHI, NAVI MUMBAI-400703.', 'NANDKUMAR SIR', '2022-07-16', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'MAIL 15-07-2022', 5, 25, '2022-07-16 05:07:52', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(17, 'QU/22-23/17', 20, '', 'CUS/RS/17/PR', 'Ram Krishna Bazar\r\nSonar pada, Dombivali East', 'Sachin Munde', '2022-07-16', 'Quotation for Thermal POS rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 7 days from the date of PO', NULL, NULL, 'Verbal', 5, 25, '2022-07-16 06:07:13', 25, '2022-07-16 06:07:54', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(18, 'QU/22-23/18', 23, '', 'CUS/RS/18/PR', 'Sintel Security Print Solutions Limited \r\nProduction Manager\r\nIndustrial Area,\r\n Factory Road, Thika\r\nM: +254703220439 V: 1411', 'Umesh Kulal', '2022-07-16', 'Quotation for Clinic Cards', NULL, NULL, '30 Days', NULL, '$ 100', NULL, NULL, NULL, NULL, NULL, '100 % Advance', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, NULL, NULL, NULL, NULL, '2 Weeks', NULL, NULL, 'Verbal', 2, 28, '2022-07-16 09:07:49', NULL, NULL, 3, 6, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(19, 'QU/22-23/19', 20, '', 'CUS/RS/19/PR', 'Indusind Bank Ltd.', 'SACHIN SOLANKE / GAURANG PATEL', '2022-07-18', 'QUOTATION FOR FIXED DEPOSIT ADVICE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '90 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'mail 14/07/2022', 5, 25, '2022-07-18 10:07:57', 25, '2022-07-18 10:07:16', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(20, 'QU/22-23/20', 20, '', 'CUS/RS/20/PR', 'MARUTI NANDAN ENTERPRISES,\r\nMARUTI NANDAN ENTERPRISES, B-17, VDCM - FAZALPURA, UJJIAN-456001', 'DEEPESH RANKA', '2022-07-18', 'Quotation for Cheque Lvs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-07-18 11:07:27', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(21, 'QU/22-23/21', 23, '', 'CUS/RS/21/PR', 'The Commandant\r\n  Emb HQs \r\n  R Kamani Rd, Ballard Estate, \r\n  Fort, Mumbai, \r\n  Maharashtra 400001', 'Shri Gutti', '2022-07-19', 'Quotation for  OMR Sheets & Evaluation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100 % after complition of job', 'validity Of Quotation 30Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, '18 % GST Applicable', NULL, NULL, 'Included', NULL, NULL, NULL, 'Verbal', 5, 28, '2022-07-19 06:07:54', NULL, NULL, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 0, 0, NULL, NULL, 0, 0),
(22, 'QU/22-23/22', 20, '', 'CUS/RS/22/PR', 'Indusind Bank Ltd.', 'SACHIN SOLANKE / GAURANG PATEL', '2022-07-20', 'QUOTATION FOR FIXED DEPOSIT ADVICE-CONTINUOUS STATIONERY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '90 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'mail 14/07/2022', 5, 25, '2022-07-20 08:07:46', 25, '2022-07-20 09:07:08', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(23, 'QU/22-23/23', 20, '', 'CUS/RS/23/PR', 'Indusind Bank Ltd.', 'SACHIN SOLANKE / GAURANG PATEL', '2022-07-20', 'QUOTATION FOR FIXED DEPOSIT ADVICE-CUTSHEET', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '90 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'mail 14/07/2022', 5, 25, '2022-07-20 09:07:39', 25, '2022-07-20 09:07:58', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(24, 'QU/22-23/24', 20, '', 'CUS/RS/24/PR', 'IN-SOLUTION GLOBAL LIMITED\r\nSuite 601 / 602, Palm Spring,Link Road, Malad West,Mumbai-400064.', 'Arati Gavade', '2022-07-21', 'Quotation for BOB Dubai Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'Mail 21-07-2022', 5, 25, '2022-07-21 07:07:02', NULL, NULL, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(25, 'QU/22-23/25', 23, '', 'CUS/RS/25/PR', 'The Commandant\r\n   Emb HQs \r\n   R Kamani Rd, Ballard Estate, \r\n   Fort, Mumbai, \r\n   Maharashtra 400001', 'Kind Attn: Ms Sreekutty', '2022-07-21', 'Quotation for  Printer Stationery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100 % at closure', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, 'Extra at actuals', 'Within 45 Days after the confirmation of PO.', NULL, NULL, 'Verbal', 5, 28, '2022-07-21 11:07:23', NULL, NULL, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(26, 'QU/22-23/26', 23, '', 'CUS/RS/26/PR', 'The Commandant\r\n   Emb HQs \r\n   R Kamani Rd, Ballard Estate, \r\n   Fort, Mumbai, \r\n   Maharashtra 400001', 'Kind Attn: Ms Sreekutty', '2022-07-21', 'Quotation for  Printer Stationery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'The Price is counted on 2 days printing & closure. Amount of INR 2000/- per day will be charged after the 2 days.', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, 'Transport Cost from Bhiwandi Factory to Embarbation & return will be extra at actuals', 'Within 45 Days after the confirmation of PO.', NULL, NULL, 'Verbal', 5, 28, '2022-07-21 11:07:07', NULL, NULL, 3, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(27, 'QU/22-23/27', 23, '', 'CUS/RS/27/PR', 'GP PARSIK SAHAKARI BANK LTD.\r\nHEAD OFFICE, SAHAKARMURTI \r\nGOPINATH SHIVRAM PATIL BHAVAN,\r\nPARSIK NAGAR, KALWA,\r\nTHANE 400605.', 'Palve Sir', '2022-07-26', 'Quotation for Computer Stationary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Meeting Dt.25-07-2022', 5, 25, '2022-07-26 06:07:55', 25, '2022-07-26 06:07:12', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(28, 'QU/22-23/28', 23, '', 'CUS/RS/28/PR', 'GP PARSIK SAHAKARI BANK LTD. HEAD OFFICE, SAHAKARMURTI GOPINATH SHIVRAM PATIL BHAVAN, PARSIK NAGAR, KALWA, THANE 400605.', 'MR Palve', '2022-07-26', 'Quotation for Cheque Stationery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Within 30days from the date of Tax Invoice', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable Extra', NULL, NULL, 'Extra at actuals', 'Within 8 Days after the confirmation of PO & Artwork Approval', NULL, NULL, 'Verbal', 5, 28, '2022-07-26 06:07:17', 28, '2022-07-26 06:07:45', 3, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(29, 'QU/22-23/29', 20, '', 'CUS/RS/29/PR', 'Mohanlal Sukhadia University,\r\nThe Registrar,Udaipur - 313001,Rajasthan.', 'Munna Sir/Pramod Sir', '2022-07-27', 'Quotation for Degree Certificate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-07-26 09:07:34', 25, '2022-07-27 07:07:35', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(30, 'QU/22-23/30', 20, '', 'CUS/RS/30/PR', 'Godrej & Boyce mfg ltd,Plant-1,Vikhroli (w) , Mumbai-400 079', 'Mr.Prasad Angane', '2022-07-27', 'Quotation for Outsource Challan 10\" X 12\" X 3 Part', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Approx.Rs.140/- Per Box (500 sets per box)', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-07-27 09:07:01', 25, '2022-07-27 09:07:47', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(31, 'QU/22-23/31', 20, '', 'CUS/RS/31/PR', 'OCHRE AND BLACK PRIVATE LIMITED', 'Sachin Barve', '2022-07-27', 'Quotation for Printed Thermal Roll', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '60 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'mail 27-07-2022', 5, 25, '2022-07-27 11:07:29', 25, '2022-07-27 11:07:59', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(43, 'QU/22-23/43', 20, '', 'CUS/RS/43/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'Ms.Diksha', '2022-07-28', 'Quotation for Dividend Warrant', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Immediate', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 7 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-07-28 08:07:58', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(44, 'QU/22-23/44', 20, '', 'CUS/RS/44/PR', 'The Malad Sahakari Bank Ltd.', 'Desai Sir', '2022-07-28', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-07-28 12:07:06', 25, '2022-07-28 12:07:50', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(45, 'QU/22-23/45', 20, '', 'CUS/RS/45/PR', 'The Pratap Co-op Bank Ltd.,\r\nMumbai.', 'Rajendra Sir', '2022-09-03', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Verbal', 5, 25, '2022-07-29 08:07:51', 25, '2022-09-03 05:09:24', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(46, 'QU/22-23/46', 20, '', 'CUS/RS/46/PR', 'SHRI MAHALAKSHMI CO-OPERATIVE BANK LTD, KOLHAPUR', 'Patwardhan Sir', '2022-08-01', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-08-01 11:08:46', 25, '2022-08-01 11:08:34', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(47, 'QU/22-23/47', 20, '', 'CUS/RS/47/PR', 'IN-SOLUTION GLOBAL LIMITED', 'MS. ARATI GAVADE', '2022-08-02', 'Quotation For Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-08-02 05:08:01', NULL, NULL, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(48, 'QU/22-23/48', 20, '', 'CUS/RS/48/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'Ms.Diksha', '2022-08-03', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-08-03 06:08:33', 25, '2022-08-03 06:08:21', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(49, 'QU/22-23/49', 20, '', 'CUS/RS/49/PR', 'MCT Cards & Technology Pvt. Ltd.', 'Arjun Padiyar', '2022-08-03', 'Quotation for Indian Bank Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Delivery to be made @ Chennai, within 8-10 days from the date of PO & artwork confirmation', NULL, NULL, 'Mail', 5, 25, '2022-08-03 06:08:31', 25, '2022-08-03 06:08:49', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(50, 'QU/22-23/50', 20, '', 'CUS/RS/50/PR', 'MAXIMUS INFOWARE PVT. LTD.\r\n4TH FLOOR, BALAJI INFOTECH PARK, ROAD NO.16A,\r\nWAGLE INDUSTRIAL ESTATE, THANE (W)\r\nTHANE-400604.', 'SANDEEP ROYCHOWDHURY', '2022-08-04', 'Quotation for Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-08-04 10:08:17', NULL, NULL, 6, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(51, 'QU/22-23/51', 20, '', 'CUS/RS/51/PR', 'Datamatics Financial Services Ltd.\r\nPlot No. B – 5, Part B, MIDC, Cross Lane,\r\nMarol, Andheri (East), Mumbai – 400 093', 'STATIONERY DEPT.', '2022-08-05', 'QUOTATION', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Against delivery', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'VERBAL', 5, 25, '2022-08-05 08:08:20', 25, '2022-08-05 08:08:10', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(52, 'QU/22-23/52', 20, '', 'CUS/RS/52/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'DIKSHA MAM', '2022-08-05', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-08-05 08:08:42', 25, '2022-08-05 09:08:43', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(53, 'QU/22-23/53', 23, '', 'CUS/RS/53/PR', 'SHREE COMPUTER\r\n11TH FLOOR, VARDAN, B/S VIMAL HOUSE, \r\nNEAR STADIUM PETROL PUMP, NAVRANGPURA, \r\nAHMADABAD-380014', 'Mr Nrupal Shah', '2022-08-05', 'Quotation for  Grade Card & Hologram Master', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% Advance Balance after Dispatch', '15 days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, 'Extra', '4 to 5 weeks', NULL, NULL, 'Mail', 5, 28, '2022-08-05 09:08:22', NULL, NULL, 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(54, 'QU/22-23/54', 20, '', 'CUS/RS/54/PR', 'SATNAM ENTERPRISE', 'ALPESH VAGHASIA', '2022-08-05', 'QUOTATION FOR ATM THERMAL RP ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-08-05 10:08:43', 25, '2022-08-05 11:08:18', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(55, 'QU/22-23/55', 21, '', 'CUS/RS/55/PR', 'dfgfd', 'dfgfd', '2022-08-06', 'dfgfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fd', 2, 999999999, '2022-08-06 11:08:45', NULL, NULL, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(56, 'QU/22-23/56', 20, '', 'CUS/RS/56/PR', 'Accurate Graphics Pvt. Ltd.', 'Supriya Mam', '2022-08-08', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-08-08 07:08:22', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(57, 'QU/22-23/57', 20, '', 'CUS/RS/57/PR', 'DJ MEDIAPRINT & LOGISTICS LTD', 'Ms.Diksha', '2022-08-11', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'Mail 11-08-2022', 5, 25, '2022-08-11 06:08:20', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(58, 'QU/22-23/58', 20, '', 'CUS/RS/58/PR', 'FIS PAYMENT SOLUTION & SERVICES PVT.LTD.', 'MAIL', '2022-08-12', 'Quotation For Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail 12/08/2022', 5, 25, '2022-08-12 07:08:34', 25, '2022-08-12 08:08:39', 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(59, 'QU/22-23/59', 20, '', 'CUS/RS/59/PR', 'DJ MEDIAPRINT & LOGISTICS LTD', 'DIKSHA MAM', '2022-08-13', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-08-13 06:08:27', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(60, 'QU/22-23/60', 20, '', 'CUS/RS/60/PR', 'MADRAS SECURITY PRINTERS PVT.LTD.', 'MS.DIVYA', '2022-08-17', 'QUOTATION FOR INDIAN BANK PIN MAILER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100% advance payment', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Approx. Rs.22000/- Extra', 'Within 10 days from the date of invoice', NULL, NULL, 'MAIL DT.17-08-2022', 5, 25, '2022-08-17 11:08:08', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(61, 'QU/22-23/61', 20, '', 'CUS/RS/61/PR', 'National Centre for the Performing Arts,\r\nNCPA Marg, Nariman Point,\r\nMumbai 400 021', 'Chandrakant Jadhav', '2022-08-18', 'Quotation For Entertainment ticket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', 'Up to 31/03/2023', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail Dt.18-08-2022', 5, 25, '2022-08-18 04:08:25', 28, '2022-08-19 07:08:07', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(96, 'QU/22-23/62', 20, '', 'CUS/RS/62/PR', 'National Centre for the Performing Arts,\r\nNCPA Marg, Nariman Point,\r\nMumbai 400 021', 'Yogesh Salvi', '2022-08-18', 'Quotation For Entertainment ticket Copy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', 'Up to 31/03/2023', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail Dt.18-08-2022', 5, 999999999, '2022-08-18 12:08:12', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(97, 'QU/22-23/97', 20, '', 'CUS/RS/97/PR', 'DJ MEDIAPRINT AND LOGISTICS LTD', 'DIKSHA MAM', '2022-08-22', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/20-08-2022', 5, 25, '2022-08-22 05:08:05', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(98, 'QU/22-23/98', 20, '', 'CUS/RS/98/PR', 'BOMBAY MERCANTILE CO-OP BANK LTD.', 'JOHAR SIR / NAZIMA MAM', '2022-08-22', 'QUOTATION FOR RP ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'VERBAL', 5, 25, '2022-08-22 07:08:05', 25, '2022-08-22 07:08:46', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(99, 'QU/22-23/99', 20, '', 'CUS/RS/99/PR', 'BOMBAY MERCANTILE CO-OP BANK LTD.', 'JOHAR SIR / NAZIMA MAM', '2022-08-22', 'QUOTATION FOR RP ROLL Copy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'VERBAL', 5, 999999999, '2022-08-22 07:08:37', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(100, 'QU/22-23/100', 20, '', 'CUS/RS/100/PR', 'THE UGAR SUGAR WORKS LTD.', 'TUSHAR DESHPANDE', '2022-08-22', 'QUOTATION FOR DIVIDEND WARRANT & INTIMATION LETTERS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'IMMEDIATE', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'FREIGHT CHARGES EXTRA', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL/18-08-2022', 5, 25, '2022-08-22 09:08:46', 25, '2022-08-25 08:08:46', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(101, 'QU/22-23/101', 20, '', 'CUS/RS/101/PR', 'SUCO SOUHARDA SAHAKARI BANK', 'Asha A S, Senior Manager', '2022-08-22', 'QUOTATION FOR CHEQUE SHEET', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'FREIGHT CHARGES EXTRA', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL/22-08-2022', 5, 25, '2022-08-22 12:08:41', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(102, 'QU/22-23/102', 20, '', 'CUS/RS/102/PR', 'GAJANAN ENTERPRISES', 'Durgesh Patil', '2022-08-26', 'QUOTATION FOR OMR SHEETS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-08-26 09:08:30', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(103, 'QU/22-23/103', 20, '', 'CUS/RS/103/PR', 'qq', 'qq', '2022-08-29', 'qq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qq', 'qq', 2, 999999999, '2022-08-29 06:08:34', NULL, NULL, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(104, 'QU/22-23/104', 20, '', 'CUS/RS/104/PR', 'BIG TREE ENTERTAINMENT PVT. LTD.', 'VISHAL MHATRE', '2022-08-30', 'Quotation For RSWS S2 2022 TICKETS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL/30-08-2022', 5, 25, '2022-08-30 09:08:34', 25, '2022-08-30 09:08:38', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(105, 'QU/22-23/105', 20, '', 'CUS/RS/105/PR', 'BIG TREE ENTERTAINMENT PVT. LTD.', 'Sajid Shaikh', '2022-08-30', 'Quotation For FIFA U17 WWC INDIA 2022 Ticket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail/29-08-2022', 5, 25, '2022-08-30 09:08:27', 25, '2022-08-30 11:08:33', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(106, 'QU/22-23/106', 20, '', 'CUS/RS/106/PR', 'Company name 1', 'Attention of 1', '2022-08-31', 'subject 1', NULL, NULL, '5 Yearr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Note 1', 'Reference 1', 3, 999999999, '2022-08-31 04:08:21', NULL, NULL, 2, 6, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(107, 'QU/22-23/107', 23, '', 'CUS/RS/107/PR', 'Company 2', 'Attention of 2', '2022-08-31', 'Subject 2', NULL, NULL, NULL, '2 month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Note 2', 'REference 2', 2, 999999999, '2022-08-31 04:08:50', NULL, NULL, 2, 6, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(108, 'QU/22-23/108', 20, '', 'CUS/RS/108/PR', 'Test 1', 'Test 1 attention', '2022-09-02', 'Test 1 Subject', NULL, NULL, '5 year', '3 month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Test 1 note', 'Test 1 Reference', 2, 999999999, '2022-09-02 04:09:05', NULL, NULL, 2, 6, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(109, 'QU/22-23/109', 20, '', 'CUS/RS/109/PR', 'Test 2', 'Test 2 Attention', '2022-09-02', 'Test 2 Subject', NULL, NULL, NULL, '6 month', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Test 2 note', 'Test 2 Reference', 2, 999999999, '2022-09-02 05:09:13', NULL, NULL, 3, 6, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(110, 'QU/22-23/110', 20, '', 'CUS/RS/110/PR', 'Wasteland Entertainment Pvt. Ltd.', 'Prasad Bhadavkar', '2022-09-02', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/02-09-2022', 5, 25, '2022-09-02 09:09:52', 25, '2022-09-02 09:09:00', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(111, 'QU/22-23/111', 20, '', 'CUS/RS/111/PR', 'Jankalyan Sahakari Bank Ltd\r\nVivek Darshan, 140 Sindhi Soc, Chembur, Mumbai 400071.', 'Ms Mukta Y Angre', '2022-09-02', 'Quotation for ATM Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Payment against delivery', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, NULL, 'Delivery to Location Extra 1000/- Per Location', NULL, NULL, 'Mail', 5, 28, '2022-09-02 09:09:22', NULL, NULL, 9, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(112, 'QU/22-23/112', 20, '', 'CUS/RS/112/PR', 'THE COSMOS CO-OP .BANK LTD.', 'Anant Surde (Asst.Manager)', '2022-09-02', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-09-02 10:09:16', 25, '2022-09-02 10:09:14', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(113, 'QU/22-23/113', 20, '', 'CUS/RS/113/PR', 'SAREX CORPORATE OFFICE', 'RUPESH SIR', '2022-09-07', 'Quotation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-09-07 10:09:31', 25, '2022-09-07 10:09:54', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(114, 'QU/22-23/114', 20, '', 'CUS/RS/114/PR', 'Wasteland Entertainment Pvt. Ltd.', 'Prasad Bhadavkar', '2022-09-08', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/08-09-2022', 5, 25, '2022-09-08 09:09:11', 25, '2022-09-08 09:09:33', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(115, 'QU/22-23/115', 20, '', 'CUS/RS/115/PR', 'BIG TREE ENTERTAINMENT PVT LTD', 'Prabhat Rai', '2022-09-09', 'Quotation For Entertainment ticket - LEGENDS LEAGUE CRICKET MARKET - 2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL/08-09-2022', 5, 25, '2022-09-09 06:09:02', 25, '2022-09-09 08:09:38', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(116, 'QU/22-23/116', 20, '', 'CUS/RS/116/PR', 'Madhu Art Printer\r\nT 32 Yogeshwar Apt\r\nHigh Tension Road\r\nSubhanpora\r\nVadodara 390023', 'Tushar Bhatt', '2022-09-09', 'Quotation for printing of forms on carbonless paper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% Advance Balance after Dispatch', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable Extra', NULL, NULL, NULL, NULL, NULL, NULL, 'Verbal', 5, 28, '2022-09-09 06:09:50', NULL, NULL, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(117, 'QU/22-23/117', 20, '', 'CUS/RS/117/PR', 'MCT CARDS & TECHNOLOGY PVT.LTD.', 'ARJUN PADIYAR', '2022-09-10', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'INCLUSIVE OF FREIGHT', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail 10-09-2022', 5, 25, '2022-09-10 05:09:24', 25, '2022-09-10 05:09:27', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(118, 'QU/22-23/118', 20, '', 'CUS/RS/118/PR', 'RETAIL IT SOLUTIONS', 'Talha Jamadar', '2022-09-12', 'Quotation for Thermal POS Roll', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'mail/12-09-2022', 5, 25, '2022-09-12 09:09:32', 25, '2022-09-13 11:09:44', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(119, 'QU/22-23/119', 20, '', 'CUS/RS/119/PR', 'COLORPLAST SYSTEMS PVT.LTD.', 'TARESH GARG', '2022-09-12', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'mail/12-09-2022', 5, 25, '2022-09-12 10:09:27', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(120, 'QU/22-23/120', 23, '', 'CUS/RS/120/PR', 'Abulhoul Printing Press\r\nAirport Road, Al Garhoud\r\nPO Box 1112\r\nDubai, UAE\r\nT: +971 4 28 23400 / 282 3838\r\nF: +971 4 282 3640 / 282 9400', 'Mr. Nikhil', '2022-09-12', 'Quotation for Watermark Cheque Paper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50%  Advance Balance Before Dispatch', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, NULL, NULL, NULL, 'Sea Freight Extra At Actual.', NULL, NULL, NULL, 'Mail', 5, 28, '2022-09-12 12:09:10', NULL, NULL, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, 0, 0),
(121, 'QU/22-23/121', 23, '', 'CUS/RS/121/PR', 'Anant National University \r\nSanskardham Campus, Bopal-Ghuma-Sanand Road, Ahmedabad, Gujarat 382115', 'Bhavin Shah', '2022-09-12', 'Certificate Printing & SeQR Doc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'From Mail', 5, 9, '2022-09-12 12:09:09', 9, '2022-09-12 12:09:40', 12, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(122, 'QU/22-23/122', 20, '', 'CUS/RS/122/PR', 'MAXIMUS INFOWARE PVT.LTD.', 'Sandeep Roy Chowdhury', '2022-09-19', 'Quotation for Welcome Kit-D.T.Patil Co-Op Bank Ltd.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'mail/13-09-2022', 5, 25, '2022-09-13 08:09:42', 25, '2022-09-19 06:09:23', 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(123, 'QU/22-23/123', 20, '', 'CUS/RS/123/PR', 'COLORPLAST SYSTEM PVT.LTD.', 'TARESH GARG', '2022-09-13', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'FREIGHT CHARGES EXTRA', 'Within 10 days from the date of invoice', NULL, NULL, 'Verbal', 5, 25, '2022-09-13 10:09:37', 25, '2022-09-13 10:09:21', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(124, 'QU/22-23/124', 20, '', 'CUS/RS/124/PR', 'MCT CARDS & TECHNOLOGY PVT.LTD.', 'ARJUN PADIYAR', '2022-09-13', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'INCLUSIVE OF FREIGHT', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-09-13 12:09:43', 25, '2022-09-13 12:09:45', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(125, 'QU/22-23/125', 20, '', 'CUS/RS/125/PR', 'FIS PAYMENT SOLUTION & SERVICES PVT.LTD.', 'Kumar Mundhe', '2022-09-14', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL/14-09-2022', 5, 25, '2022-09-14 11:09:55', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(126, 'QU/22-23/126', 20, '', 'CUS/RS/126/PR', 'WONDER FORMULATIONS', 'PRAKASH MELWANI', '2022-09-15', 'QUOTATION FOR THERMAL ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/12-09-2022', 5, 25, '2022-09-15 06:09:06', 25, '2022-09-15 06:09:37', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(127, 'QU/22-23/127', 20, '', 'CUS/RS/127/PR', 'In-solution Global Ltd.', 'Arati Gavade', '2022-09-15', 'Quotation for Ebix Cash Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-09-15 12:09:44', NULL, NULL, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(128, 'QU/22-23/128', 23, '', 'CUS/RS/128/PR', 'To,\r\nChannel Packaging Pvt Ltd \r\nRajmahal CHS, Ground Floor, Plot No 542, MMC Road\r\nBehind Manhar Jewllers\r\n Mahim Rly Mahim West \r\n Mumbai 400016', 'Mr Amit Mishra', '2022-09-15', 'Quotation for Blank Thermal Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100% Advance.', '30 days.', NULL, 'Subject to Mumbai Jurisdiction. .', NULL, '18 % GST will be applicable extra', NULL, NULL, 'Extra at Actuals', '7 Days from the date of payment', NULL, NULL, 'Verbal', 5, 28, '2022-09-15 03:09:51', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(129, 'QU/22-23/129', 20, '', 'CUS/RS/129/PR', 'KARE ENTERPRISE PVT.TLD.', 'PRASHANT GUJAR', '2022-09-16', 'QUOTATION FOR LABELS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100% advance payment', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'FREIGHT CHARGES EXTRA', 'Within 10 days from the date of PO', NULL, NULL, 'MAIL/16-09-2022', 5, 25, '2022-09-16 06:09:58', 25, '2022-09-16 06:09:06', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(130, 'QU/22-23/130', 20, '', 'CUS/RS/130/PR', 'IN-SOLUTION GLOBAL LTD.', 'Arati Gavade', '2022-09-16', 'Quotation For Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/15-09-2022', 5, 25, '2022-09-16 08:09:49', 25, '2022-09-16 08:09:41', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(131, 'QU/22-23/131', 20, '', 'CUS/RS/131/PR', 'THE MALAD SAHAKARI BANK LTD.', 'DESAI SIR', '2022-09-17', 'Quotation for Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'VERBAL', 5, 25, '2022-09-17 06:09:35', 25, '2022-09-17 06:09:52', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0);
INSERT INTO `tbl_quotation` (`id`, `unique_id`, `sales_person`, `company`, `unique_reference`, `comp_name_add`, `attention_of`, `quotation_date`, `subject`, `discharge_point_term`, `installation_charge`, `warranty`, `training`, `bank_charges`, `sampling_charges`, `lchandling_charges`, `cancellation_of_order_charge`, `delivery_point`, `packing`, `payment_term`, `validity_of_quotation`, `documents`, `jurisdiction`, `statutory_clause`, `tax`, `excise`, `lbt`, `freight`, `delivery`, `prices`, `note`, `reference`, `quote_type`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `rows`, `columns`, `discharge_point_term_checkbox`, `installation_charge_checkbox`, `warranty_checkbox`, `training_checkbox`, `bank_charges_checkbox`, `sampling_charges_checkbox`, `lchandling_charges_checkbox`, `cancellation_of_order_charge_checkbox`, `delivery_point_checkbox`, `packing_checkbox`, `payment_term_checkbox`, `validity_of_quotation_checkbox`, `documents_checkbox`, `jurisdiction_checkbox`, `statutory_clause_checkbox`, `tax_checkbox`, `excise_checkbox`, `lbt_checkbox`, `freight_checkbox`, `delivery_checkbox`, `prices_checkbox`, `othercharges`, `tds`, `othercharges_checkbox`, `tds_checkbox`) VALUES
(132, 'QU/22-23/132', 20, '', 'CUS/RS/132/PR', 'Wasteland Entertainment Pvt. Ltd.', 'Prasad Bhadavkar', '2022-09-19', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/19-09-2022', 5, 25, '2022-09-19 12:09:33', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(133, 'QU/22-23/133', 20, '', 'CUS/RS/133/PR', 'MCT CARDS & TECHNOLOGY PVT.LTD.', 'ARJUN PADIYAR', '2022-09-20', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'INCLUSIVE OF FREIGHT', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'MAIL/20-09-2022', 5, 25, '2022-09-20 12:09:59', 25, '2022-09-21 08:09:13', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(134, 'QU/22-23/134', 20, '', 'CUS/RS/134/PR', 'Sarex Overseas', 'Mr.Rupesh', '2022-09-21', 'Quotation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'Verbal', 5, 25, '2022-09-21 08:09:24', 25, '2022-09-24 11:09:36', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(135, 'QU/22-23/135', 20, '', 'CUS/RS/135/PR', 'The Greater Co-op Bank Ltd.', 'Devdatta Sarang', '2022-09-26', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of artwork approval', NULL, NULL, 'Mail/21-09-2022', 5, 25, '2022-09-21 08:09:04', 25, '2022-09-27 09:09:43', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(136, 'QU/22-23/136', 23, '', 'CUS/RS/136/PR', 'ATLANTA FORMS', 'Gautam Shah', '2022-09-21', 'Quotation for Pay Order', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 8 days from the date of PO', NULL, NULL, 'Verbal', 5, 25, '2022-09-21 09:09:29', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(137, 'QU/22-23/137', 20, '', 'CUS/RS/137/PR', 'DWARKADHISH FOOD STUDIO,DOMBIVALI', 'PIYUSH SIR', '2022-09-22', 'QUOTATION FOR THERMAL ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Against delivery', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-09-22 05:09:15', 25, '2022-09-22 05:09:40', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(138, 'QU/22-23/138', 20, '', 'CUS/RS/138/PR', 'ICICI SECURITIES LTD.', 'PRAMOD THAKUR', '2022-09-22', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO', NULL, NULL, 'MAIL 22-09-2022', 5, 25, '2022-09-22 06:09:54', 25, '2022-09-22 06:09:50', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(139, 'QU/22-23/139', 20, '', 'CUS/RS/139/PR', 'WORLDLINE INDIA PRIVATE LIMITED', 'Akhilesh M. Lot', '2022-09-22', 'Quotation for Pin Mailers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', NULL, NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-09-22 10:09:07', NULL, NULL, 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(140, 'QU/22-23/140', 20, '', 'CUS/RS/140/PR', 'Shri Vile Parle Kelavani Mandal’s Mithibai College of Arts, Chauhan Institute of Science & Amrutben Jivanlal College of Commerce And Economics.', 'Samir D. Mehta', '2022-10-17', 'Quotation for Junior College Leaving Certificate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/24-09-2022', 5, 25, '2022-09-24 09:09:18', 25, '2022-10-17 12:10:32', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(141, 'QU/22-23/141', 20, '', 'CUS/RS/141/PR', 'ICICI BANK LTD.', 'GANESH MORE', '2022-09-26', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'VERBAL', 5, 25, '2022-09-26 06:09:30', 25, '2022-09-26 06:09:10', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(142, 'QU/22-23/142', 20, '', 'CUS/RS/142/PR', 'WORLDLINE INDIA PRIVATE LIMITED', 'Akhilesh M. Lot', '2022-09-29', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', NULL, NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'MAIL', 5, 25, '2022-09-26 06:09:05', 25, '2022-09-29 08:09:33', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(143, 'QU/22-23/143', 20, '', 'CUS/RS/143/PR', 'EURONET INDIA PVT.LTD.', 'Sachin Thakkar', '2022-09-27', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/29-09-2022', 5, 25, '2022-09-27 09:09:53', 25, '2022-09-27 09:09:25', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(144, 'QU/22-23/144', 20, '', 'CUS/RS/144/PR', 'BIG TREE ENTERTAINMENT PVT.LTD.', 'Shahbaz Mistry', '2022-09-27', 'Quotation For Entertainment ticket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL/27-09-2022', 5, 25, '2022-09-27 12:09:14', 25, '2022-09-27 12:09:15', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(145, 'QU/22-23/145', 20, '', 'CUS/RS/145/PR', 'THE THANE DISTRICT CENTRAL CO-OP BANK LTD.', 'Akshay Patil', '2022-09-28', 'Quotation for Pin Mailer & Envelope', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO', NULL, NULL, 'mail/27-09-2022', 5, 25, '2022-09-28 10:09:14', 25, '2022-09-30 09:09:51', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(146, 'QU/22-23/146', 20, '', 'CUS/RS/146/PR', 'WASTELAND INDIA PVT.LTD.', 'Prasad Bhadavkar', '2022-09-29', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail/29-09-2022', 5, 25, '2022-09-29 07:09:20', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(147, 'QU/22-23/147', 20, '', 'CUS/RS/147/PR', 'SAREX CORPORATE OFFICE', 'RUPESH SIR', '2022-09-30', 'QUOTATION FOR BLANK STATIONERY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-09-30 04:09:29', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(148, 'QU/22-23/148', 20, '', 'CUS/RS/148/PR', 'Guardian Souharda Sahakari Bank Niyamita', 'S.Charles Nickson Raj', '2022-09-30', 'Quotation for JP Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-09-30 04:09:41', 25, '2022-09-30 04:09:33', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(149, 'QU/22-23/149', 20, '', 'CUS/RS/149/PR', 'Finacus Solutions Pvt. Ltd.', 'Manish Kapdoskar', '2022-09-30', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-09-30 06:09:53', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(150, 'QU/22-23/150', 20, '', 'CUS/RS/150/PR', 'G.P.Parsik Bank Ltd.', 'Digambar K. Palve', '2022-09-30', 'Quotation for NCR RP Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-09-30 11:09:29', 25, '2022-09-30 11:09:12', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(151, 'QU/22-23/151', 20, '', 'CUS/RS/151/PR', 'SAREX CORPORATE OFFICE', 'RUPESH SIR', '2022-09-30', 'QUOTATION FOR BLANK STATIONERY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-09-30 12:09:19', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(152, 'QU/22-23/152', 20, '', 'CUS/RS/152/PR', 'Imagination Edutainment India Pvt. Ltd.', 'Gautam Thakur', '2022-10-01', 'Quotation for IDFC Currency Kidzos', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'Mail/26-09-2022', 5, 25, '2022-10-01 12:10:14', 25, '2022-10-01 12:10:46', 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(153, 'QU/22-23/153', 20, '', 'CUS/RS/153/PR', 'Wyaghareshwar Mudrak Sahakari sanstha.', 'Hiren Sir', '2022-10-04', 'Quotation For RDCC Pouch & Cover Page', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'Mail/01-10-2022', 5, 25, '2022-10-04 08:10:29', 25, '2022-10-04 08:10:46', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(154, 'QU/22-23/154', 22, '', 'CUS/RS/154/PR', 'aaa', 'aaaaa', '2022-10-19', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aaa', 'aaa', 5, 999999999, '2022-10-06 04:10:03', 999999999, '2022-10-06 04:10:35', 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(155, 'QU/22-23/155', 21, '', 'CUS/RS/155/PR', 'bbb', 'bbb', '2022-10-06', 'bbb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bbb', 'bbb', 5, 999999999, '2022-10-06 04:10:17', 999999999, '2022-10-06 04:10:57', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(156, 'QU/22-23/156', 20, '', 'CUS/RS/156/PR', 'Bigtree Entertainment Private Limited,', 'Sajid Shaikh', '2022-10-07', 'Quotation for Entertainment Tickets - NEUFC 2022-23 Guwahati', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-10-07 09:10:21', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(157, 'QU/22-23/157', 20, '', 'CUS/RS/157/PR', 'MCT CARDS & TECHNOLOGY PVT.LTD.', 'ARJUN PADIYAR', '2022-10-08', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Within 30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-10-08 09:10:03', 25, '2022-10-08 09:10:50', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(158, 'QU/22-23/158', 20, '', 'CUS/RS/158/PR', 'BIG TREE ENTERTAINMENT PVT.LTD.', 'TARUN SWAMI', '2022-10-10', 'Quotation for Entertainment Tickets - Hero ISL 2022/23 Mumbai City FC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-10-10 09:10:14', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(159, 'QU/22-23/159', 20, '', 'CUS/RS/159/PR', 'FIDA FILMS & HOTEL CO PVT.LTD.(CST)', 'Gurav Sir', '2022-10-11', 'Quotation For Entertainment ticket', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'FREIGHT CHARGES EXTRA', 'Within 8 days from the date of PO', NULL, NULL, 'VERBAL', 5, 25, '2022-10-11 07:10:19', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(160, 'QU/22-23/160', 20, '', 'CUS/RS/160/PR', 'Shri Vile Parle Kelavani Mandal’s\r\nDwarkadas J.Sanghvi College of Engg.\r\nVile Parle (West), Mumbai – 400 056', 'Vinayak K.Nayak', '2022-10-11', 'Quotation for Grade Card', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-10-11 08:10:45', 25, '2022-10-11 08:10:03', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(161, 'QU/22-23/161', 20, '', 'CUS/RS/161/PR', 'NUTECH BUSINESS SOLUTIONS PVT LTD', 'RAJESH MITTAL', '2022-10-11', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-10-11 09:10:21', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(162, 'QU/22-23/162', 20, '', 'CUS/RS/162/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'PRANAV SIR', '2022-10-14', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'EX-FACTORY', NULL, NULL, 'Mail/14-10-2022', 5, 25, '2022-10-14 05:10:15', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(163, 'QU/22-23/163', 20, '', 'CUS/RS/163/PR', 'SARVATRA TECHNOLOGIES PVT.LTD.', 'SHUBHAM WABLE', '2022-10-14', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'Mail/14-10-2022', 5, 25, '2022-10-14 07:10:05', 25, '2022-10-14 07:10:11', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(164, 'QU/22-23/164', 20, '', 'CUS/RS/164/PR', 'RETAIL IT SOLUTIONS', 'Talha Jamadar', '2022-10-15', 'Quotation for Thermal POS Roll', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'MAIL', 5, 25, '2022-10-15 08:10:12', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(165, 'QU/22-23/165', 20, '', 'CUS/RS/165/PR', 'SIDDHARTH ENTERPRISES', 'HIREN SIR', '2022-10-15', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'VERBAL', 5, 25, '2022-10-15 10:10:17', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(166, 'QU/22-23/166', 20, '', 'CUS/RS/166/PR', 'Maximus Infoware Pvt Ltd', 'SANDEEP ROYCHOWDHURY', '2022-10-20', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-10-17 10:10:37', 25, '2022-10-20 09:10:10', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(167, 'QU/22-23/167', 21, '', 'CUS/RS/167/PR', 'Clarks Reliance footwear Pvt.Ltd.\r\n2nd Floor,A wing,\r\nFulkrum Business Centre,\r\nAndheri -East , Mumbai-400 009.', 'Kumar Alok', '2022-10-18', 'Quotation for Thermal POS effective July 1st, 2022 ( 6 months price validity till Dec 31,2022)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from invoice date', '6 months till Dec-22', NULL, NULL, NULL, NULL, NULL, NULL, 'No extra delivery charges with in Thane /  Mumbai Location , for Locations outside Mumbai Transport cost will be charged as per actuals.', 'with in 8-10 days after receiving your P.O. & approved final art work', NULL, NULL, 'NA', 5, 33, '2022-10-18 08:10:45', 33, '2022-10-18 11:10:59', 7, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(168, 'QU/22-23/168', 20, '', 'CUS/RS/168/PR', 'SECURE PARKING SOLUTIONS PVT. LTD.', 'KHALID SIR', '2022-10-19', 'Quotation for Thermal POS Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-10-19 08:10:21', 25, '2022-10-19 08:10:55', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(169, 'QU/22-23/169', 20, '', 'CUS/RS/169/PR', 'IN-SOLUTION GLOBAL LIMITED', 'MS. ARATI GAVADE', '2022-10-19', 'Quotation For SB Stationery', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail/19-10-2022', 5, 25, '2022-10-19 10:10:18', NULL, NULL, 5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(170, 'QU/22-23/170', 20, '', 'CUS/RS/170/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'DIKSHA MAM', '2022-10-20', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-10-20 04:10:43', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(171, 'QU/22-23/171', 20, '', 'CUS/RS/171/PR', 'FIS PAYMENT SOLUTION & SERVICES PVT. LTD.', 'KUMAR MUNDHE SIR', '2022-10-20', 'QUOTATION FOR ENVELOPES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail/20-10-2022', 5, 25, '2022-10-20 09:10:35', 25, '2022-10-20 09:10:55', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(172, 'QU/22-23/172', 21, '48', 'CUS/RS/172/PR', 'latest', 'latest', '2022-10-21', 'latest', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'latest', 2, 999999999, '2022-10-28 04:10:09', NULL, NULL, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(173, 'QU/22-23/173', 21, '48', 'CUS/RS/173/PR', 'latest', 'latest', '2022-10-21', 'latest Copy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'latest', 2, 999999999, '2022-10-28 04:10:26', NULL, NULL, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(174, 'QU/22-23/174', 26, '49', 'CUS/RS/174/PR', 'Vikhroli', 'Siddhi More', '2022-10-28', 'Certificate Printing & SeQR Doc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SCUBE', 5, 9, '2022-10-28 05:10:51', NULL, NULL, 2, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(175, 'QU/22-23/175', 20, '47', 'CUS/RS/175/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'PRANAV SIR', '2022-11-01', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-01 06:11:22', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(176, 'QU/22-23/176', 20, '47', 'CUS/RS/176/PR', 'National Centre for the Performing Arts', 'Yogesh Salvi', '2022-11-02', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-02 03:11:45', 25, '2022-11-02 04:11:07', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(177, 'QU/22-23/177', 23, '47', 'CUS/RS/177/PR', 'Sparks Corporate Solutions Ltd\r\nPlot No 72/74,01st Floor\r\n7th Street, Industrial Area\r\nKampala Uganda, East Africa', 'Prasad Gollapudi', '2022-11-04', 'Quotation for Certificates & Envelopes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100 % Advance', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, NULL, NULL, NULL, 'Airfreight Extra at Actuals', NULL, NULL, NULL, 'Mail', 5, 28, '2022-11-04 12:11:40', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, NULL, NULL, 0, 0),
(179, 'QU/22-23/179', 21, '47', 'CUS/RS/179/PR', 'Dr.E Moses Road,\r\nMahalaxmi,\r\nMumbai-', 'Kind Attn: Mr.Vijay D’mello, (Stores Incharge )', '2022-11-08', 'Sub:  RWITC Enquiry & DIPL Quotation for supply of Thermal POS rolls ( Day ticket rolls )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kind Attn: Mr.Vijay D’mello, (Stores Incharge )', 3, 33, '2022-11-08 07:11:35', 33, '2022-11-08 08:11:36', 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(180, 'QU/22-23/180', 20, '47', 'CUS/RS/180/PR', 'IN-SOLUTION GLOBAL LTD.', 'AARTI GAVDE', '2022-11-10', 'Quotation for Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-10 10:11:17', 999999999, '2022-11-11 05:11:34', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(181, 'QU/22-23/181', 20, '47', 'CUS/RS/181/PR', 'The Cosmos Co-op Bank Ltd.', 'Anant Surde (Asst. Manager)', '2022-11-18', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, NULL, NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 10 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-18 06:11:30', 25, '2022-11-18 07:11:05', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(183, 'QU/22-23/183', 20, '47', 'CUS/RS/183/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'Ms.Diksha', '2022-11-19', 'QUOTATION FOR DIVIDEND WARRANT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 7 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-19 04:11:35', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(184, 'QU/22-23/184', 20, '47', 'CUS/RS/184/PR', 'FIS PAYMENT SOLUTION & SERVICES PVT.LTD.', 'KUMAR MUNDHE SIR', '2022-11-21', 'QUOTATION FOR ENVELOPE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days from the date of invoice', '30 Days from the date of Quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'AT ACTUAL OUTSIDE MUMBAI', 'Within 10 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-21 04:11:41', 25, '2022-11-21 04:11:32', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(185, 'QU/22-23/185', 20, '47', 'CUS/RS/185/PR', 'RETAIL IT SOLUTIONS', 'Talha Jamadar', '2022-11-23', 'QUOTATION FOR THERMAL ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-11-23 04:11:01', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(186, 'QU/22-23/186', 23, '47', 'CUS/RS/186/PR', 'SHREE COMPUTER\r\n11TH FLOOR, VARDAN, B/S VIMAL HOUSE, \r\nNEAR STADIUM PETROL PUMP, NAVRANGPURA, \r\nAHMADABAD-380014', 'Mr Nrupal Shah', '2022-08-05', 'Quotation for  Degree Certificate', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% Advance Balance after Dispatch', '15 days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, 'Extra', '4 to 5 weeks', NULL, NULL, 'Mail', 5, 33, '2022-11-23 11:11:03', 33, '2022-11-24 08:11:18', 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(187, 'QU/22-23/187', 20, '47', 'CUS/RS/187/PR', 'VES INSTITUTE OF TECHNOLOGY', 'ROHINI MAM', '2022-11-23', 'Quotation for Grade Card', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'verbal', 5, 25, '2022-11-23 11:11:23', 25, '2022-11-23 11:11:10', 2, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(188, 'QU/22-23/188', 20, '47', 'CUS/RS/188/PR', 'TAPAN ENTERPRISES', 'SIR', '2022-11-25', 'QUOTATION FOR DIVIDEND WARRANTS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'FREIGHT CHARGES EXTRA', 'Within 10 days from the date of invoice', NULL, 'POSITIVE CHARGES EXTRA', 'VERBAL', 5, 25, '2022-11-25 12:11:38', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(189, 'QU/22-23/189', 23, '47', 'CUS/RS/189/PR', 'ARCOM PAPERS PVT LTD\r\nBHIWANDI', 'Amit Gupta', '2022-11-28', 'Quotation Thermal paper rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A', 3, 33, '2022-11-28 12:11:02', NULL, NULL, 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(191, 'QU/22-23/191', 20, '47', 'CUS/RS/191/PR', 'NITA MUKESH AMBANI CULTURAL CENTRE,MUMBAI', 'RISHIKESH WAVDEKAR', '2022-12-07', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Within 30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-12-07 11:12:10', 25, '2022-12-07 12:12:32', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(192, 'QU/22-23/192', 20, '47', 'CUS/RS/192/PR', 'MUMBAI DISTRICT CENTRAL CO-OP BANK LTD.', 'NAVALE SIR', '2022-12-08', 'QUOTATION FOR MICR TONER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-12-08 09:12:55', 25, '2022-12-08 09:12:17', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(193, 'QU/22-23/193', 20, '47', 'CUS/RS/193/PR', 'SIDDHARTH ENTERPRISES', 'HIREN SIR', '2022-12-08', 'QUOTATION FOR TERM DEPOSIT RECEIPT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'VERBAL', 5, 25, '2022-12-08 09:12:36', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(194, 'QU/22-23/194', 20, '47', 'CUS/RS/194/PR', 'BIG TREE ENTERTAINMENT PVT. LTD.', 'Amit Mourya', '2022-12-09', 'Quotation for Entertainment Tickets - Kochi Biennale 2022 -2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-09 07:12:47', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(195, 'QU/22-23/195', 20, '47', 'CUS/RS/195/PR', 'SAREX CHEMICALS PVT. LTD.', 'RUPESH SIR', '2022-12-09', 'QUOTATION', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-09 12:12:33', 25, '2022-12-13 12:12:39', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(196, 'QU/22-23/196', 20, '47', 'CUS/RS/196/PR', 'Colorplast Systems Pvt. Ltd.', 'Taresh Garg', '2022-12-16', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-12-16 08:12:10', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(197, 'QU/22-23/197', 23, '49', 'CUS/RS/197/PR', 'Navkonkan Education Scoiety\r\nChiplun, Maharashtra 415605', 'Makrand Pendse', '2022-12-19', 'Quotation for Navkonkan Education Soc Answer Sheet', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% Advance & 50% on Delivery within 7 days', '30 days from the date invoice', NULL, 'Mumbai Jurisdiction', NULL, 'GST 18% will be applicable extra', NULL, NULL, 'Including in price', '30 days after getting PO and Design confirmation', NULL, NULL, 'mail dated 17/12/2022', 5, 35, '2022-12-19 06:12:01', 35, '2022-12-19 06:12:22', 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(198, 'QU/22-23/198', 23, '47', 'CUS/RS/198/PR', 'GAJRAJ 9 LLC, 1044 BUCCANEER BLVD, \r\nWINTER HAVEN FL- 33880', 'Rakesh Sir', '2022-12-19', 'Quotation for Printing of Thermal POS Rolls', 'NHAVA SHEVA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TEMPA/MIAMI', 'STANDERD PACKING', '30% IN ADVANCE & BALANCE AGAINST DOCUMENTS', '30 DAYS', 'Commercial invoice-4, commercial package list, seaway bills, certificate of origin & package list', 'MUMBAI JURISDICATION', NULL, NULL, NULL, NULL, NULL, '3-4 weeks from date of production', NULL, NULL, 'Whatsup dated 19/12/2022', 2, 35, '2022-12-19 06:12:23', 35, '2022-12-20 05:12:17', 5, 6, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(199, 'QU/22-23/199', 20, '47', 'CUS/RS/199/PR', 'Paschim Banga Gramin Bank', 'Soumya Roy', '2022-12-19', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-19 07:12:27', 25, '2022-12-20 06:12:23', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(200, 'QU/22-23/200', 20, '47', 'CUS/RS/200/PR', 'Guardian Souharda Sahakari Bank Niyamita', 'S.Charles Nickson Raj', '2022-12-20', 'Quotation for JP & RP Thermal Rolls', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-12-20 07:12:26', 25, '2022-12-20 07:12:44', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(201, 'QU/22-23/201', 20, '47', 'CUS/RS/201/PR', 'IN-SOLUTION GLOBAL LIMITED', 'MS. ARATI GAVADE', '2022-12-20', 'Quotation For Welcome Kit - AK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-12-20 08:12:26', 25, '2022-12-20 08:12:14', 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(202, 'QU/22-23/202', 20, '47', 'CUS/RS/202/PR', 'WASTELAND ENTERTAINMENT PVT. LTD.', 'MANISH SONKAR', '2022-12-21', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2022-12-21 05:12:02', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(203, 'QU/22-23/203', 20, '47', 'CUS/RS/203/PR', 'Shri Vile Parle Kelvani\r\nMandal’s Dr.Bhanuben Nanavati College of\r\nPharmacy.', 'Bhupendra Nirgun', '2022-12-21', 'Quotation for Grade Card', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-21 08:12:02', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(204, 'QU/22-23/204', 20, '47', 'CUS/RS/204/PR', 'Worldline India Pvt. Ltd.', 'Gaurav Tawde', '2022-12-22', 'Quotation for Envelope', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-22 06:12:44', 25, '2022-12-23 10:12:38', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(205, 'QU/22-23/205', 20, '47', 'CUS/RS/205/PR', 'Udyam Vikas Sahakari Bank Ltd.,Pune', 'Admin Dept.', '2022-12-27', 'Quotation for FD Receipt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'verbal', 5, 25, '2022-12-23 10:12:52', 25, '2022-12-27 09:12:11', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(206, 'QU/22-23/206', 23, '47', 'CUS/RS/206/PR', 'MOURITANIA', 'Rakesh Sir', '2022-12-23', 'Quotation for paper', NULL, NULL, NULL, NULL, 'Confirmation by any bank in India', NULL, 'Price on CFR naukshot basis', NULL, NULL, NULL, NULL, '30 Days', NULL, 'MUMBAI JURISDICATION', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'varble', 2, 35, '2022-12-23 10:12:40', NULL, NULL, 7, 6, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(207, 'QU/22-23/207', 20, '47', 'CUS/RS/207/PR', 'BIG TREE ENTERTAINMENT PVT.LTD.', 'VISHAL MHATRE', '2022-12-24', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-24 07:12:55', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(208, 'QU/22-23/208', 23, '47', 'CUS/RS/208/PR', 'QUARTERFOLD', 'Mr. Avinash Suhanda', '2022-12-26', 'Quotation for MCLU Booklets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mr.Mahemdra Waman', 5, 35, '2022-12-26 05:12:15', NULL, NULL, 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(209, 'QU/22-23/209', 20, '47', 'CUS/RS/209/PR', 'BIG TREE ENTERTAINMENT PVT.LTD.', 'VISHAL MHATRE', '2022-12-26', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-26 06:12:14', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(210, 'QU/22-23/210', 20, '47', 'CUS/RS/210/PR', 'BIG TREE ENTERTAINMENT PVT.LTD.', 'Sajid Shaikh', '2022-12-27', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-27 11:12:46', 25, '2022-12-27 12:12:17', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(211, 'QU/22-23/211', 20, '47', 'CUS/RS/211/PR', 'Tapan Enterprise', 'Bhupendra Shah', '2022-12-28', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'TO PAY BASIS', 'Within 8 days from the date of PO & artwork approval', 'Rs.450/- EXTRA FOR POSITIVE CHARGES', NULL, 'Mail', 5, 25, '2022-12-28 09:12:54', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 1, NULL, NULL, 0, 0),
(212, 'QU/22-23/212', 20, '47', 'CUS/RS/212/PR', 'Maximus Infoware Pvt. Ltd', 'SANDEEP ROYCHOWDHURY', '2022-12-28', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2022-12-28 11:12:38', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(213, 'QU/22-23/213', 23, '47', 'CUS/RS/213/PR', 'GP Parshik bank', 'PRABHAKAR SIR', '2022-12-29', 'QUOTATION FOR PIN MAILER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% ADVANCE', '15 DAYS', NULL, NULL, NULL, '18% GST EXTRA', NULL, NULL, NULL, 'WITHIN 2 WEEKS AFTER THE APPROVAL OF ART WORK, PO AND ADVANCE PAYMENT', NULL, NULL, 'VARBAL', 5, 35, '2022-12-29 10:12:41', 35, '2022-12-29 12:12:16', 2, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(214, 'QU/22-23/214', 20, '47', 'CUS/RS/214/PR', 'NAGPUR NAGRIK SAHAKARI BANK LTD', 'Pravin Sir', '2022-12-30', 'Quotation For AMC Renewal chrages', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100% Advance', 'Upto 31-12-2023', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, NULL, NULL, NULL, NULL, 'VERBAL', 5, 25, '2022-12-30 04:12:21', 25, '2022-12-30 04:12:05', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(215, 'QU/23-24/215', 20, '47', 'CUS/RS/215/PR', 'DJ MEDIAPRINT & LOGISTICS LTD.', 'DIKSHA MAM', '2023-01-02', 'Quotation for Dividend Warrants', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2023-01-02 06:01:10', 25, '2023-01-02 06:01:42', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(216, 'QU/23-24/216', 20, '47', 'CUS/RS/216/PR', 'In-Solutions Global Limited', 'QUOTATION FOR WELCOME KIT', '2023-01-02', 'Quotation For Welcome Kit', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2023-01-02 11:01:14', 25, '2023-01-02 12:01:48', 7, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(217, 'QU/23-24/217', 20, '47', 'CUS/RS/217/PR', 'NATIONAL CENTRE FOR THE PERFORMING ARTS', 'Yogesh Salvi', '2023-01-02', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'Freight charges extra', 'Within 10 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2023-01-02 12:01:07', 25, '2023-01-02 12:01:15', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(218, 'QU/23-24/218', 20, '47', 'CUS/RS/218/PR', 'SARVATRA TECHNOLOGIES PVT. LTD.', 'SHUBHAM WABLE', '2023-01-03', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'TO PAY BASIS', 'Within 10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2023-01-03 12:01:11', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(219, 'QU/23-24/219', 20, '47', 'CUS/RS/219/PR', 'SESHAASAI BUSINESS FORMS PVT. LTD.', 'VISHAL MAHESHWARI', '2023-01-04', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% advance payment & balance 50% in 1 week post dispatch', '30 days from the date of quotes', NULL, 'MUMBAI', NULL, '18% GST Extra', NULL, NULL, NULL, 'EX-FACTORY, WITHIN 10 DAYS FROM THE DATE OF PO', NULL, NULL, 'Mail', 5, 25, '2023-01-04 11:01:39', 25, '2023-01-05 04:01:51', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(220, 'QU/23-24/220', 20, '47', 'CUS/RS/220/PR', 'RELIANCE INDUSTRIES LTD.', 'Vishvnath Singh', '2023-01-06', 'Quotation for Entertainment Tickets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, 'At actual outside Mumbai', 'Within 10 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2023-01-06 08:01:13', 25, '2023-01-06 08:01:16', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(221, 'QU/23-24/221', 23, '47', 'CUS/RS/221/PR', 'Ahmedabad', 'Nrupal Shah', '2023-01-13', 'Quotation for Answer sheets', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VARBAL', 3, 35, '2023-01-13 09:01:42', NULL, NULL, 4, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(222, 'QU/23-24/222', 23, '47', 'CUS/RS/222/PR', 'Sonic Supply Company', 'Hamid Bhai', '2023-01-16', 'Quotation for Thermal roll', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'varbal', 2, 35, '2023-01-16 08:01:08', 35, '2023-01-16 08:01:10', 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(223, 'QU/23-24/223', 23, '47', 'CUS/RS/223/PR', 'Sonic Supply Company', 'Hamid Bhai', '2023-01-16', 'Quotation for Thermal roll Copy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'varbal', 2, 35, '2023-01-16 08:01:36', NULL, NULL, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0);
INSERT INTO `tbl_quotation` (`id`, `unique_id`, `sales_person`, `company`, `unique_reference`, `comp_name_add`, `attention_of`, `quotation_date`, `subject`, `discharge_point_term`, `installation_charge`, `warranty`, `training`, `bank_charges`, `sampling_charges`, `lchandling_charges`, `cancellation_of_order_charge`, `delivery_point`, `packing`, `payment_term`, `validity_of_quotation`, `documents`, `jurisdiction`, `statutory_clause`, `tax`, `excise`, `lbt`, `freight`, `delivery`, `prices`, `note`, `reference`, `quote_type`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `rows`, `columns`, `discharge_point_term_checkbox`, `installation_charge_checkbox`, `warranty_checkbox`, `training_checkbox`, `bank_charges_checkbox`, `sampling_charges_checkbox`, `lchandling_charges_checkbox`, `cancellation_of_order_charge_checkbox`, `delivery_point_checkbox`, `packing_checkbox`, `payment_term_checkbox`, `validity_of_quotation_checkbox`, `documents_checkbox`, `jurisdiction_checkbox`, `statutory_clause_checkbox`, `tax_checkbox`, `excise_checkbox`, `lbt_checkbox`, `freight_checkbox`, `delivery_checkbox`, `prices_checkbox`, `othercharges`, `tds`, `othercharges_checkbox`, `tds_checkbox`) VALUES
(224, 'QU/23-24/224', 23, '47', 'CUS/RS/224/PR', 'Sonic Supply Company', 'Hamid Bhai', '2023-01-16', 'Quotation for Thermal roll Copy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'varbal', 2, 35, '2023-01-16 08:01:36', NULL, NULL, 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(225, 'QU/23-24/225', 23, '47', 'CUS/RS/225/PR', 'Shree computers', 'Nrupal Shah', '2023-01-18', 'Quotation for SeQR Doc Software security features', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VARBAL', 3, 35, '2023-01-18 07:01:01', NULL, NULL, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(226, 'QU/23-24/226', 23, '47', 'CUS/RS/226/PR', 'Guru Ghasidas Vishwavidyalaya\r\nKoni, Bilaspur, C.G. India-495009', 'Dr.  Sampoornanand Jha (Deputy Registrar-Exam)', '2023-01-18', 'Quotation for Customized Hologram Master for Guru Ghasidas Vishwavidyalaya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15 days', NULL, 'Subject to Mumbai Jurisdiction', NULL, NULL, NULL, NULL, NULL, '4 weeks', NULL, NULL, 'Mail', 5, 28, '2023-01-18 10:01:19', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(227, 'QU/23-24/227', 20, '47', 'CUS/RS/227/PR', 'MUMBAI DISTRICT CENTRAL CO OP BANK\r\nMUMBAI BANK BHAVAN 207, \r\nDR D.N ROAD\r\nFORT , MUMBAI 400001\r\nM: +91 9158488470', 'Kind Attn: Mr Shreyas', '2023-01-18', 'Quotation for NECS Form', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 Days', '15 days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, NULL, '10-15 Days', NULL, NULL, 'Verbal', 5, 28, '2023-01-18 10:01:52', 28, '2023-01-19 08:01:08', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(228, 'QU/23-24/228', 23, '47', 'CUS/RS/228/PR', 'Network section Patna CO', 'Rakesh Sir', '2023-01-19', 'quotation for RPT Roll', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'verbal', 3, 35, '2023-01-19 06:01:15', NULL, NULL, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(229, 'QU/23-24/229', 20, '47', 'CUS/RS/229/PR', 'Arihant Co Op Bank', 'Mr Vinay Charan', '2023-01-19', 'Quotation for Record Slip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Against Delivery', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, NULL, NULL, NULL, NULL, 'Verbal', 5, 28, '2023-01-19 09:01:54', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(230, 'QU/23-24/230', 20, '47', 'CUS/RS/230/PR', 'Arihant Co Op Bank', 'Mr Vinay Charan', '2023-01-19', 'Quotation for Record Slip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Against Delivery', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, NULL, NULL, NULL, NULL, 'Verbal', 5, 28, '2023-01-19 09:01:56', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(231, 'QU/23-24/231', 23, '47', 'CUS/RS/231/PR', 'Vivekanand Education Society’s Institute of Technology\r\n  H.A.M.C, Collector’s Colony,\r\n  R.C Marg, Chembur\r\n  Mumbai- 400 074\r\n  M: + 91 9820569983', 'Ms Kajal Madnani', '2023-01-19', 'Quotation for Answer Books', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50% Asainst order Balance after delivery', '15 days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, 'Included', '2 weeks from the date of payment & Purchase order.', NULL, NULL, 'Verbal', 5, 28, '2023-01-19 09:01:28', NULL, NULL, 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(232, 'QU/23-24/232', 23, '47', 'CUS/RS/232/PR', 'graphics system (U) Ltd', 'Rakesh Sir', '2023-01-19', 'Quotation for Examination poly bags', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mail dated 19/01/2023', 2, 35, '2023-01-19 10:01:53', NULL, NULL, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(233, 'QU/23-24/233', 20, '47', 'CUS/RS/233/PR', 'The Co-operative Bank of Rajkot\r\nUniversity Rd, Indira Circle,\r\nJala Ram Nagar, Rajkot, \r\nGujarat 360007\r\nM: +91 9879313293', 'Mr Hiren Koradiya', '2023-01-23', 'Quotation for FD Receipt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100 % After 15 days of delivery', '30 Days', NULL, 'Subject to Mumbai Jurisdiction', NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, 'Extra', '15 days', NULL, NULL, 'Verbal', 5, 28, '2023-01-23 07:01:19', 28, '2023-01-23 08:01:57', 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(234, 'QU/23-24/234', 20, '47', 'CUS/RS/234/PR', 'IPS Consumables India\r\n5 GF, BLDG NO -11, VIJAY VILAS, KAVESAR, ANAND NAGAR, NEAR NEW HORIZONE SCHOOL. GHODBUNDER ROAD THANE WEST 400 615. M:  98339 18910', 'Mr  Rajesh Narang', '2023-01-24', 'QUOTATION FOR THERMAL ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days after delivery', '30 days from the date of quotes', NULL, 'subject to mumbai jurisdiction', NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 7 days from the date of PO  &  approved artwork', NULL, NULL, 'Mail', 5, 25, '2023-01-24 06:01:53', 25, '2023-01-24 06:01:02', 3, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(235, 'QU/23-24/235', 20, '47', 'CUS/RS/235/PR', 'IPS Consumables India 5 GF, BLDG NO -11, VIJAY VILAS, KAVESAR, ANAND NAGAR, NEAR NEW\r\nHORIZONE SCHOOL. GHODBUNDER ROAD THANE WEST 400615. M:  91 98339 18910 / 91 79778 13469', 'Mr  Rajesh Narang', '2023-01-24', 'QUOTATION FOR THERMAL ROLL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days after delivery', '30 days from the date of quotes', NULL, 'subject to mumbai jurisdiction', NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2023-01-24 09:01:32', 25, '2023-02-06 06:02:32', 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(236, 'QU/23-24/236', 20, '47', 'CUS/RS/236/PR', 'The Cosmos Co-op Bank Ltd.', 'Anant Surde (Asst.Manager)', '2023-01-27', 'Quotation for Pin Mailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, NULL, NULL, NULL, 'At actual outside Mumbai', 'Within 8 days from the date of PO', NULL, NULL, 'Mail', 5, 25, '2023-01-27 05:01:36', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, NULL, NULL, 0, 0),
(237, 'QU/23-24/237', 23, '47', 'CUS/RS/237/PR', 'Diabold', 'bharath Nagavelly', '2023-01-30', 'Quotation for DN Thermal Paper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Email dated 17.01.23', 3, 35, '2023-01-30 06:01:12', 35, '2023-01-30 06:01:55', 6, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0),
(238, 'QU/23-24/238', 23, '47', 'CUS/RS/238/PR', 'regalia Fashion Pvt Ltd', 'Mr. Vijayshankar Nair', '2023-01-31', 'Quotation for Supply of Grade Cards(Mark Sheets)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '100% Advance payment', 'only till 31st Jan 2023', NULL, NULL, NULL, ': GST @ 18% Will Be Applicable', NULL, NULL, NULL, 'within 10-15 days after receipt of payment and approval of the design.', NULL, NULL, 'email date 30.01.23', 3, 35, '2023-01-31 04:01:36', 35, '2023-02-01 05:02:08', 2, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 'Delivery of the product at Sion, Mumbai will cost additional Rs. 2,000/-', NULL, 1, 0),
(239, 'QU/23-24/239', 23, '47', 'CUS/RS/239/PR', 'Shree Computers', 'Nrupal Shah', '2023-02-01', 'Quotation for Degree Certificates.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '15 days', NULL, NULL, NULL, 'GST @ 18% Will Be Applicable', NULL, NULL, NULL, 'Freight Charges Extra, : 3-10 working date of  PO & Art work approval', NULL, NULL, 'Email dated 24.01.23', 3, 35, '2023-02-01 11:02:05', NULL, NULL, 3, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0),
(240, 'QU/23-24/240', 20, '47', 'CUS/RS/240/PR', 'finacus.co.in', 'Manish Kapdoskar', '2023-02-06', 'quotation for blank pinmailer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '30 days from the date of invoice', '30 days from the date of quotes', NULL, NULL, NULL, '18% GST Extra', NULL, NULL, NULL, 'Within 8-10 days from the date of PO & artwork approval', NULL, NULL, 'Mail', 5, 25, '2023-02-06 06:02:16', NULL, NULL, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rm_category`
--

CREATE TABLE `tbl_rm_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_rm_category`
--

INSERT INTO `tbl_rm_category` (`id`, `unique_id`, `name`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(16, NULL, 'CORR BOXES', NULL, '2022-06-06 09:47:22', NULL, '2022-06-06 09:47:22'),
(17, NULL, 'PLASTIC BAGS', NULL, '2022-06-06 09:47:22', NULL, '2022-06-06 09:47:22'),
(18, NULL, 'OTC PAPER', NULL, '2022-06-06 09:48:12', NULL, '2022-06-06 09:48:12'),
(19, NULL, 'CORE', NULL, '2022-06-06 09:48:12', NULL, '2022-06-06 09:48:12'),
(20, NULL, 'PACKAGING MATERIALS', NULL, '2022-06-06 09:49:11', NULL, '2022-06-06 09:49:11'),
(21, NULL, 'CHEMICALS', NULL, '2022-06-06 09:49:11', NULL, '2022-06-06 09:49:11'),
(22, NULL, 'STORE ITEMS', NULL, '2022-06-06 09:49:37', NULL, '2022-06-06 09:49:37'),
(23, NULL, 'PLATE', NULL, '2022-06-06 09:49:37', NULL, '2022-06-06 09:49:37'),
(24, NULL, 'STATIONERY', NULL, '2022-06-06 09:50:17', NULL, '2022-06-06 09:50:17'),
(25, NULL, 'PAPER', NULL, '2022-06-06 09:50:17', NULL, '2022-06-06 09:50:17'),
(26, NULL, 'INK', NULL, '2022-06-06 09:50:39', NULL, '2022-06-06 09:50:39'),
(27, NULL, 'SPARES', NULL, '2022-06-06 09:50:39', NULL, '2022-06-06 09:50:39'),
(28, NULL, 'OTHER', NULL, '2022-06-06 09:51:58', NULL, '2022-06-06 09:51:58'),
(29, NULL, 'PRINTED PRODUCTS', NULL, '2022-06-06 09:51:58', NULL, '2022-06-06 09:51:58'),
(30, NULL, 'KRAFT PAPER', NULL, '2022-06-06 09:52:29', NULL, '2022-06-06 09:52:29'),
(31, NULL, 'Dura 290 gsm', NULL, '2022-06-06 09:52:29', NULL, '2022-06-06 09:52:29'),
(32, NULL, 'PALLET', NULL, '2022-06-06 09:53:06', NULL, '2022-06-06 09:53:06'),
(33, NULL, 'A S Enterprises', NULL, '2022-06-06 09:53:06', NULL, '2022-06-06 09:53:06'),
(34, NULL, 'WATER MARK PROCESS', NULL, '2022-06-06 09:53:32', NULL, '2022-06-06 09:53:32'),
(35, NULL, 'Self Adhesive Blanket', NULL, '2022-06-06 09:53:32', NULL, '2022-06-06 09:53:32'),
(36, NULL, 'COTTON', NULL, '2022-06-06 09:53:55', NULL, '2022-06-06 09:53:55'),
(37, NULL, 'SPARE', NULL, '2022-06-06 09:53:55', NULL, '2022-06-06 09:53:55'),
(38, NULL, 'HOLOGRAM', NULL, '2022-06-06 09:54:14', NULL, '2022-06-06 09:54:14'),
(39, NULL, 'NON TERABLE COSMO PAPER', NULL, '2022-06-06 09:54:14', NULL, '2022-06-06 09:54:14'),
(40, NULL, 'SUNNY FINAIL', NULL, '2022-06-06 09:54:41', NULL, '2022-06-06 09:54:41'),
(41, NULL, 'DURA 150', NULL, '2022-06-06 09:54:41', NULL, '2022-06-06 09:54:41'),
(42, NULL, 'AW 68 (MAK OIL)', NULL, '2022-06-06 09:55:13', NULL, '2022-06-06 09:55:13'),
(43, NULL, 'BURGUNDY', NULL, '2022-06-06 09:55:13', NULL, '2022-06-06 09:55:13'),
(44, NULL, 'UV INK', NULL, '2022-06-06 09:55:38', NULL, '2022-06-06 09:55:38'),
(45, NULL, 'NEPAL-BANGLA FUGITIVE GREEN DRY', NULL, '2022-06-06 09:55:38', NULL, '2022-06-06 09:55:38'),
(46, NULL, 'NORMAL', NULL, '2022-06-06 09:56:02', NULL, '2022-06-06 09:56:02'),
(47, NULL, 'SLITTING', NULL, '2022-06-06 09:56:02', NULL, '2022-06-06 09:56:02'),
(48, NULL, 'CUTTING', NULL, '2022-06-06 09:56:25', NULL, '2022-06-06 09:56:25'),
(49, NULL, 'Hospital Material', NULL, '2022-06-06 09:56:25', NULL, '2022-06-06 09:56:25'),
(50, NULL, 'dark midight blue', NULL, '2022-06-06 09:56:59', NULL, '2022-06-06 09:56:59'),
(51, NULL, 'a4', NULL, '2022-06-06 09:56:59', NULL, '2022-06-06 09:56:59'),
(52, NULL, 'Dormat green', NULL, '2022-06-06 09:57:31', NULL, '2022-06-06 09:57:31'),
(53, NULL, 'PATTI', NULL, '2022-06-06 09:57:31', NULL, '2022-06-06 09:57:31'),
(54, NULL, 'GUM', NULL, '2022-06-06 09:58:02', NULL, '2022-06-06 09:58:02'),
(55, NULL, 'LAMINATE', NULL, '2022-06-06 09:58:02', NULL, '2022-06-06 09:58:02'),
(56, NULL, 'STICKER PAPER', NULL, '2022-06-06 09:58:16', NULL, '2022-06-06 09:58:16'),
(57, NULL, 'MICR RIBBON', NULL, '2022-06-06 09:58:16', NULL, '2022-06-06 09:58:16'),
(58, NULL, 'MACHINE', NULL, '2022-06-06 09:58:39', NULL, '2022-06-06 09:58:39'),
(59, NULL, 'WRIST BAND', NULL, '2022-06-06 09:58:39', NULL, '2022-06-06 09:58:39'),
(60, NULL, 'REPAIR MAINTENANCE', NULL, '2022-06-06 09:59:07', NULL, '2022-06-06 09:59:07'),
(61, NULL, 'oil', NULL, '2022-06-06 09:59:07', NULL, '2022-06-06 09:59:07'),
(62, NULL, 'NAYALO SHEET', NULL, '2022-06-06 09:59:46', NULL, '2022-06-06 09:59:46'),
(63, NULL, 'ROLLER', NULL, '2022-06-06 09:59:46', NULL, '2022-06-06 09:59:46'),
(64, NULL, 'TONER', NULL, '2022-06-06 10:00:03', NULL, '2022-06-06 10:00:03'),
(65, NULL, 'MAGNETIC POWDER', NULL, '2022-06-06 10:00:03', NULL, '2022-06-06 10:00:03'),
(66, NULL, 'MACHINE SPARE PARTS', NULL, '2022-06-06 10:00:41', NULL, '2022-06-06 10:00:41'),
(67, NULL, 'RIBBONS', NULL, '2022-06-06 10:00:41', NULL, '2022-06-06 10:00:41'),
(68, NULL, 'TAPE', NULL, '2022-06-06 10:01:04', NULL, '2022-06-06 10:01:04'),
(69, NULL, 'SHRINK POUCH', NULL, '2022-06-06 10:01:04', NULL, '2022-06-06 10:01:04'),
(70, NULL, 'Chemical', 0, '2022-06-09 08:06:59', NULL, NULL),
(71, 'MC/71', 'hfg', 0, '2022-08-06 11:08:59', NULL, NULL),
(72, 'MC/72', 'Pencil', 0, '2022-08-08 06:08:41', NULL, NULL),
(73, 'MC/73', 'STICKET PAPER', 0, '2022-08-11 06:08:55', NULL, NULL),
(74, 'MC/74', 'PAPER', 0, '2022-08-29 11:08:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rm_category_old`
--

CREATE TABLE `tbl_rm_category_old` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_rm_category_old`
--

INSERT INTO `tbl_rm_category_old` (`id`, `name`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(9, 'Gum', 0, '2022-06-03 12:06:20', 0, '2022-06-03 12:06:10'),
(10, 'Laminate', 0, '2022-06-03 12:06:23', NULL, NULL),
(11, 'Kraft Paper', 0, '2022-06-03 12:06:43', NULL, NULL),
(14, 'Shrink Pouch', 0, '2022-06-03 12:06:00', 0, '2022-06-03 12:06:12'),
(16, 'Dura 290 gsm', 0, '2022-06-06 07:06:18', NULL, NULL),
(18, 'PALLET', 0, '2022-06-09 05:06:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rm_product_category`
--

CREATE TABLE `tbl_rm_product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmcategory` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_rm_product_category`
--

INSERT INTO `tbl_rm_product_category` (`id`, `unique_id`, `rmcategory`, `name`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(51, NULL, 16, 'White Boxes', 0, '2022-06-09 07:06:01', NULL, NULL),
(52, NULL, 17, 'Black', 0, '2022-06-09 07:06:25', NULL, NULL),
(53, NULL, 18, 'OTC', 0, '2022-06-09 07:06:44', NULL, NULL),
(54, NULL, 19, 'Plastic Core', 0, '2022-06-09 07:06:16', NULL, NULL),
(55, NULL, 20, 'Packaging Materials', 0, '2022-06-09 07:06:47', NULL, NULL),
(56, NULL, 21, 'Chemicals', 0, '2022-06-09 08:06:18', NULL, NULL),
(57, 'PC/57', 17, 'sdsas', 0, '2022-08-06 11:08:30', NULL, NULL),
(58, 'PC/58', 16, 'Box', 0, '2022-08-08 06:08:29', NULL, NULL),
(59, 'PC/59', 25, 'MICR CTS PAPER', 0, '2022-08-11 06:08:05', NULL, NULL),
(61, 'PC/61', 25, 'STICKER PAPER', 0, '2022-08-11 06:08:30', 0, '2022-08-29 11:08:32'),
(62, 'PC/62', 25, 'NORMAL PAPER', 0, '2022-08-20 10:08:23', NULL, NULL),
(63, 'PC/63', 26, 'NORMAL INK', 0, '2022-09-09 08:09:16', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rtgs_neft`
--

CREATE TABLE `tbl_rtgs_neft` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `company_id` varchar(30) DEFAULT NULL,
  `bank_name` varchar(55) NOT NULL,
  `account_no` varchar(55) NOT NULL,
  `branch_name` varchar(55) DEFAULT NULL,
  `cost_center` int(11) NOT NULL,
  `account_name` varchar(55) DEFAULT NULL,
  `email_id` varchar(55) DEFAULT NULL,
  `mobile_number` varchar(55) DEFAULT NULL,
  `ifsc_code` varchar(55) DEFAULT NULL,
  `account_type` int(11) NOT NULL,
  `address_of_remitter` varchar(255) DEFAULT NULL,
  `template` int(11) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rtgs_neft`
--

INSERT INTO `tbl_rtgs_neft` (`id`, `unique_id`, `company_id`, `bank_name`, `account_no`, `branch_name`, `cost_center`, `account_name`, `email_id`, `mobile_number`, `ifsc_code`, `account_type`, `address_of_remitter`, `template`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(50, NULL, '42', 'bank', 'acc', 'ba', 62, 'fds', 'fsd', 'sdfs', 'af', 65, 'dfsdf', 65, 999999999, '2022-05-26 12:05:19', NULL, NULL),
(51, NULL, '42', 'djfb', 'asfjdbs', 'jsadbsj', 64, 'dfjd', 'nfsd', 'ksnfdka', 'kadn ak', 62, 'jfbsdjf', 64, NULL, NULL, NULL, NULL),
(52, NULL, '40', 'tst', 'test', 'test', 62, 'test', 'test', 'test', 'test', 62, 'test', 66, NULL, NULL, NULL, NULL),
(53, NULL, '43', 'SBI Bank', '12346789123456', 'Ghatkopar', 62, 'Siddhi More', 'tester2@scube.ne.in', '9988667788', 'IFSC1234', 64, 'Ghatkopar', 62, 9, '2022-05-27 04:05:06', NULL, NULL),
(54, NULL, '36', 'bank name', 'cjd', 'dnfka', 63, 'daskn', 'kndka', 'fckasd', 'kfnckdasa', 62, 'das', 65, NULL, NULL, NULL, NULL),
(55, NULL, '36', 'jbasjb', 'bwdjb', 'bsdjb', 63, 'cxzcjb', 'jbcjdb', 'vjbsdjb', 'djbsjb', 62, 'sdas', 62, NULL, NULL, NULL, NULL),
(56, NULL, '36', 'sadbk', 'nkdssak', 'ksnsdkas', 63, 'adans', 'knfdksa', 'kncksan', 'kcfnsdkv', 63, 'asdas', 63, NULL, NULL, NULL, NULL),
(57, NULL, '45', 'SBI Bank', '12346789123456', 'Ghatkopar', 62, 'Siddhi More', 'tester2@scube.ne.in', '9988667788', 'IFSC1234', 63, 'Ghatkopar', 65, NULL, NULL, NULL, NULL),
(58, NULL, '47', 'Saraswat Bank', '055500100003620', 'VIKHROLI', 63, 'DEVHARSH INFOTECH PVT LTD', 'accounts@devharshinfotech.com', '9321028626', 'SRCB0000055', 64, 'VIKHROLI', 62, 9, '2022-06-20 12:06:33', NULL, NULL),
(59, NULL, '48', 'Saraswat Bank', '12346789123456', 'VIKHROLI', 63, 'DEVHARSH INFOTECH PVT LTD', 'tester2@scube.ne.in', '9321028626', 'IFSC1234', 63, 'Ghatkopar', 65, 9, '2022-08-05 12:08:30', NULL, NULL),
(60, NULL, '50', 'Saraswat Bank', '055500100003620', 'Ghatkopar', 63, 'DEVHARSH INFOTECH PVT LTD', 'accounts@devharshinfotech.com', '', '', 63, '', 63, 9, '2022-08-08 05:08:37', NULL, NULL),
(63, NULL, '51', 'cvx', 'vxc', '', 63, '', '', '', '', 64, '', 65, 999999999, '2022-08-09 06:08:30', NULL, NULL),
(64, NULL, '51', 'cvx', 'vxc', '', 63, '', '', '', '', 64, '', 65, 999999999, '2022-08-09 06:08:51', NULL, NULL),
(65, NULL, '51', 'vcxv', 'cvxc', '', 63, '', '', '', '', 64, '', 64, NULL, NULL, NULL, NULL),
(66, NULL, '52', 'fdsfs', 'dsf', '', 63, '', '', '', '', 63, '', 64, 999999999, '2022-08-09 06:08:00', NULL, NULL),
(67, 'CB/67', '53', 'das', 'asdsa', '', 64, '', '', '', '', 63, '', 65, 999999999, '2022-08-09 06:08:51', NULL, NULL),
(68, 'CB/68', '53', 'xzcz', 'zxcxz', '', 62, '', '', '', '', 62, '', 63, NULL, NULL, NULL, NULL),
(69, 'CB/69', '49', 'Saraswat Bank', '055500100003628', 'VIKHROLI', 63, 'DEVHARSH INFOTECH PVT LTD', 'tester2@scube.ne.in', '', '', 63, '', 62, 9, '2022-10-28 05:10:31', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salesworkorder`
--

CREATE TABLE `tbl_salesworkorder` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `order_no` varchar(55) DEFAULT NULL,
  `order_name` varchar(55) DEFAULT NULL,
  `customer_name` varchar(15) DEFAULT NULL,
  `delivery_location` varchar(15) DEFAULT NULL,
  `transporter_option` varchar(15) DEFAULT NULL,
  `transporter_location` varchar(15) DEFAULT NULL,
  `transporter_mode` varchar(15) DEFAULT NULL,
  `tax_structure` varchar(15) DEFAULT NULL,
  `freight_charges` varchar(55) DEFAULT NULL,
  `freight_charges_before_tax` varchar(15) DEFAULT NULL,
  `loading_packing_charges` varchar(55) DEFAULT NULL,
  `loading_packing_charges_before_tax` varchar(15) DEFAULT NULL,
  `insurance_charges` varchar(55) DEFAULT NULL,
  `insurance_charges_before_tax` varchar(15) DEFAULT NULL,
  `other_charges` varchar(55) DEFAULT NULL,
  `other_charge_txt1` varchar(55) DEFAULT NULL,
  `other_charge_txt2` varchar(55) DEFAULT NULL,
  `other_charge_before_tax` varchar(15) DEFAULT NULL,
  `transport_debit_note` varchar(25) DEFAULT NULL,
  `sales_order_date` varchar(55) DEFAULT NULL,
  `target_delivery_date` varchar(55) DEFAULT NULL,
  `po_no` varchar(55) DEFAULT NULL,
  `po_date` varchar(55) DEFAULT NULL,
  `transaction_category` varchar(55) DEFAULT NULL,
  `job_card_no` varchar(55) DEFAULT NULL,
  `job_instruction` varchar(55) DEFAULT NULL,
  `quantity` varchar(55) DEFAULT NULL,
  `quantity_unit` varchar(55) DEFAULT NULL,
  `po_qty_unit_diff_frm_so` varchar(55) DEFAULT NULL,
  `po_quantity` varchar(55) DEFAULT NULL,
  `po_quantity_unit` varchar(55) DEFAULT NULL,
  `width` varchar(55) DEFAULT NULL,
  `width_unit` varchar(55) DEFAULT NULL,
  `height_length` varchar(55) DEFAULT NULL,
  `height_length_unit` varchar(55) DEFAULT NULL,
  `unit_price` varchar(55) DEFAULT NULL,
  `unit_price_unit` varchar(55) DEFAULT NULL,
  `discount` decimal(8,2) DEFAULT '0.00',
  `numbers_from` varchar(55) DEFAULT NULL,
  `numbers_to` varchar(55) DEFAULT NULL,
  `customer_order_email` varchar(55) DEFAULT NULL,
  `open` varchar(15) DEFAULT NULL,
  `dispatch_invoice_instructions` varchar(55) DEFAULT NULL,
  `job_instructions` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_salesworkorder`
--

INSERT INTO `tbl_salesworkorder` (`id`, `unique_id`, `order_no`, `order_name`, `customer_name`, `delivery_location`, `transporter_option`, `transporter_location`, `transporter_mode`, `tax_structure`, `freight_charges`, `freight_charges_before_tax`, `loading_packing_charges`, `loading_packing_charges_before_tax`, `insurance_charges`, `insurance_charges_before_tax`, `other_charges`, `other_charge_txt1`, `other_charge_txt2`, `other_charge_before_tax`, `transport_debit_note`, `sales_order_date`, `target_delivery_date`, `po_no`, `po_date`, `transaction_category`, `job_card_no`, `job_instruction`, `quantity`, `quantity_unit`, `po_qty_unit_diff_frm_so`, `po_quantity`, `po_quantity_unit`, `width`, `width_unit`, `height_length`, `height_length_unit`, `unit_price`, `unit_price_unit`, `discount`, `numbers_from`, `numbers_to`, `customer_order_email`, `open`, `dispatch_invoice_instructions`, `job_instructions`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(233, 'WO/22-23/233', 'order1', 'order name', '235', '197', '8', '3', '2', '242,243', '300', '1', '200', '1', '288', '1', '1', 'Charge', '200', '1', '1', '2022-10-22', '2022-10-22', NULL, '2022-10-22', '1', '112', NULL, '30', '19', '1', '20', '18', '25', '18', '30', '20', '900', '1', '0.00', '20', '30', '1666959232_1.jpg', '1', 'Instructions', NULL, 999999999, '2022-10-28 12:10:52', NULL, NULL),
(234, 'WO/22-23/234', 'order 2', 'order 2 name', '236', '199', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-22', '2022-10-22', NULL, '2022-10-22', NULL, '112', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '700', '2', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, 999999999, '2022-10-28 12:10:41', NULL, NULL),
(235, 'WO/22-23/235', 'Wo/test/001', 'computer Stationary', '233', '199', '9', '3', '2', '', '12', '1', '12', '1', '12', '1', '1', 'Test', '12', '1', '0', '2022-10-31', '2022-10-31', 'PO/test/001', '2022-10-31', '3', '162', 'Test Work Order', '12', '17', '1', '12', '19', '6', '39', '6', '28', '5', '1', '0.00', '100', '1000', '1667214718_0082 SDM University_MDS_II.jpg', '1', 'test', 'Test Work Order', 9, '2022-10-31 11:10:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salesworkorder_labeling`
--

CREATE TABLE `tbl_salesworkorder_labeling` (
  `id` int(11) NOT NULL,
  `general_id` int(11) NOT NULL,
  `company_name` varchar(55) DEFAULT NULL,
  `print_for` varchar(55) DEFAULT NULL,
  `item` varchar(55) DEFAULT NULL,
  `inline_text` varchar(55) DEFAULT NULL,
  `special_instruction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_salesworkorder_labeling`
--

INSERT INTO `tbl_salesworkorder_labeling` (`id`, `general_id`, `company_name`, `print_for`, `item`, `inline_text`, `special_instruction`) VALUES
(198, 233, 'comp name', '2', 'item 1', 'item 1 text', 'special  instruction'),
(199, 234, 'latest comp name', '3', 'latest item', 'latest item text', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salesworkoreder_labeling_printfor`
--

CREATE TABLE `tbl_salesworkoreder_labeling_printfor` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_salesworkoreder_labeling_printfor`
--

INSERT INTO `tbl_salesworkoreder_labeling_printfor` (`id`, `description`) VALUES
(1, 'Print For 1'),
(2, 'Print For 2'),
(3, 'Print For 3'),
(4, 'Print For 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales_work_order_unit`
--

CREATE TABLE `tbl_sales_work_order_unit` (
  `id` int(11) NOT NULL,
  `description` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sales_work_order_unit`
--

INSERT INTO `tbl_sales_work_order_unit` (`id`, `description`) VALUES
(1, 'Rs'),
(2, 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sequence`
--

CREATE TABLE `tbl_sequence` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sequence`
--

INSERT INTO `tbl_sequence` (`id`, `description`) VALUES
(1, 'ASC'),
(2, 'DESC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_spare`
--

CREATE TABLE `tbl_spare` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` tinyint(2) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_spare`
--

INSERT INTO `tbl_spare` (`id`, `unique_id`, `name`, `unit`, `type`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(59, NULL, 'Part 2', 18, 1, 999999999, '2022-06-13 12:06:52', 999999999, '2022-06-13 12:06:02'),
(60, NULL, 'Printronix Ribbon', 24, 0, 9, '2022-06-14 05:06:27', 9, '2022-06-14 05:06:58'),
(61, 'SP/61', 'xzX', 18, 0, 999999999, '2022-08-06 11:08:14', NULL, NULL),
(62, 'SP/62', 'Machine spare parts', 27, 1, 9, '2022-08-08 06:08:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`id`, `unique_id`, `code`, `description`, `country`, `remark`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(16, NULL, 'Bihar', 'Bihar', '54', NULL, 0, '2022-05-04 12:05:54', NULL, NULL),
(17, NULL, 'Gujarat', 'Gujarat', '54', NULL, 0, '2022-05-04 12:05:04', NULL, NULL),
(18, 'ST/18', 'dfgd', 'dfgdf', '56', NULL, 999999999, '2022-08-06 11:08:16', NULL, NULL),
(19, 'ST/19', 'US-001', 'NA', '57', NULL, 9, '2022-08-08 07:08:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_style`
--

CREATE TABLE `tbl_style` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_style`
--

INSERT INTO `tbl_style` (`id`, `description`) VALUES
(1, 'Gatholic'),
(2, 'MICR'),
(3, 'Barcode'),
(4, 'Inkjet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax`
--

CREATE TABLE `tbl_tax` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `tax_name` varchar(55) DEFAULT NULL,
  `tax_value` varchar(55) DEFAULT NULL,
  `flate_value` varchar(55) DEFAULT NULL,
  `based_on` varchar(55) DEFAULT NULL,
  `taxes` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tax`
--

INSERT INTO `tbl_tax` (`id`, `unique_id`, `tax_name`, `tax_value`, `flate_value`, `based_on`, `taxes`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(241, NULL, 'Txt 1', '34', NULL, NULL, '5', 999999999, '2022-10-03 11:10:31', NULL, NULL),
(242, NULL, 'Txt 2', '43', NULL, '1', '3,4,5', 999999999, '2022-10-03 11:10:51', NULL, NULL),
(243, NULL, 'Txt 3', '20', NULL, NULL, '242,243', 999999999, '2022-10-03 11:10:09', NULL, NULL),
(244, NULL, 'Test-Tax', '123', NULL, '1', '241', 9, '2022-10-06 08:10:29', NULL, NULL),
(245, 'TX/245', 'latest', '20', NULL, '1', '242', 999999999, '2022-10-06 09:10:01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_structure`
--

CREATE TABLE `tbl_tax_structure` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `tax_structure_name` varchar(55) DEFAULT NULL,
  `tax` varchar(25) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tax_structure`
--

INSERT INTO `tbl_tax_structure` (`id`, `unique_id`, `tax_structure_name`, `tax`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(242, NULL, 'test', '237', NULL, NULL, NULL, NULL),
(243, NULL, 'test 2', '238', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_taxes`
--

CREATE TABLE `tbl_tax_taxes` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tax_taxes`
--

INSERT INTO `tbl_tax_taxes` (`id`, `description`) VALUES
(1, 'Tax 1'),
(2, 'Tax 2'),
(3, 'Tax 3'),
(4, 'Tax 4'),
(5, 'Tax 5'),
(6, 'Tax 6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tearing`
--

CREATE TABLE `tbl_tearing` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tearing`
--

INSERT INTO `tbl_tearing` (`id`, `description`) VALUES
(1, 'Yes'),
(2, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_template`
--

CREATE TABLE `tbl_template` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_template`
--

INSERT INTO `tbl_template` (`id`, `description`) VALUES
(62, 'Saraswat Bank'),
(63, 'Union Bank'),
(64, 'Deutsche Bank'),
(65, 'HDFC Bank'),
(66, 'ICICI Bank');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction_category`
--

CREATE TABLE `tbl_transaction_category` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaction_category`
--

INSERT INTO `tbl_transaction_category` (`id`, `description`) VALUES
(1, 'Manufacturing'),
(2, 'Trading'),
(3, 'Export'),
(4, 'Labour');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport`
--

CREATE TABLE `tbl_transport` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `transport_name` varchar(55) DEFAULT NULL,
  `transport_phone_no` varchar(55) DEFAULT NULL,
  `transport_add` varchar(55) DEFAULT NULL,
  `transport_location` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transport`
--

INSERT INTO `tbl_transport` (`id`, `unique_id`, `transport_name`, `transport_phone_no`, `transport_add`, `transport_location`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(1, 'TR/1', 'test 1', '1234567890', 'test', '1', 999999999, '2022-10-11 05:10:01', NULL, NULL),
(2, 'TR/2', 'Trans-1', '12345798', 'Ghatkopar west', '2,3', 9, '2022-10-11 06:10:34', NULL, NULL),
(8, NULL, 'Trans-test', '9825425625', 'address', '2', 999999999, '2022-10-27 05:10:08', NULL, NULL),
(9, NULL, 'Vehicle-1', '8899556622', 'Kurla', '3', 9, '2022-10-31 11:10:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport_location`
--

CREATE TABLE `tbl_transport_location` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(25) DEFAULT NULL,
  `location_name` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transport_location`
--

INSERT INTO `tbl_transport_location` (`id`, `unique_id`, `location_name`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`) VALUES
(1, NULL, 'location 1', 999999999, '2022-10-11 05:10:30', NULL, NULL),
(2, NULL, 'Kurla', 9, '2022-10-11 06:10:48', NULL, NULL),
(3, NULL, 'Thane', 9, '2022-10-11 06:10:48', NULL, NULL),
(4, NULL, 'uy', 999999999, '2022-10-14 05:10:39', NULL, NULL),
(5, NULL, 'uy', 999999999, '2022-10-14 05:10:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transport_mode`
--

CREATE TABLE `tbl_transport_mode` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transport_mode`
--

INSERT INTO `tbl_transport_mode` (`id`, `description`) VALUES
(1, 'Road'),
(2, 'Rail'),
(3, 'Air'),
(4, 'Sea');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(55) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `site` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `usercode` varchar(100) NOT NULL,
  `maker_checker` tinyint(1) DEFAULT NULL,
  `sign` varchar(191) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `unique_id`, `fullname`, `username`, `password`, `designation`, `position`, `site`, `status`, `emailid`, `usercode`, `maker_checker`, `sign`, `addeddby`, `addedddttm`, `modifiedby`, `modifieddttm`, `role`) VALUES
(9, NULL, 'Administrator User', 'Administrator', '123456', 48, 48, 48, 1, 'admin@pmserp.com', 'administrator', 1, '26.jpg', 0, '2022-04-28 04:04:40', 0, '2022-06-15 07:06:30', 25),
(20, NULL, 'Yogesh Jatia', 'yogesh', '{Ck(5H', 53, 53, 54, 1, 'yogesh@devharshinfotech.com', 'yogesh', NULL, '26.jpg', 0, '2022-06-21 04:06:39', NULL, NULL, 25),
(21, NULL, 'Krishnamurthy              ', 'krishamurthy', 'v4$>D5', 53, 53, 54, NULL, 'krishnamurthy@devharshinfotech.com', 'krishamurthy', NULL, '26.jpg', 0, '2022-06-21 04:06:57', NULL, NULL, 35),
(22, NULL, 'A. Vengeteshan       ', 'railway', 'P4U!tA', 53, 53, 54, NULL, 'railway@devharshinfotech.com', 'railway', NULL, '26.jpg', 0, '2022-06-21 04:06:05', NULL, NULL, 35),
(23, NULL, 'Rakesh Shah', 'rakeshshah', 'fW2=pQ', 53, 53, 54, NULL, 'rakeshshah900@gmail.com', 'rakeshshah', NULL, '26.jpg', 0, '2022-06-21 04:06:13', NULL, NULL, 25),
(24, NULL, 'Mahendra Waman', 'ceo', '8a+5UK', 59, 54, 54, NULL, 'ceo@devharshinfotech.com', 'ceo', NULL, '26.jpg', 0, '2022-06-21 04:06:32', 9, '2022-09-09 07:09:41', 25),
(25, NULL, 'Shamal Raul', 'Shamal', '56ks#', 55, 55, 55, 1, 'office.yogesh@devharshinfotech.com', 'Shamal', 1, '26.jpg', 0, '2022-06-21 04:06:45', 9, '2023-01-24 07:01:12', 34),
(26, NULL, 'Diskshag', 'Diksha', 'Qc#8A6', 53, 53, 54, 1, 'tender@devharshinfotech.com', 'Diksha', NULL, '26.jpg', 0, '2022-07-05 08:07:31', NULL, NULL, 35),
(27, NULL, 'Manisha shah', 'Manisha', 'SM{J:4', 53, 53, 54, 1, 'accounts@devharshinfotech.com', 'Manisha', 1, '26.jpg', 0, '2022-07-05 08:07:15', 0, '2022-07-05 08:07:23', 35),
(28, NULL, 'Mansi', 'Mansi', '23MS*', 53, 53, 54, 1, 'rakesh@devharshinfotech.com', 'Mansi', 1, '26.jpg', 0, '2022-07-05 08:07:42', 9, '2023-01-16 11:01:27', 25),
(29, NULL, 'Chandrakant Tandel', 'Chandrakant', 'CA+6#g', 54, 54, 54, 1, 'accounts2@devharshinfotech.com', 'Chandrakant', NULL, '26.jpg', 0, '2022-08-02 05:08:24', NULL, NULL, 25),
(33, 'US/33', 'Tanaya Patil', 'Tanaya', '08TP$', 60, 54, 54, 1, 'rakesh@scube.net.in', 'Tanaya', 1, '26.jpg', 9, '2022-09-09 07:09:28', 9, '2022-12-08 09:12:01', 34),
(34, 'US/34', 'Test User', 'tester', 'Scube@123', 58, 53, 54, 1, 'dev12@scube.net.in', 'TEST01', 0, '26.jpg', 9, '2022-12-02 09:12:16', NULL, NULL, 30),
(35, 'US/35', 'Veda', 'Veda', '09VP&', NULL, NULL, NULL, NULL, NULL, 'Veda', NULL, '26.jpg', 9, '2022-12-08 09:12:48', NULL, NULL, 35),
(36, NULL, 'Admin User', 'admin', '123456', 48, 48, 48, 1, 'admin@pmserp.com', 'administrator', 1, '26.jpg', 0, '2022-04-28 04:04:40', 0, '2022-06-15 07:06:30', 25),
(37, 'US/37', 'Hanae Ochoa', 'domiwomiva', 'Pa$$w0rd!', 53, 53, 60, 0, 'getozycysy@mailinator.com', 'Omnis irure consequa', 0, '26.jpg', 36, '2023-03-20 05:03:39', NULL, NULL, 30),
(38, 'US/38', 'Ferdinand Shaw', 'gavirawoco', 'Pa$$w0rd!', 58, 58, 60, 0, 'fyfugunu@mailinator.com', 'Vel corporis sit tot', 1, 'F:\\wamp64\\tmp\\phpF126.tmp.png', 36, '2023-03-20 11:03:47', NULL, NULL, 30),
(39, 'US/39', 'Adena Henry', 'jyjyxiga', 'Pa$$w0rd!', 60, 54, 68, 0, 'vilyjyv@mailinator.com', 'Provident quis aliq', 1, 'jyjyxiga.png', 36, '2023-03-20 11:03:22', NULL, NULL, 37),
(40, 'US/40', 'Deborah Mercado', 'juket', 'Pa$$w0rd!', 56, 54, 50, 1, 'kedijuq@mailinator.com', 'Officiis corrupti i', 0, 'juket.png', 36, '2023-03-20 11:03:51', NULL, NULL, 35),
(41, 'US/41', 'Chaney Lang', 'zeholyx', 'Pa$$w0rd!', 53, 53, 68, 1, 'bomeje@mailinator.com', 'Sit earum esse culp', 1, 'zeholyx.png', 36, '2023-03-20 11:03:18', NULL, NULL, 35),
(42, 'US/42', 'Russell Boyd', 'pyhemosu', 'Pa$$w0rd!', 53, 53, 50, 1, 'dahukobi@mailinator.com', 'Labore eaque nihil e', 0, 'pyhemosu.png', 36, '2023-03-20 11:03:21', NULL, NULL, 35),
(43, 'US/43', 'Nevada Welch', 'fuzitizada', 'Pa$$w0rd!', 53, 53, 62, 1, 'fovufifonu@mailinator.com', 'Laborum nesciunt ea', 1, 'fuzitizada.png', 36, '2023-03-20 11:03:02', NULL, NULL, 35);

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE `terms_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) NOT NULL,
  `title_value_id` bigint(20) NOT NULL,
  `term_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id`, `categories_id`, `title_value_id`, `term_value`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '50% advance and bal 50% before dispatch', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 1, 'Against Delivery', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 1, '30 days from the invoice date', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 1, '100 % advance', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 2, '30 days from the date of quotes', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 2, '60 days from the date of quotes', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 2, '90 days from the date of quotes', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 2, '15 days from the date of quotes', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 3, 'Tax invoice', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 3, 'Delivery Challan', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1, 3, 'E-way Bill', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 1, 4, 'Mumbai', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 5, 'It depends upon HSN code & Prod\n            uct\n        eg : 18 % / 12 % GST applicable extra', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 1, 6, 'As Actual', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 1, 6, 'Extra as applicable', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 1, 6, 'To pay basis', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 1, 6, 'single point location', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 1, 7, 'if multi-location delivery charges will be extra', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 1, 9, 'will be extra', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 2, 10, 'ENTEBEE -Uganda', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2, 10, 'TINCAN Lagos - Nigeria', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2, 10, 'SAVANNA PORT -US', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 2, 10, 'NEWARK-US', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 2, 10, 'NY - US', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 2, 10, 'MOMBASA - Keneya', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 2, 10, 'MOJO port - Ethiopia', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 2, 10, 'HOUSTON - US', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 2, 10, 'ACCRA-GHANA', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 2, 10, 'LIBERIA -MONROVIA', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 2, 10, 'JEBELALI-UAE', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 2, 10, 'LONG BEACH - CALIFORNIA', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 2, 10, 'MIAMI -FORIDA', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 2, 10, 'TEMPA- US', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 2, 10, 'RIAYADH- SAUDI', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 2, 10, 'OAKLAND -US', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 2, 10, 'KANMANDU-NEPAL', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 2, 10, 'NIROBI- KENEYA', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 2, 10, 'BANDAR ABBAS-IRAN', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 2, 11, 'Extra', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 2, 12, 'one year warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 2, 12, 'two year warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 2, 13, 'At destination, charges will be extra', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 2, 14, '$ 100 Extra', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 2, 15, 'Extra', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 2, 16, 'Extra', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 2, 17, '1- 5 % charges', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 2, 18, 'FOB INDIA', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 2, 18, 'CNF BASIS', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 2, 18, 'CFR BASIS', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 2, 19, 'standard packing', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 2, 20, '50% advance and bal 50% before dispatch', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 2, 20, 'Against Delivery', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 2, 20, '30 days from the invoice date', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 2, 20, 'LC at sight', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 2, 20, 'LC at 60/90 days sight', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 2, 20, '30 % advance and bal. against BL Date', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 2, 20, '100 % advance', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 2, 20, 'BL 60 days sight', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 2, 21, '30 / 60/ 90 days', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 2, 22, 'commercial invoice', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 2, 22, 'packing list', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 2, 22, 'bill of lading -original/telex/seaway BL', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 2, 22, 'certificate of origin', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 2, 22, 'fumigation certificate', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 2, 22, 'product certificate', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 2, 22, 'soncap certificate', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 2, 22, 'Airway bill', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 2, 22, 'lorry recipt', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 2, 22, 'POD', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 2, 23, 'Mumbai', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 2, 24, 'if there is any change in statutory levies will inform customer from the effective date', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 2, 25, '45 days to 60 days', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 3, 26, 'single point location', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 3, 26, 'if multi-location delivery charges will be extra', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 3, 27, 'Extra', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 3, 28, 'one year warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 3, 29, 'two year warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 3, 30, 'at location', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 3, 31, 'extra', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 3, 32, 'std', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 3, 33, '50% advance and bal 50% before dispatch', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 3, 33, 'Against Delivery', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 3, 33, '30 days from the invoice date', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 3, 33, '100 % advance', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 3, 34, '30 / 60/ 90 days', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 3, 35, 'Tax invoice', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 3, 35, 'Delivery Challan', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 3, 35, 'E-way Bill', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 3, 36, 'mumbai', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 3, 37, 'if there is any change in statutory levies will inform customer from the effective date', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 3, 38, 'It depends upon HSN code & Product eg : 18 % / 12 % GST applicable extra', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 3, 38, 'single point location', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 3, 38, 'if multi-location delivery charges will be extra', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 3, 40, 'GST certificate mandatory', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 4, 41, 'extra', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 4, 42, 'one year warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 4, 43, 'two year warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 4, 44, 'At destination, charges will be extra', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 4, 45, 'extra', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 4, 46, '50% advance and bal 50% before dispatch', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 4, 46, 'Against Delivery', NULL, NULL, NULL, NULL, NULL, NULL),
(102, 4, 46, '30 days from the invoice date', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 4, 46, '100 % advance', NULL, NULL, NULL, NULL, NULL, NULL),
(104, 4, 47, '30 / 60/ 90 days', NULL, NULL, NULL, NULL, NULL, NULL),
(105, 4, 48, 'Tax invoice', NULL, NULL, NULL, NULL, NULL, NULL),
(106, 4, 48, 'Delivery Challan', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 4, 48, 'E-way Bill', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 4, 49, 'Mumbai', NULL, NULL, NULL, NULL, NULL, NULL),
(109, 4, 50, 'if there is any change in statutory levies will inform customer from the effective date', NULL, NULL, NULL, NULL, NULL, NULL),
(110, 4, 51, 'It depends upon HSN code & Product eg : 18 % / 12 % GST applicable extra', NULL, NULL, NULL, NULL, NULL, NULL),
(111, 4, 52, 'Extra', NULL, NULL, NULL, NULL, NULL, NULL),
(112, 1, 1, 'var frm_user = $(\'.form\');         var form_error = $(\'.alert-danger\', frm_user); 		var form_success = $(\'.alert-success\', frm_user);         $(\".form\").validate({             rules: {                 category: {                     required: true,                 },                 term_title: {                     required: true,                 },                 term_value: {                     required: true,                 },             },             messages: {                 category: {                     required: \"Please Select Category\",                 },                 term_title: {                     required: \"Please Select Term Title\",                 },                 term_value: {                     required: \"Please Enter Term Value\",                 },             },         });', '2023-03-17 07:12:54', 36, 36, NULL, '2023-03-17 06:48:21', '2023-03-17 07:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `terms_condition_categories`
--

CREATE TABLE `terms_condition_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_condition_categories`
--

INSERT INTO `terms_condition_categories` (`id`, `name`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 'Regular', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Export', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Local', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'CPS ---AMC', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms_titles`
--

CREATE TABLE `terms_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_titles`
--

INSERT INTO `terms_titles` (`id`, `categories_id`, `name`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Payment Term', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Validity Of Quotation', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'Documents', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 'Jurisdiction', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 'Tax', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 'Freight', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 1, 'Delivery', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'Prices', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 'Sampling Charges', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, 'Port of loading', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 2, 'Installation Charge', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 2, 'Warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2, 'Training', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 2, 'Sampling Charges', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 2, 'LC handling Charges', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 2, 'Cancellation Of Order Charge', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2, 'Delivery Terms', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2, 'Packing', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 2, 'Payment Term', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 2, 'Validity Of Quotation', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 2, 'Documents', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 2, 'Jurisdlction', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 2, 'Statutory Clause', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 2, 'Delivery Terms', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 3, 'Discharge Point Term', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 3, 'Installation Charge', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 3, 'Warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 3, 'Training', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 3, 'Cancellation Of Order Charge', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 3, 'Packing', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 3, 'Payment Term', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 3, 'Validity Of Quotation', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 3, 'Documents', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 3, 'Jurisdlction', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 3, 'Statutory Clause', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 3, 'Tax', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 3, 'Delivery', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 3, 'Other Charges', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 3, 'GST certificate ', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 4, 'Installation Charge', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 4, 'Warranty', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 4, 'Training', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 4, 'Cancellation Of Order Charge', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 4, 'Payment Term', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 4, 'Validity Of Quotation', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 4, 'Documents', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 4, 'Jurisdlction', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 4, 'Statutory Clause', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 4, 'Tax', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 4, 'Travel charges', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_operators`
--

CREATE TABLE `user_operators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unique_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emp_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_id` bigint(20) DEFAULT NULL COMMENT 'mst_site Table id',
  `status` tinyint(4) DEFAULT NULL COMMENT '1 - active, 2 - Inactive',
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_operators`
--

INSERT INTO `user_operators` (`id`, `unique_id`, `name`, `fullname`, `emp_code`, `email`, `password`, `site_id`, `status`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'B/US/2023-2024/01', 'Meghashree Kolhe', 'Meghashree Kolhe', '123', NULL, '$2y$10$Jyx3LXoNh8CnX6M.1lbbgeOTzToQedb/QQpnq/wlK1lXP47U.mFvm', 56, 1, 9, NULL, NULL, NULL, '2023-05-02 04:43:10', '2023-05-02 05:27:06'),
(2, 'UO/2023-2024/01', 'Deepali', 'Deepali Patil', '456', NULL, '$2y$10$KLhjmQzj5Wg37czip3JVUe95UccibJQClZ5Wuain29cJeiNNf5s56', 56, 1, 9, NULL, NULL, NULL, '2023-05-02 05:34:17', '2023-05-02 05:37:22'),
(3, 'UO/2023-2024/02', 'Deepali', 'Yash Kolhe', '789', NULL, '$2y$10$hJ1PpZQmEKzILmEwwy3UfeJxzpEI6SErA1HcuVc1VCE5IxXQTsfJa', 67, 1, 9, NULL, NULL, NULL, '2023-05-02 06:25:06', '2023-05-02 06:25:06'),
(4, 'UO/2023-2024/03', 'Deepali', 'Ganesh Chaudhari', '111', NULL, '$2y$10$lQswEPxl8Ko0dI.68UzWY.JCfaO90ujeiH8dkpO4fKUh07D9C1n0O', 55, 1, 9, NULL, NULL, NULL, '2023-05-02 06:25:32', '2023-05-02 06:25:32'),
(5, 'UO/2023-2024/04', 'Deepali', 'Sangita Narkhade', '222', NULL, '$2y$10$RusPJfTSl.qHXBoZHjUwL.vW9GJxNDMrhzOqFq17EE8BXze9AulkC', 67, 1, 9, NULL, NULL, NULL, '2023-05-02 06:26:00', '2023-05-02 06:26:00'),
(6, 'UO/2023-2024/05', 'dsdsdsd', 'Siddhi More', '333', NULL, '$2y$10$lodge7gTQHrLSEdlyyKeQeoSNCrZm2rex4TTFh4mRCy1UWoKy1dbC', 65, 1, 9, NULL, NULL, NULL, '2023-05-02 06:26:27', '2023-05-02 06:26:27'),
(7, 'UO/2023-2024/06', 'Deepali', 'Lina Phalak', '444', 'Administrator@gmail.com', '$2y$10$BHXApt6W2CfB.TjB/lSWoef5PsD54fRlyBIF65hR6y1hyVJPYizGy', 56, 2, 9, NULL, NULL, NULL, '2023-05-03 19:46:23', '2023-05-03 19:46:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_modules`
--
ALTER TABLE `access_modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `access_roles`
--
ALTER TABLE `access_roles`
  ADD PRIMARY KEY (`arid`);

--
-- Indexes for table `access_role_modules`
--
ALTER TABLE `access_role_modules`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `advance_feature_masters`
--
ALTER TABLE `advance_feature_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description_masters`
--
ALTER TABLE `description_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fg_entries`
--
ALTER TABLE `fg_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_card_types`
--
ALTER TABLE `job_card_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_color_master`
--
ALTER TABLE `mst_color_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_color_shade`
--
ALTER TABLE `mst_color_shade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_countries`
--
ALTER TABLE `mst_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_country`
--
ALTER TABLE `mst_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_designation`
--
ALTER TABLE `mst_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_gum_make`
--
ALTER TABLE `mst_gum_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_ink_make`
--
ALTER TABLE `mst_ink_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_paper_color_shade`
--
ALTER TABLE `mst_paper_color_shade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_paper_make`
--
ALTER TABLE `mst_paper_make`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_position`
--
ALTER TABLE `mst_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_qc`
--
ALTER TABLE `mst_qc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_quote_type`
--
ALTER TABLE `mst_quote_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_site`
--
ALTER TABLE `mst_site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_unit`
--
ALTER TABLE `mst_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `printer_feature_masters`
--
ALTER TABLE `printer_feature_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer_masters`
--
ALTER TABLE `printer_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_categories`
--
ALTER TABLE `process_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size_masters`
--
ALTER TABLE `product_size_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma_invoices`
--
ALTER TABLE `proforma_invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma_locals`
--
ALTER TABLE `proforma_locals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma_overses`
--
ALTER TABLE `proforma_overses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proforma_products`
--
ALTER TABLE `proforma_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prospect_masters`
--
ALTER TABLE `prospect_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_advace_features`
--
ALTER TABLE `quotation_advace_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_invoice_details`
--
ALTER TABLE `quotation_invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_masters`
--
ALTER TABLE `quotation_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_products`
--
ALTER TABLE `quotation_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_product_items`
--
ALTER TABLE `quotation_product_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_product_item_multipe_qty_rates`
--
ALTER TABLE `quotation_product_item_multipe_qty_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_width_mapping`
--
ALTER TABLE `quotation_width_mapping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_masters`
--
ALTER TABLE `sales_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menus`
--
ALTER TABLE `sub_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_structure_masters`
--
ALTER TABLE `tax_structure_masters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ac_type`
--
ALTER TABLE `tbl_ac_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_baby_roll_making_coating_side`
--
ALTER TABLE `tbl_baby_roll_making_coating_side`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_back_side_color_coating`
--
ALTER TABLE `tbl_back_side_color_coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barcode_human_readable_text_to_show`
--
ALTER TABLE `tbl_barcode_human_readable_text_to_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_barcode_orientation`
--
ALTER TABLE `tbl_barcode_orientation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_carbon_option`
--
ALTER TABLE `tbl_carbon_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coating`
--
ALTER TABLE `tbl_coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_coating_thermal`
--
ALTER TABLE `tbl_coating_thermal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_collating_type`
--
ALTER TABLE `tbl_collating_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cost_center`
--
ALTER TABLE `tbl_cost_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_communication`
--
ALTER TABLE `tbl_customer_communication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_delivery_location`
--
ALTER TABLE `tbl_customer_delivery_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_excise_bus_posting_group`
--
ALTER TABLE `tbl_customer_excise_bus_posting_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_export_trade`
--
ALTER TABLE `tbl_customer_export_trade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_general`
--
ALTER TABLE `tbl_customer_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_gen_bus_posting_group`
--
ALTER TABLE `tbl_customer_gen_bus_posting_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_invoicing`
--
ALTER TABLE `tbl_customer_invoicing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_nature_of_service`
--
ALTER TABLE `tbl_customer_nature_of_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_pan_status`
--
ALTER TABLE `tbl_customer_pan_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_payment`
--
ALTER TABLE `tbl_customer_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_payment_method`
--
ALTER TABLE `tbl_customer_payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_posting_group`
--
ALTER TABLE `tbl_customer_posting_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_shipping`
--
ALTER TABLE `tbl_customer_shipping`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_shipping_agent`
--
ALTER TABLE `tbl_customer_shipping_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_shipping_agent_contact`
--
ALTER TABLE `tbl_customer_shipping_agent_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_shipping_method`
--
ALTER TABLE `tbl_customer_shipping_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_tax_information`
--
ALTER TABLE `tbl_customer_tax_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer_vat_bus_posting_group`
--
ALTER TABLE `tbl_customer_vat_bus_posting_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cutting`
--
ALTER TABLE `tbl_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_direction`
--
ALTER TABLE `tbl_direction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_excise`
--
ALTER TABLE `tbl_excise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_film_type`
--
ALTER TABLE `tbl_film_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fron_side_color_coating`
--
ALTER TABLE `tbl_fron_side_color_coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_type`
--
ALTER TABLE `tbl_item_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_material_requirement`
--
ALTER TABLE `tbl_job_card_material_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_paper`
--
ALTER TABLE `tbl_job_card_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_position`
--
ALTER TABLE `tbl_job_card_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_post_press`
--
ALTER TABLE `tbl_job_card_post_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_post_press_packaging_details`
--
ALTER TABLE `tbl_job_card_post_press_packaging_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press`
--
ALTER TABLE `tbl_job_card_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press_28_7`
--
ALTER TABLE `tbl_job_card_press_28_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press_coating`
--
ALTER TABLE `tbl_job_card_press_coating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press_ink_details`
--
ALTER TABLE `tbl_job_card_press_ink_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press_old`
--
ALTER TABLE `tbl_job_card_press_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press_paper`
--
ALTER TABLE `tbl_job_card_press_paper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_press_spare_to_use`
--
ALTER TABLE `tbl_job_card_press_spare_to_use`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_pre_press`
--
ALTER TABLE `tbl_job_card_pre_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_pre_press_color`
--
ALTER TABLE `tbl_job_card_pre_press_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_process_selection_post_press`
--
ALTER TABLE `tbl_job_card_process_selection_post_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_process_selection_press`
--
ALTER TABLE `tbl_job_card_process_selection_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_process_selection_pre_press`
--
ALTER TABLE `tbl_job_card_process_selection_pre_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_specific_details`
--
ALTER TABLE `tbl_job_card_specific_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_card_specific_details_check`
--
ALTER TABLE `tbl_job_card_specific_details_check`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_job_cart`
--
ALTER TABLE `tbl_job_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_machine_master`
--
ALTER TABLE `tbl_machine_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orientation`
--
ALTER TABLE `tbl_orientation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_perforation`
--
ALTER TABLE `tbl_perforation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_plants`
--
ALTER TABLE `tbl_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_plate_type`
--
ALTER TABLE `tbl_plate_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_printing`
--
ALTER TABLE `tbl_printing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_process_master`
--
ALTER TABLE `tbl_process_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_post_press`
--
ALTER TABLE `tbl_product_post_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_press`
--
ALTER TABLE `tbl_product_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_pre_press`
--
ALTER TABLE `tbl_product_pre_press`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rm_category`
--
ALTER TABLE `tbl_rm_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rm_category_old`
--
ALTER TABLE `tbl_rm_category_old`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rm_product_category`
--
ALTER TABLE `tbl_rm_product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rtgs_neft`
--
ALTER TABLE `tbl_rtgs_neft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_salesworkorder`
--
ALTER TABLE `tbl_salesworkorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_salesworkorder_labeling`
--
ALTER TABLE `tbl_salesworkorder_labeling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_salesworkoreder_labeling_printfor`
--
ALTER TABLE `tbl_salesworkoreder_labeling_printfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sales_work_order_unit`
--
ALTER TABLE `tbl_sales_work_order_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sequence`
--
ALTER TABLE `tbl_sequence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_spare`
--
ALTER TABLE `tbl_spare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_style`
--
ALTER TABLE `tbl_style`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tax_structure`
--
ALTER TABLE `tbl_tax_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tax_taxes`
--
ALTER TABLE `tbl_tax_taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tearing`
--
ALTER TABLE `tbl_tearing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_template`
--
ALTER TABLE `tbl_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction_category`
--
ALTER TABLE `tbl_transaction_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transport_location`
--
ALTER TABLE `tbl_transport_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transport_mode`
--
ALTER TABLE `tbl_transport_mode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_condition_categories`
--
ALTER TABLE `terms_condition_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_titles`
--
ALTER TABLE `terms_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_operators`
--
ALTER TABLE `user_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_modules`
--
ALTER TABLE `access_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `access_roles`
--
ALTER TABLE `access_roles`
  MODIFY `arid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `access_role_modules`
--
ALTER TABLE `access_role_modules`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1686;

--
-- AUTO_INCREMENT for table `advance_feature_masters`
--
ALTER TABLE `advance_feature_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `description_masters`
--
ALTER TABLE `description_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fg_entries`
--
ALTER TABLE `fg_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `job_card_types`
--
ALTER TABLE `job_card_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mst_color_master`
--
ALTER TABLE `mst_color_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mst_color_shade`
--
ALTER TABLE `mst_color_shade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mst_countries`
--
ALTER TABLE `mst_countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_country`
--
ALTER TABLE `mst_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `mst_designation`
--
ALTER TABLE `mst_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `mst_gum_make`
--
ALTER TABLE `mst_gum_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mst_ink_make`
--
ALTER TABLE `mst_ink_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `mst_paper_color_shade`
--
ALTER TABLE `mst_paper_color_shade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mst_paper_make`
--
ALTER TABLE `mst_paper_make`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mst_position`
--
ALTER TABLE `mst_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `mst_qc`
--
ALTER TABLE `mst_qc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_quote_type`
--
ALTER TABLE `mst_quote_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `mst_site`
--
ALTER TABLE `mst_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `mst_unit`
--
ALTER TABLE `mst_unit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printer_feature_masters`
--
ALTER TABLE `printer_feature_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printer_masters`
--
ALTER TABLE `printer_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `process_categories`
--
ALTER TABLE `process_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_size_masters`
--
ALTER TABLE `product_size_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proforma_invoices`
--
ALTER TABLE `proforma_invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proforma_locals`
--
ALTER TABLE `proforma_locals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proforma_overses`
--
ALTER TABLE `proforma_overses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proforma_products`
--
ALTER TABLE `proforma_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prospect_masters`
--
ALTER TABLE `prospect_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `quotation_advace_features`
--
ALTER TABLE `quotation_advace_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation_invoice_details`
--
ALTER TABLE `quotation_invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3704;

--
-- AUTO_INCREMENT for table `quotation_masters`
--
ALTER TABLE `quotation_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `quotation_products`
--
ALTER TABLE `quotation_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `quotation_product_items`
--
ALTER TABLE `quotation_product_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `quotation_product_item_multipe_qty_rates`
--
ALTER TABLE `quotation_product_item_multipe_qty_rates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotation_width_mapping`
--
ALTER TABLE `quotation_width_mapping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1415;

--
-- AUTO_INCREMENT for table `sales_masters`
--
ALTER TABLE `sales_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_menus`
--
ALTER TABLE `sub_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tax_structure_masters`
--
ALTER TABLE `tax_structure_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ac_type`
--
ALTER TABLE `tbl_ac_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_baby_roll_making_coating_side`
--
ALTER TABLE `tbl_baby_roll_making_coating_side`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_back_side_color_coating`
--
ALTER TABLE `tbl_back_side_color_coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_barcode_human_readable_text_to_show`
--
ALTER TABLE `tbl_barcode_human_readable_text_to_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_barcode_orientation`
--
ALTER TABLE `tbl_barcode_orientation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_coating`
--
ALTER TABLE `tbl_coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_coating_thermal`
--
ALTER TABLE `tbl_coating_thermal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_cost_center`
--
ALTER TABLE `tbl_cost_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_currency`
--
ALTER TABLE `tbl_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT for table `tbl_customer_communication`
--
ALTER TABLE `tbl_customer_communication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tbl_customer_delivery_location`
--
ALTER TABLE `tbl_customer_delivery_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tbl_customer_excise_bus_posting_group`
--
ALTER TABLE `tbl_customer_excise_bus_posting_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_customer_export_trade`
--
ALTER TABLE `tbl_customer_export_trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `tbl_customer_general`
--
ALTER TABLE `tbl_customer_general`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `tbl_customer_gen_bus_posting_group`
--
ALTER TABLE `tbl_customer_gen_bus_posting_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customer_invoicing`
--
ALTER TABLE `tbl_customer_invoicing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `tbl_customer_nature_of_service`
--
ALTER TABLE `tbl_customer_nature_of_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer_pan_status`
--
ALTER TABLE `tbl_customer_pan_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer_payment`
--
ALTER TABLE `tbl_customer_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `tbl_customer_payment_method`
--
ALTER TABLE `tbl_customer_payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customer_posting_group`
--
ALTER TABLE `tbl_customer_posting_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customer_shipping`
--
ALTER TABLE `tbl_customer_shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `tbl_customer_shipping_agent`
--
ALTER TABLE `tbl_customer_shipping_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tbl_customer_shipping_agent_contact`
--
ALTER TABLE `tbl_customer_shipping_agent_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT for table `tbl_customer_shipping_method`
--
ALTER TABLE `tbl_customer_shipping_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer_tax_information`
--
ALTER TABLE `tbl_customer_tax_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `tbl_customer_vat_bus_posting_group`
--
ALTER TABLE `tbl_customer_vat_bus_posting_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_direction`
--
ALTER TABLE `tbl_direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_excise`
--
ALTER TABLE `tbl_excise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_film_type`
--
ALTER TABLE `tbl_film_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_fron_side_color_coating`
--
ALTER TABLE `tbl_fron_side_color_coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_item_type`
--
ALTER TABLE `tbl_item_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_job_card_material_requirement`
--
ALTER TABLE `tbl_job_card_material_requirement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_job_card_paper`
--
ALTER TABLE `tbl_job_card_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `tbl_job_card_position`
--
ALTER TABLE `tbl_job_card_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `tbl_job_card_post_press`
--
ALTER TABLE `tbl_job_card_post_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_job_card_post_press_packaging_details`
--
ALTER TABLE `tbl_job_card_post_press_packaging_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_job_card_press`
--
ALTER TABLE `tbl_job_card_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `tbl_job_card_press_28_7`
--
ALTER TABLE `tbl_job_card_press_28_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_card_press_coating`
--
ALTER TABLE `tbl_job_card_press_coating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_card_press_ink_details`
--
ALTER TABLE `tbl_job_card_press_ink_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `tbl_job_card_press_old`
--
ALTER TABLE `tbl_job_card_press_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_card_press_paper`
--
ALTER TABLE `tbl_job_card_press_paper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `tbl_job_card_press_spare_to_use`
--
ALTER TABLE `tbl_job_card_press_spare_to_use`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_job_card_pre_press`
--
ALTER TABLE `tbl_job_card_pre_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_job_card_pre_press_color`
--
ALTER TABLE `tbl_job_card_pre_press_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_job_card_process_selection_post_press`
--
ALTER TABLE `tbl_job_card_process_selection_post_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_job_card_process_selection_press`
--
ALTER TABLE `tbl_job_card_process_selection_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_job_card_process_selection_pre_press`
--
ALTER TABLE `tbl_job_card_process_selection_pre_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_job_card_specific_details`
--
ALTER TABLE `tbl_job_card_specific_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_job_card_specific_details_check`
--
ALTER TABLE `tbl_job_card_specific_details_check`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `tbl_job_cart`
--
ALTER TABLE `tbl_job_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `tbl_machine_master`
--
ALTER TABLE `tbl_machine_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_orientation`
--
ALTER TABLE `tbl_orientation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_perforation`
--
ALTER TABLE `tbl_perforation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_plants`
--
ALTER TABLE `tbl_plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_plate_type`
--
ALTER TABLE `tbl_plate_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_printing`
--
ALTER TABLE `tbl_printing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_process_master`
--
ALTER TABLE `tbl_process_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tbl_product_category`
--
ALTER TABLE `tbl_product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_product_post_press`
--
ALTER TABLE `tbl_product_post_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tbl_product_press`
--
ALTER TABLE `tbl_product_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tbl_product_pre_press`
--
ALTER TABLE `tbl_product_pre_press`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `tbl_rm_category`
--
ALTER TABLE `tbl_rm_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_rm_category_old`
--
ALTER TABLE `tbl_rm_category_old`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_rm_product_category`
--
ALTER TABLE `tbl_rm_product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_rtgs_neft`
--
ALTER TABLE `tbl_rtgs_neft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_salesworkorder`
--
ALTER TABLE `tbl_salesworkorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `tbl_salesworkorder_labeling`
--
ALTER TABLE `tbl_salesworkorder_labeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `tbl_salesworkoreder_labeling_printfor`
--
ALTER TABLE `tbl_salesworkoreder_labeling_printfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sales_work_order_unit`
--
ALTER TABLE `tbl_sales_work_order_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_sequence`
--
ALTER TABLE `tbl_sequence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_spare`
--
ALTER TABLE `tbl_spare`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_style`
--
ALTER TABLE `tbl_style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tax`
--
ALTER TABLE `tbl_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `tbl_tax_structure`
--
ALTER TABLE `tbl_tax_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `tbl_tax_taxes`
--
ALTER TABLE `tbl_tax_taxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_template`
--
ALTER TABLE `tbl_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_transaction_category`
--
ALTER TABLE `tbl_transaction_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_transport`
--
ALTER TABLE `tbl_transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_transport_location`
--
ALTER TABLE `tbl_transport_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_transport_mode`
--
ALTER TABLE `tbl_transport_mode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `terms_condition_categories`
--
ALTER TABLE `terms_condition_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `terms_titles`
--
ALTER TABLE `terms_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_operators`
--
ALTER TABLE `user_operators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
