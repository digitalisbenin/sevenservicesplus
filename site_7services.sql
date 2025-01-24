-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Décembre 2024 à 15:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `site_7services`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `site_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` int(11) NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `disponible` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `normal_price` int(11) NOT NULL,
  `promo_price` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_site_id_foreign` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=39 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `site_id`, `name`, `area`, `details`, `disponible`, `image`, `normal_price`, `promo_price`, `created_at`, `updated_at`) VALUES
(1, 18, 'Kotovi - Avla 1', 400, 'ADC Disponible/ Non loin de l''école primaire publique de Kotovi', 1, 'parcelle1.jpg', 350000, 275000, NULL, NULL),
(2, 18, 'Kotovi - Avla 2', 500, 'ADC Disponible/ Non loin de l''école primaire publique de Kotovi', 1, 'parcelle2.jpg', 425000, 350000, NULL, NULL),
(3, 18, 'Kotovi - wogo 1', 400, ' Non loin du CEG AVAKPA', 1, 'parcelle3.jpg', 425000, 350000, NULL, NULL),
(4, 18, 'Kotovi - wogo 2', 500, ' Non loin du CEG AVAKPA', 1, 'parcelle4.jpg', 500000, 425000, NULL, NULL),
(5, 18, 'Avakpa - Houédo 1', 400, 'A 500m de l''école primaire publique de Houédo', 1, 'parcelle5.jpg', 475000, 400000, NULL, NULL),
(6, 18, 'Avakpa - Houédo 2', 500, 'A 500m de l''école primaire publique de Houédo', 1, 'parcelle6.jpg', 575000, 500000, NULL, NULL),
(7, 1, 'Vossa 1', 400, 'A 400m de l''epp Vossa et de l''église Catholique de Vossa', 1, 'parcelle7.jpg', 525000, 450000, NULL, NULL),
(8, 3, 'Agbata', 200, 'Sur titre foncier/ à 600m de l''EPP Agbata avec électricité en extension', 1, 'parcelle8.jpg', 575000, 500000, NULL, NULL),
(9, 7, 'Anavié', 200, 'Sur titre foncier. A 200m de l''école primaire Gbétaga.et à 300m de centre écotouristque Jacqueville Électricité disponible', 1, 'parcelle1.jpg', 675000, 600000, NULL, NULL),
(10, 1, 'Vossa 2', 500, 'A 400m de l''epp Vossa et de l''église Catholique de Vossa', 1, 'parcelle2.jpg', 625000, 550000, NULL, NULL),
(11, 7, 'Sogbé 6', 200, 'Sur titre foncier. A 500m de l''école primaire Datinnonko. Électricité disponible', 1, 'parcelle3.jpg', 725000, 650000, NULL, NULL),
(12, 7, 'Sogbé 5', 500, 'A 500m de l''école primaire Datinnonko. Électricité disponible . électricité en extension', 1, 'parcelle4.jpg', 925000, 850000, NULL, NULL),
(13, 18, 'Gbéta', 500, 'A 200m de l''école maternelle de Gbéta, Electricité disponible.', 1, 'parcelle5.jpg', 775000, 700000, NULL, NULL),
(14, 2, 'Houéhounta 1', 400, 'TFR Disponible/ à 700m du marché d''Agbata', 1, 'parcelle6.jpg', 725000, 650000, NULL, NULL),
(15, 2, 'Houéhounta 2', 500, 'TFR Disponible/ à 700m du marché d''Agbata/ Zone Habitable', 1, 'parcelle7.jpg', 875000, 800000, NULL, NULL),
(16, 4, 'Agbata', 325, 'Sur titre foncier/ à 600m de l''EPP Agbata avec électricité en extension/ zone habitée', 1, 'parcelle8.jpg', 875000, 800000, NULL, NULL),
(17, 5, 'Houéhounta 1', 400, 'Sur titre foncier/ à 600m de l''EPP Agbata avec électricité en extension/ zone habitée', 1, 'parcelle1.jpg', 1050000, 975000, NULL, NULL),
(18, 6, 'Agbata', 500, 'Sur titre foncier/ à 600m de l''Epp Agbata avec électricité en extension ', 1, 'parcelle2.jpg', 1400000, 1250000, NULL, NULL),
(19, 7, 'Anavié 2', 400, 'Sur titre foncier. A 200m de l''école primaire Gbétaga.et à 300m de centre écotouristque Jacqueville Électricité disponible', 1, 'parcelle3.jpg', 1300000, 1150000, NULL, NULL),
(20, 8, 'Tozoumè', 500, 'ADC disponible/à 400m du goudron et a 200m de l''école primaire publique Tozounmè', 1, 'parcelle4.jpg', 1400000, 1250000, NULL, NULL),
(21, 7, 'Sogbé 1', 350, 'Sur titre foncier. A 500m de l''école primaire Datinnonko. Électricité disponible. Zone habitée', 1, 'parcelle5.jpg', 1250000, 1100000, NULL, NULL),
(22, 7, 'Sogbé 2', 400, 'Sur titre foncier. A 500m de l''école primaire Datinnonko. Électricité disponible. Zone habitée', 1, 'parcelle6.jpg', 1400000, 1250000, NULL, NULL),
(23, 2, 'Sogbé 3', 500, 'Sur titre foncier.A 500m de l''école primaire Datinnonko. Électricité disponible . Zone habitée', 1, 'parcelle7.jpg', 1725000, 1575000, NULL, NULL),
(24, 7, 'Zèbè 1', 425, 'A 300m de l''école primaire Zèbè et non loin de la GDIZ/ Électricité disponible . Zone très habitée', 1, 'parcelle8.jpg', 1650000, 1500000, NULL, NULL),
(25, 7, 'Zèbè 2', 500, 'A 300m de l''école primaire Zèbè et non loin de la GDIZ/ Électricité disponible . Zone très habitée', 1, 'parcelle1.jpg', 1900000, 1750000, NULL, NULL),
(26, 9, 'Mawata', 400, 'A 700m de l''église catholique wawata. Zone  habitée', 1, 'parcelle2.jpg', 1600000, 1450000, NULL, NULL),
(27, 12, 'Savi / Houéyiho', 500, 'A 700m du Goudron et non loin de l''école primaire publique Savi - houéyiho/ Zone habitée', 1, 'parcelle3.jpg', 1650000, 1500000, NULL, NULL),
(28, 10, 'Adimalè', 500, 'A l''état des lieux. A 700m du goudron et à 400m de l''Epp Adimalè . Zone Habitable.', 1, 'parcelle4.jpg', 1450000, 1300000, NULL, NULL),
(29, 10, 'Migbèhouè', 500, 'ADC + État des lieux /à 300m de l''EPP Migbèhouè/ Zone fortement habitée.', 1, 'parcelle5.jpg', 2800000, 2500000, NULL, NULL),
(30, 11, 'Kpossidja', 350, 'Sur titre foncier/ non loin de l''Epp Djigbohounhoué/ zone habitée', 1, 'parcelle6.jpg', 2800000, 2500000, NULL, NULL),
(31, 13, 'Kpossidja', 400, 'Sur titre foncier/ non loin de l''Epp Djigbohounhoué/ zone habitée', 1, 'parcelle7.jpg', 3100000, 2800000, NULL, NULL),
(32, 14, 'Adjara Hounvè', 400, 'Sur Titre Foncier/à près de 1km du goudron/ Zone habitée avec électricité en extension', 1, 'parcelle8.jpg', 4900000, 4600000, NULL, NULL),
(33, 15, 'Fanto', 400, 'Sur Titre foncier /à 100m de l''Epp Fanto et à 1 km du goudron. Électricité disponible . Au bord de la voie principale. Zone viabilisé', 1, 'parcelle1.jpg', 5600000, 5300000, NULL, NULL),
(34, 16, 'Awanou', 300, ' Lotie et recasée sur 300m²/ à 500m de l''Epp Awanou et de la voie principale Yagbé - Kétonou/ Zone habitée avec électricité disponible', 1, 'parcelle2.jpg', 5600000, 5300000, NULL, NULL),
(35, 17, 'Houèto', 330, ' Lotie et recasée/ à 400m de l''église catholique de Houèto. Électricité et eau disponible', 1, 'parcelle3.jpg', 15000000, 14250000, NULL, NULL),
(36, 17, 'Akassato', 347, ' Lotie , Recasée et déjà clôturé/ à 300m du goudron et de la brasserie LIBS . Zone très habitée avec électricité disponible.', 1, 'parcelle4.jpg', 15000000, 14250000, NULL, NULL),
(38, 1, 'Parcelle test', 200, ' Parcelle test modifié', 1, '1734962751.jpg', 466, 900, '2024-12-23 13:05:51', '2024-12-23 13:06:28');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_12_20_184714_create_sites_table', 1),
(5, '2024_12_20_184731_create_articles_table', 1),
(6, '2024_12_21_035507_add_disponible_to_articles_table', 1),
(7, '2024_12_21_035641_create_temoignages_table', 1),
(8, '2024_12_21_035705_create_commandes_table', 1),
(9, '2024_12_21_042257_add_image_to_articles_table', 1),
(10, '2024_12_21_172410_create_sites_table', 2),
(11, '2024_12_21_172613_create_articles_table', 3),
(12, '2024_12_23_124046_create_users_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=20 ;

--
-- Contenu de la table `sites`
--

INSERT INTO `sites` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Zè', NULL, NULL),
(2, 'ZÈ Hèkanmè', NULL, NULL),
(3, 'ZÈ Hèkanmè 4', NULL, NULL),
(4, 'ZÈ Hèkanmè 1', NULL, NULL),
(5, 'ZÈ Hèkanmè 2', NULL, NULL),
(6, 'ZÈ Hèkanmè 3', NULL, NULL),
(7, 'TORI CADA', NULL, NULL),
(8, 'ZÈ DODJI - BATA', NULL, NULL),
(9, 'ZINVIE', NULL, NULL),
(10, 'SEKOU', NULL, NULL),
(11, 'OUEDO 1', NULL, NULL),
(12, 'OUIDAH', NULL, NULL),
(13, 'OUEDO 2', NULL, NULL),
(14, 'PAHOU', NULL, NULL),
(15, 'GLO', NULL, NULL),
(16, 'DJREGBE 2', NULL, NULL),
(17, 'ABOMEY-CALAVI', NULL, NULL),
(18, 'ALLADA', NULL, NULL),
(19, 'Site test', '2024-12-23 13:33:08', '2024-12-23 13:33:08');

-- --------------------------------------------------------

--
-- Structure de la table `temoignages`
--

CREATE TABLE IF NOT EXISTS `temoignages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'COMAHOUE Fidèle', 'fid@gmail.com', '$2y$10$ee.TAnQSKod.Cy/v4DOoKOwz.6iDZ4Dku8MDy2AtxpvvPzi9XNv9y', '5rwQdeIpXU4qApfTTwDKZ09KCvWGKtfGUFFEBtuBpUv06WltkiMYVUTCg8fk', '2024-12-23 11:50:44', '2024-12-23 11:50:44');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_site_id_foreign` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
