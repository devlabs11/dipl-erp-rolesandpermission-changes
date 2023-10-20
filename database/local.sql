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

/*Table structure for table `access_modules` */

DROP TABLE IF EXISTS `access_modules`;

CREATE TABLE `access_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulegroup` text NOT NULL,
  `modulelabel` text NOT NULL,
  `modulename` varchar(80) NOT NULL,
  `module_sort` mediumint(9) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `menu_icon` varchar(40) DEFAULT NULL,
  `sub_icon` varchar(30) DEFAULT NULL,
  `is_sub_menu` tinyint(1) NOT NULL DEFAULT 0,
  `main_module` varchar(55) DEFAULT NULL,
  `sub_module` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

/*Data for the table `access_modules` */

insert  into `access_modules`(`id`,`modulegroup`,`modulelabel`,`modulename`,`module_sort`,`status`,`menu_icon`,`sub_icon`,`is_sub_menu`,`main_module`,`sub_module`) values (6,'user','User','Users',1,1,NULL,NULL,0,'Master','User Setup'),(7,'role','Role','Role',1,1,NULL,NULL,0,'Master','User Setup'),(15,'country','country','Country',1,1,NULL,NULL,0,'Master','General Setup'),(16,'state','state','State',1,1,NULL,NULL,0,'Master','General Setup'),(17,'city','city','City',1,1,NULL,NULL,0,'Master','General Setup'),(18,'site','site','Site',1,1,NULL,NULL,0,'Master','Company Setup'),(19,'designation','designation','Designation',1,1,NULL,NULL,0,'Master','User Setup'),(20,'position','position','Position',1,1,NULL,NULL,0,'Master','User Setup'),(21,'quotation_type','quotation_type','Quotation Type',1,1,NULL,NULL,0,NULL,NULL),(22,'quotation','quotation','Quotation',1,1,NULL,NULL,0,'Sales',NULL),(24,'ink_make','ink_make','Ink Make',1,1,NULL,NULL,0,'Master','Job Order Setup'),(25,'paper_make','paper_make','Paper Make',1,1,NULL,NULL,0,'Master','Job Order Setup'),(26,'color_shade','color_shade','Color Shade',1,1,NULL,NULL,0,'Master','Job Order Setup'),(27,'gum_make','gum_make','Gum Make',1,1,NULL,NULL,0,'Master','Job Order Setup'),(28,'color_master','color_master','Color Master',1,1,NULL,NULL,0,'Master','Job Order Setup'),(29,'paper_color_shade','paper_color_shade','Paper Color Shade',1,1,NULL,NULL,0,'Master','Job Order Setup'),(30,'excise','excise','Excise',1,1,NULL,NULL,0,'Master','Accounts Setup'),(31,'product_category','product_category','Product Category',1,1,NULL,NULL,0,'Master','Job Order Setup'),(32,'process','process','Process',1,1,NULL,NULL,0,'Master','Production Process Setup'),(33,'company','company','Company',1,1,NULL,NULL,0,'Master','Company Setup'),(34,'machine','machine','Machine',1,1,NULL,NULL,0,'Master','Machine Setup'),(35,'unit','unit','Unit',1,1,NULL,NULL,0,'Master','Material Setup'),(36,'rm_category','rm_category','Rm Category',1,1,NULL,NULL,0,'Master','Material Setup'),(37,'rm_product_category','rm_product_category','Rm Product Category',1,1,NULL,NULL,0,'Master','Material Setup'),(38,'qcmaster','qcmaster','Qc Master',1,1,NULL,NULL,0,'Master','Production Process Setup'),(39,'material','material','Material',1,1,NULL,NULL,0,'Master','Material Setup'),(40,'product','product','Product',1,1,NULL,NULL,0,'Master','Job Order Setup'),(41,'spare','spare','Spare',1,1,NULL,NULL,0,'Master','Material Setup'),(43,'Manage Job Cards','manage_job_cards','Manage Job Cards',1,1,NULL,NULL,0,'Jobs',''),(44,'customer','customer','Customer',1,1,NULL,NULL,0,'Master','Party Setup'),(45,'tax','tax','Tax',1,1,NULL,NULL,0,'Master','Accounts Setup'),(46,'transport','Transport','Transport',1,1,NULL,NULL,0,'Master','Party Setup'),(47,'Manage Sales Work Order','manage_sales_work_order','Manage Sales Work Order',1,1,NULL,NULL,0,'Jobs',''),(48,'prospect-master','Prospect Master','prospect-master',1,1,NULL,NULL,0,'Master','Party Setup');

/*Table structure for table `access_role_modules` */

DROP TABLE IF EXISTS `access_role_modules`;

CREATE TABLE `access_role_modules` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) NOT NULL DEFAULT 0,
  `moduleid` int(11) NOT NULL DEFAULT 0,
  `allow_access` tinyint(1) NOT NULL DEFAULT 0,
  `allow_add` tinyint(1) NOT NULL DEFAULT 0,
  `allow_view` tinyint(1) NOT NULL DEFAULT 0,
  `allow_edit` tinyint(1) NOT NULL DEFAULT 0,
  `allow_delete` tinyint(1) NOT NULL DEFAULT 0,
  `allow_print` tinyint(1) NOT NULL DEFAULT 0,
  `allow_import` tinyint(1) NOT NULL DEFAULT 0,
  `allow_export` tinyint(1) NOT NULL DEFAULT 0,
  `allow_viewall` tinyint(1) NOT NULL DEFAULT 0,
  `allow_viewgroups` text DEFAULT NULL,
  `allow_viewusers` text DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `addedby` int(11) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `allow_duplicate` tinyint(4) DEFAULT 0,
  `allow_print_with_hf` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=1788 DEFAULT CHARSET=utf8mb4;

/*Data for the table `access_role_modules` */

insert  into `access_role_modules`(`rid`,`roleid`,`moduleid`,`allow_access`,`allow_add`,`allow_view`,`allow_edit`,`allow_delete`,`allow_print`,`allow_import`,`allow_export`,`allow_viewall`,`allow_viewgroups`,`allow_viewusers`,`addeddate`,`addedby`,`modifieddate`,`modifiedby`,`allow_duplicate`,`allow_print_with_hf`) values (144,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(145,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(146,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(147,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(148,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(149,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(150,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(151,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(152,27,6,1,1,0,0,0,0,0,0,0,NULL,NULL,'2022-04-29 12:04:38',1,NULL,NULL,NULL,0),(297,32,6,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(298,32,7,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(299,32,15,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(300,32,16,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(301,32,17,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(302,32,18,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(303,32,19,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(304,32,20,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(305,32,21,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(364,31,6,1,1,1,0,0,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(365,31,7,1,1,1,0,0,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(366,31,15,1,1,1,0,0,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(367,31,16,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(368,31,17,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(369,31,18,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(370,31,19,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(371,31,20,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(372,31,21,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(373,31,22,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-10 07:05:47',1,NULL,NULL,NULL,0),(425,26,6,0,0,0,0,0,0,0,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(426,26,7,0,0,0,0,0,0,0,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(427,26,15,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(428,26,16,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(429,26,17,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(430,26,18,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(431,26,19,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(432,26,20,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(433,26,21,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(434,26,22,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(435,26,24,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(436,26,25,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(437,26,26,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(438,26,27,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(439,26,28,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(440,26,29,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(441,26,30,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-05-16 06:05:37',1,NULL,NULL,NULL,0),(442,33,6,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(443,33,7,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(444,33,15,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(445,33,16,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(446,33,17,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(447,33,18,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(448,33,19,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(449,33,20,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(450,33,21,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(451,33,22,1,1,1,1,1,1,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(452,33,24,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(453,33,25,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(454,33,26,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(455,33,27,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(456,33,28,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(457,33,29,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(458,33,30,1,1,1,1,1,0,0,0,0,NULL,NULL,'2022-05-16 07:05:15',1,NULL,NULL,NULL,0),(1116,36,6,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1117,36,7,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1118,36,15,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1119,36,16,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1120,36,17,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1121,36,18,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1122,36,19,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1123,36,20,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1124,36,21,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1125,36,22,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1126,36,24,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1127,36,25,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1128,36,26,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1129,36,27,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1130,36,28,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1131,36,29,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1132,36,30,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1133,36,31,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1134,36,32,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1135,36,33,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1136,36,34,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1137,36,35,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1138,36,36,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1139,36,37,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1140,36,38,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1141,36,39,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1142,36,40,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1143,36,41,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1144,36,43,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-08-06 11:08:43',1,NULL,NULL,0,0),(1324,37,6,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1325,37,7,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1326,37,15,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1327,37,16,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1328,37,17,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1329,37,18,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1330,37,19,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1331,37,20,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1332,37,21,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1333,37,22,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,1,1),(1334,37,24,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1335,37,25,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1336,37,26,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1337,37,27,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1338,37,28,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1339,37,29,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1340,37,30,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1341,37,31,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1342,37,32,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1343,37,33,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1344,37,34,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1345,37,35,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1346,37,36,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1347,37,37,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1348,37,38,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1349,37,39,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1350,37,40,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1351,37,41,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1352,37,43,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,1,1),(1353,37,44,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1354,37,45,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1355,37,46,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-10-11 05:10:35',1,NULL,NULL,0,0),(1487,30,6,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1488,30,7,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1489,30,15,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1490,30,16,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1491,30,17,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1492,30,18,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1493,30,19,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1494,30,20,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1495,30,21,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1496,30,22,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1497,30,24,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1498,30,25,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1499,30,26,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1500,30,27,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1501,30,28,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1502,30,29,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1503,30,30,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1504,30,31,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1505,30,32,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1506,30,33,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1507,30,34,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1508,30,35,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1509,30,36,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1510,30,37,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1511,30,38,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1512,30,39,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1513,30,40,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1514,30,41,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1515,30,43,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,1,1),(1516,30,44,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1517,30,45,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1518,30,46,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,0,0),(1519,30,47,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-02 09:12:47',1,NULL,NULL,1,1),(1652,25,6,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1653,25,7,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1654,25,15,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1655,25,16,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1656,25,17,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1657,25,18,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1658,25,19,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1659,25,20,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1660,25,21,0,0,0,0,0,0,0,0,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1661,25,22,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,1,1),(1662,25,24,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1663,25,25,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1664,25,26,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1665,25,27,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1666,25,28,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1667,25,29,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1668,25,30,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1669,25,31,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1670,25,32,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1671,25,33,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1672,25,34,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1673,25,35,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1674,25,36,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1675,25,37,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1676,25,38,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1677,25,39,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1678,25,40,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1679,25,41,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1680,25,43,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,1,1),(1681,25,44,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1682,25,45,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1683,25,46,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,0,0),(1684,25,47,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-12-05 09:12:04',1,NULL,NULL,1,1),(1685,25,48,1,1,1,1,1,1,1,1,0,NULL,NULL,'2022-05-06 12:05:05',1,NULL,NULL,NULL,0),(1686,35,6,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1687,35,7,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1688,35,15,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1689,35,16,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1690,35,17,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1691,35,18,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1692,35,19,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1693,35,20,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1694,35,21,0,0,0,0,0,0,0,0,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1695,35,22,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,1,1),(1696,35,24,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1697,35,25,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1698,35,26,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1699,35,27,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1700,35,28,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1701,35,29,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1702,35,30,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1703,35,31,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1704,35,32,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1705,35,33,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1706,35,34,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1707,35,35,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1708,35,36,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1709,35,37,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1710,35,38,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1711,35,39,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1712,35,40,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1713,35,41,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1714,35,43,0,0,0,0,0,0,0,0,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1715,35,44,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1716,35,45,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1717,35,46,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1718,35,47,0,0,0,0,0,0,0,0,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1719,35,48,0,0,0,0,0,0,0,0,0,NULL,NULL,'2023-04-03 10:04:11',1,NULL,NULL,0,0),(1754,34,6,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1755,34,7,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1756,34,15,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1757,34,16,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1758,34,17,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1759,34,18,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1760,34,19,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1761,34,20,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1762,34,21,0,0,0,0,0,0,0,0,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1763,34,22,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,1,1),(1764,34,24,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1765,34,25,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1766,34,26,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1767,34,27,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1768,34,28,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1769,34,29,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1770,34,30,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1771,34,31,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1772,34,32,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1773,34,33,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1774,34,34,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1775,34,35,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1776,34,36,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1777,34,37,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1778,34,38,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1779,34,39,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1780,34,40,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1781,34,41,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1782,34,43,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,1,1),(1783,34,44,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1784,34,45,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1785,34,46,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0),(1786,34,47,1,1,1,1,1,1,1,1,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,1,1),(1787,34,48,0,0,0,0,0,0,0,0,0,NULL,NULL,'2023-04-18 06:04:05',1,NULL,NULL,0,0);

/*Table structure for table `access_roles` */

DROP TABLE IF EXISTS `access_roles`;

CREATE TABLE `access_roles` (
  `arid` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `addedby` int(11) DEFAULT NULL,
  `modifieddate` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `rolename` varchar(40) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `staff` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  PRIMARY KEY (`arid`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

/*Data for the table `access_roles` */

insert  into `access_roles`(`arid`,`unique_id`,`addeddate`,`addedby`,`modifieddate`,`modifiedby`,`rolename`,`description`,`status`,`staff`,`deleted`) values (25,NULL,'2022-04-28 04:04:23',0,'2022-12-05 09:12:04',0,'Admin','Admin',1,NULL,NULL),(34,NULL,'2022-06-13 10:06:13',0,'2023-04-18 06:04:05',0,'BackOffice-Quotation','BackOffice-Quotation',1,NULL,NULL),(35,NULL,'2022-06-20 09:06:38',0,'2023-04-03 10:04:11',0,'Sales','Sale role',1,NULL,NULL);

/*Table structure for table `advance_feature_masters` */

DROP TABLE IF EXISTS `advance_feature_masters`;

CREATE TABLE `advance_feature_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_id` bigint(20) DEFAULT NULL COMMENT 'tbl_currency Table id',
  `price` decimal(8,2) DEFAULT 0.00,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `advance_feature_masters` */

insert  into `advance_feature_masters`(`id`,`name`,`currency_id`,`price`,`created_by`,`updated_by`,`deleted_by`,`deleted_at`,`created_at`,`updated_at`) values (1,'Invisible UV Ink - Logo / Signature',5,'3.00',9,NULL,NULL,NULL,'2023-05-24 09:17:45','2023-05-24 09:23:23'),(2,'Hot Foil',NULL,NULL,9,NULL,NULL,NULL,'2023-05-24 09:23:50','2023-05-24 09:23:50');

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `companies` */

/*Table structure for table `description_masters` */

DROP TABLE IF EXISTS `description_masters`;

CREATE TABLE `description_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `description_masters` */

insert  into `description_masters`(`id`,`text`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`,`created_at`,`updated_at`) values (26,'size',NULL,9,NULL,NULL,'2023-05-25 04:42:06','2023-05-25 04:42:06');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `hash` */

DROP TABLE IF EXISTS `hash`;

CREATE TABLE `hash` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `hash` */

insert  into `hash`(`username`,`password`,`email`) values ('mw123@gmail.com','mw123@gmail.com','mw123@gmail.com'),('mw123@gmail.com','mw123@gmail.com','mw123@gmail.com');

/*Table structure for table `master` */

DROP TABLE IF EXISTS `master`;

CREATE TABLE `master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `tbl_name` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `master` */

insert  into `master`(`id`,`unique_id`,`title`,`tbl_name`,`status`) values (1,NULL,'Country','mst_country',1),(2,NULL,'Site','mst_site',1),(3,NULL,'Designation','mst_designation',1),(4,NULL,'Position','mst_position',1),(5,NULL,'Quote Type','mst_quote_type',1),(6,NULL,'Ink Make','mst_ink_make',1),(7,NULL,'Paper Make','mst_paper_make',1),(8,NULL,'Color Shade','mst_color_shade',1),(9,NULL,'Gum Make','mst_gum_make',1),(10,NULL,'Color Master','mst_color_master',1),(11,NULL,'Paper Color Shade','mst_paper_color_shade',1);

/*Table structure for table `menu_items` */

DROP TABLE IF EXISTS `menu_items`;

CREATE TABLE `menu_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sub_menu_id` bigint(20) NOT NULL DEFAULT 0 COMMENT 'sub_menus id',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `menu_items` */

insert  into `menu_items`(`id`,`sub_menu_id`,`text`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`,`created_at`,`updated_at`) values (43,101,'3',NULL,9,NULL,NULL,'2023-05-25 04:43:54','2023-05-25 04:43:54');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (31,'2014_10_12_000000_create_users_table',1),(32,'2014_10_12_100000_create_password_resets_table',1),(33,'2019_08_19_000000_create_failed_jobs_table',1),(34,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `mst_color_master` */

DROP TABLE IF EXISTS `mst_color_master`;

CREATE TABLE `mst_color_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_color_master` */

insert  into `mst_color_master`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'CL/1','val','black',NULL,1,28,'2023-04-12 05:04:35',NULL,NULL,0),(2,'CL/2','val','red',NULL,1,28,'2023-04-12 05:04:42',NULL,NULL,0),(3,'CL/3','val','yellow',NULL,1,28,'2023-04-12 05:04:48',NULL,NULL,0),(4,'CL/4','val','magenta',NULL,1,28,'2023-04-12 05:04:57',NULL,NULL,0),(5,'CL/5','val','green',NULL,1,28,'2023-04-12 05:04:03',NULL,NULL,0),(6,'CL/6','val','invisible',NULL,1,28,'2023-04-12 05:04:10',NULL,NULL,0),(7,'CL/7','val','hot spot carbon',NULL,1,28,'2023-04-12 05:04:21',NULL,NULL,0),(8,'CL/8','val','DARK BLUE',NULL,1,25,'2023-04-18 12:04:44',NULL,NULL,0),(9,'CL/9','val','LIGHT BLUE',NULL,1,25,'2023-04-18 12:04:53',NULL,NULL,0),(12,'CL/12','val','INVISIBLE YELLOW',NULL,1,25,'2023-04-18 12:04:42',NULL,NULL,0),(13,'CL/13','val','BROWN',NULL,1,25,'2023-04-18 12:04:55',NULL,NULL,0),(14,'CL/14','val','NAVY BLUE',NULL,1,25,'2023-04-18 12:04:13',NULL,NULL,0),(15,'CL/15','val','colors',NULL,1,9,'2023-05-03 12:05:12',NULL,NULL,0);

/*Table structure for table `mst_color_shade` */

DROP TABLE IF EXISTS `mst_color_shade`;

CREATE TABLE `mst_color_shade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_color_shade` */

insert  into `mst_color_shade`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'CS/1','val','black',NULL,1,28,'2023-04-12 05:04:30',NULL,NULL,0),(2,'CS/2','val','yellow',NULL,1,28,'2023-04-12 05:04:37',NULL,NULL,0),(3,'CS/3','val','magenta',NULL,1,28,'2023-04-12 05:04:44',NULL,NULL,0),(4,'CS/4','val','green',NULL,1,28,'2023-04-12 05:04:52',NULL,NULL,0),(5,'CS/5','val','invisible yellow',NULL,1,28,'2023-04-12 05:04:03',NULL,NULL,0),(6,'CS/6','val','invisible blue',NULL,1,28,'2023-04-12 05:04:12',NULL,NULL,0),(7,'CS/7','val','red',NULL,1,9,'2023-05-03 12:05:01',NULL,NULL,0);

/*Table structure for table `mst_country` */

DROP TABLE IF EXISTS `mst_country`;

CREATE TABLE `mst_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_country` */

insert  into `mst_country`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'AFG','AF','Afghanistan',NULL,1,NULL,NULL,NULL,NULL,0),(2,'ALA','AX','Aland Islands',NULL,1,NULL,NULL,NULL,NULL,0),(3,'ALB','AL','Albania',NULL,1,NULL,NULL,NULL,NULL,0),(4,'DZA','DZ','Algeria',NULL,1,NULL,NULL,NULL,NULL,0),(5,'ASM','AS','American Samoa',NULL,1,NULL,NULL,NULL,NULL,0),(6,'AND','AD','Andorra',NULL,1,NULL,NULL,NULL,NULL,0),(7,'AGO','AO','Angola',NULL,1,NULL,NULL,NULL,NULL,0),(8,'AIA','AI','Anguilla',NULL,1,NULL,NULL,NULL,NULL,0),(9,'ATA','AQ','Antarctica',NULL,1,NULL,NULL,NULL,NULL,0),(10,'ATG','AG','Antigua and Barbuda',NULL,1,NULL,NULL,NULL,NULL,0),(11,'ARG','AR','Argentina',NULL,1,NULL,NULL,NULL,NULL,0),(12,'ARM','AM','Armenia',NULL,1,NULL,NULL,NULL,NULL,0),(13,'ABW','AW','Aruba',NULL,1,NULL,NULL,NULL,NULL,0),(14,'AUS','AU','Australia',NULL,1,NULL,NULL,NULL,NULL,0),(15,'AUT','AT','Austria',NULL,1,NULL,NULL,NULL,NULL,0),(16,'AZE','AZ','Azerbaijan',NULL,1,NULL,NULL,NULL,NULL,0),(17,'BHS','BS','Bahamas',NULL,1,NULL,NULL,NULL,NULL,0),(18,'BHR','BH','Bahrain',NULL,1,NULL,NULL,NULL,NULL,0),(19,'BGD','BD','Bangladesh',NULL,1,NULL,NULL,NULL,NULL,0),(20,'BRB','BB','Barbados',NULL,1,NULL,NULL,NULL,NULL,0),(21,'BLR','BY','Belarus',NULL,1,NULL,NULL,NULL,NULL,0),(22,'BEL','BE','Belgium',NULL,1,NULL,NULL,NULL,NULL,0),(23,'BLZ','BZ','Belize',NULL,1,NULL,NULL,NULL,NULL,0),(24,'BEN','BJ','Benin',NULL,1,NULL,NULL,NULL,NULL,0),(25,'BMU','BM','Bermuda',NULL,1,NULL,NULL,NULL,NULL,0),(26,'BTN','BT','Bhutan',NULL,1,NULL,NULL,NULL,NULL,0),(27,'BOL','BO','Bolivia',NULL,1,NULL,NULL,NULL,NULL,0),(28,'BES','BQ','Bonaire, Sint Eustatius and Saba',NULL,1,NULL,NULL,NULL,NULL,0),(29,'BIH','BA','Bosnia and Herzegovina',NULL,1,NULL,NULL,NULL,NULL,0),(30,'BWA','BW','Botswana',NULL,1,NULL,NULL,NULL,NULL,0),(31,'BVT','BV','Bouvet Island',NULL,1,NULL,NULL,NULL,NULL,0),(32,'BRA','BR','Brazil',NULL,1,NULL,NULL,NULL,NULL,0),(33,'IOT','IO','British Indian Ocean Territory',NULL,1,NULL,NULL,NULL,NULL,0),(34,'BRN','BN','Brunei Darussalam',NULL,1,NULL,NULL,NULL,NULL,0),(35,'BGR','BG','Bulgaria',NULL,1,NULL,NULL,NULL,NULL,0),(36,'BFA','BF','Burkina Faso',NULL,1,NULL,NULL,NULL,NULL,0),(37,'BDI','BI','Burundi',NULL,1,NULL,NULL,NULL,NULL,0),(38,'KHM','KH','Cambodia',NULL,1,NULL,NULL,NULL,NULL,0),(39,'CMR','CM','Cameroon',NULL,1,NULL,NULL,NULL,NULL,0),(40,'CAN','CA','Canada',NULL,1,NULL,NULL,NULL,NULL,0),(41,'CPV','CV','Cape Verde',NULL,1,NULL,NULL,NULL,NULL,0),(42,'CYM','KY','Cayman Islands',NULL,1,NULL,NULL,NULL,NULL,0),(43,'CAF','CF','Central African Republic',NULL,1,NULL,NULL,NULL,NULL,0),(44,'TCD','TD','Chad',NULL,1,NULL,NULL,NULL,NULL,0),(45,'CHL','CL','Chile',NULL,1,NULL,NULL,NULL,NULL,0),(46,'CHN','CN','China',NULL,1,NULL,NULL,NULL,NULL,0),(47,'CXR','CX','Christmas Island',NULL,1,NULL,NULL,NULL,NULL,0),(48,'CCK','CC','Cocos (Keeling) Islands',NULL,1,NULL,NULL,NULL,NULL,0),(49,'COL','CO','Colombia',NULL,1,NULL,NULL,NULL,NULL,0),(50,'COM','KM','Comoros',NULL,1,NULL,NULL,NULL,NULL,0),(51,'COG','CG','Congo',NULL,1,NULL,NULL,NULL,NULL,0),(52,'COD','CD','Congo, Democratic Republic of the Congo',NULL,1,NULL,NULL,NULL,NULL,0),(53,'COK','CK','Cook Islands',NULL,1,NULL,NULL,NULL,NULL,0),(54,'CRI','CR','Costa Rica',NULL,1,NULL,NULL,NULL,NULL,0),(55,'CIV','CI','Cote D\'Ivoire',NULL,1,NULL,NULL,NULL,NULL,0),(56,'HRV','HR','Croatia',NULL,1,NULL,NULL,NULL,NULL,0),(57,'CUB','CU','Cuba',NULL,1,NULL,NULL,NULL,NULL,0),(58,'CUW','CW','Curacao',NULL,1,NULL,NULL,NULL,NULL,0),(59,'CYP','CY','Cyprus',NULL,1,NULL,NULL,NULL,NULL,0),(60,'CZE','CZ','Czech Republic',NULL,1,NULL,NULL,NULL,NULL,0),(61,'DNK','DK','Denmark',NULL,1,NULL,NULL,NULL,NULL,0),(62,'DJI','DJ','Djibouti',NULL,1,NULL,NULL,NULL,NULL,0),(63,'DMA','DM','Dominica',NULL,1,NULL,NULL,NULL,NULL,0),(64,'DOM','DO','Dominican Republic',NULL,1,NULL,NULL,NULL,NULL,0),(65,'ECU','EC','Ecuador',NULL,1,NULL,NULL,NULL,NULL,0),(66,'EGY','EG','Egypt',NULL,1,NULL,NULL,NULL,NULL,0),(67,'SLV','SV','El Salvador',NULL,1,NULL,NULL,NULL,NULL,0),(68,'GNQ','GQ','Equatorial Guinea',NULL,1,NULL,NULL,NULL,NULL,0),(69,'ERI','ER','Eritrea',NULL,1,NULL,NULL,NULL,NULL,0),(70,'EST','EE','Estonia',NULL,1,NULL,NULL,NULL,NULL,0),(71,'ETH','ET','Ethiopia',NULL,1,NULL,NULL,NULL,NULL,0),(72,'FLK','FK','Falkland Islands (Malvinas)',NULL,1,NULL,NULL,NULL,NULL,0),(73,'FRO','FO','Faroe Islands',NULL,1,NULL,NULL,NULL,NULL,0),(74,'FJI','FJ','Fiji',NULL,1,NULL,NULL,NULL,NULL,0),(75,'FIN','FI','Finland',NULL,1,NULL,NULL,NULL,NULL,0),(76,'FRA','FR','France',NULL,1,NULL,NULL,NULL,NULL,0),(77,'GUF','GF','French Guiana',NULL,1,NULL,NULL,NULL,NULL,0),(78,'PYF','PF','French Polynesia',NULL,1,NULL,NULL,NULL,NULL,0),(79,'ATF','TF','French Southern Territories',NULL,1,NULL,NULL,NULL,NULL,0),(80,'GAB','GA','Gabon',NULL,1,NULL,NULL,NULL,NULL,0),(81,'GMB','GM','Gambia',NULL,1,NULL,NULL,NULL,NULL,0),(82,'GEO','GE','Georgia',NULL,1,NULL,NULL,NULL,NULL,0),(83,'DEU','DE','Germany',NULL,1,NULL,NULL,NULL,NULL,0),(84,'GHA','GH','Ghana',NULL,1,NULL,NULL,NULL,NULL,0),(85,'GIB','GI','Gibraltar',NULL,1,NULL,NULL,NULL,NULL,0),(86,'GRC','GR','Greece',NULL,1,NULL,NULL,NULL,NULL,0),(87,'GRL','GL','Greenland',NULL,1,NULL,NULL,NULL,NULL,0),(88,'GRD','GD','Grenada',NULL,1,NULL,NULL,NULL,NULL,0),(89,'GLP','GP','Guadeloupe',NULL,1,NULL,NULL,NULL,NULL,0),(90,'GUM','GU','Guam',NULL,1,NULL,NULL,NULL,NULL,0),(91,'GTM','GT','Guatemala',NULL,1,NULL,NULL,NULL,NULL,0),(92,'GGY','GG','Guernsey',NULL,1,NULL,NULL,NULL,NULL,0),(93,'GIN','GN','Guinea',NULL,1,NULL,NULL,NULL,NULL,0),(94,'GNB','GW','Guinea-Bissau',NULL,1,NULL,NULL,NULL,NULL,0),(95,'GUY','GY','Guyana',NULL,1,NULL,NULL,NULL,NULL,0),(96,'HTI','HT','Haiti',NULL,1,NULL,NULL,NULL,NULL,0),(97,'HMD','HM','Heard Island and Mcdonald Islands',NULL,1,NULL,NULL,NULL,NULL,0),(98,'VAT','VA','Holy See (Vatican City State)',NULL,1,NULL,NULL,NULL,NULL,0),(99,'HND','HN','Honduras',NULL,1,NULL,NULL,NULL,NULL,0),(100,'HKG','HK','Hong Kong',NULL,1,NULL,NULL,NULL,NULL,0),(101,'HUN','HU','Hungary',NULL,1,NULL,NULL,NULL,NULL,0),(102,'ISL','IS','Iceland',NULL,1,NULL,NULL,NULL,NULL,0),(103,'IND','IN','India',NULL,1,NULL,NULL,NULL,NULL,0),(104,'IDN','ID','Indonesia',NULL,1,NULL,NULL,NULL,NULL,0),(105,'IRN','IR','Iran, Islamic Republic of',NULL,1,NULL,NULL,NULL,NULL,0),(106,'IRQ','IQ','Iraq',NULL,1,NULL,NULL,NULL,NULL,0),(107,'IRL','IE','Ireland',NULL,1,NULL,NULL,NULL,NULL,0),(108,'IMN','IM','Isle of Man',NULL,1,NULL,NULL,NULL,NULL,0),(109,'ISR','IL','Israel',NULL,1,NULL,NULL,NULL,NULL,0),(110,'ITA','IT','Italy',NULL,1,NULL,NULL,NULL,NULL,0),(111,'JAM','JM','Jamaica',NULL,1,NULL,NULL,NULL,NULL,0),(112,'JPN','JP','Japan',NULL,1,NULL,NULL,NULL,NULL,0),(113,'JEY','JE','Jersey',NULL,1,NULL,NULL,NULL,NULL,0),(114,'JOR','JO','Jordan',NULL,1,NULL,NULL,NULL,NULL,0),(115,'KAZ','KZ','Kazakhstan',NULL,1,NULL,NULL,NULL,NULL,0),(116,'KEN','KE','Kenya',NULL,1,NULL,NULL,NULL,NULL,0),(117,'KIR','KI','Kiribati',NULL,1,NULL,NULL,NULL,NULL,0),(118,'PRK','KP','Korea, Democratic People\'s Republic of',NULL,1,NULL,NULL,NULL,NULL,0),(119,'KOR','KR','Korea, Republic of',NULL,1,NULL,NULL,NULL,NULL,0),(120,'XKX','XK','Kosovo',NULL,1,NULL,NULL,NULL,NULL,0),(121,'KWT','KW','Kuwait',NULL,1,NULL,NULL,NULL,NULL,0),(122,'KGZ','KG','Kyrgyzstan',NULL,1,NULL,NULL,NULL,NULL,0),(123,'LAO','LA','Lao People\'s Democratic Republic',NULL,1,NULL,NULL,NULL,NULL,0),(124,'LVA','LV','Latvia',NULL,1,NULL,NULL,NULL,NULL,0),(125,'LBN','LB','Lebanon',NULL,1,NULL,NULL,NULL,NULL,0),(126,'LSO','LS','Lesotho',NULL,1,NULL,NULL,NULL,NULL,0),(127,'LBR','LR','Liberia',NULL,1,NULL,NULL,NULL,NULL,0),(128,'LBY','LY','Libyan Arab Jamahiriya',NULL,1,NULL,NULL,NULL,NULL,0),(129,'LIE','LI','Liechtenstein',NULL,1,NULL,NULL,NULL,NULL,0),(130,'LTU','LT','Lithuania',NULL,1,NULL,NULL,NULL,NULL,0),(131,'LUX','LU','Luxembourg',NULL,1,NULL,NULL,NULL,NULL,0),(132,'MAC','MO','Macao',NULL,1,NULL,NULL,NULL,NULL,0),(133,'MKD','MK','Macedonia, the Former Yugoslav Republic of',NULL,1,NULL,NULL,NULL,NULL,0),(134,'MDG','MG','Madagascar',NULL,1,NULL,NULL,NULL,NULL,0),(135,'MWI','MW','Malawi',NULL,1,NULL,NULL,NULL,NULL,0),(136,'MYS','MY','Malaysia',NULL,1,NULL,NULL,NULL,NULL,0),(137,'MDV','MV','Maldives',NULL,1,NULL,NULL,NULL,NULL,0),(138,'MLI','ML','Mali',NULL,1,NULL,NULL,NULL,NULL,0),(139,'MLT','MT','Malta',NULL,1,NULL,NULL,NULL,NULL,0),(140,'MHL','MH','Marshall Islands',NULL,1,NULL,NULL,NULL,NULL,0),(141,'MTQ','MQ','Martinique',NULL,1,NULL,NULL,NULL,NULL,0),(142,'MRT','MR','Mauritania',NULL,1,NULL,NULL,NULL,NULL,0),(143,'MUS','MU','Mauritius',NULL,1,NULL,NULL,NULL,NULL,0),(144,'MYT','YT','Mayotte',NULL,1,NULL,NULL,NULL,NULL,0),(145,'MEX','MX','Mexico',NULL,1,NULL,NULL,NULL,NULL,0),(146,'FSM','FM','Micronesia, Federated States of',NULL,1,NULL,NULL,NULL,NULL,0),(147,'MDA','MD','Moldova, Republic of',NULL,1,NULL,NULL,NULL,NULL,0),(148,'MCO','MC','Monaco',NULL,1,NULL,NULL,NULL,NULL,0),(149,'MNG','MN','Mongolia',NULL,1,NULL,NULL,NULL,NULL,0),(150,'MNE','ME','Montenegro',NULL,1,NULL,NULL,NULL,NULL,0),(151,'MSR','MS','Montserrat',NULL,1,NULL,NULL,NULL,NULL,0),(152,'MAR','MA','Morocco',NULL,1,NULL,NULL,NULL,NULL,0),(153,'MOZ','MZ','Mozambique',NULL,1,NULL,NULL,NULL,NULL,0),(154,'MMR','MM','Myanmar',NULL,1,NULL,NULL,NULL,NULL,0),(155,'NAM','NA','Namibia',NULL,1,NULL,NULL,NULL,NULL,0),(156,'NRU','NR','Nauru',NULL,1,NULL,NULL,NULL,NULL,0),(157,'NPL','NP','Nepal',NULL,1,NULL,NULL,NULL,NULL,0),(158,'NLD','NL','Netherlands',NULL,1,NULL,NULL,NULL,NULL,0),(159,'ANT','AN','Netherlands Antilles',NULL,1,NULL,NULL,NULL,NULL,0),(160,'NCL','NC','New Caledonia',NULL,1,NULL,NULL,NULL,NULL,0),(161,'NZL','NZ','New Zealand',NULL,1,NULL,NULL,NULL,NULL,0),(162,'NIC','NI','Nicaragua',NULL,1,NULL,NULL,NULL,NULL,0),(163,'NER','NE','Niger',NULL,1,NULL,NULL,NULL,NULL,0),(164,'NGA','NG','Nigeria',NULL,1,NULL,NULL,NULL,NULL,0),(165,'NIU','NU','Niue',NULL,1,NULL,NULL,NULL,NULL,0),(166,'NFK','NF','Norfolk Island',NULL,1,NULL,NULL,NULL,NULL,0),(167,'MNP','MP','Northern Mariana Islands',NULL,1,NULL,NULL,NULL,NULL,0),(168,'NOR','NO','Norway',NULL,1,NULL,NULL,NULL,NULL,0),(169,'OMN','OM','Oman',NULL,1,NULL,NULL,NULL,NULL,0),(170,'PAK','PK','Pakistan',NULL,1,NULL,NULL,NULL,NULL,0),(171,'PLW','PW','Palau',NULL,1,NULL,NULL,NULL,NULL,0),(172,'PSE','PS','Palestinian Territory, Occupied',NULL,1,NULL,NULL,NULL,NULL,0),(173,'PAN','PA','Panama',NULL,1,NULL,NULL,NULL,NULL,0),(174,'PNG','PG','Papua New Guinea',NULL,1,NULL,NULL,NULL,NULL,0),(175,'PRY','PY','Paraguay',NULL,1,NULL,NULL,NULL,NULL,0),(176,'PER','PE','Peru',NULL,1,NULL,NULL,NULL,NULL,0),(177,'PHL','PH','Philippines',NULL,1,NULL,NULL,NULL,NULL,0),(178,'PCN','PN','Pitcairn',NULL,1,NULL,NULL,NULL,NULL,0),(179,'POL','PL','Poland',NULL,1,NULL,NULL,NULL,NULL,0),(180,'PRT','PT','Portugal',NULL,1,NULL,NULL,NULL,NULL,0),(181,'PRI','PR','Puerto Rico',NULL,1,NULL,NULL,NULL,NULL,0),(182,'QAT','QA','Qatar',NULL,1,NULL,NULL,NULL,NULL,0),(183,'REU','RE','Reunion',NULL,1,NULL,NULL,NULL,NULL,0),(184,'ROM','RO','Romania',NULL,1,NULL,NULL,NULL,NULL,0),(185,'RUS','RU','Russian Federation',NULL,1,NULL,NULL,NULL,NULL,0),(186,'RWA','RW','Rwanda',NULL,1,NULL,NULL,NULL,NULL,0),(187,'BLM','BL','Saint Barthelemy',NULL,1,NULL,NULL,NULL,NULL,0),(188,'SHN','SH','Saint Helena',NULL,1,NULL,NULL,NULL,NULL,0),(189,'KNA','KN','Saint Kitts and Nevis',NULL,1,NULL,NULL,NULL,NULL,0),(190,'LCA','LC','Saint Lucia',NULL,1,NULL,NULL,NULL,NULL,0),(191,'MAF','MF','Saint Martin',NULL,1,NULL,NULL,NULL,NULL,0),(192,'SPM','PM','Saint Pierre and Miquelon',NULL,1,NULL,NULL,NULL,NULL,0),(193,'VCT','VC','Saint Vincent and the Grenadines',NULL,1,NULL,NULL,NULL,NULL,0),(194,'WSM','WS','Samoa',NULL,1,NULL,NULL,NULL,NULL,0),(195,'SMR','SM','San Marino',NULL,1,NULL,NULL,NULL,NULL,0),(196,'STP','ST','Sao Tome and Principe',NULL,1,NULL,NULL,NULL,NULL,0),(197,'SAU','SA','Saudi Arabia',NULL,1,NULL,NULL,NULL,NULL,0),(198,'SEN','SN','Senegal',NULL,1,NULL,NULL,NULL,NULL,0),(199,'SRB','RS','Serbia',NULL,1,NULL,NULL,NULL,NULL,0),(200,'SCG','CS','Serbia and Montenegro',NULL,1,NULL,NULL,NULL,NULL,0),(201,'SYC','SC','Seychelles',NULL,1,NULL,NULL,NULL,NULL,0),(202,'SLE','SL','Sierra Leone',NULL,1,NULL,NULL,NULL,NULL,0),(203,'SGP','SG','Singapore',NULL,1,NULL,NULL,NULL,NULL,0),(204,'SXM','SX','Sint Maarten',NULL,1,NULL,NULL,NULL,NULL,0),(205,'SVK','SK','Slovakia',NULL,1,NULL,NULL,NULL,NULL,0),(206,'SVN','SI','Slovenia',NULL,1,NULL,NULL,NULL,NULL,0),(207,'SLB','SB','Solomon Islands',NULL,1,NULL,NULL,NULL,NULL,0),(208,'SOM','SO','Somalia',NULL,1,NULL,NULL,NULL,NULL,0),(209,'ZAF','ZA','South Africa',NULL,1,NULL,NULL,NULL,NULL,0),(210,'SGS','GS','South Georgia and the South Sandwich Islands',NULL,1,NULL,NULL,NULL,NULL,0),(211,'SSD','SS','South Sudan',NULL,1,NULL,NULL,NULL,NULL,0),(212,'ESP','ES','Spain',NULL,1,NULL,NULL,NULL,NULL,0),(213,'LKA','LK','Sri Lanka',NULL,1,NULL,NULL,NULL,NULL,0),(214,'SDN','SD','Sudan',NULL,1,NULL,NULL,NULL,NULL,0),(215,'SUR','SR','Suriname',NULL,1,NULL,NULL,NULL,NULL,0),(216,'SJM','SJ','Svalbard and Jan Mayen',NULL,1,NULL,NULL,NULL,NULL,0),(217,'SWZ','SZ','Swaziland',NULL,1,NULL,NULL,NULL,NULL,0),(218,'SWE','SE','Sweden',NULL,1,NULL,NULL,NULL,NULL,0),(219,'CHE','CH','Switzerland',NULL,1,NULL,NULL,NULL,NULL,0),(220,'SYR','SY','Syrian Arab Republic',NULL,1,NULL,NULL,NULL,NULL,0),(221,'TWN','TW','Taiwan, Province of China',NULL,1,NULL,NULL,NULL,NULL,0),(222,'TJK','TJ','Tajikistan',NULL,1,NULL,NULL,NULL,NULL,0),(223,'TZA','TZ','Tanzania, United Republic of',NULL,1,NULL,NULL,NULL,NULL,0),(224,'THA','TH','Thailand',NULL,1,NULL,NULL,NULL,NULL,0),(225,'TLS','TL','Timor-Leste',NULL,1,NULL,NULL,NULL,NULL,0),(226,'TGO','TG','Togo',NULL,1,NULL,NULL,NULL,NULL,0),(227,'TKL','TK','Tokelau',NULL,1,NULL,NULL,NULL,NULL,0),(228,'TON','TO','Tonga',NULL,1,NULL,NULL,NULL,NULL,0),(229,'TTO','TT','Trinidad and Tobago',NULL,1,NULL,NULL,NULL,NULL,0),(230,'TUN','TN','Tunisia',NULL,1,NULL,NULL,NULL,NULL,0),(231,'TUR','TR','Turkey',NULL,1,NULL,NULL,NULL,NULL,0),(232,'TKM','TM','Turkmenistan',NULL,1,NULL,NULL,NULL,NULL,0),(233,'TCA','TC','Turks and Caicos Islands',NULL,1,NULL,NULL,NULL,NULL,0),(234,'TUV','TV','Tuvalu',NULL,1,NULL,NULL,NULL,NULL,0),(235,'UGA','UG','Uganda',NULL,1,NULL,NULL,NULL,NULL,0),(236,'UKR','UA','Ukraine',NULL,1,NULL,NULL,NULL,NULL,0),(237,'ARE','AE','United Arab Emirates',NULL,1,NULL,NULL,NULL,NULL,0),(238,'GBR','GB','United Kingdom',NULL,1,NULL,NULL,NULL,NULL,0),(239,'USA','US','United States',NULL,1,NULL,NULL,NULL,NULL,0),(240,'UMI','UM','United States Minor Outlying Islands',NULL,1,NULL,NULL,NULL,NULL,0),(241,'URY','UY','Uruguay',NULL,1,NULL,NULL,NULL,NULL,0),(242,'UZB','UZ','Uzbekistan',NULL,1,NULL,NULL,NULL,NULL,0),(243,'VUT','VU','Vanuatu',NULL,1,NULL,NULL,NULL,NULL,0),(244,'VEN','VE','Venezuela',NULL,1,NULL,NULL,NULL,NULL,0),(245,'VNM','VN','Viet Nam',NULL,1,NULL,NULL,NULL,NULL,0),(246,'VGB','VG','Virgin Islands, British',NULL,1,NULL,NULL,NULL,NULL,0),(247,'VIR','VI','Virgin Islands, U.s.',NULL,1,NULL,NULL,NULL,NULL,0),(248,'WLF','WF','Wallis and Futuna',NULL,1,NULL,NULL,NULL,NULL,0),(249,'ESH','EH','Western Sahara',NULL,1,NULL,NULL,NULL,NULL,0),(250,'YEM','YE','Yemen',NULL,1,NULL,NULL,NULL,NULL,0),(251,'ZMB','ZM','Zambia',NULL,1,NULL,NULL,NULL,NULL,0),(252,'ZWE','ZW','Zimbabwe',NULL,1,NULL,NULL,NULL,NULL,0);

/*Table structure for table `mst_designation` */

DROP TABLE IF EXISTS `mst_designation`;

CREATE TABLE `mst_designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_designation` */

insert  into `mst_designation`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (53,NULL,'val','Sales',NULL,1,9,'2022-06-20 09:06:17',NULL,NULL,0),(54,NULL,'val','Admin',NULL,1,9,'2022-06-20 10:06:45',NULL,NULL,0),(55,NULL,'val','Backoffice',NULL,1,9,'2022-06-20 10:06:55',NULL,NULL,0),(59,'DS/59','val','CEO',NULL,1,9,'2022-09-09 07:09:29',NULL,NULL,0),(60,'DS/60','val','Assistant',NULL,1,9,'2022-09-09 07:09:59',NULL,NULL,0);

/*Table structure for table `mst_gum_make` */

DROP TABLE IF EXISTS `mst_gum_make`;

CREATE TABLE `mst_gum_make` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_gum_make` */

insert  into `mst_gum_make`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'GM/1','val','adhesive',NULL,1,9,'2023-05-03 12:05:34',NULL,NULL,0);

/*Table structure for table `mst_ink_make` */

DROP TABLE IF EXISTS `mst_ink_make`;

CREATE TABLE `mst_ink_make` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_ink_make` */

insert  into `mst_ink_make`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'IM/1','val','Black',NULL,1,28,'2023-04-12 05:04:10',NULL,NULL,0),(2,'IM/2','val','Invisible',NULL,1,28,'2023-04-12 05:04:17',NULL,NULL,0),(3,'IM/3','val','Magenta',NULL,1,28,'2023-04-12 05:04:29',NULL,NULL,0),(4,'IM/4','val','Navy Blue',NULL,1,28,'2023-04-12 05:04:36',NULL,NULL,0),(5,'IM/5','val','Thermochromic',NULL,1,28,'2023-04-12 05:04:51',NULL,NULL,0),(6,'IM/6','val','Photochromic',NULL,1,28,'2023-04-12 05:04:02',NULL,NULL,0),(7,'IM/7','val','color',NULL,1,9,'2023-05-03 12:05:25',NULL,NULL,0);

/*Table structure for table `mst_paper_color_shade` */

DROP TABLE IF EXISTS `mst_paper_color_shade`;

CREATE TABLE `mst_paper_color_shade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_paper_color_shade` */

insert  into `mst_paper_color_shade`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'PS/1','val','White',NULL,1,28,'2023-04-12 05:04:25',NULL,NULL,0),(2,'PS/2','val','Yellow',NULL,1,28,'2023-04-12 05:04:32',NULL,NULL,0),(3,'PS/3','val','Green',NULL,1,28,'2023-04-12 05:04:38',NULL,NULL,0),(4,'PS/4','val','Blue',NULL,1,28,'2023-04-12 05:04:44',NULL,NULL,0),(5,'PS/5','val','Pista Green',NULL,1,28,'2023-04-12 05:04:52',NULL,NULL,0),(6,'PS/6','val','Pink',NULL,1,28,'2023-04-12 05:04:58',NULL,NULL,0);

/*Table structure for table `mst_paper_make` */

DROP TABLE IF EXISTS `mst_paper_make`;

CREATE TABLE `mst_paper_make` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_paper_make` */

insert  into `mst_paper_make`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (1,'PP/1','val','COSMO PAPER',NULL,1,28,'2023-04-19 11:04:50',NULL,NULL,0),(2,'PP/2','val','KHANNA PAPER',NULL,1,28,'2023-04-19 11:04:03',NULL,NULL,0),(3,'PP/3','val','MICRON TEAR RESISTANT',NULL,1,28,'2023-04-19 11:04:15',NULL,NULL,0),(4,'PP/4','val','BOND PAPER',NULL,1,28,'2023-04-19 11:04:30',NULL,NULL,0),(5,'PP/5','val','GEMINI DANDY WATERMARK',NULL,1,28,'2023-04-19 11:04:46',NULL,NULL,0),(6,'PP/6','val','HANSOL PAPER',NULL,1,28,'2023-04-19 11:04:57',NULL,NULL,0),(7,'PP/7','val','ASM PAPER',NULL,1,28,'2023-04-19 11:04:06',NULL,NULL,0),(8,'PP/8','val','VARSHA TRADERS',NULL,1,28,'2023-04-19 11:04:14',NULL,NULL,0),(9,'PP/9','val','CURRENCY THREAD PAPER',NULL,1,28,'2023-04-19 11:04:23',NULL,NULL,0),(10,'PP/10','val','SHAH PAPER',NULL,1,28,'2023-04-19 11:04:37',NULL,NULL,0),(11,'PP/11','val','COLOUR CENTRED THERMAL PAPER',NULL,1,28,'2023-04-19 11:04:49',NULL,NULL,0),(12,'PP/12','val','YUPO PAPER',NULL,1,28,'2023-04-19 11:04:58',NULL,NULL,0),(13,'PP/13','val','UV FIBER PAPER',NULL,1,28,'2023-04-19 11:04:19',NULL,NULL,0),(14,'PP/14','val','J.K PAPER (MICR)',NULL,1,28,'2023-04-19 11:04:36',NULL,NULL,0),(15,'PP/15','val','SHERRY PAPER COATING FRONT AND BACK',NULL,1,28,'2023-04-19 11:04:56',NULL,NULL,0),(16,'PP/16','val','SHERRY PAPER COATING FRONT',NULL,1,28,'2023-04-19 11:04:13',NULL,NULL,0),(17,'PP/17','val','SHERRY PAPER COATING BACK',NULL,1,28,'2023-04-19 11:04:31',NULL,NULL,0),(18,'PP/18','val','NON TEARABLE PAPER',NULL,1,28,'2023-04-19 11:04:20',NULL,NULL,0),(19,'PP/19','val','RAILWAY WATERMARK PAPER',NULL,1,28,'2023-04-19 11:04:32',NULL,NULL,0),(20,'PP/20','val','NATH PAPER',NULL,1,28,'2023-04-19 11:04:48',NULL,NULL,0),(21,'PP/21','val','RAILWAY BOND PAPER',NULL,1,28,'2023-04-19 11:04:07',NULL,NULL,0),(22,'PP/22','val','WEST COAST (TACK BORD PAPER)',NULL,1,28,'2023-04-19 11:04:27',NULL,NULL,0),(23,'PP/23','val','SUNSHINE PAPER',NULL,1,28,'2023-04-19 11:04:43',NULL,NULL,0),(24,'PP/24','val','Parchment paper',NULL,1,28,'2023-04-19 11:04:57',NULL,NULL,0),(25,'PP/25','val','KOEHLER FA GRADE',NULL,1,28,'2023-04-19 11:04:13',NULL,NULL,0),(26,'PP/26','val','NR AGARWAL PAPER',NULL,1,28,'2023-04-19 11:04:26',NULL,NULL,0),(27,'PP/27','val','KOEHLER',NULL,1,28,'2023-04-19 11:04:41',NULL,NULL,0),(28,'PP/28','val','Plain Paper',NULL,1,28,'2023-04-19 11:04:53',NULL,NULL,0),(29,'PP/29','val','TNPL Paper',NULL,1,28,'2023-04-19 11:04:10',NULL,NULL,0),(30,'PP/30','val','SELF ADHESIVE PAPER LABEL (CHROMO)',NULL,1,28,'2023-04-19 11:04:20',NULL,NULL,0),(31,'PP/31','val','STICKER PAPER',NULL,1,28,'2023-04-19 11:04:33',NULL,NULL,0),(32,'PP/32','val','RICOH PAPER',NULL,1,28,'2023-04-19 11:04:45',NULL,NULL,0),(33,'PP/33','val','THERMAL (INFUSED) PAPER',NULL,1,28,'2023-04-19 11:04:57',NULL,NULL,0),(34,'PP/34','val','THERMAL (NON INFUSE) PAPER',NULL,1,28,'2023-04-19 11:04:08',NULL,NULL,0),(35,'PP/35','val','ALABASTER',NULL,1,28,'2023-04-19 11:04:20',NULL,NULL,0),(36,'PP/36','val','ALABASTER',NULL,1,28,'2023-04-19 11:04:20',NULL,NULL,0),(37,'PP/37','val','J.K PAPER(INVISIBLE FIBER)',NULL,1,28,'2023-04-19 11:04:35',NULL,NULL,0),(38,'PP/38','val','WEST COAST PAPER',NULL,1,28,'2023-04-19 11:04:45',NULL,NULL,0),(39,'PP/39','val','J.K.PAPER',NULL,1,28,'2023-04-19 11:04:57',NULL,NULL,0),(40,'PP/40','val','SHERRY PAPER',NULL,1,28,'2023-04-19 11:04:17',NULL,NULL,0),(41,'PP/41','val','VARSHA PAPER',NULL,1,28,'2023-04-19 11:04:36',NULL,NULL,0),(42,'PP/42','val','SESHASAYEE PAPER',NULL,1,28,'2023-04-19 11:04:51',NULL,NULL,0),(43,'PP/43','val','WEST COAST(MICR CTS PAPER)',NULL,1,28,'2023-04-19 11:04:02',NULL,NULL,0),(44,'PP/44','val','J.K.PAPER(MICR CTS PAPER)',NULL,1,28,'2023-04-19 11:04:14',NULL,NULL,0),(45,'PP/45','val','WEST COAST PAPER(PARCHMENT PAPER)',NULL,1,28,'2023-04-19 11:04:26',NULL,NULL,0),(46,'PP/46','val','RAILWAY(SATIA)',NULL,1,28,'2023-04-19 11:04:41',NULL,NULL,0),(47,'PP/47','val','RAILWAY(SHREYANS)',NULL,1,28,'2023-04-19 11:04:53',NULL,NULL,0),(48,'PP/48','val','SLITING PAPER',NULL,1,28,'2023-04-19 11:04:22',NULL,NULL,0),(49,'PP/49','val','MISTUBISHI PAPER',NULL,1,28,'2023-04-19 11:04:32',NULL,NULL,0);

/*Table structure for table `mst_position` */

DROP TABLE IF EXISTS `mst_position`;

CREATE TABLE `mst_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_position` */

insert  into `mst_position`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`) values (53,NULL,'val','Sales',NULL,1,9,'2022-06-20 09:06:42',NULL,NULL,0),(54,NULL,'val','Admin',NULL,1,9,'2022-06-20 10:06:43',NULL,NULL,0),(55,NULL,'val','Backoffice',NULL,1,9,'2022-06-20 10:06:15',NULL,NULL,0),(57,'PM/57','val','executive',NULL,1,9,'2022-08-05 12:08:44',NULL,NULL,0);

/*Table structure for table `mst_qc` */

DROP TABLE IF EXISTS `mst_qc`;

CREATE TABLE `mst_qc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `process` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `addeddby` int(20) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(20) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_qc` */

insert  into `mst_qc`(`id`,`unique_id`,`process`,`name`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'QC/1','24','Number of boxes as per challan',9,'2023-05-11 01:05:52',NULL,NULL),(2,'QC/2','24','Quantity as per order',9,'2023-05-11 01:05:12',NULL,NULL);

/*Table structure for table `mst_quote_type` */

DROP TABLE IF EXISTS `mst_quote_type`;

CREATE TABLE `mst_quote_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_quote_type` */

insert  into `mst_quote_type`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (48,NULL,NULL,'Quote 1',NULL,1,0,'2022-04-07 09:04:20',0,'2022-04-13 07:04:15'),(51,NULL,NULL,'Quote 2',NULL,1,0,'2022-04-13 07:04:05',NULL,NULL);

/*Table structure for table `mst_site` */

DROP TABLE IF EXISTS `mst_site`;

CREATE TABLE `mst_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `company` int(11) DEFAULT 0,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_site` */

insert  into `mst_site`(`id`,`unique_id`,`code`,`description`,`remark`,`status`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`company`,`address`) values (1,'SI/1','null','Vikhroli - Security Section',NULL,1,9,'2023-04-27 04:04:58',NULL,NULL,47,'16, Samrat Compound LBS Marg Vikhroli west MUMBAI');

/*Table structure for table `mst_unit` */

DROP TABLE IF EXISTS `mst_unit`;

CREATE TABLE `mst_unit` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `mst_unit` */

insert  into `mst_unit`(`id`,`unique_id`,`description`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'UN/1','MM',0,'2023-04-12 08:04:00',NULL,NULL),(2,'UN/2','MTRS',0,'2023-04-12 08:04:08',NULL,NULL),(3,'UN/3','INCH',0,'2023-04-12 08:04:15',NULL,NULL),(4,'UN/4','PCS',0,'2023-04-12 08:04:20',NULL,NULL),(5,'UN/5','BOXES',0,'2023-04-12 08:04:30',NULL,NULL),(6,'UN/6','LTRS',0,'2023-04-12 08:04:17',NULL,NULL),(7,'UN/7','NOS',0,'2023-04-12 08:04:18',NULL,NULL),(8,'UN/8','KGS',0,'2023-04-12 08:04:31',NULL,NULL),(9,'UN/9','CM',0,'2023-05-10 12:05:29',NULL,NULL),(10,'UN/10','GSM',0,'2023-05-10 12:05:36',NULL,NULL);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `printer_feature_masters` */

DROP TABLE IF EXISTS `printer_feature_masters`;

CREATE TABLE `printer_feature_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `printer_feature_masters` */

/*Table structure for table `printer_masters` */

DROP TABLE IF EXISTS `printer_masters`;

CREATE TABLE `printer_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `printer_masters` */

/*Table structure for table `process_categories` */

DROP TABLE IF EXISTS `process_categories`;

CREATE TABLE `process_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `process_categories` */

insert  into `process_categories`(`id`,`name`,`created_by`,`updated_by`,`deleted_by`,`deleted_at`,`created_at`,`updated_at`) values (1,'Post-Press',9,9,NULL,NULL,'2023-05-03 09:47:44','2023-05-03 09:47:56'),(2,'Pre-Press',9,NULL,NULL,NULL,'2023-05-03 11:36:12','2023-05-03 11:36:12'),(3,'Press',9,NULL,NULL,NULL,'2023-05-03 11:36:23','2023-05-03 11:36:23'),(4,'Test press',9,9,9,'2023-05-10 07:23:43','2023-05-10 07:22:51','2023-05-10 07:23:43');

/*Table structure for table `prospect_masters` */

DROP TABLE IF EXISTS `prospect_masters`;

CREATE TABLE `prospect_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `prospect_masters` */

/*Table structure for table `quotation_invoice_details` */

DROP TABLE IF EXISTS `quotation_invoice_details`;

CREATE TABLE `quotation_invoice_details` (
  `quotation_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column_id` varchar(11) NOT NULL,
  `row_id` varchar(11) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4643 DEFAULT CHARSET=utf8mb4;

/*Data for the table `quotation_invoice_details` */

insert  into `quotation_invoice_details`(`quotation_id`,`id`,`column_id`,`row_id`,`description`) values (1,1,'0','0',' SR.NO '),(1,2,'1','0','  ITEM'),(1,3,'2','0',' QUANTITY '),(1,4,'3','0',' RATE Per Roll'),(1,5,'0','1','      1.'),(1,6,'1','1','NCR JP ROLL,\r\nSIZE : 80 MM X 80 MTRS,\r\nPAPER : 55 GSM THERMAL,\r\nCORE SIZE : 13 MM \r\n\r\n'),(1,7,'2','1',' 50 ROLLS'),(1,8,'3','1','Rs.95/- Per Roll'),(1,9,'0','2','     2.'),(1,10,'1','2','NCR RP ROLL,\r\nSIZE : 79 MM X 375 MTRS\r\nPAPAR : 55 GSM THERMAL\r\nCORE SIDE : 18 MM,\r\nPRINTING : BLACK SENSOR,\r\nCOATING SIDE INSIDE,\r\n'),(1,11,'2','2','50 ROLLS'),(1,12,'3','2','Rs.410/- Per Roll'),(3,13,'0','0',' SR.NO  '),(3,14,'1','0','  ITEM '),(3,15,'2','0',' QUANTITY  '),(3,16,'3','0',' RATE Per Pcs'),(3,17,'0','1','      1. '),(3,18,'1','1','Axis Bank Dividend Warrant-ITC LTD,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting : Black,Burgundy,Invisible,Fugitive Red'),(3,19,'2','1','48552 Pcs'),(3,20,'3','1','Rs.1.10/- Per Pcs'),(4,21,'0','0',' Sr.No.'),(4,22,'1','0',' Item '),(4,23,'2','0',' Quantity '),(4,24,'3','0',' Rate Per Pcs'),(4,25,'0','1',' 1.'),(4,26,'1','1','Hasti Bank Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Black+ Orange + Black Hotspot'),(4,27,'2','1','10000 Pcs'),(4,28,'3','1',' Rs.2.00/- Per Pcs'),(5,29,'0','0',' SR.NO'),(5,30,'1','0',' ITEM'),(5,31,'2','0',' QUANTITY'),(5,32,'3','0',' RATE'),(5,33,'0','1',' 1.'),(5,34,'1','1','FINO Insta Plus Pin Mailer,\r\nSize : 10 inch x 3 inch x 3 ply,\r\nPaper : 60+60+70 GSM Normal,\r\nPrinting : 1 Color Printing'),(5,35,'2','1',' 250000 Pcs'),(5,36,'3','1',' 1.20/- Per Pcs'),(6,37,'0','0',' SR.NO '),(6,38,'1','0',' ITEM '),(6,39,'2','0',' QUANTITY '),(6,40,'3','0',' RATE '),(6,41,'0','1',' 1. '),(6,42,'1','1','  Cheque Book\r\nSize: 9 Inch X 3.67 Inch\r\nPaper : 95 GSM MICR CTS Paper\r\n4 Color Printing with UV,Numbering & Barcode \r\n25 Lvs Per Book'),(6,43,'2','1','10000 Books\r\n'),(6,44,'3','1','Rs.22.50/- Per Book\r\n'),(6,45,'0','2',' 2.'),(6,46,'1','2',' Cheque Book\r\nSize: 9 Inch X 3.67 Inch\r\nPaper : 95 GSM MICR CTS Paper\r\n4 Color Printing with UV,Numbering & Barcode \r\n10 Lvs Per Book'),(6,47,'2','2','10000 Books'),(6,48,'3','2','Rs.11.00/- Per Book\r\n '),(7,49,'0','0',' Sr.No.'),(7,50,'1','0',' Item'),(7,51,'2','0','Quantity '),(7,52,'3','0',' Rate'),(7,53,'0','1',' 1.'),(7,54,'1','1','Share Certificate - RC Bank\r\nSize : 9.5 Inch x 11 Inch,\r\nPaper : 105 GSM Parchment,\r\nFront Colours : Pantone 300C- Blue , PANTONE 465 C (GOLDEN), Magenta, Cyan , Black,\r\nBack side No Printing'),(7,55,'2','1','2510 Pcs'),(7,56,'3','1',' Rs.12,500/- Lot Charges'),(8,57,'0','0',' SR.NO.'),(8,58,'1','0',' ITEM'),(8,59,'2','0',' QUANTITY '),(8,60,'3','0',' RATE'),(8,61,'0','1',' 1'),(8,62,'1','1','AFGHAN UNITED BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : 4 COLOUR PRINTING,\r\nWithout Data Printing'),(8,63,'2','1',' 13000 Pcs'),(8,64,'3','1','Rs.2.20/- Per Pcs'),(9,65,'0','0',' SR.NO.'),(9,66,'1','0','ITEM '),(9,67,'2','0',' QUANTITY'),(9,68,'3','0',' RATE'),(9,69,'0','1',' 1.'),(9,70,'1','1','Size - 9” x 4” x 3 part,\r\nPaper - 60+60+70 GSM Normal Paper,\r\nPrinting - 1st part Single colour on front side & spot carbon on backside\r\n2nd part Four color printing on front & Single color on back\r\n3rd Part Single colour on back side\r\n'),(9,71,'2','1','3000 Pcs\r\n\r\n5000 Pcs\r\n\r\n7000 Pcs'),(9,72,'3','1','Rs.4.50/- Per Pcs\r\n\r\nRs.3.50/- Per Pcs\r\n\r\nRs.2.90/- Per Pcs '),(10,73,'0','0',' SR. NO.'),(10,74,'1','0',' ITEM'),(10,75,'2','0',' QUANTITY'),(10,76,'3','0',' RATE'),(10,77,'0','1','1.'),(10,78,'1','1',' HP GAS RECEIPT\r\nSize : 15 inch x 12 inch\r\nPaper : 70 GSM \r\nPrinting :Red + Blue'),(10,79,'2','1','10000 Sheets'),(10,80,'3','1',' Rs.1.80/- Per Sheet'),(11,81,'0','0',' SR.NO.'),(11,82,'1','0',' Item'),(11,83,'2','0',' Quantity'),(11,84,'3','0',' Rate'),(11,85,'0','1',' 1.'),(11,86,'1','1','Fixed Deposit Advice - Continuous Stationery\r\nSize :9.5 inch x 6 inch\r\nPaper :105 GSM Parchment,\r\nPrinting : Black,Yellow,Brown'),(11,87,'2','1',' 1 Lacs'),(11,88,'3','1','Rs.1.65/- Per Pcs (with freight charges)\r\n\r\nRs.1.15/- Per Pcs (without freight charges)\r\n'),(11,89,'0','2',' 2.'),(11,90,'1','2','Fixed Deposit Advice - Cutsheet Stationery\r\nSize : A5,\r\nPaper :100 GSM Sunshine,\r\nPrinting : Black,Yellow,Brown'),(11,91,'2','2',' 1 Lacs'),(11,92,'3','2','Rs.1.65/- Per Pcs (with freight charges)\r\n\r\nRs.1.15/- Per Pcs (without freight charges)\r\n'),(12,93,'0','0',' SR. NO.'),(12,94,'1','0','ITEM'),(12,95,'2','0','QUANTITY'),(12,96,'3','0','RATE'),(12,97,'0','1','1.'),(12,98,'1','1','BANK OF INDIA TRAVEL CARD PIN MAILER,\r\nSIZE : 9 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : ONE COLOUR PRINTING '),(12,99,'2','1','1000 Pcs'),(12,100,'3','1','Rs.5500/- Lot Charges'),(13,101,'0','0',' SR. NO.'),(13,102,'1','0',' ITEM'),(13,103,'2','0','QUANTITY'),(13,104,'3','0',' RATE'),(13,105,'0','1','1.'),(13,106,'1','1','HITACHI BNA THERMAL RECEIPT ROLL WITH BLACK SENSOR ONLY,\r\nSIZE : 79 MM X 540 MTRS,\r\nPAPER : 55 GSM THERMAL'),(13,107,'2','1','28 ROLLS'),(13,108,'3','1','Rs.590/- PER ROLL'),(14,109,'0','0','SR.NO.'),(14,110,'1','0',' ITEM'),(14,111,'2','0',' QUANTITY '),(14,112,'3','0',' RATE'),(14,113,'0','1','1.'),(14,114,'1','1',' SBI FINAL DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : BLACK,BRONZE BLUE,INVISIBLE INK'),(14,115,'2','1','2500 PCS \r\n(INCLUDING 500 NPCI)'),(15,116,'0','0','SR.NO.'),(14,117,'3','1','Rs.4.30/- PER PCS'),(15,118,'1','0',' ITEM'),(15,119,'2','0',' QUANTITY '),(15,120,'3','0',' RATE'),(16,121,'0','0','SR.NO.'),(15,122,'0','1','1.'),(16,123,'1','0',' ITEM'),(15,124,'1','1',' SBI FINAL DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : BLACK,BRONZE BLUE,INVISIBLE INK'),(16,125,'2','0',' QUANTITY '),(15,126,'2','1','2500 PCS \r\n(INCLUDING 500 NPCI)'),(16,127,'3','0',' RATE'),(15,128,'3','1','Rs.4.30/- PER PCS'),(16,129,'0','1','1.'),(16,130,'1','1',' SBI FINAL DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : BLACK,BRONZE BLUE,INVISIBLE INK'),(16,131,'2','1','2500 PCS \r\n(INCLUDING 500 NPCI)'),(16,132,'3','1','Rs.4.30/- PER PCS'),(17,133,'0','0','SR. NO. '),(17,134,'1','0','ITEM '),(17,135,'2','0','QUANTITY '),(17,136,'3','0','RATE '),(17,137,'0','1','1. '),(17,138,'1','1','Thermal POS Roll,\r\nSize: 79mm X 60mtrs,\r\nPaper: 50 GSM Thermal,\r\n2 colour Printing'),(17,139,'2','1','4000 ROLLS'),(17,140,'3','1',' Rs.55/- PER ROLL'),(17,141,'0','2','2'),(17,142,'1','2','Thermal POS Roll,\r\nSize: 79mm X 40mtrs,\r\nPaper: 50 GSM Thermal,\r\n2 colour Printing'),(17,143,'2','2','4000 ROLLS'),(17,144,'3','2',' Rs.40/- PER ROLL'),(18,145,'0','0','Sr. No.'),(18,146,'1','0','Item Code'),(18,147,'2','0','Item Description'),(18,148,'3','0','Quantity'),(18,149,'4','0','Price'),(18,150,'5','0','Remark'),(18,151,'0','2','1'),(18,152,'1','2',''),(18,153,'2','2','Thermal Roll\r\nClinic Cards \r\nSize: 821m m X 255mm\r\nCol: Blue 180 Microns ( Non Fading ink- Blue Gloss)\r\nPaper type: Non Tearable\r\n'),(18,154,'3','2','53,192 pcs'),(18,155,'4','2','325,275,600 USD'),(18,156,'5','2','Prices as per FOB, Air Freight, CFR'),(18,157,'0','-2','2'),(18,158,'1','-2',''),(18,159,'2','-2','Clinic Cards \r\nSize: 821m m X 255mm\r\nCol: Pink 180 Microns ( Non Fading ink- Pink Gloss)\r\nPaper type: Non Tearable\r\n'),(18,160,'3','-2','53,192 pcs'),(18,161,'4','-2','325,275,600 USD'),(18,162,'5','-2','Prices as per FOB, Air Freight, CFR'),(19,163,'0','0',' SR.NO.'),(19,164,'1','0','   Item'),(19,165,'2','0','   Quantity'),(19,166,'3','0',' Rate  '),(19,167,'0','1',' 1.'),(19,168,'1','1',' Fixed Deposit Advice - Continuous Stationery\r\nSize :9.5 inch x 6 inch\r\nPaper :105 GSM Parchment,\r\nPrinting : Black,Yellow,Brown'),(19,169,'2','1',' 1 Lacs'),(19,170,'3','1','Rs.1.45/- Per Pcs (Inclusive freight charges)\r\n  '),(19,171,'0','2','2.'),(19,172,'1','2','Fixed Deposit Advice - Cutsheet Stationery\r\nSize : A5,\r\nPaper :100 GSM Sunshine,\r\nPrinting : Black,Yellow,Brown'),(19,173,'2','2','1 Lacs'),(19,174,'3','2',' Rs.1.45/- Per Pcs (Inclusive freight charges)\r\n'),(20,175,'0','0','Sr. No.'),(20,176,'1','0',' Item '),(20,177,'2','0','Quantity'),(20,178,'3','0','Rate'),(20,179,'0','1','1.'),(20,180,'1','1',' Cheque Lvs,\r\nSize : 9 inch x 3.67 inch,\r\nPaper : 95 GSM MICR,\r\nSECURITY FEATURES : 1.INVISIBLE LOGO,\r\n2.VOID,\r\n3.MICRO LINE,\r\n4.CTS2010 MICR PAPER '),(20,181,'2','1','1000 Books'),(20,182,'3','1','Rs.0.53/- Per Leave'),(21,183,'0','0','   Sr No '),(21,184,'1','0','Product Description   '),(21,185,'2','0','  Quantity In Nos'),(21,186,'3','0','  Rate Per Pc'),(21,187,'4','0','  Total in INR'),(21,188,'0','1','   1'),(21,189,'1','1','   OMR Sheets (100 Questions)\r\nSize: A4\r\nPaper: 80 GSM\r\n'),(21,190,'2','1','  1000 nos'),(21,191,'3','1','  9.5/- per pc'),(21,192,'4','1','  9500/-'),(21,193,'0','2',' 2'),(21,194,'1','2',' Evaluation of Results & reports'),(21,195,'2','2',' -'),(21,196,'3','2','- '),(21,197,'4','2',' 36000/-'),(22,198,'0','0','  SR.NO.'),(22,199,'1','0','ITEM'),(22,200,'2','0','QUANTITY'),(22,201,'3','0','RATE'),(22,202,'0','1','1. '),(22,203,'1','1','Fixed Deposit Advice - Continuous Stationery \r\nSize :9.5 inch x 6 inch\r\nPaper :105 GSM Parchment,\r\nPrinting : Black,Yellow,Brown'),(22,204,'2','1',' 1 LACS PCS'),(22,205,'3','1','Rs.1.40/- Per Pcs (Inclusive freight charges)\r\n  '),(23,206,'0','0','SR.NO.'),(23,207,'1','0','ITEM'),(23,208,'2','0','QUANTITY'),(23,209,'3','0','RATE'),(23,210,'0','1','1.'),(23,211,'1','1','Fixed Deposit Advice - Cutsheet Stationery\r\nSize : A5,\r\nPaper :100 GSM Sunshine,\r\nPrinting : Black,Yellow,Brown'),(23,212,'2','1','1 LACS PCS'),(23,213,'3','1','RS.1.15/-'),(24,214,'0','0',' Sr.No. '),(24,215,'1','0','Item '),(24,216,'2','0',' Quantity'),(24,217,'3','0',' Rate'),(24,218,'0','1','1.  '),(24,219,'1','1','Welcome Letter,\r\nPaper - 80 GSM Maplitho\r\nSize : A4'),(24,220,'2','1',' 20000 Pcs'),(24,221,'3','1',' Rs.1.30/- Per Pcs'),(24,222,'0','2','2.'),(24,223,'1','2','Card Pouch,\r\nPaper - 157 GSM Art Paper\r\nSize : 90 mm x 64 mm'),(24,224,'2','2',' 20000 Pcs'),(24,225,'3','2','Rs.2.40/- Per Pcs'),(24,226,'0','3','3.'),(24,227,'1','3','Card Envelope,\r\nPaper - 157 GSM Art Paper\r\nSize : 233 mm x 162 mm'),(24,228,'2','3',' 20000 Pcs'),(24,229,'3','3','Rs.3.40/- Per Pcs'),(25,230,'0','0',' Sr No'),(25,231,'1','0','Product Description '),(25,232,'2','0',' MOQ Quantity '),(25,233,'3','0',' Rate Per 1000 Pc'),(25,234,'4','0',' Total in INR'),(25,235,'0','1',' 1'),(25,236,'1','1',' Printer Stationery\r\nSize: 9 X 12 X 1 Ply\r\nPaper: 80 GSM\r\n'),(25,237,'2','1',' 10000 Pcs'),(25,238,'3','1',' 700/'),(25,239,'4','1',' 7,000/-'),(25,240,'0','2',' 2'),(25,241,'1','2',' Printer Stationery\r\nSize: A4\r\nPaper:80 GSM\r\n'),(25,242,'2','2',' 10000 Pcs'),(25,243,'3','2',' 750/'),(25,244,'4','2',' 7,500/-'),(26,245,'0','0','Sr No'),(26,246,'1','0','Quotation for  Printer Stationery '),(26,247,'2','0','  MOQ Quantity '),(26,248,'3','0',' Rate Per 1000 Pc'),(26,249,'4','0',' Total in INR'),(26,250,'0','1',' 1'),(26,251,'1','1',' Line Printer'),(26,252,'2','1',' 10000 Pcs'),(26,253,'3','1',' 0.90/- '),(26,254,'4','1',' 9,000/-'),(26,255,'0','2',' 2'),(26,256,'1','2',' Printer Stationery'),(26,257,'2','2',' 10000 Pcs'),(26,258,'3','2',' 1.00/- '),(26,259,'4','2',' 10,000/-'),(27,260,'0','0','SR.NO.'),(27,261,'1','0','DESCRIPTION'),(27,262,'2','0','QUANTITY  '),(27,263,'3','0',' RATE  '),(27,264,'0','1','1. '),(27,265,'1','1','GP Parsik Sahakari Bank- Computer Stationary Blank with Logo.\r\nSize: 15X12X1\r\nPrinting :Name Logo & Numbering '),(27,266,'2','1','100 Box of 3000 Sheet '),(27,267,'3','1','A Grade Paper - Rs.2475/- Per Box\r\n\r\nB Grade Paper - Rs.2295/- Per Box '),(27,268,'0','2','2.'),(27,269,'1','2',' GP Parsik Sahakari Bank- Computer Stationary Blank with Logo.\r\nSize: 10X12X1\r\nPrinting :Name Logo & Numbering'),(27,270,'2','2','100 Box of 3000 Sheet '),(27,271,'3','2','A Grade Paper - Rs.1715/- Per Box\r\n\r\nB Grade Paper - Rs.1635/- Per Box'),(28,272,'0','0','  Sr No'),(28,273,'1','0','  Product Description'),(28,274,'2','0','  Quantity of Box'),(28,275,'3','0',' A Grade Paper Rate Per Box'),(28,276,'4','0',' B Grade Paper Rate Per Box'),(28,277,'5','0','Total in INR Grade A '),(28,278,'6','0',' Total in INR Grade B'),(28,279,'0','1','  1'),(28,280,'1','1','  Cheque Stationery \r\nSize: 10 X 12 X 1\r\nBlank with Logo & No\r\n'),(28,281,'2','1','  100 Box\r\nPer Box 3000 Pcs\r\n'),(28,282,'3','1',' 1715/-'),(28,283,'4','1',' 1635/-'),(28,284,'5','1',' 1,71,500/-'),(28,285,'6','1',' 1,63,500/-'),(28,286,'0','2','  2'),(28,287,'1','2','  Cheque Stationery \r\nSize: 15 X 12 X 2\r\nBlank with Logo & No\r\n'),(28,288,'2','2','  100 Box\r\nPer Box 3000 Pcs\r\n'),(28,289,'3','2',' 2475/-'),(28,290,'4','2',' 2295/-'),(28,291,'5','2',' 2,47,500/-'),(28,292,'6','2',' 2,29,500/-'),(29,293,'0','0','Sr.No.'),(29,294,'1','0','Item '),(29,295,'2','0','Quantity'),(29,296,'3','0','Rate'),(29,297,'0','1','1.'),(29,298,'1','1','Degree Certificate\r\nSize : 9 inch x 12 inch,\r\nPaper : 200 Micron Non tearable Paper,\r\nPrinting : 4 colours on front side and 1 colour on back side,\r\nSecurity Features :\r\n1.MICRO TEXT,\r\n2.GUILLOCHE BOARDER, 3.BARCODE,\r\n4.GHOST IMAGE,\r\n5.INVISIBLE LOGO,\r\n6.VOID COPY\r\n'),(29,299,'2','1','10000 Pcs'),(29,300,'3','1','Rs.19/- Per Pcs'),(30,301,'0','0','Sr. No.'),(30,302,'1','0','Item '),(30,303,'2','0','Quantity'),(30,304,'3','0','Rate'),(30,305,'0','1','1.'),(30,306,'1','1',' Outsource Challan\r\nSize: 10 Inch X 12 Inch X 3 Part\r\nPaper : 70gsm + 70gsm + 70gsm with 2 carbon paper in each set\r\nColor: 4 Color Front + 1 Color Back\r\nPacking : 500 Sets per box'),(30,307,'2','1','50000 Sets (100 Box) \r\n\r\n\r\n20000 Sets (40 Box) '),(30,308,'3','1','Rs.2650/- Per 1000 sets\r\n\r\nRs.2850/- Per 1000 sets'),(31,309,'0','0','Sr.No. '),(31,310,'1','0',' Description '),(31,311,'2','0',' Minimum Order Quantity '),(31,312,'3','0',' Quantity '),(31,313,'0','1','  1.'),(31,314,'1','1','  PRINTED THERMAL ROLL\r\nAND BILLING ROLL\r\nSIZE : 79 MM X 60 MTRS'),(31,315,'2','1','  500 ROLLS\r\n'),(31,316,'3','1','  Rs.54/- PER ROLL'),(31,317,'0','2',' 2.'),(31,318,'1','2','PRINTED THERMAL ROLL\r\nGLOBAL DESI BILLING ROLL\r\nSIZE : 79 MM X 60 MTRS\r\n '),(31,319,'2','2','   500 ROLLS\r\n'),(31,320,'3','2','   Rs.54/- PER ROLL'),(31,321,'0','3',' 3.'),(31,322,'1','3',' PRINTED THERMAL ROLL\r\nAND & GLOBAL BILLING ROLL\r\nSIZE : 79 MM X 60 MTRS'),(31,323,'2','3','   500 ROLLS\r\n'),(31,324,'3','3','   Rs.54/- PER ROLL'),(43,325,'0','0','Sr. No.'),(43,326,'1','0',' Item'),(43,327,'2','0',' Quantity '),(43,328,'3','0','Rate'),(43,329,'0','1','1. '),(43,330,'1','1','HDFC Bank Ltd. - Dividend Warrant,\r\nSize : 15 Inch x 3.67 Inch,\r\nPrinting : 2 Colour '),(43,331,'2','1','2550 Pcs \r\n(Including 550 Pcs Of NPCI)'),(43,332,'3','1','Rs.8,250/- Lot Charges'),(44,333,'0','0','Sr.No'),(44,334,'1','0',' Item'),(44,335,'2','0','Quantity '),(44,336,'3','0','Rate'),(44,337,'0','1','1.'),(44,338,'1','1','Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM  Normal Paper,\r\nPrinting : Single Colour'),(44,339,'2','1','5000 Pcs'),(44,340,'3','1',' Rs.2.70/- Per Pin Mailer'),(45,341,'0','0','Sr.No.'),(45,342,'1','0',' Item '),(45,343,'2','0',' Quantity'),(45,344,'3','0',' Rate'),(45,345,'0','1',' 1.'),(45,346,'1','1','Dividend Warrant,\r\nSize : 15 inch x 3.67 inch,\r\nPaper : MICR Paper,\r\nPrinting : 2 colours with invisible ink'),(45,347,'2','1','2200 Pcs'),(45,348,'3','1',' Rs.4.15/- Per Pcs'),(46,349,'0','0',' Sr.No.'),(46,350,'1','0',' Item'),(46,351,'2','0',' Quantity'),(46,352,'3','0',' Rate'),(46,353,'0','1',' 1.'),(46,354,'1','1','PIN MAILER FOR SHRI MAHALAKSHMI CO-OPERATIVE BANK LTD, KOLHAPUR,\r\nSIZE : 10 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR'),(46,355,'2','1','5000 PCS'),(46,356,'3','1',' Rs.3.25/- PER PCS'),(47,357,'0','0','SR. NO.  '),(47,358,'1','0',' ITEM  '),(47,359,'2','0','SIZE'),(47,360,'3','0',' QUANTITY'),(47,361,'4','0',' RATE PER PCS'),(47,362,'0','1','1.   '),(47,363,'1','1','  Welcome Letter (Colour 4+4), 120 GSM, SS Maplitho	'),(47,364,'2','1','   W. 8.5 x  H. 11  inch	'),(47,365,'3','1',' 40000 PCS\r\n'),(47,366,'4','1','Rs.2.09/-'),(47,367,'0','2',' 2.'),(47,368,'1','2',' User Manual (Booklet)  (Colour 4+4), 130 GSM,SAC paper	'),(47,369,'2','2','  W. 11.693  x H. 8.268  inch	'),(47,370,'3','2','  40000 PCS'),(47,371,'4','2','Rs.2.99/-'),(47,372,'0','3',' 3.'),(47,373,'1','3',' Pouches (150 GSM Art Paper- 4 color printing )	'),(47,374,'2','3','  89MM X 58MM	'),(47,375,'3','3','  40000 PCS'),(47,376,'4','3','Rs.1.80/-'),(47,377,'0','4',' 4.'),(47,378,'1','4',' Envelopes (130 GSM Art Paper - 4 color printing)'),(47,379,'2','4','  8.5 Inch X 6 Inch	'),(47,380,'3','4','  40000 PCS'),(47,381,'4','4','Rs.4.18/-'),(48,382,'0','0',' SR.NO.'),(48,383,'1','0',' ITEM '),(48,384,'2','0','QUANTITY'),(48,385,'3','0',' RATE'),(48,386,'0','1',' 1.'),(48,387,'1','1',' AXIS BANK DIVIDEND WARRANT - DEEPAK NITRITE LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : 4 COLOUR '),(48,388,'2','1','3550 PCS'),(48,389,'3','1','Rs.9500/- LOT CHARGES'),(49,390,'0','0','SR.NO.'),(49,391,'1','0','ITEM'),(49,392,'2','0',' QUANTITY '),(49,393,'3','0',' RATE'),(49,394,'0','1','1.'),(49,395,'1','1',' Indian Bank Pin Mailer\r\nSize : 9 inch x 4 inch x 3 ply & 9 inch x 3.67 inch x 3 Ply,\r\nPrinting : 4 colour\r\nPaper : 60+60+70 GSM Normal Paper \r\n'),(49,396,'2','1',' For 1 Lacs Pin Mailers\r\n\r\nFor 5 Lacs Pin Mailers '),(49,397,'3','1',' Rs.0.98/- Per Pcs\r\n\r\nRs.0.96/- Per Pcs'),(50,398,'0','0','   SR.NO.'),(50,399,'1','0','    ITEM'),(50,400,'2','0','   QUANTITY'),(50,401,'3','0','   RATE PER PCS'),(50,402,'0','1','    1.'),(50,403,'1','1','    Letterhead\r\nSize : A4\r\nPaper : 80 GSM Maplitho\r\n'),(50,404,'2','1','   1 LACS'),(50,405,'3','1','    Rs.1.48/-'),(50,406,'0','2','  2.'),(50,407,'1','2','  User Guide \r\nSize : A4\r\nPaper : 90 GSM Art Paper\r\n'),(50,408,'2','2','   1 LACS'),(50,409,'3','2','  Rs.1.87/-'),(50,410,'0','3','  3.'),(50,411,'1','3','  Card Pouch \r\nSize : 50 mm x 90 mm\r\nPaper : 130 GSM Art Paper'),(50,412,'2','3','   1 LACS'),(50,413,'3','3','  Rs.1.12/-'),(50,414,'0','4','  4.'),(50,415,'1','4','  Envelope\r\nSize : 8.40 inch x 4.25 inch\r\nPaper : 90 GSM Maplitho'),(50,416,'2','4','   1 LACS'),(50,417,'3','4','  Rs.2.10/-'),(50,418,'0','5',' 5.'),(50,419,'1','5',' Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM\r\n'),(50,420,'2','5','  1 LACS'),(50,421,'3','5','One Colour Printing -  Rs.1.60/- \r\nFour Colour Printing - Rs.2.25/-'),(51,422,'0','0',' SR. NO.'),(51,423,'1','0',' ITEM '),(51,424,'2','0',' QUANTITY'),(51,425,'3','0',' RATE'),(51,426,'0','1',' 1.'),(51,427,'1','1','Inland Letters,\r\nSize 15x12x1 - 2 Ups,\r\nPaper : 70 GSM paper,\r\nPrinting : single color printing on both sides, '),(51,428,'2','1',' 1,00,000 Nos'),(51,429,'3','1',' 0.73/- Per Pcs  '),(52,430,'0','0',' SR. NO.'),(52,431,'1','0',' ITEM'),(52,432,'2','0',' QUANTITY '),(52,433,'3','0',' RATE'),(52,434,'0','1',' 1.'),(52,435,'1','1','Dividend Warrant - Ajmera Realty & Infra Ltd.,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting : Royal Blue + Invisible,\r\nPaper : 96 GSM MICR '),(52,436,'2','1',' 7550 Pcs (Including NPCI testing)'),(52,437,'3','1',' Rs.2.30/- Per Pcs'),(52,438,'0','2','2.'),(52,439,'1','2','Dividend Warrant - 3I Infotech,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting :  Black + Invisible,\r\nPaper : 96 GSM MICR '),(52,440,'2','2','2500 Pcs (Including NPCI testing)'),(52,441,'3','2','Rs.8250/- Lot Charges'),(52,442,'0','3','3.'),(52,443,'1','3','Dividend Warrant - GE Shipping,\r\nSize : 15 inch x 3.67 inch,\r\nPrinting :  Royal blue + Invisible,\r\nPaper : 96 GSM MICR '),(52,444,'2','3','11000 Pcs (Including NPCI testing)'),(52,445,'3','3','Rs.1.40/- Per Pcs'),(53,446,'0','0',' Sr No'),(53,447,'1','0',' Product Description'),(53,448,'2','0',' Quantity In Nos'),(53,449,'3','0',' Rate Per Pc'),(53,450,'4','0',' Total in INR'),(53,451,'0','1',' 1'),(53,452,'1','1',' NFSU Grade Card\r\nSize: A4\r\nPaper: 120 GSM\r\nCol: 4 Col Front & 1 Col Back\r\nSecurity Features: UV Thread, UV Emblem, Micro Text, Numbering Guilloche, Signature in UV & Flip Character\r\n'),(53,453,'2','1',' 5000 nos'),(53,454,'3','1',' 8.50/-'),(53,455,'4','1',' 42500/-'),(53,456,'0','2',' 2'),(53,457,'1','2',' Customized 3D hologram Master'),(53,458,'2','2',' -'),(53,459,'3','2',' -'),(53,460,'4','2',' 50000/-'),(53,461,'0','3',' 3'),(53,462,'1','3',' Hot Foil'),(53,463,'2','3',' -'),(53,464,'3','3',' -'),(53,465,'4','3',' 15000/-'),(53,466,'0','4',' 4'),(53,467,'1','4',' Foil Stamping '),(53,468,'2','4',' 5000 nos'),(53,469,'3','4',' 0.60/-'),(53,470,'4','4',' 3000/-'),(54,471,'0','0',' SR.NO.'),(54,472,'1','0',' ITEM'),(54,473,'2','0',' QUANTITY'),(54,474,'3','0',' RATE'),(54,475,'0','1',' 1.'),(54,476,'1','1','WINCOR RP ROLL-KALUPUR CO.OP BANK LTD.,\r\nSIZE : 79 MM X 350 MTRS,'),(54,477,'2','1',' 100 ROLLS'),(54,478,'3','1','60 GSM - 390/- PER ROLL\r\n55 GSM - 370/- PER ROLL'),(54,479,'0','2',' 2.'),(54,480,'1','2',' WINCOR RP ROLL- THE AHMEDABAD DIST.CO-OP BANK LTD.,\r\nSIZE : 79 MM X 350 MTRS,'),(54,481,'2','2','  100 ROLLS'),(54,482,'3','2','60 GSM - 390/- PER ROLL\r\n55 GSM - 370/- PER ROLL'),(55,483,'0','0','Sr. No.'),(55,484,'1','0','Item Code'),(55,485,'2','0','Item Description'),(55,486,'3','0','Quantity'),(55,487,'4','0','Price'),(55,488,'5','0','Remark'),(55,489,'0','1','sfd'),(55,490,'1','1','dsfds'),(55,491,'2','1','dsff'),(55,492,'3','1','dsdf'),(55,493,'4','1','dsfdsfdsf'),(55,494,'5','1','sdf'),(56,495,'0','0','SR.NO. '),(56,496,'1','0',' ITEM'),(56,497,'2','0',' QUANITY'),(56,498,'3','0',' RATE'),(56,499,'0','1',' 1.'),(56,500,'1','1','Pin Mailer,\r\nSize : 9.25\" x 4\" x 3 Ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\n'),(56,501,'2','1',' 50000 Pcs'),(56,502,'3','1',' One Colour Printing - 1.40/- Per Pcs\r\n\r\nMulticolor Printing - Rs.1.80/- Per Pcs'),(57,503,'0','0',' SR. NO.'),(57,504,'1','0','ITEM'),(57,505,'2','0',' QUANTITY'),(57,506,'3','0',' RATE'),(57,507,'0','1','1.'),(57,508,'1','1',' AXIS BANK DIVIDEND WARRANT-ION EXCHANGE LTD.,\r\nPAPER - 95 GSM MICR,\r\nPRINTING - BLACK,INVISIBLE,RAINBOW BACKGROUND '),(57,509,'2','1','3550 PCS (INCLUDING NPCI)'),(57,510,'3','1',' 10500/- LOT CHARGES '),(58,511,'0','0',' SR. NO. '),(58,512,'1','0','  ITEM '),(58,513,'2','0','  QUANTITY '),(58,514,'3','0','  RATE '),(58,515,'0','1',' 1. '),(58,516,'1','1','Welcome letter,100 gsm maplitho, 4 colour printing, cutting & packing (500 each)\r\nWith variable data printing'),(58,517,'2','1','10 LACS'),(58,518,'3','1',' RS.1.12/- PER PCS'),(58,519,'0','2','2. '),(58,520,'1','2','Envelope,Size : 9 inch x 4 1/4 inch, 130 gsm art paper, 4 colour printing, punch, punching& making\r\n'),(58,521,'2','2','10 LACS'),(58,522,'3','2',' RS.1.70/- PER PCS'),(58,523,'0','3','3. '),(58,524,'1','3','Card pouch,2 1/4 inch x 3.5\" inch,130 gsm art paper, 4 colour printing, lamination, punch, punching,making & packing\r\n'),(58,525,'2','3','10 LACS'),(58,526,'3','3',' RS.0.69/- PER PCS'),(58,527,'0','4','4.'),(58,528,'1','4','Leaflet,90 gsm art paper, 4 colour printing, cutting & packing\r\n'),(58,529,'2','4','10 LACS'),(58,530,'3','4','4 COLOUR PRINTING BOTH SIDE - RS.0.60/- PER PCS\r\n4 COLOUR PRINTING ONE SIDE - RS.0.55/- PER PCS'),(59,531,'0','0',' SR.NO.'),(59,532,'1','0',' ITEM'),(59,533,'2','0',' QUANTITY'),(59,534,'3','0',' RATE'),(59,535,'0','1',' 1.'),(59,536,'1','1','HDFC BANK DIVIDEND WARRANT-PANAMA LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR PAPER,\r\nPRINTING : BLUE,INVISIBLE INK'),(59,537,'2','1',' 1550 PCS'),(59,538,'3','1',' 7750/- LOT CHARGES'),(60,539,'0','0',' Sr. No.'),(60,540,'1','0',' Item'),(60,541,'2','0',' Quantity'),(60,542,'3','0',' Rate'),(60,543,'0','1',' 1.'),(60,544,'1','1','Indian Bank Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : 4 colour printing'),(60,545,'2','1','2 Lacs'),(60,546,'3','1',' Rs.1.20/- Per Pin Mailer'),(61,547,'0','0',' SR. NO.'),(61,548,'1','0','ITEM '),(61,549,'2','0','QUANTITY '),(61,550,'3','0',' RATE'),(61,551,'0','1',' 1.'),(61,552,'1','1','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(61,553,'2','1','             10000 Tickets '),(61,554,'3','1','      Rs.5.00/- Per Ticket'),(64,555,'0','0',' SR. NO. '),(64,556,'1','0','ITEM  '),(64,557,'2','0','QUANTITY  '),(64,558,'3','0',' RATE '),(64,559,'0','1',' 1. '),(64,560,'1','1','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering  '),(64,561,'2','1','             10000 Tickets  '),(64,562,'3','1','      Rs.5.00/- Per Ticket '),(64,563,'0','2',' 2'),(64,564,'1','2',' test'),(64,565,'2','2',' test'),(64,566,'3','2',' test'),(65,567,'0','0',' Sr.No.'),(65,568,'1','0',' Item'),(65,569,'2','0',' Quantity'),(65,570,'3','0','Rate'),(65,571,'0','1','1.'),(65,572,'1','1','C NOTE - IP EXPRESS CARGO,\r\nSIZE : 10 INCH X 6 INCH,\r\nPRINTING : ALL 4 COPIES FRONT SIDE GREY & 1ST,2ND & 3RD COPY BACKSIDE GREY\r\n'),(65,573,'2','1',' 30000 SETS'),(65,574,'3','1',' 4.75/- PER SET'),(77,575,'\'0\'','\'0\'',' SR. NO.'),(77,576,'\'1\'','\'0\'','ITEM '),(77,577,'\'2\'','\'0\'','QUANTITY '),(77,578,'\'3\'','\'0\'',' RATE'),(77,579,'\'0\'','\'1\'',' 1.'),(77,580,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(77,581,'\'2\'','\'1\'','             10000 Tickets '),(77,582,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(78,583,'\'0\'','\'0\'',' SR. NO.'),(78,584,'\'1\'','\'0\'','ITEM '),(78,585,'\'2\'','\'0\'','QUANTITY '),(78,586,'\'3\'','\'0\'',' RATE'),(78,587,'\'0\'','\'1\'',' 1.'),(78,588,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(78,589,'\'2\'','\'1\'','             10000 Tickets '),(78,590,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(79,591,'\'0\'','\'0\'',' SR. NO.'),(79,592,'\'1\'','\'0\'','ITEM '),(79,593,'\'2\'','\'0\'','QUANTITY '),(79,594,'\'3\'','\'0\'',' RATE'),(79,595,'\'0\'','\'1\'',' 1.'),(79,596,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(79,597,'\'2\'','\'1\'','             10000 Tickets '),(79,598,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(80,599,'\'0\'','\'0\'',' SR. NO.'),(80,600,'\'1\'','\'0\'','ITEM '),(80,601,'\'2\'','\'0\'','QUANTITY '),(80,602,'\'3\'','\'0\'',' RATE'),(80,603,'\'0\'','\'1\'',' 1.'),(80,604,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(80,605,'\'2\'','\'1\'','             10000 Tickets '),(80,606,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(81,607,'\'0\'','\'0\'',' SR. NO.'),(81,608,'\'1\'','\'0\'','ITEM '),(81,609,'\'2\'','\'0\'','QUANTITY '),(81,610,'\'3\'','\'0\'',' RATE'),(81,611,'\'0\'','\'1\'',' 1.'),(81,612,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(81,613,'\'2\'','\'1\'','             10000 Tickets '),(81,614,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(82,615,'\'0\'','\'0\'',' SR. NO.'),(82,616,'\'1\'','\'0\'','ITEM '),(82,617,'\'2\'','\'0\'','QUANTITY '),(82,618,'\'3\'','\'0\'',' RATE'),(82,619,'\'0\'','\'1\'',' 1.'),(82,620,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(82,621,'\'2\'','\'1\'','             10000 Tickets '),(82,622,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(86,623,'\'0\'','\'0\'',' SR. NO.'),(86,624,'\'1\'','\'0\'','ITEM '),(86,625,'\'2\'','\'0\'','QUANTITY '),(86,626,'\'3\'','\'0\'',' RATE'),(86,627,'\'0\'','\'1\'',' 1.'),(86,628,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(86,629,'\'2\'','\'1\'','             10000 Tickets '),(86,630,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(87,631,'\'0\'','\'0\'',' SR. NO.'),(87,632,'\'1\'','\'0\'','ITEM '),(87,633,'\'2\'','\'0\'','QUANTITY '),(87,634,'\'3\'','\'0\'',' RATE'),(87,635,'\'0\'','\'1\'',' 1.'),(87,636,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(87,637,'\'2\'','\'1\'','             10000 Tickets '),(87,638,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(88,639,'\'0\'','\'0\'',' SR. NO.'),(88,640,'\'1\'','\'0\'','ITEM '),(88,641,'\'2\'','\'0\'','QUANTITY '),(88,642,'\'3\'','\'0\'',' RATE'),(88,643,'\'0\'','\'1\'',' 1.'),(88,644,'\'1\'','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(88,645,'\'2\'','\'1\'','             10000 Tickets '),(88,646,'\'3\'','\'1\'','      Rs.5.00/- Per Ticket'),(95,647,'0','\'0\'',' SR. NO.'),(95,648,'1','\'0\'','ITEM '),(95,649,'2','\'0\'','QUANTITY '),(95,650,'3','\'0\'',' RATE'),(95,651,'0','\'1\'',' 1.'),(95,652,'1','\'1\'','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(95,653,'2','\'1\'','             10000 Tickets '),(95,654,'3','\'1\'','      Rs.5.00/- Per Ticket'),(96,655,'0','0',' SR. NO.'),(96,656,'1','0','ITEM '),(96,657,'2','0','QUANTITY '),(96,658,'3','0',' RATE'),(96,659,'0','1',' 1.'),(96,660,'1','1','Entertainment Ticket\r\nSize : 3 inch x 8 inch\r\nPaper : 150 GSM\r\nColours : 4 Colour printing with numbering '),(96,661,'2','1','             10000 Tickets '),(96,662,'3','1','      Rs.5.00/- Per Ticket'),(97,663,'0','0',' 1.'),(97,664,'1','0','ICICI BANK DIVIDEND WARRANT - HAWKINS COOKERS LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : DARK BROWN,INVISIBLE INK	'),(97,665,'2','0','5550 PCS (INCLUDING NPCI)'),(97,666,'3','0','RS.2.50/- PER PCS'),(97,667,'0','1',' 2.'),(97,668,'1','1','HDFC BANK DIVIDEND WARRANT - ADF FOODS LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : DARK GREEN,INVISIBLE INK	\r\n'),(97,669,'2','1',' 5050 PCS(INCLUDING NPCI)'),(97,670,'3','1',' RS.2.50/- PER PCS'),(98,671,'0','0','SR.NO.'),(98,672,'1','0',' ITEM'),(98,673,'2','0','QUANTITY'),(98,674,'3','0',' RATE'),(98,675,'0','1','1.'),(98,676,'1','1','DIEBOLD D429 RP ROLL,\r\nSIZE : 79 MM X 200 MTRS,\r\nPAPER : 58 GSM THERMAL PAPER,\r\n'),(98,677,'2','1','100 ROLLS'),(98,678,'3','1','Rs.280/- PER ROLL'),(99,679,'0','0','SR.NO.'),(99,680,'1','0',' ITEM'),(99,681,'2','0','QUANTITY'),(99,682,'3','0',' RATE'),(99,683,'0','1','1.'),(99,684,'1','1','DIEBOLD D429 RP ROLL,\r\nSIZE : 79 MM X 200 MTRS,\r\nPAPER : 58 GSM THERMAL PAPER,\r\n'),(99,685,'2','1','100 ROLLS'),(99,686,'3','1','Rs.280/- PER ROLL'),(100,687,'0','0','SR.NO.I '),(100,688,'1','0',' ITEM '),(100,689,'2','0','  QUANTITY'),(100,690,'3','0','  RATE'),(100,691,'0','1',' 1.'),(100,692,'1','1','DIVIDEND WARRANTS,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : SINGLE COLOUR '),(100,693,'2','1',' 8000 PCS'),(100,694,'3','1','Rs.1.90/- PER PCS\r\n\r\nRs.3000/- Extra for 4 colour printing'),(100,695,'0','2','2.'),(100,696,'1','2','INTIMATION LETTER,\r\nSIZE : 15 INCH X 12 INCH,\r\nPAPER : 70 GSM MAPLITHO,\r\nPRINTING : SINGLE COLOUR'),(100,697,'2','2',' 3500 SHEETS (7000 PCS)'),(100,698,'3','2','Rs.9500/- LOT CHARGES'),(101,699,'0','0',' SR.NO.'),(101,700,'1','0','ITEM'),(101,701,'2','0','QUANTITY '),(101,702,'3','0','RATE'),(101,703,'0','1','1.'),(101,704,'1','1','CHEQUE SHEET - SUCO SOUHARDA SAHAKARI BANK LTD.,\r\nSize : 214 mm X 279.4 mm,\r\nPAPER : 95 GSM MICR PAPER,\r\nFRONT SIDE : BLACK,YELLOW,INDIA RED,INVISIBLE INK,BLUE'),(101,705,'2','1','35000 SHEETS (105000 LVS)'),(101,706,'3','1',' Rs.1.50/- PER SHEET'),(102,707,'0','0',' SR.NO.'),(102,708,'1','0',' ITEM'),(102,709,'2','0',' QUANTITY'),(102,710,'3','0',' RATE'),(102,711,'0','1',' 1.'),(102,712,'1','1','OMR Sheet - Odisha Nurses & Midwives Examination,\r\nSize : 9 inch x 12 inch x 2 ply,\r\n1st part - 105 GSM,\r\n2nd part - 68 GSM,\r\n'),(102,713,'2','1',' 10000 Sheets '),(102,714,'3','1','Rs.3.80/- Per Sheet'),(103,715,'0','0','Sr. No.'),(103,716,'1','0','Item Code'),(103,717,'2','0','Item Description'),(103,718,'3','0','Quantity'),(103,719,'4','0','Price'),(103,720,'5','0','Remark'),(103,721,'0','1','qq'),(103,722,'1','1','qq'),(103,723,'2','1','qq'),(103,724,'3','1','qq'),(103,725,'4','1','qq'),(103,726,'5','1','qq'),(104,727,'0','0',' SR.NO.'),(104,728,'1','0',' ITEM'),(104,729,'2','0',' QUANTITY'),(104,730,'3','0',' RATE'),(104,731,'0','1',' 1.'),(104,732,'1','1','RSWS S2 2022 TICKETS,\r\nSize : 3 inch x 6 inch,\r\nPaper : 197 GSM Colour center paper\r\nPrinting : Front side CMYK + Back side Black + BIV Black'),(104,733,'2','1','8 LACS'),(104,734,'3','1',' Rs.5.50/- Per Ticket'),(105,735,'0','0',' SR.NO.'),(105,736,'1','0',' ITEM'),(105,737,'2','0',' QUANTITY'),(105,738,'3','0',' RATE'),(105,739,'0','1','1.'),(105,740,'1','1','FIFA U17 WWC INDIA 2022,\r\nSize : 3 inch x 8 inch,\r\nPaper : 150 GSM Non Infused Paper,\r\nPrinting : Front side CMYK + Back side Black + BIV Black'),(105,741,'2','1','1 LACS'),(105,742,'3','1',' Rs.5.00/- Per Ticket'),(106,743,'0','0','Sr. No.'),(106,744,'1','0','Item Code'),(106,745,'2','0','Item Description'),(106,746,'3','0','Quantity'),(106,747,'4','0','Price'),(106,748,'5','0','Remark'),(106,749,'0','1','1'),(106,750,'1','1','code 1'),(106,751,'2','1','desc 1'),(106,752,'3','1','20'),(106,753,'4','1','3000'),(106,754,'5','1','remark 1'),(107,755,'0','0','Sr. No.'),(107,756,'1','0','Item Code'),(107,757,'2','0','Item Description'),(107,758,'3','0','Quantity'),(107,759,'4','0','Price'),(107,760,'5','0','Remark'),(107,761,'0','1','1'),(107,762,'1','1','code 1'),(107,763,'2','1','desc 2'),(107,764,'3','1','20'),(107,765,'4','1','20000'),(107,766,'5','1','remark 1'),(108,767,'0','0','Sr. No.'),(108,768,'1','0','Item Code'),(108,769,'2','0','Item Description'),(108,770,'3','0','Quantity'),(108,771,'4','0','Price'),(108,772,'5','0','Remark'),(108,773,'0','1','1'),(108,774,'1','1','code 1'),(108,775,'2','1','desc 1'),(108,776,'3','1','1'),(108,777,'4','1','300'),(108,778,'5','1','Remark 1'),(109,779,'0','0','Sr. No.'),(109,780,'1','0','Item Code'),(109,781,'2','0','Item Description'),(109,782,'3','0','Quantity'),(109,783,'4','0','Price'),(109,784,'5','0','Remark'),(109,785,'0','1','1'),(109,786,'1','1','code 1'),(109,787,'2','1','desc 1'),(109,788,'3','1','20'),(109,789,'4','1','200000'),(109,790,'5','1','Remark 1'),(109,791,'0','2','2'),(109,792,'1','2','code 2'),(109,793,'2','2','desc 2'),(109,794,'3','2','30'),(109,795,'4','2','3000'),(109,796,'5','2','remark 2'),(110,797,'0','0',' SR.NO.'),(110,798,'1','0','ITEM'),(110,799,'2','0','QUANTITY'),(110,800,'3','0','RATE'),(110,801,'0','1','1.\r\n'),(110,802,'1','1','1. ENTERTAINMENT TICKET,\r\nSIZE : 3 INCH X 8 INCH,\r\nSecurity Features - \r\n1-Copy Void\r\n2-UVI Invisible Ink \r\n3-BIV Sensor\r\n4-Micro Line \r\n'),(110,803,'2','1',' 47000 TICKETS'),(110,804,'3','1','INFUSED COLOUR CENTER PAPER - Rs.8.00/- PER TICKET\r\n\r\nNON-INFUSED PAPER - Rs.6.00/- PER TICKET'),(111,805,'0','0','  Sr No    '),(111,806,'1','0','Product Description      '),(111,807,'2','0',' Rate'),(111,808,'0','1','1.      '),(111,809,'1','1',' Diebold Atm Roll\r\nSize:80mm X 400 Mtrs\r\nPaper: 58 GSM\r\ndiebold Sensor  '),(111,810,'2','1','      425/- Per Roll'),(111,811,'0','2','2.    '),(111,812,'1','2','Diebold Atm Roll\r\nSize:56mm X 65 Mtrs\r\nPaper: 55 GSM'),(111,813,'2','2','      47/- Per Roll'),(111,814,'0','3',' 3.  '),(111,815,'1','3','LIPI Atm Roll\r\nSize:80mmX200 Mtrs\r\nPaper:58 GSM'),(111,816,'2','3','   240/- Per Roll'),(111,817,'0','4',' 4.  '),(111,818,'1','4',' LIPI Atm Roll\r\nSize:79mm X 80 Mtrs\r\nPaper:58 GSM'),(111,819,'2','4','75/- Per Roll   '),(111,820,'0','5',' 5.  '),(111,821,'1','5','   LIPI Atm (New Recycler)\r\nSize:80mm X 360 Mtrs\r\nPaper:58 GSM'),(111,822,'2','5','400/- Per Roll   '),(111,823,'0','6',' 6.  '),(111,824,'1','6','   LIPI Atm (New Recycler)\r\nSize:56mm X 65 Mtrs\r\nPaper: 58 GSM'),(111,825,'2','6','47/- Per Roll   '),(111,826,'0','7',' 7.  '),(111,827,'1','7','LIPI Cash Deposit Machine Roll\r\nSize:80mm X 225 Mtrs\r\nPaper:64 GSM'),(111,828,'2','7','260/- Per Roll   '),(111,829,'0','8',' 8.  '),(111,830,'1','8','   Kioshk/CDM Machine\r\nSize: 80 mm X 70 Mtrs\r\nPaper:75 GSM'),(111,831,'2','8','   72/- Per Roll'),(112,832,'0','0',' SR.NO.'),(112,833,'1','0',' ITEM'),(112,834,'2','0',' QUANTITY'),(112,835,'3','0',' RATE'),(112,836,'0','1','1.'),(112,837,'1','1',' Internet Banking Pin Mailer\r\nSize : 6.5 Inch x 4 Inch x 3 Ply\r\nPaper : 58 GSM + 58 GSM + 68 GSM'),(112,838,'2','1','25000 PCS'),(112,839,'3','1','Rs.1.85/- (GST & Freight charges included )'),(113,840,'0','0',' SR.NO.'),(113,841,'1','0',' ITEM '),(113,842,'2','0',' QUANTITY '),(113,843,'3','0',' RATE'),(113,844,'0','1',' 1.'),(113,845,'1','1','BLANK STATIONERY - GREEN PAPER,\r\nSIZE : 7 INCH X 8 INCH,\r\nPAPER : 50 GSM,\r\nPACKING : 6000 SHEETS PER BOX'),(113,846,'2','1',' 6000 SHEETS'),(113,847,'3','1',' 0.75/- PER SHEET'),(114,848,'0','0','Sr.No. '),(114,849,'1','0',' Item '),(114,850,'2','0','Quantity  '),(114,851,'3','0','Rate '),(114,852,'0','1','1. '),(114,853,'1','1','ENTERTAINMENT TICKET,\r\nSIZE : 3 INCH X 8 INCH,\r\n170 GSM Non Infused Paper,\r\nPrinting : 4 Colour front side & 1 colour back side\r\n\r\n '),(114,854,'2','1','15000 Pcs '),(114,855,'3','1','Rs.6.50/- Per Ticket '),(114,856,'0','2','2.'),(114,857,'1','2','ENTERTAINMENT TICKET,\r\nSIZE : 3 INCH X 6 INCH,\r\n170 GSM Non Infused Paper,\r\nPrinting : 4 Colour front side & 1 colour back side\r\n'),(114,858,'2','2',' 15000 Pcs'),(114,859,'3','2','Rs.4.50/- Per Ticket '),(115,860,'0','0','SR.NO.'),(115,861,'1','0','ITEM'),(115,862,'2','0','QUANTITY '),(115,863,'3','0','RATE'),(115,864,'0','1','1.'),(115,865,'1','1','ENTERTAINMENT TICKET -LEGENDS LEAGUE CRICKET MARKET - 2022,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : FRONT SIDE CMYK & BACK SIDE BLACK + BIV BLACK'),(115,866,'2','1','1 LACS TICKETS'),(115,867,'3','1','Rs.5.00/- PER TICKET'),(116,868,'0','0','   Sr No'),(116,869,'1','0','Description   '),(116,870,'2','0','Quantity  in pcs'),(116,871,'3','0','Rate Per Pc '),(116,872,'4','0','Total '),(116,873,'0','1','   1.'),(116,874,'1','1','printing of forms on carbonless paper\r\nSingle Side Single Color Paper Change\r\n1st Copy Blue color 2nd Copy Red Color\r\nSize: 9\'\' X 12\'\'   '),(116,875,'2','1','   10000 pcs'),(116,876,'3','1','2.2 /-'),(116,877,'4','1','22000 /-'),(117,878,'0','0',' SR.NO.'),(117,879,'1','0','ITEM '),(117,880,'2','0','QUANTITY'),(117,881,'3','0',' RATE'),(117,882,'0','1','1.'),(117,883,'1','1','J & K BANK PIN MAILER (CARBONLESS),\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPRINTING : ONE COLOUR'),(117,884,'2','1','65000 PCS'),(117,885,'3','1','Rs.1.92/- Per Pin Mailer '),(118,886,'0','0','SR.NO.'),(118,887,'1','0','ITEM'),(118,888,'2','0',' QUANTITY'),(118,889,'3','0','RATE'),(118,890,'0','1','1.'),(118,891,'1','1','JASMINE POS ROLLS,\r\nSIZE : 79 MM X 30 MTRS,\r\nPRINTING : FRONT SIDE RED & BACK SIDE BLACK'),(118,892,'2','1',' 250 ROLLS'),(118,893,'3','1','60 GSM - 40/- PER ROLL\r\n\r\n80 GSM - 59/- PER ROLL'),(119,894,'0','0','  SR.NO.'),(119,895,'1','0','  ITEM '),(119,896,'2','0','  QUANTITY '),(119,897,'3','0','  RATE'),(119,898,'0','1',' 1.'),(119,899,'1','1','ZENPAY PIN MAILER - RBL BANK,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPRINTING : BLACK COLOUR'),(119,900,'2','1',' 10000 PCS'),(119,901,'3','1',' Rs.2.30/- PER PIN MAILER'),(120,902,'0','0',' Sr No'),(120,903,'1','0','Description '),(120,904,'2','0',' Quantity in Weight'),(120,905,'3','0',' Rate per USD'),(120,906,'0','1',' 1'),(120,907,'1','1',' Watermark Cheque Paper In Reels With Invisible UV Fibers\r\nGrammage : CBSI 95GSM\r\nSize:242mm X 6000m\r\n'),(120,908,'2','1',' 3864 KGS'),(120,909,'3','1',' $ 2550 per ton'),(120,910,'0','2',' 2'),(120,911,'1','2',' Watermark Cheque Paper In Reels With Invisible UV Fibers\r\nGrammage: CBSI 95GSM\r\nSize:300mm X 6000m\r\n'),(120,912,'2','2',' 12654 KGS'),(120,913,'3','2',' $ 2550 per ton'),(120,914,'0','3',' 3'),(120,915,'1','3',' Watermark Cheque Paper In Reels With Invisible UV Fibers\r\nGrammage: CBSI 95GSM\r\nSize:70cm X 100cm\r\n'),(120,916,'2','3',' 8044 KGS'),(120,917,'3','3',' $ 2600 per ton'),(120,918,'0','4',' 4'),(120,919,'1','4',' Watermark Dandy Roll'),(120,920,'2','4',' -'),(120,921,'3','4',' $ 5000  Per Dandy'),(121,922,'0','0',' Security Paper Features Both\r\nSide Mark sheet'),(121,923,'1','0',' Quantity'),(121,924,'2','0',' Paper GSM'),(121,925,'3','0','Security Paper Features Both Side of\r\n1000 Degree Certificate '),(121,926,'4','0',' Paper with GSM for 1000 Quantity'),(121,927,'0','1',' 1. High Resolution Border'),(121,928,'1','1',' For 5,000 Nos.\r\nof Marksheets / Gradesheets\r\n(Single order single design)'),(121,929,'2','1',' 150 GSM Tear Resistant\r\nPaper @ Rs. 21.0/-\r\nper Document\r\n(18% GST Extra)'),(121,930,'3','1',' Basic Static Designing Security Features:\r\n1. High Resolution Border'),(121,931,'4','1',' 250 GSM Tear Resistant Paper\r\n@ Rs. 55.0/- per Document\r\n(18% GST Extra)'),(121,932,'0','2',' 2. Guilloche Pattern Design'),(121,933,'1','2',' '),(121,934,'2','2',' '),(121,935,'3','2',' 2. Guilloche Pattern Design'),(121,936,'4','2',' '),(121,937,'0','3',' 3. Micro Text Line'),(121,938,'1','3',' '),(121,939,'2','3',' '),(121,940,'3','3',' 3. Anti-Copy Void Pantograph Patch'),(121,941,'4','3',' '),(121,942,'0','4',' 4. Copy Void Pantograph Patch'),(121,943,'1','4',' '),(121,944,'2','4',' '),(121,945,'3','4',' 4. Micro Text Line'),(121,946,'4','4',' '),(121,947,'0','5',' 5. Dual Hidden Image'),(121,948,'1','5',' '),(121,949,'2','5',' '),(121,950,'3','5',' 5. Latent Image'),(121,951,'4','5',' '),(121,952,'0','6',' 6. Dual Ghost Image'),(121,953,'1','6',' '),(121,954,'2','6',' '),(121,955,'3','6',' 6. Dual Hidden Image'),(121,956,'4','6',' '),(121,957,'0','7',' 7. Latent Image'),(121,958,'1','7',' '),(121,959,'2','7',' '),(121,960,'3','7',' 7. Relief Design / Text'),(121,961,'4','7',' '),(121,962,'0','8','8. Relief Design'),(121,963,'1','8',' '),(121,964,'2','8',' '),(121,965,'3','8',' 8. Watermark Logo front & back'),(121,966,'4','8',' '),(121,967,'0','9',' 9.Watermark Logo/ Text'),(121,968,'1','9',' '),(121,969,'2','9',' '),(121,970,'3','9',' 9. Micro Text in Logo'),(121,971,'4','9',' '),(121,972,'0','10',' 10. Serial Numbering'),(121,973,'1','10',' '),(121,974,'2','10',' '),(121,975,'3','10',' Advance Static Security Features:\r\n10. Invisible UV Ink – Logo'),(121,976,'4','10',' '),(121,977,'0','11',' 11. Invisible UV Ink – Logo'),(121,978,'1','11',' '),(121,979,'2','11',' '),(121,980,'3','11',' 11. Hot Foil Stamping – Gold'),(121,981,'4','11',' '),(122,982,'0','0',' SR.NO. '),(122,983,'1','0',' ITEM '),(122,984,'2','0',' QUANTITY '),(122,985,'0','1',' 1. '),(122,986,'1','1','WELCOME LETTER,\r\nSIZE : A4,\r\nPAPER : 100 GSM MAPLITHO,\r\nPRINTING : 4+0 COLOUR'),(122,987,'2','1','3000 PCS  - Rs.2.40/-\r\n5000 PCS  - Rs.2.30/- '),(122,988,'0','2',' 2. '),(122,989,'1','2',' USER MANUAL,\r\nSIZE : AS PER PDF GIVEN,\r\nPAPER : 130 GSM ART PAPER,\r\nPRINTING : 4+4 COLOUR'),(122,990,'2','2','3000 PCS - Rs.2.10/-\r\n5000 PCS - Rs.2.20/-'),(122,991,'0','3',' 3. '),(122,992,'1','3',' POUCHES,\r\nSIZE : AS PER PDF GIVEN,\r\nPAPER : 130 GSM ART PAPER,\r\nPRINTING : 4 COLOUR + LAMINATION+PUNCHING+PASTING'),(122,993,'2','3','3000 PCS - Rs.3.20/-\r\n5000 PCS - Rs.3.05/-'),(122,994,'0','4',' 4. '),(122,995,'1','4','ENVELOPES,\r\nSIZE : 9.5 INCH X 4.25 INCH,\r\nPAPER : 170 GSM ART PAPER,\r\nPRINTING : 4 COLOUR '),(122,996,'2','4','3000 PCS - Rs.5.40/-\r\n5000 PCS - Rs.5.15/-'),(123,997,'0','0',' SR.NO.'),(123,998,'1','0',' ITEM '),(123,999,'2','0',' QUANTITY'),(123,1000,'3','0',' RATE'),(123,1001,'0','1','1.'),(123,1002,'1','1','AFGHAN UNITED BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPRINTING : CMYK'),(123,1003,'2','1','2 LACS '),(123,1004,'3','1','Rs.1.80/- Per Pin Mailer'),(124,1005,'0','0','SR.NO.'),(124,1006,'1','0','ITEM'),(124,1007,'2','0','QUANTITY'),(124,1008,'3','0',' RATE'),(124,1009,'0','1','1.'),(124,1010,'1','1','PIN MAILER,\r\nSIZE : 7 INCH X 4 INCH,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK'),(124,1011,'2','1','10000 PCS'),(124,1012,'3','1','Rs.2.25/- '),(125,1013,'0','0','SR.NO.'),(125,1014,'1','0','ITEM'),(125,1015,'2','0','QUANTITY'),(125,1016,'3','0',' RATE'),(125,1017,'0','1','1.'),(125,1018,'1','1','BLANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),(125,1019,'2','1','130000 PCS'),(125,1020,'3','1','0.98/- PER PIN MAILER'),(126,1021,'0','0',' SR.NO.'),(126,1022,'1','0','ITEM'),(126,1023,'2','0',' QUANTITY'),(126,1024,'3','0',' RATE'),(126,1025,'0','1','1.'),(126,1026,'1','1',' POS ROLL - ROKEL COMMERCIAL BANK,\r\nSIZE : 56 mm x 15 mtrs x 48 GSM,\r\nPRINTING : CMYK ON FRONT SIDE'),(126,1027,'2','1','5000 ROLLS'),(126,1028,'3','1','Rs.22/- Per Roll'),(127,1029,'0','0',' SR.NO.'),(127,1030,'1','0','ITEM'),(127,1031,'2','0',' QUANTITY'),(127,1032,'3','0','RATE'),(127,1033,'0','1',' 1.'),(127,1034,'1','1',' WELCOME LETTER,\r\nA5,90GSM MAPLITHO PAPER,\r\n4 COLOUR ON FRONT & BLACK BACK SIDE'),(127,1035,'2','1','5000 PCS\r\n10000 PCS\r\n20000 PCS'),(127,1036,'3','1','Rs.2.30/- PER PCS\r\nRs.1.92/- PER PCS\r\nRs.1.54/- PER PCS'),(127,1037,'0','2',' 2.'),(127,1038,'1','2','PIN MAILER,\r\n9 INCH X 4 INCH X 3 PLY,\r\n60+60+70 GSM NORMAL PAPER'),(127,1039,'2','2','5000 PCS\r\n10000 PCS\r\n20000 PCS'),(127,1040,'3','2','Rs.2.77/- PER PCS\r\nRs.2.31/- PER PCS\r\nRs.1.76/- PER PCS'),(127,1041,'0','3',' 3.'),(127,1042,'1','3',' ENVELOPE,\r\nA5,130 GSM ART PAPER,DYE CUTTING,PASTING AND STRIP CUMMING,WITHOUT LAMINATION'),(127,1043,'2','3','5000 PCS\r\n10000 PCS\r\n20000 PCS'),(127,1044,'3','3','Rs.4.28/- PER PCS\r\nRs.3.57/- PER PCS\r\nRs.3.19/- PER PCS\r\n'),(128,1045,'0','0','  SR.NO'),(128,1046,'1','0','  Description'),(128,1047,'2','0','  Quantity in Pcs'),(128,1048,'3','0',' Rate Per Pc'),(128,1049,'0','1','  1'),(128,1050,'1','1','  Blank Thermal Paper Rolls\r\nSize: 79mm X 40 Mtrs\r\nPaper : 48 GSM\r\nBlack Image\r\n'),(128,1051,'2','1','  3,00,000 pcs'),(128,1052,'3','1',' 32/- Per Pc'),(128,1053,'0','2','  2'),(128,1054,'1','2','  Blank Thermal Paper Rolls\r\nSize: 79mm X 40 Mtrs\r\nPaper : 70 GSM\r\nBlack Image\r\n'),(128,1055,'2','2','  3,00,000 pcs'),(128,1056,'3','2',' 42/- Per Pc'),(129,1057,'0','0','SR.NO.'),(129,1058,'1','0','ITEM '),(129,1059,'2','0',' QUANTITY'),(129,1060,'3','0','RATE'),(129,1061,'0','1','1.'),(129,1062,'1','1','DIRECT THERMAL PLAIN BARCODE LABELS,\r\nSIZE : 4 INCH X 6 INCH,\r\n250 LABELS IN EACH ROLLS,\r\nCORE ID : 1 INCH '),(129,1063,'2','1','400 ROLLS\r\n(100000 PCS)'),(129,1064,'3','1','196/- PER ROLL'),(130,1065,'0','0','SR.NO. '),(130,1066,'1','0',' ITEM '),(130,1067,'2','0',' QUANTITY '),(130,1068,'3','0',' RATE '),(130,1069,'0','1','1. '),(130,1070,'1','1','Window Envelope,\r\nNon-Laminated,\r\nOpen Size - 285 * 232MM 90GSM Maplitho paper with Strip Gumming'),(130,1071,'2','1','10000 PCS\r\n20000 PCS\r\n50000 PCS'),(130,1072,'3','1','Rs.1.89/- PER PCS\r\nRs.1.65/- PER PCS\r\nRs.1.29/- PER PCS'),(130,1073,'0','2',' 2.'),(130,1074,'1','2','Welcome Letter,\r\nSize : A4, 4 Colour Printing,80 GSM Maplitho'),(130,1075,'2','2',' 10000 PCS\r\n20000 PCS\r\n50000 PCS'),(130,1076,'3','2','Rs.2.71/- PER PCS\r\nRs.2.30/- PER PCS\r\nRs.1.65/- PER PCS'),(130,1077,'0','3',' 3.'),(130,1078,'1','3','Pin Mailer,\r\nSize : 9 inch x 4 inch x 3 ply,\r\nPaper : 60+60+70 GSM Normal Paper,Single colour printing '),(130,1079,'2','3',' 10000 PCS\r\n20000 PCS\r\n50000 PCS'),(130,1080,'3','3','Rs.2.31/- PER PCS\r\nRs.1.76/- PER PCS\r\nRs.1.65/- PER PCS'),(131,1081,'0','0','SR. NO.'),(131,1082,'1','0',' ITEM'),(131,1083,'2','0',' QUANTITY'),(131,1084,'3','0',' RATE'),(131,1085,'0','1',' 1.'),(131,1086,'1','1',' WELCOME LETTER,\r\nSIZE : A4,\r\n120 GSM SS MAPLITHO PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & BACK SIDE NO PRINTING'),(131,1087,'2','1','1500 PCS'),(131,1088,'3','1','Rs.3.95/- PER PCS'),(131,1089,'0','2',' 2.'),(131,1090,'1','2','USE MANUAL,\r\nSIZE : A4,\r\n100 GSM ART PAPER,\r\nPRINTING : 4 COLOUR PRINTING ON FRONT AND BACK SIDE,FOLDING'),(131,1091,'2','2',' 1500 PCS'),(131,1092,'3','2','Rs.3.92/- PER PCS'),(131,1093,'0','3','3.'),(131,1094,'1','3','ENVELOPES,\r\nSIZE : 9.25 INCH X 4.25 INCH,\r\n170 GSM ART PAPER,4 COLOUR PRINTING'),(131,1095,'2','3','1500 PCS'),(131,1096,'3','3','Rs.7.40/- PER PCS'),(132,1101,'0','0',' SR. NO.'),(132,1102,'1','0','  ITEM '),(132,1103,'2','0','  QUANTITY'),(132,1104,'3','0','  RATE'),(132,1105,'0','1',' 1.'),(132,1106,'1','1','ENTERTAINMENT TICKET,\r\n170 GSM NON INFUSED PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & 1 COLOUR BACK SIDE\r\n'),(132,1107,'2','1',' 8,50,000 PCS'),(132,1108,'3','1','3 INCH X 8 INCH - Rs.4.00/-\r\n\r\n3 INCH X 6 INCH - Rs.3.00/-'),(132,1109,'0','2','2.'),(132,1110,'1','2','ENTERTAINMENT TICKET,\r\n197 GSM COLOUR CENTRE INFUSED PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & 1 COLOUR BACK SIDE'),(132,1111,'2','2','  8,50,000 PCS'),(132,1112,'3','2','3 INCH X 8 INCH - Rs.6.75/-\r\n\r\n3 INCH X 6 INCH - Rs.5.30/-'),(133,1113,'0','0','SR.NO. '),(133,1114,'1','0',' ITEM'),(133,1115,'2','0',' QUANTITY'),(133,1116,'3','0',' RATE'),(133,1117,'0','1','1.'),(133,1118,'1','1','SARASWATH GIFT PIN MAILER CARBONLESS,\r\nSIZE : 8.5 INCH X 4 INCH X 3 PLY,\r\nPAPER : 55CB + 55CFB + 55CF GSM,\r\nPRINTING : SINGLE COLOUR'),(133,1119,'2','1','50000 PCS'),(133,1120,'3','1','Rs.1.90/- PER PCS'),(134,1121,'0','0',' SR. NO. '),(134,1122,'1','0',' ITEM '),(134,1123,'2','0',' QUANTITY '),(134,1124,'3','0',' RATE '),(134,1125,'0','1',' 1. '),(134,1126,'1','1','  Sarex Overseas     \r\nTax Invoice,\r\nSize : 10 inch x 12 inch x 4 Ply\r\n'),(134,1127,'2','1','  2500 PCS'),(134,1128,'3','1',' Rs.9.00/- PER SET'),(134,1129,'0','2',' 2.'),(134,1130,'1','2',' Sarex Overseas    \r\nDelivery Challan,\r\nSize : 10 inch x 12 inch x 4 Ply\r\n'),(134,1131,'2','2',' 2500 PCS'),(134,1132,'3','2',' Rs..7.85/- PER SET'),(135,1133,'0','0','SR. NO.'),(135,1134,'1','0','ITEM'),(135,1135,'2','0',' QUANTITY '),(135,1136,'3','0',' RATE'),(135,1137,'0','1','1.'),(135,1138,'1','1','DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : SINGLE COLOUR'),(135,1139,'2','1','10000 PCS\r\n\r\n\r\n5000 PCS'),(135,1140,'3','1',' Rs. 2.10/- PER PCS\r\n\r\n\r\nRs. 3.25/- PER PCS'),(136,1141,'0','0','SR. NO.'),(136,1142,'1','0','ITEM '),(136,1143,'2','0',' QUANTITY'),(136,1144,'3','0','RATE'),(136,1145,'0','1','1.'),(136,1146,'1','1',' PAY ORDER - SAMATA SAHAKARI BANK LTD.,\r\nSIZE : 9 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR PAPER,\r\nPRINTING : T.GREEN,BLACK,INVISIBLE INK'),(136,1147,'2','1','5000 PCS'),(136,1148,'3','1','Rs. 1.95/- PER PCS'),(137,1149,'0','0','SR.NO.'),(137,1150,'1','0',' ITEM'),(137,1151,'2','0','QUANTITY'),(137,1152,'3','0',' RATE'),(137,1153,'0','1',' 1.'),(137,1154,'1','1','BLANK THERMAL POS ROLLS,\r\nSIZE : 79 MM X 50 MTRS,\r\nPAPER : 48 GSM THERMAL,\r\nCORE : 13 MM PLASTIC '),(137,1155,'2','1','200 ROLLS\r\n\r\n\r\n500 ROLLS'),(137,1156,'3','1','Rs.45/- PER ROLL\r\n\r\n\r\nRs.44/- PER ROLL'),(138,1157,'0','0',' SR.NO.'),(138,1158,'1','0','ITEM'),(138,1159,'2','0',' QUANTITY'),(138,1160,'3','0',' RATE'),(138,1161,'0','1',' 1.'),(138,1162,'1','1','WEBTRADE BARCODED PIN MAILER-ICICI SECURITES LTD.,\r\nSIZE : 8 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR\r\n	'),(138,1163,'2','1','10000 PCS\r\n\r\n\r\n20000 PCS'),(138,1164,'3','1','Rs.2.10/- PER PIN MAILER\r\n\r\n\r\nRs.1.80/- PER PIN MAILER'),(139,1165,'0','0',' SR.NO. '),(139,1166,'1','0','ITEM '),(139,1167,'2','0',' QUANTITY '),(139,1168,'0','1',' 1. '),(139,1169,'1','1',' Pin Mailer \r\nSize : 9 inch x 4 inch x 3 Ply\r\nPaper : 60+60+70 GSM\r\nPrinting : One colour printing\r\n '),(139,1170,'2','1','5000 Pcs - 3.00/- \r\n\r\n10000 Pcs - 2.47/-\r\n\r\n15000 Pcs - 2.30/-\r\n\r\n25000 Pcs - 1.98/-\r\n\r\n50000 Pcs - 1.76/-\r\n\r\nFor 2 colour printing 0.20/- extra per pin mailer '),(141,1179,'0','0',' SR. NO.'),(141,1180,'1','0',' ITEM'),(141,1181,'2','0',' QUANTITY'),(141,1182,'3','0',' RATE'),(141,1183,'0','1',' 1.'),(141,1184,'1','1','BLANK PIN MAILER / TM KEY PIN MAILER OF ICICI BANK LTD.,\r\nSIZE : 10 INCH X 6 INCH X 2 PLY,\r\nPAPER :  60 GSM + 70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),(141,1185,'2','1',' 10000 PCS'),(141,1186,'3','1',' Rs.2.75/- PER PIN MAILER'),(142,1187,'0','0',' SR.NO.'),(142,1188,'1','0',' ITEM'),(142,1189,'2','0',' QUANTITY'),(142,1190,'3','0',' RATE'),(142,1191,'0','1',' 1.'),(142,1192,'1','1',' Pin Mailer \r\nSize : 9 inch x 4 inch x 3 Ply\r\nPaper : 60+60+70 GSM\r\nPrinting : Multicolour printing'),(142,1193,'2','1',' 15000 PCS'),(142,1194,'3','1',' Rs.2.30/- PER PIN MAILER'),(135,1195,'0','2','2.'),(135,1196,'1','2','DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : 4 COLOUR PRINTING'),(135,1197,'2','2','10000 PCS\r\n\r\n\r\n5000 PCS'),(135,1198,'3','2',' Rs. 2.40/- PER PCS\r\n\r\n\r\nRs. 3.50/- PER PCS'),(143,1199,'0','0',' SR.NO.'),(143,1200,'1','0',' ITEM'),(143,1201,'2','0',' QUANTITY'),(143,1202,'3','0',' RATE'),(143,1203,'0','1',' 1.'),(143,1204,'1','1','BLANK PIN MAILER,\r\nSIZE : 9 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),(143,1205,'2','1',' 500 PCS\r\n\r\n1000 PCS\r\n\r\n5000 PCS'),(143,1206,'3','1','Rs. 9.00/- PER PCS\r\n\r\nRs. 5.50/- PER PCS\r\n\r\nRs. 1.85/- PER PCS'),(144,1207,'0','0','  SR.NO.'),(144,1208,'1','0','  ITEM'),(144,1209,'2','0','  QUANTITY'),(144,1210,'3','0','  RATE'),(144,1211,'0','1','  1.'),(144,1212,'1','1','  ENTERTAINMENT TICKET - ISL CFC 2022-23,\r\nSIZE : 3 INCHX  4 INCH,\r\nPAPER : COLOUR CENTER INFUSE PAPER,\r\nPRINTING : FRONT SIDE CMYK & BACK SIDE BLACK + BIV BLACK\r\n'),(144,1213,'2','1','  50000 PCS'),(144,1214,'3','1',' Rs. 4.25/- PER TICKET'),(145,1215,'0','0','  SR. NO.'),(145,1216,'1','0','  ITEM'),(145,1217,'2','0','  QUANTITY'),(145,1218,'3','0','  RATE'),(145,1219,'0','1','  1.'),(145,1220,'1','1',' PIN MAILER FOR TDCC,\r\nSPECIFICATIONS AS PER SAMPLE RECEIVED'),(145,1221,'2','1',' 50000 PCS'),(145,1222,'3','1',' Rs.1.15/- PER PIN MAILER'),(145,1223,'0','2',' 2.'),(145,1224,'1','2','ENVELOPE FOR TDCC,\r\nSPECIFICATIONS AS PER SAMPLE RECEIVED'),(145,1225,'2','2','50000 PCS'),(145,1226,'3','2',' Rs.1.10/- PER PIN MAILER'),(146,1227,'0','0',' SR.NO.'),(146,1228,'1','0',' ITEM'),(146,1229,'2','0',' QUANTITY'),(146,1230,'3','0',' RATE'),(146,1231,'0','1',' 1.'),(146,1232,'1','1','ENTERTAINMENT TICKET,\r\n170 GSM NON INFUSED PAPER,\r\nPRINTING : 4 COLOUR FRONT SIDE & 1\r\nCOLOUR BACK SIDE'),(146,1233,'2','1',' 38000 TKTS'),(146,1234,'3','1',' Rs.4.50/- PER TICKET'),(147,1235,'0','0',' SR. NO.'),(147,1236,'1','0','ITEM'),(147,1237,'2','0',' QUANTITY'),(147,1238,'3','0',' RATE'),(147,1239,'0','1',' 1.'),(147,1240,'1','1','BLANK STATIONERY WITHOUT DP,\r\nSIZE : 7 INCH X 8 INCH X 1,\r\nPAPER : 60 GSM '),(147,1241,'2','1','10000 PCS'),(147,1242,'3','1','0.58/- PER PCS'),(148,1243,'0','0',' SR. NO.'),(148,1244,'1','0',' ITEM'),(148,1245,'2','0',' QUANTITY'),(148,1246,'3','0',' RATE'),(148,1247,'0','1',' 1.'),(148,1248,'1','1',' NCR JP Thermal Rolls,\r\nSize : 80 mm x 80 mtrs,\r\nPaper : 55 GSM Thermal,\r\nCore Size : 13 MM'),(148,1249,'2','1',' 20 Rolls'),(148,1250,'3','1',' Rs. 120/- Per Roll '),(149,1251,'0','0','SR. NO.'),(149,1252,'1','0',' ITEM'),(149,1253,'2','0',' QUANTITY'),(149,1254,'3','0',' RATE'),(149,1255,'0','1',' 1.'),(149,1256,'1','1','PIN MAILER,\r\nSIZE : 8 inch x 4 inch x 3 Ply,\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Single Colour'),(149,1257,'2','1','3000 PCS'),(149,1258,'3','1',' Rs. 2.80/- Per Pin Mailer'),(150,1259,'0','0',' SR. NO.'),(150,1260,'1','0',' ITEM'),(150,1261,'2','0',' QUANTITY'),(150,1262,'3','0',' RATE'),(150,1263,'0','1',' 1.'),(150,1264,'1','1','NCR RP ROLLS,\r\nSIZE : 80 MM X 160 MTRS,\r\n\r\n'),(150,1265,'2','1',' 100 ROLLS'),(150,1266,'3','1',' WITH BLACK SENSOR - Rs. 275/- PER ROLL \r\n\r\n\r\nPRINTED ROLL - Rs.295/- PER ROLL'),(151,1267,'0','0',' SR. NO.'),(151,1268,'1','0',' ITEM'),(151,1269,'2','0',' QUANTITY'),(151,1270,'3','0',' RATE'),(151,1271,'0','1','1.'),(151,1272,'1','1','BLANK STATIONERY WITH PERFORATION,\r\nSIZE : 15 INCH X 12 INCH X 1,\r\nPAPER : 80 GSM '),(151,1273,'2','1','10000 SHEETS'),(151,1274,'3','1','Rs.1.75/- PER SHEET'),(152,1275,'0','0',' SR. NO. '),(152,1276,'1','0',' ITEM '),(152,1277,'2','0',' QUANTITY '),(152,1278,'3','0',' RATE '),(152,1279,'0','1',' 1. '),(152,1280,'1','1','Currency Kidzos 5 Leaflet, 80 GSM Maplito Paper, Size:- 135mm X 60mm  front & back 4 Color Print without UV\r\n '),(152,1281,'2','1','1,50,000\r\n\r\n'),(152,1282,'3','1','  Rs.0.20/- per pcs '),(152,1283,'0','2',' 2.'),(152,1284,'1','2',' Currency Kidzos 10 Leaflet, 80 GSM Maplito Paper, Size:- 140mm X 60mm  front & back 4 Color Print without UV'),(152,1285,'2','2','1,50,000\r\n\r\n'),(152,1286,'3','2','   Rs.0.20/- per pcs '),(152,1287,'0','3',' 3.'),(152,1288,'1','3',' Currency Kidzos 1 Leaflet, 80 GSM Maplitho Paper, Size:- 130mm X 60mm  Front & Back 4 Color Print Without UV'),(152,1289,'2','3','3,00,000\r\n\r\n'),(152,1290,'3','3','   Rs.0.20/- per pcs '),(152,1291,'0','4',' 4.'),(152,1292,'1','4',' Currency Kidzos 20 Leaflet, 80 GSM Maplito Paper, Size:- 145mm X 60mm  front & back 4 Color Print without UV'),(152,1293,'2','4','50,000'),(152,1294,'3','4','   Rs.0.20/- per pcs '),(153,1295,'0','0','  SR.NO. '),(153,1296,'1','0','  ITEM '),(153,1297,'2','0','  QUANTITY '),(153,1298,'3','0','  RATE '),(153,1299,'0','1','  1. '),(153,1300,'1','1','RDCC POUCH,\r\n170 GSM ART PAPER,\r\nSIZE : AS PER SAMPLE,\r\nPRINTING : AS PER SAMPLE '),(153,1301,'2','1','5000 PCS   '),(153,1302,'3','1',' Rs.2.50/- PER POUCH '),(153,1303,'0','2',' 2. '),(153,1304,'1','2','RDCC COVER PAGE,\r\n130 GSM ART PAPER,\r\nSIZE : AS PER SAMPLE,\r\nPRINTING : AS PER SAMPLE '),(153,1305,'2','2',' 10000 SETS'),(153,1306,'3','2',' Rs.2.30/- PER SET '),(153,1307,'0','3',' 3.'),(153,1308,'1','3','RDCC RECORD SLIP,\r\n70 GSM PLAIN PAPER,\r\nSIZE : AS PER SAMPLE,\r\nPRINTING : BLACK'),(153,1309,'2','3',' 10000 PCS'),(153,1310,'3','3','Rs. 0.35/- PER PCS'),(154,1323,'0','0','Sr. No.  '),(154,1324,'1','0','Item Code  '),(154,1325,'2','0','Item Description  '),(154,1326,'0','1','1  '),(154,1327,'1','1','code  '),(154,1328,'2','1','desc  '),(154,1329,'0','2',' 2'),(154,1330,'1','2',' code 1'),(154,1331,'2','2',' desc 1'),(155,1342,'0','0',' ID  '),(155,1343,'1','0','NAME   '),(155,1344,'2','0',' DESC '),(155,1345,'0','2',' 2'),(155,1346,'1','2',' NAME 2'),(155,1347,'2','2','DESC 2 '),(156,1348,'0','0',' SR. NO.'),(156,1349,'1','0',' ITEM'),(156,1350,'2','0',' QUANTITY'),(156,1351,'3','0',' RATE'),(156,1352,'0','1','1.'),(156,1353,'1','1','Entertainment Tickets - NEUFC 2022-23 Guwahati,\r\nSize : 3 inch x 4 inch,\r\nPaper : Non-infused Paper,\r\nPRINTING : FRONT SIDE CMYK & BACK\r\nSIDE BLACK + BIV BLACK'),(156,1354,'2','1','30000 Tickets'),(156,1355,'3','1',' Rs.4.00/- Per Ticket'),(157,1372,'\'\'0\'\'','\'\'0\'\'',' SR. NO.'),(157,1373,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(157,1374,'\'\'2\'\'','\'\'0\'\'',' QUANTITY'),(157,1375,'\'\'3\'\'','\'\'0\'\'',' RATE'),(157,1376,'\'\'0\'\'','\'\'1\'\'','1.'),(157,1377,'\'\'1\'\'','\'\'1\'\'','DEBIT CARD PIN MAILER FOR CANARA BANK,\r\nSIZE : 7 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 gsm normal,\r\nPrinting : Cyan, Black, Yellow '),(157,1378,'\'\'2\'\'','\'\'1\'\'',' 100000 PCS'),(157,1379,'\'\'3\'\'','\'\'1\'\'',' Rs.1.20/- Per Pin Mailer'),(158,1380,'0','0',' SR. NO.'),(158,1381,'1','0',' ITEM '),(158,1382,'2','0',' QUANTITY'),(158,1383,'3','0',' RATE'),(158,1384,'0','1',' 1.'),(158,1385,'1','1','Entertainment Tickets : Hero ISL 2022/23 Mumbai City FC -  \r\nOne Principle sponsor logo,\r\nSize : 3 inch x 4 inch,\r\nPaper : Infused Paper,\r\nPrinting : Front side CMYK & Back side Black + BIV Black\r\n'),(158,1386,'2','1',' 4600 Tickets'),(158,1387,'3','1',' Rs.5.50/- Per Ticket'),(158,1388,'0','2',' 2.'),(158,1389,'1','2','Entertainment Tickets : Hero ISL 2022/23 Mumbai City FC -  \r\nTwo Principle Sponsor logo,\r\nSize : 3 inch x 4 inch,\r\nPaper : Infused Paper,\r\nPrinting : Front side CMYK & Back side Black + BIV Black'),(158,1390,'2','2',' 41400 Tickets '),(158,1391,'3','2',' Rs.4.25/- Per Ticket'),(159,1392,'0','0',' SR. NO.'),(159,1393,'1','0',' ITEM'),(159,1394,'2','0',' QUANTITY'),(159,1395,'3','0',' RATE'),(159,1396,'0','1',' 1.'),(159,1397,'1','1','MARATHA MANDIR CINEMA ROLL,\r\nSIZE : 4 INCH X 4 INCH,\r\nPAPER : 58 GSM THERMAL,\r\nPRINTING : BLACK,RED,BLACK SENSOR'),(159,1398,'2','1',' 250 ROLLS'),(159,1399,'3','1',' Rs.140/- PER ROLL'),(160,1408,'\'0\'','\'0\'',' SR. NO.'),(160,1409,'\'1\'','\'0\'',' ITEM'),(160,1410,'\'2\'','\'0\'',' QUANTITY'),(160,1411,'\'3\'','\'0\'',' RATE'),(160,1412,'\'0\'','\'1\'',' 1.'),(160,1413,'\'1\'','\'1\'','GRADE CARD,\r\nSize : A4\r\nPaper: 105 GSM Paper\r\nSecurity Features:\r\n1.Micro text\r\n2.Relief Background\r\n3.Copy\r\n4.Invisible logo\r\n5.Ghost Image\r\n6.Penatrating Numbering\r\n'),(160,1414,'\'2\'','\'1\'',' 10000 PCS'),(160,1415,'\'3\'','\'1\'',' Rs.3.70/- PER PCS'),(161,1416,'0','0',' SR. NO.'),(161,1417,'1','0',' ITEM'),(161,1418,'2','0',' QUANTITY'),(161,1419,'3','0',' RATE'),(161,1420,'0','1',' 1.'),(161,1421,'1','1','KARAD URBAN BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK.GREEN,YELLOW,BLACK HOTSPOT\r\n'),(161,1422,'2','1',' 10000 PCS'),(161,1423,'3','1',' Rs.1.75/- PER PIN MAILER'),(162,1432,'0','0',' SR. NO.'),(162,1433,'1','0',' ITEM'),(162,1434,'2','0',' QUANTITY'),(162,1435,'3','0',' RATE'),(162,1436,'0','1',' 1.'),(162,1437,'1','1','DIVIDEND WARRANT - DCW LIMITED,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : BURGUNDY,BLACK,INVISIBLE'),(162,1438,'2','1',' 4500 PCS'),(162,1439,'3','1',' Rs.2.50/- PER PCS'),(163,1464,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' SR.NO.'),(163,1465,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' ITEM'),(163,1466,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' QUANTITY'),(163,1467,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' RATE'),(163,1468,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1.'),(163,1469,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','PIN MAILER - CHAITANYA GODAVARI GRAMEENA BANK,\r\nSIZE : 6.5 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL,\r\n'),(163,1470,'\'\'\'2\'\'\'','\'\'\'1\'\'\'',' 117000 PIN MAILERS'),(163,1471,'\'\'\'3\'\'\'','\'\'\'1\'\'\'',' Rs. 0.91/- PER PIN MAILER FOR SINGLE COLOUR\r\n\r\nRs.1.30/- PER PIN MAILER FOR 4 COLOUR PRINTING'),(164,1472,'0','0','SR.NO.'),(164,1473,'1','0','ITEM'),(164,1474,'2','0',' QUANTITY'),(164,1475,'3','0','RATE'),(164,1476,'0','1','1.'),(164,1477,'1','1','BLANK THERMAL POS ROLLS,\r\nSIZE : 79 MM X 30 MTRS,\r\n'),(164,1478,'2','1','1000 ROLLS'),(164,1479,'3','1','Rs.31.00/- PER ROLL'),(165,1480,'0','0',' SR. NO.'),(165,1481,'1','0',' ITEM'),(165,1482,'2','0',' QUANTITY'),(165,1483,'3','0',' RATE'),(165,1484,'0','1',' 01'),(165,1485,'1','1',' PIN MAILER - BASSEIN CATHOLIC BANK,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL,\r\nSINGLE COLOUR PRINTING'),(165,1486,'2','1','12000 PCS'),(165,1487,'3','1',' Rs.1.60/- PER PIN MAILER'),(140,1496,'\'\'0\'\'','\'\'0\'\'',' SR.NO.'),(140,1497,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(140,1498,'\'\'2\'\'','\'\'0\'\'',' QUANTITY'),(140,1499,'\'\'3\'\'','\'\'0\'\'',' RATE'),(140,1500,'\'\'0\'\'','\'\'1\'\'',' 1.'),(140,1501,'\'\'1\'\'','\'\'1\'\'','Junior College Leaving Certificate,\r\nSize: A4                        \r\nPaper: 105 GSM Parchment\r\nNatural Shade,\r\nSingle side colour printing\r\n5 Security Features:\r\n1.Micro text\r\n2.Relief Background \r\n3.Invisible Logo\r\n4.Copy  \r\n5.Ghost Image\r\n\r\nHSN CODE - 49070090'),(140,1502,'\'\'2\'\'','\'\'1\'\'',' 3000 PCS'),(140,1503,'\'\'3\'\'','\'\'1\'\'',' Rs.3.00/- PER PCS'),(167,1672,'\'\'\'\'0\'\'\'\'','\'\'\'\'0\'\'\'\'',' Sr.No'),(167,1673,'\'\'\'\'1\'\'\'\'','\'\'\'\'0\'\'\'\'','Product '),(167,1674,'\'\'\'\'2\'\'\'\'','\'\'\'\'0\'\'\'\'','HSN Code '),(167,1675,'\'\'\'\'3\'\'\'\'','\'\'\'\'0\'\'\'\'','Quantity \r\nin Rolls'),(167,1676,'\'\'\'\'4\'\'\'\'','\'\'\'\'0\'\'\'\'','Rate\r\nIn INR '),(167,1677,'\'\'\'\'5\'\'\'\'','\'\'\'\'0\'\'\'\'','Amount\r\nIn INR '),(167,1678,'\'\'\'\'0\'\'\'\'','\'\'\'\'1\'\'\'\'',' 1'),(167,1679,'\'\'\'\'1\'\'\'\'','\'\'\'\'1\'\'\'\'','Imported Thermal POS rolls'),(167,1680,'\'\'\'\'2\'\'\'\'','\'\'\'\'1\'\'\'\'',' 4811'),(167,1681,'\'\'\'\'3\'\'\'\'','\'\'\'\'1\'\'\'\'','1000'),(167,1682,'\'\'\'\'4\'\'\'\'','\'\'\'\'1\'\'\'\'',' 47'),(167,1683,'\'\'\'\'5\'\'\'\'','\'\'\'\'1\'\'\'\'','47,000 '),(167,1684,'\'\'\'\'0\'\'\'\'','\'\'\'\'2\'\'\'\'',' '),(167,1685,'\'\'\'\'1\'\'\'\'','\'\'\'\'2\'\'\'\'','Description:79mm x 50mtrs, 48gsm, with single - color \"Clarks\" logo on the frontside and single-color text printing on the backside of the roll '),(167,1686,'\'\'\'\'2\'\'\'\'','\'\'\'\'2\'\'\'\'',' '),(167,1687,'\'\'\'\'3\'\'\'\'','\'\'\'\'2\'\'\'\'',' '),(167,1688,'\'\'\'\'4\'\'\'\'','\'\'\'\'2\'\'\'\'',' '),(167,1689,'\'\'\'\'5\'\'\'\'','\'\'\'\'2\'\'\'\'',' '),(167,1690,'\'\'\'\'0\'\'\'\'','\'\'\'\'3\'\'\'\'',' '),(167,1691,'\'\'\'\'1\'\'\'\'','\'\'\'\'3\'\'\'\'',' '),(167,1692,'\'\'\'\'2\'\'\'\'','\'\'\'\'3\'\'\'\'',' '),(167,1693,'\'\'\'\'3\'\'\'\'','\'\'\'\'3\'\'\'\'',' '),(167,1694,'\'\'\'\'4\'\'\'\'','\'\'\'\'3\'\'\'\'','Gross '),(167,1695,'\'\'\'\'5\'\'\'\'','\'\'\'\'3\'\'\'\'',' 47,000'),(167,1696,'\'\'\'\'0\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(167,1697,'\'\'\'\'1\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(167,1698,'\'\'\'\'2\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(167,1699,'\'\'\'\'3\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(167,1700,'\'\'\'\'4\'\'\'\'','\'\'\'\'4\'\'\'\'',' SGST 9%'),(167,1701,'\'\'\'\'5\'\'\'\'','\'\'\'\'4\'\'\'\'',' 4,230'),(167,1702,'\'\'\'\'0\'\'\'\'','\'\'\'\'5\'\'\'\'',' '),(167,1703,'\'\'\'\'1\'\'\'\'','\'\'\'\'5\'\'\'\'',' '),(167,1704,'\'\'\'\'2\'\'\'\'','\'\'\'\'5\'\'\'\'',' '),(167,1705,'\'\'\'\'3\'\'\'\'','\'\'\'\'5\'\'\'\'',' '),(167,1706,'\'\'\'\'4\'\'\'\'','\'\'\'\'5\'\'\'\'','  CGST 9%'),(167,1707,'\'\'\'\'5\'\'\'\'','\'\'\'\'5\'\'\'\'',' 4,230'),(167,1708,'\'\'\'\'0\'\'\'\'','\'\'\'\'6\'\'\'\'',' Amount In Words'),(167,1709,'\'\'\'\'1\'\'\'\'','\'\'\'\'6\'\'\'\'','Rs: Fifty Five Thousand Four Hundred Sixty Only '),(167,1710,'\'\'\'\'2\'\'\'\'','\'\'\'\'6\'\'\'\'',' '),(167,1711,'\'\'\'\'3\'\'\'\'','\'\'\'\'6\'\'\'\'',' '),(167,1712,'\'\'\'\'4\'\'\'\'','\'\'\'\'6\'\'\'\'',' Total'),(167,1713,'\'\'\'\'5\'\'\'\'','\'\'\'\'6\'\'\'\'','55,460'),(168,1738,'\'\'0\'\'','\'\'0\'\'',' SR. NO.'),(168,1739,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(168,1740,'\'\'2\'\'','\'\'0\'\'',' QUANTITY'),(168,1741,'\'\'3\'\'','\'\'0\'\'',' RATE'),(168,1742,'\'\'0\'\'','\'\'1\'\'',' 1.'),(168,1743,'\'\'1\'\'','\'\'1\'\'','ENTRY TICKET - BLANK THERMAL POS ROLL,\r\nSIZE : 56 MM X 37 MTRS X 150 GSM THERMAL\r\n'),(168,1744,'\'\'2\'\'','\'\'1\'\'',' 200 ROLLS'),(168,1745,'\'\'3\'\'','\'\'1\'\'','Rs. 110/- PER ROLL '),(168,1746,'\'\'0\'\'','\'\'2\'\'',' 2.'),(168,1747,'\'\'1\'\'','\'\'2\'\'',' EXIT TICKET - BLANK THERMAL POS ROLL,\r\nSIZE : 79 MM X 50 MTRS X 75 GSM THERMAL'),(168,1748,'\'\'2\'\'','\'\'2\'\'',' 100 ROLLS'),(168,1749,'\'\'3\'\'','\'\'2\'\'',' Rs.70/- PER ROLL'),(169,1750,'0','0',' SR. NO.'),(169,1751,'1','0',' ITEM'),(169,1752,'2','0',' QUANTITY'),(169,1753,'3','0',' RATE'),(169,1754,'0','1',' 1.'),(169,1755,'1','1','Welcome Letter,\r\nA4 - Size : W. 8.5 x H. 11 inch, 100 GMS  Maplitho paper,\r\n2 Colour printing'),(169,1756,'2','1',' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),(169,1757,'3','1','Rs.2.73/-\r\nRs.2.20/-\r\nRs.1.82/-\r\nRs.1.56/-'),(169,1758,'0','2',' 2.'),(169,1759,'1','2','Card Pouch,                      \r\nSize : 89MM X 58MM, 100 GMS & Art\r\npaper with Lamination'),(169,1760,'2','2',' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),(169,1761,'3','2','Rs.1.95/-\r\nRs.1.17/-\r\nRs.0.94/-\r\nRs.0.84/-'),(169,1762,'0','3',' 3.'),(169,1763,'1','3','Booklet (20 Pages),\r\nSize: 20cms X 11cms, 100 GMS Maplitho paper,\r\nSingle colour printing'),(169,1764,'2','3',' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),(169,1765,'3','3','Rs.11.42/-\r\nRs.9.34/-\r\nRs.8.82/-\r\nRs.8.56/-'),(169,1766,'0','4',' 4.'),(169,1767,'1','4','Big envelope(Window),\r\n4 colour printing,                  Size: 8.5 Inch X 6 Inch,\r\n100 GMS & Maplitho paper'),(169,1768,'2','4',' 5000 Pcs\r\n10000 Pcs\r\n25000 Pcs\r\n50000 Pcs'),(169,1769,'3','4','Rs.3.63/-\r\nRs.2.73/-\r\nRs.2.43/-\r\nRs.2.07/-'),(170,1770,'0','0',' SR. NO.'),(170,1771,'1','0',' ITEM '),(170,1772,'2','0',' QUANTITY'),(170,1773,'3','0',' RATE'),(170,1774,'0','1',' 1.'),(170,1775,'1','1',' ICICI BANK BOND DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : SINGLE COLOUR'),(170,1776,'2','1',' 2000 PCS'),(170,1777,'3','1',' Rs. 3.95/- PER PCS'),(166,1778,'\'0\'','\'0\'',' SR. NO.'),(166,1779,'\'1\'','\'0\'',' ITEM'),(166,1780,'\'2\'','\'0\'',' QUANTITY'),(166,1781,'\'3\'','\'0\'',' RATE'),(166,1782,'\'0\'','\'1\'',' 1.'),(166,1783,'\'1\'','\'1\'','BLANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),(166,1784,'\'2\'','\'1\'',' 2000 PCS'),(166,1785,'\'3\'','\'1\'',' Rs.3.65/- PER PIN MAILER'),(171,1798,'\'0\'','\'0\'',' SR. NO.'),(171,1799,'\'1\'','\'0\'','ITEM '),(171,1800,'\'2\'','\'0\'',' QUANTITY'),(171,1801,'\'3\'','\'0\'',' RATE'),(171,1802,'\'0\'','\'1\'',' 1.'),(171,1803,'\'1\'','\'1\'',' Union Bank of India Green Cloth Envelope 12 x 16\r\n\r\n'),(171,1804,'\'2\'','\'1\'',' 50,085 PCS'),(171,1805,'\'3\'','\'1\'',' 9.35/- PER PCS'),(171,1806,'\'0\'','\'2\'',' 2.'),(171,1807,'\'1\'','\'2\'','Union Bank of India Green Cloth Envelope 6 x 12\r\n\r\n '),(171,1808,'\'2\'','\'2\'',' 5,000 PCS'),(171,1809,'\'3\'','\'2\'',' 5.22/- PER PCS'),(172,1810,'0','0','Sr. No.'),(172,1811,'1','0','Item Code'),(172,1812,'2','0','Item Description'),(172,1813,'3','0','Quantity'),(172,1814,'4','0','Price'),(172,1815,'5','0','Remark'),(172,1816,'0','1','1'),(172,1817,'1','1','latest'),(172,1818,'2','1','latest'),(172,1819,'3','1','43'),(172,1820,'4','1','4555'),(172,1821,'5','1','latest'),(173,1822,'0','0','Sr. No.'),(173,1823,'1','0','Item Code'),(173,1824,'2','0','Item Description'),(173,1825,'3','0','Quantity'),(173,1826,'4','0','Price'),(173,1827,'5','0','Remark'),(173,1828,'0','1','1'),(173,1829,'1','1','latest'),(173,1830,'2','1','latest'),(173,1831,'3','1','43'),(173,1832,'4','1','4555'),(173,1833,'5','1','latest'),(175,1838,'0','0',' SR. NO.'),(175,1839,'1','0',' ITEM'),(175,1840,'2','0',' QUANTITY'),(175,1841,'3','0',' RATE'),(175,1842,'0','1',' 1.'),(175,1843,'1','1',' HDFC BANK DIVIDEND WARRANT - HINDUSTAN UNILEVER LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR,\r\nPRINTING : ROYAL BLUE+INVISIBLE INK,\r\n'),(175,1844,'2','1',' 55000 PCS'),(175,1845,'3','1',' Rs.0.98/- PER PCS'),(176,1854,'\'0\'','\'0\'',' SR. NO.'),(176,1855,'\'1\'','\'0\'',' ITEM'),(176,1856,'\'2\'','\'0\'',' QUANTITY'),(176,1857,'\'3\'','\'0\'',' RATE'),(176,1858,'\'0\'','\'1\'',' 1.'),(176,1859,'\'1\'','\'1\'',' AADI ANANT TICKET,\r\nSIZE : 3 INCH X 8 INCH,\r\nPRINTING : BLUE,RED,ORANGE,BLACK'),(176,1860,'\'2\'','\'1\'',' 4200 TICKETS'),(176,1861,'\'3\'','\'1\'',' Rs.8.00/- PER TICKET'),(177,1862,'0','0',' Sr No'),(177,1863,'1','0','Description '),(177,1864,'2','0','MOQ '),(177,1865,'3','0','Rate '),(177,1866,'0','1','1. '),(177,1867,'1','1','Certificates\r\nPaper: 90 GSM\r\nSize: A4\r\nWith Security Features  '),(177,1868,'2','1','10,000 pcs'),(177,1869,'3','1',' USD 1.75 Per Pc'),(177,1870,'0','2',' 2.'),(177,1871,'1','2',' Envelopes\r\nSize: 356mmX555mm\r\nwith Security Features'),(177,1872,'2','2','20,000 pcs '),(177,1873,'3','2','USD 0.19 Per Pc'),(178,1874,'0','0','Sr. No.'),(178,1875,'1','0','Item Code'),(178,1876,'2','0','Item Description'),(178,1877,'3','0','Quantity'),(178,1878,'4','0','Price'),(178,1879,'5','0','Remark'),(178,1880,'0','1',''),(178,1881,'1','1',''),(178,1882,'2','1',''),(178,1883,'3','1',''),(178,1884,'4','1',''),(178,1885,'5','1',''),(179,1886,'0','0','Sr. No.'),(179,1887,'1','0','Item Code'),(179,1888,'2','0','Item Description'),(179,1889,'3','0','Quantity'),(179,1890,'4','0','Price'),(179,1891,'5','0','Remark'),(179,1892,'0','1',''),(179,1893,'1','1',''),(179,1894,'2','1',''),(179,1895,'3','1',''),(179,1896,'4','1',''),(179,1897,'5','1',''),(180,1930,'\'\'0\'\'','\'\'0\'\'',' SR. NO.'),(180,1931,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(180,1932,'\'\'2\'\'','\'\'0\'\'',' QUANTITY IN PCS'),(180,1933,'\'\'3\'\'','\'\'0\'\'',' RATE PER PCS'),(180,1934,'\'\'0\'\'','\'\'1\'\'',' 1.'),(180,1935,'\'\'1\'\'','\'\'1\'\'','Welcome Letter,\r\nSize - A4, Paper - 110 Gsm, 4+0 (One side printing)'),(180,1936,'\'\'2\'\'','\'\'1\'\'',' 5000\r\n10000\r\n25000\r\n50000'),(180,1937,'\'\'3\'\'','\'\'1\'\'','Rs. 2.42/- \r\nRs. 2.07/-\r\nRs. 1.73/-\r\nRs. 1.61/-'),(180,1938,'\'\'0\'\'','\'\'2\'\'',' 2.'),(180,1939,'\'\'1\'\'','\'\'2\'\'',' Envelope,\r\nSize - 9.25\" x 4.25\", \r\nPaper - 130 Gsm, 4+0, matt lamination (One side printing)'),(180,1940,'\'\'2\'\'','\'\'2\'\'','  5000\r\n10000\r\n25000\r\n50000'),(180,1941,'\'\'3\'\'','\'\'2\'\'','Rs. 3.68/- \r\nRs. 2.99/-\r\nRs. 2.42/-\r\nRs. 2.18/-'),(180,1942,'\'\'0\'\'','\'\'3\'\'',' 3.'),(180,1943,'\'\'1\'\'','\'\'3\'\'',' User Guide,\r\nSize - A5, Paper - 70 Gsm, 1+0 (One side printing)\r\n'),(180,1944,'\'\'2\'\'','\'\'3\'\'','  5000\r\n10000\r\n25000\r\n50000'),(180,1945,'\'\'3\'\'','\'\'3\'\'','Rs. 0.92/- \r\nRs. 0.86/-\r\nRs. 0.80/-\r\nRs. 0.75/-'),(182,1954,'0','0',' SR. NO.'),(182,1955,'1','0',' ITEM'),(182,1956,'2','0',' QUANTITY'),(182,1957,'3','0',' RATE'),(182,1958,'0','1',' 1.'),(182,1959,'1','1','Internet Banking Pin Mailer,\r\nSize : 6.5 inch x 4 inch x 3 ply\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Black'),(182,1960,'2','1',' 25000 PCS'),(182,1961,'3','1',' Rs.1.91/- (Freight + 18% GST Inclusive)'),(181,1978,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' SR. NO.'),(181,1979,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' ITEM'),(181,1980,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' QUANTITY'),(181,1981,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' RATE'),(181,1982,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1.'),(181,1983,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','Internet Banking Pin Mailer,\r\nSize : 6.5 inch x 4 inch x 3 ply\r\nPaper : 60+60+70 GSM Normal Paper,\r\nPrinting : Black'),(181,1984,'\'\'\'2\'\'\'','\'\'\'1\'\'\'',' 25000 PCS'),(181,1985,'\'\'\'3\'\'\'','\'\'\'1\'\'\'',' Rs.1.85/- (Freight + 18% GST Inclusive)'),(183,1986,'0','0',' SR. NO.'),(183,1987,'1','0',' ITEM'),(183,1988,'2','0',' QUANTITY'),(183,1989,'3','0','RATE '),(183,1990,'0','1',' 1.'),(183,1991,'1','1',' HDFC BANK DIVIDEND WARRANT,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 96 GSM MICR PAPER,\r\nPRINTING : BROWN+INVISIBLE'),(183,1992,'2','1',' 11000 PCS'),(183,1993,'3','1','Rs.1.50/- PER WARRANT'),(184,2002,'\'0\'','\'0\'',' SR.NO.'),(184,2003,'\'1\'','\'0\'',' ITEM'),(184,2004,'\'2\'','\'0\'',' QUANTITY'),(184,2005,'\'3\'','\'0\'',' RATE'),(184,2006,'\'0\'','\'1\'',' 1.'),(184,2007,'\'1\'','\'1\'','PLAIN ENVELOPE,\r\nSIZE : 5 INCH X 11 INCH,\r\nPAPER : 80 GSM NORMAL PAPER'),(184,2008,'\'2\'','\'1\'',' 25000 PCS'),(184,2009,'\'3\'','\'1\'',' Rs. 1.70/- PER ENVELOPE'),(185,2010,'0','0',' SR. NO.'),(185,2011,'1','0',' ITEM'),(185,2012,'2','0',' QUANTITY'),(185,2013,'3','0',' RATE'),(185,2014,'0','1',' 1.'),(185,2015,'1','1','THERMAL POS ROLL - KUMAR DRESSES,\r\nSIZE : 79 MM X 30 MTRS X 80 GSM THERMAL PAPER,\r\nPRINTING : RED'),(185,2016,'2','1',' 500 ROLLS'),(185,2017,'3','1',' Rs. 47/- PER ROLL '),(187,2055,'\'\'0\'\'','\'\'0\'\'',' SR. NO.'),(187,2056,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(187,2057,'\'\'2\'\'','\'\'0\'\'',' QUANTITY & RATE'),(187,2058,'\'\'0\'\'','\'\'1\'\'',' 1.'),(187,2059,'\'\'1\'\'','\'\'1\'\'','GRADE CARD - VES INSTITUTE OF TECHNOLOGY,\r\nPAPER : 150 GSM NON TEARABLE,\r\nPRINTING : FRONT SIDE CMYK + BACK SIDE RED,\r\n'),(187,2060,'\'\'2\'\'','\'\'1\'\'',' 5000 PCS  - Rs.12/- PER PCS\r\n\r\n10000 PCS  - Rs.10/- PER PCS'),(186,2226,'\'\'\'\'4\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(186,2227,'\'\'\'\'0\'\'\'\'','\'\'\'\'4\'\'\'\'','   Security Features for all types :\r\n1. Thread(UV)\r\n2. UV Emblem in center (UV)\r\n3. University Name, Address etc. matter\r\n4. Microtext Border\r\n5. High Density Boarder\r\n6. Secured Numbering\r\n7. Sur Code (Special Machine Readable Code)8. GOLD foil stamping\r\n9. Flip Character in Design\r\n10. Unique Guilloche Pattern\r\n11. Signature in UV\r\n12. Thermochromic Ink  '),(186,2228,'\'\'\'\'1\'\'\'\'','\'\'\'\'4\'\'\'\'',''),(186,2229,'\'\'\'\'2\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(186,2230,'\'\'\'\'3\'\'\'\'','\'\'\'\'4\'\'\'\'',' '),(186,2231,'\'\'\'\'0\'\'\'\'','\'\'\'\'0\'\'\'\'','Product '),(186,2232,'\'\'\'\'1\'\'\'\'','\'\'\'\'0\'\'\'\'','Quantity'),(186,2233,'\'\'\'\'2\'\'\'\'','\'\'\'\'0\'\'\'\'','Rate Per PC '),(186,2234,'\'\'\'\'3\'\'\'\'','\'\'\'\'0\'\'\'\'',''),(186,2235,'\'\'\'\'4\'\'\'\'','\'\'\'\'0\'\'\'\'','1'),(186,2236,'\'\'\'\'0\'\'\'\'','\'\'\'\'1\'\'\'\'','Degree certificates\r\nSize: A4, Paper: 300 GSM Texture Paper\r\n'),(186,2237,'\'\'\'\'1\'\'\'\'','\'\'\'\'1\'\'\'\'','  400 nos'),(186,2238,'\'\'\'\'2\'\'\'\'','\'\'\'\'1\'\'\'\'',' 75 /-'),(186,2239,'\'\'\'\'3\'\'\'\'','\'\'\'\'1\'\'\'\'','30000/-'),(186,2240,'\'\'\'\'4\'\'\'\'','\'\'\'\'1\'\'\'\'','2'),(186,2241,'\'\'\'\'0\'\'\'\'','\'\'\'\'2\'\'\'\'','Degree certificates\r\nSize: A4 , Paper: 250 micron Teslin'),(186,2242,'\'\'\'\'1\'\'\'\'','\'\'\'\'2\'\'\'\'',' 400 nos'),(186,2243,'\'\'\'\'2\'\'\'\'','\'\'\'\'2\'\'\'\'',' 95 /-'),(186,2244,'\'\'\'\'3\'\'\'\'','\'\'\'\'2\'\'\'\'','38000/-'),(186,2245,'\'\'\'\'4\'\'\'\'','\'\'\'\'2\'\'\'\'','3'),(186,2246,'\'\'\'\'0\'\'\'\'','\'\'\'\'3\'\'\'\'','Degree certificates\r\nSize: A4 , Paper: 200 GSM non terrible\r\n'),(186,2247,'\'\'\'\'1\'\'\'\'','\'\'\'\'3\'\'\'\'',' 400 nos'),(186,2248,'\'\'\'\'2\'\'\'\'','\'\'\'\'3\'\'\'\'','70 /-'),(186,2249,'\'\'\'\'3\'\'\'\'','\'\'\'\'3\'\'\'\'','28000/-'),(186,2250,'\'\'\'\'4\'\'\'\'','\'\'\'\'3\'\'\'\'','4'),(188,2251,'0','0',' SR. NO.'),(188,2252,'1','0',' ITEM'),(188,2253,'2','0',' QUANTITY'),(188,2254,'3','0',' RATE'),(188,2255,'0','1',' 1.'),(188,2256,'1','1','DIVIDEND WARRANT - BHILWARA URBAN CO-OP BANK LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER\r\nPRINTING : BLACK,YELLOW,ROYAL BLUE,INVISIBLE INK,\r\n'),(188,2257,'2','1',' 16000 PCS'),(188,2258,'3','1',' Rs.1.40/- PER PCS'),(189,2259,'0','0','Sr. No.'),(189,2260,'1','0','Item Code'),(189,2261,'2','0','Item Description'),(189,2262,'3','0','Quantity'),(189,2263,'4','0','Rate'),(189,2264,'5','0','Total'),(189,2265,'0','1','1'),(189,2266,'1','1',''),(189,2267,'2','1','Thermal Paper Roll'),(189,2268,'3','1','1000'),(189,2269,'4','1','463'),(189,2270,'5','1','463,000'),(190,2271,'0','0','Sr. No.'),(190,2272,'1','0','Item Code'),(190,2273,'2','0','Item Description'),(190,2274,'3','0','Quantity'),(190,2275,'4','0','Rate'),(190,2276,'5','0','Total'),(190,2277,'0','1','1'),(190,2278,'1','1',''),(190,2279,'2','1','Thermal Paper Roll'),(190,2280,'3','1','1000'),(190,2281,'4','1','463'),(190,2282,'5','1','463,000'),(191,2291,'\'0\'','\'0\'',' SR.NO.'),(191,2292,'\'1\'','\'0\'','ITEM'),(191,2293,'\'2\'','\'0\'',' QUANATITY '),(191,2294,'\'3\'','\'0\'',' RATE'),(191,2295,'\'0\'','\'1\'',' 1.'),(191,2296,'\'1\'','\'1\'','ENTRY TICKET - NITA MUKESH AMBANI CULTURAL CENTRE,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : 190 GSM COLOUR CENTRE PAPER,\r\nPRINTING : FRONT SIDE - CMYK & BACK SIDE -BLACK \r\n'),(191,2297,'\'2\'','\'1\'',' 3000 TICKETS'),(191,2298,'\'3\'','\'1\'',' Rs. 12.50/- PER TICKET'),(193,2307,'0','0',' SR.NO.'),(193,2308,'1','0',' ITEM'),(193,2309,'2','0','QUANTITY '),(193,2310,'3','0',' RATE'),(193,2311,'0','1',' 1.'),(193,2312,'1','1','BASSEIN CATHOLIC CO-OP BANK TERM DEPOSIT RECEIPT	,\r\nSIZE : 9.5 INCH X 6 INCH,\r\nPAPER : 105 GSM PARCHMENT,\r\nPRINTING : Magenta, Cyan , Black, Yellow	ON FRONT SIDE & BACK SIDE BLACK'),(193,2313,'2','1','20000'),(193,2314,'3','1',' Rs.1.00/-PER PCS'),(192,2315,'\'0\'','\'0\'',' SR.NO.'),(192,2316,'\'1\'','\'0\'',' ITEM '),(192,2317,'\'2\'','\'0\'',' QUANTITY '),(192,2318,'\'3\'','\'0\'',' RATE'),(192,2319,'\'0\'','\'1\'',' 1.'),(192,2320,'\'1\'','\'1\'','MICR toner cartridge M402 - \r\n15000 sheets per toner print'),(192,2321,'\'2\'','\'1\'','60 PCS '),(192,2322,'\'3\'','\'1\'','Rs.5100/- PER PCS'),(194,2323,'0','0',' SR. NO.'),(194,2324,'1','0',' ITEM'),(194,2325,'2','0',' QUANTITY'),(194,2326,'3','0',' RATE'),(194,2327,'0','1',' 1.'),(194,2328,'1','1',' ENTERTAINMENT TICKET - KOCHI BIENNALE 2022-2023,\r\nSIZE :  3 INCH X 8 INCH,\r\nPAPER : NON-INFUSED PAPER,\r\nPRINTING : BLACK ON FRONT & BACK SIDE,\r\n'),(194,2329,'2','1','50000 TICKETS '),(194,2330,'3','1',' Rs.5.25/- PER TICKET'),(195,2343,'\'0\'','\'0\'',' SR. NO.'),(195,2344,'\'1\'','\'0\'',' ITEM'),(195,2345,'\'2\'','\'0\'',' QUANTITY'),(195,2346,'\'3\'','\'0\'',' RATE'),(195,2347,'\'0\'','\'1\'',' 1.'),(195,2348,'\'1\'','\'1\'','SAREX CHEMICALS TAX INVOICE,\r\nSIZE : 10 inch X 12 inch X 4 PLY,\r\nPAPER : WHITE+PINK+GREEN+YELLOW,\r\nPRINTING : BLACK,GREEN,INDIA RED	'),(195,2349,'\'2\'','\'1\'',' 5000 SETS'),(195,2350,'\'3\'','\'1\'',' Rs.6.50/- PER SET'),(195,2351,'\'0\'','\'2\'',' 2.'),(195,2352,'\'1\'','\'2\'','DELIVERY CHALLAN FOR SAREX CHEMICALS,\r\nSIZE : 10 inch X 12 inch X 4 PLY,\r\nPAPER : WHITE,\r\nPRINTING : GREEN'),(195,2353,'\'2\'','\'2\'',' 5000 SETS'),(195,2354,'\'3\'','\'2\'',' Rs.6.50/- PER SET'),(196,2355,'0','0',' SR. NO.'),(196,2356,'1','0',' ITEM '),(196,2357,'2','0',' QUANTITY'),(196,2358,'3','0',' RATE'),(196,2359,'0','1',' 1.'),(196,2360,'1','1','PIN MAILER WITH DATA PRINTING,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR'),(196,2361,'2','1','1 LACS - 2 LACS'),(196,2362,'3','1',' Rs.1.95/- PER PIN MAILER'),(196,2363,'0','2',' 2.'),(196,2364,'1','2','PIN MAILER WITH DATA PRINTING,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : FOUR COLOUR'),(196,2365,'2','2',' 1 LACS - 2 LACS'),(196,2366,'3','2',' Rs.2.40/- PER PIN MAILER'),(197,2427,'\'\'\'\'\'0\'\'\'\'\'','\'\'\'\'\'0\'\'\'\'\'',' Sr. No'),(197,2428,'\'\'\'\'\'1\'\'\'\'\'','\'\'\'\'\'0\'\'\'\'\'','Description '),(197,2429,'\'\'\'\'\'2\'\'\'\'\'','\'\'\'\'\'0\'\'\'\'\'','Pages '),(197,2430,'\'\'\'\'\'3\'\'\'\'\'','\'\'\'\'\'0\'\'\'\'\'','Qty '),(197,2431,'\'\'\'\'\'4\'\'\'\'\'','\'\'\'\'\'0\'\'\'\'\'','Price Per Qty '),(197,2432,'\'\'\'\'\'5\'\'\'\'\'','\'\'\'\'\'0\'\'\'\'\'','Total Value '),(197,2433,'\'\'\'\'\'0\'\'\'\'\'','\'\'\'\'\'1\'\'\'\'\'',' 1'),(197,2434,'\'\'\'\'\'1\'\'\'\'\'','\'\'\'\'\'1\'\'\'\'\'','Answer Sheet \r\n1.	1. Size: Legal, \r\n2.	2. Paper: 70GSM, White Paper\r\n3.	3. Color- Black \r\n4.	4. Pinning with punch hole\r\n5.	5. Answer book Sr. No. and Page No. printed\r\n6.	6. Remaining design as per images forwarded\r\n '),(197,2435,'\'\'\'\'\'2\'\'\'\'\'','\'\'\'\'\'1\'\'\'\'\'',' 24 Pages'),(197,2436,'\'\'\'\'\'3\'\'\'\'\'','\'\'\'\'\'1\'\'\'\'\'','25000 '),(197,2437,'\'\'\'\'\'4\'\'\'\'\'','\'\'\'\'\'1\'\'\'\'\'',' '),(197,2438,'\'\'\'\'\'5\'\'\'\'\'','\'\'\'\'\'1\'\'\'\'\'',' '),(198,2439,'0','0','Sr. No.'),(198,2440,'1','0','Item Code'),(198,2441,'2','0','Item Description'),(198,2442,'3','0','Quantity'),(198,2443,'4','0','Price'),(198,2444,'5','0','Remark'),(198,2445,'0','1','1.'),(198,2446,'1','1',''),(198,2447,'2','1','Thermal POS Roll\r\n13.	Size : 3 1/8” x 230’ (80mm x 70mtrs)\r\n14.	Paper : 48 GSM, \r\n15.	Core: 13 mm\r\n'),(198,2448,'3','1','50\'s'),(198,2449,'4','1','33.2 in USD'),(198,2450,'5','1',''),(198,2451,'0','2','2.'),(198,2452,'1','2',''),(198,2453,'2','2','16.	Thermal POS Rolls\r\n17.	Size : 3 1/8” x 220’ (80mm x 67mtrs)\r\n18.	Paper : 48 GSM, \r\n19.	Core: 13 mm\r\n'),(198,2454,'3','2','50\'s'),(198,2455,'4','2','32.0 in USD\r\n'),(198,2456,'5','2',''),(198,2473,'0','3','3.'),(198,2474,'1','3',''),(198,2475,'2','3','20.	Thermal POS Rolls\r\n21.	Size : 2 1/4” x 50’ (57mm x 15mtrs)\r\n22.	Paper : 48 GSM, \r\n23.	Core: 13 mm\r\n'),(198,2476,'3','3','50\'s'),(198,2477,'4','3','6.75 in USD'),(198,2478,'5','3',''),(198,2479,'0','4','4.'),(198,2480,'1','4',''),(198,2481,'2','4','24.	Thermal POS Rolls\r\n25.	Size : 2 1/4” x 85’ (57mm x 26mtrs)\r\n26.	Paper : 48 GSM, \r\n27.	Core: 13 mm\r\n'),(198,2482,'3','4','50\'s`'),(198,2483,'4','4','10.2 in USD'),(198,2484,'5','4',''),(199,2493,'\'\'\'0\'\'\'','\'\'\'0\'\'\'','SR. NO.'),(199,2494,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' ITEM'),(199,2495,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' QUANTITY'),(199,2496,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' RATE'),(199,2497,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1.'),(199,2498,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','PASCHIM BANGA BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : CYAN,BLACK,YELLOW'),(199,2499,'\'\'\'2\'\'\'','\'\'\'1\'\'\'',' 70000 PCS'),(199,2500,'\'\'\'3\'\'\'','\'\'\'1\'\'\'','Rs.1.20/- PER PIN MAILER (INCLUSIVE OF 18% GST AND FREIGHT CHARGES )'),(200,2525,'\'\'0\'\'','\'\'0\'\'',' SR. NO. '),(200,2526,'\'\'1\'\'','\'\'0\'\'',' ITEM '),(200,2527,'\'\'2\'\'','\'\'0\'\'',' QUANTITY '),(200,2528,'\'\'3\'\'','\'\'0\'\'',' RATE '),(200,2529,'\'\'0\'\'','\'\'1\'\'',' 1. '),(200,2530,'\'\'1\'\'','\'\'1\'\'','NCR JP Thermal Rolls,\r\nSize : 80 mm x 80 mtrs,\r\nPaper : 55 GSM Thermal,\r\nCore Size : 13 MM '),(200,2531,'\'\'2\'\'','\'\'1\'\'','50 Rolls '),(200,2532,'\'\'3\'\'','\'\'1\'\'',' Rs. 95/- Per Roll  '),(200,2533,'\'\'0\'\'','\'\'2\'\'',' 2.'),(200,2534,'\'\'1\'\'','\'\'2\'\'',' NCR RP Thermal Rolls,\r\nSize : 79 mm x 375 mtrs,\r\nPaper : 55 GSM Thermal,\r\nCore Size : 18 MM,\r\nPrinting : Black sensor,\r\nCoating side inside '),(200,2535,'\'\'2\'\'','\'\'2\'\'','25 Rolls'),(200,2536,'\'\'3\'\'','\'\'2\'\'','Rs. 475/- Per Roll '),(201,2587,'\'\'0\'\'','\'\'0\'\'','SR. NO.  '),(201,2588,'\'\'1\'\'','\'\'0\'\'',' ITEM  '),(201,2589,'\'\'2\'\'','\'\'0\'\'','SIZE'),(201,2590,'\'\'3\'\'','\'\'0\'\'',' QUANTITY'),(201,2591,'\'\'4\'\'','\'\'0\'\'',' RATE PER PCS'),(201,2592,'\'\'0\'\'','\'\'1\'\'','1.   '),(201,2593,'\'\'1\'\'','\'\'1\'\'','  Welcome Letter (Colour 4+4), 120 GSM, SS Maplitho	'),(201,2594,'\'\'2\'\'','\'\'1\'\'','   W. 8.5 x  H. 11  inch	'),(201,2595,'\'\'3\'\'','\'\'1\'\'','1 LACS \r\n1.5 LACS'),(201,2596,'\'\'4\'\'','\'\'1\'\'','Rs.1.70/- PER PCS'),(201,2597,'\'\'0\'\'','\'\'2\'\'',' 2.'),(201,2598,'\'\'1\'\'','\'\'2\'\'',' User Manual (Booklet)  (Colour 4+4), 130 GSM,SAC paper	'),(201,2599,'\'\'2\'\'','\'\'2\'\'','  W. 11.693  x H. 8.268  inch	'),(201,2600,'\'\'3\'\'','\'\'2\'\'','1 LACS \r\n1.5 LACS'),(201,2601,'\'\'4\'\'','\'\'2\'\'','Rs.2.65/- PER PCS'),(201,2602,'\'\'0\'\'','\'\'3\'\'',' 3.'),(201,2603,'\'\'1\'\'','\'\'3\'\'',' Pouches (150 GSM Art Paper- 4 color printing )	'),(201,2604,'\'\'2\'\'','\'\'3\'\'','  89MM X 58MM	'),(201,2605,'\'\'3\'\'','\'\'3\'\'','1 LACS \r\n1.5 LACS'),(201,2606,'\'\'4\'\'','\'\'3\'\'','Rs.1.40/- PER PCS'),(201,2607,'\'\'0\'\'','\'\'4\'\'',' 4.'),(201,2608,'\'\'1\'\'','\'\'4\'\'',' Envelopes (130 GSM Art Paper - 4 color printing)'),(201,2609,'\'\'2\'\'','\'\'4\'\'','  8.5 Inch X 6 Inch	'),(201,2610,'\'\'3\'\'','\'\'4\'\'','1 LACS \r\n1.5 LACS'),(201,2611,'\'\'4\'\'','\'\'4\'\'','Rs.3.40/- PER PCS'),(202,2612,'0','0',' SR. NO.'),(202,2613,'1','0',' ITEM'),(202,2614,'2','0',' QUANTITY'),(202,2615,'3','0',' RATE'),(202,2616,'0','1',' 1.'),(202,2617,'1','1',' Ind vs SL 1st T20 Trophy 2022,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : 180 GSM NON INFUSED THERMAL PAPER,\r\nPRINTING : CMYK,\r\nSecurity Features : VOID, Micro Text, UV logo on the back, Serial number on tickets'),(202,2618,'2','1',' 34650 TICKETS'),(202,2619,'3','1',' Rs.3.50/- PER TICKET '),(203,2620,'0','0',' SR. NO.'),(203,2621,'1','0',' ITEM '),(203,2622,'2','0',' QUANTITY'),(203,2623,'3','0',' RATE'),(203,2624,'0','1',' 1.'),(203,2625,'1','1',' Grade Card - Dr.Bhanuben nanavati College,\r\nSize : 210 mm x 297 mm,\r\nPaper : 105 GSM Parchment Paper,\r\nPrinting : CMYK + Invisible Ink'),(203,2626,'2','1',' 2500 Pcs'),(203,2627,'3','1',' Rs.6.50/- Per Pcs'),(206,2668,'0','0','Sr. No.'),(206,2669,'1','0','Item Code'),(206,2670,'2','0','Item Description'),(206,2671,'3','0','Quantity'),(206,2672,'4','0','Price'),(206,2673,'5','0','Remark'),(206,2674,'0','1','1.'),(206,2675,'1','1',''),(206,2676,'2','1','paper 70 GSM\r\nsize: 1020 x 720 MM'),(206,2677,'3','1','100'),(206,2678,'4','1','164000'),(206,2679,'5','1',''),(206,2680,'0','2','2.'),(206,2681,'1','2',''),(206,2682,'2','2','Paper 80 GSM\r\nSize: 1020 x 720 MM'),(206,2683,'3','2','100'),(206,2684,'4','2','164000'),(206,2685,'5','2',''),(206,2686,'0','3','3.'),(206,2687,'1','3',''),(206,2688,'2','3','Paper 115 GSM\r\nSize 1020 x 720 MM'),(206,2689,'3','3','50'),(206,2690,'4','3','80500'),(206,2691,'5','3',''),(206,2692,'0','4','4.'),(206,2693,'1','4',''),(206,2694,'2','4','Paper 130 GSM\r\nSize: 1020 x 720 MM'),(206,2695,'3','4','50'),(206,2696,'4','4','80500'),(206,2697,'5','4',''),(206,2698,'0','5','5.'),(206,2699,'1','5',''),(206,2700,'2','5','Paper 250 GSM \r\nSize: 1020 x 720 MM'),(206,2701,'3','5','50'),(206,2702,'4','5','80500'),(206,2703,'5','5',''),(206,2704,'0','6','6.'),(206,2705,'1','6',''),(206,2706,'2','6','Paper 170 GSM\r\nSize: 1020 x 720 MM'),(206,2707,'3','6','50'),(206,2708,'4','6','80500'),(206,2709,'5','6',''),(207,2718,'0','0',' SR. NO.'),(207,2719,'1','0',' ITEM '),(207,2720,'2','0',' QUANTITY '),(207,2721,'3','0',' RATE'),(207,2722,'0','1',' 1.'),(207,2723,'1','1','IND VS SL 2ND T20I TICKETS,\r\nSIZE : 3 INCH X 8 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : CMYK + BIV SENSOR'),(207,2724,'2','1',' 37600 TICKETS '),(207,2725,'3','1',' Rs.7.00/- PER TICKET'),(208,2726,'0','0',' Sr.      No'),(208,2727,'1','0',' Item Description'),(208,2728,'2','0',' Quantity'),(208,2729,'3','0',' Price      '),(208,2730,'4','0',' Total Price'),(208,2731,'0','1',' 1'),(208,2732,'1','1','Booklet Printing with Security Features '),(208,2733,'2','1',' 40,000 Pcs'),(208,2734,'3','1',' Rs. 58.37'),(208,2735,'4','1',' Rs. 23,34,800'),(209,2736,'0','0',' SR. NO.'),(209,2737,'1','0',' ITEM'),(209,2738,'2','0',' QUANTITY'),(209,2739,'3','0',' RATE'),(209,2740,'0','1',' 1.'),(209,2741,'1','1',' INDIA VS SRI LANKA 3RD T20 TICKET,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : CMYK ON FRONT SIDE + BLACK & BIV SENSOR ON BACK SIDE'),(209,2742,'2','1',' 28500 TICKETS'),(209,2743,'3','1','Rs.5.50/- PER TICKET'),(205,2744,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' SR. NO.'),(205,2745,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' ITEM '),(205,2746,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' QUANTITY'),(205,2747,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' RATE'),(205,2748,'\'\'\'0\'\'\'','\'\'\'1\'\'\'','1. '),(205,2749,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','FD RECEIPT FOR UDYAM BANK,\r\nSIZE : 9 INCH X 8 INCH,\r\nPAPER : 105 GSM PARCHMENT PAPER,\r\nPRINTING : MAGENTA,CYAN,BLACK,YELLOW	'),(205,2750,'\'\'\'2\'\'\'','\'\'\'1\'\'\'','5000 PCS\r\n\r\n10000 PCS'),(205,2751,'\'\'\'3\'\'\'','\'\'\'1\'\'\'',' Rs.3.80/- PER SET\r\n\r\nRs.3.50/- PER SET'),(210,2768,'\'\'0\'\'','\'\'0\'\'',' SR. NO.'),(210,2769,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(210,2770,'\'\'2\'\'','\'\'0\'\'',' QUANTITY'),(210,2771,'\'\'3\'\'','\'\'0\'\'',' RATE'),(210,2772,'\'\'0\'\'','\'\'1\'\'',' 1.'),(210,2773,'\'\'1\'\'','\'\'1\'\'','INDIA VS SRI LANKA 1ST ODI TICKET,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : INFUSED PAPER,\r\nPRINTING : CMYK ON FRONT SIDE + BLACK & BIV SENSOR ON BACK SIDE'),(210,2774,'\'\'2\'\'','\'\'1\'\'','39000 TICKETS'),(210,2775,'\'\'3\'\'','\'\'1\'\'','Rs.5.50/- PER TICKET'),(211,2776,'0','0',' SR. NO.'),(211,2777,'1','0',' ITEM'),(211,2778,'2','0',' QUANTITY'),(211,2779,'3','0',' RATE'),(211,2780,'0','1',' 1.'),(211,2781,'1','1','DIVIDEND WARRANT - BHILWARA URBAN CO-OP BANK LTD.,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPAPER : 95 GSM MICR PAPER,\r\nPRINTING : ROYAL BLUE,GREEN, INVISIBLE'),(211,2782,'2','1',' 16000 PCS'),(211,2783,'3','1',' Rs.1.50/- PER PCS'),(212,2784,'0','0',' SR.NO.'),(212,2785,'1','0',' ITEM'),(212,2786,'2','0','QUANTITY'),(212,2787,'3','0',' RATE'),(212,2788,'0','1',' 1.'),(212,2789,'1','1','PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR'),(212,2790,'2','1','1000 PCS'),(212,2791,'3','1',' Rs.7000/- LOT CHARGES'),(213,2802,'\'0\'','\'0\'',' Sr. No'),(213,2803,'\'1\'','\'0\'','Description '),(213,2804,'\'2\'','\'0\'','Quantity '),(213,2805,'\'3\'','\'0\'','Rate '),(213,2806,'\'4\'','\'0\'','Total '),(213,2807,'\'0\'','\'1\'','1 '),(213,2808,'\'1\'','\'1\'','Pin Mailer '),(213,2809,'\'2\'','\'1\'','6000 '),(213,2810,'\'3\'','\'1\'','4.10 '),(213,2811,'\'4\'','\'1\'','24600 '),(214,2836,'\'\'0\'\'','\'\'0\'\'','Sr.No'),(214,2837,'\'\'1\'\'','\'\'0\'\'','Item Description '),(214,2838,'\'\'2\'\'','\'\'0\'\'',' Time Period'),(214,2839,'\'\'3\'\'','\'\'0\'\'',' Rate'),(214,2840,'\'\'0\'\'','\'\'1\'\'',' 1.'),(214,2841,'\'\'1\'\'','\'\'1\'\'','2 CPS Software AMC Charges'),(214,2842,'\'\'2\'\'','\'\'1\'\'','From 01-01-2023 to 31-12-2023'),(214,2843,'\'\'3\'\'','\'\'1\'\'',' Rs.18000/-'),(214,2844,'\'\'0\'\'','\'\'2\'\'',' 2.'),(214,2845,'\'\'1\'\'','\'\'2\'\'','2 Printer AMC \r\nNon-compressive charges\r\n'),(214,2846,'\'\'2\'\'','\'\'2\'\'','From 01-01-2023 to 31-12-2023'),(214,2847,'\'\'3\'\'','\'\'2\'\'','Rs.12000/- Per Pcs x 2 Printer = Rs.24,000/-'),(215,2884,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' SR. NO.  '),(215,2885,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' ITEM   '),(215,2886,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' QUANTITY  '),(215,2887,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' RATE  '),(215,2888,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1.  '),(215,2889,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','ICICI BANK BOND DIVIDEND WARRANT DJC015752,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : BLACK + INVISIBLE INK, '),(215,2890,'\'\'\'2\'\'\'','\'\'\'1\'\'\'','2200 PCS'),(215,2891,'\'\'\'3\'\'\'','\'\'\'1\'\'\'',' Rs. 3.95/- PER PCS  '),(215,2892,'\'\'\'0\'\'\'','\'\'\'2\'\'\'',' 2.'),(215,2893,'\'\'\'1\'\'\'','\'\'\'2\'\'\'','ICICI BANK BOND DIVIDEND WARRANT DJC015365,\r\nSIZE : 15 INCH X 3.67 INCH,\r\nPRINTING : BLACK + INVISIBLE INK, '),(215,2894,'\'\'\'2\'\'\'','\'\'\'2\'\'\'',' 2500 PCS'),(215,2895,'\'\'\'3\'\'\'','\'\'\'2\'\'\'','  Rs. 3.95/- PER PCS  '),(216,3008,'\'\'\'\'0\'\'\'\'','\'\'\'\'0\'\'\'\'',' SR.NO.'),(216,3009,'\'\'\'\'1\'\'\'\'','\'\'\'\'0\'\'\'\'',' ITEM'),(216,3010,'\'\'\'\'2\'\'\'\'','\'\'\'\'0\'\'\'\'','QUANTITY'),(216,3011,'\'\'\'\'3\'\'\'\'','\'\'\'\'0\'\'\'\'',' RATE'),(216,3012,'\'\'\'\'0\'\'\'\'','\'\'\'\'1\'\'\'\'',' 1.'),(216,3013,'\'\'\'\'1\'\'\'\'','\'\'\'\'1\'\'\'\'','Main Plain Envelope,\r\nWindow envelope, Open Size - 285 * 232MM ,  Paper 100 - GSM  Glossy , Printing Color - 4 + 0 , & Window Pasting without Lamination with Strip Gumming'),(216,3014,'\'\'\'\'2\'\'\'\'','\'\'\'\'1\'\'\'\'','30000 PCS\r\n\r\n50000 PCS'),(216,3015,'\'\'\'\'3\'\'\'\'','\'\'\'\'1\'\'\'\'','Rs.1.95/- PER PCS\r\n\r\nRs.1.82/- PER PCS'),(216,3016,'\'\'\'\'0\'\'\'\'','\'\'\'\'2\'\'\'\'',' 2.'),(216,3017,'\'\'\'\'1\'\'\'\'','\'\'\'\'2\'\'\'\'',' Pin Mailer Envelope,\r\n80 gsm, Single Window, without lamination (leaflet),One colour printing'),(216,3018,'\'\'\'\'2\'\'\'\'','\'\'\'\'2\'\'\'\'',' 30000 PCS\r\n\r\n50000 PCS'),(216,3019,'\'\'\'\'3\'\'\'\'','\'\'\'\'2\'\'\'\'',' Rs.1.23/- PER PCS\r\n\r\nRs.1.18/- PER PCS'),(216,3020,'\'\'\'\'0\'\'\'\'','\'\'\'\'3\'\'\'\'',' 3.'),(216,3021,'\'\'\'\'1\'\'\'\'','\'\'\'\'3\'\'\'\'',' Pin Mailer,\r\nSize - 8\" x4\"x3 Ply, Printing 1 \r\n colour, Paper : 60+60+70 GSM Normal Paper'),(216,3022,'\'\'\'\'2\'\'\'\'','\'\'\'\'3\'\'\'\'',' 30000 PCS\r\n\r\n50000 PCS'),(216,3023,'\'\'\'\'3\'\'\'\'','\'\'\'\'3\'\'\'\'','Rs.1.70/- PER PCS\r\n\r\nRs.1.60/- PER PCS'),(216,3024,'\'\'\'\'0\'\'\'\'','\'\'\'\'4\'\'\'\'',' 4.'),(216,3025,'\'\'\'\'1\'\'\'\'','\'\'\'\'4\'\'\'\'',' Welcome Letter,\r\n210mm x 297mm (A4), 80 gsm, Printing 4+4 VDP on front'),(216,3026,'\'\'\'\'2\'\'\'\'','\'\'\'\'4\'\'\'\'',' 30000 PCS\r\n\r\n50000 PCS'),(216,3027,'\'\'\'\'3\'\'\'\'','\'\'\'\'4\'\'\'\'',' Rs.1.77/- PER PCS\r\n\r\nRs.1.65/- PER PCS'),(216,3028,'\'\'\'\'0\'\'\'\'','\'\'\'\'5\'\'\'\'',' 5.'),(216,3029,'\'\'\'\'1\'\'\'\'','\'\'\'\'5\'\'\'\'',' Card Pouch,\r\n3.54\" x 2.36\", 130 GSM Paper'),(216,3030,'\'\'\'\'2\'\'\'\'','\'\'\'\'5\'\'\'\'',' 30000 PCS\r\n\r\n50000 PCS'),(216,3031,'\'\'\'\'3\'\'\'\'','\'\'\'\'5\'\'\'\'',' Rs.1.29/- PER PCS\r\n\r\nRs.1.15/- PER PCS'),(216,3032,'\'\'\'\'0\'\'\'\'','\'\'\'\'6\'\'\'\'',' 6.'),(216,3033,'\'\'\'\'1\'\'\'\'','\'\'\'\'6\'\'\'\'',' User Guide/ Terms & Condition,\r\nSize - 210 * 297MM ,  Paper 80 - GSM  Maplitho , Printing Color – 4+4'),(216,3034,'\'\'\'\'2\'\'\'\'','\'\'\'\'6\'\'\'\'',' 30000 PCS\r\n\r\n50000 PCS'),(216,3035,'\'\'\'\'3\'\'\'\'','\'\'\'\'6\'\'\'\'',' Rs.1.29/- PER PCS\r\n\r\nRs.1.18/- PER PCS'),(217,3044,'\'0\'','\'0\'',' SR. NO.'),(217,3045,'\'1\'','\'0\'',' ITEM'),(217,3046,'\'2\'','\'0\'',' QUANTITY'),(217,3047,'\'3\'','\'0\'',' RATE'),(217,3048,'\'0\'','\'1\'',' 1.'),(217,3049,'\'1\'','\'1\'','NCPA TICKETS-SYMPHONY,\r\nSIZE : 3 INCH X 8 INCH,\r\nPAPER : 170 GSM ART PAPER,\r\nPRINTING : BROWN+BLACK+BLACK SENSOR'),(217,3050,'\'2\'','\'1\'',' 5000 PCS'),(217,3051,'\'3\'','\'1\'',' Rs.8.00/- PER TICKET '),(218,3052,'0','0',' SR.NO.'),(218,3053,'1','0',' ITEM'),(218,3054,'2','0',' QUANTITY'),(218,3055,'3','0',' RATE'),(218,3056,'0','1',' 1.'),(218,3057,'1','1','PIN MAILER,\r\nSIZE : 6.5 INCH X 3.67 INCH X 2 PLY,\r\nPAPER : 60+70 GSM NORMAL PAPER,\r\nPRINTING : BLACK COLOUR '),(218,3058,'2','1',' 200000 PCS'),(218,3059,'3','1','Rs. 0.77/- PER PCS'),(218,3060,'0','2',' 2.'),(218,3061,'1','2','PIN MAILER,\r\nSIZE : 6.5 INCH X 3.67 INCH X 2 PLY,\r\nPAPER : 60 GSM CARBONLESS PAPER,\r\nPRINTING : BLACK COLOUR'),(218,3062,'2','2','  200000 PCS'),(218,3063,'3','2','Rs. 1.20/- PER PCS'),(219,3096,'\'\'0\'\'','\'\'0\'\'',' SR. NO.'),(219,3097,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(219,3098,'\'\'2\'\'','\'\'0\'\'',' '),(219,3099,'\'\'3\'\'','\'\'0\'\'',' '),(219,3100,'\'\'0\'\'','\'\'1\'\'',' 1.'),(219,3101,'\'\'1\'\'','\'\'1\'\'','YES BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR '),(219,3102,'\'\'2\'\'','\'\'1\'\'',' 40000 PCS'),(219,3103,'\'\'3\'\'','\'\'1\'\'','Rs. 1.40/- PER PCS'),(219,3104,'\'\'0\'\'','\'\'2\'\'',' 2.'),(219,3105,'\'\'1\'\'','\'\'2\'\'','STATNDARD BANK PIN MAILER,\r\nSIZE : 9 INCH X 3.67 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : 4 COLOUR '),(219,3106,'\'\'2\'\'','\'\'2\'\'',' 20000 PCS'),(219,3107,'\'\'3\'\'','\'\'2\'\'',' Rs. 1.70/- PER PCS'),(219,3108,'\'\'0\'\'','\'\'3\'\'',' 3.'),(219,3109,'\'\'1\'\'','\'\'3\'\'',' EQUITAS BANK PIN MAILER,\r\nSIZE : 9 INCH X 4 INCH X 3 PLY,\r\nPAPER : 60+60+70 GSM NORMAL PAPER,\r\nPRINTING : SINGLE COLOUR '),(219,3110,'\'\'2\'\'','\'\'3\'\'','  20000 PCS'),(219,3111,'\'\'3\'\'','\'\'3\'\'',' Rs. 1.50/- PER PCS'),(220,3120,'\'0\'','\'0\'',' SR. NO.'),(220,3121,'\'1\'','\'0\'',' ITEM'),(220,3122,'\'2\'','\'0\'',' QUANTITY'),(220,3123,'\'3\'','\'0\'',' RATE'),(220,3124,'\'0\'','\'1\'',' 1.'),(220,3125,'\'1\'','\'1\'',' ENTERTAINMENT TICKET - NITA MUKESH AMBANI CULTURAL CENTRE,\r\nSIZE : 3 INCH X 6 INCH,\r\nPAPER : 190 GSM THERMAL,\r\nPRINTING : CMYK ON FRONT SIDE & BACK SIDE BLACK,\r\n250 TICKETS IN EACH ROLL'),(220,3126,'\'2\'','\'1\'',' 10000 TICKETS'),(220,3127,'\'3\'','\'1\'',' Rs.9.50/- PER TICKET'),(221,3128,'0','0','Sr. No.'),(221,3129,'1','0','Item Code'),(221,3130,'2','0','Item Description'),(221,3131,'3','0','Quantity'),(221,3132,'4','0','Price'),(221,3133,'5','0','Remark'),(221,3134,'0','1','1'),(221,3135,'1','1',''),(221,3136,'2','1','Answer sheets\r\n120 GSM , UV Thermal paper'),(221,3137,'3','1','4000'),(221,3138,'4','1','10/- per pcs'),(221,3139,'5','1',''),(221,3140,'0','2',''),(221,3141,'1','2',''),(221,3142,'2','2',''),(221,3143,'3','2',''),(221,3144,'4','2',''),(221,3145,'5','2',''),(221,3146,'0','3',''),(221,3147,'1','3',''),(221,3148,'2','3',''),(221,3149,'3','3',''),(221,3150,'4','3',''),(221,3151,'5','3',''),(222,3152,'0','0','Sr. No.'),(222,3153,'1','0','Item Code'),(222,3154,'2','0','Item Description'),(222,3155,'3','0','Case Pack'),(222,3156,'4','0','40\' Qty 24500 Kg'),(222,3157,'5','0','Case Wt Ib'),(222,3158,'0','1','1'),(222,3159,'1','1','Thermal Paper Roll'),(222,3160,'2','1','3 1/8 x 230\' \r\n48 GSM'),(222,3161,'3','1','50'),(222,3162,'4','1','1850'),(222,3163,'5','1','28.75'),(222,3164,'0','2','2'),(222,3165,'1','2','Thermal Paper Roll'),(222,3166,'2','2','2 1/4 x 150\'\r\n48 GSM'),(222,3167,'3','2','50'),(222,3168,'4','2',''),(222,3169,'5','2',''),(222,3170,'0','3','3'),(222,3171,'1','3','Thermal Paper Roll'),(222,3172,'2','3','2 1/4 x 50\'\r\n48 GSM'),(222,3173,'3','3','50'),(222,3174,'4','3',''),(222,3175,'5','3',''),(222,3176,'0','4','4'),(222,3177,'1','4','Thermal Paper Roll'),(222,3178,'2','4','2 1/4 x 85\'\r\n48 GSM'),(222,3179,'3','4','50'),(222,3180,'4','4',''),(222,3181,'5','4',''),(222,3182,'0','5',''),(222,3183,'1','5',''),(222,3184,'2','5',''),(222,3185,'3','5',''),(222,3186,'4','5',''),(222,3187,'5','5',''),(223,3188,'0','0','Sr. No.'),(223,3189,'1','0','Item Code'),(223,3190,'2','0','Item Description'),(223,3191,'3','0','Case Pack'),(223,3192,'4','0','40\' Qty 24500 Kg'),(223,3193,'5','0','Case Wt Ib'),(223,3194,'0','1','1'),(223,3195,'1','1','Thermal Paper Roll'),(223,3196,'2','1','3 1/8 x 230\' \r\n48 GSM'),(223,3197,'3','1','50'),(223,3198,'4','1','1850'),(223,3199,'5','1','28.75'),(223,3200,'0','2','2'),(223,3201,'1','2','Thermal Paper Roll'),(223,3202,'2','2','2 1/4 x 150\'\r\n48 GSM'),(223,3203,'3','2','50'),(223,3204,'4','2',''),(223,3205,'5','2',''),(223,3206,'0','3','3'),(223,3207,'1','3','Thermal Paper Roll'),(223,3208,'2','3','2 1/4 x 50\'\r\n48 GSM'),(223,3209,'3','3','50'),(223,3210,'4','3',''),(223,3211,'5','3',''),(223,3212,'0','4','4'),(223,3213,'1','4','Thermal Paper Roll'),(223,3214,'2','4','2 1/4 x 85\'\r\n48 GSM'),(223,3215,'3','4','50'),(223,3216,'4','4',''),(223,3217,'5','4',''),(223,3218,'0','5',''),(223,3219,'1','5',''),(223,3220,'2','5',''),(223,3221,'3','5',''),(223,3222,'4','5',''),(223,3223,'5','5',''),(224,3224,'0','0','Sr. No.'),(224,3225,'1','0','Item Code'),(224,3226,'2','0','Item Description'),(224,3227,'3','0','Case Pack'),(224,3228,'4','0','40\' Qty 24500 Kg'),(224,3229,'5','0','Case Wt Ib'),(224,3230,'0','1','1'),(224,3231,'1','1','Thermal Paper Roll'),(224,3232,'2','1','3 1/8 x 230\' \r\n48 GSM'),(224,3233,'3','1','50'),(224,3234,'4','1','1850'),(224,3235,'5','1','28.75'),(224,3236,'0','2','2'),(224,3237,'1','2','Thermal Paper Roll'),(224,3238,'2','2','2 1/4 x 150\'\r\n48 GSM'),(224,3239,'3','2','50'),(224,3240,'4','2',''),(224,3241,'5','2',''),(224,3242,'0','3','3'),(224,3243,'1','3','Thermal Paper Roll'),(224,3244,'2','3','2 1/4 x 50\'\r\n48 GSM'),(224,3245,'3','3','50'),(224,3246,'4','3',''),(224,3247,'5','3',''),(224,3248,'0','4','4'),(224,3249,'1','4','Thermal Paper Roll'),(224,3250,'2','4','2 1/4 x 85\'\r\n48 GSM'),(224,3251,'3','4','50'),(224,3252,'4','4',''),(224,3253,'5','4',''),(224,3254,'0','5',''),(224,3255,'1','5',''),(224,3256,'2','5',''),(224,3257,'3','5',''),(224,3258,'4','5',''),(224,3259,'5','5',''),(225,3260,'0','0','Sr. No.'),(225,3261,'1','0','Item Code'),(225,3262,'2','0','Item Description'),(225,3263,'3','0','Quantity'),(225,3264,'4','0','Price'),(225,3265,'5','0','Remark'),(225,3266,'0','1',''),(225,3267,'1','1',''),(225,3268,'2','1',''),(225,3269,'3','1',''),(225,3270,'4','1',''),(225,3271,'5','1',''),(225,3272,'0','2',''),(225,3273,'1','2',''),(225,3274,'2','2',''),(225,3275,'3','2',''),(225,3276,'4','2',''),(225,3277,'5','2',''),(226,3278,'0','0',' Sr No'),(226,3279,'1','0','Description '),(226,3280,'2','0','Qty '),(226,3281,'3','0','Rate '),(226,3282,'0','1',' 1.'),(226,3283,'1','1','Customized Hologram Master  \r\nSize:- 21mm X 21mm'),(226,3284,'2','1',' 1'),(226,3285,'3','1',' 22750/-'),(228,3310,'0','0','Sr. No.'),(228,3311,'1','0','Item Code'),(228,3312,'2','0','Item Description'),(228,3313,'3','0','Quantity'),(228,3314,'4','0','Price'),(228,3315,'5','0','Remark'),(228,3316,'0','1','1'),(228,3317,'1','1',''),(228,3318,'2','1','RPT Roll\r\n80 mm x 400 mtrs'),(228,3319,'3','1','500 pc'),(228,3320,'4','1','445/- + GST'),(228,3321,'5','1',''),(228,3322,'0','2',''),(228,3323,'1','2',''),(228,3324,'2','2',''),(228,3325,'3','2',''),(228,3326,'4','2',''),(228,3327,'5','2',''),(227,3328,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' Sr No'),(227,3329,'\'\'\'1\'\'\'','\'\'\'0\'\'\'','Desciption '),(227,3330,'\'\'\'2\'\'\'','\'\'\'0\'\'\'','Quantity'),(227,3331,'\'\'\'3\'\'\'','\'\'\'0\'\'\'','Rate per lot'),(227,3332,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1.'),(227,3333,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','NECS Forms\r\nSize:8.5\'\' x 11\'\' x 1\r\nPaper: MICR 95 GSM\r\nFront & Back Black  Col '),(227,3334,'\'\'\'2\'\'\'','\'\'\'1\'\'\'',' 1000 Sheets'),(227,3335,'\'\'\'3\'\'\'','\'\'\'1\'\'\'','7500/- per lot '),(229,3336,'0','0',' Sr No'),(229,3337,'1','0','Description '),(229,3338,'2','0','Quantity '),(229,3339,'3','0','Rate '),(229,3340,'0','1',' 1.'),(229,3341,'1','1','Record Slips\r\nSize: 9 x 3.67\r\n '),(229,3342,'2','1','15000 pcs '),(229,3343,'3','1','0.35/- per pc '),(230,3344,'0','0',' Sr No'),(230,3345,'1','0','Description '),(230,3346,'2','0','Quantity '),(230,3347,'3','0','Rate '),(230,3348,'0','1',' 1.'),(230,3349,'1','1','Record Slips\r\nSize: 9 x 3.67\r\n '),(230,3350,'2','1','15000 pcs '),(230,3351,'3','1','0.35/- per pc '),(231,3352,'0','0',' Sr No'),(231,3353,'1','0','Description '),(231,3354,'2','0','Quantity '),(231,3355,'3','0','Rate '),(231,3356,'0','1',' 1.'),(231,3357,'1','1',' Answer Book -40 pages\r\nSize:210 mm X 325 mm\r\nPaper:70 GSM\r\nPrint: 2 Col, Thread Stitching'),(231,3358,'2','1',' 10000 pcs'),(231,3359,'3','1',' 14.75/- per pc'),(231,3360,'0','2',' 2.'),(231,3361,'1','2',' Answer Book -12 pages\r\nSize:210 mm X 340 mm\r\nPaper:70 GSM\r\nPrint: 2 Col, Thread Stitching\r\n'),(231,3362,'2','2',' 10000 pcs'),(231,3363,'3','2',' 5.25/- per pc'),(232,3364,'0','0','Sr. No.'),(232,3365,'1','0','Item Code'),(232,3366,'2','0','Item Description'),(232,3367,'3','0','Quantity'),(232,3368,'4','0','Price'),(232,3369,'5','0','Remark'),(232,3370,'0','1','1'),(232,3371,'1','1',''),(232,3372,'2','1','Examination Poly Bags\r\nLength 18.2” x width 14”\r\n-	Have seal on top to allow sealing after packing \r\n-	Any Color \r\n'),(232,3373,'3','1','2000'),(232,3374,'4','1','2000 USD Lot'),(232,3375,'5','1',''),(232,3376,'0','2',''),(232,3377,'1','2',''),(232,3378,'2','2',''),(232,3379,'3','2',''),(232,3380,'4','2',''),(232,3381,'5','2',''),(233,3398,'\'0\'','\'0\'',' Sr No'),(233,3399,'\'1\'','\'0\'','Description '),(233,3400,'\'2\'','\'0\'',' Quantity'),(233,3401,'\'3\'','\'0\'','Rate '),(233,3402,'\'0\'','\'1\'',' 1'),(233,3403,'\'1\'','\'1\'',' Pre Printed FD Receipt\r\nSize: 8.5\'\' X 11\'\'\r\nPaper: 105 GSM \r\nparchment paper\r\nFront side Multi Col\r\nBack Side Single col\r\nPrinting with Foil & numbering'),(233,3404,'\'2\'','\'1\'',' 100000 pcs'),(233,3405,'\'3\'','\'1\'',' 1.80/- per pc'),(234,3454,'\'\'\'\'0\'\'\'\'','\'\'\'\'0\'\'\'\'',' Sr.no'),(234,3455,'\'\'\'\'1\'\'\'\'','\'\'\'\'0\'\'\'\'',' Description'),(234,3456,'\'\'\'\'2\'\'\'\'','\'\'\'\'0\'\'\'\'',' Quantity'),(234,3457,'\'\'\'\'3\'\'\'\'','\'\'\'\'0\'\'\'\'',' Rate'),(234,3458,'\'\'\'\'0\'\'\'\'','\'\'\'\'1\'\'\'\'',' 1'),(234,3459,'\'\'\'\'1\'\'\'\'','\'\'\'\'1\'\'\'\'',' Thermal Roll\r\nsize – 79mm x 50 mtrs\r\npaper: 50GSM\r\nsingle col printing'),(234,3460,'\'\'\'\'2\'\'\'\'','\'\'\'\'1\'\'\'\'',' 500 Rolls'),(234,3461,'\'\'\'\'3\'\'\'\'','\'\'\'\'1\'\'\'\'','48/- per roll'),(234,3462,'\'\'\'\'0\'\'\'\'','\'\'\'\'2\'\'\'\'',' 2'),(234,3463,'\'\'\'\'1\'\'\'\'','\'\'\'\'2\'\'\'\'',' Thermal Roll\r\nsize – 79mm x 65 mtrs\r\npaper: 50GSM\r\nsingle col printing'),(234,3464,'\'\'\'\'2\'\'\'\'','\'\'\'\'2\'\'\'\'',' 500 Rolls'),(234,3465,'\'\'\'\'3\'\'\'\'','\'\'\'\'2\'\'\'\'',' 58/-per roll'),(236,3594,'0','0',' SR.NO'),(236,3595,'1','0',' ITEM'),(236,3596,'2','0',' QUANTITY'),(236,3597,'3','0',' RATE'),(236,3598,'0','1',' 1.'),(236,3599,'1','1','Internet Banking Pin Mailer\r\nSize : 6.5 inch x 4 inch x 3 ply'),(236,3600,'2','1',' 25,000/'),(236,3601,'3','1',' Rs.1.85/- (Freight + 18%\r\nGST Inclusive)'),(237,3602,'0','0','Sr. No.'),(237,3603,'1','0','Item Code'),(237,3604,'2','0','Item Description'),(237,3605,'3','0','Quantity'),(237,3606,'4','0','Price'),(237,3607,'5','0','Remark'),(237,3608,'0','1','1'),(237,3609,'1','1','Retail Paper\r\n2.	Width:- 80.0 +0/-0.5mm\r\n3.	Roll Diameter: 83mm max (80 mtrs)\r\n          Thickness : 0.05-0.1mm\r\nWeight:- 52g/m² (KT 55 PF)\r\nCore: 12mm\r\nsmoothness (Bekk): min 400 sec. for thermal sensitive side\r\nCoating: Outside of paper roll\r\n'),(237,3610,'2','1',''),(237,3611,'3','1','         150 Rolls'),(237,3612,'4','1','95/-'),(237,3613,'5','1',''),(237,3614,'0','2','2.'),(237,3615,'1','2','Retail Paper\r\n5.	Width:- 80.0 +0/-0.5mm\r\n6.	Roll Diameter: 80mm max (80 mtrs)\r\n          Thickness : 0.05-0.1mm\r\nWeight:- 52g/m² (KT 55 FA)\r\nCore: 12mm\r\nsmoothness (Bekk): min 400 sec. for thermal sensitive side\r\nCoating: Outside of paper roll\r\n'),(237,3616,'2','2',''),(237,3617,'3','2','150 Rolls'),(237,3618,'4','2','94/-'),(237,3619,'5','2',''),(237,3620,'0','3','3'),(237,3621,'1','3','7.	Retail Blue4rest Paper\r\n8.	Width:- 80.0 +0/-0.5mm\r\n9.	Roll Diameter: 83mm max\r\n          Thickness : 0.05-0.1mm\r\nWeight:- 52g/m² (KT 55 FA)\r\nCore: 12mm\r\nsmoothness (Bekk): min 400 sec. for thermal sensitive side\r\nCoating: Outside of paper rolls\r\n'),(237,3622,'2','3',''),(237,3623,'3','3','50 Rolls'),(237,3624,'4','3','140/-'),(237,3625,'5','3',''),(237,3626,'0','4','4'),(237,3627,'1','4','10.	Banking  Paper\r\n11.	Paper Width:- 80,0 mm / -0.5 mm (594 mtrs)\r\n12.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 203mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),(237,3628,'2','4',''),(237,3629,'3','4','250 Rolls'),(237,3630,'4','4','755/- per pc + GST + Transport'),(237,3631,'5','4',''),(237,3632,'0','5','5'),(237,3633,'1','5','Banking  Paper\r\n1.	Paper Width:- 80,0 mm / -0.5 mm, 1000 mtres\r\n2.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 260mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),(237,3634,'2','5',''),(237,3635,'3','5','10 Rolls'),(237,3636,'4','5','1468/- per pc + GST'),(237,3637,'5','5',''),(237,3638,'0','5','5'),(237,3639,'1','5','Banking  Paper\r\n1.	Paper Width:- 80,0 mm / -0.5 mm, 1000 mtres\r\n2.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 260mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),(237,3640,'2','5',''),(237,3641,'3','5','10 Rolls'),(237,3642,'4','5','1468/- per pc + GST'),(237,3643,'5','5',''),(237,3644,'0','5','5'),(237,3645,'1','5','Banking  Paper\r\n1.	Paper Width:- 80,0 mm / -0.5 mm, 1000 mtres\r\n2.	Paper Roll width:- 79.5 +0.7 / -0.5 mm \r\n  roll outer diameter:- 260mm\r\n  Paper roll inner diameter:- 25 mm (1 inch)\r\n  Paper roll core material:- Plastic or board\r\n  Paper feed in:- Automated\r\n  Paper weight :-  52g/m² - KT 55 PF\r\n  Paper thickness:- 0,050 mm – 0,090 mm\r\n  Smoothness (Bekk) :- min. 300 sec. for thermal       sensitive side\r\n'),(237,3646,'2','5',''),(237,3647,'3','5','10 Rolls'),(237,3648,'4','5','1468/- per pc + GST'),(237,3649,'5','5',''),(238,3650,'0','0','Sr. No.'),(238,3651,'1','0','Item Code'),(238,3652,'2','0','Item Description'),(238,3653,'3','0','Quantity'),(238,3654,'4','0','Price'),(238,3655,'5','0','Remark'),(238,3656,'0','1','1'),(238,3657,'1','1','Grade Cards (Mark Sheets) in A4 size on 130gsm non-tearable white paper, printing on both sides – front 4 color and back 1 color\r\nSecurity Features:\r\n1. Serial No\r\n2. Invisible UV\r\n3. Copy void pantograph\r\n4. Gold foil\r\n5. Micro line\r\n6. Guilloche Design   \r\n'),(238,3658,'2','1',''),(238,3659,'3','1','30,000'),(238,3660,'4','1','11.50 per Marksheet Ex. Factory'),(238,3661,'5','1',''),(239,3662,'0','0','Sr. No.'),(239,3663,'1','0','Item Code'),(239,3664,'2','0','Item Description'),(239,3665,'3','0','Quantity'),(239,3666,'4','0','Price'),(239,3667,'5','0','Remark'),(239,3668,'0','1','1'),(239,3669,'1','1',''),(239,3670,'2','1','1.	Degree Certificate- A4 size\r\n2.	120 GSM UV Thread, 4 color Front/ 1 back\r\n-	Inv. UV\r\n-	Anti Copy\r\n-	MICR Ṇo. + Pantitrating No. \r\n-	QR Code\r\n-	Microline\r\n-	Gullish\r\n-	Thermo chronic ink\r\n-	Foil stamping\r\n-	Florosent Ink\r\n'),(239,3671,'3','1','100\r\n650\r\n750'),(239,3672,'4','1','295/-PER PC\r\n70/- PER PC\r\n68/-PER PC'),(239,3673,'5','1',''),(239,3674,'0','2','2'),(239,3675,'1','2',''),(239,3676,'2','2','Degree Certificate\r\n3.	160 GSM with currency strip + UV Thread\r\n4.	4 color front/ 1 back\r\n-	Inv. UV\r\n-	Anti Copy\r\n-	MICR Ṇo. + Pantitrating No. \r\n-	QR Code\r\n-	Microline\r\n-	Gullish\r\n-	Thermo chronic ink\r\n-	Foil stamping\r\n-	Florosent Ink\r\n'),(239,3677,'3','2','100\r\n650\r\n750'),(239,3678,'4','2','325/- PER PC\r\n78/- PER PC\r\n76/- PER PC'),(239,3679,'5','2',''),(235,3680,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' Sr.no'),(235,3681,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' Description'),(235,3682,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' Quantity'),(235,3683,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' Rate'),(235,3684,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1'),(235,3685,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','Thermal Roll\r\nSize: 79mm x 50mtrs \r\npaper:55 GSM\r\nPACKING 50 ROLLS PER BOX\r\n'),(235,3686,'\'\'\'2\'\'\'','\'\'\'1\'\'\'',' 500 Rolls'),(235,3687,'\'\'\'3\'\'\'','\'\'\'1\'\'\'','43/-  PER ROLL'),(235,3688,'\'\'\'0\'\'\'','\'\'\'2\'\'\'','2 '),(235,3689,'\'\'\'1\'\'\'','\'\'\'2\'\'\'','Thermal Roll\r\nSize: 79mm x 30mtrs \r\npaper:55 GSM\r\nPACKING 50 ROLLS PER BOX\r\n'),(235,3690,'\'\'\'2\'\'\'','\'\'\'2\'\'\'','  500 Rolls'),(235,3691,'\'\'\'3\'\'\'','\'\'\'2\'\'\'',' 28/-  PER ROLL'),(235,3692,'\'\'\'0\'\'\'','\'\'\'3\'\'\'',' 3'),(235,3693,'\'\'\'1\'\'\'','\'\'\'3\'\'\'','Thermal Roll\r\nSize: 57mm x 30mtrs \r\npaper:55 GSM\r\nPACKING 100 ROLLS PER BOX\r\n'),(235,3694,'\'\'\'2\'\'\'','\'\'\'3\'\'\'','  500 Rolls'),(235,3695,'\'\'\'3\'\'\'','\'\'\'3\'\'\'',' 21/- PER ROLL'),(240,3696,'0','0',' sr.no'),(240,3697,'1','0',' Item'),(240,3698,'2','0',' quantity '),(240,3699,'3','0',' rate'),(240,3700,'0','1',' 1'),(240,3701,'1','1',' blank pinmailer  '),(240,3702,'2','1',' 2000 pin'),(240,3703,'3','1',' 2.50/- per pc'),(241,3704,'0','0','Sr. No.'),(241,3705,'1','0','Item Code'),(241,3706,'2','0','Item Description'),(241,3707,'3','0','Quantity'),(241,3708,'4','0','Price'),(241,3709,'5','0','Remark'),(241,3710,'0','1','1'),(241,3711,'1','1',''),(241,3712,'2','1','Rice Straw 8x210 mm'),(241,3713,'3','1','10,00,000'),(241,3714,'4','1','Rs1.12/- + Export handling cost Appx. 0.05/ pc extra'),(241,3715,'5','1',''),(241,3716,'0','2',''),(241,3717,'1','2',''),(241,3718,'2','2',''),(241,3719,'3','2',''),(241,3720,'4','2',''),(241,3721,'5','2',''),(241,3722,'0','3',''),(241,3723,'1','3',''),(241,3724,'2','3',''),(241,3725,'3','3',''),(241,3726,'4','3',''),(241,3727,'5','3',''),(241,3728,'0','4',''),(241,3729,'1','4',''),(241,3730,'2','4',''),(241,3731,'3','4',''),(241,3732,'4','4',''),(241,3733,'5','4',''),(174,3734,'\'0\'','\'0\'',' test1'),(174,3735,'\'1\'','\'0\'','test2 '),(174,3736,'\'0\'','\'1\'','test3 '),(174,3737,'\'1\'','\'1\'','tes4 '),(242,3738,'0','0',' sr'),(242,3739,'1','0','product'),(242,3740,'0','1',' 1'),(242,3741,'1','1',' Thermal'),(243,3750,'\'0\'','\'0\'',' SR.NO'),(243,3751,'\'1\'','\'0\'','  ITEM'),(243,3752,'\'2\'','\'0\'','  QUANTITY'),(243,3753,'\'3\'','\'0\'','  RATE'),(243,3754,'\'0\'','\'1\'','  1.'),(243,3755,'\'1\'','\'1\'','TAMILNADU GAMA BANK- \r\nPIN MAILER \r\n9INCH X 3.67INCH X 3PLY'),(243,3756,'\'2\'','\'1\'',' 50000'),(243,3757,'\'3\'','\'1\'',' Rs.1.85/-'),(204,3758,'\'\'0\'\'','\'\'0\'\'','SR. NO.'),(204,3759,'\'\'1\'\'','\'\'0\'\'',' ITEM'),(204,3760,'\'\'2\'\'','\'\'0\'\'',' QUANTITY'),(204,3761,'\'\'3\'\'','\'\'0\'\'',' RATE'),(204,3762,'\'\'0\'\'','\'\'1\'\'',' 1.'),(204,3763,'\'\'1\'\'','\'\'1\'\'',' IDBI VISA ASPIRE DI CARD ENVELOPE'),(204,3764,'\'\'2\'\'','\'\'1\'\'',' 5000 PCS'),(204,3765,'\'\'3\'\'','\'\'1\'\'',' Rs.5.42/- PER PCS'),(204,3766,'\'\'0\'\'','\'\'2\'\'',' 2.'),(204,3767,'\'\'1\'\'','\'\'2\'\'',' IDBI VISA IMPERIUM DI CARD ENVELOPE'),(204,3768,'\'\'2\'\'','\'\'2\'\'',' 5000 PCS'),(204,3769,'\'\'3\'\'','\'\'2\'\'',' Rs.5.42/- PER PCS'),(244,3770,'0','0','Sr. No.'),(244,3771,'1','0','Item Code'),(244,3772,'2','0','Item Description'),(244,3773,'3','0','Quantity'),(244,3774,'4','0','Price'),(244,3775,'5','0','Remark'),(244,3776,'0','1','1'),(244,3777,'1','1',''),(244,3778,'2','1','KBA Cheque Paper \r\nReel Size: 10.5 inch x 266 mm\r\nPaper: 95 GSM\r\nHSN Code: 48025550\r\n'),(244,3779,'3','1','30 MT'),(244,3780,'4','1','$ 2425'),(244,3781,'5','1','$ 72,750'),(245,3782,'0','0','Sr. No.'),(245,3783,'1','0','Item Code'),(245,3784,'2','0','Item Description'),(245,3785,'3','0','Quantity'),(245,3786,'4','0','Price'),(245,3787,'5','0','Remark'),(245,3788,'0','1','1'),(245,3789,'1','1',''),(245,3790,'2','1','1.	Marksheets- A4 size\r\n2.	120 GSM UV Thread, 4 color Front/ 1 back\r\n-	Inv. UV logo\r\n-	Anti Copy\r\n-	High Density Border\r\n-	Microline\r\n-	Guilloche Pattern\r\n'),(245,3791,'3','1','150'),(245,3792,'4','1','140'),(245,3793,'5','1',''),(246,3794,'0','0',' SR .NO'),(246,3795,'1','0',' ITEM'),(246,3796,'2','0',' QUANTITY'),(246,3797,'3','0','RATE '),(246,3798,'0','1',' 1.'),(246,3799,'1','1',' Webtrade Pin mailer\r\n8 inch X4 inch X3'),(246,3800,'2','1','	10000 PCS '),(246,3801,'3','1','2.10/- '),(247,3802,'0','0','Sr. No.'),(247,3803,'1','0','Item Code'),(247,3804,'2','0','Item Description'),(247,3805,'3','0','Quantity'),(247,3806,'4','0','Price'),(247,3807,'5','0','Remark'),(247,3808,'0','1','1'),(247,3809,'1','1',''),(247,3810,'2','1','Grade Card\r\nSerial No. 055001 to 070000'),(247,3811,'3','1','15000'),(247,3812,'4','1','2.70/ pc+ GST'),(247,3813,'5','1',''),(247,3814,'0','2','2'),(247,3815,'1','2',''),(247,3816,'2','2','Grade Card\r\nwith SVKM Logo\r\nSerial No. for Jr. College -000001-006000'),(247,3817,'3','2','6000'),(247,3818,'4','2','2.70/ pc + GST'),(247,3819,'5','2',''),(247,3820,'0','3','3'),(247,3821,'1','3',''),(247,3822,'2','3','Passing Certificate\r\nSerial No: 003001 to 006000'),(247,3823,'3','3','3000'),(247,3824,'4','3','3.00/ pc + GST'),(247,3825,'5','3',''),(248,3826,'0','0','Sr. No.'),(248,3827,'1','0','Item Code'),(248,3828,'2','0','Item Description'),(248,3829,'3','0','Quantity'),(248,3830,'4','0','Price'),(248,3831,'5','0','Remark'),(248,3832,'0','1','1'),(248,3833,'1','1',''),(248,3834,'2','1','Grade Card\r\nSerial No. 055001 to 070000'),(248,3835,'3','1','15000'),(248,3836,'4','1','2.70/ pc+ GST'),(248,3837,'5','1',''),(248,3838,'0','2','2'),(248,3839,'1','2',''),(248,3840,'2','2','Grade Card\r\nwith SVKM Logo\r\nSerial No. for Jr. College -000001-006000'),(248,3841,'3','2','6000'),(248,3842,'4','2','2.70/ pc + GST'),(248,3843,'5','2',''),(248,3844,'0','3','3'),(248,3845,'1','3',''),(248,3846,'2','3','Passing Certificate\r\nSerial No: 003001 to 006000'),(248,3847,'3','3','3000'),(248,3848,'4','3','3.00/ pc + GST'),(248,3849,'5','3',''),(249,3850,'0','0','Sr. No.'),(249,3851,'1','0','Item Code'),(249,3852,'2','0','Item Description'),(249,3853,'3','0','Quantity'),(249,3854,'4','0','Price'),(249,3855,'5','0','Remark'),(249,3856,'0','1','1'),(249,3857,'1','1',''),(249,3858,'2','1','Grade Card\r\nSerial No. 020001 to 028000\r\n'),(249,3859,'3','1','8000	'),(249,3860,'4','1','Rs. 3.1/ pc+ GST'),(249,3861,'5','1',''),(249,3862,'0','2','2'),(249,3863,'1','2',''),(249,3864,'2','2','Grade Card\r\nwith SVKM Logo\r\nSerial No. for Jr. College -000001-002500\r\n'),(249,3865,'3','2','2500'),(249,3866,'4','2','Rs. 3.1/ pc+ GST'),(249,3867,'5','2',''),(249,3868,'0','3','3'),(249,3869,'1','3',''),(249,3870,'2','3','Passing Certificate\r\nSerial No: 001501 to 003000\r\n'),(249,3871,'3','3','1500'),(249,3872,'4','3','Rs. 4.75/ pc + GST'),(249,3873,'5','3',''),(250,3874,'0','0','Sr. No.'),(250,3875,'1','0','Item Code'),(250,3876,'2','0','Item Description'),(250,3877,'3','0','Quantity'),(250,3878,'4','0','Price'),(250,3879,'5','0','Remark'),(250,3880,'0','1','1'),(250,3881,'1','1',''),(250,3882,'2','1','Certificate-90 gsm\r\nA4 paper\r\n•	Inv UV logo\r\n•	Microtext\r\n•	Barcode\r\n•	Hologram\r\n•	Watermark log\r\n•	Reverse Text\r\n•	High Resolution Border\r\n•	Guilloche Design\r\n•	Serial No\r\n'),(250,3883,'3','1','7,20,000'),(250,3884,'4','1','60 USD per pc'),(250,3885,'5','1','40 USD per pc, Air Freight'),(250,3886,'0','2','2'),(250,3887,'1','2',''),(250,3888,'2','2','Cards with rf Chip'),(250,3889,'3','2','4,00,000'),(250,3890,'4','2','1250 USD per pc'),(250,3891,'5','2','250 USD per pc, Air Freight'),(251,3892,'0','0','Sr. No.'),(251,3893,'1','0','Item Code'),(251,3894,'2','0','Item Description'),(251,3895,'3','0','Quantity'),(251,3896,'4','0','Price'),(251,3897,'5','0','Remark'),(251,3898,'0','1','1'),(251,3899,'1','1',''),(251,3900,'2','1','1.	Railway Thermal Rolls\r\n2.	Paper- 130 GSM\r\nSize:- 86mm x 64mm\r\n'),(251,3901,'3','1','100 Rolls'),(251,3902,'4','1','375/- per Roll + GST'),(251,3903,'5','1',''),(252,3904,'0','0',' SR.NO'),(252,3905,'1','0',' ITEM'),(252,3906,'2','0',' SIZE'),(252,3907,'3','0',' RATE'),(252,3908,'0','1',' 1'),(252,3909,'1','1','DIEBOLD D450 RP ROLL \r\n( WITH ONE COLUMN PRINTING)'),(252,3910,'2','1',' 79 MM X 540 MTR>CODE: C930'),(252,3911,'3','1',' 525/-PER ROLL'),(252,3912,'0','2',' 2'),(252,3913,'1','2',' DIEBOLD D422RP ROLL( WITH ONE COLUMN PRINTING)'),(252,3914,'2','2','79 MM X 200 MTR>CODE: C928'),(252,3915,'3','2',' 225/-PER ROLL'),(252,3916,'0','3',' 3'),(252,3917,'1','3',' DIEBOLD D429 RP ROLL( WITH ONE COLUMN PRINTING)'),(252,3918,'2','3',' 79 MM X 170 MTR>CODE: C929'),(252,3919,'3','3',' 205/-PER ROLL'),(252,3920,'0','4',' 4'),(252,3921,'1','4',' DIEBOLD BNA JP BOND ROLL( WITH ONE COLUMN PRINTING)'),(252,3922,'2','4',' 56 MM X 70 MTR>CODE: C938'),(252,3923,'3','4',' 55/-PER ROLL'),(252,3924,'0','5',' 5'),(252,3925,'1','5',' DIEBOLD RP ROLL( WITH ONE COLUMN PRINTING)'),(252,3926,'2','5',' 79 MM X 160 MTRS>CODE: C927'),(252,3927,'3','5',' 200/-PER ROLL'),(252,3928,'0','6',' 6'),(252,3929,'1','6',' HITACHI BNA RP THERMAL ROLL( WITH ONE COLUMN PRINTING)\r\n'),(252,3930,'2','6',' SIZE: 79 MM X 300 MTR>CODE: C933'),(252,3931,'3','6',' 325/-PER ROLL'),(252,3932,'0','7',' 7'),(252,3933,'1','7',' VORTEX RP ROLL( WITH ONE COLUMN PRINTING)'),(252,3934,'2','7','79 MM X 270 MTR\r\n65 GSM>CODE: C931 '),(252,3935,'3','7',' 325/-PER ROLL'),(252,3936,'0','8',' 8'),(252,3937,'1','8',' WINCORE RP ROLLS( WITH ONE COLUMN PRINTING)'),(252,3938,'2','8',' 79 MM X 300 MTR>CODE: C932'),(252,3939,'3','8',' 325/-PER ROLL'),(252,3940,'0','9',' 9'),(252,3941,'1','9','ATM ROLL NCR( WITH ONE COLUMN PRINTING)\r\n'),(252,3942,'2','9',' 80 MM X 100 MTRS >55 GSM>DIAMETER 4 INCH>ONLY SENSOR PRINTING'),(252,3943,'3','9',' 115/-PER ROLL'),(253,4064,'\'\'\'0\'\'\'','\'\'\'0\'\'\'',' SR.NO'),(253,4065,'\'\'\'1\'\'\'','\'\'\'0\'\'\'',' ITEM'),(253,4066,'\'\'\'2\'\'\'','\'\'\'0\'\'\'',' SIZE'),(253,4067,'\'\'\'3\'\'\'','\'\'\'0\'\'\'',' RATE'),(253,4068,'\'\'\'0\'\'\'','\'\'\'1\'\'\'',' 1'),(253,4069,'\'\'\'1\'\'\'','\'\'\'1\'\'\'','DIEBOLD D450 RP ROLL \r\n( WITH ONE COLOUR PRINTING)'),(253,4070,'\'\'\'2\'\'\'','\'\'\'1\'\'\'',' 79 MM X 540 MTR>CODE: C930'),(253,4071,'\'\'\'3\'\'\'','\'\'\'1\'\'\'',' 525/-PER ROLL'),(253,4072,'\'\'\'0\'\'\'','\'\'\'2\'\'\'',' 2'),(253,4073,'\'\'\'1\'\'\'','\'\'\'2\'\'\'',' DIEBOLD D422RP ROLL( WITH ONE COLOUR PRINTING)'),(253,4074,'\'\'\'2\'\'\'','\'\'\'2\'\'\'','79 MM X 200 MTR>CODE: C928'),(253,4075,'\'\'\'3\'\'\'','\'\'\'2\'\'\'',' 225/-PER ROLL'),(253,4076,'\'\'\'0\'\'\'','\'\'\'3\'\'\'',' 3'),(253,4077,'\'\'\'1\'\'\'','\'\'\'3\'\'\'',' DIEBOLD D429 RP ROLL( WITH ONE COLOUR PRINTING)'),(253,4078,'\'\'\'2\'\'\'','\'\'\'3\'\'\'',' 79 MM X 170 MTR>CODE: C929'),(253,4079,'\'\'\'3\'\'\'','\'\'\'3\'\'\'',' 205/-PER ROLL'),(253,4080,'\'\'\'0\'\'\'','\'\'\'4\'\'\'',' 4'),(253,4081,'\'\'\'1\'\'\'','\'\'\'4\'\'\'',' DIEBOLD BNA JP BOND ROLL( WITH ONE COLOUR PRINTING)'),(253,4082,'\'\'\'2\'\'\'','\'\'\'4\'\'\'',' 56 MM X 70 MTR>CODE: C938'),(253,4083,'\'\'\'3\'\'\'','\'\'\'4\'\'\'',' 55/-PER ROLL'),(253,4084,'\'\'\'0\'\'\'','\'\'\'5\'\'\'',' 5'),(253,4085,'\'\'\'1\'\'\'','\'\'\'5\'\'\'',' DIEBOLD RP ROLL( WITH ONE COLOUR PRINTING)'),(253,4086,'\'\'\'2\'\'\'','\'\'\'5\'\'\'',' 79 MM X 160 MTRS>CODE: C927'),(253,4087,'\'\'\'3\'\'\'','\'\'\'5\'\'\'',' 200/-PER ROLL'),(253,4088,'\'\'\'0\'\'\'','\'\'\'6\'\'\'',' 6'),(253,4089,'\'\'\'1\'\'\'','\'\'\'6\'\'\'',' HITACHI BNA RP THERMAL ROLL( WITH ONE COLOUR PRINTING)\r\n'),(253,4090,'\'\'\'2\'\'\'','\'\'\'6\'\'\'',' 79 MM X 300 MTR>CODE: C933'),(253,4091,'\'\'\'3\'\'\'','\'\'\'6\'\'\'',' 325/-PER ROLL'),(253,4092,'\'\'\'0\'\'\'','\'\'\'7\'\'\'',' 7'),(253,4093,'\'\'\'1\'\'\'','\'\'\'7\'\'\'',' VORTEX RP ROLL( WITH ONE COLOUR PRINTING)'),(253,4094,'\'\'\'2\'\'\'','\'\'\'7\'\'\'','79 MM X 270 MTR\r\n65 GSM>CODE: C931 '),(253,4095,'\'\'\'3\'\'\'','\'\'\'7\'\'\'',' 325/-PER ROLL'),(253,4096,'\'\'\'0\'\'\'','\'\'\'8\'\'\'',' 8'),(253,4097,'\'\'\'1\'\'\'','\'\'\'8\'\'\'',' WINCORE RP ROLLS( WITH ONE COLOUR PRINTING)'),(253,4098,'\'\'\'2\'\'\'','\'\'\'8\'\'\'',' 79 MM X 300 MTR>CODE: C932'),(253,4099,'\'\'\'3\'\'\'','\'\'\'8\'\'\'',' 310/-PER ROLL'),(253,4100,'\'\'\'0\'\'\'','\'\'\'9\'\'\'',' 9'),(253,4101,'\'\'\'1\'\'\'','\'\'\'9\'\'\'','ATM ROLL NCR( WITH ONE COLOUR PRINTING)\r\n'),(253,4102,'\'\'\'2\'\'\'','\'\'\'9\'\'\'',' 80 MM X 100 MTRS >55 GSM>DIAMETER 4 INCH>ONLY SENSOR PRINTING'),(253,4103,'\'\'\'3\'\'\'','\'\'\'9\'\'\'',' 110/-PER ROLL'),(254,4144,'\'\'0\'\'','\'\'0\'\'',' SR NO'),(254,4145,'\'\'1\'\'','\'\'0\'\'','ITEM DESCRIPTION '),(254,4146,'\'\'2\'\'','\'\'0\'\'','MOQ '),(254,4147,'\'\'3\'\'','\'\'0\'\'','RATE per ROLL'),(254,4148,'\'\'0\'\'','\'\'1\'\'',' 1.'),(254,4149,'\'\'1\'\'','\'\'1\'\'',' THERMAL PAPER ROLL\r\nINNER CORE:1.2CM\r\nOUTER CORE: 1.6 CM\r\nWIDTH OF TAPE: 5.5CM\r\nSIZE: 3.4CM X 13 MTRS\r\nPAPER: 48 GSM\r\nITEM CODE: 903999013'),(254,4150,'\'\'2\'\'','\'\'1\'\'','5000 ROLLS '),(254,4151,'\'\'3\'\'','\'\'1\'\'','8.75/-  '),(254,4152,'\'\'0\'\'','\'\'2\'\'',' 2.'),(254,4153,'\'\'1\'\'','\'\'2\'\'','ATM ROLL\r\nDIEBOLD ATM ROLL D429\r\nRP ROLL\r\nSIZE: 79MM X 170 MTRS'),(254,4154,'\'\'2\'\'','\'\'2\'\'','-'),(254,4155,'\'\'3\'\'','\'\'2\'\'','8.55/- '),(254,4156,'\'\'0\'\'','\'\'3\'\'',' 3.'),(254,4157,'\'\'1\'\'','\'\'3\'\'',' THERMAL PAPER ROLL\r\nRP ROLL(BLUE IMPRESSION)\r\nSIZE: 79MM X 400 MTRS\r\nPAPER: 56 GSM\r\nITEM CODE: C952'),(254,4158,'\'\'2\'\'','\'\'3\'\'','-'),(254,4159,'\'\'3\'\'','\'\'3\'\'','415/- '),(254,4160,'\'\'0\'\'','\'\'4\'\'',' 4.'),(254,4161,'\'\'1\'\'','\'\'4\'\'',' THERMAL PAPER \r\nSIZE: 56MMX 12MTRS\r\nPAPER:50 GSM\r\nITEM CODE:RGNTR01'),(254,4162,'\'\'2\'\'','\'\'4\'\'',' 5000 ROLLS'),(254,4163,'\'\'3\'\'','\'\'4\'\'','8.75/- '),(255,4164,'0','0','Sr. No.'),(255,4165,'1','0','Item Code'),(255,4166,'2','0','Item Description'),(255,4167,'3','0','Quantity'),(255,4168,'4','0','Price'),(255,4169,'5','0','Remark'),(255,4170,'0','1','1'),(255,4171,'1','1',''),(255,4172,'2','1','Marksheet Size :11.5”X 8.5”\r\nNatural shade with security features\r\n 105 gsm Paper.'),(255,4173,'3','1','1000'),(255,4174,'4','1','6.50/ sheet + GST '),(255,4175,'5','1',''),(256,4188,'0','0',' SR NO  '),(256,4189,'1','0','DESCRIPTION  '),(256,4190,'2','0',' SIZE/GSM  '),(256,4191,'3','0',' RATE  '),(256,4192,'0','1',' 1.  '),(256,4193,'1','1','CMYK+BLACK\r\n THERMAL  '),(256,4194,'2','1','170 GSM  \r\n  3 X 8'),(256,4195,'3','1',' 4.25/-  '),(256,4196,'0','2',' 2.  '),(256,4197,'1','2','\r\nCMYK+BLACK\r\n COLOUR CENTRED THERMAL  '),(256,4198,'2','2','190 GSM  \r\n 3 X 8\r\n  '),(256,4199,'3','2',' 6.25/-  '),(256,4200,'0','3','  3.'),(256,4201,'1','3',' CMYK+BLACK+GOLD\r\n THERMAL  '),(256,4202,'2','3','  170 GSM\r\n  3 X 8'),(256,4203,'3','3','  4.75/-'),(256,4204,'0','4','  4.'),(256,4205,'1','4','  CMYK+BLACK+GOLD\r\n THERMAL'),(256,4206,'2','4','  190 GSM\r\n  3 X 8'),(256,4207,'3','4',' 6.50/- '),(257,4208,'0','0','Sr. No.'),(257,4209,'1','0','Item Code'),(257,4210,'2','0','Item Description'),(257,4211,'3','0','Quantity'),(257,4212,'4','0','Price'),(257,4213,'5','0','Remark'),(257,4214,'0','1','1'),(257,4215,'1','1',''),(257,4216,'2','1','1.	Certificate- Lumbini Buddhist University\r\n2.	Paper- 105 GSM\r\nSize:- 10” x 12” (A4)\r\nPrinting Matter: 8.9” x 11.5”\r\nGolden Foil\r\n3 color front/ 1 back\r\n'),(257,4217,'3','1','5000'),(257,4218,'4','1','Rs. 5.00/-'),(257,4219,'5','1',''),(257,4220,'0','2','2'),(257,4221,'1','2',''),(257,4222,'2','2','1.	Certificate- Lumbini Buddhist University\r\n2.	Paper- 105 GSM\r\nSize:- 10” x 12” (A4)\r\nPrinting Matter: 8.9” x 11.5”\r\nGolden Foil\r\n3 color front/ 1 back\r\n'),(257,4223,'3','2','5000'),(257,4224,'4','2','Rs. 5.00/-'),(257,4225,'5','2',''),(257,4226,'0','3','3'),(257,4227,'1','3',''),(257,4228,'2','3','1.	Certificate- Lumbini Buddhist University\r\n2.	Paper- 105 GSM\r\nSize:- 10” x 12” (A4)\r\nPrinting Matter: 8.9” x 11.5”\r\nGolden Foil\r\n3 color front/ 1 back\r\n'),(257,4229,'3','3','5000'),(257,4230,'4','3','Rs.5.00/-'),(257,4231,'5','3',''),(258,4232,'0','0','Sr. No.'),(258,4233,'1','0','Item Code'),(258,4234,'2','0','Item Description'),(258,4235,'3','0','Quantity'),(258,4236,'4','0','Price'),(258,4237,'5','0','Remark'),(258,4238,'0','1','1'),(258,4239,'1','1',''),(258,4240,'2','1','1.	Degree Certificate- A4 size\r\n2.	110 GSM UV Thread, 4 color Front/ 1 back\r\n-	Inv. UV\r\n-	Anti Copy\r\n-	MICR Ṇo. + Pantitrating No. \r\n-	QR Code\r\n-	Microline\r\n-	Gullish\r\n-	Thermo chronic ink\r\n-	Foil stamping\r\n-	Florosent Ink\r\n'),(258,4241,'3','1','750'),(258,4242,'4','1','Rs. 60/- + GST+Transport'),(258,4243,'5','1',''),(259,4244,'0','0',' SR NO'),(259,4245,'1','0',' PRODUCT NAME'),(259,4246,'2','0',' STATIONARY TYPE'),(259,4247,'3','0',' RATE'),(259,4248,'0','1',' 1.'),(259,4249,'1','1',' IDBI Visa Aspire Contactless Card'),(259,4250,'2','1',' Inner Jacket'),(259,4251,'3','1',' 3.90/-PER PC'),(259,4252,'0','2',' 2.'),(259,4253,'1','2',' IDBI Visa Aspire Contactless Card'),(259,4254,'2','2',' Welcome Letter'),(259,4255,'3','2',' 1.56/-PER PC'),(259,4256,'0','3',' 3.'),(259,4257,'1','3',' IDBI Visa Imperium Contactless Card'),(259,4258,'2','3',' Inner Jacket'),(259,4259,'3','3','  3.90/-PER PC'),(259,4260,'0','4',' 4.'),(259,4261,'1','4',' IDBI Visa Imperium Contactless Card'),(259,4262,'2','4',' Welcome Letter'),(259,4263,'3','4',' 1.56/-PER PC'),(261,4324,'0','0',' Product Description'),(261,4325,'1','0','Quantity '),(261,4326,'2','0',' Rate Per Pc'),(261,4327,'0','1',' Net banking  I-Pin Mailer\r\nSize: 8” x 4.0” X III parts\r\nPaper: 55 GSM, CB/CFB/CF\r\nPerforation: Both side  2nd & 3rd Part\r\nColor:  Single Color, NCR \r\n'),(261,4328,'1','1',' 2,00,000	'),(261,4329,'2','1',' Rs. 1.50/ Per pc'),(261,4330,'0','2',' ATM DEBIT CARD PIN MAILER\r\nSize: 8” x 4.0” X III parts\r\nPaper: 52 GSM, CB/CFB/CF \r\nPerforation: Both side  2nd & 3rd Part\r\nColor:  Single Color, NCR\r\n'),(261,4331,'1','2',' 2,00,000'),(261,4332,'2','2',' Rs. 1.50/ Per pc'),(262,4333,'0','0','Sr. No.'),(263,4334,'0','0','Sr. No.'),(262,4335,'1','0','Item Code'),(263,4336,'1','0','Item Code'),(262,4337,'2','0','Item Description'),(263,4338,'2','0','Item Description'),(262,4339,'3','0','Quantity'),(263,4340,'3','0','Quantity'),(262,4341,'4','0','Price'),(263,4342,'4','0','Price'),(262,4343,'5','0','Remark'),(263,4344,'5','0','Remark'),(262,4345,'0','1','1'),(263,4346,'0','1','1'),(262,4347,'1','1',''),(263,4348,'1','1',''),(262,4349,'2','1','Provisional Certificate\r\nSize: 8\"x8\"\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(263,4350,'2','1','Provisional Certificate\r\nSize: 8\"x8\"\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(262,4351,'3','1','25000'),(263,4352,'3','1','25000'),(262,4353,'4','1','2.36'),(263,4354,'4','1','2.36'),(262,4355,'5','1',''),(263,4356,'5','1',''),(262,4357,'0','2','2'),(263,4358,'0','2','2'),(262,4359,'1','2',''),(263,4360,'1','2',''),(262,4361,'2','2','Migration Certificate\r\nSize: 8\"x8\"\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(263,4362,'2','2','Migration Certificate\r\nSize: 8\"x8\"\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(262,4363,'3','2','25000'),(263,4364,'3','2','25000'),(262,4365,'4','2','2.36'),(263,4366,'4','2','2.36'),(262,4367,'5','2',''),(263,4368,'5','2',''),(262,4369,'0','3','3'),(263,4370,'0','3','3'),(262,4371,'1','3',''),(263,4372,'1','3',''),(262,4373,'2','3','Marksheet\r\nSize: 9\"x12\" (A4)\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(263,4374,'2','3','Marksheet\r\nSize: 9\"x12\" (A4)\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(262,4375,'3','3','25000'),(263,4376,'3','3','25000'),(262,4377,'4','3','2.86'),(263,4378,'4','3','2.86'),(262,4379,'5','3',''),(263,4380,'5','3',''),(262,4381,'0','4','4'),(263,4382,'0','4','4'),(262,4383,'1','4',''),(263,4384,'1','4',''),(262,4385,'2','4','Marksheet\r\nSize: 9\"x12\" (A4)\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(263,4386,'2','4','Marksheet\r\nSize: 9\"x12\" (A4)\r\nPaper: 105 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(262,4387,'3','4','25000'),(263,4388,'3','4','25000'),(262,4389,'4','4','2.86'),(263,4390,'4','4','2.86'),(262,4391,'5','4',''),(263,4392,'5','4',''),(262,4393,'0','5','5'),(263,4394,'0','5','5'),(262,4395,'1','5',''),(263,4396,'1','5',''),(262,4397,'2','5','Degree Certificate\r\nSize: 9\"x12\" (A4)\r\nPaper: 120 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(263,4398,'2','5','Degree Certificate\r\nSize: 9\"x12\" (A4)\r\nPaper: 120 off white Parchment paper\r\nPrinting : front 4 colour/ back 1 colour\r\nSecurity Features 1) Watermark 2) UV 3) Anty Copy 4) Gold Foil 5) HIgh Resulation border 6) Hidden Security back ground'),(262,4399,'3','5','25000'),(263,4400,'3','5','25000'),(262,4401,'4','5','2.86'),(263,4402,'4','5','2.86'),(262,4403,'5','5',''),(263,4404,'5','5',''),(260,4425,'\'\'\'\'0\'\'\'\'','\'\'\'\'0\'\'\'\'',' SR NO'),(260,4426,'\'\'\'\'1\'\'\'\'','\'\'\'\'0\'\'\'\'',' PRODUCT NAME'),(260,4427,'\'\'\'\'2\'\'\'\'','\'\'\'\'0\'\'\'\'',' STATIONARY TYPE'),(260,4428,'\'\'\'\'3\'\'\'\'','\'\'\'\'0\'\'\'\'',' RATE'),(260,4429,'\'\'\'\'0\'\'\'\'','\'\'\'\'1\'\'\'\'',' 1.'),(260,4430,'\'\'\'\'1\'\'\'\'','\'\'\'\'1\'\'\'\'',' IDBI Visa Aspire Contactless Card'),(260,4431,'\'\'\'\'2\'\'\'\'','\'\'\'\'1\'\'\'\'',' Inner Jacket'),(260,4432,'\'\'\'\'3\'\'\'\'','\'\'\'\'1\'\'\'\'',' 3.90/-PER PC'),(260,4433,'\'\'\'\'0\'\'\'\'','\'\'\'\'2\'\'\'\'',' 2.'),(260,4434,'\'\'\'\'1\'\'\'\'','\'\'\'\'2\'\'\'\'',' IDBI Visa Aspire Contactless Card'),(260,4435,'\'\'\'\'2\'\'\'\'','\'\'\'\'2\'\'\'\'',' Welcome Letter'),(260,4436,'\'\'\'\'3\'\'\'\'','\'\'\'\'2\'\'\'\'',' 1.56/-PER PC'),(260,4437,'\'\'\'\'0\'\'\'\'','\'\'\'\'3\'\'\'\'',' 3.'),(260,4438,'\'\'\'\'1\'\'\'\'','\'\'\'\'3\'\'\'\'',' IDBI Visa Imperium Contactless Card'),(260,4439,'\'\'\'\'2\'\'\'\'','\'\'\'\'3\'\'\'\'',' Inner Jacket'),(260,4440,'\'\'\'\'3\'\'\'\'','\'\'\'\'3\'\'\'\'','  3.90/-PER PC'),(260,4441,'\'\'\'\'0\'\'\'\'','\'\'\'\'4\'\'\'\'',' 4.'),(260,4442,'\'\'\'\'1\'\'\'\'','\'\'\'\'4\'\'\'\'',' IDBI Visa Imperium Contactless Card'),(260,4443,'\'\'\'\'2\'\'\'\'','\'\'\'\'4\'\'\'\'',' Welcome Letter'),(260,4444,'\'\'\'\'3\'\'\'\'','\'\'\'\'4\'\'\'\'',' 1.56/-PER PC'),(264,4445,'0','0','Sr. No.'),(264,4446,'1','0','Item Code'),(264,4447,'2','0','Item Description'),(264,4448,'3','0','Quantity'),(264,4449,'4','0','Price'),(264,4450,'5','0','Remark'),(264,4451,'0','1','1'),(264,4452,'1','1',''),(264,4453,'2','1','Hitachi BNA RP Thermal Roll\r\nSize: 79mm x 400 mtrs\r\nPaper: 55 GSM\r\n'),(264,4454,'3','1','100 Rolls'),(264,4455,'4','1','Rs. 440/pc'),(264,4456,'5','1',''),(265,4457,'0','0','SR NO '),(265,4458,'1','0',' ITEM'),(265,4459,'2','0',' QUANTITY'),(265,4460,'3','0',' RATE'),(265,4461,'0','1',' 1.'),(265,4462,'1','1','UBI-PINMAILER\r\n60-60-70 GSM \r\n4  COLOUR Maplito paper , 9*4  size'),(265,4463,'2','1','  100000'),(265,4464,'3','1',' 1.60/-PER PC'),(266,4525,'0','0','  SR,NO'),(266,4526,'1','0','Description'),(266,4527,'2','0',' Quantity '),(266,4528,'3','0','Non-Comprehensive Printer & Service  '),(266,4529,'4','0',' Total Cost Without GST'),(266,4530,'0','1','  1.'),(266,4531,'1','1','  \r\nAnnual Maintenance Contract for the duration of 1 Year Comprehensive Printer HP IJ M402N\r\n\r\n'),(266,4532,'2','1','  03'),(266,4533,'3','1','  Rs.31000/- Each Printer'),(266,4534,'4','1',' Rs.93000/-  + GST'),(267,4535,'0','0','Sr. No.'),(267,4536,'1','0','Item Code'),(267,4537,'2','0','Item Description'),(267,4538,'3','0','Quantity'),(267,4539,'4','0','Price'),(267,4540,'5','0','Remark'),(267,4541,'0','1','1'),(267,4542,'1','1',''),(267,4543,'2','1','Security Paper- Size A4 , 70-80 gsm, \r\nPrint Color: Cmyk & Gold\r\nSecurity Features\r\n1)	Watermark\r\n2)	Microtext\r\n3)	Invisible UV Fluorescent design\r\n4)	Barcode3 of 9 visible sequential no.\r\n5)	Colored logo \r\n6)	Text heading with multiple line\r\n'),(267,4544,'3','1','1,00,000	'),(267,4545,'4','1','$ 17000'),(267,4546,'5','1',''),(268,4547,'0','0','Sr. No.'),(268,4548,'1','0','Item Code'),(268,4549,'2','0','Item Description'),(268,4550,'3','0','Quantity'),(268,4551,'4','0','Price'),(268,4552,'5','0','Remark'),(268,4553,'0','1','1'),(268,4554,'1','1',''),(268,4555,'2','1','Challan : Size: 10” x 12”\r\n70 GSM with 2 carbon paper\r\nColor: front 4 col/ back 1 col.\r\nPacking : 500 set in 1 box\r\n'),(268,4556,'3','1','30,000'),(268,4557,'4','1','2139/ box 500 pcs '),(268,4558,'5','1',''),(269,4567,'\'0\'','\'0\'',' Sr.no'),(269,4568,'\'1\'','\'0\'',' Item'),(269,4569,'\'2\'','\'0\'',' Quantity'),(269,4570,'\'3\'','\'0\'',' Rate'),(269,4571,'\'0\'','\'1\'',' 1.'),(269,4572,'\'1\'','\'1\'',' Ebixcash world money Pin mailer'),(269,4573,'\'2\'','\'1\'',' 20000'),(269,4574,'\'3\'','\'1\'',' 1.85/-Per pin mailer'),(270,4575,'0','0',' SR.NO'),(270,4576,'1','0',' ITEM '),(270,4577,'2','0',' SIZE'),(270,4578,'3','0',' RATE'),(270,4579,'0','1',' 1'),(270,4580,'1','1',' STATIONERIES ATM ROLL\r\nVORTEX RP ROLL\r\n(Seshaasai Code: C931)'),(270,4581,'2','1',' 79 MM X 270 MTR '),(270,4582,'3','1',' 290/-'),(271,4583,'0','0','Sr. No.'),(271,4584,'1','0','Item Code'),(271,4585,'2','0','Item Description'),(271,4586,'3','0','Quantity'),(271,4587,'4','0','Price'),(271,4588,'5','0','Remark'),(271,4589,'0','1','1'),(271,4590,'1','1',''),(271,4591,'2','1','Challan : Size: 10” x 12”\r\n70 GSM with 2 carbon paper\r\nColor: front 4 col/ back 1 col.\r\nPacking : 500 set in 1 box\r\n'),(271,4592,'3','1','1000'),(271,4593,'4','1','Rs. 2990 / box'),(271,4594,'5','1',''),(272,4595,'0','0','Sr. No.'),(272,4596,'1','0','Item Code'),(272,4597,'2','0','Item Description'),(272,4598,'3','0','Quantity'),(272,4599,'4','0','Price'),(272,4600,'5','0','Remark'),(272,4601,'0','1','1'),(272,4602,'1','1',''),(272,4603,'2','1','Computer Stationary – 100 gsm\r\nSize: 4.1” x 6” x 1\r\nFront 1 col/ back 1 col. \r\nOuter diameter 3 inch\r\nInner core 1 inch\r\n'),(272,4604,'3','1','20,000'),(272,4605,'4','1','Rs. 0.75/- per pc'),(272,4606,'5','1',''),(273,4607,'0','0','Sr. No.'),(273,4608,'1','0','Item Code'),(273,4609,'2','0','Item Description'),(273,4610,'3','0','Quantity'),(273,4611,'4','0','Price'),(273,4612,'5','0','Remark'),(273,4613,'0','1','1'),(273,4614,'1','1','Qmatic'),(273,4615,'2','1','Thermal Roll Qmatic\r\n55 GSM\r\nSize : 60mm x 100mtrs \r\ncore: 25mm\r\n1 col. print on backside'),(273,4616,'3','1','1000'),(273,4617,'4','1','$ 0.88 '),(273,4618,'5','1','nil'),(274,4619,'0','0','Sr. No.'),(274,4620,'1','0','Item Code'),(274,4621,'2','0','Item Description'),(274,4622,'3','0','Quantity'),(274,4623,'4','0','Price'),(274,4624,'5','0','Remark'),(274,4625,'0','1','1'),(274,4626,'1','1','Grade Card'),(274,4627,'2','1','Grade Card\r\nSize : A4\r\nGSM : 105'),(274,4628,'3','1','500'),(274,4629,'4','1','6500 lot'),(274,4630,'5','1','nil'),(275,4631,'0','0','Sr. No.'),(275,4632,'1','0','Item Code'),(275,4633,'2','0','Item Description'),(275,4634,'3','0','Quantity'),(275,4635,'4','0','Price'),(275,4636,'5','0','Remark'),(275,4637,'0','1','1'),(275,4638,'1','1','Thermal Paper '),(275,4639,'2','1','GSM= 48 or 55\r\nSize: 405mm x 6500 mtrs\r\n8.80 per sqm'),(275,4640,'3','1','2000 kg'),(275,4641,'4','1','Rs. 170/kg'),(275,4642,'5','1','nil');

/*Table structure for table `quotation_masters` */

DROP TABLE IF EXISTS `quotation_masters`;

CREATE TABLE `quotation_masters` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `product_count` int(11) DEFAULT 0,
  `currency_id` bigint(20) DEFAULT NULL COMMENT 'tbl_currency Table id',
  `features_is` tinyint(4) DEFAULT 0 COMMENT '0-No,1-Yes',
  `quotation_category` bigint(20) DEFAULT NULL,
  `term_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_to` tinyint(4) DEFAULT 0 COMMENT '0-No,1-Yes',
  `email_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `quotation_masters` */

/*Table structure for table `quotation_product_items` */

DROP TABLE IF EXISTS `quotation_product_items`;

CREATE TABLE `quotation_product_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_product_id` bigint(20) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` decimal(10,2) DEFAULT NULL,
  `ppu` decimal(10,2) DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` decimal(10,2) DEFAULT 0.00,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `quotation_product_items` */

/*Table structure for table `quotation_products` */

DROP TABLE IF EXISTS `quotation_products`;

CREATE TABLE `quotation_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quotation_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `itmes_count` int(11) DEFAULT 0,
  `display_total` tinyint(4) DEFAULT 0 COMMENT '0-No,1-Yes',
  `sub_total` decimal(10,2) DEFAULT 0.00,
  `discount` decimal(10,2) DEFAULT 0.00,
  `cgst_id` bigint(20) DEFAULT NULL,
  `cgst` decimal(10,2) DEFAULT 0.00,
  `sgst_id` bigint(20) DEFAULT NULL,
  `sgst` decimal(10,2) DEFAULT 0.00,
  `igst_id` bigint(20) DEFAULT NULL,
  `igst` decimal(10,2) DEFAULT 0.00,
  `grand_total` decimal(10,2) DEFAULT 0.00,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=88 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `quotation_products` */

/*Table structure for table `quotation_width_mapping` */

DROP TABLE IF EXISTS `quotation_width_mapping`;

CREATE TABLE `quotation_width_mapping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quotation_id` int(11) NOT NULL,
  `column_id` int(11) NOT NULL,
  `width` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1664 DEFAULT CHARSET=utf8mb4;

/*Data for the table `quotation_width_mapping` */

insert  into `quotation_width_mapping`(`id`,`quotation_id`,`column_id`,`width`) values (17,1,0,10),(18,1,1,25),(19,1,2,20),(20,1,3,25),(21,2,0,10),(22,2,1,25),(23,2,2,20),(24,2,3,25),(25,3,0,10),(26,3,1,30),(27,3,2,20),(28,3,3,20),(29,4,0,10),(30,4,1,30),(31,4,2,20),(32,4,3,20),(33,5,0,5),(34,5,1,25),(35,5,2,25),(36,5,3,25),(37,6,0,5),(38,6,1,30),(39,6,2,25),(40,6,3,25),(41,7,0,10),(42,7,1,25),(43,7,2,20),(44,7,3,25),(45,8,0,10),(46,8,1,25),(47,8,2,25),(48,8,3,25),(49,9,0,10),(50,9,1,40),(51,9,2,20),(52,9,3,20),(53,10,0,10),(54,10,1,25),(55,10,2,25),(56,10,3,25),(57,11,0,5),(58,11,1,40),(59,11,2,10),(60,11,3,30),(61,12,0,5),(62,12,1,40),(63,12,2,20),(64,12,3,20),(65,13,0,5),(66,13,1,25),(67,13,2,25),(68,13,3,25),(69,14,0,5),(70,14,1,40),(71,14,2,20),(72,14,3,20),(73,15,0,5),(74,15,1,40),(75,15,2,20),(76,15,3,20),(77,16,0,5),(78,16,1,40),(79,16,2,20),(80,16,3,20),(81,17,0,5),(82,17,1,30),(83,17,2,25),(84,17,3,25),(85,18,0,5),(86,18,1,15),(87,18,2,30),(88,18,3,15),(89,18,4,15),(90,18,5,20),(91,19,0,10),(92,19,1,40),(93,19,2,20),(94,19,3,25),(95,20,0,10),(96,20,1,25),(97,20,2,25),(98,20,3,25),(99,21,0,20),(100,21,1,20),(101,21,2,20),(102,21,3,20),(103,21,4,20),(104,22,0,10),(105,22,1,40),(106,22,2,25),(107,22,3,25),(108,23,0,10),(109,23,1,40),(110,23,2,25),(111,23,3,25),(112,24,0,10),(113,24,1,40),(114,24,2,25),(115,24,3,25),(116,25,0,20),(117,25,1,20),(118,25,2,20),(119,25,3,20),(120,25,4,20),(121,26,0,20),(122,26,1,20),(123,26,2,20),(124,26,3,20),(125,26,4,20),(126,27,0,10),(127,27,1,30),(128,27,2,30),(129,27,3,30),(130,28,0,14),(131,28,1,14),(132,28,2,14),(133,28,3,14),(134,28,4,14),(135,28,5,14),(136,28,6,14),(137,29,0,10),(138,29,1,40),(139,29,2,20),(140,29,3,20),(141,30,0,10),(142,30,1,40),(143,30,2,25),(144,30,3,25),(145,31,0,10),(146,31,1,35),(147,31,2,20),(148,31,3,25),(149,32,0,10),(150,32,1,30),(151,32,2,20),(152,32,3,20),(153,33,0,10),(154,33,1,30),(155,33,2,20),(156,33,3,20),(157,34,0,10),(158,34,1,30),(159,34,2,20),(160,34,3,20),(161,35,0,10),(162,35,1,30),(163,35,2,20),(164,35,3,20),(165,36,0,10),(166,36,1,30),(167,36,2,20),(168,36,3,20),(169,37,0,10),(170,37,1,30),(171,37,2,20),(172,37,3,20),(173,38,0,10),(174,38,1,30),(175,38,2,30),(176,38,3,30),(177,39,0,10),(178,39,1,30),(179,39,2,30),(180,39,3,30),(181,40,0,10),(182,40,1,30),(183,40,2,30),(184,40,3,30),(185,41,0,10),(186,41,1,30),(187,41,2,30),(188,41,3,30),(189,42,0,10),(190,42,1,30),(191,42,2,30),(192,42,3,30),(193,43,0,10),(194,43,1,30),(195,43,2,30),(196,43,3,30),(197,44,0,10),(198,44,1,40),(199,44,2,20),(200,44,3,30),(201,45,0,10),(202,45,1,30),(203,45,2,20),(204,45,3,20),(205,46,0,10),(206,46,1,40),(207,46,2,20),(208,46,3,20),(209,47,0,10),(210,47,1,30),(211,47,2,30),(212,47,3,15),(213,47,4,15),(214,48,0,10),(215,48,1,40),(216,48,2,20),(217,48,3,20),(218,49,0,10),(219,49,1,40),(220,49,2,25),(221,49,3,25),(222,50,0,10),(223,50,1,25),(224,50,2,25),(225,50,3,25),(226,51,0,10),(227,51,1,40),(228,51,2,20),(229,51,3,20),(230,52,0,10),(231,52,1,40),(232,52,2,20),(233,52,3,20),(234,53,0,20),(235,53,1,20),(236,53,2,20),(237,53,3,20),(238,53,4,20),(239,54,0,10),(240,54,1,30),(241,54,2,20),(242,54,3,30),(243,55,0,5),(244,55,1,15),(245,55,2,30),(246,55,3,15),(247,55,4,15),(248,55,5,20),(249,56,0,5),(250,56,1,30),(251,56,2,15),(252,56,3,30),(253,57,0,10),(254,57,1,40),(255,57,2,20),(256,57,3,20),(257,58,0,5),(258,58,1,40),(259,58,2,10),(260,58,3,30),(261,59,0,10),(262,59,1,40),(263,59,2,25),(264,59,3,25),(265,60,0,10),(266,60,1,40),(267,60,2,20),(268,60,3,20),(269,61,0,10),(270,61,1,40),(271,61,2,20),(272,61,3,20),(273,62,0,10),(274,62,1,40),(275,62,2,20),(276,62,3,20),(277,63,0,10),(278,63,1,40),(279,63,2,20),(280,63,3,20),(281,64,0,25),(282,64,1,25),(283,64,2,25),(284,64,3,25),(285,65,0,10),(286,65,1,40),(287,65,2,20),(288,65,3,20),(289,66,0,10),(290,66,1,40),(291,66,2,20),(292,66,3,20),(293,67,0,10),(294,67,1,40),(295,67,2,20),(296,67,3,20),(297,68,0,10),(298,68,1,40),(299,68,2,20),(300,68,3,20),(301,69,0,10),(302,69,1,40),(303,69,2,20),(304,69,3,20),(305,70,0,10),(306,70,1,40),(307,70,2,20),(308,70,3,20),(309,71,0,10),(310,71,1,40),(311,71,2,20),(312,71,3,20),(313,72,0,10),(314,72,1,40),(315,72,2,20),(316,72,3,20),(317,73,0,10),(318,73,1,40),(319,73,2,20),(320,73,3,20),(321,74,0,10),(322,74,1,40),(323,74,2,20),(324,74,3,20),(325,75,0,10),(326,75,1,40),(327,75,2,20),(328,75,3,20),(329,76,0,10),(330,76,1,40),(331,76,2,20),(332,76,3,20),(333,77,0,10),(334,77,1,40),(335,77,2,20),(336,77,3,20),(337,78,0,10),(338,78,1,40),(339,78,2,20),(340,78,3,20),(341,79,0,10),(342,79,1,40),(343,79,2,20),(344,79,3,20),(345,80,0,10),(346,80,1,40),(347,80,2,20),(348,80,3,20),(349,81,0,10),(350,81,1,40),(351,81,2,20),(352,81,3,20),(353,82,0,10),(354,82,1,40),(355,82,2,20),(356,82,3,20),(357,83,0,10),(358,83,1,40),(359,83,2,20),(360,83,3,20),(361,84,0,10),(362,84,1,40),(363,84,2,20),(364,84,3,20),(365,85,0,10),(366,85,1,40),(367,85,2,20),(368,85,3,20),(369,86,0,10),(370,86,1,40),(371,86,2,20),(372,86,3,20),(373,87,0,10),(374,87,1,40),(375,87,2,20),(376,87,3,20),(377,88,0,10),(378,88,1,40),(379,88,2,20),(380,88,3,20),(381,89,0,10),(382,89,1,40),(383,89,2,20),(384,89,3,20),(385,90,0,10),(386,90,1,40),(387,90,2,20),(388,90,3,20),(389,91,0,10),(390,91,1,40),(391,91,2,20),(392,91,3,20),(393,92,0,10),(394,92,1,40),(395,92,2,20),(396,92,3,20),(397,93,0,10),(398,93,1,40),(399,93,2,20),(400,93,3,20),(401,94,0,10),(402,94,1,40),(403,94,2,20),(404,94,3,20),(405,95,0,10),(406,95,1,40),(407,95,2,20),(408,95,3,20),(409,96,0,10),(410,96,1,40),(411,96,2,20),(412,96,3,20),(413,97,0,10),(414,97,1,40),(415,97,2,20),(416,97,3,20),(417,98,0,10),(418,98,1,40),(419,98,2,20),(420,98,3,20),(421,99,0,10),(422,99,1,40),(423,99,2,20),(424,99,3,20),(425,100,0,10),(426,100,1,40),(427,100,2,20),(428,100,3,20),(429,101,0,10),(430,101,1,40),(431,101,2,20),(432,101,3,20),(433,102,0,10),(434,102,1,40),(435,102,2,20),(436,102,3,20),(437,103,0,5),(438,103,1,15),(439,103,2,30),(440,103,3,15),(441,103,4,15),(442,103,5,20),(443,104,0,10),(444,104,1,40),(445,104,2,20),(446,104,3,20),(447,105,0,10),(448,105,1,40),(449,105,2,20),(450,105,3,20),(451,106,0,5),(452,106,1,15),(453,106,2,30),(454,106,3,15),(455,106,4,15),(456,106,5,20),(457,107,0,5),(458,107,1,15),(459,107,2,30),(460,107,3,15),(461,107,4,15),(462,107,5,20),(463,108,0,5),(464,108,1,15),(465,108,2,30),(466,108,3,15),(467,108,4,15),(468,108,5,20),(469,109,0,5),(470,109,1,15),(471,109,2,30),(472,109,3,15),(473,109,4,15),(474,109,5,20),(475,110,0,10),(476,110,1,30),(477,110,2,20),(478,110,3,30),(479,111,0,33),(480,111,1,33),(481,111,2,33),(482,112,0,10),(483,112,1,30),(484,112,2,15),(485,112,3,30),(486,113,0,10),(487,113,1,40),(488,113,2,20),(489,113,3,20),(490,114,0,10),(491,114,1,40),(492,114,2,20),(493,114,3,20),(494,115,0,10),(495,115,1,40),(496,115,2,20),(497,115,3,20),(498,116,0,20),(499,116,1,20),(500,116,2,20),(501,116,3,20),(502,116,4,20),(503,117,0,10),(504,117,1,40),(505,117,2,20),(506,117,3,20),(507,118,0,10),(508,118,1,25),(509,118,2,25),(510,118,3,25),(511,119,0,10),(512,119,1,40),(513,119,2,20),(514,119,3,20),(515,120,0,25),(516,120,1,25),(517,120,2,25),(518,120,3,25),(519,121,0,20),(520,121,1,20),(521,121,2,20),(522,121,3,20),(523,121,4,20),(524,122,0,10),(525,122,1,50),(526,122,2,40),(527,123,0,10),(528,123,1,40),(529,123,2,20),(530,123,3,20),(531,124,0,10),(532,124,1,40),(533,124,2,20),(534,124,3,20),(535,125,0,10),(536,125,1,40),(537,125,2,20),(538,125,3,20),(539,126,0,10),(540,126,1,40),(541,126,2,20),(542,126,3,20),(543,127,0,10),(544,127,1,40),(545,127,2,20),(546,127,3,20),(547,128,0,25),(548,128,1,25),(549,128,2,25),(550,128,3,25),(551,129,0,10),(552,129,1,40),(553,129,2,20),(554,129,3,20),(555,130,0,10),(556,130,1,40),(557,130,2,20),(558,130,3,20),(559,131,0,10),(560,131,1,40),(561,131,2,20),(562,131,3,20),(563,132,0,10),(564,132,1,40),(565,132,2,20),(566,132,3,20),(567,133,0,10),(568,133,1,40),(569,133,2,20),(570,133,3,20),(571,134,0,10),(572,134,1,40),(573,134,2,20),(574,134,3,20),(575,135,0,10),(576,135,1,40),(577,135,2,20),(578,135,3,20),(579,136,0,10),(580,136,1,40),(581,136,2,20),(582,136,3,20),(583,137,0,10),(584,137,1,40),(585,137,2,20),(586,137,3,20),(587,138,0,10),(588,138,1,30),(589,138,2,15),(590,138,3,30),(591,139,0,10),(592,139,1,40),(593,139,2,40),(598,141,0,10),(599,141,1,40),(600,141,2,20),(601,141,3,20),(602,142,0,10),(603,142,1,40),(604,142,2,20),(605,142,3,20),(606,143,0,10),(607,143,1,40),(608,143,2,20),(609,143,3,20),(610,144,0,10),(611,144,1,40),(612,144,2,20),(613,144,3,20),(614,145,0,10),(615,145,1,40),(616,145,2,20),(617,145,3,20),(618,146,0,10),(619,146,1,40),(620,146,2,20),(621,146,3,20),(622,147,0,10),(623,147,1,40),(624,147,2,20),(625,147,3,20),(626,148,0,10),(627,148,1,40),(628,148,2,20),(629,148,3,20),(630,149,0,10),(631,149,1,40),(632,149,2,20),(633,149,3,20),(634,150,0,10),(635,150,1,30),(636,150,2,15),(637,150,3,35),(638,151,0,10),(639,151,1,40),(640,151,2,20),(641,151,3,20),(642,152,0,10),(643,152,1,40),(644,152,2,20),(645,152,3,20),(646,153,0,10),(647,153,1,30),(648,153,2,20),(649,153,3,30),(656,154,0,33),(657,154,1,33),(658,154,2,33),(664,155,0,33),(665,155,1,33),(666,155,2,33),(667,156,0,10),(668,156,1,40),(669,156,2,20),(670,156,3,20),(679,157,0,10),(680,157,1,40),(681,157,2,20),(682,157,3,20),(683,158,0,10),(684,158,1,40),(685,158,2,20),(686,158,3,20),(687,159,0,10),(688,159,1,40),(689,159,2,20),(690,159,3,20),(695,160,0,10),(696,160,1,40),(697,160,2,20),(698,160,3,20),(699,161,0,10),(700,161,1,40),(701,161,2,20),(702,161,3,20),(707,162,0,10),(708,162,1,40),(709,162,2,20),(710,162,3,20),(723,163,0,10),(724,163,1,40),(725,163,2,20),(726,163,3,20),(727,164,0,10),(728,164,1,25),(729,164,2,25),(730,164,3,25),(731,165,0,10),(732,165,1,40),(733,165,2,20),(734,165,3,20),(739,140,0,10),(740,140,1,40),(741,140,2,20),(742,140,3,20),(767,167,0,16),(768,167,1,16),(769,167,2,16),(770,167,3,16),(771,167,4,16),(772,167,5,16),(781,168,0,10),(782,168,1,40),(783,168,2,20),(784,168,3,20),(785,169,0,10),(786,169,1,40),(787,169,2,20),(788,169,3,20),(789,170,0,10),(790,170,1,40),(791,170,2,20),(792,170,3,20),(793,166,0,10),(794,166,1,40),(795,166,2,20),(796,166,3,20),(801,171,0,10),(802,171,1,40),(803,171,2,20),(804,171,3,20),(805,172,0,5),(806,172,1,15),(807,172,2,30),(808,172,3,15),(809,172,4,15),(810,172,5,20),(811,173,0,5),(812,173,1,15),(813,173,2,30),(814,173,3,15),(815,173,4,15),(816,173,5,20),(819,175,0,10),(820,175,1,40),(821,175,2,20),(822,175,3,20),(827,176,0,10),(828,176,1,40),(829,176,2,20),(830,176,3,20),(831,177,0,25),(832,177,1,25),(833,177,2,25),(834,177,3,25),(835,178,0,5),(836,178,1,15),(837,178,2,30),(838,178,3,15),(839,178,4,15),(840,178,5,20),(841,179,0,5),(842,179,1,15),(843,179,2,30),(844,179,3,15),(845,179,4,15),(846,179,5,20),(855,180,0,10),(856,180,1,40),(857,180,2,20),(858,180,3,20),(863,182,0,25),(864,182,1,25),(865,182,2,25),(866,182,3,25),(875,181,0,10),(876,181,1,40),(877,181,2,25),(878,181,3,25),(879,183,0,25),(880,183,1,25),(881,183,2,25),(882,183,3,25),(887,184,0,10),(888,184,1,40),(889,184,2,20),(890,184,3,20),(891,185,0,10),(892,185,1,40),(893,185,2,20),(894,185,3,20),(906,187,0,10),(907,187,1,40),(908,187,2,40),(944,186,0,20),(945,186,1,20),(946,186,2,20),(947,186,3,20),(948,186,4,20),(949,188,0,10),(950,188,1,40),(951,188,2,20),(952,188,3,20),(953,189,0,5),(954,189,1,15),(955,189,2,30),(956,189,3,15),(957,189,4,15),(958,189,5,20),(959,190,0,5),(960,190,1,15),(961,190,2,30),(962,190,3,15),(963,190,4,15),(964,190,5,20),(969,191,0,10),(970,191,1,40),(971,191,2,20),(972,191,3,20),(977,193,0,10),(978,193,1,40),(979,193,2,20),(980,193,3,20),(981,192,0,10),(982,192,1,40),(983,192,2,20),(984,192,3,20),(985,194,0,10),(986,194,1,40),(987,194,2,20),(988,194,3,20),(993,195,0,10),(994,195,1,40),(995,195,2,20),(996,195,3,20),(997,196,0,10),(998,196,1,40),(999,196,2,20),(1000,196,3,20),(1031,197,0,16),(1032,197,1,16),(1033,197,2,16),(1034,197,3,16),(1035,197,4,16),(1036,197,5,16),(1037,198,0,5),(1038,198,1,15),(1039,198,2,30),(1040,198,3,15),(1041,198,4,15),(1042,198,5,20),(1055,199,0,10),(1056,199,1,30),(1057,199,2,20),(1058,199,3,30),(1067,200,0,10),(1068,200,1,40),(1069,200,2,20),(1070,200,3,30),(1081,201,0,10),(1082,201,1,30),(1083,201,2,20),(1084,201,3,10),(1085,201,4,20),(1086,202,0,10),(1087,202,1,40),(1088,202,2,20),(1089,202,3,20),(1090,203,0,10),(1091,203,1,40),(1092,203,2,20),(1093,203,3,20),(1110,206,0,5),(1111,206,1,15),(1112,206,2,30),(1113,206,3,15),(1114,206,4,15),(1115,206,5,20),(1120,207,0,10),(1121,207,1,40),(1122,207,2,20),(1123,207,3,20),(1124,208,0,20),(1125,208,1,20),(1126,208,2,20),(1127,208,3,20),(1128,208,4,20),(1129,209,0,10),(1130,209,1,40),(1131,209,2,20),(1132,209,3,20),(1133,205,0,10),(1134,205,1,40),(1135,205,2,20),(1136,205,3,20),(1145,210,0,10),(1146,210,1,40),(1147,210,2,20),(1148,210,3,20),(1149,211,0,10),(1150,211,1,40),(1151,211,2,20),(1152,211,3,20),(1153,212,0,10),(1154,212,1,40),(1155,212,2,20),(1156,212,3,20),(1162,213,0,20),(1163,213,1,20),(1164,213,2,20),(1165,213,3,20),(1166,213,4,20),(1175,214,0,10),(1176,214,1,30),(1177,214,2,30),(1178,214,3,30),(1191,215,0,10),(1192,215,1,40),(1193,215,2,20),(1194,215,3,20),(1211,216,0,10),(1212,216,1,40),(1213,216,2,20),(1214,216,3,25),(1219,217,0,10),(1220,217,1,40),(1221,217,2,20),(1222,217,3,20),(1223,218,0,10),(1224,218,1,40),(1225,218,2,20),(1226,218,3,20),(1235,219,0,10),(1236,219,1,40),(1237,219,2,20),(1238,219,3,20),(1243,220,0,10),(1244,220,1,40),(1245,220,2,20),(1246,220,3,20),(1247,221,0,5),(1248,221,1,15),(1249,221,2,30),(1250,221,3,15),(1251,221,4,15),(1252,221,5,20),(1253,222,0,5),(1254,222,1,15),(1255,222,2,30),(1256,222,3,15),(1257,222,4,15),(1258,222,5,20),(1259,223,0,5),(1260,223,1,15),(1261,223,2,30),(1262,223,3,15),(1263,223,4,15),(1264,223,5,20),(1265,224,0,5),(1266,224,1,15),(1267,224,2,30),(1268,224,3,15),(1269,224,4,15),(1270,224,5,20),(1271,225,0,5),(1272,225,1,15),(1273,225,2,30),(1274,225,3,15),(1275,225,4,15),(1276,225,5,20),(1277,226,0,25),(1278,226,1,25),(1279,226,2,25),(1280,226,3,25),(1293,228,0,5),(1294,228,1,15),(1295,228,2,30),(1296,228,3,15),(1297,228,4,15),(1298,228,5,20),(1299,227,0,25),(1300,227,1,25),(1301,227,2,25),(1302,227,3,25),(1303,229,0,25),(1304,229,1,25),(1305,229,2,25),(1306,229,3,25),(1307,230,0,25),(1308,230,1,25),(1309,230,2,25),(1310,230,3,25),(1311,231,0,25),(1312,231,1,25),(1313,231,2,25),(1314,231,3,25),(1315,232,0,5),(1316,232,1,15),(1317,232,2,30),(1318,232,3,15),(1319,232,4,15),(1320,232,5,20),(1329,233,0,25),(1330,233,1,25),(1331,233,2,25),(1332,233,3,25),(1349,234,0,25),(1350,234,1,25),(1351,234,2,25),(1352,234,3,25),(1385,236,0,25),(1386,236,1,25),(1387,236,2,25),(1388,236,3,25),(1389,237,0,5),(1390,237,1,15),(1391,237,2,30),(1392,237,3,15),(1393,237,4,15),(1394,237,5,20),(1395,238,0,5),(1396,238,1,15),(1397,238,2,30),(1398,238,3,15),(1399,238,4,15),(1400,238,5,20),(1401,239,0,5),(1402,239,1,15),(1403,239,2,30),(1404,239,3,15),(1405,239,4,15),(1406,239,5,20),(1407,235,0,25),(1408,235,1,25),(1409,235,2,25),(1410,235,3,25),(1411,240,0,25),(1412,240,1,25),(1413,240,2,25),(1414,240,3,25),(1415,241,0,5),(1416,241,1,15),(1417,241,2,30),(1418,241,3,15),(1419,241,4,15),(1420,241,5,20),(1421,174,0,50),(1422,174,1,50),(1423,242,0,50),(1424,242,1,50),(1429,243,0,25),(1430,243,1,25),(1431,243,2,25),(1432,243,3,25),(1433,204,0,10),(1434,204,1,40),(1435,204,2,20),(1436,204,3,20),(1437,244,0,5),(1438,244,1,15),(1439,244,2,30),(1440,244,3,15),(1441,244,4,15),(1442,244,5,20),(1443,245,0,5),(1444,245,1,15),(1445,245,2,30),(1446,245,3,15),(1447,245,4,15),(1448,245,5,20),(1449,246,0,25),(1450,246,1,25),(1451,246,2,25),(1452,246,3,25),(1453,247,0,5),(1454,247,1,15),(1455,247,2,30),(1456,247,3,15),(1457,247,4,15),(1458,247,5,20),(1459,248,0,5),(1460,248,1,15),(1461,248,2,30),(1462,248,3,15),(1463,248,4,15),(1464,248,5,20),(1465,249,0,5),(1466,249,1,15),(1467,249,2,30),(1468,249,3,15),(1469,249,4,15),(1470,249,5,20),(1471,250,0,5),(1472,250,1,15),(1473,250,2,30),(1474,250,3,15),(1475,250,4,15),(1476,250,5,20),(1477,251,0,5),(1478,251,1,15),(1479,251,2,30),(1480,251,3,15),(1481,251,4,15),(1482,251,5,20),(1483,252,0,25),(1484,252,1,25),(1485,252,2,25),(1486,252,3,25),(1499,253,0,25),(1500,253,1,25),(1501,253,2,25),(1502,253,3,25),(1511,254,0,25),(1512,254,1,25),(1513,254,2,25),(1514,254,3,25),(1515,255,0,5),(1516,255,1,15),(1517,255,2,30),(1518,255,3,15),(1519,255,4,15),(1520,255,5,20),(1525,256,0,25),(1526,256,1,25),(1527,256,2,25),(1528,256,3,25),(1529,257,0,5),(1530,257,1,15),(1531,257,2,30),(1532,257,3,15),(1533,257,4,15),(1534,257,5,20),(1535,258,0,5),(1536,258,1,15),(1537,258,2,30),(1538,258,3,15),(1539,258,4,15),(1540,258,5,20),(1541,259,0,25),(1542,259,1,25),(1543,259,2,25),(1544,259,3,25),(1557,261,0,33),(1558,261,1,33),(1559,261,2,33),(1560,262,0,5),(1561,263,0,5),(1562,262,1,15),(1563,263,1,15),(1564,262,2,30),(1565,263,2,30),(1566,262,3,15),(1567,263,3,15),(1568,262,4,15),(1569,263,4,15),(1570,262,5,20),(1571,263,5,20),(1576,260,0,25),(1577,260,1,25),(1578,260,2,25),(1579,260,3,25),(1580,264,0,5),(1581,264,1,15),(1582,264,2,30),(1583,264,3,15),(1584,264,4,15),(1585,264,5,20),(1586,265,0,25),(1587,265,1,25),(1588,265,2,25),(1589,265,3,25),(1605,266,0,20),(1606,266,1,20),(1607,266,2,20),(1608,266,3,20),(1609,266,4,20),(1610,267,0,5),(1611,267,1,15),(1612,267,2,30),(1613,267,3,15),(1614,267,4,15),(1615,267,5,20),(1616,268,0,5),(1617,268,1,15),(1618,268,2,30),(1619,268,3,15),(1620,268,4,15),(1621,268,5,20),(1626,269,0,25),(1627,269,1,25),(1628,269,2,25),(1629,269,3,25),(1630,270,0,25),(1631,270,1,25),(1632,270,2,25),(1633,270,3,25),(1634,271,0,5),(1635,271,1,15),(1636,271,2,30),(1637,271,3,15),(1638,271,4,15),(1639,271,5,20),(1640,272,0,5),(1641,272,1,15),(1642,272,2,30),(1643,272,3,15),(1644,272,4,15),(1645,272,5,20),(1646,273,0,5),(1647,273,1,15),(1648,273,2,30),(1649,273,3,15),(1650,273,4,15),(1651,273,5,20),(1652,274,0,5),(1653,274,1,15),(1654,274,2,30),(1655,274,3,15),(1656,274,4,15),(1657,274,5,20),(1658,275,0,5),(1659,275,1,15),(1660,275,2,30),(1661,275,3,15),(1662,275,4,15),(1663,275,5,20);

/*Table structure for table `sub_menus` */

DROP TABLE IF EXISTS `sub_menus`;

CREATE TABLE `sub_menus` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint(20) NOT NULL DEFAULT 0 COMMENT 'description_masters id',
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sub_menus` */

insert  into `sub_menus`(`id`,`menu_id`,`text`,`deleted_at`,`created_by`,`updated_by`,`deleted_by`,`created_at`,`updated_at`) values (101,26,'2',NULL,9,NULL,NULL,'2023-05-25 04:43:22','2023-05-25 04:43:22');

/*Table structure for table `taxes` */

DROP TABLE IF EXISTS `taxes`;

CREATE TABLE `taxes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sgst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cgst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `igst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `taxes` */

/*Table structure for table `tbl_ac_type` */

DROP TABLE IF EXISTS `tbl_ac_type`;

CREATE TABLE `tbl_ac_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_ac_type` */

insert  into `tbl_ac_type`(`id`,`description`) values (62,'SB'),(63,'CA'),(64,'OD'),(65,'CC');

/*Table structure for table `tbl_baby_roll_making_coating_side` */

DROP TABLE IF EXISTS `tbl_baby_roll_making_coating_side`;

CREATE TABLE `tbl_baby_roll_making_coating_side` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_baby_roll_making_coating_side` */

insert  into `tbl_baby_roll_making_coating_side`(`id`,`description`) values (1,'Inner'),(2,'Outer');

/*Table structure for table `tbl_back_side_color_coating` */

DROP TABLE IF EXISTS `tbl_back_side_color_coating`;

CREATE TABLE `tbl_back_side_color_coating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_back_side_color_coating` */

insert  into `tbl_back_side_color_coating`(`id`,`description`) values (1,'Yes'),(2,'No');

/*Table structure for table `tbl_barcode_human_readable_text_to_show` */

DROP TABLE IF EXISTS `tbl_barcode_human_readable_text_to_show`;

CREATE TABLE `tbl_barcode_human_readable_text_to_show` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_barcode_human_readable_text_to_show` */

insert  into `tbl_barcode_human_readable_text_to_show`(`id`,`description`) values (1,'Yes'),(2,'No');

/*Table structure for table `tbl_barcode_orientation` */

DROP TABLE IF EXISTS `tbl_barcode_orientation`;

CREATE TABLE `tbl_barcode_orientation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_barcode_orientation` */

insert  into `tbl_barcode_orientation`(`id`,`description`) values (1,'Standing'),(2,'Sleeping');

/*Table structure for table `tbl_carbon_option` */

DROP TABLE IF EXISTS `tbl_carbon_option`;

CREATE TABLE `tbl_carbon_option` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_carbon_option` */

insert  into `tbl_carbon_option`(`id`,`description`) values (1,'Without Carbon'),(2,'With Carbon');

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_category` */

insert  into `tbl_category`(`id`,`category`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'Pre-Press',NULL,'2022-05-20 12:03:49',NULL,'2022-05-20 12:03:49'),(2,'Post-Press',NULL,'2022-05-20 12:04:42',NULL,'2022-05-20 12:04:42'),(3,'Press',NULL,'2022-05-20 12:04:51',NULL,'2022-05-20 12:04:51'),(4,'Other',NULL,'2022-05-20 12:05:00',NULL,'2022-05-20 12:05:00'),(5,'FABRIC',NULL,'2022-05-20 12:05:08',NULL,'2022-05-20 12:05:08'),(6,'WATER MARK PROSS',NULL,'2022-05-20 12:05:17',NULL,'2022-05-20 12:05:17');

/*Table structure for table `tbl_city` */

DROP TABLE IF EXISTS `tbl_city`;

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=605 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_city` */

insert  into `tbl_city`(`id`,`unique_id`,`code`,`description`,`country`,`state`,`remark`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,NULL,NULL,'North and Middle Andaman',103,32,NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,'South Andaman',103,32,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,'Nicobar',103,32,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,'Adilabad',103,1,NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,'Anantapur',103,1,NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,'Chittoor',103,1,NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,'East Godavari',103,1,NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,'Guntur',103,1,NULL,NULL,NULL,NULL,NULL),(9,NULL,NULL,'Hyderabad',103,1,NULL,NULL,NULL,NULL,NULL),(10,NULL,NULL,'Kadapa',103,1,NULL,NULL,NULL,NULL,NULL),(11,NULL,NULL,'Karimnagar',103,1,NULL,NULL,NULL,NULL,NULL),(12,NULL,NULL,'Khammam',103,1,NULL,NULL,NULL,NULL,NULL),(13,NULL,NULL,'Krishna',103,1,NULL,NULL,NULL,NULL,NULL),(14,NULL,NULL,'Kurnool',103,1,NULL,NULL,NULL,NULL,NULL),(15,NULL,NULL,'Mahbubnagar',103,1,NULL,NULL,NULL,NULL,NULL),(16,NULL,NULL,'Medak',103,1,NULL,NULL,NULL,NULL,NULL),(17,NULL,NULL,'Nalgonda',103,1,NULL,NULL,NULL,NULL,NULL),(18,NULL,NULL,'Nellore',103,1,NULL,NULL,NULL,NULL,NULL),(19,NULL,NULL,'Nizamabad',103,1,NULL,NULL,NULL,NULL,NULL),(20,NULL,NULL,'Prakasam',103,1,NULL,NULL,NULL,NULL,NULL),(21,NULL,NULL,'Rangareddi',103,1,NULL,NULL,NULL,NULL,NULL),(22,NULL,NULL,'Srikakulam',103,1,NULL,NULL,NULL,NULL,NULL),(23,NULL,NULL,'Vishakhapatnam',103,1,NULL,NULL,NULL,NULL,NULL),(24,NULL,NULL,'Vizianagaram',103,1,NULL,NULL,NULL,NULL,NULL),(25,NULL,NULL,'Warangal',103,1,NULL,NULL,NULL,NULL,NULL),(26,NULL,NULL,'West Godavari',103,1,NULL,NULL,NULL,NULL,NULL),(27,NULL,NULL,'Anjaw',103,3,NULL,NULL,NULL,NULL,NULL),(28,NULL,NULL,'Changlang',103,3,NULL,NULL,NULL,NULL,NULL),(29,NULL,NULL,'East Kameng',103,3,NULL,NULL,NULL,NULL,NULL),(30,NULL,NULL,'Lohit',103,3,NULL,NULL,NULL,NULL,NULL),(31,NULL,NULL,'Lower Subansiri',103,3,NULL,NULL,NULL,NULL,NULL),(32,NULL,NULL,'Papum Pare',103,3,NULL,NULL,NULL,NULL,NULL),(33,NULL,NULL,'Tirap',103,3,NULL,NULL,NULL,NULL,NULL),(34,NULL,NULL,'Dibang Valley',103,3,NULL,NULL,NULL,NULL,NULL),(35,NULL,NULL,'Upper Subansiri',103,3,NULL,NULL,NULL,NULL,NULL),(36,NULL,NULL,'West Kameng',103,3,NULL,NULL,NULL,NULL,NULL),(37,NULL,NULL,'Barpeta',103,2,NULL,NULL,NULL,NULL,NULL),(38,NULL,NULL,'Bongaigaon',103,2,NULL,NULL,NULL,NULL,NULL),(39,NULL,NULL,'Cachar',103,2,NULL,NULL,NULL,NULL,NULL),(40,NULL,NULL,'Darrang',103,2,NULL,NULL,NULL,NULL,NULL),(41,NULL,NULL,'Dhemaji',103,2,NULL,NULL,NULL,NULL,NULL),(42,NULL,NULL,'Dhubri',103,2,NULL,NULL,NULL,NULL,NULL),(43,NULL,NULL,'Dibrugarh',103,2,NULL,NULL,NULL,NULL,NULL),(44,NULL,NULL,'Goalpara',103,2,NULL,NULL,NULL,NULL,NULL),(45,NULL,NULL,'Golaghat',103,2,NULL,NULL,NULL,NULL,NULL),(46,NULL,NULL,'Hailakandi',103,2,NULL,NULL,NULL,NULL,NULL),(47,NULL,NULL,'Jorhat',103,2,NULL,NULL,NULL,NULL,NULL),(48,NULL,NULL,'Karbi Anglong',103,2,NULL,NULL,NULL,NULL,NULL),(49,NULL,NULL,'Karimganj',103,2,NULL,NULL,NULL,NULL,NULL),(50,NULL,NULL,'Kokrajhar',103,2,NULL,NULL,NULL,NULL,NULL),(51,NULL,NULL,'Lakhimpur',103,2,NULL,NULL,NULL,NULL,NULL),(52,NULL,NULL,'Marigaon',103,2,NULL,NULL,NULL,NULL,NULL),(53,NULL,NULL,'Nagaon',103,2,NULL,NULL,NULL,NULL,NULL),(54,NULL,NULL,'Nalbari',103,2,NULL,NULL,NULL,NULL,NULL),(55,NULL,NULL,'North Cachar Hills',103,2,NULL,NULL,NULL,NULL,NULL),(56,NULL,NULL,'Sibsagar',103,2,NULL,NULL,NULL,NULL,NULL),(57,NULL,NULL,'Sonitpur',103,2,NULL,NULL,NULL,NULL,NULL),(58,NULL,NULL,'Tinsukia',103,2,NULL,NULL,NULL,NULL,NULL),(59,NULL,NULL,'Araria',103,4,NULL,NULL,NULL,NULL,NULL),(60,NULL,NULL,'Aurangabad',103,4,NULL,NULL,NULL,NULL,NULL),(61,NULL,NULL,'Banka',103,4,NULL,NULL,NULL,NULL,NULL),(62,NULL,NULL,'Begusarai',103,4,NULL,NULL,NULL,NULL,NULL),(63,NULL,NULL,'Bhagalpur',103,4,NULL,NULL,NULL,NULL,NULL),(64,NULL,NULL,'Bhojpur',103,4,NULL,NULL,NULL,NULL,NULL),(65,NULL,NULL,'Buxar',103,4,NULL,NULL,NULL,NULL,NULL),(66,NULL,NULL,'Darbhanga',103,4,NULL,NULL,NULL,NULL,NULL),(67,NULL,NULL,'Purba Champaran',103,4,NULL,NULL,NULL,NULL,NULL),(68,NULL,NULL,'Gaya',103,4,NULL,NULL,NULL,NULL,NULL),(69,NULL,NULL,'Gopalganj',103,4,NULL,NULL,NULL,NULL,NULL),(70,NULL,NULL,'Jamui',103,4,NULL,NULL,NULL,NULL,NULL),(71,NULL,NULL,'Jehanabad',103,4,NULL,NULL,NULL,NULL,NULL),(72,NULL,NULL,'Khagaria',103,4,NULL,NULL,NULL,NULL,NULL),(73,NULL,NULL,'Kishanganj',103,4,NULL,NULL,NULL,NULL,NULL),(74,NULL,NULL,'Kaimur',103,4,NULL,NULL,NULL,NULL,NULL),(75,NULL,NULL,'Katihar',103,4,NULL,NULL,NULL,NULL,NULL),(76,NULL,NULL,'Lakhisarai',103,4,NULL,NULL,NULL,NULL,NULL),(77,NULL,NULL,'Madhubani',103,4,NULL,NULL,NULL,NULL,NULL),(78,NULL,NULL,'Munger',103,4,NULL,NULL,NULL,NULL,NULL),(79,NULL,NULL,'Madhepura',103,4,NULL,NULL,NULL,NULL,NULL),(80,NULL,NULL,'Muzaffarpur',103,4,NULL,NULL,NULL,NULL,NULL),(81,NULL,NULL,'Nalanda',103,4,NULL,NULL,NULL,NULL,NULL),(82,NULL,NULL,'Nawada',103,4,NULL,NULL,NULL,NULL,NULL),(83,NULL,NULL,'Patna',103,4,NULL,NULL,NULL,NULL,NULL),(84,NULL,NULL,'Purnia',103,4,NULL,NULL,NULL,NULL,NULL),(85,NULL,NULL,'Rohtas',103,4,NULL,NULL,NULL,NULL,NULL),(86,NULL,NULL,'Saharsa',103,4,NULL,NULL,NULL,NULL,NULL),(87,NULL,NULL,'Samastipur',103,4,NULL,NULL,NULL,NULL,NULL),(88,NULL,NULL,'Sheohar',103,4,NULL,NULL,NULL,NULL,NULL),(89,NULL,NULL,'Sheikhpura',103,4,NULL,NULL,NULL,NULL,NULL),(90,NULL,NULL,'Saran',103,4,NULL,NULL,NULL,NULL,NULL),(91,NULL,NULL,'Sitamarhi',103,4,NULL,NULL,NULL,NULL,NULL),(92,NULL,NULL,'Supaul',103,4,NULL,NULL,NULL,NULL,NULL),(93,NULL,NULL,'Siwan',103,4,NULL,NULL,NULL,NULL,NULL),(94,NULL,NULL,'Vaishali',103,4,NULL,NULL,NULL,NULL,NULL),(95,NULL,NULL,'Pashchim Champaran',103,4,NULL,NULL,NULL,NULL,NULL),(96,NULL,NULL,'Bastar',103,36,NULL,NULL,NULL,NULL,NULL),(97,NULL,NULL,'Bilaspur',103,36,NULL,NULL,NULL,NULL,NULL),(98,NULL,NULL,'Dantewada',103,36,NULL,NULL,NULL,NULL,NULL),(99,NULL,NULL,'Dhamtari',103,36,NULL,NULL,NULL,NULL,NULL),(100,NULL,NULL,'Durg',103,36,NULL,NULL,NULL,NULL,NULL),(101,NULL,NULL,'Jashpur',103,36,NULL,NULL,NULL,NULL,NULL),(102,NULL,NULL,'Janjgir-Champa',103,36,NULL,NULL,NULL,NULL,NULL),(103,NULL,NULL,'Korba',103,36,NULL,NULL,NULL,NULL,NULL),(104,NULL,NULL,'Koriya',103,36,NULL,NULL,NULL,NULL,NULL),(105,NULL,NULL,'Kanker',103,36,NULL,NULL,NULL,NULL,NULL),(106,NULL,NULL,'Kawardha',103,36,NULL,NULL,NULL,NULL,NULL),(107,NULL,NULL,'Mahasamund',103,36,NULL,NULL,NULL,NULL,NULL),(108,NULL,NULL,'Raigarh',103,36,NULL,NULL,NULL,NULL,NULL),(109,NULL,NULL,'Rajnandgaon',103,36,NULL,NULL,NULL,NULL,NULL),(110,NULL,NULL,'Raipur',103,36,NULL,NULL,NULL,NULL,NULL),(111,NULL,NULL,'Surguja',103,36,NULL,NULL,NULL,NULL,NULL),(112,NULL,NULL,'Diu',103,29,NULL,NULL,NULL,NULL,NULL),(113,NULL,NULL,'Daman',103,29,NULL,NULL,NULL,NULL,NULL),(114,NULL,NULL,'Central Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(115,NULL,NULL,'East Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(116,NULL,NULL,'New Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(117,NULL,NULL,'North Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(118,NULL,NULL,'North East Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(119,NULL,NULL,'North West Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(120,NULL,NULL,'South Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(121,NULL,NULL,'South West Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(122,NULL,NULL,'West Delhi',103,25,NULL,NULL,NULL,NULL,NULL),(123,NULL,NULL,'North Goa',103,26,NULL,NULL,NULL,NULL,NULL),(124,NULL,NULL,'South Goa',103,26,NULL,NULL,NULL,NULL,NULL),(125,NULL,NULL,'Ahmedabad',103,5,NULL,NULL,NULL,NULL,NULL),(126,NULL,NULL,'Amreli District',103,5,NULL,NULL,NULL,NULL,NULL),(127,NULL,NULL,'Anand',103,5,NULL,NULL,NULL,NULL,NULL),(128,NULL,NULL,'Banaskantha',103,5,NULL,NULL,NULL,NULL,NULL),(129,NULL,NULL,'Bharuch',103,5,NULL,NULL,NULL,NULL,NULL),(130,NULL,NULL,'Bhavnagar',103,5,NULL,NULL,NULL,NULL,NULL),(131,NULL,NULL,'Dahod',103,5,NULL,NULL,NULL,NULL,NULL),(132,NULL,NULL,'The Dangs',103,5,NULL,NULL,NULL,NULL,NULL),(133,NULL,NULL,'Gandhinagar',103,5,NULL,NULL,NULL,NULL,NULL),(134,NULL,NULL,'Jamnagar',103,5,NULL,NULL,NULL,NULL,NULL),(135,NULL,NULL,'Junagadh',103,5,NULL,NULL,NULL,NULL,NULL),(136,NULL,NULL,'Kutch',103,5,NULL,NULL,NULL,NULL,NULL),(137,NULL,NULL,'Kheda',103,5,NULL,NULL,NULL,NULL,NULL),(138,NULL,NULL,'Mehsana',103,5,NULL,NULL,NULL,NULL,NULL),(139,NULL,NULL,'Narmada',103,5,NULL,NULL,NULL,NULL,NULL),(140,NULL,NULL,'Navsari',103,5,NULL,NULL,NULL,NULL,NULL),(141,NULL,NULL,'Patan',103,5,NULL,NULL,NULL,NULL,NULL),(142,NULL,NULL,'Panchmahal',103,5,NULL,NULL,NULL,NULL,NULL),(143,NULL,NULL,'Porbandar',103,5,NULL,NULL,NULL,NULL,NULL),(144,NULL,NULL,'Rajkot',103,5,NULL,NULL,NULL,NULL,NULL),(145,NULL,NULL,'Sabarkantha',103,5,NULL,NULL,NULL,NULL,NULL),(146,NULL,NULL,'Surendranagar',103,5,NULL,NULL,NULL,NULL,NULL),(147,NULL,NULL,'Surat',103,5,NULL,NULL,NULL,NULL,NULL),(148,NULL,NULL,'Vadodara',103,5,NULL,NULL,NULL,NULL,NULL),(149,NULL,NULL,'Valsad',103,5,NULL,NULL,NULL,NULL,NULL),(150,NULL,NULL,'Ambala',103,6,NULL,NULL,NULL,NULL,NULL),(151,NULL,NULL,'Bhiwani',103,6,NULL,NULL,NULL,NULL,NULL),(152,NULL,NULL,'Faridabad',103,6,NULL,NULL,NULL,NULL,NULL),(153,NULL,NULL,'Fatehabad',103,6,NULL,NULL,NULL,NULL,NULL),(154,NULL,NULL,'Gurgaon',103,6,NULL,NULL,NULL,NULL,NULL),(155,NULL,NULL,'Hissar',103,6,NULL,NULL,NULL,NULL,NULL),(156,NULL,NULL,'Jhajjar',103,6,NULL,NULL,NULL,NULL,NULL),(157,NULL,NULL,'Jind',103,6,NULL,NULL,NULL,NULL,NULL),(158,NULL,NULL,'Karnal',103,6,NULL,NULL,NULL,NULL,NULL),(159,NULL,NULL,'Kaithal',103,6,NULL,NULL,NULL,NULL,NULL),(160,NULL,NULL,'Kurukshetra',103,6,NULL,NULL,NULL,NULL,NULL),(161,NULL,NULL,'Mahendragarh',103,6,NULL,NULL,NULL,NULL,NULL),(162,NULL,NULL,'Mewat',103,6,NULL,NULL,NULL,NULL,NULL),(163,NULL,NULL,'Panchkula',103,6,NULL,NULL,NULL,NULL,NULL),(164,NULL,NULL,'Panipat',103,6,NULL,NULL,NULL,NULL,NULL),(165,NULL,NULL,'Rewari',103,6,NULL,NULL,NULL,NULL,NULL),(166,NULL,NULL,'Rohtak',103,6,NULL,NULL,NULL,NULL,NULL),(167,NULL,NULL,'Sirsa',103,6,NULL,NULL,NULL,NULL,NULL),(168,NULL,NULL,'Sonepat',103,6,NULL,NULL,NULL,NULL,NULL),(169,NULL,NULL,'Yamuna Nagar',103,6,NULL,NULL,NULL,NULL,NULL),(170,NULL,NULL,'Palwal',103,6,NULL,NULL,NULL,NULL,NULL),(171,NULL,NULL,'Bilaspur',103,7,NULL,NULL,NULL,NULL,NULL),(172,NULL,NULL,'Chamba',103,7,NULL,NULL,NULL,NULL,NULL),(173,NULL,NULL,'Hamirpur',103,7,NULL,NULL,NULL,NULL,NULL),(174,NULL,NULL,'Kangra',103,7,NULL,NULL,NULL,NULL,NULL),(175,NULL,NULL,'Kinnaur',103,7,NULL,NULL,NULL,NULL,NULL),(176,NULL,NULL,'Kulu',103,7,NULL,NULL,NULL,NULL,NULL),(177,NULL,NULL,'Lahaul and Spiti',103,7,NULL,NULL,NULL,NULL,NULL),(178,NULL,NULL,'Mandi',103,7,NULL,NULL,NULL,NULL,NULL),(179,NULL,NULL,'Shimla',103,7,NULL,NULL,NULL,NULL,NULL),(180,NULL,NULL,'Sirmaur',103,7,NULL,NULL,NULL,NULL,NULL),(181,NULL,NULL,'Solan',103,7,NULL,NULL,NULL,NULL,NULL),(182,NULL,NULL,'Una',103,7,NULL,NULL,NULL,NULL,NULL),(183,NULL,NULL,'Anantnag',103,8,NULL,NULL,NULL,NULL,NULL),(184,NULL,NULL,'Badgam',103,8,NULL,NULL,NULL,NULL,NULL),(185,NULL,NULL,'Bandipore',103,8,NULL,NULL,NULL,NULL,NULL),(186,NULL,NULL,'Baramula',103,8,NULL,NULL,NULL,NULL,NULL),(187,NULL,NULL,'Doda',103,8,NULL,NULL,NULL,NULL,NULL),(188,NULL,NULL,'Jammu',103,8,NULL,NULL,NULL,NULL,NULL),(189,NULL,NULL,'Kargil',103,8,NULL,NULL,NULL,NULL,NULL),(190,NULL,NULL,'Kathua',103,8,NULL,NULL,NULL,NULL,NULL),(191,NULL,NULL,'Kupwara',103,8,NULL,NULL,NULL,NULL,NULL),(192,NULL,NULL,'Leh',103,8,NULL,NULL,NULL,NULL,NULL),(193,NULL,NULL,'Poonch',103,8,NULL,NULL,NULL,NULL,NULL),(194,NULL,NULL,'Pulwama',103,8,NULL,NULL,NULL,NULL,NULL),(195,NULL,NULL,'Rajauri',103,8,NULL,NULL,NULL,NULL,NULL),(196,NULL,NULL,'Srinagar',103,8,NULL,NULL,NULL,NULL,NULL),(197,NULL,NULL,'Samba',103,8,NULL,NULL,NULL,NULL,NULL),(198,NULL,NULL,'Udhampur',103,8,NULL,NULL,NULL,NULL,NULL),(199,NULL,NULL,'Bokaro',103,34,NULL,NULL,NULL,NULL,NULL),(200,NULL,NULL,'Chatra',103,34,NULL,NULL,NULL,NULL,NULL),(201,NULL,NULL,'Deoghar',103,34,NULL,NULL,NULL,NULL,NULL),(202,NULL,NULL,'Dhanbad',103,34,NULL,NULL,NULL,NULL,NULL),(203,NULL,NULL,'Dumka',103,34,NULL,NULL,NULL,NULL,NULL),(204,NULL,NULL,'Purba Singhbhum',103,34,NULL,NULL,NULL,NULL,NULL),(205,NULL,NULL,'Garhwa',103,34,NULL,NULL,NULL,NULL,NULL),(206,NULL,NULL,'Giridih',103,34,NULL,NULL,NULL,NULL,NULL),(207,NULL,NULL,'Godda',103,34,NULL,NULL,NULL,NULL,NULL),(208,NULL,NULL,'Gumla',103,34,NULL,NULL,NULL,NULL,NULL),(209,NULL,NULL,'Hazaribagh',103,34,NULL,NULL,NULL,NULL,NULL),(210,NULL,NULL,'Koderma',103,34,NULL,NULL,NULL,NULL,NULL),(211,NULL,NULL,'Lohardaga',103,34,NULL,NULL,NULL,NULL,NULL),(212,NULL,NULL,'Pakur',103,34,NULL,NULL,NULL,NULL,NULL),(213,NULL,NULL,'Palamu',103,34,NULL,NULL,NULL,NULL,NULL),(214,NULL,NULL,'Ranchi',103,34,NULL,NULL,NULL,NULL,NULL),(215,NULL,NULL,'Sahibganj',103,34,NULL,NULL,NULL,NULL,NULL),(216,NULL,NULL,'Seraikela and Kharsawan',103,34,NULL,NULL,NULL,NULL,NULL),(217,NULL,NULL,'Pashchim Singhbhum',103,34,NULL,NULL,NULL,NULL,NULL),(218,NULL,NULL,'Ramgarh',103,34,NULL,NULL,NULL,NULL,NULL),(219,NULL,NULL,'Bidar',103,9,NULL,NULL,NULL,NULL,NULL),(220,NULL,NULL,'Belgaum',103,9,NULL,NULL,NULL,NULL,NULL),(221,NULL,NULL,'Bijapur',103,9,NULL,NULL,NULL,NULL,NULL),(222,NULL,NULL,'Bagalkot',103,9,NULL,NULL,NULL,NULL,NULL),(223,NULL,NULL,'Bellary',103,9,NULL,NULL,NULL,NULL,NULL),(224,NULL,NULL,'Bangalore Rural District',103,9,NULL,NULL,NULL,NULL,NULL),(225,NULL,NULL,'Bangalore Urban District',103,9,NULL,NULL,NULL,NULL,NULL),(226,NULL,NULL,'Chamarajnagar',103,9,NULL,NULL,NULL,NULL,NULL),(227,NULL,NULL,'Chikmagalur',103,9,NULL,NULL,NULL,NULL,NULL),(228,NULL,NULL,'Chitradurga',103,9,NULL,NULL,NULL,NULL,NULL),(229,NULL,NULL,'Davanagere',103,9,NULL,NULL,NULL,NULL,NULL),(230,NULL,NULL,'Dharwad',103,9,NULL,NULL,NULL,NULL,NULL),(231,NULL,NULL,'Dakshina Kannada',103,9,NULL,NULL,NULL,NULL,NULL),(232,NULL,NULL,'Gadag',103,9,NULL,NULL,NULL,NULL,NULL),(233,NULL,NULL,'Gulbarga',103,9,NULL,NULL,NULL,NULL,NULL),(234,NULL,NULL,'Hassan',103,9,NULL,NULL,NULL,NULL,NULL),(235,NULL,NULL,'Haveri District',103,9,NULL,NULL,NULL,NULL,NULL),(236,NULL,NULL,'Kodagu',103,9,NULL,NULL,NULL,NULL,NULL),(237,NULL,NULL,'Kolar',103,9,NULL,NULL,NULL,NULL,NULL),(238,NULL,NULL,'Koppal',103,9,NULL,NULL,NULL,NULL,NULL),(239,NULL,NULL,'Mandya',103,9,NULL,NULL,NULL,NULL,NULL),(240,NULL,NULL,'Mysore',103,9,NULL,NULL,NULL,NULL,NULL),(241,NULL,NULL,'Raichur',103,9,NULL,NULL,NULL,NULL,NULL),(242,NULL,NULL,'Shimoga',103,9,NULL,NULL,NULL,NULL,NULL),(243,NULL,NULL,'Tumkur',103,9,NULL,NULL,NULL,NULL,NULL),(244,NULL,NULL,'Udupi',103,9,NULL,NULL,NULL,NULL,NULL),(245,NULL,NULL,'Uttara Kannada',103,9,NULL,NULL,NULL,NULL,NULL),(246,NULL,NULL,'Ramanagara',103,9,NULL,NULL,NULL,NULL,NULL),(247,NULL,NULL,'Chikballapur',103,9,NULL,NULL,NULL,NULL,NULL),(248,NULL,NULL,'Yadagiri',103,9,NULL,NULL,NULL,NULL,NULL),(249,NULL,NULL,'Alappuzha',103,10,NULL,NULL,NULL,NULL,NULL),(250,NULL,NULL,'Ernakulam',103,10,NULL,NULL,NULL,NULL,NULL),(251,NULL,NULL,'Idukki',103,10,NULL,NULL,NULL,NULL,NULL),(252,NULL,NULL,'Kollam',103,10,NULL,NULL,NULL,NULL,NULL),(253,NULL,NULL,'Kannur',103,10,NULL,NULL,NULL,NULL,NULL),(254,NULL,NULL,'Kasaragod',103,10,NULL,NULL,NULL,NULL,NULL),(255,NULL,NULL,'Kottayam',103,10,NULL,NULL,NULL,NULL,NULL),(256,NULL,NULL,'Kozhikode',103,10,NULL,NULL,NULL,NULL,NULL),(257,NULL,NULL,'Malappuram',103,10,NULL,NULL,NULL,NULL,NULL),(258,NULL,NULL,'Palakkad',103,10,NULL,NULL,NULL,NULL,NULL),(259,NULL,NULL,'Pathanamthitta',103,10,NULL,NULL,NULL,NULL,NULL),(260,NULL,NULL,'Thrissur',103,10,NULL,NULL,NULL,NULL,NULL),(261,NULL,NULL,'Thiruvananthapuram',103,10,NULL,NULL,NULL,NULL,NULL),(262,NULL,NULL,'Wayanad',103,10,NULL,NULL,NULL,NULL,NULL),(263,NULL,NULL,'Alirajpur',103,11,NULL,NULL,NULL,NULL,NULL),(264,NULL,NULL,'Anuppur',103,11,NULL,NULL,NULL,NULL,NULL),(265,NULL,NULL,'Ashok Nagar',103,11,NULL,NULL,NULL,NULL,NULL),(266,NULL,NULL,'Balaghat',103,11,NULL,NULL,NULL,NULL,NULL),(267,NULL,NULL,'Barwani',103,11,NULL,NULL,NULL,NULL,NULL),(268,NULL,NULL,'Betul',103,11,NULL,NULL,NULL,NULL,NULL),(269,NULL,NULL,'Bhind',103,11,NULL,NULL,NULL,NULL,NULL),(270,NULL,NULL,'Bhopal',103,11,NULL,NULL,NULL,NULL,NULL),(271,NULL,NULL,'Burhanpur',103,11,NULL,NULL,NULL,NULL,NULL),(272,NULL,NULL,'Chhatarpur',103,11,NULL,NULL,NULL,NULL,NULL),(273,NULL,NULL,'Chhindwara',103,11,NULL,NULL,NULL,NULL,NULL),(274,NULL,NULL,'Damoh',103,11,NULL,NULL,NULL,NULL,NULL),(275,NULL,NULL,'Datia',103,11,NULL,NULL,NULL,NULL,NULL),(276,NULL,NULL,'Dewas',103,11,NULL,NULL,NULL,NULL,NULL),(277,NULL,NULL,'Dhar',103,11,NULL,NULL,NULL,NULL,NULL),(278,NULL,NULL,'Dindori',103,11,NULL,NULL,NULL,NULL,NULL),(279,NULL,NULL,'Guna',103,11,NULL,NULL,NULL,NULL,NULL),(280,NULL,NULL,'Gwalior',103,11,NULL,NULL,NULL,NULL,NULL),(281,NULL,NULL,'Harda',103,11,NULL,NULL,NULL,NULL,NULL),(282,NULL,NULL,'Hoshangabad',103,11,NULL,NULL,NULL,NULL,NULL),(283,NULL,NULL,'Indore',103,11,NULL,NULL,NULL,NULL,NULL),(284,NULL,NULL,'Jabalpur',103,11,NULL,NULL,NULL,NULL,NULL),(285,NULL,NULL,'Jhabua',103,11,NULL,NULL,NULL,NULL,NULL),(286,NULL,NULL,'Katni',103,11,NULL,NULL,NULL,NULL,NULL),(287,NULL,NULL,'Khandwa',103,11,NULL,NULL,NULL,NULL,NULL),(288,NULL,NULL,'Khargone',103,11,NULL,NULL,NULL,NULL,NULL),(289,NULL,NULL,'Mandla',103,11,NULL,NULL,NULL,NULL,NULL),(290,NULL,NULL,'Mandsaur',103,11,NULL,NULL,NULL,NULL,NULL),(291,NULL,NULL,'Morena',103,11,NULL,NULL,NULL,NULL,NULL),(292,NULL,NULL,'Narsinghpur',103,11,NULL,NULL,NULL,NULL,NULL),(293,NULL,NULL,'Neemuch',103,11,NULL,NULL,NULL,NULL,NULL),(294,NULL,NULL,'Panna',103,11,NULL,NULL,NULL,NULL,NULL),(295,NULL,NULL,'Rewa',103,11,NULL,NULL,NULL,NULL,NULL),(296,NULL,NULL,'Rajgarh',103,11,NULL,NULL,NULL,NULL,NULL),(297,NULL,NULL,'Ratlam',103,11,NULL,NULL,NULL,NULL,NULL),(298,NULL,NULL,'Raisen',103,11,NULL,NULL,NULL,NULL,NULL),(299,NULL,NULL,'Sagar',103,11,NULL,NULL,NULL,NULL,NULL),(300,NULL,NULL,'Satna',103,11,NULL,NULL,NULL,NULL,NULL),(301,NULL,NULL,'Sehore',103,11,NULL,NULL,NULL,NULL,NULL),(302,NULL,NULL,'Seoni',103,11,NULL,NULL,NULL,NULL,NULL),(303,NULL,NULL,'Shahdol',103,11,NULL,NULL,NULL,NULL,NULL),(304,NULL,NULL,'Shajapur',103,11,NULL,NULL,NULL,NULL,NULL),(305,NULL,NULL,'Sheopur',103,11,NULL,NULL,NULL,NULL,NULL),(306,NULL,NULL,'Shivpuri',103,11,NULL,NULL,NULL,NULL,NULL),(307,NULL,NULL,'Sidhi',103,11,NULL,NULL,NULL,NULL,NULL),(308,NULL,NULL,'Singrauli',103,11,NULL,NULL,NULL,NULL,NULL),(309,NULL,NULL,'Tikamgarh',103,11,NULL,NULL,NULL,NULL,NULL),(310,NULL,NULL,'Ujjain',103,11,NULL,NULL,NULL,NULL,NULL),(311,NULL,NULL,'Umaria',103,11,NULL,NULL,NULL,NULL,NULL),(312,NULL,NULL,'Vidisha',103,11,NULL,NULL,NULL,NULL,NULL),(313,NULL,NULL,'Ahmednagar',103,12,NULL,NULL,NULL,NULL,NULL),(314,NULL,NULL,'Akola',103,12,NULL,NULL,NULL,NULL,NULL),(315,NULL,NULL,'Amrawati',103,12,NULL,NULL,NULL,NULL,NULL),(316,NULL,NULL,'Aurangabad',103,12,NULL,NULL,NULL,NULL,NULL),(317,NULL,NULL,'Bhandara',103,12,NULL,NULL,NULL,NULL,NULL),(318,NULL,NULL,'Beed',103,12,NULL,NULL,NULL,NULL,NULL),(319,NULL,NULL,'Buldhana',103,12,NULL,NULL,NULL,NULL,NULL),(320,NULL,NULL,'Chandrapur',103,12,NULL,NULL,NULL,NULL,NULL),(321,NULL,NULL,'Dhule',103,12,NULL,NULL,NULL,NULL,NULL),(322,NULL,NULL,'Gadchiroli',103,12,NULL,NULL,NULL,NULL,NULL),(323,NULL,NULL,'Gondiya',103,12,NULL,NULL,NULL,NULL,NULL),(324,NULL,NULL,'Hingoli',103,12,NULL,NULL,NULL,NULL,NULL),(325,NULL,NULL,'Jalgaon',103,12,NULL,NULL,NULL,NULL,NULL),(326,NULL,NULL,'Jalna',103,12,NULL,NULL,NULL,NULL,NULL),(327,NULL,NULL,'Kolhapur',103,12,NULL,NULL,NULL,NULL,NULL),(328,NULL,NULL,'Latur',103,12,NULL,NULL,NULL,NULL,NULL),(329,NULL,NULL,'Mumbai City',103,12,NULL,NULL,NULL,NULL,NULL),(330,NULL,NULL,'Mumbai suburban',103,12,NULL,NULL,NULL,NULL,NULL),(331,NULL,NULL,'Nandurbar',103,12,NULL,NULL,NULL,NULL,NULL),(332,NULL,NULL,'Nanded',103,12,NULL,NULL,NULL,NULL,NULL),(333,NULL,NULL,'Nagpur',103,12,NULL,NULL,NULL,NULL,NULL),(334,NULL,NULL,'Nashik',103,12,NULL,NULL,NULL,NULL,NULL),(335,NULL,NULL,'Osmanabad',103,12,NULL,NULL,NULL,NULL,NULL),(336,NULL,NULL,'Parbhani',103,12,NULL,NULL,NULL,NULL,NULL),(337,NULL,NULL,'Pune',103,12,NULL,NULL,NULL,NULL,NULL),(338,NULL,NULL,'Raigad',103,12,NULL,NULL,NULL,NULL,NULL),(339,NULL,NULL,'Ratnagiri',103,12,NULL,NULL,NULL,NULL,NULL),(340,NULL,NULL,'Sindhudurg',103,12,NULL,NULL,NULL,NULL,NULL),(341,NULL,NULL,'Sangli',103,12,NULL,NULL,NULL,NULL,NULL),(342,NULL,NULL,'Solapur',103,12,NULL,NULL,NULL,NULL,NULL),(343,NULL,NULL,'Satara',103,12,NULL,NULL,NULL,NULL,NULL),(344,NULL,NULL,'Thane',103,12,NULL,NULL,NULL,NULL,NULL),(345,NULL,NULL,'Wardha',103,12,NULL,NULL,NULL,NULL,NULL),(346,NULL,NULL,'Washim',103,12,NULL,NULL,NULL,NULL,NULL),(347,NULL,NULL,'Yavatmal',103,12,NULL,NULL,NULL,NULL,NULL),(348,NULL,NULL,'Bishnupur',103,13,NULL,NULL,NULL,NULL,NULL),(349,NULL,NULL,'Churachandpur',103,13,NULL,NULL,NULL,NULL,NULL),(350,NULL,NULL,'Chandel',103,13,NULL,NULL,NULL,NULL,NULL),(351,NULL,NULL,'Imphal East',103,13,NULL,NULL,NULL,NULL,NULL),(352,NULL,NULL,'Senapati',103,13,NULL,NULL,NULL,NULL,NULL),(353,NULL,NULL,'Tamenglong',103,13,NULL,NULL,NULL,NULL,NULL),(354,NULL,NULL,'Thoubal',103,13,NULL,NULL,NULL,NULL,NULL),(355,NULL,NULL,'Ukhrul',103,13,NULL,NULL,NULL,NULL,NULL),(356,NULL,NULL,'Imphal West',103,13,NULL,NULL,NULL,NULL,NULL),(357,NULL,NULL,'East Garo Hills',103,14,NULL,NULL,NULL,NULL,NULL),(358,NULL,NULL,'East Khasi Hills',103,14,NULL,NULL,NULL,NULL,NULL),(359,NULL,NULL,'Jaintia Hills',103,14,NULL,NULL,NULL,NULL,NULL),(360,NULL,NULL,'Ri-Bhoi',103,14,NULL,NULL,NULL,NULL,NULL),(361,NULL,NULL,'South Garo Hills',103,14,NULL,NULL,NULL,NULL,NULL),(362,NULL,NULL,'West Garo Hills',103,14,NULL,NULL,NULL,NULL,NULL),(363,NULL,NULL,'West Khasi Hills',103,14,NULL,NULL,NULL,NULL,NULL),(364,NULL,NULL,'Aizawl',103,15,NULL,NULL,NULL,NULL,NULL),(365,NULL,NULL,'Champhai',103,15,NULL,NULL,NULL,NULL,NULL),(366,NULL,NULL,'Kolasib',103,15,NULL,NULL,NULL,NULL,NULL),(367,NULL,NULL,'Lawngtlai',103,15,NULL,NULL,NULL,NULL,NULL),(368,NULL,NULL,'Lunglei',103,15,NULL,NULL,NULL,NULL,NULL),(369,NULL,NULL,'Mamit',103,15,NULL,NULL,NULL,NULL,NULL),(370,NULL,NULL,'Saiha',103,15,NULL,NULL,NULL,NULL,NULL),(371,NULL,NULL,'Serchhip',103,15,NULL,NULL,NULL,NULL,NULL),(372,NULL,NULL,'Dimapur',103,16,NULL,NULL,NULL,NULL,NULL),(373,NULL,NULL,'Kohima',103,16,NULL,NULL,NULL,NULL,NULL),(374,NULL,NULL,'Mokokchung',103,16,NULL,NULL,NULL,NULL,NULL),(375,NULL,NULL,'Mon',103,16,NULL,NULL,NULL,NULL,NULL),(376,NULL,NULL,'Phek',103,16,NULL,NULL,NULL,NULL,NULL),(377,NULL,NULL,'Tuensang',103,16,NULL,NULL,NULL,NULL,NULL),(378,NULL,NULL,'Wokha',103,16,NULL,NULL,NULL,NULL,NULL),(379,NULL,NULL,'Zunheboto',103,16,NULL,NULL,NULL,NULL,NULL),(380,NULL,NULL,'Angul',103,17,NULL,NULL,NULL,NULL,NULL),(381,NULL,NULL,'Boudh',103,17,NULL,NULL,NULL,NULL,NULL),(382,NULL,NULL,'Bhadrak',103,17,NULL,NULL,NULL,NULL,NULL),(383,NULL,NULL,'Bolangir',103,17,NULL,NULL,NULL,NULL,NULL),(384,NULL,NULL,'Bargarh',103,17,NULL,NULL,NULL,NULL,NULL),(385,NULL,NULL,'Baleswar',103,17,NULL,NULL,NULL,NULL,NULL),(386,NULL,NULL,'Cuttack',103,17,NULL,NULL,NULL,NULL,NULL),(387,NULL,NULL,'Debagarh',103,17,NULL,NULL,NULL,NULL,NULL),(388,NULL,NULL,'Dhenkanal',103,17,NULL,NULL,NULL,NULL,NULL),(389,NULL,NULL,'Ganjam',103,17,NULL,NULL,NULL,NULL,NULL),(390,NULL,NULL,'Gajapati',103,17,NULL,NULL,NULL,NULL,NULL),(391,NULL,NULL,'Jharsuguda',103,17,NULL,NULL,NULL,NULL,NULL),(392,NULL,NULL,'Jajapur',103,17,NULL,NULL,NULL,NULL,NULL),(393,NULL,NULL,'Jagatsinghpur',103,17,NULL,NULL,NULL,NULL,NULL),(394,NULL,NULL,'Khordha',103,17,NULL,NULL,NULL,NULL,NULL),(395,NULL,NULL,'Kendujhar',103,17,NULL,NULL,NULL,NULL,NULL),(396,NULL,NULL,'Kalahandi',103,17,NULL,NULL,NULL,NULL,NULL),(397,NULL,NULL,'Kandhamal',103,17,NULL,NULL,NULL,NULL,NULL),(398,NULL,NULL,'Koraput',103,17,NULL,NULL,NULL,NULL,NULL),(399,NULL,NULL,'Kendrapara',103,17,NULL,NULL,NULL,NULL,NULL),(400,NULL,NULL,'Malkangiri',103,17,NULL,NULL,NULL,NULL,NULL),(401,NULL,NULL,'Mayurbhanj',103,17,NULL,NULL,NULL,NULL,NULL),(402,NULL,NULL,'Nabarangpur',103,17,NULL,NULL,NULL,NULL,NULL),(403,NULL,NULL,'Nuapada',103,17,NULL,NULL,NULL,NULL,NULL),(404,NULL,NULL,'Nayagarh',103,17,NULL,NULL,NULL,NULL,NULL),(405,NULL,NULL,'Puri',103,17,NULL,NULL,NULL,NULL,NULL),(406,NULL,NULL,'Rayagada',103,17,NULL,NULL,NULL,NULL,NULL),(407,NULL,NULL,'Sambalpur',103,17,NULL,NULL,NULL,NULL,NULL),(408,NULL,NULL,'Subarnapur',103,17,NULL,NULL,NULL,NULL,NULL),(409,NULL,NULL,'Sundargarh',103,17,NULL,NULL,NULL,NULL,NULL),(410,NULL,NULL,'Karaikal',103,27,NULL,NULL,NULL,NULL,NULL),(411,NULL,NULL,'Mahe',103,27,NULL,NULL,NULL,NULL,NULL),(412,NULL,NULL,'Puducherry',103,27,NULL,NULL,NULL,NULL,NULL),(413,NULL,NULL,'Yanam',103,27,NULL,NULL,NULL,NULL,NULL),(414,NULL,NULL,'Amritsar',103,18,NULL,NULL,NULL,NULL,NULL),(415,NULL,NULL,'Bathinda',103,18,NULL,NULL,NULL,NULL,NULL),(416,NULL,NULL,'Firozpur',103,18,NULL,NULL,NULL,NULL,NULL),(417,NULL,NULL,'Faridkot',103,18,NULL,NULL,NULL,NULL,NULL),(418,NULL,NULL,'Fatehgarh Sahib',103,18,NULL,NULL,NULL,NULL,NULL),(419,NULL,NULL,'Gurdaspur',103,18,NULL,NULL,NULL,NULL,NULL),(420,NULL,NULL,'Hoshiarpur',103,18,NULL,NULL,NULL,NULL,NULL),(421,NULL,NULL,'Jalandhar',103,18,NULL,NULL,NULL,NULL,NULL),(422,NULL,NULL,'Kapurthala',103,18,NULL,NULL,NULL,NULL,NULL),(423,NULL,NULL,'Ludhiana',103,18,NULL,NULL,NULL,NULL,NULL),(424,NULL,NULL,'Mansa',103,18,NULL,NULL,NULL,NULL,NULL),(425,NULL,NULL,'Moga',103,18,NULL,NULL,NULL,NULL,NULL),(426,NULL,NULL,'Mukatsar',103,18,NULL,NULL,NULL,NULL,NULL),(427,NULL,NULL,'Nawan Shehar',103,18,NULL,NULL,NULL,NULL,NULL),(428,NULL,NULL,'Patiala',103,18,NULL,NULL,NULL,NULL,NULL),(429,NULL,NULL,'Rupnagar',103,18,NULL,NULL,NULL,NULL,NULL),(430,NULL,NULL,'Sangrur',103,18,NULL,NULL,NULL,NULL,NULL),(431,NULL,NULL,'Ajmer',103,19,NULL,NULL,NULL,NULL,NULL),(432,NULL,NULL,'Alwar',103,19,NULL,NULL,NULL,NULL,NULL),(433,NULL,NULL,'Bikaner',103,19,NULL,NULL,NULL,NULL,NULL),(434,NULL,NULL,'Barmer',103,19,NULL,NULL,NULL,NULL,NULL),(435,NULL,NULL,'Banswara',103,19,NULL,NULL,NULL,NULL,NULL),(436,NULL,NULL,'Bharatpur',103,19,NULL,NULL,NULL,NULL,NULL),(437,NULL,NULL,'Baran',103,19,NULL,NULL,NULL,NULL,NULL),(438,NULL,NULL,'Bundi',103,19,NULL,NULL,NULL,NULL,NULL),(439,NULL,NULL,'Bhilwara',103,19,NULL,NULL,NULL,NULL,NULL),(440,NULL,NULL,'Churu',103,19,NULL,NULL,NULL,NULL,NULL),(441,NULL,NULL,'Chittorgarh',103,19,NULL,NULL,NULL,NULL,NULL),(442,NULL,NULL,'Dausa',103,19,NULL,NULL,NULL,NULL,NULL),(443,NULL,NULL,'Dholpur',103,19,NULL,NULL,NULL,NULL,NULL),(444,NULL,NULL,'Dungapur',103,19,NULL,NULL,NULL,NULL,NULL),(445,NULL,NULL,'Ganganagar',103,19,NULL,NULL,NULL,NULL,NULL),(446,NULL,NULL,'Hanumangarh',103,19,NULL,NULL,NULL,NULL,NULL),(447,NULL,NULL,'Juhnjhunun',103,19,NULL,NULL,NULL,NULL,NULL),(448,NULL,NULL,'Jalore',103,19,NULL,NULL,NULL,NULL,NULL),(449,NULL,NULL,'Jodhpur',103,19,NULL,NULL,NULL,NULL,NULL),(450,NULL,NULL,'Jaipur',103,19,NULL,NULL,NULL,NULL,NULL),(451,NULL,NULL,'Jaisalmer',103,19,NULL,NULL,NULL,NULL,NULL),(452,NULL,NULL,'Jhalawar',103,19,NULL,NULL,NULL,NULL,NULL),(453,NULL,NULL,'Karauli',103,19,NULL,NULL,NULL,NULL,NULL),(454,NULL,NULL,'Kota',103,19,NULL,NULL,NULL,NULL,NULL),(455,NULL,NULL,'Nagaur',103,19,NULL,NULL,NULL,NULL,NULL),(456,NULL,NULL,'Pali',103,19,NULL,NULL,NULL,NULL,NULL),(457,NULL,NULL,'Pratapgarh',103,19,NULL,NULL,NULL,NULL,NULL),(458,NULL,NULL,'Rajsamand',103,19,NULL,NULL,NULL,NULL,NULL),(459,NULL,NULL,'Sikar',103,19,NULL,NULL,NULL,NULL,NULL),(460,NULL,NULL,'Sawai Madhopur',103,19,NULL,NULL,NULL,NULL,NULL),(461,NULL,NULL,'Sirohi',103,19,NULL,NULL,NULL,NULL,NULL),(462,NULL,NULL,'Tonk',103,19,NULL,NULL,NULL,NULL,NULL),(463,NULL,NULL,'Udaipur',103,19,NULL,NULL,NULL,NULL,NULL),(464,NULL,NULL,'East Sikkim',103,20,NULL,NULL,NULL,NULL,NULL),(465,NULL,NULL,'North Sikkim',103,20,NULL,NULL,NULL,NULL,NULL),(466,NULL,NULL,'South Sikkim',103,20,NULL,NULL,NULL,NULL,NULL),(467,NULL,NULL,'West Sikkim',103,20,NULL,NULL,NULL,NULL,NULL),(468,NULL,NULL,'Ariyalur',103,21,NULL,NULL,NULL,NULL,NULL),(469,NULL,NULL,'Chennai',103,21,NULL,NULL,NULL,NULL,NULL),(470,NULL,NULL,'Coimbatore',103,21,NULL,NULL,NULL,NULL,NULL),(471,NULL,NULL,'Cuddalore',103,21,NULL,NULL,NULL,NULL,NULL),(472,NULL,NULL,'Dharmapuri',103,21,NULL,NULL,NULL,NULL,NULL),(473,NULL,NULL,'Dindigul',103,21,NULL,NULL,NULL,NULL,NULL),(474,NULL,NULL,'Erode',103,21,NULL,NULL,NULL,NULL,NULL),(475,NULL,NULL,'Kanchipuram',103,21,NULL,NULL,NULL,NULL,NULL),(476,NULL,NULL,'Kanyakumari',103,21,NULL,NULL,NULL,NULL,NULL),(477,NULL,NULL,'Karur',103,21,NULL,NULL,NULL,NULL,NULL),(478,NULL,NULL,'Madurai',103,21,NULL,NULL,NULL,NULL,NULL),(479,NULL,NULL,'Nagapattinam',103,21,NULL,NULL,NULL,NULL,NULL),(480,NULL,NULL,'The Nilgiris',103,21,NULL,NULL,NULL,NULL,NULL),(481,NULL,NULL,'Namakkal',103,21,NULL,NULL,NULL,NULL,NULL),(482,NULL,NULL,'Perambalur',103,21,NULL,NULL,NULL,NULL,NULL),(483,NULL,NULL,'Pudukkottai',103,21,NULL,NULL,NULL,NULL,NULL),(484,NULL,NULL,'Ramanathapuram',103,21,NULL,NULL,NULL,NULL,NULL),(485,NULL,NULL,'Salem',103,21,NULL,NULL,NULL,NULL,NULL),(486,NULL,NULL,'Sivagangai',103,21,NULL,NULL,NULL,NULL,NULL),(487,NULL,NULL,'Tiruppur',103,21,NULL,NULL,NULL,NULL,NULL),(488,NULL,NULL,'Tiruchirappalli',103,21,NULL,NULL,NULL,NULL,NULL),(489,NULL,NULL,'Theni',103,21,NULL,NULL,NULL,NULL,NULL),(490,NULL,NULL,'Tirunelveli',103,21,NULL,NULL,NULL,NULL,NULL),(491,NULL,NULL,'Thanjavur',103,21,NULL,NULL,NULL,NULL,NULL),(492,NULL,NULL,'Thoothukudi',103,21,NULL,NULL,NULL,NULL,NULL),(493,NULL,NULL,'Thiruvallur',103,21,NULL,NULL,NULL,NULL,NULL),(494,NULL,NULL,'Thiruvarur',103,21,NULL,NULL,NULL,NULL,NULL),(495,NULL,NULL,'Tiruvannamalai',103,21,NULL,NULL,NULL,NULL,NULL),(496,NULL,NULL,'Vellore',103,21,NULL,NULL,NULL,NULL,NULL),(497,NULL,NULL,'Villupuram',103,21,NULL,NULL,NULL,NULL,NULL),(498,NULL,NULL,'Dhalai',103,22,NULL,NULL,NULL,NULL,NULL),(499,NULL,NULL,'North Tripura',103,22,NULL,NULL,NULL,NULL,NULL),(500,NULL,NULL,'South Tripura',103,22,NULL,NULL,NULL,NULL,NULL),(501,NULL,NULL,'West Tripura',103,22,NULL,NULL,NULL,NULL,NULL),(502,NULL,NULL,'Almora',103,33,NULL,NULL,NULL,NULL,NULL),(503,NULL,NULL,'Bageshwar',103,33,NULL,NULL,NULL,NULL,NULL),(504,NULL,NULL,'Chamoli',103,33,NULL,NULL,NULL,NULL,NULL),(505,NULL,NULL,'Champawat',103,33,NULL,NULL,NULL,NULL,NULL),(506,NULL,NULL,'Dehradun',103,33,NULL,NULL,NULL,NULL,NULL),(507,NULL,NULL,'Haridwar',103,33,NULL,NULL,NULL,NULL,NULL),(508,NULL,NULL,'Nainital',103,33,NULL,NULL,NULL,NULL,NULL),(509,NULL,NULL,'Pauri Garhwal',103,33,NULL,NULL,NULL,NULL,NULL),(510,NULL,NULL,'Pithoragharh',103,33,NULL,NULL,NULL,NULL,NULL),(511,NULL,NULL,'Rudraprayag',103,33,NULL,NULL,NULL,NULL,NULL),(512,NULL,NULL,'Tehri Garhwal',103,33,NULL,NULL,NULL,NULL,NULL),(513,NULL,NULL,'Udham Singh Nagar',103,33,NULL,NULL,NULL,NULL,NULL),(514,NULL,NULL,'Uttarkashi',103,33,NULL,NULL,NULL,NULL,NULL),(515,NULL,NULL,'Agra',103,23,NULL,NULL,NULL,NULL,NULL),(516,NULL,NULL,'Allahabad',103,23,NULL,NULL,NULL,NULL,NULL),(517,NULL,NULL,'Aligarh',103,23,NULL,NULL,NULL,NULL,NULL),(518,NULL,NULL,'Ambedkar Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(519,NULL,NULL,'Auraiya',103,23,NULL,NULL,NULL,NULL,NULL),(520,NULL,NULL,'Azamgarh',103,23,NULL,NULL,NULL,NULL,NULL),(521,NULL,NULL,'Barabanki',103,23,NULL,NULL,NULL,NULL,NULL),(522,NULL,NULL,'Badaun',103,23,NULL,NULL,NULL,NULL,NULL),(523,NULL,NULL,'Bagpat',103,23,NULL,NULL,NULL,NULL,NULL),(524,NULL,NULL,'Bahraich',103,23,NULL,NULL,NULL,NULL,NULL),(525,NULL,NULL,'Bijnor',103,23,NULL,NULL,NULL,NULL,NULL),(526,NULL,NULL,'Ballia',103,23,NULL,NULL,NULL,NULL,NULL),(527,NULL,NULL,'Banda',103,23,NULL,NULL,NULL,NULL,NULL),(528,NULL,NULL,'Balrampur',103,23,NULL,NULL,NULL,NULL,NULL),(529,NULL,NULL,'Bareilly',103,23,NULL,NULL,NULL,NULL,NULL),(530,NULL,NULL,'Basti',103,23,NULL,NULL,NULL,NULL,NULL),(531,NULL,NULL,'Bulandshahr',103,23,NULL,NULL,NULL,NULL,NULL),(532,NULL,NULL,'Chandauli',103,23,NULL,NULL,NULL,NULL,NULL),(533,NULL,NULL,'Chitrakoot',103,23,NULL,NULL,NULL,NULL,NULL),(534,NULL,NULL,'Deoria',103,23,NULL,NULL,NULL,NULL,NULL),(535,NULL,NULL,'Etah',103,23,NULL,NULL,NULL,NULL,NULL),(536,NULL,NULL,'Kanshiram Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(537,NULL,NULL,'Etawah',103,23,NULL,NULL,NULL,NULL,NULL),(538,NULL,NULL,'Firozabad',103,23,NULL,NULL,NULL,NULL,NULL),(539,NULL,NULL,'Farrukhabad',103,23,NULL,NULL,NULL,NULL,NULL),(540,NULL,NULL,'Fatehpur',103,23,NULL,NULL,NULL,NULL,NULL),(541,NULL,NULL,'Faizabad',103,23,NULL,NULL,NULL,NULL,NULL),(542,NULL,NULL,'Gautam Buddha Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(543,NULL,NULL,'Gonda',103,23,NULL,NULL,NULL,NULL,NULL),(544,NULL,NULL,'Ghazipur',103,23,NULL,NULL,NULL,NULL,NULL),(545,NULL,NULL,'Gorkakhpur',103,23,NULL,NULL,NULL,NULL,NULL),(546,NULL,NULL,'Ghaziabad',103,23,NULL,NULL,NULL,NULL,NULL),(547,NULL,NULL,'Hamirpur',103,23,NULL,NULL,NULL,NULL,NULL),(548,NULL,NULL,'Hardoi',103,23,NULL,NULL,NULL,NULL,NULL),(549,NULL,NULL,'Mahamaya Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(550,NULL,NULL,'Jhansi',103,23,NULL,NULL,NULL,NULL,NULL),(551,NULL,NULL,'Jalaun',103,23,NULL,NULL,NULL,NULL,NULL),(552,NULL,NULL,'Jyotiba Phule Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(553,NULL,NULL,'Jaunpur District',103,23,NULL,NULL,NULL,NULL,NULL),(554,NULL,NULL,'Kanpur Dehat',103,23,NULL,NULL,NULL,NULL,NULL),(555,NULL,NULL,'Kannauj',103,23,NULL,NULL,NULL,NULL,NULL),(556,NULL,NULL,'Kanpur Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(557,NULL,NULL,'Kaushambi',103,23,NULL,NULL,NULL,NULL,NULL),(558,NULL,NULL,'Kushinagar',103,23,NULL,NULL,NULL,NULL,NULL),(559,NULL,NULL,'Lalitpur',103,23,NULL,NULL,NULL,NULL,NULL),(560,NULL,NULL,'Lakhimpur Kheri',103,23,NULL,NULL,NULL,NULL,NULL),(561,NULL,NULL,'Lucknow',103,23,NULL,NULL,NULL,NULL,NULL),(562,NULL,NULL,'Mau',103,23,NULL,NULL,NULL,NULL,NULL),(563,NULL,NULL,'Meerut',103,23,NULL,NULL,NULL,NULL,NULL),(564,NULL,NULL,'Maharajganj',103,23,NULL,NULL,NULL,NULL,NULL),(565,NULL,NULL,'Mahoba',103,23,NULL,NULL,NULL,NULL,NULL),(566,NULL,NULL,'Mirzapur',103,23,NULL,NULL,NULL,NULL,NULL),(567,NULL,NULL,'Moradabad',103,23,NULL,NULL,NULL,NULL,NULL),(568,NULL,NULL,'Mainpuri',103,23,NULL,NULL,NULL,NULL,NULL),(569,NULL,NULL,'Mathura',103,23,NULL,NULL,NULL,NULL,NULL),(570,NULL,NULL,'Muzaffarnagar',103,23,NULL,NULL,NULL,NULL,NULL),(571,NULL,NULL,'Pilibhit',103,23,NULL,NULL,NULL,NULL,NULL),(572,NULL,NULL,'Pratapgarh',103,23,NULL,NULL,NULL,NULL,NULL),(573,NULL,NULL,'Rampur',103,23,NULL,NULL,NULL,NULL,NULL),(574,NULL,NULL,'Rae Bareli',103,23,NULL,NULL,NULL,NULL,NULL),(575,NULL,NULL,'Saharanpur',103,23,NULL,NULL,NULL,NULL,NULL),(576,NULL,NULL,'Sitapur',103,23,NULL,NULL,NULL,NULL,NULL),(577,NULL,NULL,'Shahjahanpur',103,23,NULL,NULL,NULL,NULL,NULL),(578,NULL,NULL,'Sant Kabir Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(579,NULL,NULL,'Siddharthnagar',103,23,NULL,NULL,NULL,NULL,NULL),(580,NULL,NULL,'Sonbhadra',103,23,NULL,NULL,NULL,NULL,NULL),(581,NULL,NULL,'Sant Ravidas Nagar',103,23,NULL,NULL,NULL,NULL,NULL),(582,NULL,NULL,'Sultanpur',103,23,NULL,NULL,NULL,NULL,NULL),(583,NULL,NULL,'Shravasti',103,23,NULL,NULL,NULL,NULL,NULL),(584,NULL,NULL,'Unnao',103,23,NULL,NULL,NULL,NULL,NULL),(585,NULL,NULL,'Varanasi',103,23,NULL,NULL,NULL,NULL,NULL),(586,NULL,NULL,'Birbhum',103,24,NULL,NULL,NULL,NULL,NULL),(587,NULL,NULL,'Bankura',103,24,NULL,NULL,NULL,NULL,NULL),(588,NULL,NULL,'Bardhaman',103,24,NULL,NULL,NULL,NULL,NULL),(589,NULL,NULL,'Darjeeling',103,24,NULL,NULL,NULL,NULL,NULL),(590,NULL,NULL,'Dakshin Dinajpur',103,24,NULL,NULL,NULL,NULL,NULL),(591,NULL,NULL,'Hooghly',103,24,NULL,NULL,NULL,NULL,NULL),(592,NULL,NULL,'Howrah',103,24,NULL,NULL,NULL,NULL,NULL),(593,NULL,NULL,'Jalpaiguri',103,24,NULL,NULL,NULL,NULL,NULL),(594,NULL,NULL,'Cooch Behar',103,24,NULL,NULL,NULL,NULL,NULL),(595,NULL,NULL,'Kolkata',103,24,NULL,NULL,NULL,NULL,NULL),(596,NULL,NULL,'Malda',103,24,NULL,NULL,NULL,NULL,NULL),(597,NULL,NULL,'Midnapore',103,24,NULL,NULL,NULL,NULL,NULL),(598,NULL,NULL,'Murshidabad',103,24,NULL,NULL,NULL,NULL,NULL),(599,NULL,NULL,'Nadia',103,24,NULL,NULL,NULL,NULL,NULL),(600,NULL,NULL,'North 24 Parganas',103,24,NULL,NULL,NULL,NULL,NULL),(601,NULL,NULL,'South 24 Parganas',103,24,NULL,NULL,NULL,NULL,NULL),(602,NULL,NULL,'Purulia',103,24,NULL,NULL,NULL,NULL,NULL),(603,NULL,NULL,'Uttar Dinajpur',103,24,NULL,NULL,NULL,NULL,NULL),(604,'CI/604','001','Navi Mumbai',103,12,NULL,9,'2023-05-15 09:05:48',NULL,NULL);

/*Table structure for table `tbl_coating` */

DROP TABLE IF EXISTS `tbl_coating`;

CREATE TABLE `tbl_coating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_coating` */

insert  into `tbl_coating`(`id`,`description`) values (1,'First Side'),(2,'Second Side'),(3,'Both Side');

/*Table structure for table `tbl_coating_thermal` */

DROP TABLE IF EXISTS `tbl_coating_thermal`;

CREATE TABLE `tbl_coating_thermal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_coating_thermal` */

insert  into `tbl_coating_thermal`(`id`,`description`) values (1,'Inside'),(2,'Outside');

/*Table structure for table `tbl_collating_type` */

DROP TABLE IF EXISTS `tbl_collating_type`;

CREATE TABLE `tbl_collating_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_collating_type` */

insert  into `tbl_collating_type`(`id`,`description`) values (1,'One Side'),(2,'Two Side');

/*Table structure for table `tbl_company` */

DROP TABLE IF EXISTS `tbl_company`;

CREATE TABLE `tbl_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `company_id` varchar(30) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `registered_address` text NOT NULL,
  `corresponding_address` text DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `fax_no` varchar(25) DEFAULT NULL,
  `vat_regs_no` varchar(55) DEFAULT NULL,
  `grio_no` varchar(55) DEFAULT NULL,
  `bank` varchar(55) DEFAULT NULL,
  `branch` varchar(55) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `sales_tax_declaration` varchar(255) DEFAULT NULL,
  `terms_condition` text DEFAULT NULL,
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
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_company` */

insert  into `tbl_company`(`id`,`unique_id`,`company_id`,`name`,`registered_address`,`corresponding_address`,`phone_number`,`fax_no`,`vat_regs_no`,`grio_no`,`bank`,`branch`,`account_no`,`sales_tax_declaration`,`terms_condition`,`company_prefix`,`service_reg_no`,`service_reg_no_dated`,`tin_no`,`pan_no`,`ecc_no`,`ecc_dated`,`excise_rabge`,`excise_division`,`commissioner_rate`,`gst_no`,`arn_no`,`it_tds`,`cin_no`,`correspondant_bank`,`correspondant_account_no`,`location`,`swift_bic_code`,`header_image`,`footer_image`,`stamp_image`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (47,NULL,NULL,'Devharsh Infotech Pvt Ltd','Bhumi Industrial Park, Bhumi World, \r\nBldg.No.D-5, Gala No.24,25, \r\nPimplas Village, Mumbai Nasik Highway (NH-3)\r\nBhiwandi, Dist-Thane 421 302','Bhumi Industrial Park, Bhumi World, \r\nBldg.No.1, Gala No.24,25, \r\nPimplas Village, Mumbai Nasik Highway (NH-3)\r\nBhiwandi, Dist-Thane 421 302','7718867479',NULL,'27150372103V',NULL,'IDBI BANK','MARI GOLD HOUSE ANDHERI WEST','0039651100003186','055100101003261','Please check the material on receipt. Any complaint about short quantity or of any other nature will be accepted within 3 days from the date of receipt of material. Our responsibility casses once the material has been received and acknowledged by your office/ store/ Dept./ User.','DI','AACCD1967ASD001','2015-01-20','27150372103V','AACCD1967A','AACCD1967AEM002','2022-06-20','I','KALYAN-I','THANE -I','27AACCD1967A1ZZ','AA270217027216F',NULL,'U30007MH2004PTC146993',NULL,NULL,NULL,NULL,'Devharsh_Infotech_Pvt_Ltd_header.png','Devharsh_Infotech_Pvt_Ltd_footer.png','Devarsh_Stamp.png',9,'2022-06-20 12:06:09',9,'2023-05-10 10:05:28'),(49,'CO/49',NULL,'Scube','Ghatkopar','Kurla','8850292852','No12345','Vat12346','12345','Sarswat Bank','Pune','012345678','012345678',NULL,'Com',NULL,'2022-10-28',NULL,NULL,NULL,'2022-10-28',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Scube_header.jpg','Scube_footer.jpg','SSSL_Stamp.png',9,'2022-10-28 05:10:50',9,'2023-05-10 09:05:58');

/*Table structure for table `tbl_cost_center` */

DROP TABLE IF EXISTS `tbl_cost_center`;

CREATE TABLE `tbl_cost_center` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_cost_center` */

insert  into `tbl_cost_center`(`id`,`description`) values (62,'Rakesh Shah'),(63,'Dilip Shah'),(64,'Both');

/*Table structure for table `tbl_currency` */

DROP TABLE IF EXISTS `tbl_currency`;

CREATE TABLE `tbl_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_currency` */

insert  into `tbl_currency`(`id`,`description`) values (1,'AFN'),(2,'EUR'),(3,'ALL'),(4,'DZD'),(5,'USD'),(7,'AOA'),(8,'XCD'),(9,'AAD'),(10,'XCD'),(11,'ARS'),(12,'AMD'),(13,'AWG'),(14,'AUD'),(16,'AZN'),(17,'BSD'),(18,'BHD'),(19,'BDT'),(20,'BBD'),(21,'BYN'),(23,'BZD'),(24,'XOF'),(25,'BMD'),(26,'BTN'),(27,'BOB'),(29,'BAM'),(30,'BWP'),(31,'NOK'),(32,'BRL'),(34,'BND'),(35,'BGN'),(36,'XOF'),(37,'BIF'),(38,'KHR'),(39,'XAF'),(40,'CAD'),(41,'CVE'),(42,'KYD'),(43,'XAF'),(44,'XAF'),(45,'CLP'),(46,'CNY'),(47,'AUD'),(48,'AUD'),(49,'COP'),(50,'KMF'),(51,'XAF'),(52,'CDF'),(53,'NZD'),(54,'CRC'),(55,'XOF'),(56,'HRK'),(57,'CUP'),(58,'ANG'),(60,'CZK'),(61,'DKK'),(62,'DJF'),(63,'XCD'),(64,'DOP'),(66,'EGP'),(68,'XAF'),(69,'ERN'),(71,'ETB'),(72,'FKP'),(73,'DKK'),(74,'FJD'),(78,'XPF'),(80,'XAF'),(81,'GMD'),(82,'GEL'),(84,'GHS'),(85,'GIP'),(87,'DKK'),(88,'XCD'),(91,'GTQ'),(92,'GBP'),(93,'GNF'),(94,'XOF'),(95,'GYD'),(96,'HTG'),(97,'AUD'),(99,'HNL'),(100,'HKD'),(101,'HUF'),(102,'ISK'),(103,'INR'),(104,'IDR'),(105,'IRR'),(106,'IQD'),(108,'GBP'),(109,'ILS'),(111,'JMD'),(112,'JPY'),(113,'GBP'),(114,'JOD'),(115,'KZT'),(116,'KES'),(117,'AUD'),(118,'KPW'),(119,'KRW'),(121,'KWD'),(122,'KGS'),(123,'LAK'),(125,'LBP'),(126,'LSL'),(127,'LRD'),(128,'LYD'),(129,'CHF'),(132,'MOP'),(133,'MKD'),(134,'MGA'),(135,'MWK'),(136,'MYR'),(137,'MVR'),(138,'XOF'),(142,'MRO'),(143,'MUR'),(145,'MXN'),(147,'MDL'),(149,'MNT'),(151,'XCD'),(152,'MAD'),(153,'MZN'),(154,'MMK'),(155,'NAD'),(156,'AUD'),(157,'NPR'),(159,'ANG'),(160,'XPF'),(161,'NZD'),(162,'NIO'),(163,'XOF'),(164,'NGN'),(165,'NZD'),(166,'AUD'),(168,'NOK'),(169,'OMR'),(170,'PKR'),(172,'ILS'),(173,'PAB'),(174,'PGK'),(175,'PYG'),(176,'PEN'),(177,'PHP'),(178,'NZD'),(179,'PLN'),(182,'QAR'),(184,'RON'),(185,'RUB'),(186,'RWF'),(188,'SHP'),(189,'XCD'),(190,'XCD'),(193,'XCD'),(194,'WST'),(196,'STD'),(197,'SAR'),(198,'XOF'),(199,'RSD'),(200,'RSD'),(201,'SCR'),(202,'SLL'),(203,'SGD'),(204,'ANG'),(207,'SBD'),(208,'SOS'),(209,'ZAR'),(210,'GBP'),(211,'SSP'),(213,'LKR'),(214,'SDG'),(215,'SRD'),(216,'NOK'),(217,'SZL'),(218,'SEK'),(219,'CHF'),(220,'SYP'),(221,'TWD'),(222,'TJS'),(223,'TZS'),(224,'THB'),(226,'XOF'),(227,'NZD'),(228,'TOP'),(229,'TTD'),(230,'TND'),(231,'TRY'),(232,'TMT'),(234,'AUD'),(235,'UGX'),(236,'UAH'),(237,'AED'),(238,'GBP'),(241,'UYU'),(242,'UZS'),(243,'VUV'),(244,'VEF'),(245,'VND'),(248,'XPF'),(249,'MAD'),(250,'YER'),(251,'ZMW'),(252,'ZWL');

/*Table structure for table `tbl_customer` */

DROP TABLE IF EXISTS `tbl_customer`;

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer` */

insert  into `tbl_customer`(`id`,`unique_id`,`type`,`product_category`,`product_type`,`job_card_no`,`job_card_title`,`company_product_no`,`product_name_by_customer`,`width`,`width_unit`,`height`,`height_unit`,`part_ply`,`item_type`,`special_instructions`,`perforation`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (85,NULL,NULL,45,NULL,'job card no','job card title','company product no','product name by company','30',18,'50',19,1,3,'special instruction',2,999999999,'2022-06-17 11:06:21',999999999,'2022-06-18 07:06:05'),(86,NULL,NULL,47,75,'card no','card title',NULL,NULL,NULL,NULL,NULL,NULL,5,NULL,NULL,NULL,999999999,'2022-06-18 07:06:31',999999999,'2022-06-18 08:06:02'),(87,NULL,NULL,47,75,'asndj','djcasndj',NULL,'ksdfnkds',NULL,NULL,NULL,NULL,2,NULL,'sad',NULL,999999999,'2022-06-21 12:06:05',NULL,NULL),(88,NULL,NULL,47,75,'asndj','djcasndj',NULL,'ksdfnkds',NULL,NULL,NULL,NULL,3,NULL,'sad',NULL,999999999,'2022-06-21 12:06:14',NULL,NULL),(89,NULL,NULL,46,NULL,'fsdfd','sdfds',NULL,'sdfds','asdsa',18,'asdas',20,2,3,'sdfsd',2,999999999,'2022-06-21 12:06:22',NULL,NULL),(90,NULL,NULL,46,NULL,'fsdfd','sdfds',NULL,'sdfds','asdsa',18,'asdas',20,3,3,'sdfsd',2,999999999,'2022-06-21 12:06:33',NULL,NULL),(91,NULL,NULL,46,NULL,'cvcx','fddxfs',NULL,'czxc',NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,999999999,'2022-06-21 12:06:17',NULL,NULL),(92,NULL,NULL,47,NULL,'ddfds','dffds',NULL,'dfds',NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,999999999,'2022-06-21 12:06:43',NULL,NULL),(93,NULL,NULL,48,NULL,'sadsa','sadsa',NULL,'sadsa',NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,999999999,'2022-06-21 12:06:52',NULL,NULL),(94,NULL,NULL,48,NULL,'vxcv','xcvcx',NULL,'xcvc',NULL,NULL,NULL,NULL,2,NULL,'dadsd',NULL,999999999,'2022-06-21 12:06:56',NULL,NULL),(95,NULL,NULL,46,NULL,'das','assad',NULL,'asdsaas',NULL,NULL,NULL,NULL,2,NULL,'cxcz',NULL,999999999,'2022-06-22 06:06:31',NULL,NULL),(96,NULL,NULL,47,75,'xcxzc','xzcxzc',NULL,'xcz',NULL,NULL,NULL,NULL,2,NULL,'cxzc',NULL,999999999,'2022-06-22 07:06:36',NULL,NULL),(97,NULL,NULL,47,NULL,'sadsa','sdsa',NULL,'asdsa',NULL,NULL,NULL,NULL,2,NULL,'asdas',NULL,999999999,'2022-06-22 07:06:16',NULL,NULL),(98,NULL,NULL,47,NULL,'sadas','saadsa',NULL,'das',NULL,NULL,NULL,NULL,2,NULL,'dsa',NULL,999999999,'2022-06-22 09:06:35',NULL,NULL),(99,NULL,NULL,46,NULL,'dsada','dsa',NULL,'sada',NULL,NULL,NULL,NULL,2,NULL,'zdsf',NULL,999999999,'2022-06-22 09:06:40',NULL,NULL),(100,NULL,NULL,47,NULL,'asdfsf','fsdf',NULL,'ds',NULL,NULL,NULL,NULL,2,NULL,'sdsa',NULL,999999999,'2022-06-22 11:06:15',NULL,NULL),(101,NULL,NULL,47,75,'asdfsd','ddsafd',NULL,'asd',NULL,NULL,NULL,NULL,2,NULL,'asdas',NULL,999999999,'2022-06-22 11:06:24',NULL,NULL),(102,NULL,NULL,47,75,'wdasd','sddas',NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,'sdas',NULL,999999999,'2022-06-22 11:06:41',NULL,NULL),(103,NULL,NULL,48,NULL,'csdfds','sfsd',NULL,'sdfsd',NULL,NULL,NULL,NULL,2,NULL,'dff',NULL,999999999,'2022-06-22 12:06:01',NULL,NULL),(104,NULL,NULL,47,NULL,'dfds','sdfsd',NULL,'dvfds',NULL,NULL,NULL,NULL,2,NULL,'dfsd',NULL,999999999,'2022-06-22 12:06:58',NULL,NULL),(105,NULL,NULL,48,NULL,'aaaaa','aaaaa',NULL,'aaaaa',NULL,NULL,NULL,NULL,2,NULL,'aaaaa',NULL,999999999,'2022-06-23 11:06:29',NULL,NULL),(106,NULL,NULL,47,75,'ttt','ttt',NULL,'ttt',NULL,NULL,NULL,NULL,2,NULL,'ttt',NULL,999999999,'2022-06-24 12:06:08',NULL,NULL),(107,NULL,NULL,47,75,'sdasdsa','dassadsa',NULL,'asdsa',NULL,NULL,NULL,NULL,2,NULL,'sadad',NULL,999999999,'2022-06-24 12:06:36',NULL,NULL),(108,NULL,NULL,46,NULL,'sadsaas','dsa',NULL,'sadsa',NULL,NULL,NULL,NULL,2,NULL,'dadas',NULL,999999999,'2022-06-24 12:06:06',NULL,NULL),(109,NULL,NULL,46,NULL,'zzzz','zzzz',NULL,'zzzz',NULL,NULL,NULL,NULL,2,NULL,'zzzz',NULL,999999999,'2022-06-24 12:06:29',NULL,NULL),(110,NULL,NULL,46,NULL,'asasa','asasa',NULL,'asasa',NULL,NULL,NULL,NULL,2,NULL,'asasa',NULL,999999999,'2022-06-24 12:06:26',NULL,NULL),(111,NULL,NULL,46,NULL,'dasdas','sdasa',NULL,'assdsa',NULL,NULL,NULL,NULL,2,NULL,'sdsa',NULL,999999999,'2022-06-24 12:06:29',NULL,NULL),(112,NULL,NULL,46,NULL,'aabb','aabb',NULL,'aabb',NULL,NULL,NULL,NULL,2,NULL,'aabb',1,999999999,'2022-06-28 11:06:40',NULL,NULL),(113,NULL,NULL,46,NULL,'dddd','dddd','dddd','ddd',NULL,NULL,NULL,NULL,3,NULL,'sda',NULL,999999999,'2022-06-29 10:06:12',NULL,NULL),(114,NULL,NULL,47,75,'asda','assdas',NULL,'sd',NULL,NULL,NULL,NULL,3,NULL,'asdas',NULL,999999999,'2022-06-29 10:06:11',NULL,NULL),(115,NULL,NULL,47,75,'masdjba','bjfbsd',NULL,'fbsdjb',NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,999999999,'2022-06-29 10:06:39',999999999,'2022-06-29 10:06:26'),(116,NULL,NULL,47,NULL,'bjb',',,nkn',NULL,'mbbj',NULL,NULL,NULL,NULL,4,NULL,'nbnb',NULL,999999999,'2022-06-29 10:06:21',NULL,NULL),(117,NULL,NULL,48,NULL,'fds','fds',NULL,'ds',NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,999999999,'2022-06-29 11:06:28',NULL,NULL),(118,NULL,NULL,46,NULL,'asdsa','asdsaa',NULL,'sdasd',NULL,NULL,NULL,NULL,5,NULL,'asda',NULL,999999999,'2022-06-29 11:06:20',999999999,'2022-06-29 11:06:42'),(119,NULL,NULL,47,NULL,'nfksn','aknfk',NULL,'kfdnkd',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-02 10:07:20',NULL,NULL),(120,NULL,NULL,46,NULL,'dsfk','kfbak',NULL,'kddnfkds',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-02 10:07:52',NULL,NULL),(121,NULL,NULL,47,NULL,'nfsdkn','knfksn',NULL,'knfksndf','lsmksdam',18,'fsd',NULL,1,NULL,NULL,NULL,999999999,'2022-07-02 10:07:07',NULL,NULL),(122,NULL,NULL,45,NULL,'nsdjnsna','kndfkasn',NULL,'ndsakdn',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-02 11:07:41',NULL,NULL),(123,NULL,NULL,47,NULL,'nckns','kncknd',NULL,'knsfskdn',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-02 12:07:54',NULL,NULL),(124,NULL,NULL,47,75,'sdkfnkn','nafkan',NULL,'sfnksdn',NULL,NULL,NULL,NULL,1,NULL,'sdfds',NULL,999999999,'2022-07-05 10:07:42',NULL,NULL),(125,NULL,NULL,47,NULL,'bbb','bbb',NULL,'bbb','bbb',NULL,'bbb',NULL,1,NULL,'bbb',NULL,999999999,'2022-07-05 10:07:45',NULL,NULL),(126,NULL,NULL,46,NULL,'no 1','title 1','no 1','cust 1','100',18,'200',20,1,4,'instruction 1',2,999999999,'2022-07-05 12:07:59',NULL,NULL),(127,NULL,NULL,47,75,'dakdn','knkfsdn',NULL,'kndkfs',NULL,NULL,NULL,NULL,1,NULL,'asasd',NULL,999999999,'2022-07-06 11:07:23',NULL,NULL),(128,NULL,NULL,47,NULL,'sss','sss',NULL,'sss',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-11 07:07:02',NULL,NULL),(129,NULL,NULL,47,NULL,'fdsf','dsfds',NULL,'dsfds',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-11 12:07:26',NULL,NULL),(130,NULL,NULL,46,NULL,'czxcz','cxzcz',NULL,'xzczx',NULL,NULL,NULL,NULL,1,NULL,'czc',NULL,999999999,'2022-07-12 10:07:24',NULL,NULL),(131,NULL,NULL,46,NULL,'Test','Test',NULL,'Test',NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,999999999,'2022-07-12 11:07:34',999999999,'2022-07-12 11:07:35'),(132,NULL,NULL,47,NULL,'sss','sss',NULL,'ss',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-12 12:07:14',NULL,NULL),(133,NULL,NULL,47,NULL,'zfs','sfdfs',NULL,'sdfds',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-12 12:07:15',NULL,NULL),(134,NULL,NULL,46,NULL,'za','za',NULL,'za',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-13 07:07:31',NULL,NULL),(135,NULL,NULL,46,NULL,'asa','sas',NULL,'sS',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 09:07:50',NULL,NULL),(136,NULL,NULL,46,NULL,'FFFF','FFFF',NULL,'FFFF',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 09:07:16',NULL,NULL),(137,NULL,NULL,47,NULL,'hhh','hhh',NULL,'hhh',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 09:07:09',NULL,NULL),(138,NULL,NULL,47,75,'cc','cc',NULL,'cc',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 10:07:00',NULL,NULL),(139,NULL,NULL,46,NULL,'zczc','zczdcz',NULL,'zczx',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 11:07:41',NULL,NULL),(140,NULL,NULL,47,NULL,'hhh','hhh',NULL,'hhh',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 11:07:03',NULL,NULL),(141,NULL,NULL,46,NULL,'asda','sad',NULL,'sadsa',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-14 12:07:58',NULL,NULL),(142,NULL,NULL,47,75,'vcvc','vcvc',NULL,'vcvc',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-15 12:07:00',NULL,NULL),(143,NULL,NULL,45,NULL,'efdsf','dsfds',NULL,'dfds',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-18 06:07:42',NULL,NULL),(144,NULL,NULL,47,NULL,'hhh','hhh',NULL,'hhh',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-18 10:07:53',NULL,NULL),(145,NULL,NULL,47,75,'sss','sss','sss','sss',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-18 10:07:33',NULL,NULL),(146,NULL,NULL,45,NULL,'ttt','ttt',NULL,'ttt',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-18 10:07:05',NULL,NULL),(147,NULL,NULL,47,75,'yyy','yyy',NULL,'yyy',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-18 10:07:38',NULL,NULL),(148,NULL,NULL,46,NULL,'czczx','czxc',NULL,'zxcz',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,9,'2022-07-19 11:07:21',NULL,NULL),(149,NULL,NULL,46,NULL,'fdsfsdfds','xdfdfd',NULL,'dsfsdf',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,9,'2022-07-19 11:07:08',NULL,NULL),(150,NULL,NULL,45,NULL,'czxc','czxc',NULL,'czx',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,9,'2022-07-19 12:07:38',NULL,NULL),(151,NULL,NULL,45,NULL,'jjjjj','jjjj',NULL,'jjjj',NULL,NULL,NULL,NULL,2,NULL,'zxvxzv',1,9,'2022-07-19 01:07:32',9,'2022-07-19 01:07:46'),(152,NULL,NULL,47,75,'dada','asdas',NULL,'sadsa',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-19 05:07:35',NULL,NULL),(153,NULL,NULL,48,NULL,'fdsf','dsf',NULL,'sfds',NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,999999999,'2022-07-20 01:07:01',NULL,NULL),(154,NULL,NULL,47,NULL,'dfsdfdsf','dsfdsfsdfsd',NULL,'fdsfdsf',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-07-20 05:07:07',NULL,NULL),(155,NULL,NULL,47,NULL,'fgd','gffd',NULL,'gfd','dfgfd',18,'gfd',20,3,3,'vcbc',1,999999999,'2022-07-20 05:07:53',999999999,'2022-07-20 07:07:55'),(156,NULL,NULL,47,NULL,'hhhh','hhhh',NULL,'hhhh',NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,999999999,'2022-07-20 08:07:27',NULL,NULL),(157,NULL,NULL,46,NULL,'dasd','dsad',NULL,NULL,'sadsa',NULL,NULL,NULL,3,NULL,NULL,NULL,999999999,'2022-07-21 07:07:36',NULL,NULL),(158,NULL,NULL,47,NULL,'kkk','kkk',NULL,'kkkk',NULL,NULL,NULL,NULL,3,NULL,NULL,NULL,999999999,'2022-07-21 07:07:59',NULL,NULL),(159,NULL,NULL,46,NULL,'sadas','sdsad',NULL,'sad',NULL,NULL,NULL,NULL,5,NULL,NULL,NULL,999999999,'2022-07-21 07:07:28',999999999,'2022-07-21 08:07:35'),(160,NULL,NULL,47,NULL,'sdsa','sdasd',NULL,'dsadas','sdfds',18,'dsfd',20,4,1,'ddadasd',1,999999999,'2022-07-21 08:07:07',999999999,'2022-07-21 07:07:22'),(161,NULL,NULL,46,NULL,'vxcvx','cxvxc',NULL,'vxcv',NULL,NULL,'cxvxcv',19,2,1,'cvcx',2,999999999,'2022-07-25 06:07:43',NULL,NULL),(162,NULL,NULL,47,75,'ffgg','ffgg','ffgg','ffgg','ffgg',18,'ffgg',20,2,3,'ffgg',1,999999999,'2022-07-25 12:07:22',NULL,NULL),(163,NULL,NULL,46,NULL,'rt','rt','rt','rt','rt',18,'rt',24,2,4,'rt',1,999999999,'2022-07-25 12:07:57',NULL,NULL),(164,NULL,NULL,47,NULL,'fsfs','fsfs','fsdfsd','fdsf','fdds',18,'fsdf',24,1,2,'sdgs',1,999999999,'2022-07-25 12:07:17',NULL,NULL),(165,NULL,NULL,47,75,'fdsfdsfds','fdsfsd','sdfdsf','dsfdsf','sfsf',18,'fdsfs',20,1,1,'dsfds',1,999999999,'2022-07-25 01:07:27',NULL,NULL),(166,NULL,NULL,46,NULL,'dasd','sadsad','sadsad','sadasd','dsadsa',18,'sadsad',20,2,4,'sdasd',2,999999999,'2022-07-25 11:07:36',999999999,'2022-07-26 03:07:10'),(167,NULL,NULL,49,75,'dsad','dasd','dasd','sad','asdas',18,'dasd',20,2,3,'sadsad',1,999999999,'2022-07-27 06:07:40',999999999,'2022-07-27 06:07:15'),(168,NULL,NULL,46,NULL,'fdsf','fsdf','fsdf','sdf','dsfds',17,'fsdf',24,3,2,'dfds',2,999999999,'2022-07-27 09:07:10',999999999,'2022-07-27 09:07:01'),(169,NULL,NULL,46,NULL,'423423','243423','432','32432','23432',18,'23432',20,2,2,'dfgdf',1,999999999,'2022-07-27 12:07:11',NULL,NULL),(170,NULL,NULL,47,NULL,'dwewer','ewrwe','ewrwerwrwer','erewrw','erewr',18,'rwer',19,3,2,'rwer',1,999999999,'2022-07-27 07:07:00',999999999,'2022-07-27 10:07:18'),(171,NULL,NULL,47,75,'sadsa','sad','dsadas','sada','asdsa',18,'sadsa',20,2,2,'sadsa',2,999999999,'2022-07-27 10:07:55',999999999,'2022-07-27 10:07:24'),(172,NULL,NULL,46,NULL,'dsfds','dsfds','dsfsd','dsf','fdsf',18,'dsfs',19,3,2,'fsd',2,999999999,'2022-07-27 10:07:19',999999999,'2022-07-27 10:07:56'),(173,NULL,NULL,46,NULL,'sAS','AS','asa','As','asdsa',18,'asa',20,1,3,NULL,NULL,999999999,'2022-07-27 11:07:19',NULL,NULL),(174,NULL,NULL,47,75,'AS','asaS','asAS','SAa','sAS',18,'Asa',24,2,4,'AS',1,999999999,'2022-07-27 11:07:37',999999999,'2022-07-27 11:07:18'),(175,NULL,NULL,47,75,'sdasd','das','das','sad','asd',18,'da',20,4,3,'das',1,999999999,'2022-07-27 11:07:09',999999999,'2022-07-29 01:07:33'),(176,NULL,NULL,48,NULL,'307','307','307','307','307',18,'307',19,1,1,'307',2,999999999,'2022-07-29 08:07:52',NULL,NULL),(177,NULL,NULL,47,75,'test 1','test 1','test 1','test 1','test 1',18,'test 1',20,1,3,'test 1',1,999999999,'2022-07-29 10:07:31',NULL,NULL),(178,NULL,NULL,47,75,'mnmn','mnmn','mnmn','mnmn','55',19,'34',24,2,3,'mnmn',2,999999999,'2022-07-29 10:07:11',NULL,NULL),(179,NULL,NULL,47,75,'ccc','ccc','ccc','ccc','ccc',17,'ccc',20,1,2,'ccc',1,999999999,'2022-07-30 10:07:01',NULL,NULL),(180,NULL,NULL,45,NULL,'dasdsa','dasdsd','dsad','asda','asda',17,'dsad',NULL,2,2,'sdsad',1,999999999,'2022-07-30 10:07:14',NULL,NULL),(181,NULL,NULL,46,NULL,'sada','sad','dssa','asd','sad',17,'asdasd',19,1,4,'sad',2,999999999,'2022-07-30 10:07:21',NULL,NULL),(182,NULL,NULL,46,NULL,'eqeqw','wqewq','wewq','ewqeqwe','wqeqwe',17,'eqweweq',20,2,2,'eqwe',2,999999999,'2022-07-30 11:07:19',NULL,NULL),(183,NULL,NULL,47,NULL,'gdfg','dfgfd','gdfg','dfg','dfgd',18,'dfgfd',20,1,4,'rw',1,999999999,'2022-07-31 04:07:43',NULL,NULL),(184,NULL,NULL,46,NULL,'xcvxc','cxvx','vxcv','xcvxc','xvcxv',18,'xcvxc',24,2,4,'zxc',1,999999999,'2022-07-31 05:07:07',NULL,NULL),(185,NULL,NULL,46,NULL,'xcvxc','cxvx','vxcv','xcvxc','xvcxv',18,'xcvxc',24,2,4,'zxc',1,999999999,'2022-07-31 05:07:22',NULL,NULL),(186,NULL,NULL,21,75,'card no','card title','product no','name by customer','35',18,'65',24,2,4,'specla instruction',1,999999999,'2022-07-31 05:07:50',999999999,'2022-08-02 11:08:28'),(187,NULL,NULL,21,76,'sadas','sad','sadsa','sad','sad',24,'dsas',17,1,1,'dsas',2,999999999,'2022-08-03 10:08:31',NULL,NULL),(188,NULL,NULL,21,76,'gsdfsd','fsdf','sdfsd','sdfs','sdfds',18,'fdsf',24,1,2,'dsfs',2,999999999,'2022-08-03 10:08:27',NULL,NULL),(189,NULL,NULL,21,76,'gsdfsd','fsdf','sdfsd','sdfs','sdfds',18,'fdsf',24,1,2,'dsfs',2,999999999,'2022-08-03 10:08:30',NULL,NULL),(190,NULL,NULL,21,76,'gsdfsd','fsdf','sdfsd','sdfs','sdfds',18,'fdsf',24,1,2,'dsfs',2,999999999,'2022-08-03 10:08:37',NULL,NULL),(191,NULL,NULL,21,76,'gsdfsd','fsdf','sdfsd','sdfs','sdfds',18,'fdsf',24,1,2,'dsfs',2,999999999,'2022-08-03 10:08:53',NULL,NULL),(192,NULL,NULL,21,76,'gsdfsd','fsdf','sdfsd','sdfs','sdfds',18,'fdsf',24,1,2,'dsfs',2,999999999,'2022-08-03 10:08:25',NULL,NULL),(193,NULL,NULL,21,NULL,'asd','sada','sdas','dsad','sada',18,'asdsa',20,1,2,'das',2,999999999,'2022-08-03 10:08:33',NULL,NULL),(194,NULL,NULL,21,76,'sdsad','sdas','asdas','sdas','asda',20,'sdsa',20,1,2,'sada',1,999999999,'2022-08-03 11:08:38',NULL,NULL),(195,NULL,NULL,21,NULL,'www','www','www','www','www',19,'www',18,3,2,'www',2,999999999,'2022-08-03 11:08:00',999999999,'2022-08-04 12:08:00'),(196,NULL,NULL,21,80,'dsa','sdsa',NULL,'sadas',NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,999999999,'2022-08-08 08:08:56',NULL,NULL),(197,NULL,NULL,21,80,'dsa','sdsa',NULL,'sadas',NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,999999999,'2022-08-08 08:08:59',999999999,'2022-08-08 08:08:14'),(198,NULL,NULL,22,77,'gsg','fgdf','fdds','sdfsd','dsf',17,'fdds',NULL,11,NULL,'xcz',1,999999999,'2022-08-12 03:08:56',999999999,'2022-08-12 06:08:28'),(199,NULL,NULL,21,77,'xzc','xzc','cxz','zxc','xzcz',18,'zxcz',19,2,2,'xzcz',2,999999999,'2022-08-12 07:08:11',NULL,NULL),(200,NULL,NULL,21,77,'xzc','xzc','cxz','zxc','xzcz',18,'zxcz',19,2,2,'xzcz',2,999999999,'2022-08-12 07:08:27',NULL,NULL),(201,NULL,NULL,21,77,'xzc','xzc','cxz','zxc','xzcz',18,'zxcz',19,2,2,'xzcz',2,999999999,'2022-08-12 07:08:13',999999999,'2022-08-12 07:08:32'),(202,NULL,'Thermal',21,77,'asdsa','asd',NULL,'asd',NULL,NULL,NULL,NULL,1,NULL,'sad',1,999999999,'2022-08-12 07:08:57',NULL,NULL),(203,NULL,'Thermal',21,NULL,'Thermal job 1','Thermal job 1','Thermal job 1','Thermal job 1','2',18,'3',24,5,3,'Thermal job 1',2,999999999,'2022-08-12 11:08:07',999999999,'2022-08-12 11:08:20'),(204,NULL,NULL,21,78,'job card 1 todays','job card 1 todays','job card 1 todays','job card 1 todays','job card 1 todays',17,'job card 1 todays',26,2,2,'job card 1 todays',2,999999999,'2022-08-12 11:08:31',NULL,NULL),(205,NULL,'Thermal',21,76,'xzcz','xzc','xzcxzxzc','xzc','xzc',24,NULL,19,1,3,'gdf',1,999999999,'2022-08-16 06:08:21',NULL,NULL),(206,NULL,'Computer Stationary',22,NULL,'aaaa','aaaa','aaaa','aaaa','aa',24,'aa',17,1,1,'aaa',1,999999999,'2022-08-16 06:08:12',999999999,'2022-08-16 06:08:00'),(207,NULL,NULL,21,78,'fsdf','fdsf',NULL,NULL,'fdssd',20,'sdfdsf',19,1,3,'fdsf',2,999999999,'2022-08-16 10:08:50',999999999,'2022-08-16 10:08:05'),(208,NULL,'Check',22,NULL,'fsdf','fsdf',NULL,NULL,'sf',17,'sdfs',18,1,1,'dsf',2,999999999,'2022-08-16 10:08:15',999999999,'2022-08-16 10:08:59'),(209,NULL,NULL,21,78,'cxv','cxvx','vcxvx','vxcv',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:15',NULL,NULL),(210,NULL,NULL,21,78,'cxv','cxvx','vcxvx','vxcv',NULL,NULL,NULL,NULL,1,NULL,'cv',1,999999999,'2022-08-22 06:08:36',NULL,NULL),(211,NULL,NULL,21,78,'cxv','cxvx','vcxvx','vxcv',NULL,NULL,NULL,NULL,1,NULL,'cv',1,999999999,'2022-08-22 06:08:47',NULL,NULL),(212,'JC/22-23/212',NULL,21,78,'cxv','cxvx','vcxvx','vxcv',NULL,NULL,NULL,NULL,1,NULL,'cv',1,999999999,'2022-08-22 06:08:35',NULL,NULL),(213,'JC/22-23/213','Thermal',21,77,'ds','dsd',NULL,'da',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:13',NULL,NULL),(214,'JC/22-23/214','Thermal',21,77,'ds','dsd',NULL,'da',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:27',NULL,NULL),(215,'JC/22-23/215','Thermal',21,77,'ds','dsd',NULL,'da',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:35',NULL,NULL),(216,'JC/22-23/216','Computer Stationary',21,NULL,'sfzx','sad',NULL,'zc',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:05',NULL,NULL),(217,'JC/22-23/217','Computer Stationary',21,NULL,'sfzx','sad',NULL,'zc',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:16',NULL,NULL),(218,'JC/22-23/218','Computer Stationary',21,NULL,'sfzx','sad',NULL,'zc',NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:49',NULL,NULL),(219,'JC/22-23/219','Check',21,NULL,'czc','zcxzx',NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,999999999,'2022-08-22 06:08:12',NULL,NULL);

/*Table structure for table `tbl_customer_communication` */

DROP TABLE IF EXISTS `tbl_customer_communication`;

CREATE TABLE `tbl_customer_communication` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `customer_id` varchar(30) DEFAULT NULL,
  `communication_name` varchar(55) DEFAULT NULL,
  `communication_phone_no` varchar(55) DEFAULT NULL,
  `communication_email` varchar(55) DEFAULT NULL,
  `communication_fax_no` varchar(55) DEFAULT NULL,
  `communication_set_as_default` tinyint(2) DEFAULT NULL,
  `communication_designation` varchar(55) DEFAULT NULL,
  `communication_department` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_communication` */

insert  into `tbl_customer_communication`(`id`,`unique_id`,`customer_id`,`communication_name`,`communication_phone_no`,`communication_email`,`communication_fax_no`,`communication_set_as_default`,`communication_designation`,`communication_department`) values (2,NULL,'10','Sheela Gautam','022-66700594','sheela.gautam@idbi.co.in','',1,'Manager- Stationary Team',''),(3,NULL,'16','','25810011/25827264','mandalikgasthane@gmail.com','',1,'',''),(4,NULL,'22','Felix Mutinda','254742488940','mutinda@sintel.co.ke','',1,'',''),(5,NULL,'32',' mirza baig','','bmirza515@gmail.com','',1,'',''),(6,NULL,'41','Shameem Khan','','shameem@securabd.com','',1,'',''),(7,NULL,'42','Sachin Mulik','91 99675 34267','sachinvitthal.mulik@gi-de.com','',1,'',''),(8,NULL,'65','','91 8087453169','','',1,'',''),(9,NULL,'79','','+91-831-2498500, 2405506','Principal@git.Edu','',1,'',''),(10,NULL,'80','Karamchandani','9822306314','','',1,'',''),(11,NULL,'91','','022-27546051/ 022-27546059','','',1,'',''),(12,NULL,'96','','PH. 022-27451867/ 022-27456817','','',1,'',''),(13,NULL,'97','',' 022-25975108/ 022-25975109','','',1,'',''),(14,NULL,'100','','0230-2430334 0230-2434696','','',1,'',''),(15,NULL,'102','','02192-268855','','',1,'',''),(16,NULL,'103','',' 022-27654035','','',1,'',''),(17,NULL,'104','',' 022-27572628    022-27576273','','',1,'',''),(18,NULL,'106','','02322227755','','',1,'',''),(19,NULL,'107','','022-22037080/ 022-22057080','','',1,'',''),(20,NULL,'108','','02522-225255/ 02522-225256','','',1,'','');

/*Table structure for table `tbl_customer_delivery_location` */

DROP TABLE IF EXISTS `tbl_customer_delivery_location`;

CREATE TABLE `tbl_customer_delivery_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `delivery_location` text DEFAULT NULL,
  `delivery_location_gst_no` varchar(55) DEFAULT NULL,
  `delivery_location_status` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_delivery_location` */

insert  into `tbl_customer_delivery_location`(`id`,`customer_id`,`delivery_location`,`delivery_location_gst_no`,`delivery_location_status`) values (2,10,'Navi Mumbai',NULL,1),(3,16,'1, TMC, Wagle Ward  Office, Checknaka, Thane (W) 400604',NULL,1),(4,22,'Industrial area, Factory Road, Thika- Kenya',NULL,1),(5,23,'Mahim',NULL,1),(6,31,'28, K. M. Stone Mathura, Chennai - Delhi Hwy, Chhata Rural, Uttar Pradesh 281401',NULL,1),(7,32,'United States',NULL,1),(8,39,'501,WATERFORD BLDG,C-WING,5TH FLOOR,C.D.BARFIWALA MARG,JUHU LANE,ANDHERI (W),MUMBAI - 400056',NULL,1),(9,40,'Mumbai District Central Co-Bank\r\nDN Marg Fort Mumbai Pin-400001',NULL,1),(10,41,'Bangaladesh',NULL,1),(11,42,'1107, Lodha Supremus, Senapati Bapat Road, Lower Parel (W), Mumbai 400013, India',NULL,1),(12,45,'55-56, Shivajinagar, Pune - 411005,, Maharashtra, India','27AAATA1675P1ZD',1),(13,46,'ZAMBAD HEIGHTS, JADHAVMANDI, AURANGABAD - 431001','27AAAAA1642F1ZA',1),(14,47,'CHAROLI BK. VIA LOHEGAON, DISTRICT PUNE - 412105',NULL,1),(15,48,'HEAD OFFICE, SAHAKAR BHAWAN,SAVARKAR CHOWK,, PRASHANT NAGAR., AMBAJOGAI DIST. BEED, 431517','27AAAAA2883L2ZJ',1),(16,49,'AURANGABAD DHANLAXMI COMPALEX, SANT EKNATH, NEAR RANG MANDIR, AURANGABAD','27AAAAA2883L2ZJ',1),(17,50,'Jawahar Road, Amravati - 444601','27AAAAA8191M1ZD',1),(18,51,'Sanskardham Campus, Bhopal - Ghuma, Sanand Road, Ahmedabad - 382115, Gujarat','24AAAJA2664G1ZN',1),(19,52,'HO. SHIVAJI CHOWK, CHIKHLI, DISTT. BULDANA - 443201','27AAAAA2025L2Z1',1),(20,53,'SHOP MUNICIPAL MARKET GANDHI NAGAR NEAR,NO.16,, HALL MARK BUSINESS PLAZA, BANDRA KURLA COMPLEX,, BANDRA (E) , MUMBAI 400051.','27ASGPP0395K1ZA',1),(21,54,'Plot No. 14-B, Morivali, MIDC, Opp. Positive Packaging, Ambernath (West), Dist. Thane-421505','27AAHCA6383Q1ZW',1),(22,55,'CHARTRAPATI SHIVAJI MAHARAJ SANKUL,, KOTHI ROAD, MARKET YARD,, AHMEDNAGAR (M.S) 414001','27AAAAA1660P1ZN',1),(23,56,'PLOT NO. X2, EARTHSPACE, GIDC, ICHCHAAPORE,, HAZIRA ROAD, SURAT – 394510','24AAGCA4964J1ZI',1),(24,57,'Corporate Office, #15, IAT Building,, Near Shri Kamalabai Educational Institutions,, Behind St Xavier\'s College,, Queens Road, Bangalore - 560052','37AAAJB1609G1ZO',1),(25,58,'27th CROSS, 12TH MAIN,, BANASHANKARI 2nd STAGE,, BENGALURU',NULL,1),(26,59,'CAMPUS OF BIRLA INSTITUTE OF TECNOLOGY AND SCIENCE PILANI), 8TH FLOOR, HIRANANDANI KNOWLEDGE PARK,, HIRANANDANI GARDENS, POWAI, MUMBAI, MUMBAI SUBURBAN, MAHARASHTRA - 400076','27AAATB2599R1ZZ',1),(27,60,'13005 – BLDEU CENTRAL STORES, SRI BM PATIL MEDICAL COLLEGE HOSPITAL & RC, ASHRAMA ROAD, VIJAYAPUR – 586103','29AAAAB7055P1Z9',1),(28,61,'845,SHIVAJI NAGAR,PUNE 411004,','27AAATD3141P1ZL',1),(29,62,'CMR ENGINEERING COLLEGE, 1, MEDCHAL RD,, MEDCHAL, KANDLAKOYA, TELANGANA- 501401',NULL,1),(30,63,'5 TH FLOOR, NEW ENGLISH HIGH SCHOOL, RAM MARUTI ROAD, THANE WEST',NULL,1),(31,64,'SECTOR 07, NERUL,, NAVI MUMBAI - 400706',NULL,1),(32,65,'HANUMAN VYAYAM NAGAR ,, NEAR SHRI EKVIRA DEVI TEMPLE, SHREE H. V. P. MANDAL, AMRAVATI, MAHARASHTRA - 444605, M: +91 8087453169','27AAETS3349G2ZA',1),(33,66,'Dapoli 415712, Ratnagiri,Maharashtra',NULL,1),(34,67,'P.O. KRISHI NAGAR, AKOLA-444104, MAHARASHTRA, INDIA.',NULL,1),(35,68,'138/139, HINDUSTAN KOHINOOR COMPLEX,, L.B.S. ROAD, VIKHROLI WEST, MUMBAI - 400083','27AAECE5842M1Z9',1),(36,69,'PLOT NO.A-1/2004, 2005, 3RD PHASE,, GIDC VAPI, DIST- VALSAD, GUJARAT- 396195','24AAECE2238F1Z2',1),(37,70,'MOGADISHU, SOMALIA,AFRICA',NULL,1),(38,71,'(EXAMINATION CENTER), F.C ROAD,PUNE-411004, CONTACT PERSON: DR.VIJAY LABDE, M:+919860127118','27AAATD3141P1ZL',1),(39,72,'(GHRCEM), NAVIN GAT NO. 1200, WAGHOLI, DOMKHEL ROAD, HAVELI, PUNE, MAHARASHTRA -412207 (INDIA), PH: +91-9764429082, K.A. : POOJA MEHROTRA',NULL,1),(40,73,'SHRADDHA PARK CAMPUS, HINGNAWADI LINK ROAD, NAGPUR',NULL,1),(41,74,'G H RAISONI NAGAR, ANJANGAON BARI ROAD,, AMRAVATI - 444701',NULL,1),(42,75,'1St floor, Ramdas Tower,, Above Pedya Maruti mandir,, Jambhali Naka, Kharkar Ali, Thane (W)','27AAAAP0267H2ZN',1),(43,76,'PLOT NO.2, YAMUNA EXPRESSWAY, OPP. BUDDHA INTERNATIONAL CIRCUIT, SECTOR 17A, GREATER NOIDA, UTTAR PRADESH',NULL,1),(44,78,'Gate No. 57/1 Shrisoli Road, Mohadi, Jalgaon - 425002',NULL,1),(45,79,'\"JNANA GANGA\" UDYAMBAG,, BELAGAVI - 590008, KARNATAKA, INDIA',NULL,1),(46,80,'Bohari Ali, Someshwar Path, Rameshwar Chouk, Raviwar Peth, Pune, Maharashtra 411002','07AAAFB2878F1ZL',1),(47,82,NULL,'27AAAAP0267H2ZN',1),(48,83,'1ST FLOOR, MOTUMAL DANDUMAL KALRO TRUST NASHIK,, CITY SURVEY NO.5869, A/3-1B, K.N.KELA ROAD, PANCHVATI,, KARANJA, NASHIK 422 003','27AAAAP0267H2ZN',1),(49,85,'GADGE NAGAR, AMRAVATI - 444603, PH.: 0721-2660127 (O). 0721-2660188 (P)',NULL,1),(50,86,'NEAR MANGALWARI BAZAR,, SADAR, NAGPUR - 440001',NULL,1),(51,87,'VMV Road, Siddhivinayak Nagar,, Amravati, Maharashtra - 444604','27NGPG01664F1D7',1),(52,88,'Shop No. 1, Vishram Co-op. Hsg. Society, Vitawa, Kalwa, Thane','27AAAAP0267H2ZN',1),(53,89,'Plot No. 80, Sector No. 5,, Koparkhairne, Navi Mumbai','27AAAAP0267H2ZN',1),(54,91,'SECTOR NO. 17, DNYAN VIKAS SANSTHA, VIDYALAYA, KOPARKHAIRNE VILLAGE,, NAVI MUMBAI 400709','27AAAAP0267H2ZN',1),(55,92,'Shop No.S-10, S-11, S-12, Ground Floor,Kavlekar Tower Co-op. Hsg. Society Ltd.,, Chalta No.66, Xim Khorlim, Ansabhat,, PT Sheet No.131, Tal. Bardez,Mapusa, Goa - 403507.','30AAAAP0267H1Z1',1),(56,93,'CONGRESS BHAVAN BUILDING, , 1ST FLOOR, MURBAD, THANE - 421401','27AAAAP0267H2ZN',1),(57,94,'HEMENDRA SHOPPING CENTRE,, 1ST FLOOR, GOKHALE ROAD,, NAUPADA, THANE - 400602','27AAAAP0267H2ZN',1),(58,95,'Shop No. 1-2, Dev Srushti Building,, Navade Phata, Opp. Navade Grampanchayat, Dist. Raigad, Navade','27AAAAP0267H2ZN',1),(59,96,'GB-NEA-107, SAI ARCADE, GROUND FLOOR,, OPP. PANVEL BUS STAND, NEAR LIFE LINE HOSPITAL,, PANVEL, DIST. RAIGAD-410206','27AAAAP0267H2ZN',1),(60,97,'SHOP NO. 1 & 2, GROUND FLOOR, R-PLAZIA,, NEAR SWASTIK RIGALIA, KAVESAR,, GHODBUNDER ROAD, WAGHBIL, THANE-400615','27AAAAP0267H2ZN',1),(61,98,'Shop No. 8, 9, 32, C-Block, Shreeji Building, Katrap Gaon,, Badlapur (East) - 421503.','27AAAAP0267H2ZN',1),(62,99,'PLOT NO 320, TTC INDUSTRIAL AREA,, RABALE,NEAR VRUSHALI HOTEL, NAVI MUMBAI','27AAAAP0267H2ZN',1),(63,100,'Devki Building, Adat Peth, Main Road,, Near Bargale Hospital, Ichalkaranji-416115','27AAAAP0267H2ZN',1),(64,101,'Pyara-Deck Building Gala No. 5 & 6, Opp., Birla College, Mhada, Plot No. C - 1, S.No., 42A, Tal - Kalyan, Dist. Thane','27AAAAP0267H2ZN',1),(65,102,'SHOP NO.3 , GROUND FLOOR, JAGANNATH COMPLEX,, SURVEY NO.378(P), CTS NO.3879,3880 HOUSE NO.64,65, BHANVAJ VILLAGE, KHOPOLI, TAL.KHALPUR, DIST-RAIGAD-410203,','27AAAAP0267H2ZN',1),(66,103,'Central Facility Building,, A.P.M.C. Market, Sector-19,, Vashi, Navi Mumbai - 400709','27AAAAP0267H2ZN',1),(67,104,'Yamunai Apartment, 1st Floor, Plot No., D-10C, / D-10D, Sector-29, Agroli Gaon,, Belapur, Navi Mumbai - 400614','27AAAAP0267H2ZN',1),(68,105,'HALL NO. 1 & 2, SHREE VINAYAK BUILDING,, 1ST FLOOR, SARVODAYA COMPLEX,, BHAYANDAR (E','27AAAAP0267H2ZN',1),(69,106,'Block No. 251/1A, Galli No. 9, House No 21000094, City Survey No. 1126/A, Subhash Road,, Jaisingpur, Shirol, Kolhapur-416101.','27AAAAP0267H2ZN',1),(70,107,'SHOP NO. 07 ON GROUND FLOOR & 7 & 7A, ON FIRST FLOOR, EARTH BAUG,, 116, PRINCESS STREET MUMBAI - 400002','27AAAAP0267H2ZN',1),(71,108,'A-101, PRESIDENT PLAZA, SHIVAJI CHOWK,, BHIWANDI, DIST. THANE - 421302','27AAAAP0267H2ZN',1),(72,109,'Rajasthan',NULL,1),(73,110,'P.L. LOKHANDE MARG, \r\nCHEMBUR, MUMBAI 400089',NULL,1);

/*Table structure for table `tbl_customer_excise_bus_posting_group` */

DROP TABLE IF EXISTS `tbl_customer_excise_bus_posting_group`;

CREATE TABLE `tbl_customer_excise_bus_posting_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_excise_bus_posting_group` */

insert  into `tbl_customer_excise_bus_posting_group`(`id`,`description`) values (1,'General'),(2,'Exempt'),(3,'Export'),(4,'Goverment'),(5,'import'),(6,'small scale industry');

/*Table structure for table `tbl_customer_export_trade` */

DROP TABLE IF EXISTS `tbl_customer_export_trade`;

CREATE TABLE `tbl_customer_export_trade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `currency_code` varchar(55) DEFAULT NULL,
  `vat_registration_no` varchar(55) DEFAULT NULL,
  `company_name` varchar(55) DEFAULT NULL,
  `name_of_party` varchar(55) DEFAULT NULL,
  `product` varchar(55) DEFAULT NULL,
  `box_no` varchar(55) DEFAULT NULL,
  `size` varchar(55) DEFAULT NULL,
  `country` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_export_trade` */

insert  into `tbl_customer_export_trade`(`id`,`customer_id`,`currency_code`,`vat_registration_no`,`company_name`,`name_of_party`,`product`,`box_no`,`size`,`country`) values (1,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,22,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'239'),(5,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_customer_gen_bus_posting_group` */

DROP TABLE IF EXISTS `tbl_customer_gen_bus_posting_group`;

CREATE TABLE `tbl_customer_gen_bus_posting_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_gen_bus_posting_group` */

insert  into `tbl_customer_gen_bus_posting_group`(`id`,`description`) values (1,'LOCAL'),(2,'Export/Import'),(3,'inter company'),(4,'inter state');

/*Table structure for table `tbl_customer_general` */

DROP TABLE IF EXISTS `tbl_customer_general`;

CREATE TABLE `tbl_customer_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(25) DEFAULT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_no` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `vender_code` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `post_box_no` varchar(255) DEFAULT NULL,
  `state_code` varchar(255) DEFAULT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `sales_person` varchar(255) DEFAULT NULL,
  `office_assistant` varchar(255) DEFAULT NULL,
  `co_ordinator` varchar(255) DEFAULT NULL,
  `attention` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=111 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_general` */

insert  into `tbl_customer_general`(`id`,`unique_id`,`customer_name`,`customer_no`,`company`,`vender_code`,`customer_address`,`city`,`post_box_no`,`state_code`,`country_code`,`sales_person`,`office_assistant`,`co_ordinator`,`attention`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'CU/1','sathyam Paper Products','C0001/DIPL','47',NULL,'Sathyam Paper Products\r\nPalanganatham\r\nMadurai',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-05 11:04:51',NULL,NULL),(3,'CU/3','ADLABS ENTERTAINMENT ltd','C0002/DIPL','47','02','sangewadi opp pune express highway','338','13','12','103','20','Ms Shamal','Ms Akshata','Deepali Madam',9,'2023-04-06 09:04:49',25,'2023-04-10 06:04:24'),(4,'CU/4','ICICI BANK LTD','C0003/DIPL','47','03',NULL,'329','72','12','103','20','SHAMAL RAUL','AKSHATA CHAVAN','SANNAM SHIRISHA',28,'2023-04-06 10:04:13',NULL,NULL),(5,'CU/5','Sheshasaii business','c00123','47','001','Lalwani Industrial Estate, Seshaasai Business Forms (P) Ltd 9, 14, Katrak Rd, Wadala, Mumbai, Maharashtra 400031','329','12345','12','103','20','shamal','akshata','deepali',28,'2023-04-10 05:04:59',9,'2023-04-10 06:04:08'),(6,'CU/6','AEON SOFTWARE PVT LTD','C0004/DIPL','47','04','B-210, EVEREST GRANDE, SHANTI NAGAR,MIDC, MAHAKALI CAVES ROAD, ANDHERI(E),','329','93','12','103','20','SHAMAL RAUL','AKSHATA CHAVAN','ANKITA MADAM',25,'2023-04-10 06:04:11',NULL,NULL),(9,'CU/9','WORLDLINE INDIA PRIVATE LIMITED','C0005/DIPL','47','05','RAJASKARAN TECH PACK (LOGITECH PARK),2ND FLOOR, TOWER I, PHASE II, SAKINAKA,M.V.ROAD, ANDHERI (EAST), MUMBAI-400072.','329','72','12','103','20','SHAMAL RAUL','AKSHATA CHAVAN','Gaurav Tawade',25,'2023-04-10 06:04:16',NULL,NULL),(10,'CU/10','IDBI','C0007/DIPL','47',NULL,'The DGM  (Stationery Dept.), \r\nIDBI Bank – CPU, Annex Building, Sector-11, \r\nCBD Belapur, Navi Mumbai – 400614',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-10 08:04:08',35,'2023-04-15 09:04:47'),(11,'CU/11','Shree Narayan Guru','C0008/SSSL','49',NULL,'Central School, Sree Narayan Nagar, P.L. Lokhande Marg, Chembur, Mumbai 400089',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-10 09:04:44',NULL,NULL),(12,'CU/12','SNG International School','C0009/SSSL','49',NULL,'Navi Mumbai',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-10 09:04:50',NULL,NULL),(13,'CU/13','Priyadarshini J. L. College of Engineering','1','49',NULL,'846, New Nandanvan Colony, Nandanvan, Nagpur, Maharashtra 440009','333',NULL,'12','103','39',NULL,NULL,NULL,39,'2023-04-12 02:04:01',NULL,NULL),(14,'CU/14','G. H. Raisoni University','2','49',NULL,'Anjangaon Bari Rd, Badnera, Amravati, Maharashtra 444701','315',NULL,'12','103','39',NULL,NULL,NULL,39,'2023-04-12 02:04:13',NULL,NULL),(15,'CU/15','MCT CARDS','C0010/DIPL','47',NULL,'MCT CARDS\r\nPLASTIC CARDS TRADING MANIPAL PLOT NO 22 A\r\nSHIVALLI\r\nINDUSTRIAL AREA MANIPAL UDUPI 576104\r\nKARNATAK , INDIA \r\nM: 9663373209',NULL,NULL,NULL,NULL,'20',NULL,NULL,'ARJUN PADIYAR',25,'2023-04-13 10:04:05',NULL,NULL),(16,'CU/16','Mandalik Gas Service','C0011/DIPL','47',NULL,'1, TMC, Wagle Ward  Office, Checknaka, Thane (W) 400604','344',NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-18 07:04:04',NULL,NULL),(17,'CU/17','ARCOM','C0012/DIPL','47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-18 08:04:11',NULL,NULL),(18,'CU/18','ARCOM','C0012/DIPL','47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-18 08:04:13',NULL,NULL),(19,'CU/19','REAL GOLD','C0013/DIPL','47',NULL,'REAL GOLD GROUP OF COMPANY. MOGADISHO,SOMALIA,AFRICA CONT-MR MOHAMED HUSSEIN-252615581387',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-04-18 12:04:19',25,'2023-04-18 12:04:53'),(20,'CU/20','Arati Gavade','8657465469','47',NULL,'In-Solutions Global Limited\r\n601/602/618, 6th Floor, Palm Spring,\r\nLink Road, Malad (West),\r\nMumbai – 400 064, Maharashtra, India.','329',NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-04-19 05:04:30',NULL,NULL),(21,'CU/21','IN-SOLUTION  Global Limited','0','47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-04-19 05:04:53',NULL,NULL),(22,'CU/22','Sintel','C0014/DIPL','47',NULL,'Industrial Area, Factory Road, Thika-Kenya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-19 07:04:24',NULL,NULL),(23,'CU/23','Hawkins Cookers Ltd.','C0016/DIPL','47',NULL,'New Udyog Mandal-II, Pitambar Lane, Mahim- 400016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-26 10:04:53',NULL,NULL),(24,'CU/24','COSMOS CO.OP BANK LTD','C0018/DIPL','47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-04-27 11:04:44',NULL,NULL),(25,'CU/25','DIGITAL CONSORITUM','C0019/SSSL','49',NULL,'HYDRABAD',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-27 11:04:30',NULL,NULL),(26,'CU/26','SHRI VILE PARLE KELVANI MANDAL\'S SBM POLYTECHNIC','C0020/SSSL','49',NULL,'SHRI BHAGUBAI MAFATLAL POLYTECHNIC, IRLA, NATKKAR RAM GANESH GADKARI MARG, VILE PARLE WEST, MUMBAI - 400056',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-04-28 12:04:29',NULL,NULL),(27,'CU/27','Maximus Infoware Pvt Ltd','C0021/DIPL','47',NULL,'Cybertech House, Plot No.B-63/64/65,Road No 21/34,J.B Sawant Marg,MIDC Wagle estate,Thane 400604. Thane, Maharashtra 400604',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-05-02 09:05:52',25,'2023-05-02 10:05:26'),(28,'CU/28','ELEYE ENTERTAINMENT','C0022/DIPL','47',NULL,'ELEYE ENTERTAINMENT, GAR ALI, JORHAT, Jorhat,\r\nAssam, 78500',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-05-03 12:05:45',NULL,NULL),(29,'CU/29','DBS BANK','C0023/DIPL','47',NULL,'DBS BANK \r\nKARUR LOCATION',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-05-05 12:05:18',NULL,NULL),(30,'CU/30','Maharashtra Rajya Anganwadi Karmachari Sangh','C0024/DIPL','47',NULL,'Nilkanth Apt., Opp to Dr. Bhadkamkar  Hospital, Mahagiri, Thane','344','400601',NULL,NULL,'44',NULL,NULL,NULL,35,'2023-05-06 09:05:50',NULL,NULL),(31,'CU/31','Sanskriti University','SS/001','49',NULL,'28, K. M. Stone Mathura, Chennai - Delhi Hwy, Chhata Rural, Uttar Pradesh','272','281401','23','103','39','Varsha','Varsha','Swapnil Sawant',41,'2023-05-08 10:05:42',NULL,NULL),(32,'CU/32','Global Choice Incorporation','C0025/DIPL','47',NULL,'4535 W Addison St, Chicago, IL 60641, United States, Chicago, Illinois, United States 60641',NULL,NULL,NULL,NULL,'23',NULL,NULL,NULL,35,'2023-05-09 05:05:34',NULL,NULL),(33,'CU/33','MEDI-CAPS UNIVERSITY','1112','49',NULL,'AB Rd, Pigdamber, Rau, Indore, Madhya Pradesh 453331','283','453331','11','103','39',NULL,NULL,NULL,39,'2023-05-09 10:05:13',NULL,NULL),(34,'CU/34','MEDI-CAPS UNIVERSITY','1112','49',NULL,'AB Rd, Pigdamber, Rau, Indore, Madhya Pradesh 453331','283','453331','11','103','39',NULL,NULL,NULL,39,'2023-05-09 10:05:13',NULL,NULL),(35,'CU/35','MEDI-CAPS UNIVERSITY','1112','49',NULL,'AB Rd, Pigdamber, Rau, Indore, Madhya Pradesh 453331','283','453331','11','103','39',NULL,NULL,NULL,39,'2023-05-09 10:05:14',NULL,NULL),(36,'CU/36','MEDI-CAPS UNIVERSITY','1112','49',NULL,'AB Rd, Pigdamber, Rau, Indore, Madhya Pradesh 453331','283','453331','11','103','39',NULL,NULL,NULL,39,'2023-05-09 10:05:15',NULL,NULL),(37,'CU/37','MEDI-CAPS UNIVERSITY','1112','49',NULL,'AB Rd, Pigdamber, Rau, Indore, Madhya Pradesh 453331','283','453331','11','103','39',NULL,NULL,NULL,39,'2023-05-09 10:05:15',NULL,NULL),(38,'CU/38','MEDI-CAPS UNIVERSITY','1112','49',NULL,'AB Rd, Pigdamber, Rau, Indore, Madhya Pradesh 453331','283','453331','11','103','39',NULL,NULL,NULL,39,'2023-05-09 10:05:15',NULL,NULL),(39,'CU/39','SAREX CHEMICALS','C0026/DIPL','47',NULL,'N-232,MIDC,KUMBAVALI NAKA,BOISAR,TARAPUR,THANE-401506,INDIA','330','401506','12','103','20','akshata',NULL,NULL,25,'2023-05-10 06:05:32',NULL,NULL),(40,'CU/40','MUMBAI DISTRICT BANK','C0027/DIPL','47',NULL,'Mumbai District Central Co-Bank\r\nDN Marg Fort Mumbai Pin-400001','330','400001',NULL,'103','20',NULL,NULL,NULL,28,'2023-05-10 08:05:27',NULL,NULL),(41,'CU/41','Secura Bangaladesh','C0027/dipl','47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-11 07:05:21',NULL,NULL),(42,'CU/42','Giesecke and Devrient MS India Pvt Ltd','C0029/DIPL','47',NULL,'1107, Lodha Supremus, Senapati Bapat Road, Lower Parel (W), Mumbai 400013. India',NULL,NULL,NULL,NULL,'20',NULL,NULL,NULL,35,'2023-05-13 05:05:20',NULL,NULL),(43,'CU/43','Colorplast Systems Pvt. Ltd.','0','47',NULL,'Colorplast Systems Pvt. Ltd.  C-8, Sector-65, Noida, UP',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taresh Garg',25,'2023-05-13 05:05:33',NULL,NULL),(44,'CU/44','Colorplast Systems Pvt. Ltd.','0','47',NULL,'Colorplast Systems Pvt. Ltd.  C-8, Sector-65, Noida, UP',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Taresh Garg',25,'2023-05-13 05:05:33',NULL,NULL),(45,'CU/45','AISSMSS COLLEGE','C0030/SSSL','49','0000','55-56, Shivajinagar, Pune -','330','411005','12','103','39','VEDA BHATKAR',NULL,NULL,35,'2023-05-13 06:05:11',NULL,NULL),(46,'CU/46','AJANTHA URBAN CO-OP. BANK LTD.','C0031/SSSL','49',NULL,'ZAMBAD HEIGHTS, JADHAVMANDI, AURANGABAD - 431001',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 06:05:56',35,'2023-05-13 06:05:44'),(47,'CU/47','AJEENKYA D Y PATIL UNIVERSITY','C0032/SSSL','49',NULL,'CHAROLI BK. VIA LOHEGAON, DISTRICT PUNE - 412105','337',NULL,NULL,NULL,'39',NULL,NULL,NULL,35,'2023-05-13 06:05:33',NULL,NULL),(48,'CU/48','AMBAJOGAI PEOPLES CO-OP BANK','C0033/SSSL','49',NULL,'HEAD OFFICE, SAHAKAR BHAWAN,SAVARKAR CHOWK,, PRASHANT NAGAR., AMBAJOGAI DIST. BEED, 431517',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 06:05:08',NULL,NULL),(49,'CU/49','AMBAJOGAI PEOPLES CO-OP BANK - AURANGABAD','C0034/SSSL','49',NULL,'AURANGABAD DHANLAXMI COMPALEX, SANT EKNATH, NEAR RANG MANDIR, AURANGABAD',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 06:05:45',NULL,NULL),(50,'CU/50','Amravati Zilla Mahila Sahakari Bank Ltd., Amravati','C0035/SSSL','49',NULL,'Jawahar Road, Amravati - 444601',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 06:05:30',NULL,NULL),(51,'CU/51','Anant National University','C0036/SSSL','49',NULL,'Sanskardham Campus, Bhopal - Ghuma, Sanand Road, Ahmedabad - 382115, Gujarat',NULL,NULL,NULL,NULL,'38',NULL,NULL,NULL,35,'2023-05-13 06:05:11',35,'2023-05-13 07:05:20'),(52,'CU/52','ANURADHA URBAN CO-OPERATIVE. BANK LTD.','C0037/SSSL','49',NULL,'HO. SHIVAJI CHOWK, CHIKHLI, DISTT. BULDANA - 443201',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-13 07:05:12',NULL,NULL),(53,'CU/53','APEKSHA STATIONERY & XEROX','C0038/SSSL','49',NULL,'SHOP MUNICIPAL MARKET GANDHI NAGAR NEAR,NO.16,, HALL MARK BUSINESS PLAZA, BANDRA KURLA COMPLEX,, BANDRA (E) , MUMBAI 400051.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 07:05:53',NULL,NULL),(54,'CU/54','Arabian Petroleum Ltd.(DRS.)','C0039/SSSL','49',NULL,'Plot No. 14-B, Morivali, MIDC, Opp. Positive Packaging, Ambernath (West), Dist. Thane-421505',NULL,NULL,NULL,NULL,'41',NULL,NULL,NULL,35,'2023-05-13 07:05:07',NULL,NULL),(55,'CU/55','ASHOK SAHAKARI BANK LTD','C0040/SSSL','49',NULL,'CHARTRAPATI SHIVAJI MAHARAJ SANKUL,, KOTHI ROAD, MARKET YARD,, AHMEDNAGAR (M.S) 414001',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-13 07:05:25',NULL,NULL),(56,'CU/56','AURO UNIVERSITY','C0041/SSSL','49',NULL,'PLOT NO. X2, EARTHSPACE, GIDC, ICHCHAAPORE,, HAZIRA ROAD, SURAT – 394510',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 07:05:29',NULL,NULL),(57,'CU/57','B.E.S.T INNOVATION UNIVERSITY','C0042/SSSL','49',NULL,'Corporate Office, #15, IAT Building,, Near Shri Kamalabai Educational Institutions,, Behind St Xavier\'s College,, Queens Road, Bangalore - 560052',NULL,NULL,NULL,NULL,'40',NULL,NULL,NULL,35,'2023-05-13 08:05:34',NULL,NULL),(58,'CU/58','B.N.M. INSTITUTE OF TECHNOLOGY','C0043/SSSL','49',NULL,'27th CROSS, 12TH MAIN,, BANASHANKARI 2nd STAGE,, BENGALURU',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 08:05:21',NULL,NULL),(59,'CU/59','BITS SCHOOL OF MANAGEMENT','C0044/SSSL','49',NULL,'CAMPUS OF BIRLA INSTITUTE OF TECNOLOGY AND SCIENCE PILANI), 8TH FLOOR, HIRANANDANI KNOWLEDGE PARK,, HIRANANDANI GARDENS, POWAI, MUMBAI, MUMBAI SUBURBAN, MAHARASHTRA - 400076',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 08:05:11',NULL,NULL),(60,'CU/60','BLDE','C0045/SSSL','49',NULL,'13005 – BLDEU CENTRAL STORES, SRI BM PATIL MEDICAL COLLEGE HOSPITAL & RC, ASHRAMA ROAD, VIJAYAPUR – 586103',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 08:05:04',NULL,NULL),(61,'CU/61','BRIHAN MAHARASHTRA COLLEGE OF COMMERCE','C0046/SSSL','49',NULL,'845,SHIVAJI NAGAR,PUNE 411004,',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 08:05:51',NULL,NULL),(62,'CU/62','CMR ENGINEERING COLLEGE','C0047/SSSL','49',NULL,'CMR ENGINEERING COLLEGE, 1, MEDCHAL RD,, MEDCHAL, KANDLAKOYA, TELANGANA- 501401',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 08:05:38',NULL,NULL),(63,'CU/63','COUNCIL OF EDUCATION DEVELOPMENT PROGRAMMES PVT LTD','C0048/SSSL','49',NULL,'5 TH FLOOR, NEW ENGLISH HIGH SCHOOL, RAM MARUTI ROAD, THANE WEST',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:49',NULL,NULL),(64,'CU/64','D Y PATIL UNIVERSITY','C0049/SSSL','49',NULL,'SECTOR 07, NERUL,, NAVI MUMBAI - 400706',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:22',NULL,NULL),(65,'CU/65','DEGREE COLLEGE OF PHYSICAL EDUCATION, AMRAVATI','C0050/SSSL','49',NULL,'HANUMAN VYAYAM NAGAR ,, NEAR SHRI EKVIRA DEVI TEMPLE, SHREE H. V. P. MANDAL, AMRAVATI, MAHARASHTRA - 444605, M: +91 8087453169',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:09',NULL,NULL),(66,'CU/66','Dr. BALASAHEB SAWANT KONKAN KRISHI VIDYAPEETH','C0052/SSSL','49',NULL,'Dapoli 415712, Ratnagiri,Maharashtra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:18',NULL,NULL),(67,'CU/67','Dr. Panjabrao Deshmukh Krishi Vidyapeeth','C0053/SSSL','49',NULL,'P.O. KRISHI NAGAR, AKOLA-444104, MAHARASHTRA, INDIA.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:06',35,'2023-05-13 09:05:29'),(68,'CU/68','EASYTECH INNOVATIONS PVT LTD','C0054/SSSL','49',NULL,'138/139, HINDUSTAN KOHINOOR COMPLEX,, L.B.S. ROAD, VIKHROLI WEST, MUMBAI - 400083',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:50',NULL,NULL),(69,'CU/69','ELVI BARDAHL INDIA PVT. LTD.','C0055/SSSL','49',NULL,'PLOT NO.A-1/2004, 2005, 3RD PHASE,, GIDC VAPI, DIST- VALSAD, GUJARAT- 396195',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:32',NULL,NULL),(70,'CU/70','EMPIRE TECHNICAL SOLUTIONS(ETS) LTD','C0056/SSSL','49',NULL,'MOGADISHU, SOMALIA,AFRICA',NULL,NULL,NULL,NULL,'41',NULL,NULL,NULL,35,'2023-05-13 09:05:11',35,'2023-05-13 09:05:20'),(71,'CU/71','FERGUSSON COLLEGE','C0057/SSSL','49',NULL,'(EXAMINATION CENTER), F.C ROAD,PUNE-411004, CONTACT PERSON: DR.VIJAY LABDE, M:+919860127118',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:00',NULL,NULL),(72,'CU/72','G H RAISONI ENGINEERING & MANAGEMENT - PUNE','C0058/SSSL','49',NULL,'GHRCEM), NAVIN GAT NO. 1200, WAGHOLI, DOMKHEL ROAD, HAVELI, PUNE, MAHARASHTRA -412207 (INDIA), PH: +91-9764429082, K.A. : POOJA MEHROTRA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:41',NULL,NULL),(73,'CU/73','G H RAISONI INSTO ENGINEERING & TECHNOLOGY -NAGPUR','C0059/SSSL','49',NULL,'SHRADDHA PARK CAMPUS, HINGNAWADI LINK ROAD, NAGPUR',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:24',NULL,NULL),(74,'CU/74','G H RAISONI UNIVERSITY - AMRAVATI','C0060/SSSL','49',NULL,'G H RAISONI NAGAR, ANJANGAON BARI ROAD,, AMRAVATI - 444701',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:02',NULL,NULL),(75,'CU/75','G P Parsik Sahakari Bank Ltd- Kharkar Ali','C0061/SSSL','49',NULL,'1St floor, Ramdas Tower,, Above Pedya Maruti mandir,, Jambhali Naka, Kharkar Ali, Thane (W)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:37',NULL,NULL),(76,'CU/76','GALGOTIAS UNIVERSITY','C0062/SSSL','49',NULL,'PLOT NO.2, YAMUNA EXPRESSWAY, OPP. BUDDHA INTERNATIONAL CIRCUIT, SECTOR 17A, GREATER NOIDA, UTTAR PRADESH',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:15',NULL,NULL),(77,'CU/77','YASHTECH TRADING LLC','C00238/DIPL','47',NULL,'AL HABTOOR COMPLEX,WH.58, AL QUSAIS INDUTRIAL AREA 3',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-13 09:05:44',NULL,NULL),(78,'CU/78','GH Raisoni Institute of Business Management Jalgaon','C0063/SSSL','49',NULL,'Gate No. 57/1 Shrisoli Road, Mohadi, Jalgaon - 425002',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 06:05:55',NULL,NULL),(79,'CU/79','GOGTE INSTITUTE OF TECHNOLOGY','C0064/SSSL','49',NULL,'\"JNANA GANGA\" UDYAMBAG,, BELAGAVI - 590008, KARNATAKA, INDIA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 06:05:54',NULL,NULL),(80,'CU/80','Bharat Sales Corporation','C00239/DIPL','47',NULL,'Bohari Ali, Someshwar Path, Rameshwar Chouk, Raviwar Peth, Pune, Maharashtra 411002',NULL,NULL,NULL,NULL,'23',NULL,NULL,NULL,35,'2023-05-15 06:05:32',NULL,NULL),(81,'CU/81','Nationwide Paper','C00240/DIPL','47',NULL,'Unit C, Sands Industrial Estate, Lane End Rd, High Wycombe HP12 4HH, United Kingdom',NULL,NULL,NULL,NULL,'23',NULL,NULL,NULL,35,'2023-05-15 09:05:47',NULL,NULL),(82,'CU/82','GOPINATH PATIL PARSIK BANK-AIROLI SEC-5','C0065/SSSL','49',NULL,'SHIVSAMARATH SAHAKAI PATHPEDI LTD, GROUND FLOOR,PLOT NO.23A, SECTOR-5,AIROLI,NAVI MUMBAI-400708',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 09:05:47',NULL,NULL),(83,'CU/83','GPATIL PARSIK JANATA SAHAKARI BANK LTD, NASHIK BRANCH,','C0066/SSSL','49',NULL,'1ST FLOOR, MOTUMAL DANDUMAL KALRO TRUST NASHIK,, CITY SURVEY NO.5869, A/3-1B, K.N.KELA ROAD, PANCHVATI,, KARANJA, NASHIK 422 003',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 10:05:06',NULL,NULL),(84,'CU/84','GOVERNMENT COLLEGE OF ENGINEERING, JALGAON','C0067/SSSL','49',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 10:05:51',NULL,NULL),(85,'CU/85','GOVERNMENT POLYTECHNIC, AMRAVATI','C0068/SSSL','49',NULL,'GADGE NAGAR, AMRAVATI - 444603, PH.: 0721-2660127 (O). 0721-2660188 (P)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 10:05:33',NULL,NULL),(86,'CU/86','GOVERNMENT POLYTECHNIC, NAGPUR','C0069/SSSL','49',NULL,'NEAR MANGALWARI BAZAR,, SADAR, NAGPUR - 440001',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 10:05:37',NULL,NULL),(87,'CU/87','Government Vidarbha Institute of Science & Humanities','C0070/SSSL','49',NULL,'VMV Road, Siddhivinayak Nagar,, Amravati, Maharashtra - 444604',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,'2023-05-15 10:05:18',NULL,NULL),(88,'CU/88','GP PARSIK BANK - VITAWA BRANCH','C0071/SSSL','49',NULL,'Shop No. 1, Vishram Co-op. Hsg. Society, Vitawa, Kalwa, Thane',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 10:05:40',NULL,NULL),(89,'CU/89','GP PARSIK SAHAKARI BANK - KOPARKHAIRNE BRANCH','C0072/SSSL','49',NULL,'Plot No. 80, Sector No. 5,, Koparkhairne, Navi Mumbai',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 10:05:32',NULL,NULL),(90,'CU/90','icici bank limited','0','47',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,25,'2023-05-15 10:05:37',NULL,NULL),(91,'CU/91','GP PARSIK SAHAKARI BANK - KOPARKHAIRNE SECTOR - 17','C0073/SSSL','49',NULL,'SECTOR NO. 17, DNYAN VIKAS SANSTHA, VIDYALAYA, KOPARKHAIRNE VILLAGE,, NAVI MUMBAI 400709',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 10:05:58',35,'2023-05-15 10:05:05'),(92,'CU/92','GP PARSIK SAHAKARI BANK - MAPUSA BRANCH','C0074/SSSL','49',NULL,'Shop No.S-10, S-11, S-12, Ground Floor,Kavlekar Tower Co-op. Hsg. Society Ltd.,, Chalta No.66, Xim Khorlim, Ansabhat,, PT Sheet No.131, Tal. Bardez,Mapusa, Goa - 403507.',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 10:05:50',NULL,NULL),(93,'CU/93','GP PARSIK SAHAKARI BANK - MURBAD BRANCH','C0075/SSSL','49',NULL,'CONGRESS BHAVAN BUILDING, , 1ST FLOOR, MURBAD, THANE - 421401',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 10:05:02',NULL,NULL),(94,'CU/94','GP PARSIK SAHAKARI BANK - NAUPADA BRANCH','C0076/SSSL','49',NULL,'HEMENDRA SHOPPING CENTRE,, 1ST FLOOR, GOKHALE ROAD,, NAUPADA, THANE - 400602',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 10:05:04',NULL,NULL),(95,'CU/95','GP PARSIK SAHAKARI BANK - Navade Branch','C0077/SSSL','49',NULL,'Shop No. 1-2, Dev Srushti Building,, Navade Phata, Opp. Navade Grampanchayat, Dist. Raigad, Navade',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 11:05:50',NULL,NULL),(96,'CU/96','GP PARSIK SAHAKARI BANK - PANVEL','C0078/SSSL','49',NULL,'GB-NEA-107, SAI ARCADE, GROUND FLOOR,, OPP. PANVEL BUS STAND, NEAR LIFE LINE HOSPITAL,, PANVEL, DIST. RAIGAD-410206',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 11:05:00',NULL,NULL),(97,'CU/97','GP PARSIK SAHAKARI BANK - WAGHBIL BRANCH','C0079/SSSL','49',NULL,'SHOP NO. 1 & 2, GROUND FLOOR, R-PLAZIA,, NEAR SWASTIK RIGALIA, KAVESAR,, GHODBUNDER ROAD, WAGHBIL, THANE-400615',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 11:05:03',NULL,NULL),(98,'CU/98','GP PARSIK SAHAKARI BANK- BADLAPUR BRANCH','C0080/SSSL','49',NULL,'Shop No. 8, 9, 32, C-Block, Shreeji Building, Katrap Gaon,, Badlapur (East) - 421503.',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 11:05:24',NULL,NULL),(99,'CU/99','GP PARSIK SAHAKARI BANK- CLEARING DEPARTMENT','C0081/SSSL','49',NULL,'PLOT NO 320, TTC INDUSTRIAL AREA,, RABALE,NEAR VRUSHALI HOTEL, NAVI MUMBAI',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 11:05:44',NULL,NULL),(100,'CU/100','GP PARSIK SAHAKARI BANK- ICHKARNAJI','C0082/SSSL','49',NULL,'Devki Building, Adat Peth, Main Road,, Near Bargale Hospital, Ichalkaranji-416115',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:48',NULL,NULL),(101,'CU/101','GP PARSIK SAHAKARI BANK- KALYAN W. BRANCH','C0083/SSSL','49',NULL,'Pyara-Deck Building Gala No. 5 & 6, Opp., Birla College, Mhada, Plot No. C - 1, S.No., 42A, Tal - Kalyan, Dist. Thane',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:40',NULL,NULL),(102,'CU/102','GP PARSIK SAHAKARI BANK- KHOPOLI BRANCH','C0084/SSSL','49',NULL,'SHOP NO.3 , GROUND FLOOR, JAGANNATH COMPLEX,, SURVEY NO.378(P), CTS NO.3879,3880 HOUSE NO.64,65, BHANVAJ VILLAGE, KHOPOLI, TAL.KHALPUR, DIST-RAIGAD-410203,',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:41',NULL,NULL),(103,'CU/103','GP PARSIK SAHAKARI BANK LTD - A.P.M.C. Branch','C0085/SSSL','49',NULL,'Central Facility Building,, A.P.M.C. Market, Sector-19,, Vashi, Navi Mumbai - 400709',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:15',NULL,NULL),(104,'CU/104','GP PARSIK SAHAKARI BANK LTD - BELAPUR','C0086/SSSL','49',NULL,'Yamunai Apartment, 1st Floor, Plot No., D-10C, / D-10D, Sector-29, Agroli Gaon,, Belapur, Navi Mumbai - 400614',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:19',NULL,NULL),(105,'CU/105','GP PARSIK SAHAKARI BANK LTD - BHAYANDAR BRANCH','C0087/SSSL','49',NULL,'HALL NO. 1 & 2, SHREE VINAYAK BUILDING,, 1ST FLOOR, SARVODAYA COMPLEX,, BHAYANDAR (E',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:06',NULL,NULL),(106,'CU/106','GP PARSIK SAHAKARI BANK LTD - Jaisingpur','C0089/SSSL','49',NULL,'Block No. 251/1A, Galli No. 9, House No 21000094, City Survey No. 1126/A, Subhash Road,, Jaisingpur, Shirol, Kolhapur-416101.',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:47',NULL,NULL),(107,'CU/107','GP PARSIK SAHAKARI BANK LTD - KALBADEVI BRANCH','C0090/SSSL','49',NULL,'SHOP NO. 07 ON GROUND FLOOR & 7 & 7A, ON FIRST FLOOR, EARTH BAUG,, 116, PRINCESS STREET MUMBAI - 400002',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:18',NULL,NULL),(108,'CU/108','GP PARSIK SAHAKARI BANK LTD - BHIWANDI SHIVAJI CHOWK','C0088/SSSL','49',NULL,'A-101, PRESIDENT PLAZA, SHIVAJI CHOWK,, BHIWANDI, DIST. THANE - 421302',NULL,NULL,NULL,NULL,'42',NULL,NULL,NULL,35,'2023-05-15 12:05:43',NULL,NULL),(109,'CU/109','LNM Institute of Information Technology','C00241/DIPL','49',NULL,'Rupa ki Nangal, Post-Sumel, \r\nVia, Jamdoli,Jaipur, Rajasthan 302031',NULL,NULL,NULL,NULL,'39',NULL,NULL,NULL,35,'2023-05-16 05:05:38',NULL,NULL),(110,'CU/110','SREE NARAYAN MANDIR SAMITI','C00242/DIPL','47',NULL,'P.L. LOKHANDE MARG, \r\nCHEMBUR, MUMBAI 400089',NULL,NULL,NULL,NULL,'44',NULL,NULL,NULL,35,'2023-05-16 08:05:48',NULL,NULL);

/*Table structure for table `tbl_customer_invoicing` */

DROP TABLE IF EXISTS `tbl_customer_invoicing`;

CREATE TABLE `tbl_customer_invoicing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `bill_to_customer_no` varchar(55) DEFAULT NULL,
  `gen_bus_posting_group` varchar(55) DEFAULT NULL,
  `vat_bus_posting_group` varchar(55) DEFAULT NULL,
  `excise_bus_posting_group` varchar(55) DEFAULT NULL,
  `customer_posting_group` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_invoicing` */

insert  into `tbl_customer_invoicing`(`id`,`customer_id`,`bill_to_customer_no`,`gen_bus_posting_group`,`vat_bus_posting_group`,`excise_bus_posting_group`,`customer_posting_group`) values (1,10,'10',NULL,NULL,NULL,NULL),(2,16,'16',NULL,NULL,NULL,NULL),(3,22,'22',NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_customer_nature_of_service` */

DROP TABLE IF EXISTS `tbl_customer_nature_of_service`;

CREATE TABLE `tbl_customer_nature_of_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_nature_of_service` */

insert  into `tbl_customer_nature_of_service`(`id`,`description`) values (1,'Nature Of Service 1'),(2,'Nature Of Service 2'),(3,'Nature Of Service 3'),(4,'Nature Of Service 4'),(5,'Nature Of Service 5');

/*Table structure for table `tbl_customer_pan_status` */

DROP TABLE IF EXISTS `tbl_customer_pan_status`;

CREATE TABLE `tbl_customer_pan_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_pan_status` */

insert  into `tbl_customer_pan_status`(`id`,`description`) values (1,'Status 1'),(2,'Status 2'),(3,'Status 3'),(4,'Status 4'),(5,'Status 5');

/*Table structure for table `tbl_customer_payment` */

DROP TABLE IF EXISTS `tbl_customer_payment`;

CREATE TABLE `tbl_customer_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `payment_term_code` varchar(25) DEFAULT NULL,
  `payment_method_code` tinyint(2) DEFAULT NULL,
  `credit_limit` varchar(25) DEFAULT NULL,
  `bank_name` varchar(25) DEFAULT NULL,
  `bank_branch` varchar(25) DEFAULT NULL,
  `bank_acc_no` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_payment` */

insert  into `tbl_customer_payment`(`id`,`customer_id`,`payment_term_code`,`payment_method_code`,`credit_limit`,`bank_name`,`bank_branch`,`bank_acc_no`) values (1,10,NULL,NULL,NULL,NULL,NULL,NULL),(2,10,NULL,NULL,NULL,NULL,NULL,NULL),(3,16,NULL,1,NULL,NULL,NULL,NULL),(4,17,NULL,NULL,NULL,NULL,NULL,NULL),(5,22,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_customer_payment_method` */

DROP TABLE IF EXISTS `tbl_customer_payment_method`;

CREATE TABLE `tbl_customer_payment_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_payment_method` */

insert  into `tbl_customer_payment_method`(`id`,`description`) values (1,'CHEQUE'),(2,'NEFT'),(3,'CASH'),(4,'RTGS'),(5,'CNF');

/*Table structure for table `tbl_customer_posting_group` */

DROP TABLE IF EXISTS `tbl_customer_posting_group`;

CREATE TABLE `tbl_customer_posting_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_posting_group` */

insert  into `tbl_customer_posting_group`(`id`,`description`) values (1,'LOCAL'),(2,'Export/Import'),(3,'inter company'),(4,'inter state');

/*Table structure for table `tbl_customer_shipping` */

DROP TABLE IF EXISTS `tbl_customer_shipping`;

CREATE TABLE `tbl_customer_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_method_code` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_shipping` */

insert  into `tbl_customer_shipping`(`id`,`customer_id`,`shipping_method_code`) values (1,10,'1'),(2,17,NULL),(3,22,NULL);

/*Table structure for table `tbl_customer_shipping_agent` */

DROP TABLE IF EXISTS `tbl_customer_shipping_agent`;

CREATE TABLE `tbl_customer_shipping_agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_agent_name` varchar(55) DEFAULT NULL,
  `shipping_agent_address` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_shipping_agent` */

insert  into `tbl_customer_shipping_agent`(`id`,`customer_id`,`shipping_agent_name`,`shipping_agent_address`) values (1,10,NULL,NULL),(2,17,NULL,NULL),(3,22,NULL,NULL);

/*Table structure for table `tbl_customer_shipping_agent_contact` */

DROP TABLE IF EXISTS `tbl_customer_shipping_agent_contact`;

CREATE TABLE `tbl_customer_shipping_agent_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `contact_person_name` varchar(55) DEFAULT NULL,
  `contact_position` varchar(55) DEFAULT NULL,
  `contact_email` varchar(55) DEFAULT NULL,
  `contact_mobile` varchar(55) DEFAULT NULL,
  `contact_is_default` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_shipping_agent_contact` */

/*Table structure for table `tbl_customer_shipping_method` */

DROP TABLE IF EXISTS `tbl_customer_shipping_method`;

CREATE TABLE `tbl_customer_shipping_method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_shipping_method` */

insert  into `tbl_customer_shipping_method`(`id`,`description`) values (1,'Road'),(2,'Rail'),(3,'Air');

/*Table structure for table `tbl_customer_tax_information` */

DROP TABLE IF EXISTS `tbl_customer_tax_information`;

CREATE TABLE `tbl_customer_tax_information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `nature_of_service` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_tax_information` */

insert  into `tbl_customer_tax_information`(`id`,`customer_id`,`gst_no`,`arn_no`,`lst_no`,`lst_no_dated`,`cst_no`,`cst_no_dated`,`lbt_no`,`lbt_no_dated`,`ecc_no`,`range`,`collectorate`,`pan_no`,`pan_status`,`pan_references_no`,`vat_no`,`vat_no_dated`,`tin_no`,`export_or_deemed_export`,`vat_exempted`,`nature_of_service`) values (2,10,NULL,NULL,NULL,'2023-04-10',NULL,'2023-04-10',NULL,'2023-04-10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-10',NULL,NULL,NULL,NULL),(3,11,NULL,NULL,NULL,'2023-04-10',NULL,'2023-04-10',NULL,'2023-04-10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-10',NULL,NULL,NULL,NULL),(4,12,NULL,NULL,NULL,'2023-04-10',NULL,'2023-04-10',NULL,'2023-04-10',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-10',NULL,NULL,NULL,NULL),(5,16,NULL,NULL,NULL,'2023-04-18',NULL,'2023-04-18',NULL,'2023-04-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-18',NULL,NULL,NULL,NULL),(6,17,NULL,NULL,NULL,'2023-04-18',NULL,'2023-04-18',NULL,'2023-04-18',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-18',NULL,NULL,NULL,NULL),(7,22,NULL,NULL,NULL,'2023-04-19',NULL,'2023-04-19',NULL,'2023-04-19',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-19',NULL,NULL,NULL,NULL),(8,23,NULL,NULL,NULL,'2023-04-26',NULL,'2023-04-26',NULL,'2023-04-26',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-26',NULL,NULL,NULL,NULL),(9,30,NULL,NULL,NULL,'2023-05-06',NULL,'2023-05-06',NULL,'2023-05-06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-05-06',NULL,NULL,NULL,NULL),(10,31,NULL,NULL,NULL,'2023-05-08',NULL,'2023-05-08',NULL,'2023-05-08',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-05-08',NULL,NULL,NULL,NULL),(11,32,NULL,NULL,NULL,'2023-05-09',NULL,'2023-05-09',NULL,'2023-05-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-05-09',NULL,NULL,NULL,NULL),(12,42,NULL,NULL,NULL,'2023-05-13',NULL,'2023-05-13',NULL,'2023-05-13',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-05-13',NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_customer_vat_bus_posting_group` */

DROP TABLE IF EXISTS `tbl_customer_vat_bus_posting_group`;

CREATE TABLE `tbl_customer_vat_bus_posting_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_customer_vat_bus_posting_group` */

insert  into `tbl_customer_vat_bus_posting_group`(`id`,`description`) values (1,'VAT'),(2,'CST');

/*Table structure for table `tbl_cutting` */

DROP TABLE IF EXISTS `tbl_cutting`;

CREATE TABLE `tbl_cutting` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_cutting` */

insert  into `tbl_cutting`(`id`,`description`) values (1,'Yes'),(2,'No');

/*Table structure for table `tbl_department` */

DROP TABLE IF EXISTS `tbl_department`;

CREATE TABLE `tbl_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_department` */

insert  into `tbl_department`(`id`,`description`) values (1,'Dept 1'),(2,'Dept 2');

/*Table structure for table `tbl_direction` */

DROP TABLE IF EXISTS `tbl_direction`;

CREATE TABLE `tbl_direction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_direction` */

insert  into `tbl_direction`(`id`,`description`) values (1,'Vertical'),(2,'Horizontal');

/*Table structure for table `tbl_excise` */

DROP TABLE IF EXISTS `tbl_excise`;

CREATE TABLE `tbl_excise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `excise_code` varchar(255) DEFAULT NULL,
  `excise_description` text NOT NULL,
  `duty_per` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_excise` */

/*Table structure for table `tbl_film_type` */

DROP TABLE IF EXISTS `tbl_film_type`;

CREATE TABLE `tbl_film_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_film_type` */

insert  into `tbl_film_type`(`id`,`description`) values (1,'Positive'),(2,'Negative');

/*Table structure for table `tbl_fron_side_color_coating` */

DROP TABLE IF EXISTS `tbl_fron_side_color_coating`;

CREATE TABLE `tbl_fron_side_color_coating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_fron_side_color_coating` */

insert  into `tbl_fron_side_color_coating`(`id`,`description`) values (1,'Yes'),(2,'No');

/*Table structure for table `tbl_item_type` */

DROP TABLE IF EXISTS `tbl_item_type`;

CREATE TABLE `tbl_item_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_item_type` */

insert  into `tbl_item_type`(`id`,`description`) values (1,'Carbon Less'),(2,'Plain Paper'),(3,'OTC'),(4,'Thermal');

/*Table structure for table `tbl_items` */

DROP TABLE IF EXISTS `tbl_items`;

CREATE TABLE `tbl_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_items` */

insert  into `tbl_items`(`id`,`description`) values (1,'Plastic Bags'),(2,'Inner Box'),(3,'Outer Box');

/*Table structure for table `tbl_job_card_material_requirement` */

DROP TABLE IF EXISTS `tbl_job_card_material_requirement`;

CREATE TABLE `tbl_job_card_material_requirement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `rm_category` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `rm_item` varchar(30) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `units` varchar(30) DEFAULT NULL,
  `wastage_allowed` varchar(30) DEFAULT NULL,
  `pcs` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_material_requirement` */

insert  into `tbl_job_card_material_requirement`(`id`,`job_card_id`,`rm_category`,`type`,`rm_item`,`quantity`,`units`,`wastage_allowed`,`pcs`) values (1,1,'1','1','','99','2','77','88'),(2,2,'7','14','','10','8','0','10');

/*Table structure for table `tbl_job_card_paper` */

DROP TABLE IF EXISTS `tbl_job_card_paper`;

CREATE TABLE `tbl_job_card_paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `paper_thick` varchar(55) DEFAULT NULL,
  `paper_make` varchar(25) DEFAULT NULL,
  `color_shade` varchar(25) DEFAULT NULL,
  `front_side_color` varchar(25) DEFAULT NULL,
  `back_side_color` varchar(25) DEFAULT NULL,
  `front_side_coating` varchar(25) DEFAULT NULL,
  `back_side_coating` varchar(25) DEFAULT NULL,
  `copy_mark` varchar(55) DEFAULT NULL,
  `remark` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_paper` */

insert  into `tbl_job_card_paper`(`id`,`job_card_id`,`paper_thick`,`paper_make`,`color_shade`,`front_side_color`,`back_side_color`,`front_side_coating`,`back_side_coating`,`copy_mark`,`remark`) values (1,1,'150','','','','','','',NULL,''),(2,2,'60','20','1','2,3','1','2','1','',''),(3,2,'60','20','1','2,3','1','2','1','',''),(4,2,'70','20','1','2,3','1','2','1','',''),(5,3,'10','2','2','5,6','3,6','1','2','','');

/*Table structure for table `tbl_job_card_position` */

DROP TABLE IF EXISTS `tbl_job_card_position`;

CREATE TABLE `tbl_job_card_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `position` varchar(55) DEFAULT NULL,
  `direction` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_position` */

insert  into `tbl_job_card_position`(`id`,`job_card_id`,`position`,`direction`) values (1,1,'',''),(2,2,'as per artwork','2'),(3,2,'as per artwork','1'),(4,3,'as per artwork','1');

/*Table structure for table `tbl_job_card_post_press` */

DROP TABLE IF EXISTS `tbl_job_card_post_press`;

CREATE TABLE `tbl_job_card_post_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `baby_roll_making_coating_side` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_post_press` */

insert  into `tbl_job_card_post_press`(`id`,`job_card_id`,`collating_width`,`collating_type`,`collating_between_ply`,`collating_carbon_option`,`numbering_position`,`numbering_style`,`numbering_skip`,`numbering_sequence`,`numbering_orientation`,`gumming_position`,`gumming_gum_make`,`gumming_between`,`gumming_quantity`,`hotspot_carbon_width`,`hotspot_carbon_height`,`hotspot_carbon_behind_ply_no`,`cutting_width`,`cutting_width_unit`,`cutting_length`,`cutting_length_unit`,`cutting_core_size`,`barcode_type`,`barcode_height`,`barcode_width`,`barcode_orientation`,`barcode_human_readable_text_to_show`,`baby_roll_making_coating_side`) values (1,2,'7\'\'','2','1,2','2','horizontal','1','0','1','2','horizontal','1','1,2,3','10',NULL,NULL,'1,2',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2');

/*Table structure for table `tbl_job_card_post_press_packaging_details` */

DROP TABLE IF EXISTS `tbl_job_card_post_press_packaging_details`;

CREATE TABLE `tbl_job_card_post_press_packaging_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `pcs` varchar(55) DEFAULT NULL,
  `item` varchar(25) DEFAULT NULL,
  `length` varchar(25) DEFAULT NULL,
  `width` varchar(25) DEFAULT NULL,
  `height` varchar(25) DEFAULT NULL,
  `units` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_post_press_packaging_details` */

insert  into `tbl_job_card_post_press_packaging_details`(`id`,`job_card_id`,`pcs`,`item`,`length`,`width`,`height`,`units`) values (1,2,'','','','','','');

/*Table structure for table `tbl_job_card_pre_press` */

DROP TABLE IF EXISTS `tbl_job_card_pre_press`;

CREATE TABLE `tbl_job_card_pre_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `columns` varchar(25) NOT NULL,
  `rows` varchar(25) DEFAULT NULL,
  `length` varchar(25) DEFAULT NULL,
  `length_unit` tinyint(4) NOT NULL,
  `width` varchar(25) NOT NULL,
  `width_unit` tinyint(4) NOT NULL,
  `thickness` varchar(25) NOT NULL,
  `thickness_unit` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_pre_press` */

insert  into `tbl_job_card_pre_press`(`id`,`job_card_id`,`columns`,`rows`,`length`,`length_unit`,`width`,`width_unit`,`thickness`,`thickness_unit`) values (1,1,'1','1','420',1,'-',1,'0.20',1),(2,2,'1','3','0',1,'9',3,'0.20',1),(3,2,'1','3','0',1,'9',3,'0.20',1),(4,2,'1','3','0',1,'9',3,'0.20',1),(5,2,'1','3','0',1,'9',3,'0.20',1),(6,2,'1','3','0',1,'9',3,'0.20',1),(7,2,'1','3','0',1,'9',3,'0.20',1),(8,2,'1','3','0',1,'9',3,'0.20',1),(9,2,'1','3','0',1,'9',3,'0.20',1),(10,3,'2','2','9',3,'10',3,'0.25',3);

/*Table structure for table `tbl_job_card_pre_press_color` */

DROP TABLE IF EXISTS `tbl_job_card_pre_press_color`;

CREATE TABLE `tbl_job_card_pre_press_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(55) DEFAULT NULL,
  `film_type` varchar(55) DEFAULT NULL,
  `ply` varchar(25) DEFAULT NULL,
  `plate_type` varchar(55) DEFAULT NULL,
  `pre_press_id` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_pre_press_color` */

insert  into `tbl_job_card_pre_press_color`(`id`,`color`,`film_type`,`ply`,`plate_type`,`pre_press_id`) values (1,'12','1','1','1','1'),(2,'14','1','1','1','1'),(3,'8','1','1','1','1'),(4,'13','1','1','1','1'),(5,'3','1','1','1','1'),(6,'5','1','1','1','1'),(7,'1','1','1','1','1'),(8,'2','1','1','1','1'),(9,'2','1','1st 2nd & 3rd Front','1','2'),(10,'3','1','1st 2nd & 3rd Front','1','2'),(11,'2','1','1st 2nd & 3rd Front','1','3'),(12,'3','1','1st 2nd & 3rd Front','1','3'),(13,'2','1','1st 2nd & 3rd Front','1','4'),(14,'3','1','1st 2nd & 3rd Front','1','4'),(15,'2','1','1st 2nd & 3rd Front','1','5'),(16,'3','1','1st 2nd & 3rd Front','1','5'),(17,'2','1','1st 2nd & 3rd Front','1','6'),(18,'3','1','1st 2nd & 3rd Front','1','6'),(19,'2','1','1st 2nd & 3rd Front','1','7'),(20,'3','1','1st 2nd & 3rd Front','1','7'),(21,'2','1','1st 2nd & 3rd Front','1','8'),(22,'3','1','1st 2nd & 3rd Front','1','8'),(23,'2','1','1st 2nd & 3rd Front','1','9'),(24,'3','1','1st 2nd & 3rd Front','1','9'),(25,'4','1','1st 2nd & 3rd Front','1','9'),(26,'4,5','1','1','1','10');

/*Table structure for table `tbl_job_card_press` */

DROP TABLE IF EXISTS `tbl_job_card_press`;

CREATE TABLE `tbl_job_card_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `printing` varchar(30) DEFAULT NULL,
  `coating` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press` */

insert  into `tbl_job_card_press`(`id`,`job_card_id`,`printing`,`coating`) values (1,1,NULL,NULL),(2,2,NULL,NULL),(3,3,NULL,NULL);

/*Table structure for table `tbl_job_card_press_28_7` */

DROP TABLE IF EXISTS `tbl_job_card_press_28_7`;

CREATE TABLE `tbl_job_card_press_28_7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `coating` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press_28_7` */

/*Table structure for table `tbl_job_card_press_coating` */

DROP TABLE IF EXISTS `tbl_job_card_press_coating`;

CREATE TABLE `tbl_job_card_press_coating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coating` varchar(55) DEFAULT NULL,
  `printing` varchar(55) DEFAULT NULL,
  `press_id` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press_coating` */

/*Table structure for table `tbl_job_card_press_ink_details` */

DROP TABLE IF EXISTS `tbl_job_card_press_ink_details`;

CREATE TABLE `tbl_job_card_press_ink_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `press_id` int(11) NOT NULL,
  `pre_press_color_id` varchar(30) DEFAULT NULL,
  `main_color_id` varchar(55) DEFAULT NULL,
  `ink_color` varchar(55) DEFAULT NULL,
  `ink_shade` varchar(55) DEFAULT NULL,
  `ink_company` varchar(55) DEFAULT NULL,
  `ink_quantity` varchar(55) DEFAULT NULL,
  `ink_units` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press_ink_details` */

insert  into `tbl_job_card_press_ink_details`(`id`,`press_id`,`pre_press_color_id`,`main_color_id`,`ink_color`,`ink_shade`,`ink_company`,`ink_quantity`,`ink_units`) values (1,1,'1','12','INVISIBLE YELLOW','2','','',''),(2,1,'2','14','NAVY BLUE','','','',''),(3,1,'3','8','DARK BLUE','','','',''),(4,1,'4','13','BROWN','','','',''),(5,1,'5','3','yellow','','','',''),(6,1,'6','5','green','','','',''),(7,1,'7','1','black','','','',''),(8,1,'8','2','red','','','',''),(9,2,'23','2','red','7','7','100','8'),(10,2,'24','3','yellow','2','7','100','8'),(11,2,'25','4','magenta','3','7','100','8'),(12,3,'26','5','magenta,green','','','','');

/*Table structure for table `tbl_job_card_press_old` */

DROP TABLE IF EXISTS `tbl_job_card_press_old`;

CREATE TABLE `tbl_job_card_press_old` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `spare_quantity` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press_old` */

/*Table structure for table `tbl_job_card_press_paper` */

DROP TABLE IF EXISTS `tbl_job_card_press_paper`;

CREATE TABLE `tbl_job_card_press_paper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `press_id` int(11) NOT NULL,
  `general_paper_id` varchar(30) DEFAULT NULL,
  `paper_thickness_proposed` varchar(55) DEFAULT NULL,
  `gsm_make` varchar(55) DEFAULT NULL,
  `paper_thickness_used` varchar(55) DEFAULT NULL,
  `unit` varchar(55) DEFAULT NULL,
  `gsm_make_1` varchar(55) DEFAULT NULL,
  `quantity` varchar(55) DEFAULT NULL,
  `papers` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press_paper` */

insert  into `tbl_job_card_press_paper`(`id`,`press_id`,`general_paper_id`,`paper_thickness_proposed`,`gsm_make`,`paper_thickness_used`,`unit`,`gsm_make_1`,`quantity`,`papers`) values (1,1,'1','150','','','GSM','','',''),(2,2,'2','60','20','','GSM','','',''),(3,2,'3','60','20','','GSM','','',''),(4,2,'4','70','20','','GSM','','',''),(5,3,'5','10','2','test','GSM','2','123','');

/*Table structure for table `tbl_job_card_press_spare_to_use` */

DROP TABLE IF EXISTS `tbl_job_card_press_spare_to_use`;

CREATE TABLE `tbl_job_card_press_spare_to_use` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spare` varchar(55) DEFAULT NULL,
  `spare_quantity` varchar(55) DEFAULT NULL,
  `press_id` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_press_spare_to_use` */

insert  into `tbl_job_card_press_spare_to_use`(`id`,`spare`,`spare_quantity`,`press_id`) values (1,'','','1'),(2,'','','2'),(3,'','','3');

/*Table structure for table `tbl_job_card_process_selection_post_press` */

DROP TABLE IF EXISTS `tbl_job_card_process_selection_post_press`;

CREATE TABLE `tbl_job_card_process_selection_post_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_process_selection_post_press` */

insert  into `tbl_job_card_process_selection_post_press`(`id`,`job_card_id`,`process`,`basicmachine`,`alternativemachine`,`qc`) values (1,1,'','','',''),(2,2,'8','47','49','');

/*Table structure for table `tbl_job_card_process_selection_pre_press` */

DROP TABLE IF EXISTS `tbl_job_card_process_selection_pre_press`;

CREATE TABLE `tbl_job_card_process_selection_pre_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_process_selection_pre_press` */

insert  into `tbl_job_card_process_selection_pre_press`(`id`,`job_card_id`,`process`,`basicmachine`,`alternativemachine`,`qc`) values (1,1,'2','40','39',''),(2,2,'1','39','40','');

/*Table structure for table `tbl_job_card_process_selection_press` */

DROP TABLE IF EXISTS `tbl_job_card_process_selection_press`;

CREATE TABLE `tbl_job_card_process_selection_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_process_selection_press` */

insert  into `tbl_job_card_process_selection_press`(`id`,`job_card_id`,`process`,`basicmachine`,`alternativemachine`,`qc`) values (1,1,'6','44','45',''),(2,2,'6','45','46','');

/*Table structure for table `tbl_job_card_specific_details` */

DROP TABLE IF EXISTS `tbl_job_card_specific_details`;

CREATE TABLE `tbl_job_card_specific_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `file_title` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_specific_details` */

insert  into `tbl_job_card_specific_details`(`id`,`job_card_id`,`img`,`file_title`) values (1,2,'','perforating to be exact 0.2mm thick'),(2,3,'test2.png','test2');

/*Table structure for table `tbl_job_card_specific_details_check` */

DROP TABLE IF EXISTS `tbl_job_card_specific_details_check`;

CREATE TABLE `tbl_job_card_specific_details_check` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_card_id` int(11) NOT NULL,
  `tearing` varchar(500) DEFAULT NULL,
  `cutting` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_card_specific_details_check` */

/*Table structure for table `tbl_job_cart` */

DROP TABLE IF EXISTS `tbl_job_cart`;

CREATE TABLE `tbl_job_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_job_cart` */

insert  into `tbl_job_cart`(`id`,`unique_id`,`type`,`product_category`,`product_type`,`job_card_no`,`job_card_title`,`company_product_no`,`product_name_by_customer`,`width`,`width_unit`,`height`,`height_unit`,`part_ply`,`item_type`,`special_instructions`,`perforation`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'JC/23-24/1','Computer Stationary',7,NULL,'DJC015845','MOGADISHU MUNICIPALLAND TAX CERTIFICATE.',NULL,'C0013','9',3,'4',NULL,1,2,'EXACT REPEAT JOB. JOB. FOLLOW ARTWORK.',2,28,'2023-04-18 12:04:35',NULL,NULL),(2,'JC/23-24/2',NULL,3,7,'djctest 0123','pin mailer test',NULL,'real gold','9\'\'',3,'4\'\'',3,3,2,'new job.',1,9,'2023-05-03 11:05:41',9,'2023-05-03 12:05:27'),(3,'JC/23-24/3',NULL,8,4,'DJC00123','MICR paper','com12345','micr paper','10',8,'10',8,1,2,'Test1\r\ntest2\r\ntest3',1,9,'2023-05-10 06:05:15',NULL,NULL);

/*Table structure for table `tbl_machine_master` */

DROP TABLE IF EXISTS `tbl_machine_master`;

CREATE TABLE `tbl_machine_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) NOT NULL,
  `my_unique_id` varchar(55) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `spec` varchar(255) DEFAULT NULL,
  `category` tinyint(1) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `location` varchar(255) DEFAULT NULL,
  `capacity` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_machine_master` */

insert  into `tbl_machine_master`(`id`,`unique_id`,`my_unique_id`,`name`,`spec`,`category`,`status`,`location`,`capacity`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (39,'DTP','MA/39','DTP-Amit',NULL,1,0,'55','0',29,'2022-08-11 07:08:56',NULL,NULL),(40,'Printer','MA/40','HP Laserjet M706 Pro',NULL,1,0,'55','0',29,'2022-08-11 07:08:24',NULL,NULL),(41,'Plate Maker','MA/41','Varna Graphics',NULL,1,0,'55','0',29,'2022-08-11 07:08:14',NULL,NULL),(42,'Plate Baker','MA/42','Oven 1',NULL,1,0,'55','0',29,'2022-08-11 07:08:38',NULL,NULL),(44,'T-D-421','MA/44','T-D-421','D5-121',3,0,'55','0',29,'2022-08-11 07:08:15',NULL,NULL),(45,'T-D-400','MA/45','T-D-400','D5-123',3,0,'55','0',29,'2022-08-11 07:08:48',NULL,NULL),(46,'T-B-600','MA/46','T-B-600','D5-123',3,0,'55','0',29,'2022-08-11 07:08:31',NULL,NULL),(47,'Manual','MA/47','Manual',NULL,2,0,'55','0',29,'2022-08-11 08:08:44',NULL,NULL),(48,'SJ-1','MA/48','Roll Cutting',NULL,2,0,'55','0',29,'2022-08-11 08:08:36',NULL,NULL),(49,'DPA 4','MA/49','DPA 4','DPA 4',2,0,'55','1000',29,'2022-09-09 08:09:41',NULL,NULL),(50,'COL - S1','MA/50','COL - S1','COL - S1',2,0,'55','1000',29,'2022-09-09 08:09:13',NULL,NULL);

/*Table structure for table `tbl_material` */

DROP TABLE IF EXISTS `tbl_material`;

CREATE TABLE `tbl_material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `printed_product_part_no` varchar(86) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tbl_material` */

/*Table structure for table `tbl_orientation` */

DROP TABLE IF EXISTS `tbl_orientation`;

CREATE TABLE `tbl_orientation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_orientation` */

insert  into `tbl_orientation`(`id`,`description`) values (1,'Portrait'),(2,'Landscape');

/*Table structure for table `tbl_perforation` */

DROP TABLE IF EXISTS `tbl_perforation`;

CREATE TABLE `tbl_perforation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_perforation` */

insert  into `tbl_perforation`(`id`,`description`) values (1,'Yes'),(2,'No');

/*Table structure for table `tbl_plants` */

DROP TABLE IF EXISTS `tbl_plants`;

CREATE TABLE `tbl_plants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL,
  `ecc_no` varchar(55) DEFAULT NULL,
  `sales_tax_regs_no` varchar(55) DEFAULT NULL,
  `ecc_no_dated` date DEFAULT NULL,
  `sales_tax_regs_no_dated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_plants` */

insert  into `tbl_plants`(`id`,`company_id`,`ecc_no`,`sales_tax_regs_no`,`ecc_no_dated`,`sales_tax_regs_no_dated`) values (45,36,'1','no 1','2022-05-24','2022-05-24'),(48,36,'2','no 2','2022-05-24','2022-05-24'),(49,36,'3','no 3','2022-05-24','2022-05-24'),(50,39,'test1234','test1234','2022-05-24','2025-05-28'),(51,39,'test1235','test1236','2022-09-08','2022-05-17'),(54,42,'1','no 1','2022-05-26','2022-05-26'),(55,42,'2','no 2','2022-05-26','2022-05-26'),(56,43,'Esc123','Reg123','2022-05-27','2022-06-01'),(59,45,'ECC_1223','Reg0011','2022-06-03','2022-06-24'),(60,45,'ECC_1224','Reg0012','2022-06-04','2022-06-30'),(62,47,'1','1','2015-01-20','2015-01-14'),(64,49,'dgdf','gfgd','2022-08-06','2022-08-06'),(65,50,'test','test1','2022-08-04','2022-08-08'),(68,53,'fsdf','fsd','2022-08-09','2022-08-09'),(70,49,'ECC-0112','Sales234','2022-10-27','2022-10-29'),(71,50,'123','test13','2023-02-15','2023-02-16');

/*Table structure for table `tbl_plate_type` */

DROP TABLE IF EXISTS `tbl_plate_type`;

CREATE TABLE `tbl_plate_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_plate_type` */

insert  into `tbl_plate_type`(`id`,`description`) values (1,'PS'),(2,'Polymer'),(3,'CTP');

/*Table structure for table `tbl_printing` */

DROP TABLE IF EXISTS `tbl_printing`;

CREATE TABLE `tbl_printing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_printing` */

insert  into `tbl_printing`(`id`,`description`) values (1,'Coating Side'),(2,'Non- Coating Side'),(3,'Both');

/*Table structure for table `tbl_process_master` */

DROP TABLE IF EXISTS `tbl_process_master`;

CREATE TABLE `tbl_process_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_process_master` */

insert  into `tbl_process_master`(`id`,`unique_id`,`process_id`,`name`,`category`,`image`,`image1`,`image2`,`is_fixed_process`,`process_avg_completion_time`,`fixed_cost`,`running_cost`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'PR/1','01','DESIGNER','1','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:05',NULL,NULL),(2,'PR/2','02','ARTWORK','1','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:34',NULL,NULL),(3,'PR/3','03','PLATE MAKING','1','','','',0,NULL,NULL,NULL,28,'2023-04-10 08:04:05',NULL,NULL),(4,'PR/4','04','PLATE BAKING','1','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:25',NULL,NULL),(5,'PR/5','05','POSITIVE/TRACING','1','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:00',NULL,NULL),(6,'PR/6','06','PRINTING','3','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:48',NULL,NULL),(7,'PR/7','07','ON LINE NUMBERING','3','','','',0,NULL,NULL,NULL,28,'2023-04-10 08:04:09',NULL,NULL),(8,'PR/8','08','GUMMING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:33',NULL,NULL),(9,'PR/9','09','COLLATE','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:15',NULL,NULL),(10,'PR/10','10','EMBOSS','2','','','',0,NULL,NULL,NULL,28,'2023-04-10 08:04:32',NULL,NULL),(11,'PR/11','11','BABY ROLL MAKING','2','','','',0,NULL,NULL,NULL,28,'2023-04-10 08:04:52',NULL,NULL),(12,'PR/12','12','SHEET CUTTING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:24',NULL,NULL),(13,'PR/13','13','SHEET SCAN','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:48',NULL,NULL),(14,'PR/14','14','PURIFICATION','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:17',NULL,NULL),(15,'PR/15','15','FIRST CUT','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:48',NULL,NULL),(16,'PR/16','16','CHECKING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:06',NULL,NULL),(17,'PR/17','17','GATHERING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:35',NULL,NULL),(18,'PR/18','18','PINING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:57',NULL,NULL),(19,'PR/19','19','BINDING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:18',NULL,NULL),(20,'PR/20','20','RAILWAY ROLL MAKING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:49',NULL,NULL),(21,'PR/21','21','THERMAL THEATRE TICKET ROLL MAKING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:15',NULL,NULL),(22,'PR/22','22','FINAL CUTTING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:46',NULL,NULL),(23,'PR/23','23','FINAL CHECKING & PACKING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:09',NULL,NULL),(24,'PR/24','24','FINISH GOODS','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:35',NULL,NULL),(25,'PR/25','25','PIN MAILER PRESSING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:14',NULL,NULL),(26,'PR/26','26','CRASH NUMBERING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:37',NULL,NULL),(27,'PR/27','27','BOOK MAKING','2','','','',1,NULL,NULL,NULL,28,'2023-04-10 08:04:58',NULL,NULL);

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `product_type` varchar(255) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`id`,`unique_id`,`product_category`,`product_type`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'FPM/1','1','Thermal Paper Roll',35,'2023-04-05 12:04:05',NULL,NULL),(2,'FPM/2','3','certificate',28,'2023-04-12 05:04:17',28,'2023-04-24 08:04:26'),(3,'FPM/3','1','ROLL',28,'2023-04-12 06:04:54',NULL,NULL),(4,'FPM/4','8','MICR PAPER',28,'2023-04-19 07:04:49',NULL,NULL),(5,'FPM/5','7','ID CARD',35,'2023-04-27 11:04:56',NULL,NULL),(6,'FPM/6','9','PRINTER',35,'2023-04-27 11:04:42',NULL,NULL),(7,'FPM/7','3','PINMAILER',25,'2023-05-02 09:05:40',NULL,NULL),(8,'FPM/8','3','Computer Stationary',35,'2023-05-06 10:05:07',NULL,NULL),(9,'FPM/9','6','machine',35,'2023-05-11 07:05:03',NULL,NULL),(10,'FPM/10','7','Grade Card Marksheet',9,'2023-05-16 05:05:20',9,'2023-05-16 06:05:46'),(11,'FPM/11','7','Transcript',9,'2023-05-16 05:05:16',9,'2023-05-16 06:05:29'),(12,'FPM/12','7','Certificate-Degree',9,'2023-05-16 05:05:52',9,'2023-05-16 06:05:06'),(13,'FPM/13','10','SeQRDoc',9,'2023-05-16 05:05:41',NULL,NULL),(14,'FPM/14','7','Advance Pre Printing Security Feature',9,'2023-05-16 05:05:22',9,'2023-05-16 05:05:11');

/*Table structure for table `tbl_product_category` */

DROP TABLE IF EXISTS `tbl_product_category`;

CREATE TABLE `tbl_product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `hs_code` varchar(255) NOT NULL,
  `sac` varchar(255) DEFAULT NULL,
  `job_card_type_id` bigint(20) DEFAULT NULL,
  `excise_code` int(11) DEFAULT NULL,
  `excise_description` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_product_category` */

insert  into `tbl_product_category`(`id`,`unique_id`,`product_category`,`hs_code`,`sac`,`job_card_type_id`,`excise_code`,`excise_description`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'FPC/1','Thermal roll','48119099',NULL,NULL,NULL,NULL,35,'2023-04-05 12:04:38',NULL,NULL),(2,'FPC/2','PIN MAILER','48204000',NULL,NULL,NULL,NULL,28,'2023-04-06 08:04:50',NULL,NULL),(3,'FPC/3','COMPUTER STATIONERY.','48204000',NULL,NULL,NULL,NULL,28,'2023-04-06 08:04:40',NULL,NULL),(4,'FPC/4','ENTERTAINMENT TICKET','48119099',NULL,NULL,NULL,NULL,28,'2023-04-06 08:04:49',NULL,NULL),(5,'FPC/5','ROLL','0',NULL,NULL,NULL,NULL,28,'2023-04-12 06:04:17',NULL,NULL),(6,'FPC/6','THERMAL','48119909',NULL,1,NULL,NULL,25,'2023-04-18 12:04:04',NULL,NULL),(7,'FPC/7','CONTINUOUS STATIONARY','00',NULL,2,NULL,NULL,25,'2023-04-18 12:04:35',NULL,NULL),(8,'FPC/8','PAPER','000',NULL,NULL,NULL,NULL,28,'2023-04-19 07:04:52',NULL,NULL),(9,'FPC/9','PRINTER','84431949',NULL,NULL,NULL,NULL,35,'2023-04-27 11:04:35',NULL,NULL),(10,'FPC/10','Software','09876','0987',NULL,NULL,NULL,41,'2023-05-08 10:05:07',NULL,NULL),(11,'FPC/11','certificate','12345','123',NULL,NULL,NULL,41,'2023-05-08 10:05:23',NULL,NULL);

/*Table structure for table `tbl_product_post_press` */

DROP TABLE IF EXISTS `tbl_product_post_press`;

CREATE TABLE `tbl_product_post_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_product_post_press` */

insert  into `tbl_product_post_press`(`id`,`product_id`,`process`,`basicmachine`,`alternativemachine`,`qc`) values (102,76,'4','35','35','6'),(105,76,'4','35','35','6'),(106,77,'4','35','31','6'),(107,78,'4','35','35','8'),(108,79,'','','',''),(109,80,'','','',''),(110,81,'','','',''),(111,82,'4','31','35','8'),(112,83,'','','',''),(113,1,'','','',''),(114,2,'8','47','47',''),(115,3,'22','48','48',''),(116,3,'11','48','48',''),(117,4,'','','',''),(118,5,'','','',''),(119,6,'','','',''),(120,7,'','','',''),(121,8,'','','',''),(122,9,'','','',''),(123,10,'','','',''),(124,11,'','','',''),(125,12,'','','',''),(126,13,'','','',''),(127,14,'','','','');

/*Table structure for table `tbl_product_pre_press` */

DROP TABLE IF EXISTS `tbl_product_pre_press`;

CREATE TABLE `tbl_product_pre_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_product_pre_press` */

insert  into `tbl_product_pre_press`(`id`,`product_id`,`process`,`basicmachine`,`alternativemachine`,`qc`) values (107,76,'3','34','34','6'),(109,76,'3','34','34','6'),(110,77,'3','32','32','6'),(111,78,'3','32','32','7'),(112,79,'3','34','34','8'),(113,80,'','','',''),(114,81,'','','',''),(115,82,'5','34','32','8'),(116,83,'','','',''),(117,1,'','','',''),(118,2,'1','39','40',''),(119,3,'1','','',''),(120,4,'','','',''),(121,5,'','','',''),(122,6,'','','',''),(123,7,'','','',''),(124,8,'','','',''),(125,9,'','','',''),(126,10,'','','',''),(127,11,'','','',''),(128,12,'','','',''),(129,13,'','','',''),(130,14,'','','','');

/*Table structure for table `tbl_product_press` */

DROP TABLE IF EXISTS `tbl_product_press`;

CREATE TABLE `tbl_product_press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `process` varchar(55) DEFAULT NULL,
  `basicmachine` varchar(55) DEFAULT NULL,
  `alternativemachine` varchar(55) DEFAULT NULL,
  `qc` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_product_press` */

insert  into `tbl_product_press`(`id`,`product_id`,`process`,`basicmachine`,`alternativemachine`,`qc`) values (104,76,'2','33','33','6'),(106,76,'2','33','33','6'),(107,77,'2','33','33','6'),(108,78,'2','33','33','8'),(109,79,'','','',''),(110,80,'','','',''),(111,81,'','','',''),(112,82,'2','36','33','8'),(113,83,'','','',''),(114,1,'','','',''),(115,2,'6','44','45',''),(116,3,'','','',''),(117,4,'','','',''),(118,5,'','','',''),(119,6,'','','',''),(120,7,'','','',''),(121,8,'','','',''),(122,9,'','','',''),(123,10,'','','',''),(124,11,'','','',''),(125,12,'','','',''),(126,13,'','','',''),(127,14,'','','','');

/*Table structure for table `tbl_quotation` */

DROP TABLE IF EXISTS `tbl_quotation`;

CREATE TABLE `tbl_quotation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `tds_checkbox` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_quotation` */

insert  into `tbl_quotation`(`id`,`unique_id`,`sales_person`,`company`,`unique_reference`,`comp_name_add`,`attention_of`,`quotation_date`,`subject`,`discharge_point_term`,`installation_charge`,`warranty`,`training`,`bank_charges`,`sampling_charges`,`lchandling_charges`,`cancellation_of_order_charge`,`delivery_point`,`packing`,`payment_term`,`validity_of_quotation`,`documents`,`jurisdiction`,`statutory_clause`,`tax`,`excise`,`lbt`,`freight`,`delivery`,`prices`,`note`,`reference`,`quote_type`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`rows`,`columns`,`discharge_point_term_checkbox`,`installation_charge_checkbox`,`warranty_checkbox`,`training_checkbox`,`bank_charges_checkbox`,`sampling_charges_checkbox`,`lchandling_charges_checkbox`,`cancellation_of_order_charge_checkbox`,`delivery_point_checkbox`,`packing_checkbox`,`payment_term_checkbox`,`validity_of_quotation_checkbox`,`documents_checkbox`,`jurisdiction_checkbox`,`statutory_clause_checkbox`,`tax_checkbox`,`excise_checkbox`,`lbt_checkbox`,`freight_checkbox`,`delivery_checkbox`,`prices_checkbox`,`othercharges`,`tds`,`othercharges_checkbox`,`tds_checkbox`) values (1,'QU/22-23/1',20,'','CUS/RS/1/PR','GUARDIAN SOUHARDA SAHAKARI BANK,\r\n139,INFINITY ROAD,SHIVAJI NAGAR,\r\nBANGALORE -560001','S.Charles Nickson Raj','2022-07-09','Quotation for JP & RP Thermal Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 7 days from the date of PO',NULL,NULL,'Mail Dt.09-07-2022',5,25,'2022-07-09 07:07:02',25,'2022-07-09 09:07:23',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(3,'QU/22-23/3',20,'','CUS/RS/3/PR','DJ Mediaprint And Logistics Ltd.\r\nVashi,Navi Mumbai-400703','Ms.Diksha / Ms.Anjali','2022-07-11','Quotation for Dividend Warrant',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Immediate','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 7 days from the date of PO',NULL,NULL,'Mail Dt.09-07-2022',5,25,'2022-07-11 06:07:57',25,'2022-07-11 06:07:32',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(4,'QU/22-23/4',20,'','CUS/RS/4/PR','THE HASTI CO-OP BANK LTD,\r\nHasti Sahakar Deep Station, Dondaicha','Kishor Sonawane','2022-07-11','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 10-12 Days from the date of PO',NULL,NULL,'MAIL 11-07-2022',5,25,'2022-07-11 06:07:28',25,'2022-07-11 09:07:36',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(5,'QU/22-23/5',20,'','CUS/RS/5/PR','SARVATRA TECHNOLOGIES PVT. LTD.','Sachin Potdar','2022-07-11','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At Actual outside Mumbai','Within 10-12 Days from the date of PO',NULL,NULL,'MAIL 11-07-2022',5,25,'2022-07-11 09:07:06',25,'2022-07-11 09:07:42',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(6,'QU/22-23/6',20,'','CUS/RS/6/PR','To,\r\nBULDANA URBAN CO-OP CREDIT SOCIETY\r\nLTD.','Sunil Jadhav','2022-07-11','Revised Quotation for Cheque Book',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At Actual outside Mumbai','Within 10-12 Days from the date of PO',NULL,NULL,'verbal',5,25,'2022-07-11 11:07:55',25,'2022-07-11 11:07:45',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(7,'QU/22-23/7',20,'','CUS/RS/7/PR','Wonder Formulations,\r\nGr.Floor, Heena Building,\r\nPlot No.28,1st Road,C.D.Marg,\r\nNear Madhu Park,Khar(W),Mumbai - 400052','Shailesh Sir','2022-07-13','Quotation for Share Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 7 days from the date of PO',NULL,NULL,'MAIL 12/07/2022',5,25,'2022-07-13 05:07:41',25,'2022-07-13 05:07:57',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(8,'QU/22-23/8',20,'','CUS/RS/8/PR','COLORPLAST SYSTEMS PVT. LTD.,\r\nC-8,SEC-65,NOIDA (UP),-201301','TARESH GARG','2022-07-13','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 7 days from the date of PO',NULL,NULL,'MAIL-12/07/2022',5,25,'2022-07-13 06:07:21',25,'2022-07-13 06:07:52',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(9,'QU/22-23/9',20,'','CUS/RS/9/PR','MCT Cards & Technology Pvt. Ltd.\r\nPlastic Cards Trading Manipal Plot No. 22\r\nA,Shivalli Industrial Area Manipal Udupi 576104\r\nKarnataka India','ARJUN PADIYAR','2022-07-14','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Immediate','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'MAIL 14-07-2022',5,25,'2022-07-14 06:07:37',25,'2022-07-14 06:07:48',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(10,'QU/22-23/10',20,'','CUS/RS/10/PR','Design World','Faisal Narvel','2022-07-14','Quotation For HP Gas Cash Memo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'MAIL 14-07-2022',5,25,'2022-07-14 07:07:03',25,'2022-07-14 07:07:40',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(11,'QU/22-23/11',20,'','CUS/RS/11/PR','Indusind Bank Ltd.','SACHIN SOLANKE / GAURANG PATEL','2022-07-14','QUOTATION FOR FIXED DEPOSIT ADVICE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8 days from the date of PO',NULL,NULL,'MAIL 14-07-2022',5,25,'2022-07-14 08:07:51',25,'2022-07-14 09:07:06',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(12,'QU/22-23/12',20,'','CUS/RS/12/PR','Worldline India Pvt. Ltd.,\r\nRaiaskaran Tech Park, 2nd floor of Tower I, Phase II,\r\nSakinaka, M.V. Road, Andheri (East), Mumbai - 400 072','Raghawendra Pratap Shahi','2022-07-15','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail 15-07-2022',5,25,'2022-07-15 05:07:52',25,'2022-07-15 05:07:54',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(13,'QU/22-23/13',20,'','CUS/RS/13/PR','GP PARSIK SAHAKARI BANK LTD.\r\nHEAD OFFICE, SAHAKARMURTI \r\nGOPINATH SHIVRAM PATIL BHAVAN,\r\nPARSIK NAGAR, KALWA,\r\nTHANE 400605.','Palve Sir','2022-07-15','Quotation for Hitachi RP Roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-07-15 06:07:00',25,'2022-07-15 09:07:48',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(14,'QU/22-23/14',20,'','CUS/RS/14/PR','ALKYL AMINES CHEMICALS LTD.,\r\n401/407,NIRMAN VYAPAR KENDRA,\r\nPLOT NO.10, SECTOR-17, VASHI, NAVI MUMBAI-400703.','NANDKUMAR SIR','2022-07-16','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'MAIL 15-07-2022',5,25,'2022-07-16 05:07:52',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(15,'QU/22-23/15',20,'','CUS/RS/15/PR','ALKYL AMINES CHEMICALS LTD.,\r\n401/407,NIRMAN VYAPAR KENDRA,\r\nPLOT NO.10, SECTOR-17, VASHI, NAVI MUMBAI-400703.','NANDKUMAR SIR','2022-07-16','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'MAIL 15-07-2022',5,25,'2022-07-16 05:07:52',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(16,'QU/22-23/16',20,'','CUS/RS/16/PR','ALKYL AMINES CHEMICALS LTD.,\r\n401/407,NIRMAN VYAPAR KENDRA,\r\nPLOT NO.10, SECTOR-17, VASHI, NAVI MUMBAI-400703.','NANDKUMAR SIR','2022-07-16','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'MAIL 15-07-2022',5,25,'2022-07-16 05:07:52',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(17,'QU/22-23/17',20,'','CUS/RS/17/PR','Ram Krishna Bazar\r\nSonar pada, Dombivali East','Sachin Munde','2022-07-16','Quotation for Thermal POS rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 7 days from the date of PO',NULL,NULL,'Verbal',5,25,'2022-07-16 06:07:13',25,'2022-07-16 06:07:54',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(18,'QU/22-23/18',23,'','CUS/RS/18/PR','Sintel Security Print Solutions Limited \r\nProduction Manager\r\nIndustrial Area,\r\n Factory Road, Thika\r\nM: +254703220439 V: 1411','Umesh Kulal','2022-07-16','Quotation for Clinic Cards',NULL,NULL,'30 Days',NULL,'$ 100',NULL,NULL,NULL,NULL,NULL,'100 % Advance','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,NULL,'2 Weeks',NULL,NULL,'Verbal',2,28,'2022-07-16 09:07:49',NULL,NULL,3,6,0,0,1,0,1,0,0,0,0,0,1,1,0,1,0,0,0,0,0,1,0,NULL,NULL,0,0),(19,'QU/22-23/19',20,'','CUS/RS/19/PR','Indusind Bank Ltd.','SACHIN SOLANKE / GAURANG PATEL','2022-07-18','QUOTATION FOR FIXED DEPOSIT ADVICE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','90 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8 days from the date of PO & artwork approval',NULL,NULL,'mail 14/07/2022',5,25,'2022-07-18 10:07:57',25,'2022-07-18 10:07:16',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(20,'QU/22-23/20',20,'','CUS/RS/20/PR','MARUTI NANDAN ENTERPRISES,\r\nMARUTI NANDAN ENTERPRISES, B-17, VDCM - FAZALPURA, UJJIAN-456001','DEEPESH RANKA','2022-07-18','Quotation for Cheque Lvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-07-18 11:07:27',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(21,'QU/22-23/21',23,'','CUS/RS/21/PR','The Commandant\r\n  Emb HQs \r\n  R Kamani Rd, Ballard Estate, \r\n  Fort, Mumbai, \r\n  Maharashtra 400001','Shri Gutti','2022-07-19','Quotation for  OMR Sheets & Evaluation',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100 % after complition of job','validity Of Quotation 30Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'18 % GST Applicable',NULL,NULL,'Included',NULL,NULL,NULL,'Verbal',5,28,'2022-07-19 06:07:54',NULL,NULL,3,5,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,0,0,NULL,NULL,0,0),(22,'QU/22-23/22',20,'','CUS/RS/22/PR','Indusind Bank Ltd.','SACHIN SOLANKE / GAURANG PATEL','2022-07-20','QUOTATION FOR FIXED DEPOSIT ADVICE-CONTINUOUS STATIONERY',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','90 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8 days from the date of PO & artwork approval',NULL,NULL,'mail 14/07/2022',5,25,'2022-07-20 08:07:46',25,'2022-07-20 09:07:08',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(23,'QU/22-23/23',20,'','CUS/RS/23/PR','Indusind Bank Ltd.','SACHIN SOLANKE / GAURANG PATEL','2022-07-20','QUOTATION FOR FIXED DEPOSIT ADVICE-CUTSHEET',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','90 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8 days from the date of PO & artwork approval',NULL,NULL,'mail 14/07/2022',5,25,'2022-07-20 09:07:39',25,'2022-07-20 09:07:58',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(24,'QU/22-23/24',20,'','CUS/RS/24/PR','IN-SOLUTION GLOBAL LIMITED\r\nSuite 601 / 602, Palm Spring,Link Road, Malad West,Mumbai-400064.','Arati Gavade','2022-07-21','Quotation for BOB Dubai Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO & artwork approval',NULL,NULL,'Mail 21-07-2022',5,25,'2022-07-21 07:07:02',NULL,NULL,4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(25,'QU/22-23/25',23,'','CUS/RS/25/PR','The Commandant\r\n   Emb HQs \r\n   R Kamani Rd, Ballard Estate, \r\n   Fort, Mumbai, \r\n   Maharashtra 400001','Kind Attn: Ms Sreekutty','2022-07-21','Quotation for  Printer Stationery',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100 % at closure','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,'Extra at actuals','Within 45 Days after the confirmation of PO.',NULL,NULL,'Verbal',5,28,'2022-07-21 11:07:23',NULL,NULL,3,5,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(26,'QU/22-23/26',23,'','CUS/RS/26/PR','The Commandant\r\n   Emb HQs \r\n   R Kamani Rd, Ballard Estate, \r\n   Fort, Mumbai, \r\n   Maharashtra 400001','Kind Attn: Ms Sreekutty','2022-07-21','Quotation for  Printer Stationery',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'The Price is counted on 2 days printing & closure. Amount of INR 2000/- per day will be charged after the 2 days.','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,'Transport Cost from Bhiwandi Factory to Embarbation & return will be extra at actuals','Within 45 Days after the confirmation of PO.',NULL,NULL,'Verbal',5,28,'2022-07-21 11:07:07',NULL,NULL,3,5,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(27,'QU/22-23/27',23,'','CUS/RS/27/PR','GP PARSIK SAHAKARI BANK LTD.\r\nHEAD OFFICE, SAHAKARMURTI \r\nGOPINATH SHIVRAM PATIL BHAVAN,\r\nPARSIK NAGAR, KALWA,\r\nTHANE 400605.','Palve Sir','2022-07-26','Quotation for Computer Stationary',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Meeting Dt.25-07-2022',5,25,'2022-07-26 06:07:55',25,'2022-07-26 06:07:12',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(28,'QU/22-23/28',23,'','CUS/RS/28/PR','GP PARSIK SAHAKARI BANK LTD. HEAD OFFICE, SAHAKARMURTI GOPINATH SHIVRAM PATIL BHAVAN, PARSIK NAGAR, KALWA, THANE 400605.','MR Palve','2022-07-26','Quotation for Cheque Stationery',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Within 30days from the date of Tax Invoice','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable Extra',NULL,NULL,'Extra at actuals','Within 8 Days after the confirmation of PO & Artwork Approval',NULL,NULL,'Verbal',5,28,'2022-07-26 06:07:17',28,'2022-07-26 06:07:45',3,7,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(29,'QU/22-23/29',20,'','CUS/RS/29/PR','Mohanlal Sukhadia University,\r\nThe Registrar,Udaipur - 313001,Rajasthan.','Munna Sir/Pramod Sir','2022-07-27','Quotation for Degree Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-07-26 09:07:34',25,'2022-07-27 07:07:35',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(30,'QU/22-23/30',20,'','CUS/RS/30/PR','Godrej & Boyce mfg ltd,Plant-1,Vikhroli (w) , Mumbai-400 079','Mr.Prasad Angane','2022-07-27','Quotation for Outsource Challan 10\" X 12\" X 3 Part',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Approx.Rs.140/- Per Box (500 sets per box)','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-07-27 09:07:01',25,'2022-07-27 09:07:47',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(31,'QU/22-23/31',20,'','CUS/RS/31/PR','OCHRE AND BLACK PRIVATE LIMITED','Sachin Barve','2022-07-27','Quotation for Printed Thermal Roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','60 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'mail 27-07-2022',5,25,'2022-07-27 11:07:29',25,'2022-07-27 11:07:59',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(43,'QU/22-23/43',20,'','CUS/RS/43/PR','DJ MEDIAPRINT & LOGISTICS LTD.','Ms.Diksha','2022-07-28','Quotation for Dividend Warrant',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Immediate','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 7 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-07-28 08:07:58',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(44,'QU/22-23/44',20,'','CUS/RS/44/PR','The Malad Sahakari Bank Ltd.','Desai Sir','2022-07-28','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-07-28 12:07:06',25,'2022-07-28 12:07:50',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(45,'QU/22-23/45',20,'','CUS/RS/45/PR','The Pratap Co-op Bank Ltd.,\r\nMumbai.','Rajendra Sir','2022-09-03','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Verbal',5,25,'2022-07-29 08:07:51',25,'2022-09-03 05:09:24',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(46,'QU/22-23/46',20,'','CUS/RS/46/PR','SHRI MAHALAKSHMI CO-OPERATIVE BANK LTD, KOLHAPUR','Patwardhan Sir','2022-08-01','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-08-01 11:08:46',25,'2022-08-01 11:08:34',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(47,'QU/22-23/47',20,'','CUS/RS/47/PR','IN-SOLUTION GLOBAL LIMITED','MS. ARATI GAVADE','2022-08-02','Quotation For Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-08-02 05:08:01',NULL,NULL,5,5,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(48,'QU/22-23/48',20,'','CUS/RS/48/PR','DJ MEDIAPRINT & LOGISTICS LTD.','Ms.Diksha','2022-08-03','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-08-03 06:08:33',25,'2022-08-03 06:08:21',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(49,'QU/22-23/49',20,'','CUS/RS/49/PR','MCT Cards & Technology Pvt. Ltd.','Arjun Padiyar','2022-08-03','Quotation for Indian Bank Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Delivery to be made @ Chennai, within 8-10 days from the date of PO & artwork confirmation',NULL,NULL,'Mail',5,25,'2022-08-03 06:08:31',25,'2022-08-03 06:08:49',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(50,'QU/22-23/50',20,'','CUS/RS/50/PR','MAXIMUS INFOWARE PVT. LTD.\r\n4TH FLOOR, BALAJI INFOTECH PARK, ROAD NO.16A,\r\nWAGLE INDUSTRIAL ESTATE, THANE (W)\r\nTHANE-400604.','SANDEEP ROYCHOWDHURY','2022-08-04','Quotation for Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-08-04 10:08:17',NULL,NULL,6,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(51,'QU/22-23/51',20,'','CUS/RS/51/PR','Datamatics Financial Services Ltd.\r\nPlot No. B – 5, Part B, MIDC, Cross Lane,\r\nMarol, Andheri (East), Mumbai – 400 093','STATIONERY DEPT.','2022-08-05','QUOTATION',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Against delivery','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 10 days from the date of PO & artwork approval',NULL,NULL,'VERBAL',5,25,'2022-08-05 08:08:20',25,'2022-08-05 08:08:10',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(52,'QU/22-23/52',20,'','CUS/RS/52/PR','DJ MEDIAPRINT & LOGISTICS LTD.','DIKSHA MAM','2022-08-05','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-08-05 08:08:42',25,'2022-08-05 09:08:43',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(53,'QU/22-23/53',23,'','CUS/RS/53/PR','SHREE COMPUTER\r\n11TH FLOOR, VARDAN, B/S VIMAL HOUSE, \r\nNEAR STADIUM PETROL PUMP, NAVRANGPURA, \r\nAHMADABAD-380014','Mr Nrupal Shah','2022-08-05','Quotation for  Grade Card & Hologram Master',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% Advance Balance after Dispatch','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,'Extra','4 to 5 weeks',NULL,NULL,'Mail',5,28,'2022-08-05 09:08:22',NULL,NULL,5,5,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(54,'QU/22-23/54',20,'','CUS/RS/54/PR','SATNAM ENTERPRISE','ALPESH VAGHASIA','2022-08-05','QUOTATION FOR ATM THERMAL RP ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-08-05 10:08:43',25,'2022-08-05 11:08:18',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(55,'QU/22-23/55',21,'','CUS/RS/55/PR','dfgfd','dfgfd','2022-08-06','dfgfd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'fd',2,999999999,'2022-08-06 11:08:45',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(56,'QU/22-23/56',20,'','CUS/RS/56/PR','Accurate Graphics Pvt. Ltd.','Supriya Mam','2022-08-08','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-08-08 07:08:22',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(57,'QU/22-23/57',20,'','CUS/RS/57/PR','DJ MEDIAPRINT & LOGISTICS LTD','Ms.Diksha','2022-08-11','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'Mail 11-08-2022',5,25,'2022-08-11 06:08:20',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(58,'QU/22-23/58',20,'','CUS/RS/58/PR','FIS PAYMENT SOLUTION & SERVICES PVT.LTD.','MAIL','2022-08-12','Quotation For Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail 12/08/2022',5,25,'2022-08-12 07:08:34',25,'2022-08-12 08:08:39',5,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(59,'QU/22-23/59',20,'','CUS/RS/59/PR','DJ MEDIAPRINT & LOGISTICS LTD','DIKSHA MAM','2022-08-13','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-08-13 06:08:27',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(60,'QU/22-23/60',20,'','CUS/RS/60/PR','MADRAS SECURITY PRINTERS PVT.LTD.','MS.DIVYA','2022-08-17','QUOTATION FOR INDIAN BANK PIN MAILER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% advance payment','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Approx. Rs.22000/- Extra','Within 10 days from the date of invoice',NULL,NULL,'MAIL DT.17-08-2022',5,25,'2022-08-17 11:08:08',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(61,'QU/22-23/61',20,'','CUS/RS/61/PR','National Centre for the Performing Arts,\r\nNCPA Marg, Nariman Point,\r\nMumbai 400 021','Chandrakant Jadhav','2022-08-18','Quotation For Entertainment ticket',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','Up to 31/03/2023',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail Dt.18-08-2022',5,25,'2022-08-18 04:08:25',28,'2022-08-19 07:08:07',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(96,'QU/22-23/62',20,'','CUS/RS/62/PR','National Centre for the Performing Arts,\r\nNCPA Marg, Nariman Point,\r\nMumbai 400 021','Yogesh Salvi','2022-08-18','Quotation For Entertainment ticket Copy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','Up to 31/03/2023',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail Dt.18-08-2022',5,999999999,'2022-08-18 12:08:12',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(97,'QU/22-23/97',20,'','CUS/RS/97/PR','DJ MEDIAPRINT AND LOGISTICS LTD','DIKSHA MAM','2022-08-22','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/20-08-2022',5,25,'2022-08-22 05:08:05',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(98,'QU/22-23/98',20,'','CUS/RS/98/PR','BOMBAY MERCANTILE CO-OP BANK LTD.','JOHAR SIR / NAZIMA MAM','2022-08-22','QUOTATION FOR RP ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'VERBAL',5,25,'2022-08-22 07:08:05',25,'2022-08-22 07:08:46',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(99,'QU/22-23/99',20,'','CUS/RS/99/PR','BOMBAY MERCANTILE CO-OP BANK LTD.','JOHAR SIR / NAZIMA MAM','2022-08-22','QUOTATION FOR RP ROLL Copy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'VERBAL',5,999999999,'2022-08-22 07:08:37',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(100,'QU/22-23/100',20,'','CUS/RS/100/PR','THE UGAR SUGAR WORKS LTD.','TUSHAR DESHPANDE','2022-08-22','QUOTATION FOR DIVIDEND WARRANT & INTIMATION LETTERS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'IMMEDIATE','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'FREIGHT CHARGES EXTRA','Within 8 days from the date of PO',NULL,NULL,'MAIL/18-08-2022',5,25,'2022-08-22 09:08:46',25,'2022-08-25 08:08:46',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(101,'QU/22-23/101',20,'','CUS/RS/101/PR','SUCO SOUHARDA SAHAKARI BANK','Asha A S, Senior Manager','2022-08-22','QUOTATION FOR CHEQUE SHEET',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'FREIGHT CHARGES EXTRA','Within 8 days from the date of PO',NULL,NULL,'MAIL/22-08-2022',5,25,'2022-08-22 12:08:41',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(102,'QU/22-23/102',20,'','CUS/RS/102/PR','GAJANAN ENTERPRISES','Durgesh Patil','2022-08-26','QUOTATION FOR OMR SHEETS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-08-26 09:08:30',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(103,'QU/22-23/103',20,'','CUS/RS/103/PR','qq','qq','2022-08-29','qq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'qq','qq',2,999999999,'2022-08-29 06:08:34',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(104,'QU/22-23/104',20,'','CUS/RS/104/PR','BIG TREE ENTERTAINMENT PVT. LTD.','VISHAL MHATRE','2022-08-30','Quotation For RSWS S2 2022 TICKETS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'MAIL/30-08-2022',5,25,'2022-08-30 09:08:34',25,'2022-08-30 09:08:38',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(105,'QU/22-23/105',20,'','CUS/RS/105/PR','BIG TREE ENTERTAINMENT PVT. LTD.','Sajid Shaikh','2022-08-30','Quotation For FIFA U17 WWC INDIA 2022 Ticket',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail/29-08-2022',5,25,'2022-08-30 09:08:27',25,'2022-08-30 11:08:33',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(106,'QU/22-23/106',20,'','CUS/RS/106/PR','Company name 1','Attention of 1','2022-08-31','subject 1',NULL,NULL,'5 Yearr',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Note 1','Reference 1',3,999999999,'2022-08-31 04:08:21',NULL,NULL,2,6,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(107,'QU/22-23/107',23,'','CUS/RS/107/PR','Company 2','Attention of 2','2022-08-31','Subject 2',NULL,NULL,NULL,'2 month',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Note 2','REference 2',2,999999999,'2022-08-31 04:08:50',NULL,NULL,2,6,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(108,'QU/22-23/108',20,'','CUS/RS/108/PR','Test 1','Test 1 attention','2022-09-02','Test 1 Subject',NULL,NULL,'5 year','3 month',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Test 1 note','Test 1 Reference',2,999999999,'2022-09-02 04:09:05',NULL,NULL,2,6,0,0,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(109,'QU/22-23/109',20,'','CUS/RS/109/PR','Test 2','Test 2 Attention','2022-09-02','Test 2 Subject',NULL,NULL,NULL,'6 month',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Test 2 note','Test 2 Reference',2,999999999,'2022-09-02 05:09:13',NULL,NULL,3,6,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(110,'QU/22-23/110',20,'','CUS/RS/110/PR','Wasteland Entertainment Pvt. Ltd.','Prasad Bhadavkar','2022-09-02','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/02-09-2022',5,25,'2022-09-02 09:09:52',25,'2022-09-02 09:09:00',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(111,'QU/22-23/111',20,'','CUS/RS/111/PR','Jankalyan Sahakari Bank Ltd\r\nVivek Darshan, 140 Sindhi Soc, Chembur, Mumbai 400071.','Ms Mukta Y Angre','2022-09-02','Quotation for ATM Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Payment against delivery','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,NULL,'Delivery to Location Extra 1000/- Per Location',NULL,NULL,'Mail',5,28,'2022-09-02 09:09:22',NULL,NULL,9,3,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,NULL,NULL,0,0),(112,'QU/22-23/112',20,'','CUS/RS/112/PR','THE COSMOS CO-OP .BANK LTD.','Anant Surde (Asst.Manager)','2022-09-02','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-09-02 10:09:16',25,'2022-09-02 10:09:14',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(113,'QU/22-23/113',20,'','CUS/RS/113/PR','SAREX CORPORATE OFFICE','RUPESH SIR','2022-09-07','Quotation',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-09-07 10:09:31',25,'2022-09-07 10:09:54',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(114,'QU/22-23/114',20,'','CUS/RS/114/PR','Wasteland Entertainment Pvt. Ltd.','Prasad Bhadavkar','2022-09-08','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/08-09-2022',5,25,'2022-09-08 09:09:11',25,'2022-09-08 09:09:33',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(115,'QU/22-23/115',20,'','CUS/RS/115/PR','BIG TREE ENTERTAINMENT PVT LTD','Prabhat Rai','2022-09-09','Quotation For Entertainment ticket - LEGENDS LEAGUE CRICKET MARKET - 2022',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'MAIL/08-09-2022',5,25,'2022-09-09 06:09:02',25,'2022-09-09 08:09:38',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(116,'QU/22-23/116',20,'','CUS/RS/116/PR','Madhu Art Printer\r\nT 32 Yogeshwar Apt\r\nHigh Tension Road\r\nSubhanpora\r\nVadodara 390023','Tushar Bhatt','2022-09-09','Quotation for printing of forms on carbonless paper',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% Advance Balance after Dispatch','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable Extra',NULL,NULL,NULL,NULL,NULL,NULL,'Verbal',5,28,'2022-09-09 06:09:50',NULL,NULL,2,5,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,0,0,NULL,NULL,0,0),(117,'QU/22-23/117',20,'','CUS/RS/117/PR','MCT CARDS & TECHNOLOGY PVT.LTD.','ARJUN PADIYAR','2022-09-10','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'INCLUSIVE OF FREIGHT','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail 10-09-2022',5,25,'2022-09-10 05:09:24',25,'2022-09-10 05:09:27',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(118,'QU/22-23/118',20,'','CUS/RS/118/PR','RETAIL IT SOLUTIONS','Talha Jamadar','2022-09-12','Quotation for Thermal POS Roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'mail/12-09-2022',5,25,'2022-09-12 09:09:32',25,'2022-09-13 11:09:44',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(119,'QU/22-23/119',20,'','CUS/RS/119/PR','COLORPLAST SYSTEMS PVT.LTD.','TARESH GARG','2022-09-12','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'mail/12-09-2022',5,25,'2022-09-12 10:09:27',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(120,'QU/22-23/120',23,'','CUS/RS/120/PR','Abulhoul Printing Press\r\nAirport Road, Al Garhoud\r\nPO Box 1112\r\nDubai, UAE\r\nT: +971 4 28 23400 / 282 3838\r\nF: +971 4 282 3640 / 282 9400','Mr. Nikhil','2022-09-12','Quotation for Watermark Cheque Paper',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50%  Advance Balance Before Dispatch','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,'Sea Freight Extra At Actual.',NULL,NULL,NULL,'Mail',5,28,'2022-09-12 12:09:10',NULL,NULL,5,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,0,0,0,1,0,0,NULL,NULL,0,0),(121,'QU/22-23/121',23,'','CUS/RS/121/PR','Anant National University \r\nSanskardham Campus, Bopal-Ghuma-Sanand Road, Ahmedabad, Gujarat 382115','Bhavin Shah','2022-09-12','Certificate Printing & SeQR Doc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'From Mail',5,9,'2022-09-12 12:09:09',9,'2022-09-12 12:09:40',12,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(122,'QU/22-23/122',20,'','CUS/RS/122/PR','MAXIMUS INFOWARE PVT.LTD.','Sandeep Roy Chowdhury','2022-09-19','Quotation for Welcome Kit-D.T.Patil Co-Op Bank Ltd.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'mail/13-09-2022',5,25,'2022-09-13 08:09:42',25,'2022-09-19 06:09:23',5,3,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(123,'QU/22-23/123',20,'','CUS/RS/123/PR','COLORPLAST SYSTEM PVT.LTD.','TARESH GARG','2022-09-13','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'FREIGHT CHARGES EXTRA','Within 10 days from the date of invoice',NULL,NULL,'Verbal',5,25,'2022-09-13 10:09:37',25,'2022-09-13 10:09:21',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(124,'QU/22-23/124',20,'','CUS/RS/124/PR','MCT CARDS & TECHNOLOGY PVT.LTD.','ARJUN PADIYAR','2022-09-13','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'INCLUSIVE OF FREIGHT','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-09-13 12:09:43',25,'2022-09-13 12:09:45',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(125,'QU/22-23/125',20,'','CUS/RS/125/PR','FIS PAYMENT SOLUTION & SERVICES PVT.LTD.','Kumar Mundhe','2022-09-14','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'MAIL/14-09-2022',5,25,'2022-09-14 11:09:55',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(126,'QU/22-23/126',20,'','CUS/RS/126/PR','WONDER FORMULATIONS','PRAKASH MELWANI','2022-09-15','QUOTATION FOR THERMAL ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/12-09-2022',5,25,'2022-09-15 06:09:06',25,'2022-09-15 06:09:37',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(127,'QU/22-23/127',20,'','CUS/RS/127/PR','In-solution Global Ltd.','Arati Gavade','2022-09-15','Quotation for Ebix Cash Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-09-15 12:09:44',NULL,NULL,4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(128,'QU/22-23/128',23,'','CUS/RS/128/PR','To,\r\nChannel Packaging Pvt Ltd \r\nRajmahal CHS, Ground Floor, Plot No 542, MMC Road\r\nBehind Manhar Jewllers\r\n Mahim Rly Mahim West \r\n Mumbai 400016','Mr Amit Mishra','2022-09-15','Quotation for Blank Thermal Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance.','30 days.',NULL,'Subject to Mumbai Jurisdiction. .',NULL,'18 % GST will be applicable extra',NULL,NULL,'Extra at Actuals','7 Days from the date of payment',NULL,NULL,'Verbal',5,28,'2022-09-15 03:09:51',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(129,'QU/22-23/129',20,'','CUS/RS/129/PR','KARE ENTERPRISE PVT.TLD.','PRASHANT GUJAR','2022-09-16','QUOTATION FOR LABELS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% advance payment','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'FREIGHT CHARGES EXTRA','Within 10 days from the date of PO',NULL,NULL,'MAIL/16-09-2022',5,25,'2022-09-16 06:09:58',25,'2022-09-16 06:09:06',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(130,'QU/22-23/130',20,'','CUS/RS/130/PR','IN-SOLUTION GLOBAL LTD.','Arati Gavade','2022-09-16','Quotation For Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/15-09-2022',5,25,'2022-09-16 08:09:49',25,'2022-09-16 08:09:41',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(131,'QU/22-23/131',20,'','CUS/RS/131/PR','THE MALAD SAHAKARI BANK LTD.','DESAI SIR','2022-09-17','Quotation for Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'VERBAL',5,25,'2022-09-17 06:09:35',25,'2022-09-17 06:09:52',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(132,'QU/22-23/132',20,'','CUS/RS/132/PR','Wasteland Entertainment Pvt. Ltd.','Prasad Bhadavkar','2022-09-19','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/19-09-2022',5,25,'2022-09-19 12:09:33',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(133,'QU/22-23/133',20,'','CUS/RS/133/PR','MCT CARDS & TECHNOLOGY PVT.LTD.','ARJUN PADIYAR','2022-09-20','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'INCLUSIVE OF FREIGHT','Within 8 days from the date of PO & artwork approval',NULL,NULL,'MAIL/20-09-2022',5,25,'2022-09-20 12:09:59',25,'2022-09-21 08:09:13',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(134,'QU/22-23/134',20,'','CUS/RS/134/PR','Sarex Overseas','Mr.Rupesh','2022-09-21','Quotation',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'Verbal',5,25,'2022-09-21 08:09:24',25,'2022-09-24 11:09:36',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(135,'QU/22-23/135',20,'','CUS/RS/135/PR','The Greater Co-op Bank Ltd.','Devdatta Sarang','2022-09-26','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of artwork approval',NULL,NULL,'Mail/21-09-2022',5,25,'2022-09-21 08:09:04',25,'2022-09-27 09:09:43',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(136,'QU/22-23/136',23,'','CUS/RS/136/PR','ATLANTA FORMS','Gautam Shah','2022-09-21','Quotation for Pay Order',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 8 days from the date of PO',NULL,NULL,'Verbal',5,25,'2022-09-21 09:09:29',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(137,'QU/22-23/137',20,'','CUS/RS/137/PR','DWARKADHISH FOOD STUDIO,DOMBIVALI','PIYUSH SIR','2022-09-22','QUOTATION FOR THERMAL ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Against delivery','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-09-22 05:09:15',25,'2022-09-22 05:09:40',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(138,'QU/22-23/138',20,'','CUS/RS/138/PR','ICICI SECURITIES LTD.','PRAMOD THAKUR','2022-09-22','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO',NULL,NULL,'MAIL 22-09-2022',5,25,'2022-09-22 06:09:54',25,'2022-09-22 06:09:50',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(139,'QU/22-23/139',20,'','CUS/RS/139/PR','WORLDLINE INDIA PRIVATE LIMITED','Akhilesh M. Lot','2022-09-22','Quotation for Pin Mailers',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice',NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-09-22 10:09:07',NULL,NULL,2,3,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(140,'QU/22-23/140',20,'','CUS/RS/140/PR','Shri Vile Parle Kelavani Mandal’s Mithibai College of Arts, Chauhan Institute of Science & Amrutben Jivanlal College of Commerce And Economics.','Samir D. Mehta','2022-10-17','Quotation for Junior College Leaving Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/24-09-2022',5,25,'2022-09-24 09:09:18',25,'2022-10-17 12:10:32',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(141,'QU/22-23/141',20,'','CUS/RS/141/PR','ICICI BANK LTD.','GANESH MORE','2022-09-26','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'VERBAL',5,25,'2022-09-26 06:09:30',25,'2022-09-26 06:09:10',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(142,'QU/22-23/142',20,'','CUS/RS/142/PR','WORLDLINE INDIA PRIVATE LIMITED','Akhilesh M. Lot','2022-09-29','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice',NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'MAIL',5,25,'2022-09-26 06:09:05',25,'2022-09-29 08:09:33',2,4,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(143,'QU/22-23/143',20,'','CUS/RS/143/PR','EURONET INDIA PVT.LTD.','Sachin Thakkar','2022-09-27','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/29-09-2022',5,25,'2022-09-27 09:09:53',25,'2022-09-27 09:09:25',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(144,'QU/22-23/144',20,'','CUS/RS/144/PR','BIG TREE ENTERTAINMENT PVT.LTD.','Shahbaz Mistry','2022-09-27','Quotation For Entertainment ticket',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'MAIL/27-09-2022',5,25,'2022-09-27 12:09:14',25,'2022-09-27 12:09:15',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(145,'QU/22-23/145',20,'','CUS/RS/145/PR','THE THANE DISTRICT CENTRAL CO-OP BANK LTD.','Akshay Patil','2022-09-28','Quotation for Pin Mailer & Envelope',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO',NULL,NULL,'mail/27-09-2022',5,25,'2022-09-28 10:09:14',25,'2022-09-30 09:09:51',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(146,'QU/22-23/146',20,'','CUS/RS/146/PR','WASTELAND INDIA PVT.LTD.','Prasad Bhadavkar','2022-09-29','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail/29-09-2022',5,25,'2022-09-29 07:09:20',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(147,'QU/22-23/147',20,'','CUS/RS/147/PR','SAREX CORPORATE OFFICE','RUPESH SIR','2022-09-30','QUOTATION FOR BLANK STATIONERY',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-09-30 04:09:29',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(148,'QU/22-23/148',20,'','CUS/RS/148/PR','Guardian Souharda Sahakari Bank Niyamita','S.Charles Nickson Raj','2022-09-30','Quotation for JP Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-09-30 04:09:41',25,'2022-09-30 04:09:33',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(149,'QU/22-23/149',20,'','CUS/RS/149/PR','Finacus Solutions Pvt. Ltd.','Manish Kapdoskar','2022-09-30','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-09-30 06:09:53',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(150,'QU/22-23/150',20,'','CUS/RS/150/PR','G.P.Parsik Bank Ltd.','Digambar K. Palve','2022-09-30','Quotation for NCR RP Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-09-30 11:09:29',25,'2022-09-30 11:09:12',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(151,'QU/22-23/151',20,'','CUS/RS/151/PR','SAREX CORPORATE OFFICE','RUPESH SIR','2022-09-30','QUOTATION FOR BLANK STATIONERY',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-09-30 12:09:19',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(152,'QU/22-23/152',20,'','CUS/RS/152/PR','Imagination Edutainment India Pvt. Ltd.','Gautam Thakur','2022-10-01','Quotation for IDFC Currency Kidzos',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'Mail/26-09-2022',5,25,'2022-10-01 12:10:14',25,'2022-10-01 12:10:46',5,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(153,'QU/22-23/153',20,'','CUS/RS/153/PR','Wyaghareshwar Mudrak Sahakari sanstha.','Hiren Sir','2022-10-04','Quotation For RDCC Pouch & Cover Page',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 10 days from the date of PO & artwork approval',NULL,NULL,'Mail/01-10-2022',5,25,'2022-10-04 08:10:29',25,'2022-10-04 08:10:46',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(154,'QU/22-23/154',22,'','CUS/RS/154/PR','aaa','aaaaa','2022-10-19','aaa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'aaa','aaa',5,999999999,'2022-10-06 04:10:03',999999999,'2022-10-06 04:10:35',3,3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(155,'QU/22-23/155',21,'','CUS/RS/155/PR','bbb','bbb','2022-10-06','bbb',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bbb','bbb',5,999999999,'2022-10-06 04:10:17',999999999,'2022-10-06 04:10:57',2,3,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(156,'QU/22-23/156',20,'','CUS/RS/156/PR','Bigtree Entertainment Private Limited,','Sajid Shaikh','2022-10-07','Quotation for Entertainment Tickets - NEUFC 2022-23 Guwahati',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-10-07 09:10:21',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(157,'QU/22-23/157',20,'','CUS/RS/157/PR','MCT CARDS & TECHNOLOGY PVT.LTD.','ARJUN PADIYAR','2022-10-08','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Within 30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-10-08 09:10:03',25,'2022-10-08 09:10:50',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(158,'QU/22-23/158',20,'','CUS/RS/158/PR','BIG TREE ENTERTAINMENT PVT.LTD.','TARUN SWAMI','2022-10-10','Quotation for Entertainment Tickets - Hero ISL 2022/23 Mumbai City FC',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-10-10 09:10:14',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(159,'QU/22-23/159',20,'','CUS/RS/159/PR','FIDA FILMS & HOTEL CO PVT.LTD.(CST)','Gurav Sir','2022-10-11','Quotation For Entertainment ticket',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'FREIGHT CHARGES EXTRA','Within 8 days from the date of PO',NULL,NULL,'VERBAL',5,25,'2022-10-11 07:10:19',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(160,'QU/22-23/160',20,'','CUS/RS/160/PR','Shri Vile Parle Kelavani Mandal’s\r\nDwarkadas J.Sanghvi College of Engg.\r\nVile Parle (West), Mumbai – 400 056','Vinayak K.Nayak','2022-10-11','Quotation for Grade Card',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-10-11 08:10:45',25,'2022-10-11 08:10:03',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(161,'QU/22-23/161',20,'','CUS/RS/161/PR','NUTECH BUSINESS SOLUTIONS PVT LTD','RAJESH MITTAL','2022-10-11','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-10-11 09:10:21',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(162,'QU/22-23/162',20,'','CUS/RS/162/PR','DJ MEDIAPRINT & LOGISTICS LTD.','PRANAV SIR','2022-10-14','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'EX-FACTORY',NULL,NULL,'Mail/14-10-2022',5,25,'2022-10-14 05:10:15',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(163,'QU/22-23/163',20,'','CUS/RS/163/PR','SARVATRA TECHNOLOGIES PVT.LTD.','SHUBHAM WABLE','2022-10-14','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'Mail/14-10-2022',5,25,'2022-10-14 07:10:05',25,'2022-10-14 07:10:11',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(164,'QU/22-23/164',20,'','CUS/RS/164/PR','RETAIL IT SOLUTIONS','Talha Jamadar','2022-10-15','Quotation for Thermal POS Roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'MAIL',5,25,'2022-10-15 08:10:12',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(165,'QU/22-23/165',20,'','CUS/RS/165/PR','SIDDHARTH ENTERPRISES','HIREN SIR','2022-10-15','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'VERBAL',5,25,'2022-10-15 10:10:17',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(166,'QU/22-23/166',20,'','CUS/RS/166/PR','Maximus Infoware Pvt Ltd','SANDEEP ROYCHOWDHURY','2022-10-20','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-10-17 10:10:37',25,'2022-10-20 09:10:10',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(167,'QU/22-23/167',21,'','CUS/RS/167/PR','Clarks Reliance footwear Pvt.Ltd.\r\n2nd Floor,A wing,\r\nFulkrum Business Centre,\r\nAndheri -East , Mumbai-400 009.','Kumar Alok','2022-10-18','Quotation for Thermal POS effective July 1st, 2022 ( 6 months price validity till Dec 31,2022)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from invoice date','6 months till Dec-22',NULL,NULL,NULL,NULL,NULL,NULL,'No extra delivery charges with in Thane /  Mumbai Location , for Locations outside Mumbai Transport cost will be charged as per actuals.','with in 8-10 days after receiving your P.O. & approved final art work',NULL,NULL,'NA',5,33,'2022-10-18 08:10:45',33,'2022-10-18 11:10:59',7,6,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,1,1,0,NULL,NULL,0,0),(168,'QU/22-23/168',20,'','CUS/RS/168/PR','SECURE PARKING SOLUTIONS PVT. LTD.','KHALID SIR','2022-10-19','Quotation for Thermal POS Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-10-19 08:10:21',25,'2022-10-19 08:10:55',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(169,'QU/22-23/169',20,'','CUS/RS/169/PR','IN-SOLUTION GLOBAL LIMITED','MS. ARATI GAVADE','2022-10-19','Quotation For SB Stationery',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail/19-10-2022',5,25,'2022-10-19 10:10:18',NULL,NULL,5,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(170,'QU/22-23/170',20,'','CUS/RS/170/PR','DJ MEDIAPRINT & LOGISTICS LTD.','DIKSHA MAM','2022-10-20','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-10-20 04:10:43',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(171,'QU/22-23/171',20,'','CUS/RS/171/PR','FIS PAYMENT SOLUTION & SERVICES PVT. LTD.','KUMAR MUNDHE SIR','2022-10-20','QUOTATION FOR ENVELOPES',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail/20-10-2022',5,25,'2022-10-20 09:10:35',25,'2022-10-20 09:10:55',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(172,'QU/22-23/172',21,'48','CUS/RS/172/PR','latest','latest','2022-10-21','latest',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'latest',2,999999999,'2022-10-28 04:10:09',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(173,'QU/22-23/173',21,'48','CUS/RS/173/PR','latest','latest','2022-10-21','latest Copy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'latest',2,999999999,'2022-10-28 04:10:26',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(174,'QU/22-23/174',26,'50','CUS/RS/174/PR','Vikhroli','Siddhi More','2022-10-28','Certificate Printing & SeQR Doc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SCUBE',5,9,'2022-10-28 05:10:51',9,'2023-02-15 09:02:42',2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(175,'QU/22-23/175',20,'47','CUS/RS/175/PR','DJ MEDIAPRINT & LOGISTICS LTD.','PRANAV SIR','2022-11-01','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-01 06:11:22',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(176,'QU/22-23/176',20,'47','CUS/RS/176/PR','National Centre for the Performing Arts','Yogesh Salvi','2022-11-02','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-02 03:11:45',25,'2022-11-02 04:11:07',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(177,'QU/22-23/177',23,'47','CUS/RS/177/PR','Sparks Corporate Solutions Ltd\r\nPlot No 72/74,01st Floor\r\n7th Street, Industrial Area\r\nKampala Uganda, East Africa','Prasad Gollapudi','2022-11-04','Quotation for Certificates & Envelopes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100 % Advance','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,'Airfreight Extra at Actuals',NULL,NULL,NULL,'Mail',5,28,'2022-11-04 12:11:40',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,0,0,0,1,0,0,NULL,NULL,0,0),(179,'QU/22-23/179',21,'47','CUS/RS/179/PR','Dr.E Moses Road,\r\nMahalaxmi,\r\nMumbai-','Kind Attn: Mr.Vijay D’mello, (Stores Incharge )','2022-11-08','Sub:  RWITC Enquiry & DIPL Quotation for supply of Thermal POS rolls ( Day ticket rolls )',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kind Attn: Mr.Vijay D’mello, (Stores Incharge )',3,33,'2022-11-08 07:11:35',33,'2022-11-08 08:11:36',2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(180,'QU/22-23/180',20,'47','CUS/RS/180/PR','IN-SOLUTION GLOBAL LTD.','AARTI GAVDE','2022-11-10','Quotation for Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-10 10:11:17',999999999,'2022-11-11 05:11:34',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(181,'QU/22-23/181',20,'47','CUS/RS/181/PR','The Cosmos Co-op Bank Ltd.','Anant Surde (Asst. Manager)','2022-11-18','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,NULL,NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 10 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-18 06:11:30',25,'2022-11-18 07:11:05',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,1,1,0,NULL,NULL,0,0),(183,'QU/22-23/183',20,'47','CUS/RS/183/PR','DJ MEDIAPRINT & LOGISTICS LTD.','Ms.Diksha','2022-11-19','QUOTATION FOR DIVIDEND WARRANT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 7 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-19 04:11:35',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(184,'QU/22-23/184',20,'47','CUS/RS/184/PR','FIS PAYMENT SOLUTION & SERVICES PVT.LTD.','KUMAR MUNDHE SIR','2022-11-21','QUOTATION FOR ENVELOPE',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days from the date of invoice','30 Days from the date of Quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'AT ACTUAL OUTSIDE MUMBAI','Within 10 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-21 04:11:41',25,'2022-11-21 04:11:32',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(185,'QU/22-23/185',20,'47','CUS/RS/185/PR','RETAIL IT SOLUTIONS','Talha Jamadar','2022-11-23','QUOTATION FOR THERMAL ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-11-23 04:11:01',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(186,'QU/22-23/186',23,'47','CUS/RS/186/PR','SHREE COMPUTER\r\n11TH FLOOR, VARDAN, B/S VIMAL HOUSE, \r\nNEAR STADIUM PETROL PUMP, NAVRANGPURA, \r\nAHMADABAD-380014','Mr Nrupal Shah','2022-08-05','Quotation for  Degree Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% Advance Balance after Dispatch','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,'Extra','4 to 5 weeks',NULL,NULL,'Mail',5,33,'2022-11-23 11:11:03',33,'2022-11-24 08:11:18',5,5,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(187,'QU/22-23/187',20,'47','CUS/RS/187/PR','VES INSTITUTE OF TECHNOLOGY','ROHINI MAM','2022-11-23','Quotation for Grade Card',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'verbal',5,25,'2022-11-23 11:11:23',25,'2022-11-23 11:11:10',2,3,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(188,'QU/22-23/188',20,'47','CUS/RS/188/PR','TAPAN ENTERPRISES','SIR','2022-11-25','QUOTATION FOR DIVIDEND WARRANTS',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'FREIGHT CHARGES EXTRA','Within 10 days from the date of invoice',NULL,'POSITIVE CHARGES EXTRA','VERBAL',5,25,'2022-11-25 12:11:38',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(189,'QU/22-23/189',23,'47','CUS/RS/189/PR','ARCOM PAPERS PVT LTD\r\nBHIWANDI','Amit Gupta','2022-11-28','Quotation Thermal paper rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'A',3,33,'2022-11-28 12:11:02',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(191,'QU/22-23/191',20,'47','CUS/RS/191/PR','NITA MUKESH AMBANI CULTURAL CENTRE,MUMBAI','RISHIKESH WAVDEKAR','2022-12-07','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Within 30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-12-07 11:12:10',25,'2022-12-07 12:12:32',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(192,'QU/22-23/192',20,'47','CUS/RS/192/PR','MUMBAI DISTRICT CENTRAL CO-OP BANK LTD.','NAVALE SIR','2022-12-08','QUOTATION FOR MICR TONER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-12-08 09:12:55',25,'2022-12-08 09:12:17',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(193,'QU/22-23/193',20,'47','CUS/RS/193/PR','SIDDHARTH ENTERPRISES','HIREN SIR','2022-12-08','QUOTATION FOR TERM DEPOSIT RECEIPT',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO & artwork approval',NULL,NULL,'VERBAL',5,25,'2022-12-08 09:12:36',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(194,'QU/22-23/194',20,'47','CUS/RS/194/PR','BIG TREE ENTERTAINMENT PVT. LTD.','Amit Mourya','2022-12-09','Quotation for Entertainment Tickets - Kochi Biennale 2022 -2023',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-09 07:12:47',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(195,'QU/22-23/195',20,'47','CUS/RS/195/PR','SAREX CHEMICALS PVT. LTD.','RUPESH SIR','2022-12-09','QUOTATION',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-09 12:12:33',25,'2022-12-13 12:12:39',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(196,'QU/22-23/196',20,'47','CUS/RS/196/PR','Colorplast Systems Pvt. Ltd.','Taresh Garg','2022-12-16','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-12-16 08:12:10',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(197,'QU/22-23/197',23,'49','CUS/RS/197/PR','Navkonkan Education Scoiety\r\nChiplun, Maharashtra 415605','Makrand Pendse','2022-12-19','Quotation for Navkonkan Education Soc Answer Sheet',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% Advance & 50% on Delivery within 7 days','30 days from the date invoice',NULL,'Mumbai Jurisdiction',NULL,'GST 18% will be applicable extra',NULL,NULL,'Including in price','30 days after getting PO and Design confirmation',NULL,NULL,'mail dated 17/12/2022',5,35,'2022-12-19 06:12:01',35,'2022-12-19 06:12:22',2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(198,'QU/22-23/198',23,'47','CUS/RS/198/PR','GAJRAJ 9 LLC, 1044 BUCCANEER BLVD, \r\nWINTER HAVEN FL- 33880','Rakesh Sir','2022-12-19','Quotation for Printing of Thermal POS Rolls','NHAVA SHEVA',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TEMPA/MIAMI','STANDERD PACKING','30% IN ADVANCE & BALANCE AGAINST DOCUMENTS','30 DAYS','Commercial invoice-4, commercial package list, seaway bills, certificate of origin & package list','MUMBAI JURISDICATION',NULL,NULL,NULL,NULL,NULL,'3-4 weeks from date of production',NULL,NULL,'Whatsup dated 19/12/2022',2,35,'2022-12-19 06:12:23',35,'2022-12-20 05:12:17',5,6,1,0,0,0,0,0,0,0,1,1,1,1,1,1,0,0,0,0,0,1,0,NULL,NULL,0,0),(199,'QU/22-23/199',20,'47','CUS/RS/199/PR','Paschim Banga Gramin Bank','Soumya Roy','2022-12-19','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-19 07:12:27',25,'2022-12-20 06:12:23',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,0,1,0,NULL,NULL,0,0),(200,'QU/22-23/200',20,'47','CUS/RS/200/PR','Guardian Souharda Sahakari Bank Niyamita','S.Charles Nickson Raj','2022-12-20','Quotation for JP & RP Thermal Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-12-20 07:12:26',25,'2022-12-20 07:12:44',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(201,'QU/22-23/201',20,'47','CUS/RS/201/PR','IN-SOLUTION GLOBAL LIMITED','MS. ARATI GAVADE','2022-12-20','Quotation For Welcome Kit - AK',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-12-20 08:12:26',25,'2022-12-20 08:12:14',5,5,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(202,'QU/22-23/202',20,'47','CUS/RS/202/PR','WASTELAND ENTERTAINMENT PVT. LTD.','MANISH SONKAR','2022-12-21','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2022-12-21 05:12:02',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(203,'QU/22-23/203',20,'47','CUS/RS/203/PR','Shri Vile Parle Kelvani\r\nMandal’s Dr.Bhanuben Nanavati College of\r\nPharmacy.','Bhupendra Nirgun','2022-12-21','Quotation for Grade Card',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-21 08:12:02',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(204,'QU/22-23/204',20,'47','CUS/RS/204/PR','Worldline India Pvt. Ltd.','Gaurav Tawde','2022-12-22','Quotation for Envelope',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'Subject to Mumbai Jurisdiction',NULL,'18% GST Extra',NULL,NULL,'Freight Included','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-22 06:12:44',28,'2023-02-20 06:02:07',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(205,'QU/22-23/205',20,'47','CUS/RS/205/PR','Udyam Vikas Sahakari Bank Ltd.,Pune','Admin Dept.','2022-12-27','Quotation for FD Receipt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'verbal',5,25,'2022-12-23 10:12:52',25,'2022-12-27 09:12:11',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(206,'QU/22-23/206',23,'47','CUS/RS/206/PR','MOURITANIA','Rakesh Sir','2022-12-23','Quotation for paper',NULL,NULL,NULL,NULL,'Confirmation by any bank in India',NULL,'Price on CFR naukshot basis',NULL,NULL,NULL,NULL,'30 Days',NULL,'MUMBAI JURISDICATION',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'varble',2,35,'2022-12-23 10:12:40',NULL,NULL,7,6,0,0,0,0,1,0,1,0,0,0,0,1,0,1,0,0,0,0,0,0,0,NULL,NULL,0,0),(207,'QU/22-23/207',20,'47','CUS/RS/207/PR','BIG TREE ENTERTAINMENT PVT.LTD.','VISHAL MHATRE','2022-12-24','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-24 07:12:55',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(208,'QU/22-23/208',23,'47','CUS/RS/208/PR','QUARTERFOLD','Mr. Avinash Suhanda','2022-12-26','Quotation for MCLU Booklets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mr.Mahemdra Waman',5,35,'2022-12-26 05:12:15',NULL,NULL,2,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(209,'QU/22-23/209',20,'47','CUS/RS/209/PR','BIG TREE ENTERTAINMENT PVT.LTD.','VISHAL MHATRE','2022-12-26','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-26 06:12:14',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(210,'QU/22-23/210',20,'47','CUS/RS/210/PR','BIG TREE ENTERTAINMENT PVT.LTD.','Sajid Shaikh','2022-12-27','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-27 11:12:46',25,'2022-12-27 12:12:17',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(211,'QU/22-23/211',20,'47','CUS/RS/211/PR','Tapan Enterprise','Bhupendra Shah','2022-12-28','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'TO PAY BASIS','Within 8 days from the date of PO & artwork approval','Rs.450/- EXTRA FOR POSITIVE CHARGES',NULL,'Mail',5,25,'2022-12-28 09:12:54',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,1,NULL,NULL,0,0),(212,'QU/22-23/212',20,'47','CUS/RS/212/PR','Maximus Infoware Pvt. Ltd','SANDEEP ROYCHOWDHURY','2022-12-28','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2022-12-28 11:12:38',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(213,'QU/22-23/213',23,'47','CUS/RS/213/PR','GP Parshik bank','PRABHAKAR SIR','2022-12-29','QUOTATION FOR PIN MAILER',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% ADVANCE','15 DAYS',NULL,NULL,NULL,'18% GST EXTRA',NULL,NULL,NULL,'WITHIN 2 WEEKS AFTER THE APPROVAL OF ART WORK, PO AND ADVANCE PAYMENT',NULL,NULL,'VARBAL',5,35,'2022-12-29 10:12:41',35,'2022-12-29 12:12:16',2,5,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(214,'QU/22-23/214',20,'47','CUS/RS/214/PR','NAGPUR NAGRIK SAHAKARI BANK LTD','Pravin Sir','2022-12-30','Quotation For AMC Renewal chrages',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance','Upto 31-12-2023',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,NULL,NULL,NULL,NULL,'VERBAL',5,25,'2022-12-30 04:12:21',25,'2022-12-30 04:12:05',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,0,0,NULL,NULL,0,0),(215,'QU/23-24/215',20,'47','CUS/RS/215/PR','DJ MEDIAPRINT & LOGISTICS LTD.','DIKSHA MAM','2023-01-02','Quotation for Dividend Warrants',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2023-01-02 06:01:10',25,'2023-01-02 06:01:42',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(216,'QU/23-24/216',20,'47','CUS/RS/216/PR','In-Solutions Global Limited','QUOTATION FOR WELCOME KIT','2023-01-02','Quotation For Welcome Kit',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2023-01-02 11:01:14',25,'2023-01-02 12:01:48',7,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(217,'QU/23-24/217',20,'47','CUS/RS/217/PR','NATIONAL CENTRE FOR THE PERFORMING ARTS','Yogesh Salvi','2023-01-02','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'Freight charges extra','Within 10 days from the date of PO',NULL,NULL,'Mail',5,25,'2023-01-02 12:01:07',25,'2023-01-02 12:01:15',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(218,'QU/23-24/218',20,'47','CUS/RS/218/PR','SARVATRA TECHNOLOGIES PVT. LTD.','SHUBHAM WABLE','2023-01-03','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'TO PAY BASIS','Within 10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2023-01-03 12:01:11',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(219,'QU/23-24/219',20,'47','CUS/RS/219/PR','SESHAASAI BUSINESS FORMS PVT. LTD.','VISHAL MAHESHWARI','2023-01-04','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% advance payment & balance 50% in 1 week post dispatch','30 days from the date of quotes',NULL,'MUMBAI',NULL,'18% GST Extra',NULL,NULL,NULL,'EX-FACTORY, WITHIN 10 DAYS FROM THE DATE OF PO',NULL,NULL,'Mail',5,25,'2023-01-04 11:01:39',25,'2023-01-05 04:01:51',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,NULL,NULL,0,0),(220,'QU/23-24/220',20,'47','CUS/RS/220/PR','RELIANCE INDUSTRIES LTD.','Vishvnath Singh','2023-01-06','Quotation for Entertainment Tickets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'At actual outside Mumbai','Within 10 days from the date of PO',NULL,NULL,'Mail',5,25,'2023-01-06 08:01:13',25,'2023-01-06 08:01:16',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,1,0,NULL,NULL,0,0),(221,'QU/23-24/221',23,'47','CUS/RS/221/PR','Ahmedabad','Nrupal Shah','2023-01-13','Quotation for Answer sheets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'VARBAL',3,35,'2023-01-13 09:01:42',NULL,NULL,4,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(222,'QU/23-24/222',23,'47','CUS/RS/222/PR','Sonic Supply Company','Hamid Bhai','2023-01-16','Quotation for Thermal roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'varbal',2,35,'2023-01-16 08:01:08',35,'2023-01-16 08:01:10',6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(223,'QU/23-24/223',23,'47','CUS/RS/223/PR','Sonic Supply Company','Hamid Bhai','2023-01-16','Quotation for Thermal roll Copy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'varbal',2,35,'2023-01-16 08:01:36',NULL,NULL,6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(224,'QU/23-24/224',23,'47','CUS/RS/224/PR','Sonic Supply Company','Hamid Bhai','2023-01-16','Quotation for Thermal roll Copy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'varbal',2,35,'2023-01-16 08:01:36',NULL,NULL,6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(225,'QU/23-24/225',23,'47','CUS/RS/225/PR','Shree computers','Nrupal Shah','2023-01-18','Quotation for SeQR Doc Software security features',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'VARBAL',3,35,'2023-01-18 07:01:01',NULL,NULL,3,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(226,'QU/23-24/226',23,'47','CUS/RS/226/PR','Guru Ghasidas Vishwavidyalaya\r\nKoni, Bilaspur, C.G. India-495009','Dr.  Sampoornanand Jha (Deputy Registrar-Exam)','2023-01-18','Quotation for Customized Hologram Master for Guru Ghasidas Vishwavidyalaya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,NULL,'4 weeks',NULL,NULL,'Mail',5,28,'2023-01-18 10:01:19',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,0,0,0,0,1,0,NULL,NULL,0,0),(227,'QU/23-24/227',20,'47','CUS/RS/227/PR','MUMBAI DISTRICT CENTRAL CO OP BANK\r\nMUMBAI BANK BHAVAN 207, \r\nDR D.N ROAD\r\nFORT , MUMBAI 400001\r\nM: +91 9158488470','Kind Attn: Mr Shreyas','2023-01-18','Quotation for NECS Form',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,NULL,'10-15 Days',NULL,NULL,'Verbal',5,28,'2023-01-18 10:01:52',28,'2023-01-19 08:01:08',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,NULL,NULL,0,0),(228,'QU/23-24/228',23,'47','CUS/RS/228/PR','Network section Patna CO','Rakesh Sir','2023-01-19','quotation for RPT Roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'verbal',3,35,'2023-01-19 06:01:15',NULL,NULL,3,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(229,'QU/23-24/229',20,'47','CUS/RS/229/PR','Arihant Co Op Bank','Mr Vinay Charan','2023-01-19','Quotation for Record Slip',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Against Delivery','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,NULL,NULL,NULL,NULL,'Verbal',5,28,'2023-01-19 09:01:54',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,0,0,NULL,NULL,0,0),(230,'QU/23-24/230',20,'47','CUS/RS/230/PR','Arihant Co Op Bank','Mr Vinay Charan','2023-01-19','Quotation for Record Slip',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Against Delivery','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,NULL,NULL,NULL,NULL,'Verbal',5,28,'2023-01-19 09:01:56',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,0,0,NULL,NULL,0,0),(231,'QU/23-24/231',23,'47','CUS/RS/231/PR','Vivekanand Education Society’s Institute of Technology\r\n  H.A.M.C, Collector’s Colony,\r\n  R.C Marg, Chembur\r\n  Mumbai- 400 074\r\n  M: + 91 9820569983','Ms Kajal Madnani','2023-01-19','Quotation for Answer Books',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% Asainst order Balance after delivery','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,'Included','2 weeks from the date of payment & Purchase order.',NULL,NULL,'Verbal',5,28,'2023-01-19 09:01:28',NULL,NULL,3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(232,'QU/23-24/232',23,'47','CUS/RS/232/PR','graphics system (U) Ltd','Rakesh Sir','2023-01-19','Quotation for Examination poly bags',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'mail dated 19/01/2023',2,35,'2023-01-19 10:01:53',NULL,NULL,3,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(233,'QU/23-24/233',20,'47','CUS/RS/233/PR','The Co-operative Bank of Rajkot\r\nUniversity Rd, Indira Circle,\r\nJala Ram Nagar, Rajkot, \r\nGujarat 360007\r\nM: +91 9879313293','Mr Hiren Koradiya','2023-01-23','Quotation for FD Receipt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100 % After 15 days of delivery','30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,'Extra','15 days',NULL,NULL,'Verbal',5,28,'2023-01-23 07:01:19',28,'2023-01-23 08:01:57',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(234,'QU/23-24/234',20,'47','CUS/RS/234/PR','IPS Consumables India\r\n5 GF, BLDG NO -11, VIJAY VILAS, KAVESAR, ANAND NAGAR, NEAR NEW HORIZONE SCHOOL. GHODBUNDER ROAD THANE WEST 400 615. M:  98339 18910','Mr  Rajesh Narang','2023-01-24','QUOTATION FOR THERMAL ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days after delivery','30 days from the date of quotes',NULL,'subject to mumbai jurisdiction',NULL,'18% GST Extra',NULL,NULL,NULL,'Within 7 days from the date of PO  &  approved artwork',NULL,NULL,'Mail',5,25,'2023-01-24 06:01:53',25,'2023-01-24 06:01:02',3,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,NULL,NULL,0,0),(235,'QU/23-24/235',20,'47','CUS/RS/235/PR','IPS Consumables India 5 GF, BLDG NO -11, VIJAY VILAS, KAVESAR, ANAND NAGAR, NEAR NEW\r\nHORIZONE SCHOOL. GHODBUNDER ROAD THANE WEST 400615. M:  91 98339 18910 / 91 79778 13469','Mr  Rajesh Narang','2023-01-24','QUOTATION FOR THERMAL ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days after delivery','30 days from the date of quotes',NULL,'subject to mumbai jurisdiction',NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2023-01-24 09:01:32',25,'2023-02-06 06:02:32',4,4,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,NULL,NULL,0,0),(236,'QU/23-24/236',20,'47','CUS/RS/236/PR','The Cosmos Co-op Bank Ltd.','Anant Surde (Asst.Manager)','2023-01-27','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,NULL,NULL,NULL,'At actual outside Mumbai','Within 8 days from the date of PO',NULL,NULL,'Mail',5,25,'2023-01-27 05:01:36',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,0,1,1,0,NULL,NULL,0,0),(237,'QU/23-24/237',23,'47','CUS/RS/237/PR','Diabold','bharath Nagavelly','2023-01-30','Quotation for DN Thermal Paper',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Email dated 17.01.23',3,35,'2023-01-30 06:01:12',35,'2023-01-30 06:01:55',6,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(238,'QU/23-24/238',23,'47','CUS/RS/238/PR','regalia Fashion Pvt Ltd','Mr. Vijayshankar Nair','2023-01-31','Quotation for Supply of Grade Cards(Mark Sheets)',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance payment','only till 31st Jan 2023',NULL,NULL,NULL,': GST @ 18% Will Be Applicable',NULL,NULL,NULL,'within 10-15 days after receipt of payment and approval of the design.',NULL,NULL,'email date 30.01.23',3,35,'2023-01-31 04:01:36',35,'2023-02-01 05:02:08',2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,'Delivery of the product at Sion, Mumbai will cost additional Rs. 2,000/-',NULL,1,0),(239,'QU/23-24/239',23,'47','CUS/RS/239/PR','Shree Computers','Nrupal Shah','2023-02-01','Quotation for Degree Certificates.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'15 days',NULL,NULL,NULL,'GST @ 18% Will Be Applicable',NULL,NULL,NULL,'Freight Charges Extra, : 3-10 working date of  PO & Art work approval',NULL,NULL,'Email dated 24.01.23',3,35,'2023-02-01 11:02:05',NULL,NULL,3,6,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(240,'QU/23-24/240',20,'47','CUS/RS/240/PR','finacus.co.in','Manish Kapdoskar','2023-02-06','quotation for blank pinmailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'Within 8-10 days from the date of PO & artwork approval',NULL,NULL,'Mail',5,25,'2023-02-06 06:02:16',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(241,'QU/23-24/241',23,'47','CUS/RS/241/PR','Yash tech Trading LLC','Yamini mam','2023-02-13','Quotation for Rice Straw','As per requirement',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'As per customer requirement','Customized packing charges extra','50% with order & 50% before dispatch','30 days',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'3-4 weeks from date of production',NULL,NULL,'Verbal',2,35,'2023-02-13 05:02:37',NULL,NULL,5,6,1,0,0,0,0,0,0,0,1,1,1,1,0,0,0,0,0,0,0,1,0,NULL,NULL,0,0),(242,'QU/23-24/242',20,'50','CUS/RS/242/PR','Scube for testing','Siddhi More','2023-02-15','Stamp field testing',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'SIddhi',5,9,'2023-02-15 09:02:44',NULL,NULL,2,2,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(243,'QU/23-24/243',20,'47','CUS/RS/243/PR','MCT CARDS & TECHNOLOGY PVT LTD.','ARJUN PADIYAR','2023-02-18','Quotation For TMB Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'INCLUSIVE',NULL,NULL,NULL,'Mail',5,25,'2023-02-18 09:02:33',25,'2023-02-18 12:02:56',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,0,0,NULL,NULL,0,0),(244,'QU/23-24/244',23,'47','CUS/RS/244/PR','Sintel Security Print Solution ltd','Felix Mutinda','2023-02-20','Quotation for KBA Approved Cheque paper',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kenya',NULL,'50% With Order&  50% before dispatch','30 days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,NULL,'30 days from sea transport',NULL,NULL,'email dated 17.01.23',2,35,'2023-02-20 08:02:22',NULL,NULL,2,6,0,0,0,0,0,0,0,0,1,0,1,1,0,1,0,0,0,0,0,1,0,NULL,NULL,0,0),(245,'QU/23-24/245',23,'47','CUS/RS/245/PR','Shree Computers','Nrupal Shah','2023-02-20','Quotation for Marksheets - A4 sheets','Freight Charges Extra',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,': 50% Advance Balance after Dispatch','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,NULL,'21 to 30 days of  PO & Art work approval',NULL,NULL,'Email dated 20.02.23',3,35,'2023-02-20 09:02:35',NULL,NULL,2,6,1,0,0,0,0,0,0,0,0,0,1,1,0,1,0,0,0,0,0,1,0,NULL,NULL,0,0),(246,'QU/23-24/246',20,'47','CUS/RS/246/PR','ICICI SECURITIES LTD','Anupam Jaiswal','2023-02-20','Webtrade Pin mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,NULL,NULL,NULL,'Mail',5,25,'2023-02-20 10:02:37',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,0,0,NULL,NULL,0,0),(247,'QU/23-24/247',20,'47','CUS/RS/247/PR','Shri Vile Parle Kelavani Mandal\'s','Samir Mehta','2023-02-20','Quotation for Grade card stationery',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Email dated 16.02.23',3,35,'2023-02-20 11:02:21',NULL,NULL,4,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(248,'QU/23-24/248',20,'47','CUS/RS/248/PR','Shri Vile Parle Kelavani Mandal\'s','Samir Mehta','2023-02-20','Quotation for Grade card stationery',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Email dated 16.02.23',3,35,'2023-02-20 11:02:21',NULL,NULL,4,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(249,'QU/23-24/249',20,'47','CUS/RS/249/PR','NM College of Commerce & Economics','Ms. Jagruti Mewada','2023-02-20','Quotation for Grade Card & Passing Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'email date 20.02.23',3,35,'2023-02-20 11:02:00',NULL,NULL,4,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(250,'QU/23-24/250',23,'47','CUS/RS/250/PR','BML Ltd Malawi','Shakeel Patel','2023-02-22','Quotation for Certificate & PVC Card',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Malawi',NULL,'50% With Order&  50% before dispatch','30 days',NULL,'Subject to Mumbai Jurisdiction',NULL,NULL,NULL,NULL,NULL,'30 days after production',NULL,'lead time 120 days for production','Verbal',2,35,'2023-02-22 05:02:33',NULL,NULL,3,6,0,0,0,0,0,0,0,0,1,0,1,1,0,1,0,0,0,0,0,1,0,NULL,NULL,0,0),(251,'QU/23-24/251',23,'47','CUS/RS/251/PR','Sun Techsolution India Pvt Ltd','Santosh Gaikwad','2023-02-22','Quotation for Railway Thermal Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Email dated 22.02.23',3,35,'2023-02-22 11:02:24',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(253,'QU/23-24/253',20,'47','CUS/RS/253/PR','SESHAASAI PVT LTD','BALKRISHNA MUSALE','2023-02-25','QUATATION FOR ATM ROLL',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'EX- BHIWANDI FACTORY',NULL,NULL,'Mail 24/02/2023',5,25,'2023-02-25 08:02:44',25,'2023-02-28 09:02:31',10,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(254,'QU/23-24/254',20,'47','CUS/RS/254/PR','SESHAASAI PVT LTD','BALKRISHNA MUSALE','2023-02-28','Quotation for ATM Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 Days',NULL,'Subject to Mumbai Jurisdiction',NULL,'GST @ 18% Will Be Applicable',NULL,NULL,NULL,NULL,NULL,NULL,'Mail',5,25,'2023-02-28 12:02:09',25,'2023-03-01 10:03:09',5,4,0,0,0,0,0,0,0,0,0,0,0,1,0,1,0,1,0,0,0,0,0,NULL,NULL,0,0),(255,'QU/23-24/255',20,'47','CUS/RS/255/PR','SHRI VILE PARLE KELAVANI MANDAL\'s','NIdhi Pawar','2023-03-02','Quotation for USHA PRAVIN GANDHI COLLEGE GRADE CARD',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Email dated 01.03.2023',3,35,'2023-03-02 05:03:02',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(256,'QU/23-24/256',20,'47','CUS/RS/256/PR','WASTELAND ENTERTAINMENT PRIVATE LIMITED','Prasad Bhadavkar','2023-03-08','IPL TICKET',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'EX-FACTORY',NULL,NULL,'Mail',5,25,'2023-03-08 10:03:11',25,'2023-03-08 12:03:14',5,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(257,'QU/23-24/257',23,'47','CUS/RS/257/PR','Kabeli Press, Nepal','Janka Prasad','2023-03-11','Quotation for Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Email dated 02.03.2023',2,35,'2023-03-11 05:03:16',NULL,NULL,4,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(258,'QU/23-24/258',23,'47','CUS/RS/258/PR','Shree Computers','Nrupal Shah','2023-03-13','Quotation for Degree Certificate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% Advance Balance after Dispatch','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'18% GST Applicable',NULL,NULL,NULL,'21 TO 30 days of  PO & Art work approval',NULL,NULL,'Verbal dated 13.03.2023',3,35,'2023-03-13 12:03:36',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,'Freight Charges Extra',NULL,1,0),(259,'QU/23-24/259',20,'47','CUS/RS/259/PR','WorldLine India Private Limited','Akhilesh M. Lot','2023-03-15','QUOTATION FOR Welcome Letter & Inner Jacket Stationary',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'EX-FACTORY VIKHROLI',NULL,NULL,'Mail',5,25,'2023-03-15 09:03:15',NULL,NULL,5,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(260,'QU/23-24/260',20,'47','CUS/RS/260/PR','WorldLine India Private Limited\r\nRaiaskaran Tech Park\r\nTower 1, 2nd Floor, Phase 2,\r\nSakinaka, M.V. Road\r\n,Andheri East, Mumbai – 400072','Akhilesh M. Lot','2023-03-15','QUOTATION FOR Welcome Letter & Inner Jacket Stationary',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,'MAHAPE',NULL,NULL,'Mail',5,25,'2023-03-15 09:03:16',25,'2023-03-16 07:03:19',5,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,1,0,NULL,NULL,0,0),(261,'QU/23-24/261',23,'47','CUS/RS/261/PR','Manipal Technologies Limited, \r\nPMS, 3rd Floor, Udayavani Building, \r\nUdayavani Road, Manipal – 576 104, Karnataka','kuldeep','2023-03-15','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance payment','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,': GST @ 18% Will Be Applicable',NULL,NULL,'Transport charges extra','21 to 30 days of PO & Art work approval',NULL,NULL,'Email dated 14.03.23',5,35,'2023-03-15 11:03:01',NULL,NULL,3,3,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,1,1,0,NULL,NULL,0,0),(262,'QU/23-24/262',23,'47','CUS/RS/262/PR','Mr. Kuldeep Maurya\r\nImage India Solutions Pvt. Ltd.,\r\nAdd: A- 89, 3rd Floor, \r\nSector- 65 Noida Industrial Area, \r\nGautam Budh Naga-201301','Kuldeep maurya','2023-03-15','Quotation for Certificate & marksheets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance payment','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'18% GST Applicable',NULL,NULL,NULL,'30 days after production',NULL,NULL,'Verbal dated 11.03.23',3,35,'2023-03-15 12:03:30',NULL,NULL,6,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,'Freight Charges Extra',NULL,1,0),(263,'QU/23-24/263',23,'47','CUS/RS/263/PR','Mr. Kuldeep Maurya\r\nImage India Solutions Pvt. Ltd.,\r\nAdd: A- 89, 3rd Floor, \r\nSector- 65 Noida Industrial Area, \r\nGautam Budh Naga-201301','Kuldeep maurya','2023-03-15','Quotation for Certificate & marksheets',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance payment','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,'18% GST Applicable',NULL,NULL,NULL,'30 days after production',NULL,NULL,'Verbal dated 11.03.23',3,35,'2023-03-15 12:03:30',NULL,NULL,6,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,'Freight Charges Extra',NULL,1,0),(264,'QU/23-24/264',20,'47','CUS/RS/264/PR','The Co-Operative Bank of Rajkot Ltd\r\nSahakar Sarita, Panchnath Road,\r\nRajkot- 360001','Mr. Hiren Koradiya','2023-03-16','Quotation for Thermal Roll',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance','15 days',NULL,'Subject to Mumbai Jurisdiction','In case of Pandemic War Or any Globally Abnormal Situation','GST @ 18% Will Be Applicable',NULL,NULL,NULL,'21 TO 30 days of  PO & Art work approval',NULL,'Freight Charges Extra','Email dated 16.03.23',3,35,'2023-03-16 10:03:51',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,1,1,0,0,0,1,0,NULL,NULL,0,0),(265,'QU/23-24/265',20,'47','CUS/RS/265/PR','FIS PAYMENT SOLUTION & SERVICES PVT.LTD.','KUMAR MUNDHE SIR','2023-03-17','Quotation for Pin Mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,NULL,NULL,NULL,'Mail',5,25,'2023-03-17 10:03:59',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,0,0,0,0,0,NULL,NULL,0,0),(266,'QU/23-24/266',20,'47','CUS/RS/266/PR','Mr. Rahul gengaje.\r\nMumbai District central co.op bank ltd,\r\n207 Dr .D.N.Raod fort Mumbai 400001.\r\nphone no.022-22616175','rahul gengaje','2023-03-17','amc of comperhensive printer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Mail',5,25,'2023-03-17 11:03:08',25,'2023-03-20 11:03:11',2,5,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(267,'QU/23-24/267',23,'47','CUS/RS/267/PR','Dipon Group\r\n!st Flr, Dhingra Enclave, \r\nAbove Axis Bank, Katol Road\r\nNagpur,India','Mr. Pritam','2023-03-21','Quotation for Security Paper',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'email dated 20.03.23',2,35,'2023-03-21 01:03:13',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,NULL,NULL,0,0),(268,'QU/23-24/268',23,'47','CUS/RS/268/PR','Godrej','Mr. Prasad Angane','2023-03-21','Quotation for Challan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance payment','15 days',NULL,'Subject to Mumbai Jurisdiction',NULL,': GST @ 18% Will Be Applicable',NULL,NULL,NULL,'within 10-15 days after receipt of payment and approval of the design.',NULL,NULL,'email dated 20.03.23',3,35,'2023-03-21 01:03:24',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,0,1,0,0,0,1,0,NULL,NULL,0,0),(269,'QU/23-24/269',20,'47','CUS/RS/269/PR','MCT CARDS & TECHNOLOGY PVT LTD.','ARJUN PADIYAR','2023-03-27','Ebixcash world money Pin mailer',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,'INCLUSIVE',NULL,NULL,NULL,'Mail',5,25,'2023-03-27 05:03:23',25,'2023-03-27 05:03:35',2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,1,0,0,NULL,NULL,0,0),(270,'QU/23-24/270',20,'47','CUS/RS/270/PR','SESHAASAI PVT LTD','BALKRISHNA MUSALE','2023-03-29','Quotation for ATM Rolls',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Within 30 days from the date of invoice','30 days from the date of quotes',NULL,NULL,NULL,'18% GST Extra',NULL,NULL,NULL,NULL,NULL,NULL,'Mail',5,25,'2023-03-29 11:03:23',NULL,NULL,2,4,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,1,0,0,0,0,0,NULL,NULL,0,0),(271,'QU/23-24/271',23,'47','CUS/RS/271/PR','Godjrej','godrej','2023-03-29','Quotation for Challan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance','30 days',NULL,'Subject to Mumbai Jurisdiction','In case of Pandemic War Or any Globally Abnormal Situation',': GST @ 18% Will Be Applicable',NULL,NULL,NULL,'within 10-15 days after receipt of payment and approval of the design.',NULL,NULL,'email dated 27.03.23',3,35,'2023-03-29 01:03:24',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,1,1,0,0,0,1,0,NULL,NULL,0,0),(272,'QU/23-24/272',23,'47','CUS/RS/272/PR','milan, chembur, Mumbai 400071','Namechand bhai','2023-03-30','Quotation for computer stationary',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'100% Advance payment','30 days',NULL,'Subject to Mumbai Jurisdiction','In case of Pandemic War Or any Globally Abnormal Situation',': GST @ 18% Will Be Applicable',NULL,NULL,NULL,'within 10-15 days after receipt of payment and approval of the design.',NULL,NULL,'Verbal',3,35,'2023-03-30 09:03:22',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,1,1,0,0,0,1,0,NULL,NULL,0,0),(273,'QU/23-24/273',23,'47','CUS/RS/273/PR','Yashtech Trading LLC','yamini mam','2023-04-04','Quotation for Thermal Paper Qmatic',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'FOB India',NULL,'100% Advance payment','30 days',NULL,'Subject to Mumbai Jurisdiction','In case of Pandemic War Or any Globally Abnormal Situation',NULL,NULL,NULL,NULL,'FOB India Basis by Sea, Sea Freight Extra',NULL,NULL,'Verbal',2,35,'2023-04-04 10:04:39',35,'2023-04-04 12:04:32',2,6,0,0,0,0,0,0,0,0,1,0,1,1,0,1,1,0,0,0,0,1,0,NULL,NULL,0,0),(274,'QU/23-24/274',20,'47','CUS/RS/274/PR','Shri Vile Parle Kelavani Mandal’s\r\nMithibai College of Arts, Chauhan Institute of Science\r\nVile Parle (W), Mumbai- 400056','Alka Shukla Madam','2023-04-05','Quotation for Grade Card SMT. Gokalibai Punamchand Pitamber High School & Acharya Ambalal V. Patel JR. College',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'30 days','15 days',NULL,'Subject to Mumbai Jurisdiction','In case of Pandemic War Or any Globally Abnormal Situation',': GST @ 18% Will Be Applicable',NULL,NULL,NULL,': 21 to 30 days of PO & Art work approval',NULL,NULL,'Verbal',3,35,'2023-04-05 11:04:45',35,'2023-04-05 11:04:20',2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,1,1,0,0,0,1,0,NULL,NULL,0,0),(275,'QU/23-24/275',23,'47','CUS/RS/275/PR','Sathyam paper products\r\nPalanganatham\r\nMadurai','Manimaram','2023-04-05','Quotation for Thermal Paper',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'50% With Order&  50% before dispatch','15 days',NULL,'Subject to Mumbai Jurisdiction','In case of Pandemic War Or any Globally Abnormal Situation','GST @ 18% Will Be Applicable',NULL,NULL,NULL,'delivery charges extra',NULL,NULL,'email dated 05.04.23',3,35,'2023-04-05 12:04:55',NULL,NULL,2,6,0,0,0,0,0,0,0,0,0,0,1,1,0,1,1,1,0,0,0,1,0,NULL,NULL,0,0);

/*Table structure for table `tbl_rm_category` */

DROP TABLE IF EXISTS `tbl_rm_category`;

CREATE TABLE `tbl_rm_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_rm_category` */

insert  into `tbl_rm_category`(`id`,`unique_id`,`name`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'MC/1','invisible fiber paper',0,'2023-04-12 05:04:42',NULL,NULL),(2,'MC/2','GEMINI FIBER PAPER',0,'2023-04-12 05:04:51',NULL,NULL),(3,'MC/3','MAINTENANCE KIT',0,'2023-04-12 05:04:02',NULL,NULL),(4,'MC/4','PALLET',0,'2023-04-12 05:04:14',NULL,NULL),(5,'MC/5','MACHINE SPARE PARTS',0,'2023-04-12 05:04:30',NULL,NULL),(6,'MC/6','BLANKET',0,'2023-04-12 05:04:43',NULL,NULL),(7,'MC/7','PAPER',0,'2023-04-12 05:04:52',NULL,NULL),(8,'MC/8','INK',0,'2023-04-12 05:04:07',NULL,NULL),(9,'MC/9','BOXES',0,'2023-04-12 05:04:17',NULL,NULL),(10,'MC/10','OTC PAPER',0,'2023-04-12 05:04:32',NULL,NULL),(11,'MC/11','CORE',0,'2023-04-12 05:04:43',NULL,NULL),(12,'MC/12','PLATE',0,'2023-04-12 05:04:56',NULL,NULL);

/*Table structure for table `tbl_rm_category_old` */

DROP TABLE IF EXISTS `tbl_rm_category_old`;

CREATE TABLE `tbl_rm_category_old` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_rm_category_old` */

insert  into `tbl_rm_category_old`(`id`,`name`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (9,'Gum',0,'2022-06-03 12:06:20',0,'2022-06-03 12:06:10'),(10,'Laminate',0,'2022-06-03 12:06:23',NULL,NULL),(11,'Kraft Paper',0,'2022-06-03 12:06:43',NULL,NULL),(14,'Shrink Pouch',0,'2022-06-03 12:06:00',0,'2022-06-03 12:06:12'),(16,'Dura 290 gsm',0,'2022-06-06 07:06:18',NULL,NULL),(18,'PALLET',0,'2022-06-09 05:06:51',NULL,NULL);

/*Table structure for table `tbl_rm_product_category` */

DROP TABLE IF EXISTS `tbl_rm_product_category`;

CREATE TABLE `tbl_rm_product_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rmcategory` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_rm_product_category` */

insert  into `tbl_rm_product_category`(`id`,`unique_id`,`rmcategory`,`name`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'PC/1',8,'PANTONE RED 1715 C',0,'2023-04-12 05:04:19',NULL,NULL),(2,'PC/2',7,'HANSOL 405MM X 48 GSM',0,'2023-04-12 05:04:25',NULL,NULL),(3,'PC/3',7,'Oji Paper',0,'2023-04-12 05:04:29',NULL,NULL),(4,'PC/4',7,'MICR PAPER 8.5inch X 11inch 95GSM',0,'2023-04-12 05:04:45',NULL,NULL),(5,'PC/5',7,'Dura 290 gsm',0,'2023-04-12 05:04:00',NULL,NULL),(6,'PC/6',7,'RAILWAY WATERMARK PAPER',0,'2023-04-12 05:04:14',NULL,NULL),(7,'PC/7',7,'4804 KRAFFT PAPER',0,'2023-04-12 05:04:26',NULL,NULL),(8,'PC/8',7,'APPLETON',0,'2023-04-12 05:04:44',NULL,NULL),(9,'PC/9',7,'NON TARABLE PAPER',0,'2023-04-12 05:04:03',NULL,NULL),(10,'PC/10',7,'RAILWAY BOND',0,'2023-04-12 05:04:23',NULL,NULL),(11,'PC/11',7,'THERMAL PAPER',0,'2023-04-12 05:04:40',NULL,NULL),(12,'PC/12',7,'MICR PAPER',0,'2023-04-12 05:04:00',NULL,NULL),(13,'PC/13',7,'MAPLITHO PAPER',0,'2023-04-12 05:04:12',NULL,NULL),(14,'PC/14',7,'PARCHMENT PAPER',0,'2023-04-12 05:04:26',NULL,NULL),(15,'PC/15',7,'MISTUBISHI 385 MM * 55 GSM',0,'2023-04-12 05:04:41',NULL,NULL),(16,'PC/16',8,'NORMAL INK',0,'2023-04-12 05:04:05',NULL,NULL),(17,'PC/17',8,'THERMOCHROMIC INK',0,'2023-04-12 05:04:24',NULL,NULL),(18,'PC/18',8,'INVISIBLE INK',0,'2023-04-12 05:04:39',NULL,NULL),(19,'PC/19',8,'FUGITIVE INK',0,'2023-04-12 05:04:08',NULL,NULL),(20,'PC/20',8,'SPECIAL INK',0,'2023-04-12 05:04:28',NULL,NULL),(21,'PC/21',8,'PENETRATING INK',0,'2023-04-12 05:04:44',NULL,NULL),(22,'PC/22',8,'PROCESS INK',0,'2023-04-12 05:04:02',NULL,NULL),(23,'PC/23',11,'PAPER CORE',0,'2023-04-12 05:04:28',NULL,NULL),(24,'PC/24',11,'PLASTIC CORE',0,'2023-04-12 05:04:41',NULL,NULL);

/*Table structure for table `tbl_rtgs_neft` */

DROP TABLE IF EXISTS `tbl_rtgs_neft`;

CREATE TABLE `tbl_rtgs_neft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_rtgs_neft` */

insert  into `tbl_rtgs_neft`(`id`,`unique_id`,`company_id`,`bank_name`,`account_no`,`branch_name`,`cost_center`,`account_name`,`email_id`,`mobile_number`,`ifsc_code`,`account_type`,`address_of_remitter`,`template`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (50,NULL,'42','bank','acc','ba',62,'fds','fsd','sdfs','af',65,'dfsdf',65,999999999,'2022-05-26 12:05:19',NULL,NULL),(51,NULL,'42','djfb','asfjdbs','jsadbsj',64,'dfjd','nfsd','ksnfdka','kadn ak',62,'jfbsdjf',64,NULL,NULL,NULL,NULL),(52,NULL,'40','tst','test','test',62,'test','test','test','test',62,'test',66,NULL,NULL,NULL,NULL),(53,NULL,'43','SBI Bank','12346789123456','Ghatkopar',62,'Siddhi More','tester2@scube.ne.in','9988667788','IFSC1234',64,'Ghatkopar',62,9,'2022-05-27 04:05:06',NULL,NULL),(54,NULL,'36','bank name','cjd','dnfka',63,'daskn','kndka','fckasd','kfnckdasa',62,'das',65,NULL,NULL,NULL,NULL),(55,NULL,'36','jbasjb','bwdjb','bsdjb',63,'cxzcjb','jbcjdb','vjbsdjb','djbsjb',62,'sdas',62,NULL,NULL,NULL,NULL),(56,NULL,'36','sadbk','nkdssak','ksnsdkas',63,'adans','knfdksa','kncksan','kcfnsdkv',63,'asdas',63,NULL,NULL,NULL,NULL),(57,NULL,'45','SBI Bank','12346789123456','Ghatkopar',62,'Siddhi More','tester2@scube.ne.in','9988667788','IFSC1234',63,'Ghatkopar',65,NULL,NULL,NULL,NULL),(58,NULL,'47','Saraswat Bank','055500100003620','VIKHROLI',63,'DEVHARSH INFOTECH PVT LTD','accounts@devharshinfotech.com','9321028626','SRCB0000055',64,'VIKHROLI',62,9,'2022-06-20 12:06:33',NULL,NULL),(59,NULL,'48','Saraswat Bank','12346789123456','VIKHROLI',63,'DEVHARSH INFOTECH PVT LTD','tester2@scube.ne.in','9321028626','IFSC1234',63,'Ghatkopar',65,9,'2022-08-05 12:08:30',NULL,NULL),(60,NULL,'50','Saraswat Bank','055500100003620','Ghatkopar',63,'DEVHARSH INFOTECH PVT LTD','accounts@devharshinfotech.com','','',63,'',63,9,'2022-08-08 05:08:37',NULL,NULL),(63,NULL,'51','cvx','vxc','',63,'','','','',64,'',65,999999999,'2022-08-09 06:08:30',NULL,NULL),(64,NULL,'51','cvx','vxc','',63,'','','','',64,'',65,999999999,'2022-08-09 06:08:51',NULL,NULL),(65,NULL,'51','vcxv','cvxc','',63,'','','','',64,'',64,NULL,NULL,NULL,NULL),(66,NULL,'52','fdsfs','dsf','',63,'','','','',63,'',64,999999999,'2022-08-09 06:08:00',NULL,NULL),(67,'CB/67','53','das','asdsa','',64,'','','','',63,'',65,999999999,'2022-08-09 06:08:51',NULL,NULL),(68,'CB/68','53','xzcz','zxcxz','',62,'','','','',62,'',63,NULL,NULL,NULL,NULL),(69,'CB/69','49','Saraswat Bank','055500100003628','VIKHROLI',63,'DEVHARSH INFOTECH PVT LTD','tester2@scube.ne.in','','',63,'',62,9,'2022-10-28 05:10:31',NULL,NULL);

/*Table structure for table `tbl_sales_work_order_unit` */

DROP TABLE IF EXISTS `tbl_sales_work_order_unit`;

CREATE TABLE `tbl_sales_work_order_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_sales_work_order_unit` */

/*Table structure for table `tbl_salesworkorder` */

DROP TABLE IF EXISTS `tbl_salesworkorder`;

CREATE TABLE `tbl_salesworkorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `discount` decimal(8,2) DEFAULT 0.00,
  `numbers_from` varchar(55) DEFAULT NULL,
  `numbers_to` varchar(55) DEFAULT NULL,
  `customer_order_email` varchar(55) DEFAULT NULL,
  `open` varchar(15) DEFAULT NULL,
  `dispatch_invoice_instructions` varchar(55) DEFAULT NULL,
  `job_instructions` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_salesworkorder` */

insert  into `tbl_salesworkorder`(`id`,`unique_id`,`order_no`,`order_name`,`customer_name`,`delivery_location`,`transporter_option`,`transporter_location`,`transporter_mode`,`tax_structure`,`freight_charges`,`freight_charges_before_tax`,`loading_packing_charges`,`loading_packing_charges_before_tax`,`insurance_charges`,`insurance_charges_before_tax`,`other_charges`,`other_charge_txt1`,`other_charge_txt2`,`other_charge_before_tax`,`transport_debit_note`,`sales_order_date`,`target_delivery_date`,`po_no`,`po_date`,`transaction_category`,`job_card_no`,`job_instruction`,`quantity`,`quantity_unit`,`po_qty_unit_diff_frm_so`,`po_quantity`,`po_quantity_unit`,`width`,`width_unit`,`height_length`,`height_length_unit`,`unit_price`,`unit_price_unit`,`discount`,`numbers_from`,`numbers_to`,`customer_order_email`,`open`,`dispatch_invoice_instructions`,`job_instructions`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'WO/23-24/1','148/SO-24','MOGADISHU MUNCIPAL LAND TAX CERTIFICATE','19','2',NULL,NULL,'4','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-04-18','2023-04-18','VERBAL','2023-04-18','1','1','EXACT REPEAT JOB. FOLLOW ARTWORK','70000','4',NULL,NULL,NULL,'210','1','290','1','0.49',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'EXACT REPEAT JOB. FOLLOW ARTWORK',28,'2023-04-18 12:04:01',NULL,NULL),(2,'WO/23-24/2','123/so/tes 23-24','sales order test','3','3','1','1','1','','0',NULL,'0',NULL,'0',NULL,NULL,NULL,NULL,NULL,'0','2023-05-03','2023-05-03','verbal','2023-05-03','1','2','new test job....','10000','4',NULL,NULL,NULL,'9','3','4','3','12.6',NULL,'0.00','122','3330',NULL,NULL,'nil','new test job....',9,'2023-05-03 12:05:32',NULL,NULL),(3,'WO/23-24/3','test123434567','sales order testing','15','2','1','1','1','','0',NULL,'0',NULL,'0',NULL,NULL,NULL,NULL,NULL,'0','2023-05-10','2023-05-10','verbal0876','2023-05-10','1','1','test0123456','50000','1',NULL,NULL,NULL,'8','1','5','1','12',NULL,'5.00','12','12',NULL,NULL,'test','test0123456',9,'2023-05-10 06:05:58',NULL,NULL),(4,'WO/23-24/4','test123434567','sales order testing','15','2','1','1','1','','0',NULL,'0',NULL,'0',NULL,NULL,NULL,NULL,NULL,'0','2023-05-10','2023-05-10','verbal0876','2023-05-10','1','1','test0123456','50000','1',NULL,NULL,NULL,'8','1','5','1','12',NULL,'5.00','12','12',NULL,NULL,'test','test0123456',9,'2023-05-10 07:05:57',NULL,NULL);

/*Table structure for table `tbl_salesworkorder_labeling` */

DROP TABLE IF EXISTS `tbl_salesworkorder_labeling`;

CREATE TABLE `tbl_salesworkorder_labeling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) NOT NULL,
  `company_name` varchar(55) DEFAULT NULL,
  `print_for` varchar(55) DEFAULT NULL,
  `item` varchar(55) DEFAULT NULL,
  `inline_text` varchar(55) DEFAULT NULL,
  `special_instruction` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_salesworkorder_labeling` */

insert  into `tbl_salesworkorder_labeling`(`id`,`general_id`,`company_name`,`print_for`,`item`,`inline_text`,`special_instruction`) values (1,2,'devharsh',NULL,'pin mailer','na','nil'),(2,4,'devharsh',NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_salesworkoreder_labeling_printfor` */

DROP TABLE IF EXISTS `tbl_salesworkoreder_labeling_printfor`;

CREATE TABLE `tbl_salesworkoreder_labeling_printfor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_salesworkoreder_labeling_printfor` */

/*Table structure for table `tbl_sequence` */

DROP TABLE IF EXISTS `tbl_sequence`;

CREATE TABLE `tbl_sequence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_sequence` */

insert  into `tbl_sequence`(`id`,`description`) values (1,'ASC'),(2,'DESC');

/*Table structure for table `tbl_spare` */

DROP TABLE IF EXISTS `tbl_spare`;

CREATE TABLE `tbl_spare` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` tinyint(2) NOT NULL,
  `type` tinyint(2) NOT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tbl_spare` */

/*Table structure for table `tbl_state` */

DROP TABLE IF EXISTS `tbl_state`;

CREATE TABLE `tbl_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(55) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `description` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_state` */

insert  into `tbl_state`(`id`,`unique_id`,`code`,`description`,`country`,`remark`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,NULL,NULL,'ANDHRA PRADESH','103',NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,'ASSAM','103',NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,'ARUNACHAL PRADESH','103',NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,'BIHAR','103',NULL,NULL,NULL,NULL,NULL),(5,NULL,NULL,'GUJRAT','103',NULL,NULL,NULL,NULL,NULL),(6,NULL,NULL,'HARYANA','103',NULL,NULL,NULL,NULL,NULL),(7,NULL,NULL,'HIMACHAL PRADESH','103',NULL,NULL,NULL,NULL,NULL),(8,NULL,NULL,'JAMMU & KASHMIR','103',NULL,NULL,NULL,NULL,NULL),(9,NULL,NULL,'KARNATAKA','103',NULL,NULL,NULL,NULL,NULL),(10,NULL,NULL,'KERALA','103',NULL,NULL,NULL,NULL,NULL),(11,NULL,NULL,'MADHYA PRADESH','103',NULL,NULL,NULL,NULL,NULL),(12,NULL,NULL,'MAHARASHTRA','103',NULL,NULL,NULL,NULL,NULL),(13,NULL,NULL,'MANIPUR','103',NULL,NULL,NULL,NULL,NULL),(14,NULL,NULL,'MEGHALAYA','103',NULL,NULL,NULL,NULL,NULL),(15,NULL,NULL,'MIZORAM','103',NULL,NULL,NULL,NULL,NULL),(16,NULL,NULL,'NAGALAND','103',NULL,NULL,NULL,NULL,NULL),(17,NULL,NULL,'ORISSA','103',NULL,NULL,NULL,NULL,NULL),(18,NULL,NULL,'PUNJAB','103',NULL,NULL,NULL,NULL,NULL),(19,NULL,NULL,'RAJASTHAN','103',NULL,NULL,NULL,NULL,NULL),(20,NULL,NULL,'SIKKIM','103',NULL,NULL,NULL,NULL,NULL),(21,NULL,NULL,'TAMIL NADU','103',NULL,NULL,NULL,NULL,NULL),(22,NULL,NULL,'TRIPURA','103',NULL,NULL,NULL,NULL,NULL),(23,NULL,NULL,'UTTAR PRADESH','103',NULL,NULL,NULL,NULL,NULL),(24,NULL,NULL,'WEST BENGAL','103',NULL,NULL,NULL,NULL,NULL),(25,NULL,NULL,'DELHI','103',NULL,NULL,NULL,NULL,NULL),(26,NULL,NULL,'GOA','103',NULL,NULL,NULL,NULL,NULL),(27,NULL,NULL,'PONDICHERY','103',NULL,NULL,NULL,NULL,NULL),(28,NULL,NULL,'LAKSHDWEEP','103',NULL,NULL,NULL,NULL,NULL),(29,NULL,NULL,'DAMAN & DIU','103',NULL,NULL,NULL,NULL,NULL),(30,NULL,NULL,'DADRA & NAGAR','103',NULL,NULL,NULL,NULL,NULL),(31,NULL,NULL,'CHANDIGARH','103',NULL,NULL,NULL,NULL,NULL),(32,NULL,NULL,'ANDAMAN & NICOBAR','103',NULL,NULL,NULL,NULL,NULL),(33,NULL,NULL,'UTTARANCHAL','103',NULL,NULL,NULL,NULL,NULL),(34,NULL,NULL,'JHARKHAND','103',NULL,NULL,NULL,NULL,NULL),(35,NULL,NULL,'CHATTISGARH','103',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tbl_style` */

DROP TABLE IF EXISTS `tbl_style`;

CREATE TABLE `tbl_style` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_style` */

insert  into `tbl_style`(`id`,`description`) values (1,'Gatholic'),(2,'MICR'),(3,'Barcode'),(4,'Inkjet');

/*Table structure for table `tbl_tax` */

DROP TABLE IF EXISTS `tbl_tax`;

CREATE TABLE `tbl_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(25) DEFAULT NULL,
  `tax_name` varchar(55) DEFAULT NULL,
  `tax_value` varchar(55) DEFAULT NULL,
  `flate_value` varchar(55) DEFAULT NULL,
  `based_on` varchar(55) DEFAULT NULL,
  `taxes` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_tax` */

insert  into `tbl_tax`(`id`,`unique_id`,`tax_name`,`tax_value`,`flate_value`,`based_on`,`taxes`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,'TX/1','IGST 12%','12','1',NULL,'',28,'2023-04-12 06:04:53',NULL,NULL),(2,'TX/2','IGST 18%','18','1',NULL,'',28,'2023-04-12 06:04:09',NULL,NULL),(3,'TX/3','CGST 12%','12',NULL,NULL,'',28,'2023-04-12 06:04:45',NULL,NULL),(4,'TX/4','CGST 6%','6',NULL,NULL,'',28,'2023-04-12 06:04:58',NULL,NULL),(5,'TX/5','CGST 9%','9',NULL,NULL,'',28,'2023-04-12 06:04:13',NULL,NULL),(7,'TX/7','SGST 6%','6',NULL,NULL,'',28,'2023-04-12 06:04:24',NULL,NULL),(8,'TX/8','SGST 9%','9',NULL,NULL,'',28,'2023-04-12 06:04:44',NULL,NULL),(9,'TX/9','CGST 18%','18',NULL,NULL,'',28,'2023-04-12 06:04:14',NULL,NULL),(10,'TX/10','SGST 18%','18',NULL,NULL,'',28,'2023-04-12 06:04:26',NULL,NULL),(11,'TX/11','SGST 12%','12',NULL,NULL,'',28,'2023-04-12 06:04:40',NULL,NULL);

/*Table structure for table `tbl_tax_structure` */

DROP TABLE IF EXISTS `tbl_tax_structure`;

CREATE TABLE `tbl_tax_structure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(25) DEFAULT NULL,
  `tax_structure_name` varchar(55) DEFAULT NULL,
  `tax` varchar(25) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_tax_structure` */

/*Table structure for table `tbl_tax_taxes` */

DROP TABLE IF EXISTS `tbl_tax_taxes`;

CREATE TABLE `tbl_tax_taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_tax_taxes` */

/*Table structure for table `tbl_tearing` */

DROP TABLE IF EXISTS `tbl_tearing`;

CREATE TABLE `tbl_tearing` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_tearing` */

insert  into `tbl_tearing`(`id`,`description`) values (1,'Yes'),(2,'No');

/*Table structure for table `tbl_template` */

DROP TABLE IF EXISTS `tbl_template`;

CREATE TABLE `tbl_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_template` */

insert  into `tbl_template`(`id`,`description`) values (62,'Saraswat Bank'),(63,'Union Bank'),(64,'Deutsche Bank'),(65,'HDFC Bank'),(66,'ICICI Bank');

/*Table structure for table `tbl_transaction_category` */

DROP TABLE IF EXISTS `tbl_transaction_category`;

CREATE TABLE `tbl_transaction_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_transaction_category` */

insert  into `tbl_transaction_category`(`id`,`description`) values (1,'Manufacturing'),(2,'Trading'),(3,'Export'),(4,'Labour');

/*Table structure for table `tbl_transport` */

DROP TABLE IF EXISTS `tbl_transport`;

CREATE TABLE `tbl_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(25) DEFAULT NULL,
  `transport_name` varchar(55) DEFAULT NULL,
  `transport_phone_no` varchar(55) DEFAULT NULL,
  `transport_add` varchar(55) DEFAULT NULL,
  `transport_location` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_transport` */

insert  into `tbl_transport`(`id`,`unique_id`,`transport_name`,`transport_phone_no`,`transport_add`,`transport_location`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,NULL,'om logistis','123456789','bhiwandi',NULL,9,'2023-05-03 12:05:41',NULL,NULL);

/*Table structure for table `tbl_transport_location` */

DROP TABLE IF EXISTS `tbl_transport_location`;

CREATE TABLE `tbl_transport_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique_id` varchar(25) DEFAULT NULL,
  `location_name` varchar(55) DEFAULT NULL,
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_transport_location` */

insert  into `tbl_transport_location`(`id`,`unique_id`,`location_name`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`) values (1,NULL,'bhiwandi',9,'2023-05-03 12:05:28',NULL,NULL);

/*Table structure for table `tbl_transport_mode` */

DROP TABLE IF EXISTS `tbl_transport_mode`;

CREATE TABLE `tbl_transport_mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_transport_mode` */

insert  into `tbl_transport_mode`(`id`,`description`) values (1,'Road'),(2,'Rail'),(3,'Air'),(4,'Sea');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `addeddby` int(11) DEFAULT NULL,
  `addedddttm` datetime DEFAULT NULL,
  `modifiedby` int(11) DEFAULT NULL,
  `modifieddttm` datetime DEFAULT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`unique_id`,`fullname`,`username`,`password`,`designation`,`position`,`site`,`status`,`emailid`,`usercode`,`maker_checker`,`addeddby`,`addedddttm`,`modifiedby`,`modifieddttm`,`role`) values (9,NULL,'Administrator User','Administrator','123456',NULL,NULL,56,1,'admin@pmserp.com','administrator',1,0,'2022-04-28 04:04:40',9,'2023-04-04 03:04:29',25),(20,NULL,'Yogesh Jatia','yogesh','{Ck(5H',53,53,NULL,1,'yogesh@devharshinfotech.com','yogesh',1,0,'2022-06-21 04:06:39',9,'2023-04-18 11:04:47',25),(21,NULL,'Krishnamurthy              ','krishamurthy','v4$>D5',53,53,54,1,'krishnamurthy@devharshinfotech.com','krishamurthy',NULL,0,'2022-06-21 04:06:57',9,'2023-04-03 10:04:52',35),(22,NULL,'A. Vengeteshan       ','railway','P4U!tA',53,53,54,1,'railway@devharshinfotech.com','railway',NULL,0,'2022-06-21 04:06:05',9,'2023-04-03 10:04:23',35),(23,NULL,'Rakesh Shah','rakeshshah','fW2=pQ',53,53,NULL,1,'rakeshshah900@gmail.com','rakeshshah',1,0,'2022-06-21 04:06:13',9,'2023-04-19 10:04:04',25),(24,NULL,'Mahendra Waman','ceo','8a+5UK',59,54,54,1,'ceo@devharshinfotech.com','ceo',NULL,0,'2022-06-21 04:06:32',9,'2023-04-03 10:04:03',25),(25,NULL,'Shamal Raul','Shamal','56ks#',55,55,NULL,1,'office.yogesh@devharshinfotech.com','Shamal',1,0,'2022-06-21 04:06:45',9,'2023-04-11 05:04:39',34),(26,NULL,'Diskshag','Diksha','Qc#8A6',53,53,54,1,'tender@devharshinfotech.com','Diksha',NULL,0,'2022-07-05 08:07:31',NULL,NULL,35),(27,NULL,'Manisha shah','Manisha','SM{J:4',53,53,54,1,'accounts@devharshinfotech.com','Manisha',1,0,'2022-07-05 08:07:15',0,'2022-07-05 08:07:23',35),(28,NULL,'Mansi','Mansi','23MS*',53,53,54,1,'rakesh@devharshinfotech.com','Mansi',1,0,'2022-07-05 08:07:42',9,'2023-01-16 11:01:27',25),(29,NULL,'Chandrakant Tandel','Chandrakant','CA+6#g',54,54,54,1,'accounts2@devharshinfotech.com','Chandrakant',NULL,0,'2022-08-02 05:08:24',NULL,NULL,25),(33,'US/33','Tanaya Patil','Tanaya','08TP$',60,54,54,1,'rakesh@scube.net.in','Tanaya',1,9,'2022-09-09 07:09:28',9,'2022-12-08 09:12:01',34),(34,'US/34','Test User','tester','Scube@123',58,53,54,1,'dev12@scube.net.in','TEST01',0,9,'2022-12-02 09:12:16',NULL,NULL,30),(35,'US/35','Veda','Veda','09VP&',NULL,NULL,NULL,1,NULL,'Veda',NULL,9,'2022-12-08 09:12:48',9,'2023-04-04 03:04:43',35),(37,'US/37','Siddhi  More','Siddhi','123456',53,53,54,1,'tester2@scube.net.in','User-test',0,9,'2023-03-27 08:03:59',NULL,NULL,35),(38,'US/38','Ankit Sanghavi','Ankit','AS45&#',53,53,56,1,'ankit@scube.net.in','Ankit',NULL,9,'2023-04-04 03:04:36',NULL,NULL,35),(39,'US/39','Makrand Pendse','Makrand','MP12#%',53,53,56,1,'makrand.pendse@scube.net.in','Makrand',NULL,9,'2023-04-04 03:04:43',NULL,NULL,35),(40,'US/40','Gangadhar Polkam','Gangadhar','GP56*!',53,53,56,1,'gangadhar@scube.net.in','Gangadhar',NULL,9,'2023-04-04 03:04:20',NULL,NULL,35),(41,'US/41','Swapnil Sawant','Swapnil','SS47*@',53,53,56,1,'bdm@scube.net.in','Swapnil',NULL,9,'2023-04-04 03:04:34',NULL,NULL,35),(42,'US/42','Rajesh Ratwani','Rajesh','RR123*',53,53,NULL,1,'rajesh@devharshinfotech.com','Rajesh',NULL,9,'2023-04-12 11:04:19',NULL,NULL,35),(43,'US/43','Varsha Maurya','Varsha','VM12@#',55,55,NULL,1,'sales@scube.net.in','Varsha',NULL,9,'2023-04-21 12:04:20',NULL,NULL,34),(44,'US/44','Babu Kuttapan','Babu','BK12#$',53,53,1,1,NULL,'Babu',1,9,'2023-04-27 04:04:36',9,'2023-05-10 07:05:05',35);

/*Table structure for table `terms_titles` */

DROP TABLE IF EXISTS `terms_titles`;

CREATE TABLE `terms_titles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categories_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `deleted_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `terms_titles` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
