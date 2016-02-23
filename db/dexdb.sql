-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 01:42 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dexdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
  `bidID` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `debtId` int(11) NOT NULL,
  PRIMARY KEY (`bidID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `debts`
--

CREATE TABLE IF NOT EXISTS `debts` (
  `debtId` int(11) NOT NULL AUTO_INCREMENT,
  `creditorId` int(11) NOT NULL,
  `debtorName` varchar(255) NOT NULL,
  `debtorPhone` varchar(20) NOT NULL,
  `debtorEmail` varchar(254) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `amount` int(11) NOT NULL,
  `maturityDate` date NOT NULL,
  `summary` text NOT NULL,
  `supportingDocs` varchar(255) NOT NULL,
  `closedBid` enum('open','closed') NOT NULL,
  `closedDebt` enum('open','closed') NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`debtId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `debts`
--

INSERT INTO `debts` (`debtId`, `creditorId`, `debtorName`, `debtorPhone`, `debtorEmail`, `currency`, `amount`, `maturityDate`, `summary`, `supportingDocs`, `closedBid`, `closedDebt`, `dateCreated`, `dateModified`) VALUES
(1, 0, '$debtor', '$contact', '$email', '', 0, '0000-00-00', '$debtDescription', '$docDir', 'open', 'open', '2016-02-10 16:45:08', '2016-02-10 16:45:08'),
(2, 0, 'WIldon', '', '', '', 0, '0000-00-00', 'ikhnuiefhovulerjs', 'uploads', 'open', 'open', '2016-02-10 16:46:15', '2016-02-10 16:46:15'),
(3, 0, 'WIldon', '', '', '', 0, '0000-00-00', 'ikhnuiefhovulerjs', 'uploads', 'open', 'open', '2016-02-10 16:46:27', '2016-02-10 16:46:27'),
(4, 0, 'WIldon', '', '', '', 0, '0000-00-00', '', 'uploads', 'open', 'open', '2016-02-10 16:53:43', '2016-02-10 16:53:43'),
(5, 0, 'WIldon', '', '', '', 0, '0000-00-00', '', 'uploads', 'open', 'open', '2016-02-10 16:54:23', '2016-02-10 16:54:23'),
(6, 0, 'WIldon', '', '', '', 0, '0000-00-00', '', 'uploads', 'open', 'open', '2016-02-10 17:09:12', '2016-02-10 17:09:12'),
(7, 0, 'WIldon', '', '', '', 0, '0000-00-00', '', 'uploads', 'open', 'open', '2016-02-10 17:09:25', '2016-02-10 17:09:25'),
(8, 0, 'WIldon', '', '', '', 0, '0000-00-00', 'jgmbiojoceijpmoibejijmv', 'uploads', 'open', 'open', '2016-02-10 17:12:29', '2016-02-10 17:12:29'),
(9, 0, 'WIldon', '', '', '', 0, '0000-00-00', 'jgmbiojoceijp moibejijmv', 'uploads', 'open', 'open', '2016-02-10 17:12:36', '2016-02-10 17:12:36'),
(10, 0, '', '', '', '', 0, '0000-00-00', '', 'uploads', 'open', 'open', '2016-02-10 17:18:46', '2016-02-10 17:18:46'),
(11, 0, '', '', '', '', 0, '0000-00-00', '', 'uploads', 'open', 'open', '2016-02-10 17:18:53', '2016-02-10 17:18:53'),
(12, 0, 'WIldon', '', '', '', 0, '0000-00-00', 'ksnrvuneivn', 'uploads', 'open', 'open', '2016-02-10 17:20:21', '2016-02-10 17:20:21'),
(13, 0, 'WIldon', '', '', '', 0, '0000-00-00', 'ksnrvuneivn', 'uploads', 'open', 'open', '2016-02-10 17:20:28', '2016-02-10 17:20:28'),
(14, 0, 'WIldon', '1234567890', '', '', 0, '0000-00-00', 'jfvkjjkfv', 'uploads', 'open', 'open', '2016-02-10 17:27:50', '2016-02-10 17:27:50'),
(15, 0, 'WIldon', '1234567890', '', '', 0, '0000-00-00', 'jfvkjjkfv', 'uploads', 'open', 'open', '2016-02-10 17:28:01', '2016-02-10 17:28:01'),
(16, 0, 'WIldonandKwelny', '2345678900', 'h@k.com', '', 0, '0000-00-00', 'uevniunmf', 'uploads', 'open', 'open', '2016-02-10 17:30:37', '2016-02-10 17:30:37'),
(17, 0, 'WIldonandKwelny', '2345678900', 'h@k.com', '', 0, '0000-00-00', 'uevniunmf', 'uploads', 'open', 'open', '2016-02-10 17:30:47', '2016-02-10 17:30:47'),
(18, 0, 'WIldon', '098765432', 'k@j.com', '', 0, '0000-00-00', 'ixnbdiufn', 'uploads', 'open', 'open', '2016-02-10 17:31:44', '2016-02-10 17:31:44'),
(19, 0, 'WIldonandKwelny', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Business plan preparation', 'uploads', 'open', 'open', '2016-02-10 17:41:28', '2016-02-10 17:41:28'),
(20, 0, 'WIldonandKwelny', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Business plan preparation', 'uploads', 'open', 'open', '2016-02-10 17:44:04', '2016-02-10 17:44:04'),
(21, 0, 'WIldonandKwelny', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Business plan preparation', 'uploads', 'open', 'open', '2016-02-10 17:46:15', '2016-02-10 17:46:15'),
(22, 0, 'WildonandKelny Advisors Ltd', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Kwabena took a loan', 'uploads', 'open', 'open', '2016-02-10 17:50:35', '2016-02-10 17:50:35'),
(23, 0, 'zjvbhn', '45678', 'yf@yh.com', '', 0, '0000-00-00', 'yfukvnf', 'uploads', 'open', 'open', '2016-02-10 18:02:50', '2016-02-10 18:02:50'),
(24, 1, 'Nifty Lad Animation Studios', '0987654321', 'obed@nifty.com', '', 0, '0000-00-00', 'ujgbefuvbkev', 'uploads', 'open', 'open', '2016-02-10 20:25:44', '2016-02-10 20:25:44'),
(25, 1, 'Jude Novor', '234567890', 'j_norvor@gmail.com', '', 0, '0000-00-00', 'For continuing bleach anime', 'uploads', 'open', 'open', '2016-02-10 20:28:45', '2016-02-10 20:28:45'),
(26, 1, 'kndf njn', '2345678', 'jfju@jfj.com', '', 0, '0000-00-00', 'jerskbuhyvn', 'uploads', 'open', 'open', '2016-02-10 20:42:25', '2016-02-10 20:42:25'),
(27, 1, 'tbhtgt', '2345678', 'vhy@tyerg.com', '', 0, '0000-00-00', 'ukygrbyhtrui', 'uploads', 'open', 'open', '2016-02-10 21:06:58', '2016-02-10 21:06:58'),
(28, 1, 'tbhtgt', '2345678', 'vhy@tyerg.com', '', 0, '0000-00-00', 'ukygrbyhtrui', 'uploads', 'open', 'open', '2016-02-10 21:07:13', '2016-02-10 21:07:13'),
(29, 1, 'me', '777', 'hy@yh.com', '', 0, '0000-00-00', 'jnfhfdjn', 'uploads', 'open', 'open', '2016-02-10 21:09:09', '2016-02-10 21:09:09'),
(30, 1, 'me', '777', 'hy@yh.com', '', 0, '0000-00-00', 'jnfhfdjn', 'uploads', 'open', 'open', '2016-02-10 21:09:23', '2016-02-10 21:09:23'),
(31, 1, 'me', '777', 'hy@yh.com', '', 0, '0000-00-00', 'jnfhfdjn', 'uploads', 'open', 'open', '2016-02-10 21:10:20', '2016-02-10 21:10:20'),
(32, 1, 'me', '777', 'hy@yh.com', '', 0, '0000-00-00', 'jnfhfdjn', 'uploads', 'open', 'open', '2016-02-10 21:10:22', '2016-02-10 21:10:22'),
(33, 102, 'me', '777', 'hy@yh.com', '', 0, '0000-00-00', 'jnfhfdjn', 'uploads', 'open', 'open', '2016-02-10 21:31:22', '2016-02-10 21:31:22'),
(34, 102, 'WIldonandKwelny', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Business plan preparation', 'uploads', 'open', 'open', '2016-02-11 00:10:43', '2016-02-11 00:10:43'),
(35, 102, 'WIldonandKwelny', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Business plan preparation', 'uploads', 'open', 'open', '2016-02-11 00:11:17', '2016-02-11 00:11:17'),
(36, 102, 'WIldonandKwelny', '0987654321', 'wildonandkwelny@gmail.com', '', 0, '0000-00-00', 'Business plan preparation', 'uploads', 'open', 'open', '2016-02-11 00:11:32', '2016-02-11 00:11:32'),
(37, 102, 'nvfidn', '2345678', 'vfnh@yvgsgb.com', '', 0, '0000-00-00', 'ubfbuhfd', 'uploads', 'open', 'open', '2016-02-11 00:12:36', '2016-02-11 00:12:36'),
(38, 102, 'nvfidn', '2345678', 'vfnh@yvgsgb.com', '', 0, '0000-00-00', 'ubfbuhfd', 'uploads', 'open', 'open', '2016-02-11 00:12:44', '2016-02-11 00:12:44'),
(39, 102, 'rfhb', '34567', 'hfdh@jr.com', '', 0, '0000-00-00', 'htvwyjvbcerjybybv', 'upload/undefined', 'open', 'open', '2016-02-11 15:56:56', '2016-02-11 15:56:56'),
(40, 102, 'rfhb', '34567', 'hfdh@jr.com', '', 0, '0000-00-00', 'htvwyjvbc erjybybv', 'upload/undefined', 'open', 'open', '2016-02-11 15:57:07', '2016-02-11 15:57:07'),
(41, 102, 'iulfniuvn', '23456', 'ndfn@dnf.com', '', 0, '0000-00-00', 'invilnwn', 'uploads/undefined', 'open', 'open', '2016-02-11 16:05:21', '2016-02-11 16:05:21'),
(42, 102, '', '', '', '', 0, '0000-00-00', 'nutnbuibitnbiunbltnbntinbunstrngbiunniuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuunutnbuibitnbiunbltnbntinbunstrngbiunniuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuunutnbuibitnbiunbltnbntinbunstrngbiunniuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 'uploads/undefined', 'open', 'open', '2016-02-11 16:20:09', '2016-02-11 16:20:09'),
(43, 102, 'bdfbdf', '7654', 'gd@df.com', '', 0, '0000-00-00', 'ttbdb', 'uploads/undefined', 'open', 'open', '2016-02-11 16:32:58', '2016-02-11 16:32:58'),
(44, 102, 'bdfbdf', '7654', 'gd@df.com', '', 0, '0000-00-00', 'ttbdb', 'uploads/undefined', 'open', 'open', '2016-02-11 16:33:25', '2016-02-11 16:33:25'),
(45, 26, 'Frances', '0982341265', 'frances@ashesi.com', '', 1000000, '0000-00-00', 'Website', 'uploads/undefined', 'open', 'open', '2016-02-12 14:42:28', '2016-02-12 14:42:28'),
(46, 26, 'Frances', '0982341265', 'frances@ashesi.com', '', 1000000, '0000-00-00', 'Website', 'uploads/undefined', 'open', 'open', '2016-02-12 14:42:40', '2016-02-12 14:42:40'),
(47, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:47:04', '2016-02-12 14:47:04'),
(48, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:47:19', '2016-02-12 14:47:19'),
(49, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:49:26', '2016-02-12 14:49:26'),
(50, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:49:27', '2016-02-12 14:49:27'),
(51, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:49:28', '2016-02-12 14:49:28'),
(52, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:49:28', '2016-02-12 14:49:28'),
(53, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 14:56:08', '2016-02-12 14:56:08'),
(54, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 15:27:32', '2016-02-12 15:27:32'),
(55, 102, 'Jude Norvor', '020555987', 'judenorvor@gmail.com', '2', 123456789, '0000-00-00', 'Clash of clans update', 'uploads/undefined', 'open', 'open', '2016-02-12 15:34:06', '2016-02-12 15:34:06'),
(56, 26, '', '', '', '', 0, '0000-00-00', '', 'uploads/undefined', 'open', 'open', '2016-02-15 13:21:41', '2016-02-15 13:21:41'),
(57, 26, 'gfnv', '876543', 'gf2fg@g.com', '2', 99999, '0000-00-00', 'gtdrhtfvyjgbukhnij', 'uploads/undefined', 'open', 'open', '2016-02-17 20:29:01', '2016-02-17 20:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `factors`
--

CREATE TABLE IF NOT EXISTS `factors` (
  `factorId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `debtId` int(11) NOT NULL,
  PRIMARY KEY (`factorId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userType` enum('Individual','Business') NOT NULL,
  `businessName` varchar(255) DEFAULT NULL,
  `sector` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(33) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateModified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `businessName`, `sector`, `firstName`, `lastName`, `phone`, `email`, `password`, `dateCreated`, `dateModified`) VALUES
(1, 'Individual', '', 'Agric', 'Judah', 'King', '1234567890', 'judah_lafia@yahoo.com', '12345678909876543', '2016-01-23 20:55:27', '2016-01-23 20:55:27'),
(7, 'Individual', NULL, '3', 'Japheth', 'Kelly', '1234567890', 'j.k@terra.com', '0987654321', '2016-01-27 13:49:01', '2016-01-27 13:49:01'),
(26, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:38:38', '2016-01-28 15:38:38'),
(27, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:39:58', '2016-01-28 15:39:58'),
(28, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:40:32', '2016-01-28 15:40:32'),
(29, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:41:27', '2016-01-28 15:41:27'),
(30, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:46:02', '2016-01-28 15:46:02'),
(31, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:48:35', '2016-01-28 15:48:35'),
(32, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 15:49:38', '2016-01-28 15:49:38'),
(33, 'Business', '', '', '', '', '', '', '', '2016-01-28 15:51:16', '2016-01-28 15:51:16'),
(34, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 15:53:59', '2016-01-28 15:53:59'),
(35, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 15:54:48', '2016-01-28 15:54:48'),
(36, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 15:55:25', '2016-01-28 15:55:25'),
(37, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 15:57:05', '2016-01-28 15:57:05'),
(38, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 15:58:28', '2016-01-28 15:58:28'),
(39, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 16:01:16', '2016-01-28 16:01:16'),
(40, 'Business', '', '', '', '', '', '', '', '2016-01-28 16:04:14', '2016-01-28 16:04:14'),
(41, 'Business', '', '', '', '', '', '', '', '2016-01-28 16:09:05', '2016-01-28 16:09:05'),
(42, 'Business', '', '', '', '', '', '', '', '2016-01-28 16:09:38', '2016-01-28 16:09:38'),
(43, 'Business', '', '', '', '', '', '', '', '2016-01-28 16:16:28', '2016-01-28 16:16:28'),
(44, 'Business', '', '', '', '', '', '', '', '2016-01-28 16:17:51', '2016-01-28 16:17:51'),
(45, 'Individual', NULL, '3', 'Japheth', 'Norvor', '234567890', 'judah@yahoo.com', '098765432', '2016-01-28 18:16:14', '2016-01-28 18:16:14'),
(46, 'Business', 'Dex', '1', 'Jude', 'Norvor', '12345678', 'j_norvor@gmail.com', '09876543', '2016-01-28 18:16:52', '2016-01-28 18:16:52'),
(47, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 18:18:59', '2016-01-28 18:18:59'),
(48, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 18:19:56', '2016-01-28 18:19:56'),
(49, 'Individual', NULL, '$sector', '$fname', '$lname', '$phone', '$email', '$password', '2016-01-28 18:22:40', '2016-01-28 18:22:40'),
(50, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 18:39:55', '2016-01-28 18:39:55'),
(51, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 18:40:10', '2016-01-28 18:40:10'),
(52, 'Business', '', '', '', '', '', '', '', '2016-01-28 18:40:18', '2016-01-28 18:40:18'),
(53, 'Individual', NULL, '3', 'Jude', 'Novor', '123456789', 'j_norvor@gmail.com', '098765432', '2016-01-28 20:14:11', '2016-01-28 20:14:11'),
(54, 'Individual', NULL, '', '', '', '', '', '', '2016-01-28 20:28:00', '2016-01-28 20:28:00'),
(55, 'Individual', NULL, '', '', '', '', '', '', '2016-01-29 19:27:52', '2016-01-29 19:27:52'),
(56, 'Individual', NULL, '', '22', '', '', '', '', '2016-01-29 19:36:30', '2016-01-29 19:36:30'),
(57, 'Individual', NULL, '', '', '', '', '', '', '2016-01-29 19:40:34', '2016-01-29 19:40:34'),
(58, 'Individual', NULL, '', '', '', '', '', '', '2016-01-29 19:41:13', '2016-01-29 19:41:13'),
(59, 'Individual', NULL, '', '', '', '', '', '', '2016-01-29 20:39:48', '2016-01-29 20:39:48'),
(60, 'Individual', NULL, '', '', '', '', '', '', '2016-01-29 20:56:14', '2016-01-29 20:56:14'),
(61, 'Individual', NULL, '', '', '', '', '', '', '2016-01-29 20:56:30', '2016-01-29 20:56:30'),
(62, 'Individual', NULL, '', '', '', '', '', '', '2016-02-02 20:46:30', '2016-02-02 20:46:30'),
(63, 'Individual', NULL, '', '', '', '', '', '', '2016-02-02 20:46:42', '2016-02-02 20:46:42'),
(64, 'Individual', NULL, '2', 'Randelle', 'Michel', '1234567890', 'rand@elle.com', '0987654321', '2016-02-02 23:12:03', '2016-02-02 23:12:03'),
(65, 'Individual', NULL, '2', 'Randelle', 'Michel', '1234567890', 'rand@elle.com', '0987654321', '2016-02-02 23:12:15', '2016-02-02 23:12:15'),
(66, 'Individual', NULL, '3', 'Joel', 'King', '0274801335', 'joel.lafia@yahoo.com', 'dadabuoy', '2016-02-03 21:14:48', '2016-02-03 21:14:48'),
(67, 'Individual', NULL, '2', 'Mercy', 'King', '8765432', 'nnfv@gmail.com', '25d55ad283aa400af464', '2016-02-03 21:17:50', '2016-02-03 21:17:50'),
(68, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-03 21:46:38', '2016-02-03 21:46:38'),
(69, 'Individual', NULL, '1', '', 'refg', '2345678', 'rgthr', '81b073de9370ea873f54', '2016-02-03 21:47:20', '2016-02-03 21:47:20'),
(70, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 12:56:28', '2016-02-04 12:56:28'),
(71, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 12:56:52', '2016-02-04 12:56:52'),
(72, 'Business', '', '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 12:58:41', '2016-02-04 12:58:41'),
(73, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 12:59:35', '2016-02-04 12:59:35'),
(74, 'Business', '', '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 13:00:01', '2016-02-04 13:00:01'),
(75, 'Business', '', '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 13:00:11', '2016-02-04 13:00:11'),
(76, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 13:00:18', '2016-02-04 13:00:18'),
(77, 'Business', '', '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 13:01:09', '2016-02-04 13:01:09'),
(78, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 13:50:13', '2016-02-04 13:50:13'),
(79, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 13:50:31', '2016-02-04 13:50:31'),
(80, 'Individual', NULL, '2', 'Frances', 'Wireko', '0987654321', 'fran@ces.com', 'abcefa6f0dfd332fa600', '2016-02-04 14:14:27', '2016-02-04 14:14:27'),
(81, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 14:18:00', '2016-02-04 14:18:00'),
(82, 'Individual', NULL, '3', 'Frances', 'Wireko', '98765432', 'fran@ces.com', 'e34a8899ef6468b74f8a', '2016-02-04 14:18:30', '2016-02-04 14:18:30'),
(83, 'Individual', NULL, '2', 'Henrietta', 'Boateng', '0242686115', 'boateng.henrietta@gmail.com', '569471347bc9e2e4593c', '2016-02-04 14:20:41', '2016-02-04 14:20:41'),
(84, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-04 14:22:23', '2016-02-04 14:22:23'),
(85, 'Individual', NULL, '', '', '', '', '', '', '2016-02-04 14:23:29', '2016-02-04 14:23:29'),
(86, 'Individual', NULL, '2', 'Frances', 'Wireko', '1234567', 'fran@ces.com', '1111', '2016-02-04 14:29:10', '2016-02-04 14:29:10'),
(87, 'Individual', NULL, '', '', '', '', '', '', '2016-02-04 19:07:36', '2016-02-04 19:07:36'),
(88, 'Individual', NULL, '', '', '', '', '', '', '2016-02-04 19:13:52', '2016-02-04 19:13:52'),
(89, 'Individual', NULL, '', '', '', '', '', '', '2016-02-04 19:14:33', '2016-02-04 19:14:33'),
(90, 'Individual', NULL, '', '', '', '', '', '', '2016-02-05 22:49:12', '2016-02-05 22:49:12'),
(91, 'Individual', NULL, '', '', '', '', '', '', '2016-02-09 14:12:16', '2016-02-09 14:12:16'),
(92, 'Individual', NULL, '', '', '', '', '', '', '2016-02-09 14:19:40', '2016-02-09 14:19:40'),
(93, 'Individual', NULL, '', '', '', '', '', '', '2016-02-09 14:22:41', '2016-02-09 14:22:41'),
(94, 'Individual', NULL, '', '', '', '', '', '', '2016-02-09 14:26:07', '2016-02-09 14:26:07'),
(95, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-09 14:34:45', '2016-02-09 14:34:45'),
(96, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-09 14:50:07', '2016-02-09 14:50:07'),
(97, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-09 14:50:26', '2016-02-09 14:50:26'),
(98, 'Individual', NULL, '', '', '', '', '', 'd41d8cd98f00b204e980', '2016-02-09 14:52:16', '2016-02-09 14:52:16'),
(99, 'Individual', NULL, '2', 'Judah', 'King', '222', 'judah@yahoo.com', 'c4ca4238a0b923820dcc', '2016-02-09 14:54:30', '2016-02-09 14:54:30'),
(100, 'Individual', NULL, '2', 'Judah', 'King', '234567890', 'judah@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2016-02-09 20:50:14', '2016-02-09 20:50:14'),
(101, 'Individual', NULL, '', '', '', '', 'j.k@terra.com', 'c4ca4238a0b923820dcc509a6f75849b', '2016-02-09 22:43:55', '2016-02-09 22:43:55'),
(102, 'Business', 'Nifty Lad Animation Studios', '2', 'Obed', 'Nsiah', '0987654321', 'obed@nifty.com', '81dc9bdb52d04dc20036dbd8313ed055', '2016-02-10 20:27:28', '2016-02-10 20:27:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
