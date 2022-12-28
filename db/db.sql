-- MySQL dump 10.13  Distrib 5.7.39, for osx10.17 (x86_64)
--
-- Host: 127.0.0.1    Database: ecom
-- ------------------------------------------------------
-- Server version	5.7.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$NIkWnO063CjZYIS0dZbM/.Y6f4Zu5Gy3V8fB5Op1Y3r8wdpvXDG0a',NULL,'2022-09-16 10:22:42','2022-09-16 10:22:42');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `delete_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` (`id`, `title`, `slug`, `status`, `delete_status`, `created_by`, `created_at`, `updated_at`) VALUES (1,'brand 1','brand-1','active','0',NULL,NULL,NULL),(2,'brand 2','brand-2','active','0',NULL,NULL,NULL),(3,'brand 3','brand-3','active','0',NULL,NULL,NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart_products`
--

DROP TABLE IF EXISTS `cart_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cart_products_cart_id_foreign` (`cart_id`),
  KEY `cart_products_product_id_foreign` (`product_id`),
  CONSTRAINT `cart_products_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cart_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart_products`
--

LOCK TABLES `cart_products` WRITE;
/*!40000 ALTER TABLE `cart_products` DISABLE KEYS */;
INSERT INTO `cart_products` (`id`, `cart_id`, `product_id`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES (1,1,2,2,1020,'2022-09-16 19:48:38','2022-09-16 19:48:38'),(2,1,1,3,630,'2022-09-16 19:49:08','2022-09-16 19:49:08'),(6,2,2,1,510,'2022-09-17 01:35:27','2022-09-17 01:51:54'),(7,2,1,1,210,'2022-09-17 01:49:15','2022-09-17 01:49:15'),(8,2,2,2,1020,'2022-09-17 01:53:56','2022-09-17 01:53:56'),(9,3,2,2,1020,'2022-09-17 02:02:34','2022-09-17 02:02:34'),(10,3,1,3,630,'2022-09-17 04:32:20','2022-09-17 04:32:20'),(11,4,1,1,210,'2022-09-17 04:36:15','2022-09-17 04:36:15'),(27,14,1,2,420,'2022-09-17 06:37:43','2022-09-17 06:37:47'),(28,14,2,5,2550,'2022-09-17 06:37:59','2022-09-17 06:37:59'),(29,15,1,10,2000,'2022-09-17 08:11:33','2022-09-17 08:22:11'),(32,16,1,10,2000,'2022-09-18 04:07:07','2022-09-18 04:10:23'),(34,17,1,3,600,'2022-09-18 06:10:17','2022-09-18 06:28:04'),(39,20,1,1,150,'2022-09-18 07:25:16','2022-09-18 07:25:16'),(40,21,2,1,450,'2022-09-18 07:27:31','2022-09-18 07:27:31');
/*!40000 ALTER TABLE `cart_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_session_id_index` (`session_id`),
  CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` (`id`, `session_id`, `user_id`, `created_at`, `updated_at`) VALUES (1,'VhMpRUiZPVskPbX6kzqPNWjU3Of1O5PX7SuLSrye',NULL,'2022-09-16 19:48:38','2022-09-16 19:48:38'),(2,'bDfdxitnq2gcENxf1yQFRooCSPBGGoxYB15vGyJH',NULL,'2022-09-16 23:27:15','2022-09-16 23:27:15'),(3,'4RoJhH8kLuLJ9IVend4adjdtAzVguaWuUFaJPvwK',1,'2022-09-17 02:02:34','2022-09-17 02:02:34'),(4,'TNdFYImhssVbbySSwO68tRMfnGm7OWI0MwkABciD',NULL,'2022-09-17 04:36:15','2022-09-17 04:36:15'),(14,'bOFwhN0oaBCgdndfVYY3qKWbcqE81gXaSNjnfYgD',NULL,'2022-09-17 06:37:43','2022-09-17 06:37:43'),(15,'mf4FWJbFmg5rs3Cp0lApK5atD5VVoHNAXGmJUdOc',NULL,'2022-09-17 08:11:33','2022-09-17 08:11:33'),(16,'0J1l4AAqc69MsTUst5eAHN4JaOTD5rLbOYQeHRoJ',NULL,'2022-09-18 03:12:37','2022-09-18 03:12:37'),(17,'gBYLpeacEi2RNMpTyK7cQ4VEJ6BTALxeH3vIBBCi',2,'2022-09-18 06:07:18','2022-09-18 06:07:18'),(20,'r2PJk6JwiyIVN2fhs2rS3BnIZ1who7tJx6VlJGi1',1,'2022-09-18 07:25:16','2022-09-18 07:25:16'),(21,'vINWyUrk9JFfXiIrCeLMWn5u8o3KdjlBVltm8Jkf',NULL,'2022-09-18 07:27:31','2022-09-18 07:27:31');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('common','service','product') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `delete_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`, `type`, `image`, `slug`, `created_by`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES (1,'Appliances',NULL,NULL,'appliances',NULL,'active','0',NULL,NULL),(2,'Automobiles & Spare Parts',NULL,NULL,'automobiles-spare-parts',NULL,'active','0',NULL,NULL),(3,'Beauty & Personal Care',NULL,NULL,'beauty-personal-care',NULL,'active','0',NULL,NULL),(4,'Electronics',NULL,NULL,'electronics',NULL,'active','0',NULL,NULL),(5,'Clothing & Shoes',NULL,NULL,'clothing-shoes',NULL,'active','0',NULL,NULL),(6,'Jewelry & Watches',NULL,NULL,'jewelry-watches',NULL,'active','0',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home_page_banners`
--

DROP TABLE IF EXISTS `home_page_banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home_page_banners` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home_page_banners`
--

LOCK TABLES `home_page_banners` WRITE;
/*!40000 ALTER TABLE `home_page_banners` DISABLE KEYS */;
/*!40000 ALTER TABLE `home_page_banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2022_08_17_111200_create_admins_table',1),(5,'2022_08_19_062111_create_categories_table',1),(6,'2022_09_03_052557_create_room_types_table',1),(7,'2022_09_09_102451_create_system_settings_table',1),(8,'2022_09_13_185908_create_brands_table',1),(9,'2022_09_14_072217_create_products_table',1),(10,'2022_09_15_101440_create_home_page_banners',1),(19,'2022_09_16_170307_create_cart_table',2),(20,'2022_09_16_170855_create_cart_product_table',2),(23,'2022_09_17_111152_create_orders_table',3),(24,'2022_09_17_111834_create_order_products_table',3),(25,'2022_09_18_134051_add_column_bulk_price_into_products_table',4),(26,'2022_09_18_141720_add_column_email_into_orders_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_products`
--

DROP TABLE IF EXISTS `order_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_products_order_id_foreign` (`order_id`),
  KEY `order_products_product_id_foreign` (`product_id`),
  CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_products`
--

LOCK TABLES `order_products` WRITE;
/*!40000 ALTER TABLE `order_products` DISABLE KEYS */;
INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `total_price`, `created_at`, `updated_at`) VALUES (1,4743483119,1,2,420,'2022-09-17 05:22:54','2022-09-17 05:22:54'),(2,4743483119,2,3,1530,'2022-09-17 05:22:54','2022-09-17 05:22:54'),(3,2865995833,1,5,1050,'2022-09-17 05:54:42','2022-09-17 05:54:42'),(4,9433634244,2,5,2550,'2022-09-17 05:55:38','2022-09-17 05:55:38'),(5,7159934523,1,2,420,'2022-09-17 06:39:55','2022-09-17 06:39:55'),(6,7159934523,2,4,2040,'2022-09-17 06:39:55','2022-09-17 06:39:55'),(7,6273638355,1,11,1650,'2022-09-18 07:23:50','2022-09-18 07:23:50'),(8,6273638355,2,2,900,'2022-09-18 07:23:50','2022-09-18 07:23:50'),(9,1054989172,1,2,300,'2022-09-18 07:24:27','2022-09-18 07:24:27'),(10,8362747995,2,1,450,'2022-09-18 07:29:13','2022-09-18 07:29:13'),(11,8604520682,2,1,500,'2022-09-18 07:29:46','2022-09-18 07:29:46');
/*!40000 ALTER TABLE `order_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  KEY `orders_email_index` (`email`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `email`, `status`, `created_at`, `updated_at`) VALUES (1054989172,NULL,'buyer@gmail.com','Processing','2022-09-18 07:24:27','2022-09-18 07:24:27'),(2865995833,1,'','Processing','2022-09-17 05:54:42','2022-09-17 05:54:42'),(4743483119,1,'','Processing','2022-09-17 05:22:54','2022-09-17 05:22:54'),(6273638355,NULL,'hello@gmail.com','Processing','2022-09-18 07:23:50','2022-09-18 07:23:50'),(7159934523,1,'','Processing','2022-09-17 06:39:55','2022-09-17 06:39:55'),(8362747995,1,'buyer@gmail.com','Processing','2022-09-18 07:29:13','2022-09-18 07:29:13'),(8604520682,2,'seller@gmail.com','Processing','2022-09-18 07:29:46','2022-09-18 07:29:46'),(9433634244,2,'','Processing','2022-09-17 05:55:38','2022-09-17 05:55:38');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bulk_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b2b_Price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_second` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_third` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` enum('pending','active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `delete_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `category_id`, `description`, `price`, `bulk_price`, `min_quantity`, `b2b_Price`, `image`, `image_second`, `image_third`, `slug`, `created_by`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES (1,'LIGER Handsfree','4','LIGER Handsfree / Headset Kabel Stereo Dan Bass L-10 Dengan Mic Earphone L-10','210','150','10','200','IMG_2140818100.jpg','IMG_1794556786.jpg','IMG_165257681.jpg','n-a',2,'active','0','2022-09-16 10:24:12','2022-09-16 10:43:50'),(2,'LIGER L-616 Headset','4','LIGER L-616 Headset Headphone Earphone Handsfree Bass with Mic\r\nPowerfull Bass','510','450','10','500','IMG_1142502426.jpg','IMG_1519329334.jpg','IMG_1479854189.jpg','n-a',2,'active','0','2022-09-16 11:34:15','2022-09-16 11:34:44');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `room_types`
--

DROP TABLE IF EXISTS `room_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `room_types` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `delete_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `room_types`
--

LOCK TABLES `room_types` WRITE;
/*!40000 ALTER TABLE `room_types` DISABLE KEYS */;
INSERT INTO `room_types` (`id`, `title`, `slug`, `status`, `delete_status`, `created_by`, `created_at`, `updated_at`) VALUES (1,'Single Room','single-room','active','0',NULL,NULL,NULL),(2,'Double Room','double-room','active','0',NULL,NULL,NULL),(3,'Quad Bedroom','quad-bedroom','active','0',NULL,NULL,NULL),(4,'Queen Room','queen-room','active','0',NULL,NULL,NULL),(5,'King Room','single-room','active','0',NULL,NULL,NULL),(6,'Suite','suite','active','0',NULL,NULL,NULL),(7,'Mini-Suite','mini-suite','active','0',NULL,NULL,NULL),(8,'Deluxe Room','deluxe-room','active','0',NULL,NULL,NULL),(9,'Single Room','single-room','active','0',NULL,NULL,NULL),(10,'Super deluxe','super-deluxe','active','0',NULL,NULL,NULL);
/*!40000 ALTER TABLE `room_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `system_settings`
--

DROP TABLE IF EXISTS `system_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `system_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `system_settings`
--

LOCK TABLES `system_settings` WRITE;
/*!40000 ALTER TABLE `system_settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `system_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_business` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('vendor','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'vendor',
  `status` enum('new','active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `business_name`, `mobile`, `phone`, `city`, `state`, `zip_code`, `tin_number`, `address`, `business_license`, `about_business`, `type`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (1,'Buyer','buyer@gmail.com',NULL,'08116116663',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'user','active',NULL,'$2y$10$PmQ4EB09GmfqGXwwnAKQA.8X0tPWFjwYE4WsazTk2WvRWrH4YWzfS','3kf9ACXWCCP8EGJM069zljGl90aLuu5qISK8Yr1WnMGmUGczi4CZAUCQnhPx','2022-09-16 10:21:55','2022-09-16 10:21:55'),(2,'Seller','seller@gmail.com','Seller Business','08116116663','08116116663','2','2','12930',NULL,'Jl. Jend. Sudirman Kav. 48A',NULL,NULL,'vendor','active',NULL,'$2y$10$9afJclxsqDZNXnPq5MutqOqQTbpGZXWq9OgkI0DodWSWN7hHXOBUK','XVufEQZe2zIn8obc4MdsBxdQzRnYabbaJbGG031xXCglbAIn6P9KNBYKVNbx','2022-09-16 10:22:29','2022-09-16 10:22:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-18 21:31:10
