ALTER TABLE `users` ADD `password_api` TEXT NOT NULL COMMENT 'Password para ApiRest' AFTER `password`;
ALTER TABLE texto_minutas MODIFY date_modified date;