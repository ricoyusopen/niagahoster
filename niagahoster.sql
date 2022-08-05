-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 06:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niagahoster`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `default_price` int(15) NOT NULL,
  `promo_price` int(15) NOT NULL,
  `member_registered` int(11) NOT NULL,
  `rsc_power` varchar(10) NOT NULL,
  `disk_space` varchar(50) NOT NULL,
  `bandwidth_space` varchar(50) NOT NULL,
  `pop3_mail` varchar(50) NOT NULL,
  `db_space` varchar(50) NOT NULL,
  `domain_addon` varchar(10) NOT NULL,
  `backup_services` varchar(50) NOT NULL,
  `domain_services` varchar(50) NOT NULL,
  `ssl_services` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `name_server` varchar(100) NOT NULL,
  `support_services` varchar(100) NOT NULL,
  `star` int(1) NOT NULL,
  `mail_protection` varchar(100) NOT NULL,
  `best_seller` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_paket`
--

INSERT INTO `tb_paket` (`id`, `package_name`, `default_price`, `promo_price`, `member_registered`, `rsc_power`, `disk_space`, `bandwidth_space`, `pop3_mail`, `db_space`, `domain_addon`, `backup_services`, `domain_services`, `ssl_services`, `start_date`, `end_date`, `name_server`, `support_services`, `star`, `mail_protection`, `best_seller`) VALUES
(1, 'Bayi', 19900, 14900, 938, '0.5X', '500 MB', 'Unlimited', '', 'Unlimited', '1', 'Instant Backup', '', 'Unlimited SSL Gratis', '2020-11-15', '0000-00-00', '', '', 0, '', ''),
(2, 'Pelajar', 46900, 23450, 4168, '1X', 'Unlimited', 'Unlimited', '', 'Unlimited', '10 Addon', 'Instant Backup', 'Domain Gratis Selamanya', 'Unlimited SSL Gratis Selamanya', '2020-11-15', '0000-00-00', '', '', 0, '', ''),
(3, 'Personal', 58900, 38900, 10017, '2X', 'Unlimited', 'Unlimited', '', 'Unlimited', 'Unlimited', 'Instant Backup', 'Domain Gratis Selamanya', 'Unlimited SSL Gratis Selamanya', '2020-11-15', '0000-00-00', 'Private Name Server', '', 0, 'SpamAssasin Mail Protection', '1'),
(4, 'Bisnis', 109900, 65900, 3552, '3X', 'Unlimited', 'Unlimited', 'Unlimited', 'Unlimited', 'Unlimited', 'Magic Auto Backup & Restore', 'Domain Gratis Selamanya', 'Unlimited SSL Gratis Selamanya', '2020-11-15', '0000-00-00', 'Private Name Server', 'Prioritas', 5, 'SpamExpert Pro Mail Protection', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
