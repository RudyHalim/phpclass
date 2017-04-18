-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 04:36 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gameartis`
--
CREATE DATABASE IF NOT EXISTS `gameartis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gameartis`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_slug` varchar(20) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `ordering` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_slug`, `category_name`, `is_active`, `ordering`) VALUES
(1, 'aliando', 'Aliando', 'Y', 1),
(2, 'nikita-willy', 'Nikita Willy', 'Y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `ordering` int(2) NOT NULL,
  `game_slug` varchar(30) NOT NULL,
  `thumbnail` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_desc` varchar(180) NOT NULL,
  `long_desc` text NOT NULL,
  `game_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `category_id`, `is_active`, `ordering`, `game_slug`, `thumbnail`, `title`, `short_desc`, `long_desc`, `game_url`) VALUES
(1, 1, 'Y', 1, 'aliando-sky-hover', 'thumb_aliando.jpg', 'ALIANDO SKY HOVER', 'Ayo bantu Aliando untuk melewati rintangan-rintangan yang bakal dilewati dengan klik mouse kamu.', '<h2>Aliando Sky Hover Game</h2>\r\n		                                        <p>Disini kamu akan memainkan karakter Aliando untuk melewati rintangan-rintangan yang ada. Jangan sampai tertabrak rintangan nya atau kamu harus mengulangi lagi dari awal.</p>\r\n		                                        <p>Game ini hanya bagi kamu yang sudah terdaftar di layanan PT. Lingua. Klik disini untuk informasi lebih lanjut.</p>', 'http://manticoretesthtml5.esy.es/'),
(2, 2, 'Y', 2, 'nikita-sky-hover', 'thumb_aliando.jpg', 'NIKITA SKY HOVER', 'Ayo bantu Aliando untuk melewati rintangan-rintangan yang bakal dilewati dengan klik mouse kamu.', '<h2>Aliando Sky Hover Game</h2>\r\n		                                        <p>Disini kamu akan memainkan karakter Aliando untuk melewati rintangan-rintangan yang ada. Jangan sampai tertabrak rintangan nya atau kamu harus mengulangi lagi dari awal.</p>\r\n		                                        <p>Game ini hanya bagi kamu yang sudah terdaftar di layanan PT. Lingua. Klik disini untuk informasi lebih lanjut.</p>', 'http://manticoretesthtml5.esy.es/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;