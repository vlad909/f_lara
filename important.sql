-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4,	'2018_09_17_125830_add_paid_to_users',	1),
(5,	'2018_09_17_101454_create_task_table',	2),
(6,	'2018_09_17_131101_change_change',	3),
(7,	'2018_09_18_073524_rename_email_to_id',	4),
(8,	'2018_09_18_074537_rename_email_to_id',	5),
(9,	'2018_09_18_075709_rename_email_to_i1d',	6),
(10,	'2018_09_18_083432_create_users_table',	7),
(11,	'2018_09_18_084037_remove_explicisit_id',	8),
(12,	'2018_09_18_084708_remove_explicisit_id',	9),
(13,	'2018_09_18_084900_remove_explicisit_id',	10),
(14,	'2018_09_18_120352_add_emain_for_users',	11),
(16,	'2018_09_18_120630_add_pass_user',	12),
(17,	'2018_09_18_142619_remove_token',	13);

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `f_name`, `l_name`, `created_at`, `updated_at`, `email`, `password`) VALUES
(18,	'wat',	'fsdbcv',	'2018-09-18 11:27:57',	'2018-09-18 11:27:57',	'vlad@vlad.ru',	'$2y$10$y553HNHeuKOxIs4tOqNYUeN9o/.e7kmdmzJVuaJGU93LUs5zQdfjO'),
(19,	'ukraine',	'ukraineukraine',	'2018-09-18 11:28:29',	'2018-09-18 11:28:29',	'ukraine@ukraine.ukraine',	'$2y$10$GtPpjnZl1bHMLZNse7mE.efeH0NOzU7VmAEISu5K81YFGEptHW6Gi'),
(20,	'olga',	'buzova',	'2018-09-18 11:29:44',	'2018-09-18 11:29:44',	'olga@olga.olga',	'$2y$10$Bt0phlpZsHlAXv5dSDDijOmK2uFgNaN439XsM5dlTesenqq7Zmoey');

-- 2018-09-19 08:30:08
