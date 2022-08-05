-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 11:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_niagahoster`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `id_parent` int(5) NOT NULL,
  `is_active` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `menu_name`, `link`, `id_parent`, `is_active`) VALUES
(1, 'Hosting', '#hosting', 0, 1),
(2, 'Domain', '#domain', 0, 1),
(3, 'Server', '#server', 0, 1),
(4, 'Website', '#website', 0, 1),
(5, 'Afiliasi', '#afiliasi', 0, 1),
(6, 'Promo', '#promo', 0, 1),
(7, 'Pembayaran', '#pembayaran', 0, 1),
(8, 'Review', '#review', 0, 1),
(9, 'Kontak', '#kontak', 0, 1),
(10, 'Blog', '#blog', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `backup_services` varchar(50) NOT NULL,
  `bandwidth_space` varchar(50) NOT NULL,
  `best_seller` varchar(50) NOT NULL,
  `db_space` varchar(50) NOT NULL,
  `default_price` int(100) NOT NULL,
  `disk_space` varchar(50) NOT NULL,
  `domain_addon` varchar(50) NOT NULL,
  `domain_services` varchar(50) NOT NULL,
  `end_date` date NOT NULL,
  `mail_protection` varchar(50) NOT NULL,
  `member_registered` int(10) NOT NULL,
  `name_server` varchar(50) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `pop3_mail` varchar(50) NOT NULL,
  `prom_price` varchar(10) NOT NULL,
  `prom_price_sup` varchar(10) NOT NULL,
  `promo_price` int(10) NOT NULL,
  `rsc_power` varchar(50) NOT NULL,
  `ssl_services` varchar(50) NOT NULL,
  `star` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `support_services` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `backup_services`, `bandwidth_space`, `best_seller`, `db_space`, `default_price`, `disk_space`, `domain_addon`, `domain_services`, `end_date`, `mail_protection`, `member_registered`, `name_server`, `package_name`, `pop3_mail`, `prom_price`, `prom_price_sup`, `promo_price`, `rsc_power`, `ssl_services`, `star`, `start_date`, `support_services`) VALUES
(1, 'Instant', 'Unlimited', '', 'Unlimited', 19900, '500 MB', '1', '', '0000-00-00', '', 938, '', 'Bayi', '', '14', '900', 14900, '0.5X', 'Unlimited SSL', 0, '0000-00-00', ''),
(2, 'Instant', 'Unlimited', '', 'Unlimited', 46900, 'Unlimited', '10', 'Domain Gratis', '0000-00-00', '', 4168, '', 'Pelajar', 'Unlimited', '23', '450', 23450, '1X', 'Unlimited SSL', 0, '0000-00-00', ''),
(3, 'Instant', 'Unlimited', '1', 'Unlimited', 58900, 'Unlimited', 'Unlimited', 'Domain Gratis', '0000-00-00', 'SpamAssasin', 10017, 'Private', 'Personal', 'Unlimited', '38', '900', 38900, '2X', 'Unlimited SSL', 0, '0000-00-00', ''),
(4, 'Magic Auto', 'Unlimited', '0', 'Unlimited', 109900, 'Unlimited', 'Unlimited', 'DomainGratis', '0000-00-00', 'SpamExpert', 3552, 'Private', 'Bisnis', 'Unlimited', '65', '900', 65900, '3X', 'Unlimited SSL', 5, '0000-00-00', 'Prioritas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
