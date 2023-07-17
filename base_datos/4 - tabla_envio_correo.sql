CREATE TABLE IF NOT EXISTS `envio_correos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre_contratante` text COLLATE utf8_unicode_ci NOT NULL,
  `tipo_contratante` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `radicado` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `orden` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;