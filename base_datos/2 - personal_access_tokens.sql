-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 06-03-2023 a las 22:04:44
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_minutas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(10, 'App\\Models\\User', 63, 'auth_token', '40f3b81b016bca136c33a877f7a6fea6073fca5c82f58005a2751d34f33cc4f2', '[\"*\"]', NULL, NULL, '2023-01-21 02:41:08', '2023-01-21 02:41:08'),
(11, 'App\\Models\\User', 63, 'auth_token', '3cad9eaca5ff2d515eeac2c5d6cd5c8251cd63b91bb9fccb1dd6fad8136ce28c', '[\"*\"]', '2023-01-25 03:21:14', NULL, '2023-01-23 20:09:05', '2023-01-25 03:21:14'),
(12, 'App\\Models\\User', 63, 'auth_token', '23edb344096bd46377ebff323a15ca87658c53fc16f3c94c04ec9bd3cabcc3b9', '[\"*\"]', '2023-02-01 03:02:06', NULL, '2023-01-25 03:54:12', '2023-02-01 03:02:06'),
(13, 'App\\Models\\User', 63, 'auth_token', 'c616da57601f326ff88efe75c6d7f9762b780be25bae2124c9a36070171e703a', '[\"*\"]', NULL, NULL, '2023-01-25 20:40:02', '2023-01-25 20:40:02'),
(14, 'App\\Models\\User', 63, 'auth_token', '0c3a19e63a91de1f3f904bfa407b092ea739b3ff065040df2405ae8d9ba94a8b', '[\"*\"]', NULL, NULL, '2023-02-02 02:02:46', '2023-02-02 02:02:46'),
(15, 'App\\Models\\User', 63, 'auth_token', 'ebe82e745d5595f6b9c0478bae5126f8e00ed169249f59c08fefa0ef1e86851b', '[\"*\"]', '2023-02-07 21:05:22', NULL, '2023-02-02 21:44:06', '2023-02-07 21:05:22'),
(16, 'App\\Models\\User', 63, 'auth_token', '57937daad9c9f4a09ce5d69f44ba14d3471545046a12f4b5f544ab00afe7c5ee', '[\"*\"]', '2023-03-01 02:07:59', NULL, '2023-02-08 01:03:12', '2023-03-01 02:07:59'),
(17, 'App\\Models\\User', 63, 'auth_token', '52726af0f7993ed1c91216709d6b357e063e2361c69ec7a21bc1a239daf7ee9c', '[\"*\"]', NULL, NULL, '2023-02-17 02:59:05', '2023-02-17 02:59:05'),
(18, 'App\\Models\\User', 63, 'auth_token', '50245dd8add6359a2ddace8d643e6aac55b4e495aead467698d1b19e3846cd86', '[\"*\"]', NULL, NULL, '2023-02-28 22:10:33', '2023-02-28 22:10:33');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
