/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.10-MariaDB : Database - dev_erp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dev_erp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `dev_erp`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_04_01_101936_create_countries_table',1),(6,'2022_04_01_102228_create_mst_countries_table',1),(7,'2023_02_08_102908_create_prospect_masters_table',1),(8,'2023_02_13_063555_create_taxes_table',1),(9,'2023_02_13_114858_create_quotation_masters_table',1),(10,'2023_02_17_065812_create_quotation_products_table',1),(11,'2023_02_17_081149_create_terms_conditions_table',1),(12,'2023_02_17_095102_create_terms_condition_categories_table',1),(13,'2023_02_17_095733_create_terms_titles_table',1),(14,'2023_02_21_093841_create_quotation_product_items_table',1),(15,'2023_03_03_042757_create_sales_masters_table',1),(16,'2023_03_08_104040_create_description_masters_table',1),(17,'2023_03_08_112840_create_sub_menus_table',1),(18,'2023_03_08_112916_create_menu_items_table',1),(19,'2023_04_07_123724_create_product_size_masters_table',1),(20,'2023_04_10_100133_create_tax_structure_masters_table',1),(21,'2023_04_12_112354_create_proforma_invoices_table',1),(22,'2023_04_13_063009_create_job_card_types_table',1),(23,'2023_04_19_111123_create_proforma_overses_table',1),(24,'2023_04_19_111218_create_proforma_locals_table',1),(25,'2023_04_19_111241_create_proforma_products_table',1),(26,'2023_04_27_065134_create_fg_entries_table',1),(27,'2023_04_27_102919_create_user_operators_table',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
