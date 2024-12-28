-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 01:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymnast`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `email` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`email`, `contact`, `message`) VALUES
('aditya@gmail.com', '8975690841', 'Hi, My name is Aditya. I liked your Gym very much. Thank You so much.'),
('om@gmail.com', '8205652890', 'Good Morning');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`email`, `address`, `gender`, `course`, `time`, `date`) VALUES
('aditya@gmail.com', 'deur', 'male', 'Advanced Muscle Cour', '8.00 AM - 11.00 AM', '2023-04-29'),
('jay@gmail.com', 'Satara', 'male', 'Yoga Training', '1.00 Pm - 4.00 PM', '2023-07-13'),
('om@gmail.com', 'Mumbai', 'male', 'Basic Fitness', '8.00 AM - 11.00 AM', '2023-04-30'),
('rocky@gmail.com', 'KGF', 'male', 'New Gym Training', '5.00 PM - 8.00 PM', '2023-04-28');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `contact`, `email`, `password`) VALUES
('aditya raje', '8975690841', 'aditya@gmail.com', '12345'),
('anna', '1020304050', 'anna@gmail.com', 'abcde'),
('anna dj', '7867890842', 'dj@gmail.com', 'abc'),
('jay mane', '7020716772', 'jay@gmail.com', '54321'),
('om bote', '1234567890', 'om@gmail.com', '321'),
('Omkar Nalwade', '7867890841', 'omkar@gmail.com', 'eeye'),
('Rocky Bhai', '1234567890', 'rocky@gmail.com', 'rocky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact` (`contact`);
ALTER TABLE `message` ADD FULLTEXT KEY `message` (`message`);
ALTER TABLE `message` ADD FULLTEXT KEY `message_2` (`message`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD UNIQUE KEY `contact` (`contact`,`email`,`password`),
  ADD UNIQUE KEY `name` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
