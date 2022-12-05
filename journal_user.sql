-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 05, 2022 at 06:44 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `capoeira`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal_user`
--

CREATE TABLE `journal_user` (
  `id` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `username` varchar(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal_user`
--

INSERT INTO `journal_user` (`id`, `password`, `username`, `first_name`, `last_name`) VALUES
(1, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gilson', '1234', 'Batista'),
(4, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Angola', 'Minas', 'Brazil'),
(5, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'novo', 'Novo', 'Novo'),
(6, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Mandinga', 'minas', 'bh'),
(7, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'angoleiro', 'brasil', 'brasil'),
(8, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Dog', 'bark', 'lik'),
(9, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'susan', 'gilson', 'batista'),
(10, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'cat', 'dog', 'bark'),
(11, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'galo', 'galo', 'galo'),
(12, 'd3b0ef1f2f06b82b9f92e376080c3f46f9112cc8', 'gelo', '1234', 'cigano'),
(13, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Elza', 'batista', 'batista'),
(14, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', ' new#2', ' gilson', ' batista'),
(17, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira', 'Gilson', ' batista'),
(18, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira1', 'student', ' batista'),
(19, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'student1', 'student', 'batista'),
(20, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira2', 'Gilson', 'Minas'),
(21, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gilson1', 'Gilson', 'asd'),
(22, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira3', 'Gilson', 'asf'),
(23, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira5', 'Brasil', 'asd'),
(24, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira12', 'Gilson', 'Batista'),
(25, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira23', 'Gilson', 'Batista'),
(26, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira32', 'Gilson', 'Batista'),
(27, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira11', 'Gilson', 'Batista'),
(29, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira434', 'Gilson', 'Batista'),
(30, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira123', '123', 'Batista'),
(31, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira43', 'Gilson', 'Batista'),
(32, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeira122', '1234', 'Batista'),
(33, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gilson12', 'Gilson', 'Batista'),
(34, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gilsonqw', 'Minas', 'Angola'),
(35, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gilsfsadf', 'Gilson', 'Batista'),
(36, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'gilsonqq', 'Gilson', 'Batista'),
(37, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'ElementLove', 'Minas', 'Angola'),
(38, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeiraqq', 'Minas', 'a'),
(39, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeiraqqq', 'Minas', 'a'),
(40, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Capoeiraaaa', 'Minas', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal_user`
--
ALTER TABLE `journal_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal_user`
--
ALTER TABLE `journal_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
