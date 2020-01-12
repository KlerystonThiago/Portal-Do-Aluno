-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 18-Maio-2019 às 01:05
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiportal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomeDoCurso` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numDePeriodos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nomeDoCurso`, `numDePeriodos`, `turno`, `created_at`, `updated_at`) VALUES
(1, 'Desenvolvimento de Sistemas Para Interneta', '6', 'todos', '2019-05-16 10:42:26', '2019-05-17 07:15:46'),
(25, 'Design de Games Para Mobile', '6', 'tarde', '2019-05-16 17:44:42', '2019-05-16 17:44:42'),
(22, 'Mestrado Em Robotica Avançada', '10', 'tarde', '2019-05-16 15:54:08', '2019-05-16 15:54:08'),
(35, 'Desenvolvimento mobile Android e IOS', '10', 'noite', '2019-05-17 07:12:53', '2019-05-17 07:12:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

DROP TABLE IF EXISTS `disciplinas`;
CREATE TABLE IF NOT EXISTS `disciplinas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idCurso` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `disciplinas`
--

INSERT INTO `disciplinas` (`id`, `nome`, `idCurso`, `created_at`, `updated_at`) VALUES
(3, 'Programação Avançada', 35, '2019-05-17 08:49:32', '2019-05-17 12:55:50'),
(4, 'Matemática Avançada 3', 22, '2019-05-17 08:49:49', '2019-05-17 13:41:04'),
(5, 'Algoritimo de Inteligência Artificial', 25, '2019-05-17 08:49:59', '2019-05-17 12:57:37'),
(6, 'Sistema de Informação', 22, '2019-05-17 08:50:18', '2019-05-17 08:50:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
CREATE TABLE IF NOT EXISTS `matriculas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idAluno` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `matriculas`
--

INSERT INTO `matriculas` (`id`, `idAluno`, `idCurso`, `created_at`, `updated_at`) VALUES
(8, 113, 25, '2019-05-18 03:00:43', '2019-05-18 03:00:43'),
(7, 70, 1, '2019-05-18 02:56:08', '2019-05-18 02:56:08'),
(6, 106, 1, '2019-05-18 02:55:25', '2019-05-18 02:55:25'),
(5, 113, 22, '2019-05-18 02:55:01', '2019-05-18 02:55:01'),
(9, 118, 1, '2019-05-18 03:59:02', '2019-05-18 03:59:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_14_074449_create_usuarios_table', 1),
(4, '2019_05_16_070144_create_cursos_table', 2),
(5, '2019_05_17_052730_create_disciplinas_table', 3),
(6, '2019_05_17_203144_create_matriculas_table', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobreNome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nivelDeAcesso` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobreNome`, `email`, `senha`, `nivelDeAcesso`, `created_at`, `updated_at`) VALUES
(136, 'Márcio', 'Souza', 'marcio@mail.com', '$2y$10$97CHpzbth6x/5N5TTT3N/.8GGzb7PhT.nDgC1QWTq.KY/EVwOOVcy', 3, '2019-05-18 03:58:27', '2019-05-18 03:58:27'),
(134, 'Kleiber', 'Robson', 'kleiber@mail.com', '$2y$10$hlFjLZU.8Muae76bx15MSevcrhJDLNDsvu3LSm1VzT6WFK8W.bfoW', 3, '2019-05-18 03:57:03', '2019-05-18 03:57:03'),
(135, 'Wellington', 'First', 'wellington@mail.com', '$2y$10$ceQHwP4xUmeh9UBRpmWHruuCwGsLjohui.PcqKumvSnhbT3bSfAuO', 3, '2019-05-18 03:57:49', '2019-05-18 03:57:49'),
(133, 'Henrique', 'Silva', 'henrique@mail.com', '$2y$10$JoNyIX2PmAAQl645j9PDXOQKHPY4lQJY0tau6.zHDVmIhqv8o4Mxm', 2, '2019-05-18 03:55:56', '2019-05-18 03:55:56'),
(130, 'Henri', 'Vieira', 'henri@mail.com', '$2y$10$asJD.VUM.n/Ydz5HU2/.Q..VVZ3.VAN6cP2SQwDiGG5fvSZ/IkyD2', 2, '2019-05-18 03:54:19', '2019-05-18 03:54:19'),
(131, 'Fechine', 'Farias', 'fechine@mail.com', '$2y$10$BRkIG0YUXFbPIMUogBM4BeOzHqfhdkGcKA1lm9TCJVkIFqjveyWy2', 2, '2019-05-18 03:54:48', '2019-05-18 03:54:48'),
(132, 'Vanessa', 'Nascimento', 'vanessa@mail.com', '$2y$10$Au6xrwfYUnI1.mFT4e4lPuVqG4xhG12bXBATLSCsFVeq9QaEVqsRy', 2, '2019-05-18 03:55:23', '2019-05-18 03:55:23'),
(126, 'Elliz', 'Helena', 'elliz@mail.com', '$2y$10$NanC7D12A3b2dC7Zl0AhKeRtQ4jpH.Iu.onT2hgBDD2FIkcxsfL1G', 3, '2019-05-18 03:51:39', '2019-05-18 03:51:39'),
(127, 'Raul', 'Seixas', 'raul@mail.com', '$2y$10$ezqHPDZU6tWjIuMkuSdhLeJtWdudM8JmBki.P2EI59O7RkUnp9o8C', 3, '2019-05-18 03:52:11', '2019-05-18 03:52:11'),
(128, 'Tony', 'Ferreira', 'tony@mail.com', '$2y$10$4yPW71/2m2orIZ1IsV0KkuEJZ8QukWMlBTV7vYRAkIvHWfYLHlNtS', 1, '2019-05-18 03:52:57', '2019-05-18 03:52:57'),
(129, 'Vitor', 'Sales', 'vitor@mail.com', '$2y$10$i/aQiHLeHMnVAXX1MdNR9e.n5wZHVSKzG55s3nTmvMaCeNKtfbmmi', 1, '2019-05-18 03:53:33', '2019-05-18 03:53:33'),
(121, 'João', 'Buarque', 'joao@mail.com', '$2y$10$QdHLEZOVt//e33wMb9lEF.oeSgecUOkynZOa7fQgnGw1dIk2cn5Pu', 3, '2019-05-18 03:48:24', '2019-05-18 03:48:24'),
(122, 'Kátia', 'Maria', 'maria@mail.com', '$2y$10$Ugngb4GgjkXP8HQU9uUk7uoKf3a6/D9NiJLZ3ODOls3lvQ6rdpple', 3, '2019-05-18 03:49:00', '2019-05-18 03:49:00'),
(123, 'Helena', 'Heloise', 'helena@mail.com', '$2y$10$/l.FuWa.irbr4Hu/eV.UqeCxOtilRbx7WPWLFC8v5NUsS4wSva.vy', 3, '2019-05-18 03:49:34', '2019-05-18 03:49:34'),
(68, 'Kleryston', 'Thiago', 'klerystonadmin@mail.com', '$2y$10$N9RcY7uaUQxoMP.Qx1pv7u3HsOrdoOk9GoYCtm0J1tTxOqnn.Bbru', 1, '2019-05-16 03:55:45', '2019-05-17 22:19:05'),
(124, 'Wilk', 'Caetano', 'wilk@mail.com', '$2y$10$Kua0n4Itjznjhc6oTxsETucdwQbUf9php3RN6GvUKYD.FpJC/TK9K', 3, '2019-05-18 03:50:10', '2019-05-18 03:50:10'),
(125, 'Rita', 'de Kássia', 'rita@mail.com', '$2y$10$mTXxkbvCdnPSpSety61Cq.q3Tg9eZYQiC3bKMcPfgEpsEYG/4t1Ve', 3, '2019-05-18 03:50:42', '2019-05-18 03:50:42'),
(119, 'Michel', 'Marinho', 'michel@mail.com', '$2y$10$xAJkVrXzcPrFJ7J6EmFyTO5k8yn36Wt6X98t7I1GqpSYAz.fFyvD.', 3, '2019-05-18 03:47:29', '2019-05-18 03:47:29'),
(120, 'Maria', 'Klebia', 'klebia@mail.com', '$2y$10$kHfWpybQYjScSdmI5SLn3O9mMBRqzMtCC/CsEzl0zoaieIWX8l6r6', 3, '2019-05-18 03:47:58', '2019-05-18 03:47:58'),
(118, 'Amarildo', 'Ferreira', 'amarildo@mail.com', '$2y$10$W9H/AD8adqqXXDJJO2PMG.oIbKdjHmL4v090gYQuS7FB8kGUuypAy', 3, '2019-05-18 03:47:00', '2019-05-18 03:47:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
