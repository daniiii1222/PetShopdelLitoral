/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.7.2-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: recalderomerodb
-- ------------------------------------------------------
-- Server version	12.2.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES
(1,'Alimentos',1,'2026-06-14 21:22:07','2026-06-14 21:22:07'),
(2,'Ropa',1,'2026-06-14 21:22:07','2026-06-14 21:22:07'),
(3,'Accesorios',1,'2026-06-14 21:22:07','2026-06-14 21:22:07');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `asunto` varchar(250) NOT NULL,
  `mensaje` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `respondida` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
INSERT INTO `contactos` VALUES
(1,'Lila','lila@gmail.com','Precios','Podria pagar con dos metodos de pago distintos el mismo producto??','2026-06-14 21:35:00','2026-06-14 21:35:00',0),
(2,'riri','danielarecalde99@gmail.com','compra','mc<sdvlkdvk<sdn<klkfsdfmls.d jkcnjzj 32i3ei3','2026-06-14 22:03:41','2026-06-14 22:03:41',0);
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2026_05_09_134127_create_c_o_n_t_a_c_t_o_s_table',1),
(5,'2026_05_12_132812_create_perfiles_table',1),
(6,'2026_05_12_144720_create_usuarios_table',1),
(7,'2026_05_19_132511_create_categorias_table',1),
(8,'2026_05_23_100208_create_tipo_alimentos_table',1),
(9,'2026_05_24_132611_create_productos_table',1),
(10,'2026_05_26_140411_create_ventas_table',1),
(11,'2026_05_28_131537_create_ventas_detalle_table',1),
(12,'2026_06_13_232700_add_datos_envio_to_usuarios_table',1),
(13,'2026_06_14_185130_add_respondida_to_contactos_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfiles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `perfil_nombre` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfiles`
--

LOCK TABLES `perfiles` WRITE;
/*!40000 ALTER TABLE `perfiles` DISABLE KEYS */;
INSERT INTO `perfiles` VALUES
(1,'cliente',NULL,NULL),
(2,'administrador',NULL,NULL);
/*!40000 ALTER TABLE `perfiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion_producto` varchar(255) NOT NULL,
  `precio_producto` decimal(10,2) NOT NULL,
  `stock_producto` int(11) NOT NULL,
  `imagen_producto` varchar(255) NOT NULL,
  `categoria_id` bigint(20) unsigned NOT NULL,
  `tipoAlimento_id` bigint(20) unsigned DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categoria_id_foreign` (`categoria_id`),
  KEY `productos_tipoalimento_id_foreign` (`tipoAlimento_id`),
  CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `productos_tipoalimento_id_foreign` FOREIGN KEY (`tipoAlimento_id`) REFERENCES `tipoalimentos` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES
(1,'Alimento Seco Old Prince Premium para Gato Cachorro.','Sabor Pollo y Carne 20 kg.',34000.00,11,'productos/aQUwgxRrerq2ojS2R2502Zfdib1UADS8AFI3RTS6.png',1,3,1,'2026-06-15 21:51:04','2026-06-16 02:15:03'),
(2,'Alimento Seco Old Prince Premium para Perro Adulto','De Todas las Razas Sabor Pollo y Carne 20 kg',58000.00,12,'productos/lsZgUg6c4LrZJpz6MYOPb0i2u8fEKsfOKWLHbGjC.png',1,1,1,'2026-06-15 22:16:07','2026-06-16 02:14:45'),
(3,'Alimento Seco Nutribon Gatos Cachorros Extra Quality XQ','Sabor carne, arroz y vegetales.\r\n8kgs.',30000.00,13,'productos/8wLLHywcrbQ7FmhqscaUvWbR8y0OXK2zWq3Jm9L9.png',1,3,1,'2026-06-15 22:20:29','2026-06-16 02:16:28'),
(4,'Alimento Seco Sieger Super Premium para Perro Cachorro Mediano .','Grande Sabor Mix 15kg.',84000.00,15,'productos/DP6OswViOfQEhjiVHjfJ41dpkNqu5CI73s0dXB4P.png',1,3,1,'2026-06-15 22:29:03','2026-06-15 22:29:03'),
(5,'Alimento Seco Royal Canin para Gato Castrado','Weight Control Gato 12 Kg',141000.00,15,'productos/hfxiMwKJRKbSL7fcLw4zobqQdxFujmUKwn5Hgqvp.png',1,2,1,'2026-06-15 22:44:58','2026-06-15 22:44:58'),
(6,'Alimento Seco Royal Canin Canine Hepatic para Perro Adulto','Cantidad: 10kg.\r\nSabor: mix.',107000.00,14,'productos/e9D38DAhftNz25KLxv4fdyOjzFikjo7kVBL0u6jR.png',1,1,1,'2026-06-15 22:50:19','2026-06-16 02:00:03'),
(7,'Arnes Pretal Tactico Reforzado Perros Mascotas Acolchado','Color : rojo.',41000.00,19,'productos/t2EBSlaT4i67jD6xlBq27GEJFu2p1zQTjOwRcVoD.png',3,NULL,1,'2026-06-15 22:52:45','2026-06-16 01:54:03'),
(8,'Peine Saca Nudos Trimador','17 Dientes para perros y gatos con distintas densidades de pelaje.',12000.00,19,'productos/L0ZsMGIEfM9ieuk1yGIIgoVzRmtZX6Jvj8R8CMyx.png',3,NULL,1,'2026-06-15 22:55:28','2026-06-16 01:55:50'),
(9,'Collar + Pasador','3d Chapita Identificación Perros - 2cm',20000.00,20,'productos/hQrpj8zhfZbsbcA1IpCKMQyYrNMkSyGLF6bptnaB.png',3,NULL,1,'2026-06-15 22:57:26','2026-06-15 22:57:26'),
(10,'Ropa De Invierno Cálida Y Esponjosa Para Gatos','Estampado leopardo.',15000.00,15000,'productos/4lARVur5R8WVzvpMXBRuTzdbgKtTEs0fMVOtRBsK.png',2,NULL,1,'2026-06-15 23:00:31','2026-06-15 23:00:31'),
(11,'Buzo Abrigo Ropa Perro','Buzo Abrigo Ropa Perro',20000.00,19,'productos/0BJBIfydphtUvIB0JybSVlx2rwZSAjoj3krC87Op.png',2,NULL,1,'2026-06-15 23:16:06','2026-06-16 01:34:05'),
(12,'Alimento Seco para Gato Adulto Vitalcan Balanced','Sabor: carne.\r\nCantidad: 7.5kg',60000.00,15,'productos/XYaKY0UrTL49FriNI2oHsLMTT1M8C1TwB0tbcWf8.png',1,2,1,'2026-06-15 23:21:40','2026-06-15 23:21:40');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES
('H2HQuqJKXq2PAfQMsIrDU69xavZyeKCmSGxHrC9O',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36','eyJfdG9rZW4iOiJieU1MTjI5TUFSU3AyY1djTVRsUDZ3ajNXWDRVbVJHUmRoWEFwdktUIiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvcGV0c2hvcGRlbGxpdG9yYWwudGVzdFwvZGFzaGJvYXJkIiwicm91dGUiOiJkYXNoYm9hcmQifSwibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiOjF9',1781565958);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipoalimentos`
--

DROP TABLE IF EXISTS `tipoalimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipoalimentos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombreAnimal` varchar(100) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `categoria_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tipoalimentos_categoria_id_foreign` (`categoria_id`),
  CONSTRAINT `tipoalimentos_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipoalimentos`
--

LOCK TABLES `tipoalimentos` WRITE;
/*!40000 ALTER TABLE `tipoalimentos` DISABLE KEYS */;
INSERT INTO `tipoalimentos` VALUES
(1,'Perro',1,1,'2026-06-14 21:22:07','2026-06-14 21:22:07'),
(2,'Gato',1,1,'2026-06-14 21:22:07','2026-06-14 21:22:07'),
(3,'Cachorros',1,1,'2026-06-14 21:22:07','2026-06-14 21:22:07');
/*!40000 ALTER TABLE `tipoalimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombreRegistro` varchar(150) NOT NULL,
  `apellido` varchar(150) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `contrasenia` varchar(255) NOT NULL,
  `perfil_id` bigint(20) unsigned NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `provincia` varchar(255) DEFAULT NULL,
  `codigo_postal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_correo_unique` (`correo`),
  KEY `usuarios_perfil_id_foreign` (`perfil_id`),
  CONSTRAINT `usuarios_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES
(1,'Ana','Ross','ana@gmail.com','3794567894','$2y$12$AO5qcrzh4LwFd1lDCCz5r.SN4fvOkciRO3vyUdR4axVnfjgXw9UqC',2,1,NULL,NULL,NULL,NULL,'2026-06-14 21:26:31','2026-06-14 21:26:31'),
(2,'Lila','ris','lila@gmail.com','3794678987','$2y$12$hlTsJQrTojsARlxTQBo5cejuuvOvZs4/5YRlnR8dr5qZKAg3rPUtG',1,1,'Madariaga 1122','Itá Ibaté','Corrientes','3480','2026-06-14 21:30:45','2026-06-15 23:24:08');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas`
--

DROP TABLE IF EXISTS `ventas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` bigint(20) unsigned NOT NULL,
  `total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `estado` varchar(255) NOT NULL DEFAULT 'pendiente',
  `fecha` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ventas_usuario_id_foreign` (`usuario_id`),
  CONSTRAINT `ventas_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas`
--

LOCK TABLES `ventas` WRITE;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
INSERT INTO `ventas` VALUES
(1,2,34000.00,'completada','2026-06-15 23:24:08','2026-06-15 23:23:42','2026-06-15 23:24:08'),
(2,2,34000.00,'completada','2026-06-15 23:55:37','2026-06-15 23:55:27','2026-06-15 23:55:37'),
(3,2,58000.00,'completada','2026-06-16 00:06:44','2026-06-16 00:06:34','2026-06-16 00:06:44'),
(4,2,88000.00,'completada','2026-06-16 01:18:31','2026-06-16 01:17:34','2026-06-16 01:18:31'),
(5,2,34000.00,'completada','2026-06-16 01:27:24','2026-06-16 01:27:11','2026-06-16 01:27:24'),
(6,2,20000.00,'completada','2026-06-16 01:34:05','2026-06-16 01:33:53','2026-06-16 01:34:05'),
(7,2,41000.00,'completada','2026-06-16 01:54:03','2026-06-16 01:53:52','2026-06-16 01:54:03'),
(8,2,12000.00,'completada','2026-06-16 01:55:50','2026-06-16 01:55:33','2026-06-16 01:55:50'),
(9,2,107000.00,'completada','2026-06-16 02:00:03','2026-06-16 01:57:01','2026-06-16 02:00:03'),
(10,2,58000.00,'completada','2026-06-16 02:14:45','2026-06-16 02:08:49','2026-06-16 02:14:45'),
(11,2,34000.00,'completada','2026-06-16 02:15:03','2026-06-16 02:14:53','2026-06-16 02:15:03'),
(12,2,30000.00,'completada','2026-06-16 02:16:28','2026-06-16 02:16:18','2026-06-16 02:16:28');
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventas_detalle`
--

DROP TABLE IF EXISTS `ventas_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `ventas_detalle` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `venta_id` bigint(20) unsigned NOT NULL,
  `producto_id` bigint(20) unsigned NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ventas_detalle_venta_id_foreign` (`venta_id`),
  KEY `ventas_detalle_producto_id_foreign` (`producto_id`),
  CONSTRAINT `ventas_detalle_producto_id_foreign` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  CONSTRAINT `ventas_detalle_venta_id_foreign` FOREIGN KEY (`venta_id`) REFERENCES `ventas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventas_detalle`
--

LOCK TABLES `ventas_detalle` WRITE;
/*!40000 ALTER TABLE `ventas_detalle` DISABLE KEYS */;
INSERT INTO `ventas_detalle` VALUES
(1,1,1,1,34000.00,34000.00,'2026-06-15 23:23:42','2026-06-15 23:23:42'),
(2,2,1,1,34000.00,34000.00,'2026-06-15 23:55:27','2026-06-15 23:55:27'),
(3,3,2,1,58000.00,58000.00,'2026-06-16 00:06:34','2026-06-16 00:06:34'),
(4,4,3,1,30000.00,30000.00,'2026-06-16 01:17:34','2026-06-16 01:17:34'),
(5,4,2,1,58000.00,58000.00,'2026-06-16 01:18:04','2026-06-16 01:18:04'),
(6,5,1,1,34000.00,34000.00,'2026-06-16 01:27:11','2026-06-16 01:27:11'),
(7,6,11,1,20000.00,20000.00,'2026-06-16 01:33:53','2026-06-16 01:33:53'),
(8,7,7,1,41000.00,41000.00,'2026-06-16 01:53:52','2026-06-16 01:53:52'),
(9,8,8,1,12000.00,12000.00,'2026-06-16 01:55:33','2026-06-16 01:55:33'),
(11,9,6,1,107000.00,107000.00,'2026-06-16 01:57:16','2026-06-16 01:57:16'),
(12,10,2,1,58000.00,58000.00,'2026-06-16 02:08:49','2026-06-16 02:08:49'),
(13,11,1,1,34000.00,34000.00,'2026-06-16 02:14:53','2026-06-16 02:14:53'),
(14,12,3,1,30000.00,30000.00,'2026-06-16 02:16:18','2026-06-16 02:16:18');
/*!40000 ALTER TABLE `ventas_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'recalderomerodb'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2026-06-15 20:46:53
