-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 03:51 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orajen_mlm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activation_codes`
--

CREATE TABLE `activation_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_used` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activation_codes`
--

INSERT INTO `activation_codes` (`id`, `code`, `type`, `is_used`, `created_at`, `updated_at`) VALUES
(1, 'AZLfNlX', 'Activation', 1, '2018-09-20 10:53:51', '2018-09-20 10:53:51'),
(2, 'AOzuGa4', 'Activation', 1, '2018-09-20 10:53:51', '2018-09-20 11:12:25'),
(3, 'A9y5oQT', 'Activation', 1, '2018-09-20 10:53:51', '2018-09-20 17:36:28'),
(4, 'AoC3mQb', 'Activation', 1, '2018-09-20 10:54:18', '2018-09-20 17:42:53'),
(5, 'AWs3ywR', 'Activation', 0, '2018-09-20 10:54:18', '2018-09-20 10:54:18'),
(6, 'A1q2X4e', 'Activation', 0, '2018-09-20 10:54:18', '2018-09-20 10:54:18'),
(7, 'Gt5Vwiz', 'Green', 0, '2018-09-20 10:54:30', '2018-09-20 10:54:30'),
(8, 'GyVtzow', 'Green', 0, '2018-09-20 10:54:30', '2018-09-20 10:54:30'),
(9, 'GIzkYDJ', 'Green', 1, '2018-09-20 10:54:30', '2018-09-20 11:20:47'),
(10, 'GXEZUYA', 'Green', 1, '2018-09-20 10:54:30', '2018-09-20 11:18:24'),
(11, 'GubWjUG', 'Green', 0, '2018-09-20 10:54:30', '2018-09-20 10:54:30'),
(12, 'GiFDQvt', 'Green', 0, '2018-09-20 10:54:30', '2018-09-20 10:54:30'),
(13, 'GEpNofv', 'Green', 0, '2018-09-20 10:54:30', '2018-09-20 10:54:30'),
(14, 'GNSebfp', 'Green', 0, '2018-09-20 10:54:30', '2018-09-20 10:54:30'),
(15, 'BvOnb2I', 'Blue', 0, '2018-09-20 10:54:42', '2018-09-20 10:54:42'),
(16, 'BJqaDGZ', 'Blue', 0, '2018-09-20 10:54:42', '2018-09-20 10:54:42'),
(17, 'Bl0y4Vu', 'Blue', 0, '2018-09-20 10:54:42', '2018-09-20 10:54:42'),
(18, 'BSX2CKt', 'Blue', 0, '2018-09-20 10:54:54', '2018-09-20 10:54:54'),
(19, 'BH8Ct8v', 'Blue', 0, '2018-09-20 10:54:54', '2018-09-20 10:54:54'),
(20, 'BzNfrn4', 'Blue', 0, '2018-09-20 10:55:59', '2018-09-20 10:55:59'),
(21, 'AEPumT6', 'Activation', 0, '2018-09-20 10:56:21', '2018-09-20 10:56:21'),
(22, 'AaRMnGF', 'Activation', 0, '2018-09-20 10:56:21', '2018-09-20 10:56:21'),
(23, 'ANfqkqP', 'Activation', 0, '2018-09-20 10:56:44', '2018-09-20 10:56:44'),
(24, 'A28Lh8K', 'Activation', 0, '2018-09-20 10:56:44', '2018-09-20 10:56:44'),
(25, 'Auz2bvk', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(26, 'AG9Wtnj', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(27, 'AvCg96h', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(28, 'AxH7i43', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(29, 'Ak5PR0l', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(30, 'AoWd8wL', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(31, 'ABZwYMt', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(32, 'AHPPIwp', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(33, 'AY8MiCQ', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(34, 'AHqZwJv', 'Activation', 1, '2018-09-20 10:58:16', '2018-09-20 10:58:16'),
(35, 'A5m8YwL', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(36, 'AZzL9yq', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(37, 'AArO9ow', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(38, 'A3hGt7U', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(39, 'A4qvRAg', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(40, 'A0Tq9we', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(41, 'AtAG172', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(42, 'AUXOnuQ', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(43, 'A7GjptD', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(44, 'AoOfYDe', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(45, 'AZxXC6n', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(46, 'ADojTaj', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(47, 'ApG4wHB', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(48, 'A9I6hWw', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(49, 'ASPLTQo', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(50, 'AnkGzc7', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(51, 'AwD9mNa', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(52, 'ANwvdY6', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(53, 'Agy4mPP', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(54, 'AFQ4meZ', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(55, 'AHoF56v', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(56, 'Apb8pU9', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(57, 'AoKTkfw', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(58, 'Ap7ACvs', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(59, 'AKpZsRX', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(60, 'Azx4M3z', 'Activation', 1, '2018-09-20 10:58:17', '2018-09-20 10:58:17'),
(61, 'Ak3sIHT', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(62, 'A0CwCFX', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(63, 'AJARVq1', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(64, 'An7wMrp', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(65, 'AjC31lG', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(66, 'AgBjwJN', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(67, 'AdWp7hi', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(68, 'ALTUQSG', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(69, 'ADfYd0I', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(70, 'AwVKhMA', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(71, 'ArEvyc6', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(72, 'AaRpbkb', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(73, 'AxH7Ibr', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(74, 'AQuLoLc', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(75, 'ALIG7mW', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(76, 'AG6Bbkv', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(77, 'A8jDaSS', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(78, 'AVBg5K0', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(79, 'A7H9h1y', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(80, 'AceRbpz', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(81, 'ApcDPdp', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(82, 'AT3JmCY', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(83, 'AQQW9Qe', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(84, 'A8cGn0C', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(85, 'AVE1b7t', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(86, 'AHvPSRd', 'Activation', 1, '2018-09-20 10:58:18', '2018-09-20 10:58:18'),
(87, 'Ayo1Kfw', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(88, 'AbV6KQy', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(89, 'AARv47x', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(90, 'AO88k1h', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(91, 'Aq9aW63', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(92, 'AjVeQVR', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(93, 'AZIcYA1', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(94, 'AYYKNqb', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(95, 'AOj68g0', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(96, 'A1xBH6J', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19'),
(97, 'AQSvrVL', 'Activation', 1, '2018-09-20 10:58:19', '2018-09-20 10:58:19');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placement_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `node_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activationcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_qualified` tinyint(1) NOT NULL DEFAULT '0',
  `income` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `product_voucher` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_main` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `user_id`, `placement_id`, `node_address`, `activationcode`, `is_active`, `is_qualified`, `income`, `product_voucher`, `created_at`, `updated_at`, `is_main`) VALUES
(1, '1', '0', '1', 'Auz2bvk', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:51', 1),
(2, '2', '1', '1', 'AG9Wtnj', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:51', 1),
(3, '2', '2', '1', 'AvCg96h', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:51', 0),
(4, '2', '2', '2', 'AxH7i43', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(5, '2', '3', '1', 'Ak5PR0l', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(6, '2', '3', '2', 'AoWd8wL', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(7, '2', '4', '1', 'ABZwYMt', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(8, '2', '4', '2', 'AHPPIwp', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(9, '3', '1', '2', 'AY8MiCQ', 0, 0, '20.0000', '0.0000', NULL, '2018-09-20 09:38:05', 1),
(10, '4', '9', '1', 'AHqZwJv', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(11, '5', '9', '2', 'A5m8YwL', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(12, '6', '9', '3', 'AZzL9yq', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(13, '6', '12', '1', 'AArO9ow', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(14, '6', '12', '2', 'A3hGt7U', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(15, '6', '13', '1', 'A4qvRAg', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(16, '6', '13', '2', 'A0Tq9we', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(17, '6', '14', '1', 'AtAG172', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(18, '6', '14', '2', 'AUXOnuQ', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(19, '7', '9', '4', 'A7GjptD', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(20, '8', '9', '5', 'AoOfYDe', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(21, '9', '9', '6', 'AZxXC6n', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(22, '10', '9', '7', 'ADojTaj', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 1),
(23, '10', '22', '1', 'ApG4wHB', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(24, '10', '22', '2', 'A9I6hWw', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(25, '10', '23', '1', 'ASPLTQo', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(26, '10', '23', '2', 'AnkGzc7', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:52', 0),
(27, '10', '24', '1', 'AwD9mNa', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(28, '10', '24', '2', 'ANwvdY6', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(29, '11', '12', '3', 'Agy4mPP', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 1),
(30, '11', '29', '1', 'AFQ4meZ', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(31, '11', '29', '1', 'AHoF56v', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(32, '11', '30', '1', 'Apb8pU9', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(33, '11', '30', '1', 'AoKTkfw', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(34, '11', '31', '1', 'Ap7ACvs', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(35, '11', '31', '2', 'AKpZsRX', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(36, '11', '32', '1', 'Azx4M3z', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(37, '11', '32', '3', 'Ak3sIHT', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(38, '11', '33', '1', 'A0CwCFX', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(39, '11', '33', '2', 'AJARVq1', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(40, '11', '34', '1', 'An7wMrp', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(41, '11', '34', '2', 'AjC31lG', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(42, '11', '35', '1', 'AgBjwJN', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(43, '11', '35', '2', 'AdWp7hi', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(44, '11', '36', '1', 'ALTUQSG', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(45, '11', '36', '2', 'ADfYd0I', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(46, '11', '37', '1', 'AwVKhMA', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(47, '11', '37', '2', 'ArEvyc6', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(48, '11', '38', '1', 'AaRpbkb', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(49, '11', '38', '2', 'AxH7Ibr', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:53', 0),
(50, '11', '39', '1', 'AQuLoLc', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(51, '11', '39', '2', 'ALIG7mW', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(52, '11', '40', '1', 'AG6Bbkv', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(53, '11', '40', '2', 'A8jDaSS', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(54, '11', '41', '1', 'AVBg5K0', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(55, '11', '41', '2', 'A7H9h1y', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(56, '11', '42', '1', 'AceRbpz', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(57, '11', '42', '2', 'ApcDPdp', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(58, '11', '43', '1', 'AT3JmCY', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(59, '11', '43', '2', 'AQQW9Qe', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(60, '12', '22', '3', 'A8cGn0C', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 1),
(61, '12', '60', '1', 'AVE1b7t', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(62, '12', '60', '2', 'AHvPSRd', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(63, '12', '61', '1', 'Ayo1Kfw', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(64, '12', '61', '2', 'AbV6KQy', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(65, '12', '62', '1', 'AARv47x', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(66, '12', '62', '2', 'AO88k1h', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(67, '13', '60', '3', 'Aq9aW63', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 1),
(68, '13', '67', '1', 'AjVeQVR', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(69, '13', '67', '2', 'AZIcYA1', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:54', 0),
(70, '13', '68', '1', 'AYYKNqb', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:55', 0),
(71, '13', '68', '2', 'AOj68g0', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:55', 0),
(72, '13', '69', '1', 'A1xBH6J', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:55', 0),
(73, '13', '69', '2', 'AQSvrVL', 0, 0, '0.0000', '0.0000', NULL, '2018-09-20 06:40:55', 0),
(82, '14', '9', '3', 'A9y5oQT', 0, 0, '0.0000', '0.0000', '2018-09-20 17:36:28', '2018-09-20 17:36:28', 1),
(83, '14', '82', '1', 'AoC3mQb', 0, 0, '0.0000', '0.0000', '2018-09-20 17:42:53', '2018-09-20 17:42:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_09_19_131351_create_package_breakdown_table', 1),
(11, '2018_09_05_105609_create_members_table', 2),
(12, '2018_09_19_145406_create_activation_codes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `package_breakdown`
--

CREATE TABLE `package_breakdown` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(19,4) NOT NULL DEFAULT '0.0000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_breakdown`
--

INSERT INTO `package_breakdown` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Products', '348.0000', NULL, NULL),
(2, 'Bag/Brochure', '22.0000', NULL, NULL),
(3, 'Global Pool', '210.0000', NULL, NULL),
(4, 'Company Reward System', '200.0000', NULL, NULL),
(5, 'Direct Referral', '100.0000', NULL, NULL),
(6, 'Infinity Pass Up', '150.0000', NULL, NULL),
(7, 'Mobile Stoclist', '50.0000', NULL, NULL),
(8, 'Outright', '20.0000', NULL, NULL),
(9, 'Tax/Legal Documents', '100.0000', NULL, NULL),
(10, 'Net Income', '300.0000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date DEFAULT NULL,
  `contactnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sponsor_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `birthdate`, `contactnumber`, `address`, `gender`, `password`, `sponsor_id`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Orajen', 'orajen@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '0', 0, 'K4LRQIa0Qqy0az0CXgDb6SbDYEDBKoJVQX9I421FhmltAE1zbeO6NURzxJ0M', NULL, NULL),
(2, 'Company', 'company@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '1', 0, NULL, NULL, NULL),
(3, 'Corporation', 'corporation@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '1', 0, NULL, NULL, '2018-09-20 09:40:53'),
(4, 'Michael Osorio', 'michael.osorio@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, NULL, NULL, NULL),
(5, 'Jai Sorio', 'jai.taribz@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, NULL, NULL, NULL),
(6, 'Noemy Praga', 'dhanemhii27@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, NULL, NULL, NULL),
(7, 'John Paul Malinao', 'malinaojohnpaul031@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, 'zFofjzbxx3ku0vtogRoXmV1RnpVX64HzILSdGd04XtnY9iomkbOnX2tnj3l9', NULL, NULL),
(8, 'Ryan Riogelon', 'yhona14riogelon@yahoo.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, NULL, NULL, NULL),
(9, 'Eldezar Reyes', 'razidle07@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, NULL, NULL, NULL),
(10, 'Joemer Banawa', 'joealakim@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '3', 0, '8nMikNZ0gPcX3gdr7K09Ykp9BQLrfcNTCeK9EuuQWqtTGZIrQq7ViscFDYTo', NULL, NULL),
(11, 'Mary Joy', 'mary.joy@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '6', 0, NULL, NULL, NULL),
(12, 'Juharto Ponga', 'juharto.ponga@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '10', 0, NULL, NULL, NULL),
(13, 'Wahida Ponga', 'wahida.ponga@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW', '12', 0, NULL, NULL, NULL),
(14, 'John Joseph Lazatin', 'johnjoseph16@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$ljebNqkVBS8S3QRboUkKq.4P6QfrYLSYSFRVDR1LysQ7PdUi2dIA2', '3', 0, 'lLuwBQEgET8G8ksPPS4zsGXCj9VTfREyXdnZbdkoO0rgyMIGP2xBF6GvjsTp', '2018-09-20 16:11:37', '2018-09-20 17:31:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activation_codes`
--
ALTER TABLE `activation_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `activation_codes_code_unique` (`code`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_breakdown`
--
ALTER TABLE `package_breakdown`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `package_breakdown_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activation_codes`
--
ALTER TABLE `activation_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package_breakdown`
--
ALTER TABLE `package_breakdown`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
