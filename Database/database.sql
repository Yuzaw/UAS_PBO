/*
SQLyog Community v13.2.1 (64 bit)
MySQL - 10.4.28-MariaDB : Database - projek_uas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`projek_uas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `projek_uas`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(36,'2023_12_24_102253_create_login',2),
(37,'2023_12_26_181150_create_auth',3),
(39,'2014_10_12_000000_create_users_table',4),
(40,'2014_10_12_100000_create_password_reset_tokens_table',4),
(41,'2019_08_19_000000_create_failed_jobs_table',4),
(42,'2019_12_14_000001_create_personal_access_tokens_table',4),
(43,'2023_11_27_091508_create_products',4),
(44,'2024_06_25_101516_create_cart',4);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`kategori`,`produk`,`harga`,`deskripsi`,`img`,`created_at`,`updated_at`) values 
(3,'kue bolu','Bolu kukus',30000,'Bolu kukus lembut dengan rasa yang enak, cocok untuk berbagai kesempatan.','https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/12/12/tips-membuat-kue-bolu-1-1jp-20221212104720.jpg','2024-06-25 14:59:51','2024-06-29 14:05:01'),
(5,'kue ulang tahun','Kue ulang tahun coklat',130000,'Kue ulang tahun spesial dengan rasa coklat yang lezat.','https://filebroker-cdn.lazada.co.id/kf/Sfe0193f187914864a87f014b7b2c0157d.jpg','2024-06-28 14:51:23','2024-06-29 14:05:19'),
(6,'roti dan donat','Roti tawar',15000,'Roti tawar lembut yang cocok untuk sarapan atau camilan.','https://res.cloudinary.com/dk0z4ums3/image/upload/v1687134278/attached_image/5-manfaat-roti-untuk-kesehatan-yang-tidak-kalah-dari-nasi.jpg','2024-06-28 14:54:22','2024-06-29 14:05:27'),
(7,'roti dan donat','Roti kacang hijau',5000,'Roti isi kacang hijau yang manis dan lezat.','https://asset.kompas.com/crops/dWfSnl6uLDOpWud87Tv56LuCB4Y=/324x81:1000x532/750x500/data/photo/2023/08/18/64dec760c890c.jpg','2024-06-28 14:55:11','2024-06-29 14:05:34'),
(8,'roti dan donat','Roti pisang coklat',5000,'Roti dengan isian pisang dan coklat yang nikmat.','https://o-cdn-cas.sirclocdn.com/parenting/original_images/Roti_Lembut_Pisang_Cokelat.png','2024-06-28 14:56:00','2024-06-29 14:05:44'),
(9,'roti dan donat','Roti sobek',8000,'Roti empuk yang bisa disobek dengan rasa yang enak.','https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/indizone/2022/10/28/mnsdWNM/resep-roti-sobek-super-lembut-ala-bakery-dijamin-anti-gagal74.jpg','2024-06-28 14:57:18','2024-06-29 14:06:03'),
(10,'kue ulang tahun','Kue ulang tahun red velvet',130000,'Kue ulang tahun red velvet dengan stroberi segar.','https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/07/24072104/Resep-Kue-Ulang-Tahun-Rumahan-Sederhana-dan-Elegan-.jpg.webp','2024-06-28 14:58:26','2024-06-29 14:06:13'),
(11,'kue bolu','Bolu coklat almond',35000,'Bolu coklat dengan taburan almond yang gurih.','https://img.okezone.com/content/2023/05/25/298/2820123/resep-bolu-panggang-coklat-almond-enak-dan-lembut-6WcgPlCWCM.jpg','2024-06-28 15:00:33','2024-06-29 14:06:27'),
(12,'roti dan donat','Donat 6 isi',24000,'Paket donat dengan 6 varian rasa yang berbeda.','https://cdn.linkumkm.id/library/7/0/5/4/1/70541_840x576.jpg','2024-06-28 15:12:36','2024-06-29 14:06:36'),
(13,'roti dan donat','Donat kentang',3000,'Donat empuk yang terbuat dari kentang.','https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2019/06/27/4167103315.jpg','2024-06-28 15:14:31','2024-06-29 14:06:43'),
(14,'kue bolu','Bolu pandan',30000,'Bolu dengan aroma dan rasa asli pandan yang menggoda.','https://akcdn.detik.net.id/visual/2022/05/06/chiffon-cake_43.jpeg?w=720&q=90','2024-06-28 15:16:14','2024-06-29 14:06:51'),
(15,'kue bolu','Bolu gulung keju',25000,'Bolu gulung lembut dengan isian keju yang melimpah.','https://kurio-img.kurioapps.com/21/12/17/77ccc6c9-35af-4508-ae24-33f33ea3f423.jpe','2024-06-28 15:18:07','2024-06-29 14:07:01'),
(16,'kue ulang tahun','Kue ulang tahun caramel',130000,'Kue ulang tahun dengan rasa caramel yang manis dan lembut.','https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/8/15/c3baad86-d8dc-4703-bfac-0702c3d021f5.jpg','2024-06-29 00:54:10','2024-06-29 14:07:11'),
(17,'kue ulang tahun','Kue ulang tahun stroberi',130000,'Kue ulang tahun dengan rasa stroberi segar yang manis.','https://www.onlinedelivery.in/images/detailed/33/21684.jpg','2024-06-29 00:59:10','2024-06-29 14:07:21'),
(18,'kue ulang tahun','Kue ulang tahun oreo',130000,'Kue ulang tahun dengan taburan oreo yang renyah.','https://images.tokopedia.net/img/cache/700/VqbcmM/2021/6/3/71a39dc1-1ce7-4c4c-8c75-edf214327058.jpg','2024-06-29 01:03:24','2024-06-29 14:07:32'),
(19,'kue bolu','Bolu coklat',130000,'Bolu coklat yang lembut dan nikmat, cocok untuk pencinta coklat.','https://img-global.cpcdn.com/recipes/727d66f835937751/400x400cq70/photo.jpg','2024-06-29 01:08:50','2024-06-29 14:07:39');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
