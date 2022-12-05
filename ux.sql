-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2022 at 06:49 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `capoeira`
--

-- --------------------------------------------------------

--
-- Table structure for table `ux`
--

CREATE TABLE `ux` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ex` int(2) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ux`
--

INSERT INTO `ux` (`id`, `email`, `ex`, `text`) VALUES
(1, 'gbatista@madisoncollege.edu', 1, 'sdfsdfs dfgdfgd '),
(21, 'contactgbatista@gmail.com', 2, 'fasfrasfasfasfasfasfasfasfasfa'),
(22, 'contactgbatista@gmail.com', 2, 'asfdsfas asdfasfaasfafa\r\nasfas'),
(23, 'contactgbatista@gmail.com', 1, 'ono'),
(24, 'contactgbatista@gmail.com', 1, 'ono'),
(25, 'contactgbatista@gmail.com', 1, 'ono'),
(26, 'contactgbatista@gmail.com', 1, 'ono'),
(27, 'contactgbatista@gmail.com', 1, 'ono'),
(28, 'contactgbatista@gmail.com', 1, 'ono'),
(29, 'contactgbatista@gmail.com', 1, 'ono'),
(30, 'contactgbatista@gmail.com', 1, 'ono'),
(31, 'contactgbatista@gmail.com', 2, 'ghnsfghsfghsfghsfdghs s dfgb'),
(32, 'contactgbatista@gmail.com', 1, 'asdfgadfsgasdfg'),
(33, 'contactgbatista@gmail.com', 1, 'sfgnfsgn'),
(34, 'contactgbatista@gmail.com', 1, 'sfgnfsgn'),
(35, 'contactgbatista@gmail.com', 1, 'sfgnfsgn'),
(36, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(37, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(38, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(39, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(40, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(41, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(42, 'contactgbatista@gmail.com', 1, 'asdfaDa'),
(43, 'contactgbatista@gmail.com', 2, 'AXAS'),
(44, 'contactgbatista@gmail.com', 2, 'AXAS'),
(45, 'contactgbatista@gmail.com', 2, 'AXAS'),
(46, 'contactgbatista@gmail.com', 2, 'AXAS'),
(47, 'contactgbatista@gmail.com', 2, 'AXAS'),
(48, 'contactgbatista@gmail.com', 2, 'AXAS'),
(49, 'contactgbatista@gmail.com', 2, 'AXAS'),
(50, 'contactgbatista@gmail.com', 2, 'AXAS'),
(51, 'contactgbatista@gmail.com', 2, 'AXAS'),
(52, 'contactgbatista@gmail.com', 2, 'AXAS'),
(53, 'contactgbatista@gmail.com', 2, 'AXAS'),
(54, 'contactgbatista@gmail.com', 2, 'AXAS'),
(55, 'contactgbatista@gmail.com', 2, 'AXAS'),
(56, 'contactgbatista@gmail.com', 2, 'AXAS'),
(57, 'contactgbatista@gmail.com', 2, 'AXAS'),
(58, 'contactgbatista@gmail.com', 2, 'hello afsdasda'),
(59, 'contactgbatista@gmail.com', 2, 'fghjk'),
(60, 'contactgbatista@gmail.com', 2, 'fghjk'),
(61, 'contactgbatista@gmail.com', 2, 'fghjk'),
(62, 'contactgbatista@gmail.com', 2, 'fghjk'),
(63, 'contactgbatista@gmail.com', 2, 'fghjk'),
(64, 'contactgbatista@gmail.com', 2, 'fghjk'),
(65, 'contactgbatista@gmail.com', 2, 'fghjk'),
(66, 'contactgbatista@gmail.com', 2, 'fghjk'),
(67, 'contactgbatista@gmail.com', 2, 'fghjk'),
(68, 'contactgbatista@gmail.com', 2, 'fghjk'),
(69, 'contactgbatista@gmail.com', 2, 'fghjk'),
(70, 'contactgbatista@gmail.com', 2, 'fghjk'),
(71, 'contactgbatista@gmail.com', 2, 'fghjk'),
(72, 'contactgbatista@gmail.com', 2, 'fghjk'),
(73, 'contactgbatista@gmail.com', 2, 'fghjk'),
(74, 'contactgbatista@gmail.com', 2, 'fghjk'),
(75, 'contactgbatista@gmail.com', 2, 'fghjk'),
(76, 'contactgbatista@gmail.com', 2, 'fghjk'),
(77, 'contactgbatista@gmail.com', 2, 'fghjk'),
(78, 'contactgbatista@gmail.com', 2, 'fghjk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ux`
--
ALTER TABLE `ux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ux`
--
ALTER TABLE `ux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
