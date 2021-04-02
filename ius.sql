-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ius
CREATE DATABASE IF NOT EXISTS `ius` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ius`;

-- Volcando estructura para tabla ius.areas
CREATE TABLE IF NOT EXISTS `areas` (
  `id_area` int(11) NOT NULL AUTO_INCREMENT,
  `name_area` varchar(50) DEFAULT NULL,
  `detail_area` varchar(50) DEFAULT NULL,
  `icon_area` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla ius.areas: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
INSERT INTO `areas` (`id_area`, `name_area`, `detail_area`, `icon_area`) VALUES
	(1, 'Agraria, Forestal y Recursos Hídricos', NULL, 'hp-icon-2.png'),
	(2, 'Ambiental', NULL, 'hp-icon-2.png'),
	(3, 'Arbitraje', NULL, 'icon22.png'),
	(4, 'Comercio Exterior', NULL, 'hp-icon-1.png'),
	(5, 'Competencia, Barreras Burocráticas y Antidumping', NULL, 'hp-icon-4.png'),
	(6, 'Consumo, Publicidad y Prácticas Desleales', NULL, 'iconpivon4.png'),
	(7, 'Derecho Administrativo', NULL, 'icon11.png'),
	(8, 'Derecho Corporativo', NULL, 'law30.png'),
	(9, 'Derecho Tributario', NULL, 'iconpivon4.png'),
	(10, 'Educación', NULL, 'lending.png'),
	(11, 'Inmobiliaria y Construcción', NULL, 'hp-icon-5.png'),
	(12, 'Laboral y Seguridad Social', NULL, 'hp-icon-4.png'),
	(13, 'Litigios y Contoversias', NULL, 'law-icon-1.png'),
	(14, 'Mineria y Desarrollo Sostenible', NULL, 'power.png'),
	(15, 'Penal', NULL, 'icon11.png'),
	(16, 'Previsional', NULL, 'law-icon-1.png'),
	(17, 'Propiedad Intelectual', NULL, 'lending.png'),
	(18, 'Regulación Municipal y Autorizaciones', NULL, 'hp-icon-6.png'),
	(19, 'Saneamiento Predialo y Acceso a Tierras', NULL, 'heart.png'),
	(20, 'Seguros y Reaseguros', NULL, 'hp-icon-4.png'),
	(21, 'Turismo y Hotelería', NULL, 'sky.png');
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;

-- Volcando estructura para tabla ius.category
CREATE TABLE IF NOT EXISTS `category` (
  `idcategory` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcategory`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ius.category: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`idcategory`, `name`, `state`, `created_at`, `updated_at`) VALUES
	(6, 'publicacion', '1', NULL, NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Volcando estructura para tabla ius.publication
CREATE TABLE IF NOT EXISTS `publication` (
  `idpublication` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` int(10) unsigned NOT NULL,
  `idcategory` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_date` timestamp NULL DEFAULT NULL,
  `priority` bit(1) DEFAULT NULL,
  `slide_active` bit(1) DEFAULT NULL,
  `url_youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_redirect` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpublication`) USING BTREE,
  KEY `publication_iduser_foreign` (`iduser`) USING BTREE,
  KEY `publication_idcategory_foreign` (`idcategory`) USING BTREE,
  CONSTRAINT `publication_idcategory_foreign` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`),
  CONSTRAINT `publication_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ius.publication: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `publication` DISABLE KEYS */;
INSERT INTO `publication` (`idpublication`, `iduser`, `idcategory`, `title`, `content`, `files`, `publication_date`, `priority`, `slide_active`, `url_youtube`, `url_redirect`, `unique_name`, `state`, `created_at`, `updated_at`) VALUES
	(26, 6, 6, 'my first oublication', 'ohhh', 'aaa', NULL, b'0', NULL, NULL, NULL, NULL, 'D', NULL, '2021-03-20 06:35:53'),
	(29, 6, 6, 'navidad', '<p>fgchvjbbhkjgfdsdfgh</p>', '[{"extension":"png","name":"210320062632_4904.png","size":"137 KB"},{"extension":"png","name":"210320062632_6453.png","size":"111 KB"}]', '2021-03-20 01:26:00', b'1', b'0', '-', '-', 'navidad-29', 'A', '2021-03-20 06:33:05', '2021-03-20 06:33:05');
/*!40000 ALTER TABLE `publication` ENABLE KEYS */;

-- Volcando estructura para tabla ius.user
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`iduser`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla ius.user: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`iduser`, `name`, `role`, `user`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
	(6, 'adminR', 'admin', 'admin', 'admin', 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
